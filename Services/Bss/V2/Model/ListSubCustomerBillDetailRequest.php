<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSubCustomerBillDetailRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSubCustomerBillDetailRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xLanguage  语言。忽略大小写，默认 zh_cn：中文 en_us：英文
    * billCycle  账期所在月份。格式：YYYY-MM
    * customerId  客户账号ID。您可以调用[查询客户列表](https://support.huaweicloud.com/api-bpconsole/mc_00021.html)接口获取customer_id。
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用[查询云服务类型列表](https://support.huaweicloud.com/api-bpconsole/zh-cn_topic_0000001256679455.html)接口获取。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    * regionCode  云服务区编码，例如：“cn-north-1”。具体请参见[地区和终端节点](https://developer.huaweicloud.com/endpoint)对应云服务的“区域”列的值。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    * chargingMode  计费模式。1：包周期3：按需10：预留实例此参数不携带或携带值为空时，默认查询所有计费模式下的消费记录；携带值为空串或携带值为null时，作为筛选条件。
    * billDetailType  账单类型。1：消费-新购2：消费-续订3：消费-变更4：退款-退订5：消费-使用8：消费-自动续订9：调账-补偿14：消费-服务支持计划月末扣费16：调账-扣费18：消费-按月付费20：退款-变更 此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    * resourceId  资源标识。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    * resourceName  资源名称。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    * tradeId  订单ID或交易ID，扣费维度的唯一标识。账单类型为1，2，3，4，8时为订单ID。其它场景下为交易ID。非月末扣费：应收ID月末扣费：账单ID 此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    * accountManagerId  客户经理标识。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    * associationType  子客户的关联类型：1：顾问销售2：代售 此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    * offset  偏移量，从0开始。默认值为0。 说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  每次查询的数量限制。默认值为10。
    * indirectPartnerId  云经销商ID。获取方法请参见[查询云经销商列表](https://support.huaweicloud.com/api-bpconsole/espp_00003.html)。  说明： 华为云总经销商可以查询名下所有子客户消费（包括云经销商子客户）。如果是普通经销商，那么此处可以为空。如果华为云总经销商需要查询客户在云经销商关联期间的消费，需要携带该字段；除此之外，此参数不做处理。否则只能查询该客户在与自己关联期间的消费。
    * billDateBegin  查询的资源消费记录的开始日期，格式为YYYY-MM-DD。此参数不携带或携带值为空时，不作为筛选条件；不支持携带值为空串。 说明： 必须和cycle（即资源的消费账期）在同一个月。
    * billDateEnd  查询的资源消费记录的结束日期，格式为YYYY-MM-DD。此参数不携带或携带值为空时，不作为筛选条件；不支持携带值为空串。 说明： 必须和cycle（即资源的消费账期）在同一个月。bill_date_begin和bill_date_end两个参数必须同时出现，否则仅按照cycle（即资源的消费账期）进行查询。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xLanguage' => 'string',
            'billCycle' => 'string',
            'customerId' => 'string',
            'serviceTypeCode' => 'string',
            'regionCode' => 'string',
            'chargingMode' => 'int',
            'billDetailType' => 'int',
            'resourceId' => 'string',
            'resourceName' => 'string',
            'tradeId' => 'string',
            'accountManagerId' => 'string',
            'associationType' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'indirectPartnerId' => 'string',
            'billDateBegin' => 'string',
            'billDateEnd' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xLanguage  语言。忽略大小写，默认 zh_cn：中文 en_us：英文
    * billCycle  账期所在月份。格式：YYYY-MM
    * customerId  客户账号ID。您可以调用[查询客户列表](https://support.huaweicloud.com/api-bpconsole/mc_00021.html)接口获取customer_id。
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用[查询云服务类型列表](https://support.huaweicloud.com/api-bpconsole/zh-cn_topic_0000001256679455.html)接口获取。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    * regionCode  云服务区编码，例如：“cn-north-1”。具体请参见[地区和终端节点](https://developer.huaweicloud.com/endpoint)对应云服务的“区域”列的值。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    * chargingMode  计费模式。1：包周期3：按需10：预留实例此参数不携带或携带值为空时，默认查询所有计费模式下的消费记录；携带值为空串或携带值为null时，作为筛选条件。
    * billDetailType  账单类型。1：消费-新购2：消费-续订3：消费-变更4：退款-退订5：消费-使用8：消费-自动续订9：调账-补偿14：消费-服务支持计划月末扣费16：调账-扣费18：消费-按月付费20：退款-变更 此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    * resourceId  资源标识。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    * resourceName  资源名称。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    * tradeId  订单ID或交易ID，扣费维度的唯一标识。账单类型为1，2，3，4，8时为订单ID。其它场景下为交易ID。非月末扣费：应收ID月末扣费：账单ID 此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    * accountManagerId  客户经理标识。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    * associationType  子客户的关联类型：1：顾问销售2：代售 此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    * offset  偏移量，从0开始。默认值为0。 说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  每次查询的数量限制。默认值为10。
    * indirectPartnerId  云经销商ID。获取方法请参见[查询云经销商列表](https://support.huaweicloud.com/api-bpconsole/espp_00003.html)。  说明： 华为云总经销商可以查询名下所有子客户消费（包括云经销商子客户）。如果是普通经销商，那么此处可以为空。如果华为云总经销商需要查询客户在云经销商关联期间的消费，需要携带该字段；除此之外，此参数不做处理。否则只能查询该客户在与自己关联期间的消费。
    * billDateBegin  查询的资源消费记录的开始日期，格式为YYYY-MM-DD。此参数不携带或携带值为空时，不作为筛选条件；不支持携带值为空串。 说明： 必须和cycle（即资源的消费账期）在同一个月。
    * billDateEnd  查询的资源消费记录的结束日期，格式为YYYY-MM-DD。此参数不携带或携带值为空时，不作为筛选条件；不支持携带值为空串。 说明： 必须和cycle（即资源的消费账期）在同一个月。bill_date_begin和bill_date_end两个参数必须同时出现，否则仅按照cycle（即资源的消费账期）进行查询。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xLanguage' => null,
        'billCycle' => null,
        'customerId' => null,
        'serviceTypeCode' => null,
        'regionCode' => null,
        'chargingMode' => 'int32',
        'billDetailType' => 'int32',
        'resourceId' => null,
        'resourceName' => null,
        'tradeId' => null,
        'accountManagerId' => null,
        'associationType' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'indirectPartnerId' => null,
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
    * xLanguage  语言。忽略大小写，默认 zh_cn：中文 en_us：英文
    * billCycle  账期所在月份。格式：YYYY-MM
    * customerId  客户账号ID。您可以调用[查询客户列表](https://support.huaweicloud.com/api-bpconsole/mc_00021.html)接口获取customer_id。
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用[查询云服务类型列表](https://support.huaweicloud.com/api-bpconsole/zh-cn_topic_0000001256679455.html)接口获取。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    * regionCode  云服务区编码，例如：“cn-north-1”。具体请参见[地区和终端节点](https://developer.huaweicloud.com/endpoint)对应云服务的“区域”列的值。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    * chargingMode  计费模式。1：包周期3：按需10：预留实例此参数不携带或携带值为空时，默认查询所有计费模式下的消费记录；携带值为空串或携带值为null时，作为筛选条件。
    * billDetailType  账单类型。1：消费-新购2：消费-续订3：消费-变更4：退款-退订5：消费-使用8：消费-自动续订9：调账-补偿14：消费-服务支持计划月末扣费16：调账-扣费18：消费-按月付费20：退款-变更 此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    * resourceId  资源标识。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    * resourceName  资源名称。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    * tradeId  订单ID或交易ID，扣费维度的唯一标识。账单类型为1，2，3，4，8时为订单ID。其它场景下为交易ID。非月末扣费：应收ID月末扣费：账单ID 此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    * accountManagerId  客户经理标识。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    * associationType  子客户的关联类型：1：顾问销售2：代售 此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    * offset  偏移量，从0开始。默认值为0。 说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  每次查询的数量限制。默认值为10。
    * indirectPartnerId  云经销商ID。获取方法请参见[查询云经销商列表](https://support.huaweicloud.com/api-bpconsole/espp_00003.html)。  说明： 华为云总经销商可以查询名下所有子客户消费（包括云经销商子客户）。如果是普通经销商，那么此处可以为空。如果华为云总经销商需要查询客户在云经销商关联期间的消费，需要携带该字段；除此之外，此参数不做处理。否则只能查询该客户在与自己关联期间的消费。
    * billDateBegin  查询的资源消费记录的开始日期，格式为YYYY-MM-DD。此参数不携带或携带值为空时，不作为筛选条件；不支持携带值为空串。 说明： 必须和cycle（即资源的消费账期）在同一个月。
    * billDateEnd  查询的资源消费记录的结束日期，格式为YYYY-MM-DD。此参数不携带或携带值为空时，不作为筛选条件；不支持携带值为空串。 说明： 必须和cycle（即资源的消费账期）在同一个月。bill_date_begin和bill_date_end两个参数必须同时出现，否则仅按照cycle（即资源的消费账期）进行查询。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xLanguage' => 'X-Language',
            'billCycle' => 'bill_cycle',
            'customerId' => 'customer_id',
            'serviceTypeCode' => 'service_type_code',
            'regionCode' => 'region_code',
            'chargingMode' => 'charging_mode',
            'billDetailType' => 'bill_detail_type',
            'resourceId' => 'resource_id',
            'resourceName' => 'resource_name',
            'tradeId' => 'trade_id',
            'accountManagerId' => 'account_manager_id',
            'associationType' => 'association_type',
            'offset' => 'offset',
            'limit' => 'limit',
            'indirectPartnerId' => 'indirect_partner_id',
            'billDateBegin' => 'bill_date_begin',
            'billDateEnd' => 'bill_date_end'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xLanguage  语言。忽略大小写，默认 zh_cn：中文 en_us：英文
    * billCycle  账期所在月份。格式：YYYY-MM
    * customerId  客户账号ID。您可以调用[查询客户列表](https://support.huaweicloud.com/api-bpconsole/mc_00021.html)接口获取customer_id。
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用[查询云服务类型列表](https://support.huaweicloud.com/api-bpconsole/zh-cn_topic_0000001256679455.html)接口获取。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    * regionCode  云服务区编码，例如：“cn-north-1”。具体请参见[地区和终端节点](https://developer.huaweicloud.com/endpoint)对应云服务的“区域”列的值。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    * chargingMode  计费模式。1：包周期3：按需10：预留实例此参数不携带或携带值为空时，默认查询所有计费模式下的消费记录；携带值为空串或携带值为null时，作为筛选条件。
    * billDetailType  账单类型。1：消费-新购2：消费-续订3：消费-变更4：退款-退订5：消费-使用8：消费-自动续订9：调账-补偿14：消费-服务支持计划月末扣费16：调账-扣费18：消费-按月付费20：退款-变更 此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    * resourceId  资源标识。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    * resourceName  资源名称。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    * tradeId  订单ID或交易ID，扣费维度的唯一标识。账单类型为1，2，3，4，8时为订单ID。其它场景下为交易ID。非月末扣费：应收ID月末扣费：账单ID 此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    * accountManagerId  客户经理标识。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    * associationType  子客户的关联类型：1：顾问销售2：代售 此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    * offset  偏移量，从0开始。默认值为0。 说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  每次查询的数量限制。默认值为10。
    * indirectPartnerId  云经销商ID。获取方法请参见[查询云经销商列表](https://support.huaweicloud.com/api-bpconsole/espp_00003.html)。  说明： 华为云总经销商可以查询名下所有子客户消费（包括云经销商子客户）。如果是普通经销商，那么此处可以为空。如果华为云总经销商需要查询客户在云经销商关联期间的消费，需要携带该字段；除此之外，此参数不做处理。否则只能查询该客户在与自己关联期间的消费。
    * billDateBegin  查询的资源消费记录的开始日期，格式为YYYY-MM-DD。此参数不携带或携带值为空时，不作为筛选条件；不支持携带值为空串。 说明： 必须和cycle（即资源的消费账期）在同一个月。
    * billDateEnd  查询的资源消费记录的结束日期，格式为YYYY-MM-DD。此参数不携带或携带值为空时，不作为筛选条件；不支持携带值为空串。 说明： 必须和cycle（即资源的消费账期）在同一个月。bill_date_begin和bill_date_end两个参数必须同时出现，否则仅按照cycle（即资源的消费账期）进行查询。
    *
    * @var string[]
    */
    protected static $setters = [
            'xLanguage' => 'setXLanguage',
            'billCycle' => 'setBillCycle',
            'customerId' => 'setCustomerId',
            'serviceTypeCode' => 'setServiceTypeCode',
            'regionCode' => 'setRegionCode',
            'chargingMode' => 'setChargingMode',
            'billDetailType' => 'setBillDetailType',
            'resourceId' => 'setResourceId',
            'resourceName' => 'setResourceName',
            'tradeId' => 'setTradeId',
            'accountManagerId' => 'setAccountManagerId',
            'associationType' => 'setAssociationType',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'indirectPartnerId' => 'setIndirectPartnerId',
            'billDateBegin' => 'setBillDateBegin',
            'billDateEnd' => 'setBillDateEnd'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xLanguage  语言。忽略大小写，默认 zh_cn：中文 en_us：英文
    * billCycle  账期所在月份。格式：YYYY-MM
    * customerId  客户账号ID。您可以调用[查询客户列表](https://support.huaweicloud.com/api-bpconsole/mc_00021.html)接口获取customer_id。
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用[查询云服务类型列表](https://support.huaweicloud.com/api-bpconsole/zh-cn_topic_0000001256679455.html)接口获取。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    * regionCode  云服务区编码，例如：“cn-north-1”。具体请参见[地区和终端节点](https://developer.huaweicloud.com/endpoint)对应云服务的“区域”列的值。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    * chargingMode  计费模式。1：包周期3：按需10：预留实例此参数不携带或携带值为空时，默认查询所有计费模式下的消费记录；携带值为空串或携带值为null时，作为筛选条件。
    * billDetailType  账单类型。1：消费-新购2：消费-续订3：消费-变更4：退款-退订5：消费-使用8：消费-自动续订9：调账-补偿14：消费-服务支持计划月末扣费16：调账-扣费18：消费-按月付费20：退款-变更 此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    * resourceId  资源标识。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    * resourceName  资源名称。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    * tradeId  订单ID或交易ID，扣费维度的唯一标识。账单类型为1，2，3，4，8时为订单ID。其它场景下为交易ID。非月末扣费：应收ID月末扣费：账单ID 此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    * accountManagerId  客户经理标识。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    * associationType  子客户的关联类型：1：顾问销售2：代售 此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    * offset  偏移量，从0开始。默认值为0。 说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  每次查询的数量限制。默认值为10。
    * indirectPartnerId  云经销商ID。获取方法请参见[查询云经销商列表](https://support.huaweicloud.com/api-bpconsole/espp_00003.html)。  说明： 华为云总经销商可以查询名下所有子客户消费（包括云经销商子客户）。如果是普通经销商，那么此处可以为空。如果华为云总经销商需要查询客户在云经销商关联期间的消费，需要携带该字段；除此之外，此参数不做处理。否则只能查询该客户在与自己关联期间的消费。
    * billDateBegin  查询的资源消费记录的开始日期，格式为YYYY-MM-DD。此参数不携带或携带值为空时，不作为筛选条件；不支持携带值为空串。 说明： 必须和cycle（即资源的消费账期）在同一个月。
    * billDateEnd  查询的资源消费记录的结束日期，格式为YYYY-MM-DD。此参数不携带或携带值为空时，不作为筛选条件；不支持携带值为空串。 说明： 必须和cycle（即资源的消费账期）在同一个月。bill_date_begin和bill_date_end两个参数必须同时出现，否则仅按照cycle（即资源的消费账期）进行查询。
    *
    * @var string[]
    */
    protected static $getters = [
            'xLanguage' => 'getXLanguage',
            'billCycle' => 'getBillCycle',
            'customerId' => 'getCustomerId',
            'serviceTypeCode' => 'getServiceTypeCode',
            'regionCode' => 'getRegionCode',
            'chargingMode' => 'getChargingMode',
            'billDetailType' => 'getBillDetailType',
            'resourceId' => 'getResourceId',
            'resourceName' => 'getResourceName',
            'tradeId' => 'getTradeId',
            'accountManagerId' => 'getAccountManagerId',
            'associationType' => 'getAssociationType',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'indirectPartnerId' => 'getIndirectPartnerId',
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
        $this->container['xLanguage'] = isset($data['xLanguage']) ? $data['xLanguage'] : 'zh_cn';
        $this->container['billCycle'] = isset($data['billCycle']) ? $data['billCycle'] : null;
        $this->container['customerId'] = isset($data['customerId']) ? $data['customerId'] : null;
        $this->container['serviceTypeCode'] = isset($data['serviceTypeCode']) ? $data['serviceTypeCode'] : null;
        $this->container['regionCode'] = isset($data['regionCode']) ? $data['regionCode'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['billDetailType'] = isset($data['billDetailType']) ? $data['billDetailType'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['resourceName'] = isset($data['resourceName']) ? $data['resourceName'] : null;
        $this->container['tradeId'] = isset($data['tradeId']) ? $data['tradeId'] : null;
        $this->container['accountManagerId'] = isset($data['accountManagerId']) ? $data['accountManagerId'] : null;
        $this->container['associationType'] = isset($data['associationType']) ? $data['associationType'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : 0;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : 10;
        $this->container['indirectPartnerId'] = isset($data['indirectPartnerId']) ? $data['indirectPartnerId'] : null;
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
        if ($this->container['customerId'] === null) {
            $invalidProperties[] = "'customerId' can't be null";
        }
            if (!is_null($this->container['chargingMode']) && ($this->container['chargingMode'] > 64)) {
                $invalidProperties[] = "invalid value for 'chargingMode', must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['chargingMode']) && ($this->container['chargingMode'] < 0)) {
                $invalidProperties[] = "invalid value for 'chargingMode', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['billDetailType']) && ($this->container['billDetailType'] > 127)) {
                $invalidProperties[] = "invalid value for 'billDetailType', must be smaller than or equal to 127.";
            }
            if (!is_null($this->container['billDetailType']) && ($this->container['billDetailType'] < 0)) {
                $invalidProperties[] = "invalid value for 'billDetailType', must be bigger than or equal to 0.";
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
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
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
    *  语言。忽略大小写，默认 zh_cn：中文 en_us：英文
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
    * @param string|null $xLanguage 语言。忽略大小写，默认 zh_cn：中文 en_us：英文
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
    *  账期所在月份。格式：YYYY-MM
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
    * @param string $billCycle 账期所在月份。格式：YYYY-MM
    *
    * @return $this
    */
    public function setBillCycle($billCycle)
    {
        $this->container['billCycle'] = $billCycle;
        return $this;
    }

    /**
    * Gets customerId
    *  客户账号ID。您可以调用[查询客户列表](https://support.huaweicloud.com/api-bpconsole/mc_00021.html)接口获取customer_id。
    *
    * @return string
    */
    public function getCustomerId()
    {
        return $this->container['customerId'];
    }

    /**
    * Sets customerId
    *
    * @param string $customerId 客户账号ID。您可以调用[查询客户列表](https://support.huaweicloud.com/api-bpconsole/mc_00021.html)接口获取customer_id。
    *
    * @return $this
    */
    public function setCustomerId($customerId)
    {
        $this->container['customerId'] = $customerId;
        return $this;
    }

    /**
    * Gets serviceTypeCode
    *  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用[查询云服务类型列表](https://support.huaweicloud.com/api-bpconsole/zh-cn_topic_0000001256679455.html)接口获取。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
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
    * @param string|null $serviceTypeCode 云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用[查询云服务类型列表](https://support.huaweicloud.com/api-bpconsole/zh-cn_topic_0000001256679455.html)接口获取。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    *
    * @return $this
    */
    public function setServiceTypeCode($serviceTypeCode)
    {
        $this->container['serviceTypeCode'] = $serviceTypeCode;
        return $this;
    }

    /**
    * Gets regionCode
    *  云服务区编码，例如：“cn-north-1”。具体请参见[地区和终端节点](https://developer.huaweicloud.com/endpoint)对应云服务的“区域”列的值。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
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
    * @param string|null $regionCode 云服务区编码，例如：“cn-north-1”。具体请参见[地区和终端节点](https://developer.huaweicloud.com/endpoint)对应云服务的“区域”列的值。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
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
    *  计费模式。1：包周期3：按需10：预留实例此参数不携带或携带值为空时，默认查询所有计费模式下的消费记录；携带值为空串或携带值为null时，作为筛选条件。
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
    * @param int|null $chargingMode 计费模式。1：包周期3：按需10：预留实例此参数不携带或携带值为空时，默认查询所有计费模式下的消费记录；携带值为空串或携带值为null时，作为筛选条件。
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
        return $this;
    }

    /**
    * Gets billDetailType
    *  账单类型。1：消费-新购2：消费-续订3：消费-变更4：退款-退订5：消费-使用8：消费-自动续订9：调账-补偿14：消费-服务支持计划月末扣费16：调账-扣费18：消费-按月付费20：退款-变更 此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    *
    * @return int|null
    */
    public function getBillDetailType()
    {
        return $this->container['billDetailType'];
    }

    /**
    * Sets billDetailType
    *
    * @param int|null $billDetailType 账单类型。1：消费-新购2：消费-续订3：消费-变更4：退款-退订5：消费-使用8：消费-自动续订9：调账-补偿14：消费-服务支持计划月末扣费16：调账-扣费18：消费-按月付费20：退款-变更 此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    *
    * @return $this
    */
    public function setBillDetailType($billDetailType)
    {
        $this->container['billDetailType'] = $billDetailType;
        return $this;
    }

    /**
    * Gets resourceId
    *  资源标识。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId 资源标识。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets resourceName
    *  资源名称。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    *
    * @return string|null
    */
    public function getResourceName()
    {
        return $this->container['resourceName'];
    }

    /**
    * Sets resourceName
    *
    * @param string|null $resourceName 资源名称。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    *
    * @return $this
    */
    public function setResourceName($resourceName)
    {
        $this->container['resourceName'] = $resourceName;
        return $this;
    }

    /**
    * Gets tradeId
    *  订单ID或交易ID，扣费维度的唯一标识。账单类型为1，2，3，4，8时为订单ID。其它场景下为交易ID。非月末扣费：应收ID月末扣费：账单ID 此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
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
    * @param string|null $tradeId 订单ID或交易ID，扣费维度的唯一标识。账单类型为1，2，3，4，8时为订单ID。其它场景下为交易ID。非月末扣费：应收ID月末扣费：账单ID 此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    *
    * @return $this
    */
    public function setTradeId($tradeId)
    {
        $this->container['tradeId'] = $tradeId;
        return $this;
    }

    /**
    * Gets accountManagerId
    *  客户经理标识。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    *
    * @return string|null
    */
    public function getAccountManagerId()
    {
        return $this->container['accountManagerId'];
    }

    /**
    * Sets accountManagerId
    *
    * @param string|null $accountManagerId 客户经理标识。此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    *
    * @return $this
    */
    public function setAccountManagerId($accountManagerId)
    {
        $this->container['accountManagerId'] = $accountManagerId;
        return $this;
    }

    /**
    * Gets associationType
    *  子客户的关联类型：1：顾问销售2：代售 此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    *
    * @return string|null
    */
    public function getAssociationType()
    {
        return $this->container['associationType'];
    }

    /**
    * Sets associationType
    *
    * @param string|null $associationType 子客户的关联类型：1：顾问销售2：代售 此参数不携带或携带值为空时，不作为筛选条件；携带值为空串或携带值为null时，作为筛选条件。
    *
    * @return $this
    */
    public function setAssociationType($associationType)
    {
        $this->container['associationType'] = $associationType;
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
    *  每次查询的数量限制。默认值为10。
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
    * @param int|null $limit 每次查询的数量限制。默认值为10。
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
    *  云经销商ID。获取方法请参见[查询云经销商列表](https://support.huaweicloud.com/api-bpconsole/espp_00003.html)。  说明： 华为云总经销商可以查询名下所有子客户消费（包括云经销商子客户）。如果是普通经销商，那么此处可以为空。如果华为云总经销商需要查询客户在云经销商关联期间的消费，需要携带该字段；除此之外，此参数不做处理。否则只能查询该客户在与自己关联期间的消费。
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
    * @param string|null $indirectPartnerId 云经销商ID。获取方法请参见[查询云经销商列表](https://support.huaweicloud.com/api-bpconsole/espp_00003.html)。  说明： 华为云总经销商可以查询名下所有子客户消费（包括云经销商子客户）。如果是普通经销商，那么此处可以为空。如果华为云总经销商需要查询客户在云经销商关联期间的消费，需要携带该字段；除此之外，此参数不做处理。否则只能查询该客户在与自己关联期间的消费。
    *
    * @return $this
    */
    public function setIndirectPartnerId($indirectPartnerId)
    {
        $this->container['indirectPartnerId'] = $indirectPartnerId;
        return $this;
    }

    /**
    * Gets billDateBegin
    *  查询的资源消费记录的开始日期，格式为YYYY-MM-DD。此参数不携带或携带值为空时，不作为筛选条件；不支持携带值为空串。 说明： 必须和cycle（即资源的消费账期）在同一个月。
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
    * @param string|null $billDateBegin 查询的资源消费记录的开始日期，格式为YYYY-MM-DD。此参数不携带或携带值为空时，不作为筛选条件；不支持携带值为空串。 说明： 必须和cycle（即资源的消费账期）在同一个月。
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
    *  查询的资源消费记录的结束日期，格式为YYYY-MM-DD。此参数不携带或携带值为空时，不作为筛选条件；不支持携带值为空串。 说明： 必须和cycle（即资源的消费账期）在同一个月。bill_date_begin和bill_date_end两个参数必须同时出现，否则仅按照cycle（即资源的消费账期）进行查询。
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
    * @param string|null $billDateEnd 查询的资源消费记录的结束日期，格式为YYYY-MM-DD。此参数不携带或携带值为空时，不作为筛选条件；不支持携带值为空串。 说明： 必须和cycle（即资源的消费账期）在同一个月。bill_date_begin和bill_date_end两个参数必须同时出现，否则仅按照cycle（即资源的消费账期）进行查询。
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

