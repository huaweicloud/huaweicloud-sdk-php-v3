<?php

namespace HuaweiCloud\SDK\Cdn\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowTopUrlRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowTopUrlRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  当用户开启企业项目功能时，该参数生效，表示查询资源所属项目，不传表示查询默认项目。注意：当使用子账号调用接口时，该参数必传。
    * startTime  查询起始时间戳（单位：毫秒）。该时间戳的取值在转化为日期格式后须满足以下格式：XXXX-XX-XX 00:00:00
    * endTime  查询结束时间戳（单位：毫秒）。该时间戳的取值在转化为日期格式后须满足以下格式：XXXX-XX-XX 00:00:00
    * domainName  域名列表，多个域名以逗号（半角）分隔，如：www.test1.com,www.test2.com ，ALL表示查询名下全部域名。
    * serviceArea  mainland_china(中国大陆)，outside_mainland_china(中国大陆境外)，默认为mainland_china。
    * statType  参数类型支持：flux(流量),req_num(请求总数)。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'startTime' => 'int',
            'endTime' => 'int',
            'domainName' => 'string',
            'serviceArea' => 'string',
            'statType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  当用户开启企业项目功能时，该参数生效，表示查询资源所属项目，不传表示查询默认项目。注意：当使用子账号调用接口时，该参数必传。
    * startTime  查询起始时间戳（单位：毫秒）。该时间戳的取值在转化为日期格式后须满足以下格式：XXXX-XX-XX 00:00:00
    * endTime  查询结束时间戳（单位：毫秒）。该时间戳的取值在转化为日期格式后须满足以下格式：XXXX-XX-XX 00:00:00
    * domainName  域名列表，多个域名以逗号（半角）分隔，如：www.test1.com,www.test2.com ，ALL表示查询名下全部域名。
    * serviceArea  mainland_china(中国大陆)，outside_mainland_china(中国大陆境外)，默认为mainland_china。
    * statType  参数类型支持：flux(流量),req_num(请求总数)。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'startTime' => 'int64',
        'endTime' => 'int64',
        'domainName' => null,
        'serviceArea' => null,
        'statType' => null
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
    * enterpriseProjectId  当用户开启企业项目功能时，该参数生效，表示查询资源所属项目，不传表示查询默认项目。注意：当使用子账号调用接口时，该参数必传。
    * startTime  查询起始时间戳（单位：毫秒）。该时间戳的取值在转化为日期格式后须满足以下格式：XXXX-XX-XX 00:00:00
    * endTime  查询结束时间戳（单位：毫秒）。该时间戳的取值在转化为日期格式后须满足以下格式：XXXX-XX-XX 00:00:00
    * domainName  域名列表，多个域名以逗号（半角）分隔，如：www.test1.com,www.test2.com ，ALL表示查询名下全部域名。
    * serviceArea  mainland_china(中国大陆)，outside_mainland_china(中国大陆境外)，默认为mainland_china。
    * statType  参数类型支持：flux(流量),req_num(请求总数)。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'domainName' => 'domain_name',
            'serviceArea' => 'service_area',
            'statType' => 'stat_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  当用户开启企业项目功能时，该参数生效，表示查询资源所属项目，不传表示查询默认项目。注意：当使用子账号调用接口时，该参数必传。
    * startTime  查询起始时间戳（单位：毫秒）。该时间戳的取值在转化为日期格式后须满足以下格式：XXXX-XX-XX 00:00:00
    * endTime  查询结束时间戳（单位：毫秒）。该时间戳的取值在转化为日期格式后须满足以下格式：XXXX-XX-XX 00:00:00
    * domainName  域名列表，多个域名以逗号（半角）分隔，如：www.test1.com,www.test2.com ，ALL表示查询名下全部域名。
    * serviceArea  mainland_china(中国大陆)，outside_mainland_china(中国大陆境外)，默认为mainland_china。
    * statType  参数类型支持：flux(流量),req_num(请求总数)。
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'domainName' => 'setDomainName',
            'serviceArea' => 'setServiceArea',
            'statType' => 'setStatType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  当用户开启企业项目功能时，该参数生效，表示查询资源所属项目，不传表示查询默认项目。注意：当使用子账号调用接口时，该参数必传。
    * startTime  查询起始时间戳（单位：毫秒）。该时间戳的取值在转化为日期格式后须满足以下格式：XXXX-XX-XX 00:00:00
    * endTime  查询结束时间戳（单位：毫秒）。该时间戳的取值在转化为日期格式后须满足以下格式：XXXX-XX-XX 00:00:00
    * domainName  域名列表，多个域名以逗号（半角）分隔，如：www.test1.com,www.test2.com ，ALL表示查询名下全部域名。
    * serviceArea  mainland_china(中国大陆)，outside_mainland_china(中国大陆境外)，默认为mainland_china。
    * statType  参数类型支持：flux(流量),req_num(请求总数)。
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'domainName' => 'getDomainName',
            'serviceArea' => 'getServiceArea',
            'statType' => 'getStatType'
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
    const SERVICE_AREA_MAINLAND_CHINA = 'mainland_china';
    const SERVICE_AREA_OUTSIDE_MAINLAND_CHINA = 'outside_mainland_china';
    const STAT_TYPE_FLUX = 'flux';
    const STAT_TYPE_REQ_NUM = 'req_num';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getServiceAreaAllowableValues()
    {
        return [
            self::SERVICE_AREA_MAINLAND_CHINA,
            self::SERVICE_AREA_OUTSIDE_MAINLAND_CHINA,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatTypeAllowableValues()
    {
        return [
            self::STAT_TYPE_FLUX,
            self::STAT_TYPE_REQ_NUM,
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
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['serviceArea'] = isset($data['serviceArea']) ? $data['serviceArea'] : 'mainland_china';
        $this->container['statType'] = isset($data['statType']) ? $data['statType'] : null;
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
            $allowedValues = $this->getServiceAreaAllowableValues();
                if (!is_null($this->container['serviceArea']) && !in_array($this->container['serviceArea'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'serviceArea', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['statType'] === null) {
            $invalidProperties[] = "'statType' can't be null";
        }
            $allowedValues = $this->getStatTypeAllowableValues();
                if (!is_null($this->container['statType']) && !in_array($this->container['statType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'statType', must be one of '%s'",
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
    * Gets enterpriseProjectId
    *  当用户开启企业项目功能时，该参数生效，表示查询资源所属项目，不传表示查询默认项目。注意：当使用子账号调用接口时，该参数必传。
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
    * @param string|null $enterpriseProjectId 当用户开启企业项目功能时，该参数生效，表示查询资源所属项目，不传表示查询默认项目。注意：当使用子账号调用接口时，该参数必传。
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
    *  查询起始时间戳（单位：毫秒）。该时间戳的取值在转化为日期格式后须满足以下格式：XXXX-XX-XX 00:00:00
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
    * @param int $startTime 查询起始时间戳（单位：毫秒）。该时间戳的取值在转化为日期格式后须满足以下格式：XXXX-XX-XX 00:00:00
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
    *  查询结束时间戳（单位：毫秒）。该时间戳的取值在转化为日期格式后须满足以下格式：XXXX-XX-XX 00:00:00
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
    * @param int $endTime 查询结束时间戳（单位：毫秒）。该时间戳的取值在转化为日期格式后须满足以下格式：XXXX-XX-XX 00:00:00
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
    *  域名列表，多个域名以逗号（半角）分隔，如：www.test1.com,www.test2.com ，ALL表示查询名下全部域名。
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
    * @param string $domainName 域名列表，多个域名以逗号（半角）分隔，如：www.test1.com,www.test2.com ，ALL表示查询名下全部域名。
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets serviceArea
    *  mainland_china(中国大陆)，outside_mainland_china(中国大陆境外)，默认为mainland_china。
    *
    * @return string|null
    */
    public function getServiceArea()
    {
        return $this->container['serviceArea'];
    }

    /**
    * Sets serviceArea
    *
    * @param string|null $serviceArea mainland_china(中国大陆)，outside_mainland_china(中国大陆境外)，默认为mainland_china。
    *
    * @return $this
    */
    public function setServiceArea($serviceArea)
    {
        $this->container['serviceArea'] = $serviceArea;
        return $this;
    }

    /**
    * Gets statType
    *  参数类型支持：flux(流量),req_num(请求总数)。
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
    * @param string $statType 参数类型支持：flux(流量),req_num(请求总数)。
    *
    * @return $this
    */
    public function setStatType($statType)
    {
        $this->container['statType'] = $statType;
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

