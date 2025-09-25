<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RiskHandleInfoAlarmInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RiskHandleInfo_alarm_info';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * alarmNum  **参数解释**: 攻击、异常行为数 **取值范围**: 最小值0，最大值2147483647
    * malwareFileNum  **参数解释**: 病毒文件数 **取值范围**: 最小值0，最大值2147483647
    * autoBlockNum  **参数解释**: 阻断的数量 **取值范围**: 最小值0，最大值2147483647
    * manualHandleNum  **参数解释**: 手工处置数量 **取值范围**: 最小值0，最大值2147483647
    * autoHandleNum  **参数解释**: 自动处置数量 **取值范围**: 最小值0，最大值2147483647
    * handleRate  **参数解释**: 平均处置率 **取值范围**: 最小值0，最大值1
    * beatRate  **参数解释**: 平均处置率击败的用户率 **取值范围**: 最小值0，最大值1
    * virusKillConfigEnable  **参数解释**: 是否开启隔离查杀 **取值范围**:  - true：是。  - false：否。
    * userOpenVirusKillRate  **参数解释**: 开启隔离查杀的用户率 **取值范围**: 最小值0，最大值1
    * alarmNotifyConfigEnable  **参数解释**: 是否开启告警通知 **取值范围**:  - true：是。  - false：否。
    * userOpenAlarmNotifyRate  **参数解释**: 开启告警通知的用户率 **取值范围**: 最小值0，最大值1
    * ransomwareEventNum  **参数解释**: 勒索病毒攻击数量 **取值范围**: 最小值0，最大值2147483647
    * ransomwareEventHostList  **参数解释**: 存在勒索病毒攻击的主机列表 **取值范围**: 最小值0，最大值10000
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'alarmNum' => 'int',
            'malwareFileNum' => 'int',
            'autoBlockNum' => 'int',
            'manualHandleNum' => 'int',
            'autoHandleNum' => 'int',
            'handleRate' => 'float',
            'beatRate' => 'float',
            'virusKillConfigEnable' => 'bool',
            'userOpenVirusKillRate' => 'float',
            'alarmNotifyConfigEnable' => 'bool',
            'userOpenAlarmNotifyRate' => 'float',
            'ransomwareEventNum' => 'int',
            'ransomwareEventHostList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * alarmNum  **参数解释**: 攻击、异常行为数 **取值范围**: 最小值0，最大值2147483647
    * malwareFileNum  **参数解释**: 病毒文件数 **取值范围**: 最小值0，最大值2147483647
    * autoBlockNum  **参数解释**: 阻断的数量 **取值范围**: 最小值0，最大值2147483647
    * manualHandleNum  **参数解释**: 手工处置数量 **取值范围**: 最小值0，最大值2147483647
    * autoHandleNum  **参数解释**: 自动处置数量 **取值范围**: 最小值0，最大值2147483647
    * handleRate  **参数解释**: 平均处置率 **取值范围**: 最小值0，最大值1
    * beatRate  **参数解释**: 平均处置率击败的用户率 **取值范围**: 最小值0，最大值1
    * virusKillConfigEnable  **参数解释**: 是否开启隔离查杀 **取值范围**:  - true：是。  - false：否。
    * userOpenVirusKillRate  **参数解释**: 开启隔离查杀的用户率 **取值范围**: 最小值0，最大值1
    * alarmNotifyConfigEnable  **参数解释**: 是否开启告警通知 **取值范围**:  - true：是。  - false：否。
    * userOpenAlarmNotifyRate  **参数解释**: 开启告警通知的用户率 **取值范围**: 最小值0，最大值1
    * ransomwareEventNum  **参数解释**: 勒索病毒攻击数量 **取值范围**: 最小值0，最大值2147483647
    * ransomwareEventHostList  **参数解释**: 存在勒索病毒攻击的主机列表 **取值范围**: 最小值0，最大值10000
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'alarmNum' => 'int64',
        'malwareFileNum' => 'int64',
        'autoBlockNum' => 'int64',
        'manualHandleNum' => 'int64',
        'autoHandleNum' => 'int64',
        'handleRate' => 'float',
        'beatRate' => 'float',
        'virusKillConfigEnable' => null,
        'userOpenVirusKillRate' => 'float',
        'alarmNotifyConfigEnable' => null,
        'userOpenAlarmNotifyRate' => 'float',
        'ransomwareEventNum' => 'int64',
        'ransomwareEventHostList' => null
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
    * alarmNum  **参数解释**: 攻击、异常行为数 **取值范围**: 最小值0，最大值2147483647
    * malwareFileNum  **参数解释**: 病毒文件数 **取值范围**: 最小值0，最大值2147483647
    * autoBlockNum  **参数解释**: 阻断的数量 **取值范围**: 最小值0，最大值2147483647
    * manualHandleNum  **参数解释**: 手工处置数量 **取值范围**: 最小值0，最大值2147483647
    * autoHandleNum  **参数解释**: 自动处置数量 **取值范围**: 最小值0，最大值2147483647
    * handleRate  **参数解释**: 平均处置率 **取值范围**: 最小值0，最大值1
    * beatRate  **参数解释**: 平均处置率击败的用户率 **取值范围**: 最小值0，最大值1
    * virusKillConfigEnable  **参数解释**: 是否开启隔离查杀 **取值范围**:  - true：是。  - false：否。
    * userOpenVirusKillRate  **参数解释**: 开启隔离查杀的用户率 **取值范围**: 最小值0，最大值1
    * alarmNotifyConfigEnable  **参数解释**: 是否开启告警通知 **取值范围**:  - true：是。  - false：否。
    * userOpenAlarmNotifyRate  **参数解释**: 开启告警通知的用户率 **取值范围**: 最小值0，最大值1
    * ransomwareEventNum  **参数解释**: 勒索病毒攻击数量 **取值范围**: 最小值0，最大值2147483647
    * ransomwareEventHostList  **参数解释**: 存在勒索病毒攻击的主机列表 **取值范围**: 最小值0，最大值10000
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'alarmNum' => 'alarm_num',
            'malwareFileNum' => 'malware_file_num',
            'autoBlockNum' => 'auto_block_num',
            'manualHandleNum' => 'manual_handle_num',
            'autoHandleNum' => 'auto_handle_num',
            'handleRate' => 'handle_rate',
            'beatRate' => 'beat_rate',
            'virusKillConfigEnable' => 'virus_kill_config_enable',
            'userOpenVirusKillRate' => 'user_open_virus_kill_rate',
            'alarmNotifyConfigEnable' => 'alarm_notify_config_enable',
            'userOpenAlarmNotifyRate' => 'user_open_alarm_notify_rate',
            'ransomwareEventNum' => 'ransomware_event_num',
            'ransomwareEventHostList' => 'ransomware_event_host_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * alarmNum  **参数解释**: 攻击、异常行为数 **取值范围**: 最小值0，最大值2147483647
    * malwareFileNum  **参数解释**: 病毒文件数 **取值范围**: 最小值0，最大值2147483647
    * autoBlockNum  **参数解释**: 阻断的数量 **取值范围**: 最小值0，最大值2147483647
    * manualHandleNum  **参数解释**: 手工处置数量 **取值范围**: 最小值0，最大值2147483647
    * autoHandleNum  **参数解释**: 自动处置数量 **取值范围**: 最小值0，最大值2147483647
    * handleRate  **参数解释**: 平均处置率 **取值范围**: 最小值0，最大值1
    * beatRate  **参数解释**: 平均处置率击败的用户率 **取值范围**: 最小值0，最大值1
    * virusKillConfigEnable  **参数解释**: 是否开启隔离查杀 **取值范围**:  - true：是。  - false：否。
    * userOpenVirusKillRate  **参数解释**: 开启隔离查杀的用户率 **取值范围**: 最小值0，最大值1
    * alarmNotifyConfigEnable  **参数解释**: 是否开启告警通知 **取值范围**:  - true：是。  - false：否。
    * userOpenAlarmNotifyRate  **参数解释**: 开启告警通知的用户率 **取值范围**: 最小值0，最大值1
    * ransomwareEventNum  **参数解释**: 勒索病毒攻击数量 **取值范围**: 最小值0，最大值2147483647
    * ransomwareEventHostList  **参数解释**: 存在勒索病毒攻击的主机列表 **取值范围**: 最小值0，最大值10000
    *
    * @var string[]
    */
    protected static $setters = [
            'alarmNum' => 'setAlarmNum',
            'malwareFileNum' => 'setMalwareFileNum',
            'autoBlockNum' => 'setAutoBlockNum',
            'manualHandleNum' => 'setManualHandleNum',
            'autoHandleNum' => 'setAutoHandleNum',
            'handleRate' => 'setHandleRate',
            'beatRate' => 'setBeatRate',
            'virusKillConfigEnable' => 'setVirusKillConfigEnable',
            'userOpenVirusKillRate' => 'setUserOpenVirusKillRate',
            'alarmNotifyConfigEnable' => 'setAlarmNotifyConfigEnable',
            'userOpenAlarmNotifyRate' => 'setUserOpenAlarmNotifyRate',
            'ransomwareEventNum' => 'setRansomwareEventNum',
            'ransomwareEventHostList' => 'setRansomwareEventHostList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * alarmNum  **参数解释**: 攻击、异常行为数 **取值范围**: 最小值0，最大值2147483647
    * malwareFileNum  **参数解释**: 病毒文件数 **取值范围**: 最小值0，最大值2147483647
    * autoBlockNum  **参数解释**: 阻断的数量 **取值范围**: 最小值0，最大值2147483647
    * manualHandleNum  **参数解释**: 手工处置数量 **取值范围**: 最小值0，最大值2147483647
    * autoHandleNum  **参数解释**: 自动处置数量 **取值范围**: 最小值0，最大值2147483647
    * handleRate  **参数解释**: 平均处置率 **取值范围**: 最小值0，最大值1
    * beatRate  **参数解释**: 平均处置率击败的用户率 **取值范围**: 最小值0，最大值1
    * virusKillConfigEnable  **参数解释**: 是否开启隔离查杀 **取值范围**:  - true：是。  - false：否。
    * userOpenVirusKillRate  **参数解释**: 开启隔离查杀的用户率 **取值范围**: 最小值0，最大值1
    * alarmNotifyConfigEnable  **参数解释**: 是否开启告警通知 **取值范围**:  - true：是。  - false：否。
    * userOpenAlarmNotifyRate  **参数解释**: 开启告警通知的用户率 **取值范围**: 最小值0，最大值1
    * ransomwareEventNum  **参数解释**: 勒索病毒攻击数量 **取值范围**: 最小值0，最大值2147483647
    * ransomwareEventHostList  **参数解释**: 存在勒索病毒攻击的主机列表 **取值范围**: 最小值0，最大值10000
    *
    * @var string[]
    */
    protected static $getters = [
            'alarmNum' => 'getAlarmNum',
            'malwareFileNum' => 'getMalwareFileNum',
            'autoBlockNum' => 'getAutoBlockNum',
            'manualHandleNum' => 'getManualHandleNum',
            'autoHandleNum' => 'getAutoHandleNum',
            'handleRate' => 'getHandleRate',
            'beatRate' => 'getBeatRate',
            'virusKillConfigEnable' => 'getVirusKillConfigEnable',
            'userOpenVirusKillRate' => 'getUserOpenVirusKillRate',
            'alarmNotifyConfigEnable' => 'getAlarmNotifyConfigEnable',
            'userOpenAlarmNotifyRate' => 'getUserOpenAlarmNotifyRate',
            'ransomwareEventNum' => 'getRansomwareEventNum',
            'ransomwareEventHostList' => 'getRansomwareEventHostList'
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
        $this->container['alarmNum'] = isset($data['alarmNum']) ? $data['alarmNum'] : null;
        $this->container['malwareFileNum'] = isset($data['malwareFileNum']) ? $data['malwareFileNum'] : null;
        $this->container['autoBlockNum'] = isset($data['autoBlockNum']) ? $data['autoBlockNum'] : null;
        $this->container['manualHandleNum'] = isset($data['manualHandleNum']) ? $data['manualHandleNum'] : null;
        $this->container['autoHandleNum'] = isset($data['autoHandleNum']) ? $data['autoHandleNum'] : null;
        $this->container['handleRate'] = isset($data['handleRate']) ? $data['handleRate'] : null;
        $this->container['beatRate'] = isset($data['beatRate']) ? $data['beatRate'] : null;
        $this->container['virusKillConfigEnable'] = isset($data['virusKillConfigEnable']) ? $data['virusKillConfigEnable'] : null;
        $this->container['userOpenVirusKillRate'] = isset($data['userOpenVirusKillRate']) ? $data['userOpenVirusKillRate'] : null;
        $this->container['alarmNotifyConfigEnable'] = isset($data['alarmNotifyConfigEnable']) ? $data['alarmNotifyConfigEnable'] : null;
        $this->container['userOpenAlarmNotifyRate'] = isset($data['userOpenAlarmNotifyRate']) ? $data['userOpenAlarmNotifyRate'] : null;
        $this->container['ransomwareEventNum'] = isset($data['ransomwareEventNum']) ? $data['ransomwareEventNum'] : null;
        $this->container['ransomwareEventHostList'] = isset($data['ransomwareEventHostList']) ? $data['ransomwareEventHostList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['alarmNum']) && ($this->container['alarmNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'alarmNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['alarmNum']) && ($this->container['alarmNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'alarmNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['malwareFileNum']) && ($this->container['malwareFileNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'malwareFileNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['malwareFileNum']) && ($this->container['malwareFileNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'malwareFileNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['autoBlockNum']) && ($this->container['autoBlockNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'autoBlockNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['autoBlockNum']) && ($this->container['autoBlockNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'autoBlockNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['manualHandleNum']) && ($this->container['manualHandleNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'manualHandleNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['manualHandleNum']) && ($this->container['manualHandleNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'manualHandleNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['autoHandleNum']) && ($this->container['autoHandleNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'autoHandleNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['autoHandleNum']) && ($this->container['autoHandleNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'autoHandleNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['handleRate']) && ($this->container['handleRate'] > 1)) {
                $invalidProperties[] = "invalid value for 'handleRate', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['handleRate']) && ($this->container['handleRate'] < 0)) {
                $invalidProperties[] = "invalid value for 'handleRate', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['beatRate']) && ($this->container['beatRate'] > 1)) {
                $invalidProperties[] = "invalid value for 'beatRate', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['beatRate']) && ($this->container['beatRate'] < 0)) {
                $invalidProperties[] = "invalid value for 'beatRate', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['userOpenVirusKillRate']) && ($this->container['userOpenVirusKillRate'] > 1)) {
                $invalidProperties[] = "invalid value for 'userOpenVirusKillRate', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['userOpenVirusKillRate']) && ($this->container['userOpenVirusKillRate'] < 0)) {
                $invalidProperties[] = "invalid value for 'userOpenVirusKillRate', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['userOpenAlarmNotifyRate']) && ($this->container['userOpenAlarmNotifyRate'] > 1)) {
                $invalidProperties[] = "invalid value for 'userOpenAlarmNotifyRate', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['userOpenAlarmNotifyRate']) && ($this->container['userOpenAlarmNotifyRate'] < 0)) {
                $invalidProperties[] = "invalid value for 'userOpenAlarmNotifyRate', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ransomwareEventNum']) && ($this->container['ransomwareEventNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'ransomwareEventNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['ransomwareEventNum']) && ($this->container['ransomwareEventNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'ransomwareEventNum', must be bigger than or equal to 0.";
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
    * Gets alarmNum
    *  **参数解释**: 攻击、异常行为数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getAlarmNum()
    {
        return $this->container['alarmNum'];
    }

    /**
    * Sets alarmNum
    *
    * @param int|null $alarmNum **参数解释**: 攻击、异常行为数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setAlarmNum($alarmNum)
    {
        $this->container['alarmNum'] = $alarmNum;
        return $this;
    }

    /**
    * Gets malwareFileNum
    *  **参数解释**: 病毒文件数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getMalwareFileNum()
    {
        return $this->container['malwareFileNum'];
    }

    /**
    * Sets malwareFileNum
    *
    * @param int|null $malwareFileNum **参数解释**: 病毒文件数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setMalwareFileNum($malwareFileNum)
    {
        $this->container['malwareFileNum'] = $malwareFileNum;
        return $this;
    }

    /**
    * Gets autoBlockNum
    *  **参数解释**: 阻断的数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getAutoBlockNum()
    {
        return $this->container['autoBlockNum'];
    }

    /**
    * Sets autoBlockNum
    *
    * @param int|null $autoBlockNum **参数解释**: 阻断的数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setAutoBlockNum($autoBlockNum)
    {
        $this->container['autoBlockNum'] = $autoBlockNum;
        return $this;
    }

    /**
    * Gets manualHandleNum
    *  **参数解释**: 手工处置数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getManualHandleNum()
    {
        return $this->container['manualHandleNum'];
    }

    /**
    * Sets manualHandleNum
    *
    * @param int|null $manualHandleNum **参数解释**: 手工处置数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setManualHandleNum($manualHandleNum)
    {
        $this->container['manualHandleNum'] = $manualHandleNum;
        return $this;
    }

    /**
    * Gets autoHandleNum
    *  **参数解释**: 自动处置数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getAutoHandleNum()
    {
        return $this->container['autoHandleNum'];
    }

    /**
    * Sets autoHandleNum
    *
    * @param int|null $autoHandleNum **参数解释**: 自动处置数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setAutoHandleNum($autoHandleNum)
    {
        $this->container['autoHandleNum'] = $autoHandleNum;
        return $this;
    }

    /**
    * Gets handleRate
    *  **参数解释**: 平均处置率 **取值范围**: 最小值0，最大值1
    *
    * @return float|null
    */
    public function getHandleRate()
    {
        return $this->container['handleRate'];
    }

    /**
    * Sets handleRate
    *
    * @param float|null $handleRate **参数解释**: 平均处置率 **取值范围**: 最小值0，最大值1
    *
    * @return $this
    */
    public function setHandleRate($handleRate)
    {
        $this->container['handleRate'] = $handleRate;
        return $this;
    }

    /**
    * Gets beatRate
    *  **参数解释**: 平均处置率击败的用户率 **取值范围**: 最小值0，最大值1
    *
    * @return float|null
    */
    public function getBeatRate()
    {
        return $this->container['beatRate'];
    }

    /**
    * Sets beatRate
    *
    * @param float|null $beatRate **参数解释**: 平均处置率击败的用户率 **取值范围**: 最小值0，最大值1
    *
    * @return $this
    */
    public function setBeatRate($beatRate)
    {
        $this->container['beatRate'] = $beatRate;
        return $this;
    }

    /**
    * Gets virusKillConfigEnable
    *  **参数解释**: 是否开启隔离查杀 **取值范围**:  - true：是。  - false：否。
    *
    * @return bool|null
    */
    public function getVirusKillConfigEnable()
    {
        return $this->container['virusKillConfigEnable'];
    }

    /**
    * Sets virusKillConfigEnable
    *
    * @param bool|null $virusKillConfigEnable **参数解释**: 是否开启隔离查杀 **取值范围**:  - true：是。  - false：否。
    *
    * @return $this
    */
    public function setVirusKillConfigEnable($virusKillConfigEnable)
    {
        $this->container['virusKillConfigEnable'] = $virusKillConfigEnable;
        return $this;
    }

    /**
    * Gets userOpenVirusKillRate
    *  **参数解释**: 开启隔离查杀的用户率 **取值范围**: 最小值0，最大值1
    *
    * @return float|null
    */
    public function getUserOpenVirusKillRate()
    {
        return $this->container['userOpenVirusKillRate'];
    }

    /**
    * Sets userOpenVirusKillRate
    *
    * @param float|null $userOpenVirusKillRate **参数解释**: 开启隔离查杀的用户率 **取值范围**: 最小值0，最大值1
    *
    * @return $this
    */
    public function setUserOpenVirusKillRate($userOpenVirusKillRate)
    {
        $this->container['userOpenVirusKillRate'] = $userOpenVirusKillRate;
        return $this;
    }

    /**
    * Gets alarmNotifyConfigEnable
    *  **参数解释**: 是否开启告警通知 **取值范围**:  - true：是。  - false：否。
    *
    * @return bool|null
    */
    public function getAlarmNotifyConfigEnable()
    {
        return $this->container['alarmNotifyConfigEnable'];
    }

    /**
    * Sets alarmNotifyConfigEnable
    *
    * @param bool|null $alarmNotifyConfigEnable **参数解释**: 是否开启告警通知 **取值范围**:  - true：是。  - false：否。
    *
    * @return $this
    */
    public function setAlarmNotifyConfigEnable($alarmNotifyConfigEnable)
    {
        $this->container['alarmNotifyConfigEnable'] = $alarmNotifyConfigEnable;
        return $this;
    }

    /**
    * Gets userOpenAlarmNotifyRate
    *  **参数解释**: 开启告警通知的用户率 **取值范围**: 最小值0，最大值1
    *
    * @return float|null
    */
    public function getUserOpenAlarmNotifyRate()
    {
        return $this->container['userOpenAlarmNotifyRate'];
    }

    /**
    * Sets userOpenAlarmNotifyRate
    *
    * @param float|null $userOpenAlarmNotifyRate **参数解释**: 开启告警通知的用户率 **取值范围**: 最小值0，最大值1
    *
    * @return $this
    */
    public function setUserOpenAlarmNotifyRate($userOpenAlarmNotifyRate)
    {
        $this->container['userOpenAlarmNotifyRate'] = $userOpenAlarmNotifyRate;
        return $this;
    }

    /**
    * Gets ransomwareEventNum
    *  **参数解释**: 勒索病毒攻击数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getRansomwareEventNum()
    {
        return $this->container['ransomwareEventNum'];
    }

    /**
    * Sets ransomwareEventNum
    *
    * @param int|null $ransomwareEventNum **参数解释**: 勒索病毒攻击数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setRansomwareEventNum($ransomwareEventNum)
    {
        $this->container['ransomwareEventNum'] = $ransomwareEventNum;
        return $this;
    }

    /**
    * Gets ransomwareEventHostList
    *  **参数解释**: 存在勒索病毒攻击的主机列表 **取值范围**: 最小值0，最大值10000
    *
    * @return string[]|null
    */
    public function getRansomwareEventHostList()
    {
        return $this->container['ransomwareEventHostList'];
    }

    /**
    * Sets ransomwareEventHostList
    *
    * @param string[]|null $ransomwareEventHostList **参数解释**: 存在勒索病毒攻击的主机列表 **取值范围**: 最小值0，最大值10000
    *
    * @return $this
    */
    public function setRansomwareEventHostList($ransomwareEventHostList)
    {
        $this->container['ransomwareEventHostList'] = $ransomwareEventHostList;
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

