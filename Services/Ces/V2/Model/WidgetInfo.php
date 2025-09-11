<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WidgetInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WidgetInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupId  **参数解释** 视图分组id **取值范围** 字符串必须以dg开头，包含22个字母和数字，长度为24个字符或者为default，default代表不分组
    * metrics  **参数解释** 指标列表
    * title  **参数解释** 监控视图标题 **取值范围** 长度为[1,128]个字符，允许包括以下内容：1、中文汉字；2、拉丁字母；3、英文大小写字母；4、数字(0-9)；5、符号： ” \" ≤ < > & % _ : / ; “ ' ? + , ~ ， （ ） º ( ) [ . -
    * threshold  **参数解释** 监控视图指标的阈值 **取值范围** 最小值为0，最大值为1.7976931348623157e+308
    * thresholdEnabled  **参数解释** 阈值是否展示 **取值范围** - true:展示 - false:不展示
    * view  **参数解释** 监控视图图表类型 **取值范围** - bar:条形图 - line:折线图 - bar_chart:柱状图 - table:表格 - circular_bar:环形柱状图 - area_chart:面积图
    * metricDisplayMode  **参数解释** 指标展示类型 **取值范围** - single:单指标展示 - multiple:多指标展示
    * properties  properties
    * location  location
    * unit  **参数解释** 单位 **取值范围** 长度为[0,32]个字符
    * createTime  **参数解释** 监控看板创建时间 **取值范围** 最小值为1111111111111，最大值为9999999999999
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupId' => 'string',
            'metrics' => '\HuaweiCloud\SDK\Ces\V2\Model\WidgetMetricResp[]',
            'title' => 'string',
            'threshold' => 'double',
            'thresholdEnabled' => 'bool',
            'view' => 'string',
            'metricDisplayMode' => 'string',
            'properties' => '\HuaweiCloud\SDK\Ces\V2\Model\BaseWidgetInfoRespProperties',
            'location' => '\HuaweiCloud\SDK\Ces\V2\Model\BaseWidgetInfoRespLocation',
            'unit' => 'string',
            'createTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupId  **参数解释** 视图分组id **取值范围** 字符串必须以dg开头，包含22个字母和数字，长度为24个字符或者为default，default代表不分组
    * metrics  **参数解释** 指标列表
    * title  **参数解释** 监控视图标题 **取值范围** 长度为[1,128]个字符，允许包括以下内容：1、中文汉字；2、拉丁字母；3、英文大小写字母；4、数字(0-9)；5、符号： ” \" ≤ < > & % _ : / ; “ ' ? + , ~ ， （ ） º ( ) [ . -
    * threshold  **参数解释** 监控视图指标的阈值 **取值范围** 最小值为0，最大值为1.7976931348623157e+308
    * thresholdEnabled  **参数解释** 阈值是否展示 **取值范围** - true:展示 - false:不展示
    * view  **参数解释** 监控视图图表类型 **取值范围** - bar:条形图 - line:折线图 - bar_chart:柱状图 - table:表格 - circular_bar:环形柱状图 - area_chart:面积图
    * metricDisplayMode  **参数解释** 指标展示类型 **取值范围** - single:单指标展示 - multiple:多指标展示
    * properties  properties
    * location  location
    * unit  **参数解释** 单位 **取值范围** 长度为[0,32]个字符
    * createTime  **参数解释** 监控看板创建时间 **取值范围** 最小值为1111111111111，最大值为9999999999999
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupId' => null,
        'metrics' => null,
        'title' => null,
        'threshold' => 'double',
        'thresholdEnabled' => null,
        'view' => null,
        'metricDisplayMode' => null,
        'properties' => null,
        'location' => null,
        'unit' => null,
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
    * groupId  **参数解释** 视图分组id **取值范围** 字符串必须以dg开头，包含22个字母和数字，长度为24个字符或者为default，default代表不分组
    * metrics  **参数解释** 指标列表
    * title  **参数解释** 监控视图标题 **取值范围** 长度为[1,128]个字符，允许包括以下内容：1、中文汉字；2、拉丁字母；3、英文大小写字母；4、数字(0-9)；5、符号： ” \" ≤ < > & % _ : / ; “ ' ? + , ~ ， （ ） º ( ) [ . -
    * threshold  **参数解释** 监控视图指标的阈值 **取值范围** 最小值为0，最大值为1.7976931348623157e+308
    * thresholdEnabled  **参数解释** 阈值是否展示 **取值范围** - true:展示 - false:不展示
    * view  **参数解释** 监控视图图表类型 **取值范围** - bar:条形图 - line:折线图 - bar_chart:柱状图 - table:表格 - circular_bar:环形柱状图 - area_chart:面积图
    * metricDisplayMode  **参数解释** 指标展示类型 **取值范围** - single:单指标展示 - multiple:多指标展示
    * properties  properties
    * location  location
    * unit  **参数解释** 单位 **取值范围** 长度为[0,32]个字符
    * createTime  **参数解释** 监控看板创建时间 **取值范围** 最小值为1111111111111，最大值为9999999999999
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupId' => 'group_id',
            'metrics' => 'metrics',
            'title' => 'title',
            'threshold' => 'threshold',
            'thresholdEnabled' => 'threshold_enabled',
            'view' => 'view',
            'metricDisplayMode' => 'metric_display_mode',
            'properties' => 'properties',
            'location' => 'location',
            'unit' => 'unit',
            'createTime' => 'create_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupId  **参数解释** 视图分组id **取值范围** 字符串必须以dg开头，包含22个字母和数字，长度为24个字符或者为default，default代表不分组
    * metrics  **参数解释** 指标列表
    * title  **参数解释** 监控视图标题 **取值范围** 长度为[1,128]个字符，允许包括以下内容：1、中文汉字；2、拉丁字母；3、英文大小写字母；4、数字(0-9)；5、符号： ” \" ≤ < > & % _ : / ; “ ' ? + , ~ ， （ ） º ( ) [ . -
    * threshold  **参数解释** 监控视图指标的阈值 **取值范围** 最小值为0，最大值为1.7976931348623157e+308
    * thresholdEnabled  **参数解释** 阈值是否展示 **取值范围** - true:展示 - false:不展示
    * view  **参数解释** 监控视图图表类型 **取值范围** - bar:条形图 - line:折线图 - bar_chart:柱状图 - table:表格 - circular_bar:环形柱状图 - area_chart:面积图
    * metricDisplayMode  **参数解释** 指标展示类型 **取值范围** - single:单指标展示 - multiple:多指标展示
    * properties  properties
    * location  location
    * unit  **参数解释** 单位 **取值范围** 长度为[0,32]个字符
    * createTime  **参数解释** 监控看板创建时间 **取值范围** 最小值为1111111111111，最大值为9999999999999
    *
    * @var string[]
    */
    protected static $setters = [
            'groupId' => 'setGroupId',
            'metrics' => 'setMetrics',
            'title' => 'setTitle',
            'threshold' => 'setThreshold',
            'thresholdEnabled' => 'setThresholdEnabled',
            'view' => 'setView',
            'metricDisplayMode' => 'setMetricDisplayMode',
            'properties' => 'setProperties',
            'location' => 'setLocation',
            'unit' => 'setUnit',
            'createTime' => 'setCreateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupId  **参数解释** 视图分组id **取值范围** 字符串必须以dg开头，包含22个字母和数字，长度为24个字符或者为default，default代表不分组
    * metrics  **参数解释** 指标列表
    * title  **参数解释** 监控视图标题 **取值范围** 长度为[1,128]个字符，允许包括以下内容：1、中文汉字；2、拉丁字母；3、英文大小写字母；4、数字(0-9)；5、符号： ” \" ≤ < > & % _ : / ; “ ' ? + , ~ ， （ ） º ( ) [ . -
    * threshold  **参数解释** 监控视图指标的阈值 **取值范围** 最小值为0，最大值为1.7976931348623157e+308
    * thresholdEnabled  **参数解释** 阈值是否展示 **取值范围** - true:展示 - false:不展示
    * view  **参数解释** 监控视图图表类型 **取值范围** - bar:条形图 - line:折线图 - bar_chart:柱状图 - table:表格 - circular_bar:环形柱状图 - area_chart:面积图
    * metricDisplayMode  **参数解释** 指标展示类型 **取值范围** - single:单指标展示 - multiple:多指标展示
    * properties  properties
    * location  location
    * unit  **参数解释** 单位 **取值范围** 长度为[0,32]个字符
    * createTime  **参数解释** 监控看板创建时间 **取值范围** 最小值为1111111111111，最大值为9999999999999
    *
    * @var string[]
    */
    protected static $getters = [
            'groupId' => 'getGroupId',
            'metrics' => 'getMetrics',
            'title' => 'getTitle',
            'threshold' => 'getThreshold',
            'thresholdEnabled' => 'getThresholdEnabled',
            'view' => 'getView',
            'metricDisplayMode' => 'getMetricDisplayMode',
            'properties' => 'getProperties',
            'location' => 'getLocation',
            'unit' => 'getUnit',
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
    const VIEW_BAR = 'bar';
    const VIEW_LINE = 'line';
    const VIEW_BAR_CHART = 'bar_chart';
    const VIEW_TABLE = 'table';
    const VIEW_CIRCULAR_BAR = 'circular_bar';
    const VIEW_AREA_CHART = 'area_chart';
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
            self::VIEW_BAR_CHART,
            self::VIEW_TABLE,
            self::VIEW_CIRCULAR_BAR,
            self::VIEW_AREA_CHART,
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
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['metrics'] = isset($data['metrics']) ? $data['metrics'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['threshold'] = isset($data['threshold']) ? $data['threshold'] : null;
        $this->container['thresholdEnabled'] = isset($data['thresholdEnabled']) ? $data['thresholdEnabled'] : null;
        $this->container['view'] = isset($data['view']) ? $data['view'] : null;
        $this->container['metricDisplayMode'] = isset($data['metricDisplayMode']) ? $data['metricDisplayMode'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
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
            if (!is_null($this->container['groupId']) && !preg_match("/^dg([a-z]|[A-Z]|[0-9]){22}|default$/", $this->container['groupId'])) {
                $invalidProperties[] = "invalid value for 'groupId', must be conform to the pattern /^dg([a-z]|[A-Z]|[0-9]){22}|default$/.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 128)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) < 1)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['title']) && !preg_match("/^([\\u4E00-\\u9FFF]|[\\u00C0-\\u0204]|[a-z]|[A-Z]|[0-9]|[\\\"”≤<>&%_:\/;“'?+,~，（） º\\\\(\\\\)\\\\[\\\\.\\\\-])( *([\\u4E00-\\u9FFF]|[\\u00C0-\\u0204]|[a-z]|[A-Z]|[0-9]|[\\\"”≤<>&%_:\/;“'?+,~，（） º\\\\(\\\\)\\\\[\\\\.\\\\-]))*$/", $this->container['title'])) {
                $invalidProperties[] = "invalid value for 'title', must be conform to the pattern /^([\\u4E00-\\u9FFF]|[\\u00C0-\\u0204]|[a-z]|[A-Z]|[0-9]|[\\\"”≤<>&%_:\/;“'?+,~，（） º\\\\(\\\\)\\\\[\\\\.\\\\-])( *([\\u4E00-\\u9FFF]|[\\u00C0-\\u0204]|[a-z]|[A-Z]|[0-9]|[\\\"”≤<>&%_:\/;“'?+,~，（） º\\\\(\\\\)\\\\[\\\\.\\\\-]))*$/.";
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
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 1111111111111)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 1111111111111.";
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
    * Gets groupId
    *  **参数解释** 视图分组id **取值范围** 字符串必须以dg开头，包含22个字母和数字，长度为24个字符或者为default，default代表不分组
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId **参数解释** 视图分组id **取值范围** 字符串必须以dg开头，包含22个字母和数字，长度为24个字符或者为default，default代表不分组
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets metrics
    *  **参数解释** 指标列表
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\WidgetMetricResp[]|null
    */
    public function getMetrics()
    {
        return $this->container['metrics'];
    }

    /**
    * Sets metrics
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\WidgetMetricResp[]|null $metrics **参数解释** 指标列表
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
    *  **参数解释** 监控视图标题 **取值范围** 长度为[1,128]个字符，允许包括以下内容：1、中文汉字；2、拉丁字母；3、英文大小写字母；4、数字(0-9)；5、符号： ” \" ≤ < > & % _ : / ; “ ' ? + , ~ ， （ ） º ( ) [ . -
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
    * @param string|null $title **参数解释** 监控视图标题 **取值范围** 长度为[1,128]个字符，允许包括以下内容：1、中文汉字；2、拉丁字母；3、英文大小写字母；4、数字(0-9)；5、符号： ” \" ≤ < > & % _ : / ; “ ' ? + , ~ ， （ ） º ( ) [ . -
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
    *  **参数解释** 监控视图指标的阈值 **取值范围** 最小值为0，最大值为1.7976931348623157e+308
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
    * @param double|null $threshold **参数解释** 监控视图指标的阈值 **取值范围** 最小值为0，最大值为1.7976931348623157e+308
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
    *  **参数解释** 阈值是否展示 **取值范围** - true:展示 - false:不展示
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
    * @param bool|null $thresholdEnabled **参数解释** 阈值是否展示 **取值范围** - true:展示 - false:不展示
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
    *  **参数解释** 监控视图图表类型 **取值范围** - bar:条形图 - line:折线图 - bar_chart:柱状图 - table:表格 - circular_bar:环形柱状图 - area_chart:面积图
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
    * @param string|null $view **参数解释** 监控视图图表类型 **取值范围** - bar:条形图 - line:折线图 - bar_chart:柱状图 - table:表格 - circular_bar:环形柱状图 - area_chart:面积图
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
    *  **参数解释** 指标展示类型 **取值范围** - single:单指标展示 - multiple:多指标展示
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
    * @param string|null $metricDisplayMode **参数解释** 指标展示类型 **取值范围** - single:单指标展示 - multiple:多指标展示
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
    * @return \HuaweiCloud\SDK\Ces\V2\Model\BaseWidgetInfoRespProperties|null
    */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
    * Sets properties
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\BaseWidgetInfoRespProperties|null $properties properties
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
    * @return \HuaweiCloud\SDK\Ces\V2\Model\BaseWidgetInfoRespLocation|null
    */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
    * Sets location
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\BaseWidgetInfoRespLocation|null $location location
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
    *  **参数解释** 单位 **取值范围** 长度为[0,32]个字符
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
    * @param string|null $unit **参数解释** 单位 **取值范围** 长度为[0,32]个字符
    *
    * @return $this
    */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;
        return $this;
    }

    /**
    * Gets createTime
    *  **参数解释** 监控看板创建时间 **取值范围** 最小值为1111111111111，最大值为9999999999999
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
    * @param int|null $createTime **参数解释** 监控看板创建时间 **取值范围** 最小值为1111111111111，最大值为9999999999999
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

