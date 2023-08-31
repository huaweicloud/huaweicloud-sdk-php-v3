<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BaseWidgetInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BaseWidgetInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * metrics  指标列表
    * title  监控视图标题
    * threshold  监控视图指标的阈值
    * thresholdEnabled  阈值是否展示，true:展示，false:不展示
    * view  监控视图图表类型, bar柱状图，line折线图
    * metricDisplayMode  指标展示类型，single 单指标展示，multiple 多指标展示
    * properties  properties
    * location  location
    * unit  单位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'metrics' => '\HuaweiCloud\SDK\Ces\V2\Model\WidgetMetric[]',
            'title' => 'string',
            'threshold' => 'double',
            'thresholdEnabled' => 'bool',
            'view' => 'string',
            'metricDisplayMode' => 'string',
            'properties' => '\HuaweiCloud\SDK\Ces\V2\Model\BaseWidgetInfoProperties',
            'location' => '\HuaweiCloud\SDK\Ces\V2\Model\BaseWidgetInfoLocation',
            'unit' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * metrics  指标列表
    * title  监控视图标题
    * threshold  监控视图指标的阈值
    * thresholdEnabled  阈值是否展示，true:展示，false:不展示
    * view  监控视图图表类型, bar柱状图，line折线图
    * metricDisplayMode  指标展示类型，single 单指标展示，multiple 多指标展示
    * properties  properties
    * location  location
    * unit  单位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'metrics' => null,
        'title' => null,
        'threshold' => 'double',
        'thresholdEnabled' => null,
        'view' => null,
        'metricDisplayMode' => null,
        'properties' => null,
        'location' => null,
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
    * metrics  指标列表
    * title  监控视图标题
    * threshold  监控视图指标的阈值
    * thresholdEnabled  阈值是否展示，true:展示，false:不展示
    * view  监控视图图表类型, bar柱状图，line折线图
    * metricDisplayMode  指标展示类型，single 单指标展示，multiple 多指标展示
    * properties  properties
    * location  location
    * unit  单位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'metrics' => 'metrics',
            'title' => 'title',
            'threshold' => 'threshold',
            'thresholdEnabled' => 'threshold_enabled',
            'view' => 'view',
            'metricDisplayMode' => 'metric_display_mode',
            'properties' => 'properties',
            'location' => 'location',
            'unit' => 'unit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * metrics  指标列表
    * title  监控视图标题
    * threshold  监控视图指标的阈值
    * thresholdEnabled  阈值是否展示，true:展示，false:不展示
    * view  监控视图图表类型, bar柱状图，line折线图
    * metricDisplayMode  指标展示类型，single 单指标展示，multiple 多指标展示
    * properties  properties
    * location  location
    * unit  单位
    *
    * @var string[]
    */
    protected static $setters = [
            'metrics' => 'setMetrics',
            'title' => 'setTitle',
            'threshold' => 'setThreshold',
            'thresholdEnabled' => 'setThresholdEnabled',
            'view' => 'setView',
            'metricDisplayMode' => 'setMetricDisplayMode',
            'properties' => 'setProperties',
            'location' => 'setLocation',
            'unit' => 'setUnit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * metrics  指标列表
    * title  监控视图标题
    * threshold  监控视图指标的阈值
    * thresholdEnabled  阈值是否展示，true:展示，false:不展示
    * view  监控视图图表类型, bar柱状图，line折线图
    * metricDisplayMode  指标展示类型，single 单指标展示，multiple 多指标展示
    * properties  properties
    * location  location
    * unit  单位
    *
    * @var string[]
    */
    protected static $getters = [
            'metrics' => 'getMetrics',
            'title' => 'getTitle',
            'threshold' => 'getThreshold',
            'thresholdEnabled' => 'getThresholdEnabled',
            'view' => 'getView',
            'metricDisplayMode' => 'getMetricDisplayMode',
            'properties' => 'getProperties',
            'location' => 'getLocation',
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
    const VIEW_BAR = 'bar';
    const VIEW_LINE = 'line';
    const METRIC_DISPLAY_MODE_SINGLE = 'single';
    const METRIC_DISPLAY_MODE_MULTIPLE = 'multiple';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getViewAllowableValues()
    {
        return [
            self::VIEW_BAR,
            self::VIEW_LINE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMetricDisplayModeAllowableValues()
    {
        return [
            self::METRIC_DISPLAY_MODE_SINGLE,
            self::METRIC_DISPLAY_MODE_MULTIPLE,
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
        $this->container['metrics'] = isset($data['metrics']) ? $data['metrics'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['threshold'] = isset($data['threshold']) ? $data['threshold'] : null;
        $this->container['thresholdEnabled'] = isset($data['thresholdEnabled']) ? $data['thresholdEnabled'] : null;
        $this->container['view'] = isset($data['view']) ? $data['view'] : null;
        $this->container['metricDisplayMode'] = isset($data['metricDisplayMode']) ? $data['metricDisplayMode'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
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
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 128)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) < 1)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['title']) && !preg_match("/^([\\u4E00-\\u9FFF]|[a-z]|[A-Z]|[0-9]|_|-|:|;|\\(|\\)|\\.|~|（|）)+$/", $this->container['title'])) {
                $invalidProperties[] = "invalid value for 'title', must be conform to the pattern /^([\\u4E00-\\u9FFF]|[a-z]|[A-Z]|[0-9]|_|-|:|;|\\(|\\)|\\.|~|（|）)+$/.";
            }
            if (!is_null($this->container['threshold']) && ($this->container['threshold'] > 1.7976931348623157E+308)) {
                $invalidProperties[] = "invalid value for 'threshold', must be smaller than or equal to 1.7976931348623157E+308.";
            }
            if (!is_null($this->container['threshold']) && ($this->container['threshold'] < 0)) {
                $invalidProperties[] = "invalid value for 'threshold', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getViewAllowableValues();
                if (!is_null($this->container['view']) && !in_array($this->container['view'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'view', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getMetricDisplayModeAllowableValues();
                if (!is_null($this->container['metricDisplayMode']) && !in_array($this->container['metricDisplayMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'metricDisplayMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['unit']) && (mb_strlen($this->container['unit']) > 32)) {
                $invalidProperties[] = "invalid value for 'unit', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['unit']) && (mb_strlen($this->container['unit']) < 0)) {
                $invalidProperties[] = "invalid value for 'unit', the character length must be bigger than or equal to 0.";
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
    * Gets metrics
    *  指标列表
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\WidgetMetric[]|null
    */
    public function getMetrics()
    {
        return $this->container['metrics'];
    }

    /**
    * Sets metrics
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\WidgetMetric[]|null $metrics 指标列表
    *
    * @return $this
    */
    public function setMetrics($metrics)
    {
        $this->container['metrics'] = $metrics;
        return $this;
    }

    /**
    * Gets title
    *  监控视图标题
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
    * @param string|null $title 监控视图标题
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets threshold
    *  监控视图指标的阈值
    *
    * @return double|null
    */
    public function getThreshold()
    {
        return $this->container['threshold'];
    }

    /**
    * Sets threshold
    *
    * @param double|null $threshold 监控视图指标的阈值
    *
    * @return $this
    */
    public function setThreshold($threshold)
    {
        $this->container['threshold'] = $threshold;
        return $this;
    }

    /**
    * Gets thresholdEnabled
    *  阈值是否展示，true:展示，false:不展示
    *
    * @return bool|null
    */
    public function getThresholdEnabled()
    {
        return $this->container['thresholdEnabled'];
    }

    /**
    * Sets thresholdEnabled
    *
    * @param bool|null $thresholdEnabled 阈值是否展示，true:展示，false:不展示
    *
    * @return $this
    */
    public function setThresholdEnabled($thresholdEnabled)
    {
        $this->container['thresholdEnabled'] = $thresholdEnabled;
        return $this;
    }

    /**
    * Gets view
    *  监控视图图表类型, bar柱状图，line折线图
    *
    * @return string|null
    */
    public function getView()
    {
        return $this->container['view'];
    }

    /**
    * Sets view
    *
    * @param string|null $view 监控视图图表类型, bar柱状图，line折线图
    *
    * @return $this
    */
    public function setView($view)
    {
        $this->container['view'] = $view;
        return $this;
    }

    /**
    * Gets metricDisplayMode
    *  指标展示类型，single 单指标展示，multiple 多指标展示
    *
    * @return string|null
    */
    public function getMetricDisplayMode()
    {
        return $this->container['metricDisplayMode'];
    }

    /**
    * Sets metricDisplayMode
    *
    * @param string|null $metricDisplayMode 指标展示类型，single 单指标展示，multiple 多指标展示
    *
    * @return $this
    */
    public function setMetricDisplayMode($metricDisplayMode)
    {
        $this->container['metricDisplayMode'] = $metricDisplayMode;
        return $this;
    }

    /**
    * Gets properties
    *  properties
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\BaseWidgetInfoProperties|null
    */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
    * Sets properties
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\BaseWidgetInfoProperties|null $properties properties
    *
    * @return $this
    */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;
        return $this;
    }

    /**
    * Gets location
    *  location
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\BaseWidgetInfoLocation|null
    */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
    * Sets location
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\BaseWidgetInfoLocation|null $location location
    *
    * @return $this
    */
    public function setLocation($location)
    {
        $this->container['location'] = $location;
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

