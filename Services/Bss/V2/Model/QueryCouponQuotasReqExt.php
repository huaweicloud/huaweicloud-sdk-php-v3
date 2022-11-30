<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryCouponQuotasReqExt implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryCouponQuotasReqExt';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * quotaIds  优惠券额度ID列表。 此参数不携带或携带值为空列表或携带值为null时，不作为筛选条件。
    * quotaStatusList  优惠券额度状态列表。 0：正常3：失效（过期失效和人工设置失效）4：额度调整中（伙伴可以查看该额度，但不能使用该额度发放优惠券）5：冻结 此参数不携带或携带值为空列表或携带值为null时，不作为筛选条件。
    * quotaType  优惠券额度的类型。 0：代金券额度1：现金券额度 此参数不携带或携带值为null时，默认值为“0：代金券额度”。
    * createTimeBegin  创建时间（开始）。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。 输入这个条件，会查询出创建时间大于这个时间的记录。 此参数不携带或携带值为null时，不作为筛选条件。
    * createTimeEnd  创建时间（结束）。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。 输入这个条件，会查询出创建时间小于这个时间的记录。 此参数不携带或携带值为null时，不作为筛选条件。
    * effectiveTimeBegin  生效时间（开始）。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。 输入这个条件，会查询出生效时间大于这个时间的记录。 此参数不携带或携带值为null时，不作为筛选条件。
    * effectiveTimeEnd  生效时间（结束）。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。 输入这个条件，会查询出生效时间小于这个时间的记录。 此参数不携带或携带值为null时，不作为筛选条件。
    * expireTimeBegin  失效时间（开始）。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。 输入这个条件，会查询出失效时间大于这个时间的记录。 此参数不携带或携带值为null时，不作为筛选条件。
    * expireTimeEnd  失效时间（结束）。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。 输入这个条件，会查询出失效时间小于这个时间的记录。 此参数不携带或携带值为null时，不作为筛选条件。
    * offset  偏移量，从0开始。默认值为0。  说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。 例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  每次查询记录数。默认值为10。
    * indirectPartnerId  云经销商（二级经销商）ID。 华为云总经销商（一级经销商）查询云经销商的优惠券额度时，需要携带该参数；否则只能查询自己的优惠券额度。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'quotaIds' => 'string[]',
            'quotaStatusList' => 'int[]',
            'quotaType' => 'int',
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
    * quotaIds  优惠券额度ID列表。 此参数不携带或携带值为空列表或携带值为null时，不作为筛选条件。
    * quotaStatusList  优惠券额度状态列表。 0：正常3：失效（过期失效和人工设置失效）4：额度调整中（伙伴可以查看该额度，但不能使用该额度发放优惠券）5：冻结 此参数不携带或携带值为空列表或携带值为null时，不作为筛选条件。
    * quotaType  优惠券额度的类型。 0：代金券额度1：现金券额度 此参数不携带或携带值为null时，默认值为“0：代金券额度”。
    * createTimeBegin  创建时间（开始）。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。 输入这个条件，会查询出创建时间大于这个时间的记录。 此参数不携带或携带值为null时，不作为筛选条件。
    * createTimeEnd  创建时间（结束）。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。 输入这个条件，会查询出创建时间小于这个时间的记录。 此参数不携带或携带值为null时，不作为筛选条件。
    * effectiveTimeBegin  生效时间（开始）。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。 输入这个条件，会查询出生效时间大于这个时间的记录。 此参数不携带或携带值为null时，不作为筛选条件。
    * effectiveTimeEnd  生效时间（结束）。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。 输入这个条件，会查询出生效时间小于这个时间的记录。 此参数不携带或携带值为null时，不作为筛选条件。
    * expireTimeBegin  失效时间（开始）。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。 输入这个条件，会查询出失效时间大于这个时间的记录。 此参数不携带或携带值为null时，不作为筛选条件。
    * expireTimeEnd  失效时间（结束）。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。 输入这个条件，会查询出失效时间小于这个时间的记录。 此参数不携带或携带值为null时，不作为筛选条件。
    * offset  偏移量，从0开始。默认值为0。  说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。 例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  每次查询记录数。默认值为10。
    * indirectPartnerId  云经销商（二级经销商）ID。 华为云总经销商（一级经销商）查询云经销商的优惠券额度时，需要携带该参数；否则只能查询自己的优惠券额度。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'quotaIds' => null,
        'quotaStatusList' => null,
        'quotaType' => 'int32',
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
    * quotaIds  优惠券额度ID列表。 此参数不携带或携带值为空列表或携带值为null时，不作为筛选条件。
    * quotaStatusList  优惠券额度状态列表。 0：正常3：失效（过期失效和人工设置失效）4：额度调整中（伙伴可以查看该额度，但不能使用该额度发放优惠券）5：冻结 此参数不携带或携带值为空列表或携带值为null时，不作为筛选条件。
    * quotaType  优惠券额度的类型。 0：代金券额度1：现金券额度 此参数不携带或携带值为null时，默认值为“0：代金券额度”。
    * createTimeBegin  创建时间（开始）。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。 输入这个条件，会查询出创建时间大于这个时间的记录。 此参数不携带或携带值为null时，不作为筛选条件。
    * createTimeEnd  创建时间（结束）。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。 输入这个条件，会查询出创建时间小于这个时间的记录。 此参数不携带或携带值为null时，不作为筛选条件。
    * effectiveTimeBegin  生效时间（开始）。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。 输入这个条件，会查询出生效时间大于这个时间的记录。 此参数不携带或携带值为null时，不作为筛选条件。
    * effectiveTimeEnd  生效时间（结束）。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。 输入这个条件，会查询出生效时间小于这个时间的记录。 此参数不携带或携带值为null时，不作为筛选条件。
    * expireTimeBegin  失效时间（开始）。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。 输入这个条件，会查询出失效时间大于这个时间的记录。 此参数不携带或携带值为null时，不作为筛选条件。
    * expireTimeEnd  失效时间（结束）。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。 输入这个条件，会查询出失效时间小于这个时间的记录。 此参数不携带或携带值为null时，不作为筛选条件。
    * offset  偏移量，从0开始。默认值为0。  说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。 例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  每次查询记录数。默认值为10。
    * indirectPartnerId  云经销商（二级经销商）ID。 华为云总经销商（一级经销商）查询云经销商的优惠券额度时，需要携带该参数；否则只能查询自己的优惠券额度。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'quotaIds' => 'quota_ids',
            'quotaStatusList' => 'quota_status_list',
            'quotaType' => 'quota_type',
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
    * quotaIds  优惠券额度ID列表。 此参数不携带或携带值为空列表或携带值为null时，不作为筛选条件。
    * quotaStatusList  优惠券额度状态列表。 0：正常3：失效（过期失效和人工设置失效）4：额度调整中（伙伴可以查看该额度，但不能使用该额度发放优惠券）5：冻结 此参数不携带或携带值为空列表或携带值为null时，不作为筛选条件。
    * quotaType  优惠券额度的类型。 0：代金券额度1：现金券额度 此参数不携带或携带值为null时，默认值为“0：代金券额度”。
    * createTimeBegin  创建时间（开始）。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。 输入这个条件，会查询出创建时间大于这个时间的记录。 此参数不携带或携带值为null时，不作为筛选条件。
    * createTimeEnd  创建时间（结束）。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。 输入这个条件，会查询出创建时间小于这个时间的记录。 此参数不携带或携带值为null时，不作为筛选条件。
    * effectiveTimeBegin  生效时间（开始）。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。 输入这个条件，会查询出生效时间大于这个时间的记录。 此参数不携带或携带值为null时，不作为筛选条件。
    * effectiveTimeEnd  生效时间（结束）。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。 输入这个条件，会查询出生效时间小于这个时间的记录。 此参数不携带或携带值为null时，不作为筛选条件。
    * expireTimeBegin  失效时间（开始）。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。 输入这个条件，会查询出失效时间大于这个时间的记录。 此参数不携带或携带值为null时，不作为筛选条件。
    * expireTimeEnd  失效时间（结束）。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。 输入这个条件，会查询出失效时间小于这个时间的记录。 此参数不携带或携带值为null时，不作为筛选条件。
    * offset  偏移量，从0开始。默认值为0。  说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。 例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  每次查询记录数。默认值为10。
    * indirectPartnerId  云经销商（二级经销商）ID。 华为云总经销商（一级经销商）查询云经销商的优惠券额度时，需要携带该参数；否则只能查询自己的优惠券额度。
    *
    * @var string[]
    */
    protected static $setters = [
            'quotaIds' => 'setQuotaIds',
            'quotaStatusList' => 'setQuotaStatusList',
            'quotaType' => 'setQuotaType',
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
    * quotaIds  优惠券额度ID列表。 此参数不携带或携带值为空列表或携带值为null时，不作为筛选条件。
    * quotaStatusList  优惠券额度状态列表。 0：正常3：失效（过期失效和人工设置失效）4：额度调整中（伙伴可以查看该额度，但不能使用该额度发放优惠券）5：冻结 此参数不携带或携带值为空列表或携带值为null时，不作为筛选条件。
    * quotaType  优惠券额度的类型。 0：代金券额度1：现金券额度 此参数不携带或携带值为null时，默认值为“0：代金券额度”。
    * createTimeBegin  创建时间（开始）。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。 输入这个条件，会查询出创建时间大于这个时间的记录。 此参数不携带或携带值为null时，不作为筛选条件。
    * createTimeEnd  创建时间（结束）。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。 输入这个条件，会查询出创建时间小于这个时间的记录。 此参数不携带或携带值为null时，不作为筛选条件。
    * effectiveTimeBegin  生效时间（开始）。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。 输入这个条件，会查询出生效时间大于这个时间的记录。 此参数不携带或携带值为null时，不作为筛选条件。
    * effectiveTimeEnd  生效时间（结束）。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。 输入这个条件，会查询出生效时间小于这个时间的记录。 此参数不携带或携带值为null时，不作为筛选条件。
    * expireTimeBegin  失效时间（开始）。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。 输入这个条件，会查询出失效时间大于这个时间的记录。 此参数不携带或携带值为null时，不作为筛选条件。
    * expireTimeEnd  失效时间（结束）。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。 输入这个条件，会查询出失效时间小于这个时间的记录。 此参数不携带或携带值为null时，不作为筛选条件。
    * offset  偏移量，从0开始。默认值为0。  说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。 例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  每次查询记录数。默认值为10。
    * indirectPartnerId  云经销商（二级经销商）ID。 华为云总经销商（一级经销商）查询云经销商的优惠券额度时，需要携带该参数；否则只能查询自己的优惠券额度。
    *
    * @var string[]
    */
    protected static $getters = [
            'quotaIds' => 'getQuotaIds',
            'quotaStatusList' => 'getQuotaStatusList',
            'quotaType' => 'getQuotaType',
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
        $this->container['quotaIds'] = isset($data['quotaIds']) ? $data['quotaIds'] : null;
        $this->container['quotaStatusList'] = isset($data['quotaStatusList']) ? $data['quotaStatusList'] : null;
        $this->container['quotaType'] = isset($data['quotaType']) ? $data['quotaType'] : null;
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
            if (!is_null($this->container['quotaType']) && ($this->container['quotaType'] > 1)) {
                $invalidProperties[] = "invalid value for 'quotaType', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['quotaType']) && ($this->container['quotaType'] < 0)) {
                $invalidProperties[] = "invalid value for 'quotaType', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTimeBegin']) && (mb_strlen($this->container['createTimeBegin']) > 20)) {
                $invalidProperties[] = "invalid value for 'createTimeBegin', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['createTimeBegin']) && (mb_strlen($this->container['createTimeBegin']) < 0)) {
                $invalidProperties[] = "invalid value for 'createTimeBegin', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTimeBegin']) && !preg_match("/^[1-9][0-9]{3}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])T(20|21|22|23|[0-1][0-9]):[0-5][0-9]:[0-5][0-9]Z$/", $this->container['createTimeBegin'])) {
                $invalidProperties[] = "invalid value for 'createTimeBegin', must be conform to the pattern /^[1-9][0-9]{3}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])T(20|21|22|23|[0-1][0-9]):[0-5][0-9]:[0-5][0-9]Z$/.";
            }
            if (!is_null($this->container['createTimeEnd']) && (mb_strlen($this->container['createTimeEnd']) > 20)) {
                $invalidProperties[] = "invalid value for 'createTimeEnd', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['createTimeEnd']) && (mb_strlen($this->container['createTimeEnd']) < 0)) {
                $invalidProperties[] = "invalid value for 'createTimeEnd', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTimeEnd']) && !preg_match("/^[1-9][0-9]{3}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])T(20|21|22|23|[0-1][0-9]):[0-5][0-9]:[0-5][0-9]Z$/", $this->container['createTimeEnd'])) {
                $invalidProperties[] = "invalid value for 'createTimeEnd', must be conform to the pattern /^[1-9][0-9]{3}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])T(20|21|22|23|[0-1][0-9]):[0-5][0-9]:[0-5][0-9]Z$/.";
            }
            if (!is_null($this->container['effectiveTimeBegin']) && (mb_strlen($this->container['effectiveTimeBegin']) > 20)) {
                $invalidProperties[] = "invalid value for 'effectiveTimeBegin', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['effectiveTimeBegin']) && (mb_strlen($this->container['effectiveTimeBegin']) < 0)) {
                $invalidProperties[] = "invalid value for 'effectiveTimeBegin', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['effectiveTimeBegin']) && !preg_match("/^[1-9][0-9]{3}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])T(20|21|22|23|[0-1][0-9]):[0-5][0-9]:[0-5][0-9]Z$/", $this->container['effectiveTimeBegin'])) {
                $invalidProperties[] = "invalid value for 'effectiveTimeBegin', must be conform to the pattern /^[1-9][0-9]{3}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])T(20|21|22|23|[0-1][0-9]):[0-5][0-9]:[0-5][0-9]Z$/.";
            }
            if (!is_null($this->container['effectiveTimeEnd']) && (mb_strlen($this->container['effectiveTimeEnd']) > 20)) {
                $invalidProperties[] = "invalid value for 'effectiveTimeEnd', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['effectiveTimeEnd']) && (mb_strlen($this->container['effectiveTimeEnd']) < 20)) {
                $invalidProperties[] = "invalid value for 'effectiveTimeEnd', the character length must be bigger than or equal to 20.";
            }
            if (!is_null($this->container['effectiveTimeEnd']) && !preg_match("/^[1-9][0-9]{3}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])T(20|21|22|23|[0-1][0-9]):[0-5][0-9]:[0-5][0-9]Z$/", $this->container['effectiveTimeEnd'])) {
                $invalidProperties[] = "invalid value for 'effectiveTimeEnd', must be conform to the pattern /^[1-9][0-9]{3}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])T(20|21|22|23|[0-1][0-9]):[0-5][0-9]:[0-5][0-9]Z$/.";
            }
            if (!is_null($this->container['expireTimeBegin']) && (mb_strlen($this->container['expireTimeBegin']) > 20)) {
                $invalidProperties[] = "invalid value for 'expireTimeBegin', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['expireTimeBegin']) && (mb_strlen($this->container['expireTimeBegin']) < 20)) {
                $invalidProperties[] = "invalid value for 'expireTimeBegin', the character length must be bigger than or equal to 20.";
            }
            if (!is_null($this->container['expireTimeBegin']) && !preg_match("/^[1-9][0-9]{3}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])T(20|21|22|23|[0-1][0-9]):[0-5][0-9]:[0-5][0-9]Z$/", $this->container['expireTimeBegin'])) {
                $invalidProperties[] = "invalid value for 'expireTimeBegin', must be conform to the pattern /^[1-9][0-9]{3}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])T(20|21|22|23|[0-1][0-9]):[0-5][0-9]:[0-5][0-9]Z$/.";
            }
            if (!is_null($this->container['expireTimeEnd']) && (mb_strlen($this->container['expireTimeEnd']) > 20)) {
                $invalidProperties[] = "invalid value for 'expireTimeEnd', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['expireTimeEnd']) && (mb_strlen($this->container['expireTimeEnd']) < 20)) {
                $invalidProperties[] = "invalid value for 'expireTimeEnd', the character length must be bigger than or equal to 20.";
            }
            if (!is_null($this->container['expireTimeEnd']) && !preg_match("/^[1-9][0-9]{3}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])T(20|21|22|23|[0-1][0-9]):[0-5][0-9]:[0-5][0-9]Z$/", $this->container['expireTimeEnd'])) {
                $invalidProperties[] = "invalid value for 'expireTimeEnd', must be conform to the pattern /^[1-9][0-9]{3}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])T(20|21|22|23|[0-1][0-9]):[0-5][0-9]:[0-5][0-9]Z$/.";
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
            if (!is_null($this->container['indirectPartnerId']) && (mb_strlen($this->container['indirectPartnerId']) > 64)) {
                $invalidProperties[] = "invalid value for 'indirectPartnerId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['indirectPartnerId']) && (mb_strlen($this->container['indirectPartnerId']) < 0)) {
                $invalidProperties[] = "invalid value for 'indirectPartnerId', the character length must be bigger than or equal to 0.";
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
    * Gets quotaIds
    *  优惠券额度ID列表。 此参数不携带或携带值为空列表或携带值为null时，不作为筛选条件。
    *
    * @return string[]|null
    */
    public function getQuotaIds()
    {
        return $this->container['quotaIds'];
    }

    /**
    * Sets quotaIds
    *
    * @param string[]|null $quotaIds 优惠券额度ID列表。 此参数不携带或携带值为空列表或携带值为null时，不作为筛选条件。
    *
    * @return $this
    */
    public function setQuotaIds($quotaIds)
    {
        $this->container['quotaIds'] = $quotaIds;
        return $this;
    }

    /**
    * Gets quotaStatusList
    *  优惠券额度状态列表。 0：正常3：失效（过期失效和人工设置失效）4：额度调整中（伙伴可以查看该额度，但不能使用该额度发放优惠券）5：冻结 此参数不携带或携带值为空列表或携带值为null时，不作为筛选条件。
    *
    * @return int[]|null
    */
    public function getQuotaStatusList()
    {
        return $this->container['quotaStatusList'];
    }

    /**
    * Sets quotaStatusList
    *
    * @param int[]|null $quotaStatusList 优惠券额度状态列表。 0：正常3：失效（过期失效和人工设置失效）4：额度调整中（伙伴可以查看该额度，但不能使用该额度发放优惠券）5：冻结 此参数不携带或携带值为空列表或携带值为null时，不作为筛选条件。
    *
    * @return $this
    */
    public function setQuotaStatusList($quotaStatusList)
    {
        $this->container['quotaStatusList'] = $quotaStatusList;
        return $this;
    }

    /**
    * Gets quotaType
    *  优惠券额度的类型。 0：代金券额度1：现金券额度 此参数不携带或携带值为null时，默认值为“0：代金券额度”。
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
    * @param int|null $quotaType 优惠券额度的类型。 0：代金券额度1：现金券额度 此参数不携带或携带值为null时，默认值为“0：代金券额度”。
    *
    * @return $this
    */
    public function setQuotaType($quotaType)
    {
        $this->container['quotaType'] = $quotaType;
        return $this;
    }

    /**
    * Gets createTimeBegin
    *  创建时间（开始）。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。 输入这个条件，会查询出创建时间大于这个时间的记录。 此参数不携带或携带值为null时，不作为筛选条件。
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
    * @param string|null $createTimeBegin 创建时间（开始）。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。 输入这个条件，会查询出创建时间大于这个时间的记录。 此参数不携带或携带值为null时，不作为筛选条件。
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
    *  创建时间（结束）。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。 输入这个条件，会查询出创建时间小于这个时间的记录。 此参数不携带或携带值为null时，不作为筛选条件。
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
    * @param string|null $createTimeEnd 创建时间（结束）。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。 输入这个条件，会查询出创建时间小于这个时间的记录。 此参数不携带或携带值为null时，不作为筛选条件。
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
    *  生效时间（开始）。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。 输入这个条件，会查询出生效时间大于这个时间的记录。 此参数不携带或携带值为null时，不作为筛选条件。
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
    * @param string|null $effectiveTimeBegin 生效时间（开始）。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。 输入这个条件，会查询出生效时间大于这个时间的记录。 此参数不携带或携带值为null时，不作为筛选条件。
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
    *  生效时间（结束）。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。 输入这个条件，会查询出生效时间小于这个时间的记录。 此参数不携带或携带值为null时，不作为筛选条件。
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
    * @param string|null $effectiveTimeEnd 生效时间（结束）。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。 输入这个条件，会查询出生效时间小于这个时间的记录。 此参数不携带或携带值为null时，不作为筛选条件。
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
    *  失效时间（开始）。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。 输入这个条件，会查询出失效时间大于这个时间的记录。 此参数不携带或携带值为null时，不作为筛选条件。
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
    * @param string|null $expireTimeBegin 失效时间（开始）。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。 输入这个条件，会查询出失效时间大于这个时间的记录。 此参数不携带或携带值为null时，不作为筛选条件。
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
    *  失效时间（结束）。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。 输入这个条件，会查询出失效时间小于这个时间的记录。 此参数不携带或携带值为null时，不作为筛选条件。
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
    * @param string|null $expireTimeEnd 失效时间（结束）。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。 输入这个条件，会查询出失效时间小于这个时间的记录。 此参数不携带或携带值为null时，不作为筛选条件。
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
    *  偏移量，从0开始。默认值为0。  说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。 例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
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
    * @param int|null $offset 偏移量，从0开始。默认值为0。  说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。 例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
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
    *  每次查询记录数。默认值为10。
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
    * @param int|null $limit 每次查询记录数。默认值为10。
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
    *  云经销商（二级经销商）ID。 华为云总经销商（一级经销商）查询云经销商的优惠券额度时，需要携带该参数；否则只能查询自己的优惠券额度。
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
    * @param string|null $indirectPartnerId 云经销商（二级经销商）ID。 华为云总经销商（一级经销商）查询云经销商的优惠券额度时，需要携带该参数；否则只能查询自己的优惠券额度。
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

