<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AppWhitelistPolicyResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AppWhitelistPolicyResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * policyId  策略ID
    * policyName  策略名称
    * policyType  **参数解释**： 进程白名单策略类型 **取值范围**: - block：日常运营模式
    * learningStatus  **参数解释**： 学习状态 **约束限制**: 不涉及 **取值范围**: - effecting：学习完成，策略生效 - learned：学习完成，待确认 - learning：学习中 - pause：暂停 - abnormal：学习异常  **默认取值**: 不涉及
    * learningDays  **参数解释**: 策略学习天数 **取值范围**: 最小值3，最大值30
    * specifiedDir  **参数解释**： 是否指定学习目录 **约束限制**： 不涉及 **取值范围**: - true：是 - false：否 **默认取值**： 不涉及
    * dirList  监控目录列表
    * fileExtensionList  监控文件后缀名列表
    * intercept  **参数解释**： 是否开启阻断 **取值范围**: - true：是 - false：否
    * autoDetect  **参数解释**： 是否自动开启检测 **取值范围**: - true：是 - false：否
    * notEffectHostNum  **参数解释**: 学习完成策略未生效主机数 **取值范围**: 最小值0，最大值2147483647
    * effectHostNum  **参数解释**: 学习完成策略已生效主机数 **取值范围**: 最小值0，最大值2147483647
    * trustNum  **参数解释**: 识别可信进程数 **取值范围**: 最小值0，最大值2147483647
    * suspiciousNum  **参数解释**: 识别可疑进程数 **取值范围**: 最小值0，最大值2147483647
    * maliciousNum  **参数解释**: 识别恶意进程数 **取值范围**: 最小值0，最大值2147483647
    * unknownNum  **参数解释**: 识别未知进程数 **取值范围**: 最小值0，最大值2147483647
    * abnormalInfoList  学习异常原因列表
    * autoConfirm  **参数解释**： 是否自动确认学习结果 **取值范围**: - true：是 - false：否
    * defaultPolicy  **参数解释**： 默认进程白名单策略 **取值范围**: - true：是 - false：否
    * hostIdList  主机id集合
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'policyId' => 'string',
            'policyName' => 'string',
            'policyType' => 'string',
            'learningStatus' => 'string',
            'learningDays' => 'int',
            'specifiedDir' => 'bool',
            'dirList' => 'string[]',
            'fileExtensionList' => 'string[]',
            'intercept' => 'bool',
            'autoDetect' => 'bool',
            'notEffectHostNum' => 'int',
            'effectHostNum' => 'int',
            'trustNum' => 'int',
            'suspiciousNum' => 'int',
            'maliciousNum' => 'int',
            'unknownNum' => 'int',
            'abnormalInfoList' => '\HuaweiCloud\SDK\Hss\V5\Model\AppWhitelistAbnormalInfo[]',
            'autoConfirm' => 'bool',
            'defaultPolicy' => 'bool',
            'hostIdList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * policyId  策略ID
    * policyName  策略名称
    * policyType  **参数解释**： 进程白名单策略类型 **取值范围**: - block：日常运营模式
    * learningStatus  **参数解释**： 学习状态 **约束限制**: 不涉及 **取值范围**: - effecting：学习完成，策略生效 - learned：学习完成，待确认 - learning：学习中 - pause：暂停 - abnormal：学习异常  **默认取值**: 不涉及
    * learningDays  **参数解释**: 策略学习天数 **取值范围**: 最小值3，最大值30
    * specifiedDir  **参数解释**： 是否指定学习目录 **约束限制**： 不涉及 **取值范围**: - true：是 - false：否 **默认取值**： 不涉及
    * dirList  监控目录列表
    * fileExtensionList  监控文件后缀名列表
    * intercept  **参数解释**： 是否开启阻断 **取值范围**: - true：是 - false：否
    * autoDetect  **参数解释**： 是否自动开启检测 **取值范围**: - true：是 - false：否
    * notEffectHostNum  **参数解释**: 学习完成策略未生效主机数 **取值范围**: 最小值0，最大值2147483647
    * effectHostNum  **参数解释**: 学习完成策略已生效主机数 **取值范围**: 最小值0，最大值2147483647
    * trustNum  **参数解释**: 识别可信进程数 **取值范围**: 最小值0，最大值2147483647
    * suspiciousNum  **参数解释**: 识别可疑进程数 **取值范围**: 最小值0，最大值2147483647
    * maliciousNum  **参数解释**: 识别恶意进程数 **取值范围**: 最小值0，最大值2147483647
    * unknownNum  **参数解释**: 识别未知进程数 **取值范围**: 最小值0，最大值2147483647
    * abnormalInfoList  学习异常原因列表
    * autoConfirm  **参数解释**： 是否自动确认学习结果 **取值范围**: - true：是 - false：否
    * defaultPolicy  **参数解释**： 默认进程白名单策略 **取值范围**: - true：是 - false：否
    * hostIdList  主机id集合
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'policyId' => null,
        'policyName' => null,
        'policyType' => null,
        'learningStatus' => null,
        'learningDays' => 'int32',
        'specifiedDir' => null,
        'dirList' => null,
        'fileExtensionList' => null,
        'intercept' => null,
        'autoDetect' => null,
        'notEffectHostNum' => 'int32',
        'effectHostNum' => 'int32',
        'trustNum' => 'int32',
        'suspiciousNum' => 'int32',
        'maliciousNum' => 'int32',
        'unknownNum' => 'int32',
        'abnormalInfoList' => null,
        'autoConfirm' => null,
        'defaultPolicy' => null,
        'hostIdList' => null
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
    * policyId  策略ID
    * policyName  策略名称
    * policyType  **参数解释**： 进程白名单策略类型 **取值范围**: - block：日常运营模式
    * learningStatus  **参数解释**： 学习状态 **约束限制**: 不涉及 **取值范围**: - effecting：学习完成，策略生效 - learned：学习完成，待确认 - learning：学习中 - pause：暂停 - abnormal：学习异常  **默认取值**: 不涉及
    * learningDays  **参数解释**: 策略学习天数 **取值范围**: 最小值3，最大值30
    * specifiedDir  **参数解释**： 是否指定学习目录 **约束限制**： 不涉及 **取值范围**: - true：是 - false：否 **默认取值**： 不涉及
    * dirList  监控目录列表
    * fileExtensionList  监控文件后缀名列表
    * intercept  **参数解释**： 是否开启阻断 **取值范围**: - true：是 - false：否
    * autoDetect  **参数解释**： 是否自动开启检测 **取值范围**: - true：是 - false：否
    * notEffectHostNum  **参数解释**: 学习完成策略未生效主机数 **取值范围**: 最小值0，最大值2147483647
    * effectHostNum  **参数解释**: 学习完成策略已生效主机数 **取值范围**: 最小值0，最大值2147483647
    * trustNum  **参数解释**: 识别可信进程数 **取值范围**: 最小值0，最大值2147483647
    * suspiciousNum  **参数解释**: 识别可疑进程数 **取值范围**: 最小值0，最大值2147483647
    * maliciousNum  **参数解释**: 识别恶意进程数 **取值范围**: 最小值0，最大值2147483647
    * unknownNum  **参数解释**: 识别未知进程数 **取值范围**: 最小值0，最大值2147483647
    * abnormalInfoList  学习异常原因列表
    * autoConfirm  **参数解释**： 是否自动确认学习结果 **取值范围**: - true：是 - false：否
    * defaultPolicy  **参数解释**： 默认进程白名单策略 **取值范围**: - true：是 - false：否
    * hostIdList  主机id集合
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'policyId' => 'policy_id',
            'policyName' => 'policy_name',
            'policyType' => 'policy_type',
            'learningStatus' => 'learning_status',
            'learningDays' => 'learning_days',
            'specifiedDir' => 'specified_dir',
            'dirList' => 'dir_list',
            'fileExtensionList' => 'file_extension_list',
            'intercept' => 'intercept',
            'autoDetect' => 'auto_detect',
            'notEffectHostNum' => 'not_effect_host_num',
            'effectHostNum' => 'effect_host_num',
            'trustNum' => 'trust_num',
            'suspiciousNum' => 'suspicious_num',
            'maliciousNum' => 'malicious_num',
            'unknownNum' => 'unknown_num',
            'abnormalInfoList' => 'abnormal_info_list',
            'autoConfirm' => 'auto_confirm',
            'defaultPolicy' => 'default_policy',
            'hostIdList' => 'host_id_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * policyId  策略ID
    * policyName  策略名称
    * policyType  **参数解释**： 进程白名单策略类型 **取值范围**: - block：日常运营模式
    * learningStatus  **参数解释**： 学习状态 **约束限制**: 不涉及 **取值范围**: - effecting：学习完成，策略生效 - learned：学习完成，待确认 - learning：学习中 - pause：暂停 - abnormal：学习异常  **默认取值**: 不涉及
    * learningDays  **参数解释**: 策略学习天数 **取值范围**: 最小值3，最大值30
    * specifiedDir  **参数解释**： 是否指定学习目录 **约束限制**： 不涉及 **取值范围**: - true：是 - false：否 **默认取值**： 不涉及
    * dirList  监控目录列表
    * fileExtensionList  监控文件后缀名列表
    * intercept  **参数解释**： 是否开启阻断 **取值范围**: - true：是 - false：否
    * autoDetect  **参数解释**： 是否自动开启检测 **取值范围**: - true：是 - false：否
    * notEffectHostNum  **参数解释**: 学习完成策略未生效主机数 **取值范围**: 最小值0，最大值2147483647
    * effectHostNum  **参数解释**: 学习完成策略已生效主机数 **取值范围**: 最小值0，最大值2147483647
    * trustNum  **参数解释**: 识别可信进程数 **取值范围**: 最小值0，最大值2147483647
    * suspiciousNum  **参数解释**: 识别可疑进程数 **取值范围**: 最小值0，最大值2147483647
    * maliciousNum  **参数解释**: 识别恶意进程数 **取值范围**: 最小值0，最大值2147483647
    * unknownNum  **参数解释**: 识别未知进程数 **取值范围**: 最小值0，最大值2147483647
    * abnormalInfoList  学习异常原因列表
    * autoConfirm  **参数解释**： 是否自动确认学习结果 **取值范围**: - true：是 - false：否
    * defaultPolicy  **参数解释**： 默认进程白名单策略 **取值范围**: - true：是 - false：否
    * hostIdList  主机id集合
    *
    * @var string[]
    */
    protected static $setters = [
            'policyId' => 'setPolicyId',
            'policyName' => 'setPolicyName',
            'policyType' => 'setPolicyType',
            'learningStatus' => 'setLearningStatus',
            'learningDays' => 'setLearningDays',
            'specifiedDir' => 'setSpecifiedDir',
            'dirList' => 'setDirList',
            'fileExtensionList' => 'setFileExtensionList',
            'intercept' => 'setIntercept',
            'autoDetect' => 'setAutoDetect',
            'notEffectHostNum' => 'setNotEffectHostNum',
            'effectHostNum' => 'setEffectHostNum',
            'trustNum' => 'setTrustNum',
            'suspiciousNum' => 'setSuspiciousNum',
            'maliciousNum' => 'setMaliciousNum',
            'unknownNum' => 'setUnknownNum',
            'abnormalInfoList' => 'setAbnormalInfoList',
            'autoConfirm' => 'setAutoConfirm',
            'defaultPolicy' => 'setDefaultPolicy',
            'hostIdList' => 'setHostIdList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * policyId  策略ID
    * policyName  策略名称
    * policyType  **参数解释**： 进程白名单策略类型 **取值范围**: - block：日常运营模式
    * learningStatus  **参数解释**： 学习状态 **约束限制**: 不涉及 **取值范围**: - effecting：学习完成，策略生效 - learned：学习完成，待确认 - learning：学习中 - pause：暂停 - abnormal：学习异常  **默认取值**: 不涉及
    * learningDays  **参数解释**: 策略学习天数 **取值范围**: 最小值3，最大值30
    * specifiedDir  **参数解释**： 是否指定学习目录 **约束限制**： 不涉及 **取值范围**: - true：是 - false：否 **默认取值**： 不涉及
    * dirList  监控目录列表
    * fileExtensionList  监控文件后缀名列表
    * intercept  **参数解释**： 是否开启阻断 **取值范围**: - true：是 - false：否
    * autoDetect  **参数解释**： 是否自动开启检测 **取值范围**: - true：是 - false：否
    * notEffectHostNum  **参数解释**: 学习完成策略未生效主机数 **取值范围**: 最小值0，最大值2147483647
    * effectHostNum  **参数解释**: 学习完成策略已生效主机数 **取值范围**: 最小值0，最大值2147483647
    * trustNum  **参数解释**: 识别可信进程数 **取值范围**: 最小值0，最大值2147483647
    * suspiciousNum  **参数解释**: 识别可疑进程数 **取值范围**: 最小值0，最大值2147483647
    * maliciousNum  **参数解释**: 识别恶意进程数 **取值范围**: 最小值0，最大值2147483647
    * unknownNum  **参数解释**: 识别未知进程数 **取值范围**: 最小值0，最大值2147483647
    * abnormalInfoList  学习异常原因列表
    * autoConfirm  **参数解释**： 是否自动确认学习结果 **取值范围**: - true：是 - false：否
    * defaultPolicy  **参数解释**： 默认进程白名单策略 **取值范围**: - true：是 - false：否
    * hostIdList  主机id集合
    *
    * @var string[]
    */
    protected static $getters = [
            'policyId' => 'getPolicyId',
            'policyName' => 'getPolicyName',
            'policyType' => 'getPolicyType',
            'learningStatus' => 'getLearningStatus',
            'learningDays' => 'getLearningDays',
            'specifiedDir' => 'getSpecifiedDir',
            'dirList' => 'getDirList',
            'fileExtensionList' => 'getFileExtensionList',
            'intercept' => 'getIntercept',
            'autoDetect' => 'getAutoDetect',
            'notEffectHostNum' => 'getNotEffectHostNum',
            'effectHostNum' => 'getEffectHostNum',
            'trustNum' => 'getTrustNum',
            'suspiciousNum' => 'getSuspiciousNum',
            'maliciousNum' => 'getMaliciousNum',
            'unknownNum' => 'getUnknownNum',
            'abnormalInfoList' => 'getAbnormalInfoList',
            'autoConfirm' => 'getAutoConfirm',
            'defaultPolicy' => 'getDefaultPolicy',
            'hostIdList' => 'getHostIdList'
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
        $this->container['policyId'] = isset($data['policyId']) ? $data['policyId'] : null;
        $this->container['policyName'] = isset($data['policyName']) ? $data['policyName'] : null;
        $this->container['policyType'] = isset($data['policyType']) ? $data['policyType'] : null;
        $this->container['learningStatus'] = isset($data['learningStatus']) ? $data['learningStatus'] : null;
        $this->container['learningDays'] = isset($data['learningDays']) ? $data['learningDays'] : null;
        $this->container['specifiedDir'] = isset($data['specifiedDir']) ? $data['specifiedDir'] : null;
        $this->container['dirList'] = isset($data['dirList']) ? $data['dirList'] : null;
        $this->container['fileExtensionList'] = isset($data['fileExtensionList']) ? $data['fileExtensionList'] : null;
        $this->container['intercept'] = isset($data['intercept']) ? $data['intercept'] : null;
        $this->container['autoDetect'] = isset($data['autoDetect']) ? $data['autoDetect'] : null;
        $this->container['notEffectHostNum'] = isset($data['notEffectHostNum']) ? $data['notEffectHostNum'] : null;
        $this->container['effectHostNum'] = isset($data['effectHostNum']) ? $data['effectHostNum'] : null;
        $this->container['trustNum'] = isset($data['trustNum']) ? $data['trustNum'] : null;
        $this->container['suspiciousNum'] = isset($data['suspiciousNum']) ? $data['suspiciousNum'] : null;
        $this->container['maliciousNum'] = isset($data['maliciousNum']) ? $data['maliciousNum'] : null;
        $this->container['unknownNum'] = isset($data['unknownNum']) ? $data['unknownNum'] : null;
        $this->container['abnormalInfoList'] = isset($data['abnormalInfoList']) ? $data['abnormalInfoList'] : null;
        $this->container['autoConfirm'] = isset($data['autoConfirm']) ? $data['autoConfirm'] : null;
        $this->container['defaultPolicy'] = isset($data['defaultPolicy']) ? $data['defaultPolicy'] : null;
        $this->container['hostIdList'] = isset($data['hostIdList']) ? $data['hostIdList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['policyId']) && (mb_strlen($this->container['policyId']) > 64)) {
                $invalidProperties[] = "invalid value for 'policyId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['policyId']) && (mb_strlen($this->container['policyId']) < 1)) {
                $invalidProperties[] = "invalid value for 'policyId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['policyId']) && !preg_match("/^.*$/", $this->container['policyId'])) {
                $invalidProperties[] = "invalid value for 'policyId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['policyName']) && (mb_strlen($this->container['policyName']) > 64)) {
                $invalidProperties[] = "invalid value for 'policyName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['policyName']) && (mb_strlen($this->container['policyName']) < 1)) {
                $invalidProperties[] = "invalid value for 'policyName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['policyName']) && !preg_match("/^.*$/", $this->container['policyName'])) {
                $invalidProperties[] = "invalid value for 'policyName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['policyType']) && (mb_strlen($this->container['policyType']) > 10)) {
                $invalidProperties[] = "invalid value for 'policyType', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['policyType']) && (mb_strlen($this->container['policyType']) < 1)) {
                $invalidProperties[] = "invalid value for 'policyType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['learningStatus']) && (mb_strlen($this->container['learningStatus']) > 64)) {
                $invalidProperties[] = "invalid value for 'learningStatus', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['learningStatus']) && (mb_strlen($this->container['learningStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'learningStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['learningDays']) && ($this->container['learningDays'] > 1000)) {
                $invalidProperties[] = "invalid value for 'learningDays', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['learningDays']) && ($this->container['learningDays'] < 1)) {
                $invalidProperties[] = "invalid value for 'learningDays', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['notEffectHostNum']) && ($this->container['notEffectHostNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'notEffectHostNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['notEffectHostNum']) && ($this->container['notEffectHostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'notEffectHostNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['effectHostNum']) && ($this->container['effectHostNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'effectHostNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['effectHostNum']) && ($this->container['effectHostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'effectHostNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['trustNum']) && ($this->container['trustNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'trustNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['trustNum']) && ($this->container['trustNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'trustNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['suspiciousNum']) && ($this->container['suspiciousNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'suspiciousNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['suspiciousNum']) && ($this->container['suspiciousNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'suspiciousNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['maliciousNum']) && ($this->container['maliciousNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'maliciousNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['maliciousNum']) && ($this->container['maliciousNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'maliciousNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['unknownNum']) && ($this->container['unknownNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'unknownNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['unknownNum']) && ($this->container['unknownNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'unknownNum', must be bigger than or equal to 0.";
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
    * Gets policyId
    *  策略ID
    *
    * @return string|null
    */
    public function getPolicyId()
    {
        return $this->container['policyId'];
    }

    /**
    * Sets policyId
    *
    * @param string|null $policyId 策略ID
    *
    * @return $this
    */
    public function setPolicyId($policyId)
    {
        $this->container['policyId'] = $policyId;
        return $this;
    }

    /**
    * Gets policyName
    *  策略名称
    *
    * @return string|null
    */
    public function getPolicyName()
    {
        return $this->container['policyName'];
    }

    /**
    * Sets policyName
    *
    * @param string|null $policyName 策略名称
    *
    * @return $this
    */
    public function setPolicyName($policyName)
    {
        $this->container['policyName'] = $policyName;
        return $this;
    }

    /**
    * Gets policyType
    *  **参数解释**： 进程白名单策略类型 **取值范围**: - block：日常运营模式
    *
    * @return string|null
    */
    public function getPolicyType()
    {
        return $this->container['policyType'];
    }

    /**
    * Sets policyType
    *
    * @param string|null $policyType **参数解释**： 进程白名单策略类型 **取值范围**: - block：日常运营模式
    *
    * @return $this
    */
    public function setPolicyType($policyType)
    {
        $this->container['policyType'] = $policyType;
        return $this;
    }

    /**
    * Gets learningStatus
    *  **参数解释**： 学习状态 **约束限制**: 不涉及 **取值范围**: - effecting：学习完成，策略生效 - learned：学习完成，待确认 - learning：学习中 - pause：暂停 - abnormal：学习异常  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getLearningStatus()
    {
        return $this->container['learningStatus'];
    }

    /**
    * Sets learningStatus
    *
    * @param string|null $learningStatus **参数解释**： 学习状态 **约束限制**: 不涉及 **取值范围**: - effecting：学习完成，策略生效 - learned：学习完成，待确认 - learning：学习中 - pause：暂停 - abnormal：学习异常  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setLearningStatus($learningStatus)
    {
        $this->container['learningStatus'] = $learningStatus;
        return $this;
    }

    /**
    * Gets learningDays
    *  **参数解释**: 策略学习天数 **取值范围**: 最小值3，最大值30
    *
    * @return int|null
    */
    public function getLearningDays()
    {
        return $this->container['learningDays'];
    }

    /**
    * Sets learningDays
    *
    * @param int|null $learningDays **参数解释**: 策略学习天数 **取值范围**: 最小值3，最大值30
    *
    * @return $this
    */
    public function setLearningDays($learningDays)
    {
        $this->container['learningDays'] = $learningDays;
        return $this;
    }

    /**
    * Gets specifiedDir
    *  **参数解释**： 是否指定学习目录 **约束限制**： 不涉及 **取值范围**: - true：是 - false：否 **默认取值**： 不涉及
    *
    * @return bool|null
    */
    public function getSpecifiedDir()
    {
        return $this->container['specifiedDir'];
    }

    /**
    * Sets specifiedDir
    *
    * @param bool|null $specifiedDir **参数解释**： 是否指定学习目录 **约束限制**： 不涉及 **取值范围**: - true：是 - false：否 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setSpecifiedDir($specifiedDir)
    {
        $this->container['specifiedDir'] = $specifiedDir;
        return $this;
    }

    /**
    * Gets dirList
    *  监控目录列表
    *
    * @return string[]|null
    */
    public function getDirList()
    {
        return $this->container['dirList'];
    }

    /**
    * Sets dirList
    *
    * @param string[]|null $dirList 监控目录列表
    *
    * @return $this
    */
    public function setDirList($dirList)
    {
        $this->container['dirList'] = $dirList;
        return $this;
    }

    /**
    * Gets fileExtensionList
    *  监控文件后缀名列表
    *
    * @return string[]|null
    */
    public function getFileExtensionList()
    {
        return $this->container['fileExtensionList'];
    }

    /**
    * Sets fileExtensionList
    *
    * @param string[]|null $fileExtensionList 监控文件后缀名列表
    *
    * @return $this
    */
    public function setFileExtensionList($fileExtensionList)
    {
        $this->container['fileExtensionList'] = $fileExtensionList;
        return $this;
    }

    /**
    * Gets intercept
    *  **参数解释**： 是否开启阻断 **取值范围**: - true：是 - false：否
    *
    * @return bool|null
    */
    public function getIntercept()
    {
        return $this->container['intercept'];
    }

    /**
    * Sets intercept
    *
    * @param bool|null $intercept **参数解释**： 是否开启阻断 **取值范围**: - true：是 - false：否
    *
    * @return $this
    */
    public function setIntercept($intercept)
    {
        $this->container['intercept'] = $intercept;
        return $this;
    }

    /**
    * Gets autoDetect
    *  **参数解释**： 是否自动开启检测 **取值范围**: - true：是 - false：否
    *
    * @return bool|null
    */
    public function getAutoDetect()
    {
        return $this->container['autoDetect'];
    }

    /**
    * Sets autoDetect
    *
    * @param bool|null $autoDetect **参数解释**： 是否自动开启检测 **取值范围**: - true：是 - false：否
    *
    * @return $this
    */
    public function setAutoDetect($autoDetect)
    {
        $this->container['autoDetect'] = $autoDetect;
        return $this;
    }

    /**
    * Gets notEffectHostNum
    *  **参数解释**: 学习完成策略未生效主机数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getNotEffectHostNum()
    {
        return $this->container['notEffectHostNum'];
    }

    /**
    * Sets notEffectHostNum
    *
    * @param int|null $notEffectHostNum **参数解释**: 学习完成策略未生效主机数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setNotEffectHostNum($notEffectHostNum)
    {
        $this->container['notEffectHostNum'] = $notEffectHostNum;
        return $this;
    }

    /**
    * Gets effectHostNum
    *  **参数解释**: 学习完成策略已生效主机数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getEffectHostNum()
    {
        return $this->container['effectHostNum'];
    }

    /**
    * Sets effectHostNum
    *
    * @param int|null $effectHostNum **参数解释**: 学习完成策略已生效主机数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setEffectHostNum($effectHostNum)
    {
        $this->container['effectHostNum'] = $effectHostNum;
        return $this;
    }

    /**
    * Gets trustNum
    *  **参数解释**: 识别可信进程数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getTrustNum()
    {
        return $this->container['trustNum'];
    }

    /**
    * Sets trustNum
    *
    * @param int|null $trustNum **参数解释**: 识别可信进程数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setTrustNum($trustNum)
    {
        $this->container['trustNum'] = $trustNum;
        return $this;
    }

    /**
    * Gets suspiciousNum
    *  **参数解释**: 识别可疑进程数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getSuspiciousNum()
    {
        return $this->container['suspiciousNum'];
    }

    /**
    * Sets suspiciousNum
    *
    * @param int|null $suspiciousNum **参数解释**: 识别可疑进程数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setSuspiciousNum($suspiciousNum)
    {
        $this->container['suspiciousNum'] = $suspiciousNum;
        return $this;
    }

    /**
    * Gets maliciousNum
    *  **参数解释**: 识别恶意进程数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getMaliciousNum()
    {
        return $this->container['maliciousNum'];
    }

    /**
    * Sets maliciousNum
    *
    * @param int|null $maliciousNum **参数解释**: 识别恶意进程数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setMaliciousNum($maliciousNum)
    {
        $this->container['maliciousNum'] = $maliciousNum;
        return $this;
    }

    /**
    * Gets unknownNum
    *  **参数解释**: 识别未知进程数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getUnknownNum()
    {
        return $this->container['unknownNum'];
    }

    /**
    * Sets unknownNum
    *
    * @param int|null $unknownNum **参数解释**: 识别未知进程数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setUnknownNum($unknownNum)
    {
        $this->container['unknownNum'] = $unknownNum;
        return $this;
    }

    /**
    * Gets abnormalInfoList
    *  学习异常原因列表
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\AppWhitelistAbnormalInfo[]|null
    */
    public function getAbnormalInfoList()
    {
        return $this->container['abnormalInfoList'];
    }

    /**
    * Sets abnormalInfoList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\AppWhitelistAbnormalInfo[]|null $abnormalInfoList 学习异常原因列表
    *
    * @return $this
    */
    public function setAbnormalInfoList($abnormalInfoList)
    {
        $this->container['abnormalInfoList'] = $abnormalInfoList;
        return $this;
    }

    /**
    * Gets autoConfirm
    *  **参数解释**： 是否自动确认学习结果 **取值范围**: - true：是 - false：否
    *
    * @return bool|null
    */
    public function getAutoConfirm()
    {
        return $this->container['autoConfirm'];
    }

    /**
    * Sets autoConfirm
    *
    * @param bool|null $autoConfirm **参数解释**： 是否自动确认学习结果 **取值范围**: - true：是 - false：否
    *
    * @return $this
    */
    public function setAutoConfirm($autoConfirm)
    {
        $this->container['autoConfirm'] = $autoConfirm;
        return $this;
    }

    /**
    * Gets defaultPolicy
    *  **参数解释**： 默认进程白名单策略 **取值范围**: - true：是 - false：否
    *
    * @return bool|null
    */
    public function getDefaultPolicy()
    {
        return $this->container['defaultPolicy'];
    }

    /**
    * Sets defaultPolicy
    *
    * @param bool|null $defaultPolicy **参数解释**： 默认进程白名单策略 **取值范围**: - true：是 - false：否
    *
    * @return $this
    */
    public function setDefaultPolicy($defaultPolicy)
    {
        $this->container['defaultPolicy'] = $defaultPolicy;
        return $this;
    }

    /**
    * Gets hostIdList
    *  主机id集合
    *
    * @return string[]|null
    */
    public function getHostIdList()
    {
        return $this->container['hostIdList'];
    }

    /**
    * Sets hostIdList
    *
    * @param string[]|null $hostIdList 主机id集合
    *
    * @return $this
    */
    public function setHostIdList($hostIdList)
    {
        $this->container['hostIdList'] = $hostIdList;
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

