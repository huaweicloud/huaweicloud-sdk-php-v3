<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListCustomerOrdersRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListCustomerOrdersRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * orderId  |参数名称：订单ID。| |参数的约束及描述：|
    * customerId  |参数名称：客户账号ID。| |参数的约束及描述：|
    * createTimeBegin  |参数名称：订单创建开始时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2020-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。| |参数的约束及描述：|
    * createTimeEnd  |参数名称：订单创建结束时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2020-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。| |参数的约束及描述：|
    * serviceTypeCode  |参数名称：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型云服务类型云服务类型云服务类型。| |参数的约束及描述：|
    * status  |参数名称：订单状态。1：待审核3：处理中4：已取消5：已完成6：待支付9：待确认| |参数的约束及描述：|
    * orderType  |参数名称：订单类型。1：开通2：续订3：变更4：退订10：包周期转按需11：按需转包周期12：赠送13：试用14：转商用15：费用调整| |参数的约束及描述：|
    * limit  |参数名称：每次查询的大小，默认为10| |参数的约束及描述：最大值100|
    * offset  |参数名称：偏移量，从0开始，默认为0| |参数的约束及描述：|
    * orderBy  |参数名称：查询的订单列表排序。支持3中多个响应参数进行排序，但每次只能用一个。缺省或者带+为升序，带-表示倒序。例如：按照创建时间升序排序表示为+createTime| |参数的约束及描述：|
    * paymentTimeBegin  |参数名称：订单支付开始时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。| |参数的约束及描述：|
    * paymentTimeEnd  |参数名称：订单支付结束时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。| |参数的约束及描述：|
    * indirectPartnerId  |参数名称：二级经销商ID，只有伙伴用自身token调用的时候，该字段才有含义。| |参数的约束及描述：|
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'orderId' => 'string',
            'customerId' => 'string',
            'createTimeBegin' => 'string',
            'createTimeEnd' => 'string',
            'serviceTypeCode' => 'string',
            'status' => 'int',
            'orderType' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'orderBy' => 'string',
            'paymentTimeBegin' => 'string',
            'paymentTimeEnd' => 'string',
            'indirectPartnerId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * orderId  |参数名称：订单ID。| |参数的约束及描述：|
    * customerId  |参数名称：客户账号ID。| |参数的约束及描述：|
    * createTimeBegin  |参数名称：订单创建开始时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2020-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。| |参数的约束及描述：|
    * createTimeEnd  |参数名称：订单创建结束时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2020-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。| |参数的约束及描述：|
    * serviceTypeCode  |参数名称：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型云服务类型云服务类型云服务类型。| |参数的约束及描述：|
    * status  |参数名称：订单状态。1：待审核3：处理中4：已取消5：已完成6：待支付9：待确认| |参数的约束及描述：|
    * orderType  |参数名称：订单类型。1：开通2：续订3：变更4：退订10：包周期转按需11：按需转包周期12：赠送13：试用14：转商用15：费用调整| |参数的约束及描述：|
    * limit  |参数名称：每次查询的大小，默认为10| |参数的约束及描述：最大值100|
    * offset  |参数名称：偏移量，从0开始，默认为0| |参数的约束及描述：|
    * orderBy  |参数名称：查询的订单列表排序。支持3中多个响应参数进行排序，但每次只能用一个。缺省或者带+为升序，带-表示倒序。例如：按照创建时间升序排序表示为+createTime| |参数的约束及描述：|
    * paymentTimeBegin  |参数名称：订单支付开始时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。| |参数的约束及描述：|
    * paymentTimeEnd  |参数名称：订单支付结束时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。| |参数的约束及描述：|
    * indirectPartnerId  |参数名称：二级经销商ID，只有伙伴用自身token调用的时候，该字段才有含义。| |参数的约束及描述：|
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'orderId' => null,
        'customerId' => null,
        'createTimeBegin' => null,
        'createTimeEnd' => null,
        'serviceTypeCode' => null,
        'status' => 'int32',
        'orderType' => null,
        'limit' => 'int32',
        'offset' => 'int32',
        'orderBy' => null,
        'paymentTimeBegin' => null,
        'paymentTimeEnd' => null,
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
    * orderId  |参数名称：订单ID。| |参数的约束及描述：|
    * customerId  |参数名称：客户账号ID。| |参数的约束及描述：|
    * createTimeBegin  |参数名称：订单创建开始时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2020-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。| |参数的约束及描述：|
    * createTimeEnd  |参数名称：订单创建结束时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2020-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。| |参数的约束及描述：|
    * serviceTypeCode  |参数名称：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型云服务类型云服务类型云服务类型。| |参数的约束及描述：|
    * status  |参数名称：订单状态。1：待审核3：处理中4：已取消5：已完成6：待支付9：待确认| |参数的约束及描述：|
    * orderType  |参数名称：订单类型。1：开通2：续订3：变更4：退订10：包周期转按需11：按需转包周期12：赠送13：试用14：转商用15：费用调整| |参数的约束及描述：|
    * limit  |参数名称：每次查询的大小，默认为10| |参数的约束及描述：最大值100|
    * offset  |参数名称：偏移量，从0开始，默认为0| |参数的约束及描述：|
    * orderBy  |参数名称：查询的订单列表排序。支持3中多个响应参数进行排序，但每次只能用一个。缺省或者带+为升序，带-表示倒序。例如：按照创建时间升序排序表示为+createTime| |参数的约束及描述：|
    * paymentTimeBegin  |参数名称：订单支付开始时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。| |参数的约束及描述：|
    * paymentTimeEnd  |参数名称：订单支付结束时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。| |参数的约束及描述：|
    * indirectPartnerId  |参数名称：二级经销商ID，只有伙伴用自身token调用的时候，该字段才有含义。| |参数的约束及描述：|
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'orderId' => 'order_id',
            'customerId' => 'customer_id',
            'createTimeBegin' => 'create_time_begin',
            'createTimeEnd' => 'create_time_end',
            'serviceTypeCode' => 'service_type_code',
            'status' => 'status',
            'orderType' => 'order_type',
            'limit' => 'limit',
            'offset' => 'offset',
            'orderBy' => 'order_by',
            'paymentTimeBegin' => 'payment_time_begin',
            'paymentTimeEnd' => 'payment_time_end',
            'indirectPartnerId' => 'indirect_partner_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * orderId  |参数名称：订单ID。| |参数的约束及描述：|
    * customerId  |参数名称：客户账号ID。| |参数的约束及描述：|
    * createTimeBegin  |参数名称：订单创建开始时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2020-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。| |参数的约束及描述：|
    * createTimeEnd  |参数名称：订单创建结束时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2020-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。| |参数的约束及描述：|
    * serviceTypeCode  |参数名称：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型云服务类型云服务类型云服务类型。| |参数的约束及描述：|
    * status  |参数名称：订单状态。1：待审核3：处理中4：已取消5：已完成6：待支付9：待确认| |参数的约束及描述：|
    * orderType  |参数名称：订单类型。1：开通2：续订3：变更4：退订10：包周期转按需11：按需转包周期12：赠送13：试用14：转商用15：费用调整| |参数的约束及描述：|
    * limit  |参数名称：每次查询的大小，默认为10| |参数的约束及描述：最大值100|
    * offset  |参数名称：偏移量，从0开始，默认为0| |参数的约束及描述：|
    * orderBy  |参数名称：查询的订单列表排序。支持3中多个响应参数进行排序，但每次只能用一个。缺省或者带+为升序，带-表示倒序。例如：按照创建时间升序排序表示为+createTime| |参数的约束及描述：|
    * paymentTimeBegin  |参数名称：订单支付开始时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。| |参数的约束及描述：|
    * paymentTimeEnd  |参数名称：订单支付结束时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。| |参数的约束及描述：|
    * indirectPartnerId  |参数名称：二级经销商ID，只有伙伴用自身token调用的时候，该字段才有含义。| |参数的约束及描述：|
    *
    * @var string[]
    */
    protected static $setters = [
            'orderId' => 'setOrderId',
            'customerId' => 'setCustomerId',
            'createTimeBegin' => 'setCreateTimeBegin',
            'createTimeEnd' => 'setCreateTimeEnd',
            'serviceTypeCode' => 'setServiceTypeCode',
            'status' => 'setStatus',
            'orderType' => 'setOrderType',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'orderBy' => 'setOrderBy',
            'paymentTimeBegin' => 'setPaymentTimeBegin',
            'paymentTimeEnd' => 'setPaymentTimeEnd',
            'indirectPartnerId' => 'setIndirectPartnerId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * orderId  |参数名称：订单ID。| |参数的约束及描述：|
    * customerId  |参数名称：客户账号ID。| |参数的约束及描述：|
    * createTimeBegin  |参数名称：订单创建开始时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2020-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。| |参数的约束及描述：|
    * createTimeEnd  |参数名称：订单创建结束时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2020-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。| |参数的约束及描述：|
    * serviceTypeCode  |参数名称：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型云服务类型云服务类型云服务类型。| |参数的约束及描述：|
    * status  |参数名称：订单状态。1：待审核3：处理中4：已取消5：已完成6：待支付9：待确认| |参数的约束及描述：|
    * orderType  |参数名称：订单类型。1：开通2：续订3：变更4：退订10：包周期转按需11：按需转包周期12：赠送13：试用14：转商用15：费用调整| |参数的约束及描述：|
    * limit  |参数名称：每次查询的大小，默认为10| |参数的约束及描述：最大值100|
    * offset  |参数名称：偏移量，从0开始，默认为0| |参数的约束及描述：|
    * orderBy  |参数名称：查询的订单列表排序。支持3中多个响应参数进行排序，但每次只能用一个。缺省或者带+为升序，带-表示倒序。例如：按照创建时间升序排序表示为+createTime| |参数的约束及描述：|
    * paymentTimeBegin  |参数名称：订单支付开始时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。| |参数的约束及描述：|
    * paymentTimeEnd  |参数名称：订单支付结束时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。| |参数的约束及描述：|
    * indirectPartnerId  |参数名称：二级经销商ID，只有伙伴用自身token调用的时候，该字段才有含义。| |参数的约束及描述：|
    *
    * @var string[]
    */
    protected static $getters = [
            'orderId' => 'getOrderId',
            'customerId' => 'getCustomerId',
            'createTimeBegin' => 'getCreateTimeBegin',
            'createTimeEnd' => 'getCreateTimeEnd',
            'serviceTypeCode' => 'getServiceTypeCode',
            'status' => 'getStatus',
            'orderType' => 'getOrderType',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'orderBy' => 'getOrderBy',
            'paymentTimeBegin' => 'getPaymentTimeBegin',
            'paymentTimeEnd' => 'getPaymentTimeEnd',
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
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['customerId'] = isset($data['customerId']) ? $data['customerId'] : null;
        $this->container['createTimeBegin'] = isset($data['createTimeBegin']) ? $data['createTimeBegin'] : null;
        $this->container['createTimeEnd'] = isset($data['createTimeEnd']) ? $data['createTimeEnd'] : null;
        $this->container['serviceTypeCode'] = isset($data['serviceTypeCode']) ? $data['serviceTypeCode'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['orderType'] = isset($data['orderType']) ? $data['orderType'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : 10;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : 0;
        $this->container['orderBy'] = isset($data['orderBy']) ? $data['orderBy'] : null;
        $this->container['paymentTimeBegin'] = isset($data['paymentTimeBegin']) ? $data['paymentTimeBegin'] : null;
        $this->container['paymentTimeEnd'] = isset($data['paymentTimeEnd']) ? $data['paymentTimeEnd'] : null;
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
            if (!is_null($this->container['status']) && ($this->container['status'] > 9)) {
                $invalidProperties[] = "invalid value for 'status', must be smaller than or equal to 9.";
            }
            if (!is_null($this->container['status']) && ($this->container['status'] < 1)) {
                $invalidProperties[] = "invalid value for 'status', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
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
    * Gets orderId
    *  |参数名称：订单ID。| |参数的约束及描述：|
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
    * @param string|null $orderId |参数名称：订单ID。| |参数的约束及描述：|
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
        return $this;
    }

    /**
    * Gets customerId
    *  |参数名称：客户账号ID。| |参数的约束及描述：|
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
    * @param string|null $customerId |参数名称：客户账号ID。| |参数的约束及描述：|
    *
    * @return $this
    */
    public function setCustomerId($customerId)
    {
        $this->container['customerId'] = $customerId;
        return $this;
    }

    /**
    * Gets createTimeBegin
    *  |参数名称：订单创建开始时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2020-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。| |参数的约束及描述：|
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
    * @param string|null $createTimeBegin |参数名称：订单创建开始时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2020-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。| |参数的约束及描述：|
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
    *  |参数名称：订单创建结束时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2020-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。| |参数的约束及描述：|
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
    * @param string|null $createTimeEnd |参数名称：订单创建结束时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2020-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。| |参数的约束及描述：|
    *
    * @return $this
    */
    public function setCreateTimeEnd($createTimeEnd)
    {
        $this->container['createTimeEnd'] = $createTimeEnd;
        return $this;
    }

    /**
    * Gets serviceTypeCode
    *  |参数名称：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型云服务类型云服务类型云服务类型。| |参数的约束及描述：|
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
    * @param string|null $serviceTypeCode |参数名称：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型云服务类型云服务类型云服务类型。| |参数的约束及描述：|
    *
    * @return $this
    */
    public function setServiceTypeCode($serviceTypeCode)
    {
        $this->container['serviceTypeCode'] = $serviceTypeCode;
        return $this;
    }

    /**
    * Gets status
    *  |参数名称：订单状态。1：待审核3：处理中4：已取消5：已完成6：待支付9：待确认| |参数的约束及描述：|
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
    * @param int|null $status |参数名称：订单状态。1：待审核3：处理中4：已取消5：已完成6：待支付9：待确认| |参数的约束及描述：|
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets orderType
    *  |参数名称：订单类型。1：开通2：续订3：变更4：退订10：包周期转按需11：按需转包周期12：赠送13：试用14：转商用15：费用调整| |参数的约束及描述：|
    *
    * @return string|null
    */
    public function getOrderType()
    {
        return $this->container['orderType'];
    }

    /**
    * Sets orderType
    *
    * @param string|null $orderType |参数名称：订单类型。1：开通2：续订3：变更4：退订10：包周期转按需11：按需转包周期12：赠送13：试用14：转商用15：费用调整| |参数的约束及描述：|
    *
    * @return $this
    */
    public function setOrderType($orderType)
    {
        $this->container['orderType'] = $orderType;
        return $this;
    }

    /**
    * Gets limit
    *  |参数名称：每次查询的大小，默认为10| |参数的约束及描述：最大值100|
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
    * @param int|null $limit |参数名称：每次查询的大小，默认为10| |参数的约束及描述：最大值100|
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  |参数名称：偏移量，从0开始，默认为0| |参数的约束及描述：|
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
    * @param int|null $offset |参数名称：偏移量，从0开始，默认为0| |参数的约束及描述：|
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets orderBy
    *  |参数名称：查询的订单列表排序。支持3中多个响应参数进行排序，但每次只能用一个。缺省或者带+为升序，带-表示倒序。例如：按照创建时间升序排序表示为+createTime| |参数的约束及描述：|
    *
    * @return string|null
    */
    public function getOrderBy()
    {
        return $this->container['orderBy'];
    }

    /**
    * Sets orderBy
    *
    * @param string|null $orderBy |参数名称：查询的订单列表排序。支持3中多个响应参数进行排序，但每次只能用一个。缺省或者带+为升序，带-表示倒序。例如：按照创建时间升序排序表示为+createTime| |参数的约束及描述：|
    *
    * @return $this
    */
    public function setOrderBy($orderBy)
    {
        $this->container['orderBy'] = $orderBy;
        return $this;
    }

    /**
    * Gets paymentTimeBegin
    *  |参数名称：订单支付开始时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。| |参数的约束及描述：|
    *
    * @return string|null
    */
    public function getPaymentTimeBegin()
    {
        return $this->container['paymentTimeBegin'];
    }

    /**
    * Sets paymentTimeBegin
    *
    * @param string|null $paymentTimeBegin |参数名称：订单支付开始时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。| |参数的约束及描述：|
    *
    * @return $this
    */
    public function setPaymentTimeBegin($paymentTimeBegin)
    {
        $this->container['paymentTimeBegin'] = $paymentTimeBegin;
        return $this;
    }

    /**
    * Gets paymentTimeEnd
    *  |参数名称：订单支付结束时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。| |参数的约束及描述：|
    *
    * @return string|null
    */
    public function getPaymentTimeEnd()
    {
        return $this->container['paymentTimeEnd'];
    }

    /**
    * Sets paymentTimeEnd
    *
    * @param string|null $paymentTimeEnd |参数名称：订单支付结束时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。| |参数的约束及描述：|
    *
    * @return $this
    */
    public function setPaymentTimeEnd($paymentTimeEnd)
    {
        $this->container['paymentTimeEnd'] = $paymentTimeEnd;
        return $this;
    }

    /**
    * Gets indirectPartnerId
    *  |参数名称：二级经销商ID，只有伙伴用自身token调用的时候，该字段才有含义。| |参数的约束及描述：|
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
    * @param string|null $indirectPartnerId |参数名称：二级经销商ID，只有伙伴用自身token调用的时候，该字段才有含义。| |参数的约束及描述：|
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

