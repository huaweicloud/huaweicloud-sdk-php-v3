<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAllRiskConfigCheckRulesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAllRiskConfigCheckRulesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 不涉及
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * checkType  **参数解释** 配置检查（基线）的名称，例如SSH、CentOS 7、Windows **约束限制** 不涉及 **取值范围** 字符长度0-256位 **默认取值** 不涉及
    * standard  **参数解释** 标准类型 **约束限制** 不涉及 **取值范围** - cn_standard：等保合规标准 - hw_standard：云安全实践标准 - cis_standard：通用安全标准  **默认取值** 不涉及
    * statisticsScanResult  **参数解释** 统计结果类型 **约束限制** 不涉及 **取值范围** - pass：已通过，表示查看主机全部通过的检查项 - failed：未通过，表示查看主机全部未通过 & 全部未处理的检查项 - processed：已处理，表示查看主机存在未通过 & 未通过主机已全部处理(忽略、加白)的检查项  **默认取值** 不涉及
    * checkRuleName  **参数解释** 检查项（检查规则）名称，支持模糊匹配 **约束限制** 不涉及 **取值范围** 字符长度0-2048位 **默认取值** 不涉及
    * severity  **参数解释** 风险等级 **约束限制** 不涉及 **取值范围** - Security：安全 - Low：低危 - Medium：中危 - High：高危 - Critical：危急 **默认取值** 不涉及
    * clusterId  **参数解释** 集群ID **约束限制** 不涉及 **取值范围** 字符长度0-64位 **默认取值** 不涉及
    * tag  **参数解释** 基线检查项的类型 **约束限制** 不涉及 **取值范围** 字符长度0-256位 **默认取值** 不涉及
    * policyGroupId  **参数解释** 策略组ID，不赋值时，查租户所有主机，host_id存在时，此值无效 **约束限制** 不涉及 **取值范围** 字符长度0-128位 **默认取值** 不涉及
    * statisticsFlag  **参数解释** 是否从统计维度展示数据 **约束限制** 不涉及 **取值范围** - false : 不从统计维度展示 - true  : 从统计维度展示  **默认取值** false
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'checkType' => 'string',
            'standard' => 'string',
            'statisticsScanResult' => 'string',
            'checkRuleName' => 'string',
            'severity' => 'string',
            'clusterId' => 'string',
            'tag' => 'string',
            'policyGroupId' => 'string',
            'statisticsFlag' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 不涉及
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * checkType  **参数解释** 配置检查（基线）的名称，例如SSH、CentOS 7、Windows **约束限制** 不涉及 **取值范围** 字符长度0-256位 **默认取值** 不涉及
    * standard  **参数解释** 标准类型 **约束限制** 不涉及 **取值范围** - cn_standard：等保合规标准 - hw_standard：云安全实践标准 - cis_standard：通用安全标准  **默认取值** 不涉及
    * statisticsScanResult  **参数解释** 统计结果类型 **约束限制** 不涉及 **取值范围** - pass：已通过，表示查看主机全部通过的检查项 - failed：未通过，表示查看主机全部未通过 & 全部未处理的检查项 - processed：已处理，表示查看主机存在未通过 & 未通过主机已全部处理(忽略、加白)的检查项  **默认取值** 不涉及
    * checkRuleName  **参数解释** 检查项（检查规则）名称，支持模糊匹配 **约束限制** 不涉及 **取值范围** 字符长度0-2048位 **默认取值** 不涉及
    * severity  **参数解释** 风险等级 **约束限制** 不涉及 **取值范围** - Security：安全 - Low：低危 - Medium：中危 - High：高危 - Critical：危急 **默认取值** 不涉及
    * clusterId  **参数解释** 集群ID **约束限制** 不涉及 **取值范围** 字符长度0-64位 **默认取值** 不涉及
    * tag  **参数解释** 基线检查项的类型 **约束限制** 不涉及 **取值范围** 字符长度0-256位 **默认取值** 不涉及
    * policyGroupId  **参数解释** 策略组ID，不赋值时，查租户所有主机，host_id存在时，此值无效 **约束限制** 不涉及 **取值范围** 字符长度0-128位 **默认取值** 不涉及
    * statisticsFlag  **参数解释** 是否从统计维度展示数据 **约束限制** 不涉及 **取值范围** - false : 不从统计维度展示 - true  : 从统计维度展示  **默认取值** false
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'checkType' => null,
        'standard' => null,
        'statisticsScanResult' => null,
        'checkRuleName' => null,
        'severity' => null,
        'clusterId' => null,
        'tag' => null,
        'policyGroupId' => null,
        'statisticsFlag' => null
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
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 不涉及
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * checkType  **参数解释** 配置检查（基线）的名称，例如SSH、CentOS 7、Windows **约束限制** 不涉及 **取值范围** 字符长度0-256位 **默认取值** 不涉及
    * standard  **参数解释** 标准类型 **约束限制** 不涉及 **取值范围** - cn_standard：等保合规标准 - hw_standard：云安全实践标准 - cis_standard：通用安全标准  **默认取值** 不涉及
    * statisticsScanResult  **参数解释** 统计结果类型 **约束限制** 不涉及 **取值范围** - pass：已通过，表示查看主机全部通过的检查项 - failed：未通过，表示查看主机全部未通过 & 全部未处理的检查项 - processed：已处理，表示查看主机存在未通过 & 未通过主机已全部处理(忽略、加白)的检查项  **默认取值** 不涉及
    * checkRuleName  **参数解释** 检查项（检查规则）名称，支持模糊匹配 **约束限制** 不涉及 **取值范围** 字符长度0-2048位 **默认取值** 不涉及
    * severity  **参数解释** 风险等级 **约束限制** 不涉及 **取值范围** - Security：安全 - Low：低危 - Medium：中危 - High：高危 - Critical：危急 **默认取值** 不涉及
    * clusterId  **参数解释** 集群ID **约束限制** 不涉及 **取值范围** 字符长度0-64位 **默认取值** 不涉及
    * tag  **参数解释** 基线检查项的类型 **约束限制** 不涉及 **取值范围** 字符长度0-256位 **默认取值** 不涉及
    * policyGroupId  **参数解释** 策略组ID，不赋值时，查租户所有主机，host_id存在时，此值无效 **约束限制** 不涉及 **取值范围** 字符长度0-128位 **默认取值** 不涉及
    * statisticsFlag  **参数解释** 是否从统计维度展示数据 **约束限制** 不涉及 **取值范围** - false : 不从统计维度展示 - true  : 从统计维度展示  **默认取值** false
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'checkType' => 'check_type',
            'standard' => 'standard',
            'statisticsScanResult' => 'statistics_scan_result',
            'checkRuleName' => 'check_rule_name',
            'severity' => 'severity',
            'clusterId' => 'cluster_id',
            'tag' => 'tag',
            'policyGroupId' => 'policy_group_id',
            'statisticsFlag' => 'statistics_flag'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 不涉及
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * checkType  **参数解释** 配置检查（基线）的名称，例如SSH、CentOS 7、Windows **约束限制** 不涉及 **取值范围** 字符长度0-256位 **默认取值** 不涉及
    * standard  **参数解释** 标准类型 **约束限制** 不涉及 **取值范围** - cn_standard：等保合规标准 - hw_standard：云安全实践标准 - cis_standard：通用安全标准  **默认取值** 不涉及
    * statisticsScanResult  **参数解释** 统计结果类型 **约束限制** 不涉及 **取值范围** - pass：已通过，表示查看主机全部通过的检查项 - failed：未通过，表示查看主机全部未通过 & 全部未处理的检查项 - processed：已处理，表示查看主机存在未通过 & 未通过主机已全部处理(忽略、加白)的检查项  **默认取值** 不涉及
    * checkRuleName  **参数解释** 检查项（检查规则）名称，支持模糊匹配 **约束限制** 不涉及 **取值范围** 字符长度0-2048位 **默认取值** 不涉及
    * severity  **参数解释** 风险等级 **约束限制** 不涉及 **取值范围** - Security：安全 - Low：低危 - Medium：中危 - High：高危 - Critical：危急 **默认取值** 不涉及
    * clusterId  **参数解释** 集群ID **约束限制** 不涉及 **取值范围** 字符长度0-64位 **默认取值** 不涉及
    * tag  **参数解释** 基线检查项的类型 **约束限制** 不涉及 **取值范围** 字符长度0-256位 **默认取值** 不涉及
    * policyGroupId  **参数解释** 策略组ID，不赋值时，查租户所有主机，host_id存在时，此值无效 **约束限制** 不涉及 **取值范围** 字符长度0-128位 **默认取值** 不涉及
    * statisticsFlag  **参数解释** 是否从统计维度展示数据 **约束限制** 不涉及 **取值范围** - false : 不从统计维度展示 - true  : 从统计维度展示  **默认取值** false
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'checkType' => 'setCheckType',
            'standard' => 'setStandard',
            'statisticsScanResult' => 'setStatisticsScanResult',
            'checkRuleName' => 'setCheckRuleName',
            'severity' => 'setSeverity',
            'clusterId' => 'setClusterId',
            'tag' => 'setTag',
            'policyGroupId' => 'setPolicyGroupId',
            'statisticsFlag' => 'setStatisticsFlag'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 不涉及
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * checkType  **参数解释** 配置检查（基线）的名称，例如SSH、CentOS 7、Windows **约束限制** 不涉及 **取值范围** 字符长度0-256位 **默认取值** 不涉及
    * standard  **参数解释** 标准类型 **约束限制** 不涉及 **取值范围** - cn_standard：等保合规标准 - hw_standard：云安全实践标准 - cis_standard：通用安全标准  **默认取值** 不涉及
    * statisticsScanResult  **参数解释** 统计结果类型 **约束限制** 不涉及 **取值范围** - pass：已通过，表示查看主机全部通过的检查项 - failed：未通过，表示查看主机全部未通过 & 全部未处理的检查项 - processed：已处理，表示查看主机存在未通过 & 未通过主机已全部处理(忽略、加白)的检查项  **默认取值** 不涉及
    * checkRuleName  **参数解释** 检查项（检查规则）名称，支持模糊匹配 **约束限制** 不涉及 **取值范围** 字符长度0-2048位 **默认取值** 不涉及
    * severity  **参数解释** 风险等级 **约束限制** 不涉及 **取值范围** - Security：安全 - Low：低危 - Medium：中危 - High：高危 - Critical：危急 **默认取值** 不涉及
    * clusterId  **参数解释** 集群ID **约束限制** 不涉及 **取值范围** 字符长度0-64位 **默认取值** 不涉及
    * tag  **参数解释** 基线检查项的类型 **约束限制** 不涉及 **取值范围** 字符长度0-256位 **默认取值** 不涉及
    * policyGroupId  **参数解释** 策略组ID，不赋值时，查租户所有主机，host_id存在时，此值无效 **约束限制** 不涉及 **取值范围** 字符长度0-128位 **默认取值** 不涉及
    * statisticsFlag  **参数解释** 是否从统计维度展示数据 **约束限制** 不涉及 **取值范围** - false : 不从统计维度展示 - true  : 从统计维度展示  **默认取值** false
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'checkType' => 'getCheckType',
            'standard' => 'getStandard',
            'statisticsScanResult' => 'getStatisticsScanResult',
            'checkRuleName' => 'getCheckRuleName',
            'severity' => 'getSeverity',
            'clusterId' => 'getClusterId',
            'tag' => 'getTag',
            'policyGroupId' => 'getPolicyGroupId',
            'statisticsFlag' => 'getStatisticsFlag'
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
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['checkType'] = isset($data['checkType']) ? $data['checkType'] : null;
        $this->container['standard'] = isset($data['standard']) ? $data['standard'] : null;
        $this->container['statisticsScanResult'] = isset($data['statisticsScanResult']) ? $data['statisticsScanResult'] : null;
        $this->container['checkRuleName'] = isset($data['checkRuleName']) ? $data['checkRuleName'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['policyGroupId'] = isset($data['policyGroupId']) ? $data['policyGroupId'] : null;
        $this->container['statisticsFlag'] = isset($data['statisticsFlag']) ? $data['statisticsFlag'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 256)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && !preg_match("/^.*$/", $this->container['enterpriseProjectId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['offset'] === null) {
            $invalidProperties[] = "'offset' can't be null";
        }
            if (($this->container['offset'] > 2000000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2000000.";
            }
            if (($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
        }
            if (($this->container['limit'] > 200)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 200.";
            }
            if (($this->container['limit'] < 10)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 10.";
            }
            if (!is_null($this->container['checkType']) && (mb_strlen($this->container['checkType']) > 256)) {
                $invalidProperties[] = "invalid value for 'checkType', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['checkType']) && (mb_strlen($this->container['checkType']) < 0)) {
                $invalidProperties[] = "invalid value for 'checkType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['checkType']) && !preg_match("/^.*$/", $this->container['checkType'])) {
                $invalidProperties[] = "invalid value for 'checkType', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['standard']) && (mb_strlen($this->container['standard']) > 32)) {
                $invalidProperties[] = "invalid value for 'standard', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['standard']) && (mb_strlen($this->container['standard']) < 0)) {
                $invalidProperties[] = "invalid value for 'standard', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['standard']) && !preg_match("/^(cn_standard|hw_standard|cis_standard)$/", $this->container['standard'])) {
                $invalidProperties[] = "invalid value for 'standard', must be conform to the pattern /^(cn_standard|hw_standard|cis_standard)$/.";
            }
            if (!is_null($this->container['statisticsScanResult']) && (mb_strlen($this->container['statisticsScanResult']) > 32)) {
                $invalidProperties[] = "invalid value for 'statisticsScanResult', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['statisticsScanResult']) && (mb_strlen($this->container['statisticsScanResult']) < 0)) {
                $invalidProperties[] = "invalid value for 'statisticsScanResult', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['statisticsScanResult']) && !preg_match("/^(pass|failed|processed)$/", $this->container['statisticsScanResult'])) {
                $invalidProperties[] = "invalid value for 'statisticsScanResult', must be conform to the pattern /^(pass|failed|processed)$/.";
            }
            if (!is_null($this->container['checkRuleName']) && (mb_strlen($this->container['checkRuleName']) > 2048)) {
                $invalidProperties[] = "invalid value for 'checkRuleName', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['checkRuleName']) && (mb_strlen($this->container['checkRuleName']) < 0)) {
                $invalidProperties[] = "invalid value for 'checkRuleName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['checkRuleName']) && !preg_match("/^.*$/", $this->container['checkRuleName'])) {
                $invalidProperties[] = "invalid value for 'checkRuleName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) > 255)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) < 0)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['severity']) && !preg_match("/^(Security|Low|Medium|High|Critical)$/", $this->container['severity'])) {
                $invalidProperties[] = "invalid value for 'severity', must be conform to the pattern /^(Security|Low|Medium|High|Critical)$/.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) > 64)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) < 0)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['clusterId']) && !preg_match("/^[a-zA-Z0-9_-]+$/", $this->container['clusterId'])) {
                $invalidProperties[] = "invalid value for 'clusterId', must be conform to the pattern /^[a-zA-Z0-9_-]+$/.";
            }
            if (!is_null($this->container['tag']) && (mb_strlen($this->container['tag']) > 256)) {
                $invalidProperties[] = "invalid value for 'tag', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['tag']) && (mb_strlen($this->container['tag']) < 0)) {
                $invalidProperties[] = "invalid value for 'tag', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['tag']) && !preg_match("/^.*$/", $this->container['tag'])) {
                $invalidProperties[] = "invalid value for 'tag', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['policyGroupId']) && (mb_strlen($this->container['policyGroupId']) > 128)) {
                $invalidProperties[] = "invalid value for 'policyGroupId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['policyGroupId']) && (mb_strlen($this->container['policyGroupId']) < 0)) {
                $invalidProperties[] = "invalid value for 'policyGroupId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['policyGroupId']) && !preg_match("/^[a-zA-Z0-9_-]+$/", $this->container['policyGroupId'])) {
                $invalidProperties[] = "invalid value for 'policyGroupId', must be conform to the pattern /^[a-zA-Z0-9_-]+$/.";
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
    * Gets enterpriseProjectId
    *  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
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
    * @param string|null $enterpriseProjectId **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 不涉及
    *
    * @return int
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int $offset **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 不涉及
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
    *  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    *
    * @return int
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int $limit **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets checkType
    *  **参数解释** 配置检查（基线）的名称，例如SSH、CentOS 7、Windows **约束限制** 不涉及 **取值范围** 字符长度0-256位 **默认取值** 不涉及
    *
    * @return string|null
    */
    public function getCheckType()
    {
        return $this->container['checkType'];
    }

    /**
    * Sets checkType
    *
    * @param string|null $checkType **参数解释** 配置检查（基线）的名称，例如SSH、CentOS 7、Windows **约束限制** 不涉及 **取值范围** 字符长度0-256位 **默认取值** 不涉及
    *
    * @return $this
    */
    public function setCheckType($checkType)
    {
        $this->container['checkType'] = $checkType;
        return $this;
    }

    /**
    * Gets standard
    *  **参数解释** 标准类型 **约束限制** 不涉及 **取值范围** - cn_standard：等保合规标准 - hw_standard：云安全实践标准 - cis_standard：通用安全标准  **默认取值** 不涉及
    *
    * @return string|null
    */
    public function getStandard()
    {
        return $this->container['standard'];
    }

    /**
    * Sets standard
    *
    * @param string|null $standard **参数解释** 标准类型 **约束限制** 不涉及 **取值范围** - cn_standard：等保合规标准 - hw_standard：云安全实践标准 - cis_standard：通用安全标准  **默认取值** 不涉及
    *
    * @return $this
    */
    public function setStandard($standard)
    {
        $this->container['standard'] = $standard;
        return $this;
    }

    /**
    * Gets statisticsScanResult
    *  **参数解释** 统计结果类型 **约束限制** 不涉及 **取值范围** - pass：已通过，表示查看主机全部通过的检查项 - failed：未通过，表示查看主机全部未通过 & 全部未处理的检查项 - processed：已处理，表示查看主机存在未通过 & 未通过主机已全部处理(忽略、加白)的检查项  **默认取值** 不涉及
    *
    * @return string|null
    */
    public function getStatisticsScanResult()
    {
        return $this->container['statisticsScanResult'];
    }

    /**
    * Sets statisticsScanResult
    *
    * @param string|null $statisticsScanResult **参数解释** 统计结果类型 **约束限制** 不涉及 **取值范围** - pass：已通过，表示查看主机全部通过的检查项 - failed：未通过，表示查看主机全部未通过 & 全部未处理的检查项 - processed：已处理，表示查看主机存在未通过 & 未通过主机已全部处理(忽略、加白)的检查项  **默认取值** 不涉及
    *
    * @return $this
    */
    public function setStatisticsScanResult($statisticsScanResult)
    {
        $this->container['statisticsScanResult'] = $statisticsScanResult;
        return $this;
    }

    /**
    * Gets checkRuleName
    *  **参数解释** 检查项（检查规则）名称，支持模糊匹配 **约束限制** 不涉及 **取值范围** 字符长度0-2048位 **默认取值** 不涉及
    *
    * @return string|null
    */
    public function getCheckRuleName()
    {
        return $this->container['checkRuleName'];
    }

    /**
    * Sets checkRuleName
    *
    * @param string|null $checkRuleName **参数解释** 检查项（检查规则）名称，支持模糊匹配 **约束限制** 不涉及 **取值范围** 字符长度0-2048位 **默认取值** 不涉及
    *
    * @return $this
    */
    public function setCheckRuleName($checkRuleName)
    {
        $this->container['checkRuleName'] = $checkRuleName;
        return $this;
    }

    /**
    * Gets severity
    *  **参数解释** 风险等级 **约束限制** 不涉及 **取值范围** - Security：安全 - Low：低危 - Medium：中危 - High：高危 - Critical：危急 **默认取值** 不涉及
    *
    * @return string|null
    */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
    * Sets severity
    *
    * @param string|null $severity **参数解释** 风险等级 **约束限制** 不涉及 **取值范围** - Security：安全 - Low：低危 - Medium：中危 - High：高危 - Critical：危急 **默认取值** 不涉及
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
        return $this;
    }

    /**
    * Gets clusterId
    *  **参数解释** 集群ID **约束限制** 不涉及 **取值范围** 字符长度0-64位 **默认取值** 不涉及
    *
    * @return string|null
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string|null $clusterId **参数解释** 集群ID **约束限制** 不涉及 **取值范围** 字符长度0-64位 **默认取值** 不涉及
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets tag
    *  **参数解释** 基线检查项的类型 **约束限制** 不涉及 **取值范围** 字符长度0-256位 **默认取值** 不涉及
    *
    * @return string|null
    */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
    * Sets tag
    *
    * @param string|null $tag **参数解释** 基线检查项的类型 **约束限制** 不涉及 **取值范围** 字符长度0-256位 **默认取值** 不涉及
    *
    * @return $this
    */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;
        return $this;
    }

    /**
    * Gets policyGroupId
    *  **参数解释** 策略组ID，不赋值时，查租户所有主机，host_id存在时，此值无效 **约束限制** 不涉及 **取值范围** 字符长度0-128位 **默认取值** 不涉及
    *
    * @return string|null
    */
    public function getPolicyGroupId()
    {
        return $this->container['policyGroupId'];
    }

    /**
    * Sets policyGroupId
    *
    * @param string|null $policyGroupId **参数解释** 策略组ID，不赋值时，查租户所有主机，host_id存在时，此值无效 **约束限制** 不涉及 **取值范围** 字符长度0-128位 **默认取值** 不涉及
    *
    * @return $this
    */
    public function setPolicyGroupId($policyGroupId)
    {
        $this->container['policyGroupId'] = $policyGroupId;
        return $this;
    }

    /**
    * Gets statisticsFlag
    *  **参数解释** 是否从统计维度展示数据 **约束限制** 不涉及 **取值范围** - false : 不从统计维度展示 - true  : 从统计维度展示  **默认取值** false
    *
    * @return bool|null
    */
    public function getStatisticsFlag()
    {
        return $this->container['statisticsFlag'];
    }

    /**
    * Sets statisticsFlag
    *
    * @param bool|null $statisticsFlag **参数解释** 是否从统计维度展示数据 **约束限制** 不涉及 **取值范围** - false : 不从统计维度展示 - true  : 从统计维度展示  **默认取值** false
    *
    * @return $this
    */
    public function setStatisticsFlag($statisticsFlag)
    {
        $this->container['statisticsFlag'] = $statisticsFlag;
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

