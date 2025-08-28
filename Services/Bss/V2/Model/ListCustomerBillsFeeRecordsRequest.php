<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListCustomerBillsFeeRecordsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListCustomerBillsFeeRecordsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xLanguage  语言。zh_CN：中文 en_US：英文。默认为zh_CN：中文。
    * billCycle  查询的流水账单所在账期，东八区时间，格式为YYYY-MM。
    * providerType  服务商。1：华为云2：云商店为空时查询包含华为云和云商店在内的全部服务商。此参数不携带或携带值为空时，不作为筛选条件。
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用[查询云服务类型列表](https://support.huaweicloud.com/api-oce/zh-cn_topic_0000001256679455.html)接口获取。此参数不携带或携带值为空时，不作为筛选条件。
    * resourceTypeCode  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用[查询资源类型列表](https://support.huaweicloud.com/api-oce/zh-cn_topic_0000001256519451.html)接口获取。此参数不携带或携带值为空时，不作为筛选条件。
    * regionCode  云服务区编码，例如：“cn-north-1”。具体请参见[地区和终端节点](https://developer.huaweicloud.com/endpoint)对应云服务的“区域”列的值。此参数不携带或携带值为空时，不作为筛选条件。
    * chargingMode  计费模式：1 : 包年/包月3：按需10：预留实例11：节省计划 此参数不携带或携带值为空时，不作为筛选条件。
    * billType  账单类型。1：消费-新购 2：消费-续订 3：消费-变更 4：退款-退订 5：消费-使用 8：消费-自动续订 9：调账-补偿 14：消费-服务支持计划月末扣费 16：调账-扣费 18：消费-按月付费 20：退款-变更 23：消费-节省计划抵扣 24：退款-包年/包月转按需 25：消费-抹零补扣 103：消费-按年付费 此参数不携带或携带值为空时，不作为筛选条件。
    * tradeId  订单ID或交易ID。账单类型为1、2、3、4和8时此处为订单ID。账单类型为其它场景时此处为交易ID，为扣费维度的唯一标识。例如非月末扣费时为应收ID；月末扣费时为账单ID。此参数不携带或携带值为空时，不作为筛选条件。
    * enterpriseProjectId  企业项目标识（企业项目ID）。default项目对应ID：0未归集（表示该云服务不支持企业项目管理能力）项目对应ID：null其余项目对应ID获取方法请参见[如何获取企业项目ID](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0126101490.html)。此参数不携带或携带值为空时，不作为筛选条件。
    * includeZeroRecord  返回是否包含应付金额为0的记录。true：包含false：不包含此参数不携带或携带值为空时，不作为筛选条件。
    * status  支付状态。1：已支付2：未结清3：未出账此参数不携带或携带值为空时，不作为筛选条件。
    * method  查询流水账单的方式。oneself：客户自己sub_customer：企业子客户all：客户自己和企业子客户 此参数不携带或携带值为空时，默认值为“all”，如果没有企业子客户，取值为all时查询的是客户自己的流水账单。
    * subCustomerId  企业子账号ID。 说明： 如果method取值不为sub_customer，则该参数无效。如果method取值为sub_customer，则该参数不能为空。
    * offset  偏移量，从0开始。默认值为0。 说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  页面大小。默认值为10。
    * billDateBegin  查询的流水账单的开始日期，东八区时间，格式为YYYY-MM-DD。此参数不携带或携带值为空时，不作为筛选条件。 说明： 必须和bill_cycle（即流水账单的所在账期）在同一个月。bill_date_begin和bill_date_end两个参数必须同时出现，否则仅按照bill_cycle（即流水账单的所在账期）进行查询。
    * billDateEnd  查询的流水账单的结束日期，东八区时间，格式为YYYY-MM-DD。此参数不携带或携带值为空时，不作为筛选条件。 说明： 必须和bill_cycle（即流水账单的所在账期）在同一个月。bill_date_begin和bill_date_end两个参数必须同时出现，否则仅按照bill_cycle（即流水账单的所在账期）进行查询。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xLanguage' => 'string',
            'billCycle' => 'string',
            'providerType' => 'int',
            'serviceTypeCode' => 'string',
            'resourceTypeCode' => 'string',
            'regionCode' => 'string',
            'chargingMode' => 'int',
            'billType' => 'int',
            'tradeId' => 'string',
            'enterpriseProjectId' => 'string',
            'includeZeroRecord' => 'bool',
            'status' => 'int',
            'method' => 'string',
            'subCustomerId' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'billDateBegin' => 'string',
            'billDateEnd' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xLanguage  语言。zh_CN：中文 en_US：英文。默认为zh_CN：中文。
    * billCycle  查询的流水账单所在账期，东八区时间，格式为YYYY-MM。
    * providerType  服务商。1：华为云2：云商店为空时查询包含华为云和云商店在内的全部服务商。此参数不携带或携带值为空时，不作为筛选条件。
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用[查询云服务类型列表](https://support.huaweicloud.com/api-oce/zh-cn_topic_0000001256679455.html)接口获取。此参数不携带或携带值为空时，不作为筛选条件。
    * resourceTypeCode  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用[查询资源类型列表](https://support.huaweicloud.com/api-oce/zh-cn_topic_0000001256519451.html)接口获取。此参数不携带或携带值为空时，不作为筛选条件。
    * regionCode  云服务区编码，例如：“cn-north-1”。具体请参见[地区和终端节点](https://developer.huaweicloud.com/endpoint)对应云服务的“区域”列的值。此参数不携带或携带值为空时，不作为筛选条件。
    * chargingMode  计费模式：1 : 包年/包月3：按需10：预留实例11：节省计划 此参数不携带或携带值为空时，不作为筛选条件。
    * billType  账单类型。1：消费-新购 2：消费-续订 3：消费-变更 4：退款-退订 5：消费-使用 8：消费-自动续订 9：调账-补偿 14：消费-服务支持计划月末扣费 16：调账-扣费 18：消费-按月付费 20：退款-变更 23：消费-节省计划抵扣 24：退款-包年/包月转按需 25：消费-抹零补扣 103：消费-按年付费 此参数不携带或携带值为空时，不作为筛选条件。
    * tradeId  订单ID或交易ID。账单类型为1、2、3、4和8时此处为订单ID。账单类型为其它场景时此处为交易ID，为扣费维度的唯一标识。例如非月末扣费时为应收ID；月末扣费时为账单ID。此参数不携带或携带值为空时，不作为筛选条件。
    * enterpriseProjectId  企业项目标识（企业项目ID）。default项目对应ID：0未归集（表示该云服务不支持企业项目管理能力）项目对应ID：null其余项目对应ID获取方法请参见[如何获取企业项目ID](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0126101490.html)。此参数不携带或携带值为空时，不作为筛选条件。
    * includeZeroRecord  返回是否包含应付金额为0的记录。true：包含false：不包含此参数不携带或携带值为空时，不作为筛选条件。
    * status  支付状态。1：已支付2：未结清3：未出账此参数不携带或携带值为空时，不作为筛选条件。
    * method  查询流水账单的方式。oneself：客户自己sub_customer：企业子客户all：客户自己和企业子客户 此参数不携带或携带值为空时，默认值为“all”，如果没有企业子客户，取值为all时查询的是客户自己的流水账单。
    * subCustomerId  企业子账号ID。 说明： 如果method取值不为sub_customer，则该参数无效。如果method取值为sub_customer，则该参数不能为空。
    * offset  偏移量，从0开始。默认值为0。 说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  页面大小。默认值为10。
    * billDateBegin  查询的流水账单的开始日期，东八区时间，格式为YYYY-MM-DD。此参数不携带或携带值为空时，不作为筛选条件。 说明： 必须和bill_cycle（即流水账单的所在账期）在同一个月。bill_date_begin和bill_date_end两个参数必须同时出现，否则仅按照bill_cycle（即流水账单的所在账期）进行查询。
    * billDateEnd  查询的流水账单的结束日期，东八区时间，格式为YYYY-MM-DD。此参数不携带或携带值为空时，不作为筛选条件。 说明： 必须和bill_cycle（即流水账单的所在账期）在同一个月。bill_date_begin和bill_date_end两个参数必须同时出现，否则仅按照bill_cycle（即流水账单的所在账期）进行查询。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xLanguage' => null,
        'billCycle' => null,
        'providerType' => 'int32',
        'serviceTypeCode' => null,
        'resourceTypeCode' => null,
        'regionCode' => null,
        'chargingMode' => 'int32',
        'billType' => 'int32',
        'tradeId' => null,
        'enterpriseProjectId' => null,
        'includeZeroRecord' => null,
        'status' => 'int32',
        'method' => null,
        'subCustomerId' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'billDateBegin' => null,
        'billDateEnd' => null
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
    * xLanguage  语言。zh_CN：中文 en_US：英文。默认为zh_CN：中文。
    * billCycle  查询的流水账单所在账期，东八区时间，格式为YYYY-MM。
    * providerType  服务商。1：华为云2：云商店为空时查询包含华为云和云商店在内的全部服务商。此参数不携带或携带值为空时，不作为筛选条件。
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用[查询云服务类型列表](https://support.huaweicloud.com/api-oce/zh-cn_topic_0000001256679455.html)接口获取。此参数不携带或携带值为空时，不作为筛选条件。
    * resourceTypeCode  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用[查询资源类型列表](https://support.huaweicloud.com/api-oce/zh-cn_topic_0000001256519451.html)接口获取。此参数不携带或携带值为空时，不作为筛选条件。
    * regionCode  云服务区编码，例如：“cn-north-1”。具体请参见[地区和终端节点](https://developer.huaweicloud.com/endpoint)对应云服务的“区域”列的值。此参数不携带或携带值为空时，不作为筛选条件。
    * chargingMode  计费模式：1 : 包年/包月3：按需10：预留实例11：节省计划 此参数不携带或携带值为空时，不作为筛选条件。
    * billType  账单类型。1：消费-新购 2：消费-续订 3：消费-变更 4：退款-退订 5：消费-使用 8：消费-自动续订 9：调账-补偿 14：消费-服务支持计划月末扣费 16：调账-扣费 18：消费-按月付费 20：退款-变更 23：消费-节省计划抵扣 24：退款-包年/包月转按需 25：消费-抹零补扣 103：消费-按年付费 此参数不携带或携带值为空时，不作为筛选条件。
    * tradeId  订单ID或交易ID。账单类型为1、2、3、4和8时此处为订单ID。账单类型为其它场景时此处为交易ID，为扣费维度的唯一标识。例如非月末扣费时为应收ID；月末扣费时为账单ID。此参数不携带或携带值为空时，不作为筛选条件。
    * enterpriseProjectId  企业项目标识（企业项目ID）。default项目对应ID：0未归集（表示该云服务不支持企业项目管理能力）项目对应ID：null其余项目对应ID获取方法请参见[如何获取企业项目ID](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0126101490.html)。此参数不携带或携带值为空时，不作为筛选条件。
    * includeZeroRecord  返回是否包含应付金额为0的记录。true：包含false：不包含此参数不携带或携带值为空时，不作为筛选条件。
    * status  支付状态。1：已支付2：未结清3：未出账此参数不携带或携带值为空时，不作为筛选条件。
    * method  查询流水账单的方式。oneself：客户自己sub_customer：企业子客户all：客户自己和企业子客户 此参数不携带或携带值为空时，默认值为“all”，如果没有企业子客户，取值为all时查询的是客户自己的流水账单。
    * subCustomerId  企业子账号ID。 说明： 如果method取值不为sub_customer，则该参数无效。如果method取值为sub_customer，则该参数不能为空。
    * offset  偏移量，从0开始。默认值为0。 说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  页面大小。默认值为10。
    * billDateBegin  查询的流水账单的开始日期，东八区时间，格式为YYYY-MM-DD。此参数不携带或携带值为空时，不作为筛选条件。 说明： 必须和bill_cycle（即流水账单的所在账期）在同一个月。bill_date_begin和bill_date_end两个参数必须同时出现，否则仅按照bill_cycle（即流水账单的所在账期）进行查询。
    * billDateEnd  查询的流水账单的结束日期，东八区时间，格式为YYYY-MM-DD。此参数不携带或携带值为空时，不作为筛选条件。 说明： 必须和bill_cycle（即流水账单的所在账期）在同一个月。bill_date_begin和bill_date_end两个参数必须同时出现，否则仅按照bill_cycle（即流水账单的所在账期）进行查询。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xLanguage' => 'X-Language',
            'billCycle' => 'bill_cycle',
            'providerType' => 'provider_type',
            'serviceTypeCode' => 'service_type_code',
            'resourceTypeCode' => 'resource_type_code',
            'regionCode' => 'region_code',
            'chargingMode' => 'charging_mode',
            'billType' => 'bill_type',
            'tradeId' => 'trade_id',
            'enterpriseProjectId' => 'enterprise_project_id',
            'includeZeroRecord' => 'include_zero_record',
            'status' => 'status',
            'method' => 'method',
            'subCustomerId' => 'sub_customer_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'billDateBegin' => 'bill_date_begin',
            'billDateEnd' => 'bill_date_end'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xLanguage  语言。zh_CN：中文 en_US：英文。默认为zh_CN：中文。
    * billCycle  查询的流水账单所在账期，东八区时间，格式为YYYY-MM。
    * providerType  服务商。1：华为云2：云商店为空时查询包含华为云和云商店在内的全部服务商。此参数不携带或携带值为空时，不作为筛选条件。
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用[查询云服务类型列表](https://support.huaweicloud.com/api-oce/zh-cn_topic_0000001256679455.html)接口获取。此参数不携带或携带值为空时，不作为筛选条件。
    * resourceTypeCode  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用[查询资源类型列表](https://support.huaweicloud.com/api-oce/zh-cn_topic_0000001256519451.html)接口获取。此参数不携带或携带值为空时，不作为筛选条件。
    * regionCode  云服务区编码，例如：“cn-north-1”。具体请参见[地区和终端节点](https://developer.huaweicloud.com/endpoint)对应云服务的“区域”列的值。此参数不携带或携带值为空时，不作为筛选条件。
    * chargingMode  计费模式：1 : 包年/包月3：按需10：预留实例11：节省计划 此参数不携带或携带值为空时，不作为筛选条件。
    * billType  账单类型。1：消费-新购 2：消费-续订 3：消费-变更 4：退款-退订 5：消费-使用 8：消费-自动续订 9：调账-补偿 14：消费-服务支持计划月末扣费 16：调账-扣费 18：消费-按月付费 20：退款-变更 23：消费-节省计划抵扣 24：退款-包年/包月转按需 25：消费-抹零补扣 103：消费-按年付费 此参数不携带或携带值为空时，不作为筛选条件。
    * tradeId  订单ID或交易ID。账单类型为1、2、3、4和8时此处为订单ID。账单类型为其它场景时此处为交易ID，为扣费维度的唯一标识。例如非月末扣费时为应收ID；月末扣费时为账单ID。此参数不携带或携带值为空时，不作为筛选条件。
    * enterpriseProjectId  企业项目标识（企业项目ID）。default项目对应ID：0未归集（表示该云服务不支持企业项目管理能力）项目对应ID：null其余项目对应ID获取方法请参见[如何获取企业项目ID](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0126101490.html)。此参数不携带或携带值为空时，不作为筛选条件。
    * includeZeroRecord  返回是否包含应付金额为0的记录。true：包含false：不包含此参数不携带或携带值为空时，不作为筛选条件。
    * status  支付状态。1：已支付2：未结清3：未出账此参数不携带或携带值为空时，不作为筛选条件。
    * method  查询流水账单的方式。oneself：客户自己sub_customer：企业子客户all：客户自己和企业子客户 此参数不携带或携带值为空时，默认值为“all”，如果没有企业子客户，取值为all时查询的是客户自己的流水账单。
    * subCustomerId  企业子账号ID。 说明： 如果method取值不为sub_customer，则该参数无效。如果method取值为sub_customer，则该参数不能为空。
    * offset  偏移量，从0开始。默认值为0。 说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  页面大小。默认值为10。
    * billDateBegin  查询的流水账单的开始日期，东八区时间，格式为YYYY-MM-DD。此参数不携带或携带值为空时，不作为筛选条件。 说明： 必须和bill_cycle（即流水账单的所在账期）在同一个月。bill_date_begin和bill_date_end两个参数必须同时出现，否则仅按照bill_cycle（即流水账单的所在账期）进行查询。
    * billDateEnd  查询的流水账单的结束日期，东八区时间，格式为YYYY-MM-DD。此参数不携带或携带值为空时，不作为筛选条件。 说明： 必须和bill_cycle（即流水账单的所在账期）在同一个月。bill_date_begin和bill_date_end两个参数必须同时出现，否则仅按照bill_cycle（即流水账单的所在账期）进行查询。
    *
    * @var string[]
    */
    protected static $setters = [
            'xLanguage' => 'setXLanguage',
            'billCycle' => 'setBillCycle',
            'providerType' => 'setProviderType',
            'serviceTypeCode' => 'setServiceTypeCode',
            'resourceTypeCode' => 'setResourceTypeCode',
            'regionCode' => 'setRegionCode',
            'chargingMode' => 'setChargingMode',
            'billType' => 'setBillType',
            'tradeId' => 'setTradeId',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'includeZeroRecord' => 'setIncludeZeroRecord',
            'status' => 'setStatus',
            'method' => 'setMethod',
            'subCustomerId' => 'setSubCustomerId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'billDateBegin' => 'setBillDateBegin',
            'billDateEnd' => 'setBillDateEnd'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xLanguage  语言。zh_CN：中文 en_US：英文。默认为zh_CN：中文。
    * billCycle  查询的流水账单所在账期，东八区时间，格式为YYYY-MM。
    * providerType  服务商。1：华为云2：云商店为空时查询包含华为云和云商店在内的全部服务商。此参数不携带或携带值为空时，不作为筛选条件。
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用[查询云服务类型列表](https://support.huaweicloud.com/api-oce/zh-cn_topic_0000001256679455.html)接口获取。此参数不携带或携带值为空时，不作为筛选条件。
    * resourceTypeCode  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用[查询资源类型列表](https://support.huaweicloud.com/api-oce/zh-cn_topic_0000001256519451.html)接口获取。此参数不携带或携带值为空时，不作为筛选条件。
    * regionCode  云服务区编码，例如：“cn-north-1”。具体请参见[地区和终端节点](https://developer.huaweicloud.com/endpoint)对应云服务的“区域”列的值。此参数不携带或携带值为空时，不作为筛选条件。
    * chargingMode  计费模式：1 : 包年/包月3：按需10：预留实例11：节省计划 此参数不携带或携带值为空时，不作为筛选条件。
    * billType  账单类型。1：消费-新购 2：消费-续订 3：消费-变更 4：退款-退订 5：消费-使用 8：消费-自动续订 9：调账-补偿 14：消费-服务支持计划月末扣费 16：调账-扣费 18：消费-按月付费 20：退款-变更 23：消费-节省计划抵扣 24：退款-包年/包月转按需 25：消费-抹零补扣 103：消费-按年付费 此参数不携带或携带值为空时，不作为筛选条件。
    * tradeId  订单ID或交易ID。账单类型为1、2、3、4和8时此处为订单ID。账单类型为其它场景时此处为交易ID，为扣费维度的唯一标识。例如非月末扣费时为应收ID；月末扣费时为账单ID。此参数不携带或携带值为空时，不作为筛选条件。
    * enterpriseProjectId  企业项目标识（企业项目ID）。default项目对应ID：0未归集（表示该云服务不支持企业项目管理能力）项目对应ID：null其余项目对应ID获取方法请参见[如何获取企业项目ID](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0126101490.html)。此参数不携带或携带值为空时，不作为筛选条件。
    * includeZeroRecord  返回是否包含应付金额为0的记录。true：包含false：不包含此参数不携带或携带值为空时，不作为筛选条件。
    * status  支付状态。1：已支付2：未结清3：未出账此参数不携带或携带值为空时，不作为筛选条件。
    * method  查询流水账单的方式。oneself：客户自己sub_customer：企业子客户all：客户自己和企业子客户 此参数不携带或携带值为空时，默认值为“all”，如果没有企业子客户，取值为all时查询的是客户自己的流水账单。
    * subCustomerId  企业子账号ID。 说明： 如果method取值不为sub_customer，则该参数无效。如果method取值为sub_customer，则该参数不能为空。
    * offset  偏移量，从0开始。默认值为0。 说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  页面大小。默认值为10。
    * billDateBegin  查询的流水账单的开始日期，东八区时间，格式为YYYY-MM-DD。此参数不携带或携带值为空时，不作为筛选条件。 说明： 必须和bill_cycle（即流水账单的所在账期）在同一个月。bill_date_begin和bill_date_end两个参数必须同时出现，否则仅按照bill_cycle（即流水账单的所在账期）进行查询。
    * billDateEnd  查询的流水账单的结束日期，东八区时间，格式为YYYY-MM-DD。此参数不携带或携带值为空时，不作为筛选条件。 说明： 必须和bill_cycle（即流水账单的所在账期）在同一个月。bill_date_begin和bill_date_end两个参数必须同时出现，否则仅按照bill_cycle（即流水账单的所在账期）进行查询。
    *
    * @var string[]
    */
    protected static $getters = [
            'xLanguage' => 'getXLanguage',
            'billCycle' => 'getBillCycle',
            'providerType' => 'getProviderType',
            'serviceTypeCode' => 'getServiceTypeCode',
            'resourceTypeCode' => 'getResourceTypeCode',
            'regionCode' => 'getRegionCode',
            'chargingMode' => 'getChargingMode',
            'billType' => 'getBillType',
            'tradeId' => 'getTradeId',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'includeZeroRecord' => 'getIncludeZeroRecord',
            'status' => 'getStatus',
            'method' => 'getMethod',
            'subCustomerId' => 'getSubCustomerId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'billDateBegin' => 'getBillDateBegin',
            'billDateEnd' => 'getBillDateEnd'
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
        $this->container['xLanguage'] = isset($data['xLanguage']) ? $data['xLanguage'] : null;
        $this->container['billCycle'] = isset($data['billCycle']) ? $data['billCycle'] : null;
        $this->container['providerType'] = isset($data['providerType']) ? $data['providerType'] : null;
        $this->container['serviceTypeCode'] = isset($data['serviceTypeCode']) ? $data['serviceTypeCode'] : null;
        $this->container['resourceTypeCode'] = isset($data['resourceTypeCode']) ? $data['resourceTypeCode'] : null;
        $this->container['regionCode'] = isset($data['regionCode']) ? $data['regionCode'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['billType'] = isset($data['billType']) ? $data['billType'] : null;
        $this->container['tradeId'] = isset($data['tradeId']) ? $data['tradeId'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['includeZeroRecord'] = isset($data['includeZeroRecord']) ? $data['includeZeroRecord'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['method'] = isset($data['method']) ? $data['method'] : null;
        $this->container['subCustomerId'] = isset($data['subCustomerId']) ? $data['subCustomerId'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['billDateBegin'] = isset($data['billDateBegin']) ? $data['billDateBegin'] : null;
        $this->container['billDateEnd'] = isset($data['billDateEnd']) ? $data['billDateEnd'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['billCycle'] === null) {
            $invalidProperties[] = "'billCycle' can't be null";
        }
            if (!is_null($this->container['providerType']) && ($this->container['providerType'] > 2)) {
                $invalidProperties[] = "invalid value for 'providerType', must be smaller than or equal to 2.";
            }
            if (!is_null($this->container['providerType']) && ($this->container['providerType'] < 1)) {
                $invalidProperties[] = "invalid value for 'providerType', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['chargingMode']) && ($this->container['chargingMode'] > 11)) {
                $invalidProperties[] = "invalid value for 'chargingMode', must be smaller than or equal to 11.";
            }
            if (!is_null($this->container['chargingMode']) && ($this->container['chargingMode'] < 1)) {
                $invalidProperties[] = "invalid value for 'chargingMode', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['billType']) && ($this->container['billType'] > 103)) {
                $invalidProperties[] = "invalid value for 'billType', must be smaller than or equal to 103.";
            }
            if (!is_null($this->container['billType']) && ($this->container['billType'] < 1)) {
                $invalidProperties[] = "invalid value for 'billType', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['status']) && ($this->container['status'] > 3)) {
                $invalidProperties[] = "invalid value for 'status', must be smaller than or equal to 3.";
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
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 1000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 1000.";
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
    * Gets xLanguage
    *  语言。zh_CN：中文 en_US：英文。默认为zh_CN：中文。
    *
    * @return string|null
    */
    public function getXLanguage()
    {
        return $this->container['xLanguage'];
    }

    /**
    * Sets xLanguage
    *
    * @param string|null $xLanguage 语言。zh_CN：中文 en_US：英文。默认为zh_CN：中文。
    *
    * @return $this
    */
    public function setXLanguage($xLanguage)
    {
        $this->container['xLanguage'] = $xLanguage;
        return $this;
    }

    /**
    * Gets billCycle
    *  查询的流水账单所在账期，东八区时间，格式为YYYY-MM。
    *
    * @return string
    */
    public function getBillCycle()
    {
        return $this->container['billCycle'];
    }

    /**
    * Sets billCycle
    *
    * @param string $billCycle 查询的流水账单所在账期，东八区时间，格式为YYYY-MM。
    *
    * @return $this
    */
    public function setBillCycle($billCycle)
    {
        $this->container['billCycle'] = $billCycle;
        return $this;
    }

    /**
    * Gets providerType
    *  服务商。1：华为云2：云商店为空时查询包含华为云和云商店在内的全部服务商。此参数不携带或携带值为空时，不作为筛选条件。
    *
    * @return int|null
    */
    public function getProviderType()
    {
        return $this->container['providerType'];
    }

    /**
    * Sets providerType
    *
    * @param int|null $providerType 服务商。1：华为云2：云商店为空时查询包含华为云和云商店在内的全部服务商。此参数不携带或携带值为空时，不作为筛选条件。
    *
    * @return $this
    */
    public function setProviderType($providerType)
    {
        $this->container['providerType'] = $providerType;
        return $this;
    }

    /**
    * Gets serviceTypeCode
    *  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用[查询云服务类型列表](https://support.huaweicloud.com/api-oce/zh-cn_topic_0000001256679455.html)接口获取。此参数不携带或携带值为空时，不作为筛选条件。
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
    * @param string|null $serviceTypeCode 云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用[查询云服务类型列表](https://support.huaweicloud.com/api-oce/zh-cn_topic_0000001256679455.html)接口获取。此参数不携带或携带值为空时，不作为筛选条件。
    *
    * @return $this
    */
    public function setServiceTypeCode($serviceTypeCode)
    {
        $this->container['serviceTypeCode'] = $serviceTypeCode;
        return $this;
    }

    /**
    * Gets resourceTypeCode
    *  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用[查询资源类型列表](https://support.huaweicloud.com/api-oce/zh-cn_topic_0000001256519451.html)接口获取。此参数不携带或携带值为空时，不作为筛选条件。
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
    * @param string|null $resourceTypeCode 资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用[查询资源类型列表](https://support.huaweicloud.com/api-oce/zh-cn_topic_0000001256519451.html)接口获取。此参数不携带或携带值为空时，不作为筛选条件。
    *
    * @return $this
    */
    public function setResourceTypeCode($resourceTypeCode)
    {
        $this->container['resourceTypeCode'] = $resourceTypeCode;
        return $this;
    }

    /**
    * Gets regionCode
    *  云服务区编码，例如：“cn-north-1”。具体请参见[地区和终端节点](https://developer.huaweicloud.com/endpoint)对应云服务的“区域”列的值。此参数不携带或携带值为空时，不作为筛选条件。
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
    * @param string|null $regionCode 云服务区编码，例如：“cn-north-1”。具体请参见[地区和终端节点](https://developer.huaweicloud.com/endpoint)对应云服务的“区域”列的值。此参数不携带或携带值为空时，不作为筛选条件。
    *
    * @return $this
    */
    public function setRegionCode($regionCode)
    {
        $this->container['regionCode'] = $regionCode;
        return $this;
    }

    /**
    * Gets chargingMode
    *  计费模式：1 : 包年/包月3：按需10：预留实例11：节省计划 此参数不携带或携带值为空时，不作为筛选条件。
    *
    * @return int|null
    */
    public function getChargingMode()
    {
        return $this->container['chargingMode'];
    }

    /**
    * Sets chargingMode
    *
    * @param int|null $chargingMode 计费模式：1 : 包年/包月3：按需10：预留实例11：节省计划 此参数不携带或携带值为空时，不作为筛选条件。
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
        return $this;
    }

    /**
    * Gets billType
    *  账单类型。1：消费-新购 2：消费-续订 3：消费-变更 4：退款-退订 5：消费-使用 8：消费-自动续订 9：调账-补偿 14：消费-服务支持计划月末扣费 16：调账-扣费 18：消费-按月付费 20：退款-变更 23：消费-节省计划抵扣 24：退款-包年/包月转按需 25：消费-抹零补扣 103：消费-按年付费 此参数不携带或携带值为空时，不作为筛选条件。
    *
    * @return int|null
    */
    public function getBillType()
    {
        return $this->container['billType'];
    }

    /**
    * Sets billType
    *
    * @param int|null $billType 账单类型。1：消费-新购 2：消费-续订 3：消费-变更 4：退款-退订 5：消费-使用 8：消费-自动续订 9：调账-补偿 14：消费-服务支持计划月末扣费 16：调账-扣费 18：消费-按月付费 20：退款-变更 23：消费-节省计划抵扣 24：退款-包年/包月转按需 25：消费-抹零补扣 103：消费-按年付费 此参数不携带或携带值为空时，不作为筛选条件。
    *
    * @return $this
    */
    public function setBillType($billType)
    {
        $this->container['billType'] = $billType;
        return $this;
    }

    /**
    * Gets tradeId
    *  订单ID或交易ID。账单类型为1、2、3、4和8时此处为订单ID。账单类型为其它场景时此处为交易ID，为扣费维度的唯一标识。例如非月末扣费时为应收ID；月末扣费时为账单ID。此参数不携带或携带值为空时，不作为筛选条件。
    *
    * @return string|null
    */
    public function getTradeId()
    {
        return $this->container['tradeId'];
    }

    /**
    * Sets tradeId
    *
    * @param string|null $tradeId 订单ID或交易ID。账单类型为1、2、3、4和8时此处为订单ID。账单类型为其它场景时此处为交易ID，为扣费维度的唯一标识。例如非月末扣费时为应收ID；月末扣费时为账单ID。此参数不携带或携带值为空时，不作为筛选条件。
    *
    * @return $this
    */
    public function setTradeId($tradeId)
    {
        $this->container['tradeId'] = $tradeId;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目标识（企业项目ID）。default项目对应ID：0未归集（表示该云服务不支持企业项目管理能力）项目对应ID：null其余项目对应ID获取方法请参见[如何获取企业项目ID](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0126101490.html)。此参数不携带或携带值为空时，不作为筛选条件。
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
    * @param string|null $enterpriseProjectId 企业项目标识（企业项目ID）。default项目对应ID：0未归集（表示该云服务不支持企业项目管理能力）项目对应ID：null其余项目对应ID获取方法请参见[如何获取企业项目ID](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0126101490.html)。此参数不携带或携带值为空时，不作为筛选条件。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets includeZeroRecord
    *  返回是否包含应付金额为0的记录。true：包含false：不包含此参数不携带或携带值为空时，不作为筛选条件。
    *
    * @return bool|null
    */
    public function getIncludeZeroRecord()
    {
        return $this->container['includeZeroRecord'];
    }

    /**
    * Sets includeZeroRecord
    *
    * @param bool|null $includeZeroRecord 返回是否包含应付金额为0的记录。true：包含false：不包含此参数不携带或携带值为空时，不作为筛选条件。
    *
    * @return $this
    */
    public function setIncludeZeroRecord($includeZeroRecord)
    {
        $this->container['includeZeroRecord'] = $includeZeroRecord;
        return $this;
    }

    /**
    * Gets status
    *  支付状态。1：已支付2：未结清3：未出账此参数不携带或携带值为空时，不作为筛选条件。
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
    * @param int|null $status 支付状态。1：已支付2：未结清3：未出账此参数不携带或携带值为空时，不作为筛选条件。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets method
    *  查询流水账单的方式。oneself：客户自己sub_customer：企业子客户all：客户自己和企业子客户 此参数不携带或携带值为空时，默认值为“all”，如果没有企业子客户，取值为all时查询的是客户自己的流水账单。
    *
    * @return string|null
    */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
    * Sets method
    *
    * @param string|null $method 查询流水账单的方式。oneself：客户自己sub_customer：企业子客户all：客户自己和企业子客户 此参数不携带或携带值为空时，默认值为“all”，如果没有企业子客户，取值为all时查询的是客户自己的流水账单。
    *
    * @return $this
    */
    public function setMethod($method)
    {
        $this->container['method'] = $method;
        return $this;
    }

    /**
    * Gets subCustomerId
    *  企业子账号ID。 说明： 如果method取值不为sub_customer，则该参数无效。如果method取值为sub_customer，则该参数不能为空。
    *
    * @return string|null
    */
    public function getSubCustomerId()
    {
        return $this->container['subCustomerId'];
    }

    /**
    * Sets subCustomerId
    *
    * @param string|null $subCustomerId 企业子账号ID。 说明： 如果method取值不为sub_customer，则该参数无效。如果method取值为sub_customer，则该参数不能为空。
    *
    * @return $this
    */
    public function setSubCustomerId($subCustomerId)
    {
        $this->container['subCustomerId'] = $subCustomerId;
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
    *  页面大小。默认值为10。
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
    * @param int|null $limit 页面大小。默认值为10。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets billDateBegin
    *  查询的流水账单的开始日期，东八区时间，格式为YYYY-MM-DD。此参数不携带或携带值为空时，不作为筛选条件。 说明： 必须和bill_cycle（即流水账单的所在账期）在同一个月。bill_date_begin和bill_date_end两个参数必须同时出现，否则仅按照bill_cycle（即流水账单的所在账期）进行查询。
    *
    * @return string|null
    */
    public function getBillDateBegin()
    {
        return $this->container['billDateBegin'];
    }

    /**
    * Sets billDateBegin
    *
    * @param string|null $billDateBegin 查询的流水账单的开始日期，东八区时间，格式为YYYY-MM-DD。此参数不携带或携带值为空时，不作为筛选条件。 说明： 必须和bill_cycle（即流水账单的所在账期）在同一个月。bill_date_begin和bill_date_end两个参数必须同时出现，否则仅按照bill_cycle（即流水账单的所在账期）进行查询。
    *
    * @return $this
    */
    public function setBillDateBegin($billDateBegin)
    {
        $this->container['billDateBegin'] = $billDateBegin;
        return $this;
    }

    /**
    * Gets billDateEnd
    *  查询的流水账单的结束日期，东八区时间，格式为YYYY-MM-DD。此参数不携带或携带值为空时，不作为筛选条件。 说明： 必须和bill_cycle（即流水账单的所在账期）在同一个月。bill_date_begin和bill_date_end两个参数必须同时出现，否则仅按照bill_cycle（即流水账单的所在账期）进行查询。
    *
    * @return string|null
    */
    public function getBillDateEnd()
    {
        return $this->container['billDateEnd'];
    }

    /**
    * Sets billDateEnd
    *
    * @param string|null $billDateEnd 查询的流水账单的结束日期，东八区时间，格式为YYYY-MM-DD。此参数不携带或携带值为空时，不作为筛选条件。 说明： 必须和bill_cycle（即流水账单的所在账期）在同一个月。bill_date_begin和bill_date_end两个参数必须同时出现，否则仅按照bill_cycle（即流水账单的所在账期）进行查询。
    *
    * @return $this
    */
    public function setBillDateEnd($billDateEnd)
    {
        $this->container['billDateEnd'] = $billDateEnd;
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

