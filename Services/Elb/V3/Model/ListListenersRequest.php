<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListListenersRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListListenersRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limit  参数解释：每页返回的个数。  取值范围：0-2000  默认取值：2000
    * marker  上一页最后一条记录的ID。  使用说明： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。
    * pageReverse  是否反向查询。  取值： - true：查询上一页。 - false：查询下一页，默认。  使用说明： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。
    * protocolPort  监听器的前端监听端口。  [当监听器的protocol为IP时，前端端口固定为0。](tag:hws_eu) 支持多值查询，查询条件格式：*protocol_port=xxx&protocol_port=xxx*。
    * protocol  监听器的监听协议。  [取值：TCP、UDP、HTTP、HTTPS、TERMINATED_HTTPS、QUIC、TLS。 说明：TERMINATED_HTTPS为共享型LB上的监听器独有的协议。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,fcs,dt)  [取值：TCP、UDP、HTTP、HTTPS。](tag:hcso_dt) [取值：TCP、UDP、IP、HTTP、HTTPS。IP为网关型LB上的监听器独有的协议。](tag:hws_eu)  支持多值查询，查询条件格式：*protocol=xxx&protocol=xxx*。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt,dt_test)
    * description  监听器的描述信息。  支持多值查询，查询条件格式：*description=xxx&description=xxx*。
    * defaultTlsContainerRef  监听器的服务器证书ID。  支持多值查询，查询条件格式： *default_tls_container_ref=xxx&default_tls_container_ref=xxx*。
    * clientCaTlsContainerRef  监听器的CA证书ID。  支持多值查询，查询条件格式： *client_ca_tls_container_ref=xxx&client_ca_tls_container_ref=xxx*。
    * adminStateUp  监听器的管理状态。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    * connectionLimit  ​监听器的最大连接数。  取值：-1表示不限制连接数。  支持多值查询，查询条件格式：*connection_limit=xxx&connection_limit=xxx*。  不支持该字段，请勿使用。
    * defaultPoolId  监听器的默认后端云服务器组ID。当请求没有匹配的转发策略时，转发到默认后端云服务器上处理。  支持多值查询，查询条件格式：*default_pool_id=xxx&default_pool_id=xxx*。
    * id  监听器ID。  支持多值查询，查询条件格式：*id=xxx&id=xxx*。
    * name  监听器名称。  支持多值查询，查询条件格式：*name=xxx&name=xxx*。
    * http2Enable  客户端与LB之间的HTTPS请求的HTTP2功能的开启状态。 开启后，可提升客户端与LB间的访问性能，但LB与后端服务器间仍采用HTTP1.X协议。  使用说明： - 仅HTTPS协议监听器有效。 - QUIC监听器不能设置该字段，固定返回为true。 - 其他协议的监听器可设置该字段但无效，无论取值如何都不影响监听器正常运行。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt,dt_test)
    * loadbalancerId  监听器所属的负载均衡器ID。  支持多值查询，查询条件格式：*loadbalancer_id=xxx&loadbalancer_id=xxx*。
    * tlsCiphersPolicy  监听器使用的安全策略。  支持多值查询，查询条件格式：*tls_ciphers_policy=xxx&tls_ciphers_policy=xxx*。
    * memberAddress  后端云服务器的IP地址。仅用于查询条件，不作为响应参数字段。  支持多值查询，查询条件格式：*member_address=xxx&member_address=xxx*。
    * memberDeviceId  后端云服务器对应的弹性云服务器的ID。仅用于查询条件，不作为响应参数字段。  支持多值查询，查询条件格式：*member_device_id=xxx&member_device_id=xxx*。
    * enterpriseProjectId  企业项目ID。不传时查询default企业项目\"0\"下的资源，鉴权按照default企业项目鉴权； 如果传值，则传已存在的企业项目ID或all_granted_eps（表示查询所有企业项目）进行查询。  支持多值查询，查询条件格式：*enterprise_project_id=xxx&enterprise_project_id=xxx*。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    * enableMemberRetry  是否开启后端服务器的重试。  取值：true 开启重试，false 不开启重试。
    * memberTimeout  等待后端服务器响应超时时间。请求转发后端服务器后，在等待超时member_timeout时长没有响应，负载均衡将终止等待，并返回 HTTP504错误码。  取值：1-3600s。  支持多值查询，查询条件格式：*member_timeout=xxx&member_timeout=xxx*。
    * clientTimeout  等待客户端请求超时时间，包括两种情况： - 读取整个客户端请求头的超时时长：如果客户端未在超时时长内发送完整个请求头，则请求将被中断 - 两个连续body体的数据包到达LB的时间间隔，超出client_timeout将会断开连接。  取值：1-3600s。  支持多值查询，查询条件格式：*client_timeout=xxx&client_timeout=xxx*。
    * keepaliveTimeout  客户端连接空闲超时时间。在超过keepalive_timeout时长一直没有请求， 负载均衡会暂时中断当前连接，直到下一次请求时重新建立新的连接。  取值： - TCP监听器[和IP监听器](tag:hws_eu)：10-4000s。 - HTTP/HTTPS/TERMINATED_HTTPS监听器：0-4000s。 [- 共享型实例的UDP监听器不支持此字段。](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,fcs,dt,dt_test,hk_tm)  支持多值查询，查询条件格式：*keepalive_timeout=xxx&keepalive_timeout=xxx*。
    * transparentClientIpEnable  是否透传客户端IP地址。开启后客户端IP地址将透传到后端服务器。  [仅作用于共享型LB的TCP/UDP监听器。取值：true开启，false不开启。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,fcs,dt,hk_tm)
    * proxyProtocolEnable  是否开启proxy_protocol。仅TLS监听器可指定，其他协议的监听器该字段不生效，proxy_protocol不开启。
    * enhanceL7policyEnable  是否开启高级转发策略功能。开启高级转发策略后，支持更灵活的转发策略和转发规则设置。  取值：true开启，false不开启。  [荷兰region不支持该字段，请勿使用。](tag:dt,dt_test)
    * memberInstanceId  后端云服务器ID。仅用于查询条件，不作为响应参数字段。  支持多值查询，查询条件格式：*member_instance_id=xxx&member_instance_id=xxx*。
    * protectionStatus  修改保护状态, 取值： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'limit' => 'int',
            'marker' => 'string',
            'pageReverse' => 'bool',
            'protocolPort' => 'string[]',
            'protocol' => 'string[]',
            'description' => 'string[]',
            'defaultTlsContainerRef' => 'string[]',
            'clientCaTlsContainerRef' => 'string[]',
            'adminStateUp' => 'bool',
            'connectionLimit' => 'int[]',
            'defaultPoolId' => 'string[]',
            'id' => 'string[]',
            'name' => 'string[]',
            'http2Enable' => 'bool',
            'loadbalancerId' => 'string[]',
            'tlsCiphersPolicy' => 'string[]',
            'memberAddress' => 'string[]',
            'memberDeviceId' => 'string[]',
            'enterpriseProjectId' => 'string[]',
            'enableMemberRetry' => 'bool',
            'memberTimeout' => 'int[]',
            'clientTimeout' => 'int[]',
            'keepaliveTimeout' => 'int[]',
            'transparentClientIpEnable' => 'bool',
            'proxyProtocolEnable' => 'bool',
            'enhanceL7policyEnable' => 'bool',
            'memberInstanceId' => 'string[]',
            'protectionStatus' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limit  参数解释：每页返回的个数。  取值范围：0-2000  默认取值：2000
    * marker  上一页最后一条记录的ID。  使用说明： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。
    * pageReverse  是否反向查询。  取值： - true：查询上一页。 - false：查询下一页，默认。  使用说明： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。
    * protocolPort  监听器的前端监听端口。  [当监听器的protocol为IP时，前端端口固定为0。](tag:hws_eu) 支持多值查询，查询条件格式：*protocol_port=xxx&protocol_port=xxx*。
    * protocol  监听器的监听协议。  [取值：TCP、UDP、HTTP、HTTPS、TERMINATED_HTTPS、QUIC、TLS。 说明：TERMINATED_HTTPS为共享型LB上的监听器独有的协议。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,fcs,dt)  [取值：TCP、UDP、HTTP、HTTPS。](tag:hcso_dt) [取值：TCP、UDP、IP、HTTP、HTTPS。IP为网关型LB上的监听器独有的协议。](tag:hws_eu)  支持多值查询，查询条件格式：*protocol=xxx&protocol=xxx*。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt,dt_test)
    * description  监听器的描述信息。  支持多值查询，查询条件格式：*description=xxx&description=xxx*。
    * defaultTlsContainerRef  监听器的服务器证书ID。  支持多值查询，查询条件格式： *default_tls_container_ref=xxx&default_tls_container_ref=xxx*。
    * clientCaTlsContainerRef  监听器的CA证书ID。  支持多值查询，查询条件格式： *client_ca_tls_container_ref=xxx&client_ca_tls_container_ref=xxx*。
    * adminStateUp  监听器的管理状态。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    * connectionLimit  ​监听器的最大连接数。  取值：-1表示不限制连接数。  支持多值查询，查询条件格式：*connection_limit=xxx&connection_limit=xxx*。  不支持该字段，请勿使用。
    * defaultPoolId  监听器的默认后端云服务器组ID。当请求没有匹配的转发策略时，转发到默认后端云服务器上处理。  支持多值查询，查询条件格式：*default_pool_id=xxx&default_pool_id=xxx*。
    * id  监听器ID。  支持多值查询，查询条件格式：*id=xxx&id=xxx*。
    * name  监听器名称。  支持多值查询，查询条件格式：*name=xxx&name=xxx*。
    * http2Enable  客户端与LB之间的HTTPS请求的HTTP2功能的开启状态。 开启后，可提升客户端与LB间的访问性能，但LB与后端服务器间仍采用HTTP1.X协议。  使用说明： - 仅HTTPS协议监听器有效。 - QUIC监听器不能设置该字段，固定返回为true。 - 其他协议的监听器可设置该字段但无效，无论取值如何都不影响监听器正常运行。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt,dt_test)
    * loadbalancerId  监听器所属的负载均衡器ID。  支持多值查询，查询条件格式：*loadbalancer_id=xxx&loadbalancer_id=xxx*。
    * tlsCiphersPolicy  监听器使用的安全策略。  支持多值查询，查询条件格式：*tls_ciphers_policy=xxx&tls_ciphers_policy=xxx*。
    * memberAddress  后端云服务器的IP地址。仅用于查询条件，不作为响应参数字段。  支持多值查询，查询条件格式：*member_address=xxx&member_address=xxx*。
    * memberDeviceId  后端云服务器对应的弹性云服务器的ID。仅用于查询条件，不作为响应参数字段。  支持多值查询，查询条件格式：*member_device_id=xxx&member_device_id=xxx*。
    * enterpriseProjectId  企业项目ID。不传时查询default企业项目\"0\"下的资源，鉴权按照default企业项目鉴权； 如果传值，则传已存在的企业项目ID或all_granted_eps（表示查询所有企业项目）进行查询。  支持多值查询，查询条件格式：*enterprise_project_id=xxx&enterprise_project_id=xxx*。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    * enableMemberRetry  是否开启后端服务器的重试。  取值：true 开启重试，false 不开启重试。
    * memberTimeout  等待后端服务器响应超时时间。请求转发后端服务器后，在等待超时member_timeout时长没有响应，负载均衡将终止等待，并返回 HTTP504错误码。  取值：1-3600s。  支持多值查询，查询条件格式：*member_timeout=xxx&member_timeout=xxx*。
    * clientTimeout  等待客户端请求超时时间，包括两种情况： - 读取整个客户端请求头的超时时长：如果客户端未在超时时长内发送完整个请求头，则请求将被中断 - 两个连续body体的数据包到达LB的时间间隔，超出client_timeout将会断开连接。  取值：1-3600s。  支持多值查询，查询条件格式：*client_timeout=xxx&client_timeout=xxx*。
    * keepaliveTimeout  客户端连接空闲超时时间。在超过keepalive_timeout时长一直没有请求， 负载均衡会暂时中断当前连接，直到下一次请求时重新建立新的连接。  取值： - TCP监听器[和IP监听器](tag:hws_eu)：10-4000s。 - HTTP/HTTPS/TERMINATED_HTTPS监听器：0-4000s。 [- 共享型实例的UDP监听器不支持此字段。](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,fcs,dt,dt_test,hk_tm)  支持多值查询，查询条件格式：*keepalive_timeout=xxx&keepalive_timeout=xxx*。
    * transparentClientIpEnable  是否透传客户端IP地址。开启后客户端IP地址将透传到后端服务器。  [仅作用于共享型LB的TCP/UDP监听器。取值：true开启，false不开启。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,fcs,dt,hk_tm)
    * proxyProtocolEnable  是否开启proxy_protocol。仅TLS监听器可指定，其他协议的监听器该字段不生效，proxy_protocol不开启。
    * enhanceL7policyEnable  是否开启高级转发策略功能。开启高级转发策略后，支持更灵活的转发策略和转发规则设置。  取值：true开启，false不开启。  [荷兰region不支持该字段，请勿使用。](tag:dt,dt_test)
    * memberInstanceId  后端云服务器ID。仅用于查询条件，不作为响应参数字段。  支持多值查询，查询条件格式：*member_instance_id=xxx&member_instance_id=xxx*。
    * protectionStatus  修改保护状态, 取值： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'limit' => 'int32',
        'marker' => null,
        'pageReverse' => null,
        'protocolPort' => null,
        'protocol' => null,
        'description' => null,
        'defaultTlsContainerRef' => null,
        'clientCaTlsContainerRef' => null,
        'adminStateUp' => null,
        'connectionLimit' => 'int32',
        'defaultPoolId' => null,
        'id' => null,
        'name' => null,
        'http2Enable' => null,
        'loadbalancerId' => null,
        'tlsCiphersPolicy' => null,
        'memberAddress' => null,
        'memberDeviceId' => null,
        'enterpriseProjectId' => null,
        'enableMemberRetry' => null,
        'memberTimeout' => 'int32',
        'clientTimeout' => 'int32',
        'keepaliveTimeout' => 'int32',
        'transparentClientIpEnable' => null,
        'proxyProtocolEnable' => null,
        'enhanceL7policyEnable' => null,
        'memberInstanceId' => null,
        'protectionStatus' => null
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
    * limit  参数解释：每页返回的个数。  取值范围：0-2000  默认取值：2000
    * marker  上一页最后一条记录的ID。  使用说明： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。
    * pageReverse  是否反向查询。  取值： - true：查询上一页。 - false：查询下一页，默认。  使用说明： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。
    * protocolPort  监听器的前端监听端口。  [当监听器的protocol为IP时，前端端口固定为0。](tag:hws_eu) 支持多值查询，查询条件格式：*protocol_port=xxx&protocol_port=xxx*。
    * protocol  监听器的监听协议。  [取值：TCP、UDP、HTTP、HTTPS、TERMINATED_HTTPS、QUIC、TLS。 说明：TERMINATED_HTTPS为共享型LB上的监听器独有的协议。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,fcs,dt)  [取值：TCP、UDP、HTTP、HTTPS。](tag:hcso_dt) [取值：TCP、UDP、IP、HTTP、HTTPS。IP为网关型LB上的监听器独有的协议。](tag:hws_eu)  支持多值查询，查询条件格式：*protocol=xxx&protocol=xxx*。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt,dt_test)
    * description  监听器的描述信息。  支持多值查询，查询条件格式：*description=xxx&description=xxx*。
    * defaultTlsContainerRef  监听器的服务器证书ID。  支持多值查询，查询条件格式： *default_tls_container_ref=xxx&default_tls_container_ref=xxx*。
    * clientCaTlsContainerRef  监听器的CA证书ID。  支持多值查询，查询条件格式： *client_ca_tls_container_ref=xxx&client_ca_tls_container_ref=xxx*。
    * adminStateUp  监听器的管理状态。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    * connectionLimit  ​监听器的最大连接数。  取值：-1表示不限制连接数。  支持多值查询，查询条件格式：*connection_limit=xxx&connection_limit=xxx*。  不支持该字段，请勿使用。
    * defaultPoolId  监听器的默认后端云服务器组ID。当请求没有匹配的转发策略时，转发到默认后端云服务器上处理。  支持多值查询，查询条件格式：*default_pool_id=xxx&default_pool_id=xxx*。
    * id  监听器ID。  支持多值查询，查询条件格式：*id=xxx&id=xxx*。
    * name  监听器名称。  支持多值查询，查询条件格式：*name=xxx&name=xxx*。
    * http2Enable  客户端与LB之间的HTTPS请求的HTTP2功能的开启状态。 开启后，可提升客户端与LB间的访问性能，但LB与后端服务器间仍采用HTTP1.X协议。  使用说明： - 仅HTTPS协议监听器有效。 - QUIC监听器不能设置该字段，固定返回为true。 - 其他协议的监听器可设置该字段但无效，无论取值如何都不影响监听器正常运行。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt,dt_test)
    * loadbalancerId  监听器所属的负载均衡器ID。  支持多值查询，查询条件格式：*loadbalancer_id=xxx&loadbalancer_id=xxx*。
    * tlsCiphersPolicy  监听器使用的安全策略。  支持多值查询，查询条件格式：*tls_ciphers_policy=xxx&tls_ciphers_policy=xxx*。
    * memberAddress  后端云服务器的IP地址。仅用于查询条件，不作为响应参数字段。  支持多值查询，查询条件格式：*member_address=xxx&member_address=xxx*。
    * memberDeviceId  后端云服务器对应的弹性云服务器的ID。仅用于查询条件，不作为响应参数字段。  支持多值查询，查询条件格式：*member_device_id=xxx&member_device_id=xxx*。
    * enterpriseProjectId  企业项目ID。不传时查询default企业项目\"0\"下的资源，鉴权按照default企业项目鉴权； 如果传值，则传已存在的企业项目ID或all_granted_eps（表示查询所有企业项目）进行查询。  支持多值查询，查询条件格式：*enterprise_project_id=xxx&enterprise_project_id=xxx*。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    * enableMemberRetry  是否开启后端服务器的重试。  取值：true 开启重试，false 不开启重试。
    * memberTimeout  等待后端服务器响应超时时间。请求转发后端服务器后，在等待超时member_timeout时长没有响应，负载均衡将终止等待，并返回 HTTP504错误码。  取值：1-3600s。  支持多值查询，查询条件格式：*member_timeout=xxx&member_timeout=xxx*。
    * clientTimeout  等待客户端请求超时时间，包括两种情况： - 读取整个客户端请求头的超时时长：如果客户端未在超时时长内发送完整个请求头，则请求将被中断 - 两个连续body体的数据包到达LB的时间间隔，超出client_timeout将会断开连接。  取值：1-3600s。  支持多值查询，查询条件格式：*client_timeout=xxx&client_timeout=xxx*。
    * keepaliveTimeout  客户端连接空闲超时时间。在超过keepalive_timeout时长一直没有请求， 负载均衡会暂时中断当前连接，直到下一次请求时重新建立新的连接。  取值： - TCP监听器[和IP监听器](tag:hws_eu)：10-4000s。 - HTTP/HTTPS/TERMINATED_HTTPS监听器：0-4000s。 [- 共享型实例的UDP监听器不支持此字段。](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,fcs,dt,dt_test,hk_tm)  支持多值查询，查询条件格式：*keepalive_timeout=xxx&keepalive_timeout=xxx*。
    * transparentClientIpEnable  是否透传客户端IP地址。开启后客户端IP地址将透传到后端服务器。  [仅作用于共享型LB的TCP/UDP监听器。取值：true开启，false不开启。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,fcs,dt,hk_tm)
    * proxyProtocolEnable  是否开启proxy_protocol。仅TLS监听器可指定，其他协议的监听器该字段不生效，proxy_protocol不开启。
    * enhanceL7policyEnable  是否开启高级转发策略功能。开启高级转发策略后，支持更灵活的转发策略和转发规则设置。  取值：true开启，false不开启。  [荷兰region不支持该字段，请勿使用。](tag:dt,dt_test)
    * memberInstanceId  后端云服务器ID。仅用于查询条件，不作为响应参数字段。  支持多值查询，查询条件格式：*member_instance_id=xxx&member_instance_id=xxx*。
    * protectionStatus  修改保护状态, 取值： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'limit' => 'limit',
            'marker' => 'marker',
            'pageReverse' => 'page_reverse',
            'protocolPort' => 'protocol_port',
            'protocol' => 'protocol',
            'description' => 'description',
            'defaultTlsContainerRef' => 'default_tls_container_ref',
            'clientCaTlsContainerRef' => 'client_ca_tls_container_ref',
            'adminStateUp' => 'admin_state_up',
            'connectionLimit' => 'connection_limit',
            'defaultPoolId' => 'default_pool_id',
            'id' => 'id',
            'name' => 'name',
            'http2Enable' => 'http2_enable',
            'loadbalancerId' => 'loadbalancer_id',
            'tlsCiphersPolicy' => 'tls_ciphers_policy',
            'memberAddress' => 'member_address',
            'memberDeviceId' => 'member_device_id',
            'enterpriseProjectId' => 'enterprise_project_id',
            'enableMemberRetry' => 'enable_member_retry',
            'memberTimeout' => 'member_timeout',
            'clientTimeout' => 'client_timeout',
            'keepaliveTimeout' => 'keepalive_timeout',
            'transparentClientIpEnable' => 'transparent_client_ip_enable',
            'proxyProtocolEnable' => 'proxy_protocol_enable',
            'enhanceL7policyEnable' => 'enhance_l7policy_enable',
            'memberInstanceId' => 'member_instance_id',
            'protectionStatus' => 'protection_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limit  参数解释：每页返回的个数。  取值范围：0-2000  默认取值：2000
    * marker  上一页最后一条记录的ID。  使用说明： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。
    * pageReverse  是否反向查询。  取值： - true：查询上一页。 - false：查询下一页，默认。  使用说明： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。
    * protocolPort  监听器的前端监听端口。  [当监听器的protocol为IP时，前端端口固定为0。](tag:hws_eu) 支持多值查询，查询条件格式：*protocol_port=xxx&protocol_port=xxx*。
    * protocol  监听器的监听协议。  [取值：TCP、UDP、HTTP、HTTPS、TERMINATED_HTTPS、QUIC、TLS。 说明：TERMINATED_HTTPS为共享型LB上的监听器独有的协议。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,fcs,dt)  [取值：TCP、UDP、HTTP、HTTPS。](tag:hcso_dt) [取值：TCP、UDP、IP、HTTP、HTTPS。IP为网关型LB上的监听器独有的协议。](tag:hws_eu)  支持多值查询，查询条件格式：*protocol=xxx&protocol=xxx*。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt,dt_test)
    * description  监听器的描述信息。  支持多值查询，查询条件格式：*description=xxx&description=xxx*。
    * defaultTlsContainerRef  监听器的服务器证书ID。  支持多值查询，查询条件格式： *default_tls_container_ref=xxx&default_tls_container_ref=xxx*。
    * clientCaTlsContainerRef  监听器的CA证书ID。  支持多值查询，查询条件格式： *client_ca_tls_container_ref=xxx&client_ca_tls_container_ref=xxx*。
    * adminStateUp  监听器的管理状态。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    * connectionLimit  ​监听器的最大连接数。  取值：-1表示不限制连接数。  支持多值查询，查询条件格式：*connection_limit=xxx&connection_limit=xxx*。  不支持该字段，请勿使用。
    * defaultPoolId  监听器的默认后端云服务器组ID。当请求没有匹配的转发策略时，转发到默认后端云服务器上处理。  支持多值查询，查询条件格式：*default_pool_id=xxx&default_pool_id=xxx*。
    * id  监听器ID。  支持多值查询，查询条件格式：*id=xxx&id=xxx*。
    * name  监听器名称。  支持多值查询，查询条件格式：*name=xxx&name=xxx*。
    * http2Enable  客户端与LB之间的HTTPS请求的HTTP2功能的开启状态。 开启后，可提升客户端与LB间的访问性能，但LB与后端服务器间仍采用HTTP1.X协议。  使用说明： - 仅HTTPS协议监听器有效。 - QUIC监听器不能设置该字段，固定返回为true。 - 其他协议的监听器可设置该字段但无效，无论取值如何都不影响监听器正常运行。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt,dt_test)
    * loadbalancerId  监听器所属的负载均衡器ID。  支持多值查询，查询条件格式：*loadbalancer_id=xxx&loadbalancer_id=xxx*。
    * tlsCiphersPolicy  监听器使用的安全策略。  支持多值查询，查询条件格式：*tls_ciphers_policy=xxx&tls_ciphers_policy=xxx*。
    * memberAddress  后端云服务器的IP地址。仅用于查询条件，不作为响应参数字段。  支持多值查询，查询条件格式：*member_address=xxx&member_address=xxx*。
    * memberDeviceId  后端云服务器对应的弹性云服务器的ID。仅用于查询条件，不作为响应参数字段。  支持多值查询，查询条件格式：*member_device_id=xxx&member_device_id=xxx*。
    * enterpriseProjectId  企业项目ID。不传时查询default企业项目\"0\"下的资源，鉴权按照default企业项目鉴权； 如果传值，则传已存在的企业项目ID或all_granted_eps（表示查询所有企业项目）进行查询。  支持多值查询，查询条件格式：*enterprise_project_id=xxx&enterprise_project_id=xxx*。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    * enableMemberRetry  是否开启后端服务器的重试。  取值：true 开启重试，false 不开启重试。
    * memberTimeout  等待后端服务器响应超时时间。请求转发后端服务器后，在等待超时member_timeout时长没有响应，负载均衡将终止等待，并返回 HTTP504错误码。  取值：1-3600s。  支持多值查询，查询条件格式：*member_timeout=xxx&member_timeout=xxx*。
    * clientTimeout  等待客户端请求超时时间，包括两种情况： - 读取整个客户端请求头的超时时长：如果客户端未在超时时长内发送完整个请求头，则请求将被中断 - 两个连续body体的数据包到达LB的时间间隔，超出client_timeout将会断开连接。  取值：1-3600s。  支持多值查询，查询条件格式：*client_timeout=xxx&client_timeout=xxx*。
    * keepaliveTimeout  客户端连接空闲超时时间。在超过keepalive_timeout时长一直没有请求， 负载均衡会暂时中断当前连接，直到下一次请求时重新建立新的连接。  取值： - TCP监听器[和IP监听器](tag:hws_eu)：10-4000s。 - HTTP/HTTPS/TERMINATED_HTTPS监听器：0-4000s。 [- 共享型实例的UDP监听器不支持此字段。](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,fcs,dt,dt_test,hk_tm)  支持多值查询，查询条件格式：*keepalive_timeout=xxx&keepalive_timeout=xxx*。
    * transparentClientIpEnable  是否透传客户端IP地址。开启后客户端IP地址将透传到后端服务器。  [仅作用于共享型LB的TCP/UDP监听器。取值：true开启，false不开启。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,fcs,dt,hk_tm)
    * proxyProtocolEnable  是否开启proxy_protocol。仅TLS监听器可指定，其他协议的监听器该字段不生效，proxy_protocol不开启。
    * enhanceL7policyEnable  是否开启高级转发策略功能。开启高级转发策略后，支持更灵活的转发策略和转发规则设置。  取值：true开启，false不开启。  [荷兰region不支持该字段，请勿使用。](tag:dt,dt_test)
    * memberInstanceId  后端云服务器ID。仅用于查询条件，不作为响应参数字段。  支持多值查询，查询条件格式：*member_instance_id=xxx&member_instance_id=xxx*。
    * protectionStatus  修改保护状态, 取值： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
    *
    * @var string[]
    */
    protected static $setters = [
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'pageReverse' => 'setPageReverse',
            'protocolPort' => 'setProtocolPort',
            'protocol' => 'setProtocol',
            'description' => 'setDescription',
            'defaultTlsContainerRef' => 'setDefaultTlsContainerRef',
            'clientCaTlsContainerRef' => 'setClientCaTlsContainerRef',
            'adminStateUp' => 'setAdminStateUp',
            'connectionLimit' => 'setConnectionLimit',
            'defaultPoolId' => 'setDefaultPoolId',
            'id' => 'setId',
            'name' => 'setName',
            'http2Enable' => 'setHttp2Enable',
            'loadbalancerId' => 'setLoadbalancerId',
            'tlsCiphersPolicy' => 'setTlsCiphersPolicy',
            'memberAddress' => 'setMemberAddress',
            'memberDeviceId' => 'setMemberDeviceId',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'enableMemberRetry' => 'setEnableMemberRetry',
            'memberTimeout' => 'setMemberTimeout',
            'clientTimeout' => 'setClientTimeout',
            'keepaliveTimeout' => 'setKeepaliveTimeout',
            'transparentClientIpEnable' => 'setTransparentClientIpEnable',
            'proxyProtocolEnable' => 'setProxyProtocolEnable',
            'enhanceL7policyEnable' => 'setEnhanceL7policyEnable',
            'memberInstanceId' => 'setMemberInstanceId',
            'protectionStatus' => 'setProtectionStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limit  参数解释：每页返回的个数。  取值范围：0-2000  默认取值：2000
    * marker  上一页最后一条记录的ID。  使用说明： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。
    * pageReverse  是否反向查询。  取值： - true：查询上一页。 - false：查询下一页，默认。  使用说明： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。
    * protocolPort  监听器的前端监听端口。  [当监听器的protocol为IP时，前端端口固定为0。](tag:hws_eu) 支持多值查询，查询条件格式：*protocol_port=xxx&protocol_port=xxx*。
    * protocol  监听器的监听协议。  [取值：TCP、UDP、HTTP、HTTPS、TERMINATED_HTTPS、QUIC、TLS。 说明：TERMINATED_HTTPS为共享型LB上的监听器独有的协议。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,fcs,dt)  [取值：TCP、UDP、HTTP、HTTPS。](tag:hcso_dt) [取值：TCP、UDP、IP、HTTP、HTTPS。IP为网关型LB上的监听器独有的协议。](tag:hws_eu)  支持多值查询，查询条件格式：*protocol=xxx&protocol=xxx*。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt,dt_test)
    * description  监听器的描述信息。  支持多值查询，查询条件格式：*description=xxx&description=xxx*。
    * defaultTlsContainerRef  监听器的服务器证书ID。  支持多值查询，查询条件格式： *default_tls_container_ref=xxx&default_tls_container_ref=xxx*。
    * clientCaTlsContainerRef  监听器的CA证书ID。  支持多值查询，查询条件格式： *client_ca_tls_container_ref=xxx&client_ca_tls_container_ref=xxx*。
    * adminStateUp  监听器的管理状态。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    * connectionLimit  ​监听器的最大连接数。  取值：-1表示不限制连接数。  支持多值查询，查询条件格式：*connection_limit=xxx&connection_limit=xxx*。  不支持该字段，请勿使用。
    * defaultPoolId  监听器的默认后端云服务器组ID。当请求没有匹配的转发策略时，转发到默认后端云服务器上处理。  支持多值查询，查询条件格式：*default_pool_id=xxx&default_pool_id=xxx*。
    * id  监听器ID。  支持多值查询，查询条件格式：*id=xxx&id=xxx*。
    * name  监听器名称。  支持多值查询，查询条件格式：*name=xxx&name=xxx*。
    * http2Enable  客户端与LB之间的HTTPS请求的HTTP2功能的开启状态。 开启后，可提升客户端与LB间的访问性能，但LB与后端服务器间仍采用HTTP1.X协议。  使用说明： - 仅HTTPS协议监听器有效。 - QUIC监听器不能设置该字段，固定返回为true。 - 其他协议的监听器可设置该字段但无效，无论取值如何都不影响监听器正常运行。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt,dt_test)
    * loadbalancerId  监听器所属的负载均衡器ID。  支持多值查询，查询条件格式：*loadbalancer_id=xxx&loadbalancer_id=xxx*。
    * tlsCiphersPolicy  监听器使用的安全策略。  支持多值查询，查询条件格式：*tls_ciphers_policy=xxx&tls_ciphers_policy=xxx*。
    * memberAddress  后端云服务器的IP地址。仅用于查询条件，不作为响应参数字段。  支持多值查询，查询条件格式：*member_address=xxx&member_address=xxx*。
    * memberDeviceId  后端云服务器对应的弹性云服务器的ID。仅用于查询条件，不作为响应参数字段。  支持多值查询，查询条件格式：*member_device_id=xxx&member_device_id=xxx*。
    * enterpriseProjectId  企业项目ID。不传时查询default企业项目\"0\"下的资源，鉴权按照default企业项目鉴权； 如果传值，则传已存在的企业项目ID或all_granted_eps（表示查询所有企业项目）进行查询。  支持多值查询，查询条件格式：*enterprise_project_id=xxx&enterprise_project_id=xxx*。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    * enableMemberRetry  是否开启后端服务器的重试。  取值：true 开启重试，false 不开启重试。
    * memberTimeout  等待后端服务器响应超时时间。请求转发后端服务器后，在等待超时member_timeout时长没有响应，负载均衡将终止等待，并返回 HTTP504错误码。  取值：1-3600s。  支持多值查询，查询条件格式：*member_timeout=xxx&member_timeout=xxx*。
    * clientTimeout  等待客户端请求超时时间，包括两种情况： - 读取整个客户端请求头的超时时长：如果客户端未在超时时长内发送完整个请求头，则请求将被中断 - 两个连续body体的数据包到达LB的时间间隔，超出client_timeout将会断开连接。  取值：1-3600s。  支持多值查询，查询条件格式：*client_timeout=xxx&client_timeout=xxx*。
    * keepaliveTimeout  客户端连接空闲超时时间。在超过keepalive_timeout时长一直没有请求， 负载均衡会暂时中断当前连接，直到下一次请求时重新建立新的连接。  取值： - TCP监听器[和IP监听器](tag:hws_eu)：10-4000s。 - HTTP/HTTPS/TERMINATED_HTTPS监听器：0-4000s。 [- 共享型实例的UDP监听器不支持此字段。](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,fcs,dt,dt_test,hk_tm)  支持多值查询，查询条件格式：*keepalive_timeout=xxx&keepalive_timeout=xxx*。
    * transparentClientIpEnable  是否透传客户端IP地址。开启后客户端IP地址将透传到后端服务器。  [仅作用于共享型LB的TCP/UDP监听器。取值：true开启，false不开启。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,fcs,dt,hk_tm)
    * proxyProtocolEnable  是否开启proxy_protocol。仅TLS监听器可指定，其他协议的监听器该字段不生效，proxy_protocol不开启。
    * enhanceL7policyEnable  是否开启高级转发策略功能。开启高级转发策略后，支持更灵活的转发策略和转发规则设置。  取值：true开启，false不开启。  [荷兰region不支持该字段，请勿使用。](tag:dt,dt_test)
    * memberInstanceId  后端云服务器ID。仅用于查询条件，不作为响应参数字段。  支持多值查询，查询条件格式：*member_instance_id=xxx&member_instance_id=xxx*。
    * protectionStatus  修改保护状态, 取值： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
    *
    * @var string[]
    */
    protected static $getters = [
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'pageReverse' => 'getPageReverse',
            'protocolPort' => 'getProtocolPort',
            'protocol' => 'getProtocol',
            'description' => 'getDescription',
            'defaultTlsContainerRef' => 'getDefaultTlsContainerRef',
            'clientCaTlsContainerRef' => 'getClientCaTlsContainerRef',
            'adminStateUp' => 'getAdminStateUp',
            'connectionLimit' => 'getConnectionLimit',
            'defaultPoolId' => 'getDefaultPoolId',
            'id' => 'getId',
            'name' => 'getName',
            'http2Enable' => 'getHttp2Enable',
            'loadbalancerId' => 'getLoadbalancerId',
            'tlsCiphersPolicy' => 'getTlsCiphersPolicy',
            'memberAddress' => 'getMemberAddress',
            'memberDeviceId' => 'getMemberDeviceId',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'enableMemberRetry' => 'getEnableMemberRetry',
            'memberTimeout' => 'getMemberTimeout',
            'clientTimeout' => 'getClientTimeout',
            'keepaliveTimeout' => 'getKeepaliveTimeout',
            'transparentClientIpEnable' => 'getTransparentClientIpEnable',
            'proxyProtocolEnable' => 'getProxyProtocolEnable',
            'enhanceL7policyEnable' => 'getEnhanceL7policyEnable',
            'memberInstanceId' => 'getMemberInstanceId',
            'protectionStatus' => 'getProtectionStatus'
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
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['pageReverse'] = isset($data['pageReverse']) ? $data['pageReverse'] : null;
        $this->container['protocolPort'] = isset($data['protocolPort']) ? $data['protocolPort'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['defaultTlsContainerRef'] = isset($data['defaultTlsContainerRef']) ? $data['defaultTlsContainerRef'] : null;
        $this->container['clientCaTlsContainerRef'] = isset($data['clientCaTlsContainerRef']) ? $data['clientCaTlsContainerRef'] : null;
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['connectionLimit'] = isset($data['connectionLimit']) ? $data['connectionLimit'] : null;
        $this->container['defaultPoolId'] = isset($data['defaultPoolId']) ? $data['defaultPoolId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['http2Enable'] = isset($data['http2Enable']) ? $data['http2Enable'] : null;
        $this->container['loadbalancerId'] = isset($data['loadbalancerId']) ? $data['loadbalancerId'] : null;
        $this->container['tlsCiphersPolicy'] = isset($data['tlsCiphersPolicy']) ? $data['tlsCiphersPolicy'] : null;
        $this->container['memberAddress'] = isset($data['memberAddress']) ? $data['memberAddress'] : null;
        $this->container['memberDeviceId'] = isset($data['memberDeviceId']) ? $data['memberDeviceId'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['enableMemberRetry'] = isset($data['enableMemberRetry']) ? $data['enableMemberRetry'] : null;
        $this->container['memberTimeout'] = isset($data['memberTimeout']) ? $data['memberTimeout'] : null;
        $this->container['clientTimeout'] = isset($data['clientTimeout']) ? $data['clientTimeout'] : null;
        $this->container['keepaliveTimeout'] = isset($data['keepaliveTimeout']) ? $data['keepaliveTimeout'] : null;
        $this->container['transparentClientIpEnable'] = isset($data['transparentClientIpEnable']) ? $data['transparentClientIpEnable'] : null;
        $this->container['proxyProtocolEnable'] = isset($data['proxyProtocolEnable']) ? $data['proxyProtocolEnable'] : null;
        $this->container['enhanceL7policyEnable'] = isset($data['enhanceL7policyEnable']) ? $data['enhanceL7policyEnable'] : null;
        $this->container['memberInstanceId'] = isset($data['memberInstanceId']) ? $data['memberInstanceId'] : null;
        $this->container['protectionStatus'] = isset($data['protectionStatus']) ? $data['protectionStatus'] : null;
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
    * Gets limit
    *  参数解释：每页返回的个数。  取值范围：0-2000  默认取值：2000
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
    * @param int|null $limit 参数解释：每页返回的个数。  取值范围：0-2000  默认取值：2000
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets marker
    *  上一页最后一条记录的ID。  使用说明： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。
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
    * @param string|null $marker 上一页最后一条记录的ID。  使用说明： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets pageReverse
    *  是否反向查询。  取值： - true：查询上一页。 - false：查询下一页，默认。  使用说明： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。
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
    * @param bool|null $pageReverse 是否反向查询。  取值： - true：查询上一页。 - false：查询下一页，默认。  使用说明： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。
    *
    * @return $this
    */
    public function setPageReverse($pageReverse)
    {
        $this->container['pageReverse'] = $pageReverse;
        return $this;
    }

    /**
    * Gets protocolPort
    *  监听器的前端监听端口。  [当监听器的protocol为IP时，前端端口固定为0。](tag:hws_eu) 支持多值查询，查询条件格式：*protocol_port=xxx&protocol_port=xxx*。
    *
    * @return string[]|null
    */
    public function getProtocolPort()
    {
        return $this->container['protocolPort'];
    }

    /**
    * Sets protocolPort
    *
    * @param string[]|null $protocolPort 监听器的前端监听端口。  [当监听器的protocol为IP时，前端端口固定为0。](tag:hws_eu) 支持多值查询，查询条件格式：*protocol_port=xxx&protocol_port=xxx*。
    *
    * @return $this
    */
    public function setProtocolPort($protocolPort)
    {
        $this->container['protocolPort'] = $protocolPort;
        return $this;
    }

    /**
    * Gets protocol
    *  监听器的监听协议。  [取值：TCP、UDP、HTTP、HTTPS、TERMINATED_HTTPS、QUIC、TLS。 说明：TERMINATED_HTTPS为共享型LB上的监听器独有的协议。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,fcs,dt)  [取值：TCP、UDP、HTTP、HTTPS。](tag:hcso_dt) [取值：TCP、UDP、IP、HTTP、HTTPS。IP为网关型LB上的监听器独有的协议。](tag:hws_eu)  支持多值查询，查询条件格式：*protocol=xxx&protocol=xxx*。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt,dt_test)
    *
    * @return string[]|null
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string[]|null $protocol 监听器的监听协议。  [取值：TCP、UDP、HTTP、HTTPS、TERMINATED_HTTPS、QUIC、TLS。 说明：TERMINATED_HTTPS为共享型LB上的监听器独有的协议。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,fcs,dt)  [取值：TCP、UDP、HTTP、HTTPS。](tag:hcso_dt) [取值：TCP、UDP、IP、HTTP、HTTPS。IP为网关型LB上的监听器独有的协议。](tag:hws_eu)  支持多值查询，查询条件格式：*protocol=xxx&protocol=xxx*。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt,dt_test)
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets description
    *  监听器的描述信息。  支持多值查询，查询条件格式：*description=xxx&description=xxx*。
    *
    * @return string[]|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string[]|null $description 监听器的描述信息。  支持多值查询，查询条件格式：*description=xxx&description=xxx*。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets defaultTlsContainerRef
    *  监听器的服务器证书ID。  支持多值查询，查询条件格式： *default_tls_container_ref=xxx&default_tls_container_ref=xxx*。
    *
    * @return string[]|null
    */
    public function getDefaultTlsContainerRef()
    {
        return $this->container['defaultTlsContainerRef'];
    }

    /**
    * Sets defaultTlsContainerRef
    *
    * @param string[]|null $defaultTlsContainerRef 监听器的服务器证书ID。  支持多值查询，查询条件格式： *default_tls_container_ref=xxx&default_tls_container_ref=xxx*。
    *
    * @return $this
    */
    public function setDefaultTlsContainerRef($defaultTlsContainerRef)
    {
        $this->container['defaultTlsContainerRef'] = $defaultTlsContainerRef;
        return $this;
    }

    /**
    * Gets clientCaTlsContainerRef
    *  监听器的CA证书ID。  支持多值查询，查询条件格式： *client_ca_tls_container_ref=xxx&client_ca_tls_container_ref=xxx*。
    *
    * @return string[]|null
    */
    public function getClientCaTlsContainerRef()
    {
        return $this->container['clientCaTlsContainerRef'];
    }

    /**
    * Sets clientCaTlsContainerRef
    *
    * @param string[]|null $clientCaTlsContainerRef 监听器的CA证书ID。  支持多值查询，查询条件格式： *client_ca_tls_container_ref=xxx&client_ca_tls_container_ref=xxx*。
    *
    * @return $this
    */
    public function setClientCaTlsContainerRef($clientCaTlsContainerRef)
    {
        $this->container['clientCaTlsContainerRef'] = $clientCaTlsContainerRef;
        return $this;
    }

    /**
    * Gets adminStateUp
    *  监听器的管理状态。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
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
    * @param bool|null $adminStateUp 监听器的管理状态。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets connectionLimit
    *  ​监听器的最大连接数。  取值：-1表示不限制连接数。  支持多值查询，查询条件格式：*connection_limit=xxx&connection_limit=xxx*。  不支持该字段，请勿使用。
    *
    * @return int[]|null
    */
    public function getConnectionLimit()
    {
        return $this->container['connectionLimit'];
    }

    /**
    * Sets connectionLimit
    *
    * @param int[]|null $connectionLimit ​监听器的最大连接数。  取值：-1表示不限制连接数。  支持多值查询，查询条件格式：*connection_limit=xxx&connection_limit=xxx*。  不支持该字段，请勿使用。
    *
    * @return $this
    */
    public function setConnectionLimit($connectionLimit)
    {
        $this->container['connectionLimit'] = $connectionLimit;
        return $this;
    }

    /**
    * Gets defaultPoolId
    *  监听器的默认后端云服务器组ID。当请求没有匹配的转发策略时，转发到默认后端云服务器上处理。  支持多值查询，查询条件格式：*default_pool_id=xxx&default_pool_id=xxx*。
    *
    * @return string[]|null
    */
    public function getDefaultPoolId()
    {
        return $this->container['defaultPoolId'];
    }

    /**
    * Sets defaultPoolId
    *
    * @param string[]|null $defaultPoolId 监听器的默认后端云服务器组ID。当请求没有匹配的转发策略时，转发到默认后端云服务器上处理。  支持多值查询，查询条件格式：*default_pool_id=xxx&default_pool_id=xxx*。
    *
    * @return $this
    */
    public function setDefaultPoolId($defaultPoolId)
    {
        $this->container['defaultPoolId'] = $defaultPoolId;
        return $this;
    }

    /**
    * Gets id
    *  监听器ID。  支持多值查询，查询条件格式：*id=xxx&id=xxx*。
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
    * @param string[]|null $id 监听器ID。  支持多值查询，查询条件格式：*id=xxx&id=xxx*。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  监听器名称。  支持多值查询，查询条件格式：*name=xxx&name=xxx*。
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
    * @param string[]|null $name 监听器名称。  支持多值查询，查询条件格式：*name=xxx&name=xxx*。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets http2Enable
    *  客户端与LB之间的HTTPS请求的HTTP2功能的开启状态。 开启后，可提升客户端与LB间的访问性能，但LB与后端服务器间仍采用HTTP1.X协议。  使用说明： - 仅HTTPS协议监听器有效。 - QUIC监听器不能设置该字段，固定返回为true。 - 其他协议的监听器可设置该字段但无效，无论取值如何都不影响监听器正常运行。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt,dt_test)
    *
    * @return bool|null
    */
    public function getHttp2Enable()
    {
        return $this->container['http2Enable'];
    }

    /**
    * Sets http2Enable
    *
    * @param bool|null $http2Enable 客户端与LB之间的HTTPS请求的HTTP2功能的开启状态。 开启后，可提升客户端与LB间的访问性能，但LB与后端服务器间仍采用HTTP1.X协议。  使用说明： - 仅HTTPS协议监听器有效。 - QUIC监听器不能设置该字段，固定返回为true。 - 其他协议的监听器可设置该字段但无效，无论取值如何都不影响监听器正常运行。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt,dt_test)
    *
    * @return $this
    */
    public function setHttp2Enable($http2Enable)
    {
        $this->container['http2Enable'] = $http2Enable;
        return $this;
    }

    /**
    * Gets loadbalancerId
    *  监听器所属的负载均衡器ID。  支持多值查询，查询条件格式：*loadbalancer_id=xxx&loadbalancer_id=xxx*。
    *
    * @return string[]|null
    */
    public function getLoadbalancerId()
    {
        return $this->container['loadbalancerId'];
    }

    /**
    * Sets loadbalancerId
    *
    * @param string[]|null $loadbalancerId 监听器所属的负载均衡器ID。  支持多值查询，查询条件格式：*loadbalancer_id=xxx&loadbalancer_id=xxx*。
    *
    * @return $this
    */
    public function setLoadbalancerId($loadbalancerId)
    {
        $this->container['loadbalancerId'] = $loadbalancerId;
        return $this;
    }

    /**
    * Gets tlsCiphersPolicy
    *  监听器使用的安全策略。  支持多值查询，查询条件格式：*tls_ciphers_policy=xxx&tls_ciphers_policy=xxx*。
    *
    * @return string[]|null
    */
    public function getTlsCiphersPolicy()
    {
        return $this->container['tlsCiphersPolicy'];
    }

    /**
    * Sets tlsCiphersPolicy
    *
    * @param string[]|null $tlsCiphersPolicy 监听器使用的安全策略。  支持多值查询，查询条件格式：*tls_ciphers_policy=xxx&tls_ciphers_policy=xxx*。
    *
    * @return $this
    */
    public function setTlsCiphersPolicy($tlsCiphersPolicy)
    {
        $this->container['tlsCiphersPolicy'] = $tlsCiphersPolicy;
        return $this;
    }

    /**
    * Gets memberAddress
    *  后端云服务器的IP地址。仅用于查询条件，不作为响应参数字段。  支持多值查询，查询条件格式：*member_address=xxx&member_address=xxx*。
    *
    * @return string[]|null
    */
    public function getMemberAddress()
    {
        return $this->container['memberAddress'];
    }

    /**
    * Sets memberAddress
    *
    * @param string[]|null $memberAddress 后端云服务器的IP地址。仅用于查询条件，不作为响应参数字段。  支持多值查询，查询条件格式：*member_address=xxx&member_address=xxx*。
    *
    * @return $this
    */
    public function setMemberAddress($memberAddress)
    {
        $this->container['memberAddress'] = $memberAddress;
        return $this;
    }

    /**
    * Gets memberDeviceId
    *  后端云服务器对应的弹性云服务器的ID。仅用于查询条件，不作为响应参数字段。  支持多值查询，查询条件格式：*member_device_id=xxx&member_device_id=xxx*。
    *
    * @return string[]|null
    */
    public function getMemberDeviceId()
    {
        return $this->container['memberDeviceId'];
    }

    /**
    * Sets memberDeviceId
    *
    * @param string[]|null $memberDeviceId 后端云服务器对应的弹性云服务器的ID。仅用于查询条件，不作为响应参数字段。  支持多值查询，查询条件格式：*member_device_id=xxx&member_device_id=xxx*。
    *
    * @return $this
    */
    public function setMemberDeviceId($memberDeviceId)
    {
        $this->container['memberDeviceId'] = $memberDeviceId;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。不传时查询default企业项目\"0\"下的资源，鉴权按照default企业项目鉴权； 如果传值，则传已存在的企业项目ID或all_granted_eps（表示查询所有企业项目）进行查询。  支持多值查询，查询条件格式：*enterprise_project_id=xxx&enterprise_project_id=xxx*。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
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
    * @param string[]|null $enterpriseProjectId 企业项目ID。不传时查询default企业项目\"0\"下的资源，鉴权按照default企业项目鉴权； 如果传值，则传已存在的企业项目ID或all_granted_eps（表示查询所有企业项目）进行查询。  支持多值查询，查询条件格式：*enterprise_project_id=xxx&enterprise_project_id=xxx*。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets enableMemberRetry
    *  是否开启后端服务器的重试。  取值：true 开启重试，false 不开启重试。
    *
    * @return bool|null
    */
    public function getEnableMemberRetry()
    {
        return $this->container['enableMemberRetry'];
    }

    /**
    * Sets enableMemberRetry
    *
    * @param bool|null $enableMemberRetry 是否开启后端服务器的重试。  取值：true 开启重试，false 不开启重试。
    *
    * @return $this
    */
    public function setEnableMemberRetry($enableMemberRetry)
    {
        $this->container['enableMemberRetry'] = $enableMemberRetry;
        return $this;
    }

    /**
    * Gets memberTimeout
    *  等待后端服务器响应超时时间。请求转发后端服务器后，在等待超时member_timeout时长没有响应，负载均衡将终止等待，并返回 HTTP504错误码。  取值：1-3600s。  支持多值查询，查询条件格式：*member_timeout=xxx&member_timeout=xxx*。
    *
    * @return int[]|null
    */
    public function getMemberTimeout()
    {
        return $this->container['memberTimeout'];
    }

    /**
    * Sets memberTimeout
    *
    * @param int[]|null $memberTimeout 等待后端服务器响应超时时间。请求转发后端服务器后，在等待超时member_timeout时长没有响应，负载均衡将终止等待，并返回 HTTP504错误码。  取值：1-3600s。  支持多值查询，查询条件格式：*member_timeout=xxx&member_timeout=xxx*。
    *
    * @return $this
    */
    public function setMemberTimeout($memberTimeout)
    {
        $this->container['memberTimeout'] = $memberTimeout;
        return $this;
    }

    /**
    * Gets clientTimeout
    *  等待客户端请求超时时间，包括两种情况： - 读取整个客户端请求头的超时时长：如果客户端未在超时时长内发送完整个请求头，则请求将被中断 - 两个连续body体的数据包到达LB的时间间隔，超出client_timeout将会断开连接。  取值：1-3600s。  支持多值查询，查询条件格式：*client_timeout=xxx&client_timeout=xxx*。
    *
    * @return int[]|null
    */
    public function getClientTimeout()
    {
        return $this->container['clientTimeout'];
    }

    /**
    * Sets clientTimeout
    *
    * @param int[]|null $clientTimeout 等待客户端请求超时时间，包括两种情况： - 读取整个客户端请求头的超时时长：如果客户端未在超时时长内发送完整个请求头，则请求将被中断 - 两个连续body体的数据包到达LB的时间间隔，超出client_timeout将会断开连接。  取值：1-3600s。  支持多值查询，查询条件格式：*client_timeout=xxx&client_timeout=xxx*。
    *
    * @return $this
    */
    public function setClientTimeout($clientTimeout)
    {
        $this->container['clientTimeout'] = $clientTimeout;
        return $this;
    }

    /**
    * Gets keepaliveTimeout
    *  客户端连接空闲超时时间。在超过keepalive_timeout时长一直没有请求， 负载均衡会暂时中断当前连接，直到下一次请求时重新建立新的连接。  取值： - TCP监听器[和IP监听器](tag:hws_eu)：10-4000s。 - HTTP/HTTPS/TERMINATED_HTTPS监听器：0-4000s。 [- 共享型实例的UDP监听器不支持此字段。](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,fcs,dt,dt_test,hk_tm)  支持多值查询，查询条件格式：*keepalive_timeout=xxx&keepalive_timeout=xxx*。
    *
    * @return int[]|null
    */
    public function getKeepaliveTimeout()
    {
        return $this->container['keepaliveTimeout'];
    }

    /**
    * Sets keepaliveTimeout
    *
    * @param int[]|null $keepaliveTimeout 客户端连接空闲超时时间。在超过keepalive_timeout时长一直没有请求， 负载均衡会暂时中断当前连接，直到下一次请求时重新建立新的连接。  取值： - TCP监听器[和IP监听器](tag:hws_eu)：10-4000s。 - HTTP/HTTPS/TERMINATED_HTTPS监听器：0-4000s。 [- 共享型实例的UDP监听器不支持此字段。](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,fcs,dt,dt_test,hk_tm)  支持多值查询，查询条件格式：*keepalive_timeout=xxx&keepalive_timeout=xxx*。
    *
    * @return $this
    */
    public function setKeepaliveTimeout($keepaliveTimeout)
    {
        $this->container['keepaliveTimeout'] = $keepaliveTimeout;
        return $this;
    }

    /**
    * Gets transparentClientIpEnable
    *  是否透传客户端IP地址。开启后客户端IP地址将透传到后端服务器。  [仅作用于共享型LB的TCP/UDP监听器。取值：true开启，false不开启。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,fcs,dt,hk_tm)
    *
    * @return bool|null
    */
    public function getTransparentClientIpEnable()
    {
        return $this->container['transparentClientIpEnable'];
    }

    /**
    * Sets transparentClientIpEnable
    *
    * @param bool|null $transparentClientIpEnable 是否透传客户端IP地址。开启后客户端IP地址将透传到后端服务器。  [仅作用于共享型LB的TCP/UDP监听器。取值：true开启，false不开启。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,fcs,dt,hk_tm)
    *
    * @return $this
    */
    public function setTransparentClientIpEnable($transparentClientIpEnable)
    {
        $this->container['transparentClientIpEnable'] = $transparentClientIpEnable;
        return $this;
    }

    /**
    * Gets proxyProtocolEnable
    *  是否开启proxy_protocol。仅TLS监听器可指定，其他协议的监听器该字段不生效，proxy_protocol不开启。
    *
    * @return bool|null
    */
    public function getProxyProtocolEnable()
    {
        return $this->container['proxyProtocolEnable'];
    }

    /**
    * Sets proxyProtocolEnable
    *
    * @param bool|null $proxyProtocolEnable 是否开启proxy_protocol。仅TLS监听器可指定，其他协议的监听器该字段不生效，proxy_protocol不开启。
    *
    * @return $this
    */
    public function setProxyProtocolEnable($proxyProtocolEnable)
    {
        $this->container['proxyProtocolEnable'] = $proxyProtocolEnable;
        return $this;
    }

    /**
    * Gets enhanceL7policyEnable
    *  是否开启高级转发策略功能。开启高级转发策略后，支持更灵活的转发策略和转发规则设置。  取值：true开启，false不开启。  [荷兰region不支持该字段，请勿使用。](tag:dt,dt_test)
    *
    * @return bool|null
    */
    public function getEnhanceL7policyEnable()
    {
        return $this->container['enhanceL7policyEnable'];
    }

    /**
    * Sets enhanceL7policyEnable
    *
    * @param bool|null $enhanceL7policyEnable 是否开启高级转发策略功能。开启高级转发策略后，支持更灵活的转发策略和转发规则设置。  取值：true开启，false不开启。  [荷兰region不支持该字段，请勿使用。](tag:dt,dt_test)
    *
    * @return $this
    */
    public function setEnhanceL7policyEnable($enhanceL7policyEnable)
    {
        $this->container['enhanceL7policyEnable'] = $enhanceL7policyEnable;
        return $this;
    }

    /**
    * Gets memberInstanceId
    *  后端云服务器ID。仅用于查询条件，不作为响应参数字段。  支持多值查询，查询条件格式：*member_instance_id=xxx&member_instance_id=xxx*。
    *
    * @return string[]|null
    */
    public function getMemberInstanceId()
    {
        return $this->container['memberInstanceId'];
    }

    /**
    * Sets memberInstanceId
    *
    * @param string[]|null $memberInstanceId 后端云服务器ID。仅用于查询条件，不作为响应参数字段。  支持多值查询，查询条件格式：*member_instance_id=xxx&member_instance_id=xxx*。
    *
    * @return $this
    */
    public function setMemberInstanceId($memberInstanceId)
    {
        $this->container['memberInstanceId'] = $memberInstanceId;
        return $this;
    }

    /**
    * Gets protectionStatus
    *  修改保护状态, 取值： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
    *
    * @return string[]|null
    */
    public function getProtectionStatus()
    {
        return $this->container['protectionStatus'];
    }

    /**
    * Sets protectionStatus
    *
    * @param string[]|null $protectionStatus 修改保护状态, 取值： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
    *
    * @return $this
    */
    public function setProtectionStatus($protectionStatus)
    {
        $this->container['protectionStatus'] = $protectionStatus;
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

