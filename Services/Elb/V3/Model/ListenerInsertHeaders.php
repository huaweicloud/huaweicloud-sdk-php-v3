<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListenerInsertHeaders implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListenerInsertHeaders';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xForwardedElbIp  **参数解释**：X-Forwarded-ELB-IP设为true可以将ELB实例的eip地址从报文的http头中带到后端服务器。
    * xForwardedPort  **参数解释**：X-Forwarded-Port设为true可以将ELB实例的监听端口从报文的http头中带到后端服务器。
    * xForwardedForPort  **参数解释**：X-Forwarded-For-Port设为true可以将客户端的源端口从报文的http头中带到后端服务器。
    * xForwardedHost  **参数解释**：X-Forwarded-Host设为true可以将客户请求头的X-Forwarded-Host设置为请求头的Host带到后端服务器。
    * xForwardedProto  **参数解释**：X-Forwarded-Proto设为true可以将负载均衡器实例的监听协议通过报文的http头带到后端服务器。
    * xRealIp  **参数解释**：X-Real-IP设为true可以将客户端的IP通过报文的http头带到后端服务器。
    * xForwardedElbId  **参数解释**：X-Forwarded-ELB-ID设为true可以将负载均衡器实例的ID通过报文的http头带到后端服务器。
    * xForwardedTlsCertificateId  **参数解释**：X-Forwarded-TLS-Certificate-ID设为true可以将负载均衡器实例的证书ID通过报文的http头带到后端服务器。
    * xForwardedTlsProtocol  **参数解释**：X-Forwarded-TLS-Protocol设为true可以将负载均衡器实例的算法协议通过报文的http头带到后端服务器。
    * xForwardedTlsCipher  **参数解释**：X-Forwarded-TLS-Cipher设为true可以将负载均衡器实例的算法套件通过报文的http头带到后端服务器。
    * xForwardedTlsProtocolAlias  **参数解释**：自定义X-Forwarded-TLS-Protocol头字段名称。  **约束限制**：只有当 X-Forwarded-TLS-Protocol 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedTlsCipherAlias  **参数解释**：自定义X-Forwarded-TLS-Cipher头字段名称。  **约束限制**：只有当 X-Forwarded-TLS-Cipher 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedForProcessingMode  **参数解释**：处理X-Forwarded-For头字段的模式： 配置 append，将请求发送至后端服务之前把最后一跳 IP 加入X-Forwarded-For头字段； 配置 remove，请求发送至后端服务之前删除X-Forwarded-For标头，无论请求是否携带X-Forwarded-For头字段； 配置preserve，保留请求中已有的X-Forwarded-For标头；  **约束限制**：仅HTTP、HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段；  **取值范围**：append、remove、preserve  **默认取值**：append
    * xForwardedClientcertSubjectdnEnable  **参数解释**：是否通过X-Forwarded-Clientcert-subjectdn头字段获取访问负载均衡实例客户端证书的所有者信息。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：true、false  **默认取值**：false
    * xForwardedClientcertSubjectdnAlias  **参数解释**：自定义X-Forwarded-Clientcert-subjectdn头字段名称。  **约束限制**：只有当 X-Forwarded-Clientcert-subjectdn-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedClientcertIssuerdnEnable  **参数解释**：是否通过X-Forwarded-Clientcert-issuerdn头字段获取访问负载均衡实例客户端证书的发行者信息。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：true、false  **默认取值**：false
    * xForwardedClientcertIssuerdnAlias  **参数解释**：自定义X-Forwarded-Clientcert-issuerdn头字段名称。  **约束限制**：只有当 X-Forwarded-Clientcert-issuerdn-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedClientcertFingerprintEnable  **参数解释**：是否通过X-Forwarded-Clientcert-fingerprint头字段获取访问负载均衡实例客户端证书的指纹取值。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：true、false  **默认取值**：false
    * xForwardedClientcertFingerprintAlias  **参数解释**：自定义X-Forwarded-Clientcert-fingerprint头字段名称。  **约束限制**：只有当 X-Forwarded-Clientcert-fingerprint-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedClientcertClientverifyEnable  **参数解释**：是否通过X-Forwarded-Clientcert-clientverify头字段获取对访问负载均衡实例客户端证书的校验结果。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：true、false  **默认取值**：false
    * xForwardedClientcertClientverifyAlias  **参数解释**：自定义X-Forwarded-Clientcert-clientverify头字段名称。  **约束限制**：只有当 X-Forwarded-Clientcert-clientverify-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedClientcertSerialnumberEnable  **参数解释**：是否通过X-Forwarded-Clientcert-serialnumber 头字段获取客户端证书的序列号信息。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：true、false  **默认取值**：false
    * xForwardedClientcertSerialnumberAlias  **参数解释**：自定义X-Forwarded-Clientcert-serialnumber头字段名称。  **约束限制**：只有当X-Forwarded-Clientcert-serialnumber-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedClientcertEnable  **参数解释**：是否通过X-Forwarded-Clientcert 头字段获取客户端证书的内容。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：true、false  **默认取值**：false
    * xForwardedClientcertAlias  **参数解释**：自定义X-Forwarded-Clientcert头字段名称。  **约束限制**：只有当X-Forwarded-Clientcert-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC、TLS协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedClientcertCiphersEnable  **参数解释**：是否通过X-Forwarded-Clientcert-ciphers 头字段获取客户端支持的TLS加密套件。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段。  **取值范围**：true、false  **默认取值**：false
    * xForwardedClientcertCiphersAlias  **参数解释**：自定义X-Forwarded-Clientcert-ciphers头字段名称。  **约束限制**：只有当X-Forwarded-Clientcert-ciphers-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedClientcertEndEnable  **参数解释**：是否通过X-Forwarded-Clientcert-end 头字段获取客户端证书的结束日期。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段。  **取值范围**：true、false  **默认取值**：false
    * xForwardedClientcertEndAlias  **参数解释**：自定义X-Forwarded-Clientcert-end头字段名称。  **约束限制**：只有当X-Forwarded-Clientcert-end-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC、TLS协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedTlsAlpnProtocolEnable  **参数解释**：是否通过X-Forwarded-Tls-Alpn-Protocol 头字段获取客户端和服务器之间ALPN（Application-Layer Protocol Negotiation）协商的应用层协议。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段。  **取值范围**：true、false  **默认取值**：false
    * xForwardedTlsAlpnProtocolAlias  **参数解释**：自定义X-Forwarded-Tls-Alpn-Protocol头字段名称。  **约束限制**：只有当X-Forwarded-Tls-Alpn-Protocol-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedTlsSniEnable  **参数解释**：是否通过X-Forwarded-Tls-Sni 头字段获取客户端访问的sni证书的域名。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段。  **取值范围**：true、false  **默认取值**：false
    * xForwardedTlsSniAlias  **参数解释**：自定义X-Forwarded-Tls-Sni头字段名称。  **约束限制**：只有当X-Forwarded-Tls-Sni-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedTlsJa3Enable  **参数解释**：是否通过X-Forwarded-Tls-Ja3头字段获取访问负载均衡实例客户端的ja3指纹。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段。  **取值范围**：true、false  **默认取值**：false
    * xForwardedTlsJa3Alias  **参数解释**：自定义X-Forwarded-Tls-Ja3头字段名称。  **约束限制**：只有当X-Forwarded-Tls-Ja3-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedTlsJa4Enable  **参数解释**：是否通过X-Forwarded-Tls-Ja4头字段获取访问负载均衡实例客户端的ja4指纹。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段。  **取值范围**：true、false  **默认取值**：false
    * xForwardedTlsJa4Alias  **参数解释**：自定义X-Forwarded-Tls-Ja4头字段名称。  **约束限制**：只有当X-Forwarded-Tls-Ja4-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xForwardedElbIp' => 'bool',
            'xForwardedPort' => 'bool',
            'xForwardedForPort' => 'bool',
            'xForwardedHost' => 'bool',
            'xForwardedProto' => 'bool',
            'xRealIp' => 'bool',
            'xForwardedElbId' => 'bool',
            'xForwardedTlsCertificateId' => 'bool',
            'xForwardedTlsProtocol' => 'bool',
            'xForwardedTlsCipher' => 'bool',
            'xForwardedTlsProtocolAlias' => 'string',
            'xForwardedTlsCipherAlias' => 'string',
            'xForwardedForProcessingMode' => 'string',
            'xForwardedClientcertSubjectdnEnable' => 'bool',
            'xForwardedClientcertSubjectdnAlias' => 'string',
            'xForwardedClientcertIssuerdnEnable' => 'bool',
            'xForwardedClientcertIssuerdnAlias' => 'string',
            'xForwardedClientcertFingerprintEnable' => 'bool',
            'xForwardedClientcertFingerprintAlias' => 'string',
            'xForwardedClientcertClientverifyEnable' => 'bool',
            'xForwardedClientcertClientverifyAlias' => 'string',
            'xForwardedClientcertSerialnumberEnable' => 'bool',
            'xForwardedClientcertSerialnumberAlias' => 'string',
            'xForwardedClientcertEnable' => 'bool',
            'xForwardedClientcertAlias' => 'string',
            'xForwardedClientcertCiphersEnable' => 'bool',
            'xForwardedClientcertCiphersAlias' => 'string',
            'xForwardedClientcertEndEnable' => 'bool',
            'xForwardedClientcertEndAlias' => 'string',
            'xForwardedTlsAlpnProtocolEnable' => 'bool',
            'xForwardedTlsAlpnProtocolAlias' => 'string',
            'xForwardedTlsSniEnable' => 'bool',
            'xForwardedTlsSniAlias' => 'string',
            'xForwardedTlsJa3Enable' => 'bool',
            'xForwardedTlsJa3Alias' => 'string',
            'xForwardedTlsJa4Enable' => 'bool',
            'xForwardedTlsJa4Alias' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xForwardedElbIp  **参数解释**：X-Forwarded-ELB-IP设为true可以将ELB实例的eip地址从报文的http头中带到后端服务器。
    * xForwardedPort  **参数解释**：X-Forwarded-Port设为true可以将ELB实例的监听端口从报文的http头中带到后端服务器。
    * xForwardedForPort  **参数解释**：X-Forwarded-For-Port设为true可以将客户端的源端口从报文的http头中带到后端服务器。
    * xForwardedHost  **参数解释**：X-Forwarded-Host设为true可以将客户请求头的X-Forwarded-Host设置为请求头的Host带到后端服务器。
    * xForwardedProto  **参数解释**：X-Forwarded-Proto设为true可以将负载均衡器实例的监听协议通过报文的http头带到后端服务器。
    * xRealIp  **参数解释**：X-Real-IP设为true可以将客户端的IP通过报文的http头带到后端服务器。
    * xForwardedElbId  **参数解释**：X-Forwarded-ELB-ID设为true可以将负载均衡器实例的ID通过报文的http头带到后端服务器。
    * xForwardedTlsCertificateId  **参数解释**：X-Forwarded-TLS-Certificate-ID设为true可以将负载均衡器实例的证书ID通过报文的http头带到后端服务器。
    * xForwardedTlsProtocol  **参数解释**：X-Forwarded-TLS-Protocol设为true可以将负载均衡器实例的算法协议通过报文的http头带到后端服务器。
    * xForwardedTlsCipher  **参数解释**：X-Forwarded-TLS-Cipher设为true可以将负载均衡器实例的算法套件通过报文的http头带到后端服务器。
    * xForwardedTlsProtocolAlias  **参数解释**：自定义X-Forwarded-TLS-Protocol头字段名称。  **约束限制**：只有当 X-Forwarded-TLS-Protocol 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedTlsCipherAlias  **参数解释**：自定义X-Forwarded-TLS-Cipher头字段名称。  **约束限制**：只有当 X-Forwarded-TLS-Cipher 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedForProcessingMode  **参数解释**：处理X-Forwarded-For头字段的模式： 配置 append，将请求发送至后端服务之前把最后一跳 IP 加入X-Forwarded-For头字段； 配置 remove，请求发送至后端服务之前删除X-Forwarded-For标头，无论请求是否携带X-Forwarded-For头字段； 配置preserve，保留请求中已有的X-Forwarded-For标头；  **约束限制**：仅HTTP、HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段；  **取值范围**：append、remove、preserve  **默认取值**：append
    * xForwardedClientcertSubjectdnEnable  **参数解释**：是否通过X-Forwarded-Clientcert-subjectdn头字段获取访问负载均衡实例客户端证书的所有者信息。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：true、false  **默认取值**：false
    * xForwardedClientcertSubjectdnAlias  **参数解释**：自定义X-Forwarded-Clientcert-subjectdn头字段名称。  **约束限制**：只有当 X-Forwarded-Clientcert-subjectdn-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedClientcertIssuerdnEnable  **参数解释**：是否通过X-Forwarded-Clientcert-issuerdn头字段获取访问负载均衡实例客户端证书的发行者信息。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：true、false  **默认取值**：false
    * xForwardedClientcertIssuerdnAlias  **参数解释**：自定义X-Forwarded-Clientcert-issuerdn头字段名称。  **约束限制**：只有当 X-Forwarded-Clientcert-issuerdn-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedClientcertFingerprintEnable  **参数解释**：是否通过X-Forwarded-Clientcert-fingerprint头字段获取访问负载均衡实例客户端证书的指纹取值。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：true、false  **默认取值**：false
    * xForwardedClientcertFingerprintAlias  **参数解释**：自定义X-Forwarded-Clientcert-fingerprint头字段名称。  **约束限制**：只有当 X-Forwarded-Clientcert-fingerprint-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedClientcertClientverifyEnable  **参数解释**：是否通过X-Forwarded-Clientcert-clientverify头字段获取对访问负载均衡实例客户端证书的校验结果。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：true、false  **默认取值**：false
    * xForwardedClientcertClientverifyAlias  **参数解释**：自定义X-Forwarded-Clientcert-clientverify头字段名称。  **约束限制**：只有当 X-Forwarded-Clientcert-clientverify-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedClientcertSerialnumberEnable  **参数解释**：是否通过X-Forwarded-Clientcert-serialnumber 头字段获取客户端证书的序列号信息。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：true、false  **默认取值**：false
    * xForwardedClientcertSerialnumberAlias  **参数解释**：自定义X-Forwarded-Clientcert-serialnumber头字段名称。  **约束限制**：只有当X-Forwarded-Clientcert-serialnumber-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedClientcertEnable  **参数解释**：是否通过X-Forwarded-Clientcert 头字段获取客户端证书的内容。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：true、false  **默认取值**：false
    * xForwardedClientcertAlias  **参数解释**：自定义X-Forwarded-Clientcert头字段名称。  **约束限制**：只有当X-Forwarded-Clientcert-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC、TLS协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedClientcertCiphersEnable  **参数解释**：是否通过X-Forwarded-Clientcert-ciphers 头字段获取客户端支持的TLS加密套件。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段。  **取值范围**：true、false  **默认取值**：false
    * xForwardedClientcertCiphersAlias  **参数解释**：自定义X-Forwarded-Clientcert-ciphers头字段名称。  **约束限制**：只有当X-Forwarded-Clientcert-ciphers-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedClientcertEndEnable  **参数解释**：是否通过X-Forwarded-Clientcert-end 头字段获取客户端证书的结束日期。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段。  **取值范围**：true、false  **默认取值**：false
    * xForwardedClientcertEndAlias  **参数解释**：自定义X-Forwarded-Clientcert-end头字段名称。  **约束限制**：只有当X-Forwarded-Clientcert-end-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC、TLS协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedTlsAlpnProtocolEnable  **参数解释**：是否通过X-Forwarded-Tls-Alpn-Protocol 头字段获取客户端和服务器之间ALPN（Application-Layer Protocol Negotiation）协商的应用层协议。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段。  **取值范围**：true、false  **默认取值**：false
    * xForwardedTlsAlpnProtocolAlias  **参数解释**：自定义X-Forwarded-Tls-Alpn-Protocol头字段名称。  **约束限制**：只有当X-Forwarded-Tls-Alpn-Protocol-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedTlsSniEnable  **参数解释**：是否通过X-Forwarded-Tls-Sni 头字段获取客户端访问的sni证书的域名。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段。  **取值范围**：true、false  **默认取值**：false
    * xForwardedTlsSniAlias  **参数解释**：自定义X-Forwarded-Tls-Sni头字段名称。  **约束限制**：只有当X-Forwarded-Tls-Sni-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedTlsJa3Enable  **参数解释**：是否通过X-Forwarded-Tls-Ja3头字段获取访问负载均衡实例客户端的ja3指纹。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段。  **取值范围**：true、false  **默认取值**：false
    * xForwardedTlsJa3Alias  **参数解释**：自定义X-Forwarded-Tls-Ja3头字段名称。  **约束限制**：只有当X-Forwarded-Tls-Ja3-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedTlsJa4Enable  **参数解释**：是否通过X-Forwarded-Tls-Ja4头字段获取访问负载均衡实例客户端的ja4指纹。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段。  **取值范围**：true、false  **默认取值**：false
    * xForwardedTlsJa4Alias  **参数解释**：自定义X-Forwarded-Tls-Ja4头字段名称。  **约束限制**：只有当X-Forwarded-Tls-Ja4-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xForwardedElbIp' => null,
        'xForwardedPort' => null,
        'xForwardedForPort' => null,
        'xForwardedHost' => null,
        'xForwardedProto' => null,
        'xRealIp' => null,
        'xForwardedElbId' => null,
        'xForwardedTlsCertificateId' => null,
        'xForwardedTlsProtocol' => null,
        'xForwardedTlsCipher' => null,
        'xForwardedTlsProtocolAlias' => null,
        'xForwardedTlsCipherAlias' => null,
        'xForwardedForProcessingMode' => null,
        'xForwardedClientcertSubjectdnEnable' => null,
        'xForwardedClientcertSubjectdnAlias' => null,
        'xForwardedClientcertIssuerdnEnable' => null,
        'xForwardedClientcertIssuerdnAlias' => null,
        'xForwardedClientcertFingerprintEnable' => null,
        'xForwardedClientcertFingerprintAlias' => null,
        'xForwardedClientcertClientverifyEnable' => null,
        'xForwardedClientcertClientverifyAlias' => null,
        'xForwardedClientcertSerialnumberEnable' => null,
        'xForwardedClientcertSerialnumberAlias' => null,
        'xForwardedClientcertEnable' => null,
        'xForwardedClientcertAlias' => null,
        'xForwardedClientcertCiphersEnable' => null,
        'xForwardedClientcertCiphersAlias' => null,
        'xForwardedClientcertEndEnable' => null,
        'xForwardedClientcertEndAlias' => null,
        'xForwardedTlsAlpnProtocolEnable' => null,
        'xForwardedTlsAlpnProtocolAlias' => null,
        'xForwardedTlsSniEnable' => null,
        'xForwardedTlsSniAlias' => null,
        'xForwardedTlsJa3Enable' => null,
        'xForwardedTlsJa3Alias' => null,
        'xForwardedTlsJa4Enable' => null,
        'xForwardedTlsJa4Alias' => null
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
    * xForwardedElbIp  **参数解释**：X-Forwarded-ELB-IP设为true可以将ELB实例的eip地址从报文的http头中带到后端服务器。
    * xForwardedPort  **参数解释**：X-Forwarded-Port设为true可以将ELB实例的监听端口从报文的http头中带到后端服务器。
    * xForwardedForPort  **参数解释**：X-Forwarded-For-Port设为true可以将客户端的源端口从报文的http头中带到后端服务器。
    * xForwardedHost  **参数解释**：X-Forwarded-Host设为true可以将客户请求头的X-Forwarded-Host设置为请求头的Host带到后端服务器。
    * xForwardedProto  **参数解释**：X-Forwarded-Proto设为true可以将负载均衡器实例的监听协议通过报文的http头带到后端服务器。
    * xRealIp  **参数解释**：X-Real-IP设为true可以将客户端的IP通过报文的http头带到后端服务器。
    * xForwardedElbId  **参数解释**：X-Forwarded-ELB-ID设为true可以将负载均衡器实例的ID通过报文的http头带到后端服务器。
    * xForwardedTlsCertificateId  **参数解释**：X-Forwarded-TLS-Certificate-ID设为true可以将负载均衡器实例的证书ID通过报文的http头带到后端服务器。
    * xForwardedTlsProtocol  **参数解释**：X-Forwarded-TLS-Protocol设为true可以将负载均衡器实例的算法协议通过报文的http头带到后端服务器。
    * xForwardedTlsCipher  **参数解释**：X-Forwarded-TLS-Cipher设为true可以将负载均衡器实例的算法套件通过报文的http头带到后端服务器。
    * xForwardedTlsProtocolAlias  **参数解释**：自定义X-Forwarded-TLS-Protocol头字段名称。  **约束限制**：只有当 X-Forwarded-TLS-Protocol 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedTlsCipherAlias  **参数解释**：自定义X-Forwarded-TLS-Cipher头字段名称。  **约束限制**：只有当 X-Forwarded-TLS-Cipher 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedForProcessingMode  **参数解释**：处理X-Forwarded-For头字段的模式： 配置 append，将请求发送至后端服务之前把最后一跳 IP 加入X-Forwarded-For头字段； 配置 remove，请求发送至后端服务之前删除X-Forwarded-For标头，无论请求是否携带X-Forwarded-For头字段； 配置preserve，保留请求中已有的X-Forwarded-For标头；  **约束限制**：仅HTTP、HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段；  **取值范围**：append、remove、preserve  **默认取值**：append
    * xForwardedClientcertSubjectdnEnable  **参数解释**：是否通过X-Forwarded-Clientcert-subjectdn头字段获取访问负载均衡实例客户端证书的所有者信息。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：true、false  **默认取值**：false
    * xForwardedClientcertSubjectdnAlias  **参数解释**：自定义X-Forwarded-Clientcert-subjectdn头字段名称。  **约束限制**：只有当 X-Forwarded-Clientcert-subjectdn-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedClientcertIssuerdnEnable  **参数解释**：是否通过X-Forwarded-Clientcert-issuerdn头字段获取访问负载均衡实例客户端证书的发行者信息。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：true、false  **默认取值**：false
    * xForwardedClientcertIssuerdnAlias  **参数解释**：自定义X-Forwarded-Clientcert-issuerdn头字段名称。  **约束限制**：只有当 X-Forwarded-Clientcert-issuerdn-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedClientcertFingerprintEnable  **参数解释**：是否通过X-Forwarded-Clientcert-fingerprint头字段获取访问负载均衡实例客户端证书的指纹取值。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：true、false  **默认取值**：false
    * xForwardedClientcertFingerprintAlias  **参数解释**：自定义X-Forwarded-Clientcert-fingerprint头字段名称。  **约束限制**：只有当 X-Forwarded-Clientcert-fingerprint-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedClientcertClientverifyEnable  **参数解释**：是否通过X-Forwarded-Clientcert-clientverify头字段获取对访问负载均衡实例客户端证书的校验结果。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：true、false  **默认取值**：false
    * xForwardedClientcertClientverifyAlias  **参数解释**：自定义X-Forwarded-Clientcert-clientverify头字段名称。  **约束限制**：只有当 X-Forwarded-Clientcert-clientverify-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedClientcertSerialnumberEnable  **参数解释**：是否通过X-Forwarded-Clientcert-serialnumber 头字段获取客户端证书的序列号信息。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：true、false  **默认取值**：false
    * xForwardedClientcertSerialnumberAlias  **参数解释**：自定义X-Forwarded-Clientcert-serialnumber头字段名称。  **约束限制**：只有当X-Forwarded-Clientcert-serialnumber-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedClientcertEnable  **参数解释**：是否通过X-Forwarded-Clientcert 头字段获取客户端证书的内容。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：true、false  **默认取值**：false
    * xForwardedClientcertAlias  **参数解释**：自定义X-Forwarded-Clientcert头字段名称。  **约束限制**：只有当X-Forwarded-Clientcert-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC、TLS协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedClientcertCiphersEnable  **参数解释**：是否通过X-Forwarded-Clientcert-ciphers 头字段获取客户端支持的TLS加密套件。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段。  **取值范围**：true、false  **默认取值**：false
    * xForwardedClientcertCiphersAlias  **参数解释**：自定义X-Forwarded-Clientcert-ciphers头字段名称。  **约束限制**：只有当X-Forwarded-Clientcert-ciphers-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedClientcertEndEnable  **参数解释**：是否通过X-Forwarded-Clientcert-end 头字段获取客户端证书的结束日期。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段。  **取值范围**：true、false  **默认取值**：false
    * xForwardedClientcertEndAlias  **参数解释**：自定义X-Forwarded-Clientcert-end头字段名称。  **约束限制**：只有当X-Forwarded-Clientcert-end-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC、TLS协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedTlsAlpnProtocolEnable  **参数解释**：是否通过X-Forwarded-Tls-Alpn-Protocol 头字段获取客户端和服务器之间ALPN（Application-Layer Protocol Negotiation）协商的应用层协议。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段。  **取值范围**：true、false  **默认取值**：false
    * xForwardedTlsAlpnProtocolAlias  **参数解释**：自定义X-Forwarded-Tls-Alpn-Protocol头字段名称。  **约束限制**：只有当X-Forwarded-Tls-Alpn-Protocol-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedTlsSniEnable  **参数解释**：是否通过X-Forwarded-Tls-Sni 头字段获取客户端访问的sni证书的域名。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段。  **取值范围**：true、false  **默认取值**：false
    * xForwardedTlsSniAlias  **参数解释**：自定义X-Forwarded-Tls-Sni头字段名称。  **约束限制**：只有当X-Forwarded-Tls-Sni-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedTlsJa3Enable  **参数解释**：是否通过X-Forwarded-Tls-Ja3头字段获取访问负载均衡实例客户端的ja3指纹。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段。  **取值范围**：true、false  **默认取值**：false
    * xForwardedTlsJa3Alias  **参数解释**：自定义X-Forwarded-Tls-Ja3头字段名称。  **约束限制**：只有当X-Forwarded-Tls-Ja3-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedTlsJa4Enable  **参数解释**：是否通过X-Forwarded-Tls-Ja4头字段获取访问负载均衡实例客户端的ja4指纹。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段。  **取值范围**：true、false  **默认取值**：false
    * xForwardedTlsJa4Alias  **参数解释**：自定义X-Forwarded-Tls-Ja4头字段名称。  **约束限制**：只有当X-Forwarded-Tls-Ja4-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xForwardedElbIp' => 'X-Forwarded-ELB-IP',
            'xForwardedPort' => 'X-Forwarded-Port',
            'xForwardedForPort' => 'X-Forwarded-For-Port',
            'xForwardedHost' => 'X-Forwarded-Host',
            'xForwardedProto' => 'X-Forwarded-Proto',
            'xRealIp' => 'X-Real-IP',
            'xForwardedElbId' => 'X-Forwarded-ELB-ID',
            'xForwardedTlsCertificateId' => 'X-Forwarded-TLS-Certificate-ID',
            'xForwardedTlsProtocol' => 'X-Forwarded-TLS-Protocol',
            'xForwardedTlsCipher' => 'X-Forwarded-TLS-Cipher',
            'xForwardedTlsProtocolAlias' => 'X-Forwarded-TLS-Protocol-alias',
            'xForwardedTlsCipherAlias' => 'X-Forwarded-TLS-Cipher-alias',
            'xForwardedForProcessingMode' => 'X-Forwarded-For-Processing-Mode',
            'xForwardedClientcertSubjectdnEnable' => 'X-Forwarded-Clientcert-subjectdn-enable',
            'xForwardedClientcertSubjectdnAlias' => 'X-Forwarded-Clientcert-subjectdn-alias',
            'xForwardedClientcertIssuerdnEnable' => 'X-Forwarded-Clientcert-issuerdn-enable',
            'xForwardedClientcertIssuerdnAlias' => 'X-Forwarded-Clientcert-issuerdn-alias',
            'xForwardedClientcertFingerprintEnable' => 'X-Forwarded-Clientcert-fingerprint-enable',
            'xForwardedClientcertFingerprintAlias' => 'X-Forwarded-Clientcert-fingerprint-alias',
            'xForwardedClientcertClientverifyEnable' => 'X-Forwarded-Clientcert-clientverify-enable',
            'xForwardedClientcertClientverifyAlias' => 'X-Forwarded-Clientcert-clientverify-alias',
            'xForwardedClientcertSerialnumberEnable' => 'X-Forwarded-Clientcert-serialnumber-enable',
            'xForwardedClientcertSerialnumberAlias' => 'X-Forwarded-Clientcert-serialnumber-alias',
            'xForwardedClientcertEnable' => 'X-Forwarded-Clientcert-enable',
            'xForwardedClientcertAlias' => 'X-Forwarded-Clientcert-alias',
            'xForwardedClientcertCiphersEnable' => 'X-Forwarded-Clientcert-ciphers-enable',
            'xForwardedClientcertCiphersAlias' => 'X-Forwarded-Clientcert-ciphers-alias',
            'xForwardedClientcertEndEnable' => 'X-Forwarded-Clientcert-end-enable',
            'xForwardedClientcertEndAlias' => 'X-Forwarded-Clientcert-end-alias',
            'xForwardedTlsAlpnProtocolEnable' => 'X-Forwarded-Tls-Alpn-Protocol-enable',
            'xForwardedTlsAlpnProtocolAlias' => 'X-Forwarded-Tls-Alpn-Protocol-alias',
            'xForwardedTlsSniEnable' => 'X-Forwarded-Tls-Sni-enable',
            'xForwardedTlsSniAlias' => 'X-Forwarded-Tls-Sni-alias',
            'xForwardedTlsJa3Enable' => 'X-Forwarded-Tls-Ja3-enable',
            'xForwardedTlsJa3Alias' => 'X-Forwarded-Tls-Ja3-alias',
            'xForwardedTlsJa4Enable' => 'X-Forwarded-Tls-Ja4-enable',
            'xForwardedTlsJa4Alias' => 'X-Forwarded-Tls-Ja4-alias'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xForwardedElbIp  **参数解释**：X-Forwarded-ELB-IP设为true可以将ELB实例的eip地址从报文的http头中带到后端服务器。
    * xForwardedPort  **参数解释**：X-Forwarded-Port设为true可以将ELB实例的监听端口从报文的http头中带到后端服务器。
    * xForwardedForPort  **参数解释**：X-Forwarded-For-Port设为true可以将客户端的源端口从报文的http头中带到后端服务器。
    * xForwardedHost  **参数解释**：X-Forwarded-Host设为true可以将客户请求头的X-Forwarded-Host设置为请求头的Host带到后端服务器。
    * xForwardedProto  **参数解释**：X-Forwarded-Proto设为true可以将负载均衡器实例的监听协议通过报文的http头带到后端服务器。
    * xRealIp  **参数解释**：X-Real-IP设为true可以将客户端的IP通过报文的http头带到后端服务器。
    * xForwardedElbId  **参数解释**：X-Forwarded-ELB-ID设为true可以将负载均衡器实例的ID通过报文的http头带到后端服务器。
    * xForwardedTlsCertificateId  **参数解释**：X-Forwarded-TLS-Certificate-ID设为true可以将负载均衡器实例的证书ID通过报文的http头带到后端服务器。
    * xForwardedTlsProtocol  **参数解释**：X-Forwarded-TLS-Protocol设为true可以将负载均衡器实例的算法协议通过报文的http头带到后端服务器。
    * xForwardedTlsCipher  **参数解释**：X-Forwarded-TLS-Cipher设为true可以将负载均衡器实例的算法套件通过报文的http头带到后端服务器。
    * xForwardedTlsProtocolAlias  **参数解释**：自定义X-Forwarded-TLS-Protocol头字段名称。  **约束限制**：只有当 X-Forwarded-TLS-Protocol 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedTlsCipherAlias  **参数解释**：自定义X-Forwarded-TLS-Cipher头字段名称。  **约束限制**：只有当 X-Forwarded-TLS-Cipher 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedForProcessingMode  **参数解释**：处理X-Forwarded-For头字段的模式： 配置 append，将请求发送至后端服务之前把最后一跳 IP 加入X-Forwarded-For头字段； 配置 remove，请求发送至后端服务之前删除X-Forwarded-For标头，无论请求是否携带X-Forwarded-For头字段； 配置preserve，保留请求中已有的X-Forwarded-For标头；  **约束限制**：仅HTTP、HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段；  **取值范围**：append、remove、preserve  **默认取值**：append
    * xForwardedClientcertSubjectdnEnable  **参数解释**：是否通过X-Forwarded-Clientcert-subjectdn头字段获取访问负载均衡实例客户端证书的所有者信息。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：true、false  **默认取值**：false
    * xForwardedClientcertSubjectdnAlias  **参数解释**：自定义X-Forwarded-Clientcert-subjectdn头字段名称。  **约束限制**：只有当 X-Forwarded-Clientcert-subjectdn-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedClientcertIssuerdnEnable  **参数解释**：是否通过X-Forwarded-Clientcert-issuerdn头字段获取访问负载均衡实例客户端证书的发行者信息。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：true、false  **默认取值**：false
    * xForwardedClientcertIssuerdnAlias  **参数解释**：自定义X-Forwarded-Clientcert-issuerdn头字段名称。  **约束限制**：只有当 X-Forwarded-Clientcert-issuerdn-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedClientcertFingerprintEnable  **参数解释**：是否通过X-Forwarded-Clientcert-fingerprint头字段获取访问负载均衡实例客户端证书的指纹取值。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：true、false  **默认取值**：false
    * xForwardedClientcertFingerprintAlias  **参数解释**：自定义X-Forwarded-Clientcert-fingerprint头字段名称。  **约束限制**：只有当 X-Forwarded-Clientcert-fingerprint-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedClientcertClientverifyEnable  **参数解释**：是否通过X-Forwarded-Clientcert-clientverify头字段获取对访问负载均衡实例客户端证书的校验结果。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：true、false  **默认取值**：false
    * xForwardedClientcertClientverifyAlias  **参数解释**：自定义X-Forwarded-Clientcert-clientverify头字段名称。  **约束限制**：只有当 X-Forwarded-Clientcert-clientverify-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedClientcertSerialnumberEnable  **参数解释**：是否通过X-Forwarded-Clientcert-serialnumber 头字段获取客户端证书的序列号信息。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：true、false  **默认取值**：false
    * xForwardedClientcertSerialnumberAlias  **参数解释**：自定义X-Forwarded-Clientcert-serialnumber头字段名称。  **约束限制**：只有当X-Forwarded-Clientcert-serialnumber-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedClientcertEnable  **参数解释**：是否通过X-Forwarded-Clientcert 头字段获取客户端证书的内容。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：true、false  **默认取值**：false
    * xForwardedClientcertAlias  **参数解释**：自定义X-Forwarded-Clientcert头字段名称。  **约束限制**：只有当X-Forwarded-Clientcert-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC、TLS协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedClientcertCiphersEnable  **参数解释**：是否通过X-Forwarded-Clientcert-ciphers 头字段获取客户端支持的TLS加密套件。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段。  **取值范围**：true、false  **默认取值**：false
    * xForwardedClientcertCiphersAlias  **参数解释**：自定义X-Forwarded-Clientcert-ciphers头字段名称。  **约束限制**：只有当X-Forwarded-Clientcert-ciphers-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedClientcertEndEnable  **参数解释**：是否通过X-Forwarded-Clientcert-end 头字段获取客户端证书的结束日期。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段。  **取值范围**：true、false  **默认取值**：false
    * xForwardedClientcertEndAlias  **参数解释**：自定义X-Forwarded-Clientcert-end头字段名称。  **约束限制**：只有当X-Forwarded-Clientcert-end-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC、TLS协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedTlsAlpnProtocolEnable  **参数解释**：是否通过X-Forwarded-Tls-Alpn-Protocol 头字段获取客户端和服务器之间ALPN（Application-Layer Protocol Negotiation）协商的应用层协议。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段。  **取值范围**：true、false  **默认取值**：false
    * xForwardedTlsAlpnProtocolAlias  **参数解释**：自定义X-Forwarded-Tls-Alpn-Protocol头字段名称。  **约束限制**：只有当X-Forwarded-Tls-Alpn-Protocol-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedTlsSniEnable  **参数解释**：是否通过X-Forwarded-Tls-Sni 头字段获取客户端访问的sni证书的域名。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段。  **取值范围**：true、false  **默认取值**：false
    * xForwardedTlsSniAlias  **参数解释**：自定义X-Forwarded-Tls-Sni头字段名称。  **约束限制**：只有当X-Forwarded-Tls-Sni-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedTlsJa3Enable  **参数解释**：是否通过X-Forwarded-Tls-Ja3头字段获取访问负载均衡实例客户端的ja3指纹。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段。  **取值范围**：true、false  **默认取值**：false
    * xForwardedTlsJa3Alias  **参数解释**：自定义X-Forwarded-Tls-Ja3头字段名称。  **约束限制**：只有当X-Forwarded-Tls-Ja3-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedTlsJa4Enable  **参数解释**：是否通过X-Forwarded-Tls-Ja4头字段获取访问负载均衡实例客户端的ja4指纹。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段。  **取值范围**：true、false  **默认取值**：false
    * xForwardedTlsJa4Alias  **参数解释**：自定义X-Forwarded-Tls-Ja4头字段名称。  **约束限制**：只有当X-Forwarded-Tls-Ja4-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    *
    * @var string[]
    */
    protected static $setters = [
            'xForwardedElbIp' => 'setXForwardedElbIp',
            'xForwardedPort' => 'setXForwardedPort',
            'xForwardedForPort' => 'setXForwardedForPort',
            'xForwardedHost' => 'setXForwardedHost',
            'xForwardedProto' => 'setXForwardedProto',
            'xRealIp' => 'setXRealIp',
            'xForwardedElbId' => 'setXForwardedElbId',
            'xForwardedTlsCertificateId' => 'setXForwardedTlsCertificateId',
            'xForwardedTlsProtocol' => 'setXForwardedTlsProtocol',
            'xForwardedTlsCipher' => 'setXForwardedTlsCipher',
            'xForwardedTlsProtocolAlias' => 'setXForwardedTlsProtocolAlias',
            'xForwardedTlsCipherAlias' => 'setXForwardedTlsCipherAlias',
            'xForwardedForProcessingMode' => 'setXForwardedForProcessingMode',
            'xForwardedClientcertSubjectdnEnable' => 'setXForwardedClientcertSubjectdnEnable',
            'xForwardedClientcertSubjectdnAlias' => 'setXForwardedClientcertSubjectdnAlias',
            'xForwardedClientcertIssuerdnEnable' => 'setXForwardedClientcertIssuerdnEnable',
            'xForwardedClientcertIssuerdnAlias' => 'setXForwardedClientcertIssuerdnAlias',
            'xForwardedClientcertFingerprintEnable' => 'setXForwardedClientcertFingerprintEnable',
            'xForwardedClientcertFingerprintAlias' => 'setXForwardedClientcertFingerprintAlias',
            'xForwardedClientcertClientverifyEnable' => 'setXForwardedClientcertClientverifyEnable',
            'xForwardedClientcertClientverifyAlias' => 'setXForwardedClientcertClientverifyAlias',
            'xForwardedClientcertSerialnumberEnable' => 'setXForwardedClientcertSerialnumberEnable',
            'xForwardedClientcertSerialnumberAlias' => 'setXForwardedClientcertSerialnumberAlias',
            'xForwardedClientcertEnable' => 'setXForwardedClientcertEnable',
            'xForwardedClientcertAlias' => 'setXForwardedClientcertAlias',
            'xForwardedClientcertCiphersEnable' => 'setXForwardedClientcertCiphersEnable',
            'xForwardedClientcertCiphersAlias' => 'setXForwardedClientcertCiphersAlias',
            'xForwardedClientcertEndEnable' => 'setXForwardedClientcertEndEnable',
            'xForwardedClientcertEndAlias' => 'setXForwardedClientcertEndAlias',
            'xForwardedTlsAlpnProtocolEnable' => 'setXForwardedTlsAlpnProtocolEnable',
            'xForwardedTlsAlpnProtocolAlias' => 'setXForwardedTlsAlpnProtocolAlias',
            'xForwardedTlsSniEnable' => 'setXForwardedTlsSniEnable',
            'xForwardedTlsSniAlias' => 'setXForwardedTlsSniAlias',
            'xForwardedTlsJa3Enable' => 'setXForwardedTlsJa3Enable',
            'xForwardedTlsJa3Alias' => 'setXForwardedTlsJa3Alias',
            'xForwardedTlsJa4Enable' => 'setXForwardedTlsJa4Enable',
            'xForwardedTlsJa4Alias' => 'setXForwardedTlsJa4Alias'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xForwardedElbIp  **参数解释**：X-Forwarded-ELB-IP设为true可以将ELB实例的eip地址从报文的http头中带到后端服务器。
    * xForwardedPort  **参数解释**：X-Forwarded-Port设为true可以将ELB实例的监听端口从报文的http头中带到后端服务器。
    * xForwardedForPort  **参数解释**：X-Forwarded-For-Port设为true可以将客户端的源端口从报文的http头中带到后端服务器。
    * xForwardedHost  **参数解释**：X-Forwarded-Host设为true可以将客户请求头的X-Forwarded-Host设置为请求头的Host带到后端服务器。
    * xForwardedProto  **参数解释**：X-Forwarded-Proto设为true可以将负载均衡器实例的监听协议通过报文的http头带到后端服务器。
    * xRealIp  **参数解释**：X-Real-IP设为true可以将客户端的IP通过报文的http头带到后端服务器。
    * xForwardedElbId  **参数解释**：X-Forwarded-ELB-ID设为true可以将负载均衡器实例的ID通过报文的http头带到后端服务器。
    * xForwardedTlsCertificateId  **参数解释**：X-Forwarded-TLS-Certificate-ID设为true可以将负载均衡器实例的证书ID通过报文的http头带到后端服务器。
    * xForwardedTlsProtocol  **参数解释**：X-Forwarded-TLS-Protocol设为true可以将负载均衡器实例的算法协议通过报文的http头带到后端服务器。
    * xForwardedTlsCipher  **参数解释**：X-Forwarded-TLS-Cipher设为true可以将负载均衡器实例的算法套件通过报文的http头带到后端服务器。
    * xForwardedTlsProtocolAlias  **参数解释**：自定义X-Forwarded-TLS-Protocol头字段名称。  **约束限制**：只有当 X-Forwarded-TLS-Protocol 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedTlsCipherAlias  **参数解释**：自定义X-Forwarded-TLS-Cipher头字段名称。  **约束限制**：只有当 X-Forwarded-TLS-Cipher 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedForProcessingMode  **参数解释**：处理X-Forwarded-For头字段的模式： 配置 append，将请求发送至后端服务之前把最后一跳 IP 加入X-Forwarded-For头字段； 配置 remove，请求发送至后端服务之前删除X-Forwarded-For标头，无论请求是否携带X-Forwarded-For头字段； 配置preserve，保留请求中已有的X-Forwarded-For标头；  **约束限制**：仅HTTP、HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段；  **取值范围**：append、remove、preserve  **默认取值**：append
    * xForwardedClientcertSubjectdnEnable  **参数解释**：是否通过X-Forwarded-Clientcert-subjectdn头字段获取访问负载均衡实例客户端证书的所有者信息。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：true、false  **默认取值**：false
    * xForwardedClientcertSubjectdnAlias  **参数解释**：自定义X-Forwarded-Clientcert-subjectdn头字段名称。  **约束限制**：只有当 X-Forwarded-Clientcert-subjectdn-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedClientcertIssuerdnEnable  **参数解释**：是否通过X-Forwarded-Clientcert-issuerdn头字段获取访问负载均衡实例客户端证书的发行者信息。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：true、false  **默认取值**：false
    * xForwardedClientcertIssuerdnAlias  **参数解释**：自定义X-Forwarded-Clientcert-issuerdn头字段名称。  **约束限制**：只有当 X-Forwarded-Clientcert-issuerdn-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedClientcertFingerprintEnable  **参数解释**：是否通过X-Forwarded-Clientcert-fingerprint头字段获取访问负载均衡实例客户端证书的指纹取值。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：true、false  **默认取值**：false
    * xForwardedClientcertFingerprintAlias  **参数解释**：自定义X-Forwarded-Clientcert-fingerprint头字段名称。  **约束限制**：只有当 X-Forwarded-Clientcert-fingerprint-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedClientcertClientverifyEnable  **参数解释**：是否通过X-Forwarded-Clientcert-clientverify头字段获取对访问负载均衡实例客户端证书的校验结果。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：true、false  **默认取值**：false
    * xForwardedClientcertClientverifyAlias  **参数解释**：自定义X-Forwarded-Clientcert-clientverify头字段名称。  **约束限制**：只有当 X-Forwarded-Clientcert-clientverify-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedClientcertSerialnumberEnable  **参数解释**：是否通过X-Forwarded-Clientcert-serialnumber 头字段获取客户端证书的序列号信息。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：true、false  **默认取值**：false
    * xForwardedClientcertSerialnumberAlias  **参数解释**：自定义X-Forwarded-Clientcert-serialnumber头字段名称。  **约束限制**：只有当X-Forwarded-Clientcert-serialnumber-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedClientcertEnable  **参数解释**：是否通过X-Forwarded-Clientcert 头字段获取客户端证书的内容。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：true、false  **默认取值**：false
    * xForwardedClientcertAlias  **参数解释**：自定义X-Forwarded-Clientcert头字段名称。  **约束限制**：只有当X-Forwarded-Clientcert-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC、TLS协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedClientcertCiphersEnable  **参数解释**：是否通过X-Forwarded-Clientcert-ciphers 头字段获取客户端支持的TLS加密套件。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段。  **取值范围**：true、false  **默认取值**：false
    * xForwardedClientcertCiphersAlias  **参数解释**：自定义X-Forwarded-Clientcert-ciphers头字段名称。  **约束限制**：只有当X-Forwarded-Clientcert-ciphers-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedClientcertEndEnable  **参数解释**：是否通过X-Forwarded-Clientcert-end 头字段获取客户端证书的结束日期。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段。  **取值范围**：true、false  **默认取值**：false
    * xForwardedClientcertEndAlias  **参数解释**：自定义X-Forwarded-Clientcert-end头字段名称。  **约束限制**：只有当X-Forwarded-Clientcert-end-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC、TLS协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedTlsAlpnProtocolEnable  **参数解释**：是否通过X-Forwarded-Tls-Alpn-Protocol 头字段获取客户端和服务器之间ALPN（Application-Layer Protocol Negotiation）协商的应用层协议。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段。  **取值范围**：true、false  **默认取值**：false
    * xForwardedTlsAlpnProtocolAlias  **参数解释**：自定义X-Forwarded-Tls-Alpn-Protocol头字段名称。  **约束限制**：只有当X-Forwarded-Tls-Alpn-Protocol-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedTlsSniEnable  **参数解释**：是否通过X-Forwarded-Tls-Sni 头字段获取客户端访问的sni证书的域名。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段。  **取值范围**：true、false  **默认取值**：false
    * xForwardedTlsSniAlias  **参数解释**：自定义X-Forwarded-Tls-Sni头字段名称。  **约束限制**：只有当X-Forwarded-Tls-Sni-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedTlsJa3Enable  **参数解释**：是否通过X-Forwarded-Tls-Ja3头字段获取访问负载均衡实例客户端的ja3指纹。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段。  **取值范围**：true、false  **默认取值**：false
    * xForwardedTlsJa3Alias  **参数解释**：自定义X-Forwarded-Tls-Ja3头字段名称。  **约束限制**：只有当X-Forwarded-Tls-Ja3-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    * xForwardedTlsJa4Enable  **参数解释**：是否通过X-Forwarded-Tls-Ja4头字段获取访问负载均衡实例客户端的ja4指纹。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段。  **取值范围**：true、false  **默认取值**：false
    * xForwardedTlsJa4Alias  **参数解释**：自定义X-Forwarded-Tls-Ja4头字段名称。  **约束限制**：只有当X-Forwarded-Tls-Ja4-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    *
    * @var string[]
    */
    protected static $getters = [
            'xForwardedElbIp' => 'getXForwardedElbIp',
            'xForwardedPort' => 'getXForwardedPort',
            'xForwardedForPort' => 'getXForwardedForPort',
            'xForwardedHost' => 'getXForwardedHost',
            'xForwardedProto' => 'getXForwardedProto',
            'xRealIp' => 'getXRealIp',
            'xForwardedElbId' => 'getXForwardedElbId',
            'xForwardedTlsCertificateId' => 'getXForwardedTlsCertificateId',
            'xForwardedTlsProtocol' => 'getXForwardedTlsProtocol',
            'xForwardedTlsCipher' => 'getXForwardedTlsCipher',
            'xForwardedTlsProtocolAlias' => 'getXForwardedTlsProtocolAlias',
            'xForwardedTlsCipherAlias' => 'getXForwardedTlsCipherAlias',
            'xForwardedForProcessingMode' => 'getXForwardedForProcessingMode',
            'xForwardedClientcertSubjectdnEnable' => 'getXForwardedClientcertSubjectdnEnable',
            'xForwardedClientcertSubjectdnAlias' => 'getXForwardedClientcertSubjectdnAlias',
            'xForwardedClientcertIssuerdnEnable' => 'getXForwardedClientcertIssuerdnEnable',
            'xForwardedClientcertIssuerdnAlias' => 'getXForwardedClientcertIssuerdnAlias',
            'xForwardedClientcertFingerprintEnable' => 'getXForwardedClientcertFingerprintEnable',
            'xForwardedClientcertFingerprintAlias' => 'getXForwardedClientcertFingerprintAlias',
            'xForwardedClientcertClientverifyEnable' => 'getXForwardedClientcertClientverifyEnable',
            'xForwardedClientcertClientverifyAlias' => 'getXForwardedClientcertClientverifyAlias',
            'xForwardedClientcertSerialnumberEnable' => 'getXForwardedClientcertSerialnumberEnable',
            'xForwardedClientcertSerialnumberAlias' => 'getXForwardedClientcertSerialnumberAlias',
            'xForwardedClientcertEnable' => 'getXForwardedClientcertEnable',
            'xForwardedClientcertAlias' => 'getXForwardedClientcertAlias',
            'xForwardedClientcertCiphersEnable' => 'getXForwardedClientcertCiphersEnable',
            'xForwardedClientcertCiphersAlias' => 'getXForwardedClientcertCiphersAlias',
            'xForwardedClientcertEndEnable' => 'getXForwardedClientcertEndEnable',
            'xForwardedClientcertEndAlias' => 'getXForwardedClientcertEndAlias',
            'xForwardedTlsAlpnProtocolEnable' => 'getXForwardedTlsAlpnProtocolEnable',
            'xForwardedTlsAlpnProtocolAlias' => 'getXForwardedTlsAlpnProtocolAlias',
            'xForwardedTlsSniEnable' => 'getXForwardedTlsSniEnable',
            'xForwardedTlsSniAlias' => 'getXForwardedTlsSniAlias',
            'xForwardedTlsJa3Enable' => 'getXForwardedTlsJa3Enable',
            'xForwardedTlsJa3Alias' => 'getXForwardedTlsJa3Alias',
            'xForwardedTlsJa4Enable' => 'getXForwardedTlsJa4Enable',
            'xForwardedTlsJa4Alias' => 'getXForwardedTlsJa4Alias'
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
    const X_FORWARDED_FOR_PROCESSING_MODE_APPENDREMOVEPRESERVE = 'append、remove、preserve';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getXForwardedForProcessingModeAllowableValues()
    {
        return [
            self::X_FORWARDED_FOR_PROCESSING_MODE_APPENDREMOVEPRESERVE,
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
        $this->container['xForwardedElbIp'] = isset($data['xForwardedElbIp']) ? $data['xForwardedElbIp'] : null;
        $this->container['xForwardedPort'] = isset($data['xForwardedPort']) ? $data['xForwardedPort'] : null;
        $this->container['xForwardedForPort'] = isset($data['xForwardedForPort']) ? $data['xForwardedForPort'] : null;
        $this->container['xForwardedHost'] = isset($data['xForwardedHost']) ? $data['xForwardedHost'] : null;
        $this->container['xForwardedProto'] = isset($data['xForwardedProto']) ? $data['xForwardedProto'] : null;
        $this->container['xRealIp'] = isset($data['xRealIp']) ? $data['xRealIp'] : null;
        $this->container['xForwardedElbId'] = isset($data['xForwardedElbId']) ? $data['xForwardedElbId'] : null;
        $this->container['xForwardedTlsCertificateId'] = isset($data['xForwardedTlsCertificateId']) ? $data['xForwardedTlsCertificateId'] : null;
        $this->container['xForwardedTlsProtocol'] = isset($data['xForwardedTlsProtocol']) ? $data['xForwardedTlsProtocol'] : null;
        $this->container['xForwardedTlsCipher'] = isset($data['xForwardedTlsCipher']) ? $data['xForwardedTlsCipher'] : null;
        $this->container['xForwardedTlsProtocolAlias'] = isset($data['xForwardedTlsProtocolAlias']) ? $data['xForwardedTlsProtocolAlias'] : null;
        $this->container['xForwardedTlsCipherAlias'] = isset($data['xForwardedTlsCipherAlias']) ? $data['xForwardedTlsCipherAlias'] : null;
        $this->container['xForwardedForProcessingMode'] = isset($data['xForwardedForProcessingMode']) ? $data['xForwardedForProcessingMode'] : null;
        $this->container['xForwardedClientcertSubjectdnEnable'] = isset($data['xForwardedClientcertSubjectdnEnable']) ? $data['xForwardedClientcertSubjectdnEnable'] : null;
        $this->container['xForwardedClientcertSubjectdnAlias'] = isset($data['xForwardedClientcertSubjectdnAlias']) ? $data['xForwardedClientcertSubjectdnAlias'] : null;
        $this->container['xForwardedClientcertIssuerdnEnable'] = isset($data['xForwardedClientcertIssuerdnEnable']) ? $data['xForwardedClientcertIssuerdnEnable'] : null;
        $this->container['xForwardedClientcertIssuerdnAlias'] = isset($data['xForwardedClientcertIssuerdnAlias']) ? $data['xForwardedClientcertIssuerdnAlias'] : null;
        $this->container['xForwardedClientcertFingerprintEnable'] = isset($data['xForwardedClientcertFingerprintEnable']) ? $data['xForwardedClientcertFingerprintEnable'] : null;
        $this->container['xForwardedClientcertFingerprintAlias'] = isset($data['xForwardedClientcertFingerprintAlias']) ? $data['xForwardedClientcertFingerprintAlias'] : null;
        $this->container['xForwardedClientcertClientverifyEnable'] = isset($data['xForwardedClientcertClientverifyEnable']) ? $data['xForwardedClientcertClientverifyEnable'] : null;
        $this->container['xForwardedClientcertClientverifyAlias'] = isset($data['xForwardedClientcertClientverifyAlias']) ? $data['xForwardedClientcertClientverifyAlias'] : null;
        $this->container['xForwardedClientcertSerialnumberEnable'] = isset($data['xForwardedClientcertSerialnumberEnable']) ? $data['xForwardedClientcertSerialnumberEnable'] : null;
        $this->container['xForwardedClientcertSerialnumberAlias'] = isset($data['xForwardedClientcertSerialnumberAlias']) ? $data['xForwardedClientcertSerialnumberAlias'] : null;
        $this->container['xForwardedClientcertEnable'] = isset($data['xForwardedClientcertEnable']) ? $data['xForwardedClientcertEnable'] : null;
        $this->container['xForwardedClientcertAlias'] = isset($data['xForwardedClientcertAlias']) ? $data['xForwardedClientcertAlias'] : null;
        $this->container['xForwardedClientcertCiphersEnable'] = isset($data['xForwardedClientcertCiphersEnable']) ? $data['xForwardedClientcertCiphersEnable'] : null;
        $this->container['xForwardedClientcertCiphersAlias'] = isset($data['xForwardedClientcertCiphersAlias']) ? $data['xForwardedClientcertCiphersAlias'] : null;
        $this->container['xForwardedClientcertEndEnable'] = isset($data['xForwardedClientcertEndEnable']) ? $data['xForwardedClientcertEndEnable'] : null;
        $this->container['xForwardedClientcertEndAlias'] = isset($data['xForwardedClientcertEndAlias']) ? $data['xForwardedClientcertEndAlias'] : null;
        $this->container['xForwardedTlsAlpnProtocolEnable'] = isset($data['xForwardedTlsAlpnProtocolEnable']) ? $data['xForwardedTlsAlpnProtocolEnable'] : null;
        $this->container['xForwardedTlsAlpnProtocolAlias'] = isset($data['xForwardedTlsAlpnProtocolAlias']) ? $data['xForwardedTlsAlpnProtocolAlias'] : null;
        $this->container['xForwardedTlsSniEnable'] = isset($data['xForwardedTlsSniEnable']) ? $data['xForwardedTlsSniEnable'] : null;
        $this->container['xForwardedTlsSniAlias'] = isset($data['xForwardedTlsSniAlias']) ? $data['xForwardedTlsSniAlias'] : null;
        $this->container['xForwardedTlsJa3Enable'] = isset($data['xForwardedTlsJa3Enable']) ? $data['xForwardedTlsJa3Enable'] : null;
        $this->container['xForwardedTlsJa3Alias'] = isset($data['xForwardedTlsJa3Alias']) ? $data['xForwardedTlsJa3Alias'] : null;
        $this->container['xForwardedTlsJa4Enable'] = isset($data['xForwardedTlsJa4Enable']) ? $data['xForwardedTlsJa4Enable'] : null;
        $this->container['xForwardedTlsJa4Alias'] = isset($data['xForwardedTlsJa4Alias']) ? $data['xForwardedTlsJa4Alias'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getXForwardedForProcessingModeAllowableValues();
                if (!is_null($this->container['xForwardedForProcessingMode']) && !in_array($this->container['xForwardedForProcessingMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'xForwardedForProcessingMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets xForwardedElbIp
    *  **参数解释**：X-Forwarded-ELB-IP设为true可以将ELB实例的eip地址从报文的http头中带到后端服务器。
    *
    * @return bool|null
    */
    public function getXForwardedElbIp()
    {
        return $this->container['xForwardedElbIp'];
    }

    /**
    * Sets xForwardedElbIp
    *
    * @param bool|null $xForwardedElbIp **参数解释**：X-Forwarded-ELB-IP设为true可以将ELB实例的eip地址从报文的http头中带到后端服务器。
    *
    * @return $this
    */
    public function setXForwardedElbIp($xForwardedElbIp)
    {
        $this->container['xForwardedElbIp'] = $xForwardedElbIp;
        return $this;
    }

    /**
    * Gets xForwardedPort
    *  **参数解释**：X-Forwarded-Port设为true可以将ELB实例的监听端口从报文的http头中带到后端服务器。
    *
    * @return bool|null
    */
    public function getXForwardedPort()
    {
        return $this->container['xForwardedPort'];
    }

    /**
    * Sets xForwardedPort
    *
    * @param bool|null $xForwardedPort **参数解释**：X-Forwarded-Port设为true可以将ELB实例的监听端口从报文的http头中带到后端服务器。
    *
    * @return $this
    */
    public function setXForwardedPort($xForwardedPort)
    {
        $this->container['xForwardedPort'] = $xForwardedPort;
        return $this;
    }

    /**
    * Gets xForwardedForPort
    *  **参数解释**：X-Forwarded-For-Port设为true可以将客户端的源端口从报文的http头中带到后端服务器。
    *
    * @return bool|null
    */
    public function getXForwardedForPort()
    {
        return $this->container['xForwardedForPort'];
    }

    /**
    * Sets xForwardedForPort
    *
    * @param bool|null $xForwardedForPort **参数解释**：X-Forwarded-For-Port设为true可以将客户端的源端口从报文的http头中带到后端服务器。
    *
    * @return $this
    */
    public function setXForwardedForPort($xForwardedForPort)
    {
        $this->container['xForwardedForPort'] = $xForwardedForPort;
        return $this;
    }

    /**
    * Gets xForwardedHost
    *  **参数解释**：X-Forwarded-Host设为true可以将客户请求头的X-Forwarded-Host设置为请求头的Host带到后端服务器。
    *
    * @return bool|null
    */
    public function getXForwardedHost()
    {
        return $this->container['xForwardedHost'];
    }

    /**
    * Sets xForwardedHost
    *
    * @param bool|null $xForwardedHost **参数解释**：X-Forwarded-Host设为true可以将客户请求头的X-Forwarded-Host设置为请求头的Host带到后端服务器。
    *
    * @return $this
    */
    public function setXForwardedHost($xForwardedHost)
    {
        $this->container['xForwardedHost'] = $xForwardedHost;
        return $this;
    }

    /**
    * Gets xForwardedProto
    *  **参数解释**：X-Forwarded-Proto设为true可以将负载均衡器实例的监听协议通过报文的http头带到后端服务器。
    *
    * @return bool|null
    */
    public function getXForwardedProto()
    {
        return $this->container['xForwardedProto'];
    }

    /**
    * Sets xForwardedProto
    *
    * @param bool|null $xForwardedProto **参数解释**：X-Forwarded-Proto设为true可以将负载均衡器实例的监听协议通过报文的http头带到后端服务器。
    *
    * @return $this
    */
    public function setXForwardedProto($xForwardedProto)
    {
        $this->container['xForwardedProto'] = $xForwardedProto;
        return $this;
    }

    /**
    * Gets xRealIp
    *  **参数解释**：X-Real-IP设为true可以将客户端的IP通过报文的http头带到后端服务器。
    *
    * @return bool|null
    */
    public function getXRealIp()
    {
        return $this->container['xRealIp'];
    }

    /**
    * Sets xRealIp
    *
    * @param bool|null $xRealIp **参数解释**：X-Real-IP设为true可以将客户端的IP通过报文的http头带到后端服务器。
    *
    * @return $this
    */
    public function setXRealIp($xRealIp)
    {
        $this->container['xRealIp'] = $xRealIp;
        return $this;
    }

    /**
    * Gets xForwardedElbId
    *  **参数解释**：X-Forwarded-ELB-ID设为true可以将负载均衡器实例的ID通过报文的http头带到后端服务器。
    *
    * @return bool|null
    */
    public function getXForwardedElbId()
    {
        return $this->container['xForwardedElbId'];
    }

    /**
    * Sets xForwardedElbId
    *
    * @param bool|null $xForwardedElbId **参数解释**：X-Forwarded-ELB-ID设为true可以将负载均衡器实例的ID通过报文的http头带到后端服务器。
    *
    * @return $this
    */
    public function setXForwardedElbId($xForwardedElbId)
    {
        $this->container['xForwardedElbId'] = $xForwardedElbId;
        return $this;
    }

    /**
    * Gets xForwardedTlsCertificateId
    *  **参数解释**：X-Forwarded-TLS-Certificate-ID设为true可以将负载均衡器实例的证书ID通过报文的http头带到后端服务器。
    *
    * @return bool|null
    */
    public function getXForwardedTlsCertificateId()
    {
        return $this->container['xForwardedTlsCertificateId'];
    }

    /**
    * Sets xForwardedTlsCertificateId
    *
    * @param bool|null $xForwardedTlsCertificateId **参数解释**：X-Forwarded-TLS-Certificate-ID设为true可以将负载均衡器实例的证书ID通过报文的http头带到后端服务器。
    *
    * @return $this
    */
    public function setXForwardedTlsCertificateId($xForwardedTlsCertificateId)
    {
        $this->container['xForwardedTlsCertificateId'] = $xForwardedTlsCertificateId;
        return $this;
    }

    /**
    * Gets xForwardedTlsProtocol
    *  **参数解释**：X-Forwarded-TLS-Protocol设为true可以将负载均衡器实例的算法协议通过报文的http头带到后端服务器。
    *
    * @return bool|null
    */
    public function getXForwardedTlsProtocol()
    {
        return $this->container['xForwardedTlsProtocol'];
    }

    /**
    * Sets xForwardedTlsProtocol
    *
    * @param bool|null $xForwardedTlsProtocol **参数解释**：X-Forwarded-TLS-Protocol设为true可以将负载均衡器实例的算法协议通过报文的http头带到后端服务器。
    *
    * @return $this
    */
    public function setXForwardedTlsProtocol($xForwardedTlsProtocol)
    {
        $this->container['xForwardedTlsProtocol'] = $xForwardedTlsProtocol;
        return $this;
    }

    /**
    * Gets xForwardedTlsCipher
    *  **参数解释**：X-Forwarded-TLS-Cipher设为true可以将负载均衡器实例的算法套件通过报文的http头带到后端服务器。
    *
    * @return bool|null
    */
    public function getXForwardedTlsCipher()
    {
        return $this->container['xForwardedTlsCipher'];
    }

    /**
    * Sets xForwardedTlsCipher
    *
    * @param bool|null $xForwardedTlsCipher **参数解释**：X-Forwarded-TLS-Cipher设为true可以将负载均衡器实例的算法套件通过报文的http头带到后端服务器。
    *
    * @return $this
    */
    public function setXForwardedTlsCipher($xForwardedTlsCipher)
    {
        $this->container['xForwardedTlsCipher'] = $xForwardedTlsCipher;
        return $this;
    }

    /**
    * Gets xForwardedTlsProtocolAlias
    *  **参数解释**：自定义X-Forwarded-TLS-Protocol头字段名称。  **约束限制**：只有当 X-Forwarded-TLS-Protocol 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    *
    * @return string|null
    */
    public function getXForwardedTlsProtocolAlias()
    {
        return $this->container['xForwardedTlsProtocolAlias'];
    }

    /**
    * Sets xForwardedTlsProtocolAlias
    *
    * @param string|null $xForwardedTlsProtocolAlias **参数解释**：自定义X-Forwarded-TLS-Protocol头字段名称。  **约束限制**：只有当 X-Forwarded-TLS-Protocol 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    *
    * @return $this
    */
    public function setXForwardedTlsProtocolAlias($xForwardedTlsProtocolAlias)
    {
        $this->container['xForwardedTlsProtocolAlias'] = $xForwardedTlsProtocolAlias;
        return $this;
    }

    /**
    * Gets xForwardedTlsCipherAlias
    *  **参数解释**：自定义X-Forwarded-TLS-Cipher头字段名称。  **约束限制**：只有当 X-Forwarded-TLS-Cipher 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    *
    * @return string|null
    */
    public function getXForwardedTlsCipherAlias()
    {
        return $this->container['xForwardedTlsCipherAlias'];
    }

    /**
    * Sets xForwardedTlsCipherAlias
    *
    * @param string|null $xForwardedTlsCipherAlias **参数解释**：自定义X-Forwarded-TLS-Cipher头字段名称。  **约束限制**：只有当 X-Forwarded-TLS-Cipher 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    *
    * @return $this
    */
    public function setXForwardedTlsCipherAlias($xForwardedTlsCipherAlias)
    {
        $this->container['xForwardedTlsCipherAlias'] = $xForwardedTlsCipherAlias;
        return $this;
    }

    /**
    * Gets xForwardedForProcessingMode
    *  **参数解释**：处理X-Forwarded-For头字段的模式： 配置 append，将请求发送至后端服务之前把最后一跳 IP 加入X-Forwarded-For头字段； 配置 remove，请求发送至后端服务之前删除X-Forwarded-For标头，无论请求是否携带X-Forwarded-For头字段； 配置preserve，保留请求中已有的X-Forwarded-For标头；  **约束限制**：仅HTTP、HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段；  **取值范围**：append、remove、preserve  **默认取值**：append
    *
    * @return string|null
    */
    public function getXForwardedForProcessingMode()
    {
        return $this->container['xForwardedForProcessingMode'];
    }

    /**
    * Sets xForwardedForProcessingMode
    *
    * @param string|null $xForwardedForProcessingMode **参数解释**：处理X-Forwarded-For头字段的模式： 配置 append，将请求发送至后端服务之前把最后一跳 IP 加入X-Forwarded-For头字段； 配置 remove，请求发送至后端服务之前删除X-Forwarded-For标头，无论请求是否携带X-Forwarded-For头字段； 配置preserve，保留请求中已有的X-Forwarded-For标头；  **约束限制**：仅HTTP、HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段；  **取值范围**：append、remove、preserve  **默认取值**：append
    *
    * @return $this
    */
    public function setXForwardedForProcessingMode($xForwardedForProcessingMode)
    {
        $this->container['xForwardedForProcessingMode'] = $xForwardedForProcessingMode;
        return $this;
    }

    /**
    * Gets xForwardedClientcertSubjectdnEnable
    *  **参数解释**：是否通过X-Forwarded-Clientcert-subjectdn头字段获取访问负载均衡实例客户端证书的所有者信息。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：true、false  **默认取值**：false
    *
    * @return bool|null
    */
    public function getXForwardedClientcertSubjectdnEnable()
    {
        return $this->container['xForwardedClientcertSubjectdnEnable'];
    }

    /**
    * Sets xForwardedClientcertSubjectdnEnable
    *
    * @param bool|null $xForwardedClientcertSubjectdnEnable **参数解释**：是否通过X-Forwarded-Clientcert-subjectdn头字段获取访问负载均衡实例客户端证书的所有者信息。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：true、false  **默认取值**：false
    *
    * @return $this
    */
    public function setXForwardedClientcertSubjectdnEnable($xForwardedClientcertSubjectdnEnable)
    {
        $this->container['xForwardedClientcertSubjectdnEnable'] = $xForwardedClientcertSubjectdnEnable;
        return $this;
    }

    /**
    * Gets xForwardedClientcertSubjectdnAlias
    *  **参数解释**：自定义X-Forwarded-Clientcert-subjectdn头字段名称。  **约束限制**：只有当 X-Forwarded-Clientcert-subjectdn-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    *
    * @return string|null
    */
    public function getXForwardedClientcertSubjectdnAlias()
    {
        return $this->container['xForwardedClientcertSubjectdnAlias'];
    }

    /**
    * Sets xForwardedClientcertSubjectdnAlias
    *
    * @param string|null $xForwardedClientcertSubjectdnAlias **参数解释**：自定义X-Forwarded-Clientcert-subjectdn头字段名称。  **约束限制**：只有当 X-Forwarded-Clientcert-subjectdn-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    *
    * @return $this
    */
    public function setXForwardedClientcertSubjectdnAlias($xForwardedClientcertSubjectdnAlias)
    {
        $this->container['xForwardedClientcertSubjectdnAlias'] = $xForwardedClientcertSubjectdnAlias;
        return $this;
    }

    /**
    * Gets xForwardedClientcertIssuerdnEnable
    *  **参数解释**：是否通过X-Forwarded-Clientcert-issuerdn头字段获取访问负载均衡实例客户端证书的发行者信息。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：true、false  **默认取值**：false
    *
    * @return bool|null
    */
    public function getXForwardedClientcertIssuerdnEnable()
    {
        return $this->container['xForwardedClientcertIssuerdnEnable'];
    }

    /**
    * Sets xForwardedClientcertIssuerdnEnable
    *
    * @param bool|null $xForwardedClientcertIssuerdnEnable **参数解释**：是否通过X-Forwarded-Clientcert-issuerdn头字段获取访问负载均衡实例客户端证书的发行者信息。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：true、false  **默认取值**：false
    *
    * @return $this
    */
    public function setXForwardedClientcertIssuerdnEnable($xForwardedClientcertIssuerdnEnable)
    {
        $this->container['xForwardedClientcertIssuerdnEnable'] = $xForwardedClientcertIssuerdnEnable;
        return $this;
    }

    /**
    * Gets xForwardedClientcertIssuerdnAlias
    *  **参数解释**：自定义X-Forwarded-Clientcert-issuerdn头字段名称。  **约束限制**：只有当 X-Forwarded-Clientcert-issuerdn-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    *
    * @return string|null
    */
    public function getXForwardedClientcertIssuerdnAlias()
    {
        return $this->container['xForwardedClientcertIssuerdnAlias'];
    }

    /**
    * Sets xForwardedClientcertIssuerdnAlias
    *
    * @param string|null $xForwardedClientcertIssuerdnAlias **参数解释**：自定义X-Forwarded-Clientcert-issuerdn头字段名称。  **约束限制**：只有当 X-Forwarded-Clientcert-issuerdn-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    *
    * @return $this
    */
    public function setXForwardedClientcertIssuerdnAlias($xForwardedClientcertIssuerdnAlias)
    {
        $this->container['xForwardedClientcertIssuerdnAlias'] = $xForwardedClientcertIssuerdnAlias;
        return $this;
    }

    /**
    * Gets xForwardedClientcertFingerprintEnable
    *  **参数解释**：是否通过X-Forwarded-Clientcert-fingerprint头字段获取访问负载均衡实例客户端证书的指纹取值。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：true、false  **默认取值**：false
    *
    * @return bool|null
    */
    public function getXForwardedClientcertFingerprintEnable()
    {
        return $this->container['xForwardedClientcertFingerprintEnable'];
    }

    /**
    * Sets xForwardedClientcertFingerprintEnable
    *
    * @param bool|null $xForwardedClientcertFingerprintEnable **参数解释**：是否通过X-Forwarded-Clientcert-fingerprint头字段获取访问负载均衡实例客户端证书的指纹取值。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：true、false  **默认取值**：false
    *
    * @return $this
    */
    public function setXForwardedClientcertFingerprintEnable($xForwardedClientcertFingerprintEnable)
    {
        $this->container['xForwardedClientcertFingerprintEnable'] = $xForwardedClientcertFingerprintEnable;
        return $this;
    }

    /**
    * Gets xForwardedClientcertFingerprintAlias
    *  **参数解释**：自定义X-Forwarded-Clientcert-fingerprint头字段名称。  **约束限制**：只有当 X-Forwarded-Clientcert-fingerprint-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    *
    * @return string|null
    */
    public function getXForwardedClientcertFingerprintAlias()
    {
        return $this->container['xForwardedClientcertFingerprintAlias'];
    }

    /**
    * Sets xForwardedClientcertFingerprintAlias
    *
    * @param string|null $xForwardedClientcertFingerprintAlias **参数解释**：自定义X-Forwarded-Clientcert-fingerprint头字段名称。  **约束限制**：只有当 X-Forwarded-Clientcert-fingerprint-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    *
    * @return $this
    */
    public function setXForwardedClientcertFingerprintAlias($xForwardedClientcertFingerprintAlias)
    {
        $this->container['xForwardedClientcertFingerprintAlias'] = $xForwardedClientcertFingerprintAlias;
        return $this;
    }

    /**
    * Gets xForwardedClientcertClientverifyEnable
    *  **参数解释**：是否通过X-Forwarded-Clientcert-clientverify头字段获取对访问负载均衡实例客户端证书的校验结果。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：true、false  **默认取值**：false
    *
    * @return bool|null
    */
    public function getXForwardedClientcertClientverifyEnable()
    {
        return $this->container['xForwardedClientcertClientverifyEnable'];
    }

    /**
    * Sets xForwardedClientcertClientverifyEnable
    *
    * @param bool|null $xForwardedClientcertClientverifyEnable **参数解释**：是否通过X-Forwarded-Clientcert-clientverify头字段获取对访问负载均衡实例客户端证书的校验结果。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：true、false  **默认取值**：false
    *
    * @return $this
    */
    public function setXForwardedClientcertClientverifyEnable($xForwardedClientcertClientverifyEnable)
    {
        $this->container['xForwardedClientcertClientverifyEnable'] = $xForwardedClientcertClientverifyEnable;
        return $this;
    }

    /**
    * Gets xForwardedClientcertClientverifyAlias
    *  **参数解释**：自定义X-Forwarded-Clientcert-clientverify头字段名称。  **约束限制**：只有当 X-Forwarded-Clientcert-clientverify-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    *
    * @return string|null
    */
    public function getXForwardedClientcertClientverifyAlias()
    {
        return $this->container['xForwardedClientcertClientverifyAlias'];
    }

    /**
    * Sets xForwardedClientcertClientverifyAlias
    *
    * @param string|null $xForwardedClientcertClientverifyAlias **参数解释**：自定义X-Forwarded-Clientcert-clientverify头字段名称。  **约束限制**：只有当 X-Forwarded-Clientcert-clientverify-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    *
    * @return $this
    */
    public function setXForwardedClientcertClientverifyAlias($xForwardedClientcertClientverifyAlias)
    {
        $this->container['xForwardedClientcertClientverifyAlias'] = $xForwardedClientcertClientverifyAlias;
        return $this;
    }

    /**
    * Gets xForwardedClientcertSerialnumberEnable
    *  **参数解释**：是否通过X-Forwarded-Clientcert-serialnumber 头字段获取客户端证书的序列号信息。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：true、false  **默认取值**：false
    *
    * @return bool|null
    */
    public function getXForwardedClientcertSerialnumberEnable()
    {
        return $this->container['xForwardedClientcertSerialnumberEnable'];
    }

    /**
    * Sets xForwardedClientcertSerialnumberEnable
    *
    * @param bool|null $xForwardedClientcertSerialnumberEnable **参数解释**：是否通过X-Forwarded-Clientcert-serialnumber 头字段获取客户端证书的序列号信息。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：true、false  **默认取值**：false
    *
    * @return $this
    */
    public function setXForwardedClientcertSerialnumberEnable($xForwardedClientcertSerialnumberEnable)
    {
        $this->container['xForwardedClientcertSerialnumberEnable'] = $xForwardedClientcertSerialnumberEnable;
        return $this;
    }

    /**
    * Gets xForwardedClientcertSerialnumberAlias
    *  **参数解释**：自定义X-Forwarded-Clientcert-serialnumber头字段名称。  **约束限制**：只有当X-Forwarded-Clientcert-serialnumber-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    *
    * @return string|null
    */
    public function getXForwardedClientcertSerialnumberAlias()
    {
        return $this->container['xForwardedClientcertSerialnumberAlias'];
    }

    /**
    * Sets xForwardedClientcertSerialnumberAlias
    *
    * @param string|null $xForwardedClientcertSerialnumberAlias **参数解释**：自定义X-Forwarded-Clientcert-serialnumber头字段名称。  **约束限制**：只有当X-Forwarded-Clientcert-serialnumber-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    *
    * @return $this
    */
    public function setXForwardedClientcertSerialnumberAlias($xForwardedClientcertSerialnumberAlias)
    {
        $this->container['xForwardedClientcertSerialnumberAlias'] = $xForwardedClientcertSerialnumberAlias;
        return $this;
    }

    /**
    * Gets xForwardedClientcertEnable
    *  **参数解释**：是否通过X-Forwarded-Clientcert 头字段获取客户端证书的内容。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：true、false  **默认取值**：false
    *
    * @return bool|null
    */
    public function getXForwardedClientcertEnable()
    {
        return $this->container['xForwardedClientcertEnable'];
    }

    /**
    * Sets xForwardedClientcertEnable
    *
    * @param bool|null $xForwardedClientcertEnable **参数解释**：是否通过X-Forwarded-Clientcert 头字段获取客户端证书的内容。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：true、false  **默认取值**：false
    *
    * @return $this
    */
    public function setXForwardedClientcertEnable($xForwardedClientcertEnable)
    {
        $this->container['xForwardedClientcertEnable'] = $xForwardedClientcertEnable;
        return $this;
    }

    /**
    * Gets xForwardedClientcertAlias
    *  **参数解释**：自定义X-Forwarded-Clientcert头字段名称。  **约束限制**：只有当X-Forwarded-Clientcert-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC、TLS协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    *
    * @return string|null
    */
    public function getXForwardedClientcertAlias()
    {
        return $this->container['xForwardedClientcertAlias'];
    }

    /**
    * Sets xForwardedClientcertAlias
    *
    * @param string|null $xForwardedClientcertAlias **参数解释**：自定义X-Forwarded-Clientcert头字段名称。  **约束限制**：只有当X-Forwarded-Clientcert-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC、TLS协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    *
    * @return $this
    */
    public function setXForwardedClientcertAlias($xForwardedClientcertAlias)
    {
        $this->container['xForwardedClientcertAlias'] = $xForwardedClientcertAlias;
        return $this;
    }

    /**
    * Gets xForwardedClientcertCiphersEnable
    *  **参数解释**：是否通过X-Forwarded-Clientcert-ciphers 头字段获取客户端支持的TLS加密套件。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段。  **取值范围**：true、false  **默认取值**：false
    *
    * @return bool|null
    */
    public function getXForwardedClientcertCiphersEnable()
    {
        return $this->container['xForwardedClientcertCiphersEnable'];
    }

    /**
    * Sets xForwardedClientcertCiphersEnable
    *
    * @param bool|null $xForwardedClientcertCiphersEnable **参数解释**：是否通过X-Forwarded-Clientcert-ciphers 头字段获取客户端支持的TLS加密套件。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段。  **取值范围**：true、false  **默认取值**：false
    *
    * @return $this
    */
    public function setXForwardedClientcertCiphersEnable($xForwardedClientcertCiphersEnable)
    {
        $this->container['xForwardedClientcertCiphersEnable'] = $xForwardedClientcertCiphersEnable;
        return $this;
    }

    /**
    * Gets xForwardedClientcertCiphersAlias
    *  **参数解释**：自定义X-Forwarded-Clientcert-ciphers头字段名称。  **约束限制**：只有当X-Forwarded-Clientcert-ciphers-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    *
    * @return string|null
    */
    public function getXForwardedClientcertCiphersAlias()
    {
        return $this->container['xForwardedClientcertCiphersAlias'];
    }

    /**
    * Sets xForwardedClientcertCiphersAlias
    *
    * @param string|null $xForwardedClientcertCiphersAlias **参数解释**：自定义X-Forwarded-Clientcert-ciphers头字段名称。  **约束限制**：只有当X-Forwarded-Clientcert-ciphers-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    *
    * @return $this
    */
    public function setXForwardedClientcertCiphersAlias($xForwardedClientcertCiphersAlias)
    {
        $this->container['xForwardedClientcertCiphersAlias'] = $xForwardedClientcertCiphersAlias;
        return $this;
    }

    /**
    * Gets xForwardedClientcertEndEnable
    *  **参数解释**：是否通过X-Forwarded-Clientcert-end 头字段获取客户端证书的结束日期。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段。  **取值范围**：true、false  **默认取值**：false
    *
    * @return bool|null
    */
    public function getXForwardedClientcertEndEnable()
    {
        return $this->container['xForwardedClientcertEndEnable'];
    }

    /**
    * Sets xForwardedClientcertEndEnable
    *
    * @param bool|null $xForwardedClientcertEndEnable **参数解释**：是否通过X-Forwarded-Clientcert-end 头字段获取客户端证书的结束日期。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段。  **取值范围**：true、false  **默认取值**：false
    *
    * @return $this
    */
    public function setXForwardedClientcertEndEnable($xForwardedClientcertEndEnable)
    {
        $this->container['xForwardedClientcertEndEnable'] = $xForwardedClientcertEndEnable;
        return $this;
    }

    /**
    * Gets xForwardedClientcertEndAlias
    *  **参数解释**：自定义X-Forwarded-Clientcert-end头字段名称。  **约束限制**：只有当X-Forwarded-Clientcert-end-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC、TLS协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    *
    * @return string|null
    */
    public function getXForwardedClientcertEndAlias()
    {
        return $this->container['xForwardedClientcertEndAlias'];
    }

    /**
    * Sets xForwardedClientcertEndAlias
    *
    * @param string|null $xForwardedClientcertEndAlias **参数解释**：自定义X-Forwarded-Clientcert-end头字段名称。  **约束限制**：只有当X-Forwarded-Clientcert-end-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC、TLS协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    *
    * @return $this
    */
    public function setXForwardedClientcertEndAlias($xForwardedClientcertEndAlias)
    {
        $this->container['xForwardedClientcertEndAlias'] = $xForwardedClientcertEndAlias;
        return $this;
    }

    /**
    * Gets xForwardedTlsAlpnProtocolEnable
    *  **参数解释**：是否通过X-Forwarded-Tls-Alpn-Protocol 头字段获取客户端和服务器之间ALPN（Application-Layer Protocol Negotiation）协商的应用层协议。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段。  **取值范围**：true、false  **默认取值**：false
    *
    * @return bool|null
    */
    public function getXForwardedTlsAlpnProtocolEnable()
    {
        return $this->container['xForwardedTlsAlpnProtocolEnable'];
    }

    /**
    * Sets xForwardedTlsAlpnProtocolEnable
    *
    * @param bool|null $xForwardedTlsAlpnProtocolEnable **参数解释**：是否通过X-Forwarded-Tls-Alpn-Protocol 头字段获取客户端和服务器之间ALPN（Application-Layer Protocol Negotiation）协商的应用层协议。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段。  **取值范围**：true、false  **默认取值**：false
    *
    * @return $this
    */
    public function setXForwardedTlsAlpnProtocolEnable($xForwardedTlsAlpnProtocolEnable)
    {
        $this->container['xForwardedTlsAlpnProtocolEnable'] = $xForwardedTlsAlpnProtocolEnable;
        return $this;
    }

    /**
    * Gets xForwardedTlsAlpnProtocolAlias
    *  **参数解释**：自定义X-Forwarded-Tls-Alpn-Protocol头字段名称。  **约束限制**：只有当X-Forwarded-Tls-Alpn-Protocol-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    *
    * @return string|null
    */
    public function getXForwardedTlsAlpnProtocolAlias()
    {
        return $this->container['xForwardedTlsAlpnProtocolAlias'];
    }

    /**
    * Sets xForwardedTlsAlpnProtocolAlias
    *
    * @param string|null $xForwardedTlsAlpnProtocolAlias **参数解释**：自定义X-Forwarded-Tls-Alpn-Protocol头字段名称。  **约束限制**：只有当X-Forwarded-Tls-Alpn-Protocol-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    *
    * @return $this
    */
    public function setXForwardedTlsAlpnProtocolAlias($xForwardedTlsAlpnProtocolAlias)
    {
        $this->container['xForwardedTlsAlpnProtocolAlias'] = $xForwardedTlsAlpnProtocolAlias;
        return $this;
    }

    /**
    * Gets xForwardedTlsSniEnable
    *  **参数解释**：是否通过X-Forwarded-Tls-Sni 头字段获取客户端访问的sni证书的域名。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段。  **取值范围**：true、false  **默认取值**：false
    *
    * @return bool|null
    */
    public function getXForwardedTlsSniEnable()
    {
        return $this->container['xForwardedTlsSniEnable'];
    }

    /**
    * Sets xForwardedTlsSniEnable
    *
    * @param bool|null $xForwardedTlsSniEnable **参数解释**：是否通过X-Forwarded-Tls-Sni 头字段获取客户端访问的sni证书的域名。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段。  **取值范围**：true、false  **默认取值**：false
    *
    * @return $this
    */
    public function setXForwardedTlsSniEnable($xForwardedTlsSniEnable)
    {
        $this->container['xForwardedTlsSniEnable'] = $xForwardedTlsSniEnable;
        return $this;
    }

    /**
    * Gets xForwardedTlsSniAlias
    *  **参数解释**：自定义X-Forwarded-Tls-Sni头字段名称。  **约束限制**：只有当X-Forwarded-Tls-Sni-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    *
    * @return string|null
    */
    public function getXForwardedTlsSniAlias()
    {
        return $this->container['xForwardedTlsSniAlias'];
    }

    /**
    * Sets xForwardedTlsSniAlias
    *
    * @param string|null $xForwardedTlsSniAlias **参数解释**：自定义X-Forwarded-Tls-Sni头字段名称。  **约束限制**：只有当X-Forwarded-Tls-Sni-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    *
    * @return $this
    */
    public function setXForwardedTlsSniAlias($xForwardedTlsSniAlias)
    {
        $this->container['xForwardedTlsSniAlias'] = $xForwardedTlsSniAlias;
        return $this;
    }

    /**
    * Gets xForwardedTlsJa3Enable
    *  **参数解释**：是否通过X-Forwarded-Tls-Ja3头字段获取访问负载均衡实例客户端的ja3指纹。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段。  **取值范围**：true、false  **默认取值**：false
    *
    * @return bool|null
    */
    public function getXForwardedTlsJa3Enable()
    {
        return $this->container['xForwardedTlsJa3Enable'];
    }

    /**
    * Sets xForwardedTlsJa3Enable
    *
    * @param bool|null $xForwardedTlsJa3Enable **参数解释**：是否通过X-Forwarded-Tls-Ja3头字段获取访问负载均衡实例客户端的ja3指纹。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段。  **取值范围**：true、false  **默认取值**：false
    *
    * @return $this
    */
    public function setXForwardedTlsJa3Enable($xForwardedTlsJa3Enable)
    {
        $this->container['xForwardedTlsJa3Enable'] = $xForwardedTlsJa3Enable;
        return $this;
    }

    /**
    * Gets xForwardedTlsJa3Alias
    *  **参数解释**：自定义X-Forwarded-Tls-Ja3头字段名称。  **约束限制**：只有当X-Forwarded-Tls-Ja3-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    *
    * @return string|null
    */
    public function getXForwardedTlsJa3Alias()
    {
        return $this->container['xForwardedTlsJa3Alias'];
    }

    /**
    * Sets xForwardedTlsJa3Alias
    *
    * @param string|null $xForwardedTlsJa3Alias **参数解释**：自定义X-Forwarded-Tls-Ja3头字段名称。  **约束限制**：只有当X-Forwarded-Tls-Ja3-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    *
    * @return $this
    */
    public function setXForwardedTlsJa3Alias($xForwardedTlsJa3Alias)
    {
        $this->container['xForwardedTlsJa3Alias'] = $xForwardedTlsJa3Alias;
        return $this;
    }

    /**
    * Gets xForwardedTlsJa4Enable
    *  **参数解释**：是否通过X-Forwarded-Tls-Ja4头字段获取访问负载均衡实例客户端的ja4指纹。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段。  **取值范围**：true、false  **默认取值**：false
    *
    * @return bool|null
    */
    public function getXForwardedTlsJa4Enable()
    {
        return $this->container['xForwardedTlsJa4Enable'];
    }

    /**
    * Sets xForwardedTlsJa4Enable
    *
    * @param bool|null $xForwardedTlsJa4Enable **参数解释**：是否通过X-Forwarded-Tls-Ja4头字段获取访问负载均衡实例客户端的ja4指纹。  **约束限制**：仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段。  **取值范围**：true、false  **默认取值**：false
    *
    * @return $this
    */
    public function setXForwardedTlsJa4Enable($xForwardedTlsJa4Enable)
    {
        $this->container['xForwardedTlsJa4Enable'] = $xForwardedTlsJa4Enable;
        return $this;
    }

    /**
    * Gets xForwardedTlsJa4Alias
    *  **参数解释**：自定义X-Forwarded-Tls-Ja4头字段名称。  **约束限制**：只有当X-Forwarded-Tls-Ja4-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    *
    * @return string|null
    */
    public function getXForwardedTlsJa4Alias()
    {
        return $this->container['xForwardedTlsJa4Alias'];
    }

    /**
    * Sets xForwardedTlsJa4Alias
    *
    * @param string|null $xForwardedTlsJa4Alias **参数解释**：自定义X-Forwarded-Tls-Ja4头字段名称。  **约束限制**：只有当X-Forwarded-Tls-Ja4-enable 的值为 true 时，此值才会生效。仅HTTPS、TERMINATED_HTTPS、QUIC协议的监听器支持该字段  **取值范围**：1~40 个字符。支持字母 a~z、短划线（-）、下划线（_）和数字。  **默认取值**：无
    *
    * @return $this
    */
    public function setXForwardedTlsJa4Alias($xForwardedTlsJa4Alias)
    {
        $this->container['xForwardedTlsJa4Alias'] = $xForwardedTlsJa4Alias;
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

