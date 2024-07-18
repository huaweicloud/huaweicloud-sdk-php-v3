<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateListenerOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateListenerOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * adminStateUp  监听器的管理状态。只支持设置为true。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    * defaultPoolId  监听器默认的后端云服务器组ID。当请求没有匹配的转发策略时，转发到默认后端云服务器上处理。
    * clientCaTlsContainerRef  监听器使用的CA证书ID。当且仅当type=client时，才会使用该字段对应的证书。  监听器协议为QUIC时不支持该字段。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt,dt_test)
    * defaultTlsContainerRef  监听器使用的服务器证书ID。  使用说明：当监听器协议为HTTPS、TLS或QUIC时，该字段必传，且对应的证书的type必须是server类型。
    * description  监听器的描述信息。
    * http2Enable  客户端与LB之间的HTTPS请求的HTTP2功能的开启状态。 开启后，可提升客户端与LB间的访问性能，但LB与后端服务器间仍采用HTTP1.X协议。  使用说明： - 仅HTTPS协议监听器有效。 - QUIC监听器不能设置该字段，固定返回为true。 - 其他协议的监听器可设置该字段但无效，无论取值如何都不影响监听器正常运行。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt,dt_test)
    * insertHeaders  insertHeaders
    * loadbalancerId  监听器所属的负载均衡器的ID列表。  使用说明： 一个监听器只支持关联到一个LB。
    * name  监听器的名称。  注意：若名称为空，则在控制台的监听器列表无法选择并查看监听器详情。
    * projectId  监听器所在的项目ID。
    * protocol  监听器的监听协议。  [取值：TCP、UDP、HTTP、HTTPS、TERMINATED_HTTPS、QUIC、TLS。  使用说明： - 共享型LB上的HTTPS监听器只支持设置为TERMINATED_HTTPS。 传入HTTPS将会自动转为TERMINATED_HTTPS。 - 独享型LB上的HTTPS监听器只支持设置为HTTPS，传入TERMINATED_HTTPS将会自动转为HTTPS。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,fcs,dt)  [取值：TCP、UDP、IP、HTTP、HTTPS。IP为网关型LB上的监听器独有的协议。](tag:hws_eu,hcso_dt)  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt,dt_test)
    * protocolPort  监听器的监听端口。QUIC监听器端口不能是4789，且不能和UDP监听器端口重复。传0时表示开启监听端口范围的能力，此时port_ranges为必填字段。 [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt,dt_test)
    * sniContainerRefs  监听器使用的SNI证书（带域名的服务器证书）ID列表。  使用说明： - 列表对应的所有SNI证书的域名不允许存在重复。 - 列表对应的所有SNI证书的域名总数不超过50。 - QUIC监听器仅支持RSA证书。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt,dt_test)
    * sniMatchAlgo  监听器使用的SNI证书泛域名匹配方式。 longest_suffix表示最长尾缀匹配，wildcard表示标准域名分级匹配。 默认为wildcard。
    * tags  标签列表
    * tlsCiphersPolicy  监听器使用的安全策略。  [取值：tls-1-0-inherit、tls-1-0、tls-1-1、 tls-1-2、tls-1-2-strict、tls-1-2-fs、tls-1-0-with-1-3、 tls-1-2-fs-with-1-3、 hybrid-policy-1-0、tls-1-2-strict-no-cbc，默认：tls-1-0。 ](tag:hws,hws_hk,ocb,tlf,ctc,hcso,sbc,tm,cmcc,dt)  [取值：tls-1-0、tls-1-1、tls-1-2、 tls-1-2-strict，默认：tls-1-0。](tag:hws_eu,g42,hk_g42,hcso_dt)  [使用说明： - 仅对HTTPS协议类型的监听器且关联LB为独享型时有效。 - QUIC监听器不支持该字段。 - 若同时设置了security_policy_id和tls_ciphers_policy，则仅security_policy_id生效。 - 加密套件的优先顺序为ecc套件、rsa套件、tls1.3协议的套件（即支持ecc又支持rsa） ](tag:hws,hws_hk,hws_eu,g42,hk_g42,ocb,tlf,ctc,hcso,sbc,tm,cmcc,dt)  [使用说明： - 仅对HTTPS协议类型的监听器有效](tag:hcso_dt)  [不支持tls1.3协议的套件。](tag:tm,hws_eu,g42,hk_g42) [不支持QUIC。](tag:tm,dt,dt_test)
    * securityPolicyId  自定义安全策略的ID。  [使用说明： - 仅对HTTPS协议类型的监听器且关联LB为独享型时有效。 - QUIC监听器不支持该字段。 - 若同时设置了security_policy_id和tls_ciphers_policy，则仅security_policy_id生效。 - 加密套件的优先顺序为ecc套件、rsa套件、tls1.3协议的套件 （即支持ecc又支持rsa） ](tag:hws,hws_hk,hws_eu,g42,hk_g42,ocb,tlf,ctc,hcso,sbc,tm,cmcc,dt)  [使用说明： - 仅对HTTPS协议类型的监听器有效](tag:hcso_dt)  [不支持tls1.3协议的套件。](tag:tm,hws_eu,g42,hk_g42)  [不支持QUIC。](tag:tm,dt,dt_test)
    * enableMemberRetry  是否开启后端服务器的重试。  取值：true 开启重试，false 不开启重试。默认：true。  [使用说明： - 若关联是共享型LB，仅在protocol为HTTP、TERMINATED_HTTPS时才能传入该字段。 - 若关联是独享型LB，仅在protocol为HTTP、HTTPS和QUIC时才能传入该字段。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,fcs,dt)  [使用说明： - 仅在protocol为HTTP、HTTPS时才能传入该字段。](tag:hws_eu,hcso_dt)  [不支持QUIC。](tag:tm,dt,dt_test)
    * keepaliveTimeout  客户端连接空闲超时时间。在超过keepalive_timeout时长一直没有请求， 负载均衡会暂时中断当前连接，直到下一次请求时重新建立新的连接。  取值： - TCP监听器[和IP监听器](tag:hws_eu)：10-4000s，默认值为300s。 - 若为HTTP/HTTPS/TERMINATED_HTTPS监听器，取值范围为（0-4000s）默认值为60s。  共享型实例的UDP监听器不支持此字段。
    * clientTimeout  等待客户端请求超时时间，包括两种情况： - 读取整个客户端请求头的超时时长：如果客户端未在超时时长内发送完整个请求头，则请求将被中断 - 两个连续body体的数据包到达LB的时间间隔，超出client_timeout将会断开连接。  取值范围为1-300s，默认值为60s。  使用说明：仅协议为HTTP/HTTPS的监听器支持该字段。
    * memberTimeout  等待后端服务器响应超时时间。请求转发后端服务器后，在等待超时member_timeout时长没有响应，负载均衡将终止等待，并返回 HTTP504错误码。  取值：1-300s，默认为60s。  使用说明：仅支持协议为HTTP/HTTPS的监听器。
    * ipgroup  ipgroup
    * transparentClientIpEnable  是否透传客户端IP地址。开启后客户端IP地址将透传到后端服务器。 [仅作用于共享型LB的TCP/UDP监听器。  取值： - 共享型LB的TCP/UDP监听器可设置为true或false，不传默认为false。 - 共享型LB的HTTP/HTTPS监听器只支持设置为true，不传默认为true。 - 独享型负载均衡器所有协议的监听器只支持设置为true，不传默认为true。  使用说明： - 开启特性后，ELB和后端服务器之间直接使用真实的IP访问，需要确保已正确设置服务器的安全组以及访问控制策略。 - 开启特性后，不支持同一台服务器既作为后端服务器又作为客户端的场景。 - 开启特性后，不支持变更后端服务器规格。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,fcs,dt)  [只设支持置为true，不传默认为true。](tag:hws_eu,hcso_dt)
    * proxyProtocolEnable  是否开启proxy_protocol。仅TLS监听器可指定，其他协议的监听器该字段不生效，proxy_protocol不开启。
    * enhanceL7policyEnable  是否开启高级转发策略功能。开启高级转发策略后，支持更灵活的转发策略和转发规则设置。  取值：true开启，false不开启，默认false。  开启后支持如下场景： - 转发策略的action字段支持指定为REDIRECT_TO_URL, FIXED_RESPONSE，即支持URL重定向和响应固定的内容给客户端。 - 转发策略支持指定priority、redirect_url_config、fixed_response_config字段。 - 转发规则rule的type可以指定METHOD, HEADER, QUERY_STRING, SOURCE_IP这几种取值。 - 转发规则rule的type为HOST_NAME时，转发规则rule的value支持通配符*。 - 转发规则支持指定conditions字段。  [荷兰region不支持该字段，请勿使用。](tag:dt,dt_test) > 开启后不支持关闭
    * quicConfig  quicConfig
    * protectionStatus  修改保护状态, 取值： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
    * protectionReason  设置保护的原因 >仅当protection_status为consoleProtection时有效。
    * gzipEnable  ELB是否开启gzip压缩，缺省值：false，非必选  [仅HTTP/HTTPS类型监听器支持配置。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt,dt_test) [仅HTTP/HTTPS/QUIC类型监听器支持配置。](tag:hws,hws_hk,hws_test,hcs,hcs_sm,hcso,hk_vdf,fcs,fcs_vm,mix,ocb,ctc,cmcc,sbc,hws_ocb,hk_sbc)
    * portRanges  端口监听范围（闭区间)，最多指定10个端口组，每个组范围不可有重叠部分 >仅当protocol_port为0或未传入protoco_port时可以传入该字段。仅TCP, UDP，TLS监听支持该字段
    * sslEarlyDataEnable  监听器0-RTT能力开关，缺省值：false，非必选  仅HTTPS类型监听器支持配置，需要依赖TLSv1.3安全策略协议。开启 ssl_early_data 后，有重放攻击的风险，请谨慎开启。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'adminStateUp' => 'bool',
            'defaultPoolId' => 'string',
            'clientCaTlsContainerRef' => 'string',
            'defaultTlsContainerRef' => 'string',
            'description' => 'string',
            'http2Enable' => 'bool',
            'insertHeaders' => '\HuaweiCloud\SDK\Elb\V3\Model\ListenerInsertHeaders',
            'loadbalancerId' => 'string',
            'name' => 'string',
            'projectId' => 'string',
            'protocol' => 'string',
            'protocolPort' => 'int',
            'sniContainerRefs' => 'string[]',
            'sniMatchAlgo' => 'string',
            'tags' => '\HuaweiCloud\SDK\Elb\V3\Model\Tag[]',
            'tlsCiphersPolicy' => 'string',
            'securityPolicyId' => 'string',
            'enableMemberRetry' => 'bool',
            'keepaliveTimeout' => 'int',
            'clientTimeout' => 'int',
            'memberTimeout' => 'int',
            'ipgroup' => '\HuaweiCloud\SDK\Elb\V3\Model\CreateListenerIpGroupOption',
            'transparentClientIpEnable' => 'bool',
            'proxyProtocolEnable' => 'bool',
            'enhanceL7policyEnable' => 'bool',
            'quicConfig' => '\HuaweiCloud\SDK\Elb\V3\Model\CreateListenerQuicConfigOption',
            'protectionStatus' => 'string',
            'protectionReason' => 'string',
            'gzipEnable' => 'bool',
            'portRanges' => '\HuaweiCloud\SDK\Elb\V3\Model\PortRange[]',
            'sslEarlyDataEnable' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * adminStateUp  监听器的管理状态。只支持设置为true。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    * defaultPoolId  监听器默认的后端云服务器组ID。当请求没有匹配的转发策略时，转发到默认后端云服务器上处理。
    * clientCaTlsContainerRef  监听器使用的CA证书ID。当且仅当type=client时，才会使用该字段对应的证书。  监听器协议为QUIC时不支持该字段。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt,dt_test)
    * defaultTlsContainerRef  监听器使用的服务器证书ID。  使用说明：当监听器协议为HTTPS、TLS或QUIC时，该字段必传，且对应的证书的type必须是server类型。
    * description  监听器的描述信息。
    * http2Enable  客户端与LB之间的HTTPS请求的HTTP2功能的开启状态。 开启后，可提升客户端与LB间的访问性能，但LB与后端服务器间仍采用HTTP1.X协议。  使用说明： - 仅HTTPS协议监听器有效。 - QUIC监听器不能设置该字段，固定返回为true。 - 其他协议的监听器可设置该字段但无效，无论取值如何都不影响监听器正常运行。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt,dt_test)
    * insertHeaders  insertHeaders
    * loadbalancerId  监听器所属的负载均衡器的ID列表。  使用说明： 一个监听器只支持关联到一个LB。
    * name  监听器的名称。  注意：若名称为空，则在控制台的监听器列表无法选择并查看监听器详情。
    * projectId  监听器所在的项目ID。
    * protocol  监听器的监听协议。  [取值：TCP、UDP、HTTP、HTTPS、TERMINATED_HTTPS、QUIC、TLS。  使用说明： - 共享型LB上的HTTPS监听器只支持设置为TERMINATED_HTTPS。 传入HTTPS将会自动转为TERMINATED_HTTPS。 - 独享型LB上的HTTPS监听器只支持设置为HTTPS，传入TERMINATED_HTTPS将会自动转为HTTPS。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,fcs,dt)  [取值：TCP、UDP、IP、HTTP、HTTPS。IP为网关型LB上的监听器独有的协议。](tag:hws_eu,hcso_dt)  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt,dt_test)
    * protocolPort  监听器的监听端口。QUIC监听器端口不能是4789，且不能和UDP监听器端口重复。传0时表示开启监听端口范围的能力，此时port_ranges为必填字段。 [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt,dt_test)
    * sniContainerRefs  监听器使用的SNI证书（带域名的服务器证书）ID列表。  使用说明： - 列表对应的所有SNI证书的域名不允许存在重复。 - 列表对应的所有SNI证书的域名总数不超过50。 - QUIC监听器仅支持RSA证书。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt,dt_test)
    * sniMatchAlgo  监听器使用的SNI证书泛域名匹配方式。 longest_suffix表示最长尾缀匹配，wildcard表示标准域名分级匹配。 默认为wildcard。
    * tags  标签列表
    * tlsCiphersPolicy  监听器使用的安全策略。  [取值：tls-1-0-inherit、tls-1-0、tls-1-1、 tls-1-2、tls-1-2-strict、tls-1-2-fs、tls-1-0-with-1-3、 tls-1-2-fs-with-1-3、 hybrid-policy-1-0、tls-1-2-strict-no-cbc，默认：tls-1-0。 ](tag:hws,hws_hk,ocb,tlf,ctc,hcso,sbc,tm,cmcc,dt)  [取值：tls-1-0、tls-1-1、tls-1-2、 tls-1-2-strict，默认：tls-1-0。](tag:hws_eu,g42,hk_g42,hcso_dt)  [使用说明： - 仅对HTTPS协议类型的监听器且关联LB为独享型时有效。 - QUIC监听器不支持该字段。 - 若同时设置了security_policy_id和tls_ciphers_policy，则仅security_policy_id生效。 - 加密套件的优先顺序为ecc套件、rsa套件、tls1.3协议的套件（即支持ecc又支持rsa） ](tag:hws,hws_hk,hws_eu,g42,hk_g42,ocb,tlf,ctc,hcso,sbc,tm,cmcc,dt)  [使用说明： - 仅对HTTPS协议类型的监听器有效](tag:hcso_dt)  [不支持tls1.3协议的套件。](tag:tm,hws_eu,g42,hk_g42) [不支持QUIC。](tag:tm,dt,dt_test)
    * securityPolicyId  自定义安全策略的ID。  [使用说明： - 仅对HTTPS协议类型的监听器且关联LB为独享型时有效。 - QUIC监听器不支持该字段。 - 若同时设置了security_policy_id和tls_ciphers_policy，则仅security_policy_id生效。 - 加密套件的优先顺序为ecc套件、rsa套件、tls1.3协议的套件 （即支持ecc又支持rsa） ](tag:hws,hws_hk,hws_eu,g42,hk_g42,ocb,tlf,ctc,hcso,sbc,tm,cmcc,dt)  [使用说明： - 仅对HTTPS协议类型的监听器有效](tag:hcso_dt)  [不支持tls1.3协议的套件。](tag:tm,hws_eu,g42,hk_g42)  [不支持QUIC。](tag:tm,dt,dt_test)
    * enableMemberRetry  是否开启后端服务器的重试。  取值：true 开启重试，false 不开启重试。默认：true。  [使用说明： - 若关联是共享型LB，仅在protocol为HTTP、TERMINATED_HTTPS时才能传入该字段。 - 若关联是独享型LB，仅在protocol为HTTP、HTTPS和QUIC时才能传入该字段。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,fcs,dt)  [使用说明： - 仅在protocol为HTTP、HTTPS时才能传入该字段。](tag:hws_eu,hcso_dt)  [不支持QUIC。](tag:tm,dt,dt_test)
    * keepaliveTimeout  客户端连接空闲超时时间。在超过keepalive_timeout时长一直没有请求， 负载均衡会暂时中断当前连接，直到下一次请求时重新建立新的连接。  取值： - TCP监听器[和IP监听器](tag:hws_eu)：10-4000s，默认值为300s。 - 若为HTTP/HTTPS/TERMINATED_HTTPS监听器，取值范围为（0-4000s）默认值为60s。  共享型实例的UDP监听器不支持此字段。
    * clientTimeout  等待客户端请求超时时间，包括两种情况： - 读取整个客户端请求头的超时时长：如果客户端未在超时时长内发送完整个请求头，则请求将被中断 - 两个连续body体的数据包到达LB的时间间隔，超出client_timeout将会断开连接。  取值范围为1-300s，默认值为60s。  使用说明：仅协议为HTTP/HTTPS的监听器支持该字段。
    * memberTimeout  等待后端服务器响应超时时间。请求转发后端服务器后，在等待超时member_timeout时长没有响应，负载均衡将终止等待，并返回 HTTP504错误码。  取值：1-300s，默认为60s。  使用说明：仅支持协议为HTTP/HTTPS的监听器。
    * ipgroup  ipgroup
    * transparentClientIpEnable  是否透传客户端IP地址。开启后客户端IP地址将透传到后端服务器。 [仅作用于共享型LB的TCP/UDP监听器。  取值： - 共享型LB的TCP/UDP监听器可设置为true或false，不传默认为false。 - 共享型LB的HTTP/HTTPS监听器只支持设置为true，不传默认为true。 - 独享型负载均衡器所有协议的监听器只支持设置为true，不传默认为true。  使用说明： - 开启特性后，ELB和后端服务器之间直接使用真实的IP访问，需要确保已正确设置服务器的安全组以及访问控制策略。 - 开启特性后，不支持同一台服务器既作为后端服务器又作为客户端的场景。 - 开启特性后，不支持变更后端服务器规格。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,fcs,dt)  [只设支持置为true，不传默认为true。](tag:hws_eu,hcso_dt)
    * proxyProtocolEnable  是否开启proxy_protocol。仅TLS监听器可指定，其他协议的监听器该字段不生效，proxy_protocol不开启。
    * enhanceL7policyEnable  是否开启高级转发策略功能。开启高级转发策略后，支持更灵活的转发策略和转发规则设置。  取值：true开启，false不开启，默认false。  开启后支持如下场景： - 转发策略的action字段支持指定为REDIRECT_TO_URL, FIXED_RESPONSE，即支持URL重定向和响应固定的内容给客户端。 - 转发策略支持指定priority、redirect_url_config、fixed_response_config字段。 - 转发规则rule的type可以指定METHOD, HEADER, QUERY_STRING, SOURCE_IP这几种取值。 - 转发规则rule的type为HOST_NAME时，转发规则rule的value支持通配符*。 - 转发规则支持指定conditions字段。  [荷兰region不支持该字段，请勿使用。](tag:dt,dt_test) > 开启后不支持关闭
    * quicConfig  quicConfig
    * protectionStatus  修改保护状态, 取值： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
    * protectionReason  设置保护的原因 >仅当protection_status为consoleProtection时有效。
    * gzipEnable  ELB是否开启gzip压缩，缺省值：false，非必选  [仅HTTP/HTTPS类型监听器支持配置。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt,dt_test) [仅HTTP/HTTPS/QUIC类型监听器支持配置。](tag:hws,hws_hk,hws_test,hcs,hcs_sm,hcso,hk_vdf,fcs,fcs_vm,mix,ocb,ctc,cmcc,sbc,hws_ocb,hk_sbc)
    * portRanges  端口监听范围（闭区间)，最多指定10个端口组，每个组范围不可有重叠部分 >仅当protocol_port为0或未传入protoco_port时可以传入该字段。仅TCP, UDP，TLS监听支持该字段
    * sslEarlyDataEnable  监听器0-RTT能力开关，缺省值：false，非必选  仅HTTPS类型监听器支持配置，需要依赖TLSv1.3安全策略协议。开启 ssl_early_data 后，有重放攻击的风险，请谨慎开启。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'adminStateUp' => null,
        'defaultPoolId' => null,
        'clientCaTlsContainerRef' => null,
        'defaultTlsContainerRef' => null,
        'description' => null,
        'http2Enable' => null,
        'insertHeaders' => null,
        'loadbalancerId' => null,
        'name' => null,
        'projectId' => null,
        'protocol' => null,
        'protocolPort' => 'int32',
        'sniContainerRefs' => null,
        'sniMatchAlgo' => null,
        'tags' => null,
        'tlsCiphersPolicy' => null,
        'securityPolicyId' => null,
        'enableMemberRetry' => null,
        'keepaliveTimeout' => 'int32',
        'clientTimeout' => 'int32',
        'memberTimeout' => 'int32',
        'ipgroup' => null,
        'transparentClientIpEnable' => null,
        'proxyProtocolEnable' => null,
        'enhanceL7policyEnable' => null,
        'quicConfig' => null,
        'protectionStatus' => null,
        'protectionReason' => null,
        'gzipEnable' => null,
        'portRanges' => null,
        'sslEarlyDataEnable' => null
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
    * adminStateUp  监听器的管理状态。只支持设置为true。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    * defaultPoolId  监听器默认的后端云服务器组ID。当请求没有匹配的转发策略时，转发到默认后端云服务器上处理。
    * clientCaTlsContainerRef  监听器使用的CA证书ID。当且仅当type=client时，才会使用该字段对应的证书。  监听器协议为QUIC时不支持该字段。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt,dt_test)
    * defaultTlsContainerRef  监听器使用的服务器证书ID。  使用说明：当监听器协议为HTTPS、TLS或QUIC时，该字段必传，且对应的证书的type必须是server类型。
    * description  监听器的描述信息。
    * http2Enable  客户端与LB之间的HTTPS请求的HTTP2功能的开启状态。 开启后，可提升客户端与LB间的访问性能，但LB与后端服务器间仍采用HTTP1.X协议。  使用说明： - 仅HTTPS协议监听器有效。 - QUIC监听器不能设置该字段，固定返回为true。 - 其他协议的监听器可设置该字段但无效，无论取值如何都不影响监听器正常运行。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt,dt_test)
    * insertHeaders  insertHeaders
    * loadbalancerId  监听器所属的负载均衡器的ID列表。  使用说明： 一个监听器只支持关联到一个LB。
    * name  监听器的名称。  注意：若名称为空，则在控制台的监听器列表无法选择并查看监听器详情。
    * projectId  监听器所在的项目ID。
    * protocol  监听器的监听协议。  [取值：TCP、UDP、HTTP、HTTPS、TERMINATED_HTTPS、QUIC、TLS。  使用说明： - 共享型LB上的HTTPS监听器只支持设置为TERMINATED_HTTPS。 传入HTTPS将会自动转为TERMINATED_HTTPS。 - 独享型LB上的HTTPS监听器只支持设置为HTTPS，传入TERMINATED_HTTPS将会自动转为HTTPS。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,fcs,dt)  [取值：TCP、UDP、IP、HTTP、HTTPS。IP为网关型LB上的监听器独有的协议。](tag:hws_eu,hcso_dt)  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt,dt_test)
    * protocolPort  监听器的监听端口。QUIC监听器端口不能是4789，且不能和UDP监听器端口重复。传0时表示开启监听端口范围的能力，此时port_ranges为必填字段。 [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt,dt_test)
    * sniContainerRefs  监听器使用的SNI证书（带域名的服务器证书）ID列表。  使用说明： - 列表对应的所有SNI证书的域名不允许存在重复。 - 列表对应的所有SNI证书的域名总数不超过50。 - QUIC监听器仅支持RSA证书。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt,dt_test)
    * sniMatchAlgo  监听器使用的SNI证书泛域名匹配方式。 longest_suffix表示最长尾缀匹配，wildcard表示标准域名分级匹配。 默认为wildcard。
    * tags  标签列表
    * tlsCiphersPolicy  监听器使用的安全策略。  [取值：tls-1-0-inherit、tls-1-0、tls-1-1、 tls-1-2、tls-1-2-strict、tls-1-2-fs、tls-1-0-with-1-3、 tls-1-2-fs-with-1-3、 hybrid-policy-1-0、tls-1-2-strict-no-cbc，默认：tls-1-0。 ](tag:hws,hws_hk,ocb,tlf,ctc,hcso,sbc,tm,cmcc,dt)  [取值：tls-1-0、tls-1-1、tls-1-2、 tls-1-2-strict，默认：tls-1-0。](tag:hws_eu,g42,hk_g42,hcso_dt)  [使用说明： - 仅对HTTPS协议类型的监听器且关联LB为独享型时有效。 - QUIC监听器不支持该字段。 - 若同时设置了security_policy_id和tls_ciphers_policy，则仅security_policy_id生效。 - 加密套件的优先顺序为ecc套件、rsa套件、tls1.3协议的套件（即支持ecc又支持rsa） ](tag:hws,hws_hk,hws_eu,g42,hk_g42,ocb,tlf,ctc,hcso,sbc,tm,cmcc,dt)  [使用说明： - 仅对HTTPS协议类型的监听器有效](tag:hcso_dt)  [不支持tls1.3协议的套件。](tag:tm,hws_eu,g42,hk_g42) [不支持QUIC。](tag:tm,dt,dt_test)
    * securityPolicyId  自定义安全策略的ID。  [使用说明： - 仅对HTTPS协议类型的监听器且关联LB为独享型时有效。 - QUIC监听器不支持该字段。 - 若同时设置了security_policy_id和tls_ciphers_policy，则仅security_policy_id生效。 - 加密套件的优先顺序为ecc套件、rsa套件、tls1.3协议的套件 （即支持ecc又支持rsa） ](tag:hws,hws_hk,hws_eu,g42,hk_g42,ocb,tlf,ctc,hcso,sbc,tm,cmcc,dt)  [使用说明： - 仅对HTTPS协议类型的监听器有效](tag:hcso_dt)  [不支持tls1.3协议的套件。](tag:tm,hws_eu,g42,hk_g42)  [不支持QUIC。](tag:tm,dt,dt_test)
    * enableMemberRetry  是否开启后端服务器的重试。  取值：true 开启重试，false 不开启重试。默认：true。  [使用说明： - 若关联是共享型LB，仅在protocol为HTTP、TERMINATED_HTTPS时才能传入该字段。 - 若关联是独享型LB，仅在protocol为HTTP、HTTPS和QUIC时才能传入该字段。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,fcs,dt)  [使用说明： - 仅在protocol为HTTP、HTTPS时才能传入该字段。](tag:hws_eu,hcso_dt)  [不支持QUIC。](tag:tm,dt,dt_test)
    * keepaliveTimeout  客户端连接空闲超时时间。在超过keepalive_timeout时长一直没有请求， 负载均衡会暂时中断当前连接，直到下一次请求时重新建立新的连接。  取值： - TCP监听器[和IP监听器](tag:hws_eu)：10-4000s，默认值为300s。 - 若为HTTP/HTTPS/TERMINATED_HTTPS监听器，取值范围为（0-4000s）默认值为60s。  共享型实例的UDP监听器不支持此字段。
    * clientTimeout  等待客户端请求超时时间，包括两种情况： - 读取整个客户端请求头的超时时长：如果客户端未在超时时长内发送完整个请求头，则请求将被中断 - 两个连续body体的数据包到达LB的时间间隔，超出client_timeout将会断开连接。  取值范围为1-300s，默认值为60s。  使用说明：仅协议为HTTP/HTTPS的监听器支持该字段。
    * memberTimeout  等待后端服务器响应超时时间。请求转发后端服务器后，在等待超时member_timeout时长没有响应，负载均衡将终止等待，并返回 HTTP504错误码。  取值：1-300s，默认为60s。  使用说明：仅支持协议为HTTP/HTTPS的监听器。
    * ipgroup  ipgroup
    * transparentClientIpEnable  是否透传客户端IP地址。开启后客户端IP地址将透传到后端服务器。 [仅作用于共享型LB的TCP/UDP监听器。  取值： - 共享型LB的TCP/UDP监听器可设置为true或false，不传默认为false。 - 共享型LB的HTTP/HTTPS监听器只支持设置为true，不传默认为true。 - 独享型负载均衡器所有协议的监听器只支持设置为true，不传默认为true。  使用说明： - 开启特性后，ELB和后端服务器之间直接使用真实的IP访问，需要确保已正确设置服务器的安全组以及访问控制策略。 - 开启特性后，不支持同一台服务器既作为后端服务器又作为客户端的场景。 - 开启特性后，不支持变更后端服务器规格。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,fcs,dt)  [只设支持置为true，不传默认为true。](tag:hws_eu,hcso_dt)
    * proxyProtocolEnable  是否开启proxy_protocol。仅TLS监听器可指定，其他协议的监听器该字段不生效，proxy_protocol不开启。
    * enhanceL7policyEnable  是否开启高级转发策略功能。开启高级转发策略后，支持更灵活的转发策略和转发规则设置。  取值：true开启，false不开启，默认false。  开启后支持如下场景： - 转发策略的action字段支持指定为REDIRECT_TO_URL, FIXED_RESPONSE，即支持URL重定向和响应固定的内容给客户端。 - 转发策略支持指定priority、redirect_url_config、fixed_response_config字段。 - 转发规则rule的type可以指定METHOD, HEADER, QUERY_STRING, SOURCE_IP这几种取值。 - 转发规则rule的type为HOST_NAME时，转发规则rule的value支持通配符*。 - 转发规则支持指定conditions字段。  [荷兰region不支持该字段，请勿使用。](tag:dt,dt_test) > 开启后不支持关闭
    * quicConfig  quicConfig
    * protectionStatus  修改保护状态, 取值： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
    * protectionReason  设置保护的原因 >仅当protection_status为consoleProtection时有效。
    * gzipEnable  ELB是否开启gzip压缩，缺省值：false，非必选  [仅HTTP/HTTPS类型监听器支持配置。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt,dt_test) [仅HTTP/HTTPS/QUIC类型监听器支持配置。](tag:hws,hws_hk,hws_test,hcs,hcs_sm,hcso,hk_vdf,fcs,fcs_vm,mix,ocb,ctc,cmcc,sbc,hws_ocb,hk_sbc)
    * portRanges  端口监听范围（闭区间)，最多指定10个端口组，每个组范围不可有重叠部分 >仅当protocol_port为0或未传入protoco_port时可以传入该字段。仅TCP, UDP，TLS监听支持该字段
    * sslEarlyDataEnable  监听器0-RTT能力开关，缺省值：false，非必选  仅HTTPS类型监听器支持配置，需要依赖TLSv1.3安全策略协议。开启 ssl_early_data 后，有重放攻击的风险，请谨慎开启。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'adminStateUp' => 'admin_state_up',
            'defaultPoolId' => 'default_pool_id',
            'clientCaTlsContainerRef' => 'client_ca_tls_container_ref',
            'defaultTlsContainerRef' => 'default_tls_container_ref',
            'description' => 'description',
            'http2Enable' => 'http2_enable',
            'insertHeaders' => 'insert_headers',
            'loadbalancerId' => 'loadbalancer_id',
            'name' => 'name',
            'projectId' => 'project_id',
            'protocol' => 'protocol',
            'protocolPort' => 'protocol_port',
            'sniContainerRefs' => 'sni_container_refs',
            'sniMatchAlgo' => 'sni_match_algo',
            'tags' => 'tags',
            'tlsCiphersPolicy' => 'tls_ciphers_policy',
            'securityPolicyId' => 'security_policy_id',
            'enableMemberRetry' => 'enable_member_retry',
            'keepaliveTimeout' => 'keepalive_timeout',
            'clientTimeout' => 'client_timeout',
            'memberTimeout' => 'member_timeout',
            'ipgroup' => 'ipgroup',
            'transparentClientIpEnable' => 'transparent_client_ip_enable',
            'proxyProtocolEnable' => 'proxy_protocol_enable',
            'enhanceL7policyEnable' => 'enhance_l7policy_enable',
            'quicConfig' => 'quic_config',
            'protectionStatus' => 'protection_status',
            'protectionReason' => 'protection_reason',
            'gzipEnable' => 'gzip_enable',
            'portRanges' => 'port_ranges',
            'sslEarlyDataEnable' => 'ssl_early_data_enable'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * adminStateUp  监听器的管理状态。只支持设置为true。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    * defaultPoolId  监听器默认的后端云服务器组ID。当请求没有匹配的转发策略时，转发到默认后端云服务器上处理。
    * clientCaTlsContainerRef  监听器使用的CA证书ID。当且仅当type=client时，才会使用该字段对应的证书。  监听器协议为QUIC时不支持该字段。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt,dt_test)
    * defaultTlsContainerRef  监听器使用的服务器证书ID。  使用说明：当监听器协议为HTTPS、TLS或QUIC时，该字段必传，且对应的证书的type必须是server类型。
    * description  监听器的描述信息。
    * http2Enable  客户端与LB之间的HTTPS请求的HTTP2功能的开启状态。 开启后，可提升客户端与LB间的访问性能，但LB与后端服务器间仍采用HTTP1.X协议。  使用说明： - 仅HTTPS协议监听器有效。 - QUIC监听器不能设置该字段，固定返回为true。 - 其他协议的监听器可设置该字段但无效，无论取值如何都不影响监听器正常运行。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt,dt_test)
    * insertHeaders  insertHeaders
    * loadbalancerId  监听器所属的负载均衡器的ID列表。  使用说明： 一个监听器只支持关联到一个LB。
    * name  监听器的名称。  注意：若名称为空，则在控制台的监听器列表无法选择并查看监听器详情。
    * projectId  监听器所在的项目ID。
    * protocol  监听器的监听协议。  [取值：TCP、UDP、HTTP、HTTPS、TERMINATED_HTTPS、QUIC、TLS。  使用说明： - 共享型LB上的HTTPS监听器只支持设置为TERMINATED_HTTPS。 传入HTTPS将会自动转为TERMINATED_HTTPS。 - 独享型LB上的HTTPS监听器只支持设置为HTTPS，传入TERMINATED_HTTPS将会自动转为HTTPS。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,fcs,dt)  [取值：TCP、UDP、IP、HTTP、HTTPS。IP为网关型LB上的监听器独有的协议。](tag:hws_eu,hcso_dt)  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt,dt_test)
    * protocolPort  监听器的监听端口。QUIC监听器端口不能是4789，且不能和UDP监听器端口重复。传0时表示开启监听端口范围的能力，此时port_ranges为必填字段。 [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt,dt_test)
    * sniContainerRefs  监听器使用的SNI证书（带域名的服务器证书）ID列表。  使用说明： - 列表对应的所有SNI证书的域名不允许存在重复。 - 列表对应的所有SNI证书的域名总数不超过50。 - QUIC监听器仅支持RSA证书。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt,dt_test)
    * sniMatchAlgo  监听器使用的SNI证书泛域名匹配方式。 longest_suffix表示最长尾缀匹配，wildcard表示标准域名分级匹配。 默认为wildcard。
    * tags  标签列表
    * tlsCiphersPolicy  监听器使用的安全策略。  [取值：tls-1-0-inherit、tls-1-0、tls-1-1、 tls-1-2、tls-1-2-strict、tls-1-2-fs、tls-1-0-with-1-3、 tls-1-2-fs-with-1-3、 hybrid-policy-1-0、tls-1-2-strict-no-cbc，默认：tls-1-0。 ](tag:hws,hws_hk,ocb,tlf,ctc,hcso,sbc,tm,cmcc,dt)  [取值：tls-1-0、tls-1-1、tls-1-2、 tls-1-2-strict，默认：tls-1-0。](tag:hws_eu,g42,hk_g42,hcso_dt)  [使用说明： - 仅对HTTPS协议类型的监听器且关联LB为独享型时有效。 - QUIC监听器不支持该字段。 - 若同时设置了security_policy_id和tls_ciphers_policy，则仅security_policy_id生效。 - 加密套件的优先顺序为ecc套件、rsa套件、tls1.3协议的套件（即支持ecc又支持rsa） ](tag:hws,hws_hk,hws_eu,g42,hk_g42,ocb,tlf,ctc,hcso,sbc,tm,cmcc,dt)  [使用说明： - 仅对HTTPS协议类型的监听器有效](tag:hcso_dt)  [不支持tls1.3协议的套件。](tag:tm,hws_eu,g42,hk_g42) [不支持QUIC。](tag:tm,dt,dt_test)
    * securityPolicyId  自定义安全策略的ID。  [使用说明： - 仅对HTTPS协议类型的监听器且关联LB为独享型时有效。 - QUIC监听器不支持该字段。 - 若同时设置了security_policy_id和tls_ciphers_policy，则仅security_policy_id生效。 - 加密套件的优先顺序为ecc套件、rsa套件、tls1.3协议的套件 （即支持ecc又支持rsa） ](tag:hws,hws_hk,hws_eu,g42,hk_g42,ocb,tlf,ctc,hcso,sbc,tm,cmcc,dt)  [使用说明： - 仅对HTTPS协议类型的监听器有效](tag:hcso_dt)  [不支持tls1.3协议的套件。](tag:tm,hws_eu,g42,hk_g42)  [不支持QUIC。](tag:tm,dt,dt_test)
    * enableMemberRetry  是否开启后端服务器的重试。  取值：true 开启重试，false 不开启重试。默认：true。  [使用说明： - 若关联是共享型LB，仅在protocol为HTTP、TERMINATED_HTTPS时才能传入该字段。 - 若关联是独享型LB，仅在protocol为HTTP、HTTPS和QUIC时才能传入该字段。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,fcs,dt)  [使用说明： - 仅在protocol为HTTP、HTTPS时才能传入该字段。](tag:hws_eu,hcso_dt)  [不支持QUIC。](tag:tm,dt,dt_test)
    * keepaliveTimeout  客户端连接空闲超时时间。在超过keepalive_timeout时长一直没有请求， 负载均衡会暂时中断当前连接，直到下一次请求时重新建立新的连接。  取值： - TCP监听器[和IP监听器](tag:hws_eu)：10-4000s，默认值为300s。 - 若为HTTP/HTTPS/TERMINATED_HTTPS监听器，取值范围为（0-4000s）默认值为60s。  共享型实例的UDP监听器不支持此字段。
    * clientTimeout  等待客户端请求超时时间，包括两种情况： - 读取整个客户端请求头的超时时长：如果客户端未在超时时长内发送完整个请求头，则请求将被中断 - 两个连续body体的数据包到达LB的时间间隔，超出client_timeout将会断开连接。  取值范围为1-300s，默认值为60s。  使用说明：仅协议为HTTP/HTTPS的监听器支持该字段。
    * memberTimeout  等待后端服务器响应超时时间。请求转发后端服务器后，在等待超时member_timeout时长没有响应，负载均衡将终止等待，并返回 HTTP504错误码。  取值：1-300s，默认为60s。  使用说明：仅支持协议为HTTP/HTTPS的监听器。
    * ipgroup  ipgroup
    * transparentClientIpEnable  是否透传客户端IP地址。开启后客户端IP地址将透传到后端服务器。 [仅作用于共享型LB的TCP/UDP监听器。  取值： - 共享型LB的TCP/UDP监听器可设置为true或false，不传默认为false。 - 共享型LB的HTTP/HTTPS监听器只支持设置为true，不传默认为true。 - 独享型负载均衡器所有协议的监听器只支持设置为true，不传默认为true。  使用说明： - 开启特性后，ELB和后端服务器之间直接使用真实的IP访问，需要确保已正确设置服务器的安全组以及访问控制策略。 - 开启特性后，不支持同一台服务器既作为后端服务器又作为客户端的场景。 - 开启特性后，不支持变更后端服务器规格。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,fcs,dt)  [只设支持置为true，不传默认为true。](tag:hws_eu,hcso_dt)
    * proxyProtocolEnable  是否开启proxy_protocol。仅TLS监听器可指定，其他协议的监听器该字段不生效，proxy_protocol不开启。
    * enhanceL7policyEnable  是否开启高级转发策略功能。开启高级转发策略后，支持更灵活的转发策略和转发规则设置。  取值：true开启，false不开启，默认false。  开启后支持如下场景： - 转发策略的action字段支持指定为REDIRECT_TO_URL, FIXED_RESPONSE，即支持URL重定向和响应固定的内容给客户端。 - 转发策略支持指定priority、redirect_url_config、fixed_response_config字段。 - 转发规则rule的type可以指定METHOD, HEADER, QUERY_STRING, SOURCE_IP这几种取值。 - 转发规则rule的type为HOST_NAME时，转发规则rule的value支持通配符*。 - 转发规则支持指定conditions字段。  [荷兰region不支持该字段，请勿使用。](tag:dt,dt_test) > 开启后不支持关闭
    * quicConfig  quicConfig
    * protectionStatus  修改保护状态, 取值： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
    * protectionReason  设置保护的原因 >仅当protection_status为consoleProtection时有效。
    * gzipEnable  ELB是否开启gzip压缩，缺省值：false，非必选  [仅HTTP/HTTPS类型监听器支持配置。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt,dt_test) [仅HTTP/HTTPS/QUIC类型监听器支持配置。](tag:hws,hws_hk,hws_test,hcs,hcs_sm,hcso,hk_vdf,fcs,fcs_vm,mix,ocb,ctc,cmcc,sbc,hws_ocb,hk_sbc)
    * portRanges  端口监听范围（闭区间)，最多指定10个端口组，每个组范围不可有重叠部分 >仅当protocol_port为0或未传入protoco_port时可以传入该字段。仅TCP, UDP，TLS监听支持该字段
    * sslEarlyDataEnable  监听器0-RTT能力开关，缺省值：false，非必选  仅HTTPS类型监听器支持配置，需要依赖TLSv1.3安全策略协议。开启 ssl_early_data 后，有重放攻击的风险，请谨慎开启。
    *
    * @var string[]
    */
    protected static $setters = [
            'adminStateUp' => 'setAdminStateUp',
            'defaultPoolId' => 'setDefaultPoolId',
            'clientCaTlsContainerRef' => 'setClientCaTlsContainerRef',
            'defaultTlsContainerRef' => 'setDefaultTlsContainerRef',
            'description' => 'setDescription',
            'http2Enable' => 'setHttp2Enable',
            'insertHeaders' => 'setInsertHeaders',
            'loadbalancerId' => 'setLoadbalancerId',
            'name' => 'setName',
            'projectId' => 'setProjectId',
            'protocol' => 'setProtocol',
            'protocolPort' => 'setProtocolPort',
            'sniContainerRefs' => 'setSniContainerRefs',
            'sniMatchAlgo' => 'setSniMatchAlgo',
            'tags' => 'setTags',
            'tlsCiphersPolicy' => 'setTlsCiphersPolicy',
            'securityPolicyId' => 'setSecurityPolicyId',
            'enableMemberRetry' => 'setEnableMemberRetry',
            'keepaliveTimeout' => 'setKeepaliveTimeout',
            'clientTimeout' => 'setClientTimeout',
            'memberTimeout' => 'setMemberTimeout',
            'ipgroup' => 'setIpgroup',
            'transparentClientIpEnable' => 'setTransparentClientIpEnable',
            'proxyProtocolEnable' => 'setProxyProtocolEnable',
            'enhanceL7policyEnable' => 'setEnhanceL7policyEnable',
            'quicConfig' => 'setQuicConfig',
            'protectionStatus' => 'setProtectionStatus',
            'protectionReason' => 'setProtectionReason',
            'gzipEnable' => 'setGzipEnable',
            'portRanges' => 'setPortRanges',
            'sslEarlyDataEnable' => 'setSslEarlyDataEnable'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * adminStateUp  监听器的管理状态。只支持设置为true。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    * defaultPoolId  监听器默认的后端云服务器组ID。当请求没有匹配的转发策略时，转发到默认后端云服务器上处理。
    * clientCaTlsContainerRef  监听器使用的CA证书ID。当且仅当type=client时，才会使用该字段对应的证书。  监听器协议为QUIC时不支持该字段。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt,dt_test)
    * defaultTlsContainerRef  监听器使用的服务器证书ID。  使用说明：当监听器协议为HTTPS、TLS或QUIC时，该字段必传，且对应的证书的type必须是server类型。
    * description  监听器的描述信息。
    * http2Enable  客户端与LB之间的HTTPS请求的HTTP2功能的开启状态。 开启后，可提升客户端与LB间的访问性能，但LB与后端服务器间仍采用HTTP1.X协议。  使用说明： - 仅HTTPS协议监听器有效。 - QUIC监听器不能设置该字段，固定返回为true。 - 其他协议的监听器可设置该字段但无效，无论取值如何都不影响监听器正常运行。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt,dt_test)
    * insertHeaders  insertHeaders
    * loadbalancerId  监听器所属的负载均衡器的ID列表。  使用说明： 一个监听器只支持关联到一个LB。
    * name  监听器的名称。  注意：若名称为空，则在控制台的监听器列表无法选择并查看监听器详情。
    * projectId  监听器所在的项目ID。
    * protocol  监听器的监听协议。  [取值：TCP、UDP、HTTP、HTTPS、TERMINATED_HTTPS、QUIC、TLS。  使用说明： - 共享型LB上的HTTPS监听器只支持设置为TERMINATED_HTTPS。 传入HTTPS将会自动转为TERMINATED_HTTPS。 - 独享型LB上的HTTPS监听器只支持设置为HTTPS，传入TERMINATED_HTTPS将会自动转为HTTPS。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,fcs,dt)  [取值：TCP、UDP、IP、HTTP、HTTPS。IP为网关型LB上的监听器独有的协议。](tag:hws_eu,hcso_dt)  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt,dt_test)
    * protocolPort  监听器的监听端口。QUIC监听器端口不能是4789，且不能和UDP监听器端口重复。传0时表示开启监听端口范围的能力，此时port_ranges为必填字段。 [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt,dt_test)
    * sniContainerRefs  监听器使用的SNI证书（带域名的服务器证书）ID列表。  使用说明： - 列表对应的所有SNI证书的域名不允许存在重复。 - 列表对应的所有SNI证书的域名总数不超过50。 - QUIC监听器仅支持RSA证书。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt,dt_test)
    * sniMatchAlgo  监听器使用的SNI证书泛域名匹配方式。 longest_suffix表示最长尾缀匹配，wildcard表示标准域名分级匹配。 默认为wildcard。
    * tags  标签列表
    * tlsCiphersPolicy  监听器使用的安全策略。  [取值：tls-1-0-inherit、tls-1-0、tls-1-1、 tls-1-2、tls-1-2-strict、tls-1-2-fs、tls-1-0-with-1-3、 tls-1-2-fs-with-1-3、 hybrid-policy-1-0、tls-1-2-strict-no-cbc，默认：tls-1-0。 ](tag:hws,hws_hk,ocb,tlf,ctc,hcso,sbc,tm,cmcc,dt)  [取值：tls-1-0、tls-1-1、tls-1-2、 tls-1-2-strict，默认：tls-1-0。](tag:hws_eu,g42,hk_g42,hcso_dt)  [使用说明： - 仅对HTTPS协议类型的监听器且关联LB为独享型时有效。 - QUIC监听器不支持该字段。 - 若同时设置了security_policy_id和tls_ciphers_policy，则仅security_policy_id生效。 - 加密套件的优先顺序为ecc套件、rsa套件、tls1.3协议的套件（即支持ecc又支持rsa） ](tag:hws,hws_hk,hws_eu,g42,hk_g42,ocb,tlf,ctc,hcso,sbc,tm,cmcc,dt)  [使用说明： - 仅对HTTPS协议类型的监听器有效](tag:hcso_dt)  [不支持tls1.3协议的套件。](tag:tm,hws_eu,g42,hk_g42) [不支持QUIC。](tag:tm,dt,dt_test)
    * securityPolicyId  自定义安全策略的ID。  [使用说明： - 仅对HTTPS协议类型的监听器且关联LB为独享型时有效。 - QUIC监听器不支持该字段。 - 若同时设置了security_policy_id和tls_ciphers_policy，则仅security_policy_id生效。 - 加密套件的优先顺序为ecc套件、rsa套件、tls1.3协议的套件 （即支持ecc又支持rsa） ](tag:hws,hws_hk,hws_eu,g42,hk_g42,ocb,tlf,ctc,hcso,sbc,tm,cmcc,dt)  [使用说明： - 仅对HTTPS协议类型的监听器有效](tag:hcso_dt)  [不支持tls1.3协议的套件。](tag:tm,hws_eu,g42,hk_g42)  [不支持QUIC。](tag:tm,dt,dt_test)
    * enableMemberRetry  是否开启后端服务器的重试。  取值：true 开启重试，false 不开启重试。默认：true。  [使用说明： - 若关联是共享型LB，仅在protocol为HTTP、TERMINATED_HTTPS时才能传入该字段。 - 若关联是独享型LB，仅在protocol为HTTP、HTTPS和QUIC时才能传入该字段。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,fcs,dt)  [使用说明： - 仅在protocol为HTTP、HTTPS时才能传入该字段。](tag:hws_eu,hcso_dt)  [不支持QUIC。](tag:tm,dt,dt_test)
    * keepaliveTimeout  客户端连接空闲超时时间。在超过keepalive_timeout时长一直没有请求， 负载均衡会暂时中断当前连接，直到下一次请求时重新建立新的连接。  取值： - TCP监听器[和IP监听器](tag:hws_eu)：10-4000s，默认值为300s。 - 若为HTTP/HTTPS/TERMINATED_HTTPS监听器，取值范围为（0-4000s）默认值为60s。  共享型实例的UDP监听器不支持此字段。
    * clientTimeout  等待客户端请求超时时间，包括两种情况： - 读取整个客户端请求头的超时时长：如果客户端未在超时时长内发送完整个请求头，则请求将被中断 - 两个连续body体的数据包到达LB的时间间隔，超出client_timeout将会断开连接。  取值范围为1-300s，默认值为60s。  使用说明：仅协议为HTTP/HTTPS的监听器支持该字段。
    * memberTimeout  等待后端服务器响应超时时间。请求转发后端服务器后，在等待超时member_timeout时长没有响应，负载均衡将终止等待，并返回 HTTP504错误码。  取值：1-300s，默认为60s。  使用说明：仅支持协议为HTTP/HTTPS的监听器。
    * ipgroup  ipgroup
    * transparentClientIpEnable  是否透传客户端IP地址。开启后客户端IP地址将透传到后端服务器。 [仅作用于共享型LB的TCP/UDP监听器。  取值： - 共享型LB的TCP/UDP监听器可设置为true或false，不传默认为false。 - 共享型LB的HTTP/HTTPS监听器只支持设置为true，不传默认为true。 - 独享型负载均衡器所有协议的监听器只支持设置为true，不传默认为true。  使用说明： - 开启特性后，ELB和后端服务器之间直接使用真实的IP访问，需要确保已正确设置服务器的安全组以及访问控制策略。 - 开启特性后，不支持同一台服务器既作为后端服务器又作为客户端的场景。 - 开启特性后，不支持变更后端服务器规格。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,fcs,dt)  [只设支持置为true，不传默认为true。](tag:hws_eu,hcso_dt)
    * proxyProtocolEnable  是否开启proxy_protocol。仅TLS监听器可指定，其他协议的监听器该字段不生效，proxy_protocol不开启。
    * enhanceL7policyEnable  是否开启高级转发策略功能。开启高级转发策略后，支持更灵活的转发策略和转发规则设置。  取值：true开启，false不开启，默认false。  开启后支持如下场景： - 转发策略的action字段支持指定为REDIRECT_TO_URL, FIXED_RESPONSE，即支持URL重定向和响应固定的内容给客户端。 - 转发策略支持指定priority、redirect_url_config、fixed_response_config字段。 - 转发规则rule的type可以指定METHOD, HEADER, QUERY_STRING, SOURCE_IP这几种取值。 - 转发规则rule的type为HOST_NAME时，转发规则rule的value支持通配符*。 - 转发规则支持指定conditions字段。  [荷兰region不支持该字段，请勿使用。](tag:dt,dt_test) > 开启后不支持关闭
    * quicConfig  quicConfig
    * protectionStatus  修改保护状态, 取值： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
    * protectionReason  设置保护的原因 >仅当protection_status为consoleProtection时有效。
    * gzipEnable  ELB是否开启gzip压缩，缺省值：false，非必选  [仅HTTP/HTTPS类型监听器支持配置。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt,dt_test) [仅HTTP/HTTPS/QUIC类型监听器支持配置。](tag:hws,hws_hk,hws_test,hcs,hcs_sm,hcso,hk_vdf,fcs,fcs_vm,mix,ocb,ctc,cmcc,sbc,hws_ocb,hk_sbc)
    * portRanges  端口监听范围（闭区间)，最多指定10个端口组，每个组范围不可有重叠部分 >仅当protocol_port为0或未传入protoco_port时可以传入该字段。仅TCP, UDP，TLS监听支持该字段
    * sslEarlyDataEnable  监听器0-RTT能力开关，缺省值：false，非必选  仅HTTPS类型监听器支持配置，需要依赖TLSv1.3安全策略协议。开启 ssl_early_data 后，有重放攻击的风险，请谨慎开启。
    *
    * @var string[]
    */
    protected static $getters = [
            'adminStateUp' => 'getAdminStateUp',
            'defaultPoolId' => 'getDefaultPoolId',
            'clientCaTlsContainerRef' => 'getClientCaTlsContainerRef',
            'defaultTlsContainerRef' => 'getDefaultTlsContainerRef',
            'description' => 'getDescription',
            'http2Enable' => 'getHttp2Enable',
            'insertHeaders' => 'getInsertHeaders',
            'loadbalancerId' => 'getLoadbalancerId',
            'name' => 'getName',
            'projectId' => 'getProjectId',
            'protocol' => 'getProtocol',
            'protocolPort' => 'getProtocolPort',
            'sniContainerRefs' => 'getSniContainerRefs',
            'sniMatchAlgo' => 'getSniMatchAlgo',
            'tags' => 'getTags',
            'tlsCiphersPolicy' => 'getTlsCiphersPolicy',
            'securityPolicyId' => 'getSecurityPolicyId',
            'enableMemberRetry' => 'getEnableMemberRetry',
            'keepaliveTimeout' => 'getKeepaliveTimeout',
            'clientTimeout' => 'getClientTimeout',
            'memberTimeout' => 'getMemberTimeout',
            'ipgroup' => 'getIpgroup',
            'transparentClientIpEnable' => 'getTransparentClientIpEnable',
            'proxyProtocolEnable' => 'getProxyProtocolEnable',
            'enhanceL7policyEnable' => 'getEnhanceL7policyEnable',
            'quicConfig' => 'getQuicConfig',
            'protectionStatus' => 'getProtectionStatus',
            'protectionReason' => 'getProtectionReason',
            'gzipEnable' => 'getGzipEnable',
            'portRanges' => 'getPortRanges',
            'sslEarlyDataEnable' => 'getSslEarlyDataEnable'
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
    const PROTECTION_STATUS_NON_PROTECTION = 'nonProtection';
    const PROTECTION_STATUS_CONSOLE_PROTECTION = 'consoleProtection';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProtectionStatusAllowableValues()
    {
        return [
            self::PROTECTION_STATUS_NON_PROTECTION,
            self::PROTECTION_STATUS_CONSOLE_PROTECTION,
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
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['defaultPoolId'] = isset($data['defaultPoolId']) ? $data['defaultPoolId'] : null;
        $this->container['clientCaTlsContainerRef'] = isset($data['clientCaTlsContainerRef']) ? $data['clientCaTlsContainerRef'] : null;
        $this->container['defaultTlsContainerRef'] = isset($data['defaultTlsContainerRef']) ? $data['defaultTlsContainerRef'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['http2Enable'] = isset($data['http2Enable']) ? $data['http2Enable'] : null;
        $this->container['insertHeaders'] = isset($data['insertHeaders']) ? $data['insertHeaders'] : null;
        $this->container['loadbalancerId'] = isset($data['loadbalancerId']) ? $data['loadbalancerId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['protocolPort'] = isset($data['protocolPort']) ? $data['protocolPort'] : null;
        $this->container['sniContainerRefs'] = isset($data['sniContainerRefs']) ? $data['sniContainerRefs'] : null;
        $this->container['sniMatchAlgo'] = isset($data['sniMatchAlgo']) ? $data['sniMatchAlgo'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['tlsCiphersPolicy'] = isset($data['tlsCiphersPolicy']) ? $data['tlsCiphersPolicy'] : null;
        $this->container['securityPolicyId'] = isset($data['securityPolicyId']) ? $data['securityPolicyId'] : null;
        $this->container['enableMemberRetry'] = isset($data['enableMemberRetry']) ? $data['enableMemberRetry'] : null;
        $this->container['keepaliveTimeout'] = isset($data['keepaliveTimeout']) ? $data['keepaliveTimeout'] : null;
        $this->container['clientTimeout'] = isset($data['clientTimeout']) ? $data['clientTimeout'] : null;
        $this->container['memberTimeout'] = isset($data['memberTimeout']) ? $data['memberTimeout'] : null;
        $this->container['ipgroup'] = isset($data['ipgroup']) ? $data['ipgroup'] : null;
        $this->container['transparentClientIpEnable'] = isset($data['transparentClientIpEnable']) ? $data['transparentClientIpEnable'] : null;
        $this->container['proxyProtocolEnable'] = isset($data['proxyProtocolEnable']) ? $data['proxyProtocolEnable'] : null;
        $this->container['enhanceL7policyEnable'] = isset($data['enhanceL7policyEnable']) ? $data['enhanceL7policyEnable'] : null;
        $this->container['quicConfig'] = isset($data['quicConfig']) ? $data['quicConfig'] : null;
        $this->container['protectionStatus'] = isset($data['protectionStatus']) ? $data['protectionStatus'] : null;
        $this->container['protectionReason'] = isset($data['protectionReason']) ? $data['protectionReason'] : null;
        $this->container['gzipEnable'] = isset($data['gzipEnable']) ? $data['gzipEnable'] : null;
        $this->container['portRanges'] = isset($data['portRanges']) ? $data['portRanges'] : null;
        $this->container['sslEarlyDataEnable'] = isset($data['sslEarlyDataEnable']) ? $data['sslEarlyDataEnable'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['defaultPoolId']) && (mb_strlen($this->container['defaultPoolId']) > 36)) {
                $invalidProperties[] = "invalid value for 'defaultPoolId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['defaultPoolId']) && (mb_strlen($this->container['defaultPoolId']) < 1)) {
                $invalidProperties[] = "invalid value for 'defaultPoolId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['clientCaTlsContainerRef']) && (mb_strlen($this->container['clientCaTlsContainerRef']) > 128)) {
                $invalidProperties[] = "invalid value for 'clientCaTlsContainerRef', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['clientCaTlsContainerRef']) && (mb_strlen($this->container['clientCaTlsContainerRef']) < 1)) {
                $invalidProperties[] = "invalid value for 'clientCaTlsContainerRef', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['clientCaTlsContainerRef']) && !preg_match("/[0-9a-fA-F]{32}/", $this->container['clientCaTlsContainerRef'])) {
                $invalidProperties[] = "invalid value for 'clientCaTlsContainerRef', must be conform to the pattern /[0-9a-fA-F]{32}/.";
            }
            if (!is_null($this->container['defaultTlsContainerRef']) && (mb_strlen($this->container['defaultTlsContainerRef']) > 128)) {
                $invalidProperties[] = "invalid value for 'defaultTlsContainerRef', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['defaultTlsContainerRef']) && (mb_strlen($this->container['defaultTlsContainerRef']) < 1)) {
                $invalidProperties[] = "invalid value for 'defaultTlsContainerRef', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['defaultTlsContainerRef']) && !preg_match("/[0-9a-fA-F]{32}/", $this->container['defaultTlsContainerRef'])) {
                $invalidProperties[] = "invalid value for 'defaultTlsContainerRef', must be conform to the pattern /[0-9a-fA-F]{32}/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['loadbalancerId'] === null) {
            $invalidProperties[] = "'loadbalancerId' can't be null";
        }
            if ((mb_strlen($this->container['loadbalancerId']) > 36)) {
                $invalidProperties[] = "invalid value for 'loadbalancerId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['loadbalancerId']) < 1)) {
                $invalidProperties[] = "invalid value for 'loadbalancerId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
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
        if ($this->container['protocol'] === null) {
            $invalidProperties[] = "'protocol' can't be null";
        }
            if (!is_null($this->container['protocolPort']) && ($this->container['protocolPort'] > 65535)) {
                $invalidProperties[] = "invalid value for 'protocolPort', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['protocolPort']) && ($this->container['protocolPort'] < 0)) {
                $invalidProperties[] = "invalid value for 'protocolPort', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['securityPolicyId']) && (mb_strlen($this->container['securityPolicyId']) > 36)) {
                $invalidProperties[] = "invalid value for 'securityPolicyId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['securityPolicyId']) && (mb_strlen($this->container['securityPolicyId']) < 1)) {
                $invalidProperties[] = "invalid value for 'securityPolicyId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['clientTimeout']) && ($this->container['clientTimeout'] > 300)) {
                $invalidProperties[] = "invalid value for 'clientTimeout', must be smaller than or equal to 300.";
            }
            if (!is_null($this->container['clientTimeout']) && ($this->container['clientTimeout'] < 1)) {
                $invalidProperties[] = "invalid value for 'clientTimeout', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['memberTimeout']) && ($this->container['memberTimeout'] > 300)) {
                $invalidProperties[] = "invalid value for 'memberTimeout', must be smaller than or equal to 300.";
            }
            if (!is_null($this->container['memberTimeout']) && ($this->container['memberTimeout'] < 1)) {
                $invalidProperties[] = "invalid value for 'memberTimeout', must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getProtectionStatusAllowableValues();
                if (!is_null($this->container['protectionStatus']) && !in_array($this->container['protectionStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'protectionStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['protectionReason']) && (mb_strlen($this->container['protectionReason']) > 255)) {
                $invalidProperties[] = "invalid value for 'protectionReason', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['protectionReason']) && (mb_strlen($this->container['protectionReason']) < 0)) {
                $invalidProperties[] = "invalid value for 'protectionReason', the character length must be bigger than or equal to 0.";
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
    *  监听器的管理状态。只支持设置为true。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
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
    * @param bool|null $adminStateUp 监听器的管理状态。只支持设置为true。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets defaultPoolId
    *  监听器默认的后端云服务器组ID。当请求没有匹配的转发策略时，转发到默认后端云服务器上处理。
    *
    * @return string|null
    */
    public function getDefaultPoolId()
    {
        return $this->container['defaultPoolId'];
    }

    /**
    * Sets defaultPoolId
    *
    * @param string|null $defaultPoolId 监听器默认的后端云服务器组ID。当请求没有匹配的转发策略时，转发到默认后端云服务器上处理。
    *
    * @return $this
    */
    public function setDefaultPoolId($defaultPoolId)
    {
        $this->container['defaultPoolId'] = $defaultPoolId;
        return $this;
    }

    /**
    * Gets clientCaTlsContainerRef
    *  监听器使用的CA证书ID。当且仅当type=client时，才会使用该字段对应的证书。  监听器协议为QUIC时不支持该字段。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt,dt_test)
    *
    * @return string|null
    */
    public function getClientCaTlsContainerRef()
    {
        return $this->container['clientCaTlsContainerRef'];
    }

    /**
    * Sets clientCaTlsContainerRef
    *
    * @param string|null $clientCaTlsContainerRef 监听器使用的CA证书ID。当且仅当type=client时，才会使用该字段对应的证书。  监听器协议为QUIC时不支持该字段。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt,dt_test)
    *
    * @return $this
    */
    public function setClientCaTlsContainerRef($clientCaTlsContainerRef)
    {
        $this->container['clientCaTlsContainerRef'] = $clientCaTlsContainerRef;
        return $this;
    }

    /**
    * Gets defaultTlsContainerRef
    *  监听器使用的服务器证书ID。  使用说明：当监听器协议为HTTPS、TLS或QUIC时，该字段必传，且对应的证书的type必须是server类型。
    *
    * @return string|null
    */
    public function getDefaultTlsContainerRef()
    {
        return $this->container['defaultTlsContainerRef'];
    }

    /**
    * Sets defaultTlsContainerRef
    *
    * @param string|null $defaultTlsContainerRef 监听器使用的服务器证书ID。  使用说明：当监听器协议为HTTPS、TLS或QUIC时，该字段必传，且对应的证书的type必须是server类型。
    *
    * @return $this
    */
    public function setDefaultTlsContainerRef($defaultTlsContainerRef)
    {
        $this->container['defaultTlsContainerRef'] = $defaultTlsContainerRef;
        return $this;
    }

    /**
    * Gets description
    *  监听器的描述信息。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 监听器的描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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
    * Gets insertHeaders
    *  insertHeaders
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\ListenerInsertHeaders|null
    */
    public function getInsertHeaders()
    {
        return $this->container['insertHeaders'];
    }

    /**
    * Sets insertHeaders
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\ListenerInsertHeaders|null $insertHeaders insertHeaders
    *
    * @return $this
    */
    public function setInsertHeaders($insertHeaders)
    {
        $this->container['insertHeaders'] = $insertHeaders;
        return $this;
    }

    /**
    * Gets loadbalancerId
    *  监听器所属的负载均衡器的ID列表。  使用说明： 一个监听器只支持关联到一个LB。
    *
    * @return string
    */
    public function getLoadbalancerId()
    {
        return $this->container['loadbalancerId'];
    }

    /**
    * Sets loadbalancerId
    *
    * @param string $loadbalancerId 监听器所属的负载均衡器的ID列表。  使用说明： 一个监听器只支持关联到一个LB。
    *
    * @return $this
    */
    public function setLoadbalancerId($loadbalancerId)
    {
        $this->container['loadbalancerId'] = $loadbalancerId;
        return $this;
    }

    /**
    * Gets name
    *  监听器的名称。  注意：若名称为空，则在控制台的监听器列表无法选择并查看监听器详情。
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
    * @param string|null $name 监听器的名称。  注意：若名称为空，则在控制台的监听器列表无法选择并查看监听器详情。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets projectId
    *  监听器所在的项目ID。
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
    * @param string|null $projectId 监听器所在的项目ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets protocol
    *  监听器的监听协议。  [取值：TCP、UDP、HTTP、HTTPS、TERMINATED_HTTPS、QUIC、TLS。  使用说明： - 共享型LB上的HTTPS监听器只支持设置为TERMINATED_HTTPS。 传入HTTPS将会自动转为TERMINATED_HTTPS。 - 独享型LB上的HTTPS监听器只支持设置为HTTPS，传入TERMINATED_HTTPS将会自动转为HTTPS。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,fcs,dt)  [取值：TCP、UDP、IP、HTTP、HTTPS。IP为网关型LB上的监听器独有的协议。](tag:hws_eu,hcso_dt)  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt,dt_test)
    *
    * @return string
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string $protocol 监听器的监听协议。  [取值：TCP、UDP、HTTP、HTTPS、TERMINATED_HTTPS、QUIC、TLS。  使用说明： - 共享型LB上的HTTPS监听器只支持设置为TERMINATED_HTTPS。 传入HTTPS将会自动转为TERMINATED_HTTPS。 - 独享型LB上的HTTPS监听器只支持设置为HTTPS，传入TERMINATED_HTTPS将会自动转为HTTPS。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,fcs,dt)  [取值：TCP、UDP、IP、HTTP、HTTPS。IP为网关型LB上的监听器独有的协议。](tag:hws_eu,hcso_dt)  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt,dt_test)
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets protocolPort
    *  监听器的监听端口。QUIC监听器端口不能是4789，且不能和UDP监听器端口重复。传0时表示开启监听端口范围的能力，此时port_ranges为必填字段。 [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt,dt_test)
    *
    * @return int|null
    */
    public function getProtocolPort()
    {
        return $this->container['protocolPort'];
    }

    /**
    * Sets protocolPort
    *
    * @param int|null $protocolPort 监听器的监听端口。QUIC监听器端口不能是4789，且不能和UDP监听器端口重复。传0时表示开启监听端口范围的能力，此时port_ranges为必填字段。 [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt,dt_test)
    *
    * @return $this
    */
    public function setProtocolPort($protocolPort)
    {
        $this->container['protocolPort'] = $protocolPort;
        return $this;
    }

    /**
    * Gets sniContainerRefs
    *  监听器使用的SNI证书（带域名的服务器证书）ID列表。  使用说明： - 列表对应的所有SNI证书的域名不允许存在重复。 - 列表对应的所有SNI证书的域名总数不超过50。 - QUIC监听器仅支持RSA证书。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt,dt_test)
    *
    * @return string[]|null
    */
    public function getSniContainerRefs()
    {
        return $this->container['sniContainerRefs'];
    }

    /**
    * Sets sniContainerRefs
    *
    * @param string[]|null $sniContainerRefs 监听器使用的SNI证书（带域名的服务器证书）ID列表。  使用说明： - 列表对应的所有SNI证书的域名不允许存在重复。 - 列表对应的所有SNI证书的域名总数不超过50。 - QUIC监听器仅支持RSA证书。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt,dt_test)
    *
    * @return $this
    */
    public function setSniContainerRefs($sniContainerRefs)
    {
        $this->container['sniContainerRefs'] = $sniContainerRefs;
        return $this;
    }

    /**
    * Gets sniMatchAlgo
    *  监听器使用的SNI证书泛域名匹配方式。 longest_suffix表示最长尾缀匹配，wildcard表示标准域名分级匹配。 默认为wildcard。
    *
    * @return string|null
    */
    public function getSniMatchAlgo()
    {
        return $this->container['sniMatchAlgo'];
    }

    /**
    * Sets sniMatchAlgo
    *
    * @param string|null $sniMatchAlgo 监听器使用的SNI证书泛域名匹配方式。 longest_suffix表示最长尾缀匹配，wildcard表示标准域名分级匹配。 默认为wildcard。
    *
    * @return $this
    */
    public function setSniMatchAlgo($sniMatchAlgo)
    {
        $this->container['sniMatchAlgo'] = $sniMatchAlgo;
        return $this;
    }

    /**
    * Gets tags
    *  标签列表
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\Tag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\Tag[]|null $tags 标签列表
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets tlsCiphersPolicy
    *  监听器使用的安全策略。  [取值：tls-1-0-inherit、tls-1-0、tls-1-1、 tls-1-2、tls-1-2-strict、tls-1-2-fs、tls-1-0-with-1-3、 tls-1-2-fs-with-1-3、 hybrid-policy-1-0、tls-1-2-strict-no-cbc，默认：tls-1-0。 ](tag:hws,hws_hk,ocb,tlf,ctc,hcso,sbc,tm,cmcc,dt)  [取值：tls-1-0、tls-1-1、tls-1-2、 tls-1-2-strict，默认：tls-1-0。](tag:hws_eu,g42,hk_g42,hcso_dt)  [使用说明： - 仅对HTTPS协议类型的监听器且关联LB为独享型时有效。 - QUIC监听器不支持该字段。 - 若同时设置了security_policy_id和tls_ciphers_policy，则仅security_policy_id生效。 - 加密套件的优先顺序为ecc套件、rsa套件、tls1.3协议的套件（即支持ecc又支持rsa） ](tag:hws,hws_hk,hws_eu,g42,hk_g42,ocb,tlf,ctc,hcso,sbc,tm,cmcc,dt)  [使用说明： - 仅对HTTPS协议类型的监听器有效](tag:hcso_dt)  [不支持tls1.3协议的套件。](tag:tm,hws_eu,g42,hk_g42) [不支持QUIC。](tag:tm,dt,dt_test)
    *
    * @return string|null
    */
    public function getTlsCiphersPolicy()
    {
        return $this->container['tlsCiphersPolicy'];
    }

    /**
    * Sets tlsCiphersPolicy
    *
    * @param string|null $tlsCiphersPolicy 监听器使用的安全策略。  [取值：tls-1-0-inherit、tls-1-0、tls-1-1、 tls-1-2、tls-1-2-strict、tls-1-2-fs、tls-1-0-with-1-3、 tls-1-2-fs-with-1-3、 hybrid-policy-1-0、tls-1-2-strict-no-cbc，默认：tls-1-0。 ](tag:hws,hws_hk,ocb,tlf,ctc,hcso,sbc,tm,cmcc,dt)  [取值：tls-1-0、tls-1-1、tls-1-2、 tls-1-2-strict，默认：tls-1-0。](tag:hws_eu,g42,hk_g42,hcso_dt)  [使用说明： - 仅对HTTPS协议类型的监听器且关联LB为独享型时有效。 - QUIC监听器不支持该字段。 - 若同时设置了security_policy_id和tls_ciphers_policy，则仅security_policy_id生效。 - 加密套件的优先顺序为ecc套件、rsa套件、tls1.3协议的套件（即支持ecc又支持rsa） ](tag:hws,hws_hk,hws_eu,g42,hk_g42,ocb,tlf,ctc,hcso,sbc,tm,cmcc,dt)  [使用说明： - 仅对HTTPS协议类型的监听器有效](tag:hcso_dt)  [不支持tls1.3协议的套件。](tag:tm,hws_eu,g42,hk_g42) [不支持QUIC。](tag:tm,dt,dt_test)
    *
    * @return $this
    */
    public function setTlsCiphersPolicy($tlsCiphersPolicy)
    {
        $this->container['tlsCiphersPolicy'] = $tlsCiphersPolicy;
        return $this;
    }

    /**
    * Gets securityPolicyId
    *  自定义安全策略的ID。  [使用说明： - 仅对HTTPS协议类型的监听器且关联LB为独享型时有效。 - QUIC监听器不支持该字段。 - 若同时设置了security_policy_id和tls_ciphers_policy，则仅security_policy_id生效。 - 加密套件的优先顺序为ecc套件、rsa套件、tls1.3协议的套件 （即支持ecc又支持rsa） ](tag:hws,hws_hk,hws_eu,g42,hk_g42,ocb,tlf,ctc,hcso,sbc,tm,cmcc,dt)  [使用说明： - 仅对HTTPS协议类型的监听器有效](tag:hcso_dt)  [不支持tls1.3协议的套件。](tag:tm,hws_eu,g42,hk_g42)  [不支持QUIC。](tag:tm,dt,dt_test)
    *
    * @return string|null
    */
    public function getSecurityPolicyId()
    {
        return $this->container['securityPolicyId'];
    }

    /**
    * Sets securityPolicyId
    *
    * @param string|null $securityPolicyId 自定义安全策略的ID。  [使用说明： - 仅对HTTPS协议类型的监听器且关联LB为独享型时有效。 - QUIC监听器不支持该字段。 - 若同时设置了security_policy_id和tls_ciphers_policy，则仅security_policy_id生效。 - 加密套件的优先顺序为ecc套件、rsa套件、tls1.3协议的套件 （即支持ecc又支持rsa） ](tag:hws,hws_hk,hws_eu,g42,hk_g42,ocb,tlf,ctc,hcso,sbc,tm,cmcc,dt)  [使用说明： - 仅对HTTPS协议类型的监听器有效](tag:hcso_dt)  [不支持tls1.3协议的套件。](tag:tm,hws_eu,g42,hk_g42)  [不支持QUIC。](tag:tm,dt,dt_test)
    *
    * @return $this
    */
    public function setSecurityPolicyId($securityPolicyId)
    {
        $this->container['securityPolicyId'] = $securityPolicyId;
        return $this;
    }

    /**
    * Gets enableMemberRetry
    *  是否开启后端服务器的重试。  取值：true 开启重试，false 不开启重试。默认：true。  [使用说明： - 若关联是共享型LB，仅在protocol为HTTP、TERMINATED_HTTPS时才能传入该字段。 - 若关联是独享型LB，仅在protocol为HTTP、HTTPS和QUIC时才能传入该字段。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,fcs,dt)  [使用说明： - 仅在protocol为HTTP、HTTPS时才能传入该字段。](tag:hws_eu,hcso_dt)  [不支持QUIC。](tag:tm,dt,dt_test)
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
    * @param bool|null $enableMemberRetry 是否开启后端服务器的重试。  取值：true 开启重试，false 不开启重试。默认：true。  [使用说明： - 若关联是共享型LB，仅在protocol为HTTP、TERMINATED_HTTPS时才能传入该字段。 - 若关联是独享型LB，仅在protocol为HTTP、HTTPS和QUIC时才能传入该字段。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,fcs,dt)  [使用说明： - 仅在protocol为HTTP、HTTPS时才能传入该字段。](tag:hws_eu,hcso_dt)  [不支持QUIC。](tag:tm,dt,dt_test)
    *
    * @return $this
    */
    public function setEnableMemberRetry($enableMemberRetry)
    {
        $this->container['enableMemberRetry'] = $enableMemberRetry;
        return $this;
    }

    /**
    * Gets keepaliveTimeout
    *  客户端连接空闲超时时间。在超过keepalive_timeout时长一直没有请求， 负载均衡会暂时中断当前连接，直到下一次请求时重新建立新的连接。  取值： - TCP监听器[和IP监听器](tag:hws_eu)：10-4000s，默认值为300s。 - 若为HTTP/HTTPS/TERMINATED_HTTPS监听器，取值范围为（0-4000s）默认值为60s。  共享型实例的UDP监听器不支持此字段。
    *
    * @return int|null
    */
    public function getKeepaliveTimeout()
    {
        return $this->container['keepaliveTimeout'];
    }

    /**
    * Sets keepaliveTimeout
    *
    * @param int|null $keepaliveTimeout 客户端连接空闲超时时间。在超过keepalive_timeout时长一直没有请求， 负载均衡会暂时中断当前连接，直到下一次请求时重新建立新的连接。  取值： - TCP监听器[和IP监听器](tag:hws_eu)：10-4000s，默认值为300s。 - 若为HTTP/HTTPS/TERMINATED_HTTPS监听器，取值范围为（0-4000s）默认值为60s。  共享型实例的UDP监听器不支持此字段。
    *
    * @return $this
    */
    public function setKeepaliveTimeout($keepaliveTimeout)
    {
        $this->container['keepaliveTimeout'] = $keepaliveTimeout;
        return $this;
    }

    /**
    * Gets clientTimeout
    *  等待客户端请求超时时间，包括两种情况： - 读取整个客户端请求头的超时时长：如果客户端未在超时时长内发送完整个请求头，则请求将被中断 - 两个连续body体的数据包到达LB的时间间隔，超出client_timeout将会断开连接。  取值范围为1-300s，默认值为60s。  使用说明：仅协议为HTTP/HTTPS的监听器支持该字段。
    *
    * @return int|null
    */
    public function getClientTimeout()
    {
        return $this->container['clientTimeout'];
    }

    /**
    * Sets clientTimeout
    *
    * @param int|null $clientTimeout 等待客户端请求超时时间，包括两种情况： - 读取整个客户端请求头的超时时长：如果客户端未在超时时长内发送完整个请求头，则请求将被中断 - 两个连续body体的数据包到达LB的时间间隔，超出client_timeout将会断开连接。  取值范围为1-300s，默认值为60s。  使用说明：仅协议为HTTP/HTTPS的监听器支持该字段。
    *
    * @return $this
    */
    public function setClientTimeout($clientTimeout)
    {
        $this->container['clientTimeout'] = $clientTimeout;
        return $this;
    }

    /**
    * Gets memberTimeout
    *  等待后端服务器响应超时时间。请求转发后端服务器后，在等待超时member_timeout时长没有响应，负载均衡将终止等待，并返回 HTTP504错误码。  取值：1-300s，默认为60s。  使用说明：仅支持协议为HTTP/HTTPS的监听器。
    *
    * @return int|null
    */
    public function getMemberTimeout()
    {
        return $this->container['memberTimeout'];
    }

    /**
    * Sets memberTimeout
    *
    * @param int|null $memberTimeout 等待后端服务器响应超时时间。请求转发后端服务器后，在等待超时member_timeout时长没有响应，负载均衡将终止等待，并返回 HTTP504错误码。  取值：1-300s，默认为60s。  使用说明：仅支持协议为HTTP/HTTPS的监听器。
    *
    * @return $this
    */
    public function setMemberTimeout($memberTimeout)
    {
        $this->container['memberTimeout'] = $memberTimeout;
        return $this;
    }

    /**
    * Gets ipgroup
    *  ipgroup
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\CreateListenerIpGroupOption|null
    */
    public function getIpgroup()
    {
        return $this->container['ipgroup'];
    }

    /**
    * Sets ipgroup
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\CreateListenerIpGroupOption|null $ipgroup ipgroup
    *
    * @return $this
    */
    public function setIpgroup($ipgroup)
    {
        $this->container['ipgroup'] = $ipgroup;
        return $this;
    }

    /**
    * Gets transparentClientIpEnable
    *  是否透传客户端IP地址。开启后客户端IP地址将透传到后端服务器。 [仅作用于共享型LB的TCP/UDP监听器。  取值： - 共享型LB的TCP/UDP监听器可设置为true或false，不传默认为false。 - 共享型LB的HTTP/HTTPS监听器只支持设置为true，不传默认为true。 - 独享型负载均衡器所有协议的监听器只支持设置为true，不传默认为true。  使用说明： - 开启特性后，ELB和后端服务器之间直接使用真实的IP访问，需要确保已正确设置服务器的安全组以及访问控制策略。 - 开启特性后，不支持同一台服务器既作为后端服务器又作为客户端的场景。 - 开启特性后，不支持变更后端服务器规格。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,fcs,dt)  [只设支持置为true，不传默认为true。](tag:hws_eu,hcso_dt)
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
    * @param bool|null $transparentClientIpEnable 是否透传客户端IP地址。开启后客户端IP地址将透传到后端服务器。 [仅作用于共享型LB的TCP/UDP监听器。  取值： - 共享型LB的TCP/UDP监听器可设置为true或false，不传默认为false。 - 共享型LB的HTTP/HTTPS监听器只支持设置为true，不传默认为true。 - 独享型负载均衡器所有协议的监听器只支持设置为true，不传默认为true。  使用说明： - 开启特性后，ELB和后端服务器之间直接使用真实的IP访问，需要确保已正确设置服务器的安全组以及访问控制策略。 - 开启特性后，不支持同一台服务器既作为后端服务器又作为客户端的场景。 - 开启特性后，不支持变更后端服务器规格。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,fcs,dt)  [只设支持置为true，不传默认为true。](tag:hws_eu,hcso_dt)
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
    *  是否开启高级转发策略功能。开启高级转发策略后，支持更灵活的转发策略和转发规则设置。  取值：true开启，false不开启，默认false。  开启后支持如下场景： - 转发策略的action字段支持指定为REDIRECT_TO_URL, FIXED_RESPONSE，即支持URL重定向和响应固定的内容给客户端。 - 转发策略支持指定priority、redirect_url_config、fixed_response_config字段。 - 转发规则rule的type可以指定METHOD, HEADER, QUERY_STRING, SOURCE_IP这几种取值。 - 转发规则rule的type为HOST_NAME时，转发规则rule的value支持通配符*。 - 转发规则支持指定conditions字段。  [荷兰region不支持该字段，请勿使用。](tag:dt,dt_test) > 开启后不支持关闭
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
    * @param bool|null $enhanceL7policyEnable 是否开启高级转发策略功能。开启高级转发策略后，支持更灵活的转发策略和转发规则设置。  取值：true开启，false不开启，默认false。  开启后支持如下场景： - 转发策略的action字段支持指定为REDIRECT_TO_URL, FIXED_RESPONSE，即支持URL重定向和响应固定的内容给客户端。 - 转发策略支持指定priority、redirect_url_config、fixed_response_config字段。 - 转发规则rule的type可以指定METHOD, HEADER, QUERY_STRING, SOURCE_IP这几种取值。 - 转发规则rule的type为HOST_NAME时，转发规则rule的value支持通配符*。 - 转发规则支持指定conditions字段。  [荷兰region不支持该字段，请勿使用。](tag:dt,dt_test) > 开启后不支持关闭
    *
    * @return $this
    */
    public function setEnhanceL7policyEnable($enhanceL7policyEnable)
    {
        $this->container['enhanceL7policyEnable'] = $enhanceL7policyEnable;
        return $this;
    }

    /**
    * Gets quicConfig
    *  quicConfig
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\CreateListenerQuicConfigOption|null
    */
    public function getQuicConfig()
    {
        return $this->container['quicConfig'];
    }

    /**
    * Sets quicConfig
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\CreateListenerQuicConfigOption|null $quicConfig quicConfig
    *
    * @return $this
    */
    public function setQuicConfig($quicConfig)
    {
        $this->container['quicConfig'] = $quicConfig;
        return $this;
    }

    /**
    * Gets protectionStatus
    *  修改保护状态, 取值： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
    *
    * @return string|null
    */
    public function getProtectionStatus()
    {
        return $this->container['protectionStatus'];
    }

    /**
    * Sets protectionStatus
    *
    * @param string|null $protectionStatus 修改保护状态, 取值： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
    *
    * @return $this
    */
    public function setProtectionStatus($protectionStatus)
    {
        $this->container['protectionStatus'] = $protectionStatus;
        return $this;
    }

    /**
    * Gets protectionReason
    *  设置保护的原因 >仅当protection_status为consoleProtection时有效。
    *
    * @return string|null
    */
    public function getProtectionReason()
    {
        return $this->container['protectionReason'];
    }

    /**
    * Sets protectionReason
    *
    * @param string|null $protectionReason 设置保护的原因 >仅当protection_status为consoleProtection时有效。
    *
    * @return $this
    */
    public function setProtectionReason($protectionReason)
    {
        $this->container['protectionReason'] = $protectionReason;
        return $this;
    }

    /**
    * Gets gzipEnable
    *  ELB是否开启gzip压缩，缺省值：false，非必选  [仅HTTP/HTTPS类型监听器支持配置。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt,dt_test) [仅HTTP/HTTPS/QUIC类型监听器支持配置。](tag:hws,hws_hk,hws_test,hcs,hcs_sm,hcso,hk_vdf,fcs,fcs_vm,mix,ocb,ctc,cmcc,sbc,hws_ocb,hk_sbc)
    *
    * @return bool|null
    */
    public function getGzipEnable()
    {
        return $this->container['gzipEnable'];
    }

    /**
    * Sets gzipEnable
    *
    * @param bool|null $gzipEnable ELB是否开启gzip压缩，缺省值：false，非必选  [仅HTTP/HTTPS类型监听器支持配置。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt,dt_test) [仅HTTP/HTTPS/QUIC类型监听器支持配置。](tag:hws,hws_hk,hws_test,hcs,hcs_sm,hcso,hk_vdf,fcs,fcs_vm,mix,ocb,ctc,cmcc,sbc,hws_ocb,hk_sbc)
    *
    * @return $this
    */
    public function setGzipEnable($gzipEnable)
    {
        $this->container['gzipEnable'] = $gzipEnable;
        return $this;
    }

    /**
    * Gets portRanges
    *  端口监听范围（闭区间)，最多指定10个端口组，每个组范围不可有重叠部分 >仅当protocol_port为0或未传入protoco_port时可以传入该字段。仅TCP, UDP，TLS监听支持该字段
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\PortRange[]|null
    */
    public function getPortRanges()
    {
        return $this->container['portRanges'];
    }

    /**
    * Sets portRanges
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\PortRange[]|null $portRanges 端口监听范围（闭区间)，最多指定10个端口组，每个组范围不可有重叠部分 >仅当protocol_port为0或未传入protoco_port时可以传入该字段。仅TCP, UDP，TLS监听支持该字段
    *
    * @return $this
    */
    public function setPortRanges($portRanges)
    {
        $this->container['portRanges'] = $portRanges;
        return $this;
    }

    /**
    * Gets sslEarlyDataEnable
    *  监听器0-RTT能力开关，缺省值：false，非必选  仅HTTPS类型监听器支持配置，需要依赖TLSv1.3安全策略协议。开启 ssl_early_data 后，有重放攻击的风险，请谨慎开启。
    *
    * @return bool|null
    */
    public function getSslEarlyDataEnable()
    {
        return $this->container['sslEarlyDataEnable'];
    }

    /**
    * Sets sslEarlyDataEnable
    *
    * @param bool|null $sslEarlyDataEnable 监听器0-RTT能力开关，缺省值：false，非必选  仅HTTPS类型监听器支持配置，需要依赖TLSv1.3安全策略协议。开启 ssl_early_data 后，有重放攻击的风险，请谨慎开启。
    *
    * @return $this
    */
    public function setSslEarlyDataEnable($sslEarlyDataEnable)
    {
        $this->container['sslEarlyDataEnable'] = $sslEarlyDataEnable;
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

