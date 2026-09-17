<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProductQuotingItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProductQuotingItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * itemId  报价项ID
    * productId  产品ID
    * productSpecName  产品规格名称
    * cloudServiceType  云服务编码
    * cloudServiceTypeName  云服务名称
    * siteCode  运营站点编码
    * relatedRegions  产品关联的云服务区信息列表
    * chargeEventCode  计费事件编码
    * chargingMode  计费模式，ONDEMAND：按需、ONETIME：一次性、DAILY：包天、MONTHLY：包月、1_YEARLY：包1年、2_YEARLY：包2年、3_YEARLY：包3年、4_YEARLY：包4年、5_YEARLY：包5年、1_YEARLY_RI：包1年预留实例、3_YEARLY_RI：包3年预留实例
    * preferentialCategory  优惠分类：0：普通优惠，1：产品阶梯，2：分时优惠
    * preferentialType  优惠方式：0：产品折扣，1：固定单价
    * salesPrice  固定单价（preferential_type=1固定单价时有值）
    * discountRatio  折扣率（preferential_type=0产品折扣时有值）
    * pricingBasis  计费单位
    * effectiveTime  报价项生效时间，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ
    * expireTime  报价项失效时间，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ
    * productQuotingItemSteps  产品报价项阶梯列表，产品阶梯或分时优惠时有值返回，否则返回空列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'itemId' => 'string',
            'productId' => 'string',
            'productSpecName' => 'string',
            'cloudServiceType' => 'string',
            'cloudServiceTypeName' => 'string',
            'siteCode' => 'string',
            'relatedRegions' => '\HuaweiCloud\SDK\Bss\V2\Model\RegionInfo[]',
            'chargeEventCode' => 'string',
            'chargingMode' => 'string',
            'preferentialCategory' => 'int',
            'preferentialType' => 'int',
            'salesPrice' => 'float',
            'discountRatio' => 'float',
            'pricingBasis' => 'string',
            'effectiveTime' => 'string',
            'expireTime' => 'string',
            'productQuotingItemSteps' => '\HuaweiCloud\SDK\Bss\V2\Model\ProductQuotingItemStep[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * itemId  报价项ID
    * productId  产品ID
    * productSpecName  产品规格名称
    * cloudServiceType  云服务编码
    * cloudServiceTypeName  云服务名称
    * siteCode  运营站点编码
    * relatedRegions  产品关联的云服务区信息列表
    * chargeEventCode  计费事件编码
    * chargingMode  计费模式，ONDEMAND：按需、ONETIME：一次性、DAILY：包天、MONTHLY：包月、1_YEARLY：包1年、2_YEARLY：包2年、3_YEARLY：包3年、4_YEARLY：包4年、5_YEARLY：包5年、1_YEARLY_RI：包1年预留实例、3_YEARLY_RI：包3年预留实例
    * preferentialCategory  优惠分类：0：普通优惠，1：产品阶梯，2：分时优惠
    * preferentialType  优惠方式：0：产品折扣，1：固定单价
    * salesPrice  固定单价（preferential_type=1固定单价时有值）
    * discountRatio  折扣率（preferential_type=0产品折扣时有值）
    * pricingBasis  计费单位
    * effectiveTime  报价项生效时间，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ
    * expireTime  报价项失效时间，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ
    * productQuotingItemSteps  产品报价项阶梯列表，产品阶梯或分时优惠时有值返回，否则返回空列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'itemId' => null,
        'productId' => null,
        'productSpecName' => null,
        'cloudServiceType' => null,
        'cloudServiceTypeName' => null,
        'siteCode' => null,
        'relatedRegions' => null,
        'chargeEventCode' => null,
        'chargingMode' => null,
        'preferentialCategory' => 'int32',
        'preferentialType' => 'int32',
        'salesPrice' => 'bigdecimal',
        'discountRatio' => 'bigdecimal',
        'pricingBasis' => null,
        'effectiveTime' => null,
        'expireTime' => null,
        'productQuotingItemSteps' => null
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
    * itemId  报价项ID
    * productId  产品ID
    * productSpecName  产品规格名称
    * cloudServiceType  云服务编码
    * cloudServiceTypeName  云服务名称
    * siteCode  运营站点编码
    * relatedRegions  产品关联的云服务区信息列表
    * chargeEventCode  计费事件编码
    * chargingMode  计费模式，ONDEMAND：按需、ONETIME：一次性、DAILY：包天、MONTHLY：包月、1_YEARLY：包1年、2_YEARLY：包2年、3_YEARLY：包3年、4_YEARLY：包4年、5_YEARLY：包5年、1_YEARLY_RI：包1年预留实例、3_YEARLY_RI：包3年预留实例
    * preferentialCategory  优惠分类：0：普通优惠，1：产品阶梯，2：分时优惠
    * preferentialType  优惠方式：0：产品折扣，1：固定单价
    * salesPrice  固定单价（preferential_type=1固定单价时有值）
    * discountRatio  折扣率（preferential_type=0产品折扣时有值）
    * pricingBasis  计费单位
    * effectiveTime  报价项生效时间，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ
    * expireTime  报价项失效时间，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ
    * productQuotingItemSteps  产品报价项阶梯列表，产品阶梯或分时优惠时有值返回，否则返回空列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'itemId' => 'item_id',
            'productId' => 'product_id',
            'productSpecName' => 'product_spec_name',
            'cloudServiceType' => 'cloud_service_type',
            'cloudServiceTypeName' => 'cloud_service_type_name',
            'siteCode' => 'site_code',
            'relatedRegions' => 'related_regions',
            'chargeEventCode' => 'charge_event_code',
            'chargingMode' => 'charging_mode',
            'preferentialCategory' => 'preferential_category',
            'preferentialType' => 'preferential_type',
            'salesPrice' => 'sales_price',
            'discountRatio' => 'discount_ratio',
            'pricingBasis' => 'pricing_basis',
            'effectiveTime' => 'effective_time',
            'expireTime' => 'expire_time',
            'productQuotingItemSteps' => 'product_quoting_item_steps'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * itemId  报价项ID
    * productId  产品ID
    * productSpecName  产品规格名称
    * cloudServiceType  云服务编码
    * cloudServiceTypeName  云服务名称
    * siteCode  运营站点编码
    * relatedRegions  产品关联的云服务区信息列表
    * chargeEventCode  计费事件编码
    * chargingMode  计费模式，ONDEMAND：按需、ONETIME：一次性、DAILY：包天、MONTHLY：包月、1_YEARLY：包1年、2_YEARLY：包2年、3_YEARLY：包3年、4_YEARLY：包4年、5_YEARLY：包5年、1_YEARLY_RI：包1年预留实例、3_YEARLY_RI：包3年预留实例
    * preferentialCategory  优惠分类：0：普通优惠，1：产品阶梯，2：分时优惠
    * preferentialType  优惠方式：0：产品折扣，1：固定单价
    * salesPrice  固定单价（preferential_type=1固定单价时有值）
    * discountRatio  折扣率（preferential_type=0产品折扣时有值）
    * pricingBasis  计费单位
    * effectiveTime  报价项生效时间，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ
    * expireTime  报价项失效时间，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ
    * productQuotingItemSteps  产品报价项阶梯列表，产品阶梯或分时优惠时有值返回，否则返回空列表
    *
    * @var string[]
    */
    protected static $setters = [
            'itemId' => 'setItemId',
            'productId' => 'setProductId',
            'productSpecName' => 'setProductSpecName',
            'cloudServiceType' => 'setCloudServiceType',
            'cloudServiceTypeName' => 'setCloudServiceTypeName',
            'siteCode' => 'setSiteCode',
            'relatedRegions' => 'setRelatedRegions',
            'chargeEventCode' => 'setChargeEventCode',
            'chargingMode' => 'setChargingMode',
            'preferentialCategory' => 'setPreferentialCategory',
            'preferentialType' => 'setPreferentialType',
            'salesPrice' => 'setSalesPrice',
            'discountRatio' => 'setDiscountRatio',
            'pricingBasis' => 'setPricingBasis',
            'effectiveTime' => 'setEffectiveTime',
            'expireTime' => 'setExpireTime',
            'productQuotingItemSteps' => 'setProductQuotingItemSteps'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * itemId  报价项ID
    * productId  产品ID
    * productSpecName  产品规格名称
    * cloudServiceType  云服务编码
    * cloudServiceTypeName  云服务名称
    * siteCode  运营站点编码
    * relatedRegions  产品关联的云服务区信息列表
    * chargeEventCode  计费事件编码
    * chargingMode  计费模式，ONDEMAND：按需、ONETIME：一次性、DAILY：包天、MONTHLY：包月、1_YEARLY：包1年、2_YEARLY：包2年、3_YEARLY：包3年、4_YEARLY：包4年、5_YEARLY：包5年、1_YEARLY_RI：包1年预留实例、3_YEARLY_RI：包3年预留实例
    * preferentialCategory  优惠分类：0：普通优惠，1：产品阶梯，2：分时优惠
    * preferentialType  优惠方式：0：产品折扣，1：固定单价
    * salesPrice  固定单价（preferential_type=1固定单价时有值）
    * discountRatio  折扣率（preferential_type=0产品折扣时有值）
    * pricingBasis  计费单位
    * effectiveTime  报价项生效时间，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ
    * expireTime  报价项失效时间，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ
    * productQuotingItemSteps  产品报价项阶梯列表，产品阶梯或分时优惠时有值返回，否则返回空列表
    *
    * @var string[]
    */
    protected static $getters = [
            'itemId' => 'getItemId',
            'productId' => 'getProductId',
            'productSpecName' => 'getProductSpecName',
            'cloudServiceType' => 'getCloudServiceType',
            'cloudServiceTypeName' => 'getCloudServiceTypeName',
            'siteCode' => 'getSiteCode',
            'relatedRegions' => 'getRelatedRegions',
            'chargeEventCode' => 'getChargeEventCode',
            'chargingMode' => 'getChargingMode',
            'preferentialCategory' => 'getPreferentialCategory',
            'preferentialType' => 'getPreferentialType',
            'salesPrice' => 'getSalesPrice',
            'discountRatio' => 'getDiscountRatio',
            'pricingBasis' => 'getPricingBasis',
            'effectiveTime' => 'getEffectiveTime',
            'expireTime' => 'getExpireTime',
            'productQuotingItemSteps' => 'getProductQuotingItemSteps'
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
        $this->container['itemId'] = isset($data['itemId']) ? $data['itemId'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['productSpecName'] = isset($data['productSpecName']) ? $data['productSpecName'] : null;
        $this->container['cloudServiceType'] = isset($data['cloudServiceType']) ? $data['cloudServiceType'] : null;
        $this->container['cloudServiceTypeName'] = isset($data['cloudServiceTypeName']) ? $data['cloudServiceTypeName'] : null;
        $this->container['siteCode'] = isset($data['siteCode']) ? $data['siteCode'] : null;
        $this->container['relatedRegions'] = isset($data['relatedRegions']) ? $data['relatedRegions'] : null;
        $this->container['chargeEventCode'] = isset($data['chargeEventCode']) ? $data['chargeEventCode'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['preferentialCategory'] = isset($data['preferentialCategory']) ? $data['preferentialCategory'] : null;
        $this->container['preferentialType'] = isset($data['preferentialType']) ? $data['preferentialType'] : null;
        $this->container['salesPrice'] = isset($data['salesPrice']) ? $data['salesPrice'] : null;
        $this->container['discountRatio'] = isset($data['discountRatio']) ? $data['discountRatio'] : null;
        $this->container['pricingBasis'] = isset($data['pricingBasis']) ? $data['pricingBasis'] : null;
        $this->container['effectiveTime'] = isset($data['effectiveTime']) ? $data['effectiveTime'] : null;
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
        $this->container['productQuotingItemSteps'] = isset($data['productQuotingItemSteps']) ? $data['productQuotingItemSteps'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['itemId']) && (mb_strlen($this->container['itemId']) > 64)) {
                $invalidProperties[] = "invalid value for 'itemId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['itemId']) && (mb_strlen($this->container['itemId']) < 0)) {
                $invalidProperties[] = "invalid value for 'itemId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['productId']) && (mb_strlen($this->container['productId']) > 64)) {
                $invalidProperties[] = "invalid value for 'productId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['productId']) && (mb_strlen($this->container['productId']) < 0)) {
                $invalidProperties[] = "invalid value for 'productId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['productSpecName']) && (mb_strlen($this->container['productSpecName']) > 256)) {
                $invalidProperties[] = "invalid value for 'productSpecName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['productSpecName']) && (mb_strlen($this->container['productSpecName']) < 0)) {
                $invalidProperties[] = "invalid value for 'productSpecName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cloudServiceType']) && (mb_strlen($this->container['cloudServiceType']) > 64)) {
                $invalidProperties[] = "invalid value for 'cloudServiceType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['cloudServiceType']) && (mb_strlen($this->container['cloudServiceType']) < 0)) {
                $invalidProperties[] = "invalid value for 'cloudServiceType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cloudServiceTypeName']) && (mb_strlen($this->container['cloudServiceTypeName']) > 256)) {
                $invalidProperties[] = "invalid value for 'cloudServiceTypeName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['cloudServiceTypeName']) && (mb_strlen($this->container['cloudServiceTypeName']) < 0)) {
                $invalidProperties[] = "invalid value for 'cloudServiceTypeName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['siteCode']) && (mb_strlen($this->container['siteCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'siteCode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['siteCode']) && (mb_strlen($this->container['siteCode']) < 0)) {
                $invalidProperties[] = "invalid value for 'siteCode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['chargeEventCode']) && (mb_strlen($this->container['chargeEventCode']) > 128)) {
                $invalidProperties[] = "invalid value for 'chargeEventCode', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['chargeEventCode']) && (mb_strlen($this->container['chargeEventCode']) < 0)) {
                $invalidProperties[] = "invalid value for 'chargeEventCode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['chargingMode']) && (mb_strlen($this->container['chargingMode']) > 64)) {
                $invalidProperties[] = "invalid value for 'chargingMode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['chargingMode']) && (mb_strlen($this->container['chargingMode']) < 0)) {
                $invalidProperties[] = "invalid value for 'chargingMode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['pricingBasis']) && (mb_strlen($this->container['pricingBasis']) > 64)) {
                $invalidProperties[] = "invalid value for 'pricingBasis', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['pricingBasis']) && (mb_strlen($this->container['pricingBasis']) < 0)) {
                $invalidProperties[] = "invalid value for 'pricingBasis', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['effectiveTime']) && (mb_strlen($this->container['effectiveTime']) > 32)) {
                $invalidProperties[] = "invalid value for 'effectiveTime', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['effectiveTime']) && (mb_strlen($this->container['effectiveTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'effectiveTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['expireTime']) && (mb_strlen($this->container['expireTime']) > 32)) {
                $invalidProperties[] = "invalid value for 'expireTime', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['expireTime']) && (mb_strlen($this->container['expireTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'expireTime', the character length must be bigger than or equal to 0.";
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
    * Gets itemId
    *  报价项ID
    *
    * @return string|null
    */
    public function getItemId()
    {
        return $this->container['itemId'];
    }

    /**
    * Sets itemId
    *
    * @param string|null $itemId 报价项ID
    *
    * @return $this
    */
    public function setItemId($itemId)
    {
        $this->container['itemId'] = $itemId;
        return $this;
    }

    /**
    * Gets productId
    *  产品ID
    *
    * @return string|null
    */
    public function getProductId()
    {
        return $this->container['productId'];
    }

    /**
    * Sets productId
    *
    * @param string|null $productId 产品ID
    *
    * @return $this
    */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;
        return $this;
    }

    /**
    * Gets productSpecName
    *  产品规格名称
    *
    * @return string|null
    */
    public function getProductSpecName()
    {
        return $this->container['productSpecName'];
    }

    /**
    * Sets productSpecName
    *
    * @param string|null $productSpecName 产品规格名称
    *
    * @return $this
    */
    public function setProductSpecName($productSpecName)
    {
        $this->container['productSpecName'] = $productSpecName;
        return $this;
    }

    /**
    * Gets cloudServiceType
    *  云服务编码
    *
    * @return string|null
    */
    public function getCloudServiceType()
    {
        return $this->container['cloudServiceType'];
    }

    /**
    * Sets cloudServiceType
    *
    * @param string|null $cloudServiceType 云服务编码
    *
    * @return $this
    */
    public function setCloudServiceType($cloudServiceType)
    {
        $this->container['cloudServiceType'] = $cloudServiceType;
        return $this;
    }

    /**
    * Gets cloudServiceTypeName
    *  云服务名称
    *
    * @return string|null
    */
    public function getCloudServiceTypeName()
    {
        return $this->container['cloudServiceTypeName'];
    }

    /**
    * Sets cloudServiceTypeName
    *
    * @param string|null $cloudServiceTypeName 云服务名称
    *
    * @return $this
    */
    public function setCloudServiceTypeName($cloudServiceTypeName)
    {
        $this->container['cloudServiceTypeName'] = $cloudServiceTypeName;
        return $this;
    }

    /**
    * Gets siteCode
    *  运营站点编码
    *
    * @return string|null
    */
    public function getSiteCode()
    {
        return $this->container['siteCode'];
    }

    /**
    * Sets siteCode
    *
    * @param string|null $siteCode 运营站点编码
    *
    * @return $this
    */
    public function setSiteCode($siteCode)
    {
        $this->container['siteCode'] = $siteCode;
        return $this;
    }

    /**
    * Gets relatedRegions
    *  产品关联的云服务区信息列表
    *
    * @return \HuaweiCloud\SDK\Bss\V2\Model\RegionInfo[]|null
    */
    public function getRelatedRegions()
    {
        return $this->container['relatedRegions'];
    }

    /**
    * Sets relatedRegions
    *
    * @param \HuaweiCloud\SDK\Bss\V2\Model\RegionInfo[]|null $relatedRegions 产品关联的云服务区信息列表
    *
    * @return $this
    */
    public function setRelatedRegions($relatedRegions)
    {
        $this->container['relatedRegions'] = $relatedRegions;
        return $this;
    }

    /**
    * Gets chargeEventCode
    *  计费事件编码
    *
    * @return string|null
    */
    public function getChargeEventCode()
    {
        return $this->container['chargeEventCode'];
    }

    /**
    * Sets chargeEventCode
    *
    * @param string|null $chargeEventCode 计费事件编码
    *
    * @return $this
    */
    public function setChargeEventCode($chargeEventCode)
    {
        $this->container['chargeEventCode'] = $chargeEventCode;
        return $this;
    }

    /**
    * Gets chargingMode
    *  计费模式，ONDEMAND：按需、ONETIME：一次性、DAILY：包天、MONTHLY：包月、1_YEARLY：包1年、2_YEARLY：包2年、3_YEARLY：包3年、4_YEARLY：包4年、5_YEARLY：包5年、1_YEARLY_RI：包1年预留实例、3_YEARLY_RI：包3年预留实例
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
    * @param string|null $chargingMode 计费模式，ONDEMAND：按需、ONETIME：一次性、DAILY：包天、MONTHLY：包月、1_YEARLY：包1年、2_YEARLY：包2年、3_YEARLY：包3年、4_YEARLY：包4年、5_YEARLY：包5年、1_YEARLY_RI：包1年预留实例、3_YEARLY_RI：包3年预留实例
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
        return $this;
    }

    /**
    * Gets preferentialCategory
    *  优惠分类：0：普通优惠，1：产品阶梯，2：分时优惠
    *
    * @return int|null
    */
    public function getPreferentialCategory()
    {
        return $this->container['preferentialCategory'];
    }

    /**
    * Sets preferentialCategory
    *
    * @param int|null $preferentialCategory 优惠分类：0：普通优惠，1：产品阶梯，2：分时优惠
    *
    * @return $this
    */
    public function setPreferentialCategory($preferentialCategory)
    {
        $this->container['preferentialCategory'] = $preferentialCategory;
        return $this;
    }

    /**
    * Gets preferentialType
    *  优惠方式：0：产品折扣，1：固定单价
    *
    * @return int|null
    */
    public function getPreferentialType()
    {
        return $this->container['preferentialType'];
    }

    /**
    * Sets preferentialType
    *
    * @param int|null $preferentialType 优惠方式：0：产品折扣，1：固定单价
    *
    * @return $this
    */
    public function setPreferentialType($preferentialType)
    {
        $this->container['preferentialType'] = $preferentialType;
        return $this;
    }

    /**
    * Gets salesPrice
    *  固定单价（preferential_type=1固定单价时有值）
    *
    * @return float|null
    */
    public function getSalesPrice()
    {
        return $this->container['salesPrice'];
    }

    /**
    * Sets salesPrice
    *
    * @param float|null $salesPrice 固定单价（preferential_type=1固定单价时有值）
    *
    * @return $this
    */
    public function setSalesPrice($salesPrice)
    {
        $this->container['salesPrice'] = $salesPrice;
        return $this;
    }

    /**
    * Gets discountRatio
    *  折扣率（preferential_type=0产品折扣时有值）
    *
    * @return float|null
    */
    public function getDiscountRatio()
    {
        return $this->container['discountRatio'];
    }

    /**
    * Sets discountRatio
    *
    * @param float|null $discountRatio 折扣率（preferential_type=0产品折扣时有值）
    *
    * @return $this
    */
    public function setDiscountRatio($discountRatio)
    {
        $this->container['discountRatio'] = $discountRatio;
        return $this;
    }

    /**
    * Gets pricingBasis
    *  计费单位
    *
    * @return string|null
    */
    public function getPricingBasis()
    {
        return $this->container['pricingBasis'];
    }

    /**
    * Sets pricingBasis
    *
    * @param string|null $pricingBasis 计费单位
    *
    * @return $this
    */
    public function setPricingBasis($pricingBasis)
    {
        $this->container['pricingBasis'] = $pricingBasis;
        return $this;
    }

    /**
    * Gets effectiveTime
    *  报价项生效时间，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ
    *
    * @return string|null
    */
    public function getEffectiveTime()
    {
        return $this->container['effectiveTime'];
    }

    /**
    * Sets effectiveTime
    *
    * @param string|null $effectiveTime 报价项生效时间，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ
    *
    * @return $this
    */
    public function setEffectiveTime($effectiveTime)
    {
        $this->container['effectiveTime'] = $effectiveTime;
        return $this;
    }

    /**
    * Gets expireTime
    *  报价项失效时间，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ
    *
    * @return string|null
    */
    public function getExpireTime()
    {
        return $this->container['expireTime'];
    }

    /**
    * Sets expireTime
    *
    * @param string|null $expireTime 报价项失效时间，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ
    *
    * @return $this
    */
    public function setExpireTime($expireTime)
    {
        $this->container['expireTime'] = $expireTime;
        return $this;
    }

    /**
    * Gets productQuotingItemSteps
    *  产品报价项阶梯列表，产品阶梯或分时优惠时有值返回，否则返回空列表
    *
    * @return \HuaweiCloud\SDK\Bss\V2\Model\ProductQuotingItemStep[]|null
    */
    public function getProductQuotingItemSteps()
    {
        return $this->container['productQuotingItemSteps'];
    }

    /**
    * Sets productQuotingItemSteps
    *
    * @param \HuaweiCloud\SDK\Bss\V2\Model\ProductQuotingItemStep[]|null $productQuotingItemSteps 产品报价项阶梯列表，产品阶梯或分时优惠时有值返回，否则返回空列表
    *
    * @return $this
    */
    public function setProductQuotingItemSteps($productQuotingItemSteps)
    {
        $this->container['productQuotingItemSteps'] = $productQuotingItemSteps;
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

