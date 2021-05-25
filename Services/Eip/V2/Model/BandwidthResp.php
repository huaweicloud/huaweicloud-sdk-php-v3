<?php

namespace HuaweiCloud\SDK\Eip\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BandwidthResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BandwidthResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bandwidthType  功能说明：带宽类型，共享带宽默认为share。  取值范围：share，bgp，telcom，sbgp等。  share：共享带宽  bgp：动态bgp  telcom ：联通  sbgp：静态bgp
    * billingInfo  功能说明：账单信息  如果billinginfo不为空，说明是包周期的带宽
    * chargeMode  功能说明：按流量计费,按带宽计费还是按增强型95计费。  取值范围：bandwidth，traffic，95peak_plus(按增强型95计费)不返回或者为空时表示是bandwidth。  约束：只有共享带宽支持95peak_plus（按增强型95计费），按增强型95计费时需要指定保底百分比，默认是20%。
    * id  功能说明：带宽唯一标识
    * name  功能说明：带宽名称  取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * publicipInfo  功能说明：带宽对应的弹性公网IP信息  约束：WHOLE类型的带宽支持多个弹性公网IP，PER类型的带宽只能对应一个弹性公网IP
    * shareType  功能说明：带宽类型，标识是否是共享带宽  取值范围：WHOLE，PER  WHOLE表示共享带宽；PER，表示独享带宽
    * size  功能说明：带宽大小  取值范围：默认5Mbit/s~2000Mbit/s（具体范围以各区域配置为准，请参见控制台对应页面显示）。
    * tenantId  功能说明：用户所属租户ID
    * enterpriseProjectId  企业项目ID。最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。  创建带宽时，给带宽绑定企业项目ID。
    * status  功能说明：带宽的状态  取值范围：  FREEZED：冻结  NORMAL：正常
    * enableBandwidthRules  功能说明：是否开启企业级qos，仅共享带宽支持开启。（该字段仅在上海1局点返回）
    * ruleQuota  功能说明：带宽支持的最大分组规则数。（该字段仅在上海1局点返回）
    * bandwidthRules  功能说明：带宽规则对象（该字段仅在上海1局点返回）
    * createdAt  功能说明：资源创建时间，UTC时间  格式： yyyy-MM-ddTHH:mm:ss
    * updatedAt  功能说明：资源更新时间，UTC时间  格式： yyyy-MM-ddTHH:mm:ss
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bandwidthType' => 'string',
            'billingInfo' => 'string',
            'chargeMode' => 'string',
            'id' => 'string',
            'name' => 'string',
            'publicipInfo' => '\HuaweiCloud\SDK\Eip\V2\Model\PublicipInfoResp[]',
            'shareType' => 'string',
            'size' => 'int',
            'tenantId' => 'string',
            'enterpriseProjectId' => 'string',
            'status' => 'string',
            'enableBandwidthRules' => 'bool',
            'ruleQuota' => 'int',
            'bandwidthRules' => '\HuaweiCloud\SDK\Eip\V2\Model\BandWidthRules[]',
            'createdAt' => 'string',
            'updatedAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bandwidthType  功能说明：带宽类型，共享带宽默认为share。  取值范围：share，bgp，telcom，sbgp等。  share：共享带宽  bgp：动态bgp  telcom ：联通  sbgp：静态bgp
    * billingInfo  功能说明：账单信息  如果billinginfo不为空，说明是包周期的带宽
    * chargeMode  功能说明：按流量计费,按带宽计费还是按增强型95计费。  取值范围：bandwidth，traffic，95peak_plus(按增强型95计费)不返回或者为空时表示是bandwidth。  约束：只有共享带宽支持95peak_plus（按增强型95计费），按增强型95计费时需要指定保底百分比，默认是20%。
    * id  功能说明：带宽唯一标识
    * name  功能说明：带宽名称  取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * publicipInfo  功能说明：带宽对应的弹性公网IP信息  约束：WHOLE类型的带宽支持多个弹性公网IP，PER类型的带宽只能对应一个弹性公网IP
    * shareType  功能说明：带宽类型，标识是否是共享带宽  取值范围：WHOLE，PER  WHOLE表示共享带宽；PER，表示独享带宽
    * size  功能说明：带宽大小  取值范围：默认5Mbit/s~2000Mbit/s（具体范围以各区域配置为准，请参见控制台对应页面显示）。
    * tenantId  功能说明：用户所属租户ID
    * enterpriseProjectId  企业项目ID。最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。  创建带宽时，给带宽绑定企业项目ID。
    * status  功能说明：带宽的状态  取值范围：  FREEZED：冻结  NORMAL：正常
    * enableBandwidthRules  功能说明：是否开启企业级qos，仅共享带宽支持开启。（该字段仅在上海1局点返回）
    * ruleQuota  功能说明：带宽支持的最大分组规则数。（该字段仅在上海1局点返回）
    * bandwidthRules  功能说明：带宽规则对象（该字段仅在上海1局点返回）
    * createdAt  功能说明：资源创建时间，UTC时间  格式： yyyy-MM-ddTHH:mm:ss
    * updatedAt  功能说明：资源更新时间，UTC时间  格式： yyyy-MM-ddTHH:mm:ss
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bandwidthType' => null,
        'billingInfo' => null,
        'chargeMode' => null,
        'id' => null,
        'name' => null,
        'publicipInfo' => null,
        'shareType' => null,
        'size' => 'int32',
        'tenantId' => null,
        'enterpriseProjectId' => null,
        'status' => null,
        'enableBandwidthRules' => null,
        'ruleQuota' => 'int32',
        'bandwidthRules' => null,
        'createdAt' => null,
        'updatedAt' => null
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
    * bandwidthType  功能说明：带宽类型，共享带宽默认为share。  取值范围：share，bgp，telcom，sbgp等。  share：共享带宽  bgp：动态bgp  telcom ：联通  sbgp：静态bgp
    * billingInfo  功能说明：账单信息  如果billinginfo不为空，说明是包周期的带宽
    * chargeMode  功能说明：按流量计费,按带宽计费还是按增强型95计费。  取值范围：bandwidth，traffic，95peak_plus(按增强型95计费)不返回或者为空时表示是bandwidth。  约束：只有共享带宽支持95peak_plus（按增强型95计费），按增强型95计费时需要指定保底百分比，默认是20%。
    * id  功能说明：带宽唯一标识
    * name  功能说明：带宽名称  取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * publicipInfo  功能说明：带宽对应的弹性公网IP信息  约束：WHOLE类型的带宽支持多个弹性公网IP，PER类型的带宽只能对应一个弹性公网IP
    * shareType  功能说明：带宽类型，标识是否是共享带宽  取值范围：WHOLE，PER  WHOLE表示共享带宽；PER，表示独享带宽
    * size  功能说明：带宽大小  取值范围：默认5Mbit/s~2000Mbit/s（具体范围以各区域配置为准，请参见控制台对应页面显示）。
    * tenantId  功能说明：用户所属租户ID
    * enterpriseProjectId  企业项目ID。最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。  创建带宽时，给带宽绑定企业项目ID。
    * status  功能说明：带宽的状态  取值范围：  FREEZED：冻结  NORMAL：正常
    * enableBandwidthRules  功能说明：是否开启企业级qos，仅共享带宽支持开启。（该字段仅在上海1局点返回）
    * ruleQuota  功能说明：带宽支持的最大分组规则数。（该字段仅在上海1局点返回）
    * bandwidthRules  功能说明：带宽规则对象（该字段仅在上海1局点返回）
    * createdAt  功能说明：资源创建时间，UTC时间  格式： yyyy-MM-ddTHH:mm:ss
    * updatedAt  功能说明：资源更新时间，UTC时间  格式： yyyy-MM-ddTHH:mm:ss
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bandwidthType' => 'bandwidth_type',
            'billingInfo' => 'billing_info',
            'chargeMode' => 'charge_mode',
            'id' => 'id',
            'name' => 'name',
            'publicipInfo' => 'publicip_info',
            'shareType' => 'share_type',
            'size' => 'size',
            'tenantId' => 'tenant_id',
            'enterpriseProjectId' => 'enterprise_project_id',
            'status' => 'status',
            'enableBandwidthRules' => 'enable_bandwidth_rules',
            'ruleQuota' => 'rule_quota',
            'bandwidthRules' => 'bandwidth_rules',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bandwidthType  功能说明：带宽类型，共享带宽默认为share。  取值范围：share，bgp，telcom，sbgp等。  share：共享带宽  bgp：动态bgp  telcom ：联通  sbgp：静态bgp
    * billingInfo  功能说明：账单信息  如果billinginfo不为空，说明是包周期的带宽
    * chargeMode  功能说明：按流量计费,按带宽计费还是按增强型95计费。  取值范围：bandwidth，traffic，95peak_plus(按增强型95计费)不返回或者为空时表示是bandwidth。  约束：只有共享带宽支持95peak_plus（按增强型95计费），按增强型95计费时需要指定保底百分比，默认是20%。
    * id  功能说明：带宽唯一标识
    * name  功能说明：带宽名称  取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * publicipInfo  功能说明：带宽对应的弹性公网IP信息  约束：WHOLE类型的带宽支持多个弹性公网IP，PER类型的带宽只能对应一个弹性公网IP
    * shareType  功能说明：带宽类型，标识是否是共享带宽  取值范围：WHOLE，PER  WHOLE表示共享带宽；PER，表示独享带宽
    * size  功能说明：带宽大小  取值范围：默认5Mbit/s~2000Mbit/s（具体范围以各区域配置为准，请参见控制台对应页面显示）。
    * tenantId  功能说明：用户所属租户ID
    * enterpriseProjectId  企业项目ID。最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。  创建带宽时，给带宽绑定企业项目ID。
    * status  功能说明：带宽的状态  取值范围：  FREEZED：冻结  NORMAL：正常
    * enableBandwidthRules  功能说明：是否开启企业级qos，仅共享带宽支持开启。（该字段仅在上海1局点返回）
    * ruleQuota  功能说明：带宽支持的最大分组规则数。（该字段仅在上海1局点返回）
    * bandwidthRules  功能说明：带宽规则对象（该字段仅在上海1局点返回）
    * createdAt  功能说明：资源创建时间，UTC时间  格式： yyyy-MM-ddTHH:mm:ss
    * updatedAt  功能说明：资源更新时间，UTC时间  格式： yyyy-MM-ddTHH:mm:ss
    *
    * @var string[]
    */
    protected static $setters = [
            'bandwidthType' => 'setBandwidthType',
            'billingInfo' => 'setBillingInfo',
            'chargeMode' => 'setChargeMode',
            'id' => 'setId',
            'name' => 'setName',
            'publicipInfo' => 'setPublicipInfo',
            'shareType' => 'setShareType',
            'size' => 'setSize',
            'tenantId' => 'setTenantId',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'status' => 'setStatus',
            'enableBandwidthRules' => 'setEnableBandwidthRules',
            'ruleQuota' => 'setRuleQuota',
            'bandwidthRules' => 'setBandwidthRules',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bandwidthType  功能说明：带宽类型，共享带宽默认为share。  取值范围：share，bgp，telcom，sbgp等。  share：共享带宽  bgp：动态bgp  telcom ：联通  sbgp：静态bgp
    * billingInfo  功能说明：账单信息  如果billinginfo不为空，说明是包周期的带宽
    * chargeMode  功能说明：按流量计费,按带宽计费还是按增强型95计费。  取值范围：bandwidth，traffic，95peak_plus(按增强型95计费)不返回或者为空时表示是bandwidth。  约束：只有共享带宽支持95peak_plus（按增强型95计费），按增强型95计费时需要指定保底百分比，默认是20%。
    * id  功能说明：带宽唯一标识
    * name  功能说明：带宽名称  取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * publicipInfo  功能说明：带宽对应的弹性公网IP信息  约束：WHOLE类型的带宽支持多个弹性公网IP，PER类型的带宽只能对应一个弹性公网IP
    * shareType  功能说明：带宽类型，标识是否是共享带宽  取值范围：WHOLE，PER  WHOLE表示共享带宽；PER，表示独享带宽
    * size  功能说明：带宽大小  取值范围：默认5Mbit/s~2000Mbit/s（具体范围以各区域配置为准，请参见控制台对应页面显示）。
    * tenantId  功能说明：用户所属租户ID
    * enterpriseProjectId  企业项目ID。最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。  创建带宽时，给带宽绑定企业项目ID。
    * status  功能说明：带宽的状态  取值范围：  FREEZED：冻结  NORMAL：正常
    * enableBandwidthRules  功能说明：是否开启企业级qos，仅共享带宽支持开启。（该字段仅在上海1局点返回）
    * ruleQuota  功能说明：带宽支持的最大分组规则数。（该字段仅在上海1局点返回）
    * bandwidthRules  功能说明：带宽规则对象（该字段仅在上海1局点返回）
    * createdAt  功能说明：资源创建时间，UTC时间  格式： yyyy-MM-ddTHH:mm:ss
    * updatedAt  功能说明：资源更新时间，UTC时间  格式： yyyy-MM-ddTHH:mm:ss
    *
    * @var string[]
    */
    protected static $getters = [
            'bandwidthType' => 'getBandwidthType',
            'billingInfo' => 'getBillingInfo',
            'chargeMode' => 'getChargeMode',
            'id' => 'getId',
            'name' => 'getName',
            'publicipInfo' => 'getPublicipInfo',
            'shareType' => 'getShareType',
            'size' => 'getSize',
            'tenantId' => 'getTenantId',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'status' => 'getStatus',
            'enableBandwidthRules' => 'getEnableBandwidthRules',
            'ruleQuota' => 'getRuleQuota',
            'bandwidthRules' => 'getBandwidthRules',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt'
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
    const CHARGE_MODE_BANDWIDTH = 'bandwidth';
    const CHARGE_MODE_TRAFFIC = 'traffic';
    const CHARGE_MODE__95PEAK_PLUS = '95peak_plus';
    const SHARE_TYPE_WHOLE = 'WHOLE';
    const SHARE_TYPE_PER = 'PER';
    const STATUS_FREEZED = 'FREEZED';
    const STATUS_NORMAL = 'NORMAL';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getChargeModeAllowableValues()
    {
        return [
            self::CHARGE_MODE_BANDWIDTH,
            self::CHARGE_MODE_TRAFFIC,
            self::CHARGE_MODE__95PEAK_PLUS,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getShareTypeAllowableValues()
    {
        return [
            self::SHARE_TYPE_WHOLE,
            self::SHARE_TYPE_PER,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_FREEZED,
            self::STATUS_NORMAL,
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
        $this->container['bandwidthType'] = isset($data['bandwidthType']) ? $data['bandwidthType'] : null;
        $this->container['billingInfo'] = isset($data['billingInfo']) ? $data['billingInfo'] : null;
        $this->container['chargeMode'] = isset($data['chargeMode']) ? $data['chargeMode'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['publicipInfo'] = isset($data['publicipInfo']) ? $data['publicipInfo'] : null;
        $this->container['shareType'] = isset($data['shareType']) ? $data['shareType'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['enableBandwidthRules'] = isset($data['enableBandwidthRules']) ? $data['enableBandwidthRules'] : null;
        $this->container['ruleQuota'] = isset($data['ruleQuota']) ? $data['ruleQuota'] : null;
        $this->container['bandwidthRules'] = isset($data['bandwidthRules']) ? $data['bandwidthRules'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['bandwidthType']) && (mb_strlen($this->container['bandwidthType']) > 36)) {
                $invalidProperties[] = "invalid value for 'bandwidthType', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['bandwidthType']) && (mb_strlen($this->container['bandwidthType']) < 1)) {
                $invalidProperties[] = "invalid value for 'bandwidthType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['billingInfo']) && (mb_strlen($this->container['billingInfo']) > 255)) {
                $invalidProperties[] = "invalid value for 'billingInfo', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['billingInfo']) && (mb_strlen($this->container['billingInfo']) < 0)) {
                $invalidProperties[] = "invalid value for 'billingInfo', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getChargeModeAllowableValues();
                if (!is_null($this->container['chargeMode']) && !in_array($this->container['chargeMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'chargeMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getShareTypeAllowableValues();
                if (!is_null($this->container['shareType']) && !in_array($this->container['shareType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'shareType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['tenantId']) && (mb_strlen($this->container['tenantId']) > 36)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 36.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
    * Gets bandwidthType
    *  功能说明：带宽类型，共享带宽默认为share。  取值范围：share，bgp，telcom，sbgp等。  share：共享带宽  bgp：动态bgp  telcom ：联通  sbgp：静态bgp
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
    * @param string|null $bandwidthType 功能说明：带宽类型，共享带宽默认为share。  取值范围：share，bgp，telcom，sbgp等。  share：共享带宽  bgp：动态bgp  telcom ：联通  sbgp：静态bgp
    *
    * @return $this
    */
    public function setBandwidthType($bandwidthType)
    {
        $this->container['bandwidthType'] = $bandwidthType;
        return $this;
    }

    /**
    * Gets billingInfo
    *  功能说明：账单信息  如果billinginfo不为空，说明是包周期的带宽
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
    * @param string|null $billingInfo 功能说明：账单信息  如果billinginfo不为空，说明是包周期的带宽
    *
    * @return $this
    */
    public function setBillingInfo($billingInfo)
    {
        $this->container['billingInfo'] = $billingInfo;
        return $this;
    }

    /**
    * Gets chargeMode
    *  功能说明：按流量计费,按带宽计费还是按增强型95计费。  取值范围：bandwidth，traffic，95peak_plus(按增强型95计费)不返回或者为空时表示是bandwidth。  约束：只有共享带宽支持95peak_plus（按增强型95计费），按增强型95计费时需要指定保底百分比，默认是20%。
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
    * @param string|null $chargeMode 功能说明：按流量计费,按带宽计费还是按增强型95计费。  取值范围：bandwidth，traffic，95peak_plus(按增强型95计费)不返回或者为空时表示是bandwidth。  约束：只有共享带宽支持95peak_plus（按增强型95计费），按增强型95计费时需要指定保底百分比，默认是20%。
    *
    * @return $this
    */
    public function setChargeMode($chargeMode)
    {
        $this->container['chargeMode'] = $chargeMode;
        return $this;
    }

    /**
    * Gets id
    *  功能说明：带宽唯一标识
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
    * @param string|null $id 功能说明：带宽唯一标识
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  功能说明：带宽名称  取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
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
    * @param string|null $name 功能说明：带宽名称  取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets publicipInfo
    *  功能说明：带宽对应的弹性公网IP信息  约束：WHOLE类型的带宽支持多个弹性公网IP，PER类型的带宽只能对应一个弹性公网IP
    *
    * @return \HuaweiCloud\SDK\Eip\V2\Model\PublicipInfoResp[]|null
    */
    public function getPublicipInfo()
    {
        return $this->container['publicipInfo'];
    }

    /**
    * Sets publicipInfo
    *
    * @param \HuaweiCloud\SDK\Eip\V2\Model\PublicipInfoResp[]|null $publicipInfo 功能说明：带宽对应的弹性公网IP信息  约束：WHOLE类型的带宽支持多个弹性公网IP，PER类型的带宽只能对应一个弹性公网IP
    *
    * @return $this
    */
    public function setPublicipInfo($publicipInfo)
    {
        $this->container['publicipInfo'] = $publicipInfo;
        return $this;
    }

    /**
    * Gets shareType
    *  功能说明：带宽类型，标识是否是共享带宽  取值范围：WHOLE，PER  WHOLE表示共享带宽；PER，表示独享带宽
    *
    * @return string|null
    */
    public function getShareType()
    {
        return $this->container['shareType'];
    }

    /**
    * Sets shareType
    *
    * @param string|null $shareType 功能说明：带宽类型，标识是否是共享带宽  取值范围：WHOLE，PER  WHOLE表示共享带宽；PER，表示独享带宽
    *
    * @return $this
    */
    public function setShareType($shareType)
    {
        $this->container['shareType'] = $shareType;
        return $this;
    }

    /**
    * Gets size
    *  功能说明：带宽大小  取值范围：默认5Mbit/s~2000Mbit/s（具体范围以各区域配置为准，请参见控制台对应页面显示）。
    *
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size 功能说明：带宽大小  取值范围：默认5Mbit/s~2000Mbit/s（具体范围以各区域配置为准，请参见控制台对应页面显示）。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets tenantId
    *  功能说明：用户所属租户ID
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
    * @param string|null $tenantId 功能说明：用户所属租户ID
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。  创建带宽时，给带宽绑定企业项目ID。
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
    * @param string|null $enterpriseProjectId 企业项目ID。最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。  创建带宽时，给带宽绑定企业项目ID。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets status
    *  功能说明：带宽的状态  取值范围：  FREEZED：冻结  NORMAL：正常
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 功能说明：带宽的状态  取值范围：  FREEZED：冻结  NORMAL：正常
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets enableBandwidthRules
    *  功能说明：是否开启企业级qos，仅共享带宽支持开启。（该字段仅在上海1局点返回）
    *
    * @return bool|null
    */
    public function getEnableBandwidthRules()
    {
        return $this->container['enableBandwidthRules'];
    }

    /**
    * Sets enableBandwidthRules
    *
    * @param bool|null $enableBandwidthRules 功能说明：是否开启企业级qos，仅共享带宽支持开启。（该字段仅在上海1局点返回）
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
    *  功能说明：带宽支持的最大分组规则数。（该字段仅在上海1局点返回）
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
    * @param int|null $ruleQuota 功能说明：带宽支持的最大分组规则数。（该字段仅在上海1局点返回）
    *
    * @return $this
    */
    public function setRuleQuota($ruleQuota)
    {
        $this->container['ruleQuota'] = $ruleQuota;
        return $this;
    }

    /**
    * Gets bandwidthRules
    *  功能说明：带宽规则对象（该字段仅在上海1局点返回）
    *
    * @return \HuaweiCloud\SDK\Eip\V2\Model\BandWidthRules[]|null
    */
    public function getBandwidthRules()
    {
        return $this->container['bandwidthRules'];
    }

    /**
    * Sets bandwidthRules
    *
    * @param \HuaweiCloud\SDK\Eip\V2\Model\BandWidthRules[]|null $bandwidthRules 功能说明：带宽规则对象（该字段仅在上海1局点返回）
    *
    * @return $this
    */
    public function setBandwidthRules($bandwidthRules)
    {
        $this->container['bandwidthRules'] = $bandwidthRules;
        return $this;
    }

    /**
    * Gets createdAt
    *  功能说明：资源创建时间，UTC时间  格式： yyyy-MM-ddTHH:mm:ss
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt 功能说明：资源创建时间，UTC时间  格式： yyyy-MM-ddTHH:mm:ss
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  功能说明：资源更新时间，UTC时间  格式： yyyy-MM-ddTHH:mm:ss
    *
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt 功能说明：资源更新时间，UTC时间  格式： yyyy-MM-ddTHH:mm:ss
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
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

