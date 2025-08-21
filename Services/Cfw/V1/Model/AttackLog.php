<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AttackLog implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AttackLog';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * action  **参数解释**： 动作 **取值范围**： 不涉及
    * app  **参数解释**： 应用 **取值范围**： 不涉及
    * attackRule  **参数解释**： 攻击规则 **取值范围**： 不涉及
    * attackRuleId  **参数解释**： 攻击规则ID **取值范围**： 不涉及
    * attackType  **参数解释**： 攻击类型 **取值范围**： 不涉及
    * direction  **参数解释**： 攻击方向 **取值范围**： 不涉及
    * dstIp  **参数解释**： 目的IP **取值范围**： 不涉及
    * dstPort  **参数解释**： 目的端口 **取值范围**： 不涉及
    * dstRegionId  **参数解释**： 目的地区Id **取值范围**： 不涉及
    * dstRegionName  **参数解释**： 目的地区名称 **取值范围**： 不涉及
    * dstProvinceId  **参数解释**： 目的省份ID **取值范围**： 不涉及
    * dstProvinceName  **参数解释**： 目的省份名称 **取值范围**： 不涉及
    * dstCityId  **参数解释**： 目的城市Id **取值范围**： 不涉及
    * dstCityName  **参数解释**： 目的城市名称 **取值范围**： 不涉及
    * eventTime  **参数解释**： 发生时间 **取值范围**： 不涉及
    * level  **参数解释**： 危险等级 **取值范围**： 不涉及
    * protocol  **参数解释**： 协议 **取值范围**： 不涉及
    * source  **参数解释**： 来源 **取值范围**： 不涉及
    * srcIp  **参数解释**： 源IP **取值范围**： 不涉及
    * realIp  **参数解释**： 真实IP **取值范围**： 不涉及
    * tag  **参数解释**： 标签 **取值范围**： 不涉及
    * srcPort  **参数解释**： 源端口 **取值范围**： 不涉及
    * srcRegionId  **参数解释**： 源地区Id **取值范围**： 不涉及
    * srcRegionName  **参数解释**： 源地区名称 **取值范围**： 不涉及
    * srcProvinceId  **参数解释**： 源省份Id **取值范围**： 不涉及
    * srcProvinceName  **参数解释**： 源省份名称 **取值范围**： 不涉及
    * srcCityId  **参数解释**： 源城市Id **取值范围**： 不涉及
    * srcCityName  **参数解释**： 源城市 **取值范围**： 不涉及
    * vgwId  **参数解释**： VGW Id **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'action' => 'string',
            'app' => 'string',
            'attackRule' => 'string',
            'attackRuleId' => 'string',
            'attackType' => 'string',
            'direction' => 'string',
            'dstIp' => 'string',
            'dstPort' => 'int',
            'dstRegionId' => 'string',
            'dstRegionName' => 'string',
            'dstProvinceId' => 'string',
            'dstProvinceName' => 'string',
            'dstCityId' => 'string',
            'dstCityName' => 'string',
            'eventTime' => 'int',
            'level' => 'string',
            'protocol' => 'string',
            'source' => 'string',
            'srcIp' => 'string',
            'realIp' => 'string',
            'tag' => 'int',
            'srcPort' => 'int',
            'srcRegionId' => 'string',
            'srcRegionName' => 'string',
            'srcProvinceId' => 'string',
            'srcProvinceName' => 'string',
            'srcCityId' => 'string',
            'srcCityName' => 'string',
            'vgwId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * action  **参数解释**： 动作 **取值范围**： 不涉及
    * app  **参数解释**： 应用 **取值范围**： 不涉及
    * attackRule  **参数解释**： 攻击规则 **取值范围**： 不涉及
    * attackRuleId  **参数解释**： 攻击规则ID **取值范围**： 不涉及
    * attackType  **参数解释**： 攻击类型 **取值范围**： 不涉及
    * direction  **参数解释**： 攻击方向 **取值范围**： 不涉及
    * dstIp  **参数解释**： 目的IP **取值范围**： 不涉及
    * dstPort  **参数解释**： 目的端口 **取值范围**： 不涉及
    * dstRegionId  **参数解释**： 目的地区Id **取值范围**： 不涉及
    * dstRegionName  **参数解释**： 目的地区名称 **取值范围**： 不涉及
    * dstProvinceId  **参数解释**： 目的省份ID **取值范围**： 不涉及
    * dstProvinceName  **参数解释**： 目的省份名称 **取值范围**： 不涉及
    * dstCityId  **参数解释**： 目的城市Id **取值范围**： 不涉及
    * dstCityName  **参数解释**： 目的城市名称 **取值范围**： 不涉及
    * eventTime  **参数解释**： 发生时间 **取值范围**： 不涉及
    * level  **参数解释**： 危险等级 **取值范围**： 不涉及
    * protocol  **参数解释**： 协议 **取值范围**： 不涉及
    * source  **参数解释**： 来源 **取值范围**： 不涉及
    * srcIp  **参数解释**： 源IP **取值范围**： 不涉及
    * realIp  **参数解释**： 真实IP **取值范围**： 不涉及
    * tag  **参数解释**： 标签 **取值范围**： 不涉及
    * srcPort  **参数解释**： 源端口 **取值范围**： 不涉及
    * srcRegionId  **参数解释**： 源地区Id **取值范围**： 不涉及
    * srcRegionName  **参数解释**： 源地区名称 **取值范围**： 不涉及
    * srcProvinceId  **参数解释**： 源省份Id **取值范围**： 不涉及
    * srcProvinceName  **参数解释**： 源省份名称 **取值范围**： 不涉及
    * srcCityId  **参数解释**： 源城市Id **取值范围**： 不涉及
    * srcCityName  **参数解释**： 源城市 **取值范围**： 不涉及
    * vgwId  **参数解释**： VGW Id **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'action' => null,
        'app' => null,
        'attackRule' => null,
        'attackRuleId' => null,
        'attackType' => null,
        'direction' => null,
        'dstIp' => null,
        'dstPort' => 'int32',
        'dstRegionId' => null,
        'dstRegionName' => null,
        'dstProvinceId' => null,
        'dstProvinceName' => null,
        'dstCityId' => null,
        'dstCityName' => null,
        'eventTime' => 'int64',
        'level' => null,
        'protocol' => null,
        'source' => null,
        'srcIp' => null,
        'realIp' => null,
        'tag' => 'int32',
        'srcPort' => 'int32',
        'srcRegionId' => null,
        'srcRegionName' => null,
        'srcProvinceId' => null,
        'srcProvinceName' => null,
        'srcCityId' => null,
        'srcCityName' => null,
        'vgwId' => null
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
    * attackRule  **参数解释**： 攻击规则 **取值范围**： 不涉及
    * attackRuleId  **参数解释**： 攻击规则ID **取值范围**： 不涉及
    * attackType  **参数解释**： 攻击类型 **取值范围**： 不涉及
    * direction  **参数解释**： 攻击方向 **取值范围**： 不涉及
    * dstIp  **参数解释**： 目的IP **取值范围**： 不涉及
    * dstPort  **参数解释**： 目的端口 **取值范围**： 不涉及
    * dstRegionId  **参数解释**： 目的地区Id **取值范围**： 不涉及
    * dstRegionName  **参数解释**： 目的地区名称 **取值范围**： 不涉及
    * dstProvinceId  **参数解释**： 目的省份ID **取值范围**： 不涉及
    * dstProvinceName  **参数解释**： 目的省份名称 **取值范围**： 不涉及
    * dstCityId  **参数解释**： 目的城市Id **取值范围**： 不涉及
    * dstCityName  **参数解释**： 目的城市名称 **取值范围**： 不涉及
    * eventTime  **参数解释**： 发生时间 **取值范围**： 不涉及
    * level  **参数解释**： 危险等级 **取值范围**： 不涉及
    * protocol  **参数解释**： 协议 **取值范围**： 不涉及
    * source  **参数解释**： 来源 **取值范围**： 不涉及
    * srcIp  **参数解释**： 源IP **取值范围**： 不涉及
    * realIp  **参数解释**： 真实IP **取值范围**： 不涉及
    * tag  **参数解释**： 标签 **取值范围**： 不涉及
    * srcPort  **参数解释**： 源端口 **取值范围**： 不涉及
    * srcRegionId  **参数解释**： 源地区Id **取值范围**： 不涉及
    * srcRegionName  **参数解释**： 源地区名称 **取值范围**： 不涉及
    * srcProvinceId  **参数解释**： 源省份Id **取值范围**： 不涉及
    * srcProvinceName  **参数解释**： 源省份名称 **取值范围**： 不涉及
    * srcCityId  **参数解释**： 源城市Id **取值范围**： 不涉及
    * srcCityName  **参数解释**： 源城市 **取值范围**： 不涉及
    * vgwId  **参数解释**： VGW Id **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'action' => 'action',
            'app' => 'app',
            'attackRule' => 'attack_rule',
            'attackRuleId' => 'attack_rule_id',
            'attackType' => 'attack_type',
            'direction' => 'direction',
            'dstIp' => 'dst_ip',
            'dstPort' => 'dst_port',
            'dstRegionId' => 'dst_region_id',
            'dstRegionName' => 'dst_region_name',
            'dstProvinceId' => 'dst_province_id',
            'dstProvinceName' => 'dst_province_name',
            'dstCityId' => 'dst_city_id',
            'dstCityName' => 'dst_city_name',
            'eventTime' => 'event_time',
            'level' => 'level',
            'protocol' => 'protocol',
            'source' => 'source',
            'srcIp' => 'src_ip',
            'realIp' => 'real_ip',
            'tag' => 'tag',
            'srcPort' => 'src_port',
            'srcRegionId' => 'src_region_id',
            'srcRegionName' => 'src_region_name',
            'srcProvinceId' => 'src_province_id',
            'srcProvinceName' => 'src_province_name',
            'srcCityId' => 'src_city_id',
            'srcCityName' => 'src_city_name',
            'vgwId' => 'vgw_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * action  **参数解释**： 动作 **取值范围**： 不涉及
    * app  **参数解释**： 应用 **取值范围**： 不涉及
    * attackRule  **参数解释**： 攻击规则 **取值范围**： 不涉及
    * attackRuleId  **参数解释**： 攻击规则ID **取值范围**： 不涉及
    * attackType  **参数解释**： 攻击类型 **取值范围**： 不涉及
    * direction  **参数解释**： 攻击方向 **取值范围**： 不涉及
    * dstIp  **参数解释**： 目的IP **取值范围**： 不涉及
    * dstPort  **参数解释**： 目的端口 **取值范围**： 不涉及
    * dstRegionId  **参数解释**： 目的地区Id **取值范围**： 不涉及
    * dstRegionName  **参数解释**： 目的地区名称 **取值范围**： 不涉及
    * dstProvinceId  **参数解释**： 目的省份ID **取值范围**： 不涉及
    * dstProvinceName  **参数解释**： 目的省份名称 **取值范围**： 不涉及
    * dstCityId  **参数解释**： 目的城市Id **取值范围**： 不涉及
    * dstCityName  **参数解释**： 目的城市名称 **取值范围**： 不涉及
    * eventTime  **参数解释**： 发生时间 **取值范围**： 不涉及
    * level  **参数解释**： 危险等级 **取值范围**： 不涉及
    * protocol  **参数解释**： 协议 **取值范围**： 不涉及
    * source  **参数解释**： 来源 **取值范围**： 不涉及
    * srcIp  **参数解释**： 源IP **取值范围**： 不涉及
    * realIp  **参数解释**： 真实IP **取值范围**： 不涉及
    * tag  **参数解释**： 标签 **取值范围**： 不涉及
    * srcPort  **参数解释**： 源端口 **取值范围**： 不涉及
    * srcRegionId  **参数解释**： 源地区Id **取值范围**： 不涉及
    * srcRegionName  **参数解释**： 源地区名称 **取值范围**： 不涉及
    * srcProvinceId  **参数解释**： 源省份Id **取值范围**： 不涉及
    * srcProvinceName  **参数解释**： 源省份名称 **取值范围**： 不涉及
    * srcCityId  **参数解释**： 源城市Id **取值范围**： 不涉及
    * srcCityName  **参数解释**： 源城市 **取值范围**： 不涉及
    * vgwId  **参数解释**： VGW Id **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'action' => 'setAction',
            'app' => 'setApp',
            'attackRule' => 'setAttackRule',
            'attackRuleId' => 'setAttackRuleId',
            'attackType' => 'setAttackType',
            'direction' => 'setDirection',
            'dstIp' => 'setDstIp',
            'dstPort' => 'setDstPort',
            'dstRegionId' => 'setDstRegionId',
            'dstRegionName' => 'setDstRegionName',
            'dstProvinceId' => 'setDstProvinceId',
            'dstProvinceName' => 'setDstProvinceName',
            'dstCityId' => 'setDstCityId',
            'dstCityName' => 'setDstCityName',
            'eventTime' => 'setEventTime',
            'level' => 'setLevel',
            'protocol' => 'setProtocol',
            'source' => 'setSource',
            'srcIp' => 'setSrcIp',
            'realIp' => 'setRealIp',
            'tag' => 'setTag',
            'srcPort' => 'setSrcPort',
            'srcRegionId' => 'setSrcRegionId',
            'srcRegionName' => 'setSrcRegionName',
            'srcProvinceId' => 'setSrcProvinceId',
            'srcProvinceName' => 'setSrcProvinceName',
            'srcCityId' => 'setSrcCityId',
            'srcCityName' => 'setSrcCityName',
            'vgwId' => 'setVgwId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * action  **参数解释**： 动作 **取值范围**： 不涉及
    * app  **参数解释**： 应用 **取值范围**： 不涉及
    * attackRule  **参数解释**： 攻击规则 **取值范围**： 不涉及
    * attackRuleId  **参数解释**： 攻击规则ID **取值范围**： 不涉及
    * attackType  **参数解释**： 攻击类型 **取值范围**： 不涉及
    * direction  **参数解释**： 攻击方向 **取值范围**： 不涉及
    * dstIp  **参数解释**： 目的IP **取值范围**： 不涉及
    * dstPort  **参数解释**： 目的端口 **取值范围**： 不涉及
    * dstRegionId  **参数解释**： 目的地区Id **取值范围**： 不涉及
    * dstRegionName  **参数解释**： 目的地区名称 **取值范围**： 不涉及
    * dstProvinceId  **参数解释**： 目的省份ID **取值范围**： 不涉及
    * dstProvinceName  **参数解释**： 目的省份名称 **取值范围**： 不涉及
    * dstCityId  **参数解释**： 目的城市Id **取值范围**： 不涉及
    * dstCityName  **参数解释**： 目的城市名称 **取值范围**： 不涉及
    * eventTime  **参数解释**： 发生时间 **取值范围**： 不涉及
    * level  **参数解释**： 危险等级 **取值范围**： 不涉及
    * protocol  **参数解释**： 协议 **取值范围**： 不涉及
    * source  **参数解释**： 来源 **取值范围**： 不涉及
    * srcIp  **参数解释**： 源IP **取值范围**： 不涉及
    * realIp  **参数解释**： 真实IP **取值范围**： 不涉及
    * tag  **参数解释**： 标签 **取值范围**： 不涉及
    * srcPort  **参数解释**： 源端口 **取值范围**： 不涉及
    * srcRegionId  **参数解释**： 源地区Id **取值范围**： 不涉及
    * srcRegionName  **参数解释**： 源地区名称 **取值范围**： 不涉及
    * srcProvinceId  **参数解释**： 源省份Id **取值范围**： 不涉及
    * srcProvinceName  **参数解释**： 源省份名称 **取值范围**： 不涉及
    * srcCityId  **参数解释**： 源城市Id **取值范围**： 不涉及
    * srcCityName  **参数解释**： 源城市 **取值范围**： 不涉及
    * vgwId  **参数解释**： VGW Id **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'action' => 'getAction',
            'app' => 'getApp',
            'attackRule' => 'getAttackRule',
            'attackRuleId' => 'getAttackRuleId',
            'attackType' => 'getAttackType',
            'direction' => 'getDirection',
            'dstIp' => 'getDstIp',
            'dstPort' => 'getDstPort',
            'dstRegionId' => 'getDstRegionId',
            'dstRegionName' => 'getDstRegionName',
            'dstProvinceId' => 'getDstProvinceId',
            'dstProvinceName' => 'getDstProvinceName',
            'dstCityId' => 'getDstCityId',
            'dstCityName' => 'getDstCityName',
            'eventTime' => 'getEventTime',
            'level' => 'getLevel',
            'protocol' => 'getProtocol',
            'source' => 'getSource',
            'srcIp' => 'getSrcIp',
            'realIp' => 'getRealIp',
            'tag' => 'getTag',
            'srcPort' => 'getSrcPort',
            'srcRegionId' => 'getSrcRegionId',
            'srcRegionName' => 'getSrcRegionName',
            'srcProvinceId' => 'getSrcProvinceId',
            'srcProvinceName' => 'getSrcProvinceName',
            'srcCityId' => 'getSrcCityId',
            'srcCityName' => 'getSrcCityName',
            'vgwId' => 'getVgwId'
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
        $this->container['attackRule'] = isset($data['attackRule']) ? $data['attackRule'] : null;
        $this->container['attackRuleId'] = isset($data['attackRuleId']) ? $data['attackRuleId'] : null;
        $this->container['attackType'] = isset($data['attackType']) ? $data['attackType'] : null;
        $this->container['direction'] = isset($data['direction']) ? $data['direction'] : null;
        $this->container['dstIp'] = isset($data['dstIp']) ? $data['dstIp'] : null;
        $this->container['dstPort'] = isset($data['dstPort']) ? $data['dstPort'] : null;
        $this->container['dstRegionId'] = isset($data['dstRegionId']) ? $data['dstRegionId'] : null;
        $this->container['dstRegionName'] = isset($data['dstRegionName']) ? $data['dstRegionName'] : null;
        $this->container['dstProvinceId'] = isset($data['dstProvinceId']) ? $data['dstProvinceId'] : null;
        $this->container['dstProvinceName'] = isset($data['dstProvinceName']) ? $data['dstProvinceName'] : null;
        $this->container['dstCityId'] = isset($data['dstCityId']) ? $data['dstCityId'] : null;
        $this->container['dstCityName'] = isset($data['dstCityName']) ? $data['dstCityName'] : null;
        $this->container['eventTime'] = isset($data['eventTime']) ? $data['eventTime'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['srcIp'] = isset($data['srcIp']) ? $data['srcIp'] : null;
        $this->container['realIp'] = isset($data['realIp']) ? $data['realIp'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['srcPort'] = isset($data['srcPort']) ? $data['srcPort'] : null;
        $this->container['srcRegionId'] = isset($data['srcRegionId']) ? $data['srcRegionId'] : null;
        $this->container['srcRegionName'] = isset($data['srcRegionName']) ? $data['srcRegionName'] : null;
        $this->container['srcProvinceId'] = isset($data['srcProvinceId']) ? $data['srcProvinceId'] : null;
        $this->container['srcProvinceName'] = isset($data['srcProvinceName']) ? $data['srcProvinceName'] : null;
        $this->container['srcCityId'] = isset($data['srcCityId']) ? $data['srcCityId'] : null;
        $this->container['srcCityName'] = isset($data['srcCityName']) ? $data['srcCityName'] : null;
        $this->container['vgwId'] = isset($data['vgwId']) ? $data['vgwId'] : null;
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
    * Gets attackRule
    *  **参数解释**： 攻击规则 **取值范围**： 不涉及
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
    * @param string|null $attackRule **参数解释**： 攻击规则 **取值范围**： 不涉及
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
    *  **参数解释**： 攻击规则ID **取值范围**： 不涉及
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
    * @param string|null $attackRuleId **参数解释**： 攻击规则ID **取值范围**： 不涉及
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
    *  **参数解释**： 攻击类型 **取值范围**： 不涉及
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
    * @param string|null $attackType **参数解释**： 攻击类型 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setAttackType($attackType)
    {
        $this->container['attackType'] = $attackType;
        return $this;
    }

    /**
    * Gets direction
    *  **参数解释**： 攻击方向 **取值范围**： 不涉及
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
    * @param string|null $direction **参数解释**： 攻击方向 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setDirection($direction)
    {
        $this->container['direction'] = $direction;
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
    *  **参数解释**： 目的地区Id **取值范围**： 不涉及
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
    * @param string|null $dstRegionId **参数解释**： 目的地区Id **取值范围**： 不涉及
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
    *  **参数解释**： 目的城市Id **取值范围**： 不涉及
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
    * @param string|null $dstCityId **参数解释**： 目的城市Id **取值范围**： 不涉及
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
    * Gets eventTime
    *  **参数解释**： 发生时间 **取值范围**： 不涉及
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
    * @param int|null $eventTime **参数解释**： 发生时间 **取值范围**： 不涉及
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
    *  **参数解释**： 危险等级 **取值范围**： 不涉及
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
    * @param string|null $level **参数解释**： 危险等级 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
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
    * Gets source
    *  **参数解释**： 来源 **取值范围**： 不涉及
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
    * @param string|null $source **参数解释**： 来源 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setSource($source)
    {
        $this->container['source'] = $source;
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
    * Gets realIp
    *  **参数解释**： 真实IP **取值范围**： 不涉及
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
    * @param string|null $realIp **参数解释**： 真实IP **取值范围**： 不涉及
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
    *  **参数解释**： 标签 **取值范围**： 不涉及
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
    * @param int|null $tag **参数解释**： 标签 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;
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
    *  **参数解释**： 源地区Id **取值范围**： 不涉及
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
    * @param string|null $srcRegionId **参数解释**： 源地区Id **取值范围**： 不涉及
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
    *  **参数解释**： 源省份Id **取值范围**： 不涉及
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
    * @param string|null $srcProvinceId **参数解释**： 源省份Id **取值范围**： 不涉及
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
    *  **参数解释**： 源城市Id **取值范围**： 不涉及
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
    * @param string|null $srcCityId **参数解释**： 源城市Id **取值范围**： 不涉及
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
    *  **参数解释**： 源城市 **取值范围**： 不涉及
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
    * @param string|null $srcCityName **参数解释**： 源城市 **取值范围**： 不涉及
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
    *  **参数解释**： VGW Id **取值范围**： 不涉及
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
    * @param string|null $vgwId **参数解释**： VGW Id **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setVgwId($vgwId)
    {
        $this->container['vgwId'] = $vgwId;
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

