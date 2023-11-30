<?php

namespace HuaweiCloud\SDK\Eip\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EipBandwidthResponseBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EipBandwidthResponseBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * adminState  - 功能说明：带宽状态 - 取值范围：normal，freezed
    * ingressSize  - 功能说明：入网大小，单位Mbit/s
    * ruleQuota  - 功能说明：规则数值，最低阈值可调节
    * ratio95peakPlus  - 功能说明：增强型95带宽保底率，最低保底率为20
    * enableBandwidthRules  - 功能说明：带宽分组使能，表明开启带宽分组限速功能。
    * bandwidthRules  - 功能说明：带宽规则对象（该字段仅在上海1局点返回）
    * publicBorderGroup  - 功能说明：带宽AZ属性，表征中心和边缘。中心带宽默认为center
    * bandwidthType  - 功能说明：带宽类型，共享带宽默认为share。 - 取值范围：share，bgp，telcom，sbgp等。  share：共享带宽；  bgp：动态bgp；  telcom ：联通；  sbgp：静态bgp。
    * billinginfo  - 功能说明：账单信息，
    * id  - 功能说明：带宽唯一标识
    * name  - 功能说明：带宽名称 - 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * publicipInfo  - 功能说明：带宽对应的弹性公网IP信息 - 约束：WHOLE类型的带宽支持多个弹性公网IP，PER类型的带宽只能对应一个弹性公网IP
    * type  - 功能说明：带宽类型，标识是否是共享带宽 - 取值范围：WHOLE，PER。  WHOLE表示共享带宽；PER表示独享带宽
    * size  - 功能说明：带宽大小 - 取值范围：默认5Mbit/s~2000Mbit/s（具体范围以各区域配置为准，请参见控制台对应页面显示）。
    * tenantId  - 功能说明：用户所属项目ID
    * tags  - 功能说明：\"公网EIP标签\"
    * createdAt  - 功能说明：资源创建时间，采用UTC时间，格式：YYYY-MM-DDTHH:MM:SS
    * updatedAt  - 功能说明：资源更新时间，采用UTC时间，格式：YYYY-MM-DDTHH:MM:SS
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'adminState' => 'string',
            'ingressSize' => 'int',
            'ruleQuota' => 'int',
            'ratio95peakPlus' => 'int',
            'enableBandwidthRules' => 'bool',
            'bandwidthRules' => '\HuaweiCloud\SDK\Eip\V3\Model\BandWidthRules[]',
            'publicBorderGroup' => 'string',
            'bandwidthType' => 'string',
            'billinginfo' => 'string',
            'id' => 'string',
            'name' => 'string',
            'publicipInfo' => '\HuaweiCloud\SDK\Eip\V3\Model\PublicipInfoResponseBody[]',
            'type' => 'string',
            'size' => 'int',
            'tenantId' => 'string',
            'tags' => 'string[]',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * adminState  - 功能说明：带宽状态 - 取值范围：normal，freezed
    * ingressSize  - 功能说明：入网大小，单位Mbit/s
    * ruleQuota  - 功能说明：规则数值，最低阈值可调节
    * ratio95peakPlus  - 功能说明：增强型95带宽保底率，最低保底率为20
    * enableBandwidthRules  - 功能说明：带宽分组使能，表明开启带宽分组限速功能。
    * bandwidthRules  - 功能说明：带宽规则对象（该字段仅在上海1局点返回）
    * publicBorderGroup  - 功能说明：带宽AZ属性，表征中心和边缘。中心带宽默认为center
    * bandwidthType  - 功能说明：带宽类型，共享带宽默认为share。 - 取值范围：share，bgp，telcom，sbgp等。  share：共享带宽；  bgp：动态bgp；  telcom ：联通；  sbgp：静态bgp。
    * billinginfo  - 功能说明：账单信息，
    * id  - 功能说明：带宽唯一标识
    * name  - 功能说明：带宽名称 - 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * publicipInfo  - 功能说明：带宽对应的弹性公网IP信息 - 约束：WHOLE类型的带宽支持多个弹性公网IP，PER类型的带宽只能对应一个弹性公网IP
    * type  - 功能说明：带宽类型，标识是否是共享带宽 - 取值范围：WHOLE，PER。  WHOLE表示共享带宽；PER表示独享带宽
    * size  - 功能说明：带宽大小 - 取值范围：默认5Mbit/s~2000Mbit/s（具体范围以各区域配置为准，请参见控制台对应页面显示）。
    * tenantId  - 功能说明：用户所属项目ID
    * tags  - 功能说明：\"公网EIP标签\"
    * createdAt  - 功能说明：资源创建时间，采用UTC时间，格式：YYYY-MM-DDTHH:MM:SS
    * updatedAt  - 功能说明：资源更新时间，采用UTC时间，格式：YYYY-MM-DDTHH:MM:SS
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'adminState' => null,
        'ingressSize' => null,
        'ruleQuota' => null,
        'ratio95peakPlus' => null,
        'enableBandwidthRules' => null,
        'bandwidthRules' => null,
        'publicBorderGroup' => null,
        'bandwidthType' => null,
        'billinginfo' => null,
        'id' => 'uuid',
        'name' => null,
        'publicipInfo' => null,
        'type' => null,
        'size' => 'int32',
        'tenantId' => 'uuid',
        'tags' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time'
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
    * adminState  - 功能说明：带宽状态 - 取值范围：normal，freezed
    * ingressSize  - 功能说明：入网大小，单位Mbit/s
    * ruleQuota  - 功能说明：规则数值，最低阈值可调节
    * ratio95peakPlus  - 功能说明：增强型95带宽保底率，最低保底率为20
    * enableBandwidthRules  - 功能说明：带宽分组使能，表明开启带宽分组限速功能。
    * bandwidthRules  - 功能说明：带宽规则对象（该字段仅在上海1局点返回）
    * publicBorderGroup  - 功能说明：带宽AZ属性，表征中心和边缘。中心带宽默认为center
    * bandwidthType  - 功能说明：带宽类型，共享带宽默认为share。 - 取值范围：share，bgp，telcom，sbgp等。  share：共享带宽；  bgp：动态bgp；  telcom ：联通；  sbgp：静态bgp。
    * billinginfo  - 功能说明：账单信息，
    * id  - 功能说明：带宽唯一标识
    * name  - 功能说明：带宽名称 - 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * publicipInfo  - 功能说明：带宽对应的弹性公网IP信息 - 约束：WHOLE类型的带宽支持多个弹性公网IP，PER类型的带宽只能对应一个弹性公网IP
    * type  - 功能说明：带宽类型，标识是否是共享带宽 - 取值范围：WHOLE，PER。  WHOLE表示共享带宽；PER表示独享带宽
    * size  - 功能说明：带宽大小 - 取值范围：默认5Mbit/s~2000Mbit/s（具体范围以各区域配置为准，请参见控制台对应页面显示）。
    * tenantId  - 功能说明：用户所属项目ID
    * tags  - 功能说明：\"公网EIP标签\"
    * createdAt  - 功能说明：资源创建时间，采用UTC时间，格式：YYYY-MM-DDTHH:MM:SS
    * updatedAt  - 功能说明：资源更新时间，采用UTC时间，格式：YYYY-MM-DDTHH:MM:SS
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'adminState' => 'admin_state',
            'ingressSize' => 'ingress_size',
            'ruleQuota' => 'rule_quota',
            'ratio95peakPlus' => 'ratio_95peak_plus',
            'enableBandwidthRules' => 'enable_bandwidth_rules',
            'bandwidthRules' => 'bandwidth_rules',
            'publicBorderGroup' => 'public_border_group',
            'bandwidthType' => 'bandwidth_type',
            'billinginfo' => 'billinginfo',
            'id' => 'id',
            'name' => 'name',
            'publicipInfo' => 'publicip_info',
            'type' => 'type',
            'size' => 'size',
            'tenantId' => 'tenant_id',
            'tags' => 'tags',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * adminState  - 功能说明：带宽状态 - 取值范围：normal，freezed
    * ingressSize  - 功能说明：入网大小，单位Mbit/s
    * ruleQuota  - 功能说明：规则数值，最低阈值可调节
    * ratio95peakPlus  - 功能说明：增强型95带宽保底率，最低保底率为20
    * enableBandwidthRules  - 功能说明：带宽分组使能，表明开启带宽分组限速功能。
    * bandwidthRules  - 功能说明：带宽规则对象（该字段仅在上海1局点返回）
    * publicBorderGroup  - 功能说明：带宽AZ属性，表征中心和边缘。中心带宽默认为center
    * bandwidthType  - 功能说明：带宽类型，共享带宽默认为share。 - 取值范围：share，bgp，telcom，sbgp等。  share：共享带宽；  bgp：动态bgp；  telcom ：联通；  sbgp：静态bgp。
    * billinginfo  - 功能说明：账单信息，
    * id  - 功能说明：带宽唯一标识
    * name  - 功能说明：带宽名称 - 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * publicipInfo  - 功能说明：带宽对应的弹性公网IP信息 - 约束：WHOLE类型的带宽支持多个弹性公网IP，PER类型的带宽只能对应一个弹性公网IP
    * type  - 功能说明：带宽类型，标识是否是共享带宽 - 取值范围：WHOLE，PER。  WHOLE表示共享带宽；PER表示独享带宽
    * size  - 功能说明：带宽大小 - 取值范围：默认5Mbit/s~2000Mbit/s（具体范围以各区域配置为准，请参见控制台对应页面显示）。
    * tenantId  - 功能说明：用户所属项目ID
    * tags  - 功能说明：\"公网EIP标签\"
    * createdAt  - 功能说明：资源创建时间，采用UTC时间，格式：YYYY-MM-DDTHH:MM:SS
    * updatedAt  - 功能说明：资源更新时间，采用UTC时间，格式：YYYY-MM-DDTHH:MM:SS
    *
    * @var string[]
    */
    protected static $setters = [
            'adminState' => 'setAdminState',
            'ingressSize' => 'setIngressSize',
            'ruleQuota' => 'setRuleQuota',
            'ratio95peakPlus' => 'setRatio95peakPlus',
            'enableBandwidthRules' => 'setEnableBandwidthRules',
            'bandwidthRules' => 'setBandwidthRules',
            'publicBorderGroup' => 'setPublicBorderGroup',
            'bandwidthType' => 'setBandwidthType',
            'billinginfo' => 'setBillinginfo',
            'id' => 'setId',
            'name' => 'setName',
            'publicipInfo' => 'setPublicipInfo',
            'type' => 'setType',
            'size' => 'setSize',
            'tenantId' => 'setTenantId',
            'tags' => 'setTags',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * adminState  - 功能说明：带宽状态 - 取值范围：normal，freezed
    * ingressSize  - 功能说明：入网大小，单位Mbit/s
    * ruleQuota  - 功能说明：规则数值，最低阈值可调节
    * ratio95peakPlus  - 功能说明：增强型95带宽保底率，最低保底率为20
    * enableBandwidthRules  - 功能说明：带宽分组使能，表明开启带宽分组限速功能。
    * bandwidthRules  - 功能说明：带宽规则对象（该字段仅在上海1局点返回）
    * publicBorderGroup  - 功能说明：带宽AZ属性，表征中心和边缘。中心带宽默认为center
    * bandwidthType  - 功能说明：带宽类型，共享带宽默认为share。 - 取值范围：share，bgp，telcom，sbgp等。  share：共享带宽；  bgp：动态bgp；  telcom ：联通；  sbgp：静态bgp。
    * billinginfo  - 功能说明：账单信息，
    * id  - 功能说明：带宽唯一标识
    * name  - 功能说明：带宽名称 - 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * publicipInfo  - 功能说明：带宽对应的弹性公网IP信息 - 约束：WHOLE类型的带宽支持多个弹性公网IP，PER类型的带宽只能对应一个弹性公网IP
    * type  - 功能说明：带宽类型，标识是否是共享带宽 - 取值范围：WHOLE，PER。  WHOLE表示共享带宽；PER表示独享带宽
    * size  - 功能说明：带宽大小 - 取值范围：默认5Mbit/s~2000Mbit/s（具体范围以各区域配置为准，请参见控制台对应页面显示）。
    * tenantId  - 功能说明：用户所属项目ID
    * tags  - 功能说明：\"公网EIP标签\"
    * createdAt  - 功能说明：资源创建时间，采用UTC时间，格式：YYYY-MM-DDTHH:MM:SS
    * updatedAt  - 功能说明：资源更新时间，采用UTC时间，格式：YYYY-MM-DDTHH:MM:SS
    *
    * @var string[]
    */
    protected static $getters = [
            'adminState' => 'getAdminState',
            'ingressSize' => 'getIngressSize',
            'ruleQuota' => 'getRuleQuota',
            'ratio95peakPlus' => 'getRatio95peakPlus',
            'enableBandwidthRules' => 'getEnableBandwidthRules',
            'bandwidthRules' => 'getBandwidthRules',
            'publicBorderGroup' => 'getPublicBorderGroup',
            'bandwidthType' => 'getBandwidthType',
            'billinginfo' => 'getBillinginfo',
            'id' => 'getId',
            'name' => 'getName',
            'publicipInfo' => 'getPublicipInfo',
            'type' => 'getType',
            'size' => 'getSize',
            'tenantId' => 'getTenantId',
            'tags' => 'getTags',
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
    const TYPE_WHOLE = 'WHOLE';
    const TYPE_PER = 'PER';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_WHOLE,
            self::TYPE_PER,
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
        $this->container['adminState'] = isset($data['adminState']) ? $data['adminState'] : null;
        $this->container['ingressSize'] = isset($data['ingressSize']) ? $data['ingressSize'] : null;
        $this->container['ruleQuota'] = isset($data['ruleQuota']) ? $data['ruleQuota'] : null;
        $this->container['ratio95peakPlus'] = isset($data['ratio95peakPlus']) ? $data['ratio95peakPlus'] : null;
        $this->container['enableBandwidthRules'] = isset($data['enableBandwidthRules']) ? $data['enableBandwidthRules'] : null;
        $this->container['bandwidthRules'] = isset($data['bandwidthRules']) ? $data['bandwidthRules'] : null;
        $this->container['publicBorderGroup'] = isset($data['publicBorderGroup']) ? $data['publicBorderGroup'] : null;
        $this->container['bandwidthType'] = isset($data['bandwidthType']) ? $data['bandwidthType'] : null;
        $this->container['billinginfo'] = isset($data['billinginfo']) ? $data['billinginfo'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['publicipInfo'] = isset($data['publicipInfo']) ? $data['publicipInfo'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
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
            if (!is_null($this->container['billinginfo']) && (mb_strlen($this->container['billinginfo']) > 255)) {
                $invalidProperties[] = "invalid value for 'billinginfo', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['billinginfo']) && (mb_strlen($this->container['billinginfo']) < 0)) {
                $invalidProperties[] = "invalid value for 'billinginfo', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['size']) && ($this->container['size'] > 2000)) {
                $invalidProperties[] = "invalid value for 'size', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['size']) && ($this->container['size'] < 5)) {
                $invalidProperties[] = "invalid value for 'size', must be bigger than or equal to 5.";
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
    * Gets adminState
    *  - 功能说明：带宽状态 - 取值范围：normal，freezed
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
    * @param string|null $adminState - 功能说明：带宽状态 - 取值范围：normal，freezed
    *
    * @return $this
    */
    public function setAdminState($adminState)
    {
        $this->container['adminState'] = $adminState;
        return $this;
    }

    /**
    * Gets ingressSize
    *  - 功能说明：入网大小，单位Mbit/s
    *
    * @return int|null
    */
    public function getIngressSize()
    {
        return $this->container['ingressSize'];
    }

    /**
    * Sets ingressSize
    *
    * @param int|null $ingressSize - 功能说明：入网大小，单位Mbit/s
    *
    * @return $this
    */
    public function setIngressSize($ingressSize)
    {
        $this->container['ingressSize'] = $ingressSize;
        return $this;
    }

    /**
    * Gets ruleQuota
    *  - 功能说明：规则数值，最低阈值可调节
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
    * @param int|null $ruleQuota - 功能说明：规则数值，最低阈值可调节
    *
    * @return $this
    */
    public function setRuleQuota($ruleQuota)
    {
        $this->container['ruleQuota'] = $ruleQuota;
        return $this;
    }

    /**
    * Gets ratio95peakPlus
    *  - 功能说明：增强型95带宽保底率，最低保底率为20
    *
    * @return int|null
    */
    public function getRatio95peakPlus()
    {
        return $this->container['ratio95peakPlus'];
    }

    /**
    * Sets ratio95peakPlus
    *
    * @param int|null $ratio95peakPlus - 功能说明：增强型95带宽保底率，最低保底率为20
    *
    * @return $this
    */
    public function setRatio95peakPlus($ratio95peakPlus)
    {
        $this->container['ratio95peakPlus'] = $ratio95peakPlus;
        return $this;
    }

    /**
    * Gets enableBandwidthRules
    *  - 功能说明：带宽分组使能，表明开启带宽分组限速功能。
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
    * @param bool|null $enableBandwidthRules - 功能说明：带宽分组使能，表明开启带宽分组限速功能。
    *
    * @return $this
    */
    public function setEnableBandwidthRules($enableBandwidthRules)
    {
        $this->container['enableBandwidthRules'] = $enableBandwidthRules;
        return $this;
    }

    /**
    * Gets bandwidthRules
    *  - 功能说明：带宽规则对象（该字段仅在上海1局点返回）
    *
    * @return \HuaweiCloud\SDK\Eip\V3\Model\BandWidthRules[]|null
    */
    public function getBandwidthRules()
    {
        return $this->container['bandwidthRules'];
    }

    /**
    * Sets bandwidthRules
    *
    * @param \HuaweiCloud\SDK\Eip\V3\Model\BandWidthRules[]|null $bandwidthRules - 功能说明：带宽规则对象（该字段仅在上海1局点返回）
    *
    * @return $this
    */
    public function setBandwidthRules($bandwidthRules)
    {
        $this->container['bandwidthRules'] = $bandwidthRules;
        return $this;
    }

    /**
    * Gets publicBorderGroup
    *  - 功能说明：带宽AZ属性，表征中心和边缘。中心带宽默认为center
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
    * @param string|null $publicBorderGroup - 功能说明：带宽AZ属性，表征中心和边缘。中心带宽默认为center
    *
    * @return $this
    */
    public function setPublicBorderGroup($publicBorderGroup)
    {
        $this->container['publicBorderGroup'] = $publicBorderGroup;
        return $this;
    }

    /**
    * Gets bandwidthType
    *  - 功能说明：带宽类型，共享带宽默认为share。 - 取值范围：share，bgp，telcom，sbgp等。  share：共享带宽；  bgp：动态bgp；  telcom ：联通；  sbgp：静态bgp。
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
    * @param string|null $bandwidthType - 功能说明：带宽类型，共享带宽默认为share。 - 取值范围：share，bgp，telcom，sbgp等。  share：共享带宽；  bgp：动态bgp；  telcom ：联通；  sbgp：静态bgp。
    *
    * @return $this
    */
    public function setBandwidthType($bandwidthType)
    {
        $this->container['bandwidthType'] = $bandwidthType;
        return $this;
    }

    /**
    * Gets billinginfo
    *  - 功能说明：账单信息，
    *
    * @return string|null
    */
    public function getBillinginfo()
    {
        return $this->container['billinginfo'];
    }

    /**
    * Sets billinginfo
    *
    * @param string|null $billinginfo - 功能说明：账单信息，
    *
    * @return $this
    */
    public function setBillinginfo($billinginfo)
    {
        $this->container['billinginfo'] = $billinginfo;
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
    * Gets name
    *  - 功能说明：带宽名称 - 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
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
    * @param string|null $name - 功能说明：带宽名称 - 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
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
    *  - 功能说明：带宽对应的弹性公网IP信息 - 约束：WHOLE类型的带宽支持多个弹性公网IP，PER类型的带宽只能对应一个弹性公网IP
    *
    * @return \HuaweiCloud\SDK\Eip\V3\Model\PublicipInfoResponseBody[]|null
    */
    public function getPublicipInfo()
    {
        return $this->container['publicipInfo'];
    }

    /**
    * Sets publicipInfo
    *
    * @param \HuaweiCloud\SDK\Eip\V3\Model\PublicipInfoResponseBody[]|null $publicipInfo - 功能说明：带宽对应的弹性公网IP信息 - 约束：WHOLE类型的带宽支持多个弹性公网IP，PER类型的带宽只能对应一个弹性公网IP
    *
    * @return $this
    */
    public function setPublicipInfo($publicipInfo)
    {
        $this->container['publicipInfo'] = $publicipInfo;
        return $this;
    }

    /**
    * Gets type
    *  - 功能说明：带宽类型，标识是否是共享带宽 - 取值范围：WHOLE，PER。  WHOLE表示共享带宽；PER表示独享带宽
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
    * @param string|null $type - 功能说明：带宽类型，标识是否是共享带宽 - 取值范围：WHOLE，PER。  WHOLE表示共享带宽；PER表示独享带宽
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets size
    *  - 功能说明：带宽大小 - 取值范围：默认5Mbit/s~2000Mbit/s（具体范围以各区域配置为准，请参见控制台对应页面显示）。
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
    * @param int|null $size - 功能说明：带宽大小 - 取值范围：默认5Mbit/s~2000Mbit/s（具体范围以各区域配置为准，请参见控制台对应页面显示）。
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
    *  - 功能说明：用户所属项目ID
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
    * @param string|null $tenantId - 功能说明：用户所属项目ID
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets tags
    *  - 功能说明：\"公网EIP标签\"
    *
    * @return string[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string[]|null $tags - 功能说明：\"公网EIP标签\"
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets createdAt
    *  - 功能说明：资源创建时间，采用UTC时间，格式：YYYY-MM-DDTHH:MM:SS
    *
    * @return \DateTime|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime|null $createdAt - 功能说明：资源创建时间，采用UTC时间，格式：YYYY-MM-DDTHH:MM:SS
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
    *  - 功能说明：资源更新时间，采用UTC时间，格式：YYYY-MM-DDTHH:MM:SS
    *
    * @return \DateTime|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param \DateTime|null $updatedAt - 功能说明：资源更新时间，采用UTC时间，格式：YYYY-MM-DDTHH:MM:SS
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

