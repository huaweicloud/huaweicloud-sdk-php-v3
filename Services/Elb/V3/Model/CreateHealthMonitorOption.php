<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateHealthMonitorOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateHealthMonitorOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * adminStateUp  **参数解释**：健康检查的管理状态。  **约束限制**：不涉及  **取值范围**： - true：表示开启健康检查。 - false表示关闭健康检查。  **默认取值**：true
    * delay  **参数解释**：健康检查间隔。  **约束限制**：不涉及  **取值范围**：1-50，单位：秒。  **默认取值**：true
    * domainName  **参数解释**：发送健康检查请求的域名。  **约束限制**：当type为HTTP/HTTPS时生效。  **取值范围**：以数字或字母开头，只能包含数字、字母、’-’、’.’。  **默认取值**：默认为空，表示使用负载均衡器的vip作为http请求的目的地址。
    * expectedCodes  **参数解释**：期望响应状态码。  **约束限制**：该字段仅在HTTP/HTTPS/GRPC协议下有效，其他协议可以设置但不会生效。  **取值范围**： - 单值：单个返回码，例如200。 - 列表：多个特定返回码，例如200，202。 - 区间：一个返回码区间，例如200-204。  **默认取值**：若健康检查type为GRPC，则默认值为0，其他为200。
    * httpMethod  **参数解释**：HTTP请求方法。  **约束限制**：当type为HTTP/HTTPS时生效。  **取值范围**：GET、HEAD、POST。  **默认取值**：GET
    * maxRetries  **参数解释**：健康检查连续成功多少次后，将后端服务器的健康检查状态由OFFLINE判定为ONLINE。  **约束限制**：不涉及  **取值范围**：1-10  **默认取值**：不涉及
    * maxRetriesDown  **参数解释**：健康检查连续失败多少次后，将后端服务器的健康检查状态由ONLINE判定为OFFLINE。  **约束限制**：不涉及  **取值范围**：1-10  **默认取值**：3
    * monitorPort  **参数解释**：健康检查端口号。  **约束限制**： - 当绑定的pool开启了端口透传功能时，该字段为必填。 [- 当pool协议为IP时，monitor_port必须指定为非0值。](tag:hws_eu)  **取值范围**：1-65535和null，传null表示使用后端服务器端口号。  **默认取值**：null
    * name  **参数解释**：健康检查名称。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * poolId  **参数解释**：健康检查所在的后端服务器组ID  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * projectId  **参数解释**：健康检查所在的项目ID。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * timeout  **参数解释**：一次健康检查请求的超时时间。建议该值小于delay的值。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * type  **参数解释**：健康检查请求协议。  **约束限制**： - 若pool的protocol为QUIC，则type只能是UDP_CONNECT。 - 若pool的protocol为UDP，则type只能UDP_CONNECT。 - 若pool的protocol为TCP，则type可以是TCP、HTTP、HTTPS。 [- 若pool的protocol为IP，则type可以是TCP、HTTP、HTTPS。](tag:hws_eu) - 若pool的protocol为HTTP，则type可以是TCP、HTTP、HTTPS、TLS、GRPC。 - 若pool的protocol为HTTPS，则type可以是TCP、HTTP、HTTPS、TLS、GRPC。 - 若pool的protocol为GRPC，则type可以是TCP、HTTP、HTTPS、TLS、GRPC。 - 若pool的protocol为TLS，则type可以是TCP、HTTP、HTTPS、TLS、GRPC。 [- 不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  **取值范围**：TCP、UDP_CONNECT、HTTP、HTTPS、GRPC和TLS。  **默认取值**：不涉及  [荷兰region不支持QUIC。](tag:dt)
    * urlPath  **参数解释**：健康检查请求的请求路径。以\"/\"开头，默认为\"/\"。  **约束限制**：当type为HTTP/HTTPS时生效。  **取值范围**：支持使用字母、数字和短划线（-）、正斜线（/）、半角句号（.）、百分号（%）、半角问号（?）、井号（#）和and（&）以及扩展字符集_;~!()*[]@$^:',+  **默认取值**：不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'adminStateUp' => 'bool',
            'delay' => 'int',
            'domainName' => 'string',
            'expectedCodes' => 'string',
            'httpMethod' => 'string',
            'maxRetries' => 'int',
            'maxRetriesDown' => 'int',
            'monitorPort' => 'int',
            'name' => 'string',
            'poolId' => 'string',
            'projectId' => 'string',
            'timeout' => 'int',
            'type' => 'string',
            'urlPath' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * adminStateUp  **参数解释**：健康检查的管理状态。  **约束限制**：不涉及  **取值范围**： - true：表示开启健康检查。 - false表示关闭健康检查。  **默认取值**：true
    * delay  **参数解释**：健康检查间隔。  **约束限制**：不涉及  **取值范围**：1-50，单位：秒。  **默认取值**：true
    * domainName  **参数解释**：发送健康检查请求的域名。  **约束限制**：当type为HTTP/HTTPS时生效。  **取值范围**：以数字或字母开头，只能包含数字、字母、’-’、’.’。  **默认取值**：默认为空，表示使用负载均衡器的vip作为http请求的目的地址。
    * expectedCodes  **参数解释**：期望响应状态码。  **约束限制**：该字段仅在HTTP/HTTPS/GRPC协议下有效，其他协议可以设置但不会生效。  **取值范围**： - 单值：单个返回码，例如200。 - 列表：多个特定返回码，例如200，202。 - 区间：一个返回码区间，例如200-204。  **默认取值**：若健康检查type为GRPC，则默认值为0，其他为200。
    * httpMethod  **参数解释**：HTTP请求方法。  **约束限制**：当type为HTTP/HTTPS时生效。  **取值范围**：GET、HEAD、POST。  **默认取值**：GET
    * maxRetries  **参数解释**：健康检查连续成功多少次后，将后端服务器的健康检查状态由OFFLINE判定为ONLINE。  **约束限制**：不涉及  **取值范围**：1-10  **默认取值**：不涉及
    * maxRetriesDown  **参数解释**：健康检查连续失败多少次后，将后端服务器的健康检查状态由ONLINE判定为OFFLINE。  **约束限制**：不涉及  **取值范围**：1-10  **默认取值**：3
    * monitorPort  **参数解释**：健康检查端口号。  **约束限制**： - 当绑定的pool开启了端口透传功能时，该字段为必填。 [- 当pool协议为IP时，monitor_port必须指定为非0值。](tag:hws_eu)  **取值范围**：1-65535和null，传null表示使用后端服务器端口号。  **默认取值**：null
    * name  **参数解释**：健康检查名称。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * poolId  **参数解释**：健康检查所在的后端服务器组ID  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * projectId  **参数解释**：健康检查所在的项目ID。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * timeout  **参数解释**：一次健康检查请求的超时时间。建议该值小于delay的值。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * type  **参数解释**：健康检查请求协议。  **约束限制**： - 若pool的protocol为QUIC，则type只能是UDP_CONNECT。 - 若pool的protocol为UDP，则type只能UDP_CONNECT。 - 若pool的protocol为TCP，则type可以是TCP、HTTP、HTTPS。 [- 若pool的protocol为IP，则type可以是TCP、HTTP、HTTPS。](tag:hws_eu) - 若pool的protocol为HTTP，则type可以是TCP、HTTP、HTTPS、TLS、GRPC。 - 若pool的protocol为HTTPS，则type可以是TCP、HTTP、HTTPS、TLS、GRPC。 - 若pool的protocol为GRPC，则type可以是TCP、HTTP、HTTPS、TLS、GRPC。 - 若pool的protocol为TLS，则type可以是TCP、HTTP、HTTPS、TLS、GRPC。 [- 不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  **取值范围**：TCP、UDP_CONNECT、HTTP、HTTPS、GRPC和TLS。  **默认取值**：不涉及  [荷兰region不支持QUIC。](tag:dt)
    * urlPath  **参数解释**：健康检查请求的请求路径。以\"/\"开头，默认为\"/\"。  **约束限制**：当type为HTTP/HTTPS时生效。  **取值范围**：支持使用字母、数字和短划线（-）、正斜线（/）、半角句号（.）、百分号（%）、半角问号（?）、井号（#）和and（&）以及扩展字符集_;~!()*[]@$^:',+  **默认取值**：不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'adminStateUp' => null,
        'delay' => 'int32',
        'domainName' => null,
        'expectedCodes' => null,
        'httpMethod' => null,
        'maxRetries' => 'int32',
        'maxRetriesDown' => 'int32',
        'monitorPort' => 'int32',
        'name' => null,
        'poolId' => null,
        'projectId' => null,
        'timeout' => 'int32',
        'type' => null,
        'urlPath' => null
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
    * adminStateUp  **参数解释**：健康检查的管理状态。  **约束限制**：不涉及  **取值范围**： - true：表示开启健康检查。 - false表示关闭健康检查。  **默认取值**：true
    * delay  **参数解释**：健康检查间隔。  **约束限制**：不涉及  **取值范围**：1-50，单位：秒。  **默认取值**：true
    * domainName  **参数解释**：发送健康检查请求的域名。  **约束限制**：当type为HTTP/HTTPS时生效。  **取值范围**：以数字或字母开头，只能包含数字、字母、’-’、’.’。  **默认取值**：默认为空，表示使用负载均衡器的vip作为http请求的目的地址。
    * expectedCodes  **参数解释**：期望响应状态码。  **约束限制**：该字段仅在HTTP/HTTPS/GRPC协议下有效，其他协议可以设置但不会生效。  **取值范围**： - 单值：单个返回码，例如200。 - 列表：多个特定返回码，例如200，202。 - 区间：一个返回码区间，例如200-204。  **默认取值**：若健康检查type为GRPC，则默认值为0，其他为200。
    * httpMethod  **参数解释**：HTTP请求方法。  **约束限制**：当type为HTTP/HTTPS时生效。  **取值范围**：GET、HEAD、POST。  **默认取值**：GET
    * maxRetries  **参数解释**：健康检查连续成功多少次后，将后端服务器的健康检查状态由OFFLINE判定为ONLINE。  **约束限制**：不涉及  **取值范围**：1-10  **默认取值**：不涉及
    * maxRetriesDown  **参数解释**：健康检查连续失败多少次后，将后端服务器的健康检查状态由ONLINE判定为OFFLINE。  **约束限制**：不涉及  **取值范围**：1-10  **默认取值**：3
    * monitorPort  **参数解释**：健康检查端口号。  **约束限制**： - 当绑定的pool开启了端口透传功能时，该字段为必填。 [- 当pool协议为IP时，monitor_port必须指定为非0值。](tag:hws_eu)  **取值范围**：1-65535和null，传null表示使用后端服务器端口号。  **默认取值**：null
    * name  **参数解释**：健康检查名称。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * poolId  **参数解释**：健康检查所在的后端服务器组ID  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * projectId  **参数解释**：健康检查所在的项目ID。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * timeout  **参数解释**：一次健康检查请求的超时时间。建议该值小于delay的值。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * type  **参数解释**：健康检查请求协议。  **约束限制**： - 若pool的protocol为QUIC，则type只能是UDP_CONNECT。 - 若pool的protocol为UDP，则type只能UDP_CONNECT。 - 若pool的protocol为TCP，则type可以是TCP、HTTP、HTTPS。 [- 若pool的protocol为IP，则type可以是TCP、HTTP、HTTPS。](tag:hws_eu) - 若pool的protocol为HTTP，则type可以是TCP、HTTP、HTTPS、TLS、GRPC。 - 若pool的protocol为HTTPS，则type可以是TCP、HTTP、HTTPS、TLS、GRPC。 - 若pool的protocol为GRPC，则type可以是TCP、HTTP、HTTPS、TLS、GRPC。 - 若pool的protocol为TLS，则type可以是TCP、HTTP、HTTPS、TLS、GRPC。 [- 不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  **取值范围**：TCP、UDP_CONNECT、HTTP、HTTPS、GRPC和TLS。  **默认取值**：不涉及  [荷兰region不支持QUIC。](tag:dt)
    * urlPath  **参数解释**：健康检查请求的请求路径。以\"/\"开头，默认为\"/\"。  **约束限制**：当type为HTTP/HTTPS时生效。  **取值范围**：支持使用字母、数字和短划线（-）、正斜线（/）、半角句号（.）、百分号（%）、半角问号（?）、井号（#）和and（&）以及扩展字符集_;~!()*[]@$^:',+  **默认取值**：不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'adminStateUp' => 'admin_state_up',
            'delay' => 'delay',
            'domainName' => 'domain_name',
            'expectedCodes' => 'expected_codes',
            'httpMethod' => 'http_method',
            'maxRetries' => 'max_retries',
            'maxRetriesDown' => 'max_retries_down',
            'monitorPort' => 'monitor_port',
            'name' => 'name',
            'poolId' => 'pool_id',
            'projectId' => 'project_id',
            'timeout' => 'timeout',
            'type' => 'type',
            'urlPath' => 'url_path'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * adminStateUp  **参数解释**：健康检查的管理状态。  **约束限制**：不涉及  **取值范围**： - true：表示开启健康检查。 - false表示关闭健康检查。  **默认取值**：true
    * delay  **参数解释**：健康检查间隔。  **约束限制**：不涉及  **取值范围**：1-50，单位：秒。  **默认取值**：true
    * domainName  **参数解释**：发送健康检查请求的域名。  **约束限制**：当type为HTTP/HTTPS时生效。  **取值范围**：以数字或字母开头，只能包含数字、字母、’-’、’.’。  **默认取值**：默认为空，表示使用负载均衡器的vip作为http请求的目的地址。
    * expectedCodes  **参数解释**：期望响应状态码。  **约束限制**：该字段仅在HTTP/HTTPS/GRPC协议下有效，其他协议可以设置但不会生效。  **取值范围**： - 单值：单个返回码，例如200。 - 列表：多个特定返回码，例如200，202。 - 区间：一个返回码区间，例如200-204。  **默认取值**：若健康检查type为GRPC，则默认值为0，其他为200。
    * httpMethod  **参数解释**：HTTP请求方法。  **约束限制**：当type为HTTP/HTTPS时生效。  **取值范围**：GET、HEAD、POST。  **默认取值**：GET
    * maxRetries  **参数解释**：健康检查连续成功多少次后，将后端服务器的健康检查状态由OFFLINE判定为ONLINE。  **约束限制**：不涉及  **取值范围**：1-10  **默认取值**：不涉及
    * maxRetriesDown  **参数解释**：健康检查连续失败多少次后，将后端服务器的健康检查状态由ONLINE判定为OFFLINE。  **约束限制**：不涉及  **取值范围**：1-10  **默认取值**：3
    * monitorPort  **参数解释**：健康检查端口号。  **约束限制**： - 当绑定的pool开启了端口透传功能时，该字段为必填。 [- 当pool协议为IP时，monitor_port必须指定为非0值。](tag:hws_eu)  **取值范围**：1-65535和null，传null表示使用后端服务器端口号。  **默认取值**：null
    * name  **参数解释**：健康检查名称。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * poolId  **参数解释**：健康检查所在的后端服务器组ID  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * projectId  **参数解释**：健康检查所在的项目ID。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * timeout  **参数解释**：一次健康检查请求的超时时间。建议该值小于delay的值。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * type  **参数解释**：健康检查请求协议。  **约束限制**： - 若pool的protocol为QUIC，则type只能是UDP_CONNECT。 - 若pool的protocol为UDP，则type只能UDP_CONNECT。 - 若pool的protocol为TCP，则type可以是TCP、HTTP、HTTPS。 [- 若pool的protocol为IP，则type可以是TCP、HTTP、HTTPS。](tag:hws_eu) - 若pool的protocol为HTTP，则type可以是TCP、HTTP、HTTPS、TLS、GRPC。 - 若pool的protocol为HTTPS，则type可以是TCP、HTTP、HTTPS、TLS、GRPC。 - 若pool的protocol为GRPC，则type可以是TCP、HTTP、HTTPS、TLS、GRPC。 - 若pool的protocol为TLS，则type可以是TCP、HTTP、HTTPS、TLS、GRPC。 [- 不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  **取值范围**：TCP、UDP_CONNECT、HTTP、HTTPS、GRPC和TLS。  **默认取值**：不涉及  [荷兰region不支持QUIC。](tag:dt)
    * urlPath  **参数解释**：健康检查请求的请求路径。以\"/\"开头，默认为\"/\"。  **约束限制**：当type为HTTP/HTTPS时生效。  **取值范围**：支持使用字母、数字和短划线（-）、正斜线（/）、半角句号（.）、百分号（%）、半角问号（?）、井号（#）和and（&）以及扩展字符集_;~!()*[]@$^:',+  **默认取值**：不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'adminStateUp' => 'setAdminStateUp',
            'delay' => 'setDelay',
            'domainName' => 'setDomainName',
            'expectedCodes' => 'setExpectedCodes',
            'httpMethod' => 'setHttpMethod',
            'maxRetries' => 'setMaxRetries',
            'maxRetriesDown' => 'setMaxRetriesDown',
            'monitorPort' => 'setMonitorPort',
            'name' => 'setName',
            'poolId' => 'setPoolId',
            'projectId' => 'setProjectId',
            'timeout' => 'setTimeout',
            'type' => 'setType',
            'urlPath' => 'setUrlPath'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * adminStateUp  **参数解释**：健康检查的管理状态。  **约束限制**：不涉及  **取值范围**： - true：表示开启健康检查。 - false表示关闭健康检查。  **默认取值**：true
    * delay  **参数解释**：健康检查间隔。  **约束限制**：不涉及  **取值范围**：1-50，单位：秒。  **默认取值**：true
    * domainName  **参数解释**：发送健康检查请求的域名。  **约束限制**：当type为HTTP/HTTPS时生效。  **取值范围**：以数字或字母开头，只能包含数字、字母、’-’、’.’。  **默认取值**：默认为空，表示使用负载均衡器的vip作为http请求的目的地址。
    * expectedCodes  **参数解释**：期望响应状态码。  **约束限制**：该字段仅在HTTP/HTTPS/GRPC协议下有效，其他协议可以设置但不会生效。  **取值范围**： - 单值：单个返回码，例如200。 - 列表：多个特定返回码，例如200，202。 - 区间：一个返回码区间，例如200-204。  **默认取值**：若健康检查type为GRPC，则默认值为0，其他为200。
    * httpMethod  **参数解释**：HTTP请求方法。  **约束限制**：当type为HTTP/HTTPS时生效。  **取值范围**：GET、HEAD、POST。  **默认取值**：GET
    * maxRetries  **参数解释**：健康检查连续成功多少次后，将后端服务器的健康检查状态由OFFLINE判定为ONLINE。  **约束限制**：不涉及  **取值范围**：1-10  **默认取值**：不涉及
    * maxRetriesDown  **参数解释**：健康检查连续失败多少次后，将后端服务器的健康检查状态由ONLINE判定为OFFLINE。  **约束限制**：不涉及  **取值范围**：1-10  **默认取值**：3
    * monitorPort  **参数解释**：健康检查端口号。  **约束限制**： - 当绑定的pool开启了端口透传功能时，该字段为必填。 [- 当pool协议为IP时，monitor_port必须指定为非0值。](tag:hws_eu)  **取值范围**：1-65535和null，传null表示使用后端服务器端口号。  **默认取值**：null
    * name  **参数解释**：健康检查名称。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * poolId  **参数解释**：健康检查所在的后端服务器组ID  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * projectId  **参数解释**：健康检查所在的项目ID。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * timeout  **参数解释**：一次健康检查请求的超时时间。建议该值小于delay的值。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * type  **参数解释**：健康检查请求协议。  **约束限制**： - 若pool的protocol为QUIC，则type只能是UDP_CONNECT。 - 若pool的protocol为UDP，则type只能UDP_CONNECT。 - 若pool的protocol为TCP，则type可以是TCP、HTTP、HTTPS。 [- 若pool的protocol为IP，则type可以是TCP、HTTP、HTTPS。](tag:hws_eu) - 若pool的protocol为HTTP，则type可以是TCP、HTTP、HTTPS、TLS、GRPC。 - 若pool的protocol为HTTPS，则type可以是TCP、HTTP、HTTPS、TLS、GRPC。 - 若pool的protocol为GRPC，则type可以是TCP、HTTP、HTTPS、TLS、GRPC。 - 若pool的protocol为TLS，则type可以是TCP、HTTP、HTTPS、TLS、GRPC。 [- 不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  **取值范围**：TCP、UDP_CONNECT、HTTP、HTTPS、GRPC和TLS。  **默认取值**：不涉及  [荷兰region不支持QUIC。](tag:dt)
    * urlPath  **参数解释**：健康检查请求的请求路径。以\"/\"开头，默认为\"/\"。  **约束限制**：当type为HTTP/HTTPS时生效。  **取值范围**：支持使用字母、数字和短划线（-）、正斜线（/）、半角句号（.）、百分号（%）、半角问号（?）、井号（#）和and（&）以及扩展字符集_;~!()*[]@$^:',+  **默认取值**：不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'adminStateUp' => 'getAdminStateUp',
            'delay' => 'getDelay',
            'domainName' => 'getDomainName',
            'expectedCodes' => 'getExpectedCodes',
            'httpMethod' => 'getHttpMethod',
            'maxRetries' => 'getMaxRetries',
            'maxRetriesDown' => 'getMaxRetriesDown',
            'monitorPort' => 'getMonitorPort',
            'name' => 'getName',
            'poolId' => 'getPoolId',
            'projectId' => 'getProjectId',
            'timeout' => 'getTimeout',
            'type' => 'getType',
            'urlPath' => 'getUrlPath'
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
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['delay'] = isset($data['delay']) ? $data['delay'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['expectedCodes'] = isset($data['expectedCodes']) ? $data['expectedCodes'] : null;
        $this->container['httpMethod'] = isset($data['httpMethod']) ? $data['httpMethod'] : null;
        $this->container['maxRetries'] = isset($data['maxRetries']) ? $data['maxRetries'] : null;
        $this->container['maxRetriesDown'] = isset($data['maxRetriesDown']) ? $data['maxRetriesDown'] : null;
        $this->container['monitorPort'] = isset($data['monitorPort']) ? $data['monitorPort'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['poolId'] = isset($data['poolId']) ? $data['poolId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['timeout'] = isset($data['timeout']) ? $data['timeout'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['urlPath'] = isset($data['urlPath']) ? $data['urlPath'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['delay'] === null) {
            $invalidProperties[] = "'delay' can't be null";
        }
            if (!is_null($this->container['domainName']) && (mb_strlen($this->container['domainName']) > 100)) {
                $invalidProperties[] = "invalid value for 'domainName', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['domainName']) && (mb_strlen($this->container['domainName']) < 1)) {
                $invalidProperties[] = "invalid value for 'domainName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['domainName']) && !preg_match("/^[a-zA-Z0-9][a-zA-Z0-9-.]*$/", $this->container['domainName'])) {
                $invalidProperties[] = "invalid value for 'domainName', must be conform to the pattern /^[a-zA-Z0-9][a-zA-Z0-9-.]*$/.";
            }
            if (!is_null($this->container['expectedCodes']) && (mb_strlen($this->container['expectedCodes']) > 64)) {
                $invalidProperties[] = "invalid value for 'expectedCodes', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['expectedCodes']) && (mb_strlen($this->container['expectedCodes']) < 1)) {
                $invalidProperties[] = "invalid value for 'expectedCodes', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['expectedCodes']) && !preg_match("/^(([2-5]\\d{2})|(([2-5]\\d{2})-([2-5]\\d{2})))(,(([2-5]\\d{2})|(([2-5]\\d{2})-([2-5]\\d{2})))){0,4}$/", $this->container['expectedCodes'])) {
                $invalidProperties[] = "invalid value for 'expectedCodes', must be conform to the pattern /^(([2-5]\\d{2})|(([2-5]\\d{2})-([2-5]\\d{2})))(,(([2-5]\\d{2})|(([2-5]\\d{2})-([2-5]\\d{2})))){0,4}$/.";
            }
            if (!is_null($this->container['httpMethod']) && (mb_strlen($this->container['httpMethod']) > 16)) {
                $invalidProperties[] = "invalid value for 'httpMethod', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['httpMethod']) && (mb_strlen($this->container['httpMethod']) < 1)) {
                $invalidProperties[] = "invalid value for 'httpMethod', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['maxRetries'] === null) {
            $invalidProperties[] = "'maxRetries' can't be null";
        }
            if (($this->container['maxRetries'] > 10)) {
                $invalidProperties[] = "invalid value for 'maxRetries', must be smaller than or equal to 10.";
            }
            if (($this->container['maxRetries'] < 1)) {
                $invalidProperties[] = "invalid value for 'maxRetries', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['maxRetriesDown']) && ($this->container['maxRetriesDown'] > 10)) {
                $invalidProperties[] = "invalid value for 'maxRetriesDown', must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['maxRetriesDown']) && ($this->container['maxRetriesDown'] < 1)) {
                $invalidProperties[] = "invalid value for 'maxRetriesDown', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['monitorPort']) && ($this->container['monitorPort'] > 65535)) {
                $invalidProperties[] = "invalid value for 'monitorPort', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['monitorPort']) && ($this->container['monitorPort'] < 1)) {
                $invalidProperties[] = "invalid value for 'monitorPort', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['poolId'] === null) {
            $invalidProperties[] = "'poolId' can't be null";
        }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['projectId']) && !preg_match("/[0-9a-fA-F]{32}/", $this->container['projectId'])) {
                $invalidProperties[] = "invalid value for 'projectId', must be conform to the pattern /[0-9a-fA-F]{32}/.";
            }
        if ($this->container['timeout'] === null) {
            $invalidProperties[] = "'timeout' can't be null";
        }
            if (($this->container['timeout'] > 50)) {
                $invalidProperties[] = "invalid value for 'timeout', must be smaller than or equal to 50.";
            }
            if (($this->container['timeout'] < 1)) {
                $invalidProperties[] = "invalid value for 'timeout', must be bigger than or equal to 1.";
            }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            if (!is_null($this->container['urlPath']) && (mb_strlen($this->container['urlPath']) > 80)) {
                $invalidProperties[] = "invalid value for 'urlPath', the character length must be smaller than or equal to 80.";
            }
            if (!is_null($this->container['urlPath']) && (mb_strlen($this->container['urlPath']) < 1)) {
                $invalidProperties[] = "invalid value for 'urlPath', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['urlPath']) && !preg_match("/^(\/([a-zA-Z0-9-._~!$\\[\\]^%?#&amp;'()*+,;=:@]|(%[a-fA-F0-9]{2}))*)+$/", $this->container['urlPath'])) {
                $invalidProperties[] = "invalid value for 'urlPath', must be conform to the pattern /^(\/([a-zA-Z0-9-._~!$\\[\\]^%?#&amp;'()*+,;=:@]|(%[a-fA-F0-9]{2}))*)+$/.";
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
    * Gets adminStateUp
    *  **参数解释**：健康检查的管理状态。  **约束限制**：不涉及  **取值范围**： - true：表示开启健康检查。 - false表示关闭健康检查。  **默认取值**：true
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
    * @param bool|null $adminStateUp **参数解释**：健康检查的管理状态。  **约束限制**：不涉及  **取值范围**： - true：表示开启健康检查。 - false表示关闭健康检查。  **默认取值**：true
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets delay
    *  **参数解释**：健康检查间隔。  **约束限制**：不涉及  **取值范围**：1-50，单位：秒。  **默认取值**：true
    *
    * @return int
    */
    public function getDelay()
    {
        return $this->container['delay'];
    }

    /**
    * Sets delay
    *
    * @param int $delay **参数解释**：健康检查间隔。  **约束限制**：不涉及  **取值范围**：1-50，单位：秒。  **默认取值**：true
    *
    * @return $this
    */
    public function setDelay($delay)
    {
        $this->container['delay'] = $delay;
        return $this;
    }

    /**
    * Gets domainName
    *  **参数解释**：发送健康检查请求的域名。  **约束限制**：当type为HTTP/HTTPS时生效。  **取值范围**：以数字或字母开头，只能包含数字、字母、’-’、’.’。  **默认取值**：默认为空，表示使用负载均衡器的vip作为http请求的目的地址。
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
    * @param string|null $domainName **参数解释**：发送健康检查请求的域名。  **约束限制**：当type为HTTP/HTTPS时生效。  **取值范围**：以数字或字母开头，只能包含数字、字母、’-’、’.’。  **默认取值**：默认为空，表示使用负载均衡器的vip作为http请求的目的地址。
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets expectedCodes
    *  **参数解释**：期望响应状态码。  **约束限制**：该字段仅在HTTP/HTTPS/GRPC协议下有效，其他协议可以设置但不会生效。  **取值范围**： - 单值：单个返回码，例如200。 - 列表：多个特定返回码，例如200，202。 - 区间：一个返回码区间，例如200-204。  **默认取值**：若健康检查type为GRPC，则默认值为0，其他为200。
    *
    * @return string|null
    */
    public function getExpectedCodes()
    {
        return $this->container['expectedCodes'];
    }

    /**
    * Sets expectedCodes
    *
    * @param string|null $expectedCodes **参数解释**：期望响应状态码。  **约束限制**：该字段仅在HTTP/HTTPS/GRPC协议下有效，其他协议可以设置但不会生效。  **取值范围**： - 单值：单个返回码，例如200。 - 列表：多个特定返回码，例如200，202。 - 区间：一个返回码区间，例如200-204。  **默认取值**：若健康检查type为GRPC，则默认值为0，其他为200。
    *
    * @return $this
    */
    public function setExpectedCodes($expectedCodes)
    {
        $this->container['expectedCodes'] = $expectedCodes;
        return $this;
    }

    /**
    * Gets httpMethod
    *  **参数解释**：HTTP请求方法。  **约束限制**：当type为HTTP/HTTPS时生效。  **取值范围**：GET、HEAD、POST。  **默认取值**：GET
    *
    * @return string|null
    */
    public function getHttpMethod()
    {
        return $this->container['httpMethod'];
    }

    /**
    * Sets httpMethod
    *
    * @param string|null $httpMethod **参数解释**：HTTP请求方法。  **约束限制**：当type为HTTP/HTTPS时生效。  **取值范围**：GET、HEAD、POST。  **默认取值**：GET
    *
    * @return $this
    */
    public function setHttpMethod($httpMethod)
    {
        $this->container['httpMethod'] = $httpMethod;
        return $this;
    }

    /**
    * Gets maxRetries
    *  **参数解释**：健康检查连续成功多少次后，将后端服务器的健康检查状态由OFFLINE判定为ONLINE。  **约束限制**：不涉及  **取值范围**：1-10  **默认取值**：不涉及
    *
    * @return int
    */
    public function getMaxRetries()
    {
        return $this->container['maxRetries'];
    }

    /**
    * Sets maxRetries
    *
    * @param int $maxRetries **参数解释**：健康检查连续成功多少次后，将后端服务器的健康检查状态由OFFLINE判定为ONLINE。  **约束限制**：不涉及  **取值范围**：1-10  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setMaxRetries($maxRetries)
    {
        $this->container['maxRetries'] = $maxRetries;
        return $this;
    }

    /**
    * Gets maxRetriesDown
    *  **参数解释**：健康检查连续失败多少次后，将后端服务器的健康检查状态由ONLINE判定为OFFLINE。  **约束限制**：不涉及  **取值范围**：1-10  **默认取值**：3
    *
    * @return int|null
    */
    public function getMaxRetriesDown()
    {
        return $this->container['maxRetriesDown'];
    }

    /**
    * Sets maxRetriesDown
    *
    * @param int|null $maxRetriesDown **参数解释**：健康检查连续失败多少次后，将后端服务器的健康检查状态由ONLINE判定为OFFLINE。  **约束限制**：不涉及  **取值范围**：1-10  **默认取值**：3
    *
    * @return $this
    */
    public function setMaxRetriesDown($maxRetriesDown)
    {
        $this->container['maxRetriesDown'] = $maxRetriesDown;
        return $this;
    }

    /**
    * Gets monitorPort
    *  **参数解释**：健康检查端口号。  **约束限制**： - 当绑定的pool开启了端口透传功能时，该字段为必填。 [- 当pool协议为IP时，monitor_port必须指定为非0值。](tag:hws_eu)  **取值范围**：1-65535和null，传null表示使用后端服务器端口号。  **默认取值**：null
    *
    * @return int|null
    */
    public function getMonitorPort()
    {
        return $this->container['monitorPort'];
    }

    /**
    * Sets monitorPort
    *
    * @param int|null $monitorPort **参数解释**：健康检查端口号。  **约束限制**： - 当绑定的pool开启了端口透传功能时，该字段为必填。 [- 当pool协议为IP时，monitor_port必须指定为非0值。](tag:hws_eu)  **取值范围**：1-65535和null，传null表示使用后端服务器端口号。  **默认取值**：null
    *
    * @return $this
    */
    public function setMonitorPort($monitorPort)
    {
        $this->container['monitorPort'] = $monitorPort;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**：健康检查名称。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name **参数解释**：健康检查名称。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets poolId
    *  **参数解释**：健康检查所在的后端服务器组ID  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return string
    */
    public function getPoolId()
    {
        return $this->container['poolId'];
    }

    /**
    * Sets poolId
    *
    * @param string $poolId **参数解释**：健康检查所在的后端服务器组ID  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setPoolId($poolId)
    {
        $this->container['poolId'] = $poolId;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释**：健康检查所在的项目ID。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId **参数解释**：健康检查所在的项目ID。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets timeout
    *  **参数解释**：一次健康检查请求的超时时间。建议该值小于delay的值。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return int
    */
    public function getTimeout()
    {
        return $this->container['timeout'];
    }

    /**
    * Sets timeout
    *
    * @param int $timeout **参数解释**：一次健康检查请求的超时时间。建议该值小于delay的值。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
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
    *  **参数解释**：健康检查请求协议。  **约束限制**： - 若pool的protocol为QUIC，则type只能是UDP_CONNECT。 - 若pool的protocol为UDP，则type只能UDP_CONNECT。 - 若pool的protocol为TCP，则type可以是TCP、HTTP、HTTPS。 [- 若pool的protocol为IP，则type可以是TCP、HTTP、HTTPS。](tag:hws_eu) - 若pool的protocol为HTTP，则type可以是TCP、HTTP、HTTPS、TLS、GRPC。 - 若pool的protocol为HTTPS，则type可以是TCP、HTTP、HTTPS、TLS、GRPC。 - 若pool的protocol为GRPC，则type可以是TCP、HTTP、HTTPS、TLS、GRPC。 - 若pool的protocol为TLS，则type可以是TCP、HTTP、HTTPS、TLS、GRPC。 [- 不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  **取值范围**：TCP、UDP_CONNECT、HTTP、HTTPS、GRPC和TLS。  **默认取值**：不涉及  [荷兰region不支持QUIC。](tag:dt)
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type **参数解释**：健康检查请求协议。  **约束限制**： - 若pool的protocol为QUIC，则type只能是UDP_CONNECT。 - 若pool的protocol为UDP，则type只能UDP_CONNECT。 - 若pool的protocol为TCP，则type可以是TCP、HTTP、HTTPS。 [- 若pool的protocol为IP，则type可以是TCP、HTTP、HTTPS。](tag:hws_eu) - 若pool的protocol为HTTP，则type可以是TCP、HTTP、HTTPS、TLS、GRPC。 - 若pool的protocol为HTTPS，则type可以是TCP、HTTP、HTTPS、TLS、GRPC。 - 若pool的protocol为GRPC，则type可以是TCP、HTTP、HTTPS、TLS、GRPC。 - 若pool的protocol为TLS，则type可以是TCP、HTTP、HTTPS、TLS、GRPC。 [- 不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  **取值范围**：TCP、UDP_CONNECT、HTTP、HTTPS、GRPC和TLS。  **默认取值**：不涉及  [荷兰region不支持QUIC。](tag:dt)
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets urlPath
    *  **参数解释**：健康检查请求的请求路径。以\"/\"开头，默认为\"/\"。  **约束限制**：当type为HTTP/HTTPS时生效。  **取值范围**：支持使用字母、数字和短划线（-）、正斜线（/）、半角句号（.）、百分号（%）、半角问号（?）、井号（#）和and（&）以及扩展字符集_;~!()*[]@$^:',+  **默认取值**：不涉及
    *
    * @return string|null
    */
    public function getUrlPath()
    {
        return $this->container['urlPath'];
    }

    /**
    * Sets urlPath
    *
    * @param string|null $urlPath **参数解释**：健康检查请求的请求路径。以\"/\"开头，默认为\"/\"。  **约束限制**：当type为HTTP/HTTPS时生效。  **取值范围**：支持使用字母、数字和短划线（-）、正斜线（/）、半角句号（.）、百分号（%）、半角问号（?）、井号（#）和and（&）以及扩展字符集_;~!()*[]@$^:',+  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setUrlPath($urlPath)
    {
        $this->container['urlPath'] = $urlPath;
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

