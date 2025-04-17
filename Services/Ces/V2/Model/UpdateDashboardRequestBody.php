<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateDashboardRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateDashboardRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dashboardName  自定义监控看板名称
    * isFavorite  监控看板是否标记收藏, true: 收藏, false: 未收藏
    * rowWidgetNum  监控视图展示模式，0表示自定义坐标，1代表每行一个
    * filter  表示指标聚合方式，average表示平均值，min表示最小值，max表示最大值，sum表示求合
    * period  表示指标聚合周期，1表示原始值，60表示一分钟，300表示5分钟，1200表示20分钟，3600表示1小时，14400表示4小时，86400表示1天
    * displayTime  展示时间，0表示使用自定义时间展示， 5分钟，15分钟，30分钟，1小时，2小时，3小时，12小时，24小时，7天，30天
    * refreshTime  刷新时间 0秒表示不刷新,10秒，1分钟，5分钟，20分钟
    * from  开始时间
    * to  结束时间
    * screenColor  监控大屏背景颜色
    * enableScreenAutoPlay  监控大屏是否自动切换
    * timeInterval  监控大屏自动切换时间间隔，10000代表10s，30000代表30s，60000代表1min
    * enableLegend  是否开启图例
    * fullScreenWidgetNum  大屏展示视图数量, 可以取得值必须与console页面可选值保持一致
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dashboardName' => 'string',
            'isFavorite' => 'bool',
            'rowWidgetNum' => 'int',
            'filter' => 'string',
            'period' => 'int',
            'displayTime' => 'int',
            'refreshTime' => 'int',
            'from' => 'int',
            'to' => 'int',
            'screenColor' => 'string',
            'enableScreenAutoPlay' => 'bool',
            'timeInterval' => 'int',
            'enableLegend' => 'bool',
            'fullScreenWidgetNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dashboardName  自定义监控看板名称
    * isFavorite  监控看板是否标记收藏, true: 收藏, false: 未收藏
    * rowWidgetNum  监控视图展示模式，0表示自定义坐标，1代表每行一个
    * filter  表示指标聚合方式，average表示平均值，min表示最小值，max表示最大值，sum表示求合
    * period  表示指标聚合周期，1表示原始值，60表示一分钟，300表示5分钟，1200表示20分钟，3600表示1小时，14400表示4小时，86400表示1天
    * displayTime  展示时间，0表示使用自定义时间展示， 5分钟，15分钟，30分钟，1小时，2小时，3小时，12小时，24小时，7天，30天
    * refreshTime  刷新时间 0秒表示不刷新,10秒，1分钟，5分钟，20分钟
    * from  开始时间
    * to  结束时间
    * screenColor  监控大屏背景颜色
    * enableScreenAutoPlay  监控大屏是否自动切换
    * timeInterval  监控大屏自动切换时间间隔，10000代表10s，30000代表30s，60000代表1min
    * enableLegend  是否开启图例
    * fullScreenWidgetNum  大屏展示视图数量, 可以取得值必须与console页面可选值保持一致
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dashboardName' => null,
        'isFavorite' => null,
        'rowWidgetNum' => null,
        'filter' => null,
        'period' => 'int32',
        'displayTime' => 'int32',
        'refreshTime' => 'int32',
        'from' => null,
        'to' => null,
        'screenColor' => null,
        'enableScreenAutoPlay' => null,
        'timeInterval' => 'int32',
        'enableLegend' => null,
        'fullScreenWidgetNum' => null
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
    * dashboardName  自定义监控看板名称
    * isFavorite  监控看板是否标记收藏, true: 收藏, false: 未收藏
    * rowWidgetNum  监控视图展示模式，0表示自定义坐标，1代表每行一个
    * filter  表示指标聚合方式，average表示平均值，min表示最小值，max表示最大值，sum表示求合
    * period  表示指标聚合周期，1表示原始值，60表示一分钟，300表示5分钟，1200表示20分钟，3600表示1小时，14400表示4小时，86400表示1天
    * displayTime  展示时间，0表示使用自定义时间展示， 5分钟，15分钟，30分钟，1小时，2小时，3小时，12小时，24小时，7天，30天
    * refreshTime  刷新时间 0秒表示不刷新,10秒，1分钟，5分钟，20分钟
    * from  开始时间
    * to  结束时间
    * screenColor  监控大屏背景颜色
    * enableScreenAutoPlay  监控大屏是否自动切换
    * timeInterval  监控大屏自动切换时间间隔，10000代表10s，30000代表30s，60000代表1min
    * enableLegend  是否开启图例
    * fullScreenWidgetNum  大屏展示视图数量, 可以取得值必须与console页面可选值保持一致
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dashboardName' => 'dashboard_name',
            'isFavorite' => 'is_favorite',
            'rowWidgetNum' => 'row_widget_num',
            'filter' => 'filter',
            'period' => 'period',
            'displayTime' => 'display_time',
            'refreshTime' => 'refresh_time',
            'from' => 'from',
            'to' => 'to',
            'screenColor' => 'screen_color',
            'enableScreenAutoPlay' => 'enable_screen_auto_play',
            'timeInterval' => 'time_interval',
            'enableLegend' => 'enable_legend',
            'fullScreenWidgetNum' => 'full_screen_widget_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dashboardName  自定义监控看板名称
    * isFavorite  监控看板是否标记收藏, true: 收藏, false: 未收藏
    * rowWidgetNum  监控视图展示模式，0表示自定义坐标，1代表每行一个
    * filter  表示指标聚合方式，average表示平均值，min表示最小值，max表示最大值，sum表示求合
    * period  表示指标聚合周期，1表示原始值，60表示一分钟，300表示5分钟，1200表示20分钟，3600表示1小时，14400表示4小时，86400表示1天
    * displayTime  展示时间，0表示使用自定义时间展示， 5分钟，15分钟，30分钟，1小时，2小时，3小时，12小时，24小时，7天，30天
    * refreshTime  刷新时间 0秒表示不刷新,10秒，1分钟，5分钟，20分钟
    * from  开始时间
    * to  结束时间
    * screenColor  监控大屏背景颜色
    * enableScreenAutoPlay  监控大屏是否自动切换
    * timeInterval  监控大屏自动切换时间间隔，10000代表10s，30000代表30s，60000代表1min
    * enableLegend  是否开启图例
    * fullScreenWidgetNum  大屏展示视图数量, 可以取得值必须与console页面可选值保持一致
    *
    * @var string[]
    */
    protected static $setters = [
            'dashboardName' => 'setDashboardName',
            'isFavorite' => 'setIsFavorite',
            'rowWidgetNum' => 'setRowWidgetNum',
            'filter' => 'setFilter',
            'period' => 'setPeriod',
            'displayTime' => 'setDisplayTime',
            'refreshTime' => 'setRefreshTime',
            'from' => 'setFrom',
            'to' => 'setTo',
            'screenColor' => 'setScreenColor',
            'enableScreenAutoPlay' => 'setEnableScreenAutoPlay',
            'timeInterval' => 'setTimeInterval',
            'enableLegend' => 'setEnableLegend',
            'fullScreenWidgetNum' => 'setFullScreenWidgetNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dashboardName  自定义监控看板名称
    * isFavorite  监控看板是否标记收藏, true: 收藏, false: 未收藏
    * rowWidgetNum  监控视图展示模式，0表示自定义坐标，1代表每行一个
    * filter  表示指标聚合方式，average表示平均值，min表示最小值，max表示最大值，sum表示求合
    * period  表示指标聚合周期，1表示原始值，60表示一分钟，300表示5分钟，1200表示20分钟，3600表示1小时，14400表示4小时，86400表示1天
    * displayTime  展示时间，0表示使用自定义时间展示， 5分钟，15分钟，30分钟，1小时，2小时，3小时，12小时，24小时，7天，30天
    * refreshTime  刷新时间 0秒表示不刷新,10秒，1分钟，5分钟，20分钟
    * from  开始时间
    * to  结束时间
    * screenColor  监控大屏背景颜色
    * enableScreenAutoPlay  监控大屏是否自动切换
    * timeInterval  监控大屏自动切换时间间隔，10000代表10s，30000代表30s，60000代表1min
    * enableLegend  是否开启图例
    * fullScreenWidgetNum  大屏展示视图数量, 可以取得值必须与console页面可选值保持一致
    *
    * @var string[]
    */
    protected static $getters = [
            'dashboardName' => 'getDashboardName',
            'isFavorite' => 'getIsFavorite',
            'rowWidgetNum' => 'getRowWidgetNum',
            'filter' => 'getFilter',
            'period' => 'getPeriod',
            'displayTime' => 'getDisplayTime',
            'refreshTime' => 'getRefreshTime',
            'from' => 'getFrom',
            'to' => 'getTo',
            'screenColor' => 'getScreenColor',
            'enableScreenAutoPlay' => 'getEnableScreenAutoPlay',
            'timeInterval' => 'getTimeInterval',
            'enableLegend' => 'getEnableLegend',
            'fullScreenWidgetNum' => 'getFullScreenWidgetNum'
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
    const FILTER_AVERAGE = 'average';
    const FILTER_MIN = 'min';
    const FILTER_MAX = 'max';
    const FILTER_SUM = 'sum';
    const PERIOD_1 = 1;
    const PERIOD_60 = 60;
    const PERIOD_300 = 300;
    const PERIOD_1200 = 1200;
    const PERIOD_3600 = 3600;
    const PERIOD_14400 = 14400;
    const PERIOD_86400 = 86400;
    const DISPLAY_TIME_0 = 0;
    const DISPLAY_TIME_5 = 5;
    const DISPLAY_TIME_15 = 15;
    const DISPLAY_TIME_30 = 30;
    const DISPLAY_TIME_60 = 60;
    const DISPLAY_TIME_120 = 120;
    const DISPLAY_TIME_180 = 180;
    const DISPLAY_TIME_720 = 720;
    const DISPLAY_TIME_1440 = 1440;
    const DISPLAY_TIME_10080 = 10080;
    const DISPLAY_TIME_43200 = 43200;
    const REFRESH_TIME_0 = 0;
    const REFRESH_TIME_10 = 10;
    const REFRESH_TIME_60 = 60;
    const REFRESH_TIME_300 = 300;
    const REFRESH_TIME_1200 = 1200;
    const TIME_INTERVAL_10000 = 10000;
    const TIME_INTERVAL_30000 = 30000;
    const TIME_INTERVAL_60000 = 60000;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFilterAllowableValues()
    {
        return [
            self::FILTER_AVERAGE,
            self::FILTER_MIN,
            self::FILTER_MAX,
            self::FILTER_SUM,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPeriodAllowableValues()
    {
        return [
            self::PERIOD_1,
            self::PERIOD_60,
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
    public function getDisplayTimeAllowableValues()
    {
        return [
            self::DISPLAY_TIME_0,
            self::DISPLAY_TIME_5,
            self::DISPLAY_TIME_15,
            self::DISPLAY_TIME_30,
            self::DISPLAY_TIME_60,
            self::DISPLAY_TIME_120,
            self::DISPLAY_TIME_180,
            self::DISPLAY_TIME_720,
            self::DISPLAY_TIME_1440,
            self::DISPLAY_TIME_10080,
            self::DISPLAY_TIME_43200,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRefreshTimeAllowableValues()
    {
        return [
            self::REFRESH_TIME_0,
            self::REFRESH_TIME_10,
            self::REFRESH_TIME_60,
            self::REFRESH_TIME_300,
            self::REFRESH_TIME_1200,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTimeIntervalAllowableValues()
    {
        return [
            self::TIME_INTERVAL_10000,
            self::TIME_INTERVAL_30000,
            self::TIME_INTERVAL_60000,
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
        $this->container['dashboardName'] = isset($data['dashboardName']) ? $data['dashboardName'] : null;
        $this->container['isFavorite'] = isset($data['isFavorite']) ? $data['isFavorite'] : null;
        $this->container['rowWidgetNum'] = isset($data['rowWidgetNum']) ? $data['rowWidgetNum'] : null;
        $this->container['filter'] = isset($data['filter']) ? $data['filter'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['displayTime'] = isset($data['displayTime']) ? $data['displayTime'] : null;
        $this->container['refreshTime'] = isset($data['refreshTime']) ? $data['refreshTime'] : null;
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
        $this->container['screenColor'] = isset($data['screenColor']) ? $data['screenColor'] : null;
        $this->container['enableScreenAutoPlay'] = isset($data['enableScreenAutoPlay']) ? $data['enableScreenAutoPlay'] : null;
        $this->container['timeInterval'] = isset($data['timeInterval']) ? $data['timeInterval'] : null;
        $this->container['enableLegend'] = isset($data['enableLegend']) ? $data['enableLegend'] : null;
        $this->container['fullScreenWidgetNum'] = isset($data['fullScreenWidgetNum']) ? $data['fullScreenWidgetNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['dashboardName']) && (mb_strlen($this->container['dashboardName']) > 128)) {
                $invalidProperties[] = "invalid value for 'dashboardName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['dashboardName']) && (mb_strlen($this->container['dashboardName']) < 1)) {
                $invalidProperties[] = "invalid value for 'dashboardName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['dashboardName']) && !preg_match("/^([\\u4E00-\\u9FFF]|[a-z]|[A-Z]|[0-9]|_|-)+$/", $this->container['dashboardName'])) {
                $invalidProperties[] = "invalid value for 'dashboardName', must be conform to the pattern /^([\\u4E00-\\u9FFF]|[a-z]|[A-Z]|[0-9]|_|-)+$/.";
            }
            if (!is_null($this->container['rowWidgetNum']) && ($this->container['rowWidgetNum'] > 3)) {
                $invalidProperties[] = "invalid value for 'rowWidgetNum', must be smaller than or equal to 3.";
            }
            if (!is_null($this->container['rowWidgetNum']) && ($this->container['rowWidgetNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'rowWidgetNum', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getFilterAllowableValues();
                if (!is_null($this->container['filter']) && !in_array($this->container['filter'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'filter', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getPeriodAllowableValues();
                if (!is_null($this->container['period']) && !in_array($this->container['period'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'period', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getDisplayTimeAllowableValues();
                if (!is_null($this->container['displayTime']) && !in_array($this->container['displayTime'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'displayTime', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getRefreshTimeAllowableValues();
                if (!is_null($this->container['refreshTime']) && !in_array($this->container['refreshTime'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'refreshTime', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['from']) && ($this->container['from'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'from', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['from']) && ($this->container['from'] < 0)) {
                $invalidProperties[] = "invalid value for 'from', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['to']) && ($this->container['to'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'to', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['to']) && ($this->container['to'] < 0)) {
                $invalidProperties[] = "invalid value for 'to', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['screenColor']) && (mb_strlen($this->container['screenColor']) > 100)) {
                $invalidProperties[] = "invalid value for 'screenColor', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['screenColor']) && (mb_strlen($this->container['screenColor']) < 1)) {
                $invalidProperties[] = "invalid value for 'screenColor', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getTimeIntervalAllowableValues();
                if (!is_null($this->container['timeInterval']) && !in_array($this->container['timeInterval'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'timeInterval', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['fullScreenWidgetNum']) && ($this->container['fullScreenWidgetNum'] > 65535)) {
                $invalidProperties[] = "invalid value for 'fullScreenWidgetNum', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['fullScreenWidgetNum']) && ($this->container['fullScreenWidgetNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'fullScreenWidgetNum', must be bigger than or equal to 0.";
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
    * Gets dashboardName
    *  自定义监控看板名称
    *
    * @return string|null
    */
    public function getDashboardName()
    {
        return $this->container['dashboardName'];
    }

    /**
    * Sets dashboardName
    *
    * @param string|null $dashboardName 自定义监控看板名称
    *
    * @return $this
    */
    public function setDashboardName($dashboardName)
    {
        $this->container['dashboardName'] = $dashboardName;
        return $this;
    }

    /**
    * Gets isFavorite
    *  监控看板是否标记收藏, true: 收藏, false: 未收藏
    *
    * @return bool|null
    */
    public function getIsFavorite()
    {
        return $this->container['isFavorite'];
    }

    /**
    * Sets isFavorite
    *
    * @param bool|null $isFavorite 监控看板是否标记收藏, true: 收藏, false: 未收藏
    *
    * @return $this
    */
    public function setIsFavorite($isFavorite)
    {
        $this->container['isFavorite'] = $isFavorite;
        return $this;
    }

    /**
    * Gets rowWidgetNum
    *  监控视图展示模式，0表示自定义坐标，1代表每行一个
    *
    * @return int|null
    */
    public function getRowWidgetNum()
    {
        return $this->container['rowWidgetNum'];
    }

    /**
    * Sets rowWidgetNum
    *
    * @param int|null $rowWidgetNum 监控视图展示模式，0表示自定义坐标，1代表每行一个
    *
    * @return $this
    */
    public function setRowWidgetNum($rowWidgetNum)
    {
        $this->container['rowWidgetNum'] = $rowWidgetNum;
        return $this;
    }

    /**
    * Gets filter
    *  表示指标聚合方式，average表示平均值，min表示最小值，max表示最大值，sum表示求合
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
    * @param string|null $filter 表示指标聚合方式，average表示平均值，min表示最小值，max表示最大值，sum表示求合
    *
    * @return $this
    */
    public function setFilter($filter)
    {
        $this->container['filter'] = $filter;
        return $this;
    }

    /**
    * Gets period
    *  表示指标聚合周期，1表示原始值，60表示一分钟，300表示5分钟，1200表示20分钟，3600表示1小时，14400表示4小时，86400表示1天
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
    * @param int|null $period 表示指标聚合周期，1表示原始值，60表示一分钟，300表示5分钟，1200表示20分钟，3600表示1小时，14400表示4小时，86400表示1天
    *
    * @return $this
    */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;
        return $this;
    }

    /**
    * Gets displayTime
    *  展示时间，0表示使用自定义时间展示， 5分钟，15分钟，30分钟，1小时，2小时，3小时，12小时，24小时，7天，30天
    *
    * @return int|null
    */
    public function getDisplayTime()
    {
        return $this->container['displayTime'];
    }

    /**
    * Sets displayTime
    *
    * @param int|null $displayTime 展示时间，0表示使用自定义时间展示， 5分钟，15分钟，30分钟，1小时，2小时，3小时，12小时，24小时，7天，30天
    *
    * @return $this
    */
    public function setDisplayTime($displayTime)
    {
        $this->container['displayTime'] = $displayTime;
        return $this;
    }

    /**
    * Gets refreshTime
    *  刷新时间 0秒表示不刷新,10秒，1分钟，5分钟，20分钟
    *
    * @return int|null
    */
    public function getRefreshTime()
    {
        return $this->container['refreshTime'];
    }

    /**
    * Sets refreshTime
    *
    * @param int|null $refreshTime 刷新时间 0秒表示不刷新,10秒，1分钟，5分钟，20分钟
    *
    * @return $this
    */
    public function setRefreshTime($refreshTime)
    {
        $this->container['refreshTime'] = $refreshTime;
        return $this;
    }

    /**
    * Gets from
    *  开始时间
    *
    * @return int|null
    */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
    * Sets from
    *
    * @param int|null $from 开始时间
    *
    * @return $this
    */
    public function setFrom($from)
    {
        $this->container['from'] = $from;
        return $this;
    }

    /**
    * Gets to
    *  结束时间
    *
    * @return int|null
    */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
    * Sets to
    *
    * @param int|null $to 结束时间
    *
    * @return $this
    */
    public function setTo($to)
    {
        $this->container['to'] = $to;
        return $this;
    }

    /**
    * Gets screenColor
    *  监控大屏背景颜色
    *
    * @return string|null
    */
    public function getScreenColor()
    {
        return $this->container['screenColor'];
    }

    /**
    * Sets screenColor
    *
    * @param string|null $screenColor 监控大屏背景颜色
    *
    * @return $this
    */
    public function setScreenColor($screenColor)
    {
        $this->container['screenColor'] = $screenColor;
        return $this;
    }

    /**
    * Gets enableScreenAutoPlay
    *  监控大屏是否自动切换
    *
    * @return bool|null
    */
    public function getEnableScreenAutoPlay()
    {
        return $this->container['enableScreenAutoPlay'];
    }

    /**
    * Sets enableScreenAutoPlay
    *
    * @param bool|null $enableScreenAutoPlay 监控大屏是否自动切换
    *
    * @return $this
    */
    public function setEnableScreenAutoPlay($enableScreenAutoPlay)
    {
        $this->container['enableScreenAutoPlay'] = $enableScreenAutoPlay;
        return $this;
    }

    /**
    * Gets timeInterval
    *  监控大屏自动切换时间间隔，10000代表10s，30000代表30s，60000代表1min
    *
    * @return int|null
    */
    public function getTimeInterval()
    {
        return $this->container['timeInterval'];
    }

    /**
    * Sets timeInterval
    *
    * @param int|null $timeInterval 监控大屏自动切换时间间隔，10000代表10s，30000代表30s，60000代表1min
    *
    * @return $this
    */
    public function setTimeInterval($timeInterval)
    {
        $this->container['timeInterval'] = $timeInterval;
        return $this;
    }

    /**
    * Gets enableLegend
    *  是否开启图例
    *
    * @return bool|null
    */
    public function getEnableLegend()
    {
        return $this->container['enableLegend'];
    }

    /**
    * Sets enableLegend
    *
    * @param bool|null $enableLegend 是否开启图例
    *
    * @return $this
    */
    public function setEnableLegend($enableLegend)
    {
        $this->container['enableLegend'] = $enableLegend;
        return $this;
    }

    /**
    * Gets fullScreenWidgetNum
    *  大屏展示视图数量, 可以取得值必须与console页面可选值保持一致
    *
    * @return int|null
    */
    public function getFullScreenWidgetNum()
    {
        return $this->container['fullScreenWidgetNum'];
    }

    /**
    * Sets fullScreenWidgetNum
    *
    * @param int|null $fullScreenWidgetNum 大屏展示视图数量, 可以取得值必须与console页面可选值保持一致
    *
    * @return $this
    */
    public function setFullScreenWidgetNum($fullScreenWidgetNum)
    {
        $this->container['fullScreenWidgetNum'] = $fullScreenWidgetNum;
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

