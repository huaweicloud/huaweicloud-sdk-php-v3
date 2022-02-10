<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListIssuedPartnerCouponsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListIssuedPartnerCouponsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * couponId  优惠券ID。
    * customerId  客户账号ID。您可以调用查询客户列表接口获取customer_id。
    * orderId  订单ID。
    * couponType  优惠券类型：1：代金券4：现金券
    * status  客户优惠券实例状态：1：未激活2：可使用3：已使用4：已过期5：已回收
    * createTimeBegin  创建时间（开始）。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。输入这个条件，会查询出创建时间大于这个时间的记录。
    * createTimeEnd  创建时间（结束）。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。输入这个条件，会查询出创建时间小于这个时间的记录。
    * effectiveTimeBegin  生效时间（开始）。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。输入这个条件，会查询出生效时间大于这个时间的记录。
    * effectiveTimeEnd  生效时间（结束）。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。输入这个条件，会查询出生效时间小于这个时间的记录。
    * expireTimeBegin  失效时间（开始）。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。输入这个条件，会查询出失效时间大于这个时间的记录。
    * expireTimeEnd  失效时间（结束）。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。输入这个条件，会查询出失效时间小于这个时间的记录。
    * offset  偏移量，从0开始。默认值为0。 说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  查询的每页数量。默认值为10。
    * indirectPartnerId  精英服务商ID。获取方法请参见查询精英服务商列表。华为云伙伴能力中心（一级经销商）查询精英服务商发放给子客户的优惠券时，需要携带该参数；否则只能查询发放给自己子客户的优惠券。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'couponId' => 'string',
            'customerId' => 'string',
            'orderId' => 'string',
            'couponType' => 'int',
            'status' => 'int',
            'createTimeBegin' => 'string',
            'createTimeEnd' => 'string',
            'effectiveTimeBegin' => 'string',
            'effectiveTimeEnd' => 'string',
            'expireTimeBegin' => 'string',
            'expireTimeEnd' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'indirectPartnerId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * couponId  优惠券ID。
    * customerId  客户账号ID。您可以调用查询客户列表接口获取customer_id。
    * orderId  订单ID。
    * couponType  优惠券类型：1：代金券4：现金券
    * status  客户优惠券实例状态：1：未激活2：可使用3：已使用4：已过期5：已回收
    * createTimeBegin  创建时间（开始）。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。输入这个条件，会查询出创建时间大于这个时间的记录。
    * createTimeEnd  创建时间（结束）。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。输入这个条件，会查询出创建时间小于这个时间的记录。
    * effectiveTimeBegin  生效时间（开始）。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。输入这个条件，会查询出生效时间大于这个时间的记录。
    * effectiveTimeEnd  生效时间（结束）。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。输入这个条件，会查询出生效时间小于这个时间的记录。
    * expireTimeBegin  失效时间（开始）。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。输入这个条件，会查询出失效时间大于这个时间的记录。
    * expireTimeEnd  失效时间（结束）。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。输入这个条件，会查询出失效时间小于这个时间的记录。
    * offset  偏移量，从0开始。默认值为0。 说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  查询的每页数量。默认值为10。
    * indirectPartnerId  精英服务商ID。获取方法请参见查询精英服务商列表。华为云伙伴能力中心（一级经销商）查询精英服务商发放给子客户的优惠券时，需要携带该参数；否则只能查询发放给自己子客户的优惠券。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'couponId' => null,
        'customerId' => null,
        'orderId' => null,
        'couponType' => 'int32',
        'status' => 'int32',
        'createTimeBegin' => null,
        'createTimeEnd' => null,
        'effectiveTimeBegin' => null,
        'effectiveTimeEnd' => null,
        'expireTimeBegin' => null,
        'expireTimeEnd' => null,
        'offset' => 'int32',
        'limit' => 'int32',
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
    * couponId  优惠券ID。
    * customerId  客户账号ID。您可以调用查询客户列表接口获取customer_id。
    * orderId  订单ID。
    * couponType  优惠券类型：1：代金券4：现金券
    * status  客户优惠券实例状态：1：未激活2：可使用3：已使用4：已过期5：已回收
    * createTimeBegin  创建时间（开始）。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。输入这个条件，会查询出创建时间大于这个时间的记录。
    * createTimeEnd  创建时间（结束）。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。输入这个条件，会查询出创建时间小于这个时间的记录。
    * effectiveTimeBegin  生效时间（开始）。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。输入这个条件，会查询出生效时间大于这个时间的记录。
    * effectiveTimeEnd  生效时间（结束）。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。输入这个条件，会查询出生效时间小于这个时间的记录。
    * expireTimeBegin  失效时间（开始）。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。输入这个条件，会查询出失效时间大于这个时间的记录。
    * expireTimeEnd  失效时间（结束）。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。输入这个条件，会查询出失效时间小于这个时间的记录。
    * offset  偏移量，从0开始。默认值为0。 说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  查询的每页数量。默认值为10。
    * indirectPartnerId  精英服务商ID。获取方法请参见查询精英服务商列表。华为云伙伴能力中心（一级经销商）查询精英服务商发放给子客户的优惠券时，需要携带该参数；否则只能查询发放给自己子客户的优惠券。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'couponId' => 'coupon_id',
            'customerId' => 'customer_id',
            'orderId' => 'order_id',
            'couponType' => 'coupon_type',
            'status' => 'status',
            'createTimeBegin' => 'create_time_begin',
            'createTimeEnd' => 'create_time_end',
            'effectiveTimeBegin' => 'effective_time_begin',
            'effectiveTimeEnd' => 'effective_time_end',
            'expireTimeBegin' => 'expire_time_begin',
            'expireTimeEnd' => 'expire_time_end',
            'offset' => 'offset',
            'limit' => 'limit',
            'indirectPartnerId' => 'indirect_partner_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * couponId  优惠券ID。
    * customerId  客户账号ID。您可以调用查询客户列表接口获取customer_id。
    * orderId  订单ID。
    * couponType  优惠券类型：1：代金券4：现金券
    * status  客户优惠券实例状态：1：未激活2：可使用3：已使用4：已过期5：已回收
    * createTimeBegin  创建时间（开始）。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。输入这个条件，会查询出创建时间大于这个时间的记录。
    * createTimeEnd  创建时间（结束）。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。输入这个条件，会查询出创建时间小于这个时间的记录。
    * effectiveTimeBegin  生效时间（开始）。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。输入这个条件，会查询出生效时间大于这个时间的记录。
    * effectiveTimeEnd  生效时间（结束）。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。输入这个条件，会查询出生效时间小于这个时间的记录。
    * expireTimeBegin  失效时间（开始）。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。输入这个条件，会查询出失效时间大于这个时间的记录。
    * expireTimeEnd  失效时间（结束）。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。输入这个条件，会查询出失效时间小于这个时间的记录。
    * offset  偏移量，从0开始。默认值为0。 说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  查询的每页数量。默认值为10。
    * indirectPartnerId  精英服务商ID。获取方法请参见查询精英服务商列表。华为云伙伴能力中心（一级经销商）查询精英服务商发放给子客户的优惠券时，需要携带该参数；否则只能查询发放给自己子客户的优惠券。
    *
    * @var string[]
    */
    protected static $setters = [
            'couponId' => 'setCouponId',
            'customerId' => 'setCustomerId',
            'orderId' => 'setOrderId',
            'couponType' => 'setCouponType',
            'status' => 'setStatus',
            'createTimeBegin' => 'setCreateTimeBegin',
            'createTimeEnd' => 'setCreateTimeEnd',
            'effectiveTimeBegin' => 'setEffectiveTimeBegin',
            'effectiveTimeEnd' => 'setEffectiveTimeEnd',
            'expireTimeBegin' => 'setExpireTimeBegin',
            'expireTimeEnd' => 'setExpireTimeEnd',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'indirectPartnerId' => 'setIndirectPartnerId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * couponId  优惠券ID。
    * customerId  客户账号ID。您可以调用查询客户列表接口获取customer_id。
    * orderId  订单ID。
    * couponType  优惠券类型：1：代金券4：现金券
    * status  客户优惠券实例状态：1：未激活2：可使用3：已使用4：已过期5：已回收
    * createTimeBegin  创建时间（开始）。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。输入这个条件，会查询出创建时间大于这个时间的记录。
    * createTimeEnd  创建时间（结束）。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。输入这个条件，会查询出创建时间小于这个时间的记录。
    * effectiveTimeBegin  生效时间（开始）。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。输入这个条件，会查询出生效时间大于这个时间的记录。
    * effectiveTimeEnd  生效时间（结束）。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。输入这个条件，会查询出生效时间小于这个时间的记录。
    * expireTimeBegin  失效时间（开始）。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。输入这个条件，会查询出失效时间大于这个时间的记录。
    * expireTimeEnd  失效时间（结束）。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。输入这个条件，会查询出失效时间小于这个时间的记录。
    * offset  偏移量，从0开始。默认值为0。 说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  查询的每页数量。默认值为10。
    * indirectPartnerId  精英服务商ID。获取方法请参见查询精英服务商列表。华为云伙伴能力中心（一级经销商）查询精英服务商发放给子客户的优惠券时，需要携带该参数；否则只能查询发放给自己子客户的优惠券。
    *
    * @var string[]
    */
    protected static $getters = [
            'couponId' => 'getCouponId',
            'customerId' => 'getCustomerId',
            'orderId' => 'getOrderId',
            'couponType' => 'getCouponType',
            'status' => 'getStatus',
            'createTimeBegin' => 'getCreateTimeBegin',
            'createTimeEnd' => 'getCreateTimeEnd',
            'effectiveTimeBegin' => 'getEffectiveTimeBegin',
            'effectiveTimeEnd' => 'getEffectiveTimeEnd',
            'expireTimeBegin' => 'getExpireTimeBegin',
            'expireTimeEnd' => 'getExpireTimeEnd',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
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
        $this->container['customerId'] = isset($data['customerId']) ? $data['customerId'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['couponType'] = isset($data['couponType']) ? $data['couponType'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createTimeBegin'] = isset($data['createTimeBegin']) ? $data['createTimeBegin'] : null;
        $this->container['createTimeEnd'] = isset($data['createTimeEnd']) ? $data['createTimeEnd'] : null;
        $this->container['effectiveTimeBegin'] = isset($data['effectiveTimeBegin']) ? $data['effectiveTimeBegin'] : null;
        $this->container['effectiveTimeEnd'] = isset($data['effectiveTimeEnd']) ? $data['effectiveTimeEnd'] : null;
        $this->container['expireTimeBegin'] = isset($data['expireTimeBegin']) ? $data['expireTimeBegin'] : null;
        $this->container['expireTimeEnd'] = isset($data['expireTimeEnd']) ? $data['expireTimeEnd'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : 0;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : 10;
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
            if (!is_null($this->container['status']) && ($this->container['status'] > 5)) {
                $invalidProperties[] = "invalid value for 'status', must be smaller than or equal to 5.";
            }
            if (!is_null($this->container['status']) && ($this->container['status'] < 1)) {
                $invalidProperties[] = "invalid value for 'status', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2147483646)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2147483646.";
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
    *  优惠券ID。
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
    * @param string|null $couponId 优惠券ID。
    *
    * @return $this
    */
    public function setCouponId($couponId)
    {
        $this->container['couponId'] = $couponId;
        return $this;
    }

    /**
    * Gets customerId
    *  客户账号ID。您可以调用查询客户列表接口获取customer_id。
    *
    * @return string|null
    */
    public function getCustomerId()
    {
        return $this->container['customerId'];
    }

    /**
    * Sets customerId
    *
    * @param string|null $customerId 客户账号ID。您可以调用查询客户列表接口获取customer_id。
    *
    * @return $this
    */
    public function setCustomerId($customerId)
    {
        $this->container['customerId'] = $customerId;
        return $this;
    }

    /**
    * Gets orderId
    *  订单ID。
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
    * @param string|null $orderId 订单ID。
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
        return $this;
    }

    /**
    * Gets couponType
    *  优惠券类型：1：代金券4：现金券
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
    * @param int|null $couponType 优惠券类型：1：代金券4：现金券
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
    *  客户优惠券实例状态：1：未激活2：可使用3：已使用4：已过期5：已回收
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
    * @param int|null $status 客户优惠券实例状态：1：未激活2：可使用3：已使用4：已过期5：已回收
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets createTimeBegin
    *  创建时间（开始）。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。输入这个条件，会查询出创建时间大于这个时间的记录。
    *
    * @return string|null
    */
    public function getCreateTimeBegin()
    {
        return $this->container['createTimeBegin'];
    }

    /**
    * Sets createTimeBegin
    *
    * @param string|null $createTimeBegin 创建时间（开始）。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。输入这个条件，会查询出创建时间大于这个时间的记录。
    *
    * @return $this
    */
    public function setCreateTimeBegin($createTimeBegin)
    {
        $this->container['createTimeBegin'] = $createTimeBegin;
        return $this;
    }

    /**
    * Gets createTimeEnd
    *  创建时间（结束）。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。输入这个条件，会查询出创建时间小于这个时间的记录。
    *
    * @return string|null
    */
    public function getCreateTimeEnd()
    {
        return $this->container['createTimeEnd'];
    }

    /**
    * Sets createTimeEnd
    *
    * @param string|null $createTimeEnd 创建时间（结束）。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。输入这个条件，会查询出创建时间小于这个时间的记录。
    *
    * @return $this
    */
    public function setCreateTimeEnd($createTimeEnd)
    {
        $this->container['createTimeEnd'] = $createTimeEnd;
        return $this;
    }

    /**
    * Gets effectiveTimeBegin
    *  生效时间（开始）。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。输入这个条件，会查询出生效时间大于这个时间的记录。
    *
    * @return string|null
    */
    public function getEffectiveTimeBegin()
    {
        return $this->container['effectiveTimeBegin'];
    }

    /**
    * Sets effectiveTimeBegin
    *
    * @param string|null $effectiveTimeBegin 生效时间（开始）。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。输入这个条件，会查询出生效时间大于这个时间的记录。
    *
    * @return $this
    */
    public function setEffectiveTimeBegin($effectiveTimeBegin)
    {
        $this->container['effectiveTimeBegin'] = $effectiveTimeBegin;
        return $this;
    }

    /**
    * Gets effectiveTimeEnd
    *  生效时间（结束）。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。输入这个条件，会查询出生效时间小于这个时间的记录。
    *
    * @return string|null
    */
    public function getEffectiveTimeEnd()
    {
        return $this->container['effectiveTimeEnd'];
    }

    /**
    * Sets effectiveTimeEnd
    *
    * @param string|null $effectiveTimeEnd 生效时间（结束）。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。输入这个条件，会查询出生效时间小于这个时间的记录。
    *
    * @return $this
    */
    public function setEffectiveTimeEnd($effectiveTimeEnd)
    {
        $this->container['effectiveTimeEnd'] = $effectiveTimeEnd;
        return $this;
    }

    /**
    * Gets expireTimeBegin
    *  失效时间（开始）。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。输入这个条件，会查询出失效时间大于这个时间的记录。
    *
    * @return string|null
    */
    public function getExpireTimeBegin()
    {
        return $this->container['expireTimeBegin'];
    }

    /**
    * Sets expireTimeBegin
    *
    * @param string|null $expireTimeBegin 失效时间（开始）。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。输入这个条件，会查询出失效时间大于这个时间的记录。
    *
    * @return $this
    */
    public function setExpireTimeBegin($expireTimeBegin)
    {
        $this->container['expireTimeBegin'] = $expireTimeBegin;
        return $this;
    }

    /**
    * Gets expireTimeEnd
    *  失效时间（结束）。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。输入这个条件，会查询出失效时间小于这个时间的记录。
    *
    * @return string|null
    */
    public function getExpireTimeEnd()
    {
        return $this->container['expireTimeEnd'];
    }

    /**
    * Sets expireTimeEnd
    *
    * @param string|null $expireTimeEnd 失效时间（结束）。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。输入这个条件，会查询出失效时间小于这个时间的记录。
    *
    * @return $this
    */
    public function setExpireTimeEnd($expireTimeEnd)
    {
        $this->container['expireTimeEnd'] = $expireTimeEnd;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量，从0开始。默认值为0。 说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
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
    * @param int|null $offset 偏移量，从0开始。默认值为0。 说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
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
    *  查询的每页数量。默认值为10。
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
    * @param int|null $limit 查询的每页数量。默认值为10。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets indirectPartnerId
    *  精英服务商ID。获取方法请参见查询精英服务商列表。华为云伙伴能力中心（一级经销商）查询精英服务商发放给子客户的优惠券时，需要携带该参数；否则只能查询发放给自己子客户的优惠券。
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
    * @param string|null $indirectPartnerId 精英服务商ID。获取方法请参见查询精英服务商列表。华为云伙伴能力中心（一级经销商）查询精英服务商发放给子客户的优惠券时，需要携带该参数；否则只能查询发放给自己子客户的优惠券。
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

