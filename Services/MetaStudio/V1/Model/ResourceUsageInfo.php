<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResourceUsageInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResourceUsageInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceType  资源类型。resource_spec_code/quota字段。
    * businessType  业务类型。 * VOICE_CLONE：声音制作 * SYNTHETICS_SOUND：声音合成 * ASSET_MANAGER：资产管理 * MODELING_2D：形象制作 * LIVE_2D：分身数字人视频直播 * VIDEO_2D：分身数字人视频制作 * CHAT_2D：分身数字人智能交互 * BUSINESS_CARD_2D：分身数字人名片 * PICTURE_2D：照片数字人视频 * MODELING_3D：3D照片建模 * VDS_3D：3D视觉驱动 * TTSA_3D：3D语音驱动 * FLEXUS_2D：FLEXUS版本资源
    * subResourceType  子资源类型。
    * isSubResource  是否子资源。子资源描述的是子资源的数量和单位
    * chargingMode  计费类型。 * PERIODIC: 包周期 * ONE_TIME：一次性 * ON_DEMAND：按需
    * resourceSource  资源来源。 * PURCHASED: 购买 * SP_ALLOCATED：SP分配 * ADMIN_ALLOCATED：系统管理员分配
    * amount  总量
    * usage  使用量
    * unit  单位。 * NUM：个数(形象/声音) * MIN：分钟（视频制作） * HOUR：小时 （直播） * CHANNEL：路（直播/交互） * GB：GB(资产管理) * MILLION_WORDS：百万字 * TEN_THOUSAND_WORDS：万字 * TIME：次
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceType' => 'string',
            'businessType' => 'string',
            'subResourceType' => 'string',
            'isSubResource' => 'bool',
            'chargingMode' => 'string',
            'resourceSource' => 'string',
            'amount' => 'float',
            'usage' => 'float',
            'unit' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceType  资源类型。resource_spec_code/quota字段。
    * businessType  业务类型。 * VOICE_CLONE：声音制作 * SYNTHETICS_SOUND：声音合成 * ASSET_MANAGER：资产管理 * MODELING_2D：形象制作 * LIVE_2D：分身数字人视频直播 * VIDEO_2D：分身数字人视频制作 * CHAT_2D：分身数字人智能交互 * BUSINESS_CARD_2D：分身数字人名片 * PICTURE_2D：照片数字人视频 * MODELING_3D：3D照片建模 * VDS_3D：3D视觉驱动 * TTSA_3D：3D语音驱动 * FLEXUS_2D：FLEXUS版本资源
    * subResourceType  子资源类型。
    * isSubResource  是否子资源。子资源描述的是子资源的数量和单位
    * chargingMode  计费类型。 * PERIODIC: 包周期 * ONE_TIME：一次性 * ON_DEMAND：按需
    * resourceSource  资源来源。 * PURCHASED: 购买 * SP_ALLOCATED：SP分配 * ADMIN_ALLOCATED：系统管理员分配
    * amount  总量
    * usage  使用量
    * unit  单位。 * NUM：个数(形象/声音) * MIN：分钟（视频制作） * HOUR：小时 （直播） * CHANNEL：路（直播/交互） * GB：GB(资产管理) * MILLION_WORDS：百万字 * TEN_THOUSAND_WORDS：万字 * TIME：次
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceType' => null,
        'businessType' => null,
        'subResourceType' => null,
        'isSubResource' => null,
        'chargingMode' => null,
        'resourceSource' => 'int64',
        'amount' => 'float32',
        'usage' => 'float32',
        'unit' => null
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
    * resourceType  资源类型。resource_spec_code/quota字段。
    * businessType  业务类型。 * VOICE_CLONE：声音制作 * SYNTHETICS_SOUND：声音合成 * ASSET_MANAGER：资产管理 * MODELING_2D：形象制作 * LIVE_2D：分身数字人视频直播 * VIDEO_2D：分身数字人视频制作 * CHAT_2D：分身数字人智能交互 * BUSINESS_CARD_2D：分身数字人名片 * PICTURE_2D：照片数字人视频 * MODELING_3D：3D照片建模 * VDS_3D：3D视觉驱动 * TTSA_3D：3D语音驱动 * FLEXUS_2D：FLEXUS版本资源
    * subResourceType  子资源类型。
    * isSubResource  是否子资源。子资源描述的是子资源的数量和单位
    * chargingMode  计费类型。 * PERIODIC: 包周期 * ONE_TIME：一次性 * ON_DEMAND：按需
    * resourceSource  资源来源。 * PURCHASED: 购买 * SP_ALLOCATED：SP分配 * ADMIN_ALLOCATED：系统管理员分配
    * amount  总量
    * usage  使用量
    * unit  单位。 * NUM：个数(形象/声音) * MIN：分钟（视频制作） * HOUR：小时 （直播） * CHANNEL：路（直播/交互） * GB：GB(资产管理) * MILLION_WORDS：百万字 * TEN_THOUSAND_WORDS：万字 * TIME：次
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceType' => 'resource_type',
            'businessType' => 'business_type',
            'subResourceType' => 'sub_resource_type',
            'isSubResource' => 'is_sub_resource',
            'chargingMode' => 'charging_mode',
            'resourceSource' => 'resource_source',
            'amount' => 'amount',
            'usage' => 'usage',
            'unit' => 'unit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceType  资源类型。resource_spec_code/quota字段。
    * businessType  业务类型。 * VOICE_CLONE：声音制作 * SYNTHETICS_SOUND：声音合成 * ASSET_MANAGER：资产管理 * MODELING_2D：形象制作 * LIVE_2D：分身数字人视频直播 * VIDEO_2D：分身数字人视频制作 * CHAT_2D：分身数字人智能交互 * BUSINESS_CARD_2D：分身数字人名片 * PICTURE_2D：照片数字人视频 * MODELING_3D：3D照片建模 * VDS_3D：3D视觉驱动 * TTSA_3D：3D语音驱动 * FLEXUS_2D：FLEXUS版本资源
    * subResourceType  子资源类型。
    * isSubResource  是否子资源。子资源描述的是子资源的数量和单位
    * chargingMode  计费类型。 * PERIODIC: 包周期 * ONE_TIME：一次性 * ON_DEMAND：按需
    * resourceSource  资源来源。 * PURCHASED: 购买 * SP_ALLOCATED：SP分配 * ADMIN_ALLOCATED：系统管理员分配
    * amount  总量
    * usage  使用量
    * unit  单位。 * NUM：个数(形象/声音) * MIN：分钟（视频制作） * HOUR：小时 （直播） * CHANNEL：路（直播/交互） * GB：GB(资产管理) * MILLION_WORDS：百万字 * TEN_THOUSAND_WORDS：万字 * TIME：次
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceType' => 'setResourceType',
            'businessType' => 'setBusinessType',
            'subResourceType' => 'setSubResourceType',
            'isSubResource' => 'setIsSubResource',
            'chargingMode' => 'setChargingMode',
            'resourceSource' => 'setResourceSource',
            'amount' => 'setAmount',
            'usage' => 'setUsage',
            'unit' => 'setUnit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceType  资源类型。resource_spec_code/quota字段。
    * businessType  业务类型。 * VOICE_CLONE：声音制作 * SYNTHETICS_SOUND：声音合成 * ASSET_MANAGER：资产管理 * MODELING_2D：形象制作 * LIVE_2D：分身数字人视频直播 * VIDEO_2D：分身数字人视频制作 * CHAT_2D：分身数字人智能交互 * BUSINESS_CARD_2D：分身数字人名片 * PICTURE_2D：照片数字人视频 * MODELING_3D：3D照片建模 * VDS_3D：3D视觉驱动 * TTSA_3D：3D语音驱动 * FLEXUS_2D：FLEXUS版本资源
    * subResourceType  子资源类型。
    * isSubResource  是否子资源。子资源描述的是子资源的数量和单位
    * chargingMode  计费类型。 * PERIODIC: 包周期 * ONE_TIME：一次性 * ON_DEMAND：按需
    * resourceSource  资源来源。 * PURCHASED: 购买 * SP_ALLOCATED：SP分配 * ADMIN_ALLOCATED：系统管理员分配
    * amount  总量
    * usage  使用量
    * unit  单位。 * NUM：个数(形象/声音) * MIN：分钟（视频制作） * HOUR：小时 （直播） * CHANNEL：路（直播/交互） * GB：GB(资产管理) * MILLION_WORDS：百万字 * TEN_THOUSAND_WORDS：万字 * TIME：次
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceType' => 'getResourceType',
            'businessType' => 'getBusinessType',
            'subResourceType' => 'getSubResourceType',
            'isSubResource' => 'getIsSubResource',
            'chargingMode' => 'getChargingMode',
            'resourceSource' => 'getResourceSource',
            'amount' => 'getAmount',
            'usage' => 'getUsage',
            'unit' => 'getUnit'
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
    const BUSINESS_TYPE_VOICE_CLONE = 'VOICE_CLONE';
    const BUSINESS_TYPE_SYNTHETICS_SOUND = 'SYNTHETICS_SOUND';
    const BUSINESS_TYPE_ASSET_MANAGER = 'ASSET_MANAGER';
    const BUSINESS_TYPE_MODELING_2_D = 'MODELING_2D';
    const BUSINESS_TYPE_LIVE_2_D = 'LIVE_2D';
    const BUSINESS_TYPE_VIDEO_2_D = 'VIDEO_2D';
    const BUSINESS_TYPE_CHAT_2_D = 'CHAT_2D';
    const BUSINESS_TYPE_BUSINESS_CARD_2_D = 'BUSINESS_CARD_2D';
    const BUSINESS_TYPE_PICTURE_2_D = 'PICTURE_2D';
    const BUSINESS_TYPE_MODELING_3_D = 'MODELING_3D';
    const BUSINESS_TYPE_VDS_3_D = 'VDS_3D';
    const BUSINESS_TYPE_TTSA_3_D = 'TTSA_3D';
    const BUSINESS_TYPE_FLEXUS_2_D = 'FLEXUS_2D';
    const CHARGING_MODE_PERIODIC = 'PERIODIC';
    const CHARGING_MODE_ONE_TIME = 'ONE_TIME';
    const CHARGING_MODE_ON_DEMAND = 'ON_DEMAND';
    const UNIT_NUM = 'NUM';
    const UNIT_MIN = 'MIN';
    const UNIT_HOUR = 'HOUR';
    const UNIT_CHANNEL = 'CHANNEL';
    const UNIT_GB = 'GB';
    const UNIT_MILLION_WORDS = 'MILLION_WORDS';
    const UNIT_TEN_THOUSAND_WORDS = 'TEN_THOUSAND_WORDS';
    const UNIT_TIME = 'TIME';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getBusinessTypeAllowableValues()
    {
        return [
            self::BUSINESS_TYPE_VOICE_CLONE,
            self::BUSINESS_TYPE_SYNTHETICS_SOUND,
            self::BUSINESS_TYPE_ASSET_MANAGER,
            self::BUSINESS_TYPE_MODELING_2_D,
            self::BUSINESS_TYPE_LIVE_2_D,
            self::BUSINESS_TYPE_VIDEO_2_D,
            self::BUSINESS_TYPE_CHAT_2_D,
            self::BUSINESS_TYPE_BUSINESS_CARD_2_D,
            self::BUSINESS_TYPE_PICTURE_2_D,
            self::BUSINESS_TYPE_MODELING_3_D,
            self::BUSINESS_TYPE_VDS_3_D,
            self::BUSINESS_TYPE_TTSA_3_D,
            self::BUSINESS_TYPE_FLEXUS_2_D,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getChargingModeAllowableValues()
    {
        return [
            self::CHARGING_MODE_PERIODIC,
            self::CHARGING_MODE_ONE_TIME,
            self::CHARGING_MODE_ON_DEMAND,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getUnitAllowableValues()
    {
        return [
            self::UNIT_NUM,
            self::UNIT_MIN,
            self::UNIT_HOUR,
            self::UNIT_CHANNEL,
            self::UNIT_GB,
            self::UNIT_MILLION_WORDS,
            self::UNIT_TEN_THOUSAND_WORDS,
            self::UNIT_TIME,
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
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['businessType'] = isset($data['businessType']) ? $data['businessType'] : null;
        $this->container['subResourceType'] = isset($data['subResourceType']) ? $data['subResourceType'] : null;
        $this->container['isSubResource'] = isset($data['isSubResource']) ? $data['isSubResource'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['resourceSource'] = isset($data['resourceSource']) ? $data['resourceSource'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['usage'] = isset($data['usage']) ? $data['usage'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['resourceType']) && (mb_strlen($this->container['resourceType']) > 64)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['resourceType']) && (mb_strlen($this->container['resourceType']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getBusinessTypeAllowableValues();
                if (!is_null($this->container['businessType']) && !in_array($this->container['businessType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'businessType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['businessType']) && (mb_strlen($this->container['businessType']) > 32)) {
                $invalidProperties[] = "invalid value for 'businessType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['businessType']) && (mb_strlen($this->container['businessType']) < 1)) {
                $invalidProperties[] = "invalid value for 'businessType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['subResourceType']) && (mb_strlen($this->container['subResourceType']) > 64)) {
                $invalidProperties[] = "invalid value for 'subResourceType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['subResourceType']) && (mb_strlen($this->container['subResourceType']) < 1)) {
                $invalidProperties[] = "invalid value for 'subResourceType', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getChargingModeAllowableValues();
                if (!is_null($this->container['chargingMode']) && !in_array($this->container['chargingMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'chargingMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['chargingMode']) && (mb_strlen($this->container['chargingMode']) > 128)) {
                $invalidProperties[] = "invalid value for 'chargingMode', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['chargingMode']) && (mb_strlen($this->container['chargingMode']) < 1)) {
                $invalidProperties[] = "invalid value for 'chargingMode', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['resourceSource']) && (mb_strlen($this->container['resourceSource']) > 64)) {
                $invalidProperties[] = "invalid value for 'resourceSource', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['resourceSource']) && (mb_strlen($this->container['resourceSource']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceSource', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['amount']) && ($this->container['amount'] > 1E+6)) {
                $invalidProperties[] = "invalid value for 'amount', must be smaller than or equal to 1E+6.";
            }
            if (!is_null($this->container['amount']) && ($this->container['amount'] < 0)) {
                $invalidProperties[] = "invalid value for 'amount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['usage']) && ($this->container['usage'] > 1E+6)) {
                $invalidProperties[] = "invalid value for 'usage', must be smaller than or equal to 1E+6.";
            }
            if (!is_null($this->container['usage']) && ($this->container['usage'] < 0)) {
                $invalidProperties[] = "invalid value for 'usage', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getUnitAllowableValues();
                if (!is_null($this->container['unit']) && !in_array($this->container['unit'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'unit', must be one of '%s'",
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
    * Gets resourceType
    *  资源类型。resource_spec_code/quota字段。
    *
    * @return string|null
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string|null $resourceType 资源类型。resource_spec_code/quota字段。
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets businessType
    *  业务类型。 * VOICE_CLONE：声音制作 * SYNTHETICS_SOUND：声音合成 * ASSET_MANAGER：资产管理 * MODELING_2D：形象制作 * LIVE_2D：分身数字人视频直播 * VIDEO_2D：分身数字人视频制作 * CHAT_2D：分身数字人智能交互 * BUSINESS_CARD_2D：分身数字人名片 * PICTURE_2D：照片数字人视频 * MODELING_3D：3D照片建模 * VDS_3D：3D视觉驱动 * TTSA_3D：3D语音驱动 * FLEXUS_2D：FLEXUS版本资源
    *
    * @return string|null
    */
    public function getBusinessType()
    {
        return $this->container['businessType'];
    }

    /**
    * Sets businessType
    *
    * @param string|null $businessType 业务类型。 * VOICE_CLONE：声音制作 * SYNTHETICS_SOUND：声音合成 * ASSET_MANAGER：资产管理 * MODELING_2D：形象制作 * LIVE_2D：分身数字人视频直播 * VIDEO_2D：分身数字人视频制作 * CHAT_2D：分身数字人智能交互 * BUSINESS_CARD_2D：分身数字人名片 * PICTURE_2D：照片数字人视频 * MODELING_3D：3D照片建模 * VDS_3D：3D视觉驱动 * TTSA_3D：3D语音驱动 * FLEXUS_2D：FLEXUS版本资源
    *
    * @return $this
    */
    public function setBusinessType($businessType)
    {
        $this->container['businessType'] = $businessType;
        return $this;
    }

    /**
    * Gets subResourceType
    *  子资源类型。
    *
    * @return string|null
    */
    public function getSubResourceType()
    {
        return $this->container['subResourceType'];
    }

    /**
    * Sets subResourceType
    *
    * @param string|null $subResourceType 子资源类型。
    *
    * @return $this
    */
    public function setSubResourceType($subResourceType)
    {
        $this->container['subResourceType'] = $subResourceType;
        return $this;
    }

    /**
    * Gets isSubResource
    *  是否子资源。子资源描述的是子资源的数量和单位
    *
    * @return bool|null
    */
    public function getIsSubResource()
    {
        return $this->container['isSubResource'];
    }

    /**
    * Sets isSubResource
    *
    * @param bool|null $isSubResource 是否子资源。子资源描述的是子资源的数量和单位
    *
    * @return $this
    */
    public function setIsSubResource($isSubResource)
    {
        $this->container['isSubResource'] = $isSubResource;
        return $this;
    }

    /**
    * Gets chargingMode
    *  计费类型。 * PERIODIC: 包周期 * ONE_TIME：一次性 * ON_DEMAND：按需
    *
    * @return string|null
    */
    public function getChargingMode()
    {
        return $this->container['chargingMode'];
    }

    /**
    * Sets chargingMode
    *
    * @param string|null $chargingMode 计费类型。 * PERIODIC: 包周期 * ONE_TIME：一次性 * ON_DEMAND：按需
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
        return $this;
    }

    /**
    * Gets resourceSource
    *  资源来源。 * PURCHASED: 购买 * SP_ALLOCATED：SP分配 * ADMIN_ALLOCATED：系统管理员分配
    *
    * @return string|null
    */
    public function getResourceSource()
    {
        return $this->container['resourceSource'];
    }

    /**
    * Sets resourceSource
    *
    * @param string|null $resourceSource 资源来源。 * PURCHASED: 购买 * SP_ALLOCATED：SP分配 * ADMIN_ALLOCATED：系统管理员分配
    *
    * @return $this
    */
    public function setResourceSource($resourceSource)
    {
        $this->container['resourceSource'] = $resourceSource;
        return $this;
    }

    /**
    * Gets amount
    *  总量
    *
    * @return float|null
    */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
    * Sets amount
    *
    * @param float|null $amount 总量
    *
    * @return $this
    */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;
        return $this;
    }

    /**
    * Gets usage
    *  使用量
    *
    * @return float|null
    */
    public function getUsage()
    {
        return $this->container['usage'];
    }

    /**
    * Sets usage
    *
    * @param float|null $usage 使用量
    *
    * @return $this
    */
    public function setUsage($usage)
    {
        $this->container['usage'] = $usage;
        return $this;
    }

    /**
    * Gets unit
    *  单位。 * NUM：个数(形象/声音) * MIN：分钟（视频制作） * HOUR：小时 （直播） * CHANNEL：路（直播/交互） * GB：GB(资产管理) * MILLION_WORDS：百万字 * TEN_THOUSAND_WORDS：万字 * TIME：次
    *
    * @return string|null
    */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
    * Sets unit
    *
    * @param string|null $unit 单位。 * NUM：个数(形象/声音) * MIN：分钟（视频制作） * HOUR：小时 （直播） * CHANNEL：路（直播/交互） * GB：GB(资产管理) * MILLION_WORDS：百万字 * TEN_THOUSAND_WORDS：万字 * TIME：次
    *
    * @return $this
    */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;
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

