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
    * orderId  订单ID。 说明： 使用特殊字符进行查询的时候，请注意进行URL编码转换，如“%”的转码应为“%25”。
    * customerId  客户账号ID。您可以调用[查询客户列表](https://support.huaweicloud.com/intl/zh-cn/api-bpconsole/mc_00021.html)接口获取customer_id。
    * createTimeBegin  订单创建开始时间。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。
    * createTimeEnd  订单创建结束时间。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * status  订单状态：1：待审核3：处理中4：已取消5：已完成6：待支付9：待确认
    * orderType  订单类型：1：开通2：续订3：变更4：退订11：按需转包年/包月13：试用14：转商用15：费用调整
    * limit  每次查询的订单数量，默认值为10。
    * offset  偏移量，从0开始。默认值为0。 说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * orderBy  查询的订单列表排序。支持按照创建时间进行排序，带-表示倒序。创建时间：升序为createTime，倒序为-createTime。
    * paymentTimeBegin  订单支付开始时间。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。
    * paymentTimeEnd  订单支付结束时间。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。
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
            'paymentTimeEnd' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * orderId  订单ID。 说明： 使用特殊字符进行查询的时候，请注意进行URL编码转换，如“%”的转码应为“%25”。
    * customerId  客户账号ID。您可以调用[查询客户列表](https://support.huaweicloud.com/intl/zh-cn/api-bpconsole/mc_00021.html)接口获取customer_id。
    * createTimeBegin  订单创建开始时间。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。
    * createTimeEnd  订单创建结束时间。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * status  订单状态：1：待审核3：处理中4：已取消5：已完成6：待支付9：待确认
    * orderType  订单类型：1：开通2：续订3：变更4：退订11：按需转包年/包月13：试用14：转商用15：费用调整
    * limit  每次查询的订单数量，默认值为10。
    * offset  偏移量，从0开始。默认值为0。 说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * orderBy  查询的订单列表排序。支持按照创建时间进行排序，带-表示倒序。创建时间：升序为createTime，倒序为-createTime。
    * paymentTimeBegin  订单支付开始时间。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。
    * paymentTimeEnd  订单支付结束时间。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。
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
        'paymentTimeEnd' => null
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
    * orderId  订单ID。 说明： 使用特殊字符进行查询的时候，请注意进行URL编码转换，如“%”的转码应为“%25”。
    * customerId  客户账号ID。您可以调用[查询客户列表](https://support.huaweicloud.com/intl/zh-cn/api-bpconsole/mc_00021.html)接口获取customer_id。
    * createTimeBegin  订单创建开始时间。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。
    * createTimeEnd  订单创建结束时间。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * status  订单状态：1：待审核3：处理中4：已取消5：已完成6：待支付9：待确认
    * orderType  订单类型：1：开通2：续订3：变更4：退订11：按需转包年/包月13：试用14：转商用15：费用调整
    * limit  每次查询的订单数量，默认值为10。
    * offset  偏移量，从0开始。默认值为0。 说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * orderBy  查询的订单列表排序。支持按照创建时间进行排序，带-表示倒序。创建时间：升序为createTime，倒序为-createTime。
    * paymentTimeBegin  订单支付开始时间。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。
    * paymentTimeEnd  订单支付结束时间。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。
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
            'paymentTimeEnd' => 'payment_time_end'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * orderId  订单ID。 说明： 使用特殊字符进行查询的时候，请注意进行URL编码转换，如“%”的转码应为“%25”。
    * customerId  客户账号ID。您可以调用[查询客户列表](https://support.huaweicloud.com/intl/zh-cn/api-bpconsole/mc_00021.html)接口获取customer_id。
    * createTimeBegin  订单创建开始时间。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。
    * createTimeEnd  订单创建结束时间。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * status  订单状态：1：待审核3：处理中4：已取消5：已完成6：待支付9：待确认
    * orderType  订单类型：1：开通2：续订3：变更4：退订11：按需转包年/包月13：试用14：转商用15：费用调整
    * limit  每次查询的订单数量，默认值为10。
    * offset  偏移量，从0开始。默认值为0。 说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * orderBy  查询的订单列表排序。支持按照创建时间进行排序，带-表示倒序。创建时间：升序为createTime，倒序为-createTime。
    * paymentTimeBegin  订单支付开始时间。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。
    * paymentTimeEnd  订单支付结束时间。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。
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
            'paymentTimeEnd' => 'setPaymentTimeEnd'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * orderId  订单ID。 说明： 使用特殊字符进行查询的时候，请注意进行URL编码转换，如“%”的转码应为“%25”。
    * customerId  客户账号ID。您可以调用[查询客户列表](https://support.huaweicloud.com/intl/zh-cn/api-bpconsole/mc_00021.html)接口获取customer_id。
    * createTimeBegin  订单创建开始时间。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。
    * createTimeEnd  订单创建结束时间。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * status  订单状态：1：待审核3：处理中4：已取消5：已完成6：待支付9：待确认
    * orderType  订单类型：1：开通2：续订3：变更4：退订11：按需转包年/包月13：试用14：转商用15：费用调整
    * limit  每次查询的订单数量，默认值为10。
    * offset  偏移量，从0开始。默认值为0。 说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * orderBy  查询的订单列表排序。支持按照创建时间进行排序，带-表示倒序。创建时间：升序为createTime，倒序为-createTime。
    * paymentTimeBegin  订单支付开始时间。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。
    * paymentTimeEnd  订单支付结束时间。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。
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
            'paymentTimeEnd' => 'getPaymentTimeEnd'
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
    *  订单ID。 说明： 使用特殊字符进行查询的时候，请注意进行URL编码转换，如“%”的转码应为“%25”。
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
    * @param string|null $orderId 订单ID。 说明： 使用特殊字符进行查询的时候，请注意进行URL编码转换，如“%”的转码应为“%25”。
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
    *  客户账号ID。您可以调用[查询客户列表](https://support.huaweicloud.com/intl/zh-cn/api-bpconsole/mc_00021.html)接口获取customer_id。
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
    * @param string|null $customerId 客户账号ID。您可以调用[查询客户列表](https://support.huaweicloud.com/intl/zh-cn/api-bpconsole/mc_00021.html)接口获取customer_id。
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
    *  订单创建开始时间。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。
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
    * @param string|null $createTimeBegin 订单创建开始时间。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。
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
    *  订单创建结束时间。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。
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
    * @param string|null $createTimeEnd 订单创建结束时间。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。
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
    *  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
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
    * @param string|null $serviceTypeCode 云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
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
    *  订单状态：1：待审核3：处理中4：已取消5：已完成6：待支付9：待确认
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
    * @param int|null $status 订单状态：1：待审核3：处理中4：已取消5：已完成6：待支付9：待确认
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
    *  订单类型：1：开通2：续订3：变更4：退订11：按需转包年/包月13：试用14：转商用15：费用调整
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
    * @param string|null $orderType 订单类型：1：开通2：续订3：变更4：退订11：按需转包年/包月13：试用14：转商用15：费用调整
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
    *  每次查询的订单数量，默认值为10。
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
    * @param int|null $limit 每次查询的订单数量，默认值为10。
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
    * Gets orderBy
    *  查询的订单列表排序。支持按照创建时间进行排序，带-表示倒序。创建时间：升序为createTime，倒序为-createTime。
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
    * @param string|null $orderBy 查询的订单列表排序。支持按照创建时间进行排序，带-表示倒序。创建时间：升序为createTime，倒序为-createTime。
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
    *  订单支付开始时间。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。
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
    * @param string|null $paymentTimeBegin 订单支付开始时间。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。
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
    *  订单支付结束时间。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。
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
    * @param string|null $paymentTimeEnd 订单支付结束时间。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。
    *
    * @return $this
    */
    public function setPaymentTimeEnd($paymentTimeEnd)
    {
        $this->container['paymentTimeEnd'] = $paymentTimeEnd;
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

