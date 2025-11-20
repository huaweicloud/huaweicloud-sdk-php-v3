<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDefaultSecurityCheckPolicyDetailsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDefaultSecurityCheckPolicyDetailsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 不涉及
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * supportOs  **参数解释** 策略支持的操作系统类型 **约束限制** 不涉及 **取值范围** - Linux : Linux操作系统 - Windows : Windows操作系统  **默认取值** Linux
    * checkType  **参数解释** 配置检查（基线）的类型,例如SSH、CentOS 7、Windows Server 2019 R2、Windows Server 2016 R2、MySQL5-Windows、weakpwd、pwdcomplexity **约束限制** 不涉及 **取值范围** 字符长度0-256位 **默认取值** 不涉及
    * standard  **参数解释** 标准类型 **约束限制** 不涉及 **取值范围** - cn_standard : 等保合规标准 - hw_standard : 云安全实践标准 - cis_standard: 通用安全标准  **默认取值** 不涉及
    * tag  **参数解释** 基线检查项的类型 **约束限制** 不涉及 **取值范围** 字符长度0-256位 **默认取值** 不涉及
    * checkRuleName  **参数解释** 配置检查（基线）检查项的名称 **约束限制** 不涉及 **取值范围** 字符长度0-2048位 **默认取值** 不涉及
    * severity  **参数解释** 配置检查（基线）检查项的风险程度 **约束限制** 不涉及 **取值范围** - Low    : 低危 - Medium : 中危 - High   : 高危  **默认取值** 不涉及
    * level  **参数解释** 配置检查（基线）检查项的版本信息 **约束限制** 不涉及 **取值范围** 字符长度0-32位 **默认取值** 不涉及
    * groupId  **参数解释** 策略组ID **约束限制** 不涉及 **取值范围** 字符长度0-128位 **默认取值** 不涉及
    * checked  **参数解释** 默认是否被选中 **约束限制** 不涉及 **取值范围** false : 不选中 true  : 默认  **默认取值** true
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'supportOs' => 'string',
            'checkType' => 'string',
            'standard' => 'string',
            'tag' => 'string',
            'checkRuleName' => 'string',
            'severity' => 'string',
            'level' => 'string',
            'groupId' => 'string',
            'checked' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 不涉及
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * supportOs  **参数解释** 策略支持的操作系统类型 **约束限制** 不涉及 **取值范围** - Linux : Linux操作系统 - Windows : Windows操作系统  **默认取值** Linux
    * checkType  **参数解释** 配置检查（基线）的类型,例如SSH、CentOS 7、Windows Server 2019 R2、Windows Server 2016 R2、MySQL5-Windows、weakpwd、pwdcomplexity **约束限制** 不涉及 **取值范围** 字符长度0-256位 **默认取值** 不涉及
    * standard  **参数解释** 标准类型 **约束限制** 不涉及 **取值范围** - cn_standard : 等保合规标准 - hw_standard : 云安全实践标准 - cis_standard: 通用安全标准  **默认取值** 不涉及
    * tag  **参数解释** 基线检查项的类型 **约束限制** 不涉及 **取值范围** 字符长度0-256位 **默认取值** 不涉及
    * checkRuleName  **参数解释** 配置检查（基线）检查项的名称 **约束限制** 不涉及 **取值范围** 字符长度0-2048位 **默认取值** 不涉及
    * severity  **参数解释** 配置检查（基线）检查项的风险程度 **约束限制** 不涉及 **取值范围** - Low    : 低危 - Medium : 中危 - High   : 高危  **默认取值** 不涉及
    * level  **参数解释** 配置检查（基线）检查项的版本信息 **约束限制** 不涉及 **取值范围** 字符长度0-32位 **默认取值** 不涉及
    * groupId  **参数解释** 策略组ID **约束限制** 不涉及 **取值范围** 字符长度0-128位 **默认取值** 不涉及
    * checked  **参数解释** 默认是否被选中 **约束限制** 不涉及 **取值范围** false : 不选中 true  : 默认  **默认取值** true
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'supportOs' => null,
        'checkType' => null,
        'standard' => null,
        'tag' => null,
        'checkRuleName' => null,
        'severity' => null,
        'level' => null,
        'groupId' => null,
        'checked' => null
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
    * supportOs  **参数解释** 策略支持的操作系统类型 **约束限制** 不涉及 **取值范围** - Linux : Linux操作系统 - Windows : Windows操作系统  **默认取值** Linux
    * checkType  **参数解释** 配置检查（基线）的类型,例如SSH、CentOS 7、Windows Server 2019 R2、Windows Server 2016 R2、MySQL5-Windows、weakpwd、pwdcomplexity **约束限制** 不涉及 **取值范围** 字符长度0-256位 **默认取值** 不涉及
    * standard  **参数解释** 标准类型 **约束限制** 不涉及 **取值范围** - cn_standard : 等保合规标准 - hw_standard : 云安全实践标准 - cis_standard: 通用安全标准  **默认取值** 不涉及
    * tag  **参数解释** 基线检查项的类型 **约束限制** 不涉及 **取值范围** 字符长度0-256位 **默认取值** 不涉及
    * checkRuleName  **参数解释** 配置检查（基线）检查项的名称 **约束限制** 不涉及 **取值范围** 字符长度0-2048位 **默认取值** 不涉及
    * severity  **参数解释** 配置检查（基线）检查项的风险程度 **约束限制** 不涉及 **取值范围** - Low    : 低危 - Medium : 中危 - High   : 高危  **默认取值** 不涉及
    * level  **参数解释** 配置检查（基线）检查项的版本信息 **约束限制** 不涉及 **取值范围** 字符长度0-32位 **默认取值** 不涉及
    * groupId  **参数解释** 策略组ID **约束限制** 不涉及 **取值范围** 字符长度0-128位 **默认取值** 不涉及
    * checked  **参数解释** 默认是否被选中 **约束限制** 不涉及 **取值范围** false : 不选中 true  : 默认  **默认取值** true
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'supportOs' => 'support_os',
            'checkType' => 'check_type',
            'standard' => 'standard',
            'tag' => 'tag',
            'checkRuleName' => 'check_rule_name',
            'severity' => 'severity',
            'level' => 'level',
            'groupId' => 'group_id',
            'checked' => 'checked'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 不涉及
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * supportOs  **参数解释** 策略支持的操作系统类型 **约束限制** 不涉及 **取值范围** - Linux : Linux操作系统 - Windows : Windows操作系统  **默认取值** Linux
    * checkType  **参数解释** 配置检查（基线）的类型,例如SSH、CentOS 7、Windows Server 2019 R2、Windows Server 2016 R2、MySQL5-Windows、weakpwd、pwdcomplexity **约束限制** 不涉及 **取值范围** 字符长度0-256位 **默认取值** 不涉及
    * standard  **参数解释** 标准类型 **约束限制** 不涉及 **取值范围** - cn_standard : 等保合规标准 - hw_standard : 云安全实践标准 - cis_standard: 通用安全标准  **默认取值** 不涉及
    * tag  **参数解释** 基线检查项的类型 **约束限制** 不涉及 **取值范围** 字符长度0-256位 **默认取值** 不涉及
    * checkRuleName  **参数解释** 配置检查（基线）检查项的名称 **约束限制** 不涉及 **取值范围** 字符长度0-2048位 **默认取值** 不涉及
    * severity  **参数解释** 配置检查（基线）检查项的风险程度 **约束限制** 不涉及 **取值范围** - Low    : 低危 - Medium : 中危 - High   : 高危  **默认取值** 不涉及
    * level  **参数解释** 配置检查（基线）检查项的版本信息 **约束限制** 不涉及 **取值范围** 字符长度0-32位 **默认取值** 不涉及
    * groupId  **参数解释** 策略组ID **约束限制** 不涉及 **取值范围** 字符长度0-128位 **默认取值** 不涉及
    * checked  **参数解释** 默认是否被选中 **约束限制** 不涉及 **取值范围** false : 不选中 true  : 默认  **默认取值** true
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'supportOs' => 'setSupportOs',
            'checkType' => 'setCheckType',
            'standard' => 'setStandard',
            'tag' => 'setTag',
            'checkRuleName' => 'setCheckRuleName',
            'severity' => 'setSeverity',
            'level' => 'setLevel',
            'groupId' => 'setGroupId',
            'checked' => 'setChecked'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 不涉及
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * supportOs  **参数解释** 策略支持的操作系统类型 **约束限制** 不涉及 **取值范围** - Linux : Linux操作系统 - Windows : Windows操作系统  **默认取值** Linux
    * checkType  **参数解释** 配置检查（基线）的类型,例如SSH、CentOS 7、Windows Server 2019 R2、Windows Server 2016 R2、MySQL5-Windows、weakpwd、pwdcomplexity **约束限制** 不涉及 **取值范围** 字符长度0-256位 **默认取值** 不涉及
    * standard  **参数解释** 标准类型 **约束限制** 不涉及 **取值范围** - cn_standard : 等保合规标准 - hw_standard : 云安全实践标准 - cis_standard: 通用安全标准  **默认取值** 不涉及
    * tag  **参数解释** 基线检查项的类型 **约束限制** 不涉及 **取值范围** 字符长度0-256位 **默认取值** 不涉及
    * checkRuleName  **参数解释** 配置检查（基线）检查项的名称 **约束限制** 不涉及 **取值范围** 字符长度0-2048位 **默认取值** 不涉及
    * severity  **参数解释** 配置检查（基线）检查项的风险程度 **约束限制** 不涉及 **取值范围** - Low    : 低危 - Medium : 中危 - High   : 高危  **默认取值** 不涉及
    * level  **参数解释** 配置检查（基线）检查项的版本信息 **约束限制** 不涉及 **取值范围** 字符长度0-32位 **默认取值** 不涉及
    * groupId  **参数解释** 策略组ID **约束限制** 不涉及 **取值范围** 字符长度0-128位 **默认取值** 不涉及
    * checked  **参数解释** 默认是否被选中 **约束限制** 不涉及 **取值范围** false : 不选中 true  : 默认  **默认取值** true
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'supportOs' => 'getSupportOs',
            'checkType' => 'getCheckType',
            'standard' => 'getStandard',
            'tag' => 'getTag',
            'checkRuleName' => 'getCheckRuleName',
            'severity' => 'getSeverity',
            'level' => 'getLevel',
            'groupId' => 'getGroupId',
            'checked' => 'getChecked'
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
        $this->container['supportOs'] = isset($data['supportOs']) ? $data['supportOs'] : null;
        $this->container['checkType'] = isset($data['checkType']) ? $data['checkType'] : null;
        $this->container['standard'] = isset($data['standard']) ? $data['standard'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['checkRuleName'] = isset($data['checkRuleName']) ? $data['checkRuleName'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['checked'] = isset($data['checked']) ? $data['checked'] : null;
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
        if ($this->container['supportOs'] === null) {
            $invalidProperties[] = "'supportOs' can't be null";
        }
            if ((mb_strlen($this->container['supportOs']) > 64)) {
                $invalidProperties[] = "invalid value for 'supportOs', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['supportOs']) < 0)) {
                $invalidProperties[] = "invalid value for 'supportOs', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/^(Linux|Windows)$/", $this->container['supportOs'])) {
                $invalidProperties[] = "invalid value for 'supportOs', must be conform to the pattern /^(Linux|Windows)$/.";
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
            if (!preg_match("/^(cn_standard|hw_standard|cis_standard)$/", $this->container['standard'])) {
                $invalidProperties[] = "invalid value for 'standard', must be conform to the pattern /^(cn_standard|hw_standard|cis_standard)$/.";
            }
            if (!is_null($this->container['tag']) && (mb_strlen($this->container['tag']) > 256)) {
                $invalidProperties[] = "invalid value for 'tag', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['tag']) && (mb_strlen($this->container['tag']) < 0)) {
                $invalidProperties[] = "invalid value for 'tag', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['checkRuleName']) && (mb_strlen($this->container['checkRuleName']) > 2048)) {
                $invalidProperties[] = "invalid value for 'checkRuleName', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['checkRuleName']) && (mb_strlen($this->container['checkRuleName']) < 0)) {
                $invalidProperties[] = "invalid value for 'checkRuleName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) > 32)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) < 0)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['severity']) && !preg_match("/^(High|Medium|Low)$/", $this->container['severity'])) {
                $invalidProperties[] = "invalid value for 'severity', must be conform to the pattern /^(High|Medium|Low)$/.";
            }
            if (!is_null($this->container['level']) && (mb_strlen($this->container['level']) > 32)) {
                $invalidProperties[] = "invalid value for 'level', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['level']) && (mb_strlen($this->container['level']) < 0)) {
                $invalidProperties[] = "invalid value for 'level', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['level']) && !preg_match("/^.*$/", $this->container['level'])) {
                $invalidProperties[] = "invalid value for 'level', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) > 128)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) < 0)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['groupId']) && !preg_match("/^.*$/", $this->container['groupId'])) {
                $invalidProperties[] = "invalid value for 'groupId', must be conform to the pattern /^.*$/.";
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
    * Gets supportOs
    *  **参数解释** 策略支持的操作系统类型 **约束限制** 不涉及 **取值范围** - Linux : Linux操作系统 - Windows : Windows操作系统  **默认取值** Linux
    *
    * @return string
    */
    public function getSupportOs()
    {
        return $this->container['supportOs'];
    }

    /**
    * Sets supportOs
    *
    * @param string $supportOs **参数解释** 策略支持的操作系统类型 **约束限制** 不涉及 **取值范围** - Linux : Linux操作系统 - Windows : Windows操作系统  **默认取值** Linux
    *
    * @return $this
    */
    public function setSupportOs($supportOs)
    {
        $this->container['supportOs'] = $supportOs;
        return $this;
    }

    /**
    * Gets checkType
    *  **参数解释** 配置检查（基线）的类型,例如SSH、CentOS 7、Windows Server 2019 R2、Windows Server 2016 R2、MySQL5-Windows、weakpwd、pwdcomplexity **约束限制** 不涉及 **取值范围** 字符长度0-256位 **默认取值** 不涉及
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
    * @param string|null $checkType **参数解释** 配置检查（基线）的类型,例如SSH、CentOS 7、Windows Server 2019 R2、Windows Server 2016 R2、MySQL5-Windows、weakpwd、pwdcomplexity **约束限制** 不涉及 **取值范围** 字符长度0-256位 **默认取值** 不涉及
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
    *  **参数解释** 标准类型 **约束限制** 不涉及 **取值范围** - cn_standard : 等保合规标准 - hw_standard : 云安全实践标准 - cis_standard: 通用安全标准  **默认取值** 不涉及
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
    * @param string $standard **参数解释** 标准类型 **约束限制** 不涉及 **取值范围** - cn_standard : 等保合规标准 - hw_standard : 云安全实践标准 - cis_standard: 通用安全标准  **默认取值** 不涉及
    *
    * @return $this
    */
    public function setStandard($standard)
    {
        $this->container['standard'] = $standard;
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
    * Gets checkRuleName
    *  **参数解释** 配置检查（基线）检查项的名称 **约束限制** 不涉及 **取值范围** 字符长度0-2048位 **默认取值** 不涉及
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
    * @param string|null $checkRuleName **参数解释** 配置检查（基线）检查项的名称 **约束限制** 不涉及 **取值范围** 字符长度0-2048位 **默认取值** 不涉及
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
    *  **参数解释** 配置检查（基线）检查项的风险程度 **约束限制** 不涉及 **取值范围** - Low    : 低危 - Medium : 中危 - High   : 高危  **默认取值** 不涉及
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
    * @param string|null $severity **参数解释** 配置检查（基线）检查项的风险程度 **约束限制** 不涉及 **取值范围** - Low    : 低危 - Medium : 中危 - High   : 高危  **默认取值** 不涉及
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
        return $this;
    }

    /**
    * Gets level
    *  **参数解释** 配置检查（基线）检查项的版本信息 **约束限制** 不涉及 **取值范围** 字符长度0-32位 **默认取值** 不涉及
    *
    * @return string|null
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param string|null $level **参数解释** 配置检查（基线）检查项的版本信息 **约束限制** 不涉及 **取值范围** 字符长度0-32位 **默认取值** 不涉及
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets groupId
    *  **参数解释** 策略组ID **约束限制** 不涉及 **取值范围** 字符长度0-128位 **默认取值** 不涉及
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId **参数解释** 策略组ID **约束限制** 不涉及 **取值范围** 字符长度0-128位 **默认取值** 不涉及
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets checked
    *  **参数解释** 默认是否被选中 **约束限制** 不涉及 **取值范围** false : 不选中 true  : 默认  **默认取值** true
    *
    * @return bool|null
    */
    public function getChecked()
    {
        return $this->container['checked'];
    }

    /**
    * Sets checked
    *
    * @param bool|null $checked **参数解释** 默认是否被选中 **约束限制** 不涉及 **取值范围** false : 不选中 true  : 默认  **默认取值** true
    *
    * @return $this
    */
    public function setChecked($checked)
    {
        $this->container['checked'] = $checked;
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

