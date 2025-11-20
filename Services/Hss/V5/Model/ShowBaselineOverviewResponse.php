<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowBaselineOverviewResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowBaselineOverviewResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scanTime  **参数解释**: 最新检测时间(ms)。 **取值范围**: 取值0-9223372036854775807
    * hostNum  **参数解释**: 检查服务器数量。 **取值范围**: 取值0-2147483647
    * failedHostNum  **参数解释**: 未通过主机数。 **取值范围**: 取值0-2147483647
    * checkTypeNum  **参数解释**: 检测基线数量。例如共检测了SSH、CentOS 7这2个配置检测（基线）类型，值就是2。 **取值范围**: 取值0-2147483647
    * checkRuleNum  **参数解释**: 基线检测项（检测规则）数量。例如SSH基线检测了17条规则，CentOS 7基线检测了60条规则，值就是17+60=77。 **取值范围**: 取值0-2147483647
    * checkRulePassRate  **参数解释**: 基线检查项通过率。 **取值范围**: 取值0-2147483647
    * cnStandardCheckRulePassRate  **参数解释**: 云安全实践基线检查项通过率。 **取值范围**: 取值0-2147483647
    * hwStandardCheckRulePassRate  **参数解释**: 等保合规基线检查项通过率。 **取值范围**: 取值0-2147483647
    * checkRuleFailedNum  **参数解释**: 未通过的检查项数量。 **取值范围**: 取值0-2147483647
    * checkRuleHighRisk  **参数解释**: 高危检查项数量。 **取值范围**: 取值0-2147483647
    * checkRuleMediumRisk  **参数解释**: 中危检查项数量。 **取值范围**: 取值0-2147483647
    * checkRuleLowRisk  **参数解释**: 低危检查项数量。 **取值范围**: 取值0-2147483647
    * weakPwdTotalHost  **参数解释**: 弱口令检测主机总数。 **取值范围**: 取值0-2147483647
    * weakPwdRisk  **参数解释**: 弱口令检测结果：有弱口令的主机数。 **取值范围**: 取值0-2147483647
    * weakPwdNormal  **参数解释**: 弱口令检测结果：无弱口令的主机数。 **取值范围**: 取值0-2147483647
    * weakPwdNotProtected  **参数解释**: 弱口令检测结果：未开启防护的主机数。 **取值范围**: 取值0-2147483647
    * hostRisks  服务器风险TOP5列表
    * weakPwdRiskHosts  主机弱口令风险TOP5列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scanTime' => 'int',
            'hostNum' => 'int',
            'failedHostNum' => 'int',
            'checkTypeNum' => 'int',
            'checkRuleNum' => 'int',
            'checkRulePassRate' => 'int',
            'cnStandardCheckRulePassRate' => 'int',
            'hwStandardCheckRulePassRate' => 'int',
            'checkRuleFailedNum' => 'int',
            'checkRuleHighRisk' => 'int',
            'checkRuleMediumRisk' => 'int',
            'checkRuleLowRisk' => 'int',
            'weakPwdTotalHost' => 'int',
            'weakPwdRisk' => 'int',
            'weakPwdNormal' => 'int',
            'weakPwdNotProtected' => 'int',
            'hostRisks' => '\HuaweiCloud\SDK\Hss\V5\Model\HostRiskNumInfoResponseInfo[]',
            'weakPwdRiskHosts' => '\HuaweiCloud\SDK\Hss\V5\Model\HostWeakPwdRiskNumInfoResponseInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scanTime  **参数解释**: 最新检测时间(ms)。 **取值范围**: 取值0-9223372036854775807
    * hostNum  **参数解释**: 检查服务器数量。 **取值范围**: 取值0-2147483647
    * failedHostNum  **参数解释**: 未通过主机数。 **取值范围**: 取值0-2147483647
    * checkTypeNum  **参数解释**: 检测基线数量。例如共检测了SSH、CentOS 7这2个配置检测（基线）类型，值就是2。 **取值范围**: 取值0-2147483647
    * checkRuleNum  **参数解释**: 基线检测项（检测规则）数量。例如SSH基线检测了17条规则，CentOS 7基线检测了60条规则，值就是17+60=77。 **取值范围**: 取值0-2147483647
    * checkRulePassRate  **参数解释**: 基线检查项通过率。 **取值范围**: 取值0-2147483647
    * cnStandardCheckRulePassRate  **参数解释**: 云安全实践基线检查项通过率。 **取值范围**: 取值0-2147483647
    * hwStandardCheckRulePassRate  **参数解释**: 等保合规基线检查项通过率。 **取值范围**: 取值0-2147483647
    * checkRuleFailedNum  **参数解释**: 未通过的检查项数量。 **取值范围**: 取值0-2147483647
    * checkRuleHighRisk  **参数解释**: 高危检查项数量。 **取值范围**: 取值0-2147483647
    * checkRuleMediumRisk  **参数解释**: 中危检查项数量。 **取值范围**: 取值0-2147483647
    * checkRuleLowRisk  **参数解释**: 低危检查项数量。 **取值范围**: 取值0-2147483647
    * weakPwdTotalHost  **参数解释**: 弱口令检测主机总数。 **取值范围**: 取值0-2147483647
    * weakPwdRisk  **参数解释**: 弱口令检测结果：有弱口令的主机数。 **取值范围**: 取值0-2147483647
    * weakPwdNormal  **参数解释**: 弱口令检测结果：无弱口令的主机数。 **取值范围**: 取值0-2147483647
    * weakPwdNotProtected  **参数解释**: 弱口令检测结果：未开启防护的主机数。 **取值范围**: 取值0-2147483647
    * hostRisks  服务器风险TOP5列表
    * weakPwdRiskHosts  主机弱口令风险TOP5列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scanTime' => 'int64',
        'hostNum' => 'int32',
        'failedHostNum' => 'int32',
        'checkTypeNum' => 'int32',
        'checkRuleNum' => 'int32',
        'checkRulePassRate' => 'int32',
        'cnStandardCheckRulePassRate' => 'int32',
        'hwStandardCheckRulePassRate' => 'int32',
        'checkRuleFailedNum' => 'int32',
        'checkRuleHighRisk' => 'int32',
        'checkRuleMediumRisk' => 'int32',
        'checkRuleLowRisk' => 'int32',
        'weakPwdTotalHost' => 'int32',
        'weakPwdRisk' => 'int32',
        'weakPwdNormal' => 'int32',
        'weakPwdNotProtected' => 'int32',
        'hostRisks' => null,
        'weakPwdRiskHosts' => null
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
    * scanTime  **参数解释**: 最新检测时间(ms)。 **取值范围**: 取值0-9223372036854775807
    * hostNum  **参数解释**: 检查服务器数量。 **取值范围**: 取值0-2147483647
    * failedHostNum  **参数解释**: 未通过主机数。 **取值范围**: 取值0-2147483647
    * checkTypeNum  **参数解释**: 检测基线数量。例如共检测了SSH、CentOS 7这2个配置检测（基线）类型，值就是2。 **取值范围**: 取值0-2147483647
    * checkRuleNum  **参数解释**: 基线检测项（检测规则）数量。例如SSH基线检测了17条规则，CentOS 7基线检测了60条规则，值就是17+60=77。 **取值范围**: 取值0-2147483647
    * checkRulePassRate  **参数解释**: 基线检查项通过率。 **取值范围**: 取值0-2147483647
    * cnStandardCheckRulePassRate  **参数解释**: 云安全实践基线检查项通过率。 **取值范围**: 取值0-2147483647
    * hwStandardCheckRulePassRate  **参数解释**: 等保合规基线检查项通过率。 **取值范围**: 取值0-2147483647
    * checkRuleFailedNum  **参数解释**: 未通过的检查项数量。 **取值范围**: 取值0-2147483647
    * checkRuleHighRisk  **参数解释**: 高危检查项数量。 **取值范围**: 取值0-2147483647
    * checkRuleMediumRisk  **参数解释**: 中危检查项数量。 **取值范围**: 取值0-2147483647
    * checkRuleLowRisk  **参数解释**: 低危检查项数量。 **取值范围**: 取值0-2147483647
    * weakPwdTotalHost  **参数解释**: 弱口令检测主机总数。 **取值范围**: 取值0-2147483647
    * weakPwdRisk  **参数解释**: 弱口令检测结果：有弱口令的主机数。 **取值范围**: 取值0-2147483647
    * weakPwdNormal  **参数解释**: 弱口令检测结果：无弱口令的主机数。 **取值范围**: 取值0-2147483647
    * weakPwdNotProtected  **参数解释**: 弱口令检测结果：未开启防护的主机数。 **取值范围**: 取值0-2147483647
    * hostRisks  服务器风险TOP5列表
    * weakPwdRiskHosts  主机弱口令风险TOP5列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scanTime' => 'scan_time',
            'hostNum' => 'host_num',
            'failedHostNum' => 'failed_host_num',
            'checkTypeNum' => 'check_type_num',
            'checkRuleNum' => 'check_rule_num',
            'checkRulePassRate' => 'check_rule_pass_rate',
            'cnStandardCheckRulePassRate' => 'cn_standard_check_rule_pass_rate',
            'hwStandardCheckRulePassRate' => 'hw_standard_check_rule_pass_rate',
            'checkRuleFailedNum' => 'check_rule_failed_num',
            'checkRuleHighRisk' => 'check_rule_high_risk',
            'checkRuleMediumRisk' => 'check_rule_medium_risk',
            'checkRuleLowRisk' => 'check_rule_low_risk',
            'weakPwdTotalHost' => 'weak_pwd_total_host',
            'weakPwdRisk' => 'weak_pwd_risk',
            'weakPwdNormal' => 'weak_pwd_normal',
            'weakPwdNotProtected' => 'weak_pwd_not_protected',
            'hostRisks' => 'host_risks',
            'weakPwdRiskHosts' => 'weak_pwd_risk_hosts'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scanTime  **参数解释**: 最新检测时间(ms)。 **取值范围**: 取值0-9223372036854775807
    * hostNum  **参数解释**: 检查服务器数量。 **取值范围**: 取值0-2147483647
    * failedHostNum  **参数解释**: 未通过主机数。 **取值范围**: 取值0-2147483647
    * checkTypeNum  **参数解释**: 检测基线数量。例如共检测了SSH、CentOS 7这2个配置检测（基线）类型，值就是2。 **取值范围**: 取值0-2147483647
    * checkRuleNum  **参数解释**: 基线检测项（检测规则）数量。例如SSH基线检测了17条规则，CentOS 7基线检测了60条规则，值就是17+60=77。 **取值范围**: 取值0-2147483647
    * checkRulePassRate  **参数解释**: 基线检查项通过率。 **取值范围**: 取值0-2147483647
    * cnStandardCheckRulePassRate  **参数解释**: 云安全实践基线检查项通过率。 **取值范围**: 取值0-2147483647
    * hwStandardCheckRulePassRate  **参数解释**: 等保合规基线检查项通过率。 **取值范围**: 取值0-2147483647
    * checkRuleFailedNum  **参数解释**: 未通过的检查项数量。 **取值范围**: 取值0-2147483647
    * checkRuleHighRisk  **参数解释**: 高危检查项数量。 **取值范围**: 取值0-2147483647
    * checkRuleMediumRisk  **参数解释**: 中危检查项数量。 **取值范围**: 取值0-2147483647
    * checkRuleLowRisk  **参数解释**: 低危检查项数量。 **取值范围**: 取值0-2147483647
    * weakPwdTotalHost  **参数解释**: 弱口令检测主机总数。 **取值范围**: 取值0-2147483647
    * weakPwdRisk  **参数解释**: 弱口令检测结果：有弱口令的主机数。 **取值范围**: 取值0-2147483647
    * weakPwdNormal  **参数解释**: 弱口令检测结果：无弱口令的主机数。 **取值范围**: 取值0-2147483647
    * weakPwdNotProtected  **参数解释**: 弱口令检测结果：未开启防护的主机数。 **取值范围**: 取值0-2147483647
    * hostRisks  服务器风险TOP5列表
    * weakPwdRiskHosts  主机弱口令风险TOP5列表
    *
    * @var string[]
    */
    protected static $setters = [
            'scanTime' => 'setScanTime',
            'hostNum' => 'setHostNum',
            'failedHostNum' => 'setFailedHostNum',
            'checkTypeNum' => 'setCheckTypeNum',
            'checkRuleNum' => 'setCheckRuleNum',
            'checkRulePassRate' => 'setCheckRulePassRate',
            'cnStandardCheckRulePassRate' => 'setCnStandardCheckRulePassRate',
            'hwStandardCheckRulePassRate' => 'setHwStandardCheckRulePassRate',
            'checkRuleFailedNum' => 'setCheckRuleFailedNum',
            'checkRuleHighRisk' => 'setCheckRuleHighRisk',
            'checkRuleMediumRisk' => 'setCheckRuleMediumRisk',
            'checkRuleLowRisk' => 'setCheckRuleLowRisk',
            'weakPwdTotalHost' => 'setWeakPwdTotalHost',
            'weakPwdRisk' => 'setWeakPwdRisk',
            'weakPwdNormal' => 'setWeakPwdNormal',
            'weakPwdNotProtected' => 'setWeakPwdNotProtected',
            'hostRisks' => 'setHostRisks',
            'weakPwdRiskHosts' => 'setWeakPwdRiskHosts'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scanTime  **参数解释**: 最新检测时间(ms)。 **取值范围**: 取值0-9223372036854775807
    * hostNum  **参数解释**: 检查服务器数量。 **取值范围**: 取值0-2147483647
    * failedHostNum  **参数解释**: 未通过主机数。 **取值范围**: 取值0-2147483647
    * checkTypeNum  **参数解释**: 检测基线数量。例如共检测了SSH、CentOS 7这2个配置检测（基线）类型，值就是2。 **取值范围**: 取值0-2147483647
    * checkRuleNum  **参数解释**: 基线检测项（检测规则）数量。例如SSH基线检测了17条规则，CentOS 7基线检测了60条规则，值就是17+60=77。 **取值范围**: 取值0-2147483647
    * checkRulePassRate  **参数解释**: 基线检查项通过率。 **取值范围**: 取值0-2147483647
    * cnStandardCheckRulePassRate  **参数解释**: 云安全实践基线检查项通过率。 **取值范围**: 取值0-2147483647
    * hwStandardCheckRulePassRate  **参数解释**: 等保合规基线检查项通过率。 **取值范围**: 取值0-2147483647
    * checkRuleFailedNum  **参数解释**: 未通过的检查项数量。 **取值范围**: 取值0-2147483647
    * checkRuleHighRisk  **参数解释**: 高危检查项数量。 **取值范围**: 取值0-2147483647
    * checkRuleMediumRisk  **参数解释**: 中危检查项数量。 **取值范围**: 取值0-2147483647
    * checkRuleLowRisk  **参数解释**: 低危检查项数量。 **取值范围**: 取值0-2147483647
    * weakPwdTotalHost  **参数解释**: 弱口令检测主机总数。 **取值范围**: 取值0-2147483647
    * weakPwdRisk  **参数解释**: 弱口令检测结果：有弱口令的主机数。 **取值范围**: 取值0-2147483647
    * weakPwdNormal  **参数解释**: 弱口令检测结果：无弱口令的主机数。 **取值范围**: 取值0-2147483647
    * weakPwdNotProtected  **参数解释**: 弱口令检测结果：未开启防护的主机数。 **取值范围**: 取值0-2147483647
    * hostRisks  服务器风险TOP5列表
    * weakPwdRiskHosts  主机弱口令风险TOP5列表
    *
    * @var string[]
    */
    protected static $getters = [
            'scanTime' => 'getScanTime',
            'hostNum' => 'getHostNum',
            'failedHostNum' => 'getFailedHostNum',
            'checkTypeNum' => 'getCheckTypeNum',
            'checkRuleNum' => 'getCheckRuleNum',
            'checkRulePassRate' => 'getCheckRulePassRate',
            'cnStandardCheckRulePassRate' => 'getCnStandardCheckRulePassRate',
            'hwStandardCheckRulePassRate' => 'getHwStandardCheckRulePassRate',
            'checkRuleFailedNum' => 'getCheckRuleFailedNum',
            'checkRuleHighRisk' => 'getCheckRuleHighRisk',
            'checkRuleMediumRisk' => 'getCheckRuleMediumRisk',
            'checkRuleLowRisk' => 'getCheckRuleLowRisk',
            'weakPwdTotalHost' => 'getWeakPwdTotalHost',
            'weakPwdRisk' => 'getWeakPwdRisk',
            'weakPwdNormal' => 'getWeakPwdNormal',
            'weakPwdNotProtected' => 'getWeakPwdNotProtected',
            'hostRisks' => 'getHostRisks',
            'weakPwdRiskHosts' => 'getWeakPwdRiskHosts'
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
        $this->container['scanTime'] = isset($data['scanTime']) ? $data['scanTime'] : null;
        $this->container['hostNum'] = isset($data['hostNum']) ? $data['hostNum'] : null;
        $this->container['failedHostNum'] = isset($data['failedHostNum']) ? $data['failedHostNum'] : null;
        $this->container['checkTypeNum'] = isset($data['checkTypeNum']) ? $data['checkTypeNum'] : null;
        $this->container['checkRuleNum'] = isset($data['checkRuleNum']) ? $data['checkRuleNum'] : null;
        $this->container['checkRulePassRate'] = isset($data['checkRulePassRate']) ? $data['checkRulePassRate'] : null;
        $this->container['cnStandardCheckRulePassRate'] = isset($data['cnStandardCheckRulePassRate']) ? $data['cnStandardCheckRulePassRate'] : null;
        $this->container['hwStandardCheckRulePassRate'] = isset($data['hwStandardCheckRulePassRate']) ? $data['hwStandardCheckRulePassRate'] : null;
        $this->container['checkRuleFailedNum'] = isset($data['checkRuleFailedNum']) ? $data['checkRuleFailedNum'] : null;
        $this->container['checkRuleHighRisk'] = isset($data['checkRuleHighRisk']) ? $data['checkRuleHighRisk'] : null;
        $this->container['checkRuleMediumRisk'] = isset($data['checkRuleMediumRisk']) ? $data['checkRuleMediumRisk'] : null;
        $this->container['checkRuleLowRisk'] = isset($data['checkRuleLowRisk']) ? $data['checkRuleLowRisk'] : null;
        $this->container['weakPwdTotalHost'] = isset($data['weakPwdTotalHost']) ? $data['weakPwdTotalHost'] : null;
        $this->container['weakPwdRisk'] = isset($data['weakPwdRisk']) ? $data['weakPwdRisk'] : null;
        $this->container['weakPwdNormal'] = isset($data['weakPwdNormal']) ? $data['weakPwdNormal'] : null;
        $this->container['weakPwdNotProtected'] = isset($data['weakPwdNotProtected']) ? $data['weakPwdNotProtected'] : null;
        $this->container['hostRisks'] = isset($data['hostRisks']) ? $data['hostRisks'] : null;
        $this->container['weakPwdRiskHosts'] = isset($data['weakPwdRiskHosts']) ? $data['weakPwdRiskHosts'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['scanTime']) && ($this->container['scanTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'scanTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['scanTime']) && ($this->container['scanTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'scanTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostNum']) && ($this->container['hostNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'hostNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['hostNum']) && ($this->container['hostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'hostNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['failedHostNum']) && ($this->container['failedHostNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'failedHostNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['failedHostNum']) && ($this->container['failedHostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'failedHostNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['checkTypeNum']) && ($this->container['checkTypeNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'checkTypeNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['checkTypeNum']) && ($this->container['checkTypeNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'checkTypeNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['checkRuleNum']) && ($this->container['checkRuleNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'checkRuleNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['checkRuleNum']) && ($this->container['checkRuleNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'checkRuleNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['checkRulePassRate']) && ($this->container['checkRulePassRate'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'checkRulePassRate', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['checkRulePassRate']) && ($this->container['checkRulePassRate'] < 0)) {
                $invalidProperties[] = "invalid value for 'checkRulePassRate', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cnStandardCheckRulePassRate']) && ($this->container['cnStandardCheckRulePassRate'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'cnStandardCheckRulePassRate', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['cnStandardCheckRulePassRate']) && ($this->container['cnStandardCheckRulePassRate'] < 0)) {
                $invalidProperties[] = "invalid value for 'cnStandardCheckRulePassRate', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hwStandardCheckRulePassRate']) && ($this->container['hwStandardCheckRulePassRate'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'hwStandardCheckRulePassRate', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['hwStandardCheckRulePassRate']) && ($this->container['hwStandardCheckRulePassRate'] < 0)) {
                $invalidProperties[] = "invalid value for 'hwStandardCheckRulePassRate', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['checkRuleFailedNum']) && ($this->container['checkRuleFailedNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'checkRuleFailedNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['checkRuleFailedNum']) && ($this->container['checkRuleFailedNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'checkRuleFailedNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['checkRuleHighRisk']) && ($this->container['checkRuleHighRisk'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'checkRuleHighRisk', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['checkRuleHighRisk']) && ($this->container['checkRuleHighRisk'] < 0)) {
                $invalidProperties[] = "invalid value for 'checkRuleHighRisk', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['checkRuleMediumRisk']) && ($this->container['checkRuleMediumRisk'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'checkRuleMediumRisk', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['checkRuleMediumRisk']) && ($this->container['checkRuleMediumRisk'] < 0)) {
                $invalidProperties[] = "invalid value for 'checkRuleMediumRisk', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['checkRuleLowRisk']) && ($this->container['checkRuleLowRisk'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'checkRuleLowRisk', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['checkRuleLowRisk']) && ($this->container['checkRuleLowRisk'] < 0)) {
                $invalidProperties[] = "invalid value for 'checkRuleLowRisk', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['weakPwdTotalHost']) && ($this->container['weakPwdTotalHost'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'weakPwdTotalHost', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['weakPwdTotalHost']) && ($this->container['weakPwdTotalHost'] < 0)) {
                $invalidProperties[] = "invalid value for 'weakPwdTotalHost', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['weakPwdRisk']) && ($this->container['weakPwdRisk'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'weakPwdRisk', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['weakPwdRisk']) && ($this->container['weakPwdRisk'] < 0)) {
                $invalidProperties[] = "invalid value for 'weakPwdRisk', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['weakPwdNormal']) && ($this->container['weakPwdNormal'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'weakPwdNormal', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['weakPwdNormal']) && ($this->container['weakPwdNormal'] < 0)) {
                $invalidProperties[] = "invalid value for 'weakPwdNormal', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['weakPwdNotProtected']) && ($this->container['weakPwdNotProtected'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'weakPwdNotProtected', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['weakPwdNotProtected']) && ($this->container['weakPwdNotProtected'] < 0)) {
                $invalidProperties[] = "invalid value for 'weakPwdNotProtected', must be bigger than or equal to 0.";
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
    * Gets scanTime
    *  **参数解释**: 最新检测时间(ms)。 **取值范围**: 取值0-9223372036854775807
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
    * @param int|null $scanTime **参数解释**: 最新检测时间(ms)。 **取值范围**: 取值0-9223372036854775807
    *
    * @return $this
    */
    public function setScanTime($scanTime)
    {
        $this->container['scanTime'] = $scanTime;
        return $this;
    }

    /**
    * Gets hostNum
    *  **参数解释**: 检查服务器数量。 **取值范围**: 取值0-2147483647
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
    * @param int|null $hostNum **参数解释**: 检查服务器数量。 **取值范围**: 取值0-2147483647
    *
    * @return $this
    */
    public function setHostNum($hostNum)
    {
        $this->container['hostNum'] = $hostNum;
        return $this;
    }

    /**
    * Gets failedHostNum
    *  **参数解释**: 未通过主机数。 **取值范围**: 取值0-2147483647
    *
    * @return int|null
    */
    public function getFailedHostNum()
    {
        return $this->container['failedHostNum'];
    }

    /**
    * Sets failedHostNum
    *
    * @param int|null $failedHostNum **参数解释**: 未通过主机数。 **取值范围**: 取值0-2147483647
    *
    * @return $this
    */
    public function setFailedHostNum($failedHostNum)
    {
        $this->container['failedHostNum'] = $failedHostNum;
        return $this;
    }

    /**
    * Gets checkTypeNum
    *  **参数解释**: 检测基线数量。例如共检测了SSH、CentOS 7这2个配置检测（基线）类型，值就是2。 **取值范围**: 取值0-2147483647
    *
    * @return int|null
    */
    public function getCheckTypeNum()
    {
        return $this->container['checkTypeNum'];
    }

    /**
    * Sets checkTypeNum
    *
    * @param int|null $checkTypeNum **参数解释**: 检测基线数量。例如共检测了SSH、CentOS 7这2个配置检测（基线）类型，值就是2。 **取值范围**: 取值0-2147483647
    *
    * @return $this
    */
    public function setCheckTypeNum($checkTypeNum)
    {
        $this->container['checkTypeNum'] = $checkTypeNum;
        return $this;
    }

    /**
    * Gets checkRuleNum
    *  **参数解释**: 基线检测项（检测规则）数量。例如SSH基线检测了17条规则，CentOS 7基线检测了60条规则，值就是17+60=77。 **取值范围**: 取值0-2147483647
    *
    * @return int|null
    */
    public function getCheckRuleNum()
    {
        return $this->container['checkRuleNum'];
    }

    /**
    * Sets checkRuleNum
    *
    * @param int|null $checkRuleNum **参数解释**: 基线检测项（检测规则）数量。例如SSH基线检测了17条规则，CentOS 7基线检测了60条规则，值就是17+60=77。 **取值范围**: 取值0-2147483647
    *
    * @return $this
    */
    public function setCheckRuleNum($checkRuleNum)
    {
        $this->container['checkRuleNum'] = $checkRuleNum;
        return $this;
    }

    /**
    * Gets checkRulePassRate
    *  **参数解释**: 基线检查项通过率。 **取值范围**: 取值0-2147483647
    *
    * @return int|null
    */
    public function getCheckRulePassRate()
    {
        return $this->container['checkRulePassRate'];
    }

    /**
    * Sets checkRulePassRate
    *
    * @param int|null $checkRulePassRate **参数解释**: 基线检查项通过率。 **取值范围**: 取值0-2147483647
    *
    * @return $this
    */
    public function setCheckRulePassRate($checkRulePassRate)
    {
        $this->container['checkRulePassRate'] = $checkRulePassRate;
        return $this;
    }

    /**
    * Gets cnStandardCheckRulePassRate
    *  **参数解释**: 云安全实践基线检查项通过率。 **取值范围**: 取值0-2147483647
    *
    * @return int|null
    */
    public function getCnStandardCheckRulePassRate()
    {
        return $this->container['cnStandardCheckRulePassRate'];
    }

    /**
    * Sets cnStandardCheckRulePassRate
    *
    * @param int|null $cnStandardCheckRulePassRate **参数解释**: 云安全实践基线检查项通过率。 **取值范围**: 取值0-2147483647
    *
    * @return $this
    */
    public function setCnStandardCheckRulePassRate($cnStandardCheckRulePassRate)
    {
        $this->container['cnStandardCheckRulePassRate'] = $cnStandardCheckRulePassRate;
        return $this;
    }

    /**
    * Gets hwStandardCheckRulePassRate
    *  **参数解释**: 等保合规基线检查项通过率。 **取值范围**: 取值0-2147483647
    *
    * @return int|null
    */
    public function getHwStandardCheckRulePassRate()
    {
        return $this->container['hwStandardCheckRulePassRate'];
    }

    /**
    * Sets hwStandardCheckRulePassRate
    *
    * @param int|null $hwStandardCheckRulePassRate **参数解释**: 等保合规基线检查项通过率。 **取值范围**: 取值0-2147483647
    *
    * @return $this
    */
    public function setHwStandardCheckRulePassRate($hwStandardCheckRulePassRate)
    {
        $this->container['hwStandardCheckRulePassRate'] = $hwStandardCheckRulePassRate;
        return $this;
    }

    /**
    * Gets checkRuleFailedNum
    *  **参数解释**: 未通过的检查项数量。 **取值范围**: 取值0-2147483647
    *
    * @return int|null
    */
    public function getCheckRuleFailedNum()
    {
        return $this->container['checkRuleFailedNum'];
    }

    /**
    * Sets checkRuleFailedNum
    *
    * @param int|null $checkRuleFailedNum **参数解释**: 未通过的检查项数量。 **取值范围**: 取值0-2147483647
    *
    * @return $this
    */
    public function setCheckRuleFailedNum($checkRuleFailedNum)
    {
        $this->container['checkRuleFailedNum'] = $checkRuleFailedNum;
        return $this;
    }

    /**
    * Gets checkRuleHighRisk
    *  **参数解释**: 高危检查项数量。 **取值范围**: 取值0-2147483647
    *
    * @return int|null
    */
    public function getCheckRuleHighRisk()
    {
        return $this->container['checkRuleHighRisk'];
    }

    /**
    * Sets checkRuleHighRisk
    *
    * @param int|null $checkRuleHighRisk **参数解释**: 高危检查项数量。 **取值范围**: 取值0-2147483647
    *
    * @return $this
    */
    public function setCheckRuleHighRisk($checkRuleHighRisk)
    {
        $this->container['checkRuleHighRisk'] = $checkRuleHighRisk;
        return $this;
    }

    /**
    * Gets checkRuleMediumRisk
    *  **参数解释**: 中危检查项数量。 **取值范围**: 取值0-2147483647
    *
    * @return int|null
    */
    public function getCheckRuleMediumRisk()
    {
        return $this->container['checkRuleMediumRisk'];
    }

    /**
    * Sets checkRuleMediumRisk
    *
    * @param int|null $checkRuleMediumRisk **参数解释**: 中危检查项数量。 **取值范围**: 取值0-2147483647
    *
    * @return $this
    */
    public function setCheckRuleMediumRisk($checkRuleMediumRisk)
    {
        $this->container['checkRuleMediumRisk'] = $checkRuleMediumRisk;
        return $this;
    }

    /**
    * Gets checkRuleLowRisk
    *  **参数解释**: 低危检查项数量。 **取值范围**: 取值0-2147483647
    *
    * @return int|null
    */
    public function getCheckRuleLowRisk()
    {
        return $this->container['checkRuleLowRisk'];
    }

    /**
    * Sets checkRuleLowRisk
    *
    * @param int|null $checkRuleLowRisk **参数解释**: 低危检查项数量。 **取值范围**: 取值0-2147483647
    *
    * @return $this
    */
    public function setCheckRuleLowRisk($checkRuleLowRisk)
    {
        $this->container['checkRuleLowRisk'] = $checkRuleLowRisk;
        return $this;
    }

    /**
    * Gets weakPwdTotalHost
    *  **参数解释**: 弱口令检测主机总数。 **取值范围**: 取值0-2147483647
    *
    * @return int|null
    */
    public function getWeakPwdTotalHost()
    {
        return $this->container['weakPwdTotalHost'];
    }

    /**
    * Sets weakPwdTotalHost
    *
    * @param int|null $weakPwdTotalHost **参数解释**: 弱口令检测主机总数。 **取值范围**: 取值0-2147483647
    *
    * @return $this
    */
    public function setWeakPwdTotalHost($weakPwdTotalHost)
    {
        $this->container['weakPwdTotalHost'] = $weakPwdTotalHost;
        return $this;
    }

    /**
    * Gets weakPwdRisk
    *  **参数解释**: 弱口令检测结果：有弱口令的主机数。 **取值范围**: 取值0-2147483647
    *
    * @return int|null
    */
    public function getWeakPwdRisk()
    {
        return $this->container['weakPwdRisk'];
    }

    /**
    * Sets weakPwdRisk
    *
    * @param int|null $weakPwdRisk **参数解释**: 弱口令检测结果：有弱口令的主机数。 **取值范围**: 取值0-2147483647
    *
    * @return $this
    */
    public function setWeakPwdRisk($weakPwdRisk)
    {
        $this->container['weakPwdRisk'] = $weakPwdRisk;
        return $this;
    }

    /**
    * Gets weakPwdNormal
    *  **参数解释**: 弱口令检测结果：无弱口令的主机数。 **取值范围**: 取值0-2147483647
    *
    * @return int|null
    */
    public function getWeakPwdNormal()
    {
        return $this->container['weakPwdNormal'];
    }

    /**
    * Sets weakPwdNormal
    *
    * @param int|null $weakPwdNormal **参数解释**: 弱口令检测结果：无弱口令的主机数。 **取值范围**: 取值0-2147483647
    *
    * @return $this
    */
    public function setWeakPwdNormal($weakPwdNormal)
    {
        $this->container['weakPwdNormal'] = $weakPwdNormal;
        return $this;
    }

    /**
    * Gets weakPwdNotProtected
    *  **参数解释**: 弱口令检测结果：未开启防护的主机数。 **取值范围**: 取值0-2147483647
    *
    * @return int|null
    */
    public function getWeakPwdNotProtected()
    {
        return $this->container['weakPwdNotProtected'];
    }

    /**
    * Sets weakPwdNotProtected
    *
    * @param int|null $weakPwdNotProtected **参数解释**: 弱口令检测结果：未开启防护的主机数。 **取值范围**: 取值0-2147483647
    *
    * @return $this
    */
    public function setWeakPwdNotProtected($weakPwdNotProtected)
    {
        $this->container['weakPwdNotProtected'] = $weakPwdNotProtected;
        return $this;
    }

    /**
    * Gets hostRisks
    *  服务器风险TOP5列表
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\HostRiskNumInfoResponseInfo[]|null
    */
    public function getHostRisks()
    {
        return $this->container['hostRisks'];
    }

    /**
    * Sets hostRisks
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\HostRiskNumInfoResponseInfo[]|null $hostRisks 服务器风险TOP5列表
    *
    * @return $this
    */
    public function setHostRisks($hostRisks)
    {
        $this->container['hostRisks'] = $hostRisks;
        return $this;
    }

    /**
    * Gets weakPwdRiskHosts
    *  主机弱口令风险TOP5列表
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\HostWeakPwdRiskNumInfoResponseInfo[]|null
    */
    public function getWeakPwdRiskHosts()
    {
        return $this->container['weakPwdRiskHosts'];
    }

    /**
    * Sets weakPwdRiskHosts
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\HostWeakPwdRiskNumInfoResponseInfo[]|null $weakPwdRiskHosts 主机弱口令风险TOP5列表
    *
    * @return $this
    */
    public function setWeakPwdRiskHosts($weakPwdRiskHosts)
    {
        $this->container['weakPwdRiskHosts'] = $weakPwdRiskHosts;
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

