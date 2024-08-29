<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryResRecordsDetailReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryResRecordsDetailReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cycle  查询的资源详单所在账期，东八区时间，格式为YYYY-MM。 示例：2019-01。  说明： 不支持2019年1月份之前的资源详单。
    * cloudServiceType  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。 此参数不携带或携带值为空串或携带值为null时，不作为筛选条件。
    * resourceType  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。 此参数不携带或携带值为空串或携带值为null时，不作为筛选条件。
    * region  云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。 此参数不携带或携带值为空串或携带值为null时，不作为筛选条件。
    * resInstanceId  资源实例ID。 此参数不携带或携带值为空串或携带值为null时，不作为筛选条件。
    * chargeMode  计费模式。 1 : 包年/包月3：按需10：预留实例11：节省计划 此参数不携带或者携带值为null时，返回所有计费模式的资源详单数据记录。
    * billType  账单类型： 1：消费-新购2：消费-续订3：消费-变更4：退款-退订5：消费-使用8：消费-自动续订9：调账-补偿14：消费-服务支持计划月末扣费16：调账-扣费18：消费-按月付费20：退款-变更23：消费-节省计划抵扣24：退款-包年/包月转按需 此参数不携带或者携带值为null时，返回所有账单类型的资源详单数据记录。
    * enterpriseProjectId  企业项目标识（企业项目ID）。 default项目对应ID：0未归集（表示该云服务不支持企业项目管理能力）项目对应ID：null其余项目对应ID获取方法请参见[如何获取企业项目ID](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0126101490.html)。此参数不携带或携带值为空串或携带值为null时，不作为筛选条件。
    * includeZeroRecord  返回是否包含应付金额为0的记录。 true: 包含false: 不包含 此参数不携带或携带值为空串或携带值为null时，不作为筛选条件。
    * offset  偏移量，从0开始。默认值为0。  说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。 例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  页面大小。默认值为10。
    * method  查询方式。 oneself：客户自己sub_customer：企业子客户all：客户自己和企业子客户 此参数不携带或携带值为空串或携带值为null时，默认值为“all”，如果没有企业子客户，all的时候也是查询客户自己的数据。  说明： 若需要查询财务独立企业子的账单信息，前提是子账号已经接受了企业主账号的“允许查看子账号消费信息”的申请。申请方法见“变更子账号权限”。
    * subCustomerId  企业子账号ID。  说明： 如果method取值不为sub_customer，则该参数无效。如果method取值为sub_customer，则该参数不能为空。
    * statisticType  统计类型。默认值为1。 1：按账期2：按天
    * queryType  查询类型。默认值为BILLCYCLE。 BILLCYCLE：按月DAILY：按天仅当statistic_type=2时，支持传递query_type=DAILY。该参数不携带或携带值为null或携带为空串时，取默认值BILLCYCLE。
    * billCycleBegin  账期开始时间。格式为YYYY-MM-DD。 仅当query_type=DAILY时，必须传递账期开始时间。该参数不携带或携带值为null或携带为空串时，不作为筛选条件。
    * billCycleEnd  账期结束时间。格式为YYYY-MM-DD。 仅当query_type=DAILY时，必须传递账期结束时间。该参数不携带或携带值为null或携带为空串时，不作为筛选条件。
    * payerAccountId  |参数名称：支付账号ID。| |参数的约束及描述：普通客户、财务独立企业子客户查询消费记录，只能查询到客户自己的消费记录，该参数不携带或携带为自身ID时，查询的都只是自身的消费记录； 企业主客户查询消费记录，不携带时，查询的是自身的、财务托管企业子、财务独立企业子的消费记录；入参自身ID时，查询的是自身的、财务托管企业子的消费记录；也可入参其名下财务独立企业子的客户ID，只查询该财务独立企业子的消费记录； 财务托管企业子查询消费记录，入参自身ID时，查询的是未与企业主关联时的消费记录；入参企业主客户ID时，查询的是与企业主关联后的消费记录；不携带时查询以上全部消费记录|
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cycle' => 'string',
            'cloudServiceType' => 'string',
            'resourceType' => 'string',
            'region' => 'string',
            'resInstanceId' => 'string',
            'chargeMode' => 'int',
            'billType' => 'int',
            'enterpriseProjectId' => 'string',
            'includeZeroRecord' => 'bool',
            'offset' => 'int',
            'limit' => 'int',
            'method' => 'string',
            'subCustomerId' => 'string',
            'statisticType' => 'int',
            'queryType' => 'string',
            'billCycleBegin' => 'string',
            'billCycleEnd' => 'string',
            'payerAccountId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cycle  查询的资源详单所在账期，东八区时间，格式为YYYY-MM。 示例：2019-01。  说明： 不支持2019年1月份之前的资源详单。
    * cloudServiceType  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。 此参数不携带或携带值为空串或携带值为null时，不作为筛选条件。
    * resourceType  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。 此参数不携带或携带值为空串或携带值为null时，不作为筛选条件。
    * region  云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。 此参数不携带或携带值为空串或携带值为null时，不作为筛选条件。
    * resInstanceId  资源实例ID。 此参数不携带或携带值为空串或携带值为null时，不作为筛选条件。
    * chargeMode  计费模式。 1 : 包年/包月3：按需10：预留实例11：节省计划 此参数不携带或者携带值为null时，返回所有计费模式的资源详单数据记录。
    * billType  账单类型： 1：消费-新购2：消费-续订3：消费-变更4：退款-退订5：消费-使用8：消费-自动续订9：调账-补偿14：消费-服务支持计划月末扣费16：调账-扣费18：消费-按月付费20：退款-变更23：消费-节省计划抵扣24：退款-包年/包月转按需 此参数不携带或者携带值为null时，返回所有账单类型的资源详单数据记录。
    * enterpriseProjectId  企业项目标识（企业项目ID）。 default项目对应ID：0未归集（表示该云服务不支持企业项目管理能力）项目对应ID：null其余项目对应ID获取方法请参见[如何获取企业项目ID](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0126101490.html)。此参数不携带或携带值为空串或携带值为null时，不作为筛选条件。
    * includeZeroRecord  返回是否包含应付金额为0的记录。 true: 包含false: 不包含 此参数不携带或携带值为空串或携带值为null时，不作为筛选条件。
    * offset  偏移量，从0开始。默认值为0。  说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。 例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  页面大小。默认值为10。
    * method  查询方式。 oneself：客户自己sub_customer：企业子客户all：客户自己和企业子客户 此参数不携带或携带值为空串或携带值为null时，默认值为“all”，如果没有企业子客户，all的时候也是查询客户自己的数据。  说明： 若需要查询财务独立企业子的账单信息，前提是子账号已经接受了企业主账号的“允许查看子账号消费信息”的申请。申请方法见“变更子账号权限”。
    * subCustomerId  企业子账号ID。  说明： 如果method取值不为sub_customer，则该参数无效。如果method取值为sub_customer，则该参数不能为空。
    * statisticType  统计类型。默认值为1。 1：按账期2：按天
    * queryType  查询类型。默认值为BILLCYCLE。 BILLCYCLE：按月DAILY：按天仅当statistic_type=2时，支持传递query_type=DAILY。该参数不携带或携带值为null或携带为空串时，取默认值BILLCYCLE。
    * billCycleBegin  账期开始时间。格式为YYYY-MM-DD。 仅当query_type=DAILY时，必须传递账期开始时间。该参数不携带或携带值为null或携带为空串时，不作为筛选条件。
    * billCycleEnd  账期结束时间。格式为YYYY-MM-DD。 仅当query_type=DAILY时，必须传递账期结束时间。该参数不携带或携带值为null或携带为空串时，不作为筛选条件。
    * payerAccountId  |参数名称：支付账号ID。| |参数的约束及描述：普通客户、财务独立企业子客户查询消费记录，只能查询到客户自己的消费记录，该参数不携带或携带为自身ID时，查询的都只是自身的消费记录； 企业主客户查询消费记录，不携带时，查询的是自身的、财务托管企业子、财务独立企业子的消费记录；入参自身ID时，查询的是自身的、财务托管企业子的消费记录；也可入参其名下财务独立企业子的客户ID，只查询该财务独立企业子的消费记录； 财务托管企业子查询消费记录，入参自身ID时，查询的是未与企业主关联时的消费记录；入参企业主客户ID时，查询的是与企业主关联后的消费记录；不携带时查询以上全部消费记录|
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cycle' => null,
        'cloudServiceType' => null,
        'resourceType' => null,
        'region' => null,
        'resInstanceId' => null,
        'chargeMode' => 'int32',
        'billType' => 'int32',
        'enterpriseProjectId' => null,
        'includeZeroRecord' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'method' => null,
        'subCustomerId' => null,
        'statisticType' => 'int32',
        'queryType' => null,
        'billCycleBegin' => null,
        'billCycleEnd' => null,
        'payerAccountId' => null
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
    * cycle  查询的资源详单所在账期，东八区时间，格式为YYYY-MM。 示例：2019-01。  说明： 不支持2019年1月份之前的资源详单。
    * cloudServiceType  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。 此参数不携带或携带值为空串或携带值为null时，不作为筛选条件。
    * resourceType  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。 此参数不携带或携带值为空串或携带值为null时，不作为筛选条件。
    * region  云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。 此参数不携带或携带值为空串或携带值为null时，不作为筛选条件。
    * resInstanceId  资源实例ID。 此参数不携带或携带值为空串或携带值为null时，不作为筛选条件。
    * chargeMode  计费模式。 1 : 包年/包月3：按需10：预留实例11：节省计划 此参数不携带或者携带值为null时，返回所有计费模式的资源详单数据记录。
    * billType  账单类型： 1：消费-新购2：消费-续订3：消费-变更4：退款-退订5：消费-使用8：消费-自动续订9：调账-补偿14：消费-服务支持计划月末扣费16：调账-扣费18：消费-按月付费20：退款-变更23：消费-节省计划抵扣24：退款-包年/包月转按需 此参数不携带或者携带值为null时，返回所有账单类型的资源详单数据记录。
    * enterpriseProjectId  企业项目标识（企业项目ID）。 default项目对应ID：0未归集（表示该云服务不支持企业项目管理能力）项目对应ID：null其余项目对应ID获取方法请参见[如何获取企业项目ID](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0126101490.html)。此参数不携带或携带值为空串或携带值为null时，不作为筛选条件。
    * includeZeroRecord  返回是否包含应付金额为0的记录。 true: 包含false: 不包含 此参数不携带或携带值为空串或携带值为null时，不作为筛选条件。
    * offset  偏移量，从0开始。默认值为0。  说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。 例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  页面大小。默认值为10。
    * method  查询方式。 oneself：客户自己sub_customer：企业子客户all：客户自己和企业子客户 此参数不携带或携带值为空串或携带值为null时，默认值为“all”，如果没有企业子客户，all的时候也是查询客户自己的数据。  说明： 若需要查询财务独立企业子的账单信息，前提是子账号已经接受了企业主账号的“允许查看子账号消费信息”的申请。申请方法见“变更子账号权限”。
    * subCustomerId  企业子账号ID。  说明： 如果method取值不为sub_customer，则该参数无效。如果method取值为sub_customer，则该参数不能为空。
    * statisticType  统计类型。默认值为1。 1：按账期2：按天
    * queryType  查询类型。默认值为BILLCYCLE。 BILLCYCLE：按月DAILY：按天仅当statistic_type=2时，支持传递query_type=DAILY。该参数不携带或携带值为null或携带为空串时，取默认值BILLCYCLE。
    * billCycleBegin  账期开始时间。格式为YYYY-MM-DD。 仅当query_type=DAILY时，必须传递账期开始时间。该参数不携带或携带值为null或携带为空串时，不作为筛选条件。
    * billCycleEnd  账期结束时间。格式为YYYY-MM-DD。 仅当query_type=DAILY时，必须传递账期结束时间。该参数不携带或携带值为null或携带为空串时，不作为筛选条件。
    * payerAccountId  |参数名称：支付账号ID。| |参数的约束及描述：普通客户、财务独立企业子客户查询消费记录，只能查询到客户自己的消费记录，该参数不携带或携带为自身ID时，查询的都只是自身的消费记录； 企业主客户查询消费记录，不携带时，查询的是自身的、财务托管企业子、财务独立企业子的消费记录；入参自身ID时，查询的是自身的、财务托管企业子的消费记录；也可入参其名下财务独立企业子的客户ID，只查询该财务独立企业子的消费记录； 财务托管企业子查询消费记录，入参自身ID时，查询的是未与企业主关联时的消费记录；入参企业主客户ID时，查询的是与企业主关联后的消费记录；不携带时查询以上全部消费记录|
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cycle' => 'cycle',
            'cloudServiceType' => 'cloud_service_type',
            'resourceType' => 'resource_type',
            'region' => 'region',
            'resInstanceId' => 'res_instance_id',
            'chargeMode' => 'charge_mode',
            'billType' => 'bill_type',
            'enterpriseProjectId' => 'enterprise_project_id',
            'includeZeroRecord' => 'include_zero_record',
            'offset' => 'offset',
            'limit' => 'limit',
            'method' => 'method',
            'subCustomerId' => 'sub_customer_id',
            'statisticType' => 'statistic_type',
            'queryType' => 'query_type',
            'billCycleBegin' => 'bill_cycle_begin',
            'billCycleEnd' => 'bill_cycle_end',
            'payerAccountId' => 'payer_account_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cycle  查询的资源详单所在账期，东八区时间，格式为YYYY-MM。 示例：2019-01。  说明： 不支持2019年1月份之前的资源详单。
    * cloudServiceType  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。 此参数不携带或携带值为空串或携带值为null时，不作为筛选条件。
    * resourceType  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。 此参数不携带或携带值为空串或携带值为null时，不作为筛选条件。
    * region  云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。 此参数不携带或携带值为空串或携带值为null时，不作为筛选条件。
    * resInstanceId  资源实例ID。 此参数不携带或携带值为空串或携带值为null时，不作为筛选条件。
    * chargeMode  计费模式。 1 : 包年/包月3：按需10：预留实例11：节省计划 此参数不携带或者携带值为null时，返回所有计费模式的资源详单数据记录。
    * billType  账单类型： 1：消费-新购2：消费-续订3：消费-变更4：退款-退订5：消费-使用8：消费-自动续订9：调账-补偿14：消费-服务支持计划月末扣费16：调账-扣费18：消费-按月付费20：退款-变更23：消费-节省计划抵扣24：退款-包年/包月转按需 此参数不携带或者携带值为null时，返回所有账单类型的资源详单数据记录。
    * enterpriseProjectId  企业项目标识（企业项目ID）。 default项目对应ID：0未归集（表示该云服务不支持企业项目管理能力）项目对应ID：null其余项目对应ID获取方法请参见[如何获取企业项目ID](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0126101490.html)。此参数不携带或携带值为空串或携带值为null时，不作为筛选条件。
    * includeZeroRecord  返回是否包含应付金额为0的记录。 true: 包含false: 不包含 此参数不携带或携带值为空串或携带值为null时，不作为筛选条件。
    * offset  偏移量，从0开始。默认值为0。  说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。 例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  页面大小。默认值为10。
    * method  查询方式。 oneself：客户自己sub_customer：企业子客户all：客户自己和企业子客户 此参数不携带或携带值为空串或携带值为null时，默认值为“all”，如果没有企业子客户，all的时候也是查询客户自己的数据。  说明： 若需要查询财务独立企业子的账单信息，前提是子账号已经接受了企业主账号的“允许查看子账号消费信息”的申请。申请方法见“变更子账号权限”。
    * subCustomerId  企业子账号ID。  说明： 如果method取值不为sub_customer，则该参数无效。如果method取值为sub_customer，则该参数不能为空。
    * statisticType  统计类型。默认值为1。 1：按账期2：按天
    * queryType  查询类型。默认值为BILLCYCLE。 BILLCYCLE：按月DAILY：按天仅当statistic_type=2时，支持传递query_type=DAILY。该参数不携带或携带值为null或携带为空串时，取默认值BILLCYCLE。
    * billCycleBegin  账期开始时间。格式为YYYY-MM-DD。 仅当query_type=DAILY时，必须传递账期开始时间。该参数不携带或携带值为null或携带为空串时，不作为筛选条件。
    * billCycleEnd  账期结束时间。格式为YYYY-MM-DD。 仅当query_type=DAILY时，必须传递账期结束时间。该参数不携带或携带值为null或携带为空串时，不作为筛选条件。
    * payerAccountId  |参数名称：支付账号ID。| |参数的约束及描述：普通客户、财务独立企业子客户查询消费记录，只能查询到客户自己的消费记录，该参数不携带或携带为自身ID时，查询的都只是自身的消费记录； 企业主客户查询消费记录，不携带时，查询的是自身的、财务托管企业子、财务独立企业子的消费记录；入参自身ID时，查询的是自身的、财务托管企业子的消费记录；也可入参其名下财务独立企业子的客户ID，只查询该财务独立企业子的消费记录； 财务托管企业子查询消费记录，入参自身ID时，查询的是未与企业主关联时的消费记录；入参企业主客户ID时，查询的是与企业主关联后的消费记录；不携带时查询以上全部消费记录|
    *
    * @var string[]
    */
    protected static $setters = [
            'cycle' => 'setCycle',
            'cloudServiceType' => 'setCloudServiceType',
            'resourceType' => 'setResourceType',
            'region' => 'setRegion',
            'resInstanceId' => 'setResInstanceId',
            'chargeMode' => 'setChargeMode',
            'billType' => 'setBillType',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'includeZeroRecord' => 'setIncludeZeroRecord',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'method' => 'setMethod',
            'subCustomerId' => 'setSubCustomerId',
            'statisticType' => 'setStatisticType',
            'queryType' => 'setQueryType',
            'billCycleBegin' => 'setBillCycleBegin',
            'billCycleEnd' => 'setBillCycleEnd',
            'payerAccountId' => 'setPayerAccountId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cycle  查询的资源详单所在账期，东八区时间，格式为YYYY-MM。 示例：2019-01。  说明： 不支持2019年1月份之前的资源详单。
    * cloudServiceType  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。 此参数不携带或携带值为空串或携带值为null时，不作为筛选条件。
    * resourceType  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。 此参数不携带或携带值为空串或携带值为null时，不作为筛选条件。
    * region  云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。 此参数不携带或携带值为空串或携带值为null时，不作为筛选条件。
    * resInstanceId  资源实例ID。 此参数不携带或携带值为空串或携带值为null时，不作为筛选条件。
    * chargeMode  计费模式。 1 : 包年/包月3：按需10：预留实例11：节省计划 此参数不携带或者携带值为null时，返回所有计费模式的资源详单数据记录。
    * billType  账单类型： 1：消费-新购2：消费-续订3：消费-变更4：退款-退订5：消费-使用8：消费-自动续订9：调账-补偿14：消费-服务支持计划月末扣费16：调账-扣费18：消费-按月付费20：退款-变更23：消费-节省计划抵扣24：退款-包年/包月转按需 此参数不携带或者携带值为null时，返回所有账单类型的资源详单数据记录。
    * enterpriseProjectId  企业项目标识（企业项目ID）。 default项目对应ID：0未归集（表示该云服务不支持企业项目管理能力）项目对应ID：null其余项目对应ID获取方法请参见[如何获取企业项目ID](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0126101490.html)。此参数不携带或携带值为空串或携带值为null时，不作为筛选条件。
    * includeZeroRecord  返回是否包含应付金额为0的记录。 true: 包含false: 不包含 此参数不携带或携带值为空串或携带值为null时，不作为筛选条件。
    * offset  偏移量，从0开始。默认值为0。  说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。 例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  页面大小。默认值为10。
    * method  查询方式。 oneself：客户自己sub_customer：企业子客户all：客户自己和企业子客户 此参数不携带或携带值为空串或携带值为null时，默认值为“all”，如果没有企业子客户，all的时候也是查询客户自己的数据。  说明： 若需要查询财务独立企业子的账单信息，前提是子账号已经接受了企业主账号的“允许查看子账号消费信息”的申请。申请方法见“变更子账号权限”。
    * subCustomerId  企业子账号ID。  说明： 如果method取值不为sub_customer，则该参数无效。如果method取值为sub_customer，则该参数不能为空。
    * statisticType  统计类型。默认值为1。 1：按账期2：按天
    * queryType  查询类型。默认值为BILLCYCLE。 BILLCYCLE：按月DAILY：按天仅当statistic_type=2时，支持传递query_type=DAILY。该参数不携带或携带值为null或携带为空串时，取默认值BILLCYCLE。
    * billCycleBegin  账期开始时间。格式为YYYY-MM-DD。 仅当query_type=DAILY时，必须传递账期开始时间。该参数不携带或携带值为null或携带为空串时，不作为筛选条件。
    * billCycleEnd  账期结束时间。格式为YYYY-MM-DD。 仅当query_type=DAILY时，必须传递账期结束时间。该参数不携带或携带值为null或携带为空串时，不作为筛选条件。
    * payerAccountId  |参数名称：支付账号ID。| |参数的约束及描述：普通客户、财务独立企业子客户查询消费记录，只能查询到客户自己的消费记录，该参数不携带或携带为自身ID时，查询的都只是自身的消费记录； 企业主客户查询消费记录，不携带时，查询的是自身的、财务托管企业子、财务独立企业子的消费记录；入参自身ID时，查询的是自身的、财务托管企业子的消费记录；也可入参其名下财务独立企业子的客户ID，只查询该财务独立企业子的消费记录； 财务托管企业子查询消费记录，入参自身ID时，查询的是未与企业主关联时的消费记录；入参企业主客户ID时，查询的是与企业主关联后的消费记录；不携带时查询以上全部消费记录|
    *
    * @var string[]
    */
    protected static $getters = [
            'cycle' => 'getCycle',
            'cloudServiceType' => 'getCloudServiceType',
            'resourceType' => 'getResourceType',
            'region' => 'getRegion',
            'resInstanceId' => 'getResInstanceId',
            'chargeMode' => 'getChargeMode',
            'billType' => 'getBillType',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'includeZeroRecord' => 'getIncludeZeroRecord',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'method' => 'getMethod',
            'subCustomerId' => 'getSubCustomerId',
            'statisticType' => 'getStatisticType',
            'queryType' => 'getQueryType',
            'billCycleBegin' => 'getBillCycleBegin',
            'billCycleEnd' => 'getBillCycleEnd',
            'payerAccountId' => 'getPayerAccountId'
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
        $this->container['cycle'] = isset($data['cycle']) ? $data['cycle'] : null;
        $this->container['cloudServiceType'] = isset($data['cloudServiceType']) ? $data['cloudServiceType'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['resInstanceId'] = isset($data['resInstanceId']) ? $data['resInstanceId'] : null;
        $this->container['chargeMode'] = isset($data['chargeMode']) ? $data['chargeMode'] : null;
        $this->container['billType'] = isset($data['billType']) ? $data['billType'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['includeZeroRecord'] = isset($data['includeZeroRecord']) ? $data['includeZeroRecord'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['method'] = isset($data['method']) ? $data['method'] : null;
        $this->container['subCustomerId'] = isset($data['subCustomerId']) ? $data['subCustomerId'] : null;
        $this->container['statisticType'] = isset($data['statisticType']) ? $data['statisticType'] : null;
        $this->container['queryType'] = isset($data['queryType']) ? $data['queryType'] : null;
        $this->container['billCycleBegin'] = isset($data['billCycleBegin']) ? $data['billCycleBegin'] : null;
        $this->container['billCycleEnd'] = isset($data['billCycleEnd']) ? $data['billCycleEnd'] : null;
        $this->container['payerAccountId'] = isset($data['payerAccountId']) ? $data['payerAccountId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['cycle'] === null) {
            $invalidProperties[] = "'cycle' can't be null";
        }
            if ((mb_strlen($this->container['cycle']) > 8)) {
                $invalidProperties[] = "invalid value for 'cycle', the character length must be smaller than or equal to 8.";
            }
            if ((mb_strlen($this->container['cycle']) < 1)) {
                $invalidProperties[] = "invalid value for 'cycle', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['cloudServiceType']) && (mb_strlen($this->container['cloudServiceType']) > 64)) {
                $invalidProperties[] = "invalid value for 'cloudServiceType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['cloudServiceType']) && (mb_strlen($this->container['cloudServiceType']) < 0)) {
                $invalidProperties[] = "invalid value for 'cloudServiceType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resourceType']) && (mb_strlen($this->container['resourceType']) > 64)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['resourceType']) && (mb_strlen($this->container['resourceType']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) > 64)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) < 0)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resInstanceId']) && (mb_strlen($this->container['resInstanceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'resInstanceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['resInstanceId']) && (mb_strlen($this->container['resInstanceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'resInstanceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['chargeMode']) && ($this->container['chargeMode'] > 11)) {
                $invalidProperties[] = "invalid value for 'chargeMode', must be smaller than or equal to 11.";
            }
            if (!is_null($this->container['chargeMode']) && ($this->container['chargeMode'] < 1)) {
                $invalidProperties[] = "invalid value for 'chargeMode', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['billType']) && ($this->container['billType'] > 127)) {
                $invalidProperties[] = "invalid value for 'billType', must be smaller than or equal to 127.";
            }
            if (!is_null($this->container['billType']) && ($this->container['billType'] < 1)) {
                $invalidProperties[] = "invalid value for 'billType', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 0.";
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
            if (!is_null($this->container['method']) && (mb_strlen($this->container['method']) > 64)) {
                $invalidProperties[] = "invalid value for 'method', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['method']) && (mb_strlen($this->container['method']) < 0)) {
                $invalidProperties[] = "invalid value for 'method', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['subCustomerId']) && (mb_strlen($this->container['subCustomerId']) > 64)) {
                $invalidProperties[] = "invalid value for 'subCustomerId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['subCustomerId']) && (mb_strlen($this->container['subCustomerId']) < 0)) {
                $invalidProperties[] = "invalid value for 'subCustomerId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['statisticType']) && ($this->container['statisticType'] > 2)) {
                $invalidProperties[] = "invalid value for 'statisticType', must be smaller than or equal to 2.";
            }
            if (!is_null($this->container['statisticType']) && ($this->container['statisticType'] < 1)) {
                $invalidProperties[] = "invalid value for 'statisticType', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['queryType']) && (mb_strlen($this->container['queryType']) > 9)) {
                $invalidProperties[] = "invalid value for 'queryType', the character length must be smaller than or equal to 9.";
            }
            if (!is_null($this->container['queryType']) && (mb_strlen($this->container['queryType']) < 0)) {
                $invalidProperties[] = "invalid value for 'queryType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['billCycleBegin']) && (mb_strlen($this->container['billCycleBegin']) > 10)) {
                $invalidProperties[] = "invalid value for 'billCycleBegin', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['billCycleBegin']) && (mb_strlen($this->container['billCycleBegin']) < 0)) {
                $invalidProperties[] = "invalid value for 'billCycleBegin', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['billCycleEnd']) && (mb_strlen($this->container['billCycleEnd']) > 10)) {
                $invalidProperties[] = "invalid value for 'billCycleEnd', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['billCycleEnd']) && (mb_strlen($this->container['billCycleEnd']) < 0)) {
                $invalidProperties[] = "invalid value for 'billCycleEnd', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['payerAccountId']) && (mb_strlen($this->container['payerAccountId']) > 64)) {
                $invalidProperties[] = "invalid value for 'payerAccountId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['payerAccountId']) && (mb_strlen($this->container['payerAccountId']) < 1)) {
                $invalidProperties[] = "invalid value for 'payerAccountId', the character length must be bigger than or equal to 1.";
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
    * Gets cycle
    *  查询的资源详单所在账期，东八区时间，格式为YYYY-MM。 示例：2019-01。  说明： 不支持2019年1月份之前的资源详单。
    *
    * @return string
    */
    public function getCycle()
    {
        return $this->container['cycle'];
    }

    /**
    * Sets cycle
    *
    * @param string $cycle 查询的资源详单所在账期，东八区时间，格式为YYYY-MM。 示例：2019-01。  说明： 不支持2019年1月份之前的资源详单。
    *
    * @return $this
    */
    public function setCycle($cycle)
    {
        $this->container['cycle'] = $cycle;
        return $this;
    }

    /**
    * Gets cloudServiceType
    *  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。 此参数不携带或携带值为空串或携带值为null时，不作为筛选条件。
    *
    * @return string|null
    */
    public function getCloudServiceType()
    {
        return $this->container['cloudServiceType'];
    }

    /**
    * Sets cloudServiceType
    *
    * @param string|null $cloudServiceType 云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。 此参数不携带或携带值为空串或携带值为null时，不作为筛选条件。
    *
    * @return $this
    */
    public function setCloudServiceType($cloudServiceType)
    {
        $this->container['cloudServiceType'] = $cloudServiceType;
        return $this;
    }

    /**
    * Gets resourceType
    *  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。 此参数不携带或携带值为空串或携带值为null时，不作为筛选条件。
    *
    * @return string|null
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string|null $resourceType 资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。 此参数不携带或携带值为空串或携带值为null时，不作为筛选条件。
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets region
    *  云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。 此参数不携带或携带值为空串或携带值为null时，不作为筛选条件。
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region 云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。 此参数不携带或携带值为空串或携带值为null时，不作为筛选条件。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets resInstanceId
    *  资源实例ID。 此参数不携带或携带值为空串或携带值为null时，不作为筛选条件。
    *
    * @return string|null
    */
    public function getResInstanceId()
    {
        return $this->container['resInstanceId'];
    }

    /**
    * Sets resInstanceId
    *
    * @param string|null $resInstanceId 资源实例ID。 此参数不携带或携带值为空串或携带值为null时，不作为筛选条件。
    *
    * @return $this
    */
    public function setResInstanceId($resInstanceId)
    {
        $this->container['resInstanceId'] = $resInstanceId;
        return $this;
    }

    /**
    * Gets chargeMode
    *  计费模式。 1 : 包年/包月3：按需10：预留实例11：节省计划 此参数不携带或者携带值为null时，返回所有计费模式的资源详单数据记录。
    *
    * @return int|null
    */
    public function getChargeMode()
    {
        return $this->container['chargeMode'];
    }

    /**
    * Sets chargeMode
    *
    * @param int|null $chargeMode 计费模式。 1 : 包年/包月3：按需10：预留实例11：节省计划 此参数不携带或者携带值为null时，返回所有计费模式的资源详单数据记录。
    *
    * @return $this
    */
    public function setChargeMode($chargeMode)
    {
        $this->container['chargeMode'] = $chargeMode;
        return $this;
    }

    /**
    * Gets billType
    *  账单类型： 1：消费-新购2：消费-续订3：消费-变更4：退款-退订5：消费-使用8：消费-自动续订9：调账-补偿14：消费-服务支持计划月末扣费16：调账-扣费18：消费-按月付费20：退款-变更23：消费-节省计划抵扣24：退款-包年/包月转按需 此参数不携带或者携带值为null时，返回所有账单类型的资源详单数据记录。
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
    * @param int|null $billType 账单类型： 1：消费-新购2：消费-续订3：消费-变更4：退款-退订5：消费-使用8：消费-自动续订9：调账-补偿14：消费-服务支持计划月末扣费16：调账-扣费18：消费-按月付费20：退款-变更23：消费-节省计划抵扣24：退款-包年/包月转按需 此参数不携带或者携带值为null时，返回所有账单类型的资源详单数据记录。
    *
    * @return $this
    */
    public function setBillType($billType)
    {
        $this->container['billType'] = $billType;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目标识（企业项目ID）。 default项目对应ID：0未归集（表示该云服务不支持企业项目管理能力）项目对应ID：null其余项目对应ID获取方法请参见[如何获取企业项目ID](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0126101490.html)。此参数不携带或携带值为空串或携带值为null时，不作为筛选条件。
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
    * @param string|null $enterpriseProjectId 企业项目标识（企业项目ID）。 default项目对应ID：0未归集（表示该云服务不支持企业项目管理能力）项目对应ID：null其余项目对应ID获取方法请参见[如何获取企业项目ID](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0126101490.html)。此参数不携带或携带值为空串或携带值为null时，不作为筛选条件。
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
    *  返回是否包含应付金额为0的记录。 true: 包含false: 不包含 此参数不携带或携带值为空串或携带值为null时，不作为筛选条件。
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
    * @param bool|null $includeZeroRecord 返回是否包含应付金额为0的记录。 true: 包含false: 不包含 此参数不携带或携带值为空串或携带值为null时，不作为筛选条件。
    *
    * @return $this
    */
    public function setIncludeZeroRecord($includeZeroRecord)
    {
        $this->container['includeZeroRecord'] = $includeZeroRecord;
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
    * Gets method
    *  查询方式。 oneself：客户自己sub_customer：企业子客户all：客户自己和企业子客户 此参数不携带或携带值为空串或携带值为null时，默认值为“all”，如果没有企业子客户，all的时候也是查询客户自己的数据。  说明： 若需要查询财务独立企业子的账单信息，前提是子账号已经接受了企业主账号的“允许查看子账号消费信息”的申请。申请方法见“变更子账号权限”。
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
    * @param string|null $method 查询方式。 oneself：客户自己sub_customer：企业子客户all：客户自己和企业子客户 此参数不携带或携带值为空串或携带值为null时，默认值为“all”，如果没有企业子客户，all的时候也是查询客户自己的数据。  说明： 若需要查询财务独立企业子的账单信息，前提是子账号已经接受了企业主账号的“允许查看子账号消费信息”的申请。申请方法见“变更子账号权限”。
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
    *  企业子账号ID。  说明： 如果method取值不为sub_customer，则该参数无效。如果method取值为sub_customer，则该参数不能为空。
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
    * @param string|null $subCustomerId 企业子账号ID。  说明： 如果method取值不为sub_customer，则该参数无效。如果method取值为sub_customer，则该参数不能为空。
    *
    * @return $this
    */
    public function setSubCustomerId($subCustomerId)
    {
        $this->container['subCustomerId'] = $subCustomerId;
        return $this;
    }

    /**
    * Gets statisticType
    *  统计类型。默认值为1。 1：按账期2：按天
    *
    * @return int|null
    */
    public function getStatisticType()
    {
        return $this->container['statisticType'];
    }

    /**
    * Sets statisticType
    *
    * @param int|null $statisticType 统计类型。默认值为1。 1：按账期2：按天
    *
    * @return $this
    */
    public function setStatisticType($statisticType)
    {
        $this->container['statisticType'] = $statisticType;
        return $this;
    }

    /**
    * Gets queryType
    *  查询类型。默认值为BILLCYCLE。 BILLCYCLE：按月DAILY：按天仅当statistic_type=2时，支持传递query_type=DAILY。该参数不携带或携带值为null或携带为空串时，取默认值BILLCYCLE。
    *
    * @return string|null
    */
    public function getQueryType()
    {
        return $this->container['queryType'];
    }

    /**
    * Sets queryType
    *
    * @param string|null $queryType 查询类型。默认值为BILLCYCLE。 BILLCYCLE：按月DAILY：按天仅当statistic_type=2时，支持传递query_type=DAILY。该参数不携带或携带值为null或携带为空串时，取默认值BILLCYCLE。
    *
    * @return $this
    */
    public function setQueryType($queryType)
    {
        $this->container['queryType'] = $queryType;
        return $this;
    }

    /**
    * Gets billCycleBegin
    *  账期开始时间。格式为YYYY-MM-DD。 仅当query_type=DAILY时，必须传递账期开始时间。该参数不携带或携带值为null或携带为空串时，不作为筛选条件。
    *
    * @return string|null
    */
    public function getBillCycleBegin()
    {
        return $this->container['billCycleBegin'];
    }

    /**
    * Sets billCycleBegin
    *
    * @param string|null $billCycleBegin 账期开始时间。格式为YYYY-MM-DD。 仅当query_type=DAILY时，必须传递账期开始时间。该参数不携带或携带值为null或携带为空串时，不作为筛选条件。
    *
    * @return $this
    */
    public function setBillCycleBegin($billCycleBegin)
    {
        $this->container['billCycleBegin'] = $billCycleBegin;
        return $this;
    }

    /**
    * Gets billCycleEnd
    *  账期结束时间。格式为YYYY-MM-DD。 仅当query_type=DAILY时，必须传递账期结束时间。该参数不携带或携带值为null或携带为空串时，不作为筛选条件。
    *
    * @return string|null
    */
    public function getBillCycleEnd()
    {
        return $this->container['billCycleEnd'];
    }

    /**
    * Sets billCycleEnd
    *
    * @param string|null $billCycleEnd 账期结束时间。格式为YYYY-MM-DD。 仅当query_type=DAILY时，必须传递账期结束时间。该参数不携带或携带值为null或携带为空串时，不作为筛选条件。
    *
    * @return $this
    */
    public function setBillCycleEnd($billCycleEnd)
    {
        $this->container['billCycleEnd'] = $billCycleEnd;
        return $this;
    }

    /**
    * Gets payerAccountId
    *  |参数名称：支付账号ID。| |参数的约束及描述：普通客户、财务独立企业子客户查询消费记录，只能查询到客户自己的消费记录，该参数不携带或携带为自身ID时，查询的都只是自身的消费记录； 企业主客户查询消费记录，不携带时，查询的是自身的、财务托管企业子、财务独立企业子的消费记录；入参自身ID时，查询的是自身的、财务托管企业子的消费记录；也可入参其名下财务独立企业子的客户ID，只查询该财务独立企业子的消费记录； 财务托管企业子查询消费记录，入参自身ID时，查询的是未与企业主关联时的消费记录；入参企业主客户ID时，查询的是与企业主关联后的消费记录；不携带时查询以上全部消费记录|
    *
    * @return string|null
    */
    public function getPayerAccountId()
    {
        return $this->container['payerAccountId'];
    }

    /**
    * Sets payerAccountId
    *
    * @param string|null $payerAccountId |参数名称：支付账号ID。| |参数的约束及描述：普通客户、财务独立企业子客户查询消费记录，只能查询到客户自己的消费记录，该参数不携带或携带为自身ID时，查询的都只是自身的消费记录； 企业主客户查询消费记录，不携带时，查询的是自身的、财务托管企业子、财务独立企业子的消费记录；入参自身ID时，查询的是自身的、财务托管企业子的消费记录；也可入参其名下财务独立企业子的客户ID，只查询该财务独立企业子的消费记录； 财务托管企业子查询消费记录，入参自身ID时，查询的是未与企业主关联时的消费记录；入参企业主客户ID时，查询的是与企业主关联后的消费记录；不携带时查询以上全部消费记录|
    *
    * @return $this
    */
    public function setPayerAccountId($payerAccountId)
    {
        $this->container['payerAccountId'] = $payerAccountId;
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

