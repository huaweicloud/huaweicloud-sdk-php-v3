<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OperationSummaryInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OperationSummaryInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hssVisitDays  **参数解释**: 用户访问HSS天数 **取值范围**: 最小值0，最大值365
    * workloadBeatRate  **参数解释**: 某个工作超过的用户百分比（目前只有漏洞或告警，哪个打败的用户占比高，显示哪个） **取值范围**: 最小值0，最大值1
    * userName  **参数解释**: 用户名 **取值范围**: 字符长度0-128位
    * currentMonthStart  **参数解释**: 当前月初时间戳 **取值范围**: 最小值0，最大值9223372036854775807
    * currentMonthEnd  **参数解释**: 当前月末时间戳 **取值范围**: 最小值0，最大值9223372036854775807
    * handledSecurityEventNum  **参数解释**: 处置的安全事件条数 **取值范围**: 最小值0，最大值2147483647
    * totalWorkloadBeatRate  **参数解释**: 工作量打败的用户百分比 **取值范围**: 最小值0，最大值1
    * title  **参数解释**:  称号 **取值范围**: -vul-fix-master: 补洞大师。 -vul-fix-expert: 漏洞修复小能手。 -baseline-handle: 风险配置处置高手。 -malware-file: 防病毒先锋。 -ransomware-event: 防勒索达人。 -web-tamper-event: 网站守卫。
    * reportId  **参数解释**: 时间字符串 **取值范围**: 字符长度0-32位
    * currentMonth  **参数解释**: 当前月份 **取值范围**: 最小值1，最大值12
    * work  **参数解释**: 工作（哪个打败的用户占比高，显示哪个) **取值范围**: -vul-fix: 漏洞修复 -baseline-handle: 基线处置 -event-handle: 处置入侵事件
    * createTime  **参数解释**: 报告生成时间戳 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hssVisitDays' => 'int',
            'workloadBeatRate' => 'float',
            'userName' => 'string',
            'currentMonthStart' => 'int',
            'currentMonthEnd' => 'int',
            'handledSecurityEventNum' => 'int',
            'totalWorkloadBeatRate' => 'float',
            'title' => 'string',
            'reportId' => 'string',
            'currentMonth' => 'int',
            'work' => 'string',
            'createTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hssVisitDays  **参数解释**: 用户访问HSS天数 **取值范围**: 最小值0，最大值365
    * workloadBeatRate  **参数解释**: 某个工作超过的用户百分比（目前只有漏洞或告警，哪个打败的用户占比高，显示哪个） **取值范围**: 最小值0，最大值1
    * userName  **参数解释**: 用户名 **取值范围**: 字符长度0-128位
    * currentMonthStart  **参数解释**: 当前月初时间戳 **取值范围**: 最小值0，最大值9223372036854775807
    * currentMonthEnd  **参数解释**: 当前月末时间戳 **取值范围**: 最小值0，最大值9223372036854775807
    * handledSecurityEventNum  **参数解释**: 处置的安全事件条数 **取值范围**: 最小值0，最大值2147483647
    * totalWorkloadBeatRate  **参数解释**: 工作量打败的用户百分比 **取值范围**: 最小值0，最大值1
    * title  **参数解释**:  称号 **取值范围**: -vul-fix-master: 补洞大师。 -vul-fix-expert: 漏洞修复小能手。 -baseline-handle: 风险配置处置高手。 -malware-file: 防病毒先锋。 -ransomware-event: 防勒索达人。 -web-tamper-event: 网站守卫。
    * reportId  **参数解释**: 时间字符串 **取值范围**: 字符长度0-32位
    * currentMonth  **参数解释**: 当前月份 **取值范围**: 最小值1，最大值12
    * work  **参数解释**: 工作（哪个打败的用户占比高，显示哪个) **取值范围**: -vul-fix: 漏洞修复 -baseline-handle: 基线处置 -event-handle: 处置入侵事件
    * createTime  **参数解释**: 报告生成时间戳 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hssVisitDays' => 'int32',
        'workloadBeatRate' => 'float',
        'userName' => null,
        'currentMonthStart' => 'int64',
        'currentMonthEnd' => 'int64',
        'handledSecurityEventNum' => 'int64',
        'totalWorkloadBeatRate' => 'float',
        'title' => null,
        'reportId' => null,
        'currentMonth' => 'int32',
        'work' => null,
        'createTime' => 'int64'
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
    * hssVisitDays  **参数解释**: 用户访问HSS天数 **取值范围**: 最小值0，最大值365
    * workloadBeatRate  **参数解释**: 某个工作超过的用户百分比（目前只有漏洞或告警，哪个打败的用户占比高，显示哪个） **取值范围**: 最小值0，最大值1
    * userName  **参数解释**: 用户名 **取值范围**: 字符长度0-128位
    * currentMonthStart  **参数解释**: 当前月初时间戳 **取值范围**: 最小值0，最大值9223372036854775807
    * currentMonthEnd  **参数解释**: 当前月末时间戳 **取值范围**: 最小值0，最大值9223372036854775807
    * handledSecurityEventNum  **参数解释**: 处置的安全事件条数 **取值范围**: 最小值0，最大值2147483647
    * totalWorkloadBeatRate  **参数解释**: 工作量打败的用户百分比 **取值范围**: 最小值0，最大值1
    * title  **参数解释**:  称号 **取值范围**: -vul-fix-master: 补洞大师。 -vul-fix-expert: 漏洞修复小能手。 -baseline-handle: 风险配置处置高手。 -malware-file: 防病毒先锋。 -ransomware-event: 防勒索达人。 -web-tamper-event: 网站守卫。
    * reportId  **参数解释**: 时间字符串 **取值范围**: 字符长度0-32位
    * currentMonth  **参数解释**: 当前月份 **取值范围**: 最小值1，最大值12
    * work  **参数解释**: 工作（哪个打败的用户占比高，显示哪个) **取值范围**: -vul-fix: 漏洞修复 -baseline-handle: 基线处置 -event-handle: 处置入侵事件
    * createTime  **参数解释**: 报告生成时间戳 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hssVisitDays' => 'hss_visit_days',
            'workloadBeatRate' => 'workload_beat_rate',
            'userName' => 'user_name',
            'currentMonthStart' => 'current_month_start',
            'currentMonthEnd' => 'current_month_end',
            'handledSecurityEventNum' => 'handled_security_event_num',
            'totalWorkloadBeatRate' => 'total_workload_beat_rate',
            'title' => 'title',
            'reportId' => 'report_id',
            'currentMonth' => 'current_month',
            'work' => 'work',
            'createTime' => 'create_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hssVisitDays  **参数解释**: 用户访问HSS天数 **取值范围**: 最小值0，最大值365
    * workloadBeatRate  **参数解释**: 某个工作超过的用户百分比（目前只有漏洞或告警，哪个打败的用户占比高，显示哪个） **取值范围**: 最小值0，最大值1
    * userName  **参数解释**: 用户名 **取值范围**: 字符长度0-128位
    * currentMonthStart  **参数解释**: 当前月初时间戳 **取值范围**: 最小值0，最大值9223372036854775807
    * currentMonthEnd  **参数解释**: 当前月末时间戳 **取值范围**: 最小值0，最大值9223372036854775807
    * handledSecurityEventNum  **参数解释**: 处置的安全事件条数 **取值范围**: 最小值0，最大值2147483647
    * totalWorkloadBeatRate  **参数解释**: 工作量打败的用户百分比 **取值范围**: 最小值0，最大值1
    * title  **参数解释**:  称号 **取值范围**: -vul-fix-master: 补洞大师。 -vul-fix-expert: 漏洞修复小能手。 -baseline-handle: 风险配置处置高手。 -malware-file: 防病毒先锋。 -ransomware-event: 防勒索达人。 -web-tamper-event: 网站守卫。
    * reportId  **参数解释**: 时间字符串 **取值范围**: 字符长度0-32位
    * currentMonth  **参数解释**: 当前月份 **取值范围**: 最小值1，最大值12
    * work  **参数解释**: 工作（哪个打败的用户占比高，显示哪个) **取值范围**: -vul-fix: 漏洞修复 -baseline-handle: 基线处置 -event-handle: 处置入侵事件
    * createTime  **参数解释**: 报告生成时间戳 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @var string[]
    */
    protected static $setters = [
            'hssVisitDays' => 'setHssVisitDays',
            'workloadBeatRate' => 'setWorkloadBeatRate',
            'userName' => 'setUserName',
            'currentMonthStart' => 'setCurrentMonthStart',
            'currentMonthEnd' => 'setCurrentMonthEnd',
            'handledSecurityEventNum' => 'setHandledSecurityEventNum',
            'totalWorkloadBeatRate' => 'setTotalWorkloadBeatRate',
            'title' => 'setTitle',
            'reportId' => 'setReportId',
            'currentMonth' => 'setCurrentMonth',
            'work' => 'setWork',
            'createTime' => 'setCreateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hssVisitDays  **参数解释**: 用户访问HSS天数 **取值范围**: 最小值0，最大值365
    * workloadBeatRate  **参数解释**: 某个工作超过的用户百分比（目前只有漏洞或告警，哪个打败的用户占比高，显示哪个） **取值范围**: 最小值0，最大值1
    * userName  **参数解释**: 用户名 **取值范围**: 字符长度0-128位
    * currentMonthStart  **参数解释**: 当前月初时间戳 **取值范围**: 最小值0，最大值9223372036854775807
    * currentMonthEnd  **参数解释**: 当前月末时间戳 **取值范围**: 最小值0，最大值9223372036854775807
    * handledSecurityEventNum  **参数解释**: 处置的安全事件条数 **取值范围**: 最小值0，最大值2147483647
    * totalWorkloadBeatRate  **参数解释**: 工作量打败的用户百分比 **取值范围**: 最小值0，最大值1
    * title  **参数解释**:  称号 **取值范围**: -vul-fix-master: 补洞大师。 -vul-fix-expert: 漏洞修复小能手。 -baseline-handle: 风险配置处置高手。 -malware-file: 防病毒先锋。 -ransomware-event: 防勒索达人。 -web-tamper-event: 网站守卫。
    * reportId  **参数解释**: 时间字符串 **取值范围**: 字符长度0-32位
    * currentMonth  **参数解释**: 当前月份 **取值范围**: 最小值1，最大值12
    * work  **参数解释**: 工作（哪个打败的用户占比高，显示哪个) **取值范围**: -vul-fix: 漏洞修复 -baseline-handle: 基线处置 -event-handle: 处置入侵事件
    * createTime  **参数解释**: 报告生成时间戳 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @var string[]
    */
    protected static $getters = [
            'hssVisitDays' => 'getHssVisitDays',
            'workloadBeatRate' => 'getWorkloadBeatRate',
            'userName' => 'getUserName',
            'currentMonthStart' => 'getCurrentMonthStart',
            'currentMonthEnd' => 'getCurrentMonthEnd',
            'handledSecurityEventNum' => 'getHandledSecurityEventNum',
            'totalWorkloadBeatRate' => 'getTotalWorkloadBeatRate',
            'title' => 'getTitle',
            'reportId' => 'getReportId',
            'currentMonth' => 'getCurrentMonth',
            'work' => 'getWork',
            'createTime' => 'getCreateTime'
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
        $this->container['hssVisitDays'] = isset($data['hssVisitDays']) ? $data['hssVisitDays'] : null;
        $this->container['workloadBeatRate'] = isset($data['workloadBeatRate']) ? $data['workloadBeatRate'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['currentMonthStart'] = isset($data['currentMonthStart']) ? $data['currentMonthStart'] : null;
        $this->container['currentMonthEnd'] = isset($data['currentMonthEnd']) ? $data['currentMonthEnd'] : null;
        $this->container['handledSecurityEventNum'] = isset($data['handledSecurityEventNum']) ? $data['handledSecurityEventNum'] : null;
        $this->container['totalWorkloadBeatRate'] = isset($data['totalWorkloadBeatRate']) ? $data['totalWorkloadBeatRate'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['reportId'] = isset($data['reportId']) ? $data['reportId'] : null;
        $this->container['currentMonth'] = isset($data['currentMonth']) ? $data['currentMonth'] : null;
        $this->container['work'] = isset($data['work']) ? $data['work'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['hssVisitDays']) && ($this->container['hssVisitDays'] > 31)) {
                $invalidProperties[] = "invalid value for 'hssVisitDays', must be smaller than or equal to 31.";
            }
            if (!is_null($this->container['hssVisitDays']) && ($this->container['hssVisitDays'] < 0)) {
                $invalidProperties[] = "invalid value for 'hssVisitDays', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['workloadBeatRate']) && ($this->container['workloadBeatRate'] > 1)) {
                $invalidProperties[] = "invalid value for 'workloadBeatRate', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['workloadBeatRate']) && ($this->container['workloadBeatRate'] < 0)) {
                $invalidProperties[] = "invalid value for 'workloadBeatRate', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) > 128)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) < 0)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['userName']) && !preg_match("/^.*$/", $this->container['userName'])) {
                $invalidProperties[] = "invalid value for 'userName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['currentMonthStart']) && ($this->container['currentMonthStart'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'currentMonthStart', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['currentMonthStart']) && ($this->container['currentMonthStart'] < 0)) {
                $invalidProperties[] = "invalid value for 'currentMonthStart', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['currentMonthEnd']) && ($this->container['currentMonthEnd'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'currentMonthEnd', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['currentMonthEnd']) && ($this->container['currentMonthEnd'] < 0)) {
                $invalidProperties[] = "invalid value for 'currentMonthEnd', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['handledSecurityEventNum']) && ($this->container['handledSecurityEventNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'handledSecurityEventNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['handledSecurityEventNum']) && ($this->container['handledSecurityEventNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'handledSecurityEventNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['totalWorkloadBeatRate']) && ($this->container['totalWorkloadBeatRate'] > 1)) {
                $invalidProperties[] = "invalid value for 'totalWorkloadBeatRate', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['totalWorkloadBeatRate']) && ($this->container['totalWorkloadBeatRate'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalWorkloadBeatRate', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 128)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) < 0)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['title']) && !preg_match("/^vul-fix-master|vul-fix-expert|baseline-handle|malware-file|ransomware-event|web-tamper-event$/", $this->container['title'])) {
                $invalidProperties[] = "invalid value for 'title', must be conform to the pattern /^vul-fix-master|vul-fix-expert|baseline-handle|malware-file|ransomware-event|web-tamper-event$/.";
            }
            if (!is_null($this->container['reportId']) && (mb_strlen($this->container['reportId']) > 32)) {
                $invalidProperties[] = "invalid value for 'reportId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['reportId']) && (mb_strlen($this->container['reportId']) < 0)) {
                $invalidProperties[] = "invalid value for 'reportId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['reportId']) && !preg_match("/^.*$/", $this->container['reportId'])) {
                $invalidProperties[] = "invalid value for 'reportId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['currentMonth']) && ($this->container['currentMonth'] > 12)) {
                $invalidProperties[] = "invalid value for 'currentMonth', must be smaller than or equal to 12.";
            }
            if (!is_null($this->container['currentMonth']) && ($this->container['currentMonth'] < 1)) {
                $invalidProperties[] = "invalid value for 'currentMonth', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['work']) && (mb_strlen($this->container['work']) > 32)) {
                $invalidProperties[] = "invalid value for 'work', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['work']) && (mb_strlen($this->container['work']) < 0)) {
                $invalidProperties[] = "invalid value for 'work', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['work']) && !preg_match("/^vul-fix|baseline-handle|event-handle$/", $this->container['work'])) {
                $invalidProperties[] = "invalid value for 'work', must be conform to the pattern /^vul-fix|baseline-handle|event-handle$/.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
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
    * Gets hssVisitDays
    *  **参数解释**: 用户访问HSS天数 **取值范围**: 最小值0，最大值365
    *
    * @return int|null
    */
    public function getHssVisitDays()
    {
        return $this->container['hssVisitDays'];
    }

    /**
    * Sets hssVisitDays
    *
    * @param int|null $hssVisitDays **参数解释**: 用户访问HSS天数 **取值范围**: 最小值0，最大值365
    *
    * @return $this
    */
    public function setHssVisitDays($hssVisitDays)
    {
        $this->container['hssVisitDays'] = $hssVisitDays;
        return $this;
    }

    /**
    * Gets workloadBeatRate
    *  **参数解释**: 某个工作超过的用户百分比（目前只有漏洞或告警，哪个打败的用户占比高，显示哪个） **取值范围**: 最小值0，最大值1
    *
    * @return float|null
    */
    public function getWorkloadBeatRate()
    {
        return $this->container['workloadBeatRate'];
    }

    /**
    * Sets workloadBeatRate
    *
    * @param float|null $workloadBeatRate **参数解释**: 某个工作超过的用户百分比（目前只有漏洞或告警，哪个打败的用户占比高，显示哪个） **取值范围**: 最小值0，最大值1
    *
    * @return $this
    */
    public function setWorkloadBeatRate($workloadBeatRate)
    {
        $this->container['workloadBeatRate'] = $workloadBeatRate;
        return $this;
    }

    /**
    * Gets userName
    *  **参数解释**: 用户名 **取值范围**: 字符长度0-128位
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName **参数解释**: 用户名 **取值范围**: 字符长度0-128位
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets currentMonthStart
    *  **参数解释**: 当前月初时间戳 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return int|null
    */
    public function getCurrentMonthStart()
    {
        return $this->container['currentMonthStart'];
    }

    /**
    * Sets currentMonthStart
    *
    * @param int|null $currentMonthStart **参数解释**: 当前月初时间戳 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setCurrentMonthStart($currentMonthStart)
    {
        $this->container['currentMonthStart'] = $currentMonthStart;
        return $this;
    }

    /**
    * Gets currentMonthEnd
    *  **参数解释**: 当前月末时间戳 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return int|null
    */
    public function getCurrentMonthEnd()
    {
        return $this->container['currentMonthEnd'];
    }

    /**
    * Sets currentMonthEnd
    *
    * @param int|null $currentMonthEnd **参数解释**: 当前月末时间戳 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setCurrentMonthEnd($currentMonthEnd)
    {
        $this->container['currentMonthEnd'] = $currentMonthEnd;
        return $this;
    }

    /**
    * Gets handledSecurityEventNum
    *  **参数解释**: 处置的安全事件条数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getHandledSecurityEventNum()
    {
        return $this->container['handledSecurityEventNum'];
    }

    /**
    * Sets handledSecurityEventNum
    *
    * @param int|null $handledSecurityEventNum **参数解释**: 处置的安全事件条数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setHandledSecurityEventNum($handledSecurityEventNum)
    {
        $this->container['handledSecurityEventNum'] = $handledSecurityEventNum;
        return $this;
    }

    /**
    * Gets totalWorkloadBeatRate
    *  **参数解释**: 工作量打败的用户百分比 **取值范围**: 最小值0，最大值1
    *
    * @return float|null
    */
    public function getTotalWorkloadBeatRate()
    {
        return $this->container['totalWorkloadBeatRate'];
    }

    /**
    * Sets totalWorkloadBeatRate
    *
    * @param float|null $totalWorkloadBeatRate **参数解释**: 工作量打败的用户百分比 **取值范围**: 最小值0，最大值1
    *
    * @return $this
    */
    public function setTotalWorkloadBeatRate($totalWorkloadBeatRate)
    {
        $this->container['totalWorkloadBeatRate'] = $totalWorkloadBeatRate;
        return $this;
    }

    /**
    * Gets title
    *  **参数解释**:  称号 **取值范围**: -vul-fix-master: 补洞大师。 -vul-fix-expert: 漏洞修复小能手。 -baseline-handle: 风险配置处置高手。 -malware-file: 防病毒先锋。 -ransomware-event: 防勒索达人。 -web-tamper-event: 网站守卫。
    *
    * @return string|null
    */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
    * Sets title
    *
    * @param string|null $title **参数解释**:  称号 **取值范围**: -vul-fix-master: 补洞大师。 -vul-fix-expert: 漏洞修复小能手。 -baseline-handle: 风险配置处置高手。 -malware-file: 防病毒先锋。 -ransomware-event: 防勒索达人。 -web-tamper-event: 网站守卫。
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets reportId
    *  **参数解释**: 时间字符串 **取值范围**: 字符长度0-32位
    *
    * @return string|null
    */
    public function getReportId()
    {
        return $this->container['reportId'];
    }

    /**
    * Sets reportId
    *
    * @param string|null $reportId **参数解释**: 时间字符串 **取值范围**: 字符长度0-32位
    *
    * @return $this
    */
    public function setReportId($reportId)
    {
        $this->container['reportId'] = $reportId;
        return $this;
    }

    /**
    * Gets currentMonth
    *  **参数解释**: 当前月份 **取值范围**: 最小值1，最大值12
    *
    * @return int|null
    */
    public function getCurrentMonth()
    {
        return $this->container['currentMonth'];
    }

    /**
    * Sets currentMonth
    *
    * @param int|null $currentMonth **参数解释**: 当前月份 **取值范围**: 最小值1，最大值12
    *
    * @return $this
    */
    public function setCurrentMonth($currentMonth)
    {
        $this->container['currentMonth'] = $currentMonth;
        return $this;
    }

    /**
    * Gets work
    *  **参数解释**: 工作（哪个打败的用户占比高，显示哪个) **取值范围**: -vul-fix: 漏洞修复 -baseline-handle: 基线处置 -event-handle: 处置入侵事件
    *
    * @return string|null
    */
    public function getWork()
    {
        return $this->container['work'];
    }

    /**
    * Sets work
    *
    * @param string|null $work **参数解释**: 工作（哪个打败的用户占比高，显示哪个) **取值范围**: -vul-fix: 漏洞修复 -baseline-handle: 基线处置 -event-handle: 处置入侵事件
    *
    * @return $this
    */
    public function setWork($work)
    {
        $this->container['work'] = $work;
        return $this;
    }

    /**
    * Gets createTime
    *  **参数解释**: 报告生成时间戳 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime **参数解释**: 报告生成时间戳 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
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

