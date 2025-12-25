<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MetricMetaDataDerivedMetrics implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MetricMetaData_derived_metrics';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * metricDimension  衍生指标结果维度，0维：单个数字，2维：图表或表格，3+维：多标签图表
    * maxQueryRange  指标支持的最大检索范围，单位：天；
    * dateStart  指标查询范围相对起始时间 datemath表达式
    * dateEnd  指标查询范围相对截止时间 datemath表达式
    * dateFormat  时间格式，epoch_millis;epoch_second;yyyy-MM-dd'T'HH:mm:ss.SSSZ
    * queryType  获取指标结果方式，cbsl, api, dsl, sql
    * queryFunction  获取指标结果的方法，转义成字符串, 共四种query方式：CBSL、API、DSL、SQL - query_type为`CBSL`时，function传入dataspace_id，pipe_id，query，sort, from, to   样例：     ```     {\\\"dataspace_id\\\":\\\"3939573a-12a0-436f-b0e5-ab2872a1fde9\\\",\\\"pipe_id\\\":\\\"9db9d8a6-d9e6-4b32-990e-40f0afe4655d\\\",\\\"query\\\":\\\"* | select ack_pps, device_type as type\\\",\\\"sort\\\":\\\"desc\\\",\\\"from\\\":${date_from},\\\"to\\\":${date_to}}     ```      转义前：     ```json     {         \"dataspace_id\":\"3939573a-12a0-436f-b0e5-ab2872a1fde9\",         \"pipe_id\":\"9db9d8a6-d9e6-4b32-990e-40f0afe4655d\",         \"query\":\"* | select ack_pps, device_type as type\",         \"sort\":\"desc\",         \"from\": ${date_from},         \"to\": ${date_to}     }     ``` - query_type为`API`时，function传入api method、url、path_params、headers、response_parser（解析API返回值所需，定义label和json_path将返回值解析为二维表格，label为表头，json_path为字段提取路径）   样例：     ```     {\\\"method\\\":\\\"POST\\\",\\\"uri\\\":\\\"/v1/${project_id}/只填写uri/不带域名/xxx\\\",\\\"headers\\\":{\\\"X-Auth-Token\\\":\\\"${project_token}\\\"},\\\"response_parser\\\":{\\\"labels\\\":[\\\"攻击类型\\\",\\\"攻击源\\\",\\\"时间\\\"],\\\"json_path\\\":[\\\"$.data[:].type\\\",\\\"$.data[:].source\\\",\\\"$.data[:].time\\\"]}}     ```      转义前：     ```json     {         \"method\":\"POST\",         \"uri\":\"/v1/${project_id}/只填写uri/不带域名/xxx\",         \"headers\":{             \"X-Auth-Token\": \"${project_token}\"         },         \"response_parser\":{             \"labels\":[                 \"攻击类型\",                 \"攻击源\",                 \"时间\"             ],             \"json_path\":[                 \"$.data[:].type\",                 \"$.data[:].source\",                 \"$.data[:].time\"             ]         }     }     ``` - query_type为`DSL`时，指定index, dsl(转义成字符串), response_parser   样例：     ```     {\\\"index\\\":\\\"index_xxx_*\\\",\\\"dsl\\\":\\\"{\\\\\\\"query\\\\\\\":{\\\\\\\"match_all\\\\\\\":{}}}\\\",\\\"response_parser\\\":{\\\"labels\\\":[\\\"攻击类型\\\",\\\"攻击源\\\",\\\"时间\\\"],\\\"json_path\\\":[\\\"$.data[:].type\\\",\\\"$.data[:].source\\\",\\\"$.data[:].time\\\"]}}     ```      转义前：      ```json     {         \"index\":\"index_xxx_*\",         \"dsl\":\"{\\\"query\\\":{\\\"match_all\\\":{}}}\",         \"response_parser\":{             \"labels\":[                 \"攻击类型\",                 \"攻击源\",                 \"时间\"             ],             \"json_path\":[                 \"$.data[:].type\",                 \"$.data[:].source\",                 \"$.data[:].time\"             ]         }     }     ``` - query_type为`sql`时，指定opendistro sql插件查询json(转义成字符串)   样例：     ```    {\\\"query\\\":\\\"SELECT count(1) as count , msg.DstPort FROM isap_log_nip_ttl* where oct >= TIMESTAMP(\\\\\\\"${date_from}\\\\\\\") and oct <= TIMESTAMP(\\\\\\\"${date_to}\\\\\\\") group by msg.DstPort order by count desc limit 5\\\"}     ```           转义前：      ```json     {         \"query\":\"SELECT count(1) as count , msg.DstPort FROM isap_log_nip_ttl* where oct >= TIMESTAMP(\\\"${date_from}\\\") and oct <= TIMESTAMP(\\\"${date_to}\\\") group by msg.DstPort order by count desc limit 5\"     }     ```
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'metricDimension' => 'int',
            'maxQueryRange' => 'int',
            'dateStart' => 'string',
            'dateEnd' => 'string',
            'dateFormat' => 'string',
            'queryType' => 'string',
            'queryFunction' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * metricDimension  衍生指标结果维度，0维：单个数字，2维：图表或表格，3+维：多标签图表
    * maxQueryRange  指标支持的最大检索范围，单位：天；
    * dateStart  指标查询范围相对起始时间 datemath表达式
    * dateEnd  指标查询范围相对截止时间 datemath表达式
    * dateFormat  时间格式，epoch_millis;epoch_second;yyyy-MM-dd'T'HH:mm:ss.SSSZ
    * queryType  获取指标结果方式，cbsl, api, dsl, sql
    * queryFunction  获取指标结果的方法，转义成字符串, 共四种query方式：CBSL、API、DSL、SQL - query_type为`CBSL`时，function传入dataspace_id，pipe_id，query，sort, from, to   样例：     ```     {\\\"dataspace_id\\\":\\\"3939573a-12a0-436f-b0e5-ab2872a1fde9\\\",\\\"pipe_id\\\":\\\"9db9d8a6-d9e6-4b32-990e-40f0afe4655d\\\",\\\"query\\\":\\\"* | select ack_pps, device_type as type\\\",\\\"sort\\\":\\\"desc\\\",\\\"from\\\":${date_from},\\\"to\\\":${date_to}}     ```      转义前：     ```json     {         \"dataspace_id\":\"3939573a-12a0-436f-b0e5-ab2872a1fde9\",         \"pipe_id\":\"9db9d8a6-d9e6-4b32-990e-40f0afe4655d\",         \"query\":\"* | select ack_pps, device_type as type\",         \"sort\":\"desc\",         \"from\": ${date_from},         \"to\": ${date_to}     }     ``` - query_type为`API`时，function传入api method、url、path_params、headers、response_parser（解析API返回值所需，定义label和json_path将返回值解析为二维表格，label为表头，json_path为字段提取路径）   样例：     ```     {\\\"method\\\":\\\"POST\\\",\\\"uri\\\":\\\"/v1/${project_id}/只填写uri/不带域名/xxx\\\",\\\"headers\\\":{\\\"X-Auth-Token\\\":\\\"${project_token}\\\"},\\\"response_parser\\\":{\\\"labels\\\":[\\\"攻击类型\\\",\\\"攻击源\\\",\\\"时间\\\"],\\\"json_path\\\":[\\\"$.data[:].type\\\",\\\"$.data[:].source\\\",\\\"$.data[:].time\\\"]}}     ```      转义前：     ```json     {         \"method\":\"POST\",         \"uri\":\"/v1/${project_id}/只填写uri/不带域名/xxx\",         \"headers\":{             \"X-Auth-Token\": \"${project_token}\"         },         \"response_parser\":{             \"labels\":[                 \"攻击类型\",                 \"攻击源\",                 \"时间\"             ],             \"json_path\":[                 \"$.data[:].type\",                 \"$.data[:].source\",                 \"$.data[:].time\"             ]         }     }     ``` - query_type为`DSL`时，指定index, dsl(转义成字符串), response_parser   样例：     ```     {\\\"index\\\":\\\"index_xxx_*\\\",\\\"dsl\\\":\\\"{\\\\\\\"query\\\\\\\":{\\\\\\\"match_all\\\\\\\":{}}}\\\",\\\"response_parser\\\":{\\\"labels\\\":[\\\"攻击类型\\\",\\\"攻击源\\\",\\\"时间\\\"],\\\"json_path\\\":[\\\"$.data[:].type\\\",\\\"$.data[:].source\\\",\\\"$.data[:].time\\\"]}}     ```      转义前：      ```json     {         \"index\":\"index_xxx_*\",         \"dsl\":\"{\\\"query\\\":{\\\"match_all\\\":{}}}\",         \"response_parser\":{             \"labels\":[                 \"攻击类型\",                 \"攻击源\",                 \"时间\"             ],             \"json_path\":[                 \"$.data[:].type\",                 \"$.data[:].source\",                 \"$.data[:].time\"             ]         }     }     ``` - query_type为`sql`时，指定opendistro sql插件查询json(转义成字符串)   样例：     ```    {\\\"query\\\":\\\"SELECT count(1) as count , msg.DstPort FROM isap_log_nip_ttl* where oct >= TIMESTAMP(\\\\\\\"${date_from}\\\\\\\") and oct <= TIMESTAMP(\\\\\\\"${date_to}\\\\\\\") group by msg.DstPort order by count desc limit 5\\\"}     ```           转义前：      ```json     {         \"query\":\"SELECT count(1) as count , msg.DstPort FROM isap_log_nip_ttl* where oct >= TIMESTAMP(\\\"${date_from}\\\") and oct <= TIMESTAMP(\\\"${date_to}\\\") group by msg.DstPort order by count desc limit 5\"     }     ```
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'metricDimension' => 'int32',
        'maxQueryRange' => 'int32',
        'dateStart' => null,
        'dateEnd' => null,
        'dateFormat' => null,
        'queryType' => null,
        'queryFunction' => null
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
    * metricDimension  衍生指标结果维度，0维：单个数字，2维：图表或表格，3+维：多标签图表
    * maxQueryRange  指标支持的最大检索范围，单位：天；
    * dateStart  指标查询范围相对起始时间 datemath表达式
    * dateEnd  指标查询范围相对截止时间 datemath表达式
    * dateFormat  时间格式，epoch_millis;epoch_second;yyyy-MM-dd'T'HH:mm:ss.SSSZ
    * queryType  获取指标结果方式，cbsl, api, dsl, sql
    * queryFunction  获取指标结果的方法，转义成字符串, 共四种query方式：CBSL、API、DSL、SQL - query_type为`CBSL`时，function传入dataspace_id，pipe_id，query，sort, from, to   样例：     ```     {\\\"dataspace_id\\\":\\\"3939573a-12a0-436f-b0e5-ab2872a1fde9\\\",\\\"pipe_id\\\":\\\"9db9d8a6-d9e6-4b32-990e-40f0afe4655d\\\",\\\"query\\\":\\\"* | select ack_pps, device_type as type\\\",\\\"sort\\\":\\\"desc\\\",\\\"from\\\":${date_from},\\\"to\\\":${date_to}}     ```      转义前：     ```json     {         \"dataspace_id\":\"3939573a-12a0-436f-b0e5-ab2872a1fde9\",         \"pipe_id\":\"9db9d8a6-d9e6-4b32-990e-40f0afe4655d\",         \"query\":\"* | select ack_pps, device_type as type\",         \"sort\":\"desc\",         \"from\": ${date_from},         \"to\": ${date_to}     }     ``` - query_type为`API`时，function传入api method、url、path_params、headers、response_parser（解析API返回值所需，定义label和json_path将返回值解析为二维表格，label为表头，json_path为字段提取路径）   样例：     ```     {\\\"method\\\":\\\"POST\\\",\\\"uri\\\":\\\"/v1/${project_id}/只填写uri/不带域名/xxx\\\",\\\"headers\\\":{\\\"X-Auth-Token\\\":\\\"${project_token}\\\"},\\\"response_parser\\\":{\\\"labels\\\":[\\\"攻击类型\\\",\\\"攻击源\\\",\\\"时间\\\"],\\\"json_path\\\":[\\\"$.data[:].type\\\",\\\"$.data[:].source\\\",\\\"$.data[:].time\\\"]}}     ```      转义前：     ```json     {         \"method\":\"POST\",         \"uri\":\"/v1/${project_id}/只填写uri/不带域名/xxx\",         \"headers\":{             \"X-Auth-Token\": \"${project_token}\"         },         \"response_parser\":{             \"labels\":[                 \"攻击类型\",                 \"攻击源\",                 \"时间\"             ],             \"json_path\":[                 \"$.data[:].type\",                 \"$.data[:].source\",                 \"$.data[:].time\"             ]         }     }     ``` - query_type为`DSL`时，指定index, dsl(转义成字符串), response_parser   样例：     ```     {\\\"index\\\":\\\"index_xxx_*\\\",\\\"dsl\\\":\\\"{\\\\\\\"query\\\\\\\":{\\\\\\\"match_all\\\\\\\":{}}}\\\",\\\"response_parser\\\":{\\\"labels\\\":[\\\"攻击类型\\\",\\\"攻击源\\\",\\\"时间\\\"],\\\"json_path\\\":[\\\"$.data[:].type\\\",\\\"$.data[:].source\\\",\\\"$.data[:].time\\\"]}}     ```      转义前：      ```json     {         \"index\":\"index_xxx_*\",         \"dsl\":\"{\\\"query\\\":{\\\"match_all\\\":{}}}\",         \"response_parser\":{             \"labels\":[                 \"攻击类型\",                 \"攻击源\",                 \"时间\"             ],             \"json_path\":[                 \"$.data[:].type\",                 \"$.data[:].source\",                 \"$.data[:].time\"             ]         }     }     ``` - query_type为`sql`时，指定opendistro sql插件查询json(转义成字符串)   样例：     ```    {\\\"query\\\":\\\"SELECT count(1) as count , msg.DstPort FROM isap_log_nip_ttl* where oct >= TIMESTAMP(\\\\\\\"${date_from}\\\\\\\") and oct <= TIMESTAMP(\\\\\\\"${date_to}\\\\\\\") group by msg.DstPort order by count desc limit 5\\\"}     ```           转义前：      ```json     {         \"query\":\"SELECT count(1) as count , msg.DstPort FROM isap_log_nip_ttl* where oct >= TIMESTAMP(\\\"${date_from}\\\") and oct <= TIMESTAMP(\\\"${date_to}\\\") group by msg.DstPort order by count desc limit 5\"     }     ```
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'metricDimension' => 'metric_dimension',
            'maxQueryRange' => 'max_query_range',
            'dateStart' => 'date_start',
            'dateEnd' => 'date_end',
            'dateFormat' => 'date_format',
            'queryType' => 'query_type',
            'queryFunction' => 'query_function'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * metricDimension  衍生指标结果维度，0维：单个数字，2维：图表或表格，3+维：多标签图表
    * maxQueryRange  指标支持的最大检索范围，单位：天；
    * dateStart  指标查询范围相对起始时间 datemath表达式
    * dateEnd  指标查询范围相对截止时间 datemath表达式
    * dateFormat  时间格式，epoch_millis;epoch_second;yyyy-MM-dd'T'HH:mm:ss.SSSZ
    * queryType  获取指标结果方式，cbsl, api, dsl, sql
    * queryFunction  获取指标结果的方法，转义成字符串, 共四种query方式：CBSL、API、DSL、SQL - query_type为`CBSL`时，function传入dataspace_id，pipe_id，query，sort, from, to   样例：     ```     {\\\"dataspace_id\\\":\\\"3939573a-12a0-436f-b0e5-ab2872a1fde9\\\",\\\"pipe_id\\\":\\\"9db9d8a6-d9e6-4b32-990e-40f0afe4655d\\\",\\\"query\\\":\\\"* | select ack_pps, device_type as type\\\",\\\"sort\\\":\\\"desc\\\",\\\"from\\\":${date_from},\\\"to\\\":${date_to}}     ```      转义前：     ```json     {         \"dataspace_id\":\"3939573a-12a0-436f-b0e5-ab2872a1fde9\",         \"pipe_id\":\"9db9d8a6-d9e6-4b32-990e-40f0afe4655d\",         \"query\":\"* | select ack_pps, device_type as type\",         \"sort\":\"desc\",         \"from\": ${date_from},         \"to\": ${date_to}     }     ``` - query_type为`API`时，function传入api method、url、path_params、headers、response_parser（解析API返回值所需，定义label和json_path将返回值解析为二维表格，label为表头，json_path为字段提取路径）   样例：     ```     {\\\"method\\\":\\\"POST\\\",\\\"uri\\\":\\\"/v1/${project_id}/只填写uri/不带域名/xxx\\\",\\\"headers\\\":{\\\"X-Auth-Token\\\":\\\"${project_token}\\\"},\\\"response_parser\\\":{\\\"labels\\\":[\\\"攻击类型\\\",\\\"攻击源\\\",\\\"时间\\\"],\\\"json_path\\\":[\\\"$.data[:].type\\\",\\\"$.data[:].source\\\",\\\"$.data[:].time\\\"]}}     ```      转义前：     ```json     {         \"method\":\"POST\",         \"uri\":\"/v1/${project_id}/只填写uri/不带域名/xxx\",         \"headers\":{             \"X-Auth-Token\": \"${project_token}\"         },         \"response_parser\":{             \"labels\":[                 \"攻击类型\",                 \"攻击源\",                 \"时间\"             ],             \"json_path\":[                 \"$.data[:].type\",                 \"$.data[:].source\",                 \"$.data[:].time\"             ]         }     }     ``` - query_type为`DSL`时，指定index, dsl(转义成字符串), response_parser   样例：     ```     {\\\"index\\\":\\\"index_xxx_*\\\",\\\"dsl\\\":\\\"{\\\\\\\"query\\\\\\\":{\\\\\\\"match_all\\\\\\\":{}}}\\\",\\\"response_parser\\\":{\\\"labels\\\":[\\\"攻击类型\\\",\\\"攻击源\\\",\\\"时间\\\"],\\\"json_path\\\":[\\\"$.data[:].type\\\",\\\"$.data[:].source\\\",\\\"$.data[:].time\\\"]}}     ```      转义前：      ```json     {         \"index\":\"index_xxx_*\",         \"dsl\":\"{\\\"query\\\":{\\\"match_all\\\":{}}}\",         \"response_parser\":{             \"labels\":[                 \"攻击类型\",                 \"攻击源\",                 \"时间\"             ],             \"json_path\":[                 \"$.data[:].type\",                 \"$.data[:].source\",                 \"$.data[:].time\"             ]         }     }     ``` - query_type为`sql`时，指定opendistro sql插件查询json(转义成字符串)   样例：     ```    {\\\"query\\\":\\\"SELECT count(1) as count , msg.DstPort FROM isap_log_nip_ttl* where oct >= TIMESTAMP(\\\\\\\"${date_from}\\\\\\\") and oct <= TIMESTAMP(\\\\\\\"${date_to}\\\\\\\") group by msg.DstPort order by count desc limit 5\\\"}     ```           转义前：      ```json     {         \"query\":\"SELECT count(1) as count , msg.DstPort FROM isap_log_nip_ttl* where oct >= TIMESTAMP(\\\"${date_from}\\\") and oct <= TIMESTAMP(\\\"${date_to}\\\") group by msg.DstPort order by count desc limit 5\"     }     ```
    *
    * @var string[]
    */
    protected static $setters = [
            'metricDimension' => 'setMetricDimension',
            'maxQueryRange' => 'setMaxQueryRange',
            'dateStart' => 'setDateStart',
            'dateEnd' => 'setDateEnd',
            'dateFormat' => 'setDateFormat',
            'queryType' => 'setQueryType',
            'queryFunction' => 'setQueryFunction'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * metricDimension  衍生指标结果维度，0维：单个数字，2维：图表或表格，3+维：多标签图表
    * maxQueryRange  指标支持的最大检索范围，单位：天；
    * dateStart  指标查询范围相对起始时间 datemath表达式
    * dateEnd  指标查询范围相对截止时间 datemath表达式
    * dateFormat  时间格式，epoch_millis;epoch_second;yyyy-MM-dd'T'HH:mm:ss.SSSZ
    * queryType  获取指标结果方式，cbsl, api, dsl, sql
    * queryFunction  获取指标结果的方法，转义成字符串, 共四种query方式：CBSL、API、DSL、SQL - query_type为`CBSL`时，function传入dataspace_id，pipe_id，query，sort, from, to   样例：     ```     {\\\"dataspace_id\\\":\\\"3939573a-12a0-436f-b0e5-ab2872a1fde9\\\",\\\"pipe_id\\\":\\\"9db9d8a6-d9e6-4b32-990e-40f0afe4655d\\\",\\\"query\\\":\\\"* | select ack_pps, device_type as type\\\",\\\"sort\\\":\\\"desc\\\",\\\"from\\\":${date_from},\\\"to\\\":${date_to}}     ```      转义前：     ```json     {         \"dataspace_id\":\"3939573a-12a0-436f-b0e5-ab2872a1fde9\",         \"pipe_id\":\"9db9d8a6-d9e6-4b32-990e-40f0afe4655d\",         \"query\":\"* | select ack_pps, device_type as type\",         \"sort\":\"desc\",         \"from\": ${date_from},         \"to\": ${date_to}     }     ``` - query_type为`API`时，function传入api method、url、path_params、headers、response_parser（解析API返回值所需，定义label和json_path将返回值解析为二维表格，label为表头，json_path为字段提取路径）   样例：     ```     {\\\"method\\\":\\\"POST\\\",\\\"uri\\\":\\\"/v1/${project_id}/只填写uri/不带域名/xxx\\\",\\\"headers\\\":{\\\"X-Auth-Token\\\":\\\"${project_token}\\\"},\\\"response_parser\\\":{\\\"labels\\\":[\\\"攻击类型\\\",\\\"攻击源\\\",\\\"时间\\\"],\\\"json_path\\\":[\\\"$.data[:].type\\\",\\\"$.data[:].source\\\",\\\"$.data[:].time\\\"]}}     ```      转义前：     ```json     {         \"method\":\"POST\",         \"uri\":\"/v1/${project_id}/只填写uri/不带域名/xxx\",         \"headers\":{             \"X-Auth-Token\": \"${project_token}\"         },         \"response_parser\":{             \"labels\":[                 \"攻击类型\",                 \"攻击源\",                 \"时间\"             ],             \"json_path\":[                 \"$.data[:].type\",                 \"$.data[:].source\",                 \"$.data[:].time\"             ]         }     }     ``` - query_type为`DSL`时，指定index, dsl(转义成字符串), response_parser   样例：     ```     {\\\"index\\\":\\\"index_xxx_*\\\",\\\"dsl\\\":\\\"{\\\\\\\"query\\\\\\\":{\\\\\\\"match_all\\\\\\\":{}}}\\\",\\\"response_parser\\\":{\\\"labels\\\":[\\\"攻击类型\\\",\\\"攻击源\\\",\\\"时间\\\"],\\\"json_path\\\":[\\\"$.data[:].type\\\",\\\"$.data[:].source\\\",\\\"$.data[:].time\\\"]}}     ```      转义前：      ```json     {         \"index\":\"index_xxx_*\",         \"dsl\":\"{\\\"query\\\":{\\\"match_all\\\":{}}}\",         \"response_parser\":{             \"labels\":[                 \"攻击类型\",                 \"攻击源\",                 \"时间\"             ],             \"json_path\":[                 \"$.data[:].type\",                 \"$.data[:].source\",                 \"$.data[:].time\"             ]         }     }     ``` - query_type为`sql`时，指定opendistro sql插件查询json(转义成字符串)   样例：     ```    {\\\"query\\\":\\\"SELECT count(1) as count , msg.DstPort FROM isap_log_nip_ttl* where oct >= TIMESTAMP(\\\\\\\"${date_from}\\\\\\\") and oct <= TIMESTAMP(\\\\\\\"${date_to}\\\\\\\") group by msg.DstPort order by count desc limit 5\\\"}     ```           转义前：      ```json     {         \"query\":\"SELECT count(1) as count , msg.DstPort FROM isap_log_nip_ttl* where oct >= TIMESTAMP(\\\"${date_from}\\\") and oct <= TIMESTAMP(\\\"${date_to}\\\") group by msg.DstPort order by count desc limit 5\"     }     ```
    *
    * @var string[]
    */
    protected static $getters = [
            'metricDimension' => 'getMetricDimension',
            'maxQueryRange' => 'getMaxQueryRange',
            'dateStart' => 'getDateStart',
            'dateEnd' => 'getDateEnd',
            'dateFormat' => 'getDateFormat',
            'queryType' => 'getQueryType',
            'queryFunction' => 'getQueryFunction'
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
    const QUERY_TYPE_CBSL = 'cbsl';
    const QUERY_TYPE_API = 'api';
    const QUERY_TYPE_DSL = 'dsl';
    const QUERY_TYPE_SQL = 'sql';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getQueryTypeAllowableValues()
    {
        return [
            self::QUERY_TYPE_CBSL,
            self::QUERY_TYPE_API,
            self::QUERY_TYPE_DSL,
            self::QUERY_TYPE_SQL,
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
        $this->container['metricDimension'] = isset($data['metricDimension']) ? $data['metricDimension'] : null;
        $this->container['maxQueryRange'] = isset($data['maxQueryRange']) ? $data['maxQueryRange'] : null;
        $this->container['dateStart'] = isset($data['dateStart']) ? $data['dateStart'] : null;
        $this->container['dateEnd'] = isset($data['dateEnd']) ? $data['dateEnd'] : null;
        $this->container['dateFormat'] = isset($data['dateFormat']) ? $data['dateFormat'] : null;
        $this->container['queryType'] = isset($data['queryType']) ? $data['queryType'] : null;
        $this->container['queryFunction'] = isset($data['queryFunction']) ? $data['queryFunction'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['metricDimension'] === null) {
            $invalidProperties[] = "'metricDimension' can't be null";
        }
            if (($this->container['metricDimension'] > 5)) {
                $invalidProperties[] = "invalid value for 'metricDimension', must be smaller than or equal to 5.";
            }
            if (($this->container['metricDimension'] < 0)) {
                $invalidProperties[] = "invalid value for 'metricDimension', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['maxQueryRange']) && ($this->container['maxQueryRange'] > 864000)) {
                $invalidProperties[] = "invalid value for 'maxQueryRange', must be smaller than or equal to 864000.";
            }
            if (!is_null($this->container['maxQueryRange']) && ($this->container['maxQueryRange'] < 0)) {
                $invalidProperties[] = "invalid value for 'maxQueryRange', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['dateStart']) && !preg_match("/^((now)|(20))[+-][0-9]+[yMwdhHms](\/[yMwdhHms]){0,1}$/", $this->container['dateStart'])) {
                $invalidProperties[] = "invalid value for 'dateStart', must be conform to the pattern /^((now)|(20))[+-][0-9]+[yMwdhHms](\/[yMwdhHms]){0,1}$/.";
            }
            if (!is_null($this->container['dateEnd']) && !preg_match("/^((now)|(20))[+-][0-9]+[yMwdhHms](\/[yMwdhHms]){0,1}$/", $this->container['dateEnd'])) {
                $invalidProperties[] = "invalid value for 'dateEnd', must be conform to the pattern /^((now)|(20))[+-][0-9]+[yMwdhHms](\/[yMwdhHms]){0,1}$/.";
            }
            if (!is_null($this->container['dateFormat']) && (mb_strlen($this->container['dateFormat']) > 128)) {
                $invalidProperties[] = "invalid value for 'dateFormat', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['dateFormat']) && (mb_strlen($this->container['dateFormat']) < 4)) {
                $invalidProperties[] = "invalid value for 'dateFormat', the character length must be bigger than or equal to 4.";
            }
        if ($this->container['queryType'] === null) {
            $invalidProperties[] = "'queryType' can't be null";
        }
            $allowedValues = $this->getQueryTypeAllowableValues();
                if (!is_null($this->container['queryType']) && !in_array($this->container['queryType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'queryType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['queryFunction'] === null) {
            $invalidProperties[] = "'queryFunction' can't be null";
        }
            if ((mb_strlen($this->container['queryFunction']) > 65535)) {
                $invalidProperties[] = "invalid value for 'queryFunction', the character length must be smaller than or equal to 65535.";
            }
            if ((mb_strlen($this->container['queryFunction']) < 1)) {
                $invalidProperties[] = "invalid value for 'queryFunction', the character length must be bigger than or equal to 1.";
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
    * Gets metricDimension
    *  衍生指标结果维度，0维：单个数字，2维：图表或表格，3+维：多标签图表
    *
    * @return int
    */
    public function getMetricDimension()
    {
        return $this->container['metricDimension'];
    }

    /**
    * Sets metricDimension
    *
    * @param int $metricDimension 衍生指标结果维度，0维：单个数字，2维：图表或表格，3+维：多标签图表
    *
    * @return $this
    */
    public function setMetricDimension($metricDimension)
    {
        $this->container['metricDimension'] = $metricDimension;
        return $this;
    }

    /**
    * Gets maxQueryRange
    *  指标支持的最大检索范围，单位：天；
    *
    * @return int|null
    */
    public function getMaxQueryRange()
    {
        return $this->container['maxQueryRange'];
    }

    /**
    * Sets maxQueryRange
    *
    * @param int|null $maxQueryRange 指标支持的最大检索范围，单位：天；
    *
    * @return $this
    */
    public function setMaxQueryRange($maxQueryRange)
    {
        $this->container['maxQueryRange'] = $maxQueryRange;
        return $this;
    }

    /**
    * Gets dateStart
    *  指标查询范围相对起始时间 datemath表达式
    *
    * @return string|null
    */
    public function getDateStart()
    {
        return $this->container['dateStart'];
    }

    /**
    * Sets dateStart
    *
    * @param string|null $dateStart 指标查询范围相对起始时间 datemath表达式
    *
    * @return $this
    */
    public function setDateStart($dateStart)
    {
        $this->container['dateStart'] = $dateStart;
        return $this;
    }

    /**
    * Gets dateEnd
    *  指标查询范围相对截止时间 datemath表达式
    *
    * @return string|null
    */
    public function getDateEnd()
    {
        return $this->container['dateEnd'];
    }

    /**
    * Sets dateEnd
    *
    * @param string|null $dateEnd 指标查询范围相对截止时间 datemath表达式
    *
    * @return $this
    */
    public function setDateEnd($dateEnd)
    {
        $this->container['dateEnd'] = $dateEnd;
        return $this;
    }

    /**
    * Gets dateFormat
    *  时间格式，epoch_millis;epoch_second;yyyy-MM-dd'T'HH:mm:ss.SSSZ
    *
    * @return string|null
    */
    public function getDateFormat()
    {
        return $this->container['dateFormat'];
    }

    /**
    * Sets dateFormat
    *
    * @param string|null $dateFormat 时间格式，epoch_millis;epoch_second;yyyy-MM-dd'T'HH:mm:ss.SSSZ
    *
    * @return $this
    */
    public function setDateFormat($dateFormat)
    {
        $this->container['dateFormat'] = $dateFormat;
        return $this;
    }

    /**
    * Gets queryType
    *  获取指标结果方式，cbsl, api, dsl, sql
    *
    * @return string
    */
    public function getQueryType()
    {
        return $this->container['queryType'];
    }

    /**
    * Sets queryType
    *
    * @param string $queryType 获取指标结果方式，cbsl, api, dsl, sql
    *
    * @return $this
    */
    public function setQueryType($queryType)
    {
        $this->container['queryType'] = $queryType;
        return $this;
    }

    /**
    * Gets queryFunction
    *  获取指标结果的方法，转义成字符串, 共四种query方式：CBSL、API、DSL、SQL - query_type为`CBSL`时，function传入dataspace_id，pipe_id，query，sort, from, to   样例：     ```     {\\\"dataspace_id\\\":\\\"3939573a-12a0-436f-b0e5-ab2872a1fde9\\\",\\\"pipe_id\\\":\\\"9db9d8a6-d9e6-4b32-990e-40f0afe4655d\\\",\\\"query\\\":\\\"* | select ack_pps, device_type as type\\\",\\\"sort\\\":\\\"desc\\\",\\\"from\\\":${date_from},\\\"to\\\":${date_to}}     ```      转义前：     ```json     {         \"dataspace_id\":\"3939573a-12a0-436f-b0e5-ab2872a1fde9\",         \"pipe_id\":\"9db9d8a6-d9e6-4b32-990e-40f0afe4655d\",         \"query\":\"* | select ack_pps, device_type as type\",         \"sort\":\"desc\",         \"from\": ${date_from},         \"to\": ${date_to}     }     ``` - query_type为`API`时，function传入api method、url、path_params、headers、response_parser（解析API返回值所需，定义label和json_path将返回值解析为二维表格，label为表头，json_path为字段提取路径）   样例：     ```     {\\\"method\\\":\\\"POST\\\",\\\"uri\\\":\\\"/v1/${project_id}/只填写uri/不带域名/xxx\\\",\\\"headers\\\":{\\\"X-Auth-Token\\\":\\\"${project_token}\\\"},\\\"response_parser\\\":{\\\"labels\\\":[\\\"攻击类型\\\",\\\"攻击源\\\",\\\"时间\\\"],\\\"json_path\\\":[\\\"$.data[:].type\\\",\\\"$.data[:].source\\\",\\\"$.data[:].time\\\"]}}     ```      转义前：     ```json     {         \"method\":\"POST\",         \"uri\":\"/v1/${project_id}/只填写uri/不带域名/xxx\",         \"headers\":{             \"X-Auth-Token\": \"${project_token}\"         },         \"response_parser\":{             \"labels\":[                 \"攻击类型\",                 \"攻击源\",                 \"时间\"             ],             \"json_path\":[                 \"$.data[:].type\",                 \"$.data[:].source\",                 \"$.data[:].time\"             ]         }     }     ``` - query_type为`DSL`时，指定index, dsl(转义成字符串), response_parser   样例：     ```     {\\\"index\\\":\\\"index_xxx_*\\\",\\\"dsl\\\":\\\"{\\\\\\\"query\\\\\\\":{\\\\\\\"match_all\\\\\\\":{}}}\\\",\\\"response_parser\\\":{\\\"labels\\\":[\\\"攻击类型\\\",\\\"攻击源\\\",\\\"时间\\\"],\\\"json_path\\\":[\\\"$.data[:].type\\\",\\\"$.data[:].source\\\",\\\"$.data[:].time\\\"]}}     ```      转义前：      ```json     {         \"index\":\"index_xxx_*\",         \"dsl\":\"{\\\"query\\\":{\\\"match_all\\\":{}}}\",         \"response_parser\":{             \"labels\":[                 \"攻击类型\",                 \"攻击源\",                 \"时间\"             ],             \"json_path\":[                 \"$.data[:].type\",                 \"$.data[:].source\",                 \"$.data[:].time\"             ]         }     }     ``` - query_type为`sql`时，指定opendistro sql插件查询json(转义成字符串)   样例：     ```    {\\\"query\\\":\\\"SELECT count(1) as count , msg.DstPort FROM isap_log_nip_ttl* where oct >= TIMESTAMP(\\\\\\\"${date_from}\\\\\\\") and oct <= TIMESTAMP(\\\\\\\"${date_to}\\\\\\\") group by msg.DstPort order by count desc limit 5\\\"}     ```           转义前：      ```json     {         \"query\":\"SELECT count(1) as count , msg.DstPort FROM isap_log_nip_ttl* where oct >= TIMESTAMP(\\\"${date_from}\\\") and oct <= TIMESTAMP(\\\"${date_to}\\\") group by msg.DstPort order by count desc limit 5\"     }     ```
    *
    * @return string
    */
    public function getQueryFunction()
    {
        return $this->container['queryFunction'];
    }

    /**
    * Sets queryFunction
    *
    * @param string $queryFunction 获取指标结果的方法，转义成字符串, 共四种query方式：CBSL、API、DSL、SQL - query_type为`CBSL`时，function传入dataspace_id，pipe_id，query，sort, from, to   样例：     ```     {\\\"dataspace_id\\\":\\\"3939573a-12a0-436f-b0e5-ab2872a1fde9\\\",\\\"pipe_id\\\":\\\"9db9d8a6-d9e6-4b32-990e-40f0afe4655d\\\",\\\"query\\\":\\\"* | select ack_pps, device_type as type\\\",\\\"sort\\\":\\\"desc\\\",\\\"from\\\":${date_from},\\\"to\\\":${date_to}}     ```      转义前：     ```json     {         \"dataspace_id\":\"3939573a-12a0-436f-b0e5-ab2872a1fde9\",         \"pipe_id\":\"9db9d8a6-d9e6-4b32-990e-40f0afe4655d\",         \"query\":\"* | select ack_pps, device_type as type\",         \"sort\":\"desc\",         \"from\": ${date_from},         \"to\": ${date_to}     }     ``` - query_type为`API`时，function传入api method、url、path_params、headers、response_parser（解析API返回值所需，定义label和json_path将返回值解析为二维表格，label为表头，json_path为字段提取路径）   样例：     ```     {\\\"method\\\":\\\"POST\\\",\\\"uri\\\":\\\"/v1/${project_id}/只填写uri/不带域名/xxx\\\",\\\"headers\\\":{\\\"X-Auth-Token\\\":\\\"${project_token}\\\"},\\\"response_parser\\\":{\\\"labels\\\":[\\\"攻击类型\\\",\\\"攻击源\\\",\\\"时间\\\"],\\\"json_path\\\":[\\\"$.data[:].type\\\",\\\"$.data[:].source\\\",\\\"$.data[:].time\\\"]}}     ```      转义前：     ```json     {         \"method\":\"POST\",         \"uri\":\"/v1/${project_id}/只填写uri/不带域名/xxx\",         \"headers\":{             \"X-Auth-Token\": \"${project_token}\"         },         \"response_parser\":{             \"labels\":[                 \"攻击类型\",                 \"攻击源\",                 \"时间\"             ],             \"json_path\":[                 \"$.data[:].type\",                 \"$.data[:].source\",                 \"$.data[:].time\"             ]         }     }     ``` - query_type为`DSL`时，指定index, dsl(转义成字符串), response_parser   样例：     ```     {\\\"index\\\":\\\"index_xxx_*\\\",\\\"dsl\\\":\\\"{\\\\\\\"query\\\\\\\":{\\\\\\\"match_all\\\\\\\":{}}}\\\",\\\"response_parser\\\":{\\\"labels\\\":[\\\"攻击类型\\\",\\\"攻击源\\\",\\\"时间\\\"],\\\"json_path\\\":[\\\"$.data[:].type\\\",\\\"$.data[:].source\\\",\\\"$.data[:].time\\\"]}}     ```      转义前：      ```json     {         \"index\":\"index_xxx_*\",         \"dsl\":\"{\\\"query\\\":{\\\"match_all\\\":{}}}\",         \"response_parser\":{             \"labels\":[                 \"攻击类型\",                 \"攻击源\",                 \"时间\"             ],             \"json_path\":[                 \"$.data[:].type\",                 \"$.data[:].source\",                 \"$.data[:].time\"             ]         }     }     ``` - query_type为`sql`时，指定opendistro sql插件查询json(转义成字符串)   样例：     ```    {\\\"query\\\":\\\"SELECT count(1) as count , msg.DstPort FROM isap_log_nip_ttl* where oct >= TIMESTAMP(\\\\\\\"${date_from}\\\\\\\") and oct <= TIMESTAMP(\\\\\\\"${date_to}\\\\\\\") group by msg.DstPort order by count desc limit 5\\\"}     ```           转义前：      ```json     {         \"query\":\"SELECT count(1) as count , msg.DstPort FROM isap_log_nip_ttl* where oct >= TIMESTAMP(\\\"${date_from}\\\") and oct <= TIMESTAMP(\\\"${date_to}\\\") group by msg.DstPort order by count desc limit 5\"     }     ```
    *
    * @return $this
    */
    public function setQueryFunction($queryFunction)
    {
        $this->container['queryFunction'] = $queryFunction;
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

