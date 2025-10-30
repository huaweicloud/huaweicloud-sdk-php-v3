<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SecurityCheckRuleHostResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SecurityCheckRuleHostResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostId  **参数解释**： 主机ID **取值范围**： 字符长度1-64位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * checkName  **参数解释** 配置检查（基线）的名称，例如SSH、CentOS 7、Windows **取值范围** 字符长度0-256位
    * baselineName  **参数解释** 基线的名称，例如SSH 应用基线检查、CentOS 7 系统基线检查、Windows 系统基线检查 **取值范围** 字符长度0-256位
    * hostPublicIp  **参数解释**: 服务器公网IP **取值范围**: 字符长度0-128位
    * hostPrivateIp  **参数解释** 服务器私有IP **取值范围** 字符长度0-256位
    * scanTime  **参数解释** 扫描时间(ms) **取值范围** 取值0-9223372036854775807
    * failedNum  **参数解释** 风险项数量 **取值范围** 取值0-2147483647
    * passedNum  **参数解释** 通过项数量 **取值范围** 取值0-2147483647
    * diffDescription  **参数解释** 差异化展示提示信息 **取值范围** 字符长度0-512位
    * description  **参数解释** 忽略或加白的备注 **取值范围** 字符长度0-1024位
    * hostType  **参数解释** 主机类型 **取值范围** - cce
    * enableFix  **参数解释** 是否支持一键修复 **取值范围** - 1 : 支持一键修复 - 0 : 不支持
    * enableClick  **参数解释** 该检查项的修复&忽略&验证按钮是否可单击 **取值范围** - true  : 按钮可单击 - false : 按钮不可单击
    * cancelIgnoreEnableClick  **参数解释** 已忽略检查项是否可点击 **取值范围** - true  : 按钮可单击 - false : 按钮不可单击
    * resultType  **参数解释** 检测结果类型 **取值范围** - safe             : 已通过 - unhandled        : 未处理 - ignored          : 已忽略 - fixing           : 修复中 - fix-failed       : 修复失败 - verifying        : 验证中 - add_to_whitelist : 已加白(表示检测失败，但已进行加白)
    * fixFailedReason  **参数解释** 修复失败原因 **取值范围** 字符长度0-256位
    * clusterId  **参数解释** 集群ID **取值范围** 字符长度0-64位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostId' => 'string',
            'hostName' => 'string',
            'checkName' => 'string',
            'baselineName' => 'string',
            'hostPublicIp' => 'string',
            'hostPrivateIp' => 'string',
            'scanTime' => 'int',
            'failedNum' => 'int',
            'passedNum' => 'int',
            'diffDescription' => 'string',
            'description' => 'string',
            'hostType' => 'string',
            'enableFix' => 'int',
            'enableClick' => 'bool',
            'cancelIgnoreEnableClick' => 'bool',
            'resultType' => 'string',
            'fixFailedReason' => 'string',
            'clusterId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostId  **参数解释**： 主机ID **取值范围**： 字符长度1-64位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * checkName  **参数解释** 配置检查（基线）的名称，例如SSH、CentOS 7、Windows **取值范围** 字符长度0-256位
    * baselineName  **参数解释** 基线的名称，例如SSH 应用基线检查、CentOS 7 系统基线检查、Windows 系统基线检查 **取值范围** 字符长度0-256位
    * hostPublicIp  **参数解释**: 服务器公网IP **取值范围**: 字符长度0-128位
    * hostPrivateIp  **参数解释** 服务器私有IP **取值范围** 字符长度0-256位
    * scanTime  **参数解释** 扫描时间(ms) **取值范围** 取值0-9223372036854775807
    * failedNum  **参数解释** 风险项数量 **取值范围** 取值0-2147483647
    * passedNum  **参数解释** 通过项数量 **取值范围** 取值0-2147483647
    * diffDescription  **参数解释** 差异化展示提示信息 **取值范围** 字符长度0-512位
    * description  **参数解释** 忽略或加白的备注 **取值范围** 字符长度0-1024位
    * hostType  **参数解释** 主机类型 **取值范围** - cce
    * enableFix  **参数解释** 是否支持一键修复 **取值范围** - 1 : 支持一键修复 - 0 : 不支持
    * enableClick  **参数解释** 该检查项的修复&忽略&验证按钮是否可单击 **取值范围** - true  : 按钮可单击 - false : 按钮不可单击
    * cancelIgnoreEnableClick  **参数解释** 已忽略检查项是否可点击 **取值范围** - true  : 按钮可单击 - false : 按钮不可单击
    * resultType  **参数解释** 检测结果类型 **取值范围** - safe             : 已通过 - unhandled        : 未处理 - ignored          : 已忽略 - fixing           : 修复中 - fix-failed       : 修复失败 - verifying        : 验证中 - add_to_whitelist : 已加白(表示检测失败，但已进行加白)
    * fixFailedReason  **参数解释** 修复失败原因 **取值范围** 字符长度0-256位
    * clusterId  **参数解释** 集群ID **取值范围** 字符长度0-64位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostId' => null,
        'hostName' => null,
        'checkName' => null,
        'baselineName' => null,
        'hostPublicIp' => null,
        'hostPrivateIp' => null,
        'scanTime' => 'int64',
        'failedNum' => 'int32',
        'passedNum' => 'int32',
        'diffDescription' => null,
        'description' => null,
        'hostType' => null,
        'enableFix' => 'int32',
        'enableClick' => null,
        'cancelIgnoreEnableClick' => null,
        'resultType' => null,
        'fixFailedReason' => null,
        'clusterId' => null
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
    * hostId  **参数解释**： 主机ID **取值范围**： 字符长度1-64位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * checkName  **参数解释** 配置检查（基线）的名称，例如SSH、CentOS 7、Windows **取值范围** 字符长度0-256位
    * baselineName  **参数解释** 基线的名称，例如SSH 应用基线检查、CentOS 7 系统基线检查、Windows 系统基线检查 **取值范围** 字符长度0-256位
    * hostPublicIp  **参数解释**: 服务器公网IP **取值范围**: 字符长度0-128位
    * hostPrivateIp  **参数解释** 服务器私有IP **取值范围** 字符长度0-256位
    * scanTime  **参数解释** 扫描时间(ms) **取值范围** 取值0-9223372036854775807
    * failedNum  **参数解释** 风险项数量 **取值范围** 取值0-2147483647
    * passedNum  **参数解释** 通过项数量 **取值范围** 取值0-2147483647
    * diffDescription  **参数解释** 差异化展示提示信息 **取值范围** 字符长度0-512位
    * description  **参数解释** 忽略或加白的备注 **取值范围** 字符长度0-1024位
    * hostType  **参数解释** 主机类型 **取值范围** - cce
    * enableFix  **参数解释** 是否支持一键修复 **取值范围** - 1 : 支持一键修复 - 0 : 不支持
    * enableClick  **参数解释** 该检查项的修复&忽略&验证按钮是否可单击 **取值范围** - true  : 按钮可单击 - false : 按钮不可单击
    * cancelIgnoreEnableClick  **参数解释** 已忽略检查项是否可点击 **取值范围** - true  : 按钮可单击 - false : 按钮不可单击
    * resultType  **参数解释** 检测结果类型 **取值范围** - safe             : 已通过 - unhandled        : 未处理 - ignored          : 已忽略 - fixing           : 修复中 - fix-failed       : 修复失败 - verifying        : 验证中 - add_to_whitelist : 已加白(表示检测失败，但已进行加白)
    * fixFailedReason  **参数解释** 修复失败原因 **取值范围** 字符长度0-256位
    * clusterId  **参数解释** 集群ID **取值范围** 字符长度0-64位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostId' => 'host_id',
            'hostName' => 'host_name',
            'checkName' => 'check_name',
            'baselineName' => 'baseline_name',
            'hostPublicIp' => 'host_public_ip',
            'hostPrivateIp' => 'host_private_ip',
            'scanTime' => 'scan_time',
            'failedNum' => 'failed_num',
            'passedNum' => 'passed_num',
            'diffDescription' => 'diff_description',
            'description' => 'description',
            'hostType' => 'host_type',
            'enableFix' => 'enable_fix',
            'enableClick' => 'enable_click',
            'cancelIgnoreEnableClick' => 'cancel_ignore_enable_click',
            'resultType' => 'result_type',
            'fixFailedReason' => 'fix_failed_reason',
            'clusterId' => 'cluster_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostId  **参数解释**： 主机ID **取值范围**： 字符长度1-64位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * checkName  **参数解释** 配置检查（基线）的名称，例如SSH、CentOS 7、Windows **取值范围** 字符长度0-256位
    * baselineName  **参数解释** 基线的名称，例如SSH 应用基线检查、CentOS 7 系统基线检查、Windows 系统基线检查 **取值范围** 字符长度0-256位
    * hostPublicIp  **参数解释**: 服务器公网IP **取值范围**: 字符长度0-128位
    * hostPrivateIp  **参数解释** 服务器私有IP **取值范围** 字符长度0-256位
    * scanTime  **参数解释** 扫描时间(ms) **取值范围** 取值0-9223372036854775807
    * failedNum  **参数解释** 风险项数量 **取值范围** 取值0-2147483647
    * passedNum  **参数解释** 通过项数量 **取值范围** 取值0-2147483647
    * diffDescription  **参数解释** 差异化展示提示信息 **取值范围** 字符长度0-512位
    * description  **参数解释** 忽略或加白的备注 **取值范围** 字符长度0-1024位
    * hostType  **参数解释** 主机类型 **取值范围** - cce
    * enableFix  **参数解释** 是否支持一键修复 **取值范围** - 1 : 支持一键修复 - 0 : 不支持
    * enableClick  **参数解释** 该检查项的修复&忽略&验证按钮是否可单击 **取值范围** - true  : 按钮可单击 - false : 按钮不可单击
    * cancelIgnoreEnableClick  **参数解释** 已忽略检查项是否可点击 **取值范围** - true  : 按钮可单击 - false : 按钮不可单击
    * resultType  **参数解释** 检测结果类型 **取值范围** - safe             : 已通过 - unhandled        : 未处理 - ignored          : 已忽略 - fixing           : 修复中 - fix-failed       : 修复失败 - verifying        : 验证中 - add_to_whitelist : 已加白(表示检测失败，但已进行加白)
    * fixFailedReason  **参数解释** 修复失败原因 **取值范围** 字符长度0-256位
    * clusterId  **参数解释** 集群ID **取值范围** 字符长度0-64位
    *
    * @var string[]
    */
    protected static $setters = [
            'hostId' => 'setHostId',
            'hostName' => 'setHostName',
            'checkName' => 'setCheckName',
            'baselineName' => 'setBaselineName',
            'hostPublicIp' => 'setHostPublicIp',
            'hostPrivateIp' => 'setHostPrivateIp',
            'scanTime' => 'setScanTime',
            'failedNum' => 'setFailedNum',
            'passedNum' => 'setPassedNum',
            'diffDescription' => 'setDiffDescription',
            'description' => 'setDescription',
            'hostType' => 'setHostType',
            'enableFix' => 'setEnableFix',
            'enableClick' => 'setEnableClick',
            'cancelIgnoreEnableClick' => 'setCancelIgnoreEnableClick',
            'resultType' => 'setResultType',
            'fixFailedReason' => 'setFixFailedReason',
            'clusterId' => 'setClusterId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostId  **参数解释**： 主机ID **取值范围**： 字符长度1-64位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * checkName  **参数解释** 配置检查（基线）的名称，例如SSH、CentOS 7、Windows **取值范围** 字符长度0-256位
    * baselineName  **参数解释** 基线的名称，例如SSH 应用基线检查、CentOS 7 系统基线检查、Windows 系统基线检查 **取值范围** 字符长度0-256位
    * hostPublicIp  **参数解释**: 服务器公网IP **取值范围**: 字符长度0-128位
    * hostPrivateIp  **参数解释** 服务器私有IP **取值范围** 字符长度0-256位
    * scanTime  **参数解释** 扫描时间(ms) **取值范围** 取值0-9223372036854775807
    * failedNum  **参数解释** 风险项数量 **取值范围** 取值0-2147483647
    * passedNum  **参数解释** 通过项数量 **取值范围** 取值0-2147483647
    * diffDescription  **参数解释** 差异化展示提示信息 **取值范围** 字符长度0-512位
    * description  **参数解释** 忽略或加白的备注 **取值范围** 字符长度0-1024位
    * hostType  **参数解释** 主机类型 **取值范围** - cce
    * enableFix  **参数解释** 是否支持一键修复 **取值范围** - 1 : 支持一键修复 - 0 : 不支持
    * enableClick  **参数解释** 该检查项的修复&忽略&验证按钮是否可单击 **取值范围** - true  : 按钮可单击 - false : 按钮不可单击
    * cancelIgnoreEnableClick  **参数解释** 已忽略检查项是否可点击 **取值范围** - true  : 按钮可单击 - false : 按钮不可单击
    * resultType  **参数解释** 检测结果类型 **取值范围** - safe             : 已通过 - unhandled        : 未处理 - ignored          : 已忽略 - fixing           : 修复中 - fix-failed       : 修复失败 - verifying        : 验证中 - add_to_whitelist : 已加白(表示检测失败，但已进行加白)
    * fixFailedReason  **参数解释** 修复失败原因 **取值范围** 字符长度0-256位
    * clusterId  **参数解释** 集群ID **取值范围** 字符长度0-64位
    *
    * @var string[]
    */
    protected static $getters = [
            'hostId' => 'getHostId',
            'hostName' => 'getHostName',
            'checkName' => 'getCheckName',
            'baselineName' => 'getBaselineName',
            'hostPublicIp' => 'getHostPublicIp',
            'hostPrivateIp' => 'getHostPrivateIp',
            'scanTime' => 'getScanTime',
            'failedNum' => 'getFailedNum',
            'passedNum' => 'getPassedNum',
            'diffDescription' => 'getDiffDescription',
            'description' => 'getDescription',
            'hostType' => 'getHostType',
            'enableFix' => 'getEnableFix',
            'enableClick' => 'getEnableClick',
            'cancelIgnoreEnableClick' => 'getCancelIgnoreEnableClick',
            'resultType' => 'getResultType',
            'fixFailedReason' => 'getFixFailedReason',
            'clusterId' => 'getClusterId'
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
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['checkName'] = isset($data['checkName']) ? $data['checkName'] : null;
        $this->container['baselineName'] = isset($data['baselineName']) ? $data['baselineName'] : null;
        $this->container['hostPublicIp'] = isset($data['hostPublicIp']) ? $data['hostPublicIp'] : null;
        $this->container['hostPrivateIp'] = isset($data['hostPrivateIp']) ? $data['hostPrivateIp'] : null;
        $this->container['scanTime'] = isset($data['scanTime']) ? $data['scanTime'] : null;
        $this->container['failedNum'] = isset($data['failedNum']) ? $data['failedNum'] : null;
        $this->container['passedNum'] = isset($data['passedNum']) ? $data['passedNum'] : null;
        $this->container['diffDescription'] = isset($data['diffDescription']) ? $data['diffDescription'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['hostType'] = isset($data['hostType']) ? $data['hostType'] : null;
        $this->container['enableFix'] = isset($data['enableFix']) ? $data['enableFix'] : null;
        $this->container['enableClick'] = isset($data['enableClick']) ? $data['enableClick'] : null;
        $this->container['cancelIgnoreEnableClick'] = isset($data['cancelIgnoreEnableClick']) ? $data['cancelIgnoreEnableClick'] : null;
        $this->container['resultType'] = isset($data['resultType']) ? $data['resultType'] : null;
        $this->container['fixFailedReason'] = isset($data['fixFailedReason']) ? $data['fixFailedReason'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 64)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostId']) && !preg_match("/^.*$/", $this->container['hostId'])) {
                $invalidProperties[] = "invalid value for 'hostId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostName']) && !preg_match("/^.*$/", $this->container['hostName'])) {
                $invalidProperties[] = "invalid value for 'hostName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['checkName']) && (mb_strlen($this->container['checkName']) > 256)) {
                $invalidProperties[] = "invalid value for 'checkName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['checkName']) && (mb_strlen($this->container['checkName']) < 0)) {
                $invalidProperties[] = "invalid value for 'checkName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['baselineName']) && (mb_strlen($this->container['baselineName']) > 256)) {
                $invalidProperties[] = "invalid value for 'baselineName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['baselineName']) && (mb_strlen($this->container['baselineName']) < 0)) {
                $invalidProperties[] = "invalid value for 'baselineName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostPublicIp']) && (mb_strlen($this->container['hostPublicIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostPublicIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hostPublicIp']) && (mb_strlen($this->container['hostPublicIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostPublicIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostPrivateIp']) && (mb_strlen($this->container['hostPrivateIp']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostPrivateIp', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostPrivateIp']) && (mb_strlen($this->container['hostPrivateIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostPrivateIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scanTime']) && ($this->container['scanTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'scanTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['scanTime']) && ($this->container['scanTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'scanTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['failedNum']) && ($this->container['failedNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'failedNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['failedNum']) && ($this->container['failedNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'failedNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['passedNum']) && ($this->container['passedNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'passedNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['passedNum']) && ($this->container['passedNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'passedNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['diffDescription']) && (mb_strlen($this->container['diffDescription']) > 512)) {
                $invalidProperties[] = "invalid value for 'diffDescription', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['diffDescription']) && (mb_strlen($this->container['diffDescription']) < 0)) {
                $invalidProperties[] = "invalid value for 'diffDescription', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostType']) && (mb_strlen($this->container['hostType']) > 32)) {
                $invalidProperties[] = "invalid value for 'hostType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['hostType']) && (mb_strlen($this->container['hostType']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['enableFix']) && ($this->container['enableFix'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'enableFix', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['enableFix']) && ($this->container['enableFix'] < 0)) {
                $invalidProperties[] = "invalid value for 'enableFix', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resultType']) && (mb_strlen($this->container['resultType']) > 32)) {
                $invalidProperties[] = "invalid value for 'resultType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['resultType']) && (mb_strlen($this->container['resultType']) < 0)) {
                $invalidProperties[] = "invalid value for 'resultType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fixFailedReason']) && (mb_strlen($this->container['fixFailedReason']) > 256)) {
                $invalidProperties[] = "invalid value for 'fixFailedReason', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['fixFailedReason']) && (mb_strlen($this->container['fixFailedReason']) < 0)) {
                $invalidProperties[] = "invalid value for 'fixFailedReason', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) > 64)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) < 0)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be bigger than or equal to 0.";
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
    * Gets hostId
    *  **参数解释**： 主机ID **取值范围**： 字符长度1-64位
    *
    * @return string|null
    */
    public function getHostId()
    {
        return $this->container['hostId'];
    }

    /**
    * Sets hostId
    *
    * @param string|null $hostId **参数解释**： 主机ID **取值范围**： 字符长度1-64位
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets hostName
    *  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
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
    * @param string|null $hostName **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets checkName
    *  **参数解释** 配置检查（基线）的名称，例如SSH、CentOS 7、Windows **取值范围** 字符长度0-256位
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
    * @param string|null $checkName **参数解释** 配置检查（基线）的名称，例如SSH、CentOS 7、Windows **取值范围** 字符长度0-256位
    *
    * @return $this
    */
    public function setCheckName($checkName)
    {
        $this->container['checkName'] = $checkName;
        return $this;
    }

    /**
    * Gets baselineName
    *  **参数解释** 基线的名称，例如SSH 应用基线检查、CentOS 7 系统基线检查、Windows 系统基线检查 **取值范围** 字符长度0-256位
    *
    * @return string|null
    */
    public function getBaselineName()
    {
        return $this->container['baselineName'];
    }

    /**
    * Sets baselineName
    *
    * @param string|null $baselineName **参数解释** 基线的名称，例如SSH 应用基线检查、CentOS 7 系统基线检查、Windows 系统基线检查 **取值范围** 字符长度0-256位
    *
    * @return $this
    */
    public function setBaselineName($baselineName)
    {
        $this->container['baselineName'] = $baselineName;
        return $this;
    }

    /**
    * Gets hostPublicIp
    *  **参数解释**: 服务器公网IP **取值范围**: 字符长度0-128位
    *
    * @return string|null
    */
    public function getHostPublicIp()
    {
        return $this->container['hostPublicIp'];
    }

    /**
    * Sets hostPublicIp
    *
    * @param string|null $hostPublicIp **参数解释**: 服务器公网IP **取值范围**: 字符长度0-128位
    *
    * @return $this
    */
    public function setHostPublicIp($hostPublicIp)
    {
        $this->container['hostPublicIp'] = $hostPublicIp;
        return $this;
    }

    /**
    * Gets hostPrivateIp
    *  **参数解释** 服务器私有IP **取值范围** 字符长度0-256位
    *
    * @return string|null
    */
    public function getHostPrivateIp()
    {
        return $this->container['hostPrivateIp'];
    }

    /**
    * Sets hostPrivateIp
    *
    * @param string|null $hostPrivateIp **参数解释** 服务器私有IP **取值范围** 字符长度0-256位
    *
    * @return $this
    */
    public function setHostPrivateIp($hostPrivateIp)
    {
        $this->container['hostPrivateIp'] = $hostPrivateIp;
        return $this;
    }

    /**
    * Gets scanTime
    *  **参数解释** 扫描时间(ms) **取值范围** 取值0-9223372036854775807
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
    * @param int|null $scanTime **参数解释** 扫描时间(ms) **取值范围** 取值0-9223372036854775807
    *
    * @return $this
    */
    public function setScanTime($scanTime)
    {
        $this->container['scanTime'] = $scanTime;
        return $this;
    }

    /**
    * Gets failedNum
    *  **参数解释** 风险项数量 **取值范围** 取值0-2147483647
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
    * @param int|null $failedNum **参数解释** 风险项数量 **取值范围** 取值0-2147483647
    *
    * @return $this
    */
    public function setFailedNum($failedNum)
    {
        $this->container['failedNum'] = $failedNum;
        return $this;
    }

    /**
    * Gets passedNum
    *  **参数解释** 通过项数量 **取值范围** 取值0-2147483647
    *
    * @return int|null
    */
    public function getPassedNum()
    {
        return $this->container['passedNum'];
    }

    /**
    * Sets passedNum
    *
    * @param int|null $passedNum **参数解释** 通过项数量 **取值范围** 取值0-2147483647
    *
    * @return $this
    */
    public function setPassedNum($passedNum)
    {
        $this->container['passedNum'] = $passedNum;
        return $this;
    }

    /**
    * Gets diffDescription
    *  **参数解释** 差异化展示提示信息 **取值范围** 字符长度0-512位
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
    * @param string|null $diffDescription **参数解释** 差异化展示提示信息 **取值范围** 字符长度0-512位
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
    *  **参数解释** 忽略或加白的备注 **取值范围** 字符长度0-1024位
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
    * @param string|null $description **参数解释** 忽略或加白的备注 **取值范围** 字符长度0-1024位
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets hostType
    *  **参数解释** 主机类型 **取值范围** - cce
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
    * @param string|null $hostType **参数解释** 主机类型 **取值范围** - cce
    *
    * @return $this
    */
    public function setHostType($hostType)
    {
        $this->container['hostType'] = $hostType;
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
    *  **参数解释** 该检查项的修复&忽略&验证按钮是否可单击 **取值范围** - true  : 按钮可单击 - false : 按钮不可单击
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
    * @param bool|null $enableClick **参数解释** 该检查项的修复&忽略&验证按钮是否可单击 **取值范围** - true  : 按钮可单击 - false : 按钮不可单击
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
    * Gets resultType
    *  **参数解释** 检测结果类型 **取值范围** - safe             : 已通过 - unhandled        : 未处理 - ignored          : 已忽略 - fixing           : 修复中 - fix-failed       : 修复失败 - verifying        : 验证中 - add_to_whitelist : 已加白(表示检测失败，但已进行加白)
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
    * @param string|null $resultType **参数解释** 检测结果类型 **取值范围** - safe             : 已通过 - unhandled        : 未处理 - ignored          : 已忽略 - fixing           : 修复中 - fix-failed       : 修复失败 - verifying        : 验证中 - add_to_whitelist : 已加白(表示检测失败，但已进行加白)
    *
    * @return $this
    */
    public function setResultType($resultType)
    {
        $this->container['resultType'] = $resultType;
        return $this;
    }

    /**
    * Gets fixFailedReason
    *  **参数解释** 修复失败原因 **取值范围** 字符长度0-256位
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
    * @param string|null $fixFailedReason **参数解释** 修复失败原因 **取值范围** 字符长度0-256位
    *
    * @return $this
    */
    public function setFixFailedReason($fixFailedReason)
    {
        $this->container['fixFailedReason'] = $fixFailedReason;
        return $this;
    }

    /**
    * Gets clusterId
    *  **参数解释** 集群ID **取值范围** 字符长度0-64位
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
    * @param string|null $clusterId **参数解释** 集群ID **取值范围** 字符长度0-64位
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
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

