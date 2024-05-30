<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSubCustomerCouponsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSubCustomerCouponsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * couponId  优惠券ID。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串时，作为筛选条件。
    * orderId  订单ID。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串时，作为筛选条件。
    * promotionPlanId  促销计划ID。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串时，作为筛选条件。
    * couponType  优惠券类型：1：代金券2：折扣券3：产品券4：现金券。此参数不携带或携带值为空或携带值为null时，不作为筛选条件；不支持携带值为空串。
    * status  客户优惠券实例状态：1：未激活2：待使用3：已使用4：已过期。此参数不携带或携带值为空时，不作为筛选条件。 说明： 已过期优惠券，只返回12个月以内的数据。
    * activeStartTime  激活时间。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。此参数不携带或携带值为空时，不作为筛选条件；不支持携带值为空串或携带值为null。
    * activeEndTime  结束时间。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。此参数不携带或携带值为空时，不作为筛选条件；不支持携带值为空串或携带值为null。
    * offset  偏移量，从0开始。默认值为0。此参数需与limit联合使用，不支持单独使用。说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  查询的优惠券数量，默认值为10。
    * sourceId  发券来源，如果是合作伙伴发送的券，此处为伙伴ID。如果需要查询某个伙伴发放的券，可以在此处输入该伙伴ID。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串时，作为筛选条件。
    * indirectPartnerId  云经销商（二级经销商）ID。华为云总经销商（一级经销商）查询云经销商名下的优惠券时，需要携带该参数；除此之外，此参数不做处理。否则只能查询自己的优惠券列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'couponId' => 'string',
            'orderId' => 'string',
            'promotionPlanId' => 'string',
            'couponType' => 'int',
            'status' => 'int',
            'activeStartTime' => 'string',
            'activeEndTime' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'sourceId' => 'string',
            'indirectPartnerId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * couponId  优惠券ID。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串时，作为筛选条件。
    * orderId  订单ID。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串时，作为筛选条件。
    * promotionPlanId  促销计划ID。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串时，作为筛选条件。
    * couponType  优惠券类型：1：代金券2：折扣券3：产品券4：现金券。此参数不携带或携带值为空或携带值为null时，不作为筛选条件；不支持携带值为空串。
    * status  客户优惠券实例状态：1：未激活2：待使用3：已使用4：已过期。此参数不携带或携带值为空时，不作为筛选条件。 说明： 已过期优惠券，只返回12个月以内的数据。
    * activeStartTime  激活时间。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。此参数不携带或携带值为空时，不作为筛选条件；不支持携带值为空串或携带值为null。
    * activeEndTime  结束时间。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。此参数不携带或携带值为空时，不作为筛选条件；不支持携带值为空串或携带值为null。
    * offset  偏移量，从0开始。默认值为0。此参数需与limit联合使用，不支持单独使用。说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  查询的优惠券数量，默认值为10。
    * sourceId  发券来源，如果是合作伙伴发送的券，此处为伙伴ID。如果需要查询某个伙伴发放的券，可以在此处输入该伙伴ID。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串时，作为筛选条件。
    * indirectPartnerId  云经销商（二级经销商）ID。华为云总经销商（一级经销商）查询云经销商名下的优惠券时，需要携带该参数；除此之外，此参数不做处理。否则只能查询自己的优惠券列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'couponId' => null,
        'orderId' => null,
        'promotionPlanId' => null,
        'couponType' => 'int32',
        'status' => 'int32',
        'activeStartTime' => null,
        'activeEndTime' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'sourceId' => null,
        'indirectPartnerId' => null
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
    * couponId  优惠券ID。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串时，作为筛选条件。
    * orderId  订单ID。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串时，作为筛选条件。
    * promotionPlanId  促销计划ID。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串时，作为筛选条件。
    * couponType  优惠券类型：1：代金券2：折扣券3：产品券4：现金券。此参数不携带或携带值为空或携带值为null时，不作为筛选条件；不支持携带值为空串。
    * status  客户优惠券实例状态：1：未激活2：待使用3：已使用4：已过期。此参数不携带或携带值为空时，不作为筛选条件。 说明： 已过期优惠券，只返回12个月以内的数据。
    * activeStartTime  激活时间。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。此参数不携带或携带值为空时，不作为筛选条件；不支持携带值为空串或携带值为null。
    * activeEndTime  结束时间。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。此参数不携带或携带值为空时，不作为筛选条件；不支持携带值为空串或携带值为null。
    * offset  偏移量，从0开始。默认值为0。此参数需与limit联合使用，不支持单独使用。说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  查询的优惠券数量，默认值为10。
    * sourceId  发券来源，如果是合作伙伴发送的券，此处为伙伴ID。如果需要查询某个伙伴发放的券，可以在此处输入该伙伴ID。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串时，作为筛选条件。
    * indirectPartnerId  云经销商（二级经销商）ID。华为云总经销商（一级经销商）查询云经销商名下的优惠券时，需要携带该参数；除此之外，此参数不做处理。否则只能查询自己的优惠券列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'couponId' => 'coupon_id',
            'orderId' => 'order_id',
            'promotionPlanId' => 'promotion_plan_id',
            'couponType' => 'coupon_type',
            'status' => 'status',
            'activeStartTime' => 'active_start_time',
            'activeEndTime' => 'active_end_time',
            'offset' => 'offset',
            'limit' => 'limit',
            'sourceId' => 'source_id',
            'indirectPartnerId' => 'indirect_partner_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * couponId  优惠券ID。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串时，作为筛选条件。
    * orderId  订单ID。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串时，作为筛选条件。
    * promotionPlanId  促销计划ID。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串时，作为筛选条件。
    * couponType  优惠券类型：1：代金券2：折扣券3：产品券4：现金券。此参数不携带或携带值为空或携带值为null时，不作为筛选条件；不支持携带值为空串。
    * status  客户优惠券实例状态：1：未激活2：待使用3：已使用4：已过期。此参数不携带或携带值为空时，不作为筛选条件。 说明： 已过期优惠券，只返回12个月以内的数据。
    * activeStartTime  激活时间。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。此参数不携带或携带值为空时，不作为筛选条件；不支持携带值为空串或携带值为null。
    * activeEndTime  结束时间。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。此参数不携带或携带值为空时，不作为筛选条件；不支持携带值为空串或携带值为null。
    * offset  偏移量，从0开始。默认值为0。此参数需与limit联合使用，不支持单独使用。说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  查询的优惠券数量，默认值为10。
    * sourceId  发券来源，如果是合作伙伴发送的券，此处为伙伴ID。如果需要查询某个伙伴发放的券，可以在此处输入该伙伴ID。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串时，作为筛选条件。
    * indirectPartnerId  云经销商（二级经销商）ID。华为云总经销商（一级经销商）查询云经销商名下的优惠券时，需要携带该参数；除此之外，此参数不做处理。否则只能查询自己的优惠券列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'couponId' => 'setCouponId',
            'orderId' => 'setOrderId',
            'promotionPlanId' => 'setPromotionPlanId',
            'couponType' => 'setCouponType',
            'status' => 'setStatus',
            'activeStartTime' => 'setActiveStartTime',
            'activeEndTime' => 'setActiveEndTime',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'sourceId' => 'setSourceId',
            'indirectPartnerId' => 'setIndirectPartnerId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * couponId  优惠券ID。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串时，作为筛选条件。
    * orderId  订单ID。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串时，作为筛选条件。
    * promotionPlanId  促销计划ID。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串时，作为筛选条件。
    * couponType  优惠券类型：1：代金券2：折扣券3：产品券4：现金券。此参数不携带或携带值为空或携带值为null时，不作为筛选条件；不支持携带值为空串。
    * status  客户优惠券实例状态：1：未激活2：待使用3：已使用4：已过期。此参数不携带或携带值为空时，不作为筛选条件。 说明： 已过期优惠券，只返回12个月以内的数据。
    * activeStartTime  激活时间。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。此参数不携带或携带值为空时，不作为筛选条件；不支持携带值为空串或携带值为null。
    * activeEndTime  结束时间。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。此参数不携带或携带值为空时，不作为筛选条件；不支持携带值为空串或携带值为null。
    * offset  偏移量，从0开始。默认值为0。此参数需与limit联合使用，不支持单独使用。说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  查询的优惠券数量，默认值为10。
    * sourceId  发券来源，如果是合作伙伴发送的券，此处为伙伴ID。如果需要查询某个伙伴发放的券，可以在此处输入该伙伴ID。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串时，作为筛选条件。
    * indirectPartnerId  云经销商（二级经销商）ID。华为云总经销商（一级经销商）查询云经销商名下的优惠券时，需要携带该参数；除此之外，此参数不做处理。否则只能查询自己的优惠券列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'couponId' => 'getCouponId',
            'orderId' => 'getOrderId',
            'promotionPlanId' => 'getPromotionPlanId',
            'couponType' => 'getCouponType',
            'status' => 'getStatus',
            'activeStartTime' => 'getActiveStartTime',
            'activeEndTime' => 'getActiveEndTime',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'sourceId' => 'getSourceId',
            'indirectPartnerId' => 'getIndirectPartnerId'
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
        $this->container['couponId'] = isset($data['couponId']) ? $data['couponId'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['promotionPlanId'] = isset($data['promotionPlanId']) ? $data['promotionPlanId'] : null;
        $this->container['couponType'] = isset($data['couponType']) ? $data['couponType'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['activeStartTime'] = isset($data['activeStartTime']) ? $data['activeStartTime'] : null;
        $this->container['activeEndTime'] = isset($data['activeEndTime']) ? $data['activeEndTime'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['sourceId'] = isset($data['sourceId']) ? $data['sourceId'] : null;
        $this->container['indirectPartnerId'] = isset($data['indirectPartnerId']) ? $data['indirectPartnerId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['couponType']) && ($this->container['couponType'] > 4)) {
                $invalidProperties[] = "invalid value for 'couponType', must be smaller than or equal to 4.";
            }
            if (!is_null($this->container['couponType']) && ($this->container['couponType'] < 1)) {
                $invalidProperties[] = "invalid value for 'couponType', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['status']) && ($this->container['status'] > 4)) {
                $invalidProperties[] = "invalid value for 'status', must be smaller than or equal to 4.";
            }
            if (!is_null($this->container['status']) && ($this->container['status'] < 1)) {
                $invalidProperties[] = "invalid value for 'status', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
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
    * Gets couponId
    *  优惠券ID。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串时，作为筛选条件。
    *
    * @return string|null
    */
    public function getCouponId()
    {
        return $this->container['couponId'];
    }

    /**
    * Sets couponId
    *
    * @param string|null $couponId 优惠券ID。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串时，作为筛选条件。
    *
    * @return $this
    */
    public function setCouponId($couponId)
    {
        $this->container['couponId'] = $couponId;
        return $this;
    }

    /**
    * Gets orderId
    *  订单ID。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串时，作为筛选条件。
    *
    * @return string|null
    */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
    * Sets orderId
    *
    * @param string|null $orderId 订单ID。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串时，作为筛选条件。
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
        return $this;
    }

    /**
    * Gets promotionPlanId
    *  促销计划ID。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串时，作为筛选条件。
    *
    * @return string|null
    */
    public function getPromotionPlanId()
    {
        return $this->container['promotionPlanId'];
    }

    /**
    * Sets promotionPlanId
    *
    * @param string|null $promotionPlanId 促销计划ID。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串时，作为筛选条件。
    *
    * @return $this
    */
    public function setPromotionPlanId($promotionPlanId)
    {
        $this->container['promotionPlanId'] = $promotionPlanId;
        return $this;
    }

    /**
    * Gets couponType
    *  优惠券类型：1：代金券2：折扣券3：产品券4：现金券。此参数不携带或携带值为空或携带值为null时，不作为筛选条件；不支持携带值为空串。
    *
    * @return int|null
    */
    public function getCouponType()
    {
        return $this->container['couponType'];
    }

    /**
    * Sets couponType
    *
    * @param int|null $couponType 优惠券类型：1：代金券2：折扣券3：产品券4：现金券。此参数不携带或携带值为空或携带值为null时，不作为筛选条件；不支持携带值为空串。
    *
    * @return $this
    */
    public function setCouponType($couponType)
    {
        $this->container['couponType'] = $couponType;
        return $this;
    }

    /**
    * Gets status
    *  客户优惠券实例状态：1：未激活2：待使用3：已使用4：已过期。此参数不携带或携带值为空时，不作为筛选条件。 说明： 已过期优惠券，只返回12个月以内的数据。
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 客户优惠券实例状态：1：未激活2：待使用3：已使用4：已过期。此参数不携带或携带值为空时，不作为筛选条件。 说明： 已过期优惠券，只返回12个月以内的数据。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets activeStartTime
    *  激活时间。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。此参数不携带或携带值为空时，不作为筛选条件；不支持携带值为空串或携带值为null。
    *
    * @return string|null
    */
    public function getActiveStartTime()
    {
        return $this->container['activeStartTime'];
    }

    /**
    * Sets activeStartTime
    *
    * @param string|null $activeStartTime 激活时间。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。此参数不携带或携带值为空时，不作为筛选条件；不支持携带值为空串或携带值为null。
    *
    * @return $this
    */
    public function setActiveStartTime($activeStartTime)
    {
        $this->container['activeStartTime'] = $activeStartTime;
        return $this;
    }

    /**
    * Gets activeEndTime
    *  结束时间。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。此参数不携带或携带值为空时，不作为筛选条件；不支持携带值为空串或携带值为null。
    *
    * @return string|null
    */
    public function getActiveEndTime()
    {
        return $this->container['activeEndTime'];
    }

    /**
    * Sets activeEndTime
    *
    * @param string|null $activeEndTime 结束时间。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。此参数不携带或携带值为空时，不作为筛选条件；不支持携带值为空串或携带值为null。
    *
    * @return $this
    */
    public function setActiveEndTime($activeEndTime)
    {
        $this->container['activeEndTime'] = $activeEndTime;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量，从0开始。默认值为0。此参数需与limit联合使用，不支持单独使用。说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 偏移量，从0开始。默认值为0。此参数需与limit联合使用，不支持单独使用。说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  查询的优惠券数量，默认值为10。
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 查询的优惠券数量，默认值为10。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets sourceId
    *  发券来源，如果是合作伙伴发送的券，此处为伙伴ID。如果需要查询某个伙伴发放的券，可以在此处输入该伙伴ID。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串时，作为筛选条件。
    *
    * @return string|null
    */
    public function getSourceId()
    {
        return $this->container['sourceId'];
    }

    /**
    * Sets sourceId
    *
    * @param string|null $sourceId 发券来源，如果是合作伙伴发送的券，此处为伙伴ID。如果需要查询某个伙伴发放的券，可以在此处输入该伙伴ID。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串时，作为筛选条件。
    *
    * @return $this
    */
    public function setSourceId($sourceId)
    {
        $this->container['sourceId'] = $sourceId;
        return $this;
    }

    /**
    * Gets indirectPartnerId
    *  云经销商（二级经销商）ID。华为云总经销商（一级经销商）查询云经销商名下的优惠券时，需要携带该参数；除此之外，此参数不做处理。否则只能查询自己的优惠券列表。
    *
    * @return string|null
    */
    public function getIndirectPartnerId()
    {
        return $this->container['indirectPartnerId'];
    }

    /**
    * Sets indirectPartnerId
    *
    * @param string|null $indirectPartnerId 云经销商（二级经销商）ID。华为云总经销商（一级经销商）查询云经销商名下的优惠券时，需要携带该参数；除此之外，此参数不做处理。否则只能查询自己的优惠券列表。
    *
    * @return $this
    */
    public function setIndirectPartnerId($indirectPartnerId)
    {
        $this->container['indirectPartnerId'] = $indirectPartnerId;
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

