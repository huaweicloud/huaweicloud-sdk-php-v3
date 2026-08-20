<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DownloadRegionCarrierExcelRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DownloadRegionCarrierExcelRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * startTime  **参数解释：** 查询起始时间戳 **约束限制：** 需与结束时间戳同时指定，左闭右开 **取值范围：** - 若查询5分钟时间粒度（即interval为300）数据，start_time设置为整5分钟时刻点，如：1631240100000(对应2021-09-10 10:15:00) - 若查询1小时时间粒度（即interval为3600）数据，start_time设置为整小时时刻点，如：1631239200000(对应2021-09-10 10:00:00) - 若查询1天时间粒度（即interval为86400）数据，start_time设置为东8区零点时刻点，如：1631203200000(对应2021-09-10 00:00:00) **默认取值：** 不涉及
    * endTime  **参数解释：** 查询结束时间戳 **约束限制：** 需与起始时间戳同时指定，左闭右开 **取值范围：** - 若查询5分钟时间粒度（即interval为300）数据，end_time设置为整5分钟时刻点，如：1631240100000）对应2021-09-10 10:15:00） - 若查询1小时时间粒度（即interval为3600）数据，end_time设置为整小时时刻点，如：1631239200000（对应2021-09-10 10:00:00） - 若查询1天时间粒度（即interval为86400）数据，end_time设置为东8区零点时刻点，如：1631203200000（对应2021-09-10 00:00:00） **默认取值：** 不涉及
    * domainName  **参数解释：** 域名列表 > 如果域名在查询时间段内无数据，结果将不返回该域名的信息  **约束限制：** 仅支持查询已经在CDN创建成功的域名 **取值范围：** - all表示查询名下全部域名 - 多个域名以逗号（半角）分隔，如：www.test1.com,www.test2.com **默认取值：** 不涉及
    * interval  **参数解释：** 查询时间粒度 **约束限制：** - 查询跨度不超过1天时，支持5分钟粒度、1小时粒度 - 查询跨度不超过7天时，支持5分钟、1小时粒度、1天粒度 - 查询跨度不超过31天时，支持1小时粒度、1天粒度  **取值范围：** - 300：采样时间间隔为5分钟，单位：秒 - 3600：采样时间间隔为1小时，单位：秒 - 86400：采样时间间隔为1天，单位：秒 **默认取值：** 默认取对应查询时间跨度的最小时间间隔 > 时间跨度小于等于7天，最小时间间隔为300；时间跨度大于7天，最小时间间隔为3600
    * country  **参数解释：** 国家&地区编码 **约束限制：** - 查询运营商统计数据时，不传该参数 - 查询top_url数据时，不传该参数 - 查询区域情况数据时，该参数只能传cn(中国)  **取值范围：** - 多个以英文逗号分隔 - all表示全部，取值见附录 **默认取值：** 不涉及
    * excelLanguage  **参数解释：** 创建表格语言 **约束限制：** 不涉及 **取值范围：** - zh：中文 - en：英文 **默认取值：** zh：中文
    * enterpriseProjectId  **参数解释：** 企业项目id > 您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id  **约束限制：** - 当用户开启企业项目功能时，该参数生效，表示查询资源所属项目 - 当使用子账号调用接口时，该参数必传 **取值范围：** all表示所有项目 **默认取值：** 不涉及
    * excelType  统计数据表格类型,目前支持 - 区域用量统计数据(excel_type_usage) - 区域访问情况统计数据(excel_type_access) - 区域情况统计数据（excel_type_region） - 区域运营商情况统计数据(excel_type_carrier) - 国家情况统计数据(excel_type_country) - top_url统计数据(excel_type_top_url)
    * region  - 地区区域,当country为cn（中国）时有效 - 访问运营商统计数据时不能填写 - 访问国家统计数据时不能填写 - 访问top_url数据时不能填写
    * carrier  - 运营商编码 - 访问区域统计数据时不能填写 - 访问国家统计数据时不能填写 - 访问top_url数据时不能填写
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'startTime' => 'int',
            'endTime' => 'int',
            'domainName' => 'string',
            'interval' => 'int',
            'country' => 'string',
            'excelLanguage' => 'string',
            'enterpriseProjectId' => 'string',
            'excelType' => 'string',
            'region' => 'string',
            'carrier' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * startTime  **参数解释：** 查询起始时间戳 **约束限制：** 需与结束时间戳同时指定，左闭右开 **取值范围：** - 若查询5分钟时间粒度（即interval为300）数据，start_time设置为整5分钟时刻点，如：1631240100000(对应2021-09-10 10:15:00) - 若查询1小时时间粒度（即interval为3600）数据，start_time设置为整小时时刻点，如：1631239200000(对应2021-09-10 10:00:00) - 若查询1天时间粒度（即interval为86400）数据，start_time设置为东8区零点时刻点，如：1631203200000(对应2021-09-10 00:00:00) **默认取值：** 不涉及
    * endTime  **参数解释：** 查询结束时间戳 **约束限制：** 需与起始时间戳同时指定，左闭右开 **取值范围：** - 若查询5分钟时间粒度（即interval为300）数据，end_time设置为整5分钟时刻点，如：1631240100000）对应2021-09-10 10:15:00） - 若查询1小时时间粒度（即interval为3600）数据，end_time设置为整小时时刻点，如：1631239200000（对应2021-09-10 10:00:00） - 若查询1天时间粒度（即interval为86400）数据，end_time设置为东8区零点时刻点，如：1631203200000（对应2021-09-10 00:00:00） **默认取值：** 不涉及
    * domainName  **参数解释：** 域名列表 > 如果域名在查询时间段内无数据，结果将不返回该域名的信息  **约束限制：** 仅支持查询已经在CDN创建成功的域名 **取值范围：** - all表示查询名下全部域名 - 多个域名以逗号（半角）分隔，如：www.test1.com,www.test2.com **默认取值：** 不涉及
    * interval  **参数解释：** 查询时间粒度 **约束限制：** - 查询跨度不超过1天时，支持5分钟粒度、1小时粒度 - 查询跨度不超过7天时，支持5分钟、1小时粒度、1天粒度 - 查询跨度不超过31天时，支持1小时粒度、1天粒度  **取值范围：** - 300：采样时间间隔为5分钟，单位：秒 - 3600：采样时间间隔为1小时，单位：秒 - 86400：采样时间间隔为1天，单位：秒 **默认取值：** 默认取对应查询时间跨度的最小时间间隔 > 时间跨度小于等于7天，最小时间间隔为300；时间跨度大于7天，最小时间间隔为3600
    * country  **参数解释：** 国家&地区编码 **约束限制：** - 查询运营商统计数据时，不传该参数 - 查询top_url数据时，不传该参数 - 查询区域情况数据时，该参数只能传cn(中国)  **取值范围：** - 多个以英文逗号分隔 - all表示全部，取值见附录 **默认取值：** 不涉及
    * excelLanguage  **参数解释：** 创建表格语言 **约束限制：** 不涉及 **取值范围：** - zh：中文 - en：英文 **默认取值：** zh：中文
    * enterpriseProjectId  **参数解释：** 企业项目id > 您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id  **约束限制：** - 当用户开启企业项目功能时，该参数生效，表示查询资源所属项目 - 当使用子账号调用接口时，该参数必传 **取值范围：** all表示所有项目 **默认取值：** 不涉及
    * excelType  统计数据表格类型,目前支持 - 区域用量统计数据(excel_type_usage) - 区域访问情况统计数据(excel_type_access) - 区域情况统计数据（excel_type_region） - 区域运营商情况统计数据(excel_type_carrier) - 国家情况统计数据(excel_type_country) - top_url统计数据(excel_type_top_url)
    * region  - 地区区域,当country为cn（中国）时有效 - 访问运营商统计数据时不能填写 - 访问国家统计数据时不能填写 - 访问top_url数据时不能填写
    * carrier  - 运营商编码 - 访问区域统计数据时不能填写 - 访问国家统计数据时不能填写 - 访问top_url数据时不能填写
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'startTime' => 'int64',
        'endTime' => 'int64',
        'domainName' => null,
        'interval' => 'int64',
        'country' => null,
        'excelLanguage' => null,
        'enterpriseProjectId' => null,
        'excelType' => null,
        'region' => null,
        'carrier' => null
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
    * startTime  **参数解释：** 查询起始时间戳 **约束限制：** 需与结束时间戳同时指定，左闭右开 **取值范围：** - 若查询5分钟时间粒度（即interval为300）数据，start_time设置为整5分钟时刻点，如：1631240100000(对应2021-09-10 10:15:00) - 若查询1小时时间粒度（即interval为3600）数据，start_time设置为整小时时刻点，如：1631239200000(对应2021-09-10 10:00:00) - 若查询1天时间粒度（即interval为86400）数据，start_time设置为东8区零点时刻点，如：1631203200000(对应2021-09-10 00:00:00) **默认取值：** 不涉及
    * endTime  **参数解释：** 查询结束时间戳 **约束限制：** 需与起始时间戳同时指定，左闭右开 **取值范围：** - 若查询5分钟时间粒度（即interval为300）数据，end_time设置为整5分钟时刻点，如：1631240100000）对应2021-09-10 10:15:00） - 若查询1小时时间粒度（即interval为3600）数据，end_time设置为整小时时刻点，如：1631239200000（对应2021-09-10 10:00:00） - 若查询1天时间粒度（即interval为86400）数据，end_time设置为东8区零点时刻点，如：1631203200000（对应2021-09-10 00:00:00） **默认取值：** 不涉及
    * domainName  **参数解释：** 域名列表 > 如果域名在查询时间段内无数据，结果将不返回该域名的信息  **约束限制：** 仅支持查询已经在CDN创建成功的域名 **取值范围：** - all表示查询名下全部域名 - 多个域名以逗号（半角）分隔，如：www.test1.com,www.test2.com **默认取值：** 不涉及
    * interval  **参数解释：** 查询时间粒度 **约束限制：** - 查询跨度不超过1天时，支持5分钟粒度、1小时粒度 - 查询跨度不超过7天时，支持5分钟、1小时粒度、1天粒度 - 查询跨度不超过31天时，支持1小时粒度、1天粒度  **取值范围：** - 300：采样时间间隔为5分钟，单位：秒 - 3600：采样时间间隔为1小时，单位：秒 - 86400：采样时间间隔为1天，单位：秒 **默认取值：** 默认取对应查询时间跨度的最小时间间隔 > 时间跨度小于等于7天，最小时间间隔为300；时间跨度大于7天，最小时间间隔为3600
    * country  **参数解释：** 国家&地区编码 **约束限制：** - 查询运营商统计数据时，不传该参数 - 查询top_url数据时，不传该参数 - 查询区域情况数据时，该参数只能传cn(中国)  **取值范围：** - 多个以英文逗号分隔 - all表示全部，取值见附录 **默认取值：** 不涉及
    * excelLanguage  **参数解释：** 创建表格语言 **约束限制：** 不涉及 **取值范围：** - zh：中文 - en：英文 **默认取值：** zh：中文
    * enterpriseProjectId  **参数解释：** 企业项目id > 您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id  **约束限制：** - 当用户开启企业项目功能时，该参数生效，表示查询资源所属项目 - 当使用子账号调用接口时，该参数必传 **取值范围：** all表示所有项目 **默认取值：** 不涉及
    * excelType  统计数据表格类型,目前支持 - 区域用量统计数据(excel_type_usage) - 区域访问情况统计数据(excel_type_access) - 区域情况统计数据（excel_type_region） - 区域运营商情况统计数据(excel_type_carrier) - 国家情况统计数据(excel_type_country) - top_url统计数据(excel_type_top_url)
    * region  - 地区区域,当country为cn（中国）时有效 - 访问运营商统计数据时不能填写 - 访问国家统计数据时不能填写 - 访问top_url数据时不能填写
    * carrier  - 运营商编码 - 访问区域统计数据时不能填写 - 访问国家统计数据时不能填写 - 访问top_url数据时不能填写
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'domainName' => 'domain_name',
            'interval' => 'interval',
            'country' => 'country',
            'excelLanguage' => 'excel_language',
            'enterpriseProjectId' => 'enterprise_project_id',
            'excelType' => 'excel_type',
            'region' => 'region',
            'carrier' => 'carrier'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * startTime  **参数解释：** 查询起始时间戳 **约束限制：** 需与结束时间戳同时指定，左闭右开 **取值范围：** - 若查询5分钟时间粒度（即interval为300）数据，start_time设置为整5分钟时刻点，如：1631240100000(对应2021-09-10 10:15:00) - 若查询1小时时间粒度（即interval为3600）数据，start_time设置为整小时时刻点，如：1631239200000(对应2021-09-10 10:00:00) - 若查询1天时间粒度（即interval为86400）数据，start_time设置为东8区零点时刻点，如：1631203200000(对应2021-09-10 00:00:00) **默认取值：** 不涉及
    * endTime  **参数解释：** 查询结束时间戳 **约束限制：** 需与起始时间戳同时指定，左闭右开 **取值范围：** - 若查询5分钟时间粒度（即interval为300）数据，end_time设置为整5分钟时刻点，如：1631240100000）对应2021-09-10 10:15:00） - 若查询1小时时间粒度（即interval为3600）数据，end_time设置为整小时时刻点，如：1631239200000（对应2021-09-10 10:00:00） - 若查询1天时间粒度（即interval为86400）数据，end_time设置为东8区零点时刻点，如：1631203200000（对应2021-09-10 00:00:00） **默认取值：** 不涉及
    * domainName  **参数解释：** 域名列表 > 如果域名在查询时间段内无数据，结果将不返回该域名的信息  **约束限制：** 仅支持查询已经在CDN创建成功的域名 **取值范围：** - all表示查询名下全部域名 - 多个域名以逗号（半角）分隔，如：www.test1.com,www.test2.com **默认取值：** 不涉及
    * interval  **参数解释：** 查询时间粒度 **约束限制：** - 查询跨度不超过1天时，支持5分钟粒度、1小时粒度 - 查询跨度不超过7天时，支持5分钟、1小时粒度、1天粒度 - 查询跨度不超过31天时，支持1小时粒度、1天粒度  **取值范围：** - 300：采样时间间隔为5分钟，单位：秒 - 3600：采样时间间隔为1小时，单位：秒 - 86400：采样时间间隔为1天，单位：秒 **默认取值：** 默认取对应查询时间跨度的最小时间间隔 > 时间跨度小于等于7天，最小时间间隔为300；时间跨度大于7天，最小时间间隔为3600
    * country  **参数解释：** 国家&地区编码 **约束限制：** - 查询运营商统计数据时，不传该参数 - 查询top_url数据时，不传该参数 - 查询区域情况数据时，该参数只能传cn(中国)  **取值范围：** - 多个以英文逗号分隔 - all表示全部，取值见附录 **默认取值：** 不涉及
    * excelLanguage  **参数解释：** 创建表格语言 **约束限制：** 不涉及 **取值范围：** - zh：中文 - en：英文 **默认取值：** zh：中文
    * enterpriseProjectId  **参数解释：** 企业项目id > 您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id  **约束限制：** - 当用户开启企业项目功能时，该参数生效，表示查询资源所属项目 - 当使用子账号调用接口时，该参数必传 **取值范围：** all表示所有项目 **默认取值：** 不涉及
    * excelType  统计数据表格类型,目前支持 - 区域用量统计数据(excel_type_usage) - 区域访问情况统计数据(excel_type_access) - 区域情况统计数据（excel_type_region） - 区域运营商情况统计数据(excel_type_carrier) - 国家情况统计数据(excel_type_country) - top_url统计数据(excel_type_top_url)
    * region  - 地区区域,当country为cn（中国）时有效 - 访问运营商统计数据时不能填写 - 访问国家统计数据时不能填写 - 访问top_url数据时不能填写
    * carrier  - 运营商编码 - 访问区域统计数据时不能填写 - 访问国家统计数据时不能填写 - 访问top_url数据时不能填写
    *
    * @var string[]
    */
    protected static $setters = [
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'domainName' => 'setDomainName',
            'interval' => 'setInterval',
            'country' => 'setCountry',
            'excelLanguage' => 'setExcelLanguage',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'excelType' => 'setExcelType',
            'region' => 'setRegion',
            'carrier' => 'setCarrier'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * startTime  **参数解释：** 查询起始时间戳 **约束限制：** 需与结束时间戳同时指定，左闭右开 **取值范围：** - 若查询5分钟时间粒度（即interval为300）数据，start_time设置为整5分钟时刻点，如：1631240100000(对应2021-09-10 10:15:00) - 若查询1小时时间粒度（即interval为3600）数据，start_time设置为整小时时刻点，如：1631239200000(对应2021-09-10 10:00:00) - 若查询1天时间粒度（即interval为86400）数据，start_time设置为东8区零点时刻点，如：1631203200000(对应2021-09-10 00:00:00) **默认取值：** 不涉及
    * endTime  **参数解释：** 查询结束时间戳 **约束限制：** 需与起始时间戳同时指定，左闭右开 **取值范围：** - 若查询5分钟时间粒度（即interval为300）数据，end_time设置为整5分钟时刻点，如：1631240100000）对应2021-09-10 10:15:00） - 若查询1小时时间粒度（即interval为3600）数据，end_time设置为整小时时刻点，如：1631239200000（对应2021-09-10 10:00:00） - 若查询1天时间粒度（即interval为86400）数据，end_time设置为东8区零点时刻点，如：1631203200000（对应2021-09-10 00:00:00） **默认取值：** 不涉及
    * domainName  **参数解释：** 域名列表 > 如果域名在查询时间段内无数据，结果将不返回该域名的信息  **约束限制：** 仅支持查询已经在CDN创建成功的域名 **取值范围：** - all表示查询名下全部域名 - 多个域名以逗号（半角）分隔，如：www.test1.com,www.test2.com **默认取值：** 不涉及
    * interval  **参数解释：** 查询时间粒度 **约束限制：** - 查询跨度不超过1天时，支持5分钟粒度、1小时粒度 - 查询跨度不超过7天时，支持5分钟、1小时粒度、1天粒度 - 查询跨度不超过31天时，支持1小时粒度、1天粒度  **取值范围：** - 300：采样时间间隔为5分钟，单位：秒 - 3600：采样时间间隔为1小时，单位：秒 - 86400：采样时间间隔为1天，单位：秒 **默认取值：** 默认取对应查询时间跨度的最小时间间隔 > 时间跨度小于等于7天，最小时间间隔为300；时间跨度大于7天，最小时间间隔为3600
    * country  **参数解释：** 国家&地区编码 **约束限制：** - 查询运营商统计数据时，不传该参数 - 查询top_url数据时，不传该参数 - 查询区域情况数据时，该参数只能传cn(中国)  **取值范围：** - 多个以英文逗号分隔 - all表示全部，取值见附录 **默认取值：** 不涉及
    * excelLanguage  **参数解释：** 创建表格语言 **约束限制：** 不涉及 **取值范围：** - zh：中文 - en：英文 **默认取值：** zh：中文
    * enterpriseProjectId  **参数解释：** 企业项目id > 您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id  **约束限制：** - 当用户开启企业项目功能时，该参数生效，表示查询资源所属项目 - 当使用子账号调用接口时，该参数必传 **取值范围：** all表示所有项目 **默认取值：** 不涉及
    * excelType  统计数据表格类型,目前支持 - 区域用量统计数据(excel_type_usage) - 区域访问情况统计数据(excel_type_access) - 区域情况统计数据（excel_type_region） - 区域运营商情况统计数据(excel_type_carrier) - 国家情况统计数据(excel_type_country) - top_url统计数据(excel_type_top_url)
    * region  - 地区区域,当country为cn（中国）时有效 - 访问运营商统计数据时不能填写 - 访问国家统计数据时不能填写 - 访问top_url数据时不能填写
    * carrier  - 运营商编码 - 访问区域统计数据时不能填写 - 访问国家统计数据时不能填写 - 访问top_url数据时不能填写
    *
    * @var string[]
    */
    protected static $getters = [
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'domainName' => 'getDomainName',
            'interval' => 'getInterval',
            'country' => 'getCountry',
            'excelLanguage' => 'getExcelLanguage',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'excelType' => 'getExcelType',
            'region' => 'getRegion',
            'carrier' => 'getCarrier'
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
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['interval'] = isset($data['interval']) ? $data['interval'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['excelLanguage'] = isset($data['excelLanguage']) ? $data['excelLanguage'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['excelType'] = isset($data['excelType']) ? $data['excelType'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['carrier'] = isset($data['carrier']) ? $data['carrier'] : null;
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
            if (($this->container['startTime'] > 4102416000000)) {
                $invalidProperties[] = "invalid value for 'startTime', must be smaller than or equal to 4102416000000.";
            }
            if (($this->container['startTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'startTime', must be bigger than or equal to 0.";
            }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
            if (($this->container['endTime'] > 4102416000000)) {
                $invalidProperties[] = "invalid value for 'endTime', must be smaller than or equal to 4102416000000.";
            }
            if (($this->container['endTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'endTime', must be bigger than or equal to 0.";
            }
        if ($this->container['domainName'] === null) {
            $invalidProperties[] = "'domainName' can't be null";
        }
            if ((mb_strlen($this->container['domainName']) > 10240)) {
                $invalidProperties[] = "invalid value for 'domainName', the character length must be smaller than or equal to 10240.";
            }
            if ((mb_strlen($this->container['domainName']) < 1)) {
                $invalidProperties[] = "invalid value for 'domainName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['interval']) && ($this->container['interval'] > 86400)) {
                $invalidProperties[] = "invalid value for 'interval', must be smaller than or equal to 86400.";
            }
            if (!is_null($this->container['interval']) && ($this->container['interval'] < 0)) {
                $invalidProperties[] = "invalid value for 'interval', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['country']) && (mb_strlen($this->container['country']) > 2048)) {
                $invalidProperties[] = "invalid value for 'country', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['country']) && (mb_strlen($this->container['country']) < 1)) {
                $invalidProperties[] = "invalid value for 'country', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['excelLanguage']) && (mb_strlen($this->container['excelLanguage']) > 10240)) {
                $invalidProperties[] = "invalid value for 'excelLanguage', the character length must be smaller than or equal to 10240.";
            }
            if (!is_null($this->container['excelLanguage']) && (mb_strlen($this->container['excelLanguage']) < 1)) {
                $invalidProperties[] = "invalid value for 'excelLanguage', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['excelType'] === null) {
            $invalidProperties[] = "'excelType' can't be null";
        }
            if ((mb_strlen($this->container['excelType']) > 2048)) {
                $invalidProperties[] = "invalid value for 'excelType', the character length must be smaller than or equal to 2048.";
            }
            if ((mb_strlen($this->container['excelType']) < 1)) {
                $invalidProperties[] = "invalid value for 'excelType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) > 2048)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) < 1)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['carrier']) && (mb_strlen($this->container['carrier']) > 2048)) {
                $invalidProperties[] = "invalid value for 'carrier', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['carrier']) && (mb_strlen($this->container['carrier']) < 1)) {
                $invalidProperties[] = "invalid value for 'carrier', the character length must be bigger than or equal to 1.";
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
    * Gets startTime
    *  **参数解释：** 查询起始时间戳 **约束限制：** 需与结束时间戳同时指定，左闭右开 **取值范围：** - 若查询5分钟时间粒度（即interval为300）数据，start_time设置为整5分钟时刻点，如：1631240100000(对应2021-09-10 10:15:00) - 若查询1小时时间粒度（即interval为3600）数据，start_time设置为整小时时刻点，如：1631239200000(对应2021-09-10 10:00:00) - 若查询1天时间粒度（即interval为86400）数据，start_time设置为东8区零点时刻点，如：1631203200000(对应2021-09-10 00:00:00) **默认取值：** 不涉及
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
    * @param int $startTime **参数解释：** 查询起始时间戳 **约束限制：** 需与结束时间戳同时指定，左闭右开 **取值范围：** - 若查询5分钟时间粒度（即interval为300）数据，start_time设置为整5分钟时刻点，如：1631240100000(对应2021-09-10 10:15:00) - 若查询1小时时间粒度（即interval为3600）数据，start_time设置为整小时时刻点，如：1631239200000(对应2021-09-10 10:00:00) - 若查询1天时间粒度（即interval为86400）数据，start_time设置为东8区零点时刻点，如：1631203200000(对应2021-09-10 00:00:00) **默认取值：** 不涉及
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
    *  **参数解释：** 查询结束时间戳 **约束限制：** 需与起始时间戳同时指定，左闭右开 **取值范围：** - 若查询5分钟时间粒度（即interval为300）数据，end_time设置为整5分钟时刻点，如：1631240100000）对应2021-09-10 10:15:00） - 若查询1小时时间粒度（即interval为3600）数据，end_time设置为整小时时刻点，如：1631239200000（对应2021-09-10 10:00:00） - 若查询1天时间粒度（即interval为86400）数据，end_time设置为东8区零点时刻点，如：1631203200000（对应2021-09-10 00:00:00） **默认取值：** 不涉及
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
    * @param int $endTime **参数解释：** 查询结束时间戳 **约束限制：** 需与起始时间戳同时指定，左闭右开 **取值范围：** - 若查询5分钟时间粒度（即interval为300）数据，end_time设置为整5分钟时刻点，如：1631240100000）对应2021-09-10 10:15:00） - 若查询1小时时间粒度（即interval为3600）数据，end_time设置为整小时时刻点，如：1631239200000（对应2021-09-10 10:00:00） - 若查询1天时间粒度（即interval为86400）数据，end_time设置为东8区零点时刻点，如：1631203200000（对应2021-09-10 00:00:00） **默认取值：** 不涉及
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
    *  **参数解释：** 域名列表 > 如果域名在查询时间段内无数据，结果将不返回该域名的信息  **约束限制：** 仅支持查询已经在CDN创建成功的域名 **取值范围：** - all表示查询名下全部域名 - 多个域名以逗号（半角）分隔，如：www.test1.com,www.test2.com **默认取值：** 不涉及
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
    * @param string $domainName **参数解释：** 域名列表 > 如果域名在查询时间段内无数据，结果将不返回该域名的信息  **约束限制：** 仅支持查询已经在CDN创建成功的域名 **取值范围：** - all表示查询名下全部域名 - 多个域名以逗号（半角）分隔，如：www.test1.com,www.test2.com **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets interval
    *  **参数解释：** 查询时间粒度 **约束限制：** - 查询跨度不超过1天时，支持5分钟粒度、1小时粒度 - 查询跨度不超过7天时，支持5分钟、1小时粒度、1天粒度 - 查询跨度不超过31天时，支持1小时粒度、1天粒度  **取值范围：** - 300：采样时间间隔为5分钟，单位：秒 - 3600：采样时间间隔为1小时，单位：秒 - 86400：采样时间间隔为1天，单位：秒 **默认取值：** 默认取对应查询时间跨度的最小时间间隔 > 时间跨度小于等于7天，最小时间间隔为300；时间跨度大于7天，最小时间间隔为3600
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
    * @param int|null $interval **参数解释：** 查询时间粒度 **约束限制：** - 查询跨度不超过1天时，支持5分钟粒度、1小时粒度 - 查询跨度不超过7天时，支持5分钟、1小时粒度、1天粒度 - 查询跨度不超过31天时，支持1小时粒度、1天粒度  **取值范围：** - 300：采样时间间隔为5分钟，单位：秒 - 3600：采样时间间隔为1小时，单位：秒 - 86400：采样时间间隔为1天，单位：秒 **默认取值：** 默认取对应查询时间跨度的最小时间间隔 > 时间跨度小于等于7天，最小时间间隔为300；时间跨度大于7天，最小时间间隔为3600
    *
    * @return $this
    */
    public function setInterval($interval)
    {
        $this->container['interval'] = $interval;
        return $this;
    }

    /**
    * Gets country
    *  **参数解释：** 国家&地区编码 **约束限制：** - 查询运营商统计数据时，不传该参数 - 查询top_url数据时，不传该参数 - 查询区域情况数据时，该参数只能传cn(中国)  **取值范围：** - 多个以英文逗号分隔 - all表示全部，取值见附录 **默认取值：** 不涉及
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
    * @param string|null $country **参数解释：** 国家&地区编码 **约束限制：** - 查询运营商统计数据时，不传该参数 - 查询top_url数据时，不传该参数 - 查询区域情况数据时，该参数只能传cn(中国)  **取值范围：** - 多个以英文逗号分隔 - all表示全部，取值见附录 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setCountry($country)
    {
        $this->container['country'] = $country;
        return $this;
    }

    /**
    * Gets excelLanguage
    *  **参数解释：** 创建表格语言 **约束限制：** 不涉及 **取值范围：** - zh：中文 - en：英文 **默认取值：** zh：中文
    *
    * @return string|null
    */
    public function getExcelLanguage()
    {
        return $this->container['excelLanguage'];
    }

    /**
    * Sets excelLanguage
    *
    * @param string|null $excelLanguage **参数解释：** 创建表格语言 **约束限制：** 不涉及 **取值范围：** - zh：中文 - en：英文 **默认取值：** zh：中文
    *
    * @return $this
    */
    public function setExcelLanguage($excelLanguage)
    {
        $this->container['excelLanguage'] = $excelLanguage;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  **参数解释：** 企业项目id > 您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id  **约束限制：** - 当用户开启企业项目功能时，该参数生效，表示查询资源所属项目 - 当使用子账号调用接口时，该参数必传 **取值范围：** all表示所有项目 **默认取值：** 不涉及
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
    * @param string|null $enterpriseProjectId **参数解释：** 企业项目id > 您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id  **约束限制：** - 当用户开启企业项目功能时，该参数生效，表示查询资源所属项目 - 当使用子账号调用接口时，该参数必传 **取值范围：** all表示所有项目 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets excelType
    *  统计数据表格类型,目前支持 - 区域用量统计数据(excel_type_usage) - 区域访问情况统计数据(excel_type_access) - 区域情况统计数据（excel_type_region） - 区域运营商情况统计数据(excel_type_carrier) - 国家情况统计数据(excel_type_country) - top_url统计数据(excel_type_top_url)
    *
    * @return string
    */
    public function getExcelType()
    {
        return $this->container['excelType'];
    }

    /**
    * Sets excelType
    *
    * @param string $excelType 统计数据表格类型,目前支持 - 区域用量统计数据(excel_type_usage) - 区域访问情况统计数据(excel_type_access) - 区域情况统计数据（excel_type_region） - 区域运营商情况统计数据(excel_type_carrier) - 国家情况统计数据(excel_type_country) - top_url统计数据(excel_type_top_url)
    *
    * @return $this
    */
    public function setExcelType($excelType)
    {
        $this->container['excelType'] = $excelType;
        return $this;
    }

    /**
    * Gets region
    *  - 地区区域,当country为cn（中国）时有效 - 访问运营商统计数据时不能填写 - 访问国家统计数据时不能填写 - 访问top_url数据时不能填写
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region - 地区区域,当country为cn（中国）时有效 - 访问运营商统计数据时不能填写 - 访问国家统计数据时不能填写 - 访问top_url数据时不能填写
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets carrier
    *  - 运营商编码 - 访问区域统计数据时不能填写 - 访问国家统计数据时不能填写 - 访问top_url数据时不能填写
    *
    * @return string|null
    */
    public function getCarrier()
    {
        return $this->container['carrier'];
    }

    /**
    * Sets carrier
    *
    * @param string|null $carrier - 运营商编码 - 访问区域统计数据时不能填写 - 访问国家统计数据时不能填写 - 访问top_url数据时不能填写
    *
    * @return $this
    */
    public function setCarrier($carrier)
    {
        $this->container['carrier'] = $carrier;
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

