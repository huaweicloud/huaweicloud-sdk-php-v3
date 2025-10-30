<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListHostCheckRulesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListHostCheckRulesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * hostId  **参数解释** 主机ID **约束限制** 不涉及 **取值范围** 字符长度0-64位 **默认取值** 不涉及
    * policyGroupId  **参数解释** 策略组ID **约束限制** 不涉及 **取值范围** 字符长度0-128位 **默认取值** 不涉及
    * resultType  **参数解释** 检测结果类型 **约束限制** 不涉及 **取值范围** - safe：已通过 - unhandled： 未处理 - ignored：已忽略 - fixing：修复中 - fix-failed：修复失败 - verifying：验证中 - add_to_whitelist：已加白  **默认取值** 不涉及
    * standard  **参数解释** 基线分类 **约束限制** 不涉及 **取值范围** - cn_standard：等保合规标准 - hw_standard：云安全实践标准 - cis_standard：通用安全标准  **默认取值** 不涉及
    * checkName  **参数解释** 配置检查（基线）的名称，如SSH、CentOS 7、Windows **约束限制** 不涉及 **取值范围** 不涉及 **默认取值** 不涉及
    * checkRuleName  **参数解释** 检查项（检查规则）名称，支持模糊匹配 **约束限制** 不涉及 **取值范围** 字符长度0-2048位 **默认取值** 不涉及
    * tag  **参数解释** 基线检查项的类型 **约束限制** 不涉及 **取值范围** 字符长度0-256位 **默认取值** 不涉及
    * severity  **参数解释** 风险等级 **约束限制** 不涉及 **取值范围** - Security：安全 - Low：低危 - Medium：中危 - High：高危 - Critical：危急  **默认取值** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'hostId' => 'string',
            'policyGroupId' => 'string',
            'resultType' => 'string',
            'standard' => 'string',
            'checkName' => 'string',
            'checkRuleName' => 'string',
            'tag' => 'string',
            'severity' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * hostId  **参数解释** 主机ID **约束限制** 不涉及 **取值范围** 字符长度0-64位 **默认取值** 不涉及
    * policyGroupId  **参数解释** 策略组ID **约束限制** 不涉及 **取值范围** 字符长度0-128位 **默认取值** 不涉及
    * resultType  **参数解释** 检测结果类型 **约束限制** 不涉及 **取值范围** - safe：已通过 - unhandled： 未处理 - ignored：已忽略 - fixing：修复中 - fix-failed：修复失败 - verifying：验证中 - add_to_whitelist：已加白  **默认取值** 不涉及
    * standard  **参数解释** 基线分类 **约束限制** 不涉及 **取值范围** - cn_standard：等保合规标准 - hw_standard：云安全实践标准 - cis_standard：通用安全标准  **默认取值** 不涉及
    * checkName  **参数解释** 配置检查（基线）的名称，如SSH、CentOS 7、Windows **约束限制** 不涉及 **取值范围** 不涉及 **默认取值** 不涉及
    * checkRuleName  **参数解释** 检查项（检查规则）名称，支持模糊匹配 **约束限制** 不涉及 **取值范围** 字符长度0-2048位 **默认取值** 不涉及
    * tag  **参数解释** 基线检查项的类型 **约束限制** 不涉及 **取值范围** 字符长度0-256位 **默认取值** 不涉及
    * severity  **参数解释** 风险等级 **约束限制** 不涉及 **取值范围** - Security：安全 - Low：低危 - Medium：中危 - High：高危 - Critical：危急  **默认取值** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'hostId' => null,
        'policyGroupId' => null,
        'resultType' => null,
        'standard' => null,
        'checkName' => null,
        'checkRuleName' => null,
        'tag' => null,
        'severity' => null
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
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * hostId  **参数解释** 主机ID **约束限制** 不涉及 **取值范围** 字符长度0-64位 **默认取值** 不涉及
    * policyGroupId  **参数解释** 策略组ID **约束限制** 不涉及 **取值范围** 字符长度0-128位 **默认取值** 不涉及
    * resultType  **参数解释** 检测结果类型 **约束限制** 不涉及 **取值范围** - safe：已通过 - unhandled： 未处理 - ignored：已忽略 - fixing：修复中 - fix-failed：修复失败 - verifying：验证中 - add_to_whitelist：已加白  **默认取值** 不涉及
    * standard  **参数解释** 基线分类 **约束限制** 不涉及 **取值范围** - cn_standard：等保合规标准 - hw_standard：云安全实践标准 - cis_standard：通用安全标准  **默认取值** 不涉及
    * checkName  **参数解释** 配置检查（基线）的名称，如SSH、CentOS 7、Windows **约束限制** 不涉及 **取值范围** 不涉及 **默认取值** 不涉及
    * checkRuleName  **参数解释** 检查项（检查规则）名称，支持模糊匹配 **约束限制** 不涉及 **取值范围** 字符长度0-2048位 **默认取值** 不涉及
    * tag  **参数解释** 基线检查项的类型 **约束限制** 不涉及 **取值范围** 字符长度0-256位 **默认取值** 不涉及
    * severity  **参数解释** 风险等级 **约束限制** 不涉及 **取值范围** - Security：安全 - Low：低危 - Medium：中危 - High：高危 - Critical：危急  **默认取值** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'hostId' => 'host_id',
            'policyGroupId' => 'policy_group_id',
            'resultType' => 'result_type',
            'standard' => 'standard',
            'checkName' => 'check_name',
            'checkRuleName' => 'check_rule_name',
            'tag' => 'tag',
            'severity' => 'severity'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * hostId  **参数解释** 主机ID **约束限制** 不涉及 **取值范围** 字符长度0-64位 **默认取值** 不涉及
    * policyGroupId  **参数解释** 策略组ID **约束限制** 不涉及 **取值范围** 字符长度0-128位 **默认取值** 不涉及
    * resultType  **参数解释** 检测结果类型 **约束限制** 不涉及 **取值范围** - safe：已通过 - unhandled： 未处理 - ignored：已忽略 - fixing：修复中 - fix-failed：修复失败 - verifying：验证中 - add_to_whitelist：已加白  **默认取值** 不涉及
    * standard  **参数解释** 基线分类 **约束限制** 不涉及 **取值范围** - cn_standard：等保合规标准 - hw_standard：云安全实践标准 - cis_standard：通用安全标准  **默认取值** 不涉及
    * checkName  **参数解释** 配置检查（基线）的名称，如SSH、CentOS 7、Windows **约束限制** 不涉及 **取值范围** 不涉及 **默认取值** 不涉及
    * checkRuleName  **参数解释** 检查项（检查规则）名称，支持模糊匹配 **约束限制** 不涉及 **取值范围** 字符长度0-2048位 **默认取值** 不涉及
    * tag  **参数解释** 基线检查项的类型 **约束限制** 不涉及 **取值范围** 字符长度0-256位 **默认取值** 不涉及
    * severity  **参数解释** 风险等级 **约束限制** 不涉及 **取值范围** - Security：安全 - Low：低危 - Medium：中危 - High：高危 - Critical：危急  **默认取值** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'hostId' => 'setHostId',
            'policyGroupId' => 'setPolicyGroupId',
            'resultType' => 'setResultType',
            'standard' => 'setStandard',
            'checkName' => 'setCheckName',
            'checkRuleName' => 'setCheckRuleName',
            'tag' => 'setTag',
            'severity' => 'setSeverity'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * hostId  **参数解释** 主机ID **约束限制** 不涉及 **取值范围** 字符长度0-64位 **默认取值** 不涉及
    * policyGroupId  **参数解释** 策略组ID **约束限制** 不涉及 **取值范围** 字符长度0-128位 **默认取值** 不涉及
    * resultType  **参数解释** 检测结果类型 **约束限制** 不涉及 **取值范围** - safe：已通过 - unhandled： 未处理 - ignored：已忽略 - fixing：修复中 - fix-failed：修复失败 - verifying：验证中 - add_to_whitelist：已加白  **默认取值** 不涉及
    * standard  **参数解释** 基线分类 **约束限制** 不涉及 **取值范围** - cn_standard：等保合规标准 - hw_standard：云安全实践标准 - cis_standard：通用安全标准  **默认取值** 不涉及
    * checkName  **参数解释** 配置检查（基线）的名称，如SSH、CentOS 7、Windows **约束限制** 不涉及 **取值范围** 不涉及 **默认取值** 不涉及
    * checkRuleName  **参数解释** 检查项（检查规则）名称，支持模糊匹配 **约束限制** 不涉及 **取值范围** 字符长度0-2048位 **默认取值** 不涉及
    * tag  **参数解释** 基线检查项的类型 **约束限制** 不涉及 **取值范围** 字符长度0-256位 **默认取值** 不涉及
    * severity  **参数解释** 风险等级 **约束限制** 不涉及 **取值范围** - Security：安全 - Low：低危 - Medium：中危 - High：高危 - Critical：危急  **默认取值** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'hostId' => 'getHostId',
            'policyGroupId' => 'getPolicyGroupId',
            'resultType' => 'getResultType',
            'standard' => 'getStandard',
            'checkName' => 'getCheckName',
            'checkRuleName' => 'getCheckRuleName',
            'tag' => 'getTag',
            'severity' => 'getSeverity'
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
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['policyGroupId'] = isset($data['policyGroupId']) ? $data['policyGroupId'] : null;
        $this->container['resultType'] = isset($data['resultType']) ? $data['resultType'] : null;
        $this->container['standard'] = isset($data['standard']) ? $data['standard'] : null;
        $this->container['checkName'] = isset($data['checkName']) ? $data['checkName'] : null;
        $this->container['checkRuleName'] = isset($data['checkRuleName']) ? $data['checkRuleName'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
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
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2000000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2000000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 200)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 10)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 10.";
            }
        if ($this->container['hostId'] === null) {
            $invalidProperties[] = "'hostId' can't be null";
        }
            if ((mb_strlen($this->container['hostId']) > 64)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['hostId']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/^[a-zA-Z0-9_-]+$/", $this->container['hostId'])) {
                $invalidProperties[] = "invalid value for 'hostId', must be conform to the pattern /^[a-zA-Z0-9_-]+$/.";
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
            if (!is_null($this->container['resultType']) && (mb_strlen($this->container['resultType']) > 32)) {
                $invalidProperties[] = "invalid value for 'resultType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['resultType']) && (mb_strlen($this->container['resultType']) < 0)) {
                $invalidProperties[] = "invalid value for 'resultType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resultType']) && !preg_match("/^(safe|unhandled|ignored|fixing|fix-failed|verifying|add_to_whitelist)$/", $this->container['resultType'])) {
                $invalidProperties[] = "invalid value for 'resultType', must be conform to the pattern /^(safe|unhandled|ignored|fixing|fix-failed|verifying|add_to_whitelist)$/.";
            }
        if ($this->container['standard'] === null) {
            $invalidProperties[] = "'standard' can't be null";
        }
            if ((mb_strlen($this->container['standard']) > 32)) {
                $invalidProperties[] = "invalid value for 'standard', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['standard']) < 0)) {
                $invalidProperties[] = "invalid value for 'standard', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['checkName'] === null) {
            $invalidProperties[] = "'checkName' can't be null";
        }
            if ((mb_strlen($this->container['checkName']) > 256)) {
                $invalidProperties[] = "invalid value for 'checkName', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['checkName']) < 0)) {
                $invalidProperties[] = "invalid value for 'checkName', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/^.*$/", $this->container['checkName'])) {
                $invalidProperties[] = "invalid value for 'checkName', must be conform to the pattern /^.*$/.";
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
            if (!is_null($this->container['tag']) && (mb_strlen($this->container['tag']) > 256)) {
                $invalidProperties[] = "invalid value for 'tag', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['tag']) && (mb_strlen($this->container['tag']) < 0)) {
                $invalidProperties[] = "invalid value for 'tag', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['tag']) && !preg_match("/^.*$/", $this->container['tag'])) {
                $invalidProperties[] = "invalid value for 'tag', must be conform to the pattern /^.*$/.";
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
    *  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
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
    * @param int|null $offset **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
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
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets hostId
    *  **参数解释** 主机ID **约束限制** 不涉及 **取值范围** 字符长度0-64位 **默认取值** 不涉及
    *
    * @return string
    */
    public function getHostId()
    {
        return $this->container['hostId'];
    }

    /**
    * Sets hostId
    *
    * @param string $hostId **参数解释** 主机ID **约束限制** 不涉及 **取值范围** 字符长度0-64位 **默认取值** 不涉及
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets policyGroupId
    *  **参数解释** 策略组ID **约束限制** 不涉及 **取值范围** 字符长度0-128位 **默认取值** 不涉及
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
    * @param string|null $policyGroupId **参数解释** 策略组ID **约束限制** 不涉及 **取值范围** 字符长度0-128位 **默认取值** 不涉及
    *
    * @return $this
    */
    public function setPolicyGroupId($policyGroupId)
    {
        $this->container['policyGroupId'] = $policyGroupId;
        return $this;
    }

    /**
    * Gets resultType
    *  **参数解释** 检测结果类型 **约束限制** 不涉及 **取值范围** - safe：已通过 - unhandled： 未处理 - ignored：已忽略 - fixing：修复中 - fix-failed：修复失败 - verifying：验证中 - add_to_whitelist：已加白  **默认取值** 不涉及
    *
    * @return string|null
    */
    public function getResultType()
    {
        return $this->container['resultType'];
    }

    /**
    * Sets resultType
    *
    * @param string|null $resultType **参数解释** 检测结果类型 **约束限制** 不涉及 **取值范围** - safe：已通过 - unhandled： 未处理 - ignored：已忽略 - fixing：修复中 - fix-failed：修复失败 - verifying：验证中 - add_to_whitelist：已加白  **默认取值** 不涉及
    *
    * @return $this
    */
    public function setResultType($resultType)
    {
        $this->container['resultType'] = $resultType;
        return $this;
    }

    /**
    * Gets standard
    *  **参数解释** 基线分类 **约束限制** 不涉及 **取值范围** - cn_standard：等保合规标准 - hw_standard：云安全实践标准 - cis_standard：通用安全标准  **默认取值** 不涉及
    *
    * @return string
    */
    public function getStandard()
    {
        return $this->container['standard'];
    }

    /**
    * Sets standard
    *
    * @param string $standard **参数解释** 基线分类 **约束限制** 不涉及 **取值范围** - cn_standard：等保合规标准 - hw_standard：云安全实践标准 - cis_standard：通用安全标准  **默认取值** 不涉及
    *
    * @return $this
    */
    public function setStandard($standard)
    {
        $this->container['standard'] = $standard;
        return $this;
    }

    /**
    * Gets checkName
    *  **参数解释** 配置检查（基线）的名称，如SSH、CentOS 7、Windows **约束限制** 不涉及 **取值范围** 不涉及 **默认取值** 不涉及
    *
    * @return string
    */
    public function getCheckName()
    {
        return $this->container['checkName'];
    }

    /**
    * Sets checkName
    *
    * @param string $checkName **参数解释** 配置检查（基线）的名称，如SSH、CentOS 7、Windows **约束限制** 不涉及 **取值范围** 不涉及 **默认取值** 不涉及
    *
    * @return $this
    */
    public function setCheckName($checkName)
    {
        $this->container['checkName'] = $checkName;
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
    * Gets severity
    *  **参数解释** 风险等级 **约束限制** 不涉及 **取值范围** - Security：安全 - Low：低危 - Medium：中危 - High：高危 - Critical：危急  **默认取值** 不涉及
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
    * @param string|null $severity **参数解释** 风险等级 **约束限制** 不涉及 **取值范围** - Security：安全 - Low：低危 - Medium：中危 - High：高危 - Critical：危急  **默认取值** 不涉及
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
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

