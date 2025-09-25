<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowProtectStatisticsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowProtectStatisticsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vulLibraryUpdateTime  **参数解释**: 漏洞库更新时间 **取值范围**: 最小值0，最大值4071095999000
    * protectDays  **参数解释**: 守护天数 **取值范围**: 最小值0，最大值4071095999000
    * threatLibraryUpdateTime  **参数解释**: 病毒库更新时间 **取值范围**: 最小值0，最大值4071095999000
    * vulDetectedTotalNum  **参数解释**: 漏洞累计已检测数量 **取值范围**: 最小值0，最大值4071095999000
    * baselineDetectedTotalNum  **参数解释**: 累计检测基线总数量 **取值范围**: 最小值0，最大值4071095999000
    * fingerScanTotalNum  **参数解释**: 累计扫描指纹数量 **取值范围**: 最小值0，最大值4071095999000
    * alarmDetectedTotalNum  **参数解释**: 入侵检测累计检测告警总数量 **取值范围**: 最小值0，最大值4071095999000
    * ransomwareAlarmDetectedTotalNum  **参数解释**: 累计防御勒索病毒告警次数 **取值范围**: 最小值0，最大值4071095999000
    * fileAlarmDetectedTotalNum  **参数解释**: 文件完整性监控累计检测文件变更告警总数 **取值范围**: 最小值0，最大值4071095999000
    * raspAlarmDetectedTotalNum  **参数解释**: 应用防护累计检测告警总数 **取值范围**: 最小值0，最大值4071095999000
    * wtpAlarmDetectedTotalNum  **参数解释**: 网页防篡改累计抵御网页防篡改次数 **取值范围**: 最小值0，最大值4071095999000
    * imageRiskTotalNum  **参数解释**: 容器镜像安全累计检测风险个数 **取值范围**: 最小值0，最大值4071095999000
    * containerAlarmTotalNum  **参数解释**: 容器安全防护累计检测容器告警个数 **取值范围**: 最小值0，最大值4071095999000
    * containerFirewallPolicyTotalNum  **参数解释**: 容器防火墙累计设置策略条数 **取值范围**: 最小值0，最大值4071095999000
    * autoKillVirusStatus  **参数解释**: 是否开启恶意自动查杀 **取值范围**: - true：是。 - false：否。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vulLibraryUpdateTime' => 'int',
            'protectDays' => 'int',
            'threatLibraryUpdateTime' => 'int',
            'vulDetectedTotalNum' => 'int',
            'baselineDetectedTotalNum' => 'int',
            'fingerScanTotalNum' => 'int',
            'alarmDetectedTotalNum' => 'int',
            'ransomwareAlarmDetectedTotalNum' => 'int',
            'fileAlarmDetectedTotalNum' => 'int',
            'raspAlarmDetectedTotalNum' => 'int',
            'wtpAlarmDetectedTotalNum' => 'int',
            'imageRiskTotalNum' => 'int',
            'containerAlarmTotalNum' => 'int',
            'containerFirewallPolicyTotalNum' => 'int',
            'autoKillVirusStatus' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vulLibraryUpdateTime  **参数解释**: 漏洞库更新时间 **取值范围**: 最小值0，最大值4071095999000
    * protectDays  **参数解释**: 守护天数 **取值范围**: 最小值0，最大值4071095999000
    * threatLibraryUpdateTime  **参数解释**: 病毒库更新时间 **取值范围**: 最小值0，最大值4071095999000
    * vulDetectedTotalNum  **参数解释**: 漏洞累计已检测数量 **取值范围**: 最小值0，最大值4071095999000
    * baselineDetectedTotalNum  **参数解释**: 累计检测基线总数量 **取值范围**: 最小值0，最大值4071095999000
    * fingerScanTotalNum  **参数解释**: 累计扫描指纹数量 **取值范围**: 最小值0，最大值4071095999000
    * alarmDetectedTotalNum  **参数解释**: 入侵检测累计检测告警总数量 **取值范围**: 最小值0，最大值4071095999000
    * ransomwareAlarmDetectedTotalNum  **参数解释**: 累计防御勒索病毒告警次数 **取值范围**: 最小值0，最大值4071095999000
    * fileAlarmDetectedTotalNum  **参数解释**: 文件完整性监控累计检测文件变更告警总数 **取值范围**: 最小值0，最大值4071095999000
    * raspAlarmDetectedTotalNum  **参数解释**: 应用防护累计检测告警总数 **取值范围**: 最小值0，最大值4071095999000
    * wtpAlarmDetectedTotalNum  **参数解释**: 网页防篡改累计抵御网页防篡改次数 **取值范围**: 最小值0，最大值4071095999000
    * imageRiskTotalNum  **参数解释**: 容器镜像安全累计检测风险个数 **取值范围**: 最小值0，最大值4071095999000
    * containerAlarmTotalNum  **参数解释**: 容器安全防护累计检测容器告警个数 **取值范围**: 最小值0，最大值4071095999000
    * containerFirewallPolicyTotalNum  **参数解释**: 容器防火墙累计设置策略条数 **取值范围**: 最小值0，最大值4071095999000
    * autoKillVirusStatus  **参数解释**: 是否开启恶意自动查杀 **取值范围**: - true：是。 - false：否。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vulLibraryUpdateTime' => 'int64',
        'protectDays' => 'int64',
        'threatLibraryUpdateTime' => 'int64',
        'vulDetectedTotalNum' => 'int64',
        'baselineDetectedTotalNum' => 'int64',
        'fingerScanTotalNum' => 'int64',
        'alarmDetectedTotalNum' => 'int64',
        'ransomwareAlarmDetectedTotalNum' => 'int64',
        'fileAlarmDetectedTotalNum' => 'int64',
        'raspAlarmDetectedTotalNum' => 'int64',
        'wtpAlarmDetectedTotalNum' => 'int64',
        'imageRiskTotalNum' => 'int64',
        'containerAlarmTotalNum' => 'int64',
        'containerFirewallPolicyTotalNum' => 'int64',
        'autoKillVirusStatus' => null
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
    * vulLibraryUpdateTime  **参数解释**: 漏洞库更新时间 **取值范围**: 最小值0，最大值4071095999000
    * protectDays  **参数解释**: 守护天数 **取值范围**: 最小值0，最大值4071095999000
    * threatLibraryUpdateTime  **参数解释**: 病毒库更新时间 **取值范围**: 最小值0，最大值4071095999000
    * vulDetectedTotalNum  **参数解释**: 漏洞累计已检测数量 **取值范围**: 最小值0，最大值4071095999000
    * baselineDetectedTotalNum  **参数解释**: 累计检测基线总数量 **取值范围**: 最小值0，最大值4071095999000
    * fingerScanTotalNum  **参数解释**: 累计扫描指纹数量 **取值范围**: 最小值0，最大值4071095999000
    * alarmDetectedTotalNum  **参数解释**: 入侵检测累计检测告警总数量 **取值范围**: 最小值0，最大值4071095999000
    * ransomwareAlarmDetectedTotalNum  **参数解释**: 累计防御勒索病毒告警次数 **取值范围**: 最小值0，最大值4071095999000
    * fileAlarmDetectedTotalNum  **参数解释**: 文件完整性监控累计检测文件变更告警总数 **取值范围**: 最小值0，最大值4071095999000
    * raspAlarmDetectedTotalNum  **参数解释**: 应用防护累计检测告警总数 **取值范围**: 最小值0，最大值4071095999000
    * wtpAlarmDetectedTotalNum  **参数解释**: 网页防篡改累计抵御网页防篡改次数 **取值范围**: 最小值0，最大值4071095999000
    * imageRiskTotalNum  **参数解释**: 容器镜像安全累计检测风险个数 **取值范围**: 最小值0，最大值4071095999000
    * containerAlarmTotalNum  **参数解释**: 容器安全防护累计检测容器告警个数 **取值范围**: 最小值0，最大值4071095999000
    * containerFirewallPolicyTotalNum  **参数解释**: 容器防火墙累计设置策略条数 **取值范围**: 最小值0，最大值4071095999000
    * autoKillVirusStatus  **参数解释**: 是否开启恶意自动查杀 **取值范围**: - true：是。 - false：否。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vulLibraryUpdateTime' => 'vul_library_update_time',
            'protectDays' => 'protect_days',
            'threatLibraryUpdateTime' => 'threat_library_update_time',
            'vulDetectedTotalNum' => 'vul_detected_total_num',
            'baselineDetectedTotalNum' => 'baseline_detected_total_num',
            'fingerScanTotalNum' => 'finger_scan_total_num',
            'alarmDetectedTotalNum' => 'alarm_detected_total_num',
            'ransomwareAlarmDetectedTotalNum' => 'ransomware_alarm_detected_total_num',
            'fileAlarmDetectedTotalNum' => 'file_alarm_detected_total_num',
            'raspAlarmDetectedTotalNum' => 'rasp_alarm_detected_total_num',
            'wtpAlarmDetectedTotalNum' => 'wtp_alarm_detected_total_num',
            'imageRiskTotalNum' => 'image_risk_total_num',
            'containerAlarmTotalNum' => 'container_alarm_total_num',
            'containerFirewallPolicyTotalNum' => 'container_firewall_policy_total_num',
            'autoKillVirusStatus' => 'auto_kill_virus_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vulLibraryUpdateTime  **参数解释**: 漏洞库更新时间 **取值范围**: 最小值0，最大值4071095999000
    * protectDays  **参数解释**: 守护天数 **取值范围**: 最小值0，最大值4071095999000
    * threatLibraryUpdateTime  **参数解释**: 病毒库更新时间 **取值范围**: 最小值0，最大值4071095999000
    * vulDetectedTotalNum  **参数解释**: 漏洞累计已检测数量 **取值范围**: 最小值0，最大值4071095999000
    * baselineDetectedTotalNum  **参数解释**: 累计检测基线总数量 **取值范围**: 最小值0，最大值4071095999000
    * fingerScanTotalNum  **参数解释**: 累计扫描指纹数量 **取值范围**: 最小值0，最大值4071095999000
    * alarmDetectedTotalNum  **参数解释**: 入侵检测累计检测告警总数量 **取值范围**: 最小值0，最大值4071095999000
    * ransomwareAlarmDetectedTotalNum  **参数解释**: 累计防御勒索病毒告警次数 **取值范围**: 最小值0，最大值4071095999000
    * fileAlarmDetectedTotalNum  **参数解释**: 文件完整性监控累计检测文件变更告警总数 **取值范围**: 最小值0，最大值4071095999000
    * raspAlarmDetectedTotalNum  **参数解释**: 应用防护累计检测告警总数 **取值范围**: 最小值0，最大值4071095999000
    * wtpAlarmDetectedTotalNum  **参数解释**: 网页防篡改累计抵御网页防篡改次数 **取值范围**: 最小值0，最大值4071095999000
    * imageRiskTotalNum  **参数解释**: 容器镜像安全累计检测风险个数 **取值范围**: 最小值0，最大值4071095999000
    * containerAlarmTotalNum  **参数解释**: 容器安全防护累计检测容器告警个数 **取值范围**: 最小值0，最大值4071095999000
    * containerFirewallPolicyTotalNum  **参数解释**: 容器防火墙累计设置策略条数 **取值范围**: 最小值0，最大值4071095999000
    * autoKillVirusStatus  **参数解释**: 是否开启恶意自动查杀 **取值范围**: - true：是。 - false：否。
    *
    * @var string[]
    */
    protected static $setters = [
            'vulLibraryUpdateTime' => 'setVulLibraryUpdateTime',
            'protectDays' => 'setProtectDays',
            'threatLibraryUpdateTime' => 'setThreatLibraryUpdateTime',
            'vulDetectedTotalNum' => 'setVulDetectedTotalNum',
            'baselineDetectedTotalNum' => 'setBaselineDetectedTotalNum',
            'fingerScanTotalNum' => 'setFingerScanTotalNum',
            'alarmDetectedTotalNum' => 'setAlarmDetectedTotalNum',
            'ransomwareAlarmDetectedTotalNum' => 'setRansomwareAlarmDetectedTotalNum',
            'fileAlarmDetectedTotalNum' => 'setFileAlarmDetectedTotalNum',
            'raspAlarmDetectedTotalNum' => 'setRaspAlarmDetectedTotalNum',
            'wtpAlarmDetectedTotalNum' => 'setWtpAlarmDetectedTotalNum',
            'imageRiskTotalNum' => 'setImageRiskTotalNum',
            'containerAlarmTotalNum' => 'setContainerAlarmTotalNum',
            'containerFirewallPolicyTotalNum' => 'setContainerFirewallPolicyTotalNum',
            'autoKillVirusStatus' => 'setAutoKillVirusStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vulLibraryUpdateTime  **参数解释**: 漏洞库更新时间 **取值范围**: 最小值0，最大值4071095999000
    * protectDays  **参数解释**: 守护天数 **取值范围**: 最小值0，最大值4071095999000
    * threatLibraryUpdateTime  **参数解释**: 病毒库更新时间 **取值范围**: 最小值0，最大值4071095999000
    * vulDetectedTotalNum  **参数解释**: 漏洞累计已检测数量 **取值范围**: 最小值0，最大值4071095999000
    * baselineDetectedTotalNum  **参数解释**: 累计检测基线总数量 **取值范围**: 最小值0，最大值4071095999000
    * fingerScanTotalNum  **参数解释**: 累计扫描指纹数量 **取值范围**: 最小值0，最大值4071095999000
    * alarmDetectedTotalNum  **参数解释**: 入侵检测累计检测告警总数量 **取值范围**: 最小值0，最大值4071095999000
    * ransomwareAlarmDetectedTotalNum  **参数解释**: 累计防御勒索病毒告警次数 **取值范围**: 最小值0，最大值4071095999000
    * fileAlarmDetectedTotalNum  **参数解释**: 文件完整性监控累计检测文件变更告警总数 **取值范围**: 最小值0，最大值4071095999000
    * raspAlarmDetectedTotalNum  **参数解释**: 应用防护累计检测告警总数 **取值范围**: 最小值0，最大值4071095999000
    * wtpAlarmDetectedTotalNum  **参数解释**: 网页防篡改累计抵御网页防篡改次数 **取值范围**: 最小值0，最大值4071095999000
    * imageRiskTotalNum  **参数解释**: 容器镜像安全累计检测风险个数 **取值范围**: 最小值0，最大值4071095999000
    * containerAlarmTotalNum  **参数解释**: 容器安全防护累计检测容器告警个数 **取值范围**: 最小值0，最大值4071095999000
    * containerFirewallPolicyTotalNum  **参数解释**: 容器防火墙累计设置策略条数 **取值范围**: 最小值0，最大值4071095999000
    * autoKillVirusStatus  **参数解释**: 是否开启恶意自动查杀 **取值范围**: - true：是。 - false：否。
    *
    * @var string[]
    */
    protected static $getters = [
            'vulLibraryUpdateTime' => 'getVulLibraryUpdateTime',
            'protectDays' => 'getProtectDays',
            'threatLibraryUpdateTime' => 'getThreatLibraryUpdateTime',
            'vulDetectedTotalNum' => 'getVulDetectedTotalNum',
            'baselineDetectedTotalNum' => 'getBaselineDetectedTotalNum',
            'fingerScanTotalNum' => 'getFingerScanTotalNum',
            'alarmDetectedTotalNum' => 'getAlarmDetectedTotalNum',
            'ransomwareAlarmDetectedTotalNum' => 'getRansomwareAlarmDetectedTotalNum',
            'fileAlarmDetectedTotalNum' => 'getFileAlarmDetectedTotalNum',
            'raspAlarmDetectedTotalNum' => 'getRaspAlarmDetectedTotalNum',
            'wtpAlarmDetectedTotalNum' => 'getWtpAlarmDetectedTotalNum',
            'imageRiskTotalNum' => 'getImageRiskTotalNum',
            'containerAlarmTotalNum' => 'getContainerAlarmTotalNum',
            'containerFirewallPolicyTotalNum' => 'getContainerFirewallPolicyTotalNum',
            'autoKillVirusStatus' => 'getAutoKillVirusStatus'
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
        $this->container['vulLibraryUpdateTime'] = isset($data['vulLibraryUpdateTime']) ? $data['vulLibraryUpdateTime'] : null;
        $this->container['protectDays'] = isset($data['protectDays']) ? $data['protectDays'] : null;
        $this->container['threatLibraryUpdateTime'] = isset($data['threatLibraryUpdateTime']) ? $data['threatLibraryUpdateTime'] : null;
        $this->container['vulDetectedTotalNum'] = isset($data['vulDetectedTotalNum']) ? $data['vulDetectedTotalNum'] : null;
        $this->container['baselineDetectedTotalNum'] = isset($data['baselineDetectedTotalNum']) ? $data['baselineDetectedTotalNum'] : null;
        $this->container['fingerScanTotalNum'] = isset($data['fingerScanTotalNum']) ? $data['fingerScanTotalNum'] : null;
        $this->container['alarmDetectedTotalNum'] = isset($data['alarmDetectedTotalNum']) ? $data['alarmDetectedTotalNum'] : null;
        $this->container['ransomwareAlarmDetectedTotalNum'] = isset($data['ransomwareAlarmDetectedTotalNum']) ? $data['ransomwareAlarmDetectedTotalNum'] : null;
        $this->container['fileAlarmDetectedTotalNum'] = isset($data['fileAlarmDetectedTotalNum']) ? $data['fileAlarmDetectedTotalNum'] : null;
        $this->container['raspAlarmDetectedTotalNum'] = isset($data['raspAlarmDetectedTotalNum']) ? $data['raspAlarmDetectedTotalNum'] : null;
        $this->container['wtpAlarmDetectedTotalNum'] = isset($data['wtpAlarmDetectedTotalNum']) ? $data['wtpAlarmDetectedTotalNum'] : null;
        $this->container['imageRiskTotalNum'] = isset($data['imageRiskTotalNum']) ? $data['imageRiskTotalNum'] : null;
        $this->container['containerAlarmTotalNum'] = isset($data['containerAlarmTotalNum']) ? $data['containerAlarmTotalNum'] : null;
        $this->container['containerFirewallPolicyTotalNum'] = isset($data['containerFirewallPolicyTotalNum']) ? $data['containerFirewallPolicyTotalNum'] : null;
        $this->container['autoKillVirusStatus'] = isset($data['autoKillVirusStatus']) ? $data['autoKillVirusStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['vulLibraryUpdateTime']) && ($this->container['vulLibraryUpdateTime'] > 4071095999000)) {
                $invalidProperties[] = "invalid value for 'vulLibraryUpdateTime', must be smaller than or equal to 4071095999000.";
            }
            if (!is_null($this->container['vulLibraryUpdateTime']) && ($this->container['vulLibraryUpdateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'vulLibraryUpdateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['protectDays']) && ($this->container['protectDays'] > 4071095999000)) {
                $invalidProperties[] = "invalid value for 'protectDays', must be smaller than or equal to 4071095999000.";
            }
            if (!is_null($this->container['protectDays']) && ($this->container['protectDays'] < 0)) {
                $invalidProperties[] = "invalid value for 'protectDays', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['threatLibraryUpdateTime']) && ($this->container['threatLibraryUpdateTime'] > 4071095999000)) {
                $invalidProperties[] = "invalid value for 'threatLibraryUpdateTime', must be smaller than or equal to 4071095999000.";
            }
            if (!is_null($this->container['threatLibraryUpdateTime']) && ($this->container['threatLibraryUpdateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'threatLibraryUpdateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vulDetectedTotalNum']) && ($this->container['vulDetectedTotalNum'] > 4071095999000)) {
                $invalidProperties[] = "invalid value for 'vulDetectedTotalNum', must be smaller than or equal to 4071095999000.";
            }
            if (!is_null($this->container['vulDetectedTotalNum']) && ($this->container['vulDetectedTotalNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'vulDetectedTotalNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['baselineDetectedTotalNum']) && ($this->container['baselineDetectedTotalNum'] > 4071095999000)) {
                $invalidProperties[] = "invalid value for 'baselineDetectedTotalNum', must be smaller than or equal to 4071095999000.";
            }
            if (!is_null($this->container['baselineDetectedTotalNum']) && ($this->container['baselineDetectedTotalNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'baselineDetectedTotalNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fingerScanTotalNum']) && ($this->container['fingerScanTotalNum'] > 4071095999000)) {
                $invalidProperties[] = "invalid value for 'fingerScanTotalNum', must be smaller than or equal to 4071095999000.";
            }
            if (!is_null($this->container['fingerScanTotalNum']) && ($this->container['fingerScanTotalNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'fingerScanTotalNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['alarmDetectedTotalNum']) && ($this->container['alarmDetectedTotalNum'] > 4071095999000)) {
                $invalidProperties[] = "invalid value for 'alarmDetectedTotalNum', must be smaller than or equal to 4071095999000.";
            }
            if (!is_null($this->container['alarmDetectedTotalNum']) && ($this->container['alarmDetectedTotalNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'alarmDetectedTotalNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ransomwareAlarmDetectedTotalNum']) && ($this->container['ransomwareAlarmDetectedTotalNum'] > 4071095999000)) {
                $invalidProperties[] = "invalid value for 'ransomwareAlarmDetectedTotalNum', must be smaller than or equal to 4071095999000.";
            }
            if (!is_null($this->container['ransomwareAlarmDetectedTotalNum']) && ($this->container['ransomwareAlarmDetectedTotalNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'ransomwareAlarmDetectedTotalNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fileAlarmDetectedTotalNum']) && ($this->container['fileAlarmDetectedTotalNum'] > 4071095999000)) {
                $invalidProperties[] = "invalid value for 'fileAlarmDetectedTotalNum', must be smaller than or equal to 4071095999000.";
            }
            if (!is_null($this->container['fileAlarmDetectedTotalNum']) && ($this->container['fileAlarmDetectedTotalNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'fileAlarmDetectedTotalNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['raspAlarmDetectedTotalNum']) && ($this->container['raspAlarmDetectedTotalNum'] > 4071095999000)) {
                $invalidProperties[] = "invalid value for 'raspAlarmDetectedTotalNum', must be smaller than or equal to 4071095999000.";
            }
            if (!is_null($this->container['raspAlarmDetectedTotalNum']) && ($this->container['raspAlarmDetectedTotalNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'raspAlarmDetectedTotalNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['wtpAlarmDetectedTotalNum']) && ($this->container['wtpAlarmDetectedTotalNum'] > 4071095999000)) {
                $invalidProperties[] = "invalid value for 'wtpAlarmDetectedTotalNum', must be smaller than or equal to 4071095999000.";
            }
            if (!is_null($this->container['wtpAlarmDetectedTotalNum']) && ($this->container['wtpAlarmDetectedTotalNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'wtpAlarmDetectedTotalNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageRiskTotalNum']) && ($this->container['imageRiskTotalNum'] > 4071095999000)) {
                $invalidProperties[] = "invalid value for 'imageRiskTotalNum', must be smaller than or equal to 4071095999000.";
            }
            if (!is_null($this->container['imageRiskTotalNum']) && ($this->container['imageRiskTotalNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'imageRiskTotalNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['containerAlarmTotalNum']) && ($this->container['containerAlarmTotalNum'] > 4071095999000)) {
                $invalidProperties[] = "invalid value for 'containerAlarmTotalNum', must be smaller than or equal to 4071095999000.";
            }
            if (!is_null($this->container['containerAlarmTotalNum']) && ($this->container['containerAlarmTotalNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'containerAlarmTotalNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['containerFirewallPolicyTotalNum']) && ($this->container['containerFirewallPolicyTotalNum'] > 4071095999000)) {
                $invalidProperties[] = "invalid value for 'containerFirewallPolicyTotalNum', must be smaller than or equal to 4071095999000.";
            }
            if (!is_null($this->container['containerFirewallPolicyTotalNum']) && ($this->container['containerFirewallPolicyTotalNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'containerFirewallPolicyTotalNum', must be bigger than or equal to 0.";
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
    * Gets vulLibraryUpdateTime
    *  **参数解释**: 漏洞库更新时间 **取值范围**: 最小值0，最大值4071095999000
    *
    * @return int|null
    */
    public function getVulLibraryUpdateTime()
    {
        return $this->container['vulLibraryUpdateTime'];
    }

    /**
    * Sets vulLibraryUpdateTime
    *
    * @param int|null $vulLibraryUpdateTime **参数解释**: 漏洞库更新时间 **取值范围**: 最小值0，最大值4071095999000
    *
    * @return $this
    */
    public function setVulLibraryUpdateTime($vulLibraryUpdateTime)
    {
        $this->container['vulLibraryUpdateTime'] = $vulLibraryUpdateTime;
        return $this;
    }

    /**
    * Gets protectDays
    *  **参数解释**: 守护天数 **取值范围**: 最小值0，最大值4071095999000
    *
    * @return int|null
    */
    public function getProtectDays()
    {
        return $this->container['protectDays'];
    }

    /**
    * Sets protectDays
    *
    * @param int|null $protectDays **参数解释**: 守护天数 **取值范围**: 最小值0，最大值4071095999000
    *
    * @return $this
    */
    public function setProtectDays($protectDays)
    {
        $this->container['protectDays'] = $protectDays;
        return $this;
    }

    /**
    * Gets threatLibraryUpdateTime
    *  **参数解释**: 病毒库更新时间 **取值范围**: 最小值0，最大值4071095999000
    *
    * @return int|null
    */
    public function getThreatLibraryUpdateTime()
    {
        return $this->container['threatLibraryUpdateTime'];
    }

    /**
    * Sets threatLibraryUpdateTime
    *
    * @param int|null $threatLibraryUpdateTime **参数解释**: 病毒库更新时间 **取值范围**: 最小值0，最大值4071095999000
    *
    * @return $this
    */
    public function setThreatLibraryUpdateTime($threatLibraryUpdateTime)
    {
        $this->container['threatLibraryUpdateTime'] = $threatLibraryUpdateTime;
        return $this;
    }

    /**
    * Gets vulDetectedTotalNum
    *  **参数解释**: 漏洞累计已检测数量 **取值范围**: 最小值0，最大值4071095999000
    *
    * @return int|null
    */
    public function getVulDetectedTotalNum()
    {
        return $this->container['vulDetectedTotalNum'];
    }

    /**
    * Sets vulDetectedTotalNum
    *
    * @param int|null $vulDetectedTotalNum **参数解释**: 漏洞累计已检测数量 **取值范围**: 最小值0，最大值4071095999000
    *
    * @return $this
    */
    public function setVulDetectedTotalNum($vulDetectedTotalNum)
    {
        $this->container['vulDetectedTotalNum'] = $vulDetectedTotalNum;
        return $this;
    }

    /**
    * Gets baselineDetectedTotalNum
    *  **参数解释**: 累计检测基线总数量 **取值范围**: 最小值0，最大值4071095999000
    *
    * @return int|null
    */
    public function getBaselineDetectedTotalNum()
    {
        return $this->container['baselineDetectedTotalNum'];
    }

    /**
    * Sets baselineDetectedTotalNum
    *
    * @param int|null $baselineDetectedTotalNum **参数解释**: 累计检测基线总数量 **取值范围**: 最小值0，最大值4071095999000
    *
    * @return $this
    */
    public function setBaselineDetectedTotalNum($baselineDetectedTotalNum)
    {
        $this->container['baselineDetectedTotalNum'] = $baselineDetectedTotalNum;
        return $this;
    }

    /**
    * Gets fingerScanTotalNum
    *  **参数解释**: 累计扫描指纹数量 **取值范围**: 最小值0，最大值4071095999000
    *
    * @return int|null
    */
    public function getFingerScanTotalNum()
    {
        return $this->container['fingerScanTotalNum'];
    }

    /**
    * Sets fingerScanTotalNum
    *
    * @param int|null $fingerScanTotalNum **参数解释**: 累计扫描指纹数量 **取值范围**: 最小值0，最大值4071095999000
    *
    * @return $this
    */
    public function setFingerScanTotalNum($fingerScanTotalNum)
    {
        $this->container['fingerScanTotalNum'] = $fingerScanTotalNum;
        return $this;
    }

    /**
    * Gets alarmDetectedTotalNum
    *  **参数解释**: 入侵检测累计检测告警总数量 **取值范围**: 最小值0，最大值4071095999000
    *
    * @return int|null
    */
    public function getAlarmDetectedTotalNum()
    {
        return $this->container['alarmDetectedTotalNum'];
    }

    /**
    * Sets alarmDetectedTotalNum
    *
    * @param int|null $alarmDetectedTotalNum **参数解释**: 入侵检测累计检测告警总数量 **取值范围**: 最小值0，最大值4071095999000
    *
    * @return $this
    */
    public function setAlarmDetectedTotalNum($alarmDetectedTotalNum)
    {
        $this->container['alarmDetectedTotalNum'] = $alarmDetectedTotalNum;
        return $this;
    }

    /**
    * Gets ransomwareAlarmDetectedTotalNum
    *  **参数解释**: 累计防御勒索病毒告警次数 **取值范围**: 最小值0，最大值4071095999000
    *
    * @return int|null
    */
    public function getRansomwareAlarmDetectedTotalNum()
    {
        return $this->container['ransomwareAlarmDetectedTotalNum'];
    }

    /**
    * Sets ransomwareAlarmDetectedTotalNum
    *
    * @param int|null $ransomwareAlarmDetectedTotalNum **参数解释**: 累计防御勒索病毒告警次数 **取值范围**: 最小值0，最大值4071095999000
    *
    * @return $this
    */
    public function setRansomwareAlarmDetectedTotalNum($ransomwareAlarmDetectedTotalNum)
    {
        $this->container['ransomwareAlarmDetectedTotalNum'] = $ransomwareAlarmDetectedTotalNum;
        return $this;
    }

    /**
    * Gets fileAlarmDetectedTotalNum
    *  **参数解释**: 文件完整性监控累计检测文件变更告警总数 **取值范围**: 最小值0，最大值4071095999000
    *
    * @return int|null
    */
    public function getFileAlarmDetectedTotalNum()
    {
        return $this->container['fileAlarmDetectedTotalNum'];
    }

    /**
    * Sets fileAlarmDetectedTotalNum
    *
    * @param int|null $fileAlarmDetectedTotalNum **参数解释**: 文件完整性监控累计检测文件变更告警总数 **取值范围**: 最小值0，最大值4071095999000
    *
    * @return $this
    */
    public function setFileAlarmDetectedTotalNum($fileAlarmDetectedTotalNum)
    {
        $this->container['fileAlarmDetectedTotalNum'] = $fileAlarmDetectedTotalNum;
        return $this;
    }

    /**
    * Gets raspAlarmDetectedTotalNum
    *  **参数解释**: 应用防护累计检测告警总数 **取值范围**: 最小值0，最大值4071095999000
    *
    * @return int|null
    */
    public function getRaspAlarmDetectedTotalNum()
    {
        return $this->container['raspAlarmDetectedTotalNum'];
    }

    /**
    * Sets raspAlarmDetectedTotalNum
    *
    * @param int|null $raspAlarmDetectedTotalNum **参数解释**: 应用防护累计检测告警总数 **取值范围**: 最小值0，最大值4071095999000
    *
    * @return $this
    */
    public function setRaspAlarmDetectedTotalNum($raspAlarmDetectedTotalNum)
    {
        $this->container['raspAlarmDetectedTotalNum'] = $raspAlarmDetectedTotalNum;
        return $this;
    }

    /**
    * Gets wtpAlarmDetectedTotalNum
    *  **参数解释**: 网页防篡改累计抵御网页防篡改次数 **取值范围**: 最小值0，最大值4071095999000
    *
    * @return int|null
    */
    public function getWtpAlarmDetectedTotalNum()
    {
        return $this->container['wtpAlarmDetectedTotalNum'];
    }

    /**
    * Sets wtpAlarmDetectedTotalNum
    *
    * @param int|null $wtpAlarmDetectedTotalNum **参数解释**: 网页防篡改累计抵御网页防篡改次数 **取值范围**: 最小值0，最大值4071095999000
    *
    * @return $this
    */
    public function setWtpAlarmDetectedTotalNum($wtpAlarmDetectedTotalNum)
    {
        $this->container['wtpAlarmDetectedTotalNum'] = $wtpAlarmDetectedTotalNum;
        return $this;
    }

    /**
    * Gets imageRiskTotalNum
    *  **参数解释**: 容器镜像安全累计检测风险个数 **取值范围**: 最小值0，最大值4071095999000
    *
    * @return int|null
    */
    public function getImageRiskTotalNum()
    {
        return $this->container['imageRiskTotalNum'];
    }

    /**
    * Sets imageRiskTotalNum
    *
    * @param int|null $imageRiskTotalNum **参数解释**: 容器镜像安全累计检测风险个数 **取值范围**: 最小值0，最大值4071095999000
    *
    * @return $this
    */
    public function setImageRiskTotalNum($imageRiskTotalNum)
    {
        $this->container['imageRiskTotalNum'] = $imageRiskTotalNum;
        return $this;
    }

    /**
    * Gets containerAlarmTotalNum
    *  **参数解释**: 容器安全防护累计检测容器告警个数 **取值范围**: 最小值0，最大值4071095999000
    *
    * @return int|null
    */
    public function getContainerAlarmTotalNum()
    {
        return $this->container['containerAlarmTotalNum'];
    }

    /**
    * Sets containerAlarmTotalNum
    *
    * @param int|null $containerAlarmTotalNum **参数解释**: 容器安全防护累计检测容器告警个数 **取值范围**: 最小值0，最大值4071095999000
    *
    * @return $this
    */
    public function setContainerAlarmTotalNum($containerAlarmTotalNum)
    {
        $this->container['containerAlarmTotalNum'] = $containerAlarmTotalNum;
        return $this;
    }

    /**
    * Gets containerFirewallPolicyTotalNum
    *  **参数解释**: 容器防火墙累计设置策略条数 **取值范围**: 最小值0，最大值4071095999000
    *
    * @return int|null
    */
    public function getContainerFirewallPolicyTotalNum()
    {
        return $this->container['containerFirewallPolicyTotalNum'];
    }

    /**
    * Sets containerFirewallPolicyTotalNum
    *
    * @param int|null $containerFirewallPolicyTotalNum **参数解释**: 容器防火墙累计设置策略条数 **取值范围**: 最小值0，最大值4071095999000
    *
    * @return $this
    */
    public function setContainerFirewallPolicyTotalNum($containerFirewallPolicyTotalNum)
    {
        $this->container['containerFirewallPolicyTotalNum'] = $containerFirewallPolicyTotalNum;
        return $this;
    }

    /**
    * Gets autoKillVirusStatus
    *  **参数解释**: 是否开启恶意自动查杀 **取值范围**: - true：是。 - false：否。
    *
    * @return bool|null
    */
    public function getAutoKillVirusStatus()
    {
        return $this->container['autoKillVirusStatus'];
    }

    /**
    * Sets autoKillVirusStatus
    *
    * @param bool|null $autoKillVirusStatus **参数解释**: 是否开启恶意自动查杀 **取值范围**: - true：是。 - false：否。
    *
    * @return $this
    */
    public function setAutoKillVirusStatus($autoKillVirusStatus)
    {
        $this->container['autoKillVirusStatus'] = $autoKillVirusStatus;
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

