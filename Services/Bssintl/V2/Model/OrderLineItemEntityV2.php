<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OrderLineItemEntityV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OrderLineItemEntityV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * orderLineItemId  |参数名称：订单项Id。| |参数约束及描述：订单项Id。|
    * serviceTypeCode  |参数名称：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型云服务类型云服务类型云服务类型。| |参数约束及描述：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型云服务类型云服务类型云服务类型。|
    * serviceTypeName  |参数名称：服务类型编码名称| |参数约束及描述：服务类型编码名称|
    * productId  |参数名称：产品ID。| |参数约束及描述：产品ID。|
    * productSpecDesc  |参数名称：产品规格描述。| |参数约束及描述：产品规格描述。|
    * periodType  |参数名称：周期类型。0：天；1：周；2：月；3：年；4：小时；5：一次性；6：按需（预留）；7：按用量报表使用（预留）。| |参数的约束及描述：周期类型。0：天；1：周；2：月；3：年；4：小时；5：一次性；6：按需（预留）；7：按用量报表使用（预留）。|
    * periodNum  |参数名称：周期数量。| |参数的约束及描述：周期数量。|
    * effectiveTime  |参数名称：生效时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。| |参数约束及描述：生效时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。|
    * expireTime  |参数名称：失效时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。| |参数约束及描述：失效时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。|
    * subscriptionNum  |参数名称：订购数量。| |参数的约束及描述：订购数量。|
    * amountAfterDiscount  |参数名称：订单优惠后金额（实付价格，不含券不含卡）。| |参数的约束及描述：订单优惠后金额（实付价格，不含券不含卡）。|
    * officialAmount  |参数名称：订单金额（官网价）。退订订单中，该金额等于currencyAfterDiscount。| |参数的约束及描述：订单金额（官网价）。退订订单中，该金额等于currencyAfterDiscount。|
    * amountInfo  amountInfo
    * currency  |参数名称：货币编码。| |参数约束及描述：货币编码。如CNY|
    * categoryCode  |参数名称：产品目录编码。| |参数约束及描述：产品目录编码。|
    * productOwnerService  |参数名称：产品归属的云服务类型编码。| |参数约束及描述：产品归属的云服务类型编码。|
    * commercialResource  |参数名称：商务归属的资源类型编码。| |参数约束及描述：商务归属的资源类型编码。|
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'orderLineItemId' => 'string',
            'serviceTypeCode' => 'string',
            'serviceTypeName' => 'string',
            'productId' => 'string',
            'productSpecDesc' => 'string',
            'periodType' => 'int',
            'periodNum' => 'int',
            'effectiveTime' => 'string',
            'expireTime' => 'string',
            'subscriptionNum' => 'int',
            'amountAfterDiscount' => 'double',
            'officialAmount' => 'double',
            'amountInfo' => '\HuaweiCloud\SDK\Bssintl\V2\Model\AmountInfomationV2',
            'currency' => 'string',
            'categoryCode' => 'string',
            'productOwnerService' => 'string',
            'commercialResource' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * orderLineItemId  |参数名称：订单项Id。| |参数约束及描述：订单项Id。|
    * serviceTypeCode  |参数名称：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型云服务类型云服务类型云服务类型。| |参数约束及描述：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型云服务类型云服务类型云服务类型。|
    * serviceTypeName  |参数名称：服务类型编码名称| |参数约束及描述：服务类型编码名称|
    * productId  |参数名称：产品ID。| |参数约束及描述：产品ID。|
    * productSpecDesc  |参数名称：产品规格描述。| |参数约束及描述：产品规格描述。|
    * periodType  |参数名称：周期类型。0：天；1：周；2：月；3：年；4：小时；5：一次性；6：按需（预留）；7：按用量报表使用（预留）。| |参数的约束及描述：周期类型。0：天；1：周；2：月；3：年；4：小时；5：一次性；6：按需（预留）；7：按用量报表使用（预留）。|
    * periodNum  |参数名称：周期数量。| |参数的约束及描述：周期数量。|
    * effectiveTime  |参数名称：生效时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。| |参数约束及描述：生效时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。|
    * expireTime  |参数名称：失效时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。| |参数约束及描述：失效时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。|
    * subscriptionNum  |参数名称：订购数量。| |参数的约束及描述：订购数量。|
    * amountAfterDiscount  |参数名称：订单优惠后金额（实付价格，不含券不含卡）。| |参数的约束及描述：订单优惠后金额（实付价格，不含券不含卡）。|
    * officialAmount  |参数名称：订单金额（官网价）。退订订单中，该金额等于currencyAfterDiscount。| |参数的约束及描述：订单金额（官网价）。退订订单中，该金额等于currencyAfterDiscount。|
    * amountInfo  amountInfo
    * currency  |参数名称：货币编码。| |参数约束及描述：货币编码。如CNY|
    * categoryCode  |参数名称：产品目录编码。| |参数约束及描述：产品目录编码。|
    * productOwnerService  |参数名称：产品归属的云服务类型编码。| |参数约束及描述：产品归属的云服务类型编码。|
    * commercialResource  |参数名称：商务归属的资源类型编码。| |参数约束及描述：商务归属的资源类型编码。|
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'orderLineItemId' => null,
        'serviceTypeCode' => null,
        'serviceTypeName' => null,
        'productId' => null,
        'productSpecDesc' => null,
        'periodType' => 'int32',
        'periodNum' => 'int32',
        'effectiveTime' => null,
        'expireTime' => null,
        'subscriptionNum' => 'int32',
        'amountAfterDiscount' => 'double',
        'officialAmount' => 'double',
        'amountInfo' => null,
        'currency' => null,
        'categoryCode' => null,
        'productOwnerService' => null,
        'commercialResource' => null
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
    * orderLineItemId  |参数名称：订单项Id。| |参数约束及描述：订单项Id。|
    * serviceTypeCode  |参数名称：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型云服务类型云服务类型云服务类型。| |参数约束及描述：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型云服务类型云服务类型云服务类型。|
    * serviceTypeName  |参数名称：服务类型编码名称| |参数约束及描述：服务类型编码名称|
    * productId  |参数名称：产品ID。| |参数约束及描述：产品ID。|
    * productSpecDesc  |参数名称：产品规格描述。| |参数约束及描述：产品规格描述。|
    * periodType  |参数名称：周期类型。0：天；1：周；2：月；3：年；4：小时；5：一次性；6：按需（预留）；7：按用量报表使用（预留）。| |参数的约束及描述：周期类型。0：天；1：周；2：月；3：年；4：小时；5：一次性；6：按需（预留）；7：按用量报表使用（预留）。|
    * periodNum  |参数名称：周期数量。| |参数的约束及描述：周期数量。|
    * effectiveTime  |参数名称：生效时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。| |参数约束及描述：生效时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。|
    * expireTime  |参数名称：失效时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。| |参数约束及描述：失效时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。|
    * subscriptionNum  |参数名称：订购数量。| |参数的约束及描述：订购数量。|
    * amountAfterDiscount  |参数名称：订单优惠后金额（实付价格，不含券不含卡）。| |参数的约束及描述：订单优惠后金额（实付价格，不含券不含卡）。|
    * officialAmount  |参数名称：订单金额（官网价）。退订订单中，该金额等于currencyAfterDiscount。| |参数的约束及描述：订单金额（官网价）。退订订单中，该金额等于currencyAfterDiscount。|
    * amountInfo  amountInfo
    * currency  |参数名称：货币编码。| |参数约束及描述：货币编码。如CNY|
    * categoryCode  |参数名称：产品目录编码。| |参数约束及描述：产品目录编码。|
    * productOwnerService  |参数名称：产品归属的云服务类型编码。| |参数约束及描述：产品归属的云服务类型编码。|
    * commercialResource  |参数名称：商务归属的资源类型编码。| |参数约束及描述：商务归属的资源类型编码。|
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'orderLineItemId' => 'order_line_item_id',
            'serviceTypeCode' => 'service_type_code',
            'serviceTypeName' => 'service_type_name',
            'productId' => 'product_id',
            'productSpecDesc' => 'product_spec_desc',
            'periodType' => 'period_type',
            'periodNum' => 'period_num',
            'effectiveTime' => 'effective_time',
            'expireTime' => 'expire_time',
            'subscriptionNum' => 'subscription_num',
            'amountAfterDiscount' => 'amount_after_discount',
            'officialAmount' => 'official_amount',
            'amountInfo' => 'amount_info',
            'currency' => 'currency',
            'categoryCode' => 'category_code',
            'productOwnerService' => 'product_owner_service',
            'commercialResource' => 'commercial_resource'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * orderLineItemId  |参数名称：订单项Id。| |参数约束及描述：订单项Id。|
    * serviceTypeCode  |参数名称：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型云服务类型云服务类型云服务类型。| |参数约束及描述：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型云服务类型云服务类型云服务类型。|
    * serviceTypeName  |参数名称：服务类型编码名称| |参数约束及描述：服务类型编码名称|
    * productId  |参数名称：产品ID。| |参数约束及描述：产品ID。|
    * productSpecDesc  |参数名称：产品规格描述。| |参数约束及描述：产品规格描述。|
    * periodType  |参数名称：周期类型。0：天；1：周；2：月；3：年；4：小时；5：一次性；6：按需（预留）；7：按用量报表使用（预留）。| |参数的约束及描述：周期类型。0：天；1：周；2：月；3：年；4：小时；5：一次性；6：按需（预留）；7：按用量报表使用（预留）。|
    * periodNum  |参数名称：周期数量。| |参数的约束及描述：周期数量。|
    * effectiveTime  |参数名称：生效时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。| |参数约束及描述：生效时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。|
    * expireTime  |参数名称：失效时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。| |参数约束及描述：失效时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。|
    * subscriptionNum  |参数名称：订购数量。| |参数的约束及描述：订购数量。|
    * amountAfterDiscount  |参数名称：订单优惠后金额（实付价格，不含券不含卡）。| |参数的约束及描述：订单优惠后金额（实付价格，不含券不含卡）。|
    * officialAmount  |参数名称：订单金额（官网价）。退订订单中，该金额等于currencyAfterDiscount。| |参数的约束及描述：订单金额（官网价）。退订订单中，该金额等于currencyAfterDiscount。|
    * amountInfo  amountInfo
    * currency  |参数名称：货币编码。| |参数约束及描述：货币编码。如CNY|
    * categoryCode  |参数名称：产品目录编码。| |参数约束及描述：产品目录编码。|
    * productOwnerService  |参数名称：产品归属的云服务类型编码。| |参数约束及描述：产品归属的云服务类型编码。|
    * commercialResource  |参数名称：商务归属的资源类型编码。| |参数约束及描述：商务归属的资源类型编码。|
    *
    * @var string[]
    */
    protected static $setters = [
            'orderLineItemId' => 'setOrderLineItemId',
            'serviceTypeCode' => 'setServiceTypeCode',
            'serviceTypeName' => 'setServiceTypeName',
            'productId' => 'setProductId',
            'productSpecDesc' => 'setProductSpecDesc',
            'periodType' => 'setPeriodType',
            'periodNum' => 'setPeriodNum',
            'effectiveTime' => 'setEffectiveTime',
            'expireTime' => 'setExpireTime',
            'subscriptionNum' => 'setSubscriptionNum',
            'amountAfterDiscount' => 'setAmountAfterDiscount',
            'officialAmount' => 'setOfficialAmount',
            'amountInfo' => 'setAmountInfo',
            'currency' => 'setCurrency',
            'categoryCode' => 'setCategoryCode',
            'productOwnerService' => 'setProductOwnerService',
            'commercialResource' => 'setCommercialResource'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * orderLineItemId  |参数名称：订单项Id。| |参数约束及描述：订单项Id。|
    * serviceTypeCode  |参数名称：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型云服务类型云服务类型云服务类型。| |参数约束及描述：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型云服务类型云服务类型云服务类型。|
    * serviceTypeName  |参数名称：服务类型编码名称| |参数约束及描述：服务类型编码名称|
    * productId  |参数名称：产品ID。| |参数约束及描述：产品ID。|
    * productSpecDesc  |参数名称：产品规格描述。| |参数约束及描述：产品规格描述。|
    * periodType  |参数名称：周期类型。0：天；1：周；2：月；3：年；4：小时；5：一次性；6：按需（预留）；7：按用量报表使用（预留）。| |参数的约束及描述：周期类型。0：天；1：周；2：月；3：年；4：小时；5：一次性；6：按需（预留）；7：按用量报表使用（预留）。|
    * periodNum  |参数名称：周期数量。| |参数的约束及描述：周期数量。|
    * effectiveTime  |参数名称：生效时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。| |参数约束及描述：生效时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。|
    * expireTime  |参数名称：失效时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。| |参数约束及描述：失效时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。|
    * subscriptionNum  |参数名称：订购数量。| |参数的约束及描述：订购数量。|
    * amountAfterDiscount  |参数名称：订单优惠后金额（实付价格，不含券不含卡）。| |参数的约束及描述：订单优惠后金额（实付价格，不含券不含卡）。|
    * officialAmount  |参数名称：订单金额（官网价）。退订订单中，该金额等于currencyAfterDiscount。| |参数的约束及描述：订单金额（官网价）。退订订单中，该金额等于currencyAfterDiscount。|
    * amountInfo  amountInfo
    * currency  |参数名称：货币编码。| |参数约束及描述：货币编码。如CNY|
    * categoryCode  |参数名称：产品目录编码。| |参数约束及描述：产品目录编码。|
    * productOwnerService  |参数名称：产品归属的云服务类型编码。| |参数约束及描述：产品归属的云服务类型编码。|
    * commercialResource  |参数名称：商务归属的资源类型编码。| |参数约束及描述：商务归属的资源类型编码。|
    *
    * @var string[]
    */
    protected static $getters = [
            'orderLineItemId' => 'getOrderLineItemId',
            'serviceTypeCode' => 'getServiceTypeCode',
            'serviceTypeName' => 'getServiceTypeName',
            'productId' => 'getProductId',
            'productSpecDesc' => 'getProductSpecDesc',
            'periodType' => 'getPeriodType',
            'periodNum' => 'getPeriodNum',
            'effectiveTime' => 'getEffectiveTime',
            'expireTime' => 'getExpireTime',
            'subscriptionNum' => 'getSubscriptionNum',
            'amountAfterDiscount' => 'getAmountAfterDiscount',
            'officialAmount' => 'getOfficialAmount',
            'amountInfo' => 'getAmountInfo',
            'currency' => 'getCurrency',
            'categoryCode' => 'getCategoryCode',
            'productOwnerService' => 'getProductOwnerService',
            'commercialResource' => 'getCommercialResource'
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
        $this->container['orderLineItemId'] = isset($data['orderLineItemId']) ? $data['orderLineItemId'] : null;
        $this->container['serviceTypeCode'] = isset($data['serviceTypeCode']) ? $data['serviceTypeCode'] : null;
        $this->container['serviceTypeName'] = isset($data['serviceTypeName']) ? $data['serviceTypeName'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['productSpecDesc'] = isset($data['productSpecDesc']) ? $data['productSpecDesc'] : null;
        $this->container['periodType'] = isset($data['periodType']) ? $data['periodType'] : null;
        $this->container['periodNum'] = isset($data['periodNum']) ? $data['periodNum'] : null;
        $this->container['effectiveTime'] = isset($data['effectiveTime']) ? $data['effectiveTime'] : null;
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
        $this->container['subscriptionNum'] = isset($data['subscriptionNum']) ? $data['subscriptionNum'] : null;
        $this->container['amountAfterDiscount'] = isset($data['amountAfterDiscount']) ? $data['amountAfterDiscount'] : null;
        $this->container['officialAmount'] = isset($data['officialAmount']) ? $data['officialAmount'] : null;
        $this->container['amountInfo'] = isset($data['amountInfo']) ? $data['amountInfo'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['categoryCode'] = isset($data['categoryCode']) ? $data['categoryCode'] : null;
        $this->container['productOwnerService'] = isset($data['productOwnerService']) ? $data['productOwnerService'] : null;
        $this->container['commercialResource'] = isset($data['commercialResource']) ? $data['commercialResource'] : null;
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
    * Gets orderLineItemId
    *  |参数名称：订单项Id。| |参数约束及描述：订单项Id。|
    *
    * @return string|null
    */
    public function getOrderLineItemId()
    {
        return $this->container['orderLineItemId'];
    }

    /**
    * Sets orderLineItemId
    *
    * @param string|null $orderLineItemId |参数名称：订单项Id。| |参数约束及描述：订单项Id。|
    *
    * @return $this
    */
    public function setOrderLineItemId($orderLineItemId)
    {
        $this->container['orderLineItemId'] = $orderLineItemId;
        return $this;
    }

    /**
    * Gets serviceTypeCode
    *  |参数名称：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型云服务类型云服务类型云服务类型。| |参数约束及描述：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型云服务类型云服务类型云服务类型。|
    *
    * @return string|null
    */
    public function getServiceTypeCode()
    {
        return $this->container['serviceTypeCode'];
    }

    /**
    * Sets serviceTypeCode
    *
    * @param string|null $serviceTypeCode |参数名称：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型云服务类型云服务类型云服务类型。| |参数约束及描述：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型云服务类型云服务类型云服务类型。|
    *
    * @return $this
    */
    public function setServiceTypeCode($serviceTypeCode)
    {
        $this->container['serviceTypeCode'] = $serviceTypeCode;
        return $this;
    }

    /**
    * Gets serviceTypeName
    *  |参数名称：服务类型编码名称| |参数约束及描述：服务类型编码名称|
    *
    * @return string|null
    */
    public function getServiceTypeName()
    {
        return $this->container['serviceTypeName'];
    }

    /**
    * Sets serviceTypeName
    *
    * @param string|null $serviceTypeName |参数名称：服务类型编码名称| |参数约束及描述：服务类型编码名称|
    *
    * @return $this
    */
    public function setServiceTypeName($serviceTypeName)
    {
        $this->container['serviceTypeName'] = $serviceTypeName;
        return $this;
    }

    /**
    * Gets productId
    *  |参数名称：产品ID。| |参数约束及描述：产品ID。|
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
    * @param string|null $productId |参数名称：产品ID。| |参数约束及描述：产品ID。|
    *
    * @return $this
    */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;
        return $this;
    }

    /**
    * Gets productSpecDesc
    *  |参数名称：产品规格描述。| |参数约束及描述：产品规格描述。|
    *
    * @return string|null
    */
    public function getProductSpecDesc()
    {
        return $this->container['productSpecDesc'];
    }

    /**
    * Sets productSpecDesc
    *
    * @param string|null $productSpecDesc |参数名称：产品规格描述。| |参数约束及描述：产品规格描述。|
    *
    * @return $this
    */
    public function setProductSpecDesc($productSpecDesc)
    {
        $this->container['productSpecDesc'] = $productSpecDesc;
        return $this;
    }

    /**
    * Gets periodType
    *  |参数名称：周期类型。0：天；1：周；2：月；3：年；4：小时；5：一次性；6：按需（预留）；7：按用量报表使用（预留）。| |参数的约束及描述：周期类型。0：天；1：周；2：月；3：年；4：小时；5：一次性；6：按需（预留）；7：按用量报表使用（预留）。|
    *
    * @return int|null
    */
    public function getPeriodType()
    {
        return $this->container['periodType'];
    }

    /**
    * Sets periodType
    *
    * @param int|null $periodType |参数名称：周期类型。0：天；1：周；2：月；3：年；4：小时；5：一次性；6：按需（预留）；7：按用量报表使用（预留）。| |参数的约束及描述：周期类型。0：天；1：周；2：月；3：年；4：小时；5：一次性；6：按需（预留）；7：按用量报表使用（预留）。|
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
    *  |参数名称：周期数量。| |参数的约束及描述：周期数量。|
    *
    * @return int|null
    */
    public function getPeriodNum()
    {
        return $this->container['periodNum'];
    }

    /**
    * Sets periodNum
    *
    * @param int|null $periodNum |参数名称：周期数量。| |参数的约束及描述：周期数量。|
    *
    * @return $this
    */
    public function setPeriodNum($periodNum)
    {
        $this->container['periodNum'] = $periodNum;
        return $this;
    }

    /**
    * Gets effectiveTime
    *  |参数名称：生效时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。| |参数约束及描述：生效时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。|
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
    * @param string|null $effectiveTime |参数名称：生效时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。| |参数约束及描述：生效时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。|
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
    *  |参数名称：失效时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。| |参数约束及描述：失效时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。|
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
    * @param string|null $expireTime |参数名称：失效时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。| |参数约束及描述：失效时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。|
    *
    * @return $this
    */
    public function setExpireTime($expireTime)
    {
        $this->container['expireTime'] = $expireTime;
        return $this;
    }

    /**
    * Gets subscriptionNum
    *  |参数名称：订购数量。| |参数的约束及描述：订购数量。|
    *
    * @return int|null
    */
    public function getSubscriptionNum()
    {
        return $this->container['subscriptionNum'];
    }

    /**
    * Sets subscriptionNum
    *
    * @param int|null $subscriptionNum |参数名称：订购数量。| |参数的约束及描述：订购数量。|
    *
    * @return $this
    */
    public function setSubscriptionNum($subscriptionNum)
    {
        $this->container['subscriptionNum'] = $subscriptionNum;
        return $this;
    }

    /**
    * Gets amountAfterDiscount
    *  |参数名称：订单优惠后金额（实付价格，不含券不含卡）。| |参数的约束及描述：订单优惠后金额（实付价格，不含券不含卡）。|
    *
    * @return double|null
    */
    public function getAmountAfterDiscount()
    {
        return $this->container['amountAfterDiscount'];
    }

    /**
    * Sets amountAfterDiscount
    *
    * @param double|null $amountAfterDiscount |参数名称：订单优惠后金额（实付价格，不含券不含卡）。| |参数的约束及描述：订单优惠后金额（实付价格，不含券不含卡）。|
    *
    * @return $this
    */
    public function setAmountAfterDiscount($amountAfterDiscount)
    {
        $this->container['amountAfterDiscount'] = $amountAfterDiscount;
        return $this;
    }

    /**
    * Gets officialAmount
    *  |参数名称：订单金额（官网价）。退订订单中，该金额等于currencyAfterDiscount。| |参数的约束及描述：订单金额（官网价）。退订订单中，该金额等于currencyAfterDiscount。|
    *
    * @return double|null
    */
    public function getOfficialAmount()
    {
        return $this->container['officialAmount'];
    }

    /**
    * Sets officialAmount
    *
    * @param double|null $officialAmount |参数名称：订单金额（官网价）。退订订单中，该金额等于currencyAfterDiscount。| |参数的约束及描述：订单金额（官网价）。退订订单中，该金额等于currencyAfterDiscount。|
    *
    * @return $this
    */
    public function setOfficialAmount($officialAmount)
    {
        $this->container['officialAmount'] = $officialAmount;
        return $this;
    }

    /**
    * Gets amountInfo
    *  amountInfo
    *
    * @return \HuaweiCloud\SDK\Bssintl\V2\Model\AmountInfomationV2|null
    */
    public function getAmountInfo()
    {
        return $this->container['amountInfo'];
    }

    /**
    * Sets amountInfo
    *
    * @param \HuaweiCloud\SDK\Bssintl\V2\Model\AmountInfomationV2|null $amountInfo amountInfo
    *
    * @return $this
    */
    public function setAmountInfo($amountInfo)
    {
        $this->container['amountInfo'] = $amountInfo;
        return $this;
    }

    /**
    * Gets currency
    *  |参数名称：货币编码。| |参数约束及描述：货币编码。如CNY|
    *
    * @return string|null
    */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
    * Sets currency
    *
    * @param string|null $currency |参数名称：货币编码。| |参数约束及描述：货币编码。如CNY|
    *
    * @return $this
    */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;
        return $this;
    }

    /**
    * Gets categoryCode
    *  |参数名称：产品目录编码。| |参数约束及描述：产品目录编码。|
    *
    * @return string|null
    */
    public function getCategoryCode()
    {
        return $this->container['categoryCode'];
    }

    /**
    * Sets categoryCode
    *
    * @param string|null $categoryCode |参数名称：产品目录编码。| |参数约束及描述：产品目录编码。|
    *
    * @return $this
    */
    public function setCategoryCode($categoryCode)
    {
        $this->container['categoryCode'] = $categoryCode;
        return $this;
    }

    /**
    * Gets productOwnerService
    *  |参数名称：产品归属的云服务类型编码。| |参数约束及描述：产品归属的云服务类型编码。|
    *
    * @return string|null
    */
    public function getProductOwnerService()
    {
        return $this->container['productOwnerService'];
    }

    /**
    * Sets productOwnerService
    *
    * @param string|null $productOwnerService |参数名称：产品归属的云服务类型编码。| |参数约束及描述：产品归属的云服务类型编码。|
    *
    * @return $this
    */
    public function setProductOwnerService($productOwnerService)
    {
        $this->container['productOwnerService'] = $productOwnerService;
        return $this;
    }

    /**
    * Gets commercialResource
    *  |参数名称：商务归属的资源类型编码。| |参数约束及描述：商务归属的资源类型编码。|
    *
    * @return string|null
    */
    public function getCommercialResource()
    {
        return $this->container['commercialResource'];
    }

    /**
    * Sets commercialResource
    *
    * @param string|null $commercialResource |参数名称：商务归属的资源类型编码。| |参数约束及描述：商务归属的资源类型编码。|
    *
    * @return $this
    */
    public function setCommercialResource($commercialResource)
    {
        $this->container['commercialResource'] = $commercialResource;
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

