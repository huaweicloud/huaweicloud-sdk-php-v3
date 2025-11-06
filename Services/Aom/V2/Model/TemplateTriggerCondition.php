<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TemplateTriggerCondition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TemplateTriggerCondition';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * metricQueryMode  指标查询模式。 - “AOM”：AOM原生 - “PROM”：AOM Prometheus - “NATIVE_PROM”：原生Prometheus
    * metricNamespace  指标命名空间。
    * metricName  指标名称。
    * metricUnit  指标单位。
    * metricLabels  指标维度。
    * promql  Prometheus语句。
    * promqlExpr  Prometheus语句模板。
    * triggerTimes  连续周期个数。
    * triggerInterval  检查频率周期。 - 当trigger_type 为“HOURLY”时，填“” - 当trigger_type为“DAILY”时，格式为：“小时” 。例如每天凌晨三点\"03:00\"。 - 当trigger_type为“WEEKLY”时，格式为：“星期 小时”。例如每周一凌晨三点 “1 03:00”。 - 当trigger_type为“CRON”时，格式为标准CRON表达式。 - 当trigger_type为“FIXED_RATE”时，秒的取值为15s，30s，分钟为 1~59，小时为 1~24。例如“15s”，“30s”，“1min”，“1h”。
    * triggerType  触发频率的类型： - “FIXED_RATE”：固定间隔 - “HOURLY”：每小时 - “DAILY”：每天 - “WEEKLY”：每周 - “CRON”：Cron表达式
    * promqlFor  持续时间。 持续时间范围： - “0”：立即 - “15s”：15秒 - “30s”：30秒 - “1m”：1分钟
    * aggregationType  检测规则： - average：平均值 - minimum：最小值 - maximum：最大值 - sum：总计 - sampleCount：样本
    * operator  判断条件：“>”,“<”,“=”,“>=”,“<=”
    * thresholds  键值对形式，键为告警级别，值为告警阈值
    * aggregationWindow  统计周期。 - “15s”：15秒 - “30s”：30秒 - “1m”：1分钟 - “5m”：5分钟 - “15m”：15分钟 - “1h”：1小时
    * cmdb  cmdb
    * queryMatch  查询筛选条件。
    * aomMonitorLevel  监控层级。
    * aggregateType  聚合方式。 - “by”：不分组 - “avg” - “max” - “min” - “sum”
    * metricStatisticMethod  当配置方式为全量指标时可选择的指标运算方式。 - “single”：单个指标进行运算 - “mix”：多个指标进行混合运算
    * expression  混合运算的表达式。
    * mixPromql  混合运算的promQL。
    * alarmMessageTemplate  通知内容。
    * promqlMonitorTemplates  Prometheus监控模板。默认为cluster。
    * queryParam  - PromQL告警规则，该参数为\"{\\\"defaultRule\\\":{\\\"label\\\":\\\"自定义\\\",\\\"id\\\":\\\"custom\\\"},\\\"templateSelectd\\\":null,\\\"dimensionsList\\\":[]}\" - 阈值告警规则，该参数为空。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'metricQueryMode' => 'string',
            'metricNamespace' => 'string',
            'metricName' => 'string',
            'metricUnit' => 'string',
            'metricLabels' => 'string[]',
            'promql' => 'string',
            'promqlExpr' => 'string',
            'triggerTimes' => 'int',
            'triggerInterval' => 'string',
            'triggerType' => 'string',
            'promqlFor' => 'string',
            'aggregationType' => 'string',
            'operator' => 'string',
            'thresholds' => 'map[string,string]',
            'aggregationWindow' => 'string',
            'cmdb' => '\HuaweiCloud\SDK\Aom\V2\Model\CmdbInfo',
            'queryMatch' => 'string',
            'aomMonitorLevel' => 'string',
            'aggregateType' => 'string',
            'metricStatisticMethod' => 'string',
            'expression' => 'string',
            'mixPromql' => 'string',
            'alarmMessageTemplate' => 'string',
            'promqlMonitorTemplates' => 'string[]',
            'queryParam' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * metricQueryMode  指标查询模式。 - “AOM”：AOM原生 - “PROM”：AOM Prometheus - “NATIVE_PROM”：原生Prometheus
    * metricNamespace  指标命名空间。
    * metricName  指标名称。
    * metricUnit  指标单位。
    * metricLabels  指标维度。
    * promql  Prometheus语句。
    * promqlExpr  Prometheus语句模板。
    * triggerTimes  连续周期个数。
    * triggerInterval  检查频率周期。 - 当trigger_type 为“HOURLY”时，填“” - 当trigger_type为“DAILY”时，格式为：“小时” 。例如每天凌晨三点\"03:00\"。 - 当trigger_type为“WEEKLY”时，格式为：“星期 小时”。例如每周一凌晨三点 “1 03:00”。 - 当trigger_type为“CRON”时，格式为标准CRON表达式。 - 当trigger_type为“FIXED_RATE”时，秒的取值为15s，30s，分钟为 1~59，小时为 1~24。例如“15s”，“30s”，“1min”，“1h”。
    * triggerType  触发频率的类型： - “FIXED_RATE”：固定间隔 - “HOURLY”：每小时 - “DAILY”：每天 - “WEEKLY”：每周 - “CRON”：Cron表达式
    * promqlFor  持续时间。 持续时间范围： - “0”：立即 - “15s”：15秒 - “30s”：30秒 - “1m”：1分钟
    * aggregationType  检测规则： - average：平均值 - minimum：最小值 - maximum：最大值 - sum：总计 - sampleCount：样本
    * operator  判断条件：“>”,“<”,“=”,“>=”,“<=”
    * thresholds  键值对形式，键为告警级别，值为告警阈值
    * aggregationWindow  统计周期。 - “15s”：15秒 - “30s”：30秒 - “1m”：1分钟 - “5m”：5分钟 - “15m”：15分钟 - “1h”：1小时
    * cmdb  cmdb
    * queryMatch  查询筛选条件。
    * aomMonitorLevel  监控层级。
    * aggregateType  聚合方式。 - “by”：不分组 - “avg” - “max” - “min” - “sum”
    * metricStatisticMethod  当配置方式为全量指标时可选择的指标运算方式。 - “single”：单个指标进行运算 - “mix”：多个指标进行混合运算
    * expression  混合运算的表达式。
    * mixPromql  混合运算的promQL。
    * alarmMessageTemplate  通知内容。
    * promqlMonitorTemplates  Prometheus监控模板。默认为cluster。
    * queryParam  - PromQL告警规则，该参数为\"{\\\"defaultRule\\\":{\\\"label\\\":\\\"自定义\\\",\\\"id\\\":\\\"custom\\\"},\\\"templateSelectd\\\":null,\\\"dimensionsList\\\":[]}\" - 阈值告警规则，该参数为空。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'metricQueryMode' => null,
        'metricNamespace' => null,
        'metricName' => null,
        'metricUnit' => null,
        'metricLabels' => null,
        'promql' => null,
        'promqlExpr' => null,
        'triggerTimes' => 'int32',
        'triggerInterval' => null,
        'triggerType' => null,
        'promqlFor' => null,
        'aggregationType' => null,
        'operator' => null,
        'thresholds' => null,
        'aggregationWindow' => null,
        'cmdb' => null,
        'queryMatch' => null,
        'aomMonitorLevel' => null,
        'aggregateType' => null,
        'metricStatisticMethod' => null,
        'expression' => null,
        'mixPromql' => null,
        'alarmMessageTemplate' => null,
        'promqlMonitorTemplates' => null,
        'queryParam' => null
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
    * metricQueryMode  指标查询模式。 - “AOM”：AOM原生 - “PROM”：AOM Prometheus - “NATIVE_PROM”：原生Prometheus
    * metricNamespace  指标命名空间。
    * metricName  指标名称。
    * metricUnit  指标单位。
    * metricLabels  指标维度。
    * promql  Prometheus语句。
    * promqlExpr  Prometheus语句模板。
    * triggerTimes  连续周期个数。
    * triggerInterval  检查频率周期。 - 当trigger_type 为“HOURLY”时，填“” - 当trigger_type为“DAILY”时，格式为：“小时” 。例如每天凌晨三点\"03:00\"。 - 当trigger_type为“WEEKLY”时，格式为：“星期 小时”。例如每周一凌晨三点 “1 03:00”。 - 当trigger_type为“CRON”时，格式为标准CRON表达式。 - 当trigger_type为“FIXED_RATE”时，秒的取值为15s，30s，分钟为 1~59，小时为 1~24。例如“15s”，“30s”，“1min”，“1h”。
    * triggerType  触发频率的类型： - “FIXED_RATE”：固定间隔 - “HOURLY”：每小时 - “DAILY”：每天 - “WEEKLY”：每周 - “CRON”：Cron表达式
    * promqlFor  持续时间。 持续时间范围： - “0”：立即 - “15s”：15秒 - “30s”：30秒 - “1m”：1分钟
    * aggregationType  检测规则： - average：平均值 - minimum：最小值 - maximum：最大值 - sum：总计 - sampleCount：样本
    * operator  判断条件：“>”,“<”,“=”,“>=”,“<=”
    * thresholds  键值对形式，键为告警级别，值为告警阈值
    * aggregationWindow  统计周期。 - “15s”：15秒 - “30s”：30秒 - “1m”：1分钟 - “5m”：5分钟 - “15m”：15分钟 - “1h”：1小时
    * cmdb  cmdb
    * queryMatch  查询筛选条件。
    * aomMonitorLevel  监控层级。
    * aggregateType  聚合方式。 - “by”：不分组 - “avg” - “max” - “min” - “sum”
    * metricStatisticMethod  当配置方式为全量指标时可选择的指标运算方式。 - “single”：单个指标进行运算 - “mix”：多个指标进行混合运算
    * expression  混合运算的表达式。
    * mixPromql  混合运算的promQL。
    * alarmMessageTemplate  通知内容。
    * promqlMonitorTemplates  Prometheus监控模板。默认为cluster。
    * queryParam  - PromQL告警规则，该参数为\"{\\\"defaultRule\\\":{\\\"label\\\":\\\"自定义\\\",\\\"id\\\":\\\"custom\\\"},\\\"templateSelectd\\\":null,\\\"dimensionsList\\\":[]}\" - 阈值告警规则，该参数为空。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'metricQueryMode' => 'metric_query_mode',
            'metricNamespace' => 'metric_namespace',
            'metricName' => 'metric_name',
            'metricUnit' => 'metric_unit',
            'metricLabels' => 'metric_labels',
            'promql' => 'promql',
            'promqlExpr' => 'promql_expr',
            'triggerTimes' => 'trigger_times',
            'triggerInterval' => 'trigger_interval',
            'triggerType' => 'trigger_type',
            'promqlFor' => 'promql_for',
            'aggregationType' => 'aggregation_type',
            'operator' => 'operator',
            'thresholds' => 'thresholds',
            'aggregationWindow' => 'aggregation_window',
            'cmdb' => 'cmdb',
            'queryMatch' => 'query_match',
            'aomMonitorLevel' => 'aom_monitor_level',
            'aggregateType' => 'aggregate_type',
            'metricStatisticMethod' => 'metric_statistic_method',
            'expression' => 'expression',
            'mixPromql' => 'mix_promql',
            'alarmMessageTemplate' => 'alarm_message_template',
            'promqlMonitorTemplates' => 'promql_monitor_templates',
            'queryParam' => 'query_param'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * metricQueryMode  指标查询模式。 - “AOM”：AOM原生 - “PROM”：AOM Prometheus - “NATIVE_PROM”：原生Prometheus
    * metricNamespace  指标命名空间。
    * metricName  指标名称。
    * metricUnit  指标单位。
    * metricLabels  指标维度。
    * promql  Prometheus语句。
    * promqlExpr  Prometheus语句模板。
    * triggerTimes  连续周期个数。
    * triggerInterval  检查频率周期。 - 当trigger_type 为“HOURLY”时，填“” - 当trigger_type为“DAILY”时，格式为：“小时” 。例如每天凌晨三点\"03:00\"。 - 当trigger_type为“WEEKLY”时，格式为：“星期 小时”。例如每周一凌晨三点 “1 03:00”。 - 当trigger_type为“CRON”时，格式为标准CRON表达式。 - 当trigger_type为“FIXED_RATE”时，秒的取值为15s，30s，分钟为 1~59，小时为 1~24。例如“15s”，“30s”，“1min”，“1h”。
    * triggerType  触发频率的类型： - “FIXED_RATE”：固定间隔 - “HOURLY”：每小时 - “DAILY”：每天 - “WEEKLY”：每周 - “CRON”：Cron表达式
    * promqlFor  持续时间。 持续时间范围： - “0”：立即 - “15s”：15秒 - “30s”：30秒 - “1m”：1分钟
    * aggregationType  检测规则： - average：平均值 - minimum：最小值 - maximum：最大值 - sum：总计 - sampleCount：样本
    * operator  判断条件：“>”,“<”,“=”,“>=”,“<=”
    * thresholds  键值对形式，键为告警级别，值为告警阈值
    * aggregationWindow  统计周期。 - “15s”：15秒 - “30s”：30秒 - “1m”：1分钟 - “5m”：5分钟 - “15m”：15分钟 - “1h”：1小时
    * cmdb  cmdb
    * queryMatch  查询筛选条件。
    * aomMonitorLevel  监控层级。
    * aggregateType  聚合方式。 - “by”：不分组 - “avg” - “max” - “min” - “sum”
    * metricStatisticMethod  当配置方式为全量指标时可选择的指标运算方式。 - “single”：单个指标进行运算 - “mix”：多个指标进行混合运算
    * expression  混合运算的表达式。
    * mixPromql  混合运算的promQL。
    * alarmMessageTemplate  通知内容。
    * promqlMonitorTemplates  Prometheus监控模板。默认为cluster。
    * queryParam  - PromQL告警规则，该参数为\"{\\\"defaultRule\\\":{\\\"label\\\":\\\"自定义\\\",\\\"id\\\":\\\"custom\\\"},\\\"templateSelectd\\\":null,\\\"dimensionsList\\\":[]}\" - 阈值告警规则，该参数为空。
    *
    * @var string[]
    */
    protected static $setters = [
            'metricQueryMode' => 'setMetricQueryMode',
            'metricNamespace' => 'setMetricNamespace',
            'metricName' => 'setMetricName',
            'metricUnit' => 'setMetricUnit',
            'metricLabels' => 'setMetricLabels',
            'promql' => 'setPromql',
            'promqlExpr' => 'setPromqlExpr',
            'triggerTimes' => 'setTriggerTimes',
            'triggerInterval' => 'setTriggerInterval',
            'triggerType' => 'setTriggerType',
            'promqlFor' => 'setPromqlFor',
            'aggregationType' => 'setAggregationType',
            'operator' => 'setOperator',
            'thresholds' => 'setThresholds',
            'aggregationWindow' => 'setAggregationWindow',
            'cmdb' => 'setCmdb',
            'queryMatch' => 'setQueryMatch',
            'aomMonitorLevel' => 'setAomMonitorLevel',
            'aggregateType' => 'setAggregateType',
            'metricStatisticMethod' => 'setMetricStatisticMethod',
            'expression' => 'setExpression',
            'mixPromql' => 'setMixPromql',
            'alarmMessageTemplate' => 'setAlarmMessageTemplate',
            'promqlMonitorTemplates' => 'setPromqlMonitorTemplates',
            'queryParam' => 'setQueryParam'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * metricQueryMode  指标查询模式。 - “AOM”：AOM原生 - “PROM”：AOM Prometheus - “NATIVE_PROM”：原生Prometheus
    * metricNamespace  指标命名空间。
    * metricName  指标名称。
    * metricUnit  指标单位。
    * metricLabels  指标维度。
    * promql  Prometheus语句。
    * promqlExpr  Prometheus语句模板。
    * triggerTimes  连续周期个数。
    * triggerInterval  检查频率周期。 - 当trigger_type 为“HOURLY”时，填“” - 当trigger_type为“DAILY”时，格式为：“小时” 。例如每天凌晨三点\"03:00\"。 - 当trigger_type为“WEEKLY”时，格式为：“星期 小时”。例如每周一凌晨三点 “1 03:00”。 - 当trigger_type为“CRON”时，格式为标准CRON表达式。 - 当trigger_type为“FIXED_RATE”时，秒的取值为15s，30s，分钟为 1~59，小时为 1~24。例如“15s”，“30s”，“1min”，“1h”。
    * triggerType  触发频率的类型： - “FIXED_RATE”：固定间隔 - “HOURLY”：每小时 - “DAILY”：每天 - “WEEKLY”：每周 - “CRON”：Cron表达式
    * promqlFor  持续时间。 持续时间范围： - “0”：立即 - “15s”：15秒 - “30s”：30秒 - “1m”：1分钟
    * aggregationType  检测规则： - average：平均值 - minimum：最小值 - maximum：最大值 - sum：总计 - sampleCount：样本
    * operator  判断条件：“>”,“<”,“=”,“>=”,“<=”
    * thresholds  键值对形式，键为告警级别，值为告警阈值
    * aggregationWindow  统计周期。 - “15s”：15秒 - “30s”：30秒 - “1m”：1分钟 - “5m”：5分钟 - “15m”：15分钟 - “1h”：1小时
    * cmdb  cmdb
    * queryMatch  查询筛选条件。
    * aomMonitorLevel  监控层级。
    * aggregateType  聚合方式。 - “by”：不分组 - “avg” - “max” - “min” - “sum”
    * metricStatisticMethod  当配置方式为全量指标时可选择的指标运算方式。 - “single”：单个指标进行运算 - “mix”：多个指标进行混合运算
    * expression  混合运算的表达式。
    * mixPromql  混合运算的promQL。
    * alarmMessageTemplate  通知内容。
    * promqlMonitorTemplates  Prometheus监控模板。默认为cluster。
    * queryParam  - PromQL告警规则，该参数为\"{\\\"defaultRule\\\":{\\\"label\\\":\\\"自定义\\\",\\\"id\\\":\\\"custom\\\"},\\\"templateSelectd\\\":null,\\\"dimensionsList\\\":[]}\" - 阈值告警规则，该参数为空。
    *
    * @var string[]
    */
    protected static $getters = [
            'metricQueryMode' => 'getMetricQueryMode',
            'metricNamespace' => 'getMetricNamespace',
            'metricName' => 'getMetricName',
            'metricUnit' => 'getMetricUnit',
            'metricLabels' => 'getMetricLabels',
            'promql' => 'getPromql',
            'promqlExpr' => 'getPromqlExpr',
            'triggerTimes' => 'getTriggerTimes',
            'triggerInterval' => 'getTriggerInterval',
            'triggerType' => 'getTriggerType',
            'promqlFor' => 'getPromqlFor',
            'aggregationType' => 'getAggregationType',
            'operator' => 'getOperator',
            'thresholds' => 'getThresholds',
            'aggregationWindow' => 'getAggregationWindow',
            'cmdb' => 'getCmdb',
            'queryMatch' => 'getQueryMatch',
            'aomMonitorLevel' => 'getAomMonitorLevel',
            'aggregateType' => 'getAggregateType',
            'metricStatisticMethod' => 'getMetricStatisticMethod',
            'expression' => 'getExpression',
            'mixPromql' => 'getMixPromql',
            'alarmMessageTemplate' => 'getAlarmMessageTemplate',
            'promqlMonitorTemplates' => 'getPromqlMonitorTemplates',
            'queryParam' => 'getQueryParam'
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
    const METRIC_QUERY_MODE_AOM = 'AOM';
    const METRIC_QUERY_MODE_PROM = 'PROM';
    const METRIC_QUERY_MODE_NATIVE_PROM = 'NATIVE_PROM';
    const TRIGGER_TYPE_FIXED_RATE = 'FIXED_RATE';
    const TRIGGER_TYPE_HOURLY = 'HOURLY';
    const TRIGGER_TYPE_DAILY = 'DAILY';
    const TRIGGER_TYPE_WEEKLY = 'WEEKLY';
    const TRIGGER_TYPE_CRON = 'CRON';
    const AGGREGATE_TYPE_BY = 'by';
    const AGGREGATE_TYPE_AVG = 'avg';
    const AGGREGATE_TYPE_MAX = 'max';
    const AGGREGATE_TYPE_MIN = 'min';
    const AGGREGATE_TYPE_SUM = 'sum';
    const METRIC_STATISTIC_METHOD_SINGLE = 'single';
    const METRIC_STATISTIC_METHOD_MIX = 'mix';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMetricQueryModeAllowableValues()
    {
        return [
            self::METRIC_QUERY_MODE_AOM,
            self::METRIC_QUERY_MODE_PROM,
            self::METRIC_QUERY_MODE_NATIVE_PROM,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTriggerTypeAllowableValues()
    {
        return [
            self::TRIGGER_TYPE_FIXED_RATE,
            self::TRIGGER_TYPE_HOURLY,
            self::TRIGGER_TYPE_DAILY,
            self::TRIGGER_TYPE_WEEKLY,
            self::TRIGGER_TYPE_CRON,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAggregateTypeAllowableValues()
    {
        return [
            self::AGGREGATE_TYPE_BY,
            self::AGGREGATE_TYPE_AVG,
            self::AGGREGATE_TYPE_MAX,
            self::AGGREGATE_TYPE_MIN,
            self::AGGREGATE_TYPE_SUM,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMetricStatisticMethodAllowableValues()
    {
        return [
            self::METRIC_STATISTIC_METHOD_SINGLE,
            self::METRIC_STATISTIC_METHOD_MIX,
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
        $this->container['metricQueryMode'] = isset($data['metricQueryMode']) ? $data['metricQueryMode'] : null;
        $this->container['metricNamespace'] = isset($data['metricNamespace']) ? $data['metricNamespace'] : null;
        $this->container['metricName'] = isset($data['metricName']) ? $data['metricName'] : null;
        $this->container['metricUnit'] = isset($data['metricUnit']) ? $data['metricUnit'] : null;
        $this->container['metricLabels'] = isset($data['metricLabels']) ? $data['metricLabels'] : null;
        $this->container['promql'] = isset($data['promql']) ? $data['promql'] : null;
        $this->container['promqlExpr'] = isset($data['promqlExpr']) ? $data['promqlExpr'] : null;
        $this->container['triggerTimes'] = isset($data['triggerTimes']) ? $data['triggerTimes'] : null;
        $this->container['triggerInterval'] = isset($data['triggerInterval']) ? $data['triggerInterval'] : null;
        $this->container['triggerType'] = isset($data['triggerType']) ? $data['triggerType'] : null;
        $this->container['promqlFor'] = isset($data['promqlFor']) ? $data['promqlFor'] : null;
        $this->container['aggregationType'] = isset($data['aggregationType']) ? $data['aggregationType'] : null;
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
        $this->container['thresholds'] = isset($data['thresholds']) ? $data['thresholds'] : null;
        $this->container['aggregationWindow'] = isset($data['aggregationWindow']) ? $data['aggregationWindow'] : null;
        $this->container['cmdb'] = isset($data['cmdb']) ? $data['cmdb'] : null;
        $this->container['queryMatch'] = isset($data['queryMatch']) ? $data['queryMatch'] : null;
        $this->container['aomMonitorLevel'] = isset($data['aomMonitorLevel']) ? $data['aomMonitorLevel'] : null;
        $this->container['aggregateType'] = isset($data['aggregateType']) ? $data['aggregateType'] : null;
        $this->container['metricStatisticMethod'] = isset($data['metricStatisticMethod']) ? $data['metricStatisticMethod'] : null;
        $this->container['expression'] = isset($data['expression']) ? $data['expression'] : null;
        $this->container['mixPromql'] = isset($data['mixPromql']) ? $data['mixPromql'] : null;
        $this->container['alarmMessageTemplate'] = isset($data['alarmMessageTemplate']) ? $data['alarmMessageTemplate'] : null;
        $this->container['promqlMonitorTemplates'] = isset($data['promqlMonitorTemplates']) ? $data['promqlMonitorTemplates'] : null;
        $this->container['queryParam'] = isset($data['queryParam']) ? $data['queryParam'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getMetricQueryModeAllowableValues();
                if (!is_null($this->container['metricQueryMode']) && !in_array($this->container['metricQueryMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'metricQueryMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getTriggerTypeAllowableValues();
                if (!is_null($this->container['triggerType']) && !in_array($this->container['triggerType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'triggerType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getAggregateTypeAllowableValues();
                if (!is_null($this->container['aggregateType']) && !in_array($this->container['aggregateType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'aggregateType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getMetricStatisticMethodAllowableValues();
                if (!is_null($this->container['metricStatisticMethod']) && !in_array($this->container['metricStatisticMethod'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'metricStatisticMethod', must be one of '%s'",
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
    * Gets metricQueryMode
    *  指标查询模式。 - “AOM”：AOM原生 - “PROM”：AOM Prometheus - “NATIVE_PROM”：原生Prometheus
    *
    * @return string|null
    */
    public function getMetricQueryMode()
    {
        return $this->container['metricQueryMode'];
    }

    /**
    * Sets metricQueryMode
    *
    * @param string|null $metricQueryMode 指标查询模式。 - “AOM”：AOM原生 - “PROM”：AOM Prometheus - “NATIVE_PROM”：原生Prometheus
    *
    * @return $this
    */
    public function setMetricQueryMode($metricQueryMode)
    {
        $this->container['metricQueryMode'] = $metricQueryMode;
        return $this;
    }

    /**
    * Gets metricNamespace
    *  指标命名空间。
    *
    * @return string|null
    */
    public function getMetricNamespace()
    {
        return $this->container['metricNamespace'];
    }

    /**
    * Sets metricNamespace
    *
    * @param string|null $metricNamespace 指标命名空间。
    *
    * @return $this
    */
    public function setMetricNamespace($metricNamespace)
    {
        $this->container['metricNamespace'] = $metricNamespace;
        return $this;
    }

    /**
    * Gets metricName
    *  指标名称。
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
    * @param string|null $metricName 指标名称。
    *
    * @return $this
    */
    public function setMetricName($metricName)
    {
        $this->container['metricName'] = $metricName;
        return $this;
    }

    /**
    * Gets metricUnit
    *  指标单位。
    *
    * @return string|null
    */
    public function getMetricUnit()
    {
        return $this->container['metricUnit'];
    }

    /**
    * Sets metricUnit
    *
    * @param string|null $metricUnit 指标单位。
    *
    * @return $this
    */
    public function setMetricUnit($metricUnit)
    {
        $this->container['metricUnit'] = $metricUnit;
        return $this;
    }

    /**
    * Gets metricLabels
    *  指标维度。
    *
    * @return string[]|null
    */
    public function getMetricLabels()
    {
        return $this->container['metricLabels'];
    }

    /**
    * Sets metricLabels
    *
    * @param string[]|null $metricLabels 指标维度。
    *
    * @return $this
    */
    public function setMetricLabels($metricLabels)
    {
        $this->container['metricLabels'] = $metricLabels;
        return $this;
    }

    /**
    * Gets promql
    *  Prometheus语句。
    *
    * @return string|null
    */
    public function getPromql()
    {
        return $this->container['promql'];
    }

    /**
    * Sets promql
    *
    * @param string|null $promql Prometheus语句。
    *
    * @return $this
    */
    public function setPromql($promql)
    {
        $this->container['promql'] = $promql;
        return $this;
    }

    /**
    * Gets promqlExpr
    *  Prometheus语句模板。
    *
    * @return string|null
    */
    public function getPromqlExpr()
    {
        return $this->container['promqlExpr'];
    }

    /**
    * Sets promqlExpr
    *
    * @param string|null $promqlExpr Prometheus语句模板。
    *
    * @return $this
    */
    public function setPromqlExpr($promqlExpr)
    {
        $this->container['promqlExpr'] = $promqlExpr;
        return $this;
    }

    /**
    * Gets triggerTimes
    *  连续周期个数。
    *
    * @return int|null
    */
    public function getTriggerTimes()
    {
        return $this->container['triggerTimes'];
    }

    /**
    * Sets triggerTimes
    *
    * @param int|null $triggerTimes 连续周期个数。
    *
    * @return $this
    */
    public function setTriggerTimes($triggerTimes)
    {
        $this->container['triggerTimes'] = $triggerTimes;
        return $this;
    }

    /**
    * Gets triggerInterval
    *  检查频率周期。 - 当trigger_type 为“HOURLY”时，填“” - 当trigger_type为“DAILY”时，格式为：“小时” 。例如每天凌晨三点\"03:00\"。 - 当trigger_type为“WEEKLY”时，格式为：“星期 小时”。例如每周一凌晨三点 “1 03:00”。 - 当trigger_type为“CRON”时，格式为标准CRON表达式。 - 当trigger_type为“FIXED_RATE”时，秒的取值为15s，30s，分钟为 1~59，小时为 1~24。例如“15s”，“30s”，“1min”，“1h”。
    *
    * @return string|null
    */
    public function getTriggerInterval()
    {
        return $this->container['triggerInterval'];
    }

    /**
    * Sets triggerInterval
    *
    * @param string|null $triggerInterval 检查频率周期。 - 当trigger_type 为“HOURLY”时，填“” - 当trigger_type为“DAILY”时，格式为：“小时” 。例如每天凌晨三点\"03:00\"。 - 当trigger_type为“WEEKLY”时，格式为：“星期 小时”。例如每周一凌晨三点 “1 03:00”。 - 当trigger_type为“CRON”时，格式为标准CRON表达式。 - 当trigger_type为“FIXED_RATE”时，秒的取值为15s，30s，分钟为 1~59，小时为 1~24。例如“15s”，“30s”，“1min”，“1h”。
    *
    * @return $this
    */
    public function setTriggerInterval($triggerInterval)
    {
        $this->container['triggerInterval'] = $triggerInterval;
        return $this;
    }

    /**
    * Gets triggerType
    *  触发频率的类型： - “FIXED_RATE”：固定间隔 - “HOURLY”：每小时 - “DAILY”：每天 - “WEEKLY”：每周 - “CRON”：Cron表达式
    *
    * @return string|null
    */
    public function getTriggerType()
    {
        return $this->container['triggerType'];
    }

    /**
    * Sets triggerType
    *
    * @param string|null $triggerType 触发频率的类型： - “FIXED_RATE”：固定间隔 - “HOURLY”：每小时 - “DAILY”：每天 - “WEEKLY”：每周 - “CRON”：Cron表达式
    *
    * @return $this
    */
    public function setTriggerType($triggerType)
    {
        $this->container['triggerType'] = $triggerType;
        return $this;
    }

    /**
    * Gets promqlFor
    *  持续时间。 持续时间范围： - “0”：立即 - “15s”：15秒 - “30s”：30秒 - “1m”：1分钟
    *
    * @return string|null
    */
    public function getPromqlFor()
    {
        return $this->container['promqlFor'];
    }

    /**
    * Sets promqlFor
    *
    * @param string|null $promqlFor 持续时间。 持续时间范围： - “0”：立即 - “15s”：15秒 - “30s”：30秒 - “1m”：1分钟
    *
    * @return $this
    */
    public function setPromqlFor($promqlFor)
    {
        $this->container['promqlFor'] = $promqlFor;
        return $this;
    }

    /**
    * Gets aggregationType
    *  检测规则： - average：平均值 - minimum：最小值 - maximum：最大值 - sum：总计 - sampleCount：样本
    *
    * @return string|null
    */
    public function getAggregationType()
    {
        return $this->container['aggregationType'];
    }

    /**
    * Sets aggregationType
    *
    * @param string|null $aggregationType 检测规则： - average：平均值 - minimum：最小值 - maximum：最大值 - sum：总计 - sampleCount：样本
    *
    * @return $this
    */
    public function setAggregationType($aggregationType)
    {
        $this->container['aggregationType'] = $aggregationType;
        return $this;
    }

    /**
    * Gets operator
    *  判断条件：“>”,“<”,“=”,“>=”,“<=”
    *
    * @return string|null
    */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
    * Sets operator
    *
    * @param string|null $operator 判断条件：“>”,“<”,“=”,“>=”,“<=”
    *
    * @return $this
    */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;
        return $this;
    }

    /**
    * Gets thresholds
    *  键值对形式，键为告警级别，值为告警阈值
    *
    * @return map[string,string]|null
    */
    public function getThresholds()
    {
        return $this->container['thresholds'];
    }

    /**
    * Sets thresholds
    *
    * @param map[string,string]|null $thresholds 键值对形式，键为告警级别，值为告警阈值
    *
    * @return $this
    */
    public function setThresholds($thresholds)
    {
        $this->container['thresholds'] = $thresholds;
        return $this;
    }

    /**
    * Gets aggregationWindow
    *  统计周期。 - “15s”：15秒 - “30s”：30秒 - “1m”：1分钟 - “5m”：5分钟 - “15m”：15分钟 - “1h”：1小时
    *
    * @return string|null
    */
    public function getAggregationWindow()
    {
        return $this->container['aggregationWindow'];
    }

    /**
    * Sets aggregationWindow
    *
    * @param string|null $aggregationWindow 统计周期。 - “15s”：15秒 - “30s”：30秒 - “1m”：1分钟 - “5m”：5分钟 - “15m”：15分钟 - “1h”：1小时
    *
    * @return $this
    */
    public function setAggregationWindow($aggregationWindow)
    {
        $this->container['aggregationWindow'] = $aggregationWindow;
        return $this;
    }

    /**
    * Gets cmdb
    *  cmdb
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\CmdbInfo|null
    */
    public function getCmdb()
    {
        return $this->container['cmdb'];
    }

    /**
    * Sets cmdb
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\CmdbInfo|null $cmdb cmdb
    *
    * @return $this
    */
    public function setCmdb($cmdb)
    {
        $this->container['cmdb'] = $cmdb;
        return $this;
    }

    /**
    * Gets queryMatch
    *  查询筛选条件。
    *
    * @return string|null
    */
    public function getQueryMatch()
    {
        return $this->container['queryMatch'];
    }

    /**
    * Sets queryMatch
    *
    * @param string|null $queryMatch 查询筛选条件。
    *
    * @return $this
    */
    public function setQueryMatch($queryMatch)
    {
        $this->container['queryMatch'] = $queryMatch;
        return $this;
    }

    /**
    * Gets aomMonitorLevel
    *  监控层级。
    *
    * @return string|null
    */
    public function getAomMonitorLevel()
    {
        return $this->container['aomMonitorLevel'];
    }

    /**
    * Sets aomMonitorLevel
    *
    * @param string|null $aomMonitorLevel 监控层级。
    *
    * @return $this
    */
    public function setAomMonitorLevel($aomMonitorLevel)
    {
        $this->container['aomMonitorLevel'] = $aomMonitorLevel;
        return $this;
    }

    /**
    * Gets aggregateType
    *  聚合方式。 - “by”：不分组 - “avg” - “max” - “min” - “sum”
    *
    * @return string|null
    */
    public function getAggregateType()
    {
        return $this->container['aggregateType'];
    }

    /**
    * Sets aggregateType
    *
    * @param string|null $aggregateType 聚合方式。 - “by”：不分组 - “avg” - “max” - “min” - “sum”
    *
    * @return $this
    */
    public function setAggregateType($aggregateType)
    {
        $this->container['aggregateType'] = $aggregateType;
        return $this;
    }

    /**
    * Gets metricStatisticMethod
    *  当配置方式为全量指标时可选择的指标运算方式。 - “single”：单个指标进行运算 - “mix”：多个指标进行混合运算
    *
    * @return string|null
    */
    public function getMetricStatisticMethod()
    {
        return $this->container['metricStatisticMethod'];
    }

    /**
    * Sets metricStatisticMethod
    *
    * @param string|null $metricStatisticMethod 当配置方式为全量指标时可选择的指标运算方式。 - “single”：单个指标进行运算 - “mix”：多个指标进行混合运算
    *
    * @return $this
    */
    public function setMetricStatisticMethod($metricStatisticMethod)
    {
        $this->container['metricStatisticMethod'] = $metricStatisticMethod;
        return $this;
    }

    /**
    * Gets expression
    *  混合运算的表达式。
    *
    * @return string|null
    */
    public function getExpression()
    {
        return $this->container['expression'];
    }

    /**
    * Sets expression
    *
    * @param string|null $expression 混合运算的表达式。
    *
    * @return $this
    */
    public function setExpression($expression)
    {
        $this->container['expression'] = $expression;
        return $this;
    }

    /**
    * Gets mixPromql
    *  混合运算的promQL。
    *
    * @return string|null
    */
    public function getMixPromql()
    {
        return $this->container['mixPromql'];
    }

    /**
    * Sets mixPromql
    *
    * @param string|null $mixPromql 混合运算的promQL。
    *
    * @return $this
    */
    public function setMixPromql($mixPromql)
    {
        $this->container['mixPromql'] = $mixPromql;
        return $this;
    }

    /**
    * Gets alarmMessageTemplate
    *  通知内容。
    *
    * @return string|null
    */
    public function getAlarmMessageTemplate()
    {
        return $this->container['alarmMessageTemplate'];
    }

    /**
    * Sets alarmMessageTemplate
    *
    * @param string|null $alarmMessageTemplate 通知内容。
    *
    * @return $this
    */
    public function setAlarmMessageTemplate($alarmMessageTemplate)
    {
        $this->container['alarmMessageTemplate'] = $alarmMessageTemplate;
        return $this;
    }

    /**
    * Gets promqlMonitorTemplates
    *  Prometheus监控模板。默认为cluster。
    *
    * @return string[]|null
    */
    public function getPromqlMonitorTemplates()
    {
        return $this->container['promqlMonitorTemplates'];
    }

    /**
    * Sets promqlMonitorTemplates
    *
    * @param string[]|null $promqlMonitorTemplates Prometheus监控模板。默认为cluster。
    *
    * @return $this
    */
    public function setPromqlMonitorTemplates($promqlMonitorTemplates)
    {
        $this->container['promqlMonitorTemplates'] = $promqlMonitorTemplates;
        return $this;
    }

    /**
    * Gets queryParam
    *  - PromQL告警规则，该参数为\"{\\\"defaultRule\\\":{\\\"label\\\":\\\"自定义\\\",\\\"id\\\":\\\"custom\\\"},\\\"templateSelectd\\\":null,\\\"dimensionsList\\\":[]}\" - 阈值告警规则，该参数为空。
    *
    * @return object|null
    */
    public function getQueryParam()
    {
        return $this->container['queryParam'];
    }

    /**
    * Sets queryParam
    *
    * @param object|null $queryParam - PromQL告警规则，该参数为\"{\\\"defaultRule\\\":{\\\"label\\\":\\\"自定义\\\",\\\"id\\\":\\\"custom\\\"},\\\"templateSelectd\\\":null,\\\"dimensionsList\\\":[]}\" - 阈值告警规则，该参数为空。
    *
    * @return $this
    */
    public function setQueryParam($queryParam)
    {
        $this->container['queryParam'] = $queryParam;
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

