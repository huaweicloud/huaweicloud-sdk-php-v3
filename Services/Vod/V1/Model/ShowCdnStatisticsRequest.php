<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowCdnStatisticsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowCdnStatisticsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * authorization  使用AK/SK方式认证时必选，携带的鉴权信息。
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。
    * startTime  起始时间，格式为yyyymmddhhmmss。
    * endTime  结束时间，格式为yyyymmddhhmmss。  - “**start_time**”、“**end_time**”均不存在时，“**start_time**”取当天零点，“end_time”取当前时间。  - “**start_time**”不存在、“**end_time**”存在，请求非法。  - “**start_time**”存在、“**end_time**”不存在，“**end_time**”取当前时间。  - 只能查询最近三个月内的数据，且时间跨度不能超过31天。  - 起始时间和结束时间会自动规整，起始时间规整为指定时间所在的整点时刻，结束时间规整为指定时间所在时间的下一小时整点时刻。
    * statType  统计数据类型。  取值如下： - cdn_bw：CDN峰值带宽 - cdn_flux：CDN流量 - req_num：请求总数 - req_hit_rate：请求命中率 - flux_hit_rate：流量命中率  每次只能查询一种统计数据。
    * domain  域名列表，多个域名以逗号（半角）分隔。  示例：example.test1.com,example.test2.com。  ALL表示查询名下全部域名。一次最多查询100个域名。
    * interval  查询粒度间隔。  取值如下： - 时间跨度1天：5分钟、1小时、4小时、8小时，分别对应300秒、3600秒、14400秒和28800秒。 - 时间跨度2~7天：1小时、4小时、8小时、1天，分别对应3600秒、14400秒、28800秒和86400秒。 - 时间跨度8~31天：4小时、8小时、1天，分别对应14400秒、28800秒和86400秒。  单位：秒。  若不设置，默认取对应时间跨度的最小间隔。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'authorization' => 'string',
            'xSdkDate' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'statType' => 'string',
            'domain' => 'string',
            'interval' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * authorization  使用AK/SK方式认证时必选，携带的鉴权信息。
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。
    * startTime  起始时间，格式为yyyymmddhhmmss。
    * endTime  结束时间，格式为yyyymmddhhmmss。  - “**start_time**”、“**end_time**”均不存在时，“**start_time**”取当天零点，“end_time”取当前时间。  - “**start_time**”不存在、“**end_time**”存在，请求非法。  - “**start_time**”存在、“**end_time**”不存在，“**end_time**”取当前时间。  - 只能查询最近三个月内的数据，且时间跨度不能超过31天。  - 起始时间和结束时间会自动规整，起始时间规整为指定时间所在的整点时刻，结束时间规整为指定时间所在时间的下一小时整点时刻。
    * statType  统计数据类型。  取值如下： - cdn_bw：CDN峰值带宽 - cdn_flux：CDN流量 - req_num：请求总数 - req_hit_rate：请求命中率 - flux_hit_rate：流量命中率  每次只能查询一种统计数据。
    * domain  域名列表，多个域名以逗号（半角）分隔。  示例：example.test1.com,example.test2.com。  ALL表示查询名下全部域名。一次最多查询100个域名。
    * interval  查询粒度间隔。  取值如下： - 时间跨度1天：5分钟、1小时、4小时、8小时，分别对应300秒、3600秒、14400秒和28800秒。 - 时间跨度2~7天：1小时、4小时、8小时、1天，分别对应3600秒、14400秒、28800秒和86400秒。 - 时间跨度8~31天：4小时、8小时、1天，分别对应14400秒、28800秒和86400秒。  单位：秒。  若不设置，默认取对应时间跨度的最小间隔。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'authorization' => null,
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
    * authorization  使用AK/SK方式认证时必选，携带的鉴权信息。
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。
    * startTime  起始时间，格式为yyyymmddhhmmss。
    * endTime  结束时间，格式为yyyymmddhhmmss。  - “**start_time**”、“**end_time**”均不存在时，“**start_time**”取当天零点，“end_time”取当前时间。  - “**start_time**”不存在、“**end_time**”存在，请求非法。  - “**start_time**”存在、“**end_time**”不存在，“**end_time**”取当前时间。  - 只能查询最近三个月内的数据，且时间跨度不能超过31天。  - 起始时间和结束时间会自动规整，起始时间规整为指定时间所在的整点时刻，结束时间规整为指定时间所在时间的下一小时整点时刻。
    * statType  统计数据类型。  取值如下： - cdn_bw：CDN峰值带宽 - cdn_flux：CDN流量 - req_num：请求总数 - req_hit_rate：请求命中率 - flux_hit_rate：流量命中率  每次只能查询一种统计数据。
    * domain  域名列表，多个域名以逗号（半角）分隔。  示例：example.test1.com,example.test2.com。  ALL表示查询名下全部域名。一次最多查询100个域名。
    * interval  查询粒度间隔。  取值如下： - 时间跨度1天：5分钟、1小时、4小时、8小时，分别对应300秒、3600秒、14400秒和28800秒。 - 时间跨度2~7天：1小时、4小时、8小时、1天，分别对应3600秒、14400秒、28800秒和86400秒。 - 时间跨度8~31天：4小时、8小时、1天，分别对应14400秒、28800秒和86400秒。  单位：秒。  若不设置，默认取对应时间跨度的最小间隔。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'authorization' => 'Authorization',
            'xSdkDate' => 'X-Sdk-Date',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'statType' => 'stat_type',
            'domain' => 'domain',
            'interval' => 'interval'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * authorization  使用AK/SK方式认证时必选，携带的鉴权信息。
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。
    * startTime  起始时间，格式为yyyymmddhhmmss。
    * endTime  结束时间，格式为yyyymmddhhmmss。  - “**start_time**”、“**end_time**”均不存在时，“**start_time**”取当天零点，“end_time”取当前时间。  - “**start_time**”不存在、“**end_time**”存在，请求非法。  - “**start_time**”存在、“**end_time**”不存在，“**end_time**”取当前时间。  - 只能查询最近三个月内的数据，且时间跨度不能超过31天。  - 起始时间和结束时间会自动规整，起始时间规整为指定时间所在的整点时刻，结束时间规整为指定时间所在时间的下一小时整点时刻。
    * statType  统计数据类型。  取值如下： - cdn_bw：CDN峰值带宽 - cdn_flux：CDN流量 - req_num：请求总数 - req_hit_rate：请求命中率 - flux_hit_rate：流量命中率  每次只能查询一种统计数据。
    * domain  域名列表，多个域名以逗号（半角）分隔。  示例：example.test1.com,example.test2.com。  ALL表示查询名下全部域名。一次最多查询100个域名。
    * interval  查询粒度间隔。  取值如下： - 时间跨度1天：5分钟、1小时、4小时、8小时，分别对应300秒、3600秒、14400秒和28800秒。 - 时间跨度2~7天：1小时、4小时、8小时、1天，分别对应3600秒、14400秒、28800秒和86400秒。 - 时间跨度8~31天：4小时、8小时、1天，分别对应14400秒、28800秒和86400秒。  单位：秒。  若不设置，默认取对应时间跨度的最小间隔。
    *
    * @var string[]
    */
    protected static $setters = [
            'authorization' => 'setAuthorization',
            'xSdkDate' => 'setXSdkDate',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'statType' => 'setStatType',
            'domain' => 'setDomain',
            'interval' => 'setInterval'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * authorization  使用AK/SK方式认证时必选，携带的鉴权信息。
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。
    * startTime  起始时间，格式为yyyymmddhhmmss。
    * endTime  结束时间，格式为yyyymmddhhmmss。  - “**start_time**”、“**end_time**”均不存在时，“**start_time**”取当天零点，“end_time”取当前时间。  - “**start_time**”不存在、“**end_time**”存在，请求非法。  - “**start_time**”存在、“**end_time**”不存在，“**end_time**”取当前时间。  - 只能查询最近三个月内的数据，且时间跨度不能超过31天。  - 起始时间和结束时间会自动规整，起始时间规整为指定时间所在的整点时刻，结束时间规整为指定时间所在时间的下一小时整点时刻。
    * statType  统计数据类型。  取值如下： - cdn_bw：CDN峰值带宽 - cdn_flux：CDN流量 - req_num：请求总数 - req_hit_rate：请求命中率 - flux_hit_rate：流量命中率  每次只能查询一种统计数据。
    * domain  域名列表，多个域名以逗号（半角）分隔。  示例：example.test1.com,example.test2.com。  ALL表示查询名下全部域名。一次最多查询100个域名。
    * interval  查询粒度间隔。  取值如下： - 时间跨度1天：5分钟、1小时、4小时、8小时，分别对应300秒、3600秒、14400秒和28800秒。 - 时间跨度2~7天：1小时、4小时、8小时、1天，分别对应3600秒、14400秒、28800秒和86400秒。 - 时间跨度8~31天：4小时、8小时、1天，分别对应14400秒、28800秒和86400秒。  单位：秒。  若不设置，默认取对应时间跨度的最小间隔。
    *
    * @var string[]
    */
    protected static $getters = [
            'authorization' => 'getAuthorization',
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
        $this->container['authorization'] = isset($data['authorization']) ? $data['authorization'] : null;
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
            if (!is_null($this->container['authorization']) && (mb_strlen($this->container['authorization']) > 256)) {
                $invalidProperties[] = "invalid value for 'authorization', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['authorization']) && (mb_strlen($this->container['authorization']) < 1)) {
                $invalidProperties[] = "invalid value for 'authorization', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['xSdkDate']) && (mb_strlen($this->container['xSdkDate']) > 256)) {
                $invalidProperties[] = "invalid value for 'xSdkDate', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['xSdkDate']) && (mb_strlen($this->container['xSdkDate']) < 1)) {
                $invalidProperties[] = "invalid value for 'xSdkDate', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['statType'] === null) {
            $invalidProperties[] = "'statType' can't be null";
        }
        if ($this->container['domain'] === null) {
            $invalidProperties[] = "'domain' can't be null";
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
    * Gets authorization
    *  使用AK/SK方式认证时必选，携带的鉴权信息。
    *
    * @return string|null
    */
    public function getAuthorization()
    {
        return $this->container['authorization'];
    }

    /**
    * Sets authorization
    *
    * @param string|null $authorization 使用AK/SK方式认证时必选，携带的鉴权信息。
    *
    * @return $this
    */
    public function setAuthorization($authorization)
    {
        $this->container['authorization'] = $authorization;
        return $this;
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
    *  起始时间，格式为yyyymmddhhmmss。
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 起始时间，格式为yyyymmddhhmmss。
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
    *  结束时间，格式为yyyymmddhhmmss。  - “**start_time**”、“**end_time**”均不存在时，“**start_time**”取当天零点，“end_time”取当前时间。  - “**start_time**”不存在、“**end_time**”存在，请求非法。  - “**start_time**”存在、“**end_time**”不存在，“**end_time**”取当前时间。  - 只能查询最近三个月内的数据，且时间跨度不能超过31天。  - 起始时间和结束时间会自动规整，起始时间规整为指定时间所在的整点时刻，结束时间规整为指定时间所在时间的下一小时整点时刻。
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime 结束时间，格式为yyyymmddhhmmss。  - “**start_time**”、“**end_time**”均不存在时，“**start_time**”取当天零点，“end_time”取当前时间。  - “**start_time**”不存在、“**end_time**”存在，请求非法。  - “**start_time**”存在、“**end_time**”不存在，“**end_time**”取当前时间。  - 只能查询最近三个月内的数据，且时间跨度不能超过31天。  - 起始时间和结束时间会自动规整，起始时间规整为指定时间所在的整点时刻，结束时间规整为指定时间所在时间的下一小时整点时刻。
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
    *  统计数据类型。  取值如下： - cdn_bw：CDN峰值带宽 - cdn_flux：CDN流量 - req_num：请求总数 - req_hit_rate：请求命中率 - flux_hit_rate：流量命中率  每次只能查询一种统计数据。
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
    * @param string $statType 统计数据类型。  取值如下： - cdn_bw：CDN峰值带宽 - cdn_flux：CDN流量 - req_num：请求总数 - req_hit_rate：请求命中率 - flux_hit_rate：流量命中率  每次只能查询一种统计数据。
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
    *  域名列表，多个域名以逗号（半角）分隔。  示例：example.test1.com,example.test2.com。  ALL表示查询名下全部域名。一次最多查询100个域名。
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
    * @param string $domain 域名列表，多个域名以逗号（半角）分隔。  示例：example.test1.com,example.test2.com。  ALL表示查询名下全部域名。一次最多查询100个域名。
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
    *  查询粒度间隔。  取值如下： - 时间跨度1天：5分钟、1小时、4小时、8小时，分别对应300秒、3600秒、14400秒和28800秒。 - 时间跨度2~7天：1小时、4小时、8小时、1天，分别对应3600秒、14400秒、28800秒和86400秒。 - 时间跨度8~31天：4小时、8小时、1天，分别对应14400秒、28800秒和86400秒。  单位：秒。  若不设置，默认取对应时间跨度的最小间隔。
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
    * @param int|null $interval 查询粒度间隔。  取值如下： - 时间跨度1天：5分钟、1小时、4小时、8小时，分别对应300秒、3600秒、14400秒和28800秒。 - 时间跨度2~7天：1小时、4小时、8小时、1天，分别对应3600秒、14400秒、28800秒和86400秒。 - 时间跨度8~31天：4小时、8小时、1天，分别对应14400秒、28800秒和86400秒。  单位：秒。  若不设置，默认取对应时间跨度的最小间隔。
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

