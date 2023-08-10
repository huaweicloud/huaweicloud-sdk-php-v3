<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AlarmCondition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AlarmCondition';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * period  指标周期，单位是秒； 0是默认值，例如事件类告警该字段就用0即可； 1代表指标的原始周期，比如RDS监控指标原始周期是60s，表示该RDS指标按60s周期为一个数据点参与告警计算；如想了解各个云服务的指标原始周期可以参考[服务命名空间](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)， 300代表指标按5分钟聚合周期为一个数据点参与告警计算。
    * filter  聚合方式, 支持的值为(average|min|max|sum)
    * comparisonOperator  阈值符号
    * value  告警阈值，取值范围[0, Number.MAX_VALUE]，Number.MAX_VALUE值为1.7976931348623157e+108。具体阈值取值请参见附录中各服务监控指标中取值范围，如支持监控的服务列表中ECS的CPU使用率cpu_util取值范围可配置80。
    * unit  数据的单位，最大长度为32位。
    * count  次数
    * suppressDuration  告警抑制时间，单位为秒，对应页面上创建告警规则时告警策略最后一个字段，该字段主要为解决告警频繁的问题，0代表不抑制，满足条件即告警；300代表满足告警触发条件后每5分钟告警一次；
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'period' => 'int',
            'filter' => 'string',
            'comparisonOperator' => 'string',
            'value' => 'double',
            'unit' => 'string',
            'count' => 'int',
            'suppressDuration' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * period  指标周期，单位是秒； 0是默认值，例如事件类告警该字段就用0即可； 1代表指标的原始周期，比如RDS监控指标原始周期是60s，表示该RDS指标按60s周期为一个数据点参与告警计算；如想了解各个云服务的指标原始周期可以参考[服务命名空间](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)， 300代表指标按5分钟聚合周期为一个数据点参与告警计算。
    * filter  聚合方式, 支持的值为(average|min|max|sum)
    * comparisonOperator  阈值符号
    * value  告警阈值，取值范围[0, Number.MAX_VALUE]，Number.MAX_VALUE值为1.7976931348623157e+108。具体阈值取值请参见附录中各服务监控指标中取值范围，如支持监控的服务列表中ECS的CPU使用率cpu_util取值范围可配置80。
    * unit  数据的单位，最大长度为32位。
    * count  次数
    * suppressDuration  告警抑制时间，单位为秒，对应页面上创建告警规则时告警策略最后一个字段，该字段主要为解决告警频繁的问题，0代表不抑制，满足条件即告警；300代表满足告警触发条件后每5分钟告警一次；
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'period' => 'int32',
        'filter' => null,
        'comparisonOperator' => null,
        'value' => 'double',
        'unit' => null,
        'count' => null,
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
    * period  指标周期，单位是秒； 0是默认值，例如事件类告警该字段就用0即可； 1代表指标的原始周期，比如RDS监控指标原始周期是60s，表示该RDS指标按60s周期为一个数据点参与告警计算；如想了解各个云服务的指标原始周期可以参考[服务命名空间](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)， 300代表指标按5分钟聚合周期为一个数据点参与告警计算。
    * filter  聚合方式, 支持的值为(average|min|max|sum)
    * comparisonOperator  阈值符号
    * value  告警阈值，取值范围[0, Number.MAX_VALUE]，Number.MAX_VALUE值为1.7976931348623157e+108。具体阈值取值请参见附录中各服务监控指标中取值范围，如支持监控的服务列表中ECS的CPU使用率cpu_util取值范围可配置80。
    * unit  数据的单位，最大长度为32位。
    * count  次数
    * suppressDuration  告警抑制时间，单位为秒，对应页面上创建告警规则时告警策略最后一个字段，该字段主要为解决告警频繁的问题，0代表不抑制，满足条件即告警；300代表满足告警触发条件后每5分钟告警一次；
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'period' => 'period',
            'filter' => 'filter',
            'comparisonOperator' => 'comparison_operator',
            'value' => 'value',
            'unit' => 'unit',
            'count' => 'count',
            'suppressDuration' => 'suppress_duration'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * period  指标周期，单位是秒； 0是默认值，例如事件类告警该字段就用0即可； 1代表指标的原始周期，比如RDS监控指标原始周期是60s，表示该RDS指标按60s周期为一个数据点参与告警计算；如想了解各个云服务的指标原始周期可以参考[服务命名空间](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)， 300代表指标按5分钟聚合周期为一个数据点参与告警计算。
    * filter  聚合方式, 支持的值为(average|min|max|sum)
    * comparisonOperator  阈值符号
    * value  告警阈值，取值范围[0, Number.MAX_VALUE]，Number.MAX_VALUE值为1.7976931348623157e+108。具体阈值取值请参见附录中各服务监控指标中取值范围，如支持监控的服务列表中ECS的CPU使用率cpu_util取值范围可配置80。
    * unit  数据的单位，最大长度为32位。
    * count  次数
    * suppressDuration  告警抑制时间，单位为秒，对应页面上创建告警规则时告警策略最后一个字段，该字段主要为解决告警频繁的问题，0代表不抑制，满足条件即告警；300代表满足告警触发条件后每5分钟告警一次；
    *
    * @var string[]
    */
    protected static $setters = [
            'period' => 'setPeriod',
            'filter' => 'setFilter',
            'comparisonOperator' => 'setComparisonOperator',
            'value' => 'setValue',
            'unit' => 'setUnit',
            'count' => 'setCount',
            'suppressDuration' => 'setSuppressDuration'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * period  指标周期，单位是秒； 0是默认值，例如事件类告警该字段就用0即可； 1代表指标的原始周期，比如RDS监控指标原始周期是60s，表示该RDS指标按60s周期为一个数据点参与告警计算；如想了解各个云服务的指标原始周期可以参考[服务命名空间](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)， 300代表指标按5分钟聚合周期为一个数据点参与告警计算。
    * filter  聚合方式, 支持的值为(average|min|max|sum)
    * comparisonOperator  阈值符号
    * value  告警阈值，取值范围[0, Number.MAX_VALUE]，Number.MAX_VALUE值为1.7976931348623157e+108。具体阈值取值请参见附录中各服务监控指标中取值范围，如支持监控的服务列表中ECS的CPU使用率cpu_util取值范围可配置80。
    * unit  数据的单位，最大长度为32位。
    * count  次数
    * suppressDuration  告警抑制时间，单位为秒，对应页面上创建告警规则时告警策略最后一个字段，该字段主要为解决告警频繁的问题，0代表不抑制，满足条件即告警；300代表满足告警触发条件后每5分钟告警一次；
    *
    * @var string[]
    */
    protected static $getters = [
            'period' => 'getPeriod',
            'filter' => 'getFilter',
            'comparisonOperator' => 'getComparisonOperator',
            'value' => 'getValue',
            'unit' => 'getUnit',
            'count' => 'getCount',
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
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['filter'] = isset($data['filter']) ? $data['filter'] : null;
        $this->container['comparisonOperator'] = isset($data['comparisonOperator']) ? $data['comparisonOperator'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
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
            if ((mb_strlen($this->container['filter']) > 15)) {
                $invalidProperties[] = "invalid value for 'filter', the character length must be smaller than or equal to 15.";
            }
            if ((mb_strlen($this->container['filter']) < 1)) {
                $invalidProperties[] = "invalid value for 'filter', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^(average|min|max|sum)$/", $this->container['filter'])) {
                $invalidProperties[] = "invalid value for 'filter', must be conform to the pattern /^(average|min|max|sum)$/.";
            }
        if ($this->container['comparisonOperator'] === null) {
            $invalidProperties[] = "'comparisonOperator' can't be null";
        }
            if ((mb_strlen($this->container['comparisonOperator']) > 10)) {
                $invalidProperties[] = "invalid value for 'comparisonOperator', the character length must be smaller than or equal to 10.";
            }
            if ((mb_strlen($this->container['comparisonOperator']) < 1)) {
                $invalidProperties[] = "invalid value for 'comparisonOperator', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^(>|<|>=|<=|=)$/", $this->container['comparisonOperator'])) {
                $invalidProperties[] = "invalid value for 'comparisonOperator', must be conform to the pattern /^(>|<|>=|<=|=)$/.";
            }
        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
        }
            if (($this->container['value'] > 1.174271E+108)) {
                $invalidProperties[] = "invalid value for 'value', must be smaller than or equal to 1.174271E+108.";
            }
            if (($this->container['value'] < 0)) {
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
            if (($this->container['count'] > 100)) {
                $invalidProperties[] = "invalid value for 'count', must be smaller than or equal to 100.";
            }
            if (($this->container['count'] < 1)) {
                $invalidProperties[] = "invalid value for 'count', must be bigger than or equal to 1.";
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
    * Gets period
    *  指标周期，单位是秒； 0是默认值，例如事件类告警该字段就用0即可； 1代表指标的原始周期，比如RDS监控指标原始周期是60s，表示该RDS指标按60s周期为一个数据点参与告警计算；如想了解各个云服务的指标原始周期可以参考[服务命名空间](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)， 300代表指标按5分钟聚合周期为一个数据点参与告警计算。
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
    * @param int $period 指标周期，单位是秒； 0是默认值，例如事件类告警该字段就用0即可； 1代表指标的原始周期，比如RDS监控指标原始周期是60s，表示该RDS指标按60s周期为一个数据点参与告警计算；如想了解各个云服务的指标原始周期可以参考[服务命名空间](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)， 300代表指标按5分钟聚合周期为一个数据点参与告警计算。
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
    *  聚合方式, 支持的值为(average|min|max|sum)
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
    * @param string $filter 聚合方式, 支持的值为(average|min|max|sum)
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
    *  阈值符号
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
    * @param string $comparisonOperator 阈值符号
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
    *  告警阈值，取值范围[0, Number.MAX_VALUE]，Number.MAX_VALUE值为1.7976931348623157e+108。具体阈值取值请参见附录中各服务监控指标中取值范围，如支持监控的服务列表中ECS的CPU使用率cpu_util取值范围可配置80。
    *
    * @return double
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param double $value 告警阈值，取值范围[0, Number.MAX_VALUE]，Number.MAX_VALUE值为1.7976931348623157e+108。具体阈值取值请参见附录中各服务监控指标中取值范围，如支持监控的服务列表中ECS的CPU使用率cpu_util取值范围可配置80。
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets unit
    *  数据的单位，最大长度为32位。
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
    * @param string|null $unit 数据的单位，最大长度为32位。
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
    *  次数
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
    * @param int $count 次数
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets suppressDuration
    *  告警抑制时间，单位为秒，对应页面上创建告警规则时告警策略最后一个字段，该字段主要为解决告警频繁的问题，0代表不抑制，满足条件即告警；300代表满足告警触发条件后每5分钟告警一次；
    *
    * @return int|null
    */
    public function getSuppressDuration()
    {
        return $this->container['suppressDuration'];
    }

    /**
    * Sets suppressDuration
    *
    * @param int|null $suppressDuration 告警抑制时间，单位为秒，对应页面上创建告警规则时告警策略最后一个字段，该字段主要为解决告警频繁的问题，0代表不抑制，满足条件即告警；300代表满足告警触发条件后每5分钟告警一次；
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

