<?php

namespace HuaweiCloud\SDK\Cdn\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDomainItemLocationDetailsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDomainItemLocationDetailsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  当用户开启企业项目功能时，该参数生效，表示查询资源所属项目，不传表示查询默认项目。注意：当使用子帐号调用接口时，该参数必传。  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id。
    * startTime  查询开始时间戳，必须设为5分钟整时刻点
    * endTime  查询结束时间戳，必须设为5分钟整时刻点
    * domainName  域名列表，多个域名以逗号（半角）分隔，如：www.test1.com,www.test2.com，all表示查询名下全部域名。如果域名在查询时间段内无数据，结果将不返回该域名的信息。
    * statType  指标类型列表 网络资源消耗：bw（带宽），flux（流量），ipv6_bw(ipv6带宽)，ipv6_flux(ipv6流量), https_bw(https带宽)，https_flux(https流量) 访问情况：req_num（请求总数），hit_num（请求命中次数），req_time(请求时长) HTTP状态码（组合指标）：status_code_2xx(状态码2xx)，status_code_3xx(状态码3xx)，status_code_4xx(状态码4xx)，status_code_5xx(状态码5xx)
    * region  区域列表，以逗号分隔，all表示查询全部区域
    * isp  运营商列表，以逗号分隔，all表示查询全部运营商
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'startTime' => 'int',
            'endTime' => 'int',
            'domainName' => 'string',
            'statType' => 'string',
            'region' => 'string',
            'isp' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  当用户开启企业项目功能时，该参数生效，表示查询资源所属项目，不传表示查询默认项目。注意：当使用子帐号调用接口时，该参数必传。  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id。
    * startTime  查询开始时间戳，必须设为5分钟整时刻点
    * endTime  查询结束时间戳，必须设为5分钟整时刻点
    * domainName  域名列表，多个域名以逗号（半角）分隔，如：www.test1.com,www.test2.com，all表示查询名下全部域名。如果域名在查询时间段内无数据，结果将不返回该域名的信息。
    * statType  指标类型列表 网络资源消耗：bw（带宽），flux（流量），ipv6_bw(ipv6带宽)，ipv6_flux(ipv6流量), https_bw(https带宽)，https_flux(https流量) 访问情况：req_num（请求总数），hit_num（请求命中次数），req_time(请求时长) HTTP状态码（组合指标）：status_code_2xx(状态码2xx)，status_code_3xx(状态码3xx)，status_code_4xx(状态码4xx)，status_code_5xx(状态码5xx)
    * region  区域列表，以逗号分隔，all表示查询全部区域
    * isp  运营商列表，以逗号分隔，all表示查询全部运营商
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'startTime' => 'int64',
        'endTime' => 'int64',
        'domainName' => null,
        'statType' => null,
        'region' => null,
        'isp' => null
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
    * enterpriseProjectId  当用户开启企业项目功能时，该参数生效，表示查询资源所属项目，不传表示查询默认项目。注意：当使用子帐号调用接口时，该参数必传。  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id。
    * startTime  查询开始时间戳，必须设为5分钟整时刻点
    * endTime  查询结束时间戳，必须设为5分钟整时刻点
    * domainName  域名列表，多个域名以逗号（半角）分隔，如：www.test1.com,www.test2.com，all表示查询名下全部域名。如果域名在查询时间段内无数据，结果将不返回该域名的信息。
    * statType  指标类型列表 网络资源消耗：bw（带宽），flux（流量），ipv6_bw(ipv6带宽)，ipv6_flux(ipv6流量), https_bw(https带宽)，https_flux(https流量) 访问情况：req_num（请求总数），hit_num（请求命中次数），req_time(请求时长) HTTP状态码（组合指标）：status_code_2xx(状态码2xx)，status_code_3xx(状态码3xx)，status_code_4xx(状态码4xx)，status_code_5xx(状态码5xx)
    * region  区域列表，以逗号分隔，all表示查询全部区域
    * isp  运营商列表，以逗号分隔，all表示查询全部运营商
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'domainName' => 'domain_name',
            'statType' => 'stat_type',
            'region' => 'region',
            'isp' => 'isp'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  当用户开启企业项目功能时，该参数生效，表示查询资源所属项目，不传表示查询默认项目。注意：当使用子帐号调用接口时，该参数必传。  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id。
    * startTime  查询开始时间戳，必须设为5分钟整时刻点
    * endTime  查询结束时间戳，必须设为5分钟整时刻点
    * domainName  域名列表，多个域名以逗号（半角）分隔，如：www.test1.com,www.test2.com，all表示查询名下全部域名。如果域名在查询时间段内无数据，结果将不返回该域名的信息。
    * statType  指标类型列表 网络资源消耗：bw（带宽），flux（流量），ipv6_bw(ipv6带宽)，ipv6_flux(ipv6流量), https_bw(https带宽)，https_flux(https流量) 访问情况：req_num（请求总数），hit_num（请求命中次数），req_time(请求时长) HTTP状态码（组合指标）：status_code_2xx(状态码2xx)，status_code_3xx(状态码3xx)，status_code_4xx(状态码4xx)，status_code_5xx(状态码5xx)
    * region  区域列表，以逗号分隔，all表示查询全部区域
    * isp  运营商列表，以逗号分隔，all表示查询全部运营商
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'domainName' => 'setDomainName',
            'statType' => 'setStatType',
            'region' => 'setRegion',
            'isp' => 'setIsp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  当用户开启企业项目功能时，该参数生效，表示查询资源所属项目，不传表示查询默认项目。注意：当使用子帐号调用接口时，该参数必传。  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id。
    * startTime  查询开始时间戳，必须设为5分钟整时刻点
    * endTime  查询结束时间戳，必须设为5分钟整时刻点
    * domainName  域名列表，多个域名以逗号（半角）分隔，如：www.test1.com,www.test2.com，all表示查询名下全部域名。如果域名在查询时间段内无数据，结果将不返回该域名的信息。
    * statType  指标类型列表 网络资源消耗：bw（带宽），flux（流量），ipv6_bw(ipv6带宽)，ipv6_flux(ipv6流量), https_bw(https带宽)，https_flux(https流量) 访问情况：req_num（请求总数），hit_num（请求命中次数），req_time(请求时长) HTTP状态码（组合指标）：status_code_2xx(状态码2xx)，status_code_3xx(状态码3xx)，status_code_4xx(状态码4xx)，status_code_5xx(状态码5xx)
    * region  区域列表，以逗号分隔，all表示查询全部区域
    * isp  运营商列表，以逗号分隔，all表示查询全部运营商
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'domainName' => 'getDomainName',
            'statType' => 'getStatType',
            'region' => 'getRegion',
            'isp' => 'getIsp'
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
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['statType'] = isset($data['statType']) ? $data['statType'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['isp'] = isset($data['isp']) ? $data['isp'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
        if ($this->container['domainName'] === null) {
            $invalidProperties[] = "'domainName' can't be null";
        }
        if ($this->container['statType'] === null) {
            $invalidProperties[] = "'statType' can't be null";
        }
        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
        }
        if ($this->container['isp'] === null) {
            $invalidProperties[] = "'isp' can't be null";
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
    * Gets enterpriseProjectId
    *  当用户开启企业项目功能时，该参数生效，表示查询资源所属项目，不传表示查询默认项目。注意：当使用子帐号调用接口时，该参数必传。  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 当用户开启企业项目功能时，该参数生效，表示查询资源所属项目，不传表示查询默认项目。注意：当使用子帐号调用接口时，该参数必传。  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets startTime
    *  查询开始时间戳，必须设为5分钟整时刻点
    *
    * @return int
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int $startTime 查询开始时间戳，必须设为5分钟整时刻点
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
    *  查询结束时间戳，必须设为5分钟整时刻点
    *
    * @return int
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int $endTime 查询结束时间戳，必须设为5分钟整时刻点
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets domainName
    *  域名列表，多个域名以逗号（半角）分隔，如：www.test1.com,www.test2.com，all表示查询名下全部域名。如果域名在查询时间段内无数据，结果将不返回该域名的信息。
    *
    * @return string
    */
    public function getDomainName()
    {
        return $this->container['domainName'];
    }

    /**
    * Sets domainName
    *
    * @param string $domainName 域名列表，多个域名以逗号（半角）分隔，如：www.test1.com,www.test2.com，all表示查询名下全部域名。如果域名在查询时间段内无数据，结果将不返回该域名的信息。
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets statType
    *  指标类型列表 网络资源消耗：bw（带宽），flux（流量），ipv6_bw(ipv6带宽)，ipv6_flux(ipv6流量), https_bw(https带宽)，https_flux(https流量) 访问情况：req_num（请求总数），hit_num（请求命中次数），req_time(请求时长) HTTP状态码（组合指标）：status_code_2xx(状态码2xx)，status_code_3xx(状态码3xx)，status_code_4xx(状态码4xx)，status_code_5xx(状态码5xx)
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
    * @param string $statType 指标类型列表 网络资源消耗：bw（带宽），flux（流量），ipv6_bw(ipv6带宽)，ipv6_flux(ipv6流量), https_bw(https带宽)，https_flux(https流量) 访问情况：req_num（请求总数），hit_num（请求命中次数），req_time(请求时长) HTTP状态码（组合指标）：status_code_2xx(状态码2xx)，status_code_3xx(状态码3xx)，status_code_4xx(状态码4xx)，status_code_5xx(状态码5xx)
    *
    * @return $this
    */
    public function setStatType($statType)
    {
        $this->container['statType'] = $statType;
        return $this;
    }

    /**
    * Gets region
    *  区域列表，以逗号分隔，all表示查询全部区域
    *
    * @return string
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string $region 区域列表，以逗号分隔，all表示查询全部区域
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
    *  运营商列表，以逗号分隔，all表示查询全部运营商
    *
    * @return string
    */
    public function getIsp()
    {
        return $this->container['isp'];
    }

    /**
    * Sets isp
    *
    * @param string $isp 运营商列表，以逗号分隔，all表示查询全部运营商
    *
    * @return $this
    */
    public function setIsp($isp)
    {
        $this->container['isp'] = $isp;
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

