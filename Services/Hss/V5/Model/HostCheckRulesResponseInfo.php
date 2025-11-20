<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HostCheckRulesResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HostCheckRulesResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * checkRuleId  **参数解释** 检查项id **取值范围** 字符长度0-256位
    * checkRuleName  **参数解释** 检查项（检查规则）名称 **取值范围** 字符长度0-65534位
    * tag  基线检查中检查项的检查类型 - 访问控制 - 服务配置
    * severity  风险等级，包含如下:   - Low : 低危   - Medium : 中危   - High : 高危
    * resultType  **参数解释** 检测结果类型 **取值范围** - safe             : 已通过 - unhandled        : 未处理 - ignored          : 已忽略 - fixing           : 修复中 - fix-failed       : 修复失败 - verifying        : 验证中 - add_to_whitelist : 已加白
    * ruleParams  **参数解释** 支持传递参数修复的检查项可传递参数的范围，只有支持传递参数修复的检查项才返回此数据
    * scanTime  **参数解释** 检查项扫描时间(ms) **取值范围** 不涉及
    * hostType  **参数解释** 主机类型，是cce则返回cce，否则返回null **取值范围** - cce
    * diffDescription  **参数解释** 差异化展示提示信息 **取值范围** 字符长度0-2048位
    * description  **参数解释** 忽略或加白的描述 **取值范围** 字符长度0-512位
    * enableFix  **参数解释** 是否支持一键修复 **取值范围** - 1 : 支持一键修复 - 0 : 不支持
    * enableClick  **参数解释** 该检查项的修复 & 验证 按钮是否可单击 **取值范围** - true  : 按钮可单击 - false : 按钮不可单击
    * cancelIgnoreEnableClick  **参数解释** 已忽略检查项是否可点击 **取值范围** - true  : 按钮可单击 - false : 按钮不可单击
    * fixFailedReason  **参数解释** 修复失败原因 **取值范围** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'checkRuleId' => 'string',
            'checkRuleName' => 'string',
            'tag' => 'string',
            'severity' => 'string',
            'resultType' => 'string',
            'ruleParams' => '\HuaweiCloud\SDK\Hss\V5\Model\CheckRuleFixParamInfo[]',
            'scanTime' => 'int',
            'hostType' => 'string',
            'diffDescription' => 'string',
            'description' => 'string',
            'enableFix' => 'int',
            'enableClick' => 'bool',
            'cancelIgnoreEnableClick' => 'bool',
            'fixFailedReason' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * checkRuleId  **参数解释** 检查项id **取值范围** 字符长度0-256位
    * checkRuleName  **参数解释** 检查项（检查规则）名称 **取值范围** 字符长度0-65534位
    * tag  基线检查中检查项的检查类型 - 访问控制 - 服务配置
    * severity  风险等级，包含如下:   - Low : 低危   - Medium : 中危   - High : 高危
    * resultType  **参数解释** 检测结果类型 **取值范围** - safe             : 已通过 - unhandled        : 未处理 - ignored          : 已忽略 - fixing           : 修复中 - fix-failed       : 修复失败 - verifying        : 验证中 - add_to_whitelist : 已加白
    * ruleParams  **参数解释** 支持传递参数修复的检查项可传递参数的范围，只有支持传递参数修复的检查项才返回此数据
    * scanTime  **参数解释** 检查项扫描时间(ms) **取值范围** 不涉及
    * hostType  **参数解释** 主机类型，是cce则返回cce，否则返回null **取值范围** - cce
    * diffDescription  **参数解释** 差异化展示提示信息 **取值范围** 字符长度0-2048位
    * description  **参数解释** 忽略或加白的描述 **取值范围** 字符长度0-512位
    * enableFix  **参数解释** 是否支持一键修复 **取值范围** - 1 : 支持一键修复 - 0 : 不支持
    * enableClick  **参数解释** 该检查项的修复 & 验证 按钮是否可单击 **取值范围** - true  : 按钮可单击 - false : 按钮不可单击
    * cancelIgnoreEnableClick  **参数解释** 已忽略检查项是否可点击 **取值范围** - true  : 按钮可单击 - false : 按钮不可单击
    * fixFailedReason  **参数解释** 修复失败原因 **取值范围** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'checkRuleId' => null,
        'checkRuleName' => null,
        'tag' => null,
        'severity' => null,
        'resultType' => null,
        'ruleParams' => null,
        'scanTime' => 'int64',
        'hostType' => null,
        'diffDescription' => null,
        'description' => null,
        'enableFix' => 'int32',
        'enableClick' => null,
        'cancelIgnoreEnableClick' => null,
        'fixFailedReason' => null
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
    * checkRuleId  **参数解释** 检查项id **取值范围** 字符长度0-256位
    * checkRuleName  **参数解释** 检查项（检查规则）名称 **取值范围** 字符长度0-65534位
    * tag  基线检查中检查项的检查类型 - 访问控制 - 服务配置
    * severity  风险等级，包含如下:   - Low : 低危   - Medium : 中危   - High : 高危
    * resultType  **参数解释** 检测结果类型 **取值范围** - safe             : 已通过 - unhandled        : 未处理 - ignored          : 已忽略 - fixing           : 修复中 - fix-failed       : 修复失败 - verifying        : 验证中 - add_to_whitelist : 已加白
    * ruleParams  **参数解释** 支持传递参数修复的检查项可传递参数的范围，只有支持传递参数修复的检查项才返回此数据
    * scanTime  **参数解释** 检查项扫描时间(ms) **取值范围** 不涉及
    * hostType  **参数解释** 主机类型，是cce则返回cce，否则返回null **取值范围** - cce
    * diffDescription  **参数解释** 差异化展示提示信息 **取值范围** 字符长度0-2048位
    * description  **参数解释** 忽略或加白的描述 **取值范围** 字符长度0-512位
    * enableFix  **参数解释** 是否支持一键修复 **取值范围** - 1 : 支持一键修复 - 0 : 不支持
    * enableClick  **参数解释** 该检查项的修复 & 验证 按钮是否可单击 **取值范围** - true  : 按钮可单击 - false : 按钮不可单击
    * cancelIgnoreEnableClick  **参数解释** 已忽略检查项是否可点击 **取值范围** - true  : 按钮可单击 - false : 按钮不可单击
    * fixFailedReason  **参数解释** 修复失败原因 **取值范围** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'checkRuleId' => 'check_rule_id',
            'checkRuleName' => 'check_rule_name',
            'tag' => 'tag',
            'severity' => 'severity',
            'resultType' => 'result_type',
            'ruleParams' => 'rule_params',
            'scanTime' => 'scan_time',
            'hostType' => 'host_type',
            'diffDescription' => 'diff_description',
            'description' => 'description',
            'enableFix' => 'enable_fix',
            'enableClick' => 'enable_click',
            'cancelIgnoreEnableClick' => 'cancel_ignore_enable_click',
            'fixFailedReason' => 'fix_failed_reason'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * checkRuleId  **参数解释** 检查项id **取值范围** 字符长度0-256位
    * checkRuleName  **参数解释** 检查项（检查规则）名称 **取值范围** 字符长度0-65534位
    * tag  基线检查中检查项的检查类型 - 访问控制 - 服务配置
    * severity  风险等级，包含如下:   - Low : 低危   - Medium : 中危   - High : 高危
    * resultType  **参数解释** 检测结果类型 **取值范围** - safe             : 已通过 - unhandled        : 未处理 - ignored          : 已忽略 - fixing           : 修复中 - fix-failed       : 修复失败 - verifying        : 验证中 - add_to_whitelist : 已加白
    * ruleParams  **参数解释** 支持传递参数修复的检查项可传递参数的范围，只有支持传递参数修复的检查项才返回此数据
    * scanTime  **参数解释** 检查项扫描时间(ms) **取值范围** 不涉及
    * hostType  **参数解释** 主机类型，是cce则返回cce，否则返回null **取值范围** - cce
    * diffDescription  **参数解释** 差异化展示提示信息 **取值范围** 字符长度0-2048位
    * description  **参数解释** 忽略或加白的描述 **取值范围** 字符长度0-512位
    * enableFix  **参数解释** 是否支持一键修复 **取值范围** - 1 : 支持一键修复 - 0 : 不支持
    * enableClick  **参数解释** 该检查项的修复 & 验证 按钮是否可单击 **取值范围** - true  : 按钮可单击 - false : 按钮不可单击
    * cancelIgnoreEnableClick  **参数解释** 已忽略检查项是否可点击 **取值范围** - true  : 按钮可单击 - false : 按钮不可单击
    * fixFailedReason  **参数解释** 修复失败原因 **取值范围** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'checkRuleId' => 'setCheckRuleId',
            'checkRuleName' => 'setCheckRuleName',
            'tag' => 'setTag',
            'severity' => 'setSeverity',
            'resultType' => 'setResultType',
            'ruleParams' => 'setRuleParams',
            'scanTime' => 'setScanTime',
            'hostType' => 'setHostType',
            'diffDescription' => 'setDiffDescription',
            'description' => 'setDescription',
            'enableFix' => 'setEnableFix',
            'enableClick' => 'setEnableClick',
            'cancelIgnoreEnableClick' => 'setCancelIgnoreEnableClick',
            'fixFailedReason' => 'setFixFailedReason'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * checkRuleId  **参数解释** 检查项id **取值范围** 字符长度0-256位
    * checkRuleName  **参数解释** 检查项（检查规则）名称 **取值范围** 字符长度0-65534位
    * tag  基线检查中检查项的检查类型 - 访问控制 - 服务配置
    * severity  风险等级，包含如下:   - Low : 低危   - Medium : 中危   - High : 高危
    * resultType  **参数解释** 检测结果类型 **取值范围** - safe             : 已通过 - unhandled        : 未处理 - ignored          : 已忽略 - fixing           : 修复中 - fix-failed       : 修复失败 - verifying        : 验证中 - add_to_whitelist : 已加白
    * ruleParams  **参数解释** 支持传递参数修复的检查项可传递参数的范围，只有支持传递参数修复的检查项才返回此数据
    * scanTime  **参数解释** 检查项扫描时间(ms) **取值范围** 不涉及
    * hostType  **参数解释** 主机类型，是cce则返回cce，否则返回null **取值范围** - cce
    * diffDescription  **参数解释** 差异化展示提示信息 **取值范围** 字符长度0-2048位
    * description  **参数解释** 忽略或加白的描述 **取值范围** 字符长度0-512位
    * enableFix  **参数解释** 是否支持一键修复 **取值范围** - 1 : 支持一键修复 - 0 : 不支持
    * enableClick  **参数解释** 该检查项的修复 & 验证 按钮是否可单击 **取值范围** - true  : 按钮可单击 - false : 按钮不可单击
    * cancelIgnoreEnableClick  **参数解释** 已忽略检查项是否可点击 **取值范围** - true  : 按钮可单击 - false : 按钮不可单击
    * fixFailedReason  **参数解释** 修复失败原因 **取值范围** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'checkRuleId' => 'getCheckRuleId',
            'checkRuleName' => 'getCheckRuleName',
            'tag' => 'getTag',
            'severity' => 'getSeverity',
            'resultType' => 'getResultType',
            'ruleParams' => 'getRuleParams',
            'scanTime' => 'getScanTime',
            'hostType' => 'getHostType',
            'diffDescription' => 'getDiffDescription',
            'description' => 'getDescription',
            'enableFix' => 'getEnableFix',
            'enableClick' => 'getEnableClick',
            'cancelIgnoreEnableClick' => 'getCancelIgnoreEnableClick',
            'fixFailedReason' => 'getFixFailedReason'
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
        $this->container['checkRuleId'] = isset($data['checkRuleId']) ? $data['checkRuleId'] : null;
        $this->container['checkRuleName'] = isset($data['checkRuleName']) ? $data['checkRuleName'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['resultType'] = isset($data['resultType']) ? $data['resultType'] : null;
        $this->container['ruleParams'] = isset($data['ruleParams']) ? $data['ruleParams'] : null;
        $this->container['scanTime'] = isset($data['scanTime']) ? $data['scanTime'] : null;
        $this->container['hostType'] = isset($data['hostType']) ? $data['hostType'] : null;
        $this->container['diffDescription'] = isset($data['diffDescription']) ? $data['diffDescription'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['enableFix'] = isset($data['enableFix']) ? $data['enableFix'] : null;
        $this->container['enableClick'] = isset($data['enableClick']) ? $data['enableClick'] : null;
        $this->container['cancelIgnoreEnableClick'] = isset($data['cancelIgnoreEnableClick']) ? $data['cancelIgnoreEnableClick'] : null;
        $this->container['fixFailedReason'] = isset($data['fixFailedReason']) ? $data['fixFailedReason'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['checkRuleId']) && (mb_strlen($this->container['checkRuleId']) > 256)) {
                $invalidProperties[] = "invalid value for 'checkRuleId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['checkRuleId']) && (mb_strlen($this->container['checkRuleId']) < 0)) {
                $invalidProperties[] = "invalid value for 'checkRuleId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['checkRuleName']) && (mb_strlen($this->container['checkRuleName']) > 65534)) {
                $invalidProperties[] = "invalid value for 'checkRuleName', the character length must be smaller than or equal to 65534.";
            }
            if (!is_null($this->container['checkRuleName']) && (mb_strlen($this->container['checkRuleName']) < 0)) {
                $invalidProperties[] = "invalid value for 'checkRuleName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['tag']) && (mb_strlen($this->container['tag']) > 128)) {
                $invalidProperties[] = "invalid value for 'tag', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['tag']) && (mb_strlen($this->container['tag']) < 0)) {
                $invalidProperties[] = "invalid value for 'tag', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['tag']) && !preg_match("/^.*$/", $this->container['tag'])) {
                $invalidProperties[] = "invalid value for 'tag', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) > 65534)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be smaller than or equal to 65534.";
            }
            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) < 0)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resultType']) && (mb_strlen($this->container['resultType']) > 32)) {
                $invalidProperties[] = "invalid value for 'resultType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['resultType']) && (mb_strlen($this->container['resultType']) < 0)) {
                $invalidProperties[] = "invalid value for 'resultType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scanTime']) && ($this->container['scanTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'scanTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['scanTime']) && ($this->container['scanTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'scanTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostType']) && (mb_strlen($this->container['hostType']) > 32)) {
                $invalidProperties[] = "invalid value for 'hostType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['hostType']) && (mb_strlen($this->container['hostType']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['diffDescription']) && (mb_strlen($this->container['diffDescription']) > 2048)) {
                $invalidProperties[] = "invalid value for 'diffDescription', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['diffDescription']) && (mb_strlen($this->container['diffDescription']) < 0)) {
                $invalidProperties[] = "invalid value for 'diffDescription', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 512)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['enableFix']) && ($this->container['enableFix'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'enableFix', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['enableFix']) && ($this->container['enableFix'] < 0)) {
                $invalidProperties[] = "invalid value for 'enableFix', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fixFailedReason']) && (mb_strlen($this->container['fixFailedReason']) > 256)) {
                $invalidProperties[] = "invalid value for 'fixFailedReason', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['fixFailedReason']) && (mb_strlen($this->container['fixFailedReason']) < 0)) {
                $invalidProperties[] = "invalid value for 'fixFailedReason', the character length must be bigger than or equal to 0.";
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
    * Gets checkRuleId
    *  **参数解释** 检查项id **取值范围** 字符长度0-256位
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
    * @param string|null $checkRuleId **参数解释** 检查项id **取值范围** 字符长度0-256位
    *
    * @return $this
    */
    public function setCheckRuleId($checkRuleId)
    {
        $this->container['checkRuleId'] = $checkRuleId;
        return $this;
    }

    /**
    * Gets checkRuleName
    *  **参数解释** 检查项（检查规则）名称 **取值范围** 字符长度0-65534位
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
    * @param string|null $checkRuleName **参数解释** 检查项（检查规则）名称 **取值范围** 字符长度0-65534位
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
    *  基线检查中检查项的检查类型 - 访问控制 - 服务配置
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
    * @param string|null $tag 基线检查中检查项的检查类型 - 访问控制 - 服务配置
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
    *  风险等级，包含如下:   - Low : 低危   - Medium : 中危   - High : 高危
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
    * @param string|null $severity 风险等级，包含如下:   - Low : 低危   - Medium : 中危   - High : 高危
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
        return $this;
    }

    /**
    * Gets resultType
    *  **参数解释** 检测结果类型 **取值范围** - safe             : 已通过 - unhandled        : 未处理 - ignored          : 已忽略 - fixing           : 修复中 - fix-failed       : 修复失败 - verifying        : 验证中 - add_to_whitelist : 已加白
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
    * @param string|null $resultType **参数解释** 检测结果类型 **取值范围** - safe             : 已通过 - unhandled        : 未处理 - ignored          : 已忽略 - fixing           : 修复中 - fix-failed       : 修复失败 - verifying        : 验证中 - add_to_whitelist : 已加白
    *
    * @return $this
    */
    public function setResultType($resultType)
    {
        $this->container['resultType'] = $resultType;
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
    * Gets scanTime
    *  **参数解释** 检查项扫描时间(ms) **取值范围** 不涉及
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
    * @param int|null $scanTime **参数解释** 检查项扫描时间(ms) **取值范围** 不涉及
    *
    * @return $this
    */
    public function setScanTime($scanTime)
    {
        $this->container['scanTime'] = $scanTime;
        return $this;
    }

    /**
    * Gets hostType
    *  **参数解释** 主机类型，是cce则返回cce，否则返回null **取值范围** - cce
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
    * @param string|null $hostType **参数解释** 主机类型，是cce则返回cce，否则返回null **取值范围** - cce
    *
    * @return $this
    */
    public function setHostType($hostType)
    {
        $this->container['hostType'] = $hostType;
        return $this;
    }

    /**
    * Gets diffDescription
    *  **参数解释** 差异化展示提示信息 **取值范围** 字符长度0-2048位
    *
    * @return string|null
    */
    public function getDiffDescription()
    {
        return $this->container['diffDescription'];
    }

    /**
    * Sets diffDescription
    *
    * @param string|null $diffDescription **参数解释** 差异化展示提示信息 **取值范围** 字符长度0-2048位
    *
    * @return $this
    */
    public function setDiffDescription($diffDescription)
    {
        $this->container['diffDescription'] = $diffDescription;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释** 忽略或加白的描述 **取值范围** 字符长度0-512位
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description **参数解释** 忽略或加白的描述 **取值范围** 字符长度0-512位
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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
    *  **参数解释** 该检查项的修复 & 验证 按钮是否可单击 **取值范围** - true  : 按钮可单击 - false : 按钮不可单击
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
    * @param bool|null $enableClick **参数解释** 该检查项的修复 & 验证 按钮是否可单击 **取值范围** - true  : 按钮可单击 - false : 按钮不可单击
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
    * Gets fixFailedReason
    *  **参数解释** 修复失败原因 **取值范围** 不涉及
    *
    * @return string|null
    */
    public function getFixFailedReason()
    {
        return $this->container['fixFailedReason'];
    }

    /**
    * Sets fixFailedReason
    *
    * @param string|null $fixFailedReason **参数解释** 修复失败原因 **取值范围** 不涉及
    *
    * @return $this
    */
    public function setFixFailedReason($fixFailedReason)
    {
        $this->container['fixFailedReason'] = $fixFailedReason;
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

