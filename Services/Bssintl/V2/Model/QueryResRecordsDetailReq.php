<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

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
    * cycle  |参数名称：消费月份| |参数的约束及描述：该参数必填，最大长度：8，比如2018-12|
    * cloudServiceType  |参数名称：云服务类型编码| |参数的约束及描述：该参数非必填，最大长度：64，且只允许字符串，例如OBS的云服务类型编码为“hws.service.type.obs”|
    * resourceType  |参数名称：资源类型编码| |参数的约束及描述：该参数非必填，最大长度：64，且只允许字符串，例如ECS的VM为“hws.resource.type.vm”|
    * region  |参数名称：云服务区编码| |参数的约束及描述：该参数非必填，最大长度：64，且只允许字符串，例如：“cn-north-1”|
    * resInstanceId  |参数名称：资源实例ID| |参数的约束及描述：该参数非必填，最大长度：64，且只允字符串|
    * chargeMode  |参数名称：支付方式| |参数的约束及描述：该参数非必填，且只允许整数,1 : 包周期；3: 按需。10: 预留实例|
    * billType  |参数名称：账单类型| |参数的约束及描述：该参数非必填，且只允许整数,1：消费-新购；2：消费-续订；3：消费-变更；4：退款-退订；5：消费-使用；8：消费-自动续订；9：调账-补偿；12：消费-按时计费；13：消费-退订手续费；14：消费-服务支持计划月末扣费； 15消费-税金；16：调账-扣费; 17：消费-保底差额 100：退款-退订税金 101：调账-补偿税金 102：调账-扣费税金|
    * enterpriseProjectId  |参数名称：企业项目ID| |参数的约束及描述：该参数非必，最大长度：64，且只允许字符串|
    * includeZeroRecord  |参数名称：返回是否包含应付金额为0的记录| |参数的约束及描述：该参数非必填，且只允许布尔型，true: 包含；false: 不包含|
    * offset  |参数名称：偏移量| |参数的约束及描述：该参数非必填，且只允许数字，默认为0|
    * limit  |参数名称：页面大小| |参数的约束及描述：该参数非必填，且只允许1-100的数字，默认10|
    * method  |参数名称：查询方式。oneself：自身sub_customer: 企业子客户all:自己和企业子客户| |参数的约束及描述：oneself：自身sub_customer: 企业子客户all:自己和企业子客户|
    * subCustomerId  |参数名称：企业子账号ID。| |参数的约束及描述：注意：method不等于sub_customer的时候，该参数无效，如果method等于sub_customer，该参数不能为空|
    * statisticType  |参数名称：统计类型。默认值为1。1：按账期 2：按天| |参数的约束及描述：统计类型。默认值为1。1：按账期 2：按天|
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
            'statisticType' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cycle  |参数名称：消费月份| |参数的约束及描述：该参数必填，最大长度：8，比如2018-12|
    * cloudServiceType  |参数名称：云服务类型编码| |参数的约束及描述：该参数非必填，最大长度：64，且只允许字符串，例如OBS的云服务类型编码为“hws.service.type.obs”|
    * resourceType  |参数名称：资源类型编码| |参数的约束及描述：该参数非必填，最大长度：64，且只允许字符串，例如ECS的VM为“hws.resource.type.vm”|
    * region  |参数名称：云服务区编码| |参数的约束及描述：该参数非必填，最大长度：64，且只允许字符串，例如：“cn-north-1”|
    * resInstanceId  |参数名称：资源实例ID| |参数的约束及描述：该参数非必填，最大长度：64，且只允字符串|
    * chargeMode  |参数名称：支付方式| |参数的约束及描述：该参数非必填，且只允许整数,1 : 包周期；3: 按需。10: 预留实例|
    * billType  |参数名称：账单类型| |参数的约束及描述：该参数非必填，且只允许整数,1：消费-新购；2：消费-续订；3：消费-变更；4：退款-退订；5：消费-使用；8：消费-自动续订；9：调账-补偿；12：消费-按时计费；13：消费-退订手续费；14：消费-服务支持计划月末扣费； 15消费-税金；16：调账-扣费; 17：消费-保底差额 100：退款-退订税金 101：调账-补偿税金 102：调账-扣费税金|
    * enterpriseProjectId  |参数名称：企业项目ID| |参数的约束及描述：该参数非必，最大长度：64，且只允许字符串|
    * includeZeroRecord  |参数名称：返回是否包含应付金额为0的记录| |参数的约束及描述：该参数非必填，且只允许布尔型，true: 包含；false: 不包含|
    * offset  |参数名称：偏移量| |参数的约束及描述：该参数非必填，且只允许数字，默认为0|
    * limit  |参数名称：页面大小| |参数的约束及描述：该参数非必填，且只允许1-100的数字，默认10|
    * method  |参数名称：查询方式。oneself：自身sub_customer: 企业子客户all:自己和企业子客户| |参数的约束及描述：oneself：自身sub_customer: 企业子客户all:自己和企业子客户|
    * subCustomerId  |参数名称：企业子账号ID。| |参数的约束及描述：注意：method不等于sub_customer的时候，该参数无效，如果method等于sub_customer，该参数不能为空|
    * statisticType  |参数名称：统计类型。默认值为1。1：按账期 2：按天| |参数的约束及描述：统计类型。默认值为1。1：按账期 2：按天|
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
        'statisticType' => 'int32'
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
    * cycle  |参数名称：消费月份| |参数的约束及描述：该参数必填，最大长度：8，比如2018-12|
    * cloudServiceType  |参数名称：云服务类型编码| |参数的约束及描述：该参数非必填，最大长度：64，且只允许字符串，例如OBS的云服务类型编码为“hws.service.type.obs”|
    * resourceType  |参数名称：资源类型编码| |参数的约束及描述：该参数非必填，最大长度：64，且只允许字符串，例如ECS的VM为“hws.resource.type.vm”|
    * region  |参数名称：云服务区编码| |参数的约束及描述：该参数非必填，最大长度：64，且只允许字符串，例如：“cn-north-1”|
    * resInstanceId  |参数名称：资源实例ID| |参数的约束及描述：该参数非必填，最大长度：64，且只允字符串|
    * chargeMode  |参数名称：支付方式| |参数的约束及描述：该参数非必填，且只允许整数,1 : 包周期；3: 按需。10: 预留实例|
    * billType  |参数名称：账单类型| |参数的约束及描述：该参数非必填，且只允许整数,1：消费-新购；2：消费-续订；3：消费-变更；4：退款-退订；5：消费-使用；8：消费-自动续订；9：调账-补偿；12：消费-按时计费；13：消费-退订手续费；14：消费-服务支持计划月末扣费； 15消费-税金；16：调账-扣费; 17：消费-保底差额 100：退款-退订税金 101：调账-补偿税金 102：调账-扣费税金|
    * enterpriseProjectId  |参数名称：企业项目ID| |参数的约束及描述：该参数非必，最大长度：64，且只允许字符串|
    * includeZeroRecord  |参数名称：返回是否包含应付金额为0的记录| |参数的约束及描述：该参数非必填，且只允许布尔型，true: 包含；false: 不包含|
    * offset  |参数名称：偏移量| |参数的约束及描述：该参数非必填，且只允许数字，默认为0|
    * limit  |参数名称：页面大小| |参数的约束及描述：该参数非必填，且只允许1-100的数字，默认10|
    * method  |参数名称：查询方式。oneself：自身sub_customer: 企业子客户all:自己和企业子客户| |参数的约束及描述：oneself：自身sub_customer: 企业子客户all:自己和企业子客户|
    * subCustomerId  |参数名称：企业子账号ID。| |参数的约束及描述：注意：method不等于sub_customer的时候，该参数无效，如果method等于sub_customer，该参数不能为空|
    * statisticType  |参数名称：统计类型。默认值为1。1：按账期 2：按天| |参数的约束及描述：统计类型。默认值为1。1：按账期 2：按天|
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
            'statisticType' => 'statistic_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cycle  |参数名称：消费月份| |参数的约束及描述：该参数必填，最大长度：8，比如2018-12|
    * cloudServiceType  |参数名称：云服务类型编码| |参数的约束及描述：该参数非必填，最大长度：64，且只允许字符串，例如OBS的云服务类型编码为“hws.service.type.obs”|
    * resourceType  |参数名称：资源类型编码| |参数的约束及描述：该参数非必填，最大长度：64，且只允许字符串，例如ECS的VM为“hws.resource.type.vm”|
    * region  |参数名称：云服务区编码| |参数的约束及描述：该参数非必填，最大长度：64，且只允许字符串，例如：“cn-north-1”|
    * resInstanceId  |参数名称：资源实例ID| |参数的约束及描述：该参数非必填，最大长度：64，且只允字符串|
    * chargeMode  |参数名称：支付方式| |参数的约束及描述：该参数非必填，且只允许整数,1 : 包周期；3: 按需。10: 预留实例|
    * billType  |参数名称：账单类型| |参数的约束及描述：该参数非必填，且只允许整数,1：消费-新购；2：消费-续订；3：消费-变更；4：退款-退订；5：消费-使用；8：消费-自动续订；9：调账-补偿；12：消费-按时计费；13：消费-退订手续费；14：消费-服务支持计划月末扣费； 15消费-税金；16：调账-扣费; 17：消费-保底差额 100：退款-退订税金 101：调账-补偿税金 102：调账-扣费税金|
    * enterpriseProjectId  |参数名称：企业项目ID| |参数的约束及描述：该参数非必，最大长度：64，且只允许字符串|
    * includeZeroRecord  |参数名称：返回是否包含应付金额为0的记录| |参数的约束及描述：该参数非必填，且只允许布尔型，true: 包含；false: 不包含|
    * offset  |参数名称：偏移量| |参数的约束及描述：该参数非必填，且只允许数字，默认为0|
    * limit  |参数名称：页面大小| |参数的约束及描述：该参数非必填，且只允许1-100的数字，默认10|
    * method  |参数名称：查询方式。oneself：自身sub_customer: 企业子客户all:自己和企业子客户| |参数的约束及描述：oneself：自身sub_customer: 企业子客户all:自己和企业子客户|
    * subCustomerId  |参数名称：企业子账号ID。| |参数的约束及描述：注意：method不等于sub_customer的时候，该参数无效，如果method等于sub_customer，该参数不能为空|
    * statisticType  |参数名称：统计类型。默认值为1。1：按账期 2：按天| |参数的约束及描述：统计类型。默认值为1。1：按账期 2：按天|
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
            'statisticType' => 'setStatisticType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cycle  |参数名称：消费月份| |参数的约束及描述：该参数必填，最大长度：8，比如2018-12|
    * cloudServiceType  |参数名称：云服务类型编码| |参数的约束及描述：该参数非必填，最大长度：64，且只允许字符串，例如OBS的云服务类型编码为“hws.service.type.obs”|
    * resourceType  |参数名称：资源类型编码| |参数的约束及描述：该参数非必填，最大长度：64，且只允许字符串，例如ECS的VM为“hws.resource.type.vm”|
    * region  |参数名称：云服务区编码| |参数的约束及描述：该参数非必填，最大长度：64，且只允许字符串，例如：“cn-north-1”|
    * resInstanceId  |参数名称：资源实例ID| |参数的约束及描述：该参数非必填，最大长度：64，且只允字符串|
    * chargeMode  |参数名称：支付方式| |参数的约束及描述：该参数非必填，且只允许整数,1 : 包周期；3: 按需。10: 预留实例|
    * billType  |参数名称：账单类型| |参数的约束及描述：该参数非必填，且只允许整数,1：消费-新购；2：消费-续订；3：消费-变更；4：退款-退订；5：消费-使用；8：消费-自动续订；9：调账-补偿；12：消费-按时计费；13：消费-退订手续费；14：消费-服务支持计划月末扣费； 15消费-税金；16：调账-扣费; 17：消费-保底差额 100：退款-退订税金 101：调账-补偿税金 102：调账-扣费税金|
    * enterpriseProjectId  |参数名称：企业项目ID| |参数的约束及描述：该参数非必，最大长度：64，且只允许字符串|
    * includeZeroRecord  |参数名称：返回是否包含应付金额为0的记录| |参数的约束及描述：该参数非必填，且只允许布尔型，true: 包含；false: 不包含|
    * offset  |参数名称：偏移量| |参数的约束及描述：该参数非必填，且只允许数字，默认为0|
    * limit  |参数名称：页面大小| |参数的约束及描述：该参数非必填，且只允许1-100的数字，默认10|
    * method  |参数名称：查询方式。oneself：自身sub_customer: 企业子客户all:自己和企业子客户| |参数的约束及描述：oneself：自身sub_customer: 企业子客户all:自己和企业子客户|
    * subCustomerId  |参数名称：企业子账号ID。| |参数的约束及描述：注意：method不等于sub_customer的时候，该参数无效，如果method等于sub_customer，该参数不能为空|
    * statisticType  |参数名称：统计类型。默认值为1。1：按账期 2：按天| |参数的约束及描述：统计类型。默认值为1。1：按账期 2：按天|
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
            'statisticType' => 'getStatisticType'
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
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : 0;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : 10;
        $this->container['method'] = isset($data['method']) ? $data['method'] : null;
        $this->container['subCustomerId'] = isset($data['subCustomerId']) ? $data['subCustomerId'] : null;
        $this->container['statisticType'] = isset($data['statisticType']) ? $data['statisticType'] : 1;
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
            if (!is_null($this->container['chargeMode']) && ($this->container['chargeMode'] > 10)) {
                $invalidProperties[] = "invalid value for 'chargeMode', must be smaller than or equal to 10.";
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
    *  |参数名称：消费月份| |参数的约束及描述：该参数必填，最大长度：8，比如2018-12|
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
    * @param string $cycle |参数名称：消费月份| |参数的约束及描述：该参数必填，最大长度：8，比如2018-12|
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
    *  |参数名称：云服务类型编码| |参数的约束及描述：该参数非必填，最大长度：64，且只允许字符串，例如OBS的云服务类型编码为“hws.service.type.obs”|
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
    * @param string|null $cloudServiceType |参数名称：云服务类型编码| |参数的约束及描述：该参数非必填，最大长度：64，且只允许字符串，例如OBS的云服务类型编码为“hws.service.type.obs”|
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
    *  |参数名称：资源类型编码| |参数的约束及描述：该参数非必填，最大长度：64，且只允许字符串，例如ECS的VM为“hws.resource.type.vm”|
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
    * @param string|null $resourceType |参数名称：资源类型编码| |参数的约束及描述：该参数非必填，最大长度：64，且只允许字符串，例如ECS的VM为“hws.resource.type.vm”|
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
    *  |参数名称：云服务区编码| |参数的约束及描述：该参数非必填，最大长度：64，且只允许字符串，例如：“cn-north-1”|
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
    * @param string|null $region |参数名称：云服务区编码| |参数的约束及描述：该参数非必填，最大长度：64，且只允许字符串，例如：“cn-north-1”|
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
    *  |参数名称：资源实例ID| |参数的约束及描述：该参数非必填，最大长度：64，且只允字符串|
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
    * @param string|null $resInstanceId |参数名称：资源实例ID| |参数的约束及描述：该参数非必填，最大长度：64，且只允字符串|
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
    *  |参数名称：支付方式| |参数的约束及描述：该参数非必填，且只允许整数,1 : 包周期；3: 按需。10: 预留实例|
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
    * @param int|null $chargeMode |参数名称：支付方式| |参数的约束及描述：该参数非必填，且只允许整数,1 : 包周期；3: 按需。10: 预留实例|
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
    *  |参数名称：账单类型| |参数的约束及描述：该参数非必填，且只允许整数,1：消费-新购；2：消费-续订；3：消费-变更；4：退款-退订；5：消费-使用；8：消费-自动续订；9：调账-补偿；12：消费-按时计费；13：消费-退订手续费；14：消费-服务支持计划月末扣费； 15消费-税金；16：调账-扣费; 17：消费-保底差额 100：退款-退订税金 101：调账-补偿税金 102：调账-扣费税金|
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
    * @param int|null $billType |参数名称：账单类型| |参数的约束及描述：该参数非必填，且只允许整数,1：消费-新购；2：消费-续订；3：消费-变更；4：退款-退订；5：消费-使用；8：消费-自动续订；9：调账-补偿；12：消费-按时计费；13：消费-退订手续费；14：消费-服务支持计划月末扣费； 15消费-税金；16：调账-扣费; 17：消费-保底差额 100：退款-退订税金 101：调账-补偿税金 102：调账-扣费税金|
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
    *  |参数名称：企业项目ID| |参数的约束及描述：该参数非必，最大长度：64，且只允许字符串|
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
    * @param string|null $enterpriseProjectId |参数名称：企业项目ID| |参数的约束及描述：该参数非必，最大长度：64，且只允许字符串|
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
    *  |参数名称：返回是否包含应付金额为0的记录| |参数的约束及描述：该参数非必填，且只允许布尔型，true: 包含；false: 不包含|
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
    * @param bool|null $includeZeroRecord |参数名称：返回是否包含应付金额为0的记录| |参数的约束及描述：该参数非必填，且只允许布尔型，true: 包含；false: 不包含|
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
    *  |参数名称：偏移量| |参数的约束及描述：该参数非必填，且只允许数字，默认为0|
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
    * @param int|null $offset |参数名称：偏移量| |参数的约束及描述：该参数非必填，且只允许数字，默认为0|
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
    *  |参数名称：页面大小| |参数的约束及描述：该参数非必填，且只允许1-100的数字，默认10|
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
    * @param int|null $limit |参数名称：页面大小| |参数的约束及描述：该参数非必填，且只允许1-100的数字，默认10|
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
    * Gets statisticType
    *  |参数名称：统计类型。默认值为1。1：按账期 2：按天| |参数的约束及描述：统计类型。默认值为1。1：按账期 2：按天|
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
    * @param int|null $statisticType |参数名称：统计类型。默认值为1。1：按账期 2：按天| |参数的约束及描述：统计类型。默认值为1。1：按账期 2：按天|
    *
    * @return $this
    */
    public function setStatisticType($statisticType)
    {
        $this->container['statisticType'] = $statisticType;
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

