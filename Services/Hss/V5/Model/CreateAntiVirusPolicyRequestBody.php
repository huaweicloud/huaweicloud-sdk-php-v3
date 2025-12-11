<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateAntiVirusPolicyRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateAntiVirusPolicyRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * policyName  策略名称
    * startType  **参数解释**： 启动类型 **取值范围**： 包含如下   - now：立即启动   - later：稍后启动   - period：周期启动
    * scanPeriod  启动类型，包含如下:   - day ：每天   - week : 每周   - month : 每月
    * scanType  **参数解释**： 任务类型 **取值范围**： 包含如下:   - quick ：快速扫描   - full : 全盘扫描   - custom : 自定义扫描
    * scanPeriodDate  扫描周期日期（1-28；扫描周期为week时，1-7代表周日至周六；扫描周期为month时，1-28代表每月1日到28日）
    * scanTime  扫描时间戳，毫秒（仅启动类型为later时有值）
    * scanHour  扫描小时数（仅启动类型为period时有值）
    * scanMinute  扫描分钟数（仅启动类型为period时有值）
    * timezoneOffset  时区偏移量（仅启动类型为period时有值，单位：分钟）
    * fileTypes  文件类型集合型，包含如下:   - 0 ：全部   - 1 : 可执行   - 2 : 压缩   - 3 : 脚本   - 4 : 文档   - 5 : 图片   - 6 : 音视频
    * scanDir  扫描目录，多个用;分隔
    * ignoreDir  排除目录，多个用;分隔
    * action  **参数解释**: 处置动作 **取值范围**: - auto：自动处置 - manual：人工处置
    * whetherPaidTask  此次扫描任务是否付费
    * taskId  **参数解释**： 任务ID **取值范围**: 字符长度1-64位
    * hostIds  策略管理主机列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'policyName' => 'string',
            'startType' => 'string',
            'scanPeriod' => 'string',
            'scanType' => 'string',
            'scanPeriodDate' => 'int',
            'scanTime' => 'int',
            'scanHour' => 'int',
            'scanMinute' => 'int',
            'timezoneOffset' => 'int',
            'fileTypes' => 'int[]',
            'scanDir' => 'string',
            'ignoreDir' => 'string',
            'action' => 'string',
            'whetherPaidTask' => 'bool',
            'taskId' => 'string',
            'hostIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * policyName  策略名称
    * startType  **参数解释**： 启动类型 **取值范围**： 包含如下   - now：立即启动   - later：稍后启动   - period：周期启动
    * scanPeriod  启动类型，包含如下:   - day ：每天   - week : 每周   - month : 每月
    * scanType  **参数解释**： 任务类型 **取值范围**： 包含如下:   - quick ：快速扫描   - full : 全盘扫描   - custom : 自定义扫描
    * scanPeriodDate  扫描周期日期（1-28；扫描周期为week时，1-7代表周日至周六；扫描周期为month时，1-28代表每月1日到28日）
    * scanTime  扫描时间戳，毫秒（仅启动类型为later时有值）
    * scanHour  扫描小时数（仅启动类型为period时有值）
    * scanMinute  扫描分钟数（仅启动类型为period时有值）
    * timezoneOffset  时区偏移量（仅启动类型为period时有值，单位：分钟）
    * fileTypes  文件类型集合型，包含如下:   - 0 ：全部   - 1 : 可执行   - 2 : 压缩   - 3 : 脚本   - 4 : 文档   - 5 : 图片   - 6 : 音视频
    * scanDir  扫描目录，多个用;分隔
    * ignoreDir  排除目录，多个用;分隔
    * action  **参数解释**: 处置动作 **取值范围**: - auto：自动处置 - manual：人工处置
    * whetherPaidTask  此次扫描任务是否付费
    * taskId  **参数解释**： 任务ID **取值范围**: 字符长度1-64位
    * hostIds  策略管理主机列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'policyName' => null,
        'startType' => null,
        'scanPeriod' => null,
        'scanType' => null,
        'scanPeriodDate' => 'int32',
        'scanTime' => 'int64',
        'scanHour' => 'int32',
        'scanMinute' => 'int32',
        'timezoneOffset' => 'int32',
        'fileTypes' => 'int32',
        'scanDir' => null,
        'ignoreDir' => null,
        'action' => null,
        'whetherPaidTask' => null,
        'taskId' => null,
        'hostIds' => null
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
    * policyName  策略名称
    * startType  **参数解释**： 启动类型 **取值范围**： 包含如下   - now：立即启动   - later：稍后启动   - period：周期启动
    * scanPeriod  启动类型，包含如下:   - day ：每天   - week : 每周   - month : 每月
    * scanType  **参数解释**： 任务类型 **取值范围**： 包含如下:   - quick ：快速扫描   - full : 全盘扫描   - custom : 自定义扫描
    * scanPeriodDate  扫描周期日期（1-28；扫描周期为week时，1-7代表周日至周六；扫描周期为month时，1-28代表每月1日到28日）
    * scanTime  扫描时间戳，毫秒（仅启动类型为later时有值）
    * scanHour  扫描小时数（仅启动类型为period时有值）
    * scanMinute  扫描分钟数（仅启动类型为period时有值）
    * timezoneOffset  时区偏移量（仅启动类型为period时有值，单位：分钟）
    * fileTypes  文件类型集合型，包含如下:   - 0 ：全部   - 1 : 可执行   - 2 : 压缩   - 3 : 脚本   - 4 : 文档   - 5 : 图片   - 6 : 音视频
    * scanDir  扫描目录，多个用;分隔
    * ignoreDir  排除目录，多个用;分隔
    * action  **参数解释**: 处置动作 **取值范围**: - auto：自动处置 - manual：人工处置
    * whetherPaidTask  此次扫描任务是否付费
    * taskId  **参数解释**： 任务ID **取值范围**: 字符长度1-64位
    * hostIds  策略管理主机列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'policyName' => 'policy_name',
            'startType' => 'start_type',
            'scanPeriod' => 'scan_period',
            'scanType' => 'scan_type',
            'scanPeriodDate' => 'scan_period_date',
            'scanTime' => 'scan_time',
            'scanHour' => 'scan_hour',
            'scanMinute' => 'scan_minute',
            'timezoneOffset' => 'timezone_offset',
            'fileTypes' => 'file_types',
            'scanDir' => 'scan_dir',
            'ignoreDir' => 'ignore_dir',
            'action' => 'action',
            'whetherPaidTask' => 'whether_paid_task',
            'taskId' => 'task_id',
            'hostIds' => 'host_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * policyName  策略名称
    * startType  **参数解释**： 启动类型 **取值范围**： 包含如下   - now：立即启动   - later：稍后启动   - period：周期启动
    * scanPeriod  启动类型，包含如下:   - day ：每天   - week : 每周   - month : 每月
    * scanType  **参数解释**： 任务类型 **取值范围**： 包含如下:   - quick ：快速扫描   - full : 全盘扫描   - custom : 自定义扫描
    * scanPeriodDate  扫描周期日期（1-28；扫描周期为week时，1-7代表周日至周六；扫描周期为month时，1-28代表每月1日到28日）
    * scanTime  扫描时间戳，毫秒（仅启动类型为later时有值）
    * scanHour  扫描小时数（仅启动类型为period时有值）
    * scanMinute  扫描分钟数（仅启动类型为period时有值）
    * timezoneOffset  时区偏移量（仅启动类型为period时有值，单位：分钟）
    * fileTypes  文件类型集合型，包含如下:   - 0 ：全部   - 1 : 可执行   - 2 : 压缩   - 3 : 脚本   - 4 : 文档   - 5 : 图片   - 6 : 音视频
    * scanDir  扫描目录，多个用;分隔
    * ignoreDir  排除目录，多个用;分隔
    * action  **参数解释**: 处置动作 **取值范围**: - auto：自动处置 - manual：人工处置
    * whetherPaidTask  此次扫描任务是否付费
    * taskId  **参数解释**： 任务ID **取值范围**: 字符长度1-64位
    * hostIds  策略管理主机列表
    *
    * @var string[]
    */
    protected static $setters = [
            'policyName' => 'setPolicyName',
            'startType' => 'setStartType',
            'scanPeriod' => 'setScanPeriod',
            'scanType' => 'setScanType',
            'scanPeriodDate' => 'setScanPeriodDate',
            'scanTime' => 'setScanTime',
            'scanHour' => 'setScanHour',
            'scanMinute' => 'setScanMinute',
            'timezoneOffset' => 'setTimezoneOffset',
            'fileTypes' => 'setFileTypes',
            'scanDir' => 'setScanDir',
            'ignoreDir' => 'setIgnoreDir',
            'action' => 'setAction',
            'whetherPaidTask' => 'setWhetherPaidTask',
            'taskId' => 'setTaskId',
            'hostIds' => 'setHostIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * policyName  策略名称
    * startType  **参数解释**： 启动类型 **取值范围**： 包含如下   - now：立即启动   - later：稍后启动   - period：周期启动
    * scanPeriod  启动类型，包含如下:   - day ：每天   - week : 每周   - month : 每月
    * scanType  **参数解释**： 任务类型 **取值范围**： 包含如下:   - quick ：快速扫描   - full : 全盘扫描   - custom : 自定义扫描
    * scanPeriodDate  扫描周期日期（1-28；扫描周期为week时，1-7代表周日至周六；扫描周期为month时，1-28代表每月1日到28日）
    * scanTime  扫描时间戳，毫秒（仅启动类型为later时有值）
    * scanHour  扫描小时数（仅启动类型为period时有值）
    * scanMinute  扫描分钟数（仅启动类型为period时有值）
    * timezoneOffset  时区偏移量（仅启动类型为period时有值，单位：分钟）
    * fileTypes  文件类型集合型，包含如下:   - 0 ：全部   - 1 : 可执行   - 2 : 压缩   - 3 : 脚本   - 4 : 文档   - 5 : 图片   - 6 : 音视频
    * scanDir  扫描目录，多个用;分隔
    * ignoreDir  排除目录，多个用;分隔
    * action  **参数解释**: 处置动作 **取值范围**: - auto：自动处置 - manual：人工处置
    * whetherPaidTask  此次扫描任务是否付费
    * taskId  **参数解释**： 任务ID **取值范围**: 字符长度1-64位
    * hostIds  策略管理主机列表
    *
    * @var string[]
    */
    protected static $getters = [
            'policyName' => 'getPolicyName',
            'startType' => 'getStartType',
            'scanPeriod' => 'getScanPeriod',
            'scanType' => 'getScanType',
            'scanPeriodDate' => 'getScanPeriodDate',
            'scanTime' => 'getScanTime',
            'scanHour' => 'getScanHour',
            'scanMinute' => 'getScanMinute',
            'timezoneOffset' => 'getTimezoneOffset',
            'fileTypes' => 'getFileTypes',
            'scanDir' => 'getScanDir',
            'ignoreDir' => 'getIgnoreDir',
            'action' => 'getAction',
            'whetherPaidTask' => 'getWhetherPaidTask',
            'taskId' => 'getTaskId',
            'hostIds' => 'getHostIds'
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
        $this->container['policyName'] = isset($data['policyName']) ? $data['policyName'] : null;
        $this->container['startType'] = isset($data['startType']) ? $data['startType'] : null;
        $this->container['scanPeriod'] = isset($data['scanPeriod']) ? $data['scanPeriod'] : null;
        $this->container['scanType'] = isset($data['scanType']) ? $data['scanType'] : null;
        $this->container['scanPeriodDate'] = isset($data['scanPeriodDate']) ? $data['scanPeriodDate'] : null;
        $this->container['scanTime'] = isset($data['scanTime']) ? $data['scanTime'] : null;
        $this->container['scanHour'] = isset($data['scanHour']) ? $data['scanHour'] : null;
        $this->container['scanMinute'] = isset($data['scanMinute']) ? $data['scanMinute'] : null;
        $this->container['timezoneOffset'] = isset($data['timezoneOffset']) ? $data['timezoneOffset'] : null;
        $this->container['fileTypes'] = isset($data['fileTypes']) ? $data['fileTypes'] : null;
        $this->container['scanDir'] = isset($data['scanDir']) ? $data['scanDir'] : null;
        $this->container['ignoreDir'] = isset($data['ignoreDir']) ? $data['ignoreDir'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['whetherPaidTask'] = isset($data['whetherPaidTask']) ? $data['whetherPaidTask'] : null;
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['hostIds'] = isset($data['hostIds']) ? $data['hostIds'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['policyName'] === null) {
            $invalidProperties[] = "'policyName' can't be null";
        }
            if ((mb_strlen($this->container['policyName']) > 64)) {
                $invalidProperties[] = "invalid value for 'policyName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['policyName']) < 1)) {
                $invalidProperties[] = "invalid value for 'policyName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^.*$/", $this->container['policyName'])) {
                $invalidProperties[] = "invalid value for 'policyName', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['startType'] === null) {
            $invalidProperties[] = "'startType' can't be null";
        }
            if (!preg_match("/^now|later|period$/", $this->container['startType'])) {
                $invalidProperties[] = "invalid value for 'startType', must be conform to the pattern /^now|later|period$/.";
            }
            if (!is_null($this->container['scanType']) && (mb_strlen($this->container['scanType']) > 10)) {
                $invalidProperties[] = "invalid value for 'scanType', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['scanType']) && (mb_strlen($this->container['scanType']) < 1)) {
                $invalidProperties[] = "invalid value for 'scanType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['scanPeriodDate']) && ($this->container['scanPeriodDate'] > 31)) {
                $invalidProperties[] = "invalid value for 'scanPeriodDate', must be smaller than or equal to 31.";
            }
            if (!is_null($this->container['scanPeriodDate']) && ($this->container['scanPeriodDate'] < 1)) {
                $invalidProperties[] = "invalid value for 'scanPeriodDate', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['scanTime']) && ($this->container['scanTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'scanTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['scanTime']) && ($this->container['scanTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'scanTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scanHour']) && ($this->container['scanHour'] > 24)) {
                $invalidProperties[] = "invalid value for 'scanHour', must be smaller than or equal to 24.";
            }
            if (!is_null($this->container['scanHour']) && ($this->container['scanHour'] < 1)) {
                $invalidProperties[] = "invalid value for 'scanHour', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['scanMinute']) && ($this->container['scanMinute'] > 31)) {
                $invalidProperties[] = "invalid value for 'scanMinute', must be smaller than or equal to 31.";
            }
            if (!is_null($this->container['scanMinute']) && ($this->container['scanMinute'] < 1)) {
                $invalidProperties[] = "invalid value for 'scanMinute', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['timezoneOffset']) && ($this->container['timezoneOffset'] > 720)) {
                $invalidProperties[] = "invalid value for 'timezoneOffset', must be smaller than or equal to 720.";
            }
            if (!is_null($this->container['timezoneOffset']) && ($this->container['timezoneOffset'] < -720)) {
                $invalidProperties[] = "invalid value for 'timezoneOffset', must be bigger than or equal to -720.";
            }
        if ($this->container['fileTypes'] === null) {
            $invalidProperties[] = "'fileTypes' can't be null";
        }
            if (!is_null($this->container['scanDir']) && !preg_match("/^.*$/", $this->container['scanDir'])) {
                $invalidProperties[] = "invalid value for 'scanDir', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['ignoreDir']) && !preg_match("/^.*$/", $this->container['ignoreDir'])) {
                $invalidProperties[] = "invalid value for 'ignoreDir', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
            if ((mb_strlen($this->container['action']) > 10)) {
                $invalidProperties[] = "invalid value for 'action', the character length must be smaller than or equal to 10.";
            }
            if ((mb_strlen($this->container['action']) < 1)) {
                $invalidProperties[] = "invalid value for 'action', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['whetherPaidTask'] === null) {
            $invalidProperties[] = "'whetherPaidTask' can't be null";
        }
            if (!is_null($this->container['taskId']) && !preg_match("/^.*$/", $this->container['taskId'])) {
                $invalidProperties[] = "invalid value for 'taskId', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['hostIds'] === null) {
            $invalidProperties[] = "'hostIds' can't be null";
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
    * Gets policyName
    *  策略名称
    *
    * @return string
    */
    public function getPolicyName()
    {
        return $this->container['policyName'];
    }

    /**
    * Sets policyName
    *
    * @param string $policyName 策略名称
    *
    * @return $this
    */
    public function setPolicyName($policyName)
    {
        $this->container['policyName'] = $policyName;
        return $this;
    }

    /**
    * Gets startType
    *  **参数解释**： 启动类型 **取值范围**： 包含如下   - now：立即启动   - later：稍后启动   - period：周期启动
    *
    * @return string
    */
    public function getStartType()
    {
        return $this->container['startType'];
    }

    /**
    * Sets startType
    *
    * @param string $startType **参数解释**： 启动类型 **取值范围**： 包含如下   - now：立即启动   - later：稍后启动   - period：周期启动
    *
    * @return $this
    */
    public function setStartType($startType)
    {
        $this->container['startType'] = $startType;
        return $this;
    }

    /**
    * Gets scanPeriod
    *  启动类型，包含如下:   - day ：每天   - week : 每周   - month : 每月
    *
    * @return string|null
    */
    public function getScanPeriod()
    {
        return $this->container['scanPeriod'];
    }

    /**
    * Sets scanPeriod
    *
    * @param string|null $scanPeriod 启动类型，包含如下:   - day ：每天   - week : 每周   - month : 每月
    *
    * @return $this
    */
    public function setScanPeriod($scanPeriod)
    {
        $this->container['scanPeriod'] = $scanPeriod;
        return $this;
    }

    /**
    * Gets scanType
    *  **参数解释**： 任务类型 **取值范围**： 包含如下:   - quick ：快速扫描   - full : 全盘扫描   - custom : 自定义扫描
    *
    * @return string|null
    */
    public function getScanType()
    {
        return $this->container['scanType'];
    }

    /**
    * Sets scanType
    *
    * @param string|null $scanType **参数解释**： 任务类型 **取值范围**： 包含如下:   - quick ：快速扫描   - full : 全盘扫描   - custom : 自定义扫描
    *
    * @return $this
    */
    public function setScanType($scanType)
    {
        $this->container['scanType'] = $scanType;
        return $this;
    }

    /**
    * Gets scanPeriodDate
    *  扫描周期日期（1-28；扫描周期为week时，1-7代表周日至周六；扫描周期为month时，1-28代表每月1日到28日）
    *
    * @return int|null
    */
    public function getScanPeriodDate()
    {
        return $this->container['scanPeriodDate'];
    }

    /**
    * Sets scanPeriodDate
    *
    * @param int|null $scanPeriodDate 扫描周期日期（1-28；扫描周期为week时，1-7代表周日至周六；扫描周期为month时，1-28代表每月1日到28日）
    *
    * @return $this
    */
    public function setScanPeriodDate($scanPeriodDate)
    {
        $this->container['scanPeriodDate'] = $scanPeriodDate;
        return $this;
    }

    /**
    * Gets scanTime
    *  扫描时间戳，毫秒（仅启动类型为later时有值）
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
    * @param int|null $scanTime 扫描时间戳，毫秒（仅启动类型为later时有值）
    *
    * @return $this
    */
    public function setScanTime($scanTime)
    {
        $this->container['scanTime'] = $scanTime;
        return $this;
    }

    /**
    * Gets scanHour
    *  扫描小时数（仅启动类型为period时有值）
    *
    * @return int|null
    */
    public function getScanHour()
    {
        return $this->container['scanHour'];
    }

    /**
    * Sets scanHour
    *
    * @param int|null $scanHour 扫描小时数（仅启动类型为period时有值）
    *
    * @return $this
    */
    public function setScanHour($scanHour)
    {
        $this->container['scanHour'] = $scanHour;
        return $this;
    }

    /**
    * Gets scanMinute
    *  扫描分钟数（仅启动类型为period时有值）
    *
    * @return int|null
    */
    public function getScanMinute()
    {
        return $this->container['scanMinute'];
    }

    /**
    * Sets scanMinute
    *
    * @param int|null $scanMinute 扫描分钟数（仅启动类型为period时有值）
    *
    * @return $this
    */
    public function setScanMinute($scanMinute)
    {
        $this->container['scanMinute'] = $scanMinute;
        return $this;
    }

    /**
    * Gets timezoneOffset
    *  时区偏移量（仅启动类型为period时有值，单位：分钟）
    *
    * @return int|null
    */
    public function getTimezoneOffset()
    {
        return $this->container['timezoneOffset'];
    }

    /**
    * Sets timezoneOffset
    *
    * @param int|null $timezoneOffset 时区偏移量（仅启动类型为period时有值，单位：分钟）
    *
    * @return $this
    */
    public function setTimezoneOffset($timezoneOffset)
    {
        $this->container['timezoneOffset'] = $timezoneOffset;
        return $this;
    }

    /**
    * Gets fileTypes
    *  文件类型集合型，包含如下:   - 0 ：全部   - 1 : 可执行   - 2 : 压缩   - 3 : 脚本   - 4 : 文档   - 5 : 图片   - 6 : 音视频
    *
    * @return int[]
    */
    public function getFileTypes()
    {
        return $this->container['fileTypes'];
    }

    /**
    * Sets fileTypes
    *
    * @param int[] $fileTypes 文件类型集合型，包含如下:   - 0 ：全部   - 1 : 可执行   - 2 : 压缩   - 3 : 脚本   - 4 : 文档   - 5 : 图片   - 6 : 音视频
    *
    * @return $this
    */
    public function setFileTypes($fileTypes)
    {
        $this->container['fileTypes'] = $fileTypes;
        return $this;
    }

    /**
    * Gets scanDir
    *  扫描目录，多个用;分隔
    *
    * @return string|null
    */
    public function getScanDir()
    {
        return $this->container['scanDir'];
    }

    /**
    * Sets scanDir
    *
    * @param string|null $scanDir 扫描目录，多个用;分隔
    *
    * @return $this
    */
    public function setScanDir($scanDir)
    {
        $this->container['scanDir'] = $scanDir;
        return $this;
    }

    /**
    * Gets ignoreDir
    *  排除目录，多个用;分隔
    *
    * @return string|null
    */
    public function getIgnoreDir()
    {
        return $this->container['ignoreDir'];
    }

    /**
    * Sets ignoreDir
    *
    * @param string|null $ignoreDir 排除目录，多个用;分隔
    *
    * @return $this
    */
    public function setIgnoreDir($ignoreDir)
    {
        $this->container['ignoreDir'] = $ignoreDir;
        return $this;
    }

    /**
    * Gets action
    *  **参数解释**: 处置动作 **取值范围**: - auto：自动处置 - manual：人工处置
    *
    * @return string
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string $action **参数解释**: 处置动作 **取值范围**: - auto：自动处置 - manual：人工处置
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets whetherPaidTask
    *  此次扫描任务是否付费
    *
    * @return bool
    */
    public function getWhetherPaidTask()
    {
        return $this->container['whetherPaidTask'];
    }

    /**
    * Sets whetherPaidTask
    *
    * @param bool $whetherPaidTask 此次扫描任务是否付费
    *
    * @return $this
    */
    public function setWhetherPaidTask($whetherPaidTask)
    {
        $this->container['whetherPaidTask'] = $whetherPaidTask;
        return $this;
    }

    /**
    * Gets taskId
    *  **参数解释**： 任务ID **取值范围**: 字符长度1-64位
    *
    * @return string|null
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string|null $taskId **参数解释**： 任务ID **取值范围**: 字符长度1-64位
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets hostIds
    *  策略管理主机列表
    *
    * @return string[]
    */
    public function getHostIds()
    {
        return $this->container['hostIds'];
    }

    /**
    * Sets hostIds
    *
    * @param string[] $hostIds 策略管理主机列表
    *
    * @return $this
    */
    public function setHostIds($hostIds)
    {
        $this->container['hostIds'] = $hostIds;
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

