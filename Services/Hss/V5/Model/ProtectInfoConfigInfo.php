<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProtectInfoConfigInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProtectInfo_config_info';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * unUpgradeAgentHostNum  **参数解释**: 未升级agent的主机数 **取值范围**: 最小值0，最大值2147483647
    * autoUpgradeAgentEnable  **参数解释**: 是否开启自动升级 **取值范围**:   - true：是。   - false：否。
    * userOpenAutoUpgradeAgentRate  **参数解释**: 开启自动升级的用户率 **取值范围**: 最小值0，最大值1
    * unOpenRansomwarePolicyHostNum  **参数解释**: 未开启勒索策略的主机数 **取值范围**: 最小值0，最大值2147483647
    * toBeOptimizedRansomwarePolicyHostNum  **参数解释**: 未待开启（待优化）勒索病毒防护的主机数 **取值范围**: 最小值0，最大值2147483647
    * userOpenRansomwareBackupRate  **参数解释**: 开启勒索备份的用户率 **取值范围**: 最小值0，最大值1
    * unOpenTwoFactorLoginHostNum  **参数解释**: 未开启双因子的主机数 **取值范围**: 最小值0，最大值2147483647
    * userOpenTwoFactorLoginRate  **参数解释**: 开启双因子的用户率 **取值范围**: 最小值0，最大值1
    * unVirusKillHostNum  **参数解释**: 未执行病毒查杀的主机数 **取值范围**: 最小值0，最大值2147483647
    * virusKillHostNum  **参数解释**: 执行过病毒查杀的主机数 **取值范围**: 最小值0，最大值2147483647
    * malwareCollectEnable  **参数解释**: 是否开启云查 **取值范围**:   - true：是。   - false：否。
    * userOpenMalwareCollectRate  **参数解释**: 开启云查的用户率 **取值范围**: 最小值0，最大值1
    * containerImageScanFreq  **参数解释**: 容器镜像扫描频率 **取值范围**: 最小值0，最大值128
    * containerImageScanFreqBeatRate  **参数解释**: 容器镜像扫描频率击败的用户率 **取值范围**: 最小值0，最大值1
    * needOpenConfigNum  **参数解释**: 用户开启的配置数量 **取值范围**: 最小值0，最大值2147483647
    * containerImageScanTotalNum  **参数解释**: 扫描的镜像数 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'unUpgradeAgentHostNum' => 'int',
            'autoUpgradeAgentEnable' => 'bool',
            'userOpenAutoUpgradeAgentRate' => 'float',
            'unOpenRansomwarePolicyHostNum' => 'int',
            'toBeOptimizedRansomwarePolicyHostNum' => 'int',
            'userOpenRansomwareBackupRate' => 'float',
            'unOpenTwoFactorLoginHostNum' => 'int',
            'userOpenTwoFactorLoginRate' => 'float',
            'unVirusKillHostNum' => 'int',
            'virusKillHostNum' => 'int',
            'malwareCollectEnable' => 'bool',
            'userOpenMalwareCollectRate' => 'float',
            'containerImageScanFreq' => 'float',
            'containerImageScanFreqBeatRate' => 'float',
            'needOpenConfigNum' => 'int',
            'containerImageScanTotalNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * unUpgradeAgentHostNum  **参数解释**: 未升级agent的主机数 **取值范围**: 最小值0，最大值2147483647
    * autoUpgradeAgentEnable  **参数解释**: 是否开启自动升级 **取值范围**:   - true：是。   - false：否。
    * userOpenAutoUpgradeAgentRate  **参数解释**: 开启自动升级的用户率 **取值范围**: 最小值0，最大值1
    * unOpenRansomwarePolicyHostNum  **参数解释**: 未开启勒索策略的主机数 **取值范围**: 最小值0，最大值2147483647
    * toBeOptimizedRansomwarePolicyHostNum  **参数解释**: 未待开启（待优化）勒索病毒防护的主机数 **取值范围**: 最小值0，最大值2147483647
    * userOpenRansomwareBackupRate  **参数解释**: 开启勒索备份的用户率 **取值范围**: 最小值0，最大值1
    * unOpenTwoFactorLoginHostNum  **参数解释**: 未开启双因子的主机数 **取值范围**: 最小值0，最大值2147483647
    * userOpenTwoFactorLoginRate  **参数解释**: 开启双因子的用户率 **取值范围**: 最小值0，最大值1
    * unVirusKillHostNum  **参数解释**: 未执行病毒查杀的主机数 **取值范围**: 最小值0，最大值2147483647
    * virusKillHostNum  **参数解释**: 执行过病毒查杀的主机数 **取值范围**: 最小值0，最大值2147483647
    * malwareCollectEnable  **参数解释**: 是否开启云查 **取值范围**:   - true：是。   - false：否。
    * userOpenMalwareCollectRate  **参数解释**: 开启云查的用户率 **取值范围**: 最小值0，最大值1
    * containerImageScanFreq  **参数解释**: 容器镜像扫描频率 **取值范围**: 最小值0，最大值128
    * containerImageScanFreqBeatRate  **参数解释**: 容器镜像扫描频率击败的用户率 **取值范围**: 最小值0，最大值1
    * needOpenConfigNum  **参数解释**: 用户开启的配置数量 **取值范围**: 最小值0，最大值2147483647
    * containerImageScanTotalNum  **参数解释**: 扫描的镜像数 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'unUpgradeAgentHostNum' => 'int32',
        'autoUpgradeAgentEnable' => null,
        'userOpenAutoUpgradeAgentRate' => 'float',
        'unOpenRansomwarePolicyHostNum' => 'int32',
        'toBeOptimizedRansomwarePolicyHostNum' => 'int32',
        'userOpenRansomwareBackupRate' => 'float',
        'unOpenTwoFactorLoginHostNum' => 'int32',
        'userOpenTwoFactorLoginRate' => 'float',
        'unVirusKillHostNum' => 'int32',
        'virusKillHostNum' => 'int32',
        'malwareCollectEnable' => null,
        'userOpenMalwareCollectRate' => 'float',
        'containerImageScanFreq' => 'float',
        'containerImageScanFreqBeatRate' => 'float',
        'needOpenConfigNum' => 'int32',
        'containerImageScanTotalNum' => 'int64'
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
    * unUpgradeAgentHostNum  **参数解释**: 未升级agent的主机数 **取值范围**: 最小值0，最大值2147483647
    * autoUpgradeAgentEnable  **参数解释**: 是否开启自动升级 **取值范围**:   - true：是。   - false：否。
    * userOpenAutoUpgradeAgentRate  **参数解释**: 开启自动升级的用户率 **取值范围**: 最小值0，最大值1
    * unOpenRansomwarePolicyHostNum  **参数解释**: 未开启勒索策略的主机数 **取值范围**: 最小值0，最大值2147483647
    * toBeOptimizedRansomwarePolicyHostNum  **参数解释**: 未待开启（待优化）勒索病毒防护的主机数 **取值范围**: 最小值0，最大值2147483647
    * userOpenRansomwareBackupRate  **参数解释**: 开启勒索备份的用户率 **取值范围**: 最小值0，最大值1
    * unOpenTwoFactorLoginHostNum  **参数解释**: 未开启双因子的主机数 **取值范围**: 最小值0，最大值2147483647
    * userOpenTwoFactorLoginRate  **参数解释**: 开启双因子的用户率 **取值范围**: 最小值0，最大值1
    * unVirusKillHostNum  **参数解释**: 未执行病毒查杀的主机数 **取值范围**: 最小值0，最大值2147483647
    * virusKillHostNum  **参数解释**: 执行过病毒查杀的主机数 **取值范围**: 最小值0，最大值2147483647
    * malwareCollectEnable  **参数解释**: 是否开启云查 **取值范围**:   - true：是。   - false：否。
    * userOpenMalwareCollectRate  **参数解释**: 开启云查的用户率 **取值范围**: 最小值0，最大值1
    * containerImageScanFreq  **参数解释**: 容器镜像扫描频率 **取值范围**: 最小值0，最大值128
    * containerImageScanFreqBeatRate  **参数解释**: 容器镜像扫描频率击败的用户率 **取值范围**: 最小值0，最大值1
    * needOpenConfigNum  **参数解释**: 用户开启的配置数量 **取值范围**: 最小值0，最大值2147483647
    * containerImageScanTotalNum  **参数解释**: 扫描的镜像数 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'unUpgradeAgentHostNum' => 'un_upgrade_agent_host_num',
            'autoUpgradeAgentEnable' => 'auto_upgrade_agent_enable',
            'userOpenAutoUpgradeAgentRate' => 'user_open_auto_upgrade_agent_rate',
            'unOpenRansomwarePolicyHostNum' => 'un_open_ransomware_policy_host_num',
            'toBeOptimizedRansomwarePolicyHostNum' => 'to_be_optimized_ransomware_policy_host_num',
            'userOpenRansomwareBackupRate' => 'user_open_ransomware_backup_rate',
            'unOpenTwoFactorLoginHostNum' => 'un_open_two_factor_login_host_num',
            'userOpenTwoFactorLoginRate' => 'user_open_two_factor_login_rate',
            'unVirusKillHostNum' => 'un_virus_kill_host_num',
            'virusKillHostNum' => 'virus_kill_host_num',
            'malwareCollectEnable' => 'malware_collect_enable',
            'userOpenMalwareCollectRate' => 'user_open_malware_collect_rate',
            'containerImageScanFreq' => 'container_image_scan_freq',
            'containerImageScanFreqBeatRate' => 'container_image_scan_freq_beat_rate',
            'needOpenConfigNum' => 'need_open_config_num',
            'containerImageScanTotalNum' => 'container_image_scan_total_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * unUpgradeAgentHostNum  **参数解释**: 未升级agent的主机数 **取值范围**: 最小值0，最大值2147483647
    * autoUpgradeAgentEnable  **参数解释**: 是否开启自动升级 **取值范围**:   - true：是。   - false：否。
    * userOpenAutoUpgradeAgentRate  **参数解释**: 开启自动升级的用户率 **取值范围**: 最小值0，最大值1
    * unOpenRansomwarePolicyHostNum  **参数解释**: 未开启勒索策略的主机数 **取值范围**: 最小值0，最大值2147483647
    * toBeOptimizedRansomwarePolicyHostNum  **参数解释**: 未待开启（待优化）勒索病毒防护的主机数 **取值范围**: 最小值0，最大值2147483647
    * userOpenRansomwareBackupRate  **参数解释**: 开启勒索备份的用户率 **取值范围**: 最小值0，最大值1
    * unOpenTwoFactorLoginHostNum  **参数解释**: 未开启双因子的主机数 **取值范围**: 最小值0，最大值2147483647
    * userOpenTwoFactorLoginRate  **参数解释**: 开启双因子的用户率 **取值范围**: 最小值0，最大值1
    * unVirusKillHostNum  **参数解释**: 未执行病毒查杀的主机数 **取值范围**: 最小值0，最大值2147483647
    * virusKillHostNum  **参数解释**: 执行过病毒查杀的主机数 **取值范围**: 最小值0，最大值2147483647
    * malwareCollectEnable  **参数解释**: 是否开启云查 **取值范围**:   - true：是。   - false：否。
    * userOpenMalwareCollectRate  **参数解释**: 开启云查的用户率 **取值范围**: 最小值0，最大值1
    * containerImageScanFreq  **参数解释**: 容器镜像扫描频率 **取值范围**: 最小值0，最大值128
    * containerImageScanFreqBeatRate  **参数解释**: 容器镜像扫描频率击败的用户率 **取值范围**: 最小值0，最大值1
    * needOpenConfigNum  **参数解释**: 用户开启的配置数量 **取值范围**: 最小值0，最大值2147483647
    * containerImageScanTotalNum  **参数解释**: 扫描的镜像数 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $setters = [
            'unUpgradeAgentHostNum' => 'setUnUpgradeAgentHostNum',
            'autoUpgradeAgentEnable' => 'setAutoUpgradeAgentEnable',
            'userOpenAutoUpgradeAgentRate' => 'setUserOpenAutoUpgradeAgentRate',
            'unOpenRansomwarePolicyHostNum' => 'setUnOpenRansomwarePolicyHostNum',
            'toBeOptimizedRansomwarePolicyHostNum' => 'setToBeOptimizedRansomwarePolicyHostNum',
            'userOpenRansomwareBackupRate' => 'setUserOpenRansomwareBackupRate',
            'unOpenTwoFactorLoginHostNum' => 'setUnOpenTwoFactorLoginHostNum',
            'userOpenTwoFactorLoginRate' => 'setUserOpenTwoFactorLoginRate',
            'unVirusKillHostNum' => 'setUnVirusKillHostNum',
            'virusKillHostNum' => 'setVirusKillHostNum',
            'malwareCollectEnable' => 'setMalwareCollectEnable',
            'userOpenMalwareCollectRate' => 'setUserOpenMalwareCollectRate',
            'containerImageScanFreq' => 'setContainerImageScanFreq',
            'containerImageScanFreqBeatRate' => 'setContainerImageScanFreqBeatRate',
            'needOpenConfigNum' => 'setNeedOpenConfigNum',
            'containerImageScanTotalNum' => 'setContainerImageScanTotalNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * unUpgradeAgentHostNum  **参数解释**: 未升级agent的主机数 **取值范围**: 最小值0，最大值2147483647
    * autoUpgradeAgentEnable  **参数解释**: 是否开启自动升级 **取值范围**:   - true：是。   - false：否。
    * userOpenAutoUpgradeAgentRate  **参数解释**: 开启自动升级的用户率 **取值范围**: 最小值0，最大值1
    * unOpenRansomwarePolicyHostNum  **参数解释**: 未开启勒索策略的主机数 **取值范围**: 最小值0，最大值2147483647
    * toBeOptimizedRansomwarePolicyHostNum  **参数解释**: 未待开启（待优化）勒索病毒防护的主机数 **取值范围**: 最小值0，最大值2147483647
    * userOpenRansomwareBackupRate  **参数解释**: 开启勒索备份的用户率 **取值范围**: 最小值0，最大值1
    * unOpenTwoFactorLoginHostNum  **参数解释**: 未开启双因子的主机数 **取值范围**: 最小值0，最大值2147483647
    * userOpenTwoFactorLoginRate  **参数解释**: 开启双因子的用户率 **取值范围**: 最小值0，最大值1
    * unVirusKillHostNum  **参数解释**: 未执行病毒查杀的主机数 **取值范围**: 最小值0，最大值2147483647
    * virusKillHostNum  **参数解释**: 执行过病毒查杀的主机数 **取值范围**: 最小值0，最大值2147483647
    * malwareCollectEnable  **参数解释**: 是否开启云查 **取值范围**:   - true：是。   - false：否。
    * userOpenMalwareCollectRate  **参数解释**: 开启云查的用户率 **取值范围**: 最小值0，最大值1
    * containerImageScanFreq  **参数解释**: 容器镜像扫描频率 **取值范围**: 最小值0，最大值128
    * containerImageScanFreqBeatRate  **参数解释**: 容器镜像扫描频率击败的用户率 **取值范围**: 最小值0，最大值1
    * needOpenConfigNum  **参数解释**: 用户开启的配置数量 **取值范围**: 最小值0，最大值2147483647
    * containerImageScanTotalNum  **参数解释**: 扫描的镜像数 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $getters = [
            'unUpgradeAgentHostNum' => 'getUnUpgradeAgentHostNum',
            'autoUpgradeAgentEnable' => 'getAutoUpgradeAgentEnable',
            'userOpenAutoUpgradeAgentRate' => 'getUserOpenAutoUpgradeAgentRate',
            'unOpenRansomwarePolicyHostNum' => 'getUnOpenRansomwarePolicyHostNum',
            'toBeOptimizedRansomwarePolicyHostNum' => 'getToBeOptimizedRansomwarePolicyHostNum',
            'userOpenRansomwareBackupRate' => 'getUserOpenRansomwareBackupRate',
            'unOpenTwoFactorLoginHostNum' => 'getUnOpenTwoFactorLoginHostNum',
            'userOpenTwoFactorLoginRate' => 'getUserOpenTwoFactorLoginRate',
            'unVirusKillHostNum' => 'getUnVirusKillHostNum',
            'virusKillHostNum' => 'getVirusKillHostNum',
            'malwareCollectEnable' => 'getMalwareCollectEnable',
            'userOpenMalwareCollectRate' => 'getUserOpenMalwareCollectRate',
            'containerImageScanFreq' => 'getContainerImageScanFreq',
            'containerImageScanFreqBeatRate' => 'getContainerImageScanFreqBeatRate',
            'needOpenConfigNum' => 'getNeedOpenConfigNum',
            'containerImageScanTotalNum' => 'getContainerImageScanTotalNum'
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
        $this->container['unUpgradeAgentHostNum'] = isset($data['unUpgradeAgentHostNum']) ? $data['unUpgradeAgentHostNum'] : null;
        $this->container['autoUpgradeAgentEnable'] = isset($data['autoUpgradeAgentEnable']) ? $data['autoUpgradeAgentEnable'] : null;
        $this->container['userOpenAutoUpgradeAgentRate'] = isset($data['userOpenAutoUpgradeAgentRate']) ? $data['userOpenAutoUpgradeAgentRate'] : null;
        $this->container['unOpenRansomwarePolicyHostNum'] = isset($data['unOpenRansomwarePolicyHostNum']) ? $data['unOpenRansomwarePolicyHostNum'] : null;
        $this->container['toBeOptimizedRansomwarePolicyHostNum'] = isset($data['toBeOptimizedRansomwarePolicyHostNum']) ? $data['toBeOptimizedRansomwarePolicyHostNum'] : null;
        $this->container['userOpenRansomwareBackupRate'] = isset($data['userOpenRansomwareBackupRate']) ? $data['userOpenRansomwareBackupRate'] : null;
        $this->container['unOpenTwoFactorLoginHostNum'] = isset($data['unOpenTwoFactorLoginHostNum']) ? $data['unOpenTwoFactorLoginHostNum'] : null;
        $this->container['userOpenTwoFactorLoginRate'] = isset($data['userOpenTwoFactorLoginRate']) ? $data['userOpenTwoFactorLoginRate'] : null;
        $this->container['unVirusKillHostNum'] = isset($data['unVirusKillHostNum']) ? $data['unVirusKillHostNum'] : null;
        $this->container['virusKillHostNum'] = isset($data['virusKillHostNum']) ? $data['virusKillHostNum'] : null;
        $this->container['malwareCollectEnable'] = isset($data['malwareCollectEnable']) ? $data['malwareCollectEnable'] : null;
        $this->container['userOpenMalwareCollectRate'] = isset($data['userOpenMalwareCollectRate']) ? $data['userOpenMalwareCollectRate'] : null;
        $this->container['containerImageScanFreq'] = isset($data['containerImageScanFreq']) ? $data['containerImageScanFreq'] : null;
        $this->container['containerImageScanFreqBeatRate'] = isset($data['containerImageScanFreqBeatRate']) ? $data['containerImageScanFreqBeatRate'] : null;
        $this->container['needOpenConfigNum'] = isset($data['needOpenConfigNum']) ? $data['needOpenConfigNum'] : null;
        $this->container['containerImageScanTotalNum'] = isset($data['containerImageScanTotalNum']) ? $data['containerImageScanTotalNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['unUpgradeAgentHostNum']) && ($this->container['unUpgradeAgentHostNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'unUpgradeAgentHostNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['unUpgradeAgentHostNum']) && ($this->container['unUpgradeAgentHostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'unUpgradeAgentHostNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['userOpenAutoUpgradeAgentRate']) && ($this->container['userOpenAutoUpgradeAgentRate'] > 1)) {
                $invalidProperties[] = "invalid value for 'userOpenAutoUpgradeAgentRate', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['userOpenAutoUpgradeAgentRate']) && ($this->container['userOpenAutoUpgradeAgentRate'] < 0)) {
                $invalidProperties[] = "invalid value for 'userOpenAutoUpgradeAgentRate', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['unOpenRansomwarePolicyHostNum']) && ($this->container['unOpenRansomwarePolicyHostNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'unOpenRansomwarePolicyHostNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['unOpenRansomwarePolicyHostNum']) && ($this->container['unOpenRansomwarePolicyHostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'unOpenRansomwarePolicyHostNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['toBeOptimizedRansomwarePolicyHostNum']) && ($this->container['toBeOptimizedRansomwarePolicyHostNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'toBeOptimizedRansomwarePolicyHostNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['toBeOptimizedRansomwarePolicyHostNum']) && ($this->container['toBeOptimizedRansomwarePolicyHostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'toBeOptimizedRansomwarePolicyHostNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['userOpenRansomwareBackupRate']) && ($this->container['userOpenRansomwareBackupRate'] > 1)) {
                $invalidProperties[] = "invalid value for 'userOpenRansomwareBackupRate', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['userOpenRansomwareBackupRate']) && ($this->container['userOpenRansomwareBackupRate'] < 0)) {
                $invalidProperties[] = "invalid value for 'userOpenRansomwareBackupRate', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['unOpenTwoFactorLoginHostNum']) && ($this->container['unOpenTwoFactorLoginHostNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'unOpenTwoFactorLoginHostNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['unOpenTwoFactorLoginHostNum']) && ($this->container['unOpenTwoFactorLoginHostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'unOpenTwoFactorLoginHostNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['userOpenTwoFactorLoginRate']) && ($this->container['userOpenTwoFactorLoginRate'] > 1)) {
                $invalidProperties[] = "invalid value for 'userOpenTwoFactorLoginRate', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['userOpenTwoFactorLoginRate']) && ($this->container['userOpenTwoFactorLoginRate'] < 0)) {
                $invalidProperties[] = "invalid value for 'userOpenTwoFactorLoginRate', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['unVirusKillHostNum']) && ($this->container['unVirusKillHostNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'unVirusKillHostNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['unVirusKillHostNum']) && ($this->container['unVirusKillHostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'unVirusKillHostNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['virusKillHostNum']) && ($this->container['virusKillHostNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'virusKillHostNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['virusKillHostNum']) && ($this->container['virusKillHostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'virusKillHostNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['userOpenMalwareCollectRate']) && ($this->container['userOpenMalwareCollectRate'] > 1)) {
                $invalidProperties[] = "invalid value for 'userOpenMalwareCollectRate', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['userOpenMalwareCollectRate']) && ($this->container['userOpenMalwareCollectRate'] < 0)) {
                $invalidProperties[] = "invalid value for 'userOpenMalwareCollectRate', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['containerImageScanFreq']) && ($this->container['containerImageScanFreq'] > 128)) {
                $invalidProperties[] = "invalid value for 'containerImageScanFreq', must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['containerImageScanFreq']) && ($this->container['containerImageScanFreq'] < 0)) {
                $invalidProperties[] = "invalid value for 'containerImageScanFreq', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['containerImageScanFreqBeatRate']) && ($this->container['containerImageScanFreqBeatRate'] > 1)) {
                $invalidProperties[] = "invalid value for 'containerImageScanFreqBeatRate', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['containerImageScanFreqBeatRate']) && ($this->container['containerImageScanFreqBeatRate'] < 0)) {
                $invalidProperties[] = "invalid value for 'containerImageScanFreqBeatRate', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['needOpenConfigNum']) && ($this->container['needOpenConfigNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'needOpenConfigNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['needOpenConfigNum']) && ($this->container['needOpenConfigNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'needOpenConfigNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['containerImageScanTotalNum']) && ($this->container['containerImageScanTotalNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'containerImageScanTotalNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['containerImageScanTotalNum']) && ($this->container['containerImageScanTotalNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'containerImageScanTotalNum', must be bigger than or equal to 0.";
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
    * Gets unUpgradeAgentHostNum
    *  **参数解释**: 未升级agent的主机数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getUnUpgradeAgentHostNum()
    {
        return $this->container['unUpgradeAgentHostNum'];
    }

    /**
    * Sets unUpgradeAgentHostNum
    *
    * @param int|null $unUpgradeAgentHostNum **参数解释**: 未升级agent的主机数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setUnUpgradeAgentHostNum($unUpgradeAgentHostNum)
    {
        $this->container['unUpgradeAgentHostNum'] = $unUpgradeAgentHostNum;
        return $this;
    }

    /**
    * Gets autoUpgradeAgentEnable
    *  **参数解释**: 是否开启自动升级 **取值范围**:   - true：是。   - false：否。
    *
    * @return bool|null
    */
    public function getAutoUpgradeAgentEnable()
    {
        return $this->container['autoUpgradeAgentEnable'];
    }

    /**
    * Sets autoUpgradeAgentEnable
    *
    * @param bool|null $autoUpgradeAgentEnable **参数解释**: 是否开启自动升级 **取值范围**:   - true：是。   - false：否。
    *
    * @return $this
    */
    public function setAutoUpgradeAgentEnable($autoUpgradeAgentEnable)
    {
        $this->container['autoUpgradeAgentEnable'] = $autoUpgradeAgentEnable;
        return $this;
    }

    /**
    * Gets userOpenAutoUpgradeAgentRate
    *  **参数解释**: 开启自动升级的用户率 **取值范围**: 最小值0，最大值1
    *
    * @return float|null
    */
    public function getUserOpenAutoUpgradeAgentRate()
    {
        return $this->container['userOpenAutoUpgradeAgentRate'];
    }

    /**
    * Sets userOpenAutoUpgradeAgentRate
    *
    * @param float|null $userOpenAutoUpgradeAgentRate **参数解释**: 开启自动升级的用户率 **取值范围**: 最小值0，最大值1
    *
    * @return $this
    */
    public function setUserOpenAutoUpgradeAgentRate($userOpenAutoUpgradeAgentRate)
    {
        $this->container['userOpenAutoUpgradeAgentRate'] = $userOpenAutoUpgradeAgentRate;
        return $this;
    }

    /**
    * Gets unOpenRansomwarePolicyHostNum
    *  **参数解释**: 未开启勒索策略的主机数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getUnOpenRansomwarePolicyHostNum()
    {
        return $this->container['unOpenRansomwarePolicyHostNum'];
    }

    /**
    * Sets unOpenRansomwarePolicyHostNum
    *
    * @param int|null $unOpenRansomwarePolicyHostNum **参数解释**: 未开启勒索策略的主机数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setUnOpenRansomwarePolicyHostNum($unOpenRansomwarePolicyHostNum)
    {
        $this->container['unOpenRansomwarePolicyHostNum'] = $unOpenRansomwarePolicyHostNum;
        return $this;
    }

    /**
    * Gets toBeOptimizedRansomwarePolicyHostNum
    *  **参数解释**: 未待开启（待优化）勒索病毒防护的主机数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getToBeOptimizedRansomwarePolicyHostNum()
    {
        return $this->container['toBeOptimizedRansomwarePolicyHostNum'];
    }

    /**
    * Sets toBeOptimizedRansomwarePolicyHostNum
    *
    * @param int|null $toBeOptimizedRansomwarePolicyHostNum **参数解释**: 未待开启（待优化）勒索病毒防护的主机数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setToBeOptimizedRansomwarePolicyHostNum($toBeOptimizedRansomwarePolicyHostNum)
    {
        $this->container['toBeOptimizedRansomwarePolicyHostNum'] = $toBeOptimizedRansomwarePolicyHostNum;
        return $this;
    }

    /**
    * Gets userOpenRansomwareBackupRate
    *  **参数解释**: 开启勒索备份的用户率 **取值范围**: 最小值0，最大值1
    *
    * @return float|null
    */
    public function getUserOpenRansomwareBackupRate()
    {
        return $this->container['userOpenRansomwareBackupRate'];
    }

    /**
    * Sets userOpenRansomwareBackupRate
    *
    * @param float|null $userOpenRansomwareBackupRate **参数解释**: 开启勒索备份的用户率 **取值范围**: 最小值0，最大值1
    *
    * @return $this
    */
    public function setUserOpenRansomwareBackupRate($userOpenRansomwareBackupRate)
    {
        $this->container['userOpenRansomwareBackupRate'] = $userOpenRansomwareBackupRate;
        return $this;
    }

    /**
    * Gets unOpenTwoFactorLoginHostNum
    *  **参数解释**: 未开启双因子的主机数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getUnOpenTwoFactorLoginHostNum()
    {
        return $this->container['unOpenTwoFactorLoginHostNum'];
    }

    /**
    * Sets unOpenTwoFactorLoginHostNum
    *
    * @param int|null $unOpenTwoFactorLoginHostNum **参数解释**: 未开启双因子的主机数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setUnOpenTwoFactorLoginHostNum($unOpenTwoFactorLoginHostNum)
    {
        $this->container['unOpenTwoFactorLoginHostNum'] = $unOpenTwoFactorLoginHostNum;
        return $this;
    }

    /**
    * Gets userOpenTwoFactorLoginRate
    *  **参数解释**: 开启双因子的用户率 **取值范围**: 最小值0，最大值1
    *
    * @return float|null
    */
    public function getUserOpenTwoFactorLoginRate()
    {
        return $this->container['userOpenTwoFactorLoginRate'];
    }

    /**
    * Sets userOpenTwoFactorLoginRate
    *
    * @param float|null $userOpenTwoFactorLoginRate **参数解释**: 开启双因子的用户率 **取值范围**: 最小值0，最大值1
    *
    * @return $this
    */
    public function setUserOpenTwoFactorLoginRate($userOpenTwoFactorLoginRate)
    {
        $this->container['userOpenTwoFactorLoginRate'] = $userOpenTwoFactorLoginRate;
        return $this;
    }

    /**
    * Gets unVirusKillHostNum
    *  **参数解释**: 未执行病毒查杀的主机数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getUnVirusKillHostNum()
    {
        return $this->container['unVirusKillHostNum'];
    }

    /**
    * Sets unVirusKillHostNum
    *
    * @param int|null $unVirusKillHostNum **参数解释**: 未执行病毒查杀的主机数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setUnVirusKillHostNum($unVirusKillHostNum)
    {
        $this->container['unVirusKillHostNum'] = $unVirusKillHostNum;
        return $this;
    }

    /**
    * Gets virusKillHostNum
    *  **参数解释**: 执行过病毒查杀的主机数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getVirusKillHostNum()
    {
        return $this->container['virusKillHostNum'];
    }

    /**
    * Sets virusKillHostNum
    *
    * @param int|null $virusKillHostNum **参数解释**: 执行过病毒查杀的主机数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setVirusKillHostNum($virusKillHostNum)
    {
        $this->container['virusKillHostNum'] = $virusKillHostNum;
        return $this;
    }

    /**
    * Gets malwareCollectEnable
    *  **参数解释**: 是否开启云查 **取值范围**:   - true：是。   - false：否。
    *
    * @return bool|null
    */
    public function getMalwareCollectEnable()
    {
        return $this->container['malwareCollectEnable'];
    }

    /**
    * Sets malwareCollectEnable
    *
    * @param bool|null $malwareCollectEnable **参数解释**: 是否开启云查 **取值范围**:   - true：是。   - false：否。
    *
    * @return $this
    */
    public function setMalwareCollectEnable($malwareCollectEnable)
    {
        $this->container['malwareCollectEnable'] = $malwareCollectEnable;
        return $this;
    }

    /**
    * Gets userOpenMalwareCollectRate
    *  **参数解释**: 开启云查的用户率 **取值范围**: 最小值0，最大值1
    *
    * @return float|null
    */
    public function getUserOpenMalwareCollectRate()
    {
        return $this->container['userOpenMalwareCollectRate'];
    }

    /**
    * Sets userOpenMalwareCollectRate
    *
    * @param float|null $userOpenMalwareCollectRate **参数解释**: 开启云查的用户率 **取值范围**: 最小值0，最大值1
    *
    * @return $this
    */
    public function setUserOpenMalwareCollectRate($userOpenMalwareCollectRate)
    {
        $this->container['userOpenMalwareCollectRate'] = $userOpenMalwareCollectRate;
        return $this;
    }

    /**
    * Gets containerImageScanFreq
    *  **参数解释**: 容器镜像扫描频率 **取值范围**: 最小值0，最大值128
    *
    * @return float|null
    */
    public function getContainerImageScanFreq()
    {
        return $this->container['containerImageScanFreq'];
    }

    /**
    * Sets containerImageScanFreq
    *
    * @param float|null $containerImageScanFreq **参数解释**: 容器镜像扫描频率 **取值范围**: 最小值0，最大值128
    *
    * @return $this
    */
    public function setContainerImageScanFreq($containerImageScanFreq)
    {
        $this->container['containerImageScanFreq'] = $containerImageScanFreq;
        return $this;
    }

    /**
    * Gets containerImageScanFreqBeatRate
    *  **参数解释**: 容器镜像扫描频率击败的用户率 **取值范围**: 最小值0，最大值1
    *
    * @return float|null
    */
    public function getContainerImageScanFreqBeatRate()
    {
        return $this->container['containerImageScanFreqBeatRate'];
    }

    /**
    * Sets containerImageScanFreqBeatRate
    *
    * @param float|null $containerImageScanFreqBeatRate **参数解释**: 容器镜像扫描频率击败的用户率 **取值范围**: 最小值0，最大值1
    *
    * @return $this
    */
    public function setContainerImageScanFreqBeatRate($containerImageScanFreqBeatRate)
    {
        $this->container['containerImageScanFreqBeatRate'] = $containerImageScanFreqBeatRate;
        return $this;
    }

    /**
    * Gets needOpenConfigNum
    *  **参数解释**: 用户开启的配置数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getNeedOpenConfigNum()
    {
        return $this->container['needOpenConfigNum'];
    }

    /**
    * Sets needOpenConfigNum
    *
    * @param int|null $needOpenConfigNum **参数解释**: 用户开启的配置数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setNeedOpenConfigNum($needOpenConfigNum)
    {
        $this->container['needOpenConfigNum'] = $needOpenConfigNum;
        return $this;
    }

    /**
    * Gets containerImageScanTotalNum
    *  **参数解释**: 扫描的镜像数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getContainerImageScanTotalNum()
    {
        return $this->container['containerImageScanTotalNum'];
    }

    /**
    * Sets containerImageScanTotalNum
    *
    * @param int|null $containerImageScanTotalNum **参数解释**: 扫描的镜像数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setContainerImageScanTotalNum($containerImageScanTotalNum)
    {
        $this->container['containerImageScanTotalNum'] = $containerImageScanTotalNum;
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

