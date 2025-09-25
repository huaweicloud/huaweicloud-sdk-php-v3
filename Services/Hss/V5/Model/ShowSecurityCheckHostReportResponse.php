<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSecurityCheckHostReportResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSecurityCheckHostReportResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostResult  hostResult
    * hostStatus  **参数解释**： 服务器运行状态 **取值范围**： - ACTIVE：运行中 - SHUTOFF：关机 - BUILDING：创建中 - ERROR：故障
    * scanPeriodStart  **参数解释**： 体检周期开始时间 **取值范围**： 不涉及
    * scanPeriodEnd  **参数解释**： 体检周期结束时间 **取值范围**： 不涉及
    * riskRating  **参数解释**： 风险评分 **取值范围**： 不涉及
    * severity  **参数解释**： 风险级别 **取值范围**： - high：高危 - medium：中危 - low：低危 - safe：安全，无风险
    * riskNum  **参数解释**： 安全风险数量 **取值范围**： 不涉及
    * scanTime  **参数解释**： 最新检测时间 **取值范围**： 不涉及
    * free  **参数解释**: 是否是免费安全体检的报告 **取值范围**: - true：免费安全体检的报告 - false：非免费安全体检的报告
    * eventNumInfo  eventNumInfo
    * vulNumInfo  vulNumInfo
    * baselineNumInfo  baselineNumInfo
    * assetNumInfo  assetNumInfo
    * assetChangeNum  **参数解释**： 主机资产变动记录数量 **取值范围**： 不涉及
    * appNum  **参数解释**： 软件数量 **取值范围**： 不涉及
    * portNum  **参数解释**： 危险端口数量 **取值范围**： 不涉及
    * eventList  **参数解释**： 入侵事件列表 **取值范围**： 不涉及
    * vulList  **参数解释**： 漏洞列表 **取值范围**： 不涉及
    * securityConfigList  **参数解释**： 配置检测列表 **取值范围**： 不涉及
    * securityConfigItemList  **参数解释**： 配置检查项列表 **取值范围**： 不涉及
    * pwdPolicyList  **参数解释**： 口令复杂度策略列表 **取值范围**： 不涉及
    * weakPwdList  **参数解释**： 经典弱口令列表 **取值范围**： 不涉及
    * userChangeList  **参数解释**： 主机账户的历史变动记录 **取值范围**： 不涉及
    * portList  **参数解释**： 危险开放端口列表 **取值范围**： 不涉及
    * appList  **参数解释**： 资产的软件列表 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostResult' => '\HuaweiCloud\SDK\Hss\V5\Model\SecurityCheckHostResultResponseInfo',
            'hostStatus' => 'string',
            'scanPeriodStart' => 'int',
            'scanPeriodEnd' => 'int',
            'riskRating' => 'int',
            'severity' => 'string',
            'riskNum' => 'int',
            'scanTime' => 'int',
            'free' => 'bool',
            'eventNumInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\SecurityCheckRiskNumInfo',
            'vulNumInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\SecurityCheckRiskNumInfo',
            'baselineNumInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\SecurityCheckRiskNumInfo',
            'assetNumInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\SecurityCheckRiskNumInfo',
            'assetChangeNum' => 'int',
            'appNum' => 'int',
            'portNum' => 'int',
            'eventList' => '\HuaweiCloud\SDK\Hss\V5\Model\SecurityCheckRiskEventInfo[]',
            'vulList' => '\HuaweiCloud\SDK\Hss\V5\Model\SecurityCheckVulInfo[]',
            'securityConfigList' => '\HuaweiCloud\SDK\Hss\V5\Model\SecurityConfigInfo[]',
            'securityConfigItemList' => '\HuaweiCloud\SDK\Hss\V5\Model\SecurityConfigItemInfo[]',
            'pwdPolicyList' => '\HuaweiCloud\SDK\Hss\V5\Model\SecurityConfigPwdPolicyInfo[]',
            'weakPwdList' => '\HuaweiCloud\SDK\Hss\V5\Model\SecurityConfigWeakPwdInfo[]',
            'userChangeList' => '\HuaweiCloud\SDK\Hss\V5\Model\SecurityConfigUserChangeInfo[]',
            'portList' => '\HuaweiCloud\SDK\Hss\V5\Model\SecurityConfigPortInfo[]',
            'appList' => '\HuaweiCloud\SDK\Hss\V5\Model\AppResponseInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostResult  hostResult
    * hostStatus  **参数解释**： 服务器运行状态 **取值范围**： - ACTIVE：运行中 - SHUTOFF：关机 - BUILDING：创建中 - ERROR：故障
    * scanPeriodStart  **参数解释**： 体检周期开始时间 **取值范围**： 不涉及
    * scanPeriodEnd  **参数解释**： 体检周期结束时间 **取值范围**： 不涉及
    * riskRating  **参数解释**： 风险评分 **取值范围**： 不涉及
    * severity  **参数解释**： 风险级别 **取值范围**： - high：高危 - medium：中危 - low：低危 - safe：安全，无风险
    * riskNum  **参数解释**： 安全风险数量 **取值范围**： 不涉及
    * scanTime  **参数解释**： 最新检测时间 **取值范围**： 不涉及
    * free  **参数解释**: 是否是免费安全体检的报告 **取值范围**: - true：免费安全体检的报告 - false：非免费安全体检的报告
    * eventNumInfo  eventNumInfo
    * vulNumInfo  vulNumInfo
    * baselineNumInfo  baselineNumInfo
    * assetNumInfo  assetNumInfo
    * assetChangeNum  **参数解释**： 主机资产变动记录数量 **取值范围**： 不涉及
    * appNum  **参数解释**： 软件数量 **取值范围**： 不涉及
    * portNum  **参数解释**： 危险端口数量 **取值范围**： 不涉及
    * eventList  **参数解释**： 入侵事件列表 **取值范围**： 不涉及
    * vulList  **参数解释**： 漏洞列表 **取值范围**： 不涉及
    * securityConfigList  **参数解释**： 配置检测列表 **取值范围**： 不涉及
    * securityConfigItemList  **参数解释**： 配置检查项列表 **取值范围**： 不涉及
    * pwdPolicyList  **参数解释**： 口令复杂度策略列表 **取值范围**： 不涉及
    * weakPwdList  **参数解释**： 经典弱口令列表 **取值范围**： 不涉及
    * userChangeList  **参数解释**： 主机账户的历史变动记录 **取值范围**： 不涉及
    * portList  **参数解释**： 危险开放端口列表 **取值范围**： 不涉及
    * appList  **参数解释**： 资产的软件列表 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostResult' => null,
        'hostStatus' => null,
        'scanPeriodStart' => 'int64',
        'scanPeriodEnd' => 'int64',
        'riskRating' => 'int32',
        'severity' => null,
        'riskNum' => 'int32',
        'scanTime' => 'int64',
        'free' => null,
        'eventNumInfo' => null,
        'vulNumInfo' => null,
        'baselineNumInfo' => null,
        'assetNumInfo' => null,
        'assetChangeNum' => 'int32',
        'appNum' => 'int32',
        'portNum' => 'int32',
        'eventList' => null,
        'vulList' => null,
        'securityConfigList' => null,
        'securityConfigItemList' => null,
        'pwdPolicyList' => null,
        'weakPwdList' => null,
        'userChangeList' => null,
        'portList' => null,
        'appList' => null
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
    * hostResult  hostResult
    * hostStatus  **参数解释**： 服务器运行状态 **取值范围**： - ACTIVE：运行中 - SHUTOFF：关机 - BUILDING：创建中 - ERROR：故障
    * scanPeriodStart  **参数解释**： 体检周期开始时间 **取值范围**： 不涉及
    * scanPeriodEnd  **参数解释**： 体检周期结束时间 **取值范围**： 不涉及
    * riskRating  **参数解释**： 风险评分 **取值范围**： 不涉及
    * severity  **参数解释**： 风险级别 **取值范围**： - high：高危 - medium：中危 - low：低危 - safe：安全，无风险
    * riskNum  **参数解释**： 安全风险数量 **取值范围**： 不涉及
    * scanTime  **参数解释**： 最新检测时间 **取值范围**： 不涉及
    * free  **参数解释**: 是否是免费安全体检的报告 **取值范围**: - true：免费安全体检的报告 - false：非免费安全体检的报告
    * eventNumInfo  eventNumInfo
    * vulNumInfo  vulNumInfo
    * baselineNumInfo  baselineNumInfo
    * assetNumInfo  assetNumInfo
    * assetChangeNum  **参数解释**： 主机资产变动记录数量 **取值范围**： 不涉及
    * appNum  **参数解释**： 软件数量 **取值范围**： 不涉及
    * portNum  **参数解释**： 危险端口数量 **取值范围**： 不涉及
    * eventList  **参数解释**： 入侵事件列表 **取值范围**： 不涉及
    * vulList  **参数解释**： 漏洞列表 **取值范围**： 不涉及
    * securityConfigList  **参数解释**： 配置检测列表 **取值范围**： 不涉及
    * securityConfigItemList  **参数解释**： 配置检查项列表 **取值范围**： 不涉及
    * pwdPolicyList  **参数解释**： 口令复杂度策略列表 **取值范围**： 不涉及
    * weakPwdList  **参数解释**： 经典弱口令列表 **取值范围**： 不涉及
    * userChangeList  **参数解释**： 主机账户的历史变动记录 **取值范围**： 不涉及
    * portList  **参数解释**： 危险开放端口列表 **取值范围**： 不涉及
    * appList  **参数解释**： 资产的软件列表 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostResult' => 'host_result',
            'hostStatus' => 'host_status',
            'scanPeriodStart' => 'scan_period_start',
            'scanPeriodEnd' => 'scan_period_end',
            'riskRating' => 'risk_rating',
            'severity' => 'severity',
            'riskNum' => 'risk_num',
            'scanTime' => 'scan_time',
            'free' => 'free',
            'eventNumInfo' => 'event_num_info',
            'vulNumInfo' => 'vul_num_info',
            'baselineNumInfo' => 'baseline_num_info',
            'assetNumInfo' => 'asset_num_info',
            'assetChangeNum' => 'asset_change_num',
            'appNum' => 'app_num',
            'portNum' => 'port_num',
            'eventList' => 'event_list',
            'vulList' => 'vul_list',
            'securityConfigList' => 'security_config_list',
            'securityConfigItemList' => 'security_config_item_list',
            'pwdPolicyList' => 'pwd_policy_list',
            'weakPwdList' => 'weak_pwd_list',
            'userChangeList' => 'user_change_list',
            'portList' => 'port_list',
            'appList' => 'app_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostResult  hostResult
    * hostStatus  **参数解释**： 服务器运行状态 **取值范围**： - ACTIVE：运行中 - SHUTOFF：关机 - BUILDING：创建中 - ERROR：故障
    * scanPeriodStart  **参数解释**： 体检周期开始时间 **取值范围**： 不涉及
    * scanPeriodEnd  **参数解释**： 体检周期结束时间 **取值范围**： 不涉及
    * riskRating  **参数解释**： 风险评分 **取值范围**： 不涉及
    * severity  **参数解释**： 风险级别 **取值范围**： - high：高危 - medium：中危 - low：低危 - safe：安全，无风险
    * riskNum  **参数解释**： 安全风险数量 **取值范围**： 不涉及
    * scanTime  **参数解释**： 最新检测时间 **取值范围**： 不涉及
    * free  **参数解释**: 是否是免费安全体检的报告 **取值范围**: - true：免费安全体检的报告 - false：非免费安全体检的报告
    * eventNumInfo  eventNumInfo
    * vulNumInfo  vulNumInfo
    * baselineNumInfo  baselineNumInfo
    * assetNumInfo  assetNumInfo
    * assetChangeNum  **参数解释**： 主机资产变动记录数量 **取值范围**： 不涉及
    * appNum  **参数解释**： 软件数量 **取值范围**： 不涉及
    * portNum  **参数解释**： 危险端口数量 **取值范围**： 不涉及
    * eventList  **参数解释**： 入侵事件列表 **取值范围**： 不涉及
    * vulList  **参数解释**： 漏洞列表 **取值范围**： 不涉及
    * securityConfigList  **参数解释**： 配置检测列表 **取值范围**： 不涉及
    * securityConfigItemList  **参数解释**： 配置检查项列表 **取值范围**： 不涉及
    * pwdPolicyList  **参数解释**： 口令复杂度策略列表 **取值范围**： 不涉及
    * weakPwdList  **参数解释**： 经典弱口令列表 **取值范围**： 不涉及
    * userChangeList  **参数解释**： 主机账户的历史变动记录 **取值范围**： 不涉及
    * portList  **参数解释**： 危险开放端口列表 **取值范围**： 不涉及
    * appList  **参数解释**： 资产的软件列表 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'hostResult' => 'setHostResult',
            'hostStatus' => 'setHostStatus',
            'scanPeriodStart' => 'setScanPeriodStart',
            'scanPeriodEnd' => 'setScanPeriodEnd',
            'riskRating' => 'setRiskRating',
            'severity' => 'setSeverity',
            'riskNum' => 'setRiskNum',
            'scanTime' => 'setScanTime',
            'free' => 'setFree',
            'eventNumInfo' => 'setEventNumInfo',
            'vulNumInfo' => 'setVulNumInfo',
            'baselineNumInfo' => 'setBaselineNumInfo',
            'assetNumInfo' => 'setAssetNumInfo',
            'assetChangeNum' => 'setAssetChangeNum',
            'appNum' => 'setAppNum',
            'portNum' => 'setPortNum',
            'eventList' => 'setEventList',
            'vulList' => 'setVulList',
            'securityConfigList' => 'setSecurityConfigList',
            'securityConfigItemList' => 'setSecurityConfigItemList',
            'pwdPolicyList' => 'setPwdPolicyList',
            'weakPwdList' => 'setWeakPwdList',
            'userChangeList' => 'setUserChangeList',
            'portList' => 'setPortList',
            'appList' => 'setAppList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostResult  hostResult
    * hostStatus  **参数解释**： 服务器运行状态 **取值范围**： - ACTIVE：运行中 - SHUTOFF：关机 - BUILDING：创建中 - ERROR：故障
    * scanPeriodStart  **参数解释**： 体检周期开始时间 **取值范围**： 不涉及
    * scanPeriodEnd  **参数解释**： 体检周期结束时间 **取值范围**： 不涉及
    * riskRating  **参数解释**： 风险评分 **取值范围**： 不涉及
    * severity  **参数解释**： 风险级别 **取值范围**： - high：高危 - medium：中危 - low：低危 - safe：安全，无风险
    * riskNum  **参数解释**： 安全风险数量 **取值范围**： 不涉及
    * scanTime  **参数解释**： 最新检测时间 **取值范围**： 不涉及
    * free  **参数解释**: 是否是免费安全体检的报告 **取值范围**: - true：免费安全体检的报告 - false：非免费安全体检的报告
    * eventNumInfo  eventNumInfo
    * vulNumInfo  vulNumInfo
    * baselineNumInfo  baselineNumInfo
    * assetNumInfo  assetNumInfo
    * assetChangeNum  **参数解释**： 主机资产变动记录数量 **取值范围**： 不涉及
    * appNum  **参数解释**： 软件数量 **取值范围**： 不涉及
    * portNum  **参数解释**： 危险端口数量 **取值范围**： 不涉及
    * eventList  **参数解释**： 入侵事件列表 **取值范围**： 不涉及
    * vulList  **参数解释**： 漏洞列表 **取值范围**： 不涉及
    * securityConfigList  **参数解释**： 配置检测列表 **取值范围**： 不涉及
    * securityConfigItemList  **参数解释**： 配置检查项列表 **取值范围**： 不涉及
    * pwdPolicyList  **参数解释**： 口令复杂度策略列表 **取值范围**： 不涉及
    * weakPwdList  **参数解释**： 经典弱口令列表 **取值范围**： 不涉及
    * userChangeList  **参数解释**： 主机账户的历史变动记录 **取值范围**： 不涉及
    * portList  **参数解释**： 危险开放端口列表 **取值范围**： 不涉及
    * appList  **参数解释**： 资产的软件列表 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'hostResult' => 'getHostResult',
            'hostStatus' => 'getHostStatus',
            'scanPeriodStart' => 'getScanPeriodStart',
            'scanPeriodEnd' => 'getScanPeriodEnd',
            'riskRating' => 'getRiskRating',
            'severity' => 'getSeverity',
            'riskNum' => 'getRiskNum',
            'scanTime' => 'getScanTime',
            'free' => 'getFree',
            'eventNumInfo' => 'getEventNumInfo',
            'vulNumInfo' => 'getVulNumInfo',
            'baselineNumInfo' => 'getBaselineNumInfo',
            'assetNumInfo' => 'getAssetNumInfo',
            'assetChangeNum' => 'getAssetChangeNum',
            'appNum' => 'getAppNum',
            'portNum' => 'getPortNum',
            'eventList' => 'getEventList',
            'vulList' => 'getVulList',
            'securityConfigList' => 'getSecurityConfigList',
            'securityConfigItemList' => 'getSecurityConfigItemList',
            'pwdPolicyList' => 'getPwdPolicyList',
            'weakPwdList' => 'getWeakPwdList',
            'userChangeList' => 'getUserChangeList',
            'portList' => 'getPortList',
            'appList' => 'getAppList'
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
        $this->container['hostResult'] = isset($data['hostResult']) ? $data['hostResult'] : null;
        $this->container['hostStatus'] = isset($data['hostStatus']) ? $data['hostStatus'] : null;
        $this->container['scanPeriodStart'] = isset($data['scanPeriodStart']) ? $data['scanPeriodStart'] : null;
        $this->container['scanPeriodEnd'] = isset($data['scanPeriodEnd']) ? $data['scanPeriodEnd'] : null;
        $this->container['riskRating'] = isset($data['riskRating']) ? $data['riskRating'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['riskNum'] = isset($data['riskNum']) ? $data['riskNum'] : null;
        $this->container['scanTime'] = isset($data['scanTime']) ? $data['scanTime'] : null;
        $this->container['free'] = isset($data['free']) ? $data['free'] : null;
        $this->container['eventNumInfo'] = isset($data['eventNumInfo']) ? $data['eventNumInfo'] : null;
        $this->container['vulNumInfo'] = isset($data['vulNumInfo']) ? $data['vulNumInfo'] : null;
        $this->container['baselineNumInfo'] = isset($data['baselineNumInfo']) ? $data['baselineNumInfo'] : null;
        $this->container['assetNumInfo'] = isset($data['assetNumInfo']) ? $data['assetNumInfo'] : null;
        $this->container['assetChangeNum'] = isset($data['assetChangeNum']) ? $data['assetChangeNum'] : null;
        $this->container['appNum'] = isset($data['appNum']) ? $data['appNum'] : null;
        $this->container['portNum'] = isset($data['portNum']) ? $data['portNum'] : null;
        $this->container['eventList'] = isset($data['eventList']) ? $data['eventList'] : null;
        $this->container['vulList'] = isset($data['vulList']) ? $data['vulList'] : null;
        $this->container['securityConfigList'] = isset($data['securityConfigList']) ? $data['securityConfigList'] : null;
        $this->container['securityConfigItemList'] = isset($data['securityConfigItemList']) ? $data['securityConfigItemList'] : null;
        $this->container['pwdPolicyList'] = isset($data['pwdPolicyList']) ? $data['pwdPolicyList'] : null;
        $this->container['weakPwdList'] = isset($data['weakPwdList']) ? $data['weakPwdList'] : null;
        $this->container['userChangeList'] = isset($data['userChangeList']) ? $data['userChangeList'] : null;
        $this->container['portList'] = isset($data['portList']) ? $data['portList'] : null;
        $this->container['appList'] = isset($data['appList']) ? $data['appList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets hostResult
    *  hostResult
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\SecurityCheckHostResultResponseInfo|null
    */
    public function getHostResult()
    {
        return $this->container['hostResult'];
    }

    /**
    * Sets hostResult
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\SecurityCheckHostResultResponseInfo|null $hostResult hostResult
    *
    * @return $this
    */
    public function setHostResult($hostResult)
    {
        $this->container['hostResult'] = $hostResult;
        return $this;
    }

    /**
    * Gets hostStatus
    *  **参数解释**： 服务器运行状态 **取值范围**： - ACTIVE：运行中 - SHUTOFF：关机 - BUILDING：创建中 - ERROR：故障
    *
    * @return string|null
    */
    public function getHostStatus()
    {
        return $this->container['hostStatus'];
    }

    /**
    * Sets hostStatus
    *
    * @param string|null $hostStatus **参数解释**： 服务器运行状态 **取值范围**： - ACTIVE：运行中 - SHUTOFF：关机 - BUILDING：创建中 - ERROR：故障
    *
    * @return $this
    */
    public function setHostStatus($hostStatus)
    {
        $this->container['hostStatus'] = $hostStatus;
        return $this;
    }

    /**
    * Gets scanPeriodStart
    *  **参数解释**： 体检周期开始时间 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getScanPeriodStart()
    {
        return $this->container['scanPeriodStart'];
    }

    /**
    * Sets scanPeriodStart
    *
    * @param int|null $scanPeriodStart **参数解释**： 体检周期开始时间 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setScanPeriodStart($scanPeriodStart)
    {
        $this->container['scanPeriodStart'] = $scanPeriodStart;
        return $this;
    }

    /**
    * Gets scanPeriodEnd
    *  **参数解释**： 体检周期结束时间 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getScanPeriodEnd()
    {
        return $this->container['scanPeriodEnd'];
    }

    /**
    * Sets scanPeriodEnd
    *
    * @param int|null $scanPeriodEnd **参数解释**： 体检周期结束时间 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setScanPeriodEnd($scanPeriodEnd)
    {
        $this->container['scanPeriodEnd'] = $scanPeriodEnd;
        return $this;
    }

    /**
    * Gets riskRating
    *  **参数解释**： 风险评分 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getRiskRating()
    {
        return $this->container['riskRating'];
    }

    /**
    * Sets riskRating
    *
    * @param int|null $riskRating **参数解释**： 风险评分 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setRiskRating($riskRating)
    {
        $this->container['riskRating'] = $riskRating;
        return $this;
    }

    /**
    * Gets severity
    *  **参数解释**： 风险级别 **取值范围**： - high：高危 - medium：中危 - low：低危 - safe：安全，无风险
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
    * @param string|null $severity **参数解释**： 风险级别 **取值范围**： - high：高危 - medium：中危 - low：低危 - safe：安全，无风险
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
        return $this;
    }

    /**
    * Gets riskNum
    *  **参数解释**： 安全风险数量 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getRiskNum()
    {
        return $this->container['riskNum'];
    }

    /**
    * Sets riskNum
    *
    * @param int|null $riskNum **参数解释**： 安全风险数量 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setRiskNum($riskNum)
    {
        $this->container['riskNum'] = $riskNum;
        return $this;
    }

    /**
    * Gets scanTime
    *  **参数解释**： 最新检测时间 **取值范围**： 不涉及
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
    * @param int|null $scanTime **参数解释**： 最新检测时间 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setScanTime($scanTime)
    {
        $this->container['scanTime'] = $scanTime;
        return $this;
    }

    /**
    * Gets free
    *  **参数解释**: 是否是免费安全体检的报告 **取值范围**: - true：免费安全体检的报告 - false：非免费安全体检的报告
    *
    * @return bool|null
    */
    public function getFree()
    {
        return $this->container['free'];
    }

    /**
    * Sets free
    *
    * @param bool|null $free **参数解释**: 是否是免费安全体检的报告 **取值范围**: - true：免费安全体检的报告 - false：非免费安全体检的报告
    *
    * @return $this
    */
    public function setFree($free)
    {
        $this->container['free'] = $free;
        return $this;
    }

    /**
    * Gets eventNumInfo
    *  eventNumInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\SecurityCheckRiskNumInfo|null
    */
    public function getEventNumInfo()
    {
        return $this->container['eventNumInfo'];
    }

    /**
    * Sets eventNumInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\SecurityCheckRiskNumInfo|null $eventNumInfo eventNumInfo
    *
    * @return $this
    */
    public function setEventNumInfo($eventNumInfo)
    {
        $this->container['eventNumInfo'] = $eventNumInfo;
        return $this;
    }

    /**
    * Gets vulNumInfo
    *  vulNumInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\SecurityCheckRiskNumInfo|null
    */
    public function getVulNumInfo()
    {
        return $this->container['vulNumInfo'];
    }

    /**
    * Sets vulNumInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\SecurityCheckRiskNumInfo|null $vulNumInfo vulNumInfo
    *
    * @return $this
    */
    public function setVulNumInfo($vulNumInfo)
    {
        $this->container['vulNumInfo'] = $vulNumInfo;
        return $this;
    }

    /**
    * Gets baselineNumInfo
    *  baselineNumInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\SecurityCheckRiskNumInfo|null
    */
    public function getBaselineNumInfo()
    {
        return $this->container['baselineNumInfo'];
    }

    /**
    * Sets baselineNumInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\SecurityCheckRiskNumInfo|null $baselineNumInfo baselineNumInfo
    *
    * @return $this
    */
    public function setBaselineNumInfo($baselineNumInfo)
    {
        $this->container['baselineNumInfo'] = $baselineNumInfo;
        return $this;
    }

    /**
    * Gets assetNumInfo
    *  assetNumInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\SecurityCheckRiskNumInfo|null
    */
    public function getAssetNumInfo()
    {
        return $this->container['assetNumInfo'];
    }

    /**
    * Sets assetNumInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\SecurityCheckRiskNumInfo|null $assetNumInfo assetNumInfo
    *
    * @return $this
    */
    public function setAssetNumInfo($assetNumInfo)
    {
        $this->container['assetNumInfo'] = $assetNumInfo;
        return $this;
    }

    /**
    * Gets assetChangeNum
    *  **参数解释**： 主机资产变动记录数量 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getAssetChangeNum()
    {
        return $this->container['assetChangeNum'];
    }

    /**
    * Sets assetChangeNum
    *
    * @param int|null $assetChangeNum **参数解释**： 主机资产变动记录数量 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setAssetChangeNum($assetChangeNum)
    {
        $this->container['assetChangeNum'] = $assetChangeNum;
        return $this;
    }

    /**
    * Gets appNum
    *  **参数解释**： 软件数量 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getAppNum()
    {
        return $this->container['appNum'];
    }

    /**
    * Sets appNum
    *
    * @param int|null $appNum **参数解释**： 软件数量 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setAppNum($appNum)
    {
        $this->container['appNum'] = $appNum;
        return $this;
    }

    /**
    * Gets portNum
    *  **参数解释**： 危险端口数量 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getPortNum()
    {
        return $this->container['portNum'];
    }

    /**
    * Sets portNum
    *
    * @param int|null $portNum **参数解释**： 危险端口数量 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setPortNum($portNum)
    {
        $this->container['portNum'] = $portNum;
        return $this;
    }

    /**
    * Gets eventList
    *  **参数解释**： 入侵事件列表 **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\SecurityCheckRiskEventInfo[]|null
    */
    public function getEventList()
    {
        return $this->container['eventList'];
    }

    /**
    * Sets eventList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\SecurityCheckRiskEventInfo[]|null $eventList **参数解释**： 入侵事件列表 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setEventList($eventList)
    {
        $this->container['eventList'] = $eventList;
        return $this;
    }

    /**
    * Gets vulList
    *  **参数解释**： 漏洞列表 **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\SecurityCheckVulInfo[]|null
    */
    public function getVulList()
    {
        return $this->container['vulList'];
    }

    /**
    * Sets vulList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\SecurityCheckVulInfo[]|null $vulList **参数解释**： 漏洞列表 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setVulList($vulList)
    {
        $this->container['vulList'] = $vulList;
        return $this;
    }

    /**
    * Gets securityConfigList
    *  **参数解释**： 配置检测列表 **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\SecurityConfigInfo[]|null
    */
    public function getSecurityConfigList()
    {
        return $this->container['securityConfigList'];
    }

    /**
    * Sets securityConfigList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\SecurityConfigInfo[]|null $securityConfigList **参数解释**： 配置检测列表 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setSecurityConfigList($securityConfigList)
    {
        $this->container['securityConfigList'] = $securityConfigList;
        return $this;
    }

    /**
    * Gets securityConfigItemList
    *  **参数解释**： 配置检查项列表 **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\SecurityConfigItemInfo[]|null
    */
    public function getSecurityConfigItemList()
    {
        return $this->container['securityConfigItemList'];
    }

    /**
    * Sets securityConfigItemList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\SecurityConfigItemInfo[]|null $securityConfigItemList **参数解释**： 配置检查项列表 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setSecurityConfigItemList($securityConfigItemList)
    {
        $this->container['securityConfigItemList'] = $securityConfigItemList;
        return $this;
    }

    /**
    * Gets pwdPolicyList
    *  **参数解释**： 口令复杂度策略列表 **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\SecurityConfigPwdPolicyInfo[]|null
    */
    public function getPwdPolicyList()
    {
        return $this->container['pwdPolicyList'];
    }

    /**
    * Sets pwdPolicyList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\SecurityConfigPwdPolicyInfo[]|null $pwdPolicyList **参数解释**： 口令复杂度策略列表 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setPwdPolicyList($pwdPolicyList)
    {
        $this->container['pwdPolicyList'] = $pwdPolicyList;
        return $this;
    }

    /**
    * Gets weakPwdList
    *  **参数解释**： 经典弱口令列表 **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\SecurityConfigWeakPwdInfo[]|null
    */
    public function getWeakPwdList()
    {
        return $this->container['weakPwdList'];
    }

    /**
    * Sets weakPwdList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\SecurityConfigWeakPwdInfo[]|null $weakPwdList **参数解释**： 经典弱口令列表 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setWeakPwdList($weakPwdList)
    {
        $this->container['weakPwdList'] = $weakPwdList;
        return $this;
    }

    /**
    * Gets userChangeList
    *  **参数解释**： 主机账户的历史变动记录 **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\SecurityConfigUserChangeInfo[]|null
    */
    public function getUserChangeList()
    {
        return $this->container['userChangeList'];
    }

    /**
    * Sets userChangeList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\SecurityConfigUserChangeInfo[]|null $userChangeList **参数解释**： 主机账户的历史变动记录 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setUserChangeList($userChangeList)
    {
        $this->container['userChangeList'] = $userChangeList;
        return $this;
    }

    /**
    * Gets portList
    *  **参数解释**： 危险开放端口列表 **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\SecurityConfigPortInfo[]|null
    */
    public function getPortList()
    {
        return $this->container['portList'];
    }

    /**
    * Sets portList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\SecurityConfigPortInfo[]|null $portList **参数解释**： 危险开放端口列表 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setPortList($portList)
    {
        $this->container['portList'] = $portList;
        return $this;
    }

    /**
    * Gets appList
    *  **参数解释**： 资产的软件列表 **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\AppResponseInfo[]|null
    */
    public function getAppList()
    {
        return $this->container['appList'];
    }

    /**
    * Sets appList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\AppResponseInfo[]|null $appList **参数解释**： 资产的软件列表 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setAppList($appList)
    {
        $this->container['appList'] = $appList;
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

