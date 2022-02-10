<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

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
    * couponId  |参数名称：优惠券ID。| |参数的约束及描述：优惠券ID。|
    * orderId  |参数名称：订单ID。| |参数的约束及描述：订单ID。|
    * promotionPlanId  |参数名称：促销计划ID。| |参数的约束及描述：促销计划ID。|
    * couponType  |参数名称：优惠券类型：1：代金券；2：折扣券；3：产品券；4：现金券。| |参数的约束及描述：优惠券类型：1：代金券；2：折扣券；3：产品券；4：现金券。|
    * status  |参数名称：客户优惠券实例状态：1：未激活；2：待使用；3：已使用；4：已过期。| |参数的约束及描述：客户优惠券实例状态：1：未激活；2：待使用；3：已使用；4：已过期。|
    * activeStartTime  |参数名称：激活时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ| |参数的约束及描述：激活时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ|
    * activeEndTime  |参数名称：结束时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ| |参数的约束及描述：结束时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ|
    * offset  |参数名称：偏移量，默认为0| |参数的约束及描述：偏移量，默认为0|
    * limit  |参数名称：每页数量，默认10。| |参数的约束及描述：每页数量，默认10。|
    * sourceId  |参数名称：发券来源| |参数的约束及描述：如果是合作伙伴发送的券，这个地方是伙伴ID。 如果想查询某个伙伴发放的券，可以在这里输入伙伴ID|
    * indirectPartnerId  |参数名称：经营服务商（二级经销商）ID，如果要查询二级经销商名下的券，要传递该字段，否则查询的就是一级经销商自己的券列表。| |参数的约束及描述：经营服务商（二级经销商）ID，如果要查询二级经销商名下的券，要传递该字段，否则查询的就是一级经销商自己的券列表。|
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
    * couponId  |参数名称：优惠券ID。| |参数的约束及描述：优惠券ID。|
    * orderId  |参数名称：订单ID。| |参数的约束及描述：订单ID。|
    * promotionPlanId  |参数名称：促销计划ID。| |参数的约束及描述：促销计划ID。|
    * couponType  |参数名称：优惠券类型：1：代金券；2：折扣券；3：产品券；4：现金券。| |参数的约束及描述：优惠券类型：1：代金券；2：折扣券；3：产品券；4：现金券。|
    * status  |参数名称：客户优惠券实例状态：1：未激活；2：待使用；3：已使用；4：已过期。| |参数的约束及描述：客户优惠券实例状态：1：未激活；2：待使用；3：已使用；4：已过期。|
    * activeStartTime  |参数名称：激活时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ| |参数的约束及描述：激活时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ|
    * activeEndTime  |参数名称：结束时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ| |参数的约束及描述：结束时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ|
    * offset  |参数名称：偏移量，默认为0| |参数的约束及描述：偏移量，默认为0|
    * limit  |参数名称：每页数量，默认10。| |参数的约束及描述：每页数量，默认10。|
    * sourceId  |参数名称：发券来源| |参数的约束及描述：如果是合作伙伴发送的券，这个地方是伙伴ID。 如果想查询某个伙伴发放的券，可以在这里输入伙伴ID|
    * indirectPartnerId  |参数名称：经营服务商（二级经销商）ID，如果要查询二级经销商名下的券，要传递该字段，否则查询的就是一级经销商自己的券列表。| |参数的约束及描述：经营服务商（二级经销商）ID，如果要查询二级经销商名下的券，要传递该字段，否则查询的就是一级经销商自己的券列表。|
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
    * couponId  |参数名称：优惠券ID。| |参数的约束及描述：优惠券ID。|
    * orderId  |参数名称：订单ID。| |参数的约束及描述：订单ID。|
    * promotionPlanId  |参数名称：促销计划ID。| |参数的约束及描述：促销计划ID。|
    * couponType  |参数名称：优惠券类型：1：代金券；2：折扣券；3：产品券；4：现金券。| |参数的约束及描述：优惠券类型：1：代金券；2：折扣券；3：产品券；4：现金券。|
    * status  |参数名称：客户优惠券实例状态：1：未激活；2：待使用；3：已使用；4：已过期。| |参数的约束及描述：客户优惠券实例状态：1：未激活；2：待使用；3：已使用；4：已过期。|
    * activeStartTime  |参数名称：激活时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ| |参数的约束及描述：激活时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ|
    * activeEndTime  |参数名称：结束时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ| |参数的约束及描述：结束时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ|
    * offset  |参数名称：偏移量，默认为0| |参数的约束及描述：偏移量，默认为0|
    * limit  |参数名称：每页数量，默认10。| |参数的约束及描述：每页数量，默认10。|
    * sourceId  |参数名称：发券来源| |参数的约束及描述：如果是合作伙伴发送的券，这个地方是伙伴ID。 如果想查询某个伙伴发放的券，可以在这里输入伙伴ID|
    * indirectPartnerId  |参数名称：经营服务商（二级经销商）ID，如果要查询二级经销商名下的券，要传递该字段，否则查询的就是一级经销商自己的券列表。| |参数的约束及描述：经营服务商（二级经销商）ID，如果要查询二级经销商名下的券，要传递该字段，否则查询的就是一级经销商自己的券列表。|
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
    * couponId  |参数名称：优惠券ID。| |参数的约束及描述：优惠券ID。|
    * orderId  |参数名称：订单ID。| |参数的约束及描述：订单ID。|
    * promotionPlanId  |参数名称：促销计划ID。| |参数的约束及描述：促销计划ID。|
    * couponType  |参数名称：优惠券类型：1：代金券；2：折扣券；3：产品券；4：现金券。| |参数的约束及描述：优惠券类型：1：代金券；2：折扣券；3：产品券；4：现金券。|
    * status  |参数名称：客户优惠券实例状态：1：未激活；2：待使用；3：已使用；4：已过期。| |参数的约束及描述：客户优惠券实例状态：1：未激活；2：待使用；3：已使用；4：已过期。|
    * activeStartTime  |参数名称：激活时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ| |参数的约束及描述：激活时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ|
    * activeEndTime  |参数名称：结束时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ| |参数的约束及描述：结束时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ|
    * offset  |参数名称：偏移量，默认为0| |参数的约束及描述：偏移量，默认为0|
    * limit  |参数名称：每页数量，默认10。| |参数的约束及描述：每页数量，默认10。|
    * sourceId  |参数名称：发券来源| |参数的约束及描述：如果是合作伙伴发送的券，这个地方是伙伴ID。 如果想查询某个伙伴发放的券，可以在这里输入伙伴ID|
    * indirectPartnerId  |参数名称：经营服务商（二级经销商）ID，如果要查询二级经销商名下的券，要传递该字段，否则查询的就是一级经销商自己的券列表。| |参数的约束及描述：经营服务商（二级经销商）ID，如果要查询二级经销商名下的券，要传递该字段，否则查询的就是一级经销商自己的券列表。|
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
    * couponId  |参数名称：优惠券ID。| |参数的约束及描述：优惠券ID。|
    * orderId  |参数名称：订单ID。| |参数的约束及描述：订单ID。|
    * promotionPlanId  |参数名称：促销计划ID。| |参数的约束及描述：促销计划ID。|
    * couponType  |参数名称：优惠券类型：1：代金券；2：折扣券；3：产品券；4：现金券。| |参数的约束及描述：优惠券类型：1：代金券；2：折扣券；3：产品券；4：现金券。|
    * status  |参数名称：客户优惠券实例状态：1：未激活；2：待使用；3：已使用；4：已过期。| |参数的约束及描述：客户优惠券实例状态：1：未激活；2：待使用；3：已使用；4：已过期。|
    * activeStartTime  |参数名称：激活时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ| |参数的约束及描述：激活时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ|
    * activeEndTime  |参数名称：结束时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ| |参数的约束及描述：结束时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ|
    * offset  |参数名称：偏移量，默认为0| |参数的约束及描述：偏移量，默认为0|
    * limit  |参数名称：每页数量，默认10。| |参数的约束及描述：每页数量，默认10。|
    * sourceId  |参数名称：发券来源| |参数的约束及描述：如果是合作伙伴发送的券，这个地方是伙伴ID。 如果想查询某个伙伴发放的券，可以在这里输入伙伴ID|
    * indirectPartnerId  |参数名称：经营服务商（二级经销商）ID，如果要查询二级经销商名下的券，要传递该字段，否则查询的就是一级经销商自己的券列表。| |参数的约束及描述：经营服务商（二级经销商）ID，如果要查询二级经销商名下的券，要传递该字段，否则查询的就是一级经销商自己的券列表。|
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
    *  |参数名称：优惠券ID。| |参数的约束及描述：优惠券ID。|
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
    * @param string|null $couponId |参数名称：优惠券ID。| |参数的约束及描述：优惠券ID。|
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
    *  |参数名称：订单ID。| |参数的约束及描述：订单ID。|
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
    * @param string|null $orderId |参数名称：订单ID。| |参数的约束及描述：订单ID。|
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
    *  |参数名称：促销计划ID。| |参数的约束及描述：促销计划ID。|
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
    * @param string|null $promotionPlanId |参数名称：促销计划ID。| |参数的约束及描述：促销计划ID。|
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
    *  |参数名称：优惠券类型：1：代金券；2：折扣券；3：产品券；4：现金券。| |参数的约束及描述：优惠券类型：1：代金券；2：折扣券；3：产品券；4：现金券。|
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
    * @param int|null $couponType |参数名称：优惠券类型：1：代金券；2：折扣券；3：产品券；4：现金券。| |参数的约束及描述：优惠券类型：1：代金券；2：折扣券；3：产品券；4：现金券。|
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
    *  |参数名称：客户优惠券实例状态：1：未激活；2：待使用；3：已使用；4：已过期。| |参数的约束及描述：客户优惠券实例状态：1：未激活；2：待使用；3：已使用；4：已过期。|
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
    * @param int|null $status |参数名称：客户优惠券实例状态：1：未激活；2：待使用；3：已使用；4：已过期。| |参数的约束及描述：客户优惠券实例状态：1：未激活；2：待使用；3：已使用；4：已过期。|
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
    *  |参数名称：激活时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ| |参数的约束及描述：激活时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ|
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
    * @param string|null $activeStartTime |参数名称：激活时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ| |参数的约束及描述：激活时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ|
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
    *  |参数名称：结束时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ| |参数的约束及描述：结束时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ|
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
    * @param string|null $activeEndTime |参数名称：结束时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ| |参数的约束及描述：结束时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ|
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
    *  |参数名称：偏移量，默认为0| |参数的约束及描述：偏移量，默认为0|
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
    * @param int|null $offset |参数名称：偏移量，默认为0| |参数的约束及描述：偏移量，默认为0|
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
    *  |参数名称：每页数量，默认10。| |参数的约束及描述：每页数量，默认10。|
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
    * @param int|null $limit |参数名称：每页数量，默认10。| |参数的约束及描述：每页数量，默认10。|
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
    *  |参数名称：发券来源| |参数的约束及描述：如果是合作伙伴发送的券，这个地方是伙伴ID。 如果想查询某个伙伴发放的券，可以在这里输入伙伴ID|
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
    * @param string|null $sourceId |参数名称：发券来源| |参数的约束及描述：如果是合作伙伴发送的券，这个地方是伙伴ID。 如果想查询某个伙伴发放的券，可以在这里输入伙伴ID|
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
    *  |参数名称：经营服务商（二级经销商）ID，如果要查询二级经销商名下的券，要传递该字段，否则查询的就是一级经销商自己的券列表。| |参数的约束及描述：经营服务商（二级经销商）ID，如果要查询二级经销商名下的券，要传递该字段，否则查询的就是一级经销商自己的券列表。|
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
    * @param string|null $indirectPartnerId |参数名称：经营服务商（二级经销商）ID，如果要查询二级经销商名下的券，要传递该字段，否则查询的就是一级经销商自己的券列表。| |参数的约束及描述：经营服务商（二级经销商）ID，如果要查询二级经销商名下的券，要传递该字段，否则查询的就是一级经销商自己的券列表。|
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

