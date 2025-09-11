<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BaseWidgetInfoProperties implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BaseWidgetInfo_properties';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * filter  **参数解释** 聚合类型 **约束限制** 折线图不支持该参数 **取值范围** 目前只有TopN这一种类型 **默认取值** 不涉及
    * topN  **参数解释** Top前N个；折线图时为随机展示的时序数据条数 **约束限制** 不涉及               **取值范围** 最小值为1，最大值为2147483647 **默认取值** 100
    * order  **参数解释** 排序字段 **约束限制** 折线图不支持该参数   **取值范围** - asc:正序 - desc:倒序 **默认取值** 不涉及
    * description  **参数解释** 监控视图的描述信息 **约束限制** 不涉及                 **取值范围** 长度为[0,200]个字符 **默认取值** 不涉及
    * lastWeekCompareEnable  **参数解释** 是否展示同比（上周同一时间）数据 **约束限制** 不涉及                 **取值范围** - true:展示 - false:不展示 **默认取值** 不涉及
    * yesterdayCompareEnable  **参数解释** 是否展示环比（昨天同一时间）数据 **约束限制** 不涉及                 **取值范围** - true:展示 - false:不展示 **默认取值** 不涉及
    * legendLocation  **参数解释** 图例位置标记 **约束限制** 表格不支持该参数                 **取值范围** - hide:表示隐藏图例 - right:表示图例放在监控视图右侧 - bottom:表示图例放在监控视图底部 **默认取值** 不涉及
    * legendValues  **参数解释** 当前时序数据需要在图例中展示的统计值名称列表 **约束限制** 表格不支持该参数；条形图和柱状图仅支持配置当前值
    * thresholds  **参数解释** 监控视图的阈值辅助线配置 **约束限制** 不涉及
    * isAllCompareEnable  **参数解释** 同比环比总开关是否生效 **约束限制** 不涉及               **取值范围** - true:生效 - false:不生效 **默认取值** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'filter' => 'string',
            'topN' => 'int',
            'order' => 'string',
            'description' => 'string',
            'lastWeekCompareEnable' => 'bool',
            'yesterdayCompareEnable' => 'bool',
            'legendLocation' => 'string',
            'legendValues' => 'string[]',
            'thresholds' => '\HuaweiCloud\SDK\Ces\V2\Model\ThresholdInfo[]',
            'isAllCompareEnable' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * filter  **参数解释** 聚合类型 **约束限制** 折线图不支持该参数 **取值范围** 目前只有TopN这一种类型 **默认取值** 不涉及
    * topN  **参数解释** Top前N个；折线图时为随机展示的时序数据条数 **约束限制** 不涉及               **取值范围** 最小值为1，最大值为2147483647 **默认取值** 100
    * order  **参数解释** 排序字段 **约束限制** 折线图不支持该参数   **取值范围** - asc:正序 - desc:倒序 **默认取值** 不涉及
    * description  **参数解释** 监控视图的描述信息 **约束限制** 不涉及                 **取值范围** 长度为[0,200]个字符 **默认取值** 不涉及
    * lastWeekCompareEnable  **参数解释** 是否展示同比（上周同一时间）数据 **约束限制** 不涉及                 **取值范围** - true:展示 - false:不展示 **默认取值** 不涉及
    * yesterdayCompareEnable  **参数解释** 是否展示环比（昨天同一时间）数据 **约束限制** 不涉及                 **取值范围** - true:展示 - false:不展示 **默认取值** 不涉及
    * legendLocation  **参数解释** 图例位置标记 **约束限制** 表格不支持该参数                 **取值范围** - hide:表示隐藏图例 - right:表示图例放在监控视图右侧 - bottom:表示图例放在监控视图底部 **默认取值** 不涉及
    * legendValues  **参数解释** 当前时序数据需要在图例中展示的统计值名称列表 **约束限制** 表格不支持该参数；条形图和柱状图仅支持配置当前值
    * thresholds  **参数解释** 监控视图的阈值辅助线配置 **约束限制** 不涉及
    * isAllCompareEnable  **参数解释** 同比环比总开关是否生效 **约束限制** 不涉及               **取值范围** - true:生效 - false:不生效 **默认取值** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'filter' => null,
        'topN' => 'int32',
        'order' => null,
        'description' => null,
        'lastWeekCompareEnable' => null,
        'yesterdayCompareEnable' => null,
        'legendLocation' => null,
        'legendValues' => null,
        'thresholds' => null,
        'isAllCompareEnable' => null
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
    * filter  **参数解释** 聚合类型 **约束限制** 折线图不支持该参数 **取值范围** 目前只有TopN这一种类型 **默认取值** 不涉及
    * topN  **参数解释** Top前N个；折线图时为随机展示的时序数据条数 **约束限制** 不涉及               **取值范围** 最小值为1，最大值为2147483647 **默认取值** 100
    * order  **参数解释** 排序字段 **约束限制** 折线图不支持该参数   **取值范围** - asc:正序 - desc:倒序 **默认取值** 不涉及
    * description  **参数解释** 监控视图的描述信息 **约束限制** 不涉及                 **取值范围** 长度为[0,200]个字符 **默认取值** 不涉及
    * lastWeekCompareEnable  **参数解释** 是否展示同比（上周同一时间）数据 **约束限制** 不涉及                 **取值范围** - true:展示 - false:不展示 **默认取值** 不涉及
    * yesterdayCompareEnable  **参数解释** 是否展示环比（昨天同一时间）数据 **约束限制** 不涉及                 **取值范围** - true:展示 - false:不展示 **默认取值** 不涉及
    * legendLocation  **参数解释** 图例位置标记 **约束限制** 表格不支持该参数                 **取值范围** - hide:表示隐藏图例 - right:表示图例放在监控视图右侧 - bottom:表示图例放在监控视图底部 **默认取值** 不涉及
    * legendValues  **参数解释** 当前时序数据需要在图例中展示的统计值名称列表 **约束限制** 表格不支持该参数；条形图和柱状图仅支持配置当前值
    * thresholds  **参数解释** 监控视图的阈值辅助线配置 **约束限制** 不涉及
    * isAllCompareEnable  **参数解释** 同比环比总开关是否生效 **约束限制** 不涉及               **取值范围** - true:生效 - false:不生效 **默认取值** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'filter' => 'filter',
            'topN' => 'topN',
            'order' => 'order',
            'description' => 'description',
            'lastWeekCompareEnable' => 'last_week_compare_enable',
            'yesterdayCompareEnable' => 'yesterday_compare_enable',
            'legendLocation' => 'legend_location',
            'legendValues' => 'legend_values',
            'thresholds' => 'thresholds',
            'isAllCompareEnable' => 'is_all_compare_enable'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * filter  **参数解释** 聚合类型 **约束限制** 折线图不支持该参数 **取值范围** 目前只有TopN这一种类型 **默认取值** 不涉及
    * topN  **参数解释** Top前N个；折线图时为随机展示的时序数据条数 **约束限制** 不涉及               **取值范围** 最小值为1，最大值为2147483647 **默认取值** 100
    * order  **参数解释** 排序字段 **约束限制** 折线图不支持该参数   **取值范围** - asc:正序 - desc:倒序 **默认取值** 不涉及
    * description  **参数解释** 监控视图的描述信息 **约束限制** 不涉及                 **取值范围** 长度为[0,200]个字符 **默认取值** 不涉及
    * lastWeekCompareEnable  **参数解释** 是否展示同比（上周同一时间）数据 **约束限制** 不涉及                 **取值范围** - true:展示 - false:不展示 **默认取值** 不涉及
    * yesterdayCompareEnable  **参数解释** 是否展示环比（昨天同一时间）数据 **约束限制** 不涉及                 **取值范围** - true:展示 - false:不展示 **默认取值** 不涉及
    * legendLocation  **参数解释** 图例位置标记 **约束限制** 表格不支持该参数                 **取值范围** - hide:表示隐藏图例 - right:表示图例放在监控视图右侧 - bottom:表示图例放在监控视图底部 **默认取值** 不涉及
    * legendValues  **参数解释** 当前时序数据需要在图例中展示的统计值名称列表 **约束限制** 表格不支持该参数；条形图和柱状图仅支持配置当前值
    * thresholds  **参数解释** 监控视图的阈值辅助线配置 **约束限制** 不涉及
    * isAllCompareEnable  **参数解释** 同比环比总开关是否生效 **约束限制** 不涉及               **取值范围** - true:生效 - false:不生效 **默认取值** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'filter' => 'setFilter',
            'topN' => 'setTopN',
            'order' => 'setOrder',
            'description' => 'setDescription',
            'lastWeekCompareEnable' => 'setLastWeekCompareEnable',
            'yesterdayCompareEnable' => 'setYesterdayCompareEnable',
            'legendLocation' => 'setLegendLocation',
            'legendValues' => 'setLegendValues',
            'thresholds' => 'setThresholds',
            'isAllCompareEnable' => 'setIsAllCompareEnable'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * filter  **参数解释** 聚合类型 **约束限制** 折线图不支持该参数 **取值范围** 目前只有TopN这一种类型 **默认取值** 不涉及
    * topN  **参数解释** Top前N个；折线图时为随机展示的时序数据条数 **约束限制** 不涉及               **取值范围** 最小值为1，最大值为2147483647 **默认取值** 100
    * order  **参数解释** 排序字段 **约束限制** 折线图不支持该参数   **取值范围** - asc:正序 - desc:倒序 **默认取值** 不涉及
    * description  **参数解释** 监控视图的描述信息 **约束限制** 不涉及                 **取值范围** 长度为[0,200]个字符 **默认取值** 不涉及
    * lastWeekCompareEnable  **参数解释** 是否展示同比（上周同一时间）数据 **约束限制** 不涉及                 **取值范围** - true:展示 - false:不展示 **默认取值** 不涉及
    * yesterdayCompareEnable  **参数解释** 是否展示环比（昨天同一时间）数据 **约束限制** 不涉及                 **取值范围** - true:展示 - false:不展示 **默认取值** 不涉及
    * legendLocation  **参数解释** 图例位置标记 **约束限制** 表格不支持该参数                 **取值范围** - hide:表示隐藏图例 - right:表示图例放在监控视图右侧 - bottom:表示图例放在监控视图底部 **默认取值** 不涉及
    * legendValues  **参数解释** 当前时序数据需要在图例中展示的统计值名称列表 **约束限制** 表格不支持该参数；条形图和柱状图仅支持配置当前值
    * thresholds  **参数解释** 监控视图的阈值辅助线配置 **约束限制** 不涉及
    * isAllCompareEnable  **参数解释** 同比环比总开关是否生效 **约束限制** 不涉及               **取值范围** - true:生效 - false:不生效 **默认取值** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'filter' => 'getFilter',
            'topN' => 'getTopN',
            'order' => 'getOrder',
            'description' => 'getDescription',
            'lastWeekCompareEnable' => 'getLastWeekCompareEnable',
            'yesterdayCompareEnable' => 'getYesterdayCompareEnable',
            'legendLocation' => 'getLegendLocation',
            'legendValues' => 'getLegendValues',
            'thresholds' => 'getThresholds',
            'isAllCompareEnable' => 'getIsAllCompareEnable'
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
    const FILTER_TOP_N = 'topN';
    const ORDER_ASC = 'asc';
    const ORDER_DESC = 'desc';
    const LEGEND_LOCATION_HIDE = 'hide';
    const LEGEND_LOCATION_RIGHT = 'right';
    const LEGEND_LOCATION_BOTTOM = 'bottom';
    const LEGEND_VALUES_LAST = 'last';
    const LEGEND_VALUES_MAX = 'max';
    const LEGEND_VALUES_MIN = 'min';
    const LEGEND_VALUES_AVG = 'avg';
    const LEGEND_VALUES_SUM = 'sum';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFilterAllowableValues()
    {
        return [
            self::FILTER_TOP_N,
        ];
    }

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
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLegendLocationAllowableValues()
    {
        return [
            self::LEGEND_LOCATION_HIDE,
            self::LEGEND_LOCATION_RIGHT,
            self::LEGEND_LOCATION_BOTTOM,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLegendValuesAllowableValues()
    {
        return [
            self::LEGEND_VALUES_LAST,
            self::LEGEND_VALUES_MAX,
            self::LEGEND_VALUES_MIN,
            self::LEGEND_VALUES_AVG,
            self::LEGEND_VALUES_SUM,
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
        $this->container['filter'] = isset($data['filter']) ? $data['filter'] : null;
        $this->container['topN'] = isset($data['topN']) ? $data['topN'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['lastWeekCompareEnable'] = isset($data['lastWeekCompareEnable']) ? $data['lastWeekCompareEnable'] : null;
        $this->container['yesterdayCompareEnable'] = isset($data['yesterdayCompareEnable']) ? $data['yesterdayCompareEnable'] : null;
        $this->container['legendLocation'] = isset($data['legendLocation']) ? $data['legendLocation'] : null;
        $this->container['legendValues'] = isset($data['legendValues']) ? $data['legendValues'] : null;
        $this->container['thresholds'] = isset($data['thresholds']) ? $data['thresholds'] : null;
        $this->container['isAllCompareEnable'] = isset($data['isAllCompareEnable']) ? $data['isAllCompareEnable'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getFilterAllowableValues();
                if (!is_null($this->container['filter']) && !in_array($this->container['filter'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'filter', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['topN']) && ($this->container['topN'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'topN', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['topN']) && ($this->container['topN'] < 1)) {
                $invalidProperties[] = "invalid value for 'topN', must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getOrderAllowableValues();
                if (!is_null($this->container['order']) && !in_array($this->container['order'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'order', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 200)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getLegendLocationAllowableValues();
                if (!is_null($this->container['legendLocation']) && !in_array($this->container['legendLocation'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'legendLocation', must be one of '%s'",
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
    * Gets filter
    *  **参数解释** 聚合类型 **约束限制** 折线图不支持该参数 **取值范围** 目前只有TopN这一种类型 **默认取值** 不涉及
    *
    * @return string|null
    */
    public function getFilter()
    {
        return $this->container['filter'];
    }

    /**
    * Sets filter
    *
    * @param string|null $filter **参数解释** 聚合类型 **约束限制** 折线图不支持该参数 **取值范围** 目前只有TopN这一种类型 **默认取值** 不涉及
    *
    * @return $this
    */
    public function setFilter($filter)
    {
        $this->container['filter'] = $filter;
        return $this;
    }

    /**
    * Gets topN
    *  **参数解释** Top前N个；折线图时为随机展示的时序数据条数 **约束限制** 不涉及               **取值范围** 最小值为1，最大值为2147483647 **默认取值** 100
    *
    * @return int|null
    */
    public function getTopN()
    {
        return $this->container['topN'];
    }

    /**
    * Sets topN
    *
    * @param int|null $topN **参数解释** Top前N个；折线图时为随机展示的时序数据条数 **约束限制** 不涉及               **取值范围** 最小值为1，最大值为2147483647 **默认取值** 100
    *
    * @return $this
    */
    public function setTopN($topN)
    {
        $this->container['topN'] = $topN;
        return $this;
    }

    /**
    * Gets order
    *  **参数解释** 排序字段 **约束限制** 折线图不支持该参数   **取值范围** - asc:正序 - desc:倒序 **默认取值** 不涉及
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
    * @param string|null $order **参数解释** 排序字段 **约束限制** 折线图不支持该参数   **取值范围** - asc:正序 - desc:倒序 **默认取值** 不涉及
    *
    * @return $this
    */
    public function setOrder($order)
    {
        $this->container['order'] = $order;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释** 监控视图的描述信息 **约束限制** 不涉及                 **取值范围** 长度为[0,200]个字符 **默认取值** 不涉及
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description **参数解释** 监控视图的描述信息 **约束限制** 不涉及                 **取值范围** 长度为[0,200]个字符 **默认取值** 不涉及
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets lastWeekCompareEnable
    *  **参数解释** 是否展示同比（上周同一时间）数据 **约束限制** 不涉及                 **取值范围** - true:展示 - false:不展示 **默认取值** 不涉及
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
    * @param bool|null $lastWeekCompareEnable **参数解释** 是否展示同比（上周同一时间）数据 **约束限制** 不涉及                 **取值范围** - true:展示 - false:不展示 **默认取值** 不涉及
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
    *  **参数解释** 是否展示环比（昨天同一时间）数据 **约束限制** 不涉及                 **取值范围** - true:展示 - false:不展示 **默认取值** 不涉及
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
    * @param bool|null $yesterdayCompareEnable **参数解释** 是否展示环比（昨天同一时间）数据 **约束限制** 不涉及                 **取值范围** - true:展示 - false:不展示 **默认取值** 不涉及
    *
    * @return $this
    */
    public function setYesterdayCompareEnable($yesterdayCompareEnable)
    {
        $this->container['yesterdayCompareEnable'] = $yesterdayCompareEnable;
        return $this;
    }

    /**
    * Gets legendLocation
    *  **参数解释** 图例位置标记 **约束限制** 表格不支持该参数                 **取值范围** - hide:表示隐藏图例 - right:表示图例放在监控视图右侧 - bottom:表示图例放在监控视图底部 **默认取值** 不涉及
    *
    * @return string|null
    */
    public function getLegendLocation()
    {
        return $this->container['legendLocation'];
    }

    /**
    * Sets legendLocation
    *
    * @param string|null $legendLocation **参数解释** 图例位置标记 **约束限制** 表格不支持该参数                 **取值范围** - hide:表示隐藏图例 - right:表示图例放在监控视图右侧 - bottom:表示图例放在监控视图底部 **默认取值** 不涉及
    *
    * @return $this
    */
    public function setLegendLocation($legendLocation)
    {
        $this->container['legendLocation'] = $legendLocation;
        return $this;
    }

    /**
    * Gets legendValues
    *  **参数解释** 当前时序数据需要在图例中展示的统计值名称列表 **约束限制** 表格不支持该参数；条形图和柱状图仅支持配置当前值
    *
    * @return string[]|null
    */
    public function getLegendValues()
    {
        return $this->container['legendValues'];
    }

    /**
    * Sets legendValues
    *
    * @param string[]|null $legendValues **参数解释** 当前时序数据需要在图例中展示的统计值名称列表 **约束限制** 表格不支持该参数；条形图和柱状图仅支持配置当前值
    *
    * @return $this
    */
    public function setLegendValues($legendValues)
    {
        $this->container['legendValues'] = $legendValues;
        return $this;
    }

    /**
    * Gets thresholds
    *  **参数解释** 监控视图的阈值辅助线配置 **约束限制** 不涉及
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\ThresholdInfo[]|null
    */
    public function getThresholds()
    {
        return $this->container['thresholds'];
    }

    /**
    * Sets thresholds
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\ThresholdInfo[]|null $thresholds **参数解释** 监控视图的阈值辅助线配置 **约束限制** 不涉及
    *
    * @return $this
    */
    public function setThresholds($thresholds)
    {
        $this->container['thresholds'] = $thresholds;
        return $this;
    }

    /**
    * Gets isAllCompareEnable
    *  **参数解释** 同比环比总开关是否生效 **约束限制** 不涉及               **取值范围** - true:生效 - false:不生效 **默认取值** 不涉及
    *
    * @return bool|null
    */
    public function getIsAllCompareEnable()
    {
        return $this->container['isAllCompareEnable'];
    }

    /**
    * Sets isAllCompareEnable
    *
    * @param bool|null $isAllCompareEnable **参数解释** 同比环比总开关是否生效 **约束限制** 不涉及               **取值范围** - true:生效 - false:不生效 **默认取值** 不涉及
    *
    * @return $this
    */
    public function setIsAllCompareEnable($isAllCompareEnable)
    {
        $this->container['isAllCompareEnable'] = $isAllCompareEnable;
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

