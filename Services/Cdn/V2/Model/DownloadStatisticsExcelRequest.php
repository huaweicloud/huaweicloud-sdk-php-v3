<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DownloadStatisticsExcelRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DownloadStatisticsExcelRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * startTime  - 查询起始时间戳，时间戳应设置需为整5分钟，设置方式如下： - interval为300时，start_time设置为整5分钟时刻点，如：1631240100000(对应2021-09-10 10:15:00) - interval为3600时，start_time设置为整小时时刻点，如：1631239200000(对应2021-09-10 10:00:00) - interval为86400时，start_time设置为东8区零点时刻点，如：1631203200000(对应2021-09-10 00:00:00)
    * endTime  - 查询结束时间戳，时间戳应设置需为整5分钟，设置方式如下： - interval为300时，end_time设置为整5分钟时刻点，如：1631243700000(对应2021-09-10 11:15:00) - interval为3600时，end_time设置为整小时时刻点，如：1631325600000(对应2021-09-11 10:00:00) - interval为86400时，end_time设置为东8区零点时刻点，如：1631376000000(对应2021-09-12 00:00:00)
    * domainName  域名列表，多个域名以逗号（半角）分隔，如：www.test1.com,www.test2.com all表示查询名下全部域名
    * excelLanguage  创建表格语言，支持zh(中文)，en(英文)两种，如果不传默认为zh
    * serviceArea  服务区域：mainland_china（默认）、outside_mainland_china，当查询回源类指标时该参数无效。
    * interval  - 查询时间间隔，单位：秒，取值说明： - 300(5分钟)：最大查询跨度2天 - 3600(1小时)：最大查询跨度7天 - 86400(1天)：最大查询跨度31天 - 如果不传，默认取对应时间跨度的最小间隔。
    * enterpriseProjectId  当用户开启企业项目功能时，该参数生效，表示查询资源所属项目，\"all\"表示所有项目。注意：当使用子账号调用接口时，该参数必传。
    * excelType  统计数据表格类型,目前支持 - 用量统计数据(excel_type_usage) - 访问情况统计数据(excel_type_access) - 回源情况统计数据（excel_type_origin） - http_code统计数据(excel_type_http_code)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'startTime' => 'int',
            'endTime' => 'int',
            'domainName' => 'string',
            'excelLanguage' => 'string',
            'serviceArea' => 'string',
            'interval' => 'int',
            'enterpriseProjectId' => 'string',
            'excelType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * startTime  - 查询起始时间戳，时间戳应设置需为整5分钟，设置方式如下： - interval为300时，start_time设置为整5分钟时刻点，如：1631240100000(对应2021-09-10 10:15:00) - interval为3600时，start_time设置为整小时时刻点，如：1631239200000(对应2021-09-10 10:00:00) - interval为86400时，start_time设置为东8区零点时刻点，如：1631203200000(对应2021-09-10 00:00:00)
    * endTime  - 查询结束时间戳，时间戳应设置需为整5分钟，设置方式如下： - interval为300时，end_time设置为整5分钟时刻点，如：1631243700000(对应2021-09-10 11:15:00) - interval为3600时，end_time设置为整小时时刻点，如：1631325600000(对应2021-09-11 10:00:00) - interval为86400时，end_time设置为东8区零点时刻点，如：1631376000000(对应2021-09-12 00:00:00)
    * domainName  域名列表，多个域名以逗号（半角）分隔，如：www.test1.com,www.test2.com all表示查询名下全部域名
    * excelLanguage  创建表格语言，支持zh(中文)，en(英文)两种，如果不传默认为zh
    * serviceArea  服务区域：mainland_china（默认）、outside_mainland_china，当查询回源类指标时该参数无效。
    * interval  - 查询时间间隔，单位：秒，取值说明： - 300(5分钟)：最大查询跨度2天 - 3600(1小时)：最大查询跨度7天 - 86400(1天)：最大查询跨度31天 - 如果不传，默认取对应时间跨度的最小间隔。
    * enterpriseProjectId  当用户开启企业项目功能时，该参数生效，表示查询资源所属项目，\"all\"表示所有项目。注意：当使用子账号调用接口时，该参数必传。
    * excelType  统计数据表格类型,目前支持 - 用量统计数据(excel_type_usage) - 访问情况统计数据(excel_type_access) - 回源情况统计数据（excel_type_origin） - http_code统计数据(excel_type_http_code)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'startTime' => 'int64',
        'endTime' => 'int64',
        'domainName' => null,
        'excelLanguage' => null,
        'serviceArea' => null,
        'interval' => 'int64',
        'enterpriseProjectId' => null,
        'excelType' => null
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
    * startTime  - 查询起始时间戳，时间戳应设置需为整5分钟，设置方式如下： - interval为300时，start_time设置为整5分钟时刻点，如：1631240100000(对应2021-09-10 10:15:00) - interval为3600时，start_time设置为整小时时刻点，如：1631239200000(对应2021-09-10 10:00:00) - interval为86400时，start_time设置为东8区零点时刻点，如：1631203200000(对应2021-09-10 00:00:00)
    * endTime  - 查询结束时间戳，时间戳应设置需为整5分钟，设置方式如下： - interval为300时，end_time设置为整5分钟时刻点，如：1631243700000(对应2021-09-10 11:15:00) - interval为3600时，end_time设置为整小时时刻点，如：1631325600000(对应2021-09-11 10:00:00) - interval为86400时，end_time设置为东8区零点时刻点，如：1631376000000(对应2021-09-12 00:00:00)
    * domainName  域名列表，多个域名以逗号（半角）分隔，如：www.test1.com,www.test2.com all表示查询名下全部域名
    * excelLanguage  创建表格语言，支持zh(中文)，en(英文)两种，如果不传默认为zh
    * serviceArea  服务区域：mainland_china（默认）、outside_mainland_china，当查询回源类指标时该参数无效。
    * interval  - 查询时间间隔，单位：秒，取值说明： - 300(5分钟)：最大查询跨度2天 - 3600(1小时)：最大查询跨度7天 - 86400(1天)：最大查询跨度31天 - 如果不传，默认取对应时间跨度的最小间隔。
    * enterpriseProjectId  当用户开启企业项目功能时，该参数生效，表示查询资源所属项目，\"all\"表示所有项目。注意：当使用子账号调用接口时，该参数必传。
    * excelType  统计数据表格类型,目前支持 - 用量统计数据(excel_type_usage) - 访问情况统计数据(excel_type_access) - 回源情况统计数据（excel_type_origin） - http_code统计数据(excel_type_http_code)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'domainName' => 'domain_name',
            'excelLanguage' => 'excel_language',
            'serviceArea' => 'service_area',
            'interval' => 'interval',
            'enterpriseProjectId' => 'enterprise_project_id',
            'excelType' => 'excel_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * startTime  - 查询起始时间戳，时间戳应设置需为整5分钟，设置方式如下： - interval为300时，start_time设置为整5分钟时刻点，如：1631240100000(对应2021-09-10 10:15:00) - interval为3600时，start_time设置为整小时时刻点，如：1631239200000(对应2021-09-10 10:00:00) - interval为86400时，start_time设置为东8区零点时刻点，如：1631203200000(对应2021-09-10 00:00:00)
    * endTime  - 查询结束时间戳，时间戳应设置需为整5分钟，设置方式如下： - interval为300时，end_time设置为整5分钟时刻点，如：1631243700000(对应2021-09-10 11:15:00) - interval为3600时，end_time设置为整小时时刻点，如：1631325600000(对应2021-09-11 10:00:00) - interval为86400时，end_time设置为东8区零点时刻点，如：1631376000000(对应2021-09-12 00:00:00)
    * domainName  域名列表，多个域名以逗号（半角）分隔，如：www.test1.com,www.test2.com all表示查询名下全部域名
    * excelLanguage  创建表格语言，支持zh(中文)，en(英文)两种，如果不传默认为zh
    * serviceArea  服务区域：mainland_china（默认）、outside_mainland_china，当查询回源类指标时该参数无效。
    * interval  - 查询时间间隔，单位：秒，取值说明： - 300(5分钟)：最大查询跨度2天 - 3600(1小时)：最大查询跨度7天 - 86400(1天)：最大查询跨度31天 - 如果不传，默认取对应时间跨度的最小间隔。
    * enterpriseProjectId  当用户开启企业项目功能时，该参数生效，表示查询资源所属项目，\"all\"表示所有项目。注意：当使用子账号调用接口时，该参数必传。
    * excelType  统计数据表格类型,目前支持 - 用量统计数据(excel_type_usage) - 访问情况统计数据(excel_type_access) - 回源情况统计数据（excel_type_origin） - http_code统计数据(excel_type_http_code)
    *
    * @var string[]
    */
    protected static $setters = [
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'domainName' => 'setDomainName',
            'excelLanguage' => 'setExcelLanguage',
            'serviceArea' => 'setServiceArea',
            'interval' => 'setInterval',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'excelType' => 'setExcelType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * startTime  - 查询起始时间戳，时间戳应设置需为整5分钟，设置方式如下： - interval为300时，start_time设置为整5分钟时刻点，如：1631240100000(对应2021-09-10 10:15:00) - interval为3600时，start_time设置为整小时时刻点，如：1631239200000(对应2021-09-10 10:00:00) - interval为86400时，start_time设置为东8区零点时刻点，如：1631203200000(对应2021-09-10 00:00:00)
    * endTime  - 查询结束时间戳，时间戳应设置需为整5分钟，设置方式如下： - interval为300时，end_time设置为整5分钟时刻点，如：1631243700000(对应2021-09-10 11:15:00) - interval为3600时，end_time设置为整小时时刻点，如：1631325600000(对应2021-09-11 10:00:00) - interval为86400时，end_time设置为东8区零点时刻点，如：1631376000000(对应2021-09-12 00:00:00)
    * domainName  域名列表，多个域名以逗号（半角）分隔，如：www.test1.com,www.test2.com all表示查询名下全部域名
    * excelLanguage  创建表格语言，支持zh(中文)，en(英文)两种，如果不传默认为zh
    * serviceArea  服务区域：mainland_china（默认）、outside_mainland_china，当查询回源类指标时该参数无效。
    * interval  - 查询时间间隔，单位：秒，取值说明： - 300(5分钟)：最大查询跨度2天 - 3600(1小时)：最大查询跨度7天 - 86400(1天)：最大查询跨度31天 - 如果不传，默认取对应时间跨度的最小间隔。
    * enterpriseProjectId  当用户开启企业项目功能时，该参数生效，表示查询资源所属项目，\"all\"表示所有项目。注意：当使用子账号调用接口时，该参数必传。
    * excelType  统计数据表格类型,目前支持 - 用量统计数据(excel_type_usage) - 访问情况统计数据(excel_type_access) - 回源情况统计数据（excel_type_origin） - http_code统计数据(excel_type_http_code)
    *
    * @var string[]
    */
    protected static $getters = [
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'domainName' => 'getDomainName',
            'excelLanguage' => 'getExcelLanguage',
            'serviceArea' => 'getServiceArea',
            'interval' => 'getInterval',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'excelType' => 'getExcelType'
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
        $this->container['excelLanguage'] = isset($data['excelLanguage']) ? $data['excelLanguage'] : null;
        $this->container['serviceArea'] = isset($data['serviceArea']) ? $data['serviceArea'] : null;
        $this->container['interval'] = isset($data['interval']) ? $data['interval'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['excelType'] = isset($data['excelType']) ? $data['excelType'] : null;
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
            if (!is_null($this->container['excelLanguage']) && (mb_strlen($this->container['excelLanguage']) > 10240)) {
                $invalidProperties[] = "invalid value for 'excelLanguage', the character length must be smaller than or equal to 10240.";
            }
            if (!is_null($this->container['excelLanguage']) && (mb_strlen($this->container['excelLanguage']) < 1)) {
                $invalidProperties[] = "invalid value for 'excelLanguage', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['serviceArea']) && (mb_strlen($this->container['serviceArea']) > 2048)) {
                $invalidProperties[] = "invalid value for 'serviceArea', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['serviceArea']) && (mb_strlen($this->container['serviceArea']) < 1)) {
                $invalidProperties[] = "invalid value for 'serviceArea', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['interval']) && ($this->container['interval'] > 86400)) {
                $invalidProperties[] = "invalid value for 'interval', must be smaller than or equal to 86400.";
            }
            if (!is_null($this->container['interval']) && ($this->container['interval'] < 0)) {
                $invalidProperties[] = "invalid value for 'interval', must be bigger than or equal to 0.";
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
    *  - 查询起始时间戳，时间戳应设置需为整5分钟，设置方式如下： - interval为300时，start_time设置为整5分钟时刻点，如：1631240100000(对应2021-09-10 10:15:00) - interval为3600时，start_time设置为整小时时刻点，如：1631239200000(对应2021-09-10 10:00:00) - interval为86400时，start_time设置为东8区零点时刻点，如：1631203200000(对应2021-09-10 00:00:00)
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
    * @param int $startTime - 查询起始时间戳，时间戳应设置需为整5分钟，设置方式如下： - interval为300时，start_time设置为整5分钟时刻点，如：1631240100000(对应2021-09-10 10:15:00) - interval为3600时，start_time设置为整小时时刻点，如：1631239200000(对应2021-09-10 10:00:00) - interval为86400时，start_time设置为东8区零点时刻点，如：1631203200000(对应2021-09-10 00:00:00)
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
    *  - 查询结束时间戳，时间戳应设置需为整5分钟，设置方式如下： - interval为300时，end_time设置为整5分钟时刻点，如：1631243700000(对应2021-09-10 11:15:00) - interval为3600时，end_time设置为整小时时刻点，如：1631325600000(对应2021-09-11 10:00:00) - interval为86400时，end_time设置为东8区零点时刻点，如：1631376000000(对应2021-09-12 00:00:00)
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
    * @param int $endTime - 查询结束时间戳，时间戳应设置需为整5分钟，设置方式如下： - interval为300时，end_time设置为整5分钟时刻点，如：1631243700000(对应2021-09-10 11:15:00) - interval为3600时，end_time设置为整小时时刻点，如：1631325600000(对应2021-09-11 10:00:00) - interval为86400时，end_time设置为东8区零点时刻点，如：1631376000000(对应2021-09-12 00:00:00)
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
    *  域名列表，多个域名以逗号（半角）分隔，如：www.test1.com,www.test2.com all表示查询名下全部域名
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
    * @param string $domainName 域名列表，多个域名以逗号（半角）分隔，如：www.test1.com,www.test2.com all表示查询名下全部域名
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets excelLanguage
    *  创建表格语言，支持zh(中文)，en(英文)两种，如果不传默认为zh
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
    * @param string|null $excelLanguage 创建表格语言，支持zh(中文)，en(英文)两种，如果不传默认为zh
    *
    * @return $this
    */
    public function setExcelLanguage($excelLanguage)
    {
        $this->container['excelLanguage'] = $excelLanguage;
        return $this;
    }

    /**
    * Gets serviceArea
    *  服务区域：mainland_china（默认）、outside_mainland_china，当查询回源类指标时该参数无效。
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
    * @param string|null $serviceArea 服务区域：mainland_china（默认）、outside_mainland_china，当查询回源类指标时该参数无效。
    *
    * @return $this
    */
    public function setServiceArea($serviceArea)
    {
        $this->container['serviceArea'] = $serviceArea;
        return $this;
    }

    /**
    * Gets interval
    *  - 查询时间间隔，单位：秒，取值说明： - 300(5分钟)：最大查询跨度2天 - 3600(1小时)：最大查询跨度7天 - 86400(1天)：最大查询跨度31天 - 如果不传，默认取对应时间跨度的最小间隔。
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
    * @param int|null $interval - 查询时间间隔，单位：秒，取值说明： - 300(5分钟)：最大查询跨度2天 - 3600(1小时)：最大查询跨度7天 - 86400(1天)：最大查询跨度31天 - 如果不传，默认取对应时间跨度的最小间隔。
    *
    * @return $this
    */
    public function setInterval($interval)
    {
        $this->container['interval'] = $interval;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  当用户开启企业项目功能时，该参数生效，表示查询资源所属项目，\"all\"表示所有项目。注意：当使用子账号调用接口时，该参数必传。
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
    * @param string|null $enterpriseProjectId 当用户开启企业项目功能时，该参数生效，表示查询资源所属项目，\"all\"表示所有项目。注意：当使用子账号调用接口时，该参数必传。
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
    *  统计数据表格类型,目前支持 - 用量统计数据(excel_type_usage) - 访问情况统计数据(excel_type_access) - 回源情况统计数据（excel_type_origin） - http_code统计数据(excel_type_http_code)
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
    * @param string $excelType 统计数据表格类型,目前支持 - 用量统计数据(excel_type_usage) - 访问情况统计数据(excel_type_access) - 回源情况统计数据（excel_type_origin） - http_code统计数据(excel_type_http_code)
    *
    * @return $this
    */
    public function setExcelType($excelType)
    {
        $this->container['excelType'] = $excelType;
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

