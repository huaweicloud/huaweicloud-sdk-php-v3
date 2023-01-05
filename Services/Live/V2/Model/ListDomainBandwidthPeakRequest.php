<?php

namespace HuaweiCloud\SDK\Live\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListDomainBandwidthPeakRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListDomainBandwidthPeakRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * playDomains  播放域名列表，最多支持查询100个域名，多个域名以逗号分隔。  如果不传入域名，则查询租户下所有播放域名的带宽峰值。
    * app  应用名称。
    * stream  流名。
    * region  区域列表。具体取值请参考[省份名称缩写](live_03_0043.xml)，不填写查询所有区域。
    * isp  运营商列表，取值如下： - CMCC ：移动 - CTCC ： 电信 - CUCC ：联通 - OTHER ：其他  不填写查询所有运营商。
    * protocol  请求协议
    * startTime  起始时间。日期格式按照ISO8601表示法，并使用UTC时间。  格式为：YYYY-MM-DDThh:mm:ssZ。最大查询跨度31天，最大查询周期一年。  若参数为空，默认查询7天数据。
    * endTime  结束时间。日期格式按照ISO8601表示法，并使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ。  若参数为空，默认为当前时间。结束时间需大于起始时间。
    * serviceType  服务类型： - Live：直播 - LLL：超低时延直播 - ALL: 默认所有直播
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'playDomains' => 'string[]',
            'app' => 'string',
            'stream' => 'string',
            'region' => 'string[]',
            'isp' => 'string[]',
            'protocol' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'serviceType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * playDomains  播放域名列表，最多支持查询100个域名，多个域名以逗号分隔。  如果不传入域名，则查询租户下所有播放域名的带宽峰值。
    * app  应用名称。
    * stream  流名。
    * region  区域列表。具体取值请参考[省份名称缩写](live_03_0043.xml)，不填写查询所有区域。
    * isp  运营商列表，取值如下： - CMCC ：移动 - CTCC ： 电信 - CUCC ：联通 - OTHER ：其他  不填写查询所有运营商。
    * protocol  请求协议
    * startTime  起始时间。日期格式按照ISO8601表示法，并使用UTC时间。  格式为：YYYY-MM-DDThh:mm:ssZ。最大查询跨度31天，最大查询周期一年。  若参数为空，默认查询7天数据。
    * endTime  结束时间。日期格式按照ISO8601表示法，并使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ。  若参数为空，默认为当前时间。结束时间需大于起始时间。
    * serviceType  服务类型： - Live：直播 - LLL：超低时延直播 - ALL: 默认所有直播
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'playDomains' => null,
        'app' => null,
        'stream' => null,
        'region' => null,
        'isp' => null,
        'protocol' => null,
        'startTime' => null,
        'endTime' => null,
        'serviceType' => null
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
    * playDomains  播放域名列表，最多支持查询100个域名，多个域名以逗号分隔。  如果不传入域名，则查询租户下所有播放域名的带宽峰值。
    * app  应用名称。
    * stream  流名。
    * region  区域列表。具体取值请参考[省份名称缩写](live_03_0043.xml)，不填写查询所有区域。
    * isp  运营商列表，取值如下： - CMCC ：移动 - CTCC ： 电信 - CUCC ：联通 - OTHER ：其他  不填写查询所有运营商。
    * protocol  请求协议
    * startTime  起始时间。日期格式按照ISO8601表示法，并使用UTC时间。  格式为：YYYY-MM-DDThh:mm:ssZ。最大查询跨度31天，最大查询周期一年。  若参数为空，默认查询7天数据。
    * endTime  结束时间。日期格式按照ISO8601表示法，并使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ。  若参数为空，默认为当前时间。结束时间需大于起始时间。
    * serviceType  服务类型： - Live：直播 - LLL：超低时延直播 - ALL: 默认所有直播
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'playDomains' => 'play_domains',
            'app' => 'app',
            'stream' => 'stream',
            'region' => 'region',
            'isp' => 'isp',
            'protocol' => 'protocol',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'serviceType' => 'service_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * playDomains  播放域名列表，最多支持查询100个域名，多个域名以逗号分隔。  如果不传入域名，则查询租户下所有播放域名的带宽峰值。
    * app  应用名称。
    * stream  流名。
    * region  区域列表。具体取值请参考[省份名称缩写](live_03_0043.xml)，不填写查询所有区域。
    * isp  运营商列表，取值如下： - CMCC ：移动 - CTCC ： 电信 - CUCC ：联通 - OTHER ：其他  不填写查询所有运营商。
    * protocol  请求协议
    * startTime  起始时间。日期格式按照ISO8601表示法，并使用UTC时间。  格式为：YYYY-MM-DDThh:mm:ssZ。最大查询跨度31天，最大查询周期一年。  若参数为空，默认查询7天数据。
    * endTime  结束时间。日期格式按照ISO8601表示法，并使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ。  若参数为空，默认为当前时间。结束时间需大于起始时间。
    * serviceType  服务类型： - Live：直播 - LLL：超低时延直播 - ALL: 默认所有直播
    *
    * @var string[]
    */
    protected static $setters = [
            'playDomains' => 'setPlayDomains',
            'app' => 'setApp',
            'stream' => 'setStream',
            'region' => 'setRegion',
            'isp' => 'setIsp',
            'protocol' => 'setProtocol',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'serviceType' => 'setServiceType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * playDomains  播放域名列表，最多支持查询100个域名，多个域名以逗号分隔。  如果不传入域名，则查询租户下所有播放域名的带宽峰值。
    * app  应用名称。
    * stream  流名。
    * region  区域列表。具体取值请参考[省份名称缩写](live_03_0043.xml)，不填写查询所有区域。
    * isp  运营商列表，取值如下： - CMCC ：移动 - CTCC ： 电信 - CUCC ：联通 - OTHER ：其他  不填写查询所有运营商。
    * protocol  请求协议
    * startTime  起始时间。日期格式按照ISO8601表示法，并使用UTC时间。  格式为：YYYY-MM-DDThh:mm:ssZ。最大查询跨度31天，最大查询周期一年。  若参数为空，默认查询7天数据。
    * endTime  结束时间。日期格式按照ISO8601表示法，并使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ。  若参数为空，默认为当前时间。结束时间需大于起始时间。
    * serviceType  服务类型： - Live：直播 - LLL：超低时延直播 - ALL: 默认所有直播
    *
    * @var string[]
    */
    protected static $getters = [
            'playDomains' => 'getPlayDomains',
            'app' => 'getApp',
            'stream' => 'getStream',
            'region' => 'getRegion',
            'isp' => 'getIsp',
            'protocol' => 'getProtocol',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'serviceType' => 'getServiceType'
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
    const PROTOCOL_FLV = 'flv';
    const PROTOCOL_HLS = 'hls';
    const SERVICE_TYPE_LIVE = 'Live';
    const SERVICE_TYPE_LLL = 'LLL';
    const SERVICE_TYPE_ALL = 'ALL';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProtocolAllowableValues()
    {
        return [
            self::PROTOCOL_FLV,
            self::PROTOCOL_HLS,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getServiceTypeAllowableValues()
    {
        return [
            self::SERVICE_TYPE_LIVE,
            self::SERVICE_TYPE_LLL,
            self::SERVICE_TYPE_ALL,
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
        $this->container['playDomains'] = isset($data['playDomains']) ? $data['playDomains'] : null;
        $this->container['app'] = isset($data['app']) ? $data['app'] : null;
        $this->container['stream'] = isset($data['stream']) ? $data['stream'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['isp'] = isset($data['isp']) ? $data['isp'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['serviceType'] = isset($data['serviceType']) ? $data['serviceType'] : 'ALL';
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['app']) && (mb_strlen($this->container['app']) > 128)) {
                $invalidProperties[] = "invalid value for 'app', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['app']) && (mb_strlen($this->container['app']) < 1)) {
                $invalidProperties[] = "invalid value for 'app', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['stream']) && (mb_strlen($this->container['stream']) > 256)) {
                $invalidProperties[] = "invalid value for 'stream', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['stream']) && (mb_strlen($this->container['stream']) < 0)) {
                $invalidProperties[] = "invalid value for 'stream', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getProtocolAllowableValues();
                if (!is_null($this->container['protocol']) && !in_array($this->container['protocol'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'protocol', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['protocol']) && (mb_strlen($this->container['protocol']) > 128)) {
                $invalidProperties[] = "invalid value for 'protocol', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['protocol']) && (mb_strlen($this->container['protocol']) < 0)) {
                $invalidProperties[] = "invalid value for 'protocol', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['startTime']) && (mb_strlen($this->container['startTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['startTime']) && (mb_strlen($this->container['startTime']) < 1)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) < 1)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getServiceTypeAllowableValues();
                if (!is_null($this->container['serviceType']) && !in_array($this->container['serviceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'serviceType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['serviceType']) && (mb_strlen($this->container['serviceType']) > 10)) {
                $invalidProperties[] = "invalid value for 'serviceType', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['serviceType']) && (mb_strlen($this->container['serviceType']) < 1)) {
                $invalidProperties[] = "invalid value for 'serviceType', the character length must be bigger than or equal to 1.";
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
    * Gets playDomains
    *  播放域名列表，最多支持查询100个域名，多个域名以逗号分隔。  如果不传入域名，则查询租户下所有播放域名的带宽峰值。
    *
    * @return string[]|null
    */
    public function getPlayDomains()
    {
        return $this->container['playDomains'];
    }

    /**
    * Sets playDomains
    *
    * @param string[]|null $playDomains 播放域名列表，最多支持查询100个域名，多个域名以逗号分隔。  如果不传入域名，则查询租户下所有播放域名的带宽峰值。
    *
    * @return $this
    */
    public function setPlayDomains($playDomains)
    {
        $this->container['playDomains'] = $playDomains;
        return $this;
    }

    /**
    * Gets app
    *  应用名称。
    *
    * @return string|null
    */
    public function getApp()
    {
        return $this->container['app'];
    }

    /**
    * Sets app
    *
    * @param string|null $app 应用名称。
    *
    * @return $this
    */
    public function setApp($app)
    {
        $this->container['app'] = $app;
        return $this;
    }

    /**
    * Gets stream
    *  流名。
    *
    * @return string|null
    */
    public function getStream()
    {
        return $this->container['stream'];
    }

    /**
    * Sets stream
    *
    * @param string|null $stream 流名。
    *
    * @return $this
    */
    public function setStream($stream)
    {
        $this->container['stream'] = $stream;
        return $this;
    }

    /**
    * Gets region
    *  区域列表。具体取值请参考[省份名称缩写](live_03_0043.xml)，不填写查询所有区域。
    *
    * @return string[]|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string[]|null $region 区域列表。具体取值请参考[省份名称缩写](live_03_0043.xml)，不填写查询所有区域。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets isp
    *  运营商列表，取值如下： - CMCC ：移动 - CTCC ： 电信 - CUCC ：联通 - OTHER ：其他  不填写查询所有运营商。
    *
    * @return string[]|null
    */
    public function getIsp()
    {
        return $this->container['isp'];
    }

    /**
    * Sets isp
    *
    * @param string[]|null $isp 运营商列表，取值如下： - CMCC ：移动 - CTCC ： 电信 - CUCC ：联通 - OTHER ：其他  不填写查询所有运营商。
    *
    * @return $this
    */
    public function setIsp($isp)
    {
        $this->container['isp'] = $isp;
        return $this;
    }

    /**
    * Gets protocol
    *  请求协议
    *
    * @return string|null
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string|null $protocol 请求协议
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets startTime
    *  起始时间。日期格式按照ISO8601表示法，并使用UTC时间。  格式为：YYYY-MM-DDThh:mm:ssZ。最大查询跨度31天，最大查询周期一年。  若参数为空，默认查询7天数据。
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
    * @param string|null $startTime 起始时间。日期格式按照ISO8601表示法，并使用UTC时间。  格式为：YYYY-MM-DDThh:mm:ssZ。最大查询跨度31天，最大查询周期一年。  若参数为空，默认查询7天数据。
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
    *  结束时间。日期格式按照ISO8601表示法，并使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ。  若参数为空，默认为当前时间。结束时间需大于起始时间。
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
    * @param string|null $endTime 结束时间。日期格式按照ISO8601表示法，并使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ。  若参数为空，默认为当前时间。结束时间需大于起始时间。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets serviceType
    *  服务类型： - Live：直播 - LLL：超低时延直播 - ALL: 默认所有直播
    *
    * @return string|null
    */
    public function getServiceType()
    {
        return $this->container['serviceType'];
    }

    /**
    * Sets serviceType
    *
    * @param string|null $serviceType 服务类型： - Live：直播 - LLL：超低时延直播 - ALL: 默认所有直播
    *
    * @return $this
    */
    public function setServiceType($serviceType)
    {
        $this->container['serviceType'] = $serviceType;
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

