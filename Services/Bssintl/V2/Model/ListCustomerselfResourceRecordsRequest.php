<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListCustomerselfResourceRecordsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListCustomerselfResourceRecordsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xLanguage  |参数名称：语言| |参数的约束及描述：中文：zh_CN 英文：en_US。缺省为zh_CN|
    * cycle  |参数名称：开始时间，格式：yyyy-MM| |参数的约束及描述：|
    * cloudServiceType  |参数名称：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型云服务类型云服务类型云服务类型。| |参数的约束及描述：|
    * region  |参数名称：云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点地区和终端节点对应云服务的“区域”列的值。| |参数的约束及描述：|
    * chargeMode  |参数名称：支付方式。1 : 包周期；3: 按需。10: 预留实例。| |参数的约束及描述：|
    * billType  |参数名称：账单类型。1：消费-新购2：消费-续订3：消费-变更4：退款-退订5：消费-使用8：消费-自动续订9：调账-补偿12：消费-按时计费13：消费-退订手续费14：消费-服务支持计划月末扣费 15消费-税金 16：调账-扣费  17：消费-保底差额 100：退款-退订税金 101：调账-补偿税金 102：调账-扣费税金| |参数的约束及描述：|
    * offset  |参数名称：偏移量，从0开始| |参数的约束及描述：|
    * limit  |参数名称：每次查询的限制| |参数的约束及描述：|
    * resourceId  |参数名称：资源ID。| |参数的约束及描述：|
    * enterpriseProjectId  |参数名称：企业项目ID。| |参数的约束及描述：|
    * includeZeroRecord  |参数名称：返回是否包含应付金额为0的记录。| |参数的约束及描述：|
    * method  |参数名称：查询方式。oneself：自身sub_customer: 企业子客户all:自己和企业子客户| |参数的约束及描述：oneself：自身sub_customer: 企业子客户all:自己和企业子客户|
    * subCustomerId  |参数名称：企业子账号ID。| |参数的约束及描述：注意：method不等于sub_customer的时候，该参数无效，如果method等于sub_customer，该参数不能为空|
    * tradeId  |参数名称：订单ID 或 交易ID1，2，3，4，8时为订单ID，其它场景下为： 交易ID(非月末扣费：应收ID；月末扣费：账单ID)，扣费维度的唯一标识| |参数的约束及描述：|
    * billDateBegin  |参数名称：计费日期，格式为YYYY-MM-DD| |参数的约束及描述：必须和cycle，即资源的消费账期在同一个月。|
    * billDateEnd  |参数名称：计费日期，格式为YYYY-MM-DD| |参数的约束及描述：必须和cycle，即资源的消费账期在同一个月。 begin和end必须同时出现，否则忽略这两个参数。仅仅按照cycle进行查询。|
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xLanguage' => 'string',
            'cycle' => 'string',
            'cloudServiceType' => 'string',
            'region' => 'string',
            'chargeMode' => 'string',
            'billType' => 'int',
            'offset' => 'int',
            'limit' => 'int',
            'resourceId' => 'string',
            'enterpriseProjectId' => 'string',
            'includeZeroRecord' => 'bool',
            'method' => 'string',
            'subCustomerId' => 'string',
            'tradeId' => 'string',
            'billDateBegin' => 'string',
            'billDateEnd' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xLanguage  |参数名称：语言| |参数的约束及描述：中文：zh_CN 英文：en_US。缺省为zh_CN|
    * cycle  |参数名称：开始时间，格式：yyyy-MM| |参数的约束及描述：|
    * cloudServiceType  |参数名称：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型云服务类型云服务类型云服务类型。| |参数的约束及描述：|
    * region  |参数名称：云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点地区和终端节点对应云服务的“区域”列的值。| |参数的约束及描述：|
    * chargeMode  |参数名称：支付方式。1 : 包周期；3: 按需。10: 预留实例。| |参数的约束及描述：|
    * billType  |参数名称：账单类型。1：消费-新购2：消费-续订3：消费-变更4：退款-退订5：消费-使用8：消费-自动续订9：调账-补偿12：消费-按时计费13：消费-退订手续费14：消费-服务支持计划月末扣费 15消费-税金 16：调账-扣费  17：消费-保底差额 100：退款-退订税金 101：调账-补偿税金 102：调账-扣费税金| |参数的约束及描述：|
    * offset  |参数名称：偏移量，从0开始| |参数的约束及描述：|
    * limit  |参数名称：每次查询的限制| |参数的约束及描述：|
    * resourceId  |参数名称：资源ID。| |参数的约束及描述：|
    * enterpriseProjectId  |参数名称：企业项目ID。| |参数的约束及描述：|
    * includeZeroRecord  |参数名称：返回是否包含应付金额为0的记录。| |参数的约束及描述：|
    * method  |参数名称：查询方式。oneself：自身sub_customer: 企业子客户all:自己和企业子客户| |参数的约束及描述：oneself：自身sub_customer: 企业子客户all:自己和企业子客户|
    * subCustomerId  |参数名称：企业子账号ID。| |参数的约束及描述：注意：method不等于sub_customer的时候，该参数无效，如果method等于sub_customer，该参数不能为空|
    * tradeId  |参数名称：订单ID 或 交易ID1，2，3，4，8时为订单ID，其它场景下为： 交易ID(非月末扣费：应收ID；月末扣费：账单ID)，扣费维度的唯一标识| |参数的约束及描述：|
    * billDateBegin  |参数名称：计费日期，格式为YYYY-MM-DD| |参数的约束及描述：必须和cycle，即资源的消费账期在同一个月。|
    * billDateEnd  |参数名称：计费日期，格式为YYYY-MM-DD| |参数的约束及描述：必须和cycle，即资源的消费账期在同一个月。 begin和end必须同时出现，否则忽略这两个参数。仅仅按照cycle进行查询。|
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xLanguage' => null,
        'cycle' => null,
        'cloudServiceType' => null,
        'region' => null,
        'chargeMode' => null,
        'billType' => 'int32',
        'offset' => 'int32',
        'limit' => 'int32',
        'resourceId' => null,
        'enterpriseProjectId' => null,
        'includeZeroRecord' => null,
        'method' => null,
        'subCustomerId' => null,
        'tradeId' => null,
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
    * xLanguage  |参数名称：语言| |参数的约束及描述：中文：zh_CN 英文：en_US。缺省为zh_CN|
    * cycle  |参数名称：开始时间，格式：yyyy-MM| |参数的约束及描述：|
    * cloudServiceType  |参数名称：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型云服务类型云服务类型云服务类型。| |参数的约束及描述：|
    * region  |参数名称：云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点地区和终端节点对应云服务的“区域”列的值。| |参数的约束及描述：|
    * chargeMode  |参数名称：支付方式。1 : 包周期；3: 按需。10: 预留实例。| |参数的约束及描述：|
    * billType  |参数名称：账单类型。1：消费-新购2：消费-续订3：消费-变更4：退款-退订5：消费-使用8：消费-自动续订9：调账-补偿12：消费-按时计费13：消费-退订手续费14：消费-服务支持计划月末扣费 15消费-税金 16：调账-扣费  17：消费-保底差额 100：退款-退订税金 101：调账-补偿税金 102：调账-扣费税金| |参数的约束及描述：|
    * offset  |参数名称：偏移量，从0开始| |参数的约束及描述：|
    * limit  |参数名称：每次查询的限制| |参数的约束及描述：|
    * resourceId  |参数名称：资源ID。| |参数的约束及描述：|
    * enterpriseProjectId  |参数名称：企业项目ID。| |参数的约束及描述：|
    * includeZeroRecord  |参数名称：返回是否包含应付金额为0的记录。| |参数的约束及描述：|
    * method  |参数名称：查询方式。oneself：自身sub_customer: 企业子客户all:自己和企业子客户| |参数的约束及描述：oneself：自身sub_customer: 企业子客户all:自己和企业子客户|
    * subCustomerId  |参数名称：企业子账号ID。| |参数的约束及描述：注意：method不等于sub_customer的时候，该参数无效，如果method等于sub_customer，该参数不能为空|
    * tradeId  |参数名称：订单ID 或 交易ID1，2，3，4，8时为订单ID，其它场景下为： 交易ID(非月末扣费：应收ID；月末扣费：账单ID)，扣费维度的唯一标识| |参数的约束及描述：|
    * billDateBegin  |参数名称：计费日期，格式为YYYY-MM-DD| |参数的约束及描述：必须和cycle，即资源的消费账期在同一个月。|
    * billDateEnd  |参数名称：计费日期，格式为YYYY-MM-DD| |参数的约束及描述：必须和cycle，即资源的消费账期在同一个月。 begin和end必须同时出现，否则忽略这两个参数。仅仅按照cycle进行查询。|
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xLanguage' => 'X-Language',
            'cycle' => 'cycle',
            'cloudServiceType' => 'cloud_service_type',
            'region' => 'region',
            'chargeMode' => 'charge_mode',
            'billType' => 'bill_type',
            'offset' => 'offset',
            'limit' => 'limit',
            'resourceId' => 'resource_id',
            'enterpriseProjectId' => 'enterprise_project_id',
            'includeZeroRecord' => 'include_zero_record',
            'method' => 'method',
            'subCustomerId' => 'sub_customer_id',
            'tradeId' => 'trade_id',
            'billDateBegin' => 'bill_date_begin',
            'billDateEnd' => 'bill_date_end'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xLanguage  |参数名称：语言| |参数的约束及描述：中文：zh_CN 英文：en_US。缺省为zh_CN|
    * cycle  |参数名称：开始时间，格式：yyyy-MM| |参数的约束及描述：|
    * cloudServiceType  |参数名称：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型云服务类型云服务类型云服务类型。| |参数的约束及描述：|
    * region  |参数名称：云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点地区和终端节点对应云服务的“区域”列的值。| |参数的约束及描述：|
    * chargeMode  |参数名称：支付方式。1 : 包周期；3: 按需。10: 预留实例。| |参数的约束及描述：|
    * billType  |参数名称：账单类型。1：消费-新购2：消费-续订3：消费-变更4：退款-退订5：消费-使用8：消费-自动续订9：调账-补偿12：消费-按时计费13：消费-退订手续费14：消费-服务支持计划月末扣费 15消费-税金 16：调账-扣费  17：消费-保底差额 100：退款-退订税金 101：调账-补偿税金 102：调账-扣费税金| |参数的约束及描述：|
    * offset  |参数名称：偏移量，从0开始| |参数的约束及描述：|
    * limit  |参数名称：每次查询的限制| |参数的约束及描述：|
    * resourceId  |参数名称：资源ID。| |参数的约束及描述：|
    * enterpriseProjectId  |参数名称：企业项目ID。| |参数的约束及描述：|
    * includeZeroRecord  |参数名称：返回是否包含应付金额为0的记录。| |参数的约束及描述：|
    * method  |参数名称：查询方式。oneself：自身sub_customer: 企业子客户all:自己和企业子客户| |参数的约束及描述：oneself：自身sub_customer: 企业子客户all:自己和企业子客户|
    * subCustomerId  |参数名称：企业子账号ID。| |参数的约束及描述：注意：method不等于sub_customer的时候，该参数无效，如果method等于sub_customer，该参数不能为空|
    * tradeId  |参数名称：订单ID 或 交易ID1，2，3，4，8时为订单ID，其它场景下为： 交易ID(非月末扣费：应收ID；月末扣费：账单ID)，扣费维度的唯一标识| |参数的约束及描述：|
    * billDateBegin  |参数名称：计费日期，格式为YYYY-MM-DD| |参数的约束及描述：必须和cycle，即资源的消费账期在同一个月。|
    * billDateEnd  |参数名称：计费日期，格式为YYYY-MM-DD| |参数的约束及描述：必须和cycle，即资源的消费账期在同一个月。 begin和end必须同时出现，否则忽略这两个参数。仅仅按照cycle进行查询。|
    *
    * @var string[]
    */
    protected static $setters = [
            'xLanguage' => 'setXLanguage',
            'cycle' => 'setCycle',
            'cloudServiceType' => 'setCloudServiceType',
            'region' => 'setRegion',
            'chargeMode' => 'setChargeMode',
            'billType' => 'setBillType',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'resourceId' => 'setResourceId',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'includeZeroRecord' => 'setIncludeZeroRecord',
            'method' => 'setMethod',
            'subCustomerId' => 'setSubCustomerId',
            'tradeId' => 'setTradeId',
            'billDateBegin' => 'setBillDateBegin',
            'billDateEnd' => 'setBillDateEnd'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xLanguage  |参数名称：语言| |参数的约束及描述：中文：zh_CN 英文：en_US。缺省为zh_CN|
    * cycle  |参数名称：开始时间，格式：yyyy-MM| |参数的约束及描述：|
    * cloudServiceType  |参数名称：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型云服务类型云服务类型云服务类型。| |参数的约束及描述：|
    * region  |参数名称：云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点地区和终端节点对应云服务的“区域”列的值。| |参数的约束及描述：|
    * chargeMode  |参数名称：支付方式。1 : 包周期；3: 按需。10: 预留实例。| |参数的约束及描述：|
    * billType  |参数名称：账单类型。1：消费-新购2：消费-续订3：消费-变更4：退款-退订5：消费-使用8：消费-自动续订9：调账-补偿12：消费-按时计费13：消费-退订手续费14：消费-服务支持计划月末扣费 15消费-税金 16：调账-扣费  17：消费-保底差额 100：退款-退订税金 101：调账-补偿税金 102：调账-扣费税金| |参数的约束及描述：|
    * offset  |参数名称：偏移量，从0开始| |参数的约束及描述：|
    * limit  |参数名称：每次查询的限制| |参数的约束及描述：|
    * resourceId  |参数名称：资源ID。| |参数的约束及描述：|
    * enterpriseProjectId  |参数名称：企业项目ID。| |参数的约束及描述：|
    * includeZeroRecord  |参数名称：返回是否包含应付金额为0的记录。| |参数的约束及描述：|
    * method  |参数名称：查询方式。oneself：自身sub_customer: 企业子客户all:自己和企业子客户| |参数的约束及描述：oneself：自身sub_customer: 企业子客户all:自己和企业子客户|
    * subCustomerId  |参数名称：企业子账号ID。| |参数的约束及描述：注意：method不等于sub_customer的时候，该参数无效，如果method等于sub_customer，该参数不能为空|
    * tradeId  |参数名称：订单ID 或 交易ID1，2，3，4，8时为订单ID，其它场景下为： 交易ID(非月末扣费：应收ID；月末扣费：账单ID)，扣费维度的唯一标识| |参数的约束及描述：|
    * billDateBegin  |参数名称：计费日期，格式为YYYY-MM-DD| |参数的约束及描述：必须和cycle，即资源的消费账期在同一个月。|
    * billDateEnd  |参数名称：计费日期，格式为YYYY-MM-DD| |参数的约束及描述：必须和cycle，即资源的消费账期在同一个月。 begin和end必须同时出现，否则忽略这两个参数。仅仅按照cycle进行查询。|
    *
    * @var string[]
    */
    protected static $getters = [
            'xLanguage' => 'getXLanguage',
            'cycle' => 'getCycle',
            'cloudServiceType' => 'getCloudServiceType',
            'region' => 'getRegion',
            'chargeMode' => 'getChargeMode',
            'billType' => 'getBillType',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'resourceId' => 'getResourceId',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'includeZeroRecord' => 'getIncludeZeroRecord',
            'method' => 'getMethod',
            'subCustomerId' => 'getSubCustomerId',
            'tradeId' => 'getTradeId',
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
        $this->container['cycle'] = isset($data['cycle']) ? $data['cycle'] : null;
        $this->container['cloudServiceType'] = isset($data['cloudServiceType']) ? $data['cloudServiceType'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['chargeMode'] = isset($data['chargeMode']) ? $data['chargeMode'] : null;
        $this->container['billType'] = isset($data['billType']) ? $data['billType'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : 0;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : 10;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['includeZeroRecord'] = isset($data['includeZeroRecord']) ? $data['includeZeroRecord'] : null;
        $this->container['method'] = isset($data['method']) ? $data['method'] : null;
        $this->container['subCustomerId'] = isset($data['subCustomerId']) ? $data['subCustomerId'] : null;
        $this->container['tradeId'] = isset($data['tradeId']) ? $data['tradeId'] : null;
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
            if (!is_null($this->container['xLanguage']) && (mb_strlen($this->container['xLanguage']) > 10)) {
                $invalidProperties[] = "invalid value for 'xLanguage', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['xLanguage']) && (mb_strlen($this->container['xLanguage']) < 0)) {
                $invalidProperties[] = "invalid value for 'xLanguage', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['cycle'] === null) {
            $invalidProperties[] = "'cycle' can't be null";
        }
            if (!is_null($this->container['billType']) && ($this->container['billType'] > 127)) {
                $invalidProperties[] = "invalid value for 'billType', must be smaller than or equal to 127.";
            }
            if (!is_null($this->container['billType']) && ($this->container['billType'] < 0)) {
                $invalidProperties[] = "invalid value for 'billType', must be bigger than or equal to 0.";
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
    *  |参数名称：语言| |参数的约束及描述：中文：zh_CN 英文：en_US。缺省为zh_CN|
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
    * @param string|null $xLanguage |参数名称：语言| |参数的约束及描述：中文：zh_CN 英文：en_US。缺省为zh_CN|
    *
    * @return $this
    */
    public function setXLanguage($xLanguage)
    {
        $this->container['xLanguage'] = $xLanguage;
        return $this;
    }

    /**
    * Gets cycle
    *  |参数名称：开始时间，格式：yyyy-MM| |参数的约束及描述：|
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
    * @param string $cycle |参数名称：开始时间，格式：yyyy-MM| |参数的约束及描述：|
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
    *  |参数名称：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型云服务类型云服务类型云服务类型。| |参数的约束及描述：|
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
    * @param string|null $cloudServiceType |参数名称：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型云服务类型云服务类型云服务类型。| |参数的约束及描述：|
    *
    * @return $this
    */
    public function setCloudServiceType($cloudServiceType)
    {
        $this->container['cloudServiceType'] = $cloudServiceType;
        return $this;
    }

    /**
    * Gets region
    *  |参数名称：云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点地区和终端节点对应云服务的“区域”列的值。| |参数的约束及描述：|
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
    * @param string|null $region |参数名称：云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点地区和终端节点对应云服务的“区域”列的值。| |参数的约束及描述：|
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets chargeMode
    *  |参数名称：支付方式。1 : 包周期；3: 按需。10: 预留实例。| |参数的约束及描述：|
    *
    * @return string|null
    */
    public function getChargeMode()
    {
        return $this->container['chargeMode'];
    }

    /**
    * Sets chargeMode
    *
    * @param string|null $chargeMode |参数名称：支付方式。1 : 包周期；3: 按需。10: 预留实例。| |参数的约束及描述：|
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
    *  |参数名称：账单类型。1：消费-新购2：消费-续订3：消费-变更4：退款-退订5：消费-使用8：消费-自动续订9：调账-补偿12：消费-按时计费13：消费-退订手续费14：消费-服务支持计划月末扣费 15消费-税金 16：调账-扣费  17：消费-保底差额 100：退款-退订税金 101：调账-补偿税金 102：调账-扣费税金| |参数的约束及描述：|
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
    * @param int|null $billType |参数名称：账单类型。1：消费-新购2：消费-续订3：消费-变更4：退款-退订5：消费-使用8：消费-自动续订9：调账-补偿12：消费-按时计费13：消费-退订手续费14：消费-服务支持计划月末扣费 15消费-税金 16：调账-扣费  17：消费-保底差额 100：退款-退订税金 101：调账-补偿税金 102：调账-扣费税金| |参数的约束及描述：|
    *
    * @return $this
    */
    public function setBillType($billType)
    {
        $this->container['billType'] = $billType;
        return $this;
    }

    /**
    * Gets offset
    *  |参数名称：偏移量，从0开始| |参数的约束及描述：|
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
    * @param int|null $offset |参数名称：偏移量，从0开始| |参数的约束及描述：|
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
    *  |参数名称：每次查询的限制| |参数的约束及描述：|
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
    * @param int|null $limit |参数名称：每次查询的限制| |参数的约束及描述：|
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets resourceId
    *  |参数名称：资源ID。| |参数的约束及描述：|
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
    * @param string|null $resourceId |参数名称：资源ID。| |参数的约束及描述：|
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  |参数名称：企业项目ID。| |参数的约束及描述：|
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
    * @param string|null $enterpriseProjectId |参数名称：企业项目ID。| |参数的约束及描述：|
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
    *  |参数名称：返回是否包含应付金额为0的记录。| |参数的约束及描述：|
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
    * @param bool|null $includeZeroRecord |参数名称：返回是否包含应付金额为0的记录。| |参数的约束及描述：|
    *
    * @return $this
    */
    public function setIncludeZeroRecord($includeZeroRecord)
    {
        $this->container['includeZeroRecord'] = $includeZeroRecord;
        return $this;
    }

    /**
    * Gets method
    *  |参数名称：查询方式。oneself：自身sub_customer: 企业子客户all:自己和企业子客户| |参数的约束及描述：oneself：自身sub_customer: 企业子客户all:自己和企业子客户|
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
    * @param string|null $method |参数名称：查询方式。oneself：自身sub_customer: 企业子客户all:自己和企业子客户| |参数的约束及描述：oneself：自身sub_customer: 企业子客户all:自己和企业子客户|
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
    *  |参数名称：企业子账号ID。| |参数的约束及描述：注意：method不等于sub_customer的时候，该参数无效，如果method等于sub_customer，该参数不能为空|
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
    * @param string|null $subCustomerId |参数名称：企业子账号ID。| |参数的约束及描述：注意：method不等于sub_customer的时候，该参数无效，如果method等于sub_customer，该参数不能为空|
    *
    * @return $this
    */
    public function setSubCustomerId($subCustomerId)
    {
        $this->container['subCustomerId'] = $subCustomerId;
        return $this;
    }

    /**
    * Gets tradeId
    *  |参数名称：订单ID 或 交易ID1，2，3，4，8时为订单ID，其它场景下为： 交易ID(非月末扣费：应收ID；月末扣费：账单ID)，扣费维度的唯一标识| |参数的约束及描述：|
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
    * @param string|null $tradeId |参数名称：订单ID 或 交易ID1，2，3，4，8时为订单ID，其它场景下为： 交易ID(非月末扣费：应收ID；月末扣费：账单ID)，扣费维度的唯一标识| |参数的约束及描述：|
    *
    * @return $this
    */
    public function setTradeId($tradeId)
    {
        $this->container['tradeId'] = $tradeId;
        return $this;
    }

    /**
    * Gets billDateBegin
    *  |参数名称：计费日期，格式为YYYY-MM-DD| |参数的约束及描述：必须和cycle，即资源的消费账期在同一个月。|
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
    * @param string|null $billDateBegin |参数名称：计费日期，格式为YYYY-MM-DD| |参数的约束及描述：必须和cycle，即资源的消费账期在同一个月。|
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
    *  |参数名称：计费日期，格式为YYYY-MM-DD| |参数的约束及描述：必须和cycle，即资源的消费账期在同一个月。 begin和end必须同时出现，否则忽略这两个参数。仅仅按照cycle进行查询。|
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
    * @param string|null $billDateEnd |参数名称：计费日期，格式为YYYY-MM-DD| |参数的约束及描述：必须和cycle，即资源的消费账期在同一个月。 begin和end必须同时出现，否则忽略这两个参数。仅仅按照cycle进行查询。|
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

