<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CheckRuleRiskInfoResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CheckRuleRiskInfoResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * severity  风险等级，包含如下:   - Low : 低危   - Medium : 中危   - High : 高危
    * checkName  配置检查（基线）的名称，例如SSH、CentOS 7、Windows
    * checkType  配置检查（基线）的类型,Linux系统支持的基线一般check_type和check_name相同,例如SSH、CentOS 7。 Windows系统支持的基线一般check_type和check_name不相同，例如check_name为Windows的配置检查（基线），它的check_type包含Windows Server 2019 R2、Windows Server 2016 R2等。
    * standard  标准类型，包含如下:   - cn_standard : 等保合规标准   - hw_standard : 云安全实践标准
    * checkRuleName  检查项（检查规则）名称
    * checkRuleId  检查项ID
    * hostNum  受影响的服务器的数量，进行了当前基线检测的服务器数量
    * scanResult  检测结果，包含如下：   - pass   - failed
    * status  状态，包含如下：   - safe : 无需处理   - ignored : 已忽略   - unhandled : 未处理   - fixing : 修复中   - fix-failed : 修复失败   - verifying : 验证中
    * enableFix  是否支持一键修复,1:支持一键修复,0:不支持
    * enableClick  该检查项的修复&忽略&验证按钮是否可单击,true:按钮可单击,false:按钮不可单击
    * ruleParams  支持传递参数修复的检查项可传递参数的范围，只有支持传递参数修复的检查项才返回此数据
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'severity' => 'string',
            'checkName' => 'string',
            'checkType' => 'string',
            'standard' => 'string',
            'checkRuleName' => 'string',
            'checkRuleId' => 'string',
            'hostNum' => 'int',
            'scanResult' => 'string',
            'status' => 'string',
            'enableFix' => 'int',
            'enableClick' => 'bool',
            'ruleParams' => '\HuaweiCloud\SDK\Hss\V5\Model\CheckRuleFixParamInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * severity  风险等级，包含如下:   - Low : 低危   - Medium : 中危   - High : 高危
    * checkName  配置检查（基线）的名称，例如SSH、CentOS 7、Windows
    * checkType  配置检查（基线）的类型,Linux系统支持的基线一般check_type和check_name相同,例如SSH、CentOS 7。 Windows系统支持的基线一般check_type和check_name不相同，例如check_name为Windows的配置检查（基线），它的check_type包含Windows Server 2019 R2、Windows Server 2016 R2等。
    * standard  标准类型，包含如下:   - cn_standard : 等保合规标准   - hw_standard : 云安全实践标准
    * checkRuleName  检查项（检查规则）名称
    * checkRuleId  检查项ID
    * hostNum  受影响的服务器的数量，进行了当前基线检测的服务器数量
    * scanResult  检测结果，包含如下：   - pass   - failed
    * status  状态，包含如下：   - safe : 无需处理   - ignored : 已忽略   - unhandled : 未处理   - fixing : 修复中   - fix-failed : 修复失败   - verifying : 验证中
    * enableFix  是否支持一键修复,1:支持一键修复,0:不支持
    * enableClick  该检查项的修复&忽略&验证按钮是否可单击,true:按钮可单击,false:按钮不可单击
    * ruleParams  支持传递参数修复的检查项可传递参数的范围，只有支持传递参数修复的检查项才返回此数据
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'severity' => null,
        'checkName' => null,
        'checkType' => null,
        'standard' => null,
        'checkRuleName' => null,
        'checkRuleId' => null,
        'hostNum' => 'int32',
        'scanResult' => null,
        'status' => null,
        'enableFix' => 'int32',
        'enableClick' => null,
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
    * severity  风险等级，包含如下:   - Low : 低危   - Medium : 中危   - High : 高危
    * checkName  配置检查（基线）的名称，例如SSH、CentOS 7、Windows
    * checkType  配置检查（基线）的类型,Linux系统支持的基线一般check_type和check_name相同,例如SSH、CentOS 7。 Windows系统支持的基线一般check_type和check_name不相同，例如check_name为Windows的配置检查（基线），它的check_type包含Windows Server 2019 R2、Windows Server 2016 R2等。
    * standard  标准类型，包含如下:   - cn_standard : 等保合规标准   - hw_standard : 云安全实践标准
    * checkRuleName  检查项（检查规则）名称
    * checkRuleId  检查项ID
    * hostNum  受影响的服务器的数量，进行了当前基线检测的服务器数量
    * scanResult  检测结果，包含如下：   - pass   - failed
    * status  状态，包含如下：   - safe : 无需处理   - ignored : 已忽略   - unhandled : 未处理   - fixing : 修复中   - fix-failed : 修复失败   - verifying : 验证中
    * enableFix  是否支持一键修复,1:支持一键修复,0:不支持
    * enableClick  该检查项的修复&忽略&验证按钮是否可单击,true:按钮可单击,false:按钮不可单击
    * ruleParams  支持传递参数修复的检查项可传递参数的范围，只有支持传递参数修复的检查项才返回此数据
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'severity' => 'severity',
            'checkName' => 'check_name',
            'checkType' => 'check_type',
            'standard' => 'standard',
            'checkRuleName' => 'check_rule_name',
            'checkRuleId' => 'check_rule_id',
            'hostNum' => 'host_num',
            'scanResult' => 'scan_result',
            'status' => 'status',
            'enableFix' => 'enable_fix',
            'enableClick' => 'enable_click',
            'ruleParams' => 'rule_params'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * severity  风险等级，包含如下:   - Low : 低危   - Medium : 中危   - High : 高危
    * checkName  配置检查（基线）的名称，例如SSH、CentOS 7、Windows
    * checkType  配置检查（基线）的类型,Linux系统支持的基线一般check_type和check_name相同,例如SSH、CentOS 7。 Windows系统支持的基线一般check_type和check_name不相同，例如check_name为Windows的配置检查（基线），它的check_type包含Windows Server 2019 R2、Windows Server 2016 R2等。
    * standard  标准类型，包含如下:   - cn_standard : 等保合规标准   - hw_standard : 云安全实践标准
    * checkRuleName  检查项（检查规则）名称
    * checkRuleId  检查项ID
    * hostNum  受影响的服务器的数量，进行了当前基线检测的服务器数量
    * scanResult  检测结果，包含如下：   - pass   - failed
    * status  状态，包含如下：   - safe : 无需处理   - ignored : 已忽略   - unhandled : 未处理   - fixing : 修复中   - fix-failed : 修复失败   - verifying : 验证中
    * enableFix  是否支持一键修复,1:支持一键修复,0:不支持
    * enableClick  该检查项的修复&忽略&验证按钮是否可单击,true:按钮可单击,false:按钮不可单击
    * ruleParams  支持传递参数修复的检查项可传递参数的范围，只有支持传递参数修复的检查项才返回此数据
    *
    * @var string[]
    */
    protected static $setters = [
            'severity' => 'setSeverity',
            'checkName' => 'setCheckName',
            'checkType' => 'setCheckType',
            'standard' => 'setStandard',
            'checkRuleName' => 'setCheckRuleName',
            'checkRuleId' => 'setCheckRuleId',
            'hostNum' => 'setHostNum',
            'scanResult' => 'setScanResult',
            'status' => 'setStatus',
            'enableFix' => 'setEnableFix',
            'enableClick' => 'setEnableClick',
            'ruleParams' => 'setRuleParams'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * severity  风险等级，包含如下:   - Low : 低危   - Medium : 中危   - High : 高危
    * checkName  配置检查（基线）的名称，例如SSH、CentOS 7、Windows
    * checkType  配置检查（基线）的类型,Linux系统支持的基线一般check_type和check_name相同,例如SSH、CentOS 7。 Windows系统支持的基线一般check_type和check_name不相同，例如check_name为Windows的配置检查（基线），它的check_type包含Windows Server 2019 R2、Windows Server 2016 R2等。
    * standard  标准类型，包含如下:   - cn_standard : 等保合规标准   - hw_standard : 云安全实践标准
    * checkRuleName  检查项（检查规则）名称
    * checkRuleId  检查项ID
    * hostNum  受影响的服务器的数量，进行了当前基线检测的服务器数量
    * scanResult  检测结果，包含如下：   - pass   - failed
    * status  状态，包含如下：   - safe : 无需处理   - ignored : 已忽略   - unhandled : 未处理   - fixing : 修复中   - fix-failed : 修复失败   - verifying : 验证中
    * enableFix  是否支持一键修复,1:支持一键修复,0:不支持
    * enableClick  该检查项的修复&忽略&验证按钮是否可单击,true:按钮可单击,false:按钮不可单击
    * ruleParams  支持传递参数修复的检查项可传递参数的范围，只有支持传递参数修复的检查项才返回此数据
    *
    * @var string[]
    */
    protected static $getters = [
            'severity' => 'getSeverity',
            'checkName' => 'getCheckName',
            'checkType' => 'getCheckType',
            'standard' => 'getStandard',
            'checkRuleName' => 'getCheckRuleName',
            'checkRuleId' => 'getCheckRuleId',
            'hostNum' => 'getHostNum',
            'scanResult' => 'getScanResult',
            'status' => 'getStatus',
            'enableFix' => 'getEnableFix',
            'enableClick' => 'getEnableClick',
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
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['checkName'] = isset($data['checkName']) ? $data['checkName'] : null;
        $this->container['checkType'] = isset($data['checkType']) ? $data['checkType'] : null;
        $this->container['standard'] = isset($data['standard']) ? $data['standard'] : null;
        $this->container['checkRuleName'] = isset($data['checkRuleName']) ? $data['checkRuleName'] : null;
        $this->container['checkRuleId'] = isset($data['checkRuleId']) ? $data['checkRuleId'] : null;
        $this->container['hostNum'] = isset($data['hostNum']) ? $data['hostNum'] : null;
        $this->container['scanResult'] = isset($data['scanResult']) ? $data['scanResult'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['enableFix'] = isset($data['enableFix']) ? $data['enableFix'] : null;
        $this->container['enableClick'] = isset($data['enableClick']) ? $data['enableClick'] : null;
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
            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) > 255)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) < 0)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['checkName']) && (mb_strlen($this->container['checkName']) > 256)) {
                $invalidProperties[] = "invalid value for 'checkName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['checkName']) && (mb_strlen($this->container['checkName']) < 0)) {
                $invalidProperties[] = "invalid value for 'checkName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['checkType']) && (mb_strlen($this->container['checkType']) > 256)) {
                $invalidProperties[] = "invalid value for 'checkType', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['checkType']) && (mb_strlen($this->container['checkType']) < 0)) {
                $invalidProperties[] = "invalid value for 'checkType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['standard']) && (mb_strlen($this->container['standard']) > 16)) {
                $invalidProperties[] = "invalid value for 'standard', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['standard']) && (mb_strlen($this->container['standard']) < 0)) {
                $invalidProperties[] = "invalid value for 'standard', the character length must be bigger than or equal to 0.";
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
            if (!is_null($this->container['hostNum']) && ($this->container['hostNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'hostNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['hostNum']) && ($this->container['hostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'hostNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scanResult']) && (mb_strlen($this->container['scanResult']) > 64)) {
                $invalidProperties[] = "invalid value for 'scanResult', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['scanResult']) && (mb_strlen($this->container['scanResult']) < 0)) {
                $invalidProperties[] = "invalid value for 'scanResult', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 64)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
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
    * Gets checkName
    *  配置检查（基线）的名称，例如SSH、CentOS 7、Windows
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
    * @param string|null $checkName 配置检查（基线）的名称，例如SSH、CentOS 7、Windows
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
    *  配置检查（基线）的类型,Linux系统支持的基线一般check_type和check_name相同,例如SSH、CentOS 7。 Windows系统支持的基线一般check_type和check_name不相同，例如check_name为Windows的配置检查（基线），它的check_type包含Windows Server 2019 R2、Windows Server 2016 R2等。
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
    * @param string|null $checkType 配置检查（基线）的类型,Linux系统支持的基线一般check_type和check_name相同,例如SSH、CentOS 7。 Windows系统支持的基线一般check_type和check_name不相同，例如check_name为Windows的配置检查（基线），它的check_type包含Windows Server 2019 R2、Windows Server 2016 R2等。
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
    *  标准类型，包含如下:   - cn_standard : 等保合规标准   - hw_standard : 云安全实践标准
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
    * @param string|null $standard 标准类型，包含如下:   - cn_standard : 等保合规标准   - hw_standard : 云安全实践标准
    *
    * @return $this
    */
    public function setStandard($standard)
    {
        $this->container['standard'] = $standard;
        return $this;
    }

    /**
    * Gets checkRuleName
    *  检查项（检查规则）名称
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
    * @param string|null $checkRuleName 检查项（检查规则）名称
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
    *  检查项ID
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
    * @param string|null $checkRuleId 检查项ID
    *
    * @return $this
    */
    public function setCheckRuleId($checkRuleId)
    {
        $this->container['checkRuleId'] = $checkRuleId;
        return $this;
    }

    /**
    * Gets hostNum
    *  受影响的服务器的数量，进行了当前基线检测的服务器数量
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
    * @param int|null $hostNum 受影响的服务器的数量，进行了当前基线检测的服务器数量
    *
    * @return $this
    */
    public function setHostNum($hostNum)
    {
        $this->container['hostNum'] = $hostNum;
        return $this;
    }

    /**
    * Gets scanResult
    *  检测结果，包含如下：   - pass   - failed
    *
    * @return string|null
    */
    public function getScanResult()
    {
        return $this->container['scanResult'];
    }

    /**
    * Sets scanResult
    *
    * @param string|null $scanResult 检测结果，包含如下：   - pass   - failed
    *
    * @return $this
    */
    public function setScanResult($scanResult)
    {
        $this->container['scanResult'] = $scanResult;
        return $this;
    }

    /**
    * Gets status
    *  状态，包含如下：   - safe : 无需处理   - ignored : 已忽略   - unhandled : 未处理   - fixing : 修复中   - fix-failed : 修复失败   - verifying : 验证中
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 状态，包含如下：   - safe : 无需处理   - ignored : 已忽略   - unhandled : 未处理   - fixing : 修复中   - fix-failed : 修复失败   - verifying : 验证中
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets enableFix
    *  是否支持一键修复,1:支持一键修复,0:不支持
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
    * @param int|null $enableFix 是否支持一键修复,1:支持一键修复,0:不支持
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
    *  该检查项的修复&忽略&验证按钮是否可单击,true:按钮可单击,false:按钮不可单击
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
    * @param bool|null $enableClick 该检查项的修复&忽略&验证按钮是否可单击,true:按钮可单击,false:按钮不可单击
    *
    * @return $this
    */
    public function setEnableClick($enableClick)
    {
        $this->container['enableClick'] = $enableClick;
        return $this;
    }

    /**
    * Gets ruleParams
    *  支持传递参数修复的检查项可传递参数的范围，只有支持传递参数修复的检查项才返回此数据
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
    * @param \HuaweiCloud\SDK\Hss\V5\Model\CheckRuleFixParamInfo[]|null $ruleParams 支持传递参数修复的检查项可传递参数的范围，只有支持传递参数修复的检查项才返回此数据
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

