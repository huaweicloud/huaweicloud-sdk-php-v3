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
    * adminStateUp  **参数解释**：监听器的管理状态。  **约束限制**：只支持设置为true。  **取值范围**：true 表示监听器正常使用中。  **默认取值**：true  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    * defaultPoolId  **参数解释**：监听器默认的后端服务器组ID。当请求没有匹配的转发策略时，转发到默认后端服务器组上处理。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * clientCaTlsContainerRef  **参数解释**：监听器使用的CA证书ID。  **约束限制**： - 对应证书的type必须是client类型。 - 仅TLS和HTTPS协议监听器支持该字段。 - 开启双向认证需要同时传入client_ca_tls_container_ref和default_tls_container_ref。  **取值范围**：不涉及  **默认取值**：不涉及  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt)
    * defaultTlsContainerRef  **参数解释**：监听器使用的服务器证书ID。  **约束限制**： - 对应证书的type必须是server类型。 - 当监听器协议为HTTPS、TLS或QUIC时，该字段必传。 - 开启双向认证需要同时传入client_ca_tls_container_ref和default_tls_container_ref。开启单向认证时，只需要传入default_tls_container_ref。  **取值范围**：不涉及  **默认取值**：不涉及
    * description  **参数解释**：监听器的描述信息。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * http2Enable  **参数解释**：客户端与LB之间的HTTPS请求的HTTP2功能的开启状态。 开启后，可提升客户端与LB间的访问性能，但LB与后端服务器间仍采用HTTP1.X协议。  **约束限制**： - 仅HTTPS协议监听器有效。 - QUIC监听器不能设置该字段，固定返回为true。 - 其他协议的监听器可设置该字段但无效，无论取值如何都不影响监听器正常运行。  **取值范围**： - true：开启 - false：不开启  **默认取值**：false  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt)
    * insertHeaders  insertHeaders
    * loadbalancerId  **参数解释**：监听器所属的负载均衡器的ID。  **约束限制**：一个监听器只支持关联到一个负载均衡器。  **取值范围**：不涉及  **默认取值**：不涉及
    * name  **参数解释**：监听器的名称。  **约束限制**：若名称为空，则在控制台的监听器列表无法选择并查看监听器详情。  **取值范围**：长度为0-255个字符。  **默认取值**：不涉及
    * projectId  **参数解释**：项目ID。获取方式请参见[获取项目ID](elb_fl_0008.xml)。  **约束限制**：不涉及  **取值范围**：长度为32个字符，由小写字母和数字组成。  **默认取值**：不涉及  > 该字段实际无效，最终使用url中的project_id。
    * protocol  **参数解释**：监听器的监听协议。  [**约束限制**： - 共享型LB上的HTTPS监听器只支持设置为TERMINATED_HTTPS。传入HTTPS将会自动转为TERMINATED_HTTPS。 - 独享型LB上的HTTPS监听器只支持设置为HTTPS，传入TERMINATED_HTTPS将会自动转为HTTPS。  **取值范围**：TCP、UDP、HTTP、HTTPS、TERMINATED_HTTPS、QUIC、TLS。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt) [**约束限制**：不涉及  **取值范围**：TCP、UDP、HTTP、HTTPS。](tag:hcso_dt) [**约束限制**：不涉及  **取值范围**：TCP、UDP、IP、HTTP、HTTPS。IP为网关型LB上的监听器独有的协议。](tag:hws_eu)  **默认取值**：不涉及  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt)
    * protocolPort  **参数解释**：监听器的监听端口。  **约束限制**： - QUIC和UDP监听器端口不能重复。 - TCP、HTTP、HTTPS监听器之间端口不能重复。 - 传0时表示开启监听端口范围的能力，此时全端口监听port_ranges为必填字段。 [- 共享型LB上的HTTP和TERMINATED_HTTPS监听器不支持设置21端口。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt)  **取值范围**：0-65535  **默认取值**：不涉及  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt)
    * sniContainerRefs  **参数解释**：监听器使用的SNI证书（带域名的服务器证书）ID列表。  **约束限制**： - QUIC监听器仅支持RSA证书。 - 列表对应的所有SNI证书的域名不允许存在重复。 - 列表对应的所有SNI证书的域名总数不超过200。  **取值范围**：0-50个。  **默认取值**：不涉及  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt)
    * sniMatchAlgo  **参数解释**：监听器使用的SNI证书泛域名匹配方式。  **约束限制**：不涉及  **取值范围**： - longest_suffix 表示最长尾缀匹配。 - wildcard 表示标准域名分级匹配。  **默认取值**：wildcard。
    * tags  **参数解释**：资源标签。  **约束限制**：不涉及
    * tlsCiphersPolicy  **参数解释**：监听器使用的安全策略。  [**约束限制**： - 仅对HTTPS协议类型的监听器且关联LB为独享型时有效。 - QUIC监听器不支持该字段。 - 若同时设置了security_policy_id和tls_ciphers_policy，则仅security_policy_id生效。 - 加密套件的优先顺序为ecc套件、rsa套件、tls1.3协议的套件（既支持ecc又支持rsa） ](tag:hws,hws_hk,hws_eu,g42,hk_g42,ocb,tlf,ctc,hcso,ct,sbc,tm,cmcc,dt)  [**约束限制**： - 仅对HTTPS协议类型的监听器有效](tag:hcso_dt)  [**取值范围**：tls-1-0-inherit、tls-1-0、tls-1-1、tls-1-2、tls-1-2-strict、tls-1-2-fs、tls-1-0-with-1-3、tls-1-2-fs-with-1-3、hybrid-policy-1-0、tls-1-2-strict-no-cbc，默认：tls-1-2。](tag:hws,hws_hk,ocb,tlf,ctc,hcso,ct,sbc,tm,cmcc,dt)  [**取值范围**：tls-1-0、tls-1-1、tls-1-2、tls-1-2-strict，默认：tls-1-2。](tag:hws_eu,g42,hk_g42,hcso_dt)  **默认取值**：不涉及  [不支持tls1.3协议的套件。](tag:tm,hws_eu,g42,hk_g42) [不支持QUIC。](tag:tm,dt)
    * securityPolicyId  **参数解释**：自定义安全策略的ID。  [**约束限制**： - 仅对HTTPS协议类型的监听器且关联LB为独享型时有效。 - QUIC监听器不支持该字段。 - 若同时设置了security_policy_id和tls_ciphers_policy，则仅security_policy_id生效。 - 加密套件的优先顺序为ecc套件、rsa套件、tls1.3协议的套件（既支持ecc又支持rsa）](tag:hws,hws_hk,hws_eu,g42,hk_g42,ocb,tlf,ctc,hcso,ct,sbc,tm,cmcc,dt)  [**约束限制**： - 仅对HTTPS协议类型的监听器有效](tag:hcso_dt)  **取值范围**：不涉及  **默认取值**：不涉及  [不支持tls1.3协议的套件。](tag:tm,hws_eu,g42,hk_g42)  [不支持QUIC。](tag:tm,dt)
    * enableMemberRetry  **参数解释**：是否开启后端服务器的重试。  [**约束限制**： - 若关联是共享型LB，仅在protocol为HTTP、TERMINATED_HTTPS时才能传入该字段。 - 若关联是独享型LB，仅在protocol为HTTP、HTTPS和QUIC时才能传入该字段。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt)  [**约束限制**： - 仅在protocol为HTTP、HTTPS时才能传入该字段。](tag:hws_eu,hcso_dt)  **取值范围**：true 开启重试，false 不开启重试。  **默认取值**：true  [不支持QUIC。](tag:tm,dt)
    * keepaliveTimeout  **参数解释**：客户端连接空闲超时时间。在超过keepalive_timeout时长一直没有请求，负载均衡会暂时中断当前连接，直到下一次请求时重新建立新的连接。  **约束限制**：共享型实例的UDP监听器不支持此字段。  **取值范围**： - TCP监听器[和IP监听器](tag:hws_eu)：10-4000s，默认值为300s。 - 若为HTTP/HTTPS/TERMINATED_HTTPS监听器，取值范围为（0-4000s）默认值为60s。  **默认取值**：不涉及
    * clientTimeout  **参数解释**：等待客户端请求超时时间，包括两种情况： - 读取整个客户端请求头的超时时长：如果客户端未在超时时长内发送完整个请求头，则请求将被中断 - 两个连续body体的数据包到达LB的时间间隔，超出client_timeout将会断开连接。  **约束限制**：仅协议为HTTP/HTTPS的监听器支持该字段。  **取值范围**： 1-300s  **默认取值**：60s
    * memberTimeout  **参数解释**：等待后端服务器响应超时时间。请求转发后端服务器后，在等待超时member_timeout时长没有响应，负载均衡将终止等待，并返回HTTP504错误码。  **约束限制**：仅支持协议为HTTP/HTTPS的监听器。  **取值范围**：1-300s  **默认取值**：60s
    * ipgroup  ipgroup
    * transparentClientIpEnable  **参数解释**：是否透传客户端IP地址。开启后客户端IP地址将透传到后端服务器。  [**约束限制**： - 仅作用于共享型LB的TCP/UDP监听器。 - 开启特性后，ELB和后端服务器之间直接使用真实的IP访问，需要确保已正确设置服务器的安全组以及访问控制策略。 - 开启特性后，不支持同一台服务器既作为后端服务器又作为客户端的场景。 - 开启特性后，不支持变更后端服务器规格。  **取值范围**： - 共享型LB的TCP/UDP监听器可设置为true或false，不传默认为false。 - 共享型LB的HTTP/HTTPS监听器只支持设置为true，不传默认为true。 - 独享型负载均衡器所有协议的监听器只支持设置为true，不传默认为true。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt)  [**约束限制**：只设支持置为true，不传默认为true。  **取值范围**：不涉及](tag:hws_eu,hcso_dt)  **默认取值**：不涉及
    * proxyProtocolEnable  **参数解释**：是否开启proxy_protocol。  **约束限制**：仅TLS监听器可指定，其他协议的监听器该字段不生效，proxy_protocol不开启。  **取值范围**：不涉及  **默认取值**：不涉及
    * enhanceL7policyEnable  **参数解释**：是否开启高级转发策略功能。开启高级转发策略后，支持更灵活的转发策略和转发规则设置。 开启后支持如下场景： - 转发策略的action字段支持指定为REDIRECT_TO_URL,FIXED_RESPONSE，即支持URL重定向和响应固定的内容给客户端。 - 转发策略支持指定priority、redirect_url_config、fixed_response_config字段。 - 转发规则rule的type可以指定METHOD, HEADER, QUERY_STRING, SOURCE_IP这几种取值。 - 转发规则rule的type为HOST_NAME时，转发规则rule的value支持通配符*。 - 转发规则支持指定conditions字段。  **约束限制**： - 开启后不支持关闭。 - 开启高级转发策略后，监听器关联的转发策略的匹配优先级由转发策略的priority字段来决定，不再自动排序。具体说明详见转发策略的priority字段的说明。  **取值范围**：true开启，false不开启。  **默认取值**：false。[西南-贵阳一和华南-广州局点，该配置默认true。](tag:hws)  [荷兰region不支持该字段，请勿使用。](tag:dt)
    * quicConfig  quicConfig
    * protectionStatus  **参数解释**：修改保护状态。  **约束限制**：不涉及  **取值范围**： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护  **默认取值**：不涉及
    * protectionReason  **参数解释**：设置保护的原因。作为protection_status的转态设置的原因。  **约束限制**：仅当protection_status为consoleProtection时有效。  **取值范围**：除'<'和'>'外通用Unicode字符集字符，最大255个字符。  **默认取值**：不涉及
    * gzipEnable  **参数解释**：ELB是否开启gzip压缩。  [**约束限制**：仅HTTP/HTTPS类型监听器支持配置。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt) [**约束限制**：仅HTTP/HTTPS/QUIC类型监听器支持配置。](tag:hws,hws_hk,hws_test,hcs,hcs_sm,hcso,hk_vdf,srg,fcs,fcs_vm,mix,ocb,ctc,cmcc,ct,sbc,hws_ocb,hk_sbc)  **取值范围**：true 开启，false 不开启。  **默认取值**：false
    * portRanges  **参数解释**：全端口监听，指定器端口监听范围（闭区间)，最多指定10个端口组，每个组范围不可有重叠部分。  **约束限制**： - 仅当protocol_port为0或未传入protocol_port时可以传入该字段。 - 仅TCP, UDP，TLS监听支持该字段。
    * sslEarlyDataEnable  **参数解释**：监听器0-RTT能力开关。  **约束限制**：仅HTTPS类型监听器支持配置，需要依赖TLSv1.3安全策略协议。开启 ssl_early_data 后，有重放攻击的风险，请谨慎开启。  **取值范围**：true，false  **默认取值**：false
    * cps  **参数解释**：监听器新建限速。  **约束限制**：当该限速值大于LB的限速值时，以LB的限速值生效  **取值范围**：0-1000000  **默认取值**：0，表示不限速。
    * connection  **参数解释**：监听器并发限速  **约束限制**：当该限速值大于LB的限速值时，以LB的限速值生效  **取值范围**：0-1000000  **默认取值**：0，表示不限速。
    * nat64Enable  **参数解释**：监听器地址转换能力开关，可以实现客户端通过访问LB的IPv4或者IPv6地址，来访问IPv4后端和IPv6后端。  **约束限制**：仅对于TCP、UDP协议类型的监听器生效，与transparent_client_ip_enable，获取客户端ip功能开关互斥，开启地址转换同时需要保证获取客户端ip功能关闭。  **取值范围**： - true：开启地址转换功能 - false：关闭地址转换功能  **默认取值**：false
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
            'sslEarlyDataEnable' => 'bool',
            'cps' => 'int',
            'connection' => 'int',
            'nat64Enable' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * adminStateUp  **参数解释**：监听器的管理状态。  **约束限制**：只支持设置为true。  **取值范围**：true 表示监听器正常使用中。  **默认取值**：true  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    * defaultPoolId  **参数解释**：监听器默认的后端服务器组ID。当请求没有匹配的转发策略时，转发到默认后端服务器组上处理。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * clientCaTlsContainerRef  **参数解释**：监听器使用的CA证书ID。  **约束限制**： - 对应证书的type必须是client类型。 - 仅TLS和HTTPS协议监听器支持该字段。 - 开启双向认证需要同时传入client_ca_tls_container_ref和default_tls_container_ref。  **取值范围**：不涉及  **默认取值**：不涉及  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt)
    * defaultTlsContainerRef  **参数解释**：监听器使用的服务器证书ID。  **约束限制**： - 对应证书的type必须是server类型。 - 当监听器协议为HTTPS、TLS或QUIC时，该字段必传。 - 开启双向认证需要同时传入client_ca_tls_container_ref和default_tls_container_ref。开启单向认证时，只需要传入default_tls_container_ref。  **取值范围**：不涉及  **默认取值**：不涉及
    * description  **参数解释**：监听器的描述信息。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * http2Enable  **参数解释**：客户端与LB之间的HTTPS请求的HTTP2功能的开启状态。 开启后，可提升客户端与LB间的访问性能，但LB与后端服务器间仍采用HTTP1.X协议。  **约束限制**： - 仅HTTPS协议监听器有效。 - QUIC监听器不能设置该字段，固定返回为true。 - 其他协议的监听器可设置该字段但无效，无论取值如何都不影响监听器正常运行。  **取值范围**： - true：开启 - false：不开启  **默认取值**：false  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt)
    * insertHeaders  insertHeaders
    * loadbalancerId  **参数解释**：监听器所属的负载均衡器的ID。  **约束限制**：一个监听器只支持关联到一个负载均衡器。  **取值范围**：不涉及  **默认取值**：不涉及
    * name  **参数解释**：监听器的名称。  **约束限制**：若名称为空，则在控制台的监听器列表无法选择并查看监听器详情。  **取值范围**：长度为0-255个字符。  **默认取值**：不涉及
    * projectId  **参数解释**：项目ID。获取方式请参见[获取项目ID](elb_fl_0008.xml)。  **约束限制**：不涉及  **取值范围**：长度为32个字符，由小写字母和数字组成。  **默认取值**：不涉及  > 该字段实际无效，最终使用url中的project_id。
    * protocol  **参数解释**：监听器的监听协议。  [**约束限制**： - 共享型LB上的HTTPS监听器只支持设置为TERMINATED_HTTPS。传入HTTPS将会自动转为TERMINATED_HTTPS。 - 独享型LB上的HTTPS监听器只支持设置为HTTPS，传入TERMINATED_HTTPS将会自动转为HTTPS。  **取值范围**：TCP、UDP、HTTP、HTTPS、TERMINATED_HTTPS、QUIC、TLS。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt) [**约束限制**：不涉及  **取值范围**：TCP、UDP、HTTP、HTTPS。](tag:hcso_dt) [**约束限制**：不涉及  **取值范围**：TCP、UDP、IP、HTTP、HTTPS。IP为网关型LB上的监听器独有的协议。](tag:hws_eu)  **默认取值**：不涉及  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt)
    * protocolPort  **参数解释**：监听器的监听端口。  **约束限制**： - QUIC和UDP监听器端口不能重复。 - TCP、HTTP、HTTPS监听器之间端口不能重复。 - 传0时表示开启监听端口范围的能力，此时全端口监听port_ranges为必填字段。 [- 共享型LB上的HTTP和TERMINATED_HTTPS监听器不支持设置21端口。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt)  **取值范围**：0-65535  **默认取值**：不涉及  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt)
    * sniContainerRefs  **参数解释**：监听器使用的SNI证书（带域名的服务器证书）ID列表。  **约束限制**： - QUIC监听器仅支持RSA证书。 - 列表对应的所有SNI证书的域名不允许存在重复。 - 列表对应的所有SNI证书的域名总数不超过200。  **取值范围**：0-50个。  **默认取值**：不涉及  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt)
    * sniMatchAlgo  **参数解释**：监听器使用的SNI证书泛域名匹配方式。  **约束限制**：不涉及  **取值范围**： - longest_suffix 表示最长尾缀匹配。 - wildcard 表示标准域名分级匹配。  **默认取值**：wildcard。
    * tags  **参数解释**：资源标签。  **约束限制**：不涉及
    * tlsCiphersPolicy  **参数解释**：监听器使用的安全策略。  [**约束限制**： - 仅对HTTPS协议类型的监听器且关联LB为独享型时有效。 - QUIC监听器不支持该字段。 - 若同时设置了security_policy_id和tls_ciphers_policy，则仅security_policy_id生效。 - 加密套件的优先顺序为ecc套件、rsa套件、tls1.3协议的套件（既支持ecc又支持rsa） ](tag:hws,hws_hk,hws_eu,g42,hk_g42,ocb,tlf,ctc,hcso,ct,sbc,tm,cmcc,dt)  [**约束限制**： - 仅对HTTPS协议类型的监听器有效](tag:hcso_dt)  [**取值范围**：tls-1-0-inherit、tls-1-0、tls-1-1、tls-1-2、tls-1-2-strict、tls-1-2-fs、tls-1-0-with-1-3、tls-1-2-fs-with-1-3、hybrid-policy-1-0、tls-1-2-strict-no-cbc，默认：tls-1-2。](tag:hws,hws_hk,ocb,tlf,ctc,hcso,ct,sbc,tm,cmcc,dt)  [**取值范围**：tls-1-0、tls-1-1、tls-1-2、tls-1-2-strict，默认：tls-1-2。](tag:hws_eu,g42,hk_g42,hcso_dt)  **默认取值**：不涉及  [不支持tls1.3协议的套件。](tag:tm,hws_eu,g42,hk_g42) [不支持QUIC。](tag:tm,dt)
    * securityPolicyId  **参数解释**：自定义安全策略的ID。  [**约束限制**： - 仅对HTTPS协议类型的监听器且关联LB为独享型时有效。 - QUIC监听器不支持该字段。 - 若同时设置了security_policy_id和tls_ciphers_policy，则仅security_policy_id生效。 - 加密套件的优先顺序为ecc套件、rsa套件、tls1.3协议的套件（既支持ecc又支持rsa）](tag:hws,hws_hk,hws_eu,g42,hk_g42,ocb,tlf,ctc,hcso,ct,sbc,tm,cmcc,dt)  [**约束限制**： - 仅对HTTPS协议类型的监听器有效](tag:hcso_dt)  **取值范围**：不涉及  **默认取值**：不涉及  [不支持tls1.3协议的套件。](tag:tm,hws_eu,g42,hk_g42)  [不支持QUIC。](tag:tm,dt)
    * enableMemberRetry  **参数解释**：是否开启后端服务器的重试。  [**约束限制**： - 若关联是共享型LB，仅在protocol为HTTP、TERMINATED_HTTPS时才能传入该字段。 - 若关联是独享型LB，仅在protocol为HTTP、HTTPS和QUIC时才能传入该字段。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt)  [**约束限制**： - 仅在protocol为HTTP、HTTPS时才能传入该字段。](tag:hws_eu,hcso_dt)  **取值范围**：true 开启重试，false 不开启重试。  **默认取值**：true  [不支持QUIC。](tag:tm,dt)
    * keepaliveTimeout  **参数解释**：客户端连接空闲超时时间。在超过keepalive_timeout时长一直没有请求，负载均衡会暂时中断当前连接，直到下一次请求时重新建立新的连接。  **约束限制**：共享型实例的UDP监听器不支持此字段。  **取值范围**： - TCP监听器[和IP监听器](tag:hws_eu)：10-4000s，默认值为300s。 - 若为HTTP/HTTPS/TERMINATED_HTTPS监听器，取值范围为（0-4000s）默认值为60s。  **默认取值**：不涉及
    * clientTimeout  **参数解释**：等待客户端请求超时时间，包括两种情况： - 读取整个客户端请求头的超时时长：如果客户端未在超时时长内发送完整个请求头，则请求将被中断 - 两个连续body体的数据包到达LB的时间间隔，超出client_timeout将会断开连接。  **约束限制**：仅协议为HTTP/HTTPS的监听器支持该字段。  **取值范围**： 1-300s  **默认取值**：60s
    * memberTimeout  **参数解释**：等待后端服务器响应超时时间。请求转发后端服务器后，在等待超时member_timeout时长没有响应，负载均衡将终止等待，并返回HTTP504错误码。  **约束限制**：仅支持协议为HTTP/HTTPS的监听器。  **取值范围**：1-300s  **默认取值**：60s
    * ipgroup  ipgroup
    * transparentClientIpEnable  **参数解释**：是否透传客户端IP地址。开启后客户端IP地址将透传到后端服务器。  [**约束限制**： - 仅作用于共享型LB的TCP/UDP监听器。 - 开启特性后，ELB和后端服务器之间直接使用真实的IP访问，需要确保已正确设置服务器的安全组以及访问控制策略。 - 开启特性后，不支持同一台服务器既作为后端服务器又作为客户端的场景。 - 开启特性后，不支持变更后端服务器规格。  **取值范围**： - 共享型LB的TCP/UDP监听器可设置为true或false，不传默认为false。 - 共享型LB的HTTP/HTTPS监听器只支持设置为true，不传默认为true。 - 独享型负载均衡器所有协议的监听器只支持设置为true，不传默认为true。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt)  [**约束限制**：只设支持置为true，不传默认为true。  **取值范围**：不涉及](tag:hws_eu,hcso_dt)  **默认取值**：不涉及
    * proxyProtocolEnable  **参数解释**：是否开启proxy_protocol。  **约束限制**：仅TLS监听器可指定，其他协议的监听器该字段不生效，proxy_protocol不开启。  **取值范围**：不涉及  **默认取值**：不涉及
    * enhanceL7policyEnable  **参数解释**：是否开启高级转发策略功能。开启高级转发策略后，支持更灵活的转发策略和转发规则设置。 开启后支持如下场景： - 转发策略的action字段支持指定为REDIRECT_TO_URL,FIXED_RESPONSE，即支持URL重定向和响应固定的内容给客户端。 - 转发策略支持指定priority、redirect_url_config、fixed_response_config字段。 - 转发规则rule的type可以指定METHOD, HEADER, QUERY_STRING, SOURCE_IP这几种取值。 - 转发规则rule的type为HOST_NAME时，转发规则rule的value支持通配符*。 - 转发规则支持指定conditions字段。  **约束限制**： - 开启后不支持关闭。 - 开启高级转发策略后，监听器关联的转发策略的匹配优先级由转发策略的priority字段来决定，不再自动排序。具体说明详见转发策略的priority字段的说明。  **取值范围**：true开启，false不开启。  **默认取值**：false。[西南-贵阳一和华南-广州局点，该配置默认true。](tag:hws)  [荷兰region不支持该字段，请勿使用。](tag:dt)
    * quicConfig  quicConfig
    * protectionStatus  **参数解释**：修改保护状态。  **约束限制**：不涉及  **取值范围**： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护  **默认取值**：不涉及
    * protectionReason  **参数解释**：设置保护的原因。作为protection_status的转态设置的原因。  **约束限制**：仅当protection_status为consoleProtection时有效。  **取值范围**：除'<'和'>'外通用Unicode字符集字符，最大255个字符。  **默认取值**：不涉及
    * gzipEnable  **参数解释**：ELB是否开启gzip压缩。  [**约束限制**：仅HTTP/HTTPS类型监听器支持配置。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt) [**约束限制**：仅HTTP/HTTPS/QUIC类型监听器支持配置。](tag:hws,hws_hk,hws_test,hcs,hcs_sm,hcso,hk_vdf,srg,fcs,fcs_vm,mix,ocb,ctc,cmcc,ct,sbc,hws_ocb,hk_sbc)  **取值范围**：true 开启，false 不开启。  **默认取值**：false
    * portRanges  **参数解释**：全端口监听，指定器端口监听范围（闭区间)，最多指定10个端口组，每个组范围不可有重叠部分。  **约束限制**： - 仅当protocol_port为0或未传入protocol_port时可以传入该字段。 - 仅TCP, UDP，TLS监听支持该字段。
    * sslEarlyDataEnable  **参数解释**：监听器0-RTT能力开关。  **约束限制**：仅HTTPS类型监听器支持配置，需要依赖TLSv1.3安全策略协议。开启 ssl_early_data 后，有重放攻击的风险，请谨慎开启。  **取值范围**：true，false  **默认取值**：false
    * cps  **参数解释**：监听器新建限速。  **约束限制**：当该限速值大于LB的限速值时，以LB的限速值生效  **取值范围**：0-1000000  **默认取值**：0，表示不限速。
    * connection  **参数解释**：监听器并发限速  **约束限制**：当该限速值大于LB的限速值时，以LB的限速值生效  **取值范围**：0-1000000  **默认取值**：0，表示不限速。
    * nat64Enable  **参数解释**：监听器地址转换能力开关，可以实现客户端通过访问LB的IPv4或者IPv6地址，来访问IPv4后端和IPv6后端。  **约束限制**：仅对于TCP、UDP协议类型的监听器生效，与transparent_client_ip_enable，获取客户端ip功能开关互斥，开启地址转换同时需要保证获取客户端ip功能关闭。  **取值范围**： - true：开启地址转换功能 - false：关闭地址转换功能  **默认取值**：false
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
        'sslEarlyDataEnable' => null,
        'cps' => 'int32',
        'connection' => 'int32',
        'nat64Enable' => null
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
    * adminStateUp  **参数解释**：监听器的管理状态。  **约束限制**：只支持设置为true。  **取值范围**：true 表示监听器正常使用中。  **默认取值**：true  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    * defaultPoolId  **参数解释**：监听器默认的后端服务器组ID。当请求没有匹配的转发策略时，转发到默认后端服务器组上处理。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * clientCaTlsContainerRef  **参数解释**：监听器使用的CA证书ID。  **约束限制**： - 对应证书的type必须是client类型。 - 仅TLS和HTTPS协议监听器支持该字段。 - 开启双向认证需要同时传入client_ca_tls_container_ref和default_tls_container_ref。  **取值范围**：不涉及  **默认取值**：不涉及  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt)
    * defaultTlsContainerRef  **参数解释**：监听器使用的服务器证书ID。  **约束限制**： - 对应证书的type必须是server类型。 - 当监听器协议为HTTPS、TLS或QUIC时，该字段必传。 - 开启双向认证需要同时传入client_ca_tls_container_ref和default_tls_container_ref。开启单向认证时，只需要传入default_tls_container_ref。  **取值范围**：不涉及  **默认取值**：不涉及
    * description  **参数解释**：监听器的描述信息。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * http2Enable  **参数解释**：客户端与LB之间的HTTPS请求的HTTP2功能的开启状态。 开启后，可提升客户端与LB间的访问性能，但LB与后端服务器间仍采用HTTP1.X协议。  **约束限制**： - 仅HTTPS协议监听器有效。 - QUIC监听器不能设置该字段，固定返回为true。 - 其他协议的监听器可设置该字段但无效，无论取值如何都不影响监听器正常运行。  **取值范围**： - true：开启 - false：不开启  **默认取值**：false  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt)
    * insertHeaders  insertHeaders
    * loadbalancerId  **参数解释**：监听器所属的负载均衡器的ID。  **约束限制**：一个监听器只支持关联到一个负载均衡器。  **取值范围**：不涉及  **默认取值**：不涉及
    * name  **参数解释**：监听器的名称。  **约束限制**：若名称为空，则在控制台的监听器列表无法选择并查看监听器详情。  **取值范围**：长度为0-255个字符。  **默认取值**：不涉及
    * projectId  **参数解释**：项目ID。获取方式请参见[获取项目ID](elb_fl_0008.xml)。  **约束限制**：不涉及  **取值范围**：长度为32个字符，由小写字母和数字组成。  **默认取值**：不涉及  > 该字段实际无效，最终使用url中的project_id。
    * protocol  **参数解释**：监听器的监听协议。  [**约束限制**： - 共享型LB上的HTTPS监听器只支持设置为TERMINATED_HTTPS。传入HTTPS将会自动转为TERMINATED_HTTPS。 - 独享型LB上的HTTPS监听器只支持设置为HTTPS，传入TERMINATED_HTTPS将会自动转为HTTPS。  **取值范围**：TCP、UDP、HTTP、HTTPS、TERMINATED_HTTPS、QUIC、TLS。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt) [**约束限制**：不涉及  **取值范围**：TCP、UDP、HTTP、HTTPS。](tag:hcso_dt) [**约束限制**：不涉及  **取值范围**：TCP、UDP、IP、HTTP、HTTPS。IP为网关型LB上的监听器独有的协议。](tag:hws_eu)  **默认取值**：不涉及  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt)
    * protocolPort  **参数解释**：监听器的监听端口。  **约束限制**： - QUIC和UDP监听器端口不能重复。 - TCP、HTTP、HTTPS监听器之间端口不能重复。 - 传0时表示开启监听端口范围的能力，此时全端口监听port_ranges为必填字段。 [- 共享型LB上的HTTP和TERMINATED_HTTPS监听器不支持设置21端口。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt)  **取值范围**：0-65535  **默认取值**：不涉及  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt)
    * sniContainerRefs  **参数解释**：监听器使用的SNI证书（带域名的服务器证书）ID列表。  **约束限制**： - QUIC监听器仅支持RSA证书。 - 列表对应的所有SNI证书的域名不允许存在重复。 - 列表对应的所有SNI证书的域名总数不超过200。  **取值范围**：0-50个。  **默认取值**：不涉及  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt)
    * sniMatchAlgo  **参数解释**：监听器使用的SNI证书泛域名匹配方式。  **约束限制**：不涉及  **取值范围**： - longest_suffix 表示最长尾缀匹配。 - wildcard 表示标准域名分级匹配。  **默认取值**：wildcard。
    * tags  **参数解释**：资源标签。  **约束限制**：不涉及
    * tlsCiphersPolicy  **参数解释**：监听器使用的安全策略。  [**约束限制**： - 仅对HTTPS协议类型的监听器且关联LB为独享型时有效。 - QUIC监听器不支持该字段。 - 若同时设置了security_policy_id和tls_ciphers_policy，则仅security_policy_id生效。 - 加密套件的优先顺序为ecc套件、rsa套件、tls1.3协议的套件（既支持ecc又支持rsa） ](tag:hws,hws_hk,hws_eu,g42,hk_g42,ocb,tlf,ctc,hcso,ct,sbc,tm,cmcc,dt)  [**约束限制**： - 仅对HTTPS协议类型的监听器有效](tag:hcso_dt)  [**取值范围**：tls-1-0-inherit、tls-1-0、tls-1-1、tls-1-2、tls-1-2-strict、tls-1-2-fs、tls-1-0-with-1-3、tls-1-2-fs-with-1-3、hybrid-policy-1-0、tls-1-2-strict-no-cbc，默认：tls-1-2。](tag:hws,hws_hk,ocb,tlf,ctc,hcso,ct,sbc,tm,cmcc,dt)  [**取值范围**：tls-1-0、tls-1-1、tls-1-2、tls-1-2-strict，默认：tls-1-2。](tag:hws_eu,g42,hk_g42,hcso_dt)  **默认取值**：不涉及  [不支持tls1.3协议的套件。](tag:tm,hws_eu,g42,hk_g42) [不支持QUIC。](tag:tm,dt)
    * securityPolicyId  **参数解释**：自定义安全策略的ID。  [**约束限制**： - 仅对HTTPS协议类型的监听器且关联LB为独享型时有效。 - QUIC监听器不支持该字段。 - 若同时设置了security_policy_id和tls_ciphers_policy，则仅security_policy_id生效。 - 加密套件的优先顺序为ecc套件、rsa套件、tls1.3协议的套件（既支持ecc又支持rsa）](tag:hws,hws_hk,hws_eu,g42,hk_g42,ocb,tlf,ctc,hcso,ct,sbc,tm,cmcc,dt)  [**约束限制**： - 仅对HTTPS协议类型的监听器有效](tag:hcso_dt)  **取值范围**：不涉及  **默认取值**：不涉及  [不支持tls1.3协议的套件。](tag:tm,hws_eu,g42,hk_g42)  [不支持QUIC。](tag:tm,dt)
    * enableMemberRetry  **参数解释**：是否开启后端服务器的重试。  [**约束限制**： - 若关联是共享型LB，仅在protocol为HTTP、TERMINATED_HTTPS时才能传入该字段。 - 若关联是独享型LB，仅在protocol为HTTP、HTTPS和QUIC时才能传入该字段。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt)  [**约束限制**： - 仅在protocol为HTTP、HTTPS时才能传入该字段。](tag:hws_eu,hcso_dt)  **取值范围**：true 开启重试，false 不开启重试。  **默认取值**：true  [不支持QUIC。](tag:tm,dt)
    * keepaliveTimeout  **参数解释**：客户端连接空闲超时时间。在超过keepalive_timeout时长一直没有请求，负载均衡会暂时中断当前连接，直到下一次请求时重新建立新的连接。  **约束限制**：共享型实例的UDP监听器不支持此字段。  **取值范围**： - TCP监听器[和IP监听器](tag:hws_eu)：10-4000s，默认值为300s。 - 若为HTTP/HTTPS/TERMINATED_HTTPS监听器，取值范围为（0-4000s）默认值为60s。  **默认取值**：不涉及
    * clientTimeout  **参数解释**：等待客户端请求超时时间，包括两种情况： - 读取整个客户端请求头的超时时长：如果客户端未在超时时长内发送完整个请求头，则请求将被中断 - 两个连续body体的数据包到达LB的时间间隔，超出client_timeout将会断开连接。  **约束限制**：仅协议为HTTP/HTTPS的监听器支持该字段。  **取值范围**： 1-300s  **默认取值**：60s
    * memberTimeout  **参数解释**：等待后端服务器响应超时时间。请求转发后端服务器后，在等待超时member_timeout时长没有响应，负载均衡将终止等待，并返回HTTP504错误码。  **约束限制**：仅支持协议为HTTP/HTTPS的监听器。  **取值范围**：1-300s  **默认取值**：60s
    * ipgroup  ipgroup
    * transparentClientIpEnable  **参数解释**：是否透传客户端IP地址。开启后客户端IP地址将透传到后端服务器。  [**约束限制**： - 仅作用于共享型LB的TCP/UDP监听器。 - 开启特性后，ELB和后端服务器之间直接使用真实的IP访问，需要确保已正确设置服务器的安全组以及访问控制策略。 - 开启特性后，不支持同一台服务器既作为后端服务器又作为客户端的场景。 - 开启特性后，不支持变更后端服务器规格。  **取值范围**： - 共享型LB的TCP/UDP监听器可设置为true或false，不传默认为false。 - 共享型LB的HTTP/HTTPS监听器只支持设置为true，不传默认为true。 - 独享型负载均衡器所有协议的监听器只支持设置为true，不传默认为true。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt)  [**约束限制**：只设支持置为true，不传默认为true。  **取值范围**：不涉及](tag:hws_eu,hcso_dt)  **默认取值**：不涉及
    * proxyProtocolEnable  **参数解释**：是否开启proxy_protocol。  **约束限制**：仅TLS监听器可指定，其他协议的监听器该字段不生效，proxy_protocol不开启。  **取值范围**：不涉及  **默认取值**：不涉及
    * enhanceL7policyEnable  **参数解释**：是否开启高级转发策略功能。开启高级转发策略后，支持更灵活的转发策略和转发规则设置。 开启后支持如下场景： - 转发策略的action字段支持指定为REDIRECT_TO_URL,FIXED_RESPONSE，即支持URL重定向和响应固定的内容给客户端。 - 转发策略支持指定priority、redirect_url_config、fixed_response_config字段。 - 转发规则rule的type可以指定METHOD, HEADER, QUERY_STRING, SOURCE_IP这几种取值。 - 转发规则rule的type为HOST_NAME时，转发规则rule的value支持通配符*。 - 转发规则支持指定conditions字段。  **约束限制**： - 开启后不支持关闭。 - 开启高级转发策略后，监听器关联的转发策略的匹配优先级由转发策略的priority字段来决定，不再自动排序。具体说明详见转发策略的priority字段的说明。  **取值范围**：true开启，false不开启。  **默认取值**：false。[西南-贵阳一和华南-广州局点，该配置默认true。](tag:hws)  [荷兰region不支持该字段，请勿使用。](tag:dt)
    * quicConfig  quicConfig
    * protectionStatus  **参数解释**：修改保护状态。  **约束限制**：不涉及  **取值范围**： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护  **默认取值**：不涉及
    * protectionReason  **参数解释**：设置保护的原因。作为protection_status的转态设置的原因。  **约束限制**：仅当protection_status为consoleProtection时有效。  **取值范围**：除'<'和'>'外通用Unicode字符集字符，最大255个字符。  **默认取值**：不涉及
    * gzipEnable  **参数解释**：ELB是否开启gzip压缩。  [**约束限制**：仅HTTP/HTTPS类型监听器支持配置。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt) [**约束限制**：仅HTTP/HTTPS/QUIC类型监听器支持配置。](tag:hws,hws_hk,hws_test,hcs,hcs_sm,hcso,hk_vdf,srg,fcs,fcs_vm,mix,ocb,ctc,cmcc,ct,sbc,hws_ocb,hk_sbc)  **取值范围**：true 开启，false 不开启。  **默认取值**：false
    * portRanges  **参数解释**：全端口监听，指定器端口监听范围（闭区间)，最多指定10个端口组，每个组范围不可有重叠部分。  **约束限制**： - 仅当protocol_port为0或未传入protocol_port时可以传入该字段。 - 仅TCP, UDP，TLS监听支持该字段。
    * sslEarlyDataEnable  **参数解释**：监听器0-RTT能力开关。  **约束限制**：仅HTTPS类型监听器支持配置，需要依赖TLSv1.3安全策略协议。开启 ssl_early_data 后，有重放攻击的风险，请谨慎开启。  **取值范围**：true，false  **默认取值**：false
    * cps  **参数解释**：监听器新建限速。  **约束限制**：当该限速值大于LB的限速值时，以LB的限速值生效  **取值范围**：0-1000000  **默认取值**：0，表示不限速。
    * connection  **参数解释**：监听器并发限速  **约束限制**：当该限速值大于LB的限速值时，以LB的限速值生效  **取值范围**：0-1000000  **默认取值**：0，表示不限速。
    * nat64Enable  **参数解释**：监听器地址转换能力开关，可以实现客户端通过访问LB的IPv4或者IPv6地址，来访问IPv4后端和IPv6后端。  **约束限制**：仅对于TCP、UDP协议类型的监听器生效，与transparent_client_ip_enable，获取客户端ip功能开关互斥，开启地址转换同时需要保证获取客户端ip功能关闭。  **取值范围**： - true：开启地址转换功能 - false：关闭地址转换功能  **默认取值**：false
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
            'sslEarlyDataEnable' => 'ssl_early_data_enable',
            'cps' => 'cps',
            'connection' => 'connection',
            'nat64Enable' => 'nat64_enable'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * adminStateUp  **参数解释**：监听器的管理状态。  **约束限制**：只支持设置为true。  **取值范围**：true 表示监听器正常使用中。  **默认取值**：true  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    * defaultPoolId  **参数解释**：监听器默认的后端服务器组ID。当请求没有匹配的转发策略时，转发到默认后端服务器组上处理。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * clientCaTlsContainerRef  **参数解释**：监听器使用的CA证书ID。  **约束限制**： - 对应证书的type必须是client类型。 - 仅TLS和HTTPS协议监听器支持该字段。 - 开启双向认证需要同时传入client_ca_tls_container_ref和default_tls_container_ref。  **取值范围**：不涉及  **默认取值**：不涉及  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt)
    * defaultTlsContainerRef  **参数解释**：监听器使用的服务器证书ID。  **约束限制**： - 对应证书的type必须是server类型。 - 当监听器协议为HTTPS、TLS或QUIC时，该字段必传。 - 开启双向认证需要同时传入client_ca_tls_container_ref和default_tls_container_ref。开启单向认证时，只需要传入default_tls_container_ref。  **取值范围**：不涉及  **默认取值**：不涉及
    * description  **参数解释**：监听器的描述信息。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * http2Enable  **参数解释**：客户端与LB之间的HTTPS请求的HTTP2功能的开启状态。 开启后，可提升客户端与LB间的访问性能，但LB与后端服务器间仍采用HTTP1.X协议。  **约束限制**： - 仅HTTPS协议监听器有效。 - QUIC监听器不能设置该字段，固定返回为true。 - 其他协议的监听器可设置该字段但无效，无论取值如何都不影响监听器正常运行。  **取值范围**： - true：开启 - false：不开启  **默认取值**：false  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt)
    * insertHeaders  insertHeaders
    * loadbalancerId  **参数解释**：监听器所属的负载均衡器的ID。  **约束限制**：一个监听器只支持关联到一个负载均衡器。  **取值范围**：不涉及  **默认取值**：不涉及
    * name  **参数解释**：监听器的名称。  **约束限制**：若名称为空，则在控制台的监听器列表无法选择并查看监听器详情。  **取值范围**：长度为0-255个字符。  **默认取值**：不涉及
    * projectId  **参数解释**：项目ID。获取方式请参见[获取项目ID](elb_fl_0008.xml)。  **约束限制**：不涉及  **取值范围**：长度为32个字符，由小写字母和数字组成。  **默认取值**：不涉及  > 该字段实际无效，最终使用url中的project_id。
    * protocol  **参数解释**：监听器的监听协议。  [**约束限制**： - 共享型LB上的HTTPS监听器只支持设置为TERMINATED_HTTPS。传入HTTPS将会自动转为TERMINATED_HTTPS。 - 独享型LB上的HTTPS监听器只支持设置为HTTPS，传入TERMINATED_HTTPS将会自动转为HTTPS。  **取值范围**：TCP、UDP、HTTP、HTTPS、TERMINATED_HTTPS、QUIC、TLS。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt) [**约束限制**：不涉及  **取值范围**：TCP、UDP、HTTP、HTTPS。](tag:hcso_dt) [**约束限制**：不涉及  **取值范围**：TCP、UDP、IP、HTTP、HTTPS。IP为网关型LB上的监听器独有的协议。](tag:hws_eu)  **默认取值**：不涉及  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt)
    * protocolPort  **参数解释**：监听器的监听端口。  **约束限制**： - QUIC和UDP监听器端口不能重复。 - TCP、HTTP、HTTPS监听器之间端口不能重复。 - 传0时表示开启监听端口范围的能力，此时全端口监听port_ranges为必填字段。 [- 共享型LB上的HTTP和TERMINATED_HTTPS监听器不支持设置21端口。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt)  **取值范围**：0-65535  **默认取值**：不涉及  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt)
    * sniContainerRefs  **参数解释**：监听器使用的SNI证书（带域名的服务器证书）ID列表。  **约束限制**： - QUIC监听器仅支持RSA证书。 - 列表对应的所有SNI证书的域名不允许存在重复。 - 列表对应的所有SNI证书的域名总数不超过200。  **取值范围**：0-50个。  **默认取值**：不涉及  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt)
    * sniMatchAlgo  **参数解释**：监听器使用的SNI证书泛域名匹配方式。  **约束限制**：不涉及  **取值范围**： - longest_suffix 表示最长尾缀匹配。 - wildcard 表示标准域名分级匹配。  **默认取值**：wildcard。
    * tags  **参数解释**：资源标签。  **约束限制**：不涉及
    * tlsCiphersPolicy  **参数解释**：监听器使用的安全策略。  [**约束限制**： - 仅对HTTPS协议类型的监听器且关联LB为独享型时有效。 - QUIC监听器不支持该字段。 - 若同时设置了security_policy_id和tls_ciphers_policy，则仅security_policy_id生效。 - 加密套件的优先顺序为ecc套件、rsa套件、tls1.3协议的套件（既支持ecc又支持rsa） ](tag:hws,hws_hk,hws_eu,g42,hk_g42,ocb,tlf,ctc,hcso,ct,sbc,tm,cmcc,dt)  [**约束限制**： - 仅对HTTPS协议类型的监听器有效](tag:hcso_dt)  [**取值范围**：tls-1-0-inherit、tls-1-0、tls-1-1、tls-1-2、tls-1-2-strict、tls-1-2-fs、tls-1-0-with-1-3、tls-1-2-fs-with-1-3、hybrid-policy-1-0、tls-1-2-strict-no-cbc，默认：tls-1-2。](tag:hws,hws_hk,ocb,tlf,ctc,hcso,ct,sbc,tm,cmcc,dt)  [**取值范围**：tls-1-0、tls-1-1、tls-1-2、tls-1-2-strict，默认：tls-1-2。](tag:hws_eu,g42,hk_g42,hcso_dt)  **默认取值**：不涉及  [不支持tls1.3协议的套件。](tag:tm,hws_eu,g42,hk_g42) [不支持QUIC。](tag:tm,dt)
    * securityPolicyId  **参数解释**：自定义安全策略的ID。  [**约束限制**： - 仅对HTTPS协议类型的监听器且关联LB为独享型时有效。 - QUIC监听器不支持该字段。 - 若同时设置了security_policy_id和tls_ciphers_policy，则仅security_policy_id生效。 - 加密套件的优先顺序为ecc套件、rsa套件、tls1.3协议的套件（既支持ecc又支持rsa）](tag:hws,hws_hk,hws_eu,g42,hk_g42,ocb,tlf,ctc,hcso,ct,sbc,tm,cmcc,dt)  [**约束限制**： - 仅对HTTPS协议类型的监听器有效](tag:hcso_dt)  **取值范围**：不涉及  **默认取值**：不涉及  [不支持tls1.3协议的套件。](tag:tm,hws_eu,g42,hk_g42)  [不支持QUIC。](tag:tm,dt)
    * enableMemberRetry  **参数解释**：是否开启后端服务器的重试。  [**约束限制**： - 若关联是共享型LB，仅在protocol为HTTP、TERMINATED_HTTPS时才能传入该字段。 - 若关联是独享型LB，仅在protocol为HTTP、HTTPS和QUIC时才能传入该字段。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt)  [**约束限制**： - 仅在protocol为HTTP、HTTPS时才能传入该字段。](tag:hws_eu,hcso_dt)  **取值范围**：true 开启重试，false 不开启重试。  **默认取值**：true  [不支持QUIC。](tag:tm,dt)
    * keepaliveTimeout  **参数解释**：客户端连接空闲超时时间。在超过keepalive_timeout时长一直没有请求，负载均衡会暂时中断当前连接，直到下一次请求时重新建立新的连接。  **约束限制**：共享型实例的UDP监听器不支持此字段。  **取值范围**： - TCP监听器[和IP监听器](tag:hws_eu)：10-4000s，默认值为300s。 - 若为HTTP/HTTPS/TERMINATED_HTTPS监听器，取值范围为（0-4000s）默认值为60s。  **默认取值**：不涉及
    * clientTimeout  **参数解释**：等待客户端请求超时时间，包括两种情况： - 读取整个客户端请求头的超时时长：如果客户端未在超时时长内发送完整个请求头，则请求将被中断 - 两个连续body体的数据包到达LB的时间间隔，超出client_timeout将会断开连接。  **约束限制**：仅协议为HTTP/HTTPS的监听器支持该字段。  **取值范围**： 1-300s  **默认取值**：60s
    * memberTimeout  **参数解释**：等待后端服务器响应超时时间。请求转发后端服务器后，在等待超时member_timeout时长没有响应，负载均衡将终止等待，并返回HTTP504错误码。  **约束限制**：仅支持协议为HTTP/HTTPS的监听器。  **取值范围**：1-300s  **默认取值**：60s
    * ipgroup  ipgroup
    * transparentClientIpEnable  **参数解释**：是否透传客户端IP地址。开启后客户端IP地址将透传到后端服务器。  [**约束限制**： - 仅作用于共享型LB的TCP/UDP监听器。 - 开启特性后，ELB和后端服务器之间直接使用真实的IP访问，需要确保已正确设置服务器的安全组以及访问控制策略。 - 开启特性后，不支持同一台服务器既作为后端服务器又作为客户端的场景。 - 开启特性后，不支持变更后端服务器规格。  **取值范围**： - 共享型LB的TCP/UDP监听器可设置为true或false，不传默认为false。 - 共享型LB的HTTP/HTTPS监听器只支持设置为true，不传默认为true。 - 独享型负载均衡器所有协议的监听器只支持设置为true，不传默认为true。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt)  [**约束限制**：只设支持置为true，不传默认为true。  **取值范围**：不涉及](tag:hws_eu,hcso_dt)  **默认取值**：不涉及
    * proxyProtocolEnable  **参数解释**：是否开启proxy_protocol。  **约束限制**：仅TLS监听器可指定，其他协议的监听器该字段不生效，proxy_protocol不开启。  **取值范围**：不涉及  **默认取值**：不涉及
    * enhanceL7policyEnable  **参数解释**：是否开启高级转发策略功能。开启高级转发策略后，支持更灵活的转发策略和转发规则设置。 开启后支持如下场景： - 转发策略的action字段支持指定为REDIRECT_TO_URL,FIXED_RESPONSE，即支持URL重定向和响应固定的内容给客户端。 - 转发策略支持指定priority、redirect_url_config、fixed_response_config字段。 - 转发规则rule的type可以指定METHOD, HEADER, QUERY_STRING, SOURCE_IP这几种取值。 - 转发规则rule的type为HOST_NAME时，转发规则rule的value支持通配符*。 - 转发规则支持指定conditions字段。  **约束限制**： - 开启后不支持关闭。 - 开启高级转发策略后，监听器关联的转发策略的匹配优先级由转发策略的priority字段来决定，不再自动排序。具体说明详见转发策略的priority字段的说明。  **取值范围**：true开启，false不开启。  **默认取值**：false。[西南-贵阳一和华南-广州局点，该配置默认true。](tag:hws)  [荷兰region不支持该字段，请勿使用。](tag:dt)
    * quicConfig  quicConfig
    * protectionStatus  **参数解释**：修改保护状态。  **约束限制**：不涉及  **取值范围**： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护  **默认取值**：不涉及
    * protectionReason  **参数解释**：设置保护的原因。作为protection_status的转态设置的原因。  **约束限制**：仅当protection_status为consoleProtection时有效。  **取值范围**：除'<'和'>'外通用Unicode字符集字符，最大255个字符。  **默认取值**：不涉及
    * gzipEnable  **参数解释**：ELB是否开启gzip压缩。  [**约束限制**：仅HTTP/HTTPS类型监听器支持配置。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt) [**约束限制**：仅HTTP/HTTPS/QUIC类型监听器支持配置。](tag:hws,hws_hk,hws_test,hcs,hcs_sm,hcso,hk_vdf,srg,fcs,fcs_vm,mix,ocb,ctc,cmcc,ct,sbc,hws_ocb,hk_sbc)  **取值范围**：true 开启，false 不开启。  **默认取值**：false
    * portRanges  **参数解释**：全端口监听，指定器端口监听范围（闭区间)，最多指定10个端口组，每个组范围不可有重叠部分。  **约束限制**： - 仅当protocol_port为0或未传入protocol_port时可以传入该字段。 - 仅TCP, UDP，TLS监听支持该字段。
    * sslEarlyDataEnable  **参数解释**：监听器0-RTT能力开关。  **约束限制**：仅HTTPS类型监听器支持配置，需要依赖TLSv1.3安全策略协议。开启 ssl_early_data 后，有重放攻击的风险，请谨慎开启。  **取值范围**：true，false  **默认取值**：false
    * cps  **参数解释**：监听器新建限速。  **约束限制**：当该限速值大于LB的限速值时，以LB的限速值生效  **取值范围**：0-1000000  **默认取值**：0，表示不限速。
    * connection  **参数解释**：监听器并发限速  **约束限制**：当该限速值大于LB的限速值时，以LB的限速值生效  **取值范围**：0-1000000  **默认取值**：0，表示不限速。
    * nat64Enable  **参数解释**：监听器地址转换能力开关，可以实现客户端通过访问LB的IPv4或者IPv6地址，来访问IPv4后端和IPv6后端。  **约束限制**：仅对于TCP、UDP协议类型的监听器生效，与transparent_client_ip_enable，获取客户端ip功能开关互斥，开启地址转换同时需要保证获取客户端ip功能关闭。  **取值范围**： - true：开启地址转换功能 - false：关闭地址转换功能  **默认取值**：false
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
            'sslEarlyDataEnable' => 'setSslEarlyDataEnable',
            'cps' => 'setCps',
            'connection' => 'setConnection',
            'nat64Enable' => 'setNat64Enable'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * adminStateUp  **参数解释**：监听器的管理状态。  **约束限制**：只支持设置为true。  **取值范围**：true 表示监听器正常使用中。  **默认取值**：true  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    * defaultPoolId  **参数解释**：监听器默认的后端服务器组ID。当请求没有匹配的转发策略时，转发到默认后端服务器组上处理。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * clientCaTlsContainerRef  **参数解释**：监听器使用的CA证书ID。  **约束限制**： - 对应证书的type必须是client类型。 - 仅TLS和HTTPS协议监听器支持该字段。 - 开启双向认证需要同时传入client_ca_tls_container_ref和default_tls_container_ref。  **取值范围**：不涉及  **默认取值**：不涉及  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt)
    * defaultTlsContainerRef  **参数解释**：监听器使用的服务器证书ID。  **约束限制**： - 对应证书的type必须是server类型。 - 当监听器协议为HTTPS、TLS或QUIC时，该字段必传。 - 开启双向认证需要同时传入client_ca_tls_container_ref和default_tls_container_ref。开启单向认证时，只需要传入default_tls_container_ref。  **取值范围**：不涉及  **默认取值**：不涉及
    * description  **参数解释**：监听器的描述信息。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * http2Enable  **参数解释**：客户端与LB之间的HTTPS请求的HTTP2功能的开启状态。 开启后，可提升客户端与LB间的访问性能，但LB与后端服务器间仍采用HTTP1.X协议。  **约束限制**： - 仅HTTPS协议监听器有效。 - QUIC监听器不能设置该字段，固定返回为true。 - 其他协议的监听器可设置该字段但无效，无论取值如何都不影响监听器正常运行。  **取值范围**： - true：开启 - false：不开启  **默认取值**：false  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt)
    * insertHeaders  insertHeaders
    * loadbalancerId  **参数解释**：监听器所属的负载均衡器的ID。  **约束限制**：一个监听器只支持关联到一个负载均衡器。  **取值范围**：不涉及  **默认取值**：不涉及
    * name  **参数解释**：监听器的名称。  **约束限制**：若名称为空，则在控制台的监听器列表无法选择并查看监听器详情。  **取值范围**：长度为0-255个字符。  **默认取值**：不涉及
    * projectId  **参数解释**：项目ID。获取方式请参见[获取项目ID](elb_fl_0008.xml)。  **约束限制**：不涉及  **取值范围**：长度为32个字符，由小写字母和数字组成。  **默认取值**：不涉及  > 该字段实际无效，最终使用url中的project_id。
    * protocol  **参数解释**：监听器的监听协议。  [**约束限制**： - 共享型LB上的HTTPS监听器只支持设置为TERMINATED_HTTPS。传入HTTPS将会自动转为TERMINATED_HTTPS。 - 独享型LB上的HTTPS监听器只支持设置为HTTPS，传入TERMINATED_HTTPS将会自动转为HTTPS。  **取值范围**：TCP、UDP、HTTP、HTTPS、TERMINATED_HTTPS、QUIC、TLS。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt) [**约束限制**：不涉及  **取值范围**：TCP、UDP、HTTP、HTTPS。](tag:hcso_dt) [**约束限制**：不涉及  **取值范围**：TCP、UDP、IP、HTTP、HTTPS。IP为网关型LB上的监听器独有的协议。](tag:hws_eu)  **默认取值**：不涉及  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt)
    * protocolPort  **参数解释**：监听器的监听端口。  **约束限制**： - QUIC和UDP监听器端口不能重复。 - TCP、HTTP、HTTPS监听器之间端口不能重复。 - 传0时表示开启监听端口范围的能力，此时全端口监听port_ranges为必填字段。 [- 共享型LB上的HTTP和TERMINATED_HTTPS监听器不支持设置21端口。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt)  **取值范围**：0-65535  **默认取值**：不涉及  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt)
    * sniContainerRefs  **参数解释**：监听器使用的SNI证书（带域名的服务器证书）ID列表。  **约束限制**： - QUIC监听器仅支持RSA证书。 - 列表对应的所有SNI证书的域名不允许存在重复。 - 列表对应的所有SNI证书的域名总数不超过200。  **取值范围**：0-50个。  **默认取值**：不涉及  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt)
    * sniMatchAlgo  **参数解释**：监听器使用的SNI证书泛域名匹配方式。  **约束限制**：不涉及  **取值范围**： - longest_suffix 表示最长尾缀匹配。 - wildcard 表示标准域名分级匹配。  **默认取值**：wildcard。
    * tags  **参数解释**：资源标签。  **约束限制**：不涉及
    * tlsCiphersPolicy  **参数解释**：监听器使用的安全策略。  [**约束限制**： - 仅对HTTPS协议类型的监听器且关联LB为独享型时有效。 - QUIC监听器不支持该字段。 - 若同时设置了security_policy_id和tls_ciphers_policy，则仅security_policy_id生效。 - 加密套件的优先顺序为ecc套件、rsa套件、tls1.3协议的套件（既支持ecc又支持rsa） ](tag:hws,hws_hk,hws_eu,g42,hk_g42,ocb,tlf,ctc,hcso,ct,sbc,tm,cmcc,dt)  [**约束限制**： - 仅对HTTPS协议类型的监听器有效](tag:hcso_dt)  [**取值范围**：tls-1-0-inherit、tls-1-0、tls-1-1、tls-1-2、tls-1-2-strict、tls-1-2-fs、tls-1-0-with-1-3、tls-1-2-fs-with-1-3、hybrid-policy-1-0、tls-1-2-strict-no-cbc，默认：tls-1-2。](tag:hws,hws_hk,ocb,tlf,ctc,hcso,ct,sbc,tm,cmcc,dt)  [**取值范围**：tls-1-0、tls-1-1、tls-1-2、tls-1-2-strict，默认：tls-1-2。](tag:hws_eu,g42,hk_g42,hcso_dt)  **默认取值**：不涉及  [不支持tls1.3协议的套件。](tag:tm,hws_eu,g42,hk_g42) [不支持QUIC。](tag:tm,dt)
    * securityPolicyId  **参数解释**：自定义安全策略的ID。  [**约束限制**： - 仅对HTTPS协议类型的监听器且关联LB为独享型时有效。 - QUIC监听器不支持该字段。 - 若同时设置了security_policy_id和tls_ciphers_policy，则仅security_policy_id生效。 - 加密套件的优先顺序为ecc套件、rsa套件、tls1.3协议的套件（既支持ecc又支持rsa）](tag:hws,hws_hk,hws_eu,g42,hk_g42,ocb,tlf,ctc,hcso,ct,sbc,tm,cmcc,dt)  [**约束限制**： - 仅对HTTPS协议类型的监听器有效](tag:hcso_dt)  **取值范围**：不涉及  **默认取值**：不涉及  [不支持tls1.3协议的套件。](tag:tm,hws_eu,g42,hk_g42)  [不支持QUIC。](tag:tm,dt)
    * enableMemberRetry  **参数解释**：是否开启后端服务器的重试。  [**约束限制**： - 若关联是共享型LB，仅在protocol为HTTP、TERMINATED_HTTPS时才能传入该字段。 - 若关联是独享型LB，仅在protocol为HTTP、HTTPS和QUIC时才能传入该字段。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt)  [**约束限制**： - 仅在protocol为HTTP、HTTPS时才能传入该字段。](tag:hws_eu,hcso_dt)  **取值范围**：true 开启重试，false 不开启重试。  **默认取值**：true  [不支持QUIC。](tag:tm,dt)
    * keepaliveTimeout  **参数解释**：客户端连接空闲超时时间。在超过keepalive_timeout时长一直没有请求，负载均衡会暂时中断当前连接，直到下一次请求时重新建立新的连接。  **约束限制**：共享型实例的UDP监听器不支持此字段。  **取值范围**： - TCP监听器[和IP监听器](tag:hws_eu)：10-4000s，默认值为300s。 - 若为HTTP/HTTPS/TERMINATED_HTTPS监听器，取值范围为（0-4000s）默认值为60s。  **默认取值**：不涉及
    * clientTimeout  **参数解释**：等待客户端请求超时时间，包括两种情况： - 读取整个客户端请求头的超时时长：如果客户端未在超时时长内发送完整个请求头，则请求将被中断 - 两个连续body体的数据包到达LB的时间间隔，超出client_timeout将会断开连接。  **约束限制**：仅协议为HTTP/HTTPS的监听器支持该字段。  **取值范围**： 1-300s  **默认取值**：60s
    * memberTimeout  **参数解释**：等待后端服务器响应超时时间。请求转发后端服务器后，在等待超时member_timeout时长没有响应，负载均衡将终止等待，并返回HTTP504错误码。  **约束限制**：仅支持协议为HTTP/HTTPS的监听器。  **取值范围**：1-300s  **默认取值**：60s
    * ipgroup  ipgroup
    * transparentClientIpEnable  **参数解释**：是否透传客户端IP地址。开启后客户端IP地址将透传到后端服务器。  [**约束限制**： - 仅作用于共享型LB的TCP/UDP监听器。 - 开启特性后，ELB和后端服务器之间直接使用真实的IP访问，需要确保已正确设置服务器的安全组以及访问控制策略。 - 开启特性后，不支持同一台服务器既作为后端服务器又作为客户端的场景。 - 开启特性后，不支持变更后端服务器规格。  **取值范围**： - 共享型LB的TCP/UDP监听器可设置为true或false，不传默认为false。 - 共享型LB的HTTP/HTTPS监听器只支持设置为true，不传默认为true。 - 独享型负载均衡器所有协议的监听器只支持设置为true，不传默认为true。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt)  [**约束限制**：只设支持置为true，不传默认为true。  **取值范围**：不涉及](tag:hws_eu,hcso_dt)  **默认取值**：不涉及
    * proxyProtocolEnable  **参数解释**：是否开启proxy_protocol。  **约束限制**：仅TLS监听器可指定，其他协议的监听器该字段不生效，proxy_protocol不开启。  **取值范围**：不涉及  **默认取值**：不涉及
    * enhanceL7policyEnable  **参数解释**：是否开启高级转发策略功能。开启高级转发策略后，支持更灵活的转发策略和转发规则设置。 开启后支持如下场景： - 转发策略的action字段支持指定为REDIRECT_TO_URL,FIXED_RESPONSE，即支持URL重定向和响应固定的内容给客户端。 - 转发策略支持指定priority、redirect_url_config、fixed_response_config字段。 - 转发规则rule的type可以指定METHOD, HEADER, QUERY_STRING, SOURCE_IP这几种取值。 - 转发规则rule的type为HOST_NAME时，转发规则rule的value支持通配符*。 - 转发规则支持指定conditions字段。  **约束限制**： - 开启后不支持关闭。 - 开启高级转发策略后，监听器关联的转发策略的匹配优先级由转发策略的priority字段来决定，不再自动排序。具体说明详见转发策略的priority字段的说明。  **取值范围**：true开启，false不开启。  **默认取值**：false。[西南-贵阳一和华南-广州局点，该配置默认true。](tag:hws)  [荷兰region不支持该字段，请勿使用。](tag:dt)
    * quicConfig  quicConfig
    * protectionStatus  **参数解释**：修改保护状态。  **约束限制**：不涉及  **取值范围**： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护  **默认取值**：不涉及
    * protectionReason  **参数解释**：设置保护的原因。作为protection_status的转态设置的原因。  **约束限制**：仅当protection_status为consoleProtection时有效。  **取值范围**：除'<'和'>'外通用Unicode字符集字符，最大255个字符。  **默认取值**：不涉及
    * gzipEnable  **参数解释**：ELB是否开启gzip压缩。  [**约束限制**：仅HTTP/HTTPS类型监听器支持配置。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt) [**约束限制**：仅HTTP/HTTPS/QUIC类型监听器支持配置。](tag:hws,hws_hk,hws_test,hcs,hcs_sm,hcso,hk_vdf,srg,fcs,fcs_vm,mix,ocb,ctc,cmcc,ct,sbc,hws_ocb,hk_sbc)  **取值范围**：true 开启，false 不开启。  **默认取值**：false
    * portRanges  **参数解释**：全端口监听，指定器端口监听范围（闭区间)，最多指定10个端口组，每个组范围不可有重叠部分。  **约束限制**： - 仅当protocol_port为0或未传入protocol_port时可以传入该字段。 - 仅TCP, UDP，TLS监听支持该字段。
    * sslEarlyDataEnable  **参数解释**：监听器0-RTT能力开关。  **约束限制**：仅HTTPS类型监听器支持配置，需要依赖TLSv1.3安全策略协议。开启 ssl_early_data 后，有重放攻击的风险，请谨慎开启。  **取值范围**：true，false  **默认取值**：false
    * cps  **参数解释**：监听器新建限速。  **约束限制**：当该限速值大于LB的限速值时，以LB的限速值生效  **取值范围**：0-1000000  **默认取值**：0，表示不限速。
    * connection  **参数解释**：监听器并发限速  **约束限制**：当该限速值大于LB的限速值时，以LB的限速值生效  **取值范围**：0-1000000  **默认取值**：0，表示不限速。
    * nat64Enable  **参数解释**：监听器地址转换能力开关，可以实现客户端通过访问LB的IPv4或者IPv6地址，来访问IPv4后端和IPv6后端。  **约束限制**：仅对于TCP、UDP协议类型的监听器生效，与transparent_client_ip_enable，获取客户端ip功能开关互斥，开启地址转换同时需要保证获取客户端ip功能关闭。  **取值范围**： - true：开启地址转换功能 - false：关闭地址转换功能  **默认取值**：false
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
            'sslEarlyDataEnable' => 'getSslEarlyDataEnable',
            'cps' => 'getCps',
            'connection' => 'getConnection',
            'nat64Enable' => 'getNat64Enable'
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
        $this->container['cps'] = isset($data['cps']) ? $data['cps'] : null;
        $this->container['connection'] = isset($data['connection']) ? $data['connection'] : null;
        $this->container['nat64Enable'] = isset($data['nat64Enable']) ? $data['nat64Enable'] : null;
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
            if (!is_null($this->container['cps']) && ($this->container['cps'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'cps', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['cps']) && ($this->container['cps'] < 0)) {
                $invalidProperties[] = "invalid value for 'cps', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['connection']) && ($this->container['connection'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'connection', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['connection']) && ($this->container['connection'] < 0)) {
                $invalidProperties[] = "invalid value for 'connection', must be bigger than or equal to 0.";
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
    *  **参数解释**：监听器的管理状态。  **约束限制**：只支持设置为true。  **取值范围**：true 表示监听器正常使用中。  **默认取值**：true  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
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
    * @param bool|null $adminStateUp **参数解释**：监听器的管理状态。  **约束限制**：只支持设置为true。  **取值范围**：true 表示监听器正常使用中。  **默认取值**：true  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
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
    *  **参数解释**：监听器默认的后端服务器组ID。当请求没有匹配的转发策略时，转发到默认后端服务器组上处理。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
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
    * @param string|null $defaultPoolId **参数解释**：监听器默认的后端服务器组ID。当请求没有匹配的转发策略时，转发到默认后端服务器组上处理。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
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
    *  **参数解释**：监听器使用的CA证书ID。  **约束限制**： - 对应证书的type必须是client类型。 - 仅TLS和HTTPS协议监听器支持该字段。 - 开启双向认证需要同时传入client_ca_tls_container_ref和default_tls_container_ref。  **取值范围**：不涉及  **默认取值**：不涉及  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt)
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
    * @param string|null $clientCaTlsContainerRef **参数解释**：监听器使用的CA证书ID。  **约束限制**： - 对应证书的type必须是client类型。 - 仅TLS和HTTPS协议监听器支持该字段。 - 开启双向认证需要同时传入client_ca_tls_container_ref和default_tls_container_ref。  **取值范围**：不涉及  **默认取值**：不涉及  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt)
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
    *  **参数解释**：监听器使用的服务器证书ID。  **约束限制**： - 对应证书的type必须是server类型。 - 当监听器协议为HTTPS、TLS或QUIC时，该字段必传。 - 开启双向认证需要同时传入client_ca_tls_container_ref和default_tls_container_ref。开启单向认证时，只需要传入default_tls_container_ref。  **取值范围**：不涉及  **默认取值**：不涉及
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
    * @param string|null $defaultTlsContainerRef **参数解释**：监听器使用的服务器证书ID。  **约束限制**： - 对应证书的type必须是server类型。 - 当监听器协议为HTTPS、TLS或QUIC时，该字段必传。 - 开启双向认证需要同时传入client_ca_tls_container_ref和default_tls_container_ref。开启单向认证时，只需要传入default_tls_container_ref。  **取值范围**：不涉及  **默认取值**：不涉及
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
    *  **参数解释**：监听器的描述信息。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
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
    * @param string|null $description **参数解释**：监听器的描述信息。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
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
    *  **参数解释**：客户端与LB之间的HTTPS请求的HTTP2功能的开启状态。 开启后，可提升客户端与LB间的访问性能，但LB与后端服务器间仍采用HTTP1.X协议。  **约束限制**： - 仅HTTPS协议监听器有效。 - QUIC监听器不能设置该字段，固定返回为true。 - 其他协议的监听器可设置该字段但无效，无论取值如何都不影响监听器正常运行。  **取值范围**： - true：开启 - false：不开启  **默认取值**：false  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt)
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
    * @param bool|null $http2Enable **参数解释**：客户端与LB之间的HTTPS请求的HTTP2功能的开启状态。 开启后，可提升客户端与LB间的访问性能，但LB与后端服务器间仍采用HTTP1.X协议。  **约束限制**： - 仅HTTPS协议监听器有效。 - QUIC监听器不能设置该字段，固定返回为true。 - 其他协议的监听器可设置该字段但无效，无论取值如何都不影响监听器正常运行。  **取值范围**： - true：开启 - false：不开启  **默认取值**：false  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt)
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
    *  **参数解释**：监听器所属的负载均衡器的ID。  **约束限制**：一个监听器只支持关联到一个负载均衡器。  **取值范围**：不涉及  **默认取值**：不涉及
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
    * @param string $loadbalancerId **参数解释**：监听器所属的负载均衡器的ID。  **约束限制**：一个监听器只支持关联到一个负载均衡器。  **取值范围**：不涉及  **默认取值**：不涉及
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
    *  **参数解释**：监听器的名称。  **约束限制**：若名称为空，则在控制台的监听器列表无法选择并查看监听器详情。  **取值范围**：长度为0-255个字符。  **默认取值**：不涉及
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
    * @param string|null $name **参数解释**：监听器的名称。  **约束限制**：若名称为空，则在控制台的监听器列表无法选择并查看监听器详情。  **取值范围**：长度为0-255个字符。  **默认取值**：不涉及
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
    *  **参数解释**：项目ID。获取方式请参见[获取项目ID](elb_fl_0008.xml)。  **约束限制**：不涉及  **取值范围**：长度为32个字符，由小写字母和数字组成。  **默认取值**：不涉及  > 该字段实际无效，最终使用url中的project_id。
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
    * @param string|null $projectId **参数解释**：项目ID。获取方式请参见[获取项目ID](elb_fl_0008.xml)。  **约束限制**：不涉及  **取值范围**：长度为32个字符，由小写字母和数字组成。  **默认取值**：不涉及  > 该字段实际无效，最终使用url中的project_id。
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
    *  **参数解释**：监听器的监听协议。  [**约束限制**： - 共享型LB上的HTTPS监听器只支持设置为TERMINATED_HTTPS。传入HTTPS将会自动转为TERMINATED_HTTPS。 - 独享型LB上的HTTPS监听器只支持设置为HTTPS，传入TERMINATED_HTTPS将会自动转为HTTPS。  **取值范围**：TCP、UDP、HTTP、HTTPS、TERMINATED_HTTPS、QUIC、TLS。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt) [**约束限制**：不涉及  **取值范围**：TCP、UDP、HTTP、HTTPS。](tag:hcso_dt) [**约束限制**：不涉及  **取值范围**：TCP、UDP、IP、HTTP、HTTPS。IP为网关型LB上的监听器独有的协议。](tag:hws_eu)  **默认取值**：不涉及  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt)
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
    * @param string $protocol **参数解释**：监听器的监听协议。  [**约束限制**： - 共享型LB上的HTTPS监听器只支持设置为TERMINATED_HTTPS。传入HTTPS将会自动转为TERMINATED_HTTPS。 - 独享型LB上的HTTPS监听器只支持设置为HTTPS，传入TERMINATED_HTTPS将会自动转为HTTPS。  **取值范围**：TCP、UDP、HTTP、HTTPS、TERMINATED_HTTPS、QUIC、TLS。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt) [**约束限制**：不涉及  **取值范围**：TCP、UDP、HTTP、HTTPS。](tag:hcso_dt) [**约束限制**：不涉及  **取值范围**：TCP、UDP、IP、HTTP、HTTPS。IP为网关型LB上的监听器独有的协议。](tag:hws_eu)  **默认取值**：不涉及  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt)
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
    *  **参数解释**：监听器的监听端口。  **约束限制**： - QUIC和UDP监听器端口不能重复。 - TCP、HTTP、HTTPS监听器之间端口不能重复。 - 传0时表示开启监听端口范围的能力，此时全端口监听port_ranges为必填字段。 [- 共享型LB上的HTTP和TERMINATED_HTTPS监听器不支持设置21端口。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt)  **取值范围**：0-65535  **默认取值**：不涉及  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt)
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
    * @param int|null $protocolPort **参数解释**：监听器的监听端口。  **约束限制**： - QUIC和UDP监听器端口不能重复。 - TCP、HTTP、HTTPS监听器之间端口不能重复。 - 传0时表示开启监听端口范围的能力，此时全端口监听port_ranges为必填字段。 [- 共享型LB上的HTTP和TERMINATED_HTTPS监听器不支持设置21端口。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt)  **取值范围**：0-65535  **默认取值**：不涉及  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt)
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
    *  **参数解释**：监听器使用的SNI证书（带域名的服务器证书）ID列表。  **约束限制**： - QUIC监听器仅支持RSA证书。 - 列表对应的所有SNI证书的域名不允许存在重复。 - 列表对应的所有SNI证书的域名总数不超过200。  **取值范围**：0-50个。  **默认取值**：不涉及  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt)
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
    * @param string[]|null $sniContainerRefs **参数解释**：监听器使用的SNI证书（带域名的服务器证书）ID列表。  **约束限制**： - QUIC监听器仅支持RSA证书。 - 列表对应的所有SNI证书的域名不允许存在重复。 - 列表对应的所有SNI证书的域名总数不超过200。  **取值范围**：0-50个。  **默认取值**：不涉及  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt)
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
    *  **参数解释**：监听器使用的SNI证书泛域名匹配方式。  **约束限制**：不涉及  **取值范围**： - longest_suffix 表示最长尾缀匹配。 - wildcard 表示标准域名分级匹配。  **默认取值**：wildcard。
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
    * @param string|null $sniMatchAlgo **参数解释**：监听器使用的SNI证书泛域名匹配方式。  **约束限制**：不涉及  **取值范围**： - longest_suffix 表示最长尾缀匹配。 - wildcard 表示标准域名分级匹配。  **默认取值**：wildcard。
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
    *  **参数解释**：资源标签。  **约束限制**：不涉及
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
    * @param \HuaweiCloud\SDK\Elb\V3\Model\Tag[]|null $tags **参数解释**：资源标签。  **约束限制**：不涉及
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
    *  **参数解释**：监听器使用的安全策略。  [**约束限制**： - 仅对HTTPS协议类型的监听器且关联LB为独享型时有效。 - QUIC监听器不支持该字段。 - 若同时设置了security_policy_id和tls_ciphers_policy，则仅security_policy_id生效。 - 加密套件的优先顺序为ecc套件、rsa套件、tls1.3协议的套件（既支持ecc又支持rsa） ](tag:hws,hws_hk,hws_eu,g42,hk_g42,ocb,tlf,ctc,hcso,ct,sbc,tm,cmcc,dt)  [**约束限制**： - 仅对HTTPS协议类型的监听器有效](tag:hcso_dt)  [**取值范围**：tls-1-0-inherit、tls-1-0、tls-1-1、tls-1-2、tls-1-2-strict、tls-1-2-fs、tls-1-0-with-1-3、tls-1-2-fs-with-1-3、hybrid-policy-1-0、tls-1-2-strict-no-cbc，默认：tls-1-2。](tag:hws,hws_hk,ocb,tlf,ctc,hcso,ct,sbc,tm,cmcc,dt)  [**取值范围**：tls-1-0、tls-1-1、tls-1-2、tls-1-2-strict，默认：tls-1-2。](tag:hws_eu,g42,hk_g42,hcso_dt)  **默认取值**：不涉及  [不支持tls1.3协议的套件。](tag:tm,hws_eu,g42,hk_g42) [不支持QUIC。](tag:tm,dt)
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
    * @param string|null $tlsCiphersPolicy **参数解释**：监听器使用的安全策略。  [**约束限制**： - 仅对HTTPS协议类型的监听器且关联LB为独享型时有效。 - QUIC监听器不支持该字段。 - 若同时设置了security_policy_id和tls_ciphers_policy，则仅security_policy_id生效。 - 加密套件的优先顺序为ecc套件、rsa套件、tls1.3协议的套件（既支持ecc又支持rsa） ](tag:hws,hws_hk,hws_eu,g42,hk_g42,ocb,tlf,ctc,hcso,ct,sbc,tm,cmcc,dt)  [**约束限制**： - 仅对HTTPS协议类型的监听器有效](tag:hcso_dt)  [**取值范围**：tls-1-0-inherit、tls-1-0、tls-1-1、tls-1-2、tls-1-2-strict、tls-1-2-fs、tls-1-0-with-1-3、tls-1-2-fs-with-1-3、hybrid-policy-1-0、tls-1-2-strict-no-cbc，默认：tls-1-2。](tag:hws,hws_hk,ocb,tlf,ctc,hcso,ct,sbc,tm,cmcc,dt)  [**取值范围**：tls-1-0、tls-1-1、tls-1-2、tls-1-2-strict，默认：tls-1-2。](tag:hws_eu,g42,hk_g42,hcso_dt)  **默认取值**：不涉及  [不支持tls1.3协议的套件。](tag:tm,hws_eu,g42,hk_g42) [不支持QUIC。](tag:tm,dt)
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
    *  **参数解释**：自定义安全策略的ID。  [**约束限制**： - 仅对HTTPS协议类型的监听器且关联LB为独享型时有效。 - QUIC监听器不支持该字段。 - 若同时设置了security_policy_id和tls_ciphers_policy，则仅security_policy_id生效。 - 加密套件的优先顺序为ecc套件、rsa套件、tls1.3协议的套件（既支持ecc又支持rsa）](tag:hws,hws_hk,hws_eu,g42,hk_g42,ocb,tlf,ctc,hcso,ct,sbc,tm,cmcc,dt)  [**约束限制**： - 仅对HTTPS协议类型的监听器有效](tag:hcso_dt)  **取值范围**：不涉及  **默认取值**：不涉及  [不支持tls1.3协议的套件。](tag:tm,hws_eu,g42,hk_g42)  [不支持QUIC。](tag:tm,dt)
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
    * @param string|null $securityPolicyId **参数解释**：自定义安全策略的ID。  [**约束限制**： - 仅对HTTPS协议类型的监听器且关联LB为独享型时有效。 - QUIC监听器不支持该字段。 - 若同时设置了security_policy_id和tls_ciphers_policy，则仅security_policy_id生效。 - 加密套件的优先顺序为ecc套件、rsa套件、tls1.3协议的套件（既支持ecc又支持rsa）](tag:hws,hws_hk,hws_eu,g42,hk_g42,ocb,tlf,ctc,hcso,ct,sbc,tm,cmcc,dt)  [**约束限制**： - 仅对HTTPS协议类型的监听器有效](tag:hcso_dt)  **取值范围**：不涉及  **默认取值**：不涉及  [不支持tls1.3协议的套件。](tag:tm,hws_eu,g42,hk_g42)  [不支持QUIC。](tag:tm,dt)
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
    *  **参数解释**：是否开启后端服务器的重试。  [**约束限制**： - 若关联是共享型LB，仅在protocol为HTTP、TERMINATED_HTTPS时才能传入该字段。 - 若关联是独享型LB，仅在protocol为HTTP、HTTPS和QUIC时才能传入该字段。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt)  [**约束限制**： - 仅在protocol为HTTP、HTTPS时才能传入该字段。](tag:hws_eu,hcso_dt)  **取值范围**：true 开启重试，false 不开启重试。  **默认取值**：true  [不支持QUIC。](tag:tm,dt)
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
    * @param bool|null $enableMemberRetry **参数解释**：是否开启后端服务器的重试。  [**约束限制**： - 若关联是共享型LB，仅在protocol为HTTP、TERMINATED_HTTPS时才能传入该字段。 - 若关联是独享型LB，仅在protocol为HTTP、HTTPS和QUIC时才能传入该字段。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt)  [**约束限制**： - 仅在protocol为HTTP、HTTPS时才能传入该字段。](tag:hws_eu,hcso_dt)  **取值范围**：true 开启重试，false 不开启重试。  **默认取值**：true  [不支持QUIC。](tag:tm,dt)
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
    *  **参数解释**：客户端连接空闲超时时间。在超过keepalive_timeout时长一直没有请求，负载均衡会暂时中断当前连接，直到下一次请求时重新建立新的连接。  **约束限制**：共享型实例的UDP监听器不支持此字段。  **取值范围**： - TCP监听器[和IP监听器](tag:hws_eu)：10-4000s，默认值为300s。 - 若为HTTP/HTTPS/TERMINATED_HTTPS监听器，取值范围为（0-4000s）默认值为60s。  **默认取值**：不涉及
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
    * @param int|null $keepaliveTimeout **参数解释**：客户端连接空闲超时时间。在超过keepalive_timeout时长一直没有请求，负载均衡会暂时中断当前连接，直到下一次请求时重新建立新的连接。  **约束限制**：共享型实例的UDP监听器不支持此字段。  **取值范围**： - TCP监听器[和IP监听器](tag:hws_eu)：10-4000s，默认值为300s。 - 若为HTTP/HTTPS/TERMINATED_HTTPS监听器，取值范围为（0-4000s）默认值为60s。  **默认取值**：不涉及
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
    *  **参数解释**：等待客户端请求超时时间，包括两种情况： - 读取整个客户端请求头的超时时长：如果客户端未在超时时长内发送完整个请求头，则请求将被中断 - 两个连续body体的数据包到达LB的时间间隔，超出client_timeout将会断开连接。  **约束限制**：仅协议为HTTP/HTTPS的监听器支持该字段。  **取值范围**： 1-300s  **默认取值**：60s
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
    * @param int|null $clientTimeout **参数解释**：等待客户端请求超时时间，包括两种情况： - 读取整个客户端请求头的超时时长：如果客户端未在超时时长内发送完整个请求头，则请求将被中断 - 两个连续body体的数据包到达LB的时间间隔，超出client_timeout将会断开连接。  **约束限制**：仅协议为HTTP/HTTPS的监听器支持该字段。  **取值范围**： 1-300s  **默认取值**：60s
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
    *  **参数解释**：等待后端服务器响应超时时间。请求转发后端服务器后，在等待超时member_timeout时长没有响应，负载均衡将终止等待，并返回HTTP504错误码。  **约束限制**：仅支持协议为HTTP/HTTPS的监听器。  **取值范围**：1-300s  **默认取值**：60s
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
    * @param int|null $memberTimeout **参数解释**：等待后端服务器响应超时时间。请求转发后端服务器后，在等待超时member_timeout时长没有响应，负载均衡将终止等待，并返回HTTP504错误码。  **约束限制**：仅支持协议为HTTP/HTTPS的监听器。  **取值范围**：1-300s  **默认取值**：60s
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
    *  **参数解释**：是否透传客户端IP地址。开启后客户端IP地址将透传到后端服务器。  [**约束限制**： - 仅作用于共享型LB的TCP/UDP监听器。 - 开启特性后，ELB和后端服务器之间直接使用真实的IP访问，需要确保已正确设置服务器的安全组以及访问控制策略。 - 开启特性后，不支持同一台服务器既作为后端服务器又作为客户端的场景。 - 开启特性后，不支持变更后端服务器规格。  **取值范围**： - 共享型LB的TCP/UDP监听器可设置为true或false，不传默认为false。 - 共享型LB的HTTP/HTTPS监听器只支持设置为true，不传默认为true。 - 独享型负载均衡器所有协议的监听器只支持设置为true，不传默认为true。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt)  [**约束限制**：只设支持置为true，不传默认为true。  **取值范围**：不涉及](tag:hws_eu,hcso_dt)  **默认取值**：不涉及
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
    * @param bool|null $transparentClientIpEnable **参数解释**：是否透传客户端IP地址。开启后客户端IP地址将透传到后端服务器。  [**约束限制**： - 仅作用于共享型LB的TCP/UDP监听器。 - 开启特性后，ELB和后端服务器之间直接使用真实的IP访问，需要确保已正确设置服务器的安全组以及访问控制策略。 - 开启特性后，不支持同一台服务器既作为后端服务器又作为客户端的场景。 - 开启特性后，不支持变更后端服务器规格。  **取值范围**： - 共享型LB的TCP/UDP监听器可设置为true或false，不传默认为false。 - 共享型LB的HTTP/HTTPS监听器只支持设置为true，不传默认为true。 - 独享型负载均衡器所有协议的监听器只支持设置为true，不传默认为true。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt)  [**约束限制**：只设支持置为true，不传默认为true。  **取值范围**：不涉及](tag:hws_eu,hcso_dt)  **默认取值**：不涉及
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
    *  **参数解释**：是否开启proxy_protocol。  **约束限制**：仅TLS监听器可指定，其他协议的监听器该字段不生效，proxy_protocol不开启。  **取值范围**：不涉及  **默认取值**：不涉及
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
    * @param bool|null $proxyProtocolEnable **参数解释**：是否开启proxy_protocol。  **约束限制**：仅TLS监听器可指定，其他协议的监听器该字段不生效，proxy_protocol不开启。  **取值范围**：不涉及  **默认取值**：不涉及
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
    *  **参数解释**：是否开启高级转发策略功能。开启高级转发策略后，支持更灵活的转发策略和转发规则设置。 开启后支持如下场景： - 转发策略的action字段支持指定为REDIRECT_TO_URL,FIXED_RESPONSE，即支持URL重定向和响应固定的内容给客户端。 - 转发策略支持指定priority、redirect_url_config、fixed_response_config字段。 - 转发规则rule的type可以指定METHOD, HEADER, QUERY_STRING, SOURCE_IP这几种取值。 - 转发规则rule的type为HOST_NAME时，转发规则rule的value支持通配符*。 - 转发规则支持指定conditions字段。  **约束限制**： - 开启后不支持关闭。 - 开启高级转发策略后，监听器关联的转发策略的匹配优先级由转发策略的priority字段来决定，不再自动排序。具体说明详见转发策略的priority字段的说明。  **取值范围**：true开启，false不开启。  **默认取值**：false。[西南-贵阳一和华南-广州局点，该配置默认true。](tag:hws)  [荷兰region不支持该字段，请勿使用。](tag:dt)
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
    * @param bool|null $enhanceL7policyEnable **参数解释**：是否开启高级转发策略功能。开启高级转发策略后，支持更灵活的转发策略和转发规则设置。 开启后支持如下场景： - 转发策略的action字段支持指定为REDIRECT_TO_URL,FIXED_RESPONSE，即支持URL重定向和响应固定的内容给客户端。 - 转发策略支持指定priority、redirect_url_config、fixed_response_config字段。 - 转发规则rule的type可以指定METHOD, HEADER, QUERY_STRING, SOURCE_IP这几种取值。 - 转发规则rule的type为HOST_NAME时，转发规则rule的value支持通配符*。 - 转发规则支持指定conditions字段。  **约束限制**： - 开启后不支持关闭。 - 开启高级转发策略后，监听器关联的转发策略的匹配优先级由转发策略的priority字段来决定，不再自动排序。具体说明详见转发策略的priority字段的说明。  **取值范围**：true开启，false不开启。  **默认取值**：false。[西南-贵阳一和华南-广州局点，该配置默认true。](tag:hws)  [荷兰region不支持该字段，请勿使用。](tag:dt)
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
    *  **参数解释**：修改保护状态。  **约束限制**：不涉及  **取值范围**： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护  **默认取值**：不涉及
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
    * @param string|null $protectionStatus **参数解释**：修改保护状态。  **约束限制**：不涉及  **取值范围**： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护  **默认取值**：不涉及
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
    *  **参数解释**：设置保护的原因。作为protection_status的转态设置的原因。  **约束限制**：仅当protection_status为consoleProtection时有效。  **取值范围**：除'<'和'>'外通用Unicode字符集字符，最大255个字符。  **默认取值**：不涉及
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
    * @param string|null $protectionReason **参数解释**：设置保护的原因。作为protection_status的转态设置的原因。  **约束限制**：仅当protection_status为consoleProtection时有效。  **取值范围**：除'<'和'>'外通用Unicode字符集字符，最大255个字符。  **默认取值**：不涉及
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
    *  **参数解释**：ELB是否开启gzip压缩。  [**约束限制**：仅HTTP/HTTPS类型监听器支持配置。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt) [**约束限制**：仅HTTP/HTTPS/QUIC类型监听器支持配置。](tag:hws,hws_hk,hws_test,hcs,hcs_sm,hcso,hk_vdf,srg,fcs,fcs_vm,mix,ocb,ctc,cmcc,ct,sbc,hws_ocb,hk_sbc)  **取值范围**：true 开启，false 不开启。  **默认取值**：false
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
    * @param bool|null $gzipEnable **参数解释**：ELB是否开启gzip压缩。  [**约束限制**：仅HTTP/HTTPS类型监听器支持配置。](tag:tm,hws_eu,g42,hk_g42,hcso_dt,dt) [**约束限制**：仅HTTP/HTTPS/QUIC类型监听器支持配置。](tag:hws,hws_hk,hws_test,hcs,hcs_sm,hcso,hk_vdf,srg,fcs,fcs_vm,mix,ocb,ctc,cmcc,ct,sbc,hws_ocb,hk_sbc)  **取值范围**：true 开启，false 不开启。  **默认取值**：false
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
    *  **参数解释**：全端口监听，指定器端口监听范围（闭区间)，最多指定10个端口组，每个组范围不可有重叠部分。  **约束限制**： - 仅当protocol_port为0或未传入protocol_port时可以传入该字段。 - 仅TCP, UDP，TLS监听支持该字段。
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
    * @param \HuaweiCloud\SDK\Elb\V3\Model\PortRange[]|null $portRanges **参数解释**：全端口监听，指定器端口监听范围（闭区间)，最多指定10个端口组，每个组范围不可有重叠部分。  **约束限制**： - 仅当protocol_port为0或未传入protocol_port时可以传入该字段。 - 仅TCP, UDP，TLS监听支持该字段。
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
    *  **参数解释**：监听器0-RTT能力开关。  **约束限制**：仅HTTPS类型监听器支持配置，需要依赖TLSv1.3安全策略协议。开启 ssl_early_data 后，有重放攻击的风险，请谨慎开启。  **取值范围**：true，false  **默认取值**：false
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
    * @param bool|null $sslEarlyDataEnable **参数解释**：监听器0-RTT能力开关。  **约束限制**：仅HTTPS类型监听器支持配置，需要依赖TLSv1.3安全策略协议。开启 ssl_early_data 后，有重放攻击的风险，请谨慎开启。  **取值范围**：true，false  **默认取值**：false
    *
    * @return $this
    */
    public function setSslEarlyDataEnable($sslEarlyDataEnable)
    {
        $this->container['sslEarlyDataEnable'] = $sslEarlyDataEnable;
        return $this;
    }

    /**
    * Gets cps
    *  **参数解释**：监听器新建限速。  **约束限制**：当该限速值大于LB的限速值时，以LB的限速值生效  **取值范围**：0-1000000  **默认取值**：0，表示不限速。
    *
    * @return int|null
    */
    public function getCps()
    {
        return $this->container['cps'];
    }

    /**
    * Sets cps
    *
    * @param int|null $cps **参数解释**：监听器新建限速。  **约束限制**：当该限速值大于LB的限速值时，以LB的限速值生效  **取值范围**：0-1000000  **默认取值**：0，表示不限速。
    *
    * @return $this
    */
    public function setCps($cps)
    {
        $this->container['cps'] = $cps;
        return $this;
    }

    /**
    * Gets connection
    *  **参数解释**：监听器并发限速  **约束限制**：当该限速值大于LB的限速值时，以LB的限速值生效  **取值范围**：0-1000000  **默认取值**：0，表示不限速。
    *
    * @return int|null
    */
    public function getConnection()
    {
        return $this->container['connection'];
    }

    /**
    * Sets connection
    *
    * @param int|null $connection **参数解释**：监听器并发限速  **约束限制**：当该限速值大于LB的限速值时，以LB的限速值生效  **取值范围**：0-1000000  **默认取值**：0，表示不限速。
    *
    * @return $this
    */
    public function setConnection($connection)
    {
        $this->container['connection'] = $connection;
        return $this;
    }

    /**
    * Gets nat64Enable
    *  **参数解释**：监听器地址转换能力开关，可以实现客户端通过访问LB的IPv4或者IPv6地址，来访问IPv4后端和IPv6后端。  **约束限制**：仅对于TCP、UDP协议类型的监听器生效，与transparent_client_ip_enable，获取客户端ip功能开关互斥，开启地址转换同时需要保证获取客户端ip功能关闭。  **取值范围**： - true：开启地址转换功能 - false：关闭地址转换功能  **默认取值**：false
    *
    * @return bool|null
    */
    public function getNat64Enable()
    {
        return $this->container['nat64Enable'];
    }

    /**
    * Sets nat64Enable
    *
    * @param bool|null $nat64Enable **参数解释**：监听器地址转换能力开关，可以实现客户端通过访问LB的IPv4或者IPv6地址，来访问IPv4后端和IPv6后端。  **约束限制**：仅对于TCP、UDP协议类型的监听器生效，与transparent_client_ip_enable，获取客户端ip功能开关互斥，开启地址转换同时需要保证获取客户端ip功能关闭。  **取值范围**： - true：开启地址转换功能 - false：关闭地址转换功能  **默认取值**：false
    *
    * @return $this
    */
    public function setNat64Enable($nat64Enable)
    {
        $this->container['nat64Enable'] = $nat64Enable;
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

