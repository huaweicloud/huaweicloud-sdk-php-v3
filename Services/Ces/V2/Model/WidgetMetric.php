<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WidgetMetric implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WidgetMetric';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * namespace  服务维度
    * dimensions  dimensions
    * metricName  多个指标名称，用逗号隔开
    * alias  监控视图的指标别名列表
    * extraInfo  extraInfo
    * rollupEnable  是否开启聚合
    * rollupFilter  rollupFilter
    * rollupDimension  聚合维度
    * lastWeekCompareEnable  是否展示同比（上周同一时间）数据，true:展示，false:不展示
    * yesterdayCompareEnable  是否展示环比（昨天同一时间）数据，true:展示，false:不展示
    * metricDimension  维度名称，多维度用逗号分隔，各服务支持的维度可参考：“[服务维度名称](ces_03_0059.xml)”
    * topNum  展示数据数量
    * unit  单位
    * order  排序字段，asc正序，desc倒序
    * topnMetricName  资源的监控指标名称，必须以字母开头，只能包含0-9/a-z/A-Z/_，字符长度最短为1，最大为64；如：弹性云服务器中的监控指标cpu_util，表示弹性服务器的CPU使用率；文档数据库中的指标mongo001_command_ps，表示command执行频率；各服务的指标名称可查看：“[服务指标名称](ces_03_0059.xml)”。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'namespace' => 'string',
            'dimensions' => '\HuaweiCloud\SDK\Ces\V2\Model\DimensionInfo',
            'metricName' => 'string',
            'alias' => 'string[]',
            'extraInfo' => '\HuaweiCloud\SDK\Ces\V2\Model\ExtraInfo',
            'rollupEnable' => 'bool',
            'rollupFilter' => '\HuaweiCloud\SDK\Ces\V2\Model\RollupFilter',
            'rollupDimension' => 'string',
            'lastWeekCompareEnable' => 'bool',
            'yesterdayCompareEnable' => 'bool',
            'metricDimension' => 'string',
            'topNum' => 'int',
            'unit' => 'string',
            'order' => 'string',
            'topnMetricName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * namespace  服务维度
    * dimensions  dimensions
    * metricName  多个指标名称，用逗号隔开
    * alias  监控视图的指标别名列表
    * extraInfo  extraInfo
    * rollupEnable  是否开启聚合
    * rollupFilter  rollupFilter
    * rollupDimension  聚合维度
    * lastWeekCompareEnable  是否展示同比（上周同一时间）数据，true:展示，false:不展示
    * yesterdayCompareEnable  是否展示环比（昨天同一时间）数据，true:展示，false:不展示
    * metricDimension  维度名称，多维度用逗号分隔，各服务支持的维度可参考：“[服务维度名称](ces_03_0059.xml)”
    * topNum  展示数据数量
    * unit  单位
    * order  排序字段，asc正序，desc倒序
    * topnMetricName  资源的监控指标名称，必须以字母开头，只能包含0-9/a-z/A-Z/_，字符长度最短为1，最大为64；如：弹性云服务器中的监控指标cpu_util，表示弹性服务器的CPU使用率；文档数据库中的指标mongo001_command_ps，表示command执行频率；各服务的指标名称可查看：“[服务指标名称](ces_03_0059.xml)”。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'namespace' => null,
        'dimensions' => null,
        'metricName' => null,
        'alias' => null,
        'extraInfo' => null,
        'rollupEnable' => null,
        'rollupFilter' => null,
        'rollupDimension' => null,
        'lastWeekCompareEnable' => null,
        'yesterdayCompareEnable' => null,
        'metricDimension' => null,
        'topNum' => 'int32',
        'unit' => null,
        'order' => null,
        'topnMetricName' => null
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
    * namespace  服务维度
    * dimensions  dimensions
    * metricName  多个指标名称，用逗号隔开
    * alias  监控视图的指标别名列表
    * extraInfo  extraInfo
    * rollupEnable  是否开启聚合
    * rollupFilter  rollupFilter
    * rollupDimension  聚合维度
    * lastWeekCompareEnable  是否展示同比（上周同一时间）数据，true:展示，false:不展示
    * yesterdayCompareEnable  是否展示环比（昨天同一时间）数据，true:展示，false:不展示
    * metricDimension  维度名称，多维度用逗号分隔，各服务支持的维度可参考：“[服务维度名称](ces_03_0059.xml)”
    * topNum  展示数据数量
    * unit  单位
    * order  排序字段，asc正序，desc倒序
    * topnMetricName  资源的监控指标名称，必须以字母开头，只能包含0-9/a-z/A-Z/_，字符长度最短为1，最大为64；如：弹性云服务器中的监控指标cpu_util，表示弹性服务器的CPU使用率；文档数据库中的指标mongo001_command_ps，表示command执行频率；各服务的指标名称可查看：“[服务指标名称](ces_03_0059.xml)”。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'namespace' => 'namespace',
            'dimensions' => 'dimensions',
            'metricName' => 'metric_name',
            'alias' => 'alias',
            'extraInfo' => 'extra_info',
            'rollupEnable' => 'rollup_enable',
            'rollupFilter' => 'rollup_filter',
            'rollupDimension' => 'rollup_dimension',
            'lastWeekCompareEnable' => 'last_week_compare_enable',
            'yesterdayCompareEnable' => 'yesterday_compare_enable',
            'metricDimension' => 'metric_dimension',
            'topNum' => 'top_num',
            'unit' => 'unit',
            'order' => 'order',
            'topnMetricName' => 'topn_metric_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * namespace  服务维度
    * dimensions  dimensions
    * metricName  多个指标名称，用逗号隔开
    * alias  监控视图的指标别名列表
    * extraInfo  extraInfo
    * rollupEnable  是否开启聚合
    * rollupFilter  rollupFilter
    * rollupDimension  聚合维度
    * lastWeekCompareEnable  是否展示同比（上周同一时间）数据，true:展示，false:不展示
    * yesterdayCompareEnable  是否展示环比（昨天同一时间）数据，true:展示，false:不展示
    * metricDimension  维度名称，多维度用逗号分隔，各服务支持的维度可参考：“[服务维度名称](ces_03_0059.xml)”
    * topNum  展示数据数量
    * unit  单位
    * order  排序字段，asc正序，desc倒序
    * topnMetricName  资源的监控指标名称，必须以字母开头，只能包含0-9/a-z/A-Z/_，字符长度最短为1，最大为64；如：弹性云服务器中的监控指标cpu_util，表示弹性服务器的CPU使用率；文档数据库中的指标mongo001_command_ps，表示command执行频率；各服务的指标名称可查看：“[服务指标名称](ces_03_0059.xml)”。
    *
    * @var string[]
    */
    protected static $setters = [
            'namespace' => 'setNamespace',
            'dimensions' => 'setDimensions',
            'metricName' => 'setMetricName',
            'alias' => 'setAlias',
            'extraInfo' => 'setExtraInfo',
            'rollupEnable' => 'setRollupEnable',
            'rollupFilter' => 'setRollupFilter',
            'rollupDimension' => 'setRollupDimension',
            'lastWeekCompareEnable' => 'setLastWeekCompareEnable',
            'yesterdayCompareEnable' => 'setYesterdayCompareEnable',
            'metricDimension' => 'setMetricDimension',
            'topNum' => 'setTopNum',
            'unit' => 'setUnit',
            'order' => 'setOrder',
            'topnMetricName' => 'setTopnMetricName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * namespace  服务维度
    * dimensions  dimensions
    * metricName  多个指标名称，用逗号隔开
    * alias  监控视图的指标别名列表
    * extraInfo  extraInfo
    * rollupEnable  是否开启聚合
    * rollupFilter  rollupFilter
    * rollupDimension  聚合维度
    * lastWeekCompareEnable  是否展示同比（上周同一时间）数据，true:展示，false:不展示
    * yesterdayCompareEnable  是否展示环比（昨天同一时间）数据，true:展示，false:不展示
    * metricDimension  维度名称，多维度用逗号分隔，各服务支持的维度可参考：“[服务维度名称](ces_03_0059.xml)”
    * topNum  展示数据数量
    * unit  单位
    * order  排序字段，asc正序，desc倒序
    * topnMetricName  资源的监控指标名称，必须以字母开头，只能包含0-9/a-z/A-Z/_，字符长度最短为1，最大为64；如：弹性云服务器中的监控指标cpu_util，表示弹性服务器的CPU使用率；文档数据库中的指标mongo001_command_ps，表示command执行频率；各服务的指标名称可查看：“[服务指标名称](ces_03_0059.xml)”。
    *
    * @var string[]
    */
    protected static $getters = [
            'namespace' => 'getNamespace',
            'dimensions' => 'getDimensions',
            'metricName' => 'getMetricName',
            'alias' => 'getAlias',
            'extraInfo' => 'getExtraInfo',
            'rollupEnable' => 'getRollupEnable',
            'rollupFilter' => 'getRollupFilter',
            'rollupDimension' => 'getRollupDimension',
            'lastWeekCompareEnable' => 'getLastWeekCompareEnable',
            'yesterdayCompareEnable' => 'getYesterdayCompareEnable',
            'metricDimension' => 'getMetricDimension',
            'topNum' => 'getTopNum',
            'unit' => 'getUnit',
            'order' => 'getOrder',
            'topnMetricName' => 'getTopnMetricName'
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
    const ORDER_ASC = 'asc';
    const ORDER_DESC = 'desc';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOrderAllowableValues()
    {
        return [
            self::ORDER_ASC,
            self::ORDER_DESC,
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
        $this->container['dimensions'] = isset($data['dimensions']) ? $data['dimensions'] : null;
        $this->container['metricName'] = isset($data['metricName']) ? $data['metricName'] : null;
        $this->container['alias'] = isset($data['alias']) ? $data['alias'] : null;
        $this->container['extraInfo'] = isset($data['extraInfo']) ? $data['extraInfo'] : null;
        $this->container['rollupEnable'] = isset($data['rollupEnable']) ? $data['rollupEnable'] : null;
        $this->container['rollupFilter'] = isset($data['rollupFilter']) ? $data['rollupFilter'] : null;
        $this->container['rollupDimension'] = isset($data['rollupDimension']) ? $data['rollupDimension'] : null;
        $this->container['lastWeekCompareEnable'] = isset($data['lastWeekCompareEnable']) ? $data['lastWeekCompareEnable'] : null;
        $this->container['yesterdayCompareEnable'] = isset($data['yesterdayCompareEnable']) ? $data['yesterdayCompareEnable'] : null;
        $this->container['metricDimension'] = isset($data['metricDimension']) ? $data['metricDimension'] : null;
        $this->container['topNum'] = isset($data['topNum']) ? $data['topNum'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['topnMetricName'] = isset($data['topnMetricName']) ? $data['topnMetricName'] : null;
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
        if ($this->container['dimensions'] === null) {
            $invalidProperties[] = "'dimensions' can't be null";
        }
        if ($this->container['metricName'] === null) {
            $invalidProperties[] = "'metricName' can't be null";
        }
            if ((mb_strlen($this->container['metricName']) > 1080)) {
                $invalidProperties[] = "invalid value for 'metricName', the character length must be smaller than or equal to 1080.";
            }
            if ((mb_strlen($this->container['metricName']) < 1)) {
                $invalidProperties[] = "invalid value for 'metricName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^([A-Za-z]){1}([0-9A-Za-z]|_|-|,)*$/", $this->container['metricName'])) {
                $invalidProperties[] = "invalid value for 'metricName', must be conform to the pattern /^([A-Za-z]){1}([0-9A-Za-z]|_|-|,)*$/.";
            }
            if (!is_null($this->container['rollupDimension']) && (mb_strlen($this->container['rollupDimension']) > 32)) {
                $invalidProperties[] = "invalid value for 'rollupDimension', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['rollupDimension']) && (mb_strlen($this->container['rollupDimension']) < 1)) {
                $invalidProperties[] = "invalid value for 'rollupDimension', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['rollupDimension']) && !preg_match("/^([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_|-)*$/", $this->container['rollupDimension'])) {
                $invalidProperties[] = "invalid value for 'rollupDimension', must be conform to the pattern /^([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_|-)*$/.";
            }
            if (!is_null($this->container['metricDimension']) && (mb_strlen($this->container['metricDimension']) > 131)) {
                $invalidProperties[] = "invalid value for 'metricDimension', the character length must be smaller than or equal to 131.";
            }
            if (!is_null($this->container['metricDimension']) && (mb_strlen($this->container['metricDimension']) < 1)) {
                $invalidProperties[] = "invalid value for 'metricDimension', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['metricDimension']) && !preg_match("/^([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_|-){0,31}(,([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_|-){0,31}){0,3}$/", $this->container['metricDimension'])) {
                $invalidProperties[] = "invalid value for 'metricDimension', must be conform to the pattern /^([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_|-){0,31}(,([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_|-){0,31}){0,3}$/.";
            }
            if (!is_null($this->container['topNum']) && ($this->container['topNum'] > 200)) {
                $invalidProperties[] = "invalid value for 'topNum', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['topNum']) && ($this->container['topNum'] < 1)) {
                $invalidProperties[] = "invalid value for 'topNum', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['unit']) && (mb_strlen($this->container['unit']) > 32)) {
                $invalidProperties[] = "invalid value for 'unit', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['unit']) && (mb_strlen($this->container['unit']) < 0)) {
                $invalidProperties[] = "invalid value for 'unit', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getOrderAllowableValues();
                if (!is_null($this->container['order']) && !in_array($this->container['order'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'order', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['topnMetricName']) && (mb_strlen($this->container['topnMetricName']) > 96)) {
                $invalidProperties[] = "invalid value for 'topnMetricName', the character length must be smaller than or equal to 96.";
            }
            if (!is_null($this->container['topnMetricName']) && (mb_strlen($this->container['topnMetricName']) < 1)) {
                $invalidProperties[] = "invalid value for 'topnMetricName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['topnMetricName']) && !preg_match("/^([A-Za-z]){1}([0-9A-Za-z]|_|-)*$/", $this->container['topnMetricName'])) {
                $invalidProperties[] = "invalid value for 'topnMetricName', must be conform to the pattern /^([A-Za-z]){1}([0-9A-Za-z]|_|-)*$/.";
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
    *  服务维度
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
    * @param string $namespace 服务维度
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets dimensions
    *  dimensions
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\DimensionInfo
    */
    public function getDimensions()
    {
        return $this->container['dimensions'];
    }

    /**
    * Sets dimensions
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\DimensionInfo $dimensions dimensions
    *
    * @return $this
    */
    public function setDimensions($dimensions)
    {
        $this->container['dimensions'] = $dimensions;
        return $this;
    }

    /**
    * Gets metricName
    *  多个指标名称，用逗号隔开
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
    * @param string $metricName 多个指标名称，用逗号隔开
    *
    * @return $this
    */
    public function setMetricName($metricName)
    {
        $this->container['metricName'] = $metricName;
        return $this;
    }

    /**
    * Gets alias
    *  监控视图的指标别名列表
    *
    * @return string[]|null
    */
    public function getAlias()
    {
        return $this->container['alias'];
    }

    /**
    * Sets alias
    *
    * @param string[]|null $alias 监控视图的指标别名列表
    *
    * @return $this
    */
    public function setAlias($alias)
    {
        $this->container['alias'] = $alias;
        return $this;
    }

    /**
    * Gets extraInfo
    *  extraInfo
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\ExtraInfo|null
    */
    public function getExtraInfo()
    {
        return $this->container['extraInfo'];
    }

    /**
    * Sets extraInfo
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\ExtraInfo|null $extraInfo extraInfo
    *
    * @return $this
    */
    public function setExtraInfo($extraInfo)
    {
        $this->container['extraInfo'] = $extraInfo;
        return $this;
    }

    /**
    * Gets rollupEnable
    *  是否开启聚合
    *
    * @return bool|null
    */
    public function getRollupEnable()
    {
        return $this->container['rollupEnable'];
    }

    /**
    * Sets rollupEnable
    *
    * @param bool|null $rollupEnable 是否开启聚合
    *
    * @return $this
    */
    public function setRollupEnable($rollupEnable)
    {
        $this->container['rollupEnable'] = $rollupEnable;
        return $this;
    }

    /**
    * Gets rollupFilter
    *  rollupFilter
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\RollupFilter|null
    */
    public function getRollupFilter()
    {
        return $this->container['rollupFilter'];
    }

    /**
    * Sets rollupFilter
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\RollupFilter|null $rollupFilter rollupFilter
    *
    * @return $this
    */
    public function setRollupFilter($rollupFilter)
    {
        $this->container['rollupFilter'] = $rollupFilter;
        return $this;
    }

    /**
    * Gets rollupDimension
    *  聚合维度
    *
    * @return string|null
    */
    public function getRollupDimension()
    {
        return $this->container['rollupDimension'];
    }

    /**
    * Sets rollupDimension
    *
    * @param string|null $rollupDimension 聚合维度
    *
    * @return $this
    */
    public function setRollupDimension($rollupDimension)
    {
        $this->container['rollupDimension'] = $rollupDimension;
        return $this;
    }

    /**
    * Gets lastWeekCompareEnable
    *  是否展示同比（上周同一时间）数据，true:展示，false:不展示
    *
    * @return bool|null
    */
    public function getLastWeekCompareEnable()
    {
        return $this->container['lastWeekCompareEnable'];
    }

    /**
    * Sets lastWeekCompareEnable
    *
    * @param bool|null $lastWeekCompareEnable 是否展示同比（上周同一时间）数据，true:展示，false:不展示
    *
    * @return $this
    */
    public function setLastWeekCompareEnable($lastWeekCompareEnable)
    {
        $this->container['lastWeekCompareEnable'] = $lastWeekCompareEnable;
        return $this;
    }

    /**
    * Gets yesterdayCompareEnable
    *  是否展示环比（昨天同一时间）数据，true:展示，false:不展示
    *
    * @return bool|null
    */
    public function getYesterdayCompareEnable()
    {
        return $this->container['yesterdayCompareEnable'];
    }

    /**
    * Sets yesterdayCompareEnable
    *
    * @param bool|null $yesterdayCompareEnable 是否展示环比（昨天同一时间）数据，true:展示，false:不展示
    *
    * @return $this
    */
    public function setYesterdayCompareEnable($yesterdayCompareEnable)
    {
        $this->container['yesterdayCompareEnable'] = $yesterdayCompareEnable;
        return $this;
    }

    /**
    * Gets metricDimension
    *  维度名称，多维度用逗号分隔，各服务支持的维度可参考：“[服务维度名称](ces_03_0059.xml)”
    *
    * @return string|null
    */
    public function getMetricDimension()
    {
        return $this->container['metricDimension'];
    }

    /**
    * Sets metricDimension
    *
    * @param string|null $metricDimension 维度名称，多维度用逗号分隔，各服务支持的维度可参考：“[服务维度名称](ces_03_0059.xml)”
    *
    * @return $this
    */
    public function setMetricDimension($metricDimension)
    {
        $this->container['metricDimension'] = $metricDimension;
        return $this;
    }

    /**
    * Gets topNum
    *  展示数据数量
    *
    * @return int|null
    */
    public function getTopNum()
    {
        return $this->container['topNum'];
    }

    /**
    * Sets topNum
    *
    * @param int|null $topNum 展示数据数量
    *
    * @return $this
    */
    public function setTopNum($topNum)
    {
        $this->container['topNum'] = $topNum;
        return $this;
    }

    /**
    * Gets unit
    *  单位
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
    * @param string|null $unit 单位
    *
    * @return $this
    */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;
        return $this;
    }

    /**
    * Gets order
    *  排序字段，asc正序，desc倒序
    *
    * @return string|null
    */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
    * Sets order
    *
    * @param string|null $order 排序字段，asc正序，desc倒序
    *
    * @return $this
    */
    public function setOrder($order)
    {
        $this->container['order'] = $order;
        return $this;
    }

    /**
    * Gets topnMetricName
    *  资源的监控指标名称，必须以字母开头，只能包含0-9/a-z/A-Z/_，字符长度最短为1，最大为64；如：弹性云服务器中的监控指标cpu_util，表示弹性服务器的CPU使用率；文档数据库中的指标mongo001_command_ps，表示command执行频率；各服务的指标名称可查看：“[服务指标名称](ces_03_0059.xml)”。
    *
    * @return string|null
    */
    public function getTopnMetricName()
    {
        return $this->container['topnMetricName'];
    }

    /**
    * Sets topnMetricName
    *
    * @param string|null $topnMetricName 资源的监控指标名称，必须以字母开头，只能包含0-9/a-z/A-Z/_，字符长度最短为1，最大为64；如：弹性云服务器中的监控指标cpu_util，表示弹性服务器的CPU使用率；文档数据库中的指标mongo001_command_ps，表示command执行频率；各服务的指标名称可查看：“[服务指标名称](ces_03_0059.xml)”。
    *
    * @return $this
    */
    public function setTopnMetricName($topnMetricName)
    {
        $this->container['topnMetricName'] = $topnMetricName;
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

