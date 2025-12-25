<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateMetricResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateMetricResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  指标名称
    * id  指标Id
    * metricType  指标类型， 当前仅支持创建日志类型指标
    * dataType  数据类型, 当前仅支持创建统计指标
    * metricDimension  指标结果维度，0维：单个数字，2维：图表或表格，3+维：多标签图表, metric_type为DERIVED必填，其他类型选填（COMPOUND时必为0）
    * cacheTtl  缓存生命周期，单位s
    * reportPeriod  上报周期，埋点指标时必填，单位s
    * isBuiltIn  是否为系统指标
    * effectiveColumn  生效的列, 当有该参数时，使用指定列作为指标数据结果
    * maxQueryRange  指标支持的最大检索范围，单位：天；复合指标时，数值为derived_metrics列表元素中最小值
    * derivedMetrics  衍生指标列表，非复合指标时只有一个元素，复合指标时，为各衍生指标的定义
    * compoundExpression  metric_type为DERIVED时填写, 复合指标的表达式
    * metricFormat  指标格式
    * metricExpandDim  metricExpandDim
    * version  安全云脑版本
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'id' => 'string',
            'metricType' => 'string',
            'dataType' => 'string',
            'metricDimension' => 'int',
            'cacheTtl' => 'int',
            'reportPeriod' => 'int',
            'isBuiltIn' => 'bool',
            'effectiveColumn' => 'string',
            'maxQueryRange' => 'int',
            'derivedMetrics' => '\HuaweiCloud\SDK\SecMaster\V1\Model\MetricMetaDataDerivedMetrics[]',
            'compoundExpression' => 'string',
            'metricFormat' => '\HuaweiCloud\SDK\SecMaster\V1\Model\LayoutMetricFormat[]',
            'metricExpandDim' => '\HuaweiCloud\SDK\SecMaster\V1\Model\MetricDimensionExpandParam',
            'version' => 'string',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  指标名称
    * id  指标Id
    * metricType  指标类型， 当前仅支持创建日志类型指标
    * dataType  数据类型, 当前仅支持创建统计指标
    * metricDimension  指标结果维度，0维：单个数字，2维：图表或表格，3+维：多标签图表, metric_type为DERIVED必填，其他类型选填（COMPOUND时必为0）
    * cacheTtl  缓存生命周期，单位s
    * reportPeriod  上报周期，埋点指标时必填，单位s
    * isBuiltIn  是否为系统指标
    * effectiveColumn  生效的列, 当有该参数时，使用指定列作为指标数据结果
    * maxQueryRange  指标支持的最大检索范围，单位：天；复合指标时，数值为derived_metrics列表元素中最小值
    * derivedMetrics  衍生指标列表，非复合指标时只有一个元素，复合指标时，为各衍生指标的定义
    * compoundExpression  metric_type为DERIVED时填写, 复合指标的表达式
    * metricFormat  指标格式
    * metricExpandDim  metricExpandDim
    * version  安全云脑版本
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'id' => null,
        'metricType' => null,
        'dataType' => null,
        'metricDimension' => 'int32',
        'cacheTtl' => 'int64',
        'reportPeriod' => 'int64',
        'isBuiltIn' => null,
        'effectiveColumn' => null,
        'maxQueryRange' => 'int32',
        'derivedMetrics' => null,
        'compoundExpression' => null,
        'metricFormat' => null,
        'metricExpandDim' => null,
        'version' => null,
        'xRequestId' => null
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
    * name  指标名称
    * id  指标Id
    * metricType  指标类型， 当前仅支持创建日志类型指标
    * dataType  数据类型, 当前仅支持创建统计指标
    * metricDimension  指标结果维度，0维：单个数字，2维：图表或表格，3+维：多标签图表, metric_type为DERIVED必填，其他类型选填（COMPOUND时必为0）
    * cacheTtl  缓存生命周期，单位s
    * reportPeriod  上报周期，埋点指标时必填，单位s
    * isBuiltIn  是否为系统指标
    * effectiveColumn  生效的列, 当有该参数时，使用指定列作为指标数据结果
    * maxQueryRange  指标支持的最大检索范围，单位：天；复合指标时，数值为derived_metrics列表元素中最小值
    * derivedMetrics  衍生指标列表，非复合指标时只有一个元素，复合指标时，为各衍生指标的定义
    * compoundExpression  metric_type为DERIVED时填写, 复合指标的表达式
    * metricFormat  指标格式
    * metricExpandDim  metricExpandDim
    * version  安全云脑版本
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'id' => 'id',
            'metricType' => 'metric_type',
            'dataType' => 'data_type',
            'metricDimension' => 'metric_dimension',
            'cacheTtl' => 'cache_ttl',
            'reportPeriod' => 'report_period',
            'isBuiltIn' => 'is_built_in',
            'effectiveColumn' => 'effective_column',
            'maxQueryRange' => 'max_query_range',
            'derivedMetrics' => 'derived_metrics',
            'compoundExpression' => 'compound_expression',
            'metricFormat' => 'metric_format',
            'metricExpandDim' => 'metric_expand_dim',
            'version' => 'version',
            'xRequestId' => 'X-request-id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  指标名称
    * id  指标Id
    * metricType  指标类型， 当前仅支持创建日志类型指标
    * dataType  数据类型, 当前仅支持创建统计指标
    * metricDimension  指标结果维度，0维：单个数字，2维：图表或表格，3+维：多标签图表, metric_type为DERIVED必填，其他类型选填（COMPOUND时必为0）
    * cacheTtl  缓存生命周期，单位s
    * reportPeriod  上报周期，埋点指标时必填，单位s
    * isBuiltIn  是否为系统指标
    * effectiveColumn  生效的列, 当有该参数时，使用指定列作为指标数据结果
    * maxQueryRange  指标支持的最大检索范围，单位：天；复合指标时，数值为derived_metrics列表元素中最小值
    * derivedMetrics  衍生指标列表，非复合指标时只有一个元素，复合指标时，为各衍生指标的定义
    * compoundExpression  metric_type为DERIVED时填写, 复合指标的表达式
    * metricFormat  指标格式
    * metricExpandDim  metricExpandDim
    * version  安全云脑版本
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'id' => 'setId',
            'metricType' => 'setMetricType',
            'dataType' => 'setDataType',
            'metricDimension' => 'setMetricDimension',
            'cacheTtl' => 'setCacheTtl',
            'reportPeriod' => 'setReportPeriod',
            'isBuiltIn' => 'setIsBuiltIn',
            'effectiveColumn' => 'setEffectiveColumn',
            'maxQueryRange' => 'setMaxQueryRange',
            'derivedMetrics' => 'setDerivedMetrics',
            'compoundExpression' => 'setCompoundExpression',
            'metricFormat' => 'setMetricFormat',
            'metricExpandDim' => 'setMetricExpandDim',
            'version' => 'setVersion',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  指标名称
    * id  指标Id
    * metricType  指标类型， 当前仅支持创建日志类型指标
    * dataType  数据类型, 当前仅支持创建统计指标
    * metricDimension  指标结果维度，0维：单个数字，2维：图表或表格，3+维：多标签图表, metric_type为DERIVED必填，其他类型选填（COMPOUND时必为0）
    * cacheTtl  缓存生命周期，单位s
    * reportPeriod  上报周期，埋点指标时必填，单位s
    * isBuiltIn  是否为系统指标
    * effectiveColumn  生效的列, 当有该参数时，使用指定列作为指标数据结果
    * maxQueryRange  指标支持的最大检索范围，单位：天；复合指标时，数值为derived_metrics列表元素中最小值
    * derivedMetrics  衍生指标列表，非复合指标时只有一个元素，复合指标时，为各衍生指标的定义
    * compoundExpression  metric_type为DERIVED时填写, 复合指标的表达式
    * metricFormat  指标格式
    * metricExpandDim  metricExpandDim
    * version  安全云脑版本
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'id' => 'getId',
            'metricType' => 'getMetricType',
            'dataType' => 'getDataType',
            'metricDimension' => 'getMetricDimension',
            'cacheTtl' => 'getCacheTtl',
            'reportPeriod' => 'getReportPeriod',
            'isBuiltIn' => 'getIsBuiltIn',
            'effectiveColumn' => 'getEffectiveColumn',
            'maxQueryRange' => 'getMaxQueryRange',
            'derivedMetrics' => 'getDerivedMetrics',
            'compoundExpression' => 'getCompoundExpression',
            'metricFormat' => 'getMetricFormat',
            'metricExpandDim' => 'getMetricExpandDim',
            'version' => 'getVersion',
            'xRequestId' => 'getXRequestId'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['metricType'] = isset($data['metricType']) ? $data['metricType'] : null;
        $this->container['dataType'] = isset($data['dataType']) ? $data['dataType'] : null;
        $this->container['metricDimension'] = isset($data['metricDimension']) ? $data['metricDimension'] : null;
        $this->container['cacheTtl'] = isset($data['cacheTtl']) ? $data['cacheTtl'] : null;
        $this->container['reportPeriod'] = isset($data['reportPeriod']) ? $data['reportPeriod'] : null;
        $this->container['isBuiltIn'] = isset($data['isBuiltIn']) ? $data['isBuiltIn'] : null;
        $this->container['effectiveColumn'] = isset($data['effectiveColumn']) ? $data['effectiveColumn'] : null;
        $this->container['maxQueryRange'] = isset($data['maxQueryRange']) ? $data['maxQueryRange'] : null;
        $this->container['derivedMetrics'] = isset($data['derivedMetrics']) ? $data['derivedMetrics'] : null;
        $this->container['compoundExpression'] = isset($data['compoundExpression']) ? $data['compoundExpression'] : null;
        $this->container['metricFormat'] = isset($data['metricFormat']) ? $data['metricFormat'] : null;
        $this->container['metricExpandDim'] = isset($data['metricExpandDim']) ? $data['metricExpandDim'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['xRequestId'] = isset($data['xRequestId']) ? $data['xRequestId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 512)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['metricType']) && (mb_strlen($this->container['metricType']) > 64)) {
                $invalidProperties[] = "invalid value for 'metricType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['metricType']) && (mb_strlen($this->container['metricType']) < 1)) {
                $invalidProperties[] = "invalid value for 'metricType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['dataType']) && (mb_strlen($this->container['dataType']) > 64)) {
                $invalidProperties[] = "invalid value for 'dataType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['dataType']) && (mb_strlen($this->container['dataType']) < 1)) {
                $invalidProperties[] = "invalid value for 'dataType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['metricDimension']) && ($this->container['metricDimension'] > 5)) {
                $invalidProperties[] = "invalid value for 'metricDimension', must be smaller than or equal to 5.";
            }
            if (!is_null($this->container['metricDimension']) && ($this->container['metricDimension'] < 0)) {
                $invalidProperties[] = "invalid value for 'metricDimension', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cacheTtl']) && ($this->container['cacheTtl'] > 86400)) {
                $invalidProperties[] = "invalid value for 'cacheTtl', must be smaller than or equal to 86400.";
            }
            if (!is_null($this->container['cacheTtl']) && ($this->container['cacheTtl'] < 0)) {
                $invalidProperties[] = "invalid value for 'cacheTtl', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['reportPeriod']) && ($this->container['reportPeriod'] > 864000)) {
                $invalidProperties[] = "invalid value for 'reportPeriod', must be smaller than or equal to 864000.";
            }
            if (!is_null($this->container['reportPeriod']) && ($this->container['reportPeriod'] < 0)) {
                $invalidProperties[] = "invalid value for 'reportPeriod', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['effectiveColumn']) && !preg_match("/\\d+:\\d+/", $this->container['effectiveColumn'])) {
                $invalidProperties[] = "invalid value for 'effectiveColumn', must be conform to the pattern /\\d+:\\d+/.";
            }
            if (!is_null($this->container['maxQueryRange']) && ($this->container['maxQueryRange'] > 864000)) {
                $invalidProperties[] = "invalid value for 'maxQueryRange', must be smaller than or equal to 864000.";
            }
            if (!is_null($this->container['maxQueryRange']) && ($this->container['maxQueryRange'] < 0)) {
                $invalidProperties[] = "invalid value for 'maxQueryRange', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['compoundExpression']) && (mb_strlen($this->container['compoundExpression']) > 65535)) {
                $invalidProperties[] = "invalid value for 'compoundExpression', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['compoundExpression']) && (mb_strlen($this->container['compoundExpression']) < 1)) {
                $invalidProperties[] = "invalid value for 'compoundExpression', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 64)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 32)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 32.";
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
    * Gets name
    *  指标名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 指标名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets id
    *  指标Id
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 指标Id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets metricType
    *  指标类型， 当前仅支持创建日志类型指标
    *
    * @return string|null
    */
    public function getMetricType()
    {
        return $this->container['metricType'];
    }

    /**
    * Sets metricType
    *
    * @param string|null $metricType 指标类型， 当前仅支持创建日志类型指标
    *
    * @return $this
    */
    public function setMetricType($metricType)
    {
        $this->container['metricType'] = $metricType;
        return $this;
    }

    /**
    * Gets dataType
    *  数据类型, 当前仅支持创建统计指标
    *
    * @return string|null
    */
    public function getDataType()
    {
        return $this->container['dataType'];
    }

    /**
    * Sets dataType
    *
    * @param string|null $dataType 数据类型, 当前仅支持创建统计指标
    *
    * @return $this
    */
    public function setDataType($dataType)
    {
        $this->container['dataType'] = $dataType;
        return $this;
    }

    /**
    * Gets metricDimension
    *  指标结果维度，0维：单个数字，2维：图表或表格，3+维：多标签图表, metric_type为DERIVED必填，其他类型选填（COMPOUND时必为0）
    *
    * @return int|null
    */
    public function getMetricDimension()
    {
        return $this->container['metricDimension'];
    }

    /**
    * Sets metricDimension
    *
    * @param int|null $metricDimension 指标结果维度，0维：单个数字，2维：图表或表格，3+维：多标签图表, metric_type为DERIVED必填，其他类型选填（COMPOUND时必为0）
    *
    * @return $this
    */
    public function setMetricDimension($metricDimension)
    {
        $this->container['metricDimension'] = $metricDimension;
        return $this;
    }

    /**
    * Gets cacheTtl
    *  缓存生命周期，单位s
    *
    * @return int|null
    */
    public function getCacheTtl()
    {
        return $this->container['cacheTtl'];
    }

    /**
    * Sets cacheTtl
    *
    * @param int|null $cacheTtl 缓存生命周期，单位s
    *
    * @return $this
    */
    public function setCacheTtl($cacheTtl)
    {
        $this->container['cacheTtl'] = $cacheTtl;
        return $this;
    }

    /**
    * Gets reportPeriod
    *  上报周期，埋点指标时必填，单位s
    *
    * @return int|null
    */
    public function getReportPeriod()
    {
        return $this->container['reportPeriod'];
    }

    /**
    * Sets reportPeriod
    *
    * @param int|null $reportPeriod 上报周期，埋点指标时必填，单位s
    *
    * @return $this
    */
    public function setReportPeriod($reportPeriod)
    {
        $this->container['reportPeriod'] = $reportPeriod;
        return $this;
    }

    /**
    * Gets isBuiltIn
    *  是否为系统指标
    *
    * @return bool|null
    */
    public function getIsBuiltIn()
    {
        return $this->container['isBuiltIn'];
    }

    /**
    * Sets isBuiltIn
    *
    * @param bool|null $isBuiltIn 是否为系统指标
    *
    * @return $this
    */
    public function setIsBuiltIn($isBuiltIn)
    {
        $this->container['isBuiltIn'] = $isBuiltIn;
        return $this;
    }

    /**
    * Gets effectiveColumn
    *  生效的列, 当有该参数时，使用指定列作为指标数据结果
    *
    * @return string|null
    */
    public function getEffectiveColumn()
    {
        return $this->container['effectiveColumn'];
    }

    /**
    * Sets effectiveColumn
    *
    * @param string|null $effectiveColumn 生效的列, 当有该参数时，使用指定列作为指标数据结果
    *
    * @return $this
    */
    public function setEffectiveColumn($effectiveColumn)
    {
        $this->container['effectiveColumn'] = $effectiveColumn;
        return $this;
    }

    /**
    * Gets maxQueryRange
    *  指标支持的最大检索范围，单位：天；复合指标时，数值为derived_metrics列表元素中最小值
    *
    * @return int|null
    */
    public function getMaxQueryRange()
    {
        return $this->container['maxQueryRange'];
    }

    /**
    * Sets maxQueryRange
    *
    * @param int|null $maxQueryRange 指标支持的最大检索范围，单位：天；复合指标时，数值为derived_metrics列表元素中最小值
    *
    * @return $this
    */
    public function setMaxQueryRange($maxQueryRange)
    {
        $this->container['maxQueryRange'] = $maxQueryRange;
        return $this;
    }

    /**
    * Gets derivedMetrics
    *  衍生指标列表，非复合指标时只有一个元素，复合指标时，为各衍生指标的定义
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\MetricMetaDataDerivedMetrics[]|null
    */
    public function getDerivedMetrics()
    {
        return $this->container['derivedMetrics'];
    }

    /**
    * Sets derivedMetrics
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\MetricMetaDataDerivedMetrics[]|null $derivedMetrics 衍生指标列表，非复合指标时只有一个元素，复合指标时，为各衍生指标的定义
    *
    * @return $this
    */
    public function setDerivedMetrics($derivedMetrics)
    {
        $this->container['derivedMetrics'] = $derivedMetrics;
        return $this;
    }

    /**
    * Gets compoundExpression
    *  metric_type为DERIVED时填写, 复合指标的表达式
    *
    * @return string|null
    */
    public function getCompoundExpression()
    {
        return $this->container['compoundExpression'];
    }

    /**
    * Sets compoundExpression
    *
    * @param string|null $compoundExpression metric_type为DERIVED时填写, 复合指标的表达式
    *
    * @return $this
    */
    public function setCompoundExpression($compoundExpression)
    {
        $this->container['compoundExpression'] = $compoundExpression;
        return $this;
    }

    /**
    * Gets metricFormat
    *  指标格式
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\LayoutMetricFormat[]|null
    */
    public function getMetricFormat()
    {
        return $this->container['metricFormat'];
    }

    /**
    * Sets metricFormat
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\LayoutMetricFormat[]|null $metricFormat 指标格式
    *
    * @return $this
    */
    public function setMetricFormat($metricFormat)
    {
        $this->container['metricFormat'] = $metricFormat;
        return $this;
    }

    /**
    * Gets metricExpandDim
    *  metricExpandDim
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\MetricDimensionExpandParam|null
    */
    public function getMetricExpandDim()
    {
        return $this->container['metricExpandDim'];
    }

    /**
    * Sets metricExpandDim
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\MetricDimensionExpandParam|null $metricExpandDim metricExpandDim
    *
    * @return $this
    */
    public function setMetricExpandDim($metricExpandDim)
    {
        $this->container['metricExpandDim'] = $metricExpandDim;
        return $this;
    }

    /**
    * Gets version
    *  安全云脑版本
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 安全云脑版本
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets xRequestId
    *  xRequestId
    *
    * @return string|null
    */
    public function getXRequestId()
    {
        return $this->container['xRequestId'];
    }

    /**
    * Sets xRequestId
    *
    * @param string|null $xRequestId xRequestId
    *
    * @return $this
    */
    public function setXRequestId($xRequestId)
    {
        $this->container['xRequestId'] = $xRequestId;
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

