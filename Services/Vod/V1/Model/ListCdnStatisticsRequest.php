<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListCdnStatisticsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListCdnStatisticsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。
    * startTime  开始时间，格式为yyyymmddhhmmss。   - interval为300时，end_time设置为整5分钟时刻点，如：20240601000000。   - interval为3600时，end_time设置为整小时时刻点，如：20240601120000。   - interval为86400时，end_time设置为东8区零点时刻点，如：20240601000000。   - 只能查询最近三个月内的数据，且时间跨度不能超过31天。
    * endTime  结束时间，格式为yyyymmddhhmmss。   - interval为300时，end_time设置为整5分钟时刻点，如：20240601000000。   - interval为3600时，end_time设置为整小时时刻点，如：20240601120000。   - interval为86400时，end_time设置为东8区零点时刻点，如：20240601000000。   - 只能查询最近三个月内的数据，且时间跨度不能超过31天。
    * statType  统计数据类型。  取值如下： - bw：CDN峰值带宽 - flux：CDN流量 - req_num：请求总数 - req_hit_rate：请求命中率 - flux_hit_rate：流量命中率 - http_code_2xx 状态码汇总2xx - http_code_3xx 状态码汇总3xx - http_code_4xx 状态码汇总4xx - http_code_5xx 状态码汇总5xx  每次只能查询一种统计数据。
    * domain  域名列表，多个域名以逗号（半角）分隔。  示例：example.test1.com,example.test2.com。  ALL表示查询名下全部域名。一次最多查询20个域名。
    * interval  查询粒度间隔。  取值如下： - 300(5分钟)：最大查询跨度2天。 - 3600(1小时)：最大查询跨度7天。 - 86400(1天)：最大查询跨度31天，最少跨度为2天。  单位：秒。  若不设置，小于1天 300，大于1天小于7天3600，大于7天86400。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xSdkDate' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'statType' => 'string',
            'domain' => 'string',
            'interval' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。
    * startTime  开始时间，格式为yyyymmddhhmmss。   - interval为300时，end_time设置为整5分钟时刻点，如：20240601000000。   - interval为3600时，end_time设置为整小时时刻点，如：20240601120000。   - interval为86400时，end_time设置为东8区零点时刻点，如：20240601000000。   - 只能查询最近三个月内的数据，且时间跨度不能超过31天。
    * endTime  结束时间，格式为yyyymmddhhmmss。   - interval为300时，end_time设置为整5分钟时刻点，如：20240601000000。   - interval为3600时，end_time设置为整小时时刻点，如：20240601120000。   - interval为86400时，end_time设置为东8区零点时刻点，如：20240601000000。   - 只能查询最近三个月内的数据，且时间跨度不能超过31天。
    * statType  统计数据类型。  取值如下： - bw：CDN峰值带宽 - flux：CDN流量 - req_num：请求总数 - req_hit_rate：请求命中率 - flux_hit_rate：流量命中率 - http_code_2xx 状态码汇总2xx - http_code_3xx 状态码汇总3xx - http_code_4xx 状态码汇总4xx - http_code_5xx 状态码汇总5xx  每次只能查询一种统计数据。
    * domain  域名列表，多个域名以逗号（半角）分隔。  示例：example.test1.com,example.test2.com。  ALL表示查询名下全部域名。一次最多查询20个域名。
    * interval  查询粒度间隔。  取值如下： - 300(5分钟)：最大查询跨度2天。 - 3600(1小时)：最大查询跨度7天。 - 86400(1天)：最大查询跨度31天，最少跨度为2天。  单位：秒。  若不设置，小于1天 300，大于1天小于7天3600，大于7天86400。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xSdkDate' => null,
        'startTime' => null,
        'endTime' => null,
        'statType' => null,
        'domain' => null,
        'interval' => null
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
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。
    * startTime  开始时间，格式为yyyymmddhhmmss。   - interval为300时，end_time设置为整5分钟时刻点，如：20240601000000。   - interval为3600时，end_time设置为整小时时刻点，如：20240601120000。   - interval为86400时，end_time设置为东8区零点时刻点，如：20240601000000。   - 只能查询最近三个月内的数据，且时间跨度不能超过31天。
    * endTime  结束时间，格式为yyyymmddhhmmss。   - interval为300时，end_time设置为整5分钟时刻点，如：20240601000000。   - interval为3600时，end_time设置为整小时时刻点，如：20240601120000。   - interval为86400时，end_time设置为东8区零点时刻点，如：20240601000000。   - 只能查询最近三个月内的数据，且时间跨度不能超过31天。
    * statType  统计数据类型。  取值如下： - bw：CDN峰值带宽 - flux：CDN流量 - req_num：请求总数 - req_hit_rate：请求命中率 - flux_hit_rate：流量命中率 - http_code_2xx 状态码汇总2xx - http_code_3xx 状态码汇总3xx - http_code_4xx 状态码汇总4xx - http_code_5xx 状态码汇总5xx  每次只能查询一种统计数据。
    * domain  域名列表，多个域名以逗号（半角）分隔。  示例：example.test1.com,example.test2.com。  ALL表示查询名下全部域名。一次最多查询20个域名。
    * interval  查询粒度间隔。  取值如下： - 300(5分钟)：最大查询跨度2天。 - 3600(1小时)：最大查询跨度7天。 - 86400(1天)：最大查询跨度31天，最少跨度为2天。  单位：秒。  若不设置，小于1天 300，大于1天小于7天3600，大于7天86400。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xSdkDate' => 'X-Sdk-Date',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'statType' => 'stat_type',
            'domain' => 'domain',
            'interval' => 'interval'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。
    * startTime  开始时间，格式为yyyymmddhhmmss。   - interval为300时，end_time设置为整5分钟时刻点，如：20240601000000。   - interval为3600时，end_time设置为整小时时刻点，如：20240601120000。   - interval为86400时，end_time设置为东8区零点时刻点，如：20240601000000。   - 只能查询最近三个月内的数据，且时间跨度不能超过31天。
    * endTime  结束时间，格式为yyyymmddhhmmss。   - interval为300时，end_time设置为整5分钟时刻点，如：20240601000000。   - interval为3600时，end_time设置为整小时时刻点，如：20240601120000。   - interval为86400时，end_time设置为东8区零点时刻点，如：20240601000000。   - 只能查询最近三个月内的数据，且时间跨度不能超过31天。
    * statType  统计数据类型。  取值如下： - bw：CDN峰值带宽 - flux：CDN流量 - req_num：请求总数 - req_hit_rate：请求命中率 - flux_hit_rate：流量命中率 - http_code_2xx 状态码汇总2xx - http_code_3xx 状态码汇总3xx - http_code_4xx 状态码汇总4xx - http_code_5xx 状态码汇总5xx  每次只能查询一种统计数据。
    * domain  域名列表，多个域名以逗号（半角）分隔。  示例：example.test1.com,example.test2.com。  ALL表示查询名下全部域名。一次最多查询20个域名。
    * interval  查询粒度间隔。  取值如下： - 300(5分钟)：最大查询跨度2天。 - 3600(1小时)：最大查询跨度7天。 - 86400(1天)：最大查询跨度31天，最少跨度为2天。  单位：秒。  若不设置，小于1天 300，大于1天小于7天3600，大于7天86400。
    *
    * @var string[]
    */
    protected static $setters = [
            'xSdkDate' => 'setXSdkDate',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'statType' => 'setStatType',
            'domain' => 'setDomain',
            'interval' => 'setInterval'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。
    * startTime  开始时间，格式为yyyymmddhhmmss。   - interval为300时，end_time设置为整5分钟时刻点，如：20240601000000。   - interval为3600时，end_time设置为整小时时刻点，如：20240601120000。   - interval为86400时，end_time设置为东8区零点时刻点，如：20240601000000。   - 只能查询最近三个月内的数据，且时间跨度不能超过31天。
    * endTime  结束时间，格式为yyyymmddhhmmss。   - interval为300时，end_time设置为整5分钟时刻点，如：20240601000000。   - interval为3600时，end_time设置为整小时时刻点，如：20240601120000。   - interval为86400时，end_time设置为东8区零点时刻点，如：20240601000000。   - 只能查询最近三个月内的数据，且时间跨度不能超过31天。
    * statType  统计数据类型。  取值如下： - bw：CDN峰值带宽 - flux：CDN流量 - req_num：请求总数 - req_hit_rate：请求命中率 - flux_hit_rate：流量命中率 - http_code_2xx 状态码汇总2xx - http_code_3xx 状态码汇总3xx - http_code_4xx 状态码汇总4xx - http_code_5xx 状态码汇总5xx  每次只能查询一种统计数据。
    * domain  域名列表，多个域名以逗号（半角）分隔。  示例：example.test1.com,example.test2.com。  ALL表示查询名下全部域名。一次最多查询20个域名。
    * interval  查询粒度间隔。  取值如下： - 300(5分钟)：最大查询跨度2天。 - 3600(1小时)：最大查询跨度7天。 - 86400(1天)：最大查询跨度31天，最少跨度为2天。  单位：秒。  若不设置，小于1天 300，大于1天小于7天3600，大于7天86400。
    *
    * @var string[]
    */
    protected static $getters = [
            'xSdkDate' => 'getXSdkDate',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'statType' => 'getStatType',
            'domain' => 'getDomain',
            'interval' => 'getInterval'
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
        $this->container['xSdkDate'] = isset($data['xSdkDate']) ? $data['xSdkDate'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['statType'] = isset($data['statType']) ? $data['statType'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['interval'] = isset($data['interval']) ? $data['interval'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['xSdkDate']) && (mb_strlen($this->container['xSdkDate']) > 256)) {
                $invalidProperties[] = "invalid value for 'xSdkDate', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['xSdkDate']) && (mb_strlen($this->container['xSdkDate']) < 1)) {
                $invalidProperties[] = "invalid value for 'xSdkDate', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
            if ((mb_strlen($this->container['startTime']) > 14)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be smaller than or equal to 14.";
            }
            if ((mb_strlen($this->container['startTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
            if ((mb_strlen($this->container['endTime']) > 14)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be smaller than or equal to 14.";
            }
            if ((mb_strlen($this->container['endTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['statType'] === null) {
            $invalidProperties[] = "'statType' can't be null";
        }
            if ((mb_strlen($this->container['statType']) > 1000)) {
                $invalidProperties[] = "invalid value for 'statType', the character length must be smaller than or equal to 1000.";
            }
            if ((mb_strlen($this->container['statType']) < 0)) {
                $invalidProperties[] = "invalid value for 'statType', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['domain'] === null) {
            $invalidProperties[] = "'domain' can't be null";
        }
            if ((mb_strlen($this->container['domain']) > 5000)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be smaller than or equal to 5000.";
            }
            if ((mb_strlen($this->container['domain']) < 0)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['interval']) && ($this->container['interval'] > 86400)) {
                $invalidProperties[] = "invalid value for 'interval', must be smaller than or equal to 86400.";
            }
            if (!is_null($this->container['interval']) && ($this->container['interval'] < 0)) {
                $invalidProperties[] = "invalid value for 'interval', must be bigger than or equal to 0.";
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
    * Gets xSdkDate
    *  使用AK/SK方式认证时必选，请求的发生时间。
    *
    * @return string|null
    */
    public function getXSdkDate()
    {
        return $this->container['xSdkDate'];
    }

    /**
    * Sets xSdkDate
    *
    * @param string|null $xSdkDate 使用AK/SK方式认证时必选，请求的发生时间。
    *
    * @return $this
    */
    public function setXSdkDate($xSdkDate)
    {
        $this->container['xSdkDate'] = $xSdkDate;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间，格式为yyyymmddhhmmss。   - interval为300时，end_time设置为整5分钟时刻点，如：20240601000000。   - interval为3600时，end_time设置为整小时时刻点，如：20240601120000。   - interval为86400时，end_time设置为东8区零点时刻点，如：20240601000000。   - 只能查询最近三个月内的数据，且时间跨度不能超过31天。
    *
    * @return string
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string $startTime 开始时间，格式为yyyymmddhhmmss。   - interval为300时，end_time设置为整5分钟时刻点，如：20240601000000。   - interval为3600时，end_time设置为整小时时刻点，如：20240601120000。   - interval为86400时，end_time设置为东8区零点时刻点，如：20240601000000。   - 只能查询最近三个月内的数据，且时间跨度不能超过31天。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  结束时间，格式为yyyymmddhhmmss。   - interval为300时，end_time设置为整5分钟时刻点，如：20240601000000。   - interval为3600时，end_time设置为整小时时刻点，如：20240601120000。   - interval为86400时，end_time设置为东8区零点时刻点，如：20240601000000。   - 只能查询最近三个月内的数据，且时间跨度不能超过31天。
    *
    * @return string
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string $endTime 结束时间，格式为yyyymmddhhmmss。   - interval为300时，end_time设置为整5分钟时刻点，如：20240601000000。   - interval为3600时，end_time设置为整小时时刻点，如：20240601120000。   - interval为86400时，end_time设置为东8区零点时刻点，如：20240601000000。   - 只能查询最近三个月内的数据，且时间跨度不能超过31天。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets statType
    *  统计数据类型。  取值如下： - bw：CDN峰值带宽 - flux：CDN流量 - req_num：请求总数 - req_hit_rate：请求命中率 - flux_hit_rate：流量命中率 - http_code_2xx 状态码汇总2xx - http_code_3xx 状态码汇总3xx - http_code_4xx 状态码汇总4xx - http_code_5xx 状态码汇总5xx  每次只能查询一种统计数据。
    *
    * @return string
    */
    public function getStatType()
    {
        return $this->container['statType'];
    }

    /**
    * Sets statType
    *
    * @param string $statType 统计数据类型。  取值如下： - bw：CDN峰值带宽 - flux：CDN流量 - req_num：请求总数 - req_hit_rate：请求命中率 - flux_hit_rate：流量命中率 - http_code_2xx 状态码汇总2xx - http_code_3xx 状态码汇总3xx - http_code_4xx 状态码汇总4xx - http_code_5xx 状态码汇总5xx  每次只能查询一种统计数据。
    *
    * @return $this
    */
    public function setStatType($statType)
    {
        $this->container['statType'] = $statType;
        return $this;
    }

    /**
    * Gets domain
    *  域名列表，多个域名以逗号（半角）分隔。  示例：example.test1.com,example.test2.com。  ALL表示查询名下全部域名。一次最多查询20个域名。
    *
    * @return string
    */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
    * Sets domain
    *
    * @param string $domain 域名列表，多个域名以逗号（半角）分隔。  示例：example.test1.com,example.test2.com。  ALL表示查询名下全部域名。一次最多查询20个域名。
    *
    * @return $this
    */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;
        return $this;
    }

    /**
    * Gets interval
    *  查询粒度间隔。  取值如下： - 300(5分钟)：最大查询跨度2天。 - 3600(1小时)：最大查询跨度7天。 - 86400(1天)：最大查询跨度31天，最少跨度为2天。  单位：秒。  若不设置，小于1天 300，大于1天小于7天3600，大于7天86400。
    *
    * @return int|null
    */
    public function getInterval()
    {
        return $this->container['interval'];
    }

    /**
    * Sets interval
    *
    * @param int|null $interval 查询粒度间隔。  取值如下： - 300(5分钟)：最大查询跨度2天。 - 3600(1小时)：最大查询跨度7天。 - 86400(1天)：最大查询跨度31天，最少跨度为2天。  单位：秒。  若不设置，小于1天 300，大于1天小于7天3600，大于7天86400。
    *
    * @return $this
    */
    public function setInterval($interval)
    {
        $this->container['interval'] = $interval;
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

