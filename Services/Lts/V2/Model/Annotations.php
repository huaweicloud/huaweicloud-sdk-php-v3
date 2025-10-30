<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Annotations implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Annotations';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * message  告警列表详情
    * logInfo  日志组/流id,名称
    * currentValue  当前值
    * oldAnnotations  (sql/关键词)告警详情原始数据
    * alarmActionRuleName  **参数解释：** 告警行动规则名称。 **取值范围：** 不涉及。
    * alarmRuleAlias  **参数解释：** 告警规则别名。 **取值范围：** 不涉及。
    * alarmRuleUrl  **参数解释：** 告警规则url。 **取值范围：** 不涉及。
    * alarmStatus  **参数解释：** 告警触发状态。 **取值范围：** - 触发(firing) - 恢复(resolved)
    * conditionExpression  **参数解释：** 告警触发条件表达式。 **取值范围：** 不涉及。
    * conditionExpressionWithValue  **参数解释：** 告警触发表达式带值。例如：条件表达式为pv > 0，则condition_expression_with_value取值为：100 > 0。 **取值范围：** 不涉及。
    * notificationFrequency  **参数解释：** 通知频率。 **取值范围：** 不涉及。
    * recordId  **参数解释：** 告警ID。 **取值范围：** 不涉及。
    * recoveryPolicy  **参数解释：** 是否开启告警恢复开关。 **取值范围：** - true： 开启告警恢复 - false： 关闭告警恢复
    * results  **参数解释：** 告警通知的详细信息。
    * frequency  **参数解释：** 告警统计周期。 **取值范围：** 不涉及。
    * type  **参数解释：** 告警规则类型。 **取值范围：** - sql： sql告警 - keywords： 关键词告警
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'message' => 'string',
            'logInfo' => 'string',
            'currentValue' => 'string',
            'oldAnnotations' => 'string',
            'alarmActionRuleName' => 'string',
            'alarmRuleAlias' => 'string',
            'alarmRuleUrl' => 'string',
            'alarmStatus' => 'string',
            'conditionExpression' => 'string',
            'conditionExpressionWithValue' => 'string',
            'notificationFrequency' => 'string',
            'recordId' => 'string',
            'recoveryPolicy' => 'bool',
            'results' => '\HuaweiCloud\SDK\Lts\V2\Model\Results[]',
            'frequency' => 'string',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * message  告警列表详情
    * logInfo  日志组/流id,名称
    * currentValue  当前值
    * oldAnnotations  (sql/关键词)告警详情原始数据
    * alarmActionRuleName  **参数解释：** 告警行动规则名称。 **取值范围：** 不涉及。
    * alarmRuleAlias  **参数解释：** 告警规则别名。 **取值范围：** 不涉及。
    * alarmRuleUrl  **参数解释：** 告警规则url。 **取值范围：** 不涉及。
    * alarmStatus  **参数解释：** 告警触发状态。 **取值范围：** - 触发(firing) - 恢复(resolved)
    * conditionExpression  **参数解释：** 告警触发条件表达式。 **取值范围：** 不涉及。
    * conditionExpressionWithValue  **参数解释：** 告警触发表达式带值。例如：条件表达式为pv > 0，则condition_expression_with_value取值为：100 > 0。 **取值范围：** 不涉及。
    * notificationFrequency  **参数解释：** 通知频率。 **取值范围：** 不涉及。
    * recordId  **参数解释：** 告警ID。 **取值范围：** 不涉及。
    * recoveryPolicy  **参数解释：** 是否开启告警恢复开关。 **取值范围：** - true： 开启告警恢复 - false： 关闭告警恢复
    * results  **参数解释：** 告警通知的详细信息。
    * frequency  **参数解释：** 告警统计周期。 **取值范围：** 不涉及。
    * type  **参数解释：** 告警规则类型。 **取值范围：** - sql： sql告警 - keywords： 关键词告警
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'message' => null,
        'logInfo' => null,
        'currentValue' => null,
        'oldAnnotations' => null,
        'alarmActionRuleName' => null,
        'alarmRuleAlias' => null,
        'alarmRuleUrl' => null,
        'alarmStatus' => null,
        'conditionExpression' => null,
        'conditionExpressionWithValue' => null,
        'notificationFrequency' => null,
        'recordId' => null,
        'recoveryPolicy' => null,
        'results' => null,
        'frequency' => null,
        'type' => null
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
    * message  告警列表详情
    * logInfo  日志组/流id,名称
    * currentValue  当前值
    * oldAnnotations  (sql/关键词)告警详情原始数据
    * alarmActionRuleName  **参数解释：** 告警行动规则名称。 **取值范围：** 不涉及。
    * alarmRuleAlias  **参数解释：** 告警规则别名。 **取值范围：** 不涉及。
    * alarmRuleUrl  **参数解释：** 告警规则url。 **取值范围：** 不涉及。
    * alarmStatus  **参数解释：** 告警触发状态。 **取值范围：** - 触发(firing) - 恢复(resolved)
    * conditionExpression  **参数解释：** 告警触发条件表达式。 **取值范围：** 不涉及。
    * conditionExpressionWithValue  **参数解释：** 告警触发表达式带值。例如：条件表达式为pv > 0，则condition_expression_with_value取值为：100 > 0。 **取值范围：** 不涉及。
    * notificationFrequency  **参数解释：** 通知频率。 **取值范围：** 不涉及。
    * recordId  **参数解释：** 告警ID。 **取值范围：** 不涉及。
    * recoveryPolicy  **参数解释：** 是否开启告警恢复开关。 **取值范围：** - true： 开启告警恢复 - false： 关闭告警恢复
    * results  **参数解释：** 告警通知的详细信息。
    * frequency  **参数解释：** 告警统计周期。 **取值范围：** 不涉及。
    * type  **参数解释：** 告警规则类型。 **取值范围：** - sql： sql告警 - keywords： 关键词告警
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'message' => 'message',
            'logInfo' => 'log_info',
            'currentValue' => 'current_value',
            'oldAnnotations' => 'old_annotations',
            'alarmActionRuleName' => 'alarm_action_rule_name',
            'alarmRuleAlias' => 'alarm_rule_alias',
            'alarmRuleUrl' => 'alarm_rule_url',
            'alarmStatus' => 'alarm_status',
            'conditionExpression' => 'condition_expression',
            'conditionExpressionWithValue' => 'condition_expression_with_value',
            'notificationFrequency' => 'notification_frequency',
            'recordId' => 'record_id',
            'recoveryPolicy' => 'recovery_policy',
            'results' => 'results',
            'frequency' => 'frequency',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * message  告警列表详情
    * logInfo  日志组/流id,名称
    * currentValue  当前值
    * oldAnnotations  (sql/关键词)告警详情原始数据
    * alarmActionRuleName  **参数解释：** 告警行动规则名称。 **取值范围：** 不涉及。
    * alarmRuleAlias  **参数解释：** 告警规则别名。 **取值范围：** 不涉及。
    * alarmRuleUrl  **参数解释：** 告警规则url。 **取值范围：** 不涉及。
    * alarmStatus  **参数解释：** 告警触发状态。 **取值范围：** - 触发(firing) - 恢复(resolved)
    * conditionExpression  **参数解释：** 告警触发条件表达式。 **取值范围：** 不涉及。
    * conditionExpressionWithValue  **参数解释：** 告警触发表达式带值。例如：条件表达式为pv > 0，则condition_expression_with_value取值为：100 > 0。 **取值范围：** 不涉及。
    * notificationFrequency  **参数解释：** 通知频率。 **取值范围：** 不涉及。
    * recordId  **参数解释：** 告警ID。 **取值范围：** 不涉及。
    * recoveryPolicy  **参数解释：** 是否开启告警恢复开关。 **取值范围：** - true： 开启告警恢复 - false： 关闭告警恢复
    * results  **参数解释：** 告警通知的详细信息。
    * frequency  **参数解释：** 告警统计周期。 **取值范围：** 不涉及。
    * type  **参数解释：** 告警规则类型。 **取值范围：** - sql： sql告警 - keywords： 关键词告警
    *
    * @var string[]
    */
    protected static $setters = [
            'message' => 'setMessage',
            'logInfo' => 'setLogInfo',
            'currentValue' => 'setCurrentValue',
            'oldAnnotations' => 'setOldAnnotations',
            'alarmActionRuleName' => 'setAlarmActionRuleName',
            'alarmRuleAlias' => 'setAlarmRuleAlias',
            'alarmRuleUrl' => 'setAlarmRuleUrl',
            'alarmStatus' => 'setAlarmStatus',
            'conditionExpression' => 'setConditionExpression',
            'conditionExpressionWithValue' => 'setConditionExpressionWithValue',
            'notificationFrequency' => 'setNotificationFrequency',
            'recordId' => 'setRecordId',
            'recoveryPolicy' => 'setRecoveryPolicy',
            'results' => 'setResults',
            'frequency' => 'setFrequency',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * message  告警列表详情
    * logInfo  日志组/流id,名称
    * currentValue  当前值
    * oldAnnotations  (sql/关键词)告警详情原始数据
    * alarmActionRuleName  **参数解释：** 告警行动规则名称。 **取值范围：** 不涉及。
    * alarmRuleAlias  **参数解释：** 告警规则别名。 **取值范围：** 不涉及。
    * alarmRuleUrl  **参数解释：** 告警规则url。 **取值范围：** 不涉及。
    * alarmStatus  **参数解释：** 告警触发状态。 **取值范围：** - 触发(firing) - 恢复(resolved)
    * conditionExpression  **参数解释：** 告警触发条件表达式。 **取值范围：** 不涉及。
    * conditionExpressionWithValue  **参数解释：** 告警触发表达式带值。例如：条件表达式为pv > 0，则condition_expression_with_value取值为：100 > 0。 **取值范围：** 不涉及。
    * notificationFrequency  **参数解释：** 通知频率。 **取值范围：** 不涉及。
    * recordId  **参数解释：** 告警ID。 **取值范围：** 不涉及。
    * recoveryPolicy  **参数解释：** 是否开启告警恢复开关。 **取值范围：** - true： 开启告警恢复 - false： 关闭告警恢复
    * results  **参数解释：** 告警通知的详细信息。
    * frequency  **参数解释：** 告警统计周期。 **取值范围：** 不涉及。
    * type  **参数解释：** 告警规则类型。 **取值范围：** - sql： sql告警 - keywords： 关键词告警
    *
    * @var string[]
    */
    protected static $getters = [
            'message' => 'getMessage',
            'logInfo' => 'getLogInfo',
            'currentValue' => 'getCurrentValue',
            'oldAnnotations' => 'getOldAnnotations',
            'alarmActionRuleName' => 'getAlarmActionRuleName',
            'alarmRuleAlias' => 'getAlarmRuleAlias',
            'alarmRuleUrl' => 'getAlarmRuleUrl',
            'alarmStatus' => 'getAlarmStatus',
            'conditionExpression' => 'getConditionExpression',
            'conditionExpressionWithValue' => 'getConditionExpressionWithValue',
            'notificationFrequency' => 'getNotificationFrequency',
            'recordId' => 'getRecordId',
            'recoveryPolicy' => 'getRecoveryPolicy',
            'results' => 'getResults',
            'frequency' => 'getFrequency',
            'type' => 'getType'
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
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['logInfo'] = isset($data['logInfo']) ? $data['logInfo'] : null;
        $this->container['currentValue'] = isset($data['currentValue']) ? $data['currentValue'] : null;
        $this->container['oldAnnotations'] = isset($data['oldAnnotations']) ? $data['oldAnnotations'] : null;
        $this->container['alarmActionRuleName'] = isset($data['alarmActionRuleName']) ? $data['alarmActionRuleName'] : null;
        $this->container['alarmRuleAlias'] = isset($data['alarmRuleAlias']) ? $data['alarmRuleAlias'] : null;
        $this->container['alarmRuleUrl'] = isset($data['alarmRuleUrl']) ? $data['alarmRuleUrl'] : null;
        $this->container['alarmStatus'] = isset($data['alarmStatus']) ? $data['alarmStatus'] : null;
        $this->container['conditionExpression'] = isset($data['conditionExpression']) ? $data['conditionExpression'] : null;
        $this->container['conditionExpressionWithValue'] = isset($data['conditionExpressionWithValue']) ? $data['conditionExpressionWithValue'] : null;
        $this->container['notificationFrequency'] = isset($data['notificationFrequency']) ? $data['notificationFrequency'] : null;
        $this->container['recordId'] = isset($data['recordId']) ? $data['recordId'] : null;
        $this->container['recoveryPolicy'] = isset($data['recoveryPolicy']) ? $data['recoveryPolicy'] : null;
        $this->container['results'] = isset($data['results']) ? $data['results'] : null;
        $this->container['frequency'] = isset($data['frequency']) ? $data['frequency'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['message'] === null) {
            $invalidProperties[] = "'message' can't be null";
        }
            if ((mb_strlen($this->container['message']) > 1024)) {
                $invalidProperties[] = "invalid value for 'message', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['message']) < 1)) {
                $invalidProperties[] = "invalid value for 'message', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['logInfo'] === null) {
            $invalidProperties[] = "'logInfo' can't be null";
        }
            if ((mb_strlen($this->container['logInfo']) > 1024)) {
                $invalidProperties[] = "invalid value for 'logInfo', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['logInfo']) < 1)) {
                $invalidProperties[] = "invalid value for 'logInfo', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['currentValue'] === null) {
            $invalidProperties[] = "'currentValue' can't be null";
        }
            if ((mb_strlen($this->container['currentValue']) > 1024)) {
                $invalidProperties[] = "invalid value for 'currentValue', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['currentValue']) < 1)) {
                $invalidProperties[] = "invalid value for 'currentValue', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['oldAnnotations'] === null) {
            $invalidProperties[] = "'oldAnnotations' can't be null";
        }
            if ((mb_strlen($this->container['oldAnnotations']) > 10000)) {
                $invalidProperties[] = "invalid value for 'oldAnnotations', the character length must be smaller than or equal to 10000.";
            }
            if ((mb_strlen($this->container['oldAnnotations']) < 0)) {
                $invalidProperties[] = "invalid value for 'oldAnnotations', the character length must be bigger than or equal to 0.";
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
    * Gets message
    *  告警列表详情
    *
    * @return string
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string $message 告警列表详情
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets logInfo
    *  日志组/流id,名称
    *
    * @return string
    */
    public function getLogInfo()
    {
        return $this->container['logInfo'];
    }

    /**
    * Sets logInfo
    *
    * @param string $logInfo 日志组/流id,名称
    *
    * @return $this
    */
    public function setLogInfo($logInfo)
    {
        $this->container['logInfo'] = $logInfo;
        return $this;
    }

    /**
    * Gets currentValue
    *  当前值
    *
    * @return string
    */
    public function getCurrentValue()
    {
        return $this->container['currentValue'];
    }

    /**
    * Sets currentValue
    *
    * @param string $currentValue 当前值
    *
    * @return $this
    */
    public function setCurrentValue($currentValue)
    {
        $this->container['currentValue'] = $currentValue;
        return $this;
    }

    /**
    * Gets oldAnnotations
    *  (sql/关键词)告警详情原始数据
    *
    * @return string
    */
    public function getOldAnnotations()
    {
        return $this->container['oldAnnotations'];
    }

    /**
    * Sets oldAnnotations
    *
    * @param string $oldAnnotations (sql/关键词)告警详情原始数据
    *
    * @return $this
    */
    public function setOldAnnotations($oldAnnotations)
    {
        $this->container['oldAnnotations'] = $oldAnnotations;
        return $this;
    }

    /**
    * Gets alarmActionRuleName
    *  **参数解释：** 告警行动规则名称。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getAlarmActionRuleName()
    {
        return $this->container['alarmActionRuleName'];
    }

    /**
    * Sets alarmActionRuleName
    *
    * @param string|null $alarmActionRuleName **参数解释：** 告警行动规则名称。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setAlarmActionRuleName($alarmActionRuleName)
    {
        $this->container['alarmActionRuleName'] = $alarmActionRuleName;
        return $this;
    }

    /**
    * Gets alarmRuleAlias
    *  **参数解释：** 告警规则别名。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getAlarmRuleAlias()
    {
        return $this->container['alarmRuleAlias'];
    }

    /**
    * Sets alarmRuleAlias
    *
    * @param string|null $alarmRuleAlias **参数解释：** 告警规则别名。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setAlarmRuleAlias($alarmRuleAlias)
    {
        $this->container['alarmRuleAlias'] = $alarmRuleAlias;
        return $this;
    }

    /**
    * Gets alarmRuleUrl
    *  **参数解释：** 告警规则url。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getAlarmRuleUrl()
    {
        return $this->container['alarmRuleUrl'];
    }

    /**
    * Sets alarmRuleUrl
    *
    * @param string|null $alarmRuleUrl **参数解释：** 告警规则url。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setAlarmRuleUrl($alarmRuleUrl)
    {
        $this->container['alarmRuleUrl'] = $alarmRuleUrl;
        return $this;
    }

    /**
    * Gets alarmStatus
    *  **参数解释：** 告警触发状态。 **取值范围：** - 触发(firing) - 恢复(resolved)
    *
    * @return string|null
    */
    public function getAlarmStatus()
    {
        return $this->container['alarmStatus'];
    }

    /**
    * Sets alarmStatus
    *
    * @param string|null $alarmStatus **参数解释：** 告警触发状态。 **取值范围：** - 触发(firing) - 恢复(resolved)
    *
    * @return $this
    */
    public function setAlarmStatus($alarmStatus)
    {
        $this->container['alarmStatus'] = $alarmStatus;
        return $this;
    }

    /**
    * Gets conditionExpression
    *  **参数解释：** 告警触发条件表达式。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getConditionExpression()
    {
        return $this->container['conditionExpression'];
    }

    /**
    * Sets conditionExpression
    *
    * @param string|null $conditionExpression **参数解释：** 告警触发条件表达式。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setConditionExpression($conditionExpression)
    {
        $this->container['conditionExpression'] = $conditionExpression;
        return $this;
    }

    /**
    * Gets conditionExpressionWithValue
    *  **参数解释：** 告警触发表达式带值。例如：条件表达式为pv > 0，则condition_expression_with_value取值为：100 > 0。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getConditionExpressionWithValue()
    {
        return $this->container['conditionExpressionWithValue'];
    }

    /**
    * Sets conditionExpressionWithValue
    *
    * @param string|null $conditionExpressionWithValue **参数解释：** 告警触发表达式带值。例如：条件表达式为pv > 0，则condition_expression_with_value取值为：100 > 0。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setConditionExpressionWithValue($conditionExpressionWithValue)
    {
        $this->container['conditionExpressionWithValue'] = $conditionExpressionWithValue;
        return $this;
    }

    /**
    * Gets notificationFrequency
    *  **参数解释：** 通知频率。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getNotificationFrequency()
    {
        return $this->container['notificationFrequency'];
    }

    /**
    * Sets notificationFrequency
    *
    * @param string|null $notificationFrequency **参数解释：** 通知频率。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setNotificationFrequency($notificationFrequency)
    {
        $this->container['notificationFrequency'] = $notificationFrequency;
        return $this;
    }

    /**
    * Gets recordId
    *  **参数解释：** 告警ID。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getRecordId()
    {
        return $this->container['recordId'];
    }

    /**
    * Sets recordId
    *
    * @param string|null $recordId **参数解释：** 告警ID。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setRecordId($recordId)
    {
        $this->container['recordId'] = $recordId;
        return $this;
    }

    /**
    * Gets recoveryPolicy
    *  **参数解释：** 是否开启告警恢复开关。 **取值范围：** - true： 开启告警恢复 - false： 关闭告警恢复
    *
    * @return bool|null
    */
    public function getRecoveryPolicy()
    {
        return $this->container['recoveryPolicy'];
    }

    /**
    * Sets recoveryPolicy
    *
    * @param bool|null $recoveryPolicy **参数解释：** 是否开启告警恢复开关。 **取值范围：** - true： 开启告警恢复 - false： 关闭告警恢复
    *
    * @return $this
    */
    public function setRecoveryPolicy($recoveryPolicy)
    {
        $this->container['recoveryPolicy'] = $recoveryPolicy;
        return $this;
    }

    /**
    * Gets results
    *  **参数解释：** 告警通知的详细信息。
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\Results[]|null
    */
    public function getResults()
    {
        return $this->container['results'];
    }

    /**
    * Sets results
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\Results[]|null $results **参数解释：** 告警通知的详细信息。
    *
    * @return $this
    */
    public function setResults($results)
    {
        $this->container['results'] = $results;
        return $this;
    }

    /**
    * Gets frequency
    *  **参数解释：** 告警统计周期。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getFrequency()
    {
        return $this->container['frequency'];
    }

    /**
    * Sets frequency
    *
    * @param string|null $frequency **参数解释：** 告警统计周期。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setFrequency($frequency)
    {
        $this->container['frequency'] = $frequency;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释：** 告警规则类型。 **取值范围：** - sql： sql告警 - keywords： 关键词告警
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数解释：** 告警规则类型。 **取值范围：** - sql： sql告警 - keywords： 关键词告警
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

