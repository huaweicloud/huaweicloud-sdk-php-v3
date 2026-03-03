<?php

namespace HuaweiCloud\SDK\Ccm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateCertificateAuthorityOrderRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateCertificateAuthorityOrderRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cloudServiceType  云服务类型，固定为'hws.service.type.ccm'
    * chargingMode  计费模式 0包周期
    * periodType  订购周期 2月 3年
    * periodNum  订购周期数
    * isAutoRenew  是否自动续费 1是 0否
    * promotionInfo  折扣信息
    * subscriptionNum  订购数量
    * isAutoPay  是否自动支付 1是 0否 不填默认为0
    * enterpriseProjectId  企业项目ID
    * productInfos  产品列表，详情请参见**ProductInfo**字段数据结构说明。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cloudServiceType' => 'string',
            'chargingMode' => 'int',
            'periodType' => 'int',
            'periodNum' => 'int',
            'isAutoRenew' => 'int',
            'promotionInfo' => 'string',
            'subscriptionNum' => 'int',
            'isAutoPay' => 'int',
            'enterpriseProjectId' => 'string',
            'productInfos' => '\HuaweiCloud\SDK\Ccm\V1\Model\ProductInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cloudServiceType  云服务类型，固定为'hws.service.type.ccm'
    * chargingMode  计费模式 0包周期
    * periodType  订购周期 2月 3年
    * periodNum  订购周期数
    * isAutoRenew  是否自动续费 1是 0否
    * promotionInfo  折扣信息
    * subscriptionNum  订购数量
    * isAutoPay  是否自动支付 1是 0否 不填默认为0
    * enterpriseProjectId  企业项目ID
    * productInfos  产品列表，详情请参见**ProductInfo**字段数据结构说明。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cloudServiceType' => null,
        'chargingMode' => null,
        'periodType' => null,
        'periodNum' => null,
        'isAutoRenew' => null,
        'promotionInfo' => null,
        'subscriptionNum' => null,
        'isAutoPay' => null,
        'enterpriseProjectId' => null,
        'productInfos' => null
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
    * cloudServiceType  云服务类型，固定为'hws.service.type.ccm'
    * chargingMode  计费模式 0包周期
    * periodType  订购周期 2月 3年
    * periodNum  订购周期数
    * isAutoRenew  是否自动续费 1是 0否
    * promotionInfo  折扣信息
    * subscriptionNum  订购数量
    * isAutoPay  是否自动支付 1是 0否 不填默认为0
    * enterpriseProjectId  企业项目ID
    * productInfos  产品列表，详情请参见**ProductInfo**字段数据结构说明。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cloudServiceType' => 'cloud_service_type',
            'chargingMode' => 'charging_mode',
            'periodType' => 'period_type',
            'periodNum' => 'period_num',
            'isAutoRenew' => 'is_auto_renew',
            'promotionInfo' => 'promotion_info',
            'subscriptionNum' => 'subscription_num',
            'isAutoPay' => 'is_auto_pay',
            'enterpriseProjectId' => 'enterprise_project_id',
            'productInfos' => 'product_infos'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cloudServiceType  云服务类型，固定为'hws.service.type.ccm'
    * chargingMode  计费模式 0包周期
    * periodType  订购周期 2月 3年
    * periodNum  订购周期数
    * isAutoRenew  是否自动续费 1是 0否
    * promotionInfo  折扣信息
    * subscriptionNum  订购数量
    * isAutoPay  是否自动支付 1是 0否 不填默认为0
    * enterpriseProjectId  企业项目ID
    * productInfos  产品列表，详情请参见**ProductInfo**字段数据结构说明。
    *
    * @var string[]
    */
    protected static $setters = [
            'cloudServiceType' => 'setCloudServiceType',
            'chargingMode' => 'setChargingMode',
            'periodType' => 'setPeriodType',
            'periodNum' => 'setPeriodNum',
            'isAutoRenew' => 'setIsAutoRenew',
            'promotionInfo' => 'setPromotionInfo',
            'subscriptionNum' => 'setSubscriptionNum',
            'isAutoPay' => 'setIsAutoPay',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'productInfos' => 'setProductInfos'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cloudServiceType  云服务类型，固定为'hws.service.type.ccm'
    * chargingMode  计费模式 0包周期
    * periodType  订购周期 2月 3年
    * periodNum  订购周期数
    * isAutoRenew  是否自动续费 1是 0否
    * promotionInfo  折扣信息
    * subscriptionNum  订购数量
    * isAutoPay  是否自动支付 1是 0否 不填默认为0
    * enterpriseProjectId  企业项目ID
    * productInfos  产品列表，详情请参见**ProductInfo**字段数据结构说明。
    *
    * @var string[]
    */
    protected static $getters = [
            'cloudServiceType' => 'getCloudServiceType',
            'chargingMode' => 'getChargingMode',
            'periodType' => 'getPeriodType',
            'periodNum' => 'getPeriodNum',
            'isAutoRenew' => 'getIsAutoRenew',
            'promotionInfo' => 'getPromotionInfo',
            'subscriptionNum' => 'getSubscriptionNum',
            'isAutoPay' => 'getIsAutoPay',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'productInfos' => 'getProductInfos'
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
        $this->container['cloudServiceType'] = isset($data['cloudServiceType']) ? $data['cloudServiceType'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['periodType'] = isset($data['periodType']) ? $data['periodType'] : null;
        $this->container['periodNum'] = isset($data['periodNum']) ? $data['periodNum'] : null;
        $this->container['isAutoRenew'] = isset($data['isAutoRenew']) ? $data['isAutoRenew'] : null;
        $this->container['promotionInfo'] = isset($data['promotionInfo']) ? $data['promotionInfo'] : null;
        $this->container['subscriptionNum'] = isset($data['subscriptionNum']) ? $data['subscriptionNum'] : null;
        $this->container['isAutoPay'] = isset($data['isAutoPay']) ? $data['isAutoPay'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['productInfos'] = isset($data['productInfos']) ? $data['productInfos'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['cloudServiceType'] === null) {
            $invalidProperties[] = "'cloudServiceType' can't be null";
        }
            if ((mb_strlen($this->container['cloudServiceType']) > 64)) {
                $invalidProperties[] = "invalid value for 'cloudServiceType', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['cloudServiceType']) < 1)) {
                $invalidProperties[] = "invalid value for 'cloudServiceType', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['chargingMode'] === null) {
            $invalidProperties[] = "'chargingMode' can't be null";
        }
        if ($this->container['periodType'] === null) {
            $invalidProperties[] = "'periodType' can't be null";
        }
        if ($this->container['periodNum'] === null) {
            $invalidProperties[] = "'periodNum' can't be null";
        }
        if ($this->container['isAutoRenew'] === null) {
            $invalidProperties[] = "'isAutoRenew' can't be null";
        }
            if (!is_null($this->container['promotionInfo']) && (mb_strlen($this->container['promotionInfo']) > 2048)) {
                $invalidProperties[] = "invalid value for 'promotionInfo', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['promotionInfo']) && (mb_strlen($this->container['promotionInfo']) < 0)) {
                $invalidProperties[] = "invalid value for 'promotionInfo', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['subscriptionNum'] === null) {
            $invalidProperties[] = "'subscriptionNum' can't be null";
        }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['productInfos'] === null) {
            $invalidProperties[] = "'productInfos' can't be null";
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
    * Gets cloudServiceType
    *  云服务类型，固定为'hws.service.type.ccm'
    *
    * @return string
    */
    public function getCloudServiceType()
    {
        return $this->container['cloudServiceType'];
    }

    /**
    * Sets cloudServiceType
    *
    * @param string $cloudServiceType 云服务类型，固定为'hws.service.type.ccm'
    *
    * @return $this
    */
    public function setCloudServiceType($cloudServiceType)
    {
        $this->container['cloudServiceType'] = $cloudServiceType;
        return $this;
    }

    /**
    * Gets chargingMode
    *  计费模式 0包周期
    *
    * @return int
    */
    public function getChargingMode()
    {
        return $this->container['chargingMode'];
    }

    /**
    * Sets chargingMode
    *
    * @param int $chargingMode 计费模式 0包周期
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
        return $this;
    }

    /**
    * Gets periodType
    *  订购周期 2月 3年
    *
    * @return int
    */
    public function getPeriodType()
    {
        return $this->container['periodType'];
    }

    /**
    * Sets periodType
    *
    * @param int $periodType 订购周期 2月 3年
    *
    * @return $this
    */
    public function setPeriodType($periodType)
    {
        $this->container['periodType'] = $periodType;
        return $this;
    }

    /**
    * Gets periodNum
    *  订购周期数
    *
    * @return int
    */
    public function getPeriodNum()
    {
        return $this->container['periodNum'];
    }

    /**
    * Sets periodNum
    *
    * @param int $periodNum 订购周期数
    *
    * @return $this
    */
    public function setPeriodNum($periodNum)
    {
        $this->container['periodNum'] = $periodNum;
        return $this;
    }

    /**
    * Gets isAutoRenew
    *  是否自动续费 1是 0否
    *
    * @return int
    */
    public function getIsAutoRenew()
    {
        return $this->container['isAutoRenew'];
    }

    /**
    * Sets isAutoRenew
    *
    * @param int $isAutoRenew 是否自动续费 1是 0否
    *
    * @return $this
    */
    public function setIsAutoRenew($isAutoRenew)
    {
        $this->container['isAutoRenew'] = $isAutoRenew;
        return $this;
    }

    /**
    * Gets promotionInfo
    *  折扣信息
    *
    * @return string|null
    */
    public function getPromotionInfo()
    {
        return $this->container['promotionInfo'];
    }

    /**
    * Sets promotionInfo
    *
    * @param string|null $promotionInfo 折扣信息
    *
    * @return $this
    */
    public function setPromotionInfo($promotionInfo)
    {
        $this->container['promotionInfo'] = $promotionInfo;
        return $this;
    }

    /**
    * Gets subscriptionNum
    *  订购数量
    *
    * @return int
    */
    public function getSubscriptionNum()
    {
        return $this->container['subscriptionNum'];
    }

    /**
    * Sets subscriptionNum
    *
    * @param int $subscriptionNum 订购数量
    *
    * @return $this
    */
    public function setSubscriptionNum($subscriptionNum)
    {
        $this->container['subscriptionNum'] = $subscriptionNum;
        return $this;
    }

    /**
    * Gets isAutoPay
    *  是否自动支付 1是 0否 不填默认为0
    *
    * @return int|null
    */
    public function getIsAutoPay()
    {
        return $this->container['isAutoPay'];
    }

    /**
    * Sets isAutoPay
    *
    * @param int|null $isAutoPay 是否自动支付 1是 0否 不填默认为0
    *
    * @return $this
    */
    public function setIsAutoPay($isAutoPay)
    {
        $this->container['isAutoPay'] = $isAutoPay;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID
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
    * @param string|null $enterpriseProjectId 企业项目ID
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets productInfos
    *  产品列表，详情请参见**ProductInfo**字段数据结构说明。
    *
    * @return \HuaweiCloud\SDK\Ccm\V1\Model\ProductInfo[]
    */
    public function getProductInfos()
    {
        return $this->container['productInfos'];
    }

    /**
    * Sets productInfos
    *
    * @param \HuaweiCloud\SDK\Ccm\V1\Model\ProductInfo[] $productInfos 产品列表，详情请参见**ProductInfo**字段数据结构说明。
    *
    * @return $this
    */
    public function setProductInfos($productInfos)
    {
        $this->container['productInfos'] = $productInfos;
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

