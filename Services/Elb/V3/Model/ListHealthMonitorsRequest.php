<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListHealthMonitorsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListHealthMonitorsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * marker  **参数解释**：上一页最后一条记录的ID。  **约束限制**： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。  **取值范围**：不涉及  **默认取值**：不涉及
    * limit  **参数解释**：每页返回的个数。  **约束限制**：不涉及  **取值范围**：0-2000  **默认取值**：2000
    * pageReverse  **参数解释**：是否反向查询。  **约束限制**： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。  **取值范围**： - true：查询上一页。 - false：查询下一页。  **默认取值**：false
    * id  **参数解释**：健康检查ID。 支持多值查询，查询条件格式：*id=xxx&id=xxx****。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * monitorPort  **参数解释**：健康检查端口号。 支持多值查询，查询条件格式：***monitor_port=xxx&monitor_port=xxx***。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * domainName  **参数解释**：发送健康检查请求的域名。 支持多值查询，查询条件格式：**domain_name=xxx&domain_name=xxx**。  **约束限制**：不涉及  **取值范围**：以数字或字母开头，只能包含数字、字母、’-’、’.’。  **默认取值**：不涉及
    * name  **参数解释**：健康检查名称。 支持多值查询，查询条件格式：*name=xxx&name=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * delay  **参数解释**：健康检查间隔。 支持多值查询，查询条件格式：*delay=xxx&delay=xxx*。  **约束限制**：不涉及  **取值范围**：1-50，单位：秒。  **默认取值**：不涉及
    * maxRetries  **参数解释**：健康检查连续成功多少次后，将后端服务器的健康检查状态由OFFLINE判定为ONLINE。 支持多值查询，查询条件格式：*******max_retries=xxx&max_retries=xxx*******。  **约束限制**：不涉及  **取值范围**：1-10  **默认取值**：不涉及
    * adminStateUp  **参数解释**：健康检查的管理状态。  **约束限制**：不涉及  **取值范围**： - true：表示开启健康检查。 - false表示关闭健康检查。  **默认取值**：不涉及
    * maxRetriesDown  **参数解释**：健康检查连续失败多少次后，将后端服务器的健康检查状态由ONLINE判定为OFFLINE。 支持多值查询，查询条件格式：******max_retries_down=xxx&max_retries_down=xxx******。  **约束限制**：不涉及  **取值范围**：1-10  **默认取值**：不涉及
    * timeout  **参数解释**：一次健康检查请求的超时时间。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * type  **参数解释**：健康检查请求协议。 支持多值查询，查询条件格式：*****type=xxx&type=xxx*****。  **约束限制**：不涉及  **取值范围**：TCP、UDP_CONNECT、HTTP、HTTPS、TLS、GRPC[和GRPCS](tag:not_open)。  **默认取值**：不涉及
    * expectedCodes  **参数解释**：期望响应状态码。 支持多值查询，查询条件格式：****expected_codes=xxx&expected_codes=xxx****。  **约束限制**：不涉及  **取值范围**： - 单值：单个返回码，例如200。 - 列表：多个特定返回码，例如200，202。 - 区间：一个返回码区间，例如200-204。  **默认取值**：不涉及
    * urlPath  **参数解释**：健康检查测试member健康时发送的http请求路径。 支持多值查询，查询条件格式：***url_path=xxx&url_path=xxx***。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * httpMethod  **参数解释**：HTTP请求方法。 支持多值查询，查询条件格式：**http_method=xxx&http_method=xxx**。  **约束限制**：不涉及  **取值范围**：GET、HEAD、POST  **默认取值**：不涉及
    * enterpriseProjectId  **参数解释**：资源所属的企业项目ID。 支持多值查询，查询条件格式：*enterprise_project_id=xxx&enterprise_project_id=xxx*。  **约束限制**： - 如果enterprise_project_id不传值，默认查询所有企业项目下的资源，鉴权按照细粒度权限鉴权，必须在用户组下分配elb:healthmonitors:list权限。 - 如果enterprise_project_id传值，鉴权按照企业项目权限鉴权，分为传入具体eps_id和all_granted_eps两种场景，前者查询指定eps_id的eps下的资源，后者查询的是所有有list权限的eps下的资源。  **取值范围**：不涉及  **默认取值**：不涉及  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'marker' => 'string',
            'limit' => 'int',
            'pageReverse' => 'bool',
            'id' => 'string[]',
            'monitorPort' => 'int[]',
            'domainName' => 'string[]',
            'name' => 'string[]',
            'delay' => 'int[]',
            'maxRetries' => 'int[]',
            'adminStateUp' => 'bool',
            'maxRetriesDown' => 'int[]',
            'timeout' => 'int',
            'type' => 'string[]',
            'expectedCodes' => 'string[]',
            'urlPath' => 'string[]',
            'httpMethod' => 'string[]',
            'enterpriseProjectId' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * marker  **参数解释**：上一页最后一条记录的ID。  **约束限制**： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。  **取值范围**：不涉及  **默认取值**：不涉及
    * limit  **参数解释**：每页返回的个数。  **约束限制**：不涉及  **取值范围**：0-2000  **默认取值**：2000
    * pageReverse  **参数解释**：是否反向查询。  **约束限制**： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。  **取值范围**： - true：查询上一页。 - false：查询下一页。  **默认取值**：false
    * id  **参数解释**：健康检查ID。 支持多值查询，查询条件格式：*id=xxx&id=xxx****。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * monitorPort  **参数解释**：健康检查端口号。 支持多值查询，查询条件格式：***monitor_port=xxx&monitor_port=xxx***。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * domainName  **参数解释**：发送健康检查请求的域名。 支持多值查询，查询条件格式：**domain_name=xxx&domain_name=xxx**。  **约束限制**：不涉及  **取值范围**：以数字或字母开头，只能包含数字、字母、’-’、’.’。  **默认取值**：不涉及
    * name  **参数解释**：健康检查名称。 支持多值查询，查询条件格式：*name=xxx&name=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * delay  **参数解释**：健康检查间隔。 支持多值查询，查询条件格式：*delay=xxx&delay=xxx*。  **约束限制**：不涉及  **取值范围**：1-50，单位：秒。  **默认取值**：不涉及
    * maxRetries  **参数解释**：健康检查连续成功多少次后，将后端服务器的健康检查状态由OFFLINE判定为ONLINE。 支持多值查询，查询条件格式：*******max_retries=xxx&max_retries=xxx*******。  **约束限制**：不涉及  **取值范围**：1-10  **默认取值**：不涉及
    * adminStateUp  **参数解释**：健康检查的管理状态。  **约束限制**：不涉及  **取值范围**： - true：表示开启健康检查。 - false表示关闭健康检查。  **默认取值**：不涉及
    * maxRetriesDown  **参数解释**：健康检查连续失败多少次后，将后端服务器的健康检查状态由ONLINE判定为OFFLINE。 支持多值查询，查询条件格式：******max_retries_down=xxx&max_retries_down=xxx******。  **约束限制**：不涉及  **取值范围**：1-10  **默认取值**：不涉及
    * timeout  **参数解释**：一次健康检查请求的超时时间。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * type  **参数解释**：健康检查请求协议。 支持多值查询，查询条件格式：*****type=xxx&type=xxx*****。  **约束限制**：不涉及  **取值范围**：TCP、UDP_CONNECT、HTTP、HTTPS、TLS、GRPC[和GRPCS](tag:not_open)。  **默认取值**：不涉及
    * expectedCodes  **参数解释**：期望响应状态码。 支持多值查询，查询条件格式：****expected_codes=xxx&expected_codes=xxx****。  **约束限制**：不涉及  **取值范围**： - 单值：单个返回码，例如200。 - 列表：多个特定返回码，例如200，202。 - 区间：一个返回码区间，例如200-204。  **默认取值**：不涉及
    * urlPath  **参数解释**：健康检查测试member健康时发送的http请求路径。 支持多值查询，查询条件格式：***url_path=xxx&url_path=xxx***。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * httpMethod  **参数解释**：HTTP请求方法。 支持多值查询，查询条件格式：**http_method=xxx&http_method=xxx**。  **约束限制**：不涉及  **取值范围**：GET、HEAD、POST  **默认取值**：不涉及
    * enterpriseProjectId  **参数解释**：资源所属的企业项目ID。 支持多值查询，查询条件格式：*enterprise_project_id=xxx&enterprise_project_id=xxx*。  **约束限制**： - 如果enterprise_project_id不传值，默认查询所有企业项目下的资源，鉴权按照细粒度权限鉴权，必须在用户组下分配elb:healthmonitors:list权限。 - 如果enterprise_project_id传值，鉴权按照企业项目权限鉴权，分为传入具体eps_id和all_granted_eps两种场景，前者查询指定eps_id的eps下的资源，后者查询的是所有有list权限的eps下的资源。  **取值范围**：不涉及  **默认取值**：不涉及  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'marker' => null,
        'limit' => 'int32',
        'pageReverse' => null,
        'id' => null,
        'monitorPort' => 'int32',
        'domainName' => null,
        'name' => null,
        'delay' => 'int32',
        'maxRetries' => 'int32',
        'adminStateUp' => null,
        'maxRetriesDown' => 'int32',
        'timeout' => 'int32',
        'type' => null,
        'expectedCodes' => null,
        'urlPath' => null,
        'httpMethod' => null,
        'enterpriseProjectId' => null
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
    * marker  **参数解释**：上一页最后一条记录的ID。  **约束限制**： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。  **取值范围**：不涉及  **默认取值**：不涉及
    * limit  **参数解释**：每页返回的个数。  **约束限制**：不涉及  **取值范围**：0-2000  **默认取值**：2000
    * pageReverse  **参数解释**：是否反向查询。  **约束限制**： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。  **取值范围**： - true：查询上一页。 - false：查询下一页。  **默认取值**：false
    * id  **参数解释**：健康检查ID。 支持多值查询，查询条件格式：*id=xxx&id=xxx****。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * monitorPort  **参数解释**：健康检查端口号。 支持多值查询，查询条件格式：***monitor_port=xxx&monitor_port=xxx***。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * domainName  **参数解释**：发送健康检查请求的域名。 支持多值查询，查询条件格式：**domain_name=xxx&domain_name=xxx**。  **约束限制**：不涉及  **取值范围**：以数字或字母开头，只能包含数字、字母、’-’、’.’。  **默认取值**：不涉及
    * name  **参数解释**：健康检查名称。 支持多值查询，查询条件格式：*name=xxx&name=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * delay  **参数解释**：健康检查间隔。 支持多值查询，查询条件格式：*delay=xxx&delay=xxx*。  **约束限制**：不涉及  **取值范围**：1-50，单位：秒。  **默认取值**：不涉及
    * maxRetries  **参数解释**：健康检查连续成功多少次后，将后端服务器的健康检查状态由OFFLINE判定为ONLINE。 支持多值查询，查询条件格式：*******max_retries=xxx&max_retries=xxx*******。  **约束限制**：不涉及  **取值范围**：1-10  **默认取值**：不涉及
    * adminStateUp  **参数解释**：健康检查的管理状态。  **约束限制**：不涉及  **取值范围**： - true：表示开启健康检查。 - false表示关闭健康检查。  **默认取值**：不涉及
    * maxRetriesDown  **参数解释**：健康检查连续失败多少次后，将后端服务器的健康检查状态由ONLINE判定为OFFLINE。 支持多值查询，查询条件格式：******max_retries_down=xxx&max_retries_down=xxx******。  **约束限制**：不涉及  **取值范围**：1-10  **默认取值**：不涉及
    * timeout  **参数解释**：一次健康检查请求的超时时间。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * type  **参数解释**：健康检查请求协议。 支持多值查询，查询条件格式：*****type=xxx&type=xxx*****。  **约束限制**：不涉及  **取值范围**：TCP、UDP_CONNECT、HTTP、HTTPS、TLS、GRPC[和GRPCS](tag:not_open)。  **默认取值**：不涉及
    * expectedCodes  **参数解释**：期望响应状态码。 支持多值查询，查询条件格式：****expected_codes=xxx&expected_codes=xxx****。  **约束限制**：不涉及  **取值范围**： - 单值：单个返回码，例如200。 - 列表：多个特定返回码，例如200，202。 - 区间：一个返回码区间，例如200-204。  **默认取值**：不涉及
    * urlPath  **参数解释**：健康检查测试member健康时发送的http请求路径。 支持多值查询，查询条件格式：***url_path=xxx&url_path=xxx***。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * httpMethod  **参数解释**：HTTP请求方法。 支持多值查询，查询条件格式：**http_method=xxx&http_method=xxx**。  **约束限制**：不涉及  **取值范围**：GET、HEAD、POST  **默认取值**：不涉及
    * enterpriseProjectId  **参数解释**：资源所属的企业项目ID。 支持多值查询，查询条件格式：*enterprise_project_id=xxx&enterprise_project_id=xxx*。  **约束限制**： - 如果enterprise_project_id不传值，默认查询所有企业项目下的资源，鉴权按照细粒度权限鉴权，必须在用户组下分配elb:healthmonitors:list权限。 - 如果enterprise_project_id传值，鉴权按照企业项目权限鉴权，分为传入具体eps_id和all_granted_eps两种场景，前者查询指定eps_id的eps下的资源，后者查询的是所有有list权限的eps下的资源。  **取值范围**：不涉及  **默认取值**：不涉及  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'marker' => 'marker',
            'limit' => 'limit',
            'pageReverse' => 'page_reverse',
            'id' => 'id',
            'monitorPort' => 'monitor_port',
            'domainName' => 'domain_name',
            'name' => 'name',
            'delay' => 'delay',
            'maxRetries' => 'max_retries',
            'adminStateUp' => 'admin_state_up',
            'maxRetriesDown' => 'max_retries_down',
            'timeout' => 'timeout',
            'type' => 'type',
            'expectedCodes' => 'expected_codes',
            'urlPath' => 'url_path',
            'httpMethod' => 'http_method',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * marker  **参数解释**：上一页最后一条记录的ID。  **约束限制**： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。  **取值范围**：不涉及  **默认取值**：不涉及
    * limit  **参数解释**：每页返回的个数。  **约束限制**：不涉及  **取值范围**：0-2000  **默认取值**：2000
    * pageReverse  **参数解释**：是否反向查询。  **约束限制**： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。  **取值范围**： - true：查询上一页。 - false：查询下一页。  **默认取值**：false
    * id  **参数解释**：健康检查ID。 支持多值查询，查询条件格式：*id=xxx&id=xxx****。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * monitorPort  **参数解释**：健康检查端口号。 支持多值查询，查询条件格式：***monitor_port=xxx&monitor_port=xxx***。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * domainName  **参数解释**：发送健康检查请求的域名。 支持多值查询，查询条件格式：**domain_name=xxx&domain_name=xxx**。  **约束限制**：不涉及  **取值范围**：以数字或字母开头，只能包含数字、字母、’-’、’.’。  **默认取值**：不涉及
    * name  **参数解释**：健康检查名称。 支持多值查询，查询条件格式：*name=xxx&name=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * delay  **参数解释**：健康检查间隔。 支持多值查询，查询条件格式：*delay=xxx&delay=xxx*。  **约束限制**：不涉及  **取值范围**：1-50，单位：秒。  **默认取值**：不涉及
    * maxRetries  **参数解释**：健康检查连续成功多少次后，将后端服务器的健康检查状态由OFFLINE判定为ONLINE。 支持多值查询，查询条件格式：*******max_retries=xxx&max_retries=xxx*******。  **约束限制**：不涉及  **取值范围**：1-10  **默认取值**：不涉及
    * adminStateUp  **参数解释**：健康检查的管理状态。  **约束限制**：不涉及  **取值范围**： - true：表示开启健康检查。 - false表示关闭健康检查。  **默认取值**：不涉及
    * maxRetriesDown  **参数解释**：健康检查连续失败多少次后，将后端服务器的健康检查状态由ONLINE判定为OFFLINE。 支持多值查询，查询条件格式：******max_retries_down=xxx&max_retries_down=xxx******。  **约束限制**：不涉及  **取值范围**：1-10  **默认取值**：不涉及
    * timeout  **参数解释**：一次健康检查请求的超时时间。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * type  **参数解释**：健康检查请求协议。 支持多值查询，查询条件格式：*****type=xxx&type=xxx*****。  **约束限制**：不涉及  **取值范围**：TCP、UDP_CONNECT、HTTP、HTTPS、TLS、GRPC[和GRPCS](tag:not_open)。  **默认取值**：不涉及
    * expectedCodes  **参数解释**：期望响应状态码。 支持多值查询，查询条件格式：****expected_codes=xxx&expected_codes=xxx****。  **约束限制**：不涉及  **取值范围**： - 单值：单个返回码，例如200。 - 列表：多个特定返回码，例如200，202。 - 区间：一个返回码区间，例如200-204。  **默认取值**：不涉及
    * urlPath  **参数解释**：健康检查测试member健康时发送的http请求路径。 支持多值查询，查询条件格式：***url_path=xxx&url_path=xxx***。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * httpMethod  **参数解释**：HTTP请求方法。 支持多值查询，查询条件格式：**http_method=xxx&http_method=xxx**。  **约束限制**：不涉及  **取值范围**：GET、HEAD、POST  **默认取值**：不涉及
    * enterpriseProjectId  **参数解释**：资源所属的企业项目ID。 支持多值查询，查询条件格式：*enterprise_project_id=xxx&enterprise_project_id=xxx*。  **约束限制**： - 如果enterprise_project_id不传值，默认查询所有企业项目下的资源，鉴权按照细粒度权限鉴权，必须在用户组下分配elb:healthmonitors:list权限。 - 如果enterprise_project_id传值，鉴权按照企业项目权限鉴权，分为传入具体eps_id和all_granted_eps两种场景，前者查询指定eps_id的eps下的资源，后者查询的是所有有list权限的eps下的资源。  **取值范围**：不涉及  **默认取值**：不涉及  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    *
    * @var string[]
    */
    protected static $setters = [
            'marker' => 'setMarker',
            'limit' => 'setLimit',
            'pageReverse' => 'setPageReverse',
            'id' => 'setId',
            'monitorPort' => 'setMonitorPort',
            'domainName' => 'setDomainName',
            'name' => 'setName',
            'delay' => 'setDelay',
            'maxRetries' => 'setMaxRetries',
            'adminStateUp' => 'setAdminStateUp',
            'maxRetriesDown' => 'setMaxRetriesDown',
            'timeout' => 'setTimeout',
            'type' => 'setType',
            'expectedCodes' => 'setExpectedCodes',
            'urlPath' => 'setUrlPath',
            'httpMethod' => 'setHttpMethod',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * marker  **参数解释**：上一页最后一条记录的ID。  **约束限制**： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。  **取值范围**：不涉及  **默认取值**：不涉及
    * limit  **参数解释**：每页返回的个数。  **约束限制**：不涉及  **取值范围**：0-2000  **默认取值**：2000
    * pageReverse  **参数解释**：是否反向查询。  **约束限制**： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。  **取值范围**： - true：查询上一页。 - false：查询下一页。  **默认取值**：false
    * id  **参数解释**：健康检查ID。 支持多值查询，查询条件格式：*id=xxx&id=xxx****。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * monitorPort  **参数解释**：健康检查端口号。 支持多值查询，查询条件格式：***monitor_port=xxx&monitor_port=xxx***。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * domainName  **参数解释**：发送健康检查请求的域名。 支持多值查询，查询条件格式：**domain_name=xxx&domain_name=xxx**。  **约束限制**：不涉及  **取值范围**：以数字或字母开头，只能包含数字、字母、’-’、’.’。  **默认取值**：不涉及
    * name  **参数解释**：健康检查名称。 支持多值查询，查询条件格式：*name=xxx&name=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * delay  **参数解释**：健康检查间隔。 支持多值查询，查询条件格式：*delay=xxx&delay=xxx*。  **约束限制**：不涉及  **取值范围**：1-50，单位：秒。  **默认取值**：不涉及
    * maxRetries  **参数解释**：健康检查连续成功多少次后，将后端服务器的健康检查状态由OFFLINE判定为ONLINE。 支持多值查询，查询条件格式：*******max_retries=xxx&max_retries=xxx*******。  **约束限制**：不涉及  **取值范围**：1-10  **默认取值**：不涉及
    * adminStateUp  **参数解释**：健康检查的管理状态。  **约束限制**：不涉及  **取值范围**： - true：表示开启健康检查。 - false表示关闭健康检查。  **默认取值**：不涉及
    * maxRetriesDown  **参数解释**：健康检查连续失败多少次后，将后端服务器的健康检查状态由ONLINE判定为OFFLINE。 支持多值查询，查询条件格式：******max_retries_down=xxx&max_retries_down=xxx******。  **约束限制**：不涉及  **取值范围**：1-10  **默认取值**：不涉及
    * timeout  **参数解释**：一次健康检查请求的超时时间。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * type  **参数解释**：健康检查请求协议。 支持多值查询，查询条件格式：*****type=xxx&type=xxx*****。  **约束限制**：不涉及  **取值范围**：TCP、UDP_CONNECT、HTTP、HTTPS、TLS、GRPC[和GRPCS](tag:not_open)。  **默认取值**：不涉及
    * expectedCodes  **参数解释**：期望响应状态码。 支持多值查询，查询条件格式：****expected_codes=xxx&expected_codes=xxx****。  **约束限制**：不涉及  **取值范围**： - 单值：单个返回码，例如200。 - 列表：多个特定返回码，例如200，202。 - 区间：一个返回码区间，例如200-204。  **默认取值**：不涉及
    * urlPath  **参数解释**：健康检查测试member健康时发送的http请求路径。 支持多值查询，查询条件格式：***url_path=xxx&url_path=xxx***。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * httpMethod  **参数解释**：HTTP请求方法。 支持多值查询，查询条件格式：**http_method=xxx&http_method=xxx**。  **约束限制**：不涉及  **取值范围**：GET、HEAD、POST  **默认取值**：不涉及
    * enterpriseProjectId  **参数解释**：资源所属的企业项目ID。 支持多值查询，查询条件格式：*enterprise_project_id=xxx&enterprise_project_id=xxx*。  **约束限制**： - 如果enterprise_project_id不传值，默认查询所有企业项目下的资源，鉴权按照细粒度权限鉴权，必须在用户组下分配elb:healthmonitors:list权限。 - 如果enterprise_project_id传值，鉴权按照企业项目权限鉴权，分为传入具体eps_id和all_granted_eps两种场景，前者查询指定eps_id的eps下的资源，后者查询的是所有有list权限的eps下的资源。  **取值范围**：不涉及  **默认取值**：不涉及  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    *
    * @var string[]
    */
    protected static $getters = [
            'marker' => 'getMarker',
            'limit' => 'getLimit',
            'pageReverse' => 'getPageReverse',
            'id' => 'getId',
            'monitorPort' => 'getMonitorPort',
            'domainName' => 'getDomainName',
            'name' => 'getName',
            'delay' => 'getDelay',
            'maxRetries' => 'getMaxRetries',
            'adminStateUp' => 'getAdminStateUp',
            'maxRetriesDown' => 'getMaxRetriesDown',
            'timeout' => 'getTimeout',
            'type' => 'getType',
            'expectedCodes' => 'getExpectedCodes',
            'urlPath' => 'getUrlPath',
            'httpMethod' => 'getHttpMethod',
            'enterpriseProjectId' => 'getEnterpriseProjectId'
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
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['pageReverse'] = isset($data['pageReverse']) ? $data['pageReverse'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['monitorPort'] = isset($data['monitorPort']) ? $data['monitorPort'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['delay'] = isset($data['delay']) ? $data['delay'] : null;
        $this->container['maxRetries'] = isset($data['maxRetries']) ? $data['maxRetries'] : null;
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['maxRetriesDown'] = isset($data['maxRetriesDown']) ? $data['maxRetriesDown'] : null;
        $this->container['timeout'] = isset($data['timeout']) ? $data['timeout'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['expectedCodes'] = isset($data['expectedCodes']) ? $data['expectedCodes'] : null;
        $this->container['urlPath'] = isset($data['urlPath']) ? $data['urlPath'] : null;
        $this->container['httpMethod'] = isset($data['httpMethod']) ? $data['httpMethod'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 2000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
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
    * Gets marker
    *  **参数解释**：上一页最后一条记录的ID。  **约束限制**： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker **参数解释**：上一页最后一条记录的ID。  **约束限制**： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释**：每页返回的个数。  **约束限制**：不涉及  **取值范围**：0-2000  **默认取值**：2000
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit **参数解释**：每页返回的个数。  **约束限制**：不涉及  **取值范围**：0-2000  **默认取值**：2000
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets pageReverse
    *  **参数解释**：是否反向查询。  **约束限制**： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。  **取值范围**： - true：查询上一页。 - false：查询下一页。  **默认取值**：false
    *
    * @return bool|null
    */
    public function getPageReverse()
    {
        return $this->container['pageReverse'];
    }

    /**
    * Sets pageReverse
    *
    * @param bool|null $pageReverse **参数解释**：是否反向查询。  **约束限制**： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。  **取值范围**： - true：查询上一页。 - false：查询下一页。  **默认取值**：false
    *
    * @return $this
    */
    public function setPageReverse($pageReverse)
    {
        $this->container['pageReverse'] = $pageReverse;
        return $this;
    }

    /**
    * Gets id
    *  **参数解释**：健康检查ID。 支持多值查询，查询条件格式：*id=xxx&id=xxx****。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return string[]|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string[]|null $id **参数解释**：健康检查ID。 支持多值查询，查询条件格式：*id=xxx&id=xxx****。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets monitorPort
    *  **参数解释**：健康检查端口号。 支持多值查询，查询条件格式：***monitor_port=xxx&monitor_port=xxx***。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return int[]|null
    */
    public function getMonitorPort()
    {
        return $this->container['monitorPort'];
    }

    /**
    * Sets monitorPort
    *
    * @param int[]|null $monitorPort **参数解释**：健康检查端口号。 支持多值查询，查询条件格式：***monitor_port=xxx&monitor_port=xxx***。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setMonitorPort($monitorPort)
    {
        $this->container['monitorPort'] = $monitorPort;
        return $this;
    }

    /**
    * Gets domainName
    *  **参数解释**：发送健康检查请求的域名。 支持多值查询，查询条件格式：**domain_name=xxx&domain_name=xxx**。  **约束限制**：不涉及  **取值范围**：以数字或字母开头，只能包含数字、字母、’-’、’.’。  **默认取值**：不涉及
    *
    * @return string[]|null
    */
    public function getDomainName()
    {
        return $this->container['domainName'];
    }

    /**
    * Sets domainName
    *
    * @param string[]|null $domainName **参数解释**：发送健康检查请求的域名。 支持多值查询，查询条件格式：**domain_name=xxx&domain_name=xxx**。  **约束限制**：不涉及  **取值范围**：以数字或字母开头，只能包含数字、字母、’-’、’.’。  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**：健康检查名称。 支持多值查询，查询条件格式：*name=xxx&name=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return string[]|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string[]|null $name **参数解释**：健康检查名称。 支持多值查询，查询条件格式：*name=xxx&name=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets delay
    *  **参数解释**：健康检查间隔。 支持多值查询，查询条件格式：*delay=xxx&delay=xxx*。  **约束限制**：不涉及  **取值范围**：1-50，单位：秒。  **默认取值**：不涉及
    *
    * @return int[]|null
    */
    public function getDelay()
    {
        return $this->container['delay'];
    }

    /**
    * Sets delay
    *
    * @param int[]|null $delay **参数解释**：健康检查间隔。 支持多值查询，查询条件格式：*delay=xxx&delay=xxx*。  **约束限制**：不涉及  **取值范围**：1-50，单位：秒。  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setDelay($delay)
    {
        $this->container['delay'] = $delay;
        return $this;
    }

    /**
    * Gets maxRetries
    *  **参数解释**：健康检查连续成功多少次后，将后端服务器的健康检查状态由OFFLINE判定为ONLINE。 支持多值查询，查询条件格式：*******max_retries=xxx&max_retries=xxx*******。  **约束限制**：不涉及  **取值范围**：1-10  **默认取值**：不涉及
    *
    * @return int[]|null
    */
    public function getMaxRetries()
    {
        return $this->container['maxRetries'];
    }

    /**
    * Sets maxRetries
    *
    * @param int[]|null $maxRetries **参数解释**：健康检查连续成功多少次后，将后端服务器的健康检查状态由OFFLINE判定为ONLINE。 支持多值查询，查询条件格式：*******max_retries=xxx&max_retries=xxx*******。  **约束限制**：不涉及  **取值范围**：1-10  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setMaxRetries($maxRetries)
    {
        $this->container['maxRetries'] = $maxRetries;
        return $this;
    }

    /**
    * Gets adminStateUp
    *  **参数解释**：健康检查的管理状态。  **约束限制**：不涉及  **取值范围**： - true：表示开启健康检查。 - false表示关闭健康检查。  **默认取值**：不涉及
    *
    * @return bool|null
    */
    public function getAdminStateUp()
    {
        return $this->container['adminStateUp'];
    }

    /**
    * Sets adminStateUp
    *
    * @param bool|null $adminStateUp **参数解释**：健康检查的管理状态。  **约束限制**：不涉及  **取值范围**： - true：表示开启健康检查。 - false表示关闭健康检查。  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets maxRetriesDown
    *  **参数解释**：健康检查连续失败多少次后，将后端服务器的健康检查状态由ONLINE判定为OFFLINE。 支持多值查询，查询条件格式：******max_retries_down=xxx&max_retries_down=xxx******。  **约束限制**：不涉及  **取值范围**：1-10  **默认取值**：不涉及
    *
    * @return int[]|null
    */
    public function getMaxRetriesDown()
    {
        return $this->container['maxRetriesDown'];
    }

    /**
    * Sets maxRetriesDown
    *
    * @param int[]|null $maxRetriesDown **参数解释**：健康检查连续失败多少次后，将后端服务器的健康检查状态由ONLINE判定为OFFLINE。 支持多值查询，查询条件格式：******max_retries_down=xxx&max_retries_down=xxx******。  **约束限制**：不涉及  **取值范围**：1-10  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setMaxRetriesDown($maxRetriesDown)
    {
        $this->container['maxRetriesDown'] = $maxRetriesDown;
        return $this;
    }

    /**
    * Gets timeout
    *  **参数解释**：一次健康检查请求的超时时间。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return int|null
    */
    public function getTimeout()
    {
        return $this->container['timeout'];
    }

    /**
    * Sets timeout
    *
    * @param int|null $timeout **参数解释**：一次健康检查请求的超时时间。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setTimeout($timeout)
    {
        $this->container['timeout'] = $timeout;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**：健康检查请求协议。 支持多值查询，查询条件格式：*****type=xxx&type=xxx*****。  **约束限制**：不涉及  **取值范围**：TCP、UDP_CONNECT、HTTP、HTTPS、TLS、GRPC[和GRPCS](tag:not_open)。  **默认取值**：不涉及
    *
    * @return string[]|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string[]|null $type **参数解释**：健康检查请求协议。 支持多值查询，查询条件格式：*****type=xxx&type=xxx*****。  **约束限制**：不涉及  **取值范围**：TCP、UDP_CONNECT、HTTP、HTTPS、TLS、GRPC[和GRPCS](tag:not_open)。  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets expectedCodes
    *  **参数解释**：期望响应状态码。 支持多值查询，查询条件格式：****expected_codes=xxx&expected_codes=xxx****。  **约束限制**：不涉及  **取值范围**： - 单值：单个返回码，例如200。 - 列表：多个特定返回码，例如200，202。 - 区间：一个返回码区间，例如200-204。  **默认取值**：不涉及
    *
    * @return string[]|null
    */
    public function getExpectedCodes()
    {
        return $this->container['expectedCodes'];
    }

    /**
    * Sets expectedCodes
    *
    * @param string[]|null $expectedCodes **参数解释**：期望响应状态码。 支持多值查询，查询条件格式：****expected_codes=xxx&expected_codes=xxx****。  **约束限制**：不涉及  **取值范围**： - 单值：单个返回码，例如200。 - 列表：多个特定返回码，例如200，202。 - 区间：一个返回码区间，例如200-204。  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setExpectedCodes($expectedCodes)
    {
        $this->container['expectedCodes'] = $expectedCodes;
        return $this;
    }

    /**
    * Gets urlPath
    *  **参数解释**：健康检查测试member健康时发送的http请求路径。 支持多值查询，查询条件格式：***url_path=xxx&url_path=xxx***。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return string[]|null
    */
    public function getUrlPath()
    {
        return $this->container['urlPath'];
    }

    /**
    * Sets urlPath
    *
    * @param string[]|null $urlPath **参数解释**：健康检查测试member健康时发送的http请求路径。 支持多值查询，查询条件格式：***url_path=xxx&url_path=xxx***。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setUrlPath($urlPath)
    {
        $this->container['urlPath'] = $urlPath;
        return $this;
    }

    /**
    * Gets httpMethod
    *  **参数解释**：HTTP请求方法。 支持多值查询，查询条件格式：**http_method=xxx&http_method=xxx**。  **约束限制**：不涉及  **取值范围**：GET、HEAD、POST  **默认取值**：不涉及
    *
    * @return string[]|null
    */
    public function getHttpMethod()
    {
        return $this->container['httpMethod'];
    }

    /**
    * Sets httpMethod
    *
    * @param string[]|null $httpMethod **参数解释**：HTTP请求方法。 支持多值查询，查询条件格式：**http_method=xxx&http_method=xxx**。  **约束限制**：不涉及  **取值范围**：GET、HEAD、POST  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setHttpMethod($httpMethod)
    {
        $this->container['httpMethod'] = $httpMethod;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  **参数解释**：资源所属的企业项目ID。 支持多值查询，查询条件格式：*enterprise_project_id=xxx&enterprise_project_id=xxx*。  **约束限制**： - 如果enterprise_project_id不传值，默认查询所有企业项目下的资源，鉴权按照细粒度权限鉴权，必须在用户组下分配elb:healthmonitors:list权限。 - 如果enterprise_project_id传值，鉴权按照企业项目权限鉴权，分为传入具体eps_id和all_granted_eps两种场景，前者查询指定eps_id的eps下的资源，后者查询的是所有有list权限的eps下的资源。  **取值范围**：不涉及  **默认取值**：不涉及  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    *
    * @return string[]|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string[]|null $enterpriseProjectId **参数解释**：资源所属的企业项目ID。 支持多值查询，查询条件格式：*enterprise_project_id=xxx&enterprise_project_id=xxx*。  **约束限制**： - 如果enterprise_project_id不传值，默认查询所有企业项目下的资源，鉴权按照细粒度权限鉴权，必须在用户组下分配elb:healthmonitors:list权限。 - 如果enterprise_project_id传值，鉴权按照企业项目权限鉴权，分为传入具体eps_id和all_granted_eps两种场景，前者查询指定eps_id的eps下的资源，后者查询的是所有有list权限的eps下的资源。  **取值范围**：不涉及  **默认取值**：不涉及  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
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

