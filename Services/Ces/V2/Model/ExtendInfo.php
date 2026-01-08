<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExtendInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExtendInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * filter  **参数解释** 表示指标聚合方式 **约束限制** 不涉及 **取值范围** 枚举值： - average 平均值 - min 最小值 - max 最大值 - sum 求和值 **默认取值** 不涉及
    * period  **参数解释** 表示指标聚合周期 **约束限制** 不涉及 **取值范围** - 1 原始值 - 60 一分钟 - 300 5分钟 - 1200 20分钟 - 3600 1小时 - 14400 4小时 - 86400 1天 **默认取值** 不涉及
    * displayTime  **参数解释** 展示时间 **约束限制** 不涉及 **取值范围** 枚举值： - 0 自定义时间 - 5 5分钟 - 15 15分钟 - 30 30分钟 - 60 1小时 - 120 2小时 - 180 3小时 - 720 12小时 - 1440 24小时 - 10080 7天 - 43200 30天 **默认取值** 不涉及
    * refreshTime  **参数解释** 刷新时间 **约束限制** 不涉及 **取值范围** 枚举值： - 0 不刷新 - 10 10秒 - 60 1分钟 - 300 5分钟 - 1200 20分钟 **默认取值** 不涉及
    * from  **参数解释** 开始时间 **约束限制** 不涉及 **取值范围** 时间戳取值为[0,9999999999999] **默认取值** 不涉及
    * to  **参数解释** 结束时间 **约束限制** 不涉及 **取值范围** 时间戳取值为[0,9999999999999] **默认取值** 不涉及
    * screenColor  **参数解释** 监控大屏背景颜色 **约束限制** 不涉及 **取值范围** 背景颜色长度为[1,100]个字符 **默认取值** 不涉及
    * enableScreenAutoPlay  **参数解释** 监控大屏是否自动切换 **约束限制** 不涉及 **取值范围** - true 是 - false 否 **默认取值** 不涉及
    * timeInterval  **参数解释**  监控大屏自动切换时间间隔  **约束限制**  不涉及  **取值范围**  枚举值：  - 10000 10秒  - 30000 30秒  - 60000 1分钟  **默认取值**  不涉及
    * enableLegend  **参数解释** 是否开启图例 **约束限制** 不涉及 **取值范围** - true 是 - false 否 **默认取值** 不涉及
    * fullScreenWidgetNum  **参数解释** 大屏展示视图数量 **约束限制** 可以取的值必须与console页面可选值保持一致 **取值范围** 视图数量为[0,65535] **默认取值** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'filter' => 'string',
            'period' => 'string',
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
    * filter  **参数解释** 表示指标聚合方式 **约束限制** 不涉及 **取值范围** 枚举值： - average 平均值 - min 最小值 - max 最大值 - sum 求和值 **默认取值** 不涉及
    * period  **参数解释** 表示指标聚合周期 **约束限制** 不涉及 **取值范围** - 1 原始值 - 60 一分钟 - 300 5分钟 - 1200 20分钟 - 3600 1小时 - 14400 4小时 - 86400 1天 **默认取值** 不涉及
    * displayTime  **参数解释** 展示时间 **约束限制** 不涉及 **取值范围** 枚举值： - 0 自定义时间 - 5 5分钟 - 15 15分钟 - 30 30分钟 - 60 1小时 - 120 2小时 - 180 3小时 - 720 12小时 - 1440 24小时 - 10080 7天 - 43200 30天 **默认取值** 不涉及
    * refreshTime  **参数解释** 刷新时间 **约束限制** 不涉及 **取值范围** 枚举值： - 0 不刷新 - 10 10秒 - 60 1分钟 - 300 5分钟 - 1200 20分钟 **默认取值** 不涉及
    * from  **参数解释** 开始时间 **约束限制** 不涉及 **取值范围** 时间戳取值为[0,9999999999999] **默认取值** 不涉及
    * to  **参数解释** 结束时间 **约束限制** 不涉及 **取值范围** 时间戳取值为[0,9999999999999] **默认取值** 不涉及
    * screenColor  **参数解释** 监控大屏背景颜色 **约束限制** 不涉及 **取值范围** 背景颜色长度为[1,100]个字符 **默认取值** 不涉及
    * enableScreenAutoPlay  **参数解释** 监控大屏是否自动切换 **约束限制** 不涉及 **取值范围** - true 是 - false 否 **默认取值** 不涉及
    * timeInterval  **参数解释**  监控大屏自动切换时间间隔  **约束限制**  不涉及  **取值范围**  枚举值：  - 10000 10秒  - 30000 30秒  - 60000 1分钟  **默认取值**  不涉及
    * enableLegend  **参数解释** 是否开启图例 **约束限制** 不涉及 **取值范围** - true 是 - false 否 **默认取值** 不涉及
    * fullScreenWidgetNum  **参数解释** 大屏展示视图数量 **约束限制** 可以取的值必须与console页面可选值保持一致 **取值范围** 视图数量为[0,65535] **默认取值** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'filter' => null,
        'period' => null,
        'displayTime' => 'int32',
        'refreshTime' => 'int32',
        'from' => 'int64',
        'to' => 'int64',
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
    * filter  **参数解释** 表示指标聚合方式 **约束限制** 不涉及 **取值范围** 枚举值： - average 平均值 - min 最小值 - max 最大值 - sum 求和值 **默认取值** 不涉及
    * period  **参数解释** 表示指标聚合周期 **约束限制** 不涉及 **取值范围** - 1 原始值 - 60 一分钟 - 300 5分钟 - 1200 20分钟 - 3600 1小时 - 14400 4小时 - 86400 1天 **默认取值** 不涉及
    * displayTime  **参数解释** 展示时间 **约束限制** 不涉及 **取值范围** 枚举值： - 0 自定义时间 - 5 5分钟 - 15 15分钟 - 30 30分钟 - 60 1小时 - 120 2小时 - 180 3小时 - 720 12小时 - 1440 24小时 - 10080 7天 - 43200 30天 **默认取值** 不涉及
    * refreshTime  **参数解释** 刷新时间 **约束限制** 不涉及 **取值范围** 枚举值： - 0 不刷新 - 10 10秒 - 60 1分钟 - 300 5分钟 - 1200 20分钟 **默认取值** 不涉及
    * from  **参数解释** 开始时间 **约束限制** 不涉及 **取值范围** 时间戳取值为[0,9999999999999] **默认取值** 不涉及
    * to  **参数解释** 结束时间 **约束限制** 不涉及 **取值范围** 时间戳取值为[0,9999999999999] **默认取值** 不涉及
    * screenColor  **参数解释** 监控大屏背景颜色 **约束限制** 不涉及 **取值范围** 背景颜色长度为[1,100]个字符 **默认取值** 不涉及
    * enableScreenAutoPlay  **参数解释** 监控大屏是否自动切换 **约束限制** 不涉及 **取值范围** - true 是 - false 否 **默认取值** 不涉及
    * timeInterval  **参数解释**  监控大屏自动切换时间间隔  **约束限制**  不涉及  **取值范围**  枚举值：  - 10000 10秒  - 30000 30秒  - 60000 1分钟  **默认取值**  不涉及
    * enableLegend  **参数解释** 是否开启图例 **约束限制** 不涉及 **取值范围** - true 是 - false 否 **默认取值** 不涉及
    * fullScreenWidgetNum  **参数解释** 大屏展示视图数量 **约束限制** 可以取的值必须与console页面可选值保持一致 **取值范围** 视图数量为[0,65535] **默认取值** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
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
    * filter  **参数解释** 表示指标聚合方式 **约束限制** 不涉及 **取值范围** 枚举值： - average 平均值 - min 最小值 - max 最大值 - sum 求和值 **默认取值** 不涉及
    * period  **参数解释** 表示指标聚合周期 **约束限制** 不涉及 **取值范围** - 1 原始值 - 60 一分钟 - 300 5分钟 - 1200 20分钟 - 3600 1小时 - 14400 4小时 - 86400 1天 **默认取值** 不涉及
    * displayTime  **参数解释** 展示时间 **约束限制** 不涉及 **取值范围** 枚举值： - 0 自定义时间 - 5 5分钟 - 15 15分钟 - 30 30分钟 - 60 1小时 - 120 2小时 - 180 3小时 - 720 12小时 - 1440 24小时 - 10080 7天 - 43200 30天 **默认取值** 不涉及
    * refreshTime  **参数解释** 刷新时间 **约束限制** 不涉及 **取值范围** 枚举值： - 0 不刷新 - 10 10秒 - 60 1分钟 - 300 5分钟 - 1200 20分钟 **默认取值** 不涉及
    * from  **参数解释** 开始时间 **约束限制** 不涉及 **取值范围** 时间戳取值为[0,9999999999999] **默认取值** 不涉及
    * to  **参数解释** 结束时间 **约束限制** 不涉及 **取值范围** 时间戳取值为[0,9999999999999] **默认取值** 不涉及
    * screenColor  **参数解释** 监控大屏背景颜色 **约束限制** 不涉及 **取值范围** 背景颜色长度为[1,100]个字符 **默认取值** 不涉及
    * enableScreenAutoPlay  **参数解释** 监控大屏是否自动切换 **约束限制** 不涉及 **取值范围** - true 是 - false 否 **默认取值** 不涉及
    * timeInterval  **参数解释**  监控大屏自动切换时间间隔  **约束限制**  不涉及  **取值范围**  枚举值：  - 10000 10秒  - 30000 30秒  - 60000 1分钟  **默认取值**  不涉及
    * enableLegend  **参数解释** 是否开启图例 **约束限制** 不涉及 **取值范围** - true 是 - false 否 **默认取值** 不涉及
    * fullScreenWidgetNum  **参数解释** 大屏展示视图数量 **约束限制** 可以取的值必须与console页面可选值保持一致 **取值范围** 视图数量为[0,65535] **默认取值** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
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
    * filter  **参数解释** 表示指标聚合方式 **约束限制** 不涉及 **取值范围** 枚举值： - average 平均值 - min 最小值 - max 最大值 - sum 求和值 **默认取值** 不涉及
    * period  **参数解释** 表示指标聚合周期 **约束限制** 不涉及 **取值范围** - 1 原始值 - 60 一分钟 - 300 5分钟 - 1200 20分钟 - 3600 1小时 - 14400 4小时 - 86400 1天 **默认取值** 不涉及
    * displayTime  **参数解释** 展示时间 **约束限制** 不涉及 **取值范围** 枚举值： - 0 自定义时间 - 5 5分钟 - 15 15分钟 - 30 30分钟 - 60 1小时 - 120 2小时 - 180 3小时 - 720 12小时 - 1440 24小时 - 10080 7天 - 43200 30天 **默认取值** 不涉及
    * refreshTime  **参数解释** 刷新时间 **约束限制** 不涉及 **取值范围** 枚举值： - 0 不刷新 - 10 10秒 - 60 1分钟 - 300 5分钟 - 1200 20分钟 **默认取值** 不涉及
    * from  **参数解释** 开始时间 **约束限制** 不涉及 **取值范围** 时间戳取值为[0,9999999999999] **默认取值** 不涉及
    * to  **参数解释** 结束时间 **约束限制** 不涉及 **取值范围** 时间戳取值为[0,9999999999999] **默认取值** 不涉及
    * screenColor  **参数解释** 监控大屏背景颜色 **约束限制** 不涉及 **取值范围** 背景颜色长度为[1,100]个字符 **默认取值** 不涉及
    * enableScreenAutoPlay  **参数解释** 监控大屏是否自动切换 **约束限制** 不涉及 **取值范围** - true 是 - false 否 **默认取值** 不涉及
    * timeInterval  **参数解释**  监控大屏自动切换时间间隔  **约束限制**  不涉及  **取值范围**  枚举值：  - 10000 10秒  - 30000 30秒  - 60000 1分钟  **默认取值**  不涉及
    * enableLegend  **参数解释** 是否开启图例 **约束限制** 不涉及 **取值范围** - true 是 - false 否 **默认取值** 不涉及
    * fullScreenWidgetNum  **参数解释** 大屏展示视图数量 **约束限制** 可以取的值必须与console页面可选值保持一致 **取值范围** 视图数量为[0,65535] **默认取值** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
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
            $allowedValues = $this->getFilterAllowableValues();
                if (!is_null($this->container['filter']) && !in_array($this->container['filter'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'filter', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['period']) && (mb_strlen($this->container['period']) > 100)) {
                $invalidProperties[] = "invalid value for 'period', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['period']) && (mb_strlen($this->container['period']) < 0)) {
                $invalidProperties[] = "invalid value for 'period', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['period']) && !preg_match("/^(1|60|300|1200|3600|14400|86400)$/", $this->container['period'])) {
                $invalidProperties[] = "invalid value for 'period', must be conform to the pattern /^(1|60|300|1200|3600|14400|86400)$/.";
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
    * Gets filter
    *  **参数解释** 表示指标聚合方式 **约束限制** 不涉及 **取值范围** 枚举值： - average 平均值 - min 最小值 - max 最大值 - sum 求和值 **默认取值** 不涉及
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
    * @param string|null $filter **参数解释** 表示指标聚合方式 **约束限制** 不涉及 **取值范围** 枚举值： - average 平均值 - min 最小值 - max 最大值 - sum 求和值 **默认取值** 不涉及
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
    *  **参数解释** 表示指标聚合周期 **约束限制** 不涉及 **取值范围** - 1 原始值 - 60 一分钟 - 300 5分钟 - 1200 20分钟 - 3600 1小时 - 14400 4小时 - 86400 1天 **默认取值** 不涉及
    *
    * @return string|null
    */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
    * Sets period
    *
    * @param string|null $period **参数解释** 表示指标聚合周期 **约束限制** 不涉及 **取值范围** - 1 原始值 - 60 一分钟 - 300 5分钟 - 1200 20分钟 - 3600 1小时 - 14400 4小时 - 86400 1天 **默认取值** 不涉及
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
    *  **参数解释** 展示时间 **约束限制** 不涉及 **取值范围** 枚举值： - 0 自定义时间 - 5 5分钟 - 15 15分钟 - 30 30分钟 - 60 1小时 - 120 2小时 - 180 3小时 - 720 12小时 - 1440 24小时 - 10080 7天 - 43200 30天 **默认取值** 不涉及
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
    * @param int|null $displayTime **参数解释** 展示时间 **约束限制** 不涉及 **取值范围** 枚举值： - 0 自定义时间 - 5 5分钟 - 15 15分钟 - 30 30分钟 - 60 1小时 - 120 2小时 - 180 3小时 - 720 12小时 - 1440 24小时 - 10080 7天 - 43200 30天 **默认取值** 不涉及
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
    *  **参数解释** 刷新时间 **约束限制** 不涉及 **取值范围** 枚举值： - 0 不刷新 - 10 10秒 - 60 1分钟 - 300 5分钟 - 1200 20分钟 **默认取值** 不涉及
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
    * @param int|null $refreshTime **参数解释** 刷新时间 **约束限制** 不涉及 **取值范围** 枚举值： - 0 不刷新 - 10 10秒 - 60 1分钟 - 300 5分钟 - 1200 20分钟 **默认取值** 不涉及
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
    *  **参数解释** 开始时间 **约束限制** 不涉及 **取值范围** 时间戳取值为[0,9999999999999] **默认取值** 不涉及
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
    * @param int|null $from **参数解释** 开始时间 **约束限制** 不涉及 **取值范围** 时间戳取值为[0,9999999999999] **默认取值** 不涉及
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
    *  **参数解释** 结束时间 **约束限制** 不涉及 **取值范围** 时间戳取值为[0,9999999999999] **默认取值** 不涉及
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
    * @param int|null $to **参数解释** 结束时间 **约束限制** 不涉及 **取值范围** 时间戳取值为[0,9999999999999] **默认取值** 不涉及
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
    *  **参数解释** 监控大屏背景颜色 **约束限制** 不涉及 **取值范围** 背景颜色长度为[1,100]个字符 **默认取值** 不涉及
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
    * @param string|null $screenColor **参数解释** 监控大屏背景颜色 **约束限制** 不涉及 **取值范围** 背景颜色长度为[1,100]个字符 **默认取值** 不涉及
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
    *  **参数解释** 监控大屏是否自动切换 **约束限制** 不涉及 **取值范围** - true 是 - false 否 **默认取值** 不涉及
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
    * @param bool|null $enableScreenAutoPlay **参数解释** 监控大屏是否自动切换 **约束限制** 不涉及 **取值范围** - true 是 - false 否 **默认取值** 不涉及
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
    *  **参数解释**  监控大屏自动切换时间间隔  **约束限制**  不涉及  **取值范围**  枚举值：  - 10000 10秒  - 30000 30秒  - 60000 1分钟  **默认取值**  不涉及
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
    * @param int|null $timeInterval **参数解释**  监控大屏自动切换时间间隔  **约束限制**  不涉及  **取值范围**  枚举值：  - 10000 10秒  - 30000 30秒  - 60000 1分钟  **默认取值**  不涉及
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
    *  **参数解释** 是否开启图例 **约束限制** 不涉及 **取值范围** - true 是 - false 否 **默认取值** 不涉及
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
    * @param bool|null $enableLegend **参数解释** 是否开启图例 **约束限制** 不涉及 **取值范围** - true 是 - false 否 **默认取值** 不涉及
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
    *  **参数解释** 大屏展示视图数量 **约束限制** 可以取的值必须与console页面可选值保持一致 **取值范围** 视图数量为[0,65535] **默认取值** 不涉及
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
    * @param int|null $fullScreenWidgetNum **参数解释** 大屏展示视图数量 **约束限制** 可以取的值必须与console页面可选值保持一致 **取值范围** 视图数量为[0,65535] **默认取值** 不涉及
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

