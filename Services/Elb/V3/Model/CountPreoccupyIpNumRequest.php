<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CountPreoccupyIpNumRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CountPreoccupyIpNumRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * l7FlavorId  **参数解释**：负载均衡器七层规格的ID。传入该字段表示计算创建该规格的LB的预占IP数量，或变更LB的原七层规格到该规格所需要的新增预占IP数量。  **约束限制**：仅支持创建LB、变更LB规格场景。  **取值范围**：不涉及  **默认取值**：不涉及  [不支持传入l7_flavor_id。](tag:hcso,hk_vdf,srg,fcs)
    * ipTargetEnable  **参数解释**：IP类型后端转发开关。  **约束限制**：仅支持创建LB、LB开启IP类型后端转发场景。  **取值范围**： - 取值true表示计算创建开启IP类型后端转发的LB的预占IP数量，或开启IP类型后端转发所需要的新增预占IP数量。 - 取值false表示计算创建不开启IP类型后端转发的LB的预占IP。 - 不传等价false。  **默认取值**：false [荷兰region不支持该字段，请勿使用。](tag:dt)
    * ipVersion  **参数解释**：负载均衡器IP地址类型，取值4、6 。  **约束限制**：仅支持创建LB场景。  **取值范围**： - 取值4表示计算创建支持IPv4地址的LB的预占IP。 - 取值6表示计算创建支持IPv6地址的LB的预占IP。  **默认取值**：不涉及  [不支持IPv6，请勿设置为6。](tag:dt)
    * loadbalancerId  **参数解释**：负载均衡器ID。计算LB变更或创建LB中的第一个七层监听器的新增预占IP。  **约束限制**：仅支持变更LB规格、开启IP类型后端转发、开启/不开启地址转换功能、创建LB中的第一个七层监听器场景。  **取值范围**：不涉及  **默认取值**：不涉及
    * availabilityZoneId  **参数解释**：计算创建AZ列表为availability_zone_id的负载均衡器实例的预占IP。  **约束限制**： - 仅支持创建LB场景。 - 传入loadbalancer_id时，该参数无效。  **取值范围**：不涉及  **默认取值**：不涉及
    * scene  **参数解释**：计算共享型升级为独享型ELB负载均衡器实例的所需预占IP。  **约束限制**： - 仅支持共享型升级为独享型ELB场景。 - 必须同时传入loadbalancer_id。  **取值范围**：UPGRADE - 共享型升级为独享型ELB场景。  **默认取值**：不涉及
    * nat64Enable  **参数解释**：开启地址转换。传入该字段表示计算创建LB及该LB下开启/不开启地址转换特性的监听器所需要的预占IP，或者指定LB创建开启/不开启地址转换特性的监听器所需要的新增预占IP。  **约束限制**： - 仅支持计算ELB实例开启NAT64特性场景。  **取值范围**： - true：开启地址转换特性。 - false：不开启地址转换特性。  **默认取值**：false
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'l7FlavorId' => 'string',
            'ipTargetEnable' => 'bool',
            'ipVersion' => 'int',
            'loadbalancerId' => 'string',
            'availabilityZoneId' => 'string[]',
            'scene' => 'string',
            'nat64Enable' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * l7FlavorId  **参数解释**：负载均衡器七层规格的ID。传入该字段表示计算创建该规格的LB的预占IP数量，或变更LB的原七层规格到该规格所需要的新增预占IP数量。  **约束限制**：仅支持创建LB、变更LB规格场景。  **取值范围**：不涉及  **默认取值**：不涉及  [不支持传入l7_flavor_id。](tag:hcso,hk_vdf,srg,fcs)
    * ipTargetEnable  **参数解释**：IP类型后端转发开关。  **约束限制**：仅支持创建LB、LB开启IP类型后端转发场景。  **取值范围**： - 取值true表示计算创建开启IP类型后端转发的LB的预占IP数量，或开启IP类型后端转发所需要的新增预占IP数量。 - 取值false表示计算创建不开启IP类型后端转发的LB的预占IP。 - 不传等价false。  **默认取值**：false [荷兰region不支持该字段，请勿使用。](tag:dt)
    * ipVersion  **参数解释**：负载均衡器IP地址类型，取值4、6 。  **约束限制**：仅支持创建LB场景。  **取值范围**： - 取值4表示计算创建支持IPv4地址的LB的预占IP。 - 取值6表示计算创建支持IPv6地址的LB的预占IP。  **默认取值**：不涉及  [不支持IPv6，请勿设置为6。](tag:dt)
    * loadbalancerId  **参数解释**：负载均衡器ID。计算LB变更或创建LB中的第一个七层监听器的新增预占IP。  **约束限制**：仅支持变更LB规格、开启IP类型后端转发、开启/不开启地址转换功能、创建LB中的第一个七层监听器场景。  **取值范围**：不涉及  **默认取值**：不涉及
    * availabilityZoneId  **参数解释**：计算创建AZ列表为availability_zone_id的负载均衡器实例的预占IP。  **约束限制**： - 仅支持创建LB场景。 - 传入loadbalancer_id时，该参数无效。  **取值范围**：不涉及  **默认取值**：不涉及
    * scene  **参数解释**：计算共享型升级为独享型ELB负载均衡器实例的所需预占IP。  **约束限制**： - 仅支持共享型升级为独享型ELB场景。 - 必须同时传入loadbalancer_id。  **取值范围**：UPGRADE - 共享型升级为独享型ELB场景。  **默认取值**：不涉及
    * nat64Enable  **参数解释**：开启地址转换。传入该字段表示计算创建LB及该LB下开启/不开启地址转换特性的监听器所需要的预占IP，或者指定LB创建开启/不开启地址转换特性的监听器所需要的新增预占IP。  **约束限制**： - 仅支持计算ELB实例开启NAT64特性场景。  **取值范围**： - true：开启地址转换特性。 - false：不开启地址转换特性。  **默认取值**：false
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'l7FlavorId' => null,
        'ipTargetEnable' => null,
        'ipVersion' => 'int32',
        'loadbalancerId' => null,
        'availabilityZoneId' => null,
        'scene' => null,
        'nat64Enable' => null
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
    * l7FlavorId  **参数解释**：负载均衡器七层规格的ID。传入该字段表示计算创建该规格的LB的预占IP数量，或变更LB的原七层规格到该规格所需要的新增预占IP数量。  **约束限制**：仅支持创建LB、变更LB规格场景。  **取值范围**：不涉及  **默认取值**：不涉及  [不支持传入l7_flavor_id。](tag:hcso,hk_vdf,srg,fcs)
    * ipTargetEnable  **参数解释**：IP类型后端转发开关。  **约束限制**：仅支持创建LB、LB开启IP类型后端转发场景。  **取值范围**： - 取值true表示计算创建开启IP类型后端转发的LB的预占IP数量，或开启IP类型后端转发所需要的新增预占IP数量。 - 取值false表示计算创建不开启IP类型后端转发的LB的预占IP。 - 不传等价false。  **默认取值**：false [荷兰region不支持该字段，请勿使用。](tag:dt)
    * ipVersion  **参数解释**：负载均衡器IP地址类型，取值4、6 。  **约束限制**：仅支持创建LB场景。  **取值范围**： - 取值4表示计算创建支持IPv4地址的LB的预占IP。 - 取值6表示计算创建支持IPv6地址的LB的预占IP。  **默认取值**：不涉及  [不支持IPv6，请勿设置为6。](tag:dt)
    * loadbalancerId  **参数解释**：负载均衡器ID。计算LB变更或创建LB中的第一个七层监听器的新增预占IP。  **约束限制**：仅支持变更LB规格、开启IP类型后端转发、开启/不开启地址转换功能、创建LB中的第一个七层监听器场景。  **取值范围**：不涉及  **默认取值**：不涉及
    * availabilityZoneId  **参数解释**：计算创建AZ列表为availability_zone_id的负载均衡器实例的预占IP。  **约束限制**： - 仅支持创建LB场景。 - 传入loadbalancer_id时，该参数无效。  **取值范围**：不涉及  **默认取值**：不涉及
    * scene  **参数解释**：计算共享型升级为独享型ELB负载均衡器实例的所需预占IP。  **约束限制**： - 仅支持共享型升级为独享型ELB场景。 - 必须同时传入loadbalancer_id。  **取值范围**：UPGRADE - 共享型升级为独享型ELB场景。  **默认取值**：不涉及
    * nat64Enable  **参数解释**：开启地址转换。传入该字段表示计算创建LB及该LB下开启/不开启地址转换特性的监听器所需要的预占IP，或者指定LB创建开启/不开启地址转换特性的监听器所需要的新增预占IP。  **约束限制**： - 仅支持计算ELB实例开启NAT64特性场景。  **取值范围**： - true：开启地址转换特性。 - false：不开启地址转换特性。  **默认取值**：false
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'l7FlavorId' => 'l7_flavor_id',
            'ipTargetEnable' => 'ip_target_enable',
            'ipVersion' => 'ip_version',
            'loadbalancerId' => 'loadbalancer_id',
            'availabilityZoneId' => 'availability_zone_id',
            'scene' => 'scene',
            'nat64Enable' => 'nat64_enable'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * l7FlavorId  **参数解释**：负载均衡器七层规格的ID。传入该字段表示计算创建该规格的LB的预占IP数量，或变更LB的原七层规格到该规格所需要的新增预占IP数量。  **约束限制**：仅支持创建LB、变更LB规格场景。  **取值范围**：不涉及  **默认取值**：不涉及  [不支持传入l7_flavor_id。](tag:hcso,hk_vdf,srg,fcs)
    * ipTargetEnable  **参数解释**：IP类型后端转发开关。  **约束限制**：仅支持创建LB、LB开启IP类型后端转发场景。  **取值范围**： - 取值true表示计算创建开启IP类型后端转发的LB的预占IP数量，或开启IP类型后端转发所需要的新增预占IP数量。 - 取值false表示计算创建不开启IP类型后端转发的LB的预占IP。 - 不传等价false。  **默认取值**：false [荷兰region不支持该字段，请勿使用。](tag:dt)
    * ipVersion  **参数解释**：负载均衡器IP地址类型，取值4、6 。  **约束限制**：仅支持创建LB场景。  **取值范围**： - 取值4表示计算创建支持IPv4地址的LB的预占IP。 - 取值6表示计算创建支持IPv6地址的LB的预占IP。  **默认取值**：不涉及  [不支持IPv6，请勿设置为6。](tag:dt)
    * loadbalancerId  **参数解释**：负载均衡器ID。计算LB变更或创建LB中的第一个七层监听器的新增预占IP。  **约束限制**：仅支持变更LB规格、开启IP类型后端转发、开启/不开启地址转换功能、创建LB中的第一个七层监听器场景。  **取值范围**：不涉及  **默认取值**：不涉及
    * availabilityZoneId  **参数解释**：计算创建AZ列表为availability_zone_id的负载均衡器实例的预占IP。  **约束限制**： - 仅支持创建LB场景。 - 传入loadbalancer_id时，该参数无效。  **取值范围**：不涉及  **默认取值**：不涉及
    * scene  **参数解释**：计算共享型升级为独享型ELB负载均衡器实例的所需预占IP。  **约束限制**： - 仅支持共享型升级为独享型ELB场景。 - 必须同时传入loadbalancer_id。  **取值范围**：UPGRADE - 共享型升级为独享型ELB场景。  **默认取值**：不涉及
    * nat64Enable  **参数解释**：开启地址转换。传入该字段表示计算创建LB及该LB下开启/不开启地址转换特性的监听器所需要的预占IP，或者指定LB创建开启/不开启地址转换特性的监听器所需要的新增预占IP。  **约束限制**： - 仅支持计算ELB实例开启NAT64特性场景。  **取值范围**： - true：开启地址转换特性。 - false：不开启地址转换特性。  **默认取值**：false
    *
    * @var string[]
    */
    protected static $setters = [
            'l7FlavorId' => 'setL7FlavorId',
            'ipTargetEnable' => 'setIpTargetEnable',
            'ipVersion' => 'setIpVersion',
            'loadbalancerId' => 'setLoadbalancerId',
            'availabilityZoneId' => 'setAvailabilityZoneId',
            'scene' => 'setScene',
            'nat64Enable' => 'setNat64Enable'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * l7FlavorId  **参数解释**：负载均衡器七层规格的ID。传入该字段表示计算创建该规格的LB的预占IP数量，或变更LB的原七层规格到该规格所需要的新增预占IP数量。  **约束限制**：仅支持创建LB、变更LB规格场景。  **取值范围**：不涉及  **默认取值**：不涉及  [不支持传入l7_flavor_id。](tag:hcso,hk_vdf,srg,fcs)
    * ipTargetEnable  **参数解释**：IP类型后端转发开关。  **约束限制**：仅支持创建LB、LB开启IP类型后端转发场景。  **取值范围**： - 取值true表示计算创建开启IP类型后端转发的LB的预占IP数量，或开启IP类型后端转发所需要的新增预占IP数量。 - 取值false表示计算创建不开启IP类型后端转发的LB的预占IP。 - 不传等价false。  **默认取值**：false [荷兰region不支持该字段，请勿使用。](tag:dt)
    * ipVersion  **参数解释**：负载均衡器IP地址类型，取值4、6 。  **约束限制**：仅支持创建LB场景。  **取值范围**： - 取值4表示计算创建支持IPv4地址的LB的预占IP。 - 取值6表示计算创建支持IPv6地址的LB的预占IP。  **默认取值**：不涉及  [不支持IPv6，请勿设置为6。](tag:dt)
    * loadbalancerId  **参数解释**：负载均衡器ID。计算LB变更或创建LB中的第一个七层监听器的新增预占IP。  **约束限制**：仅支持变更LB规格、开启IP类型后端转发、开启/不开启地址转换功能、创建LB中的第一个七层监听器场景。  **取值范围**：不涉及  **默认取值**：不涉及
    * availabilityZoneId  **参数解释**：计算创建AZ列表为availability_zone_id的负载均衡器实例的预占IP。  **约束限制**： - 仅支持创建LB场景。 - 传入loadbalancer_id时，该参数无效。  **取值范围**：不涉及  **默认取值**：不涉及
    * scene  **参数解释**：计算共享型升级为独享型ELB负载均衡器实例的所需预占IP。  **约束限制**： - 仅支持共享型升级为独享型ELB场景。 - 必须同时传入loadbalancer_id。  **取值范围**：UPGRADE - 共享型升级为独享型ELB场景。  **默认取值**：不涉及
    * nat64Enable  **参数解释**：开启地址转换。传入该字段表示计算创建LB及该LB下开启/不开启地址转换特性的监听器所需要的预占IP，或者指定LB创建开启/不开启地址转换特性的监听器所需要的新增预占IP。  **约束限制**： - 仅支持计算ELB实例开启NAT64特性场景。  **取值范围**： - true：开启地址转换特性。 - false：不开启地址转换特性。  **默认取值**：false
    *
    * @var string[]
    */
    protected static $getters = [
            'l7FlavorId' => 'getL7FlavorId',
            'ipTargetEnable' => 'getIpTargetEnable',
            'ipVersion' => 'getIpVersion',
            'loadbalancerId' => 'getLoadbalancerId',
            'availabilityZoneId' => 'getAvailabilityZoneId',
            'scene' => 'getScene',
            'nat64Enable' => 'getNat64Enable'
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
        $this->container['l7FlavorId'] = isset($data['l7FlavorId']) ? $data['l7FlavorId'] : null;
        $this->container['ipTargetEnable'] = isset($data['ipTargetEnable']) ? $data['ipTargetEnable'] : null;
        $this->container['ipVersion'] = isset($data['ipVersion']) ? $data['ipVersion'] : null;
        $this->container['loadbalancerId'] = isset($data['loadbalancerId']) ? $data['loadbalancerId'] : null;
        $this->container['availabilityZoneId'] = isset($data['availabilityZoneId']) ? $data['availabilityZoneId'] : null;
        $this->container['scene'] = isset($data['scene']) ? $data['scene'] : null;
        $this->container['nat64Enable'] = isset($data['nat64Enable']) ? $data['nat64Enable'] : null;
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
    * Gets l7FlavorId
    *  **参数解释**：负载均衡器七层规格的ID。传入该字段表示计算创建该规格的LB的预占IP数量，或变更LB的原七层规格到该规格所需要的新增预占IP数量。  **约束限制**：仅支持创建LB、变更LB规格场景。  **取值范围**：不涉及  **默认取值**：不涉及  [不支持传入l7_flavor_id。](tag:hcso,hk_vdf,srg,fcs)
    *
    * @return string|null
    */
    public function getL7FlavorId()
    {
        return $this->container['l7FlavorId'];
    }

    /**
    * Sets l7FlavorId
    *
    * @param string|null $l7FlavorId **参数解释**：负载均衡器七层规格的ID。传入该字段表示计算创建该规格的LB的预占IP数量，或变更LB的原七层规格到该规格所需要的新增预占IP数量。  **约束限制**：仅支持创建LB、变更LB规格场景。  **取值范围**：不涉及  **默认取值**：不涉及  [不支持传入l7_flavor_id。](tag:hcso,hk_vdf,srg,fcs)
    *
    * @return $this
    */
    public function setL7FlavorId($l7FlavorId)
    {
        $this->container['l7FlavorId'] = $l7FlavorId;
        return $this;
    }

    /**
    * Gets ipTargetEnable
    *  **参数解释**：IP类型后端转发开关。  **约束限制**：仅支持创建LB、LB开启IP类型后端转发场景。  **取值范围**： - 取值true表示计算创建开启IP类型后端转发的LB的预占IP数量，或开启IP类型后端转发所需要的新增预占IP数量。 - 取值false表示计算创建不开启IP类型后端转发的LB的预占IP。 - 不传等价false。  **默认取值**：false [荷兰region不支持该字段，请勿使用。](tag:dt)
    *
    * @return bool|null
    */
    public function getIpTargetEnable()
    {
        return $this->container['ipTargetEnable'];
    }

    /**
    * Sets ipTargetEnable
    *
    * @param bool|null $ipTargetEnable **参数解释**：IP类型后端转发开关。  **约束限制**：仅支持创建LB、LB开启IP类型后端转发场景。  **取值范围**： - 取值true表示计算创建开启IP类型后端转发的LB的预占IP数量，或开启IP类型后端转发所需要的新增预占IP数量。 - 取值false表示计算创建不开启IP类型后端转发的LB的预占IP。 - 不传等价false。  **默认取值**：false [荷兰region不支持该字段，请勿使用。](tag:dt)
    *
    * @return $this
    */
    public function setIpTargetEnable($ipTargetEnable)
    {
        $this->container['ipTargetEnable'] = $ipTargetEnable;
        return $this;
    }

    /**
    * Gets ipVersion
    *  **参数解释**：负载均衡器IP地址类型，取值4、6 。  **约束限制**：仅支持创建LB场景。  **取值范围**： - 取值4表示计算创建支持IPv4地址的LB的预占IP。 - 取值6表示计算创建支持IPv6地址的LB的预占IP。  **默认取值**：不涉及  [不支持IPv6，请勿设置为6。](tag:dt)
    *
    * @return int|null
    */
    public function getIpVersion()
    {
        return $this->container['ipVersion'];
    }

    /**
    * Sets ipVersion
    *
    * @param int|null $ipVersion **参数解释**：负载均衡器IP地址类型，取值4、6 。  **约束限制**：仅支持创建LB场景。  **取值范围**： - 取值4表示计算创建支持IPv4地址的LB的预占IP。 - 取值6表示计算创建支持IPv6地址的LB的预占IP。  **默认取值**：不涉及  [不支持IPv6，请勿设置为6。](tag:dt)
    *
    * @return $this
    */
    public function setIpVersion($ipVersion)
    {
        $this->container['ipVersion'] = $ipVersion;
        return $this;
    }

    /**
    * Gets loadbalancerId
    *  **参数解释**：负载均衡器ID。计算LB变更或创建LB中的第一个七层监听器的新增预占IP。  **约束限制**：仅支持变更LB规格、开启IP类型后端转发、开启/不开启地址转换功能、创建LB中的第一个七层监听器场景。  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return string|null
    */
    public function getLoadbalancerId()
    {
        return $this->container['loadbalancerId'];
    }

    /**
    * Sets loadbalancerId
    *
    * @param string|null $loadbalancerId **参数解释**：负载均衡器ID。计算LB变更或创建LB中的第一个七层监听器的新增预占IP。  **约束限制**：仅支持变更LB规格、开启IP类型后端转发、开启/不开启地址转换功能、创建LB中的第一个七层监听器场景。  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setLoadbalancerId($loadbalancerId)
    {
        $this->container['loadbalancerId'] = $loadbalancerId;
        return $this;
    }

    /**
    * Gets availabilityZoneId
    *  **参数解释**：计算创建AZ列表为availability_zone_id的负载均衡器实例的预占IP。  **约束限制**： - 仅支持创建LB场景。 - 传入loadbalancer_id时，该参数无效。  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return string[]|null
    */
    public function getAvailabilityZoneId()
    {
        return $this->container['availabilityZoneId'];
    }

    /**
    * Sets availabilityZoneId
    *
    * @param string[]|null $availabilityZoneId **参数解释**：计算创建AZ列表为availability_zone_id的负载均衡器实例的预占IP。  **约束限制**： - 仅支持创建LB场景。 - 传入loadbalancer_id时，该参数无效。  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setAvailabilityZoneId($availabilityZoneId)
    {
        $this->container['availabilityZoneId'] = $availabilityZoneId;
        return $this;
    }

    /**
    * Gets scene
    *  **参数解释**：计算共享型升级为独享型ELB负载均衡器实例的所需预占IP。  **约束限制**： - 仅支持共享型升级为独享型ELB场景。 - 必须同时传入loadbalancer_id。  **取值范围**：UPGRADE - 共享型升级为独享型ELB场景。  **默认取值**：不涉及
    *
    * @return string|null
    */
    public function getScene()
    {
        return $this->container['scene'];
    }

    /**
    * Sets scene
    *
    * @param string|null $scene **参数解释**：计算共享型升级为独享型ELB负载均衡器实例的所需预占IP。  **约束限制**： - 仅支持共享型升级为独享型ELB场景。 - 必须同时传入loadbalancer_id。  **取值范围**：UPGRADE - 共享型升级为独享型ELB场景。  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setScene($scene)
    {
        $this->container['scene'] = $scene;
        return $this;
    }

    /**
    * Gets nat64Enable
    *  **参数解释**：开启地址转换。传入该字段表示计算创建LB及该LB下开启/不开启地址转换特性的监听器所需要的预占IP，或者指定LB创建开启/不开启地址转换特性的监听器所需要的新增预占IP。  **约束限制**： - 仅支持计算ELB实例开启NAT64特性场景。  **取值范围**： - true：开启地址转换特性。 - false：不开启地址转换特性。  **默认取值**：false
    *
    * @return bool|null
    */
    public function getNat64Enable()
    {
        return $this->container['nat64Enable'];
    }

    /**
    * Sets nat64Enable
    *
    * @param bool|null $nat64Enable **参数解释**：开启地址转换。传入该字段表示计算创建LB及该LB下开启/不开启地址转换特性的监听器所需要的预占IP，或者指定LB创建开启/不开启地址转换特性的监听器所需要的新增预占IP。  **约束限制**： - 仅支持计算ELB实例开启NAT64特性场景。  **取值范围**： - true：开启地址转换特性。 - false：不开启地址转换特性。  **默认取值**：false
    *
    * @return $this
    */
    public function setNat64Enable($nat64Enable)
    {
        $this->container['nat64Enable'] = $nat64Enable;
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

