<?php

namespace HuaweiCloud\SDK\Eip\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListEipBandwidthsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListEipBandwidthsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limit  - 功能说明：每页返回的个数 - 取值范围：取值范围：1~[2000]，其中2000为局点差异项，具体取值由局点决定
    * marker  - 功能说明：分页查询起始的资源ID，为空时为查询第一页
    * fields  display in the form \"fields=id&fields=name&...\"  Supported fields：id/name/tenant_id/size/ratio_95peak_plus/ingress_size/bandwidth_type/admin_state/billing_info/charge_mode/type/publicip_info/enable_bandwidth_rules/rule_quota/bandwidth_rules/public_border_group/created_at/updated_at/lock_infos
    * id  - 功能说明：带宽唯一标识
    * bandwidthType  - 功能说明：带宽类型，共享带宽默认为share。 - 取值范围：share，bgp，telcom，sbgp等。   - share：共享带宽   - bgp：动态bgp   - telcom ：联通   - sbgp：静态bgp
    * name  - 功能说明：宽带名称，按照宽带名称过滤
    * nameLike  - 功能说明：根据宽带名称模糊查询过滤
    * tenantId  - 功能说明：根据tenant_id过滤
    * ingressSize  - 功能说明：根据入云大小过滤
    * adminState  - 功能说明：根据宽带状态过滤
    * billingInfo  - 功能说明：根据计费信息过滤
    * tags  - 功能说明：根据标签过滤
    * enableBandwidthRules  - 功能说明：根据是否带宽分组使能过滤 - 取值范围：true、false
    * ruleQuota  - 功能说明：根据规则数值过滤
    * publicBorderGroup  - 功能说明：根据站点信息过滤
    * chargeMode  - 功能说明：按流量计费,按带宽计费还是按增强型95计费 - 取值范围：bandwidth（按带宽计费），traffic（按流量计费），95peak_plus（按增强型95计费），不返回或者为空时表示是bandwidth - 约束：只有共享带宽支持95peak_plus（按增强型95计费），按增强型95计费时需要指定保底百分比，默认是20%
    * size  - 功能说明：带宽大小。共享带宽的大小有最小值限制，默认为5M，可能因局点不同而不同。 - 取值范围：默认5Mbit/s~2000Mbit/s（具体范围以各区域配置为准，请参见控制台对应页面显示）。   调整带宽时的最小单位会根据带宽范围不同存在差异。 - 小于等于300Mbit/s：默认最小单位为1Mbit/s。 - 300Mbit/s~1000Mbit/s：默认最小单位为50Mbit/s。 - 大于1000Mbit/s：默认最小单位为500Mbit/s。
    * type  - 功能说明：带宽类型，标识是否是共享带宽 - 取值范围：WHOLE，PER。   - WHOLE表示共享带宽   - PER表示独享带宽
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'limit' => 'string',
            'marker' => 'string',
            'fields' => 'string[]',
            'id' => 'string',
            'bandwidthType' => 'string',
            'name' => 'string',
            'nameLike' => 'string',
            'tenantId' => 'string',
            'ingressSize' => 'string',
            'adminState' => 'string',
            'billingInfo' => 'string',
            'tags' => 'string',
            'enableBandwidthRules' => 'string',
            'ruleQuota' => 'int',
            'publicBorderGroup' => 'string',
            'chargeMode' => 'string',
            'size' => 'string',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limit  - 功能说明：每页返回的个数 - 取值范围：取值范围：1~[2000]，其中2000为局点差异项，具体取值由局点决定
    * marker  - 功能说明：分页查询起始的资源ID，为空时为查询第一页
    * fields  display in the form \"fields=id&fields=name&...\"  Supported fields：id/name/tenant_id/size/ratio_95peak_plus/ingress_size/bandwidth_type/admin_state/billing_info/charge_mode/type/publicip_info/enable_bandwidth_rules/rule_quota/bandwidth_rules/public_border_group/created_at/updated_at/lock_infos
    * id  - 功能说明：带宽唯一标识
    * bandwidthType  - 功能说明：带宽类型，共享带宽默认为share。 - 取值范围：share，bgp，telcom，sbgp等。   - share：共享带宽   - bgp：动态bgp   - telcom ：联通   - sbgp：静态bgp
    * name  - 功能说明：宽带名称，按照宽带名称过滤
    * nameLike  - 功能说明：根据宽带名称模糊查询过滤
    * tenantId  - 功能说明：根据tenant_id过滤
    * ingressSize  - 功能说明：根据入云大小过滤
    * adminState  - 功能说明：根据宽带状态过滤
    * billingInfo  - 功能说明：根据计费信息过滤
    * tags  - 功能说明：根据标签过滤
    * enableBandwidthRules  - 功能说明：根据是否带宽分组使能过滤 - 取值范围：true、false
    * ruleQuota  - 功能说明：根据规则数值过滤
    * publicBorderGroup  - 功能说明：根据站点信息过滤
    * chargeMode  - 功能说明：按流量计费,按带宽计费还是按增强型95计费 - 取值范围：bandwidth（按带宽计费），traffic（按流量计费），95peak_plus（按增强型95计费），不返回或者为空时表示是bandwidth - 约束：只有共享带宽支持95peak_plus（按增强型95计费），按增强型95计费时需要指定保底百分比，默认是20%
    * size  - 功能说明：带宽大小。共享带宽的大小有最小值限制，默认为5M，可能因局点不同而不同。 - 取值范围：默认5Mbit/s~2000Mbit/s（具体范围以各区域配置为准，请参见控制台对应页面显示）。   调整带宽时的最小单位会根据带宽范围不同存在差异。 - 小于等于300Mbit/s：默认最小单位为1Mbit/s。 - 300Mbit/s~1000Mbit/s：默认最小单位为50Mbit/s。 - 大于1000Mbit/s：默认最小单位为500Mbit/s。
    * type  - 功能说明：带宽类型，标识是否是共享带宽 - 取值范围：WHOLE，PER。   - WHOLE表示共享带宽   - PER表示独享带宽
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'limit' => null,
        'marker' => null,
        'fields' => null,
        'id' => null,
        'bandwidthType' => null,
        'name' => null,
        'nameLike' => null,
        'tenantId' => null,
        'ingressSize' => null,
        'adminState' => null,
        'billingInfo' => null,
        'tags' => null,
        'enableBandwidthRules' => null,
        'ruleQuota' => null,
        'publicBorderGroup' => null,
        'chargeMode' => null,
        'size' => null,
        'type' => null
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
    * limit  - 功能说明：每页返回的个数 - 取值范围：取值范围：1~[2000]，其中2000为局点差异项，具体取值由局点决定
    * marker  - 功能说明：分页查询起始的资源ID，为空时为查询第一页
    * fields  display in the form \"fields=id&fields=name&...\"  Supported fields：id/name/tenant_id/size/ratio_95peak_plus/ingress_size/bandwidth_type/admin_state/billing_info/charge_mode/type/publicip_info/enable_bandwidth_rules/rule_quota/bandwidth_rules/public_border_group/created_at/updated_at/lock_infos
    * id  - 功能说明：带宽唯一标识
    * bandwidthType  - 功能说明：带宽类型，共享带宽默认为share。 - 取值范围：share，bgp，telcom，sbgp等。   - share：共享带宽   - bgp：动态bgp   - telcom ：联通   - sbgp：静态bgp
    * name  - 功能说明：宽带名称，按照宽带名称过滤
    * nameLike  - 功能说明：根据宽带名称模糊查询过滤
    * tenantId  - 功能说明：根据tenant_id过滤
    * ingressSize  - 功能说明：根据入云大小过滤
    * adminState  - 功能说明：根据宽带状态过滤
    * billingInfo  - 功能说明：根据计费信息过滤
    * tags  - 功能说明：根据标签过滤
    * enableBandwidthRules  - 功能说明：根据是否带宽分组使能过滤 - 取值范围：true、false
    * ruleQuota  - 功能说明：根据规则数值过滤
    * publicBorderGroup  - 功能说明：根据站点信息过滤
    * chargeMode  - 功能说明：按流量计费,按带宽计费还是按增强型95计费 - 取值范围：bandwidth（按带宽计费），traffic（按流量计费），95peak_plus（按增强型95计费），不返回或者为空时表示是bandwidth - 约束：只有共享带宽支持95peak_plus（按增强型95计费），按增强型95计费时需要指定保底百分比，默认是20%
    * size  - 功能说明：带宽大小。共享带宽的大小有最小值限制，默认为5M，可能因局点不同而不同。 - 取值范围：默认5Mbit/s~2000Mbit/s（具体范围以各区域配置为准，请参见控制台对应页面显示）。   调整带宽时的最小单位会根据带宽范围不同存在差异。 - 小于等于300Mbit/s：默认最小单位为1Mbit/s。 - 300Mbit/s~1000Mbit/s：默认最小单位为50Mbit/s。 - 大于1000Mbit/s：默认最小单位为500Mbit/s。
    * type  - 功能说明：带宽类型，标识是否是共享带宽 - 取值范围：WHOLE，PER。   - WHOLE表示共享带宽   - PER表示独享带宽
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'limit' => 'limit',
            'marker' => 'marker',
            'fields' => 'fields',
            'id' => 'id',
            'bandwidthType' => 'bandwidth_type',
            'name' => 'name',
            'nameLike' => 'name_like',
            'tenantId' => 'tenant_id',
            'ingressSize' => 'ingress_size',
            'adminState' => 'admin_state',
            'billingInfo' => 'billing_info',
            'tags' => 'tags',
            'enableBandwidthRules' => 'enable_bandwidth_rules',
            'ruleQuota' => 'rule_quota',
            'publicBorderGroup' => 'public_border_group',
            'chargeMode' => 'charge_mode',
            'size' => 'size',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limit  - 功能说明：每页返回的个数 - 取值范围：取值范围：1~[2000]，其中2000为局点差异项，具体取值由局点决定
    * marker  - 功能说明：分页查询起始的资源ID，为空时为查询第一页
    * fields  display in the form \"fields=id&fields=name&...\"  Supported fields：id/name/tenant_id/size/ratio_95peak_plus/ingress_size/bandwidth_type/admin_state/billing_info/charge_mode/type/publicip_info/enable_bandwidth_rules/rule_quota/bandwidth_rules/public_border_group/created_at/updated_at/lock_infos
    * id  - 功能说明：带宽唯一标识
    * bandwidthType  - 功能说明：带宽类型，共享带宽默认为share。 - 取值范围：share，bgp，telcom，sbgp等。   - share：共享带宽   - bgp：动态bgp   - telcom ：联通   - sbgp：静态bgp
    * name  - 功能说明：宽带名称，按照宽带名称过滤
    * nameLike  - 功能说明：根据宽带名称模糊查询过滤
    * tenantId  - 功能说明：根据tenant_id过滤
    * ingressSize  - 功能说明：根据入云大小过滤
    * adminState  - 功能说明：根据宽带状态过滤
    * billingInfo  - 功能说明：根据计费信息过滤
    * tags  - 功能说明：根据标签过滤
    * enableBandwidthRules  - 功能说明：根据是否带宽分组使能过滤 - 取值范围：true、false
    * ruleQuota  - 功能说明：根据规则数值过滤
    * publicBorderGroup  - 功能说明：根据站点信息过滤
    * chargeMode  - 功能说明：按流量计费,按带宽计费还是按增强型95计费 - 取值范围：bandwidth（按带宽计费），traffic（按流量计费），95peak_plus（按增强型95计费），不返回或者为空时表示是bandwidth - 约束：只有共享带宽支持95peak_plus（按增强型95计费），按增强型95计费时需要指定保底百分比，默认是20%
    * size  - 功能说明：带宽大小。共享带宽的大小有最小值限制，默认为5M，可能因局点不同而不同。 - 取值范围：默认5Mbit/s~2000Mbit/s（具体范围以各区域配置为准，请参见控制台对应页面显示）。   调整带宽时的最小单位会根据带宽范围不同存在差异。 - 小于等于300Mbit/s：默认最小单位为1Mbit/s。 - 300Mbit/s~1000Mbit/s：默认最小单位为50Mbit/s。 - 大于1000Mbit/s：默认最小单位为500Mbit/s。
    * type  - 功能说明：带宽类型，标识是否是共享带宽 - 取值范围：WHOLE，PER。   - WHOLE表示共享带宽   - PER表示独享带宽
    *
    * @var string[]
    */
    protected static $setters = [
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'fields' => 'setFields',
            'id' => 'setId',
            'bandwidthType' => 'setBandwidthType',
            'name' => 'setName',
            'nameLike' => 'setNameLike',
            'tenantId' => 'setTenantId',
            'ingressSize' => 'setIngressSize',
            'adminState' => 'setAdminState',
            'billingInfo' => 'setBillingInfo',
            'tags' => 'setTags',
            'enableBandwidthRules' => 'setEnableBandwidthRules',
            'ruleQuota' => 'setRuleQuota',
            'publicBorderGroup' => 'setPublicBorderGroup',
            'chargeMode' => 'setChargeMode',
            'size' => 'setSize',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limit  - 功能说明：每页返回的个数 - 取值范围：取值范围：1~[2000]，其中2000为局点差异项，具体取值由局点决定
    * marker  - 功能说明：分页查询起始的资源ID，为空时为查询第一页
    * fields  display in the form \"fields=id&fields=name&...\"  Supported fields：id/name/tenant_id/size/ratio_95peak_plus/ingress_size/bandwidth_type/admin_state/billing_info/charge_mode/type/publicip_info/enable_bandwidth_rules/rule_quota/bandwidth_rules/public_border_group/created_at/updated_at/lock_infos
    * id  - 功能说明：带宽唯一标识
    * bandwidthType  - 功能说明：带宽类型，共享带宽默认为share。 - 取值范围：share，bgp，telcom，sbgp等。   - share：共享带宽   - bgp：动态bgp   - telcom ：联通   - sbgp：静态bgp
    * name  - 功能说明：宽带名称，按照宽带名称过滤
    * nameLike  - 功能说明：根据宽带名称模糊查询过滤
    * tenantId  - 功能说明：根据tenant_id过滤
    * ingressSize  - 功能说明：根据入云大小过滤
    * adminState  - 功能说明：根据宽带状态过滤
    * billingInfo  - 功能说明：根据计费信息过滤
    * tags  - 功能说明：根据标签过滤
    * enableBandwidthRules  - 功能说明：根据是否带宽分组使能过滤 - 取值范围：true、false
    * ruleQuota  - 功能说明：根据规则数值过滤
    * publicBorderGroup  - 功能说明：根据站点信息过滤
    * chargeMode  - 功能说明：按流量计费,按带宽计费还是按增强型95计费 - 取值范围：bandwidth（按带宽计费），traffic（按流量计费），95peak_plus（按增强型95计费），不返回或者为空时表示是bandwidth - 约束：只有共享带宽支持95peak_plus（按增强型95计费），按增强型95计费时需要指定保底百分比，默认是20%
    * size  - 功能说明：带宽大小。共享带宽的大小有最小值限制，默认为5M，可能因局点不同而不同。 - 取值范围：默认5Mbit/s~2000Mbit/s（具体范围以各区域配置为准，请参见控制台对应页面显示）。   调整带宽时的最小单位会根据带宽范围不同存在差异。 - 小于等于300Mbit/s：默认最小单位为1Mbit/s。 - 300Mbit/s~1000Mbit/s：默认最小单位为50Mbit/s。 - 大于1000Mbit/s：默认最小单位为500Mbit/s。
    * type  - 功能说明：带宽类型，标识是否是共享带宽 - 取值范围：WHOLE，PER。   - WHOLE表示共享带宽   - PER表示独享带宽
    *
    * @var string[]
    */
    protected static $getters = [
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'fields' => 'getFields',
            'id' => 'getId',
            'bandwidthType' => 'getBandwidthType',
            'name' => 'getName',
            'nameLike' => 'getNameLike',
            'tenantId' => 'getTenantId',
            'ingressSize' => 'getIngressSize',
            'adminState' => 'getAdminState',
            'billingInfo' => 'getBillingInfo',
            'tags' => 'getTags',
            'enableBandwidthRules' => 'getEnableBandwidthRules',
            'ruleQuota' => 'getRuleQuota',
            'publicBorderGroup' => 'getPublicBorderGroup',
            'chargeMode' => 'getChargeMode',
            'size' => 'getSize',
            'type' => 'getType'
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
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['fields'] = isset($data['fields']) ? $data['fields'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['bandwidthType'] = isset($data['bandwidthType']) ? $data['bandwidthType'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['nameLike'] = isset($data['nameLike']) ? $data['nameLike'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['ingressSize'] = isset($data['ingressSize']) ? $data['ingressSize'] : null;
        $this->container['adminState'] = isset($data['adminState']) ? $data['adminState'] : null;
        $this->container['billingInfo'] = isset($data['billingInfo']) ? $data['billingInfo'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['enableBandwidthRules'] = isset($data['enableBandwidthRules']) ? $data['enableBandwidthRules'] : null;
        $this->container['ruleQuota'] = isset($data['ruleQuota']) ? $data['ruleQuota'] : null;
        $this->container['publicBorderGroup'] = isset($data['publicBorderGroup']) ? $data['publicBorderGroup'] : null;
        $this->container['chargeMode'] = isset($data['chargeMode']) ? $data['chargeMode'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) > 36)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) < 0)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be bigger than or equal to 0.";
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
    * Gets limit
    *  - 功能说明：每页返回的个数 - 取值范围：取值范围：1~[2000]，其中2000为局点差异项，具体取值由局点决定
    *
    * @return string|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param string|null $limit - 功能说明：每页返回的个数 - 取值范围：取值范围：1~[2000]，其中2000为局点差异项，具体取值由局点决定
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets marker
    *  - 功能说明：分页查询起始的资源ID，为空时为查询第一页
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker - 功能说明：分页查询起始的资源ID，为空时为查询第一页
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets fields
    *  display in the form \"fields=id&fields=name&...\"  Supported fields：id/name/tenant_id/size/ratio_95peak_plus/ingress_size/bandwidth_type/admin_state/billing_info/charge_mode/type/publicip_info/enable_bandwidth_rules/rule_quota/bandwidth_rules/public_border_group/created_at/updated_at/lock_infos
    *
    * @return string[]|null
    */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
    * Sets fields
    *
    * @param string[]|null $fields display in the form \"fields=id&fields=name&...\"  Supported fields：id/name/tenant_id/size/ratio_95peak_plus/ingress_size/bandwidth_type/admin_state/billing_info/charge_mode/type/publicip_info/enable_bandwidth_rules/rule_quota/bandwidth_rules/public_border_group/created_at/updated_at/lock_infos
    *
    * @return $this
    */
    public function setFields($fields)
    {
        $this->container['fields'] = $fields;
        return $this;
    }

    /**
    * Gets id
    *  - 功能说明：带宽唯一标识
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id - 功能说明：带宽唯一标识
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets bandwidthType
    *  - 功能说明：带宽类型，共享带宽默认为share。 - 取值范围：share，bgp，telcom，sbgp等。   - share：共享带宽   - bgp：动态bgp   - telcom ：联通   - sbgp：静态bgp
    *
    * @return string|null
    */
    public function getBandwidthType()
    {
        return $this->container['bandwidthType'];
    }

    /**
    * Sets bandwidthType
    *
    * @param string|null $bandwidthType - 功能说明：带宽类型，共享带宽默认为share。 - 取值范围：share，bgp，telcom，sbgp等。   - share：共享带宽   - bgp：动态bgp   - telcom ：联通   - sbgp：静态bgp
    *
    * @return $this
    */
    public function setBandwidthType($bandwidthType)
    {
        $this->container['bandwidthType'] = $bandwidthType;
        return $this;
    }

    /**
    * Gets name
    *  - 功能说明：宽带名称，按照宽带名称过滤
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name - 功能说明：宽带名称，按照宽带名称过滤
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets nameLike
    *  - 功能说明：根据宽带名称模糊查询过滤
    *
    * @return string|null
    */
    public function getNameLike()
    {
        return $this->container['nameLike'];
    }

    /**
    * Sets nameLike
    *
    * @param string|null $nameLike - 功能说明：根据宽带名称模糊查询过滤
    *
    * @return $this
    */
    public function setNameLike($nameLike)
    {
        $this->container['nameLike'] = $nameLike;
        return $this;
    }

    /**
    * Gets tenantId
    *  - 功能说明：根据tenant_id过滤
    *
    * @return string|null
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string|null $tenantId - 功能说明：根据tenant_id过滤
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets ingressSize
    *  - 功能说明：根据入云大小过滤
    *
    * @return string|null
    */
    public function getIngressSize()
    {
        return $this->container['ingressSize'];
    }

    /**
    * Sets ingressSize
    *
    * @param string|null $ingressSize - 功能说明：根据入云大小过滤
    *
    * @return $this
    */
    public function setIngressSize($ingressSize)
    {
        $this->container['ingressSize'] = $ingressSize;
        return $this;
    }

    /**
    * Gets adminState
    *  - 功能说明：根据宽带状态过滤
    *
    * @return string|null
    */
    public function getAdminState()
    {
        return $this->container['adminState'];
    }

    /**
    * Sets adminState
    *
    * @param string|null $adminState - 功能说明：根据宽带状态过滤
    *
    * @return $this
    */
    public function setAdminState($adminState)
    {
        $this->container['adminState'] = $adminState;
        return $this;
    }

    /**
    * Gets billingInfo
    *  - 功能说明：根据计费信息过滤
    *
    * @return string|null
    */
    public function getBillingInfo()
    {
        return $this->container['billingInfo'];
    }

    /**
    * Sets billingInfo
    *
    * @param string|null $billingInfo - 功能说明：根据计费信息过滤
    *
    * @return $this
    */
    public function setBillingInfo($billingInfo)
    {
        $this->container['billingInfo'] = $billingInfo;
        return $this;
    }

    /**
    * Gets tags
    *  - 功能说明：根据标签过滤
    *
    * @return string|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string|null $tags - 功能说明：根据标签过滤
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets enableBandwidthRules
    *  - 功能说明：根据是否带宽分组使能过滤 - 取值范围：true、false
    *
    * @return string|null
    */
    public function getEnableBandwidthRules()
    {
        return $this->container['enableBandwidthRules'];
    }

    /**
    * Sets enableBandwidthRules
    *
    * @param string|null $enableBandwidthRules - 功能说明：根据是否带宽分组使能过滤 - 取值范围：true、false
    *
    * @return $this
    */
    public function setEnableBandwidthRules($enableBandwidthRules)
    {
        $this->container['enableBandwidthRules'] = $enableBandwidthRules;
        return $this;
    }

    /**
    * Gets ruleQuota
    *  - 功能说明：根据规则数值过滤
    *
    * @return int|null
    */
    public function getRuleQuota()
    {
        return $this->container['ruleQuota'];
    }

    /**
    * Sets ruleQuota
    *
    * @param int|null $ruleQuota - 功能说明：根据规则数值过滤
    *
    * @return $this
    */
    public function setRuleQuota($ruleQuota)
    {
        $this->container['ruleQuota'] = $ruleQuota;
        return $this;
    }

    /**
    * Gets publicBorderGroup
    *  - 功能说明：根据站点信息过滤
    *
    * @return string|null
    */
    public function getPublicBorderGroup()
    {
        return $this->container['publicBorderGroup'];
    }

    /**
    * Sets publicBorderGroup
    *
    * @param string|null $publicBorderGroup - 功能说明：根据站点信息过滤
    *
    * @return $this
    */
    public function setPublicBorderGroup($publicBorderGroup)
    {
        $this->container['publicBorderGroup'] = $publicBorderGroup;
        return $this;
    }

    /**
    * Gets chargeMode
    *  - 功能说明：按流量计费,按带宽计费还是按增强型95计费 - 取值范围：bandwidth（按带宽计费），traffic（按流量计费），95peak_plus（按增强型95计费），不返回或者为空时表示是bandwidth - 约束：只有共享带宽支持95peak_plus（按增强型95计费），按增强型95计费时需要指定保底百分比，默认是20%
    *
    * @return string|null
    */
    public function getChargeMode()
    {
        return $this->container['chargeMode'];
    }

    /**
    * Sets chargeMode
    *
    * @param string|null $chargeMode - 功能说明：按流量计费,按带宽计费还是按增强型95计费 - 取值范围：bandwidth（按带宽计费），traffic（按流量计费），95peak_plus（按增强型95计费），不返回或者为空时表示是bandwidth - 约束：只有共享带宽支持95peak_plus（按增强型95计费），按增强型95计费时需要指定保底百分比，默认是20%
    *
    * @return $this
    */
    public function setChargeMode($chargeMode)
    {
        $this->container['chargeMode'] = $chargeMode;
        return $this;
    }

    /**
    * Gets size
    *  - 功能说明：带宽大小。共享带宽的大小有最小值限制，默认为5M，可能因局点不同而不同。 - 取值范围：默认5Mbit/s~2000Mbit/s（具体范围以各区域配置为准，请参见控制台对应页面显示）。   调整带宽时的最小单位会根据带宽范围不同存在差异。 - 小于等于300Mbit/s：默认最小单位为1Mbit/s。 - 300Mbit/s~1000Mbit/s：默认最小单位为50Mbit/s。 - 大于1000Mbit/s：默认最小单位为500Mbit/s。
    *
    * @return string|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param string|null $size - 功能说明：带宽大小。共享带宽的大小有最小值限制，默认为5M，可能因局点不同而不同。 - 取值范围：默认5Mbit/s~2000Mbit/s（具体范围以各区域配置为准，请参见控制台对应页面显示）。   调整带宽时的最小单位会根据带宽范围不同存在差异。 - 小于等于300Mbit/s：默认最小单位为1Mbit/s。 - 300Mbit/s~1000Mbit/s：默认最小单位为50Mbit/s。 - 大于1000Mbit/s：默认最小单位为500Mbit/s。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets type
    *  - 功能说明：带宽类型，标识是否是共享带宽 - 取值范围：WHOLE，PER。   - WHOLE表示共享带宽   - PER表示独享带宽
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type - 功能说明：带宽类型，标识是否是共享带宽 - 取值范围：WHOLE，PER。   - WHOLE表示共享带宽   - PER表示独享带宽
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

