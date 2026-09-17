<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CategoryQuotingItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CategoryQuotingItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * itemId  报价项ID
    * cloudServiceType  云服务编码
    * cloudServiceTypeName  云服务名称
    * commercialResourceType  商务资源类型
    * resourceTypeCode  资源类型编码
    * resourceTypeName  资源类型名称
    * skuFamilyCode  SKU族编码
    * skuFamilyName  SKU族名称
    * siteCode  归属站点编码
    * regionCode  区域编码
    * regionName  区域名称
    * azCode  可用区AZ编码
    * azName  可用区AZ名称
    * stepNo  阶梯编号
    * chargingMode  计费模式，ONDEMAND：按需、ONETIME：一次性、DAILY：包天、MONTHLY：包月、1_YEARLY：包1年、2_YEARLY：包2年、3_YEARLY：包3年、4_YEARLY：包4年、5_YEARLY：包5年、1_YEARLY_RI：包1年预留实例、3_YEARLY_RI：包3年预留实例
    * discountRatio  折扣率
    * effectiveTime  报价项生效时间，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ
    * expireTime  报价项失效时间，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'itemId' => 'string',
            'cloudServiceType' => 'string',
            'cloudServiceTypeName' => 'string',
            'commercialResourceType' => 'string',
            'resourceTypeCode' => 'string',
            'resourceTypeName' => 'string',
            'skuFamilyCode' => 'string',
            'skuFamilyName' => 'string',
            'siteCode' => 'string',
            'regionCode' => 'string',
            'regionName' => 'string',
            'azCode' => 'string',
            'azName' => 'string',
            'stepNo' => 'string',
            'chargingMode' => 'string',
            'discountRatio' => 'float',
            'effectiveTime' => 'string',
            'expireTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * itemId  报价项ID
    * cloudServiceType  云服务编码
    * cloudServiceTypeName  云服务名称
    * commercialResourceType  商务资源类型
    * resourceTypeCode  资源类型编码
    * resourceTypeName  资源类型名称
    * skuFamilyCode  SKU族编码
    * skuFamilyName  SKU族名称
    * siteCode  归属站点编码
    * regionCode  区域编码
    * regionName  区域名称
    * azCode  可用区AZ编码
    * azName  可用区AZ名称
    * stepNo  阶梯编号
    * chargingMode  计费模式，ONDEMAND：按需、ONETIME：一次性、DAILY：包天、MONTHLY：包月、1_YEARLY：包1年、2_YEARLY：包2年、3_YEARLY：包3年、4_YEARLY：包4年、5_YEARLY：包5年、1_YEARLY_RI：包1年预留实例、3_YEARLY_RI：包3年预留实例
    * discountRatio  折扣率
    * effectiveTime  报价项生效时间，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ
    * expireTime  报价项失效时间，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'itemId' => null,
        'cloudServiceType' => null,
        'cloudServiceTypeName' => null,
        'commercialResourceType' => null,
        'resourceTypeCode' => null,
        'resourceTypeName' => null,
        'skuFamilyCode' => null,
        'skuFamilyName' => null,
        'siteCode' => null,
        'regionCode' => null,
        'regionName' => null,
        'azCode' => null,
        'azName' => null,
        'stepNo' => null,
        'chargingMode' => null,
        'discountRatio' => 'bigdecimal',
        'effectiveTime' => null,
        'expireTime' => null
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
    * cloudServiceType  云服务编码
    * cloudServiceTypeName  云服务名称
    * commercialResourceType  商务资源类型
    * resourceTypeCode  资源类型编码
    * resourceTypeName  资源类型名称
    * skuFamilyCode  SKU族编码
    * skuFamilyName  SKU族名称
    * siteCode  归属站点编码
    * regionCode  区域编码
    * regionName  区域名称
    * azCode  可用区AZ编码
    * azName  可用区AZ名称
    * stepNo  阶梯编号
    * chargingMode  计费模式，ONDEMAND：按需、ONETIME：一次性、DAILY：包天、MONTHLY：包月、1_YEARLY：包1年、2_YEARLY：包2年、3_YEARLY：包3年、4_YEARLY：包4年、5_YEARLY：包5年、1_YEARLY_RI：包1年预留实例、3_YEARLY_RI：包3年预留实例
    * discountRatio  折扣率
    * effectiveTime  报价项生效时间，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ
    * expireTime  报价项失效时间，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'itemId' => 'item_id',
            'cloudServiceType' => 'cloud_service_type',
            'cloudServiceTypeName' => 'cloud_service_type_name',
            'commercialResourceType' => 'commercial_resource_type',
            'resourceTypeCode' => 'resource_type_code',
            'resourceTypeName' => 'resource_type_name',
            'skuFamilyCode' => 'sku_family_code',
            'skuFamilyName' => 'sku_family_name',
            'siteCode' => 'site_code',
            'regionCode' => 'region_code',
            'regionName' => 'region_name',
            'azCode' => 'az_code',
            'azName' => 'az_name',
            'stepNo' => 'step_no',
            'chargingMode' => 'charging_mode',
            'discountRatio' => 'discount_ratio',
            'effectiveTime' => 'effective_time',
            'expireTime' => 'expire_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * itemId  报价项ID
    * cloudServiceType  云服务编码
    * cloudServiceTypeName  云服务名称
    * commercialResourceType  商务资源类型
    * resourceTypeCode  资源类型编码
    * resourceTypeName  资源类型名称
    * skuFamilyCode  SKU族编码
    * skuFamilyName  SKU族名称
    * siteCode  归属站点编码
    * regionCode  区域编码
    * regionName  区域名称
    * azCode  可用区AZ编码
    * azName  可用区AZ名称
    * stepNo  阶梯编号
    * chargingMode  计费模式，ONDEMAND：按需、ONETIME：一次性、DAILY：包天、MONTHLY：包月、1_YEARLY：包1年、2_YEARLY：包2年、3_YEARLY：包3年、4_YEARLY：包4年、5_YEARLY：包5年、1_YEARLY_RI：包1年预留实例、3_YEARLY_RI：包3年预留实例
    * discountRatio  折扣率
    * effectiveTime  报价项生效时间，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ
    * expireTime  报价项失效时间，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ
    *
    * @var string[]
    */
    protected static $setters = [
            'itemId' => 'setItemId',
            'cloudServiceType' => 'setCloudServiceType',
            'cloudServiceTypeName' => 'setCloudServiceTypeName',
            'commercialResourceType' => 'setCommercialResourceType',
            'resourceTypeCode' => 'setResourceTypeCode',
            'resourceTypeName' => 'setResourceTypeName',
            'skuFamilyCode' => 'setSkuFamilyCode',
            'skuFamilyName' => 'setSkuFamilyName',
            'siteCode' => 'setSiteCode',
            'regionCode' => 'setRegionCode',
            'regionName' => 'setRegionName',
            'azCode' => 'setAzCode',
            'azName' => 'setAzName',
            'stepNo' => 'setStepNo',
            'chargingMode' => 'setChargingMode',
            'discountRatio' => 'setDiscountRatio',
            'effectiveTime' => 'setEffectiveTime',
            'expireTime' => 'setExpireTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * itemId  报价项ID
    * cloudServiceType  云服务编码
    * cloudServiceTypeName  云服务名称
    * commercialResourceType  商务资源类型
    * resourceTypeCode  资源类型编码
    * resourceTypeName  资源类型名称
    * skuFamilyCode  SKU族编码
    * skuFamilyName  SKU族名称
    * siteCode  归属站点编码
    * regionCode  区域编码
    * regionName  区域名称
    * azCode  可用区AZ编码
    * azName  可用区AZ名称
    * stepNo  阶梯编号
    * chargingMode  计费模式，ONDEMAND：按需、ONETIME：一次性、DAILY：包天、MONTHLY：包月、1_YEARLY：包1年、2_YEARLY：包2年、3_YEARLY：包3年、4_YEARLY：包4年、5_YEARLY：包5年、1_YEARLY_RI：包1年预留实例、3_YEARLY_RI：包3年预留实例
    * discountRatio  折扣率
    * effectiveTime  报价项生效时间，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ
    * expireTime  报价项失效时间，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ
    *
    * @var string[]
    */
    protected static $getters = [
            'itemId' => 'getItemId',
            'cloudServiceType' => 'getCloudServiceType',
            'cloudServiceTypeName' => 'getCloudServiceTypeName',
            'commercialResourceType' => 'getCommercialResourceType',
            'resourceTypeCode' => 'getResourceTypeCode',
            'resourceTypeName' => 'getResourceTypeName',
            'skuFamilyCode' => 'getSkuFamilyCode',
            'skuFamilyName' => 'getSkuFamilyName',
            'siteCode' => 'getSiteCode',
            'regionCode' => 'getRegionCode',
            'regionName' => 'getRegionName',
            'azCode' => 'getAzCode',
            'azName' => 'getAzName',
            'stepNo' => 'getStepNo',
            'chargingMode' => 'getChargingMode',
            'discountRatio' => 'getDiscountRatio',
            'effectiveTime' => 'getEffectiveTime',
            'expireTime' => 'getExpireTime'
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
        $this->container['cloudServiceType'] = isset($data['cloudServiceType']) ? $data['cloudServiceType'] : null;
        $this->container['cloudServiceTypeName'] = isset($data['cloudServiceTypeName']) ? $data['cloudServiceTypeName'] : null;
        $this->container['commercialResourceType'] = isset($data['commercialResourceType']) ? $data['commercialResourceType'] : null;
        $this->container['resourceTypeCode'] = isset($data['resourceTypeCode']) ? $data['resourceTypeCode'] : null;
        $this->container['resourceTypeName'] = isset($data['resourceTypeName']) ? $data['resourceTypeName'] : null;
        $this->container['skuFamilyCode'] = isset($data['skuFamilyCode']) ? $data['skuFamilyCode'] : null;
        $this->container['skuFamilyName'] = isset($data['skuFamilyName']) ? $data['skuFamilyName'] : null;
        $this->container['siteCode'] = isset($data['siteCode']) ? $data['siteCode'] : null;
        $this->container['regionCode'] = isset($data['regionCode']) ? $data['regionCode'] : null;
        $this->container['regionName'] = isset($data['regionName']) ? $data['regionName'] : null;
        $this->container['azCode'] = isset($data['azCode']) ? $data['azCode'] : null;
        $this->container['azName'] = isset($data['azName']) ? $data['azName'] : null;
        $this->container['stepNo'] = isset($data['stepNo']) ? $data['stepNo'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['discountRatio'] = isset($data['discountRatio']) ? $data['discountRatio'] : null;
        $this->container['effectiveTime'] = isset($data['effectiveTime']) ? $data['effectiveTime'] : null;
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
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
            if (!is_null($this->container['commercialResourceType']) && (mb_strlen($this->container['commercialResourceType']) > 64)) {
                $invalidProperties[] = "invalid value for 'commercialResourceType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['commercialResourceType']) && (mb_strlen($this->container['commercialResourceType']) < 0)) {
                $invalidProperties[] = "invalid value for 'commercialResourceType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resourceTypeCode']) && (mb_strlen($this->container['resourceTypeCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'resourceTypeCode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['resourceTypeCode']) && (mb_strlen($this->container['resourceTypeCode']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceTypeCode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resourceTypeName']) && (mb_strlen($this->container['resourceTypeName']) > 256)) {
                $invalidProperties[] = "invalid value for 'resourceTypeName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['resourceTypeName']) && (mb_strlen($this->container['resourceTypeName']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceTypeName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['skuFamilyCode']) && (mb_strlen($this->container['skuFamilyCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'skuFamilyCode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['skuFamilyCode']) && (mb_strlen($this->container['skuFamilyCode']) < 0)) {
                $invalidProperties[] = "invalid value for 'skuFamilyCode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['skuFamilyName']) && (mb_strlen($this->container['skuFamilyName']) > 256)) {
                $invalidProperties[] = "invalid value for 'skuFamilyName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['skuFamilyName']) && (mb_strlen($this->container['skuFamilyName']) < 0)) {
                $invalidProperties[] = "invalid value for 'skuFamilyName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['siteCode']) && (mb_strlen($this->container['siteCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'siteCode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['siteCode']) && (mb_strlen($this->container['siteCode']) < 0)) {
                $invalidProperties[] = "invalid value for 'siteCode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['regionCode']) && (mb_strlen($this->container['regionCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'regionCode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['regionCode']) && (mb_strlen($this->container['regionCode']) < 0)) {
                $invalidProperties[] = "invalid value for 'regionCode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['regionName']) && (mb_strlen($this->container['regionName']) > 256)) {
                $invalidProperties[] = "invalid value for 'regionName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['regionName']) && (mb_strlen($this->container['regionName']) < 0)) {
                $invalidProperties[] = "invalid value for 'regionName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['azCode']) && (mb_strlen($this->container['azCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'azCode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['azCode']) && (mb_strlen($this->container['azCode']) < 0)) {
                $invalidProperties[] = "invalid value for 'azCode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['azName']) && (mb_strlen($this->container['azName']) > 256)) {
                $invalidProperties[] = "invalid value for 'azName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['azName']) && (mb_strlen($this->container['azName']) < 0)) {
                $invalidProperties[] = "invalid value for 'azName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['stepNo']) && (mb_strlen($this->container['stepNo']) > 64)) {
                $invalidProperties[] = "invalid value for 'stepNo', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['stepNo']) && (mb_strlen($this->container['stepNo']) < 0)) {
                $invalidProperties[] = "invalid value for 'stepNo', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['chargingMode']) && (mb_strlen($this->container['chargingMode']) > 64)) {
                $invalidProperties[] = "invalid value for 'chargingMode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['chargingMode']) && (mb_strlen($this->container['chargingMode']) < 0)) {
                $invalidProperties[] = "invalid value for 'chargingMode', the character length must be bigger than or equal to 0.";
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
    * Gets commercialResourceType
    *  商务资源类型
    *
    * @return string|null
    */
    public function getCommercialResourceType()
    {
        return $this->container['commercialResourceType'];
    }

    /**
    * Sets commercialResourceType
    *
    * @param string|null $commercialResourceType 商务资源类型
    *
    * @return $this
    */
    public function setCommercialResourceType($commercialResourceType)
    {
        $this->container['commercialResourceType'] = $commercialResourceType;
        return $this;
    }

    /**
    * Gets resourceTypeCode
    *  资源类型编码
    *
    * @return string|null
    */
    public function getResourceTypeCode()
    {
        return $this->container['resourceTypeCode'];
    }

    /**
    * Sets resourceTypeCode
    *
    * @param string|null $resourceTypeCode 资源类型编码
    *
    * @return $this
    */
    public function setResourceTypeCode($resourceTypeCode)
    {
        $this->container['resourceTypeCode'] = $resourceTypeCode;
        return $this;
    }

    /**
    * Gets resourceTypeName
    *  资源类型名称
    *
    * @return string|null
    */
    public function getResourceTypeName()
    {
        return $this->container['resourceTypeName'];
    }

    /**
    * Sets resourceTypeName
    *
    * @param string|null $resourceTypeName 资源类型名称
    *
    * @return $this
    */
    public function setResourceTypeName($resourceTypeName)
    {
        $this->container['resourceTypeName'] = $resourceTypeName;
        return $this;
    }

    /**
    * Gets skuFamilyCode
    *  SKU族编码
    *
    * @return string|null
    */
    public function getSkuFamilyCode()
    {
        return $this->container['skuFamilyCode'];
    }

    /**
    * Sets skuFamilyCode
    *
    * @param string|null $skuFamilyCode SKU族编码
    *
    * @return $this
    */
    public function setSkuFamilyCode($skuFamilyCode)
    {
        $this->container['skuFamilyCode'] = $skuFamilyCode;
        return $this;
    }

    /**
    * Gets skuFamilyName
    *  SKU族名称
    *
    * @return string|null
    */
    public function getSkuFamilyName()
    {
        return $this->container['skuFamilyName'];
    }

    /**
    * Sets skuFamilyName
    *
    * @param string|null $skuFamilyName SKU族名称
    *
    * @return $this
    */
    public function setSkuFamilyName($skuFamilyName)
    {
        $this->container['skuFamilyName'] = $skuFamilyName;
        return $this;
    }

    /**
    * Gets siteCode
    *  归属站点编码
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
    * @param string|null $siteCode 归属站点编码
    *
    * @return $this
    */
    public function setSiteCode($siteCode)
    {
        $this->container['siteCode'] = $siteCode;
        return $this;
    }

    /**
    * Gets regionCode
    *  区域编码
    *
    * @return string|null
    */
    public function getRegionCode()
    {
        return $this->container['regionCode'];
    }

    /**
    * Sets regionCode
    *
    * @param string|null $regionCode 区域编码
    *
    * @return $this
    */
    public function setRegionCode($regionCode)
    {
        $this->container['regionCode'] = $regionCode;
        return $this;
    }

    /**
    * Gets regionName
    *  区域名称
    *
    * @return string|null
    */
    public function getRegionName()
    {
        return $this->container['regionName'];
    }

    /**
    * Sets regionName
    *
    * @param string|null $regionName 区域名称
    *
    * @return $this
    */
    public function setRegionName($regionName)
    {
        $this->container['regionName'] = $regionName;
        return $this;
    }

    /**
    * Gets azCode
    *  可用区AZ编码
    *
    * @return string|null
    */
    public function getAzCode()
    {
        return $this->container['azCode'];
    }

    /**
    * Sets azCode
    *
    * @param string|null $azCode 可用区AZ编码
    *
    * @return $this
    */
    public function setAzCode($azCode)
    {
        $this->container['azCode'] = $azCode;
        return $this;
    }

    /**
    * Gets azName
    *  可用区AZ名称
    *
    * @return string|null
    */
    public function getAzName()
    {
        return $this->container['azName'];
    }

    /**
    * Sets azName
    *
    * @param string|null $azName 可用区AZ名称
    *
    * @return $this
    */
    public function setAzName($azName)
    {
        $this->container['azName'] = $azName;
        return $this;
    }

    /**
    * Gets stepNo
    *  阶梯编号
    *
    * @return string|null
    */
    public function getStepNo()
    {
        return $this->container['stepNo'];
    }

    /**
    * Sets stepNo
    *
    * @param string|null $stepNo 阶梯编号
    *
    * @return $this
    */
    public function setStepNo($stepNo)
    {
        $this->container['stepNo'] = $stepNo;
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
    * Gets discountRatio
    *  折扣率
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
    * @param float|null $discountRatio 折扣率
    *
    * @return $this
    */
    public function setDiscountRatio($discountRatio)
    {
        $this->container['discountRatio'] = $discountRatio;
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

