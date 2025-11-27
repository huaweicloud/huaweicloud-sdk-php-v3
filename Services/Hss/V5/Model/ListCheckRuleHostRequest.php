<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListCheckRuleHostRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListCheckRuleHostRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * checkRuleId  **参数解释** 具体基线检查项id **约束限制** 不涉及 **取值范围** - 值可以通过这个接口的返回数据获得：/v5/{project_id}/baseline/risk-config/{check_name}/check-rules  **默认取值** 不涉及
    * checkName  **参数解释** 配置检查（基线）的名称，如SSH、CentOS 7、Windows，与check_type相比，会多-PID之类的进程信息，通过具体基线维度查询时，传check_name **约束限制** 不涉及 **取值范围** 不涉及 **默认取值** 不涉及
    * checkType  **参数解释** 配置检查（基线）的类型，如SSH、CentOS 7、Windows，通过检查项维度查询时，传check_type **约束限制** 不涉及 **取值范围** 不涉及 **默认取值** 不涉及
    * standard  **参数解释** 基线分类 **约束限制** 不涉及 **取值范围** - cn_standard : 等保合规标准 - hw_standard : 云安全实践标准 - cis_standard：通用安全标准  **默认取值** 不涉及
    * resultType  **参数解释** 检测结果类型 **约束限制** 不涉及 **取值范围** - safe             : 已通过 - unhandled        : 未处理 - ignored          : 已忽略 - fixing           : 修复中 - fix-failed       : 修复失败 - verifying        : 验证中 - add_to_whitelist : 已加白  **默认取值** 不涉及
    * clusterId  **参数解释** 集群ID **约束限制** 不涉及 **取值范围** 字符长度0-64位 **默认取值** 不涉及
    * hostName  **参数解释** 主机名称或ip **约束限制** 不涉及 **取值范围** 不涉及 **默认取值** 不涉及
    * hostType  **参数解释** 主机类型，已废弃 **约束限制** 不涉及 **取值范围** - cce  **默认取值** 不涉及
    * checkCce  **参数解释**: 是否只筛选cce主机，已废弃 **约束限制**: 不涉及 **取值范围**: -true：是。 -false：否。  **默认取值**: false
    * policyGroupId  **参数解释** 策略组ID，已废弃 **约束限制** 不涉及 **取值范围** 字符长度0-128位 **默认取值** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'checkRuleId' => 'string',
            'checkName' => 'string',
            'checkType' => 'string',
            'standard' => 'string',
            'resultType' => 'string',
            'clusterId' => 'string',
            'hostName' => 'string',
            'hostType' => 'string',
            'checkCce' => 'bool',
            'policyGroupId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * checkRuleId  **参数解释** 具体基线检查项id **约束限制** 不涉及 **取值范围** - 值可以通过这个接口的返回数据获得：/v5/{project_id}/baseline/risk-config/{check_name}/check-rules  **默认取值** 不涉及
    * checkName  **参数解释** 配置检查（基线）的名称，如SSH、CentOS 7、Windows，与check_type相比，会多-PID之类的进程信息，通过具体基线维度查询时，传check_name **约束限制** 不涉及 **取值范围** 不涉及 **默认取值** 不涉及
    * checkType  **参数解释** 配置检查（基线）的类型，如SSH、CentOS 7、Windows，通过检查项维度查询时，传check_type **约束限制** 不涉及 **取值范围** 不涉及 **默认取值** 不涉及
    * standard  **参数解释** 基线分类 **约束限制** 不涉及 **取值范围** - cn_standard : 等保合规标准 - hw_standard : 云安全实践标准 - cis_standard：通用安全标准  **默认取值** 不涉及
    * resultType  **参数解释** 检测结果类型 **约束限制** 不涉及 **取值范围** - safe             : 已通过 - unhandled        : 未处理 - ignored          : 已忽略 - fixing           : 修复中 - fix-failed       : 修复失败 - verifying        : 验证中 - add_to_whitelist : 已加白  **默认取值** 不涉及
    * clusterId  **参数解释** 集群ID **约束限制** 不涉及 **取值范围** 字符长度0-64位 **默认取值** 不涉及
    * hostName  **参数解释** 主机名称或ip **约束限制** 不涉及 **取值范围** 不涉及 **默认取值** 不涉及
    * hostType  **参数解释** 主机类型，已废弃 **约束限制** 不涉及 **取值范围** - cce  **默认取值** 不涉及
    * checkCce  **参数解释**: 是否只筛选cce主机，已废弃 **约束限制**: 不涉及 **取值范围**: -true：是。 -false：否。  **默认取值**: false
    * policyGroupId  **参数解释** 策略组ID，已废弃 **约束限制** 不涉及 **取值范围** 字符长度0-128位 **默认取值** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'checkRuleId' => null,
        'checkName' => null,
        'checkType' => null,
        'standard' => null,
        'resultType' => null,
        'clusterId' => null,
        'hostName' => null,
        'hostType' => null,
        'checkCce' => null,
        'policyGroupId' => null
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
    * checkRuleId  **参数解释** 具体基线检查项id **约束限制** 不涉及 **取值范围** - 值可以通过这个接口的返回数据获得：/v5/{project_id}/baseline/risk-config/{check_name}/check-rules  **默认取值** 不涉及
    * checkName  **参数解释** 配置检查（基线）的名称，如SSH、CentOS 7、Windows，与check_type相比，会多-PID之类的进程信息，通过具体基线维度查询时，传check_name **约束限制** 不涉及 **取值范围** 不涉及 **默认取值** 不涉及
    * checkType  **参数解释** 配置检查（基线）的类型，如SSH、CentOS 7、Windows，通过检查项维度查询时，传check_type **约束限制** 不涉及 **取值范围** 不涉及 **默认取值** 不涉及
    * standard  **参数解释** 基线分类 **约束限制** 不涉及 **取值范围** - cn_standard : 等保合规标准 - hw_standard : 云安全实践标准 - cis_standard：通用安全标准  **默认取值** 不涉及
    * resultType  **参数解释** 检测结果类型 **约束限制** 不涉及 **取值范围** - safe             : 已通过 - unhandled        : 未处理 - ignored          : 已忽略 - fixing           : 修复中 - fix-failed       : 修复失败 - verifying        : 验证中 - add_to_whitelist : 已加白  **默认取值** 不涉及
    * clusterId  **参数解释** 集群ID **约束限制** 不涉及 **取值范围** 字符长度0-64位 **默认取值** 不涉及
    * hostName  **参数解释** 主机名称或ip **约束限制** 不涉及 **取值范围** 不涉及 **默认取值** 不涉及
    * hostType  **参数解释** 主机类型，已废弃 **约束限制** 不涉及 **取值范围** - cce  **默认取值** 不涉及
    * checkCce  **参数解释**: 是否只筛选cce主机，已废弃 **约束限制**: 不涉及 **取值范围**: -true：是。 -false：否。  **默认取值**: false
    * policyGroupId  **参数解释** 策略组ID，已废弃 **约束限制** 不涉及 **取值范围** 字符长度0-128位 **默认取值** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'checkRuleId' => 'check_rule_id',
            'checkName' => 'check_name',
            'checkType' => 'check_type',
            'standard' => 'standard',
            'resultType' => 'result_type',
            'clusterId' => 'cluster_id',
            'hostName' => 'host_name',
            'hostType' => 'host_type',
            'checkCce' => 'check_cce',
            'policyGroupId' => 'policy_group_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * checkRuleId  **参数解释** 具体基线检查项id **约束限制** 不涉及 **取值范围** - 值可以通过这个接口的返回数据获得：/v5/{project_id}/baseline/risk-config/{check_name}/check-rules  **默认取值** 不涉及
    * checkName  **参数解释** 配置检查（基线）的名称，如SSH、CentOS 7、Windows，与check_type相比，会多-PID之类的进程信息，通过具体基线维度查询时，传check_name **约束限制** 不涉及 **取值范围** 不涉及 **默认取值** 不涉及
    * checkType  **参数解释** 配置检查（基线）的类型，如SSH、CentOS 7、Windows，通过检查项维度查询时，传check_type **约束限制** 不涉及 **取值范围** 不涉及 **默认取值** 不涉及
    * standard  **参数解释** 基线分类 **约束限制** 不涉及 **取值范围** - cn_standard : 等保合规标准 - hw_standard : 云安全实践标准 - cis_standard：通用安全标准  **默认取值** 不涉及
    * resultType  **参数解释** 检测结果类型 **约束限制** 不涉及 **取值范围** - safe             : 已通过 - unhandled        : 未处理 - ignored          : 已忽略 - fixing           : 修复中 - fix-failed       : 修复失败 - verifying        : 验证中 - add_to_whitelist : 已加白  **默认取值** 不涉及
    * clusterId  **参数解释** 集群ID **约束限制** 不涉及 **取值范围** 字符长度0-64位 **默认取值** 不涉及
    * hostName  **参数解释** 主机名称或ip **约束限制** 不涉及 **取值范围** 不涉及 **默认取值** 不涉及
    * hostType  **参数解释** 主机类型，已废弃 **约束限制** 不涉及 **取值范围** - cce  **默认取值** 不涉及
    * checkCce  **参数解释**: 是否只筛选cce主机，已废弃 **约束限制**: 不涉及 **取值范围**: -true：是。 -false：否。  **默认取值**: false
    * policyGroupId  **参数解释** 策略组ID，已废弃 **约束限制** 不涉及 **取值范围** 字符长度0-128位 **默认取值** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'checkRuleId' => 'setCheckRuleId',
            'checkName' => 'setCheckName',
            'checkType' => 'setCheckType',
            'standard' => 'setStandard',
            'resultType' => 'setResultType',
            'clusterId' => 'setClusterId',
            'hostName' => 'setHostName',
            'hostType' => 'setHostType',
            'checkCce' => 'setCheckCce',
            'policyGroupId' => 'setPolicyGroupId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * checkRuleId  **参数解释** 具体基线检查项id **约束限制** 不涉及 **取值范围** - 值可以通过这个接口的返回数据获得：/v5/{project_id}/baseline/risk-config/{check_name}/check-rules  **默认取值** 不涉及
    * checkName  **参数解释** 配置检查（基线）的名称，如SSH、CentOS 7、Windows，与check_type相比，会多-PID之类的进程信息，通过具体基线维度查询时，传check_name **约束限制** 不涉及 **取值范围** 不涉及 **默认取值** 不涉及
    * checkType  **参数解释** 配置检查（基线）的类型，如SSH、CentOS 7、Windows，通过检查项维度查询时，传check_type **约束限制** 不涉及 **取值范围** 不涉及 **默认取值** 不涉及
    * standard  **参数解释** 基线分类 **约束限制** 不涉及 **取值范围** - cn_standard : 等保合规标准 - hw_standard : 云安全实践标准 - cis_standard：通用安全标准  **默认取值** 不涉及
    * resultType  **参数解释** 检测结果类型 **约束限制** 不涉及 **取值范围** - safe             : 已通过 - unhandled        : 未处理 - ignored          : 已忽略 - fixing           : 修复中 - fix-failed       : 修复失败 - verifying        : 验证中 - add_to_whitelist : 已加白  **默认取值** 不涉及
    * clusterId  **参数解释** 集群ID **约束限制** 不涉及 **取值范围** 字符长度0-64位 **默认取值** 不涉及
    * hostName  **参数解释** 主机名称或ip **约束限制** 不涉及 **取值范围** 不涉及 **默认取值** 不涉及
    * hostType  **参数解释** 主机类型，已废弃 **约束限制** 不涉及 **取值范围** - cce  **默认取值** 不涉及
    * checkCce  **参数解释**: 是否只筛选cce主机，已废弃 **约束限制**: 不涉及 **取值范围**: -true：是。 -false：否。  **默认取值**: false
    * policyGroupId  **参数解释** 策略组ID，已废弃 **约束限制** 不涉及 **取值范围** 字符长度0-128位 **默认取值** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'checkRuleId' => 'getCheckRuleId',
            'checkName' => 'getCheckName',
            'checkType' => 'getCheckType',
            'standard' => 'getStandard',
            'resultType' => 'getResultType',
            'clusterId' => 'getClusterId',
            'hostName' => 'getHostName',
            'hostType' => 'getHostType',
            'checkCce' => 'getCheckCce',
            'policyGroupId' => 'getPolicyGroupId'
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
        $this->container['checkRuleId'] = isset($data['checkRuleId']) ? $data['checkRuleId'] : null;
        $this->container['checkName'] = isset($data['checkName']) ? $data['checkName'] : null;
        $this->container['checkType'] = isset($data['checkType']) ? $data['checkType'] : null;
        $this->container['standard'] = isset($data['standard']) ? $data['standard'] : null;
        $this->container['resultType'] = isset($data['resultType']) ? $data['resultType'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['hostType'] = isset($data['hostType']) ? $data['hostType'] : null;
        $this->container['checkCce'] = isset($data['checkCce']) ? $data['checkCce'] : null;
        $this->container['policyGroupId'] = isset($data['policyGroupId']) ? $data['policyGroupId'] : null;
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
        if ($this->container['checkRuleId'] === null) {
            $invalidProperties[] = "'checkRuleId' can't be null";
        }
            if ((mb_strlen($this->container['checkRuleId']) > 256)) {
                $invalidProperties[] = "invalid value for 'checkRuleId', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['checkRuleId']) < 0)) {
                $invalidProperties[] = "invalid value for 'checkRuleId', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/^.*$/", $this->container['checkRuleId'])) {
                $invalidProperties[] = "invalid value for 'checkRuleId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['checkName']) && (mb_strlen($this->container['checkName']) > 256)) {
                $invalidProperties[] = "invalid value for 'checkName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['checkName']) && (mb_strlen($this->container['checkName']) < 0)) {
                $invalidProperties[] = "invalid value for 'checkName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['checkName']) && !preg_match("/^.*$/", $this->container['checkName'])) {
                $invalidProperties[] = "invalid value for 'checkName', must be conform to the pattern /^.*$/.";
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
        if ($this->container['standard'] === null) {
            $invalidProperties[] = "'standard' can't be null";
        }
            if ((mb_strlen($this->container['standard']) > 32)) {
                $invalidProperties[] = "invalid value for 'standard', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['standard']) < 0)) {
                $invalidProperties[] = "invalid value for 'standard', the character length must be bigger than or equal to 0.";
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
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) > 64)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) < 0)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['clusterId']) && !preg_match("/^[a-zA-Z0-9_-]+$/", $this->container['clusterId'])) {
                $invalidProperties[] = "invalid value for 'clusterId', must be conform to the pattern /^[a-zA-Z0-9_-]+$/.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostType']) && (mb_strlen($this->container['hostType']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostType', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostType']) && (mb_strlen($this->container['hostType']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostType', the character length must be bigger than or equal to 0.";
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
    * Gets checkRuleId
    *  **参数解释** 具体基线检查项id **约束限制** 不涉及 **取值范围** - 值可以通过这个接口的返回数据获得：/v5/{project_id}/baseline/risk-config/{check_name}/check-rules  **默认取值** 不涉及
    *
    * @return string
    */
    public function getCheckRuleId()
    {
        return $this->container['checkRuleId'];
    }

    /**
    * Sets checkRuleId
    *
    * @param string $checkRuleId **参数解释** 具体基线检查项id **约束限制** 不涉及 **取值范围** - 值可以通过这个接口的返回数据获得：/v5/{project_id}/baseline/risk-config/{check_name}/check-rules  **默认取值** 不涉及
    *
    * @return $this
    */
    public function setCheckRuleId($checkRuleId)
    {
        $this->container['checkRuleId'] = $checkRuleId;
        return $this;
    }

    /**
    * Gets checkName
    *  **参数解释** 配置检查（基线）的名称，如SSH、CentOS 7、Windows，与check_type相比，会多-PID之类的进程信息，通过具体基线维度查询时，传check_name **约束限制** 不涉及 **取值范围** 不涉及 **默认取值** 不涉及
    *
    * @return string|null
    */
    public function getCheckName()
    {
        return $this->container['checkName'];
    }

    /**
    * Sets checkName
    *
    * @param string|null $checkName **参数解释** 配置检查（基线）的名称，如SSH、CentOS 7、Windows，与check_type相比，会多-PID之类的进程信息，通过具体基线维度查询时，传check_name **约束限制** 不涉及 **取值范围** 不涉及 **默认取值** 不涉及
    *
    * @return $this
    */
    public function setCheckName($checkName)
    {
        $this->container['checkName'] = $checkName;
        return $this;
    }

    /**
    * Gets checkType
    *  **参数解释** 配置检查（基线）的类型，如SSH、CentOS 7、Windows，通过检查项维度查询时，传check_type **约束限制** 不涉及 **取值范围** 不涉及 **默认取值** 不涉及
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
    * @param string|null $checkType **参数解释** 配置检查（基线）的类型，如SSH、CentOS 7、Windows，通过检查项维度查询时，传check_type **约束限制** 不涉及 **取值范围** 不涉及 **默认取值** 不涉及
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
    *  **参数解释** 基线分类 **约束限制** 不涉及 **取值范围** - cn_standard : 等保合规标准 - hw_standard : 云安全实践标准 - cis_standard：通用安全标准  **默认取值** 不涉及
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
    * @param string $standard **参数解释** 基线分类 **约束限制** 不涉及 **取值范围** - cn_standard : 等保合规标准 - hw_standard : 云安全实践标准 - cis_standard：通用安全标准  **默认取值** 不涉及
    *
    * @return $this
    */
    public function setStandard($standard)
    {
        $this->container['standard'] = $standard;
        return $this;
    }

    /**
    * Gets resultType
    *  **参数解释** 检测结果类型 **约束限制** 不涉及 **取值范围** - safe             : 已通过 - unhandled        : 未处理 - ignored          : 已忽略 - fixing           : 修复中 - fix-failed       : 修复失败 - verifying        : 验证中 - add_to_whitelist : 已加白  **默认取值** 不涉及
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
    * @param string|null $resultType **参数解释** 检测结果类型 **约束限制** 不涉及 **取值范围** - safe             : 已通过 - unhandled        : 未处理 - ignored          : 已忽略 - fixing           : 修复中 - fix-failed       : 修复失败 - verifying        : 验证中 - add_to_whitelist : 已加白  **默认取值** 不涉及
    *
    * @return $this
    */
    public function setResultType($resultType)
    {
        $this->container['resultType'] = $resultType;
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
    * Gets hostName
    *  **参数解释** 主机名称或ip **约束限制** 不涉及 **取值范围** 不涉及 **默认取值** 不涉及
    *
    * @return string|null
    */
    public function getHostName()
    {
        return $this->container['hostName'];
    }

    /**
    * Sets hostName
    *
    * @param string|null $hostName **参数解释** 主机名称或ip **约束限制** 不涉及 **取值范围** 不涉及 **默认取值** 不涉及
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets hostType
    *  **参数解释** 主机类型，已废弃 **约束限制** 不涉及 **取值范围** - cce  **默认取值** 不涉及
    *
    * @return string|null
    */
    public function getHostType()
    {
        return $this->container['hostType'];
    }

    /**
    * Sets hostType
    *
    * @param string|null $hostType **参数解释** 主机类型，已废弃 **约束限制** 不涉及 **取值范围** - cce  **默认取值** 不涉及
    *
    * @return $this
    */
    public function setHostType($hostType)
    {
        $this->container['hostType'] = $hostType;
        return $this;
    }

    /**
    * Gets checkCce
    *  **参数解释**: 是否只筛选cce主机，已废弃 **约束限制**: 不涉及 **取值范围**: -true：是。 -false：否。  **默认取值**: false
    *
    * @return bool|null
    */
    public function getCheckCce()
    {
        return $this->container['checkCce'];
    }

    /**
    * Sets checkCce
    *
    * @param bool|null $checkCce **参数解释**: 是否只筛选cce主机，已废弃 **约束限制**: 不涉及 **取值范围**: -true：是。 -false：否。  **默认取值**: false
    *
    * @return $this
    */
    public function setCheckCce($checkCce)
    {
        $this->container['checkCce'] = $checkCce;
        return $this;
    }

    /**
    * Gets policyGroupId
    *  **参数解释** 策略组ID，已废弃 **约束限制** 不涉及 **取值范围** 字符长度0-128位 **默认取值** 不涉及
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
    * @param string|null $policyGroupId **参数解释** 策略组ID，已废弃 **约束限制** 不涉及 **取值范围** 字符长度0-128位 **默认取值** 不涉及
    *
    * @return $this
    */
    public function setPolicyGroupId($policyGroupId)
    {
        $this->container['policyGroupId'] = $policyGroupId;
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

