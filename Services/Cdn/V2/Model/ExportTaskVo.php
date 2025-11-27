<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExportTaskVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExportTaskVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * action  **参数解释：** 规则行为 **约束限制：** 不涉及
    * domainName  订阅的域名列表，支持同时输入多个域名，多个域名用半角逗号（,）分隔；说明：如果该参数为all，则为账号下的所有域名订阅运营报表。
    * startTime  查询起始时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * endTime  查询结束时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * groupBy  数据分组方式，可选domain，默认不分组
    * interval  查询时间间隔，单位：秒
    * serviceArea  **参数解释：** 域名服务范围 **约束限制：** 服务范围为中国大陆或全球时，加速域名需要到工信部备案 **取值范围：** - mainland_china: 中国大陆 - outside_mainland_china: 中国大陆境外 - global: 全球 **默认取值：** mainland_china: 中国大陆
    * statType  参数类型支持：flux(流量)，req_num(请求总数)。
    * country  - 国家&地区编码，多个以英文逗号分隔，all表示全部，取值见附录 - 访问运营商统计数据时不能填写 - 访问top_url数据时不能填写 - 访问区域情况数据时只能填写cn(中国)
    * province  省份编码，当country为cn（中国）时有效，多个以英文逗号分隔，all表示全部，取值见附录
    * isp  运营商名称。如果IP归属地未知，该字段返回null。
    * language  语言，支持zh(中文)，en(英文)两种，如果不传默认为zh
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'action' => 'string',
            'domainName' => 'string',
            'startTime' => 'int',
            'endTime' => 'int',
            'groupBy' => 'string',
            'interval' => 'int',
            'serviceArea' => 'string',
            'statType' => 'string',
            'country' => 'string',
            'province' => 'string',
            'isp' => 'string',
            'language' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * action  **参数解释：** 规则行为 **约束限制：** 不涉及
    * domainName  订阅的域名列表，支持同时输入多个域名，多个域名用半角逗号（,）分隔；说明：如果该参数为all，则为账号下的所有域名订阅运营报表。
    * startTime  查询起始时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * endTime  查询结束时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * groupBy  数据分组方式，可选domain，默认不分组
    * interval  查询时间间隔，单位：秒
    * serviceArea  **参数解释：** 域名服务范围 **约束限制：** 服务范围为中国大陆或全球时，加速域名需要到工信部备案 **取值范围：** - mainland_china: 中国大陆 - outside_mainland_china: 中国大陆境外 - global: 全球 **默认取值：** mainland_china: 中国大陆
    * statType  参数类型支持：flux(流量)，req_num(请求总数)。
    * country  - 国家&地区编码，多个以英文逗号分隔，all表示全部，取值见附录 - 访问运营商统计数据时不能填写 - 访问top_url数据时不能填写 - 访问区域情况数据时只能填写cn(中国)
    * province  省份编码，当country为cn（中国）时有效，多个以英文逗号分隔，all表示全部，取值见附录
    * isp  运营商名称。如果IP归属地未知，该字段返回null。
    * language  语言，支持zh(中文)，en(英文)两种，如果不传默认为zh
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'action' => null,
        'domainName' => null,
        'startTime' => 'int64',
        'endTime' => 'int64',
        'groupBy' => null,
        'interval' => 'int64',
        'serviceArea' => null,
        'statType' => null,
        'country' => null,
        'province' => null,
        'isp' => null,
        'language' => null
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
    * action  **参数解释：** 规则行为 **约束限制：** 不涉及
    * domainName  订阅的域名列表，支持同时输入多个域名，多个域名用半角逗号（,）分隔；说明：如果该参数为all，则为账号下的所有域名订阅运营报表。
    * startTime  查询起始时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * endTime  查询结束时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * groupBy  数据分组方式，可选domain，默认不分组
    * interval  查询时间间隔，单位：秒
    * serviceArea  **参数解释：** 域名服务范围 **约束限制：** 服务范围为中国大陆或全球时，加速域名需要到工信部备案 **取值范围：** - mainland_china: 中国大陆 - outside_mainland_china: 中国大陆境外 - global: 全球 **默认取值：** mainland_china: 中国大陆
    * statType  参数类型支持：flux(流量)，req_num(请求总数)。
    * country  - 国家&地区编码，多个以英文逗号分隔，all表示全部，取值见附录 - 访问运营商统计数据时不能填写 - 访问top_url数据时不能填写 - 访问区域情况数据时只能填写cn(中国)
    * province  省份编码，当country为cn（中国）时有效，多个以英文逗号分隔，all表示全部，取值见附录
    * isp  运营商名称。如果IP归属地未知，该字段返回null。
    * language  语言，支持zh(中文)，en(英文)两种，如果不传默认为zh
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'action' => 'action',
            'domainName' => 'domain_name',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'groupBy' => 'group_by',
            'interval' => 'interval',
            'serviceArea' => 'service_area',
            'statType' => 'stat_type',
            'country' => 'country',
            'province' => 'province',
            'isp' => 'isp',
            'language' => 'language'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * action  **参数解释：** 规则行为 **约束限制：** 不涉及
    * domainName  订阅的域名列表，支持同时输入多个域名，多个域名用半角逗号（,）分隔；说明：如果该参数为all，则为账号下的所有域名订阅运营报表。
    * startTime  查询起始时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * endTime  查询结束时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * groupBy  数据分组方式，可选domain，默认不分组
    * interval  查询时间间隔，单位：秒
    * serviceArea  **参数解释：** 域名服务范围 **约束限制：** 服务范围为中国大陆或全球时，加速域名需要到工信部备案 **取值范围：** - mainland_china: 中国大陆 - outside_mainland_china: 中国大陆境外 - global: 全球 **默认取值：** mainland_china: 中国大陆
    * statType  参数类型支持：flux(流量)，req_num(请求总数)。
    * country  - 国家&地区编码，多个以英文逗号分隔，all表示全部，取值见附录 - 访问运营商统计数据时不能填写 - 访问top_url数据时不能填写 - 访问区域情况数据时只能填写cn(中国)
    * province  省份编码，当country为cn（中国）时有效，多个以英文逗号分隔，all表示全部，取值见附录
    * isp  运营商名称。如果IP归属地未知，该字段返回null。
    * language  语言，支持zh(中文)，en(英文)两种，如果不传默认为zh
    *
    * @var string[]
    */
    protected static $setters = [
            'action' => 'setAction',
            'domainName' => 'setDomainName',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'groupBy' => 'setGroupBy',
            'interval' => 'setInterval',
            'serviceArea' => 'setServiceArea',
            'statType' => 'setStatType',
            'country' => 'setCountry',
            'province' => 'setProvince',
            'isp' => 'setIsp',
            'language' => 'setLanguage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * action  **参数解释：** 规则行为 **约束限制：** 不涉及
    * domainName  订阅的域名列表，支持同时输入多个域名，多个域名用半角逗号（,）分隔；说明：如果该参数为all，则为账号下的所有域名订阅运营报表。
    * startTime  查询起始时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * endTime  查询结束时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * groupBy  数据分组方式，可选domain，默认不分组
    * interval  查询时间间隔，单位：秒
    * serviceArea  **参数解释：** 域名服务范围 **约束限制：** 服务范围为中国大陆或全球时，加速域名需要到工信部备案 **取值范围：** - mainland_china: 中国大陆 - outside_mainland_china: 中国大陆境外 - global: 全球 **默认取值：** mainland_china: 中国大陆
    * statType  参数类型支持：flux(流量)，req_num(请求总数)。
    * country  - 国家&地区编码，多个以英文逗号分隔，all表示全部，取值见附录 - 访问运营商统计数据时不能填写 - 访问top_url数据时不能填写 - 访问区域情况数据时只能填写cn(中国)
    * province  省份编码，当country为cn（中国）时有效，多个以英文逗号分隔，all表示全部，取值见附录
    * isp  运营商名称。如果IP归属地未知，该字段返回null。
    * language  语言，支持zh(中文)，en(英文)两种，如果不传默认为zh
    *
    * @var string[]
    */
    protected static $getters = [
            'action' => 'getAction',
            'domainName' => 'getDomainName',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'groupBy' => 'getGroupBy',
            'interval' => 'getInterval',
            'serviceArea' => 'getServiceArea',
            'statType' => 'getStatType',
            'country' => 'getCountry',
            'province' => 'getProvince',
            'isp' => 'getIsp',
            'language' => 'getLanguage'
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['groupBy'] = isset($data['groupBy']) ? $data['groupBy'] : null;
        $this->container['interval'] = isset($data['interval']) ? $data['interval'] : null;
        $this->container['serviceArea'] = isset($data['serviceArea']) ? $data['serviceArea'] : null;
        $this->container['statType'] = isset($data['statType']) ? $data['statType'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['province'] = isset($data['province']) ? $data['province'] : null;
        $this->container['isp'] = isset($data['isp']) ? $data['isp'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets action
    *  **参数解释：** 规则行为 **约束限制：** 不涉及
    *
    * @return string|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string|null $action **参数解释：** 规则行为 **约束限制：** 不涉及
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets domainName
    *  订阅的域名列表，支持同时输入多个域名，多个域名用半角逗号（,）分隔；说明：如果该参数为all，则为账号下的所有域名订阅运营报表。
    *
    * @return string|null
    */
    public function getDomainName()
    {
        return $this->container['domainName'];
    }

    /**
    * Sets domainName
    *
    * @param string|null $domainName 订阅的域名列表，支持同时输入多个域名，多个域名用半角逗号（,）分隔；说明：如果该参数为all，则为账号下的所有域名订阅运营报表。
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets startTime
    *  查询起始时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    *
    * @return int|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int|null $startTime 查询起始时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
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
    *  查询结束时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    *
    * @return int|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int|null $endTime 查询结束时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets groupBy
    *  数据分组方式，可选domain，默认不分组
    *
    * @return string|null
    */
    public function getGroupBy()
    {
        return $this->container['groupBy'];
    }

    /**
    * Sets groupBy
    *
    * @param string|null $groupBy 数据分组方式，可选domain，默认不分组
    *
    * @return $this
    */
    public function setGroupBy($groupBy)
    {
        $this->container['groupBy'] = $groupBy;
        return $this;
    }

    /**
    * Gets interval
    *  查询时间间隔，单位：秒
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
    * @param int|null $interval 查询时间间隔，单位：秒
    *
    * @return $this
    */
    public function setInterval($interval)
    {
        $this->container['interval'] = $interval;
        return $this;
    }

    /**
    * Gets serviceArea
    *  **参数解释：** 域名服务范围 **约束限制：** 服务范围为中国大陆或全球时，加速域名需要到工信部备案 **取值范围：** - mainland_china: 中国大陆 - outside_mainland_china: 中国大陆境外 - global: 全球 **默认取值：** mainland_china: 中国大陆
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
    * @param string|null $serviceArea **参数解释：** 域名服务范围 **约束限制：** 服务范围为中国大陆或全球时，加速域名需要到工信部备案 **取值范围：** - mainland_china: 中国大陆 - outside_mainland_china: 中国大陆境外 - global: 全球 **默认取值：** mainland_china: 中国大陆
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
    *  参数类型支持：flux(流量)，req_num(请求总数)。
    *
    * @return string|null
    */
    public function getStatType()
    {
        return $this->container['statType'];
    }

    /**
    * Sets statType
    *
    * @param string|null $statType 参数类型支持：flux(流量)，req_num(请求总数)。
    *
    * @return $this
    */
    public function setStatType($statType)
    {
        $this->container['statType'] = $statType;
        return $this;
    }

    /**
    * Gets country
    *  - 国家&地区编码，多个以英文逗号分隔，all表示全部，取值见附录 - 访问运营商统计数据时不能填写 - 访问top_url数据时不能填写 - 访问区域情况数据时只能填写cn(中国)
    *
    * @return string|null
    */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
    * Sets country
    *
    * @param string|null $country - 国家&地区编码，多个以英文逗号分隔，all表示全部，取值见附录 - 访问运营商统计数据时不能填写 - 访问top_url数据时不能填写 - 访问区域情况数据时只能填写cn(中国)
    *
    * @return $this
    */
    public function setCountry($country)
    {
        $this->container['country'] = $country;
        return $this;
    }

    /**
    * Gets province
    *  省份编码，当country为cn（中国）时有效，多个以英文逗号分隔，all表示全部，取值见附录
    *
    * @return string|null
    */
    public function getProvince()
    {
        return $this->container['province'];
    }

    /**
    * Sets province
    *
    * @param string|null $province 省份编码，当country为cn（中国）时有效，多个以英文逗号分隔，all表示全部，取值见附录
    *
    * @return $this
    */
    public function setProvince($province)
    {
        $this->container['province'] = $province;
        return $this;
    }

    /**
    * Gets isp
    *  运营商名称。如果IP归属地未知，该字段返回null。
    *
    * @return string|null
    */
    public function getIsp()
    {
        return $this->container['isp'];
    }

    /**
    * Sets isp
    *
    * @param string|null $isp 运营商名称。如果IP归属地未知，该字段返回null。
    *
    * @return $this
    */
    public function setIsp($isp)
    {
        $this->container['isp'] = $isp;
        return $this;
    }

    /**
    * Gets language
    *  语言，支持zh(中文)，en(英文)两种，如果不传默认为zh
    *
    * @return string|null
    */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
    * Sets language
    *
    * @param string|null $language 语言，支持zh(中文)，en(英文)两种，如果不传默认为zh
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
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

