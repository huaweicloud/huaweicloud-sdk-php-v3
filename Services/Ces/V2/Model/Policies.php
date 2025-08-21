<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Policies implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Policies';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * namespace  查询服务的命名空间，各服务命名空间请参考“[服务命名空间](ces_03_0059.xml)”
    * dimensionName  **参数解释**： 资源维度。 **约束限制**： 事件告警模板dimension_name为空。 **取值范围**： 必须以字母开头，多维度用\",\"分割，只能包含0-9/a-z/A-Z/_/-，每个维度的最大长度为32。字符串最大长度为131。 **默认取值**： 不涉及。
    * metricName  资源的监控指标名称，必须以字母开头，只能包含0-9/a-z/A-Z/_，字符长度最短为1，最大为64；如：弹性云服务器中的监控指标cpu_util，表示弹性服务器的CPU使用率；文档数据库中的指标mongo001_command_ps，表示command执行频率；各服务的指标名称可查看：“[服务指标名称](ces_03_0059.xml)”。
    * period  告警条件判断周期,单位为秒
    * filter  聚合方式。average： 平均值，variance：方差，min：最小值，max：最大值，sum：求和，tp99：99百分位数，tp95：95百分位数，tp90：90百分位数
    * comparisonOperator  阈值符号, 支持的值为(>|<|>=|<=|=|!=|cycle_decrease|cycle_increase|cycle_wave);cycle_decrease为环比下降,cycle_increase为环比上升,cycle_wave为环比波动； 指标告警可以使用的阈值符号有>、>=、<、<=、=、!=、cycle_decrease、cycle_increase、cycle_wave； 事件告警可以使用的阈值符号为>、>=、<、<=、=、!=；
    * value  告警阈值。单一阈值时value和alarm_level配对使用，当hierarchical_value和value同时使用时以hierarchical_value为准。
    * hierarchicalValue  hierarchicalValue
    * unit  数据的单位字符串，长度不超过32
    * count  告警连续触发次数，事件告警时参数值为1~180（包括1和180）；指标告警和站点告警时，次数采用枚举值，枚举值分别为：1、2、3、4、5、10、15、30、60、90、120、180
    * alarmLevel  告警级别，1为紧急，2为重要，3为次要，4为提示
    * suppressDuration  告警抑制周期，单位为秒，当告警抑制周期为0时，仅发送一次告警
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'namespace' => 'string',
            'dimensionName' => 'string',
            'metricName' => 'string',
            'period' => 'int',
            'filter' => 'string',
            'comparisonOperator' => 'string',
            'value' => 'float',
            'hierarchicalValue' => '\HuaweiCloud\SDK\Ces\V2\Model\HierarchicalValue',
            'unit' => 'string',
            'count' => 'int',
            'alarmLevel' => 'int',
            'suppressDuration' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * namespace  查询服务的命名空间，各服务命名空间请参考“[服务命名空间](ces_03_0059.xml)”
    * dimensionName  **参数解释**： 资源维度。 **约束限制**： 事件告警模板dimension_name为空。 **取值范围**： 必须以字母开头，多维度用\",\"分割，只能包含0-9/a-z/A-Z/_/-，每个维度的最大长度为32。字符串最大长度为131。 **默认取值**： 不涉及。
    * metricName  资源的监控指标名称，必须以字母开头，只能包含0-9/a-z/A-Z/_，字符长度最短为1，最大为64；如：弹性云服务器中的监控指标cpu_util，表示弹性服务器的CPU使用率；文档数据库中的指标mongo001_command_ps，表示command执行频率；各服务的指标名称可查看：“[服务指标名称](ces_03_0059.xml)”。
    * period  告警条件判断周期,单位为秒
    * filter  聚合方式。average： 平均值，variance：方差，min：最小值，max：最大值，sum：求和，tp99：99百分位数，tp95：95百分位数，tp90：90百分位数
    * comparisonOperator  阈值符号, 支持的值为(>|<|>=|<=|=|!=|cycle_decrease|cycle_increase|cycle_wave);cycle_decrease为环比下降,cycle_increase为环比上升,cycle_wave为环比波动； 指标告警可以使用的阈值符号有>、>=、<、<=、=、!=、cycle_decrease、cycle_increase、cycle_wave； 事件告警可以使用的阈值符号为>、>=、<、<=、=、!=；
    * value  告警阈值。单一阈值时value和alarm_level配对使用，当hierarchical_value和value同时使用时以hierarchical_value为准。
    * hierarchicalValue  hierarchicalValue
    * unit  数据的单位字符串，长度不超过32
    * count  告警连续触发次数，事件告警时参数值为1~180（包括1和180）；指标告警和站点告警时，次数采用枚举值，枚举值分别为：1、2、3、4、5、10、15、30、60、90、120、180
    * alarmLevel  告警级别，1为紧急，2为重要，3为次要，4为提示
    * suppressDuration  告警抑制周期，单位为秒，当告警抑制周期为0时，仅发送一次告警
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'namespace' => null,
        'dimensionName' => null,
        'metricName' => null,
        'period' => 'int32',
        'filter' => null,
        'comparisonOperator' => null,
        'value' => null,
        'hierarchicalValue' => null,
        'unit' => null,
        'count' => 'int32',
        'alarmLevel' => 'int32',
        'suppressDuration' => 'int32'
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
    * namespace  查询服务的命名空间，各服务命名空间请参考“[服务命名空间](ces_03_0059.xml)”
    * dimensionName  **参数解释**： 资源维度。 **约束限制**： 事件告警模板dimension_name为空。 **取值范围**： 必须以字母开头，多维度用\",\"分割，只能包含0-9/a-z/A-Z/_/-，每个维度的最大长度为32。字符串最大长度为131。 **默认取值**： 不涉及。
    * metricName  资源的监控指标名称，必须以字母开头，只能包含0-9/a-z/A-Z/_，字符长度最短为1，最大为64；如：弹性云服务器中的监控指标cpu_util，表示弹性服务器的CPU使用率；文档数据库中的指标mongo001_command_ps，表示command执行频率；各服务的指标名称可查看：“[服务指标名称](ces_03_0059.xml)”。
    * period  告警条件判断周期,单位为秒
    * filter  聚合方式。average： 平均值，variance：方差，min：最小值，max：最大值，sum：求和，tp99：99百分位数，tp95：95百分位数，tp90：90百分位数
    * comparisonOperator  阈值符号, 支持的值为(>|<|>=|<=|=|!=|cycle_decrease|cycle_increase|cycle_wave);cycle_decrease为环比下降,cycle_increase为环比上升,cycle_wave为环比波动； 指标告警可以使用的阈值符号有>、>=、<、<=、=、!=、cycle_decrease、cycle_increase、cycle_wave； 事件告警可以使用的阈值符号为>、>=、<、<=、=、!=；
    * value  告警阈值。单一阈值时value和alarm_level配对使用，当hierarchical_value和value同时使用时以hierarchical_value为准。
    * hierarchicalValue  hierarchicalValue
    * unit  数据的单位字符串，长度不超过32
    * count  告警连续触发次数，事件告警时参数值为1~180（包括1和180）；指标告警和站点告警时，次数采用枚举值，枚举值分别为：1、2、3、4、5、10、15、30、60、90、120、180
    * alarmLevel  告警级别，1为紧急，2为重要，3为次要，4为提示
    * suppressDuration  告警抑制周期，单位为秒，当告警抑制周期为0时，仅发送一次告警
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'namespace' => 'namespace',
            'dimensionName' => 'dimension_name',
            'metricName' => 'metric_name',
            'period' => 'period',
            'filter' => 'filter',
            'comparisonOperator' => 'comparison_operator',
            'value' => 'value',
            'hierarchicalValue' => 'hierarchical_value',
            'unit' => 'unit',
            'count' => 'count',
            'alarmLevel' => 'alarm_level',
            'suppressDuration' => 'suppress_duration'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * namespace  查询服务的命名空间，各服务命名空间请参考“[服务命名空间](ces_03_0059.xml)”
    * dimensionName  **参数解释**： 资源维度。 **约束限制**： 事件告警模板dimension_name为空。 **取值范围**： 必须以字母开头，多维度用\",\"分割，只能包含0-9/a-z/A-Z/_/-，每个维度的最大长度为32。字符串最大长度为131。 **默认取值**： 不涉及。
    * metricName  资源的监控指标名称，必须以字母开头，只能包含0-9/a-z/A-Z/_，字符长度最短为1，最大为64；如：弹性云服务器中的监控指标cpu_util，表示弹性服务器的CPU使用率；文档数据库中的指标mongo001_command_ps，表示command执行频率；各服务的指标名称可查看：“[服务指标名称](ces_03_0059.xml)”。
    * period  告警条件判断周期,单位为秒
    * filter  聚合方式。average： 平均值，variance：方差，min：最小值，max：最大值，sum：求和，tp99：99百分位数，tp95：95百分位数，tp90：90百分位数
    * comparisonOperator  阈值符号, 支持的值为(>|<|>=|<=|=|!=|cycle_decrease|cycle_increase|cycle_wave);cycle_decrease为环比下降,cycle_increase为环比上升,cycle_wave为环比波动； 指标告警可以使用的阈值符号有>、>=、<、<=、=、!=、cycle_decrease、cycle_increase、cycle_wave； 事件告警可以使用的阈值符号为>、>=、<、<=、=、!=；
    * value  告警阈值。单一阈值时value和alarm_level配对使用，当hierarchical_value和value同时使用时以hierarchical_value为准。
    * hierarchicalValue  hierarchicalValue
    * unit  数据的单位字符串，长度不超过32
    * count  告警连续触发次数，事件告警时参数值为1~180（包括1和180）；指标告警和站点告警时，次数采用枚举值，枚举值分别为：1、2、3、4、5、10、15、30、60、90、120、180
    * alarmLevel  告警级别，1为紧急，2为重要，3为次要，4为提示
    * suppressDuration  告警抑制周期，单位为秒，当告警抑制周期为0时，仅发送一次告警
    *
    * @var string[]
    */
    protected static $setters = [
            'namespace' => 'setNamespace',
            'dimensionName' => 'setDimensionName',
            'metricName' => 'setMetricName',
            'period' => 'setPeriod',
            'filter' => 'setFilter',
            'comparisonOperator' => 'setComparisonOperator',
            'value' => 'setValue',
            'hierarchicalValue' => 'setHierarchicalValue',
            'unit' => 'setUnit',
            'count' => 'setCount',
            'alarmLevel' => 'setAlarmLevel',
            'suppressDuration' => 'setSuppressDuration'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * namespace  查询服务的命名空间，各服务命名空间请参考“[服务命名空间](ces_03_0059.xml)”
    * dimensionName  **参数解释**： 资源维度。 **约束限制**： 事件告警模板dimension_name为空。 **取值范围**： 必须以字母开头，多维度用\",\"分割，只能包含0-9/a-z/A-Z/_/-，每个维度的最大长度为32。字符串最大长度为131。 **默认取值**： 不涉及。
    * metricName  资源的监控指标名称，必须以字母开头，只能包含0-9/a-z/A-Z/_，字符长度最短为1，最大为64；如：弹性云服务器中的监控指标cpu_util，表示弹性服务器的CPU使用率；文档数据库中的指标mongo001_command_ps，表示command执行频率；各服务的指标名称可查看：“[服务指标名称](ces_03_0059.xml)”。
    * period  告警条件判断周期,单位为秒
    * filter  聚合方式。average： 平均值，variance：方差，min：最小值，max：最大值，sum：求和，tp99：99百分位数，tp95：95百分位数，tp90：90百分位数
    * comparisonOperator  阈值符号, 支持的值为(>|<|>=|<=|=|!=|cycle_decrease|cycle_increase|cycle_wave);cycle_decrease为环比下降,cycle_increase为环比上升,cycle_wave为环比波动； 指标告警可以使用的阈值符号有>、>=、<、<=、=、!=、cycle_decrease、cycle_increase、cycle_wave； 事件告警可以使用的阈值符号为>、>=、<、<=、=、!=；
    * value  告警阈值。单一阈值时value和alarm_level配对使用，当hierarchical_value和value同时使用时以hierarchical_value为准。
    * hierarchicalValue  hierarchicalValue
    * unit  数据的单位字符串，长度不超过32
    * count  告警连续触发次数，事件告警时参数值为1~180（包括1和180）；指标告警和站点告警时，次数采用枚举值，枚举值分别为：1、2、3、4、5、10、15、30、60、90、120、180
    * alarmLevel  告警级别，1为紧急，2为重要，3为次要，4为提示
    * suppressDuration  告警抑制周期，单位为秒，当告警抑制周期为0时，仅发送一次告警
    *
    * @var string[]
    */
    protected static $getters = [
            'namespace' => 'getNamespace',
            'dimensionName' => 'getDimensionName',
            'metricName' => 'getMetricName',
            'period' => 'getPeriod',
            'filter' => 'getFilter',
            'comparisonOperator' => 'getComparisonOperator',
            'value' => 'getValue',
            'hierarchicalValue' => 'getHierarchicalValue',
            'unit' => 'getUnit',
            'count' => 'getCount',
            'alarmLevel' => 'getAlarmLevel',
            'suppressDuration' => 'getSuppressDuration'
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
    const PERIOD_0 = 0;
    const PERIOD_1 = 1;
    const PERIOD_300 = 300;
    const PERIOD_1200 = 1200;
    const PERIOD_3600 = 3600;
    const PERIOD_14400 = 14400;
    const PERIOD_86400 = 86400;
    const SUPPRESS_DURATION_0 = 0;
    const SUPPRESS_DURATION_300 = 300;
    const SUPPRESS_DURATION_600 = 600;
    const SUPPRESS_DURATION_900 = 900;
    const SUPPRESS_DURATION_1800 = 1800;
    const SUPPRESS_DURATION_3600 = 3600;
    const SUPPRESS_DURATION_10800 = 10800;
    const SUPPRESS_DURATION_21600 = 21600;
    const SUPPRESS_DURATION_43200 = 43200;
    const SUPPRESS_DURATION_86400 = 86400;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPeriodAllowableValues()
    {
        return [
            self::PERIOD_0,
            self::PERIOD_1,
            self::PERIOD_300,
            self::PERIOD_1200,
            self::PERIOD_3600,
            self::PERIOD_14400,
            self::PERIOD_86400,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSuppressDurationAllowableValues()
    {
        return [
            self::SUPPRESS_DURATION_0,
            self::SUPPRESS_DURATION_300,
            self::SUPPRESS_DURATION_600,
            self::SUPPRESS_DURATION_900,
            self::SUPPRESS_DURATION_1800,
            self::SUPPRESS_DURATION_3600,
            self::SUPPRESS_DURATION_10800,
            self::SUPPRESS_DURATION_21600,
            self::SUPPRESS_DURATION_43200,
            self::SUPPRESS_DURATION_86400,
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
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['dimensionName'] = isset($data['dimensionName']) ? $data['dimensionName'] : null;
        $this->container['metricName'] = isset($data['metricName']) ? $data['metricName'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['filter'] = isset($data['filter']) ? $data['filter'] : null;
        $this->container['comparisonOperator'] = isset($data['comparisonOperator']) ? $data['comparisonOperator'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['hierarchicalValue'] = isset($data['hierarchicalValue']) ? $data['hierarchicalValue'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['alarmLevel'] = isset($data['alarmLevel']) ? $data['alarmLevel'] : null;
        $this->container['suppressDuration'] = isset($data['suppressDuration']) ? $data['suppressDuration'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['namespace'] === null) {
            $invalidProperties[] = "'namespace' can't be null";
        }
            if ((mb_strlen($this->container['namespace']) > 32)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['namespace']) < 3)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be bigger than or equal to 3.";
            }
            if (!preg_match("/^([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*\\.([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*$/", $this->container['namespace'])) {
                $invalidProperties[] = "invalid value for 'namespace', must be conform to the pattern /^([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*\\.([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*$/.";
            }
            if (!is_null($this->container['dimensionName']) && (mb_strlen($this->container['dimensionName']) > 131)) {
                $invalidProperties[] = "invalid value for 'dimensionName', the character length must be smaller than or equal to 131.";
            }
            if (!is_null($this->container['dimensionName']) && (mb_strlen($this->container['dimensionName']) < 0)) {
                $invalidProperties[] = "invalid value for 'dimensionName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['dimensionName']) && !preg_match("/^(([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_|-){0,31}(,([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_|-){0,31}){0,3}|)$/", $this->container['dimensionName'])) {
                $invalidProperties[] = "invalid value for 'dimensionName', must be conform to the pattern /^(([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_|-){0,31}(,([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_|-){0,31}){0,3}|)$/.";
            }
        if ($this->container['metricName'] === null) {
            $invalidProperties[] = "'metricName' can't be null";
        }
            if ((mb_strlen($this->container['metricName']) > 96)) {
                $invalidProperties[] = "invalid value for 'metricName', the character length must be smaller than or equal to 96.";
            }
            if ((mb_strlen($this->container['metricName']) < 1)) {
                $invalidProperties[] = "invalid value for 'metricName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^([A-Za-z]){1}([0-9A-Za-z]|_|-)*$/", $this->container['metricName'])) {
                $invalidProperties[] = "invalid value for 'metricName', must be conform to the pattern /^([A-Za-z]){1}([0-9A-Za-z]|_|-)*$/.";
            }
        if ($this->container['period'] === null) {
            $invalidProperties[] = "'period' can't be null";
        }
            $allowedValues = $this->getPeriodAllowableValues();
                if (!is_null($this->container['period']) && !in_array($this->container['period'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'period', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['filter'] === null) {
            $invalidProperties[] = "'filter' can't be null";
        }
            if (!preg_match("/^(average|variance|min|max|sum|tp99|tp95|tp90)$/", $this->container['filter'])) {
                $invalidProperties[] = "invalid value for 'filter', must be conform to the pattern /^(average|variance|min|max|sum|tp99|tp95|tp90)$/.";
            }
        if ($this->container['comparisonOperator'] === null) {
            $invalidProperties[] = "'comparisonOperator' can't be null";
        }
            if (!preg_match("/^(>|<|>=|<=|=|!=|cycle_decrease|cycle_increase|cycle_wave)$/", $this->container['comparisonOperator'])) {
                $invalidProperties[] = "invalid value for 'comparisonOperator', must be conform to the pattern /^(>|<|>=|<=|=|!=|cycle_decrease|cycle_increase|cycle_wave)$/.";
            }
            if (!is_null($this->container['value']) && ($this->container['value'] > 1.7976931348623156E+108)) {
                $invalidProperties[] = "invalid value for 'value', must be smaller than or equal to 1.7976931348623156E+108.";
            }
            if (!is_null($this->container['value']) && ($this->container['value'] < 0)) {
                $invalidProperties[] = "invalid value for 'value', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['unit']) && (mb_strlen($this->container['unit']) > 32)) {
                $invalidProperties[] = "invalid value for 'unit', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['unit']) && (mb_strlen($this->container['unit']) < 0)) {
                $invalidProperties[] = "invalid value for 'unit', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['count'] === null) {
            $invalidProperties[] = "'count' can't be null";
        }
            if (($this->container['count'] > 180)) {
                $invalidProperties[] = "invalid value for 'count', must be smaller than or equal to 180.";
            }
            if (($this->container['count'] < 1)) {
                $invalidProperties[] = "invalid value for 'count', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['alarmLevel']) && ($this->container['alarmLevel'] > 4)) {
                $invalidProperties[] = "invalid value for 'alarmLevel', must be smaller than or equal to 4.";
            }
            if (!is_null($this->container['alarmLevel']) && ($this->container['alarmLevel'] < 1)) {
                $invalidProperties[] = "invalid value for 'alarmLevel', must be bigger than or equal to 1.";
            }
        if ($this->container['suppressDuration'] === null) {
            $invalidProperties[] = "'suppressDuration' can't be null";
        }
            $allowedValues = $this->getSuppressDurationAllowableValues();
                if (!is_null($this->container['suppressDuration']) && !in_array($this->container['suppressDuration'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'suppressDuration', must be one of '%s'",
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
    * Gets namespace
    *  查询服务的命名空间，各服务命名空间请参考“[服务命名空间](ces_03_0059.xml)”
    *
    * @return string
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string $namespace 查询服务的命名空间，各服务命名空间请参考“[服务命名空间](ces_03_0059.xml)”
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets dimensionName
    *  **参数解释**： 资源维度。 **约束限制**： 事件告警模板dimension_name为空。 **取值范围**： 必须以字母开头，多维度用\",\"分割，只能包含0-9/a-z/A-Z/_/-，每个维度的最大长度为32。字符串最大长度为131。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getDimensionName()
    {
        return $this->container['dimensionName'];
    }

    /**
    * Sets dimensionName
    *
    * @param string|null $dimensionName **参数解释**： 资源维度。 **约束限制**： 事件告警模板dimension_name为空。 **取值范围**： 必须以字母开头，多维度用\",\"分割，只能包含0-9/a-z/A-Z/_/-，每个维度的最大长度为32。字符串最大长度为131。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setDimensionName($dimensionName)
    {
        $this->container['dimensionName'] = $dimensionName;
        return $this;
    }

    /**
    * Gets metricName
    *  资源的监控指标名称，必须以字母开头，只能包含0-9/a-z/A-Z/_，字符长度最短为1，最大为64；如：弹性云服务器中的监控指标cpu_util，表示弹性服务器的CPU使用率；文档数据库中的指标mongo001_command_ps，表示command执行频率；各服务的指标名称可查看：“[服务指标名称](ces_03_0059.xml)”。
    *
    * @return string
    */
    public function getMetricName()
    {
        return $this->container['metricName'];
    }

    /**
    * Sets metricName
    *
    * @param string $metricName 资源的监控指标名称，必须以字母开头，只能包含0-9/a-z/A-Z/_，字符长度最短为1，最大为64；如：弹性云服务器中的监控指标cpu_util，表示弹性服务器的CPU使用率；文档数据库中的指标mongo001_command_ps，表示command执行频率；各服务的指标名称可查看：“[服务指标名称](ces_03_0059.xml)”。
    *
    * @return $this
    */
    public function setMetricName($metricName)
    {
        $this->container['metricName'] = $metricName;
        return $this;
    }

    /**
    * Gets period
    *  告警条件判断周期,单位为秒
    *
    * @return int
    */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
    * Sets period
    *
    * @param int $period 告警条件判断周期,单位为秒
    *
    * @return $this
    */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;
        return $this;
    }

    /**
    * Gets filter
    *  聚合方式。average： 平均值，variance：方差，min：最小值，max：最大值，sum：求和，tp99：99百分位数，tp95：95百分位数，tp90：90百分位数
    *
    * @return string
    */
    public function getFilter()
    {
        return $this->container['filter'];
    }

    /**
    * Sets filter
    *
    * @param string $filter 聚合方式。average： 平均值，variance：方差，min：最小值，max：最大值，sum：求和，tp99：99百分位数，tp95：95百分位数，tp90：90百分位数
    *
    * @return $this
    */
    public function setFilter($filter)
    {
        $this->container['filter'] = $filter;
        return $this;
    }

    /**
    * Gets comparisonOperator
    *  阈值符号, 支持的值为(>|<|>=|<=|=|!=|cycle_decrease|cycle_increase|cycle_wave);cycle_decrease为环比下降,cycle_increase为环比上升,cycle_wave为环比波动； 指标告警可以使用的阈值符号有>、>=、<、<=、=、!=、cycle_decrease、cycle_increase、cycle_wave； 事件告警可以使用的阈值符号为>、>=、<、<=、=、!=；
    *
    * @return string
    */
    public function getComparisonOperator()
    {
        return $this->container['comparisonOperator'];
    }

    /**
    * Sets comparisonOperator
    *
    * @param string $comparisonOperator 阈值符号, 支持的值为(>|<|>=|<=|=|!=|cycle_decrease|cycle_increase|cycle_wave);cycle_decrease为环比下降,cycle_increase为环比上升,cycle_wave为环比波动； 指标告警可以使用的阈值符号有>、>=、<、<=、=、!=、cycle_decrease、cycle_increase、cycle_wave； 事件告警可以使用的阈值符号为>、>=、<、<=、=、!=；
    *
    * @return $this
    */
    public function setComparisonOperator($comparisonOperator)
    {
        $this->container['comparisonOperator'] = $comparisonOperator;
        return $this;
    }

    /**
    * Gets value
    *  告警阈值。单一阈值时value和alarm_level配对使用，当hierarchical_value和value同时使用时以hierarchical_value为准。
    *
    * @return float|null
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param float|null $value 告警阈值。单一阈值时value和alarm_level配对使用，当hierarchical_value和value同时使用时以hierarchical_value为准。
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets hierarchicalValue
    *  hierarchicalValue
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\HierarchicalValue|null
    */
    public function getHierarchicalValue()
    {
        return $this->container['hierarchicalValue'];
    }

    /**
    * Sets hierarchicalValue
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\HierarchicalValue|null $hierarchicalValue hierarchicalValue
    *
    * @return $this
    */
    public function setHierarchicalValue($hierarchicalValue)
    {
        $this->container['hierarchicalValue'] = $hierarchicalValue;
        return $this;
    }

    /**
    * Gets unit
    *  数据的单位字符串，长度不超过32
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
    * @param string|null $unit 数据的单位字符串，长度不超过32
    *
    * @return $this
    */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;
        return $this;
    }

    /**
    * Gets count
    *  告警连续触发次数，事件告警时参数值为1~180（包括1和180）；指标告警和站点告警时，次数采用枚举值，枚举值分别为：1、2、3、4、5、10、15、30、60、90、120、180
    *
    * @return int
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int $count 告警连续触发次数，事件告警时参数值为1~180（包括1和180）；指标告警和站点告警时，次数采用枚举值，枚举值分别为：1、2、3、4、5、10、15、30、60、90、120、180
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets alarmLevel
    *  告警级别，1为紧急，2为重要，3为次要，4为提示
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
    * @param int|null $alarmLevel 告警级别，1为紧急，2为重要，3为次要，4为提示
    *
    * @return $this
    */
    public function setAlarmLevel($alarmLevel)
    {
        $this->container['alarmLevel'] = $alarmLevel;
        return $this;
    }

    /**
    * Gets suppressDuration
    *  告警抑制周期，单位为秒，当告警抑制周期为0时，仅发送一次告警
    *
    * @return int
    */
    public function getSuppressDuration()
    {
        return $this->container['suppressDuration'];
    }

    /**
    * Sets suppressDuration
    *
    * @param int $suppressDuration 告警抑制周期，单位为秒，当告警抑制周期为0时，仅发送一次告警
    *
    * @return $this
    */
    public function setSuppressDuration($suppressDuration)
    {
        $this->container['suppressDuration'] = $suppressDuration;
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

