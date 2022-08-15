<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListPartnerCouponsRecordRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListPartnerCouponsRecordRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * operationTypes  操作类型。1：发放2：手动回收3：解绑自动回收4：过期回收5：退订回收6：退款充值撤销7：建立关联回收此参数不携带时，不作为筛选条件；携带值为空列表或携带值为空或携带值为null时，作为筛选条件。
    * quotaId  额度ID。请从“查询优惠券额度”接口的响应参数中获取。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    * quotaType  额度类型。0：代金券额度1：现金券额度此参数不携带或携带值为空或携带值为null时，不作为筛选条件。
    * couponIds  代金券ID列表。请从“发放优惠券”接口的响应参数中获取。此参数不携带或携带值为空列表时，不作为筛选条件；携带值为空或携带值为null时，作为筛选条件。
    * customerId  客户账号ID。您可以调用[查询客户列表](https://support.huaweicloud.com/api-bpconsole/mc_00021.html)接口获取customer_id。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    * operationTimeBegin  操作时间（开始）。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。输入这个条件，会查询出操作时间大于这个时间的记录。此参数不携带或携带值为空时，不作为筛选条件。
    * operationTimeEnd  操作时间（结束）。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。输入这个条件，会查询出操作时间小于这个时间的记录。此参数不携带或携带值为空时，不作为筛选条件。
    * result  操作结果。0：成功-1：失败（非0的记录）此参数不携带或携带值为空串或携带值为空或携带值为null时，不作为筛选条件。
    * offset  偏移量，从0开始。默认值为0。 说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  每页记录数。默认值为10。
    * indirectPartnerId  云经销商ID。获取方法请参见[查询云经销商列表](https://support.huaweicloud.com/api-bpconsole/espp_00003.html)。华为云总经销商（一级经销商）查询云经销商发放给子客户的优惠券发放记录时，需要携带该参数，否则只能查询发给自己子客户的优惠券发放记录。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'operationTypes' => 'string[]',
            'quotaId' => 'string',
            'quotaType' => 'int',
            'couponIds' => 'string[]',
            'customerId' => 'string',
            'operationTimeBegin' => 'string',
            'operationTimeEnd' => 'string',
            'result' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'indirectPartnerId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * operationTypes  操作类型。1：发放2：手动回收3：解绑自动回收4：过期回收5：退订回收6：退款充值撤销7：建立关联回收此参数不携带时，不作为筛选条件；携带值为空列表或携带值为空或携带值为null时，作为筛选条件。
    * quotaId  额度ID。请从“查询优惠券额度”接口的响应参数中获取。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    * quotaType  额度类型。0：代金券额度1：现金券额度此参数不携带或携带值为空或携带值为null时，不作为筛选条件。
    * couponIds  代金券ID列表。请从“发放优惠券”接口的响应参数中获取。此参数不携带或携带值为空列表时，不作为筛选条件；携带值为空或携带值为null时，作为筛选条件。
    * customerId  客户账号ID。您可以调用[查询客户列表](https://support.huaweicloud.com/api-bpconsole/mc_00021.html)接口获取customer_id。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    * operationTimeBegin  操作时间（开始）。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。输入这个条件，会查询出操作时间大于这个时间的记录。此参数不携带或携带值为空时，不作为筛选条件。
    * operationTimeEnd  操作时间（结束）。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。输入这个条件，会查询出操作时间小于这个时间的记录。此参数不携带或携带值为空时，不作为筛选条件。
    * result  操作结果。0：成功-1：失败（非0的记录）此参数不携带或携带值为空串或携带值为空或携带值为null时，不作为筛选条件。
    * offset  偏移量，从0开始。默认值为0。 说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  每页记录数。默认值为10。
    * indirectPartnerId  云经销商ID。获取方法请参见[查询云经销商列表](https://support.huaweicloud.com/api-bpconsole/espp_00003.html)。华为云总经销商（一级经销商）查询云经销商发放给子客户的优惠券发放记录时，需要携带该参数，否则只能查询发给自己子客户的优惠券发放记录。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'operationTypes' => null,
        'quotaId' => null,
        'quotaType' => 'int32',
        'couponIds' => null,
        'customerId' => null,
        'operationTimeBegin' => null,
        'operationTimeEnd' => null,
        'result' => null,
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
    * operationTypes  操作类型。1：发放2：手动回收3：解绑自动回收4：过期回收5：退订回收6：退款充值撤销7：建立关联回收此参数不携带时，不作为筛选条件；携带值为空列表或携带值为空或携带值为null时，作为筛选条件。
    * quotaId  额度ID。请从“查询优惠券额度”接口的响应参数中获取。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    * quotaType  额度类型。0：代金券额度1：现金券额度此参数不携带或携带值为空或携带值为null时，不作为筛选条件。
    * couponIds  代金券ID列表。请从“发放优惠券”接口的响应参数中获取。此参数不携带或携带值为空列表时，不作为筛选条件；携带值为空或携带值为null时，作为筛选条件。
    * customerId  客户账号ID。您可以调用[查询客户列表](https://support.huaweicloud.com/api-bpconsole/mc_00021.html)接口获取customer_id。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    * operationTimeBegin  操作时间（开始）。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。输入这个条件，会查询出操作时间大于这个时间的记录。此参数不携带或携带值为空时，不作为筛选条件。
    * operationTimeEnd  操作时间（结束）。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。输入这个条件，会查询出操作时间小于这个时间的记录。此参数不携带或携带值为空时，不作为筛选条件。
    * result  操作结果。0：成功-1：失败（非0的记录）此参数不携带或携带值为空串或携带值为空或携带值为null时，不作为筛选条件。
    * offset  偏移量，从0开始。默认值为0。 说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  每页记录数。默认值为10。
    * indirectPartnerId  云经销商ID。获取方法请参见[查询云经销商列表](https://support.huaweicloud.com/api-bpconsole/espp_00003.html)。华为云总经销商（一级经销商）查询云经销商发放给子客户的优惠券发放记录时，需要携带该参数，否则只能查询发给自己子客户的优惠券发放记录。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'operationTypes' => 'operation_types',
            'quotaId' => 'quota_id',
            'quotaType' => 'quota_type',
            'couponIds' => 'coupon_ids',
            'customerId' => 'customer_id',
            'operationTimeBegin' => 'operation_time_begin',
            'operationTimeEnd' => 'operation_time_end',
            'result' => 'result',
            'offset' => 'offset',
            'limit' => 'limit',
            'indirectPartnerId' => 'indirect_partner_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * operationTypes  操作类型。1：发放2：手动回收3：解绑自动回收4：过期回收5：退订回收6：退款充值撤销7：建立关联回收此参数不携带时，不作为筛选条件；携带值为空列表或携带值为空或携带值为null时，作为筛选条件。
    * quotaId  额度ID。请从“查询优惠券额度”接口的响应参数中获取。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    * quotaType  额度类型。0：代金券额度1：现金券额度此参数不携带或携带值为空或携带值为null时，不作为筛选条件。
    * couponIds  代金券ID列表。请从“发放优惠券”接口的响应参数中获取。此参数不携带或携带值为空列表时，不作为筛选条件；携带值为空或携带值为null时，作为筛选条件。
    * customerId  客户账号ID。您可以调用[查询客户列表](https://support.huaweicloud.com/api-bpconsole/mc_00021.html)接口获取customer_id。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    * operationTimeBegin  操作时间（开始）。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。输入这个条件，会查询出操作时间大于这个时间的记录。此参数不携带或携带值为空时，不作为筛选条件。
    * operationTimeEnd  操作时间（结束）。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。输入这个条件，会查询出操作时间小于这个时间的记录。此参数不携带或携带值为空时，不作为筛选条件。
    * result  操作结果。0：成功-1：失败（非0的记录）此参数不携带或携带值为空串或携带值为空或携带值为null时，不作为筛选条件。
    * offset  偏移量，从0开始。默认值为0。 说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  每页记录数。默认值为10。
    * indirectPartnerId  云经销商ID。获取方法请参见[查询云经销商列表](https://support.huaweicloud.com/api-bpconsole/espp_00003.html)。华为云总经销商（一级经销商）查询云经销商发放给子客户的优惠券发放记录时，需要携带该参数，否则只能查询发给自己子客户的优惠券发放记录。
    *
    * @var string[]
    */
    protected static $setters = [
            'operationTypes' => 'setOperationTypes',
            'quotaId' => 'setQuotaId',
            'quotaType' => 'setQuotaType',
            'couponIds' => 'setCouponIds',
            'customerId' => 'setCustomerId',
            'operationTimeBegin' => 'setOperationTimeBegin',
            'operationTimeEnd' => 'setOperationTimeEnd',
            'result' => 'setResult',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'indirectPartnerId' => 'setIndirectPartnerId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * operationTypes  操作类型。1：发放2：手动回收3：解绑自动回收4：过期回收5：退订回收6：退款充值撤销7：建立关联回收此参数不携带时，不作为筛选条件；携带值为空列表或携带值为空或携带值为null时，作为筛选条件。
    * quotaId  额度ID。请从“查询优惠券额度”接口的响应参数中获取。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    * quotaType  额度类型。0：代金券额度1：现金券额度此参数不携带或携带值为空或携带值为null时，不作为筛选条件。
    * couponIds  代金券ID列表。请从“发放优惠券”接口的响应参数中获取。此参数不携带或携带值为空列表时，不作为筛选条件；携带值为空或携带值为null时，作为筛选条件。
    * customerId  客户账号ID。您可以调用[查询客户列表](https://support.huaweicloud.com/api-bpconsole/mc_00021.html)接口获取customer_id。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    * operationTimeBegin  操作时间（开始）。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。输入这个条件，会查询出操作时间大于这个时间的记录。此参数不携带或携带值为空时，不作为筛选条件。
    * operationTimeEnd  操作时间（结束）。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。输入这个条件，会查询出操作时间小于这个时间的记录。此参数不携带或携带值为空时，不作为筛选条件。
    * result  操作结果。0：成功-1：失败（非0的记录）此参数不携带或携带值为空串或携带值为空或携带值为null时，不作为筛选条件。
    * offset  偏移量，从0开始。默认值为0。 说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  每页记录数。默认值为10。
    * indirectPartnerId  云经销商ID。获取方法请参见[查询云经销商列表](https://support.huaweicloud.com/api-bpconsole/espp_00003.html)。华为云总经销商（一级经销商）查询云经销商发放给子客户的优惠券发放记录时，需要携带该参数，否则只能查询发给自己子客户的优惠券发放记录。
    *
    * @var string[]
    */
    protected static $getters = [
            'operationTypes' => 'getOperationTypes',
            'quotaId' => 'getQuotaId',
            'quotaType' => 'getQuotaType',
            'couponIds' => 'getCouponIds',
            'customerId' => 'getCustomerId',
            'operationTimeBegin' => 'getOperationTimeBegin',
            'operationTimeEnd' => 'getOperationTimeEnd',
            'result' => 'getResult',
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
        $this->container['operationTypes'] = isset($data['operationTypes']) ? $data['operationTypes'] : null;
        $this->container['quotaId'] = isset($data['quotaId']) ? $data['quotaId'] : null;
        $this->container['quotaType'] = isset($data['quotaType']) ? $data['quotaType'] : null;
        $this->container['couponIds'] = isset($data['couponIds']) ? $data['couponIds'] : null;
        $this->container['customerId'] = isset($data['customerId']) ? $data['customerId'] : null;
        $this->container['operationTimeBegin'] = isset($data['operationTimeBegin']) ? $data['operationTimeBegin'] : null;
        $this->container['operationTimeEnd'] = isset($data['operationTimeEnd']) ? $data['operationTimeEnd'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
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
            if (!is_null($this->container['quotaType']) && ($this->container['quotaType'] > 1)) {
                $invalidProperties[] = "invalid value for 'quotaType', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['quotaType']) && ($this->container['quotaType'] < 0)) {
                $invalidProperties[] = "invalid value for 'quotaType', must be bigger than or equal to 0.";
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
    * Gets operationTypes
    *  操作类型。1：发放2：手动回收3：解绑自动回收4：过期回收5：退订回收6：退款充值撤销7：建立关联回收此参数不携带时，不作为筛选条件；携带值为空列表或携带值为空或携带值为null时，作为筛选条件。
    *
    * @return string[]|null
    */
    public function getOperationTypes()
    {
        return $this->container['operationTypes'];
    }

    /**
    * Sets operationTypes
    *
    * @param string[]|null $operationTypes 操作类型。1：发放2：手动回收3：解绑自动回收4：过期回收5：退订回收6：退款充值撤销7：建立关联回收此参数不携带时，不作为筛选条件；携带值为空列表或携带值为空或携带值为null时，作为筛选条件。
    *
    * @return $this
    */
    public function setOperationTypes($operationTypes)
    {
        $this->container['operationTypes'] = $operationTypes;
        return $this;
    }

    /**
    * Gets quotaId
    *  额度ID。请从“查询优惠券额度”接口的响应参数中获取。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    *
    * @return string|null
    */
    public function getQuotaId()
    {
        return $this->container['quotaId'];
    }

    /**
    * Sets quotaId
    *
    * @param string|null $quotaId 额度ID。请从“查询优惠券额度”接口的响应参数中获取。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    *
    * @return $this
    */
    public function setQuotaId($quotaId)
    {
        $this->container['quotaId'] = $quotaId;
        return $this;
    }

    /**
    * Gets quotaType
    *  额度类型。0：代金券额度1：现金券额度此参数不携带或携带值为空或携带值为null时，不作为筛选条件。
    *
    * @return int|null
    */
    public function getQuotaType()
    {
        return $this->container['quotaType'];
    }

    /**
    * Sets quotaType
    *
    * @param int|null $quotaType 额度类型。0：代金券额度1：现金券额度此参数不携带或携带值为空或携带值为null时，不作为筛选条件。
    *
    * @return $this
    */
    public function setQuotaType($quotaType)
    {
        $this->container['quotaType'] = $quotaType;
        return $this;
    }

    /**
    * Gets couponIds
    *  代金券ID列表。请从“发放优惠券”接口的响应参数中获取。此参数不携带或携带值为空列表时，不作为筛选条件；携带值为空或携带值为null时，作为筛选条件。
    *
    * @return string[]|null
    */
    public function getCouponIds()
    {
        return $this->container['couponIds'];
    }

    /**
    * Sets couponIds
    *
    * @param string[]|null $couponIds 代金券ID列表。请从“发放优惠券”接口的响应参数中获取。此参数不携带或携带值为空列表时，不作为筛选条件；携带值为空或携带值为null时，作为筛选条件。
    *
    * @return $this
    */
    public function setCouponIds($couponIds)
    {
        $this->container['couponIds'] = $couponIds;
        return $this;
    }

    /**
    * Gets customerId
    *  客户账号ID。您可以调用[查询客户列表](https://support.huaweicloud.com/api-bpconsole/mc_00021.html)接口获取customer_id。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
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
    * @param string|null $customerId 客户账号ID。您可以调用[查询客户列表](https://support.huaweicloud.com/api-bpconsole/mc_00021.html)接口获取customer_id。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    *
    * @return $this
    */
    public function setCustomerId($customerId)
    {
        $this->container['customerId'] = $customerId;
        return $this;
    }

    /**
    * Gets operationTimeBegin
    *  操作时间（开始）。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。输入这个条件，会查询出操作时间大于这个时间的记录。此参数不携带或携带值为空时，不作为筛选条件。
    *
    * @return string|null
    */
    public function getOperationTimeBegin()
    {
        return $this->container['operationTimeBegin'];
    }

    /**
    * Sets operationTimeBegin
    *
    * @param string|null $operationTimeBegin 操作时间（开始）。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。输入这个条件，会查询出操作时间大于这个时间的记录。此参数不携带或携带值为空时，不作为筛选条件。
    *
    * @return $this
    */
    public function setOperationTimeBegin($operationTimeBegin)
    {
        $this->container['operationTimeBegin'] = $operationTimeBegin;
        return $this;
    }

    /**
    * Gets operationTimeEnd
    *  操作时间（结束）。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。输入这个条件，会查询出操作时间小于这个时间的记录。此参数不携带或携带值为空时，不作为筛选条件。
    *
    * @return string|null
    */
    public function getOperationTimeEnd()
    {
        return $this->container['operationTimeEnd'];
    }

    /**
    * Sets operationTimeEnd
    *
    * @param string|null $operationTimeEnd 操作时间（结束）。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。输入这个条件，会查询出操作时间小于这个时间的记录。此参数不携带或携带值为空时，不作为筛选条件。
    *
    * @return $this
    */
    public function setOperationTimeEnd($operationTimeEnd)
    {
        $this->container['operationTimeEnd'] = $operationTimeEnd;
        return $this;
    }

    /**
    * Gets result
    *  操作结果。0：成功-1：失败（非0的记录）此参数不携带或携带值为空串或携带值为空或携带值为null时，不作为筛选条件。
    *
    * @return string|null
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param string|null $result 操作结果。0：成功-1：失败（非0的记录）此参数不携带或携带值为空串或携带值为空或携带值为null时，不作为筛选条件。
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
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
    *  每页记录数。默认值为10。
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
    * @param int|null $limit 每页记录数。默认值为10。
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
    *  云经销商ID。获取方法请参见[查询云经销商列表](https://support.huaweicloud.com/api-bpconsole/espp_00003.html)。华为云总经销商（一级经销商）查询云经销商发放给子客户的优惠券发放记录时，需要携带该参数，否则只能查询发给自己子客户的优惠券发放记录。
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
    * @param string|null $indirectPartnerId 云经销商ID。获取方法请参见[查询云经销商列表](https://support.huaweicloud.com/api-bpconsole/espp_00003.html)。华为云总经销商（一级经销商）查询云经销商发放给子客户的优惠券发放记录时，需要携带该参数，否则只能查询发给自己子客户的优惠券发放记录。
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

