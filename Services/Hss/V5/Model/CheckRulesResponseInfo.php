<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CheckRulesResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CheckRulesResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tag  **参数解释** 基线检查项的类型 **取值范围** 字符长度0-256位
    * checkRuleName  **参数解释** 检查项（检查规则）名称 **取值范围** 字符长度0-2048位
    * checkRuleId  **参数解释** 检查项ID **取值范围** 字符长度0-64位
    * severity  **参数解释** 风险等级，包含如下: **取值范围** - Low    : 低危 - Medium : 中危 - High   : 高危
    * checkType  **参数解释** 配置检查（基线）的类型,Linux系统支持的基线一般check_type和check_name相同,例如SSH、CentOS 7。 Windows系统支持的基线一般check_type和check_name不相同，例如check_name为Windows的配置检查（基线），它的check_type包含Windows Server 2019 R2、Windows Server 2016 R2等。 **取值范围** 字符长度0-256位
    * checkTypeName  **参数解释** 配置检查（基线）的类型名称, 一般为check_type + 系统基线检查|应用基线检查 **取值范围** 字符长度0-256位
    * standard  **参数解释** 标准类型，包含如下3种 **取值范围** - cn_standard : 等保合规标准 - hw_standard : 云安全实践标准 - cis_standard : 通用安全标准
    * hostNum  **参数解释** 受影响的服务器的数量，进行了当前基线检测的服务器数量 **取值范围** 取值0-2147483647
    * failedNum  **参数解释** 此检测项失败，且未忽略且未加白的主机数 **取值范围** 取值0-2147483647
    * scanTime  最新检测时间(ms)
    * statisticsScanResult  **参数解释** 检查项统计结果： **取值范围** - pass      : 已通过，表示此检查项涉及的主机，全部检查通过。 - failed    : 未通过，表示此检查项涉及的主机，存在检查不通过，且不通过的主机中，存在未处理(忽略、加白)主机。 - processed : 已处理，表示此检查项涉及的主机，存在未通过，但所有的未通过主机均已处理(忽略、加白)。
    * enableFix  **参数解释** 是否支持一键修复 **取值范围** - 1 : 支持一键修复 - 0 : 不支持
    * enableClick  **参数解释** 该检查项的 修复 & 验证 按钮是否可单击 **取值范围** - true  : 按钮可单击 - false : 按钮不可单击
    * cancelIgnoreEnableClick  **参数解释** 已忽略检查项是否可点击 **取值范围** - true  : 按钮可单击 - false : 按钮不可单击
    * ruleParams  **参数解释** 支持传递参数修复的检查项可传递参数的范围，只有支持传递参数修复的检查项才返回此数据
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tag' => 'string',
            'checkRuleName' => 'string',
            'checkRuleId' => 'string',
            'severity' => 'string',
            'checkType' => 'string',
            'checkTypeName' => 'string',
            'standard' => 'string',
            'hostNum' => 'int',
            'failedNum' => 'int',
            'scanTime' => 'int',
            'statisticsScanResult' => 'string',
            'enableFix' => 'int',
            'enableClick' => 'bool',
            'cancelIgnoreEnableClick' => 'bool',
            'ruleParams' => '\HuaweiCloud\SDK\Hss\V5\Model\CheckRuleFixParamInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tag  **参数解释** 基线检查项的类型 **取值范围** 字符长度0-256位
    * checkRuleName  **参数解释** 检查项（检查规则）名称 **取值范围** 字符长度0-2048位
    * checkRuleId  **参数解释** 检查项ID **取值范围** 字符长度0-64位
    * severity  **参数解释** 风险等级，包含如下: **取值范围** - Low    : 低危 - Medium : 中危 - High   : 高危
    * checkType  **参数解释** 配置检查（基线）的类型,Linux系统支持的基线一般check_type和check_name相同,例如SSH、CentOS 7。 Windows系统支持的基线一般check_type和check_name不相同，例如check_name为Windows的配置检查（基线），它的check_type包含Windows Server 2019 R2、Windows Server 2016 R2等。 **取值范围** 字符长度0-256位
    * checkTypeName  **参数解释** 配置检查（基线）的类型名称, 一般为check_type + 系统基线检查|应用基线检查 **取值范围** 字符长度0-256位
    * standard  **参数解释** 标准类型，包含如下3种 **取值范围** - cn_standard : 等保合规标准 - hw_standard : 云安全实践标准 - cis_standard : 通用安全标准
    * hostNum  **参数解释** 受影响的服务器的数量，进行了当前基线检测的服务器数量 **取值范围** 取值0-2147483647
    * failedNum  **参数解释** 此检测项失败，且未忽略且未加白的主机数 **取值范围** 取值0-2147483647
    * scanTime  最新检测时间(ms)
    * statisticsScanResult  **参数解释** 检查项统计结果： **取值范围** - pass      : 已通过，表示此检查项涉及的主机，全部检查通过。 - failed    : 未通过，表示此检查项涉及的主机，存在检查不通过，且不通过的主机中，存在未处理(忽略、加白)主机。 - processed : 已处理，表示此检查项涉及的主机，存在未通过，但所有的未通过主机均已处理(忽略、加白)。
    * enableFix  **参数解释** 是否支持一键修复 **取值范围** - 1 : 支持一键修复 - 0 : 不支持
    * enableClick  **参数解释** 该检查项的 修复 & 验证 按钮是否可单击 **取值范围** - true  : 按钮可单击 - false : 按钮不可单击
    * cancelIgnoreEnableClick  **参数解释** 已忽略检查项是否可点击 **取值范围** - true  : 按钮可单击 - false : 按钮不可单击
    * ruleParams  **参数解释** 支持传递参数修复的检查项可传递参数的范围，只有支持传递参数修复的检查项才返回此数据
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tag' => null,
        'checkRuleName' => null,
        'checkRuleId' => null,
        'severity' => null,
        'checkType' => null,
        'checkTypeName' => null,
        'standard' => null,
        'hostNum' => 'int32',
        'failedNum' => 'int32',
        'scanTime' => 'int64',
        'statisticsScanResult' => null,
        'enableFix' => 'int32',
        'enableClick' => null,
        'cancelIgnoreEnableClick' => null,
        'ruleParams' => null
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
    * tag  **参数解释** 基线检查项的类型 **取值范围** 字符长度0-256位
    * checkRuleName  **参数解释** 检查项（检查规则）名称 **取值范围** 字符长度0-2048位
    * checkRuleId  **参数解释** 检查项ID **取值范围** 字符长度0-64位
    * severity  **参数解释** 风险等级，包含如下: **取值范围** - Low    : 低危 - Medium : 中危 - High   : 高危
    * checkType  **参数解释** 配置检查（基线）的类型,Linux系统支持的基线一般check_type和check_name相同,例如SSH、CentOS 7。 Windows系统支持的基线一般check_type和check_name不相同，例如check_name为Windows的配置检查（基线），它的check_type包含Windows Server 2019 R2、Windows Server 2016 R2等。 **取值范围** 字符长度0-256位
    * checkTypeName  **参数解释** 配置检查（基线）的类型名称, 一般为check_type + 系统基线检查|应用基线检查 **取值范围** 字符长度0-256位
    * standard  **参数解释** 标准类型，包含如下3种 **取值范围** - cn_standard : 等保合规标准 - hw_standard : 云安全实践标准 - cis_standard : 通用安全标准
    * hostNum  **参数解释** 受影响的服务器的数量，进行了当前基线检测的服务器数量 **取值范围** 取值0-2147483647
    * failedNum  **参数解释** 此检测项失败，且未忽略且未加白的主机数 **取值范围** 取值0-2147483647
    * scanTime  最新检测时间(ms)
    * statisticsScanResult  **参数解释** 检查项统计结果： **取值范围** - pass      : 已通过，表示此检查项涉及的主机，全部检查通过。 - failed    : 未通过，表示此检查项涉及的主机，存在检查不通过，且不通过的主机中，存在未处理(忽略、加白)主机。 - processed : 已处理，表示此检查项涉及的主机，存在未通过，但所有的未通过主机均已处理(忽略、加白)。
    * enableFix  **参数解释** 是否支持一键修复 **取值范围** - 1 : 支持一键修复 - 0 : 不支持
    * enableClick  **参数解释** 该检查项的 修复 & 验证 按钮是否可单击 **取值范围** - true  : 按钮可单击 - false : 按钮不可单击
    * cancelIgnoreEnableClick  **参数解释** 已忽略检查项是否可点击 **取值范围** - true  : 按钮可单击 - false : 按钮不可单击
    * ruleParams  **参数解释** 支持传递参数修复的检查项可传递参数的范围，只有支持传递参数修复的检查项才返回此数据
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tag' => 'tag',
            'checkRuleName' => 'check_rule_name',
            'checkRuleId' => 'check_rule_id',
            'severity' => 'severity',
            'checkType' => 'check_type',
            'checkTypeName' => 'check_type_name',
            'standard' => 'standard',
            'hostNum' => 'host_num',
            'failedNum' => 'failed_num',
            'scanTime' => 'scan_time',
            'statisticsScanResult' => 'statistics_scan_result',
            'enableFix' => 'enable_fix',
            'enableClick' => 'enable_click',
            'cancelIgnoreEnableClick' => 'cancel_ignore_enable_click',
            'ruleParams' => 'rule_params'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tag  **参数解释** 基线检查项的类型 **取值范围** 字符长度0-256位
    * checkRuleName  **参数解释** 检查项（检查规则）名称 **取值范围** 字符长度0-2048位
    * checkRuleId  **参数解释** 检查项ID **取值范围** 字符长度0-64位
    * severity  **参数解释** 风险等级，包含如下: **取值范围** - Low    : 低危 - Medium : 中危 - High   : 高危
    * checkType  **参数解释** 配置检查（基线）的类型,Linux系统支持的基线一般check_type和check_name相同,例如SSH、CentOS 7。 Windows系统支持的基线一般check_type和check_name不相同，例如check_name为Windows的配置检查（基线），它的check_type包含Windows Server 2019 R2、Windows Server 2016 R2等。 **取值范围** 字符长度0-256位
    * checkTypeName  **参数解释** 配置检查（基线）的类型名称, 一般为check_type + 系统基线检查|应用基线检查 **取值范围** 字符长度0-256位
    * standard  **参数解释** 标准类型，包含如下3种 **取值范围** - cn_standard : 等保合规标准 - hw_standard : 云安全实践标准 - cis_standard : 通用安全标准
    * hostNum  **参数解释** 受影响的服务器的数量，进行了当前基线检测的服务器数量 **取值范围** 取值0-2147483647
    * failedNum  **参数解释** 此检测项失败，且未忽略且未加白的主机数 **取值范围** 取值0-2147483647
    * scanTime  最新检测时间(ms)
    * statisticsScanResult  **参数解释** 检查项统计结果： **取值范围** - pass      : 已通过，表示此检查项涉及的主机，全部检查通过。 - failed    : 未通过，表示此检查项涉及的主机，存在检查不通过，且不通过的主机中，存在未处理(忽略、加白)主机。 - processed : 已处理，表示此检查项涉及的主机，存在未通过，但所有的未通过主机均已处理(忽略、加白)。
    * enableFix  **参数解释** 是否支持一键修复 **取值范围** - 1 : 支持一键修复 - 0 : 不支持
    * enableClick  **参数解释** 该检查项的 修复 & 验证 按钮是否可单击 **取值范围** - true  : 按钮可单击 - false : 按钮不可单击
    * cancelIgnoreEnableClick  **参数解释** 已忽略检查项是否可点击 **取值范围** - true  : 按钮可单击 - false : 按钮不可单击
    * ruleParams  **参数解释** 支持传递参数修复的检查项可传递参数的范围，只有支持传递参数修复的检查项才返回此数据
    *
    * @var string[]
    */
    protected static $setters = [
            'tag' => 'setTag',
            'checkRuleName' => 'setCheckRuleName',
            'checkRuleId' => 'setCheckRuleId',
            'severity' => 'setSeverity',
            'checkType' => 'setCheckType',
            'checkTypeName' => 'setCheckTypeName',
            'standard' => 'setStandard',
            'hostNum' => 'setHostNum',
            'failedNum' => 'setFailedNum',
            'scanTime' => 'setScanTime',
            'statisticsScanResult' => 'setStatisticsScanResult',
            'enableFix' => 'setEnableFix',
            'enableClick' => 'setEnableClick',
            'cancelIgnoreEnableClick' => 'setCancelIgnoreEnableClick',
            'ruleParams' => 'setRuleParams'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tag  **参数解释** 基线检查项的类型 **取值范围** 字符长度0-256位
    * checkRuleName  **参数解释** 检查项（检查规则）名称 **取值范围** 字符长度0-2048位
    * checkRuleId  **参数解释** 检查项ID **取值范围** 字符长度0-64位
    * severity  **参数解释** 风险等级，包含如下: **取值范围** - Low    : 低危 - Medium : 中危 - High   : 高危
    * checkType  **参数解释** 配置检查（基线）的类型,Linux系统支持的基线一般check_type和check_name相同,例如SSH、CentOS 7。 Windows系统支持的基线一般check_type和check_name不相同，例如check_name为Windows的配置检查（基线），它的check_type包含Windows Server 2019 R2、Windows Server 2016 R2等。 **取值范围** 字符长度0-256位
    * checkTypeName  **参数解释** 配置检查（基线）的类型名称, 一般为check_type + 系统基线检查|应用基线检查 **取值范围** 字符长度0-256位
    * standard  **参数解释** 标准类型，包含如下3种 **取值范围** - cn_standard : 等保合规标准 - hw_standard : 云安全实践标准 - cis_standard : 通用安全标准
    * hostNum  **参数解释** 受影响的服务器的数量，进行了当前基线检测的服务器数量 **取值范围** 取值0-2147483647
    * failedNum  **参数解释** 此检测项失败，且未忽略且未加白的主机数 **取值范围** 取值0-2147483647
    * scanTime  最新检测时间(ms)
    * statisticsScanResult  **参数解释** 检查项统计结果： **取值范围** - pass      : 已通过，表示此检查项涉及的主机，全部检查通过。 - failed    : 未通过，表示此检查项涉及的主机，存在检查不通过，且不通过的主机中，存在未处理(忽略、加白)主机。 - processed : 已处理，表示此检查项涉及的主机，存在未通过，但所有的未通过主机均已处理(忽略、加白)。
    * enableFix  **参数解释** 是否支持一键修复 **取值范围** - 1 : 支持一键修复 - 0 : 不支持
    * enableClick  **参数解释** 该检查项的 修复 & 验证 按钮是否可单击 **取值范围** - true  : 按钮可单击 - false : 按钮不可单击
    * cancelIgnoreEnableClick  **参数解释** 已忽略检查项是否可点击 **取值范围** - true  : 按钮可单击 - false : 按钮不可单击
    * ruleParams  **参数解释** 支持传递参数修复的检查项可传递参数的范围，只有支持传递参数修复的检查项才返回此数据
    *
    * @var string[]
    */
    protected static $getters = [
            'tag' => 'getTag',
            'checkRuleName' => 'getCheckRuleName',
            'checkRuleId' => 'getCheckRuleId',
            'severity' => 'getSeverity',
            'checkType' => 'getCheckType',
            'checkTypeName' => 'getCheckTypeName',
            'standard' => 'getStandard',
            'hostNum' => 'getHostNum',
            'failedNum' => 'getFailedNum',
            'scanTime' => 'getScanTime',
            'statisticsScanResult' => 'getStatisticsScanResult',
            'enableFix' => 'getEnableFix',
            'enableClick' => 'getEnableClick',
            'cancelIgnoreEnableClick' => 'getCancelIgnoreEnableClick',
            'ruleParams' => 'getRuleParams'
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
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['checkRuleName'] = isset($data['checkRuleName']) ? $data['checkRuleName'] : null;
        $this->container['checkRuleId'] = isset($data['checkRuleId']) ? $data['checkRuleId'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['checkType'] = isset($data['checkType']) ? $data['checkType'] : null;
        $this->container['checkTypeName'] = isset($data['checkTypeName']) ? $data['checkTypeName'] : null;
        $this->container['standard'] = isset($data['standard']) ? $data['standard'] : null;
        $this->container['hostNum'] = isset($data['hostNum']) ? $data['hostNum'] : null;
        $this->container['failedNum'] = isset($data['failedNum']) ? $data['failedNum'] : null;
        $this->container['scanTime'] = isset($data['scanTime']) ? $data['scanTime'] : null;
        $this->container['statisticsScanResult'] = isset($data['statisticsScanResult']) ? $data['statisticsScanResult'] : null;
        $this->container['enableFix'] = isset($data['enableFix']) ? $data['enableFix'] : null;
        $this->container['enableClick'] = isset($data['enableClick']) ? $data['enableClick'] : null;
        $this->container['cancelIgnoreEnableClick'] = isset($data['cancelIgnoreEnableClick']) ? $data['cancelIgnoreEnableClick'] : null;
        $this->container['ruleParams'] = isset($data['ruleParams']) ? $data['ruleParams'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
            if (!is_null($this->container['checkRuleId']) && (mb_strlen($this->container['checkRuleId']) > 64)) {
                $invalidProperties[] = "invalid value for 'checkRuleId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['checkRuleId']) && (mb_strlen($this->container['checkRuleId']) < 0)) {
                $invalidProperties[] = "invalid value for 'checkRuleId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) > 255)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) < 0)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['checkType']) && (mb_strlen($this->container['checkType']) > 256)) {
                $invalidProperties[] = "invalid value for 'checkType', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['checkType']) && (mb_strlen($this->container['checkType']) < 0)) {
                $invalidProperties[] = "invalid value for 'checkType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['checkTypeName']) && (mb_strlen($this->container['checkTypeName']) > 256)) {
                $invalidProperties[] = "invalid value for 'checkTypeName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['checkTypeName']) && (mb_strlen($this->container['checkTypeName']) < 0)) {
                $invalidProperties[] = "invalid value for 'checkTypeName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['standard']) && (mb_strlen($this->container['standard']) > 16)) {
                $invalidProperties[] = "invalid value for 'standard', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['standard']) && (mb_strlen($this->container['standard']) < 0)) {
                $invalidProperties[] = "invalid value for 'standard', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostNum']) && ($this->container['hostNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'hostNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['hostNum']) && ($this->container['hostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'hostNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['failedNum']) && ($this->container['failedNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'failedNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['failedNum']) && ($this->container['failedNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'failedNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scanTime']) && ($this->container['scanTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'scanTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['scanTime']) && ($this->container['scanTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'scanTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['statisticsScanResult']) && (mb_strlen($this->container['statisticsScanResult']) > 32)) {
                $invalidProperties[] = "invalid value for 'statisticsScanResult', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['statisticsScanResult']) && (mb_strlen($this->container['statisticsScanResult']) < 0)) {
                $invalidProperties[] = "invalid value for 'statisticsScanResult', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['enableFix']) && ($this->container['enableFix'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'enableFix', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['enableFix']) && ($this->container['enableFix'] < 0)) {
                $invalidProperties[] = "invalid value for 'enableFix', must be bigger than or equal to 0.";
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
    * Gets tag
    *  **参数解释** 基线检查项的类型 **取值范围** 字符长度0-256位
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
    * @param string|null $tag **参数解释** 基线检查项的类型 **取值范围** 字符长度0-256位
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
    *  **参数解释** 检查项（检查规则）名称 **取值范围** 字符长度0-2048位
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
    * @param string|null $checkRuleName **参数解释** 检查项（检查规则）名称 **取值范围** 字符长度0-2048位
    *
    * @return $this
    */
    public function setCheckRuleName($checkRuleName)
    {
        $this->container['checkRuleName'] = $checkRuleName;
        return $this;
    }

    /**
    * Gets checkRuleId
    *  **参数解释** 检查项ID **取值范围** 字符长度0-64位
    *
    * @return string|null
    */
    public function getCheckRuleId()
    {
        return $this->container['checkRuleId'];
    }

    /**
    * Sets checkRuleId
    *
    * @param string|null $checkRuleId **参数解释** 检查项ID **取值范围** 字符长度0-64位
    *
    * @return $this
    */
    public function setCheckRuleId($checkRuleId)
    {
        $this->container['checkRuleId'] = $checkRuleId;
        return $this;
    }

    /**
    * Gets severity
    *  **参数解释** 风险等级，包含如下: **取值范围** - Low    : 低危 - Medium : 中危 - High   : 高危
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
    * @param string|null $severity **参数解释** 风险等级，包含如下: **取值范围** - Low    : 低危 - Medium : 中危 - High   : 高危
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
        return $this;
    }

    /**
    * Gets checkType
    *  **参数解释** 配置检查（基线）的类型,Linux系统支持的基线一般check_type和check_name相同,例如SSH、CentOS 7。 Windows系统支持的基线一般check_type和check_name不相同，例如check_name为Windows的配置检查（基线），它的check_type包含Windows Server 2019 R2、Windows Server 2016 R2等。 **取值范围** 字符长度0-256位
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
    * @param string|null $checkType **参数解释** 配置检查（基线）的类型,Linux系统支持的基线一般check_type和check_name相同,例如SSH、CentOS 7。 Windows系统支持的基线一般check_type和check_name不相同，例如check_name为Windows的配置检查（基线），它的check_type包含Windows Server 2019 R2、Windows Server 2016 R2等。 **取值范围** 字符长度0-256位
    *
    * @return $this
    */
    public function setCheckType($checkType)
    {
        $this->container['checkType'] = $checkType;
        return $this;
    }

    /**
    * Gets checkTypeName
    *  **参数解释** 配置检查（基线）的类型名称, 一般为check_type + 系统基线检查|应用基线检查 **取值范围** 字符长度0-256位
    *
    * @return string|null
    */
    public function getCheckTypeName()
    {
        return $this->container['checkTypeName'];
    }

    /**
    * Sets checkTypeName
    *
    * @param string|null $checkTypeName **参数解释** 配置检查（基线）的类型名称, 一般为check_type + 系统基线检查|应用基线检查 **取值范围** 字符长度0-256位
    *
    * @return $this
    */
    public function setCheckTypeName($checkTypeName)
    {
        $this->container['checkTypeName'] = $checkTypeName;
        return $this;
    }

    /**
    * Gets standard
    *  **参数解释** 标准类型，包含如下3种 **取值范围** - cn_standard : 等保合规标准 - hw_standard : 云安全实践标准 - cis_standard : 通用安全标准
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
    * @param string|null $standard **参数解释** 标准类型，包含如下3种 **取值范围** - cn_standard : 等保合规标准 - hw_standard : 云安全实践标准 - cis_standard : 通用安全标准
    *
    * @return $this
    */
    public function setStandard($standard)
    {
        $this->container['standard'] = $standard;
        return $this;
    }

    /**
    * Gets hostNum
    *  **参数解释** 受影响的服务器的数量，进行了当前基线检测的服务器数量 **取值范围** 取值0-2147483647
    *
    * @return int|null
    */
    public function getHostNum()
    {
        return $this->container['hostNum'];
    }

    /**
    * Sets hostNum
    *
    * @param int|null $hostNum **参数解释** 受影响的服务器的数量，进行了当前基线检测的服务器数量 **取值范围** 取值0-2147483647
    *
    * @return $this
    */
    public function setHostNum($hostNum)
    {
        $this->container['hostNum'] = $hostNum;
        return $this;
    }

    /**
    * Gets failedNum
    *  **参数解释** 此检测项失败，且未忽略且未加白的主机数 **取值范围** 取值0-2147483647
    *
    * @return int|null
    */
    public function getFailedNum()
    {
        return $this->container['failedNum'];
    }

    /**
    * Sets failedNum
    *
    * @param int|null $failedNum **参数解释** 此检测项失败，且未忽略且未加白的主机数 **取值范围** 取值0-2147483647
    *
    * @return $this
    */
    public function setFailedNum($failedNum)
    {
        $this->container['failedNum'] = $failedNum;
        return $this;
    }

    /**
    * Gets scanTime
    *  最新检测时间(ms)
    *
    * @return int|null
    */
    public function getScanTime()
    {
        return $this->container['scanTime'];
    }

    /**
    * Sets scanTime
    *
    * @param int|null $scanTime 最新检测时间(ms)
    *
    * @return $this
    */
    public function setScanTime($scanTime)
    {
        $this->container['scanTime'] = $scanTime;
        return $this;
    }

    /**
    * Gets statisticsScanResult
    *  **参数解释** 检查项统计结果： **取值范围** - pass      : 已通过，表示此检查项涉及的主机，全部检查通过。 - failed    : 未通过，表示此检查项涉及的主机，存在检查不通过，且不通过的主机中，存在未处理(忽略、加白)主机。 - processed : 已处理，表示此检查项涉及的主机，存在未通过，但所有的未通过主机均已处理(忽略、加白)。
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
    * @param string|null $statisticsScanResult **参数解释** 检查项统计结果： **取值范围** - pass      : 已通过，表示此检查项涉及的主机，全部检查通过。 - failed    : 未通过，表示此检查项涉及的主机，存在检查不通过，且不通过的主机中，存在未处理(忽略、加白)主机。 - processed : 已处理，表示此检查项涉及的主机，存在未通过，但所有的未通过主机均已处理(忽略、加白)。
    *
    * @return $this
    */
    public function setStatisticsScanResult($statisticsScanResult)
    {
        $this->container['statisticsScanResult'] = $statisticsScanResult;
        return $this;
    }

    /**
    * Gets enableFix
    *  **参数解释** 是否支持一键修复 **取值范围** - 1 : 支持一键修复 - 0 : 不支持
    *
    * @return int|null
    */
    public function getEnableFix()
    {
        return $this->container['enableFix'];
    }

    /**
    * Sets enableFix
    *
    * @param int|null $enableFix **参数解释** 是否支持一键修复 **取值范围** - 1 : 支持一键修复 - 0 : 不支持
    *
    * @return $this
    */
    public function setEnableFix($enableFix)
    {
        $this->container['enableFix'] = $enableFix;
        return $this;
    }

    /**
    * Gets enableClick
    *  **参数解释** 该检查项的 修复 & 验证 按钮是否可单击 **取值范围** - true  : 按钮可单击 - false : 按钮不可单击
    *
    * @return bool|null
    */
    public function getEnableClick()
    {
        return $this->container['enableClick'];
    }

    /**
    * Sets enableClick
    *
    * @param bool|null $enableClick **参数解释** 该检查项的 修复 & 验证 按钮是否可单击 **取值范围** - true  : 按钮可单击 - false : 按钮不可单击
    *
    * @return $this
    */
    public function setEnableClick($enableClick)
    {
        $this->container['enableClick'] = $enableClick;
        return $this;
    }

    /**
    * Gets cancelIgnoreEnableClick
    *  **参数解释** 已忽略检查项是否可点击 **取值范围** - true  : 按钮可单击 - false : 按钮不可单击
    *
    * @return bool|null
    */
    public function getCancelIgnoreEnableClick()
    {
        return $this->container['cancelIgnoreEnableClick'];
    }

    /**
    * Sets cancelIgnoreEnableClick
    *
    * @param bool|null $cancelIgnoreEnableClick **参数解释** 已忽略检查项是否可点击 **取值范围** - true  : 按钮可单击 - false : 按钮不可单击
    *
    * @return $this
    */
    public function setCancelIgnoreEnableClick($cancelIgnoreEnableClick)
    {
        $this->container['cancelIgnoreEnableClick'] = $cancelIgnoreEnableClick;
        return $this;
    }

    /**
    * Gets ruleParams
    *  **参数解释** 支持传递参数修复的检查项可传递参数的范围，只有支持传递参数修复的检查项才返回此数据
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\CheckRuleFixParamInfo[]|null
    */
    public function getRuleParams()
    {
        return $this->container['ruleParams'];
    }

    /**
    * Sets ruleParams
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\CheckRuleFixParamInfo[]|null $ruleParams **参数解释** 支持传递参数修复的检查项可传递参数的范围，只有支持传递参数修复的检查项才返回此数据
    *
    * @return $this
    */
    public function setRuleParams($ruleParams)
    {
        $this->container['ruleParams'] = $ruleParams;
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

