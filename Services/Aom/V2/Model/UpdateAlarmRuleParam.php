<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateAlarmRuleParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateAlarmRuleParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * actionEnabled  是否启用通知。
    * alarmActions  告警状态通知列表。
    * alarmAdvice  告警清除建议。
    * alarmDescription  阈值规则描述。
    * alarmLevel  告警级别。1：紧急，2：重要，3：一般，4：提示。
    * alarmRuleName  阈值规则名称。
    * comparisonOperator  超限条件。
    * dimensions  时间序列维度。
    * evaluationPeriods  间隔周期。
    * idTurnOn  阈值规则是否启用。
    * insufficientDataActions  数据不足通知列表。
    * metricName  时间序列名称。名称长度取值范围为1~255个字符。
    * namespace  时间序列命名空间。
    * okActions  正常状态通知列表。
    * period  统计周期。
    * statistic  统计方式。
    * threshold  超限值。
    * unit  时间序列单位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'actionEnabled' => 'bool',
            'alarmActions' => 'string[]',
            'alarmAdvice' => 'string',
            'alarmDescription' => 'string',
            'alarmLevel' => 'int',
            'alarmRuleName' => 'string',
            'comparisonOperator' => 'string',
            'dimensions' => '\HuaweiCloud\SDK\Aom\V2\Model\Dimension[]',
            'evaluationPeriods' => 'int',
            'idTurnOn' => 'bool',
            'insufficientDataActions' => 'string[]',
            'metricName' => 'string',
            'namespace' => 'string',
            'okActions' => 'string[]',
            'period' => 'int',
            'statistic' => 'string',
            'threshold' => 'string',
            'unit' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * actionEnabled  是否启用通知。
    * alarmActions  告警状态通知列表。
    * alarmAdvice  告警清除建议。
    * alarmDescription  阈值规则描述。
    * alarmLevel  告警级别。1：紧急，2：重要，3：一般，4：提示。
    * alarmRuleName  阈值规则名称。
    * comparisonOperator  超限条件。
    * dimensions  时间序列维度。
    * evaluationPeriods  间隔周期。
    * idTurnOn  阈值规则是否启用。
    * insufficientDataActions  数据不足通知列表。
    * metricName  时间序列名称。名称长度取值范围为1~255个字符。
    * namespace  时间序列命名空间。
    * okActions  正常状态通知列表。
    * period  统计周期。
    * statistic  统计方式。
    * threshold  超限值。
    * unit  时间序列单位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'actionEnabled' => null,
        'alarmActions' => null,
        'alarmAdvice' => null,
        'alarmDescription' => null,
        'alarmLevel' => 'int32',
        'alarmRuleName' => null,
        'comparisonOperator' => null,
        'dimensions' => null,
        'evaluationPeriods' => 'int32',
        'idTurnOn' => null,
        'insufficientDataActions' => null,
        'metricName' => null,
        'namespace' => null,
        'okActions' => null,
        'period' => 'int32',
        'statistic' => null,
        'threshold' => null,
        'unit' => null
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
    * actionEnabled  是否启用通知。
    * alarmActions  告警状态通知列表。
    * alarmAdvice  告警清除建议。
    * alarmDescription  阈值规则描述。
    * alarmLevel  告警级别。1：紧急，2：重要，3：一般，4：提示。
    * alarmRuleName  阈值规则名称。
    * comparisonOperator  超限条件。
    * dimensions  时间序列维度。
    * evaluationPeriods  间隔周期。
    * idTurnOn  阈值规则是否启用。
    * insufficientDataActions  数据不足通知列表。
    * metricName  时间序列名称。名称长度取值范围为1~255个字符。
    * namespace  时间序列命名空间。
    * okActions  正常状态通知列表。
    * period  统计周期。
    * statistic  统计方式。
    * threshold  超限值。
    * unit  时间序列单位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'actionEnabled' => 'action_enabled',
            'alarmActions' => 'alarm_actions',
            'alarmAdvice' => 'alarm_advice',
            'alarmDescription' => 'alarm_description',
            'alarmLevel' => 'alarm_level',
            'alarmRuleName' => 'alarm_rule_name',
            'comparisonOperator' => 'comparison_operator',
            'dimensions' => 'dimensions',
            'evaluationPeriods' => 'evaluation_periods',
            'idTurnOn' => 'id_turn_on',
            'insufficientDataActions' => 'insufficient_data_actions',
            'metricName' => 'metric_name',
            'namespace' => 'namespace',
            'okActions' => 'ok_actions',
            'period' => 'period',
            'statistic' => 'statistic',
            'threshold' => 'threshold',
            'unit' => 'unit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * actionEnabled  是否启用通知。
    * alarmActions  告警状态通知列表。
    * alarmAdvice  告警清除建议。
    * alarmDescription  阈值规则描述。
    * alarmLevel  告警级别。1：紧急，2：重要，3：一般，4：提示。
    * alarmRuleName  阈值规则名称。
    * comparisonOperator  超限条件。
    * dimensions  时间序列维度。
    * evaluationPeriods  间隔周期。
    * idTurnOn  阈值规则是否启用。
    * insufficientDataActions  数据不足通知列表。
    * metricName  时间序列名称。名称长度取值范围为1~255个字符。
    * namespace  时间序列命名空间。
    * okActions  正常状态通知列表。
    * period  统计周期。
    * statistic  统计方式。
    * threshold  超限值。
    * unit  时间序列单位
    *
    * @var string[]
    */
    protected static $setters = [
            'actionEnabled' => 'setActionEnabled',
            'alarmActions' => 'setAlarmActions',
            'alarmAdvice' => 'setAlarmAdvice',
            'alarmDescription' => 'setAlarmDescription',
            'alarmLevel' => 'setAlarmLevel',
            'alarmRuleName' => 'setAlarmRuleName',
            'comparisonOperator' => 'setComparisonOperator',
            'dimensions' => 'setDimensions',
            'evaluationPeriods' => 'setEvaluationPeriods',
            'idTurnOn' => 'setIdTurnOn',
            'insufficientDataActions' => 'setInsufficientDataActions',
            'metricName' => 'setMetricName',
            'namespace' => 'setNamespace',
            'okActions' => 'setOkActions',
            'period' => 'setPeriod',
            'statistic' => 'setStatistic',
            'threshold' => 'setThreshold',
            'unit' => 'setUnit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * actionEnabled  是否启用通知。
    * alarmActions  告警状态通知列表。
    * alarmAdvice  告警清除建议。
    * alarmDescription  阈值规则描述。
    * alarmLevel  告警级别。1：紧急，2：重要，3：一般，4：提示。
    * alarmRuleName  阈值规则名称。
    * comparisonOperator  超限条件。
    * dimensions  时间序列维度。
    * evaluationPeriods  间隔周期。
    * idTurnOn  阈值规则是否启用。
    * insufficientDataActions  数据不足通知列表。
    * metricName  时间序列名称。名称长度取值范围为1~255个字符。
    * namespace  时间序列命名空间。
    * okActions  正常状态通知列表。
    * period  统计周期。
    * statistic  统计方式。
    * threshold  超限值。
    * unit  时间序列单位
    *
    * @var string[]
    */
    protected static $getters = [
            'actionEnabled' => 'getActionEnabled',
            'alarmActions' => 'getAlarmActions',
            'alarmAdvice' => 'getAlarmAdvice',
            'alarmDescription' => 'getAlarmDescription',
            'alarmLevel' => 'getAlarmLevel',
            'alarmRuleName' => 'getAlarmRuleName',
            'comparisonOperator' => 'getComparisonOperator',
            'dimensions' => 'getDimensions',
            'evaluationPeriods' => 'getEvaluationPeriods',
            'idTurnOn' => 'getIdTurnOn',
            'insufficientDataActions' => 'getInsufficientDataActions',
            'metricName' => 'getMetricName',
            'namespace' => 'getNamespace',
            'okActions' => 'getOkActions',
            'period' => 'getPeriod',
            'statistic' => 'getStatistic',
            'threshold' => 'getThreshold',
            'unit' => 'getUnit'
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
    const ALARM_LEVEL_1 = 1;
    const ALARM_LEVEL_2 = 2;
    const ALARM_LEVEL_3 = 3;
    const ALARM_LEVEL_4 = 4;
    const STATISTIC_MAXIMUM = 'maximum';
    const STATISTIC_MINIMUM = 'minimum';
    const STATISTIC_AVERAGE = 'average';
    const STATISTIC_SUM = 'sum';
    const STATISTIC_SAMPLE_COUNT = 'sampleCount';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAlarmLevelAllowableValues()
    {
        return [
            self::ALARM_LEVEL_1,
            self::ALARM_LEVEL_2,
            self::ALARM_LEVEL_3,
            self::ALARM_LEVEL_4,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatisticAllowableValues()
    {
        return [
            self::STATISTIC_MAXIMUM,
            self::STATISTIC_MINIMUM,
            self::STATISTIC_AVERAGE,
            self::STATISTIC_SUM,
            self::STATISTIC_SAMPLE_COUNT,
        ];
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
        $this->container['actionEnabled'] = isset($data['actionEnabled']) ? $data['actionEnabled'] : null;
        $this->container['alarmActions'] = isset($data['alarmActions']) ? $data['alarmActions'] : null;
        $this->container['alarmAdvice'] = isset($data['alarmAdvice']) ? $data['alarmAdvice'] : null;
        $this->container['alarmDescription'] = isset($data['alarmDescription']) ? $data['alarmDescription'] : null;
        $this->container['alarmLevel'] = isset($data['alarmLevel']) ? $data['alarmLevel'] : null;
        $this->container['alarmRuleName'] = isset($data['alarmRuleName']) ? $data['alarmRuleName'] : null;
        $this->container['comparisonOperator'] = isset($data['comparisonOperator']) ? $data['comparisonOperator'] : null;
        $this->container['dimensions'] = isset($data['dimensions']) ? $data['dimensions'] : null;
        $this->container['evaluationPeriods'] = isset($data['evaluationPeriods']) ? $data['evaluationPeriods'] : null;
        $this->container['idTurnOn'] = isset($data['idTurnOn']) ? $data['idTurnOn'] : null;
        $this->container['insufficientDataActions'] = isset($data['insufficientDataActions']) ? $data['insufficientDataActions'] : null;
        $this->container['metricName'] = isset($data['metricName']) ? $data['metricName'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['okActions'] = isset($data['okActions']) ? $data['okActions'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['statistic'] = isset($data['statistic']) ? $data['statistic'] : null;
        $this->container['threshold'] = isset($data['threshold']) ? $data['threshold'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getAlarmLevelAllowableValues();
                if (!is_null($this->container['alarmLevel']) && !in_array($this->container['alarmLevel'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'alarmLevel', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['alarmRuleName'] === null) {
            $invalidProperties[] = "'alarmRuleName' can't be null";
        }
            $allowedValues = $this->getStatisticAllowableValues();
                if (!is_null($this->container['statistic']) && !in_array($this->container['statistic'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'statistic', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets actionEnabled
    *  是否启用通知。
    *
    * @return bool|null
    */
    public function getActionEnabled()
    {
        return $this->container['actionEnabled'];
    }

    /**
    * Sets actionEnabled
    *
    * @param bool|null $actionEnabled 是否启用通知。
    *
    * @return $this
    */
    public function setActionEnabled($actionEnabled)
    {
        $this->container['actionEnabled'] = $actionEnabled;
        return $this;
    }

    /**
    * Gets alarmActions
    *  告警状态通知列表。
    *
    * @return string[]|null
    */
    public function getAlarmActions()
    {
        return $this->container['alarmActions'];
    }

    /**
    * Sets alarmActions
    *
    * @param string[]|null $alarmActions 告警状态通知列表。
    *
    * @return $this
    */
    public function setAlarmActions($alarmActions)
    {
        $this->container['alarmActions'] = $alarmActions;
        return $this;
    }

    /**
    * Gets alarmAdvice
    *  告警清除建议。
    *
    * @return string|null
    */
    public function getAlarmAdvice()
    {
        return $this->container['alarmAdvice'];
    }

    /**
    * Sets alarmAdvice
    *
    * @param string|null $alarmAdvice 告警清除建议。
    *
    * @return $this
    */
    public function setAlarmAdvice($alarmAdvice)
    {
        $this->container['alarmAdvice'] = $alarmAdvice;
        return $this;
    }

    /**
    * Gets alarmDescription
    *  阈值规则描述。
    *
    * @return string|null
    */
    public function getAlarmDescription()
    {
        return $this->container['alarmDescription'];
    }

    /**
    * Sets alarmDescription
    *
    * @param string|null $alarmDescription 阈值规则描述。
    *
    * @return $this
    */
    public function setAlarmDescription($alarmDescription)
    {
        $this->container['alarmDescription'] = $alarmDescription;
        return $this;
    }

    /**
    * Gets alarmLevel
    *  告警级别。1：紧急，2：重要，3：一般，4：提示。
    *
    * @return int|null
    */
    public function getAlarmLevel()
    {
        return $this->container['alarmLevel'];
    }

    /**
    * Sets alarmLevel
    *
    * @param int|null $alarmLevel 告警级别。1：紧急，2：重要，3：一般，4：提示。
    *
    * @return $this
    */
    public function setAlarmLevel($alarmLevel)
    {
        $this->container['alarmLevel'] = $alarmLevel;
        return $this;
    }

    /**
    * Gets alarmRuleName
    *  阈值规则名称。
    *
    * @return string
    */
    public function getAlarmRuleName()
    {
        return $this->container['alarmRuleName'];
    }

    /**
    * Sets alarmRuleName
    *
    * @param string $alarmRuleName 阈值规则名称。
    *
    * @return $this
    */
    public function setAlarmRuleName($alarmRuleName)
    {
        $this->container['alarmRuleName'] = $alarmRuleName;
        return $this;
    }

    /**
    * Gets comparisonOperator
    *  超限条件。
    *
    * @return string|null
    */
    public function getComparisonOperator()
    {
        return $this->container['comparisonOperator'];
    }

    /**
    * Sets comparisonOperator
    *
    * @param string|null $comparisonOperator 超限条件。
    *
    * @return $this
    */
    public function setComparisonOperator($comparisonOperator)
    {
        $this->container['comparisonOperator'] = $comparisonOperator;
        return $this;
    }

    /**
    * Gets dimensions
    *  时间序列维度。
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\Dimension[]|null
    */
    public function getDimensions()
    {
        return $this->container['dimensions'];
    }

    /**
    * Sets dimensions
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\Dimension[]|null $dimensions 时间序列维度。
    *
    * @return $this
    */
    public function setDimensions($dimensions)
    {
        $this->container['dimensions'] = $dimensions;
        return $this;
    }

    /**
    * Gets evaluationPeriods
    *  间隔周期。
    *
    * @return int|null
    */
    public function getEvaluationPeriods()
    {
        return $this->container['evaluationPeriods'];
    }

    /**
    * Sets evaluationPeriods
    *
    * @param int|null $evaluationPeriods 间隔周期。
    *
    * @return $this
    */
    public function setEvaluationPeriods($evaluationPeriods)
    {
        $this->container['evaluationPeriods'] = $evaluationPeriods;
        return $this;
    }

    /**
    * Gets idTurnOn
    *  阈值规则是否启用。
    *
    * @return bool|null
    */
    public function getIdTurnOn()
    {
        return $this->container['idTurnOn'];
    }

    /**
    * Sets idTurnOn
    *
    * @param bool|null $idTurnOn 阈值规则是否启用。
    *
    * @return $this
    */
    public function setIdTurnOn($idTurnOn)
    {
        $this->container['idTurnOn'] = $idTurnOn;
        return $this;
    }

    /**
    * Gets insufficientDataActions
    *  数据不足通知列表。
    *
    * @return string[]|null
    */
    public function getInsufficientDataActions()
    {
        return $this->container['insufficientDataActions'];
    }

    /**
    * Sets insufficientDataActions
    *
    * @param string[]|null $insufficientDataActions 数据不足通知列表。
    *
    * @return $this
    */
    public function setInsufficientDataActions($insufficientDataActions)
    {
        $this->container['insufficientDataActions'] = $insufficientDataActions;
        return $this;
    }

    /**
    * Gets metricName
    *  时间序列名称。名称长度取值范围为1~255个字符。
    *
    * @return string|null
    */
    public function getMetricName()
    {
        return $this->container['metricName'];
    }

    /**
    * Sets metricName
    *
    * @param string|null $metricName 时间序列名称。名称长度取值范围为1~255个字符。
    *
    * @return $this
    */
    public function setMetricName($metricName)
    {
        $this->container['metricName'] = $metricName;
        return $this;
    }

    /**
    * Gets namespace
    *  时间序列命名空间。
    *
    * @return string|null
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string|null $namespace 时间序列命名空间。
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets okActions
    *  正常状态通知列表。
    *
    * @return string[]|null
    */
    public function getOkActions()
    {
        return $this->container['okActions'];
    }

    /**
    * Sets okActions
    *
    * @param string[]|null $okActions 正常状态通知列表。
    *
    * @return $this
    */
    public function setOkActions($okActions)
    {
        $this->container['okActions'] = $okActions;
        return $this;
    }

    /**
    * Gets period
    *  统计周期。
    *
    * @return int|null
    */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
    * Sets period
    *
    * @param int|null $period 统计周期。
    *
    * @return $this
    */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;
        return $this;
    }

    /**
    * Gets statistic
    *  统计方式。
    *
    * @return string|null
    */
    public function getStatistic()
    {
        return $this->container['statistic'];
    }

    /**
    * Sets statistic
    *
    * @param string|null $statistic 统计方式。
    *
    * @return $this
    */
    public function setStatistic($statistic)
    {
        $this->container['statistic'] = $statistic;
        return $this;
    }

    /**
    * Gets threshold
    *  超限值。
    *
    * @return string|null
    */
    public function getThreshold()
    {
        return $this->container['threshold'];
    }

    /**
    * Sets threshold
    *
    * @param string|null $threshold 超限值。
    *
    * @return $this
    */
    public function setThreshold($threshold)
    {
        $this->container['threshold'] = $threshold;
        return $this;
    }

    /**
    * Gets unit
    *  时间序列单位
    *
    * @return string|null
    */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
    * Sets unit
    *
    * @param string|null $unit 时间序列单位
    *
    * @return $this
    */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;
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

