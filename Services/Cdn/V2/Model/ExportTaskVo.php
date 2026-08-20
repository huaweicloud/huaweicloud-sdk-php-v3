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
    * action  **参数解释：** 导出数据类型 **约束限制：** 不涉及 **取值范围：** - reports_detail：基础话单数据导出 - top_url_detail：TOP URL数据导出 - top_ua_detail：TOP UA数据导出 - top_referer_detail：TOP referer数据导出 - top_ip_detail：TOP IP数据导出 - isp_detail：运营商数据导出, - top_path_detail： TOP path数据导出, - uv：UV数据导出 **默认取值：** 不涉及
    * domainName  **参数解释：** 订阅的域名列表 > 支持同时输入多个域名  **约束限制：** 不涉及 **取值范围：** - 多个域名用半角逗号（,）分隔 - 如果该参数为all，则为账号下的所有域名订阅运营报表 **默认取值：** 不涉及
    * startTime  **参数解释：** 导出起始时间 **约束限制：** 不涉及 **取值范围：** 相对于UTC 1970-01-01到当前时间相隔的毫秒数 **默认取值：** 不涉及
    * endTime  **参数解释：** 导出结束时间 **约束限制：** 不涉及 **取值范围：** 相对于UTC 1970-01-01到当前时间相隔的毫秒数 **默认取值：** 不涉及
    * groupBy  **参数解释：** 数据分组方式 **约束限制：** 不涉及 **取值范围：** domain：按域名分组 **默认取值：** 默认不分组
    * interval  **参数解释：** 查询时间粒度 **约束限制：** 当导出时间跨度超过90天时，仅支持1小时粒度（3600） **取值范围：** - 300：采样时间间隔为5分钟，单位：秒 - 3600：采样时间间隔为1小时，单位：秒 **默认取值：** 不涉及
    * serviceArea  **参数解释：** 服务范围 **约束限制：** 服务范围为中国大陆或全球时，加速域名需要到工信部备案 **取值范围：** - mainland_china：中国大陆 - outside_mainland_china：中国大陆境外 - global：全球 **默认取值：** mainland_china：中国大陆
    * statType  **参数解释：** 统计指标类型 **约束限制：** 不涉及 **取值范围：** - flux：流量 - req_num：请求总数 **默认取值：** 不涉及
    * country  **参数解释：** 国家&地区编码 **约束限制：** - 查询运营商统计数据时，不传该参数 - 查询top_url数据时，不传该参数 - 查询区域情况数据时，该参数传cn（中国） **取值范围：** - 多个以英文逗号分隔 - all表示全部，取值见附录 **默认取值：** 不涉及
    * province  **参数解释：** 省份编码： **约束限制：** 当country为cn（中国）时，该参数有效 **取值范围：** all表示全部，取值见附录 **默认取值：** 不涉及
    * isp  **参数解释：** 运营商名称 > 如果IP归属地未知，该字段返回null  **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * language  **参数解释：** 语言 **约束限制：** 不涉及 **取值范围：** - zh：中文 - en：英文 **默认取值：** zh：中文
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
    * action  **参数解释：** 导出数据类型 **约束限制：** 不涉及 **取值范围：** - reports_detail：基础话单数据导出 - top_url_detail：TOP URL数据导出 - top_ua_detail：TOP UA数据导出 - top_referer_detail：TOP referer数据导出 - top_ip_detail：TOP IP数据导出 - isp_detail：运营商数据导出, - top_path_detail： TOP path数据导出, - uv：UV数据导出 **默认取值：** 不涉及
    * domainName  **参数解释：** 订阅的域名列表 > 支持同时输入多个域名  **约束限制：** 不涉及 **取值范围：** - 多个域名用半角逗号（,）分隔 - 如果该参数为all，则为账号下的所有域名订阅运营报表 **默认取值：** 不涉及
    * startTime  **参数解释：** 导出起始时间 **约束限制：** 不涉及 **取值范围：** 相对于UTC 1970-01-01到当前时间相隔的毫秒数 **默认取值：** 不涉及
    * endTime  **参数解释：** 导出结束时间 **约束限制：** 不涉及 **取值范围：** 相对于UTC 1970-01-01到当前时间相隔的毫秒数 **默认取值：** 不涉及
    * groupBy  **参数解释：** 数据分组方式 **约束限制：** 不涉及 **取值范围：** domain：按域名分组 **默认取值：** 默认不分组
    * interval  **参数解释：** 查询时间粒度 **约束限制：** 当导出时间跨度超过90天时，仅支持1小时粒度（3600） **取值范围：** - 300：采样时间间隔为5分钟，单位：秒 - 3600：采样时间间隔为1小时，单位：秒 **默认取值：** 不涉及
    * serviceArea  **参数解释：** 服务范围 **约束限制：** 服务范围为中国大陆或全球时，加速域名需要到工信部备案 **取值范围：** - mainland_china：中国大陆 - outside_mainland_china：中国大陆境外 - global：全球 **默认取值：** mainland_china：中国大陆
    * statType  **参数解释：** 统计指标类型 **约束限制：** 不涉及 **取值范围：** - flux：流量 - req_num：请求总数 **默认取值：** 不涉及
    * country  **参数解释：** 国家&地区编码 **约束限制：** - 查询运营商统计数据时，不传该参数 - 查询top_url数据时，不传该参数 - 查询区域情况数据时，该参数传cn（中国） **取值范围：** - 多个以英文逗号分隔 - all表示全部，取值见附录 **默认取值：** 不涉及
    * province  **参数解释：** 省份编码： **约束限制：** 当country为cn（中国）时，该参数有效 **取值范围：** all表示全部，取值见附录 **默认取值：** 不涉及
    * isp  **参数解释：** 运营商名称 > 如果IP归属地未知，该字段返回null  **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * language  **参数解释：** 语言 **约束限制：** 不涉及 **取值范围：** - zh：中文 - en：英文 **默认取值：** zh：中文
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
    * action  **参数解释：** 导出数据类型 **约束限制：** 不涉及 **取值范围：** - reports_detail：基础话单数据导出 - top_url_detail：TOP URL数据导出 - top_ua_detail：TOP UA数据导出 - top_referer_detail：TOP referer数据导出 - top_ip_detail：TOP IP数据导出 - isp_detail：运营商数据导出, - top_path_detail： TOP path数据导出, - uv：UV数据导出 **默认取值：** 不涉及
    * domainName  **参数解释：** 订阅的域名列表 > 支持同时输入多个域名  **约束限制：** 不涉及 **取值范围：** - 多个域名用半角逗号（,）分隔 - 如果该参数为all，则为账号下的所有域名订阅运营报表 **默认取值：** 不涉及
    * startTime  **参数解释：** 导出起始时间 **约束限制：** 不涉及 **取值范围：** 相对于UTC 1970-01-01到当前时间相隔的毫秒数 **默认取值：** 不涉及
    * endTime  **参数解释：** 导出结束时间 **约束限制：** 不涉及 **取值范围：** 相对于UTC 1970-01-01到当前时间相隔的毫秒数 **默认取值：** 不涉及
    * groupBy  **参数解释：** 数据分组方式 **约束限制：** 不涉及 **取值范围：** domain：按域名分组 **默认取值：** 默认不分组
    * interval  **参数解释：** 查询时间粒度 **约束限制：** 当导出时间跨度超过90天时，仅支持1小时粒度（3600） **取值范围：** - 300：采样时间间隔为5分钟，单位：秒 - 3600：采样时间间隔为1小时，单位：秒 **默认取值：** 不涉及
    * serviceArea  **参数解释：** 服务范围 **约束限制：** 服务范围为中国大陆或全球时，加速域名需要到工信部备案 **取值范围：** - mainland_china：中国大陆 - outside_mainland_china：中国大陆境外 - global：全球 **默认取值：** mainland_china：中国大陆
    * statType  **参数解释：** 统计指标类型 **约束限制：** 不涉及 **取值范围：** - flux：流量 - req_num：请求总数 **默认取值：** 不涉及
    * country  **参数解释：** 国家&地区编码 **约束限制：** - 查询运营商统计数据时，不传该参数 - 查询top_url数据时，不传该参数 - 查询区域情况数据时，该参数传cn（中国） **取值范围：** - 多个以英文逗号分隔 - all表示全部，取值见附录 **默认取值：** 不涉及
    * province  **参数解释：** 省份编码： **约束限制：** 当country为cn（中国）时，该参数有效 **取值范围：** all表示全部，取值见附录 **默认取值：** 不涉及
    * isp  **参数解释：** 运营商名称 > 如果IP归属地未知，该字段返回null  **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * language  **参数解释：** 语言 **约束限制：** 不涉及 **取值范围：** - zh：中文 - en：英文 **默认取值：** zh：中文
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
    * action  **参数解释：** 导出数据类型 **约束限制：** 不涉及 **取值范围：** - reports_detail：基础话单数据导出 - top_url_detail：TOP URL数据导出 - top_ua_detail：TOP UA数据导出 - top_referer_detail：TOP referer数据导出 - top_ip_detail：TOP IP数据导出 - isp_detail：运营商数据导出, - top_path_detail： TOP path数据导出, - uv：UV数据导出 **默认取值：** 不涉及
    * domainName  **参数解释：** 订阅的域名列表 > 支持同时输入多个域名  **约束限制：** 不涉及 **取值范围：** - 多个域名用半角逗号（,）分隔 - 如果该参数为all，则为账号下的所有域名订阅运营报表 **默认取值：** 不涉及
    * startTime  **参数解释：** 导出起始时间 **约束限制：** 不涉及 **取值范围：** 相对于UTC 1970-01-01到当前时间相隔的毫秒数 **默认取值：** 不涉及
    * endTime  **参数解释：** 导出结束时间 **约束限制：** 不涉及 **取值范围：** 相对于UTC 1970-01-01到当前时间相隔的毫秒数 **默认取值：** 不涉及
    * groupBy  **参数解释：** 数据分组方式 **约束限制：** 不涉及 **取值范围：** domain：按域名分组 **默认取值：** 默认不分组
    * interval  **参数解释：** 查询时间粒度 **约束限制：** 当导出时间跨度超过90天时，仅支持1小时粒度（3600） **取值范围：** - 300：采样时间间隔为5分钟，单位：秒 - 3600：采样时间间隔为1小时，单位：秒 **默认取值：** 不涉及
    * serviceArea  **参数解释：** 服务范围 **约束限制：** 服务范围为中国大陆或全球时，加速域名需要到工信部备案 **取值范围：** - mainland_china：中国大陆 - outside_mainland_china：中国大陆境外 - global：全球 **默认取值：** mainland_china：中国大陆
    * statType  **参数解释：** 统计指标类型 **约束限制：** 不涉及 **取值范围：** - flux：流量 - req_num：请求总数 **默认取值：** 不涉及
    * country  **参数解释：** 国家&地区编码 **约束限制：** - 查询运营商统计数据时，不传该参数 - 查询top_url数据时，不传该参数 - 查询区域情况数据时，该参数传cn（中国） **取值范围：** - 多个以英文逗号分隔 - all表示全部，取值见附录 **默认取值：** 不涉及
    * province  **参数解释：** 省份编码： **约束限制：** 当country为cn（中国）时，该参数有效 **取值范围：** all表示全部，取值见附录 **默认取值：** 不涉及
    * isp  **参数解释：** 运营商名称 > 如果IP归属地未知，该字段返回null  **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * language  **参数解释：** 语言 **约束限制：** 不涉及 **取值范围：** - zh：中文 - en：英文 **默认取值：** zh：中文
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
    * action  **参数解释：** 导出数据类型 **约束限制：** 不涉及 **取值范围：** - reports_detail：基础话单数据导出 - top_url_detail：TOP URL数据导出 - top_ua_detail：TOP UA数据导出 - top_referer_detail：TOP referer数据导出 - top_ip_detail：TOP IP数据导出 - isp_detail：运营商数据导出, - top_path_detail： TOP path数据导出, - uv：UV数据导出 **默认取值：** 不涉及
    * domainName  **参数解释：** 订阅的域名列表 > 支持同时输入多个域名  **约束限制：** 不涉及 **取值范围：** - 多个域名用半角逗号（,）分隔 - 如果该参数为all，则为账号下的所有域名订阅运营报表 **默认取值：** 不涉及
    * startTime  **参数解释：** 导出起始时间 **约束限制：** 不涉及 **取值范围：** 相对于UTC 1970-01-01到当前时间相隔的毫秒数 **默认取值：** 不涉及
    * endTime  **参数解释：** 导出结束时间 **约束限制：** 不涉及 **取值范围：** 相对于UTC 1970-01-01到当前时间相隔的毫秒数 **默认取值：** 不涉及
    * groupBy  **参数解释：** 数据分组方式 **约束限制：** 不涉及 **取值范围：** domain：按域名分组 **默认取值：** 默认不分组
    * interval  **参数解释：** 查询时间粒度 **约束限制：** 当导出时间跨度超过90天时，仅支持1小时粒度（3600） **取值范围：** - 300：采样时间间隔为5分钟，单位：秒 - 3600：采样时间间隔为1小时，单位：秒 **默认取值：** 不涉及
    * serviceArea  **参数解释：** 服务范围 **约束限制：** 服务范围为中国大陆或全球时，加速域名需要到工信部备案 **取值范围：** - mainland_china：中国大陆 - outside_mainland_china：中国大陆境外 - global：全球 **默认取值：** mainland_china：中国大陆
    * statType  **参数解释：** 统计指标类型 **约束限制：** 不涉及 **取值范围：** - flux：流量 - req_num：请求总数 **默认取值：** 不涉及
    * country  **参数解释：** 国家&地区编码 **约束限制：** - 查询运营商统计数据时，不传该参数 - 查询top_url数据时，不传该参数 - 查询区域情况数据时，该参数传cn（中国） **取值范围：** - 多个以英文逗号分隔 - all表示全部，取值见附录 **默认取值：** 不涉及
    * province  **参数解释：** 省份编码： **约束限制：** 当country为cn（中国）时，该参数有效 **取值范围：** all表示全部，取值见附录 **默认取值：** 不涉及
    * isp  **参数解释：** 运营商名称 > 如果IP归属地未知，该字段返回null  **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * language  **参数解释：** 语言 **约束限制：** 不涉及 **取值范围：** - zh：中文 - en：英文 **默认取值：** zh：中文
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
    *  **参数解释：** 导出数据类型 **约束限制：** 不涉及 **取值范围：** - reports_detail：基础话单数据导出 - top_url_detail：TOP URL数据导出 - top_ua_detail：TOP UA数据导出 - top_referer_detail：TOP referer数据导出 - top_ip_detail：TOP IP数据导出 - isp_detail：运营商数据导出, - top_path_detail： TOP path数据导出, - uv：UV数据导出 **默认取值：** 不涉及
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
    * @param string|null $action **参数解释：** 导出数据类型 **约束限制：** 不涉及 **取值范围：** - reports_detail：基础话单数据导出 - top_url_detail：TOP URL数据导出 - top_ua_detail：TOP UA数据导出 - top_referer_detail：TOP referer数据导出 - top_ip_detail：TOP IP数据导出 - isp_detail：运营商数据导出, - top_path_detail： TOP path数据导出, - uv：UV数据导出 **默认取值：** 不涉及
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
    *  **参数解释：** 订阅的域名列表 > 支持同时输入多个域名  **约束限制：** 不涉及 **取值范围：** - 多个域名用半角逗号（,）分隔 - 如果该参数为all，则为账号下的所有域名订阅运营报表 **默认取值：** 不涉及
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
    * @param string|null $domainName **参数解释：** 订阅的域名列表 > 支持同时输入多个域名  **约束限制：** 不涉及 **取值范围：** - 多个域名用半角逗号（,）分隔 - 如果该参数为all，则为账号下的所有域名订阅运营报表 **默认取值：** 不涉及
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
    *  **参数解释：** 导出起始时间 **约束限制：** 不涉及 **取值范围：** 相对于UTC 1970-01-01到当前时间相隔的毫秒数 **默认取值：** 不涉及
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
    * @param int|null $startTime **参数解释：** 导出起始时间 **约束限制：** 不涉及 **取值范围：** 相对于UTC 1970-01-01到当前时间相隔的毫秒数 **默认取值：** 不涉及
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
    *  **参数解释：** 导出结束时间 **约束限制：** 不涉及 **取值范围：** 相对于UTC 1970-01-01到当前时间相隔的毫秒数 **默认取值：** 不涉及
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
    * @param int|null $endTime **参数解释：** 导出结束时间 **约束限制：** 不涉及 **取值范围：** 相对于UTC 1970-01-01到当前时间相隔的毫秒数 **默认取值：** 不涉及
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
    *  **参数解释：** 数据分组方式 **约束限制：** 不涉及 **取值范围：** domain：按域名分组 **默认取值：** 默认不分组
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
    * @param string|null $groupBy **参数解释：** 数据分组方式 **约束限制：** 不涉及 **取值范围：** domain：按域名分组 **默认取值：** 默认不分组
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
    *  **参数解释：** 查询时间粒度 **约束限制：** 当导出时间跨度超过90天时，仅支持1小时粒度（3600） **取值范围：** - 300：采样时间间隔为5分钟，单位：秒 - 3600：采样时间间隔为1小时，单位：秒 **默认取值：** 不涉及
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
    * @param int|null $interval **参数解释：** 查询时间粒度 **约束限制：** 当导出时间跨度超过90天时，仅支持1小时粒度（3600） **取值范围：** - 300：采样时间间隔为5分钟，单位：秒 - 3600：采样时间间隔为1小时，单位：秒 **默认取值：** 不涉及
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
    *  **参数解释：** 服务范围 **约束限制：** 服务范围为中国大陆或全球时，加速域名需要到工信部备案 **取值范围：** - mainland_china：中国大陆 - outside_mainland_china：中国大陆境外 - global：全球 **默认取值：** mainland_china：中国大陆
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
    * @param string|null $serviceArea **参数解释：** 服务范围 **约束限制：** 服务范围为中国大陆或全球时，加速域名需要到工信部备案 **取值范围：** - mainland_china：中国大陆 - outside_mainland_china：中国大陆境外 - global：全球 **默认取值：** mainland_china：中国大陆
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
    *  **参数解释：** 统计指标类型 **约束限制：** 不涉及 **取值范围：** - flux：流量 - req_num：请求总数 **默认取值：** 不涉及
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
    * @param string|null $statType **参数解释：** 统计指标类型 **约束限制：** 不涉及 **取值范围：** - flux：流量 - req_num：请求总数 **默认取值：** 不涉及
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
    *  **参数解释：** 国家&地区编码 **约束限制：** - 查询运营商统计数据时，不传该参数 - 查询top_url数据时，不传该参数 - 查询区域情况数据时，该参数传cn（中国） **取值范围：** - 多个以英文逗号分隔 - all表示全部，取值见附录 **默认取值：** 不涉及
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
    * @param string|null $country **参数解释：** 国家&地区编码 **约束限制：** - 查询运营商统计数据时，不传该参数 - 查询top_url数据时，不传该参数 - 查询区域情况数据时，该参数传cn（中国） **取值范围：** - 多个以英文逗号分隔 - all表示全部，取值见附录 **默认取值：** 不涉及
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
    *  **参数解释：** 省份编码： **约束限制：** 当country为cn（中国）时，该参数有效 **取值范围：** all表示全部，取值见附录 **默认取值：** 不涉及
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
    * @param string|null $province **参数解释：** 省份编码： **约束限制：** 当country为cn（中国）时，该参数有效 **取值范围：** all表示全部，取值见附录 **默认取值：** 不涉及
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
    *  **参数解释：** 运营商名称 > 如果IP归属地未知，该字段返回null  **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @param string|null $isp **参数解释：** 运营商名称 > 如果IP归属地未知，该字段返回null  **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    *  **参数解释：** 语言 **约束限制：** 不涉及 **取值范围：** - zh：中文 - en：英文 **默认取值：** zh：中文
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
    * @param string|null $language **参数解释：** 语言 **约束限制：** 不涉及 **取值范围：** - zh：中文 - en：英文 **默认取值：** zh：中文
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

