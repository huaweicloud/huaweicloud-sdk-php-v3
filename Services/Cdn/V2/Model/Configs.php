<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Configs implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Configs';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * businessType  **参数解释：** 业务类型 **约束限制：** 暂不支持“全站加速”变更为其它业务类型 **取值范围：** - web: 网站加速 - download: 文件下载加速 - video: 点播加速  **默认取值：** 不涉及
    * serviceArea  **参数解释：** 加速域名的服务范围，客户端访问将会调度到服务范围内的CDN节点，可根据用户聚集区域选择合适的范围 **约束限制：** - 暂不支持“中国大陆”与“中国大陆境外”互相直接切换 - 服务范围修改为中国大陆或全球时，加速域名需要到工信部备案  **取值范围：** - mainland_china：中国大陆 - global：全球 - outside_mainland_china：中国大陆境外  **默认取值：** 不涉及
    * remark  **参数解释：** 域名备注信息 **约束限制：** 不涉及 **取值范围：** 0-10000个字符 **默认取值：** 不涉及
    * originRequestHeader  **参数解释：** 回源请求头，CDN节点回源时，根据回源请求头配置操作请求的HTTP头部信息 **约束限制：** - 修改时该功能将覆盖原有配置（清空之前的配置），在使用此接口时，请上传全量头部信息 - 如果域名在后台配置了特殊请求头，需要将对应的请求头一并传入
    * httpResponseHeader  **参数解释：** HTTP响应头，CDN节点响应客户端时，根据HTTP响应头配置操作响应的HTTP头部信息 **约束限制：** - 修改时该功能将覆盖原有配置（清空之前的配置），在使用此接口时，请上传全量头部信息 - 如果域名在后台配置了特殊响应头，需要将对应的响应头一并传入
    * urlAuth  urlAuth
    * https  https
    * sources  **参数解释：** 配置加速域名的源站，CDN通过加速域名将源站上需要加速的内容缓存到CDN节点，达到加速访问资源的效果 **约束限制：** 不涉及
    * originProtocol  **参数解释：** 指定CDN回源时的请求协议 **约束限制：** 不涉及 **取值范围：** - follow: 协议跟随 - http: http协议 - https: https协议  **默认取值：** http: http协议
    * originFollow302Status  **参数解释：** 开启回源跟随，当源站地址因业务需求做了301/302 重定向，CDN节点会先跳转到301/302对应地址获取资源，缓存后再返回给用户 **约束限制：** 不涉及 **取值范围：** - on: 开启 - off: 关闭  **默认取值：** 不涉及
    * cacheRules  **参数解释：** 通过不同参数控制源站资源在CDN节点的缓存时长 **约束限制：** 必须存在一条所有文件类型的规则
    * ipFilter  ipFilter
    * referer  referer
    * forceRedirect  forceRedirect
    * compress  compress
    * cacheUrlParameterFilter  cacheUrlParameterFilter
    * ipv6Accelerate  **参数解释：** 配置客户端用IPv6协议访问CDN节点 **约束限制：** 不涉及 **取值范围：** - 1: 开启 - 0: 关闭  **默认取值：** 不涉及
    * errorCodeCache  **参数解释：** 将源站返回的错误状态码缓存到CDN节点，用户再次请求时由CDN直接响应给用户错误码 **约束限制：** 不涉及
    * originRangeStatus  **参数解释：** Range回源，开启后，源站在收到CDN节点回源请求时，根据HTTP请求头中的Range信息返回指定范围的数据给CDN节点 **约束限制：** 开启Range回源的前提是您的源站支持Range请求，即HTTP请求头中包含Range字段，否则可能导致回源失败 **取值范围：** - on: 开启 - off: 关闭  **默认取值：** 不涉及
    * userAgentFilter  userAgentFilter
    * originRequestUrlRewrite  **参数解释：** 回源URL改写，解决回源请求URL与源站URL不匹配的问题 **约束限制：** 最多配置20条
    * flexibleOrigin  **参数解释：** 高级回源，实现根据不同的资源类型或路径回源到不同源站 **约束限制：** 最多配置20条
    * sliceEtagStatus  **参数解释：** 回源是否校验ETag，开启此项配置后，当用户再次请求节点已缓存资源时，会将ETag的值加入到判断资源是否过期的逻辑 **约束限制：** 不涉及 **取值范围：** - on: 开启 - off: 关闭  **默认取值：** 不涉及
    * originReceiveTimeout  **参数解释：** 自定义设置CDN节点回源时的超时时间，请求超时即表示此次回源失败 **约束限制：** 不涉及 **取值范围：** 5-300，单位：秒 **默认取值：** 不涉及
    * remoteAuth  remoteAuth
    * websocket  websocket
    * videoSeek  videoSeek
    * requestLimitRules  **参数解释：** 请求限速，将用户请求速度限制在指定范围内，一定程度上减少突发高带宽风险，节省成本 **约束限制：** 不涉及
    * ipFrequencyLimit  ipFrequencyLimit
    * hsts  hsts
    * quic  quic
    * errorCodeRedirectRules  **参数解释：** 自定义错误页面，当访问页面出错时，会给客户端返回指定的页面，优化用户体验 **约束限制：** 不涉及
    * sni  sni
    * requestUrlRewrite  **参数解释：** 访问URL重写，当用户请求URL与CDN节点缓存资源的URL不一致时，可以通过访问URL重写功能重定向到目标URL **约束限制：** 不涉及
    * browserCacheRules  **参数解释：** 浏览器缓存过期时间，当终端用户请求资源时，如果浏览器有缓存，直接返回给用户 **约束限制：** 不涉及
    * accessAreaFilter  accessAreaFilter
    * clientCert  clientCert
    * httpsTlsVersion  httpsTlsVersion
    * flowLimitStrategy  **参数解释：** 设置用量封顶阈值，当实际用量大于阈值时停用域名，有效预防流量盗刷或恶意攻击带来的高额账单。  > 由于监控数据存在时延，域名将在用量达到阈值后的10分钟左右被停用  **约束限制：** 不涉及
    * bandwidthAlarmStrategy  bandwidthAlarmStrategy
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'businessType' => 'string',
            'serviceArea' => 'string',
            'remark' => 'string',
            'originRequestHeader' => '\HuaweiCloud\SDK\Cdn\V2\Model\OriginRequestHeader[]',
            'httpResponseHeader' => '\HuaweiCloud\SDK\Cdn\V2\Model\HttpResponseHeader[]',
            'urlAuth' => '\HuaweiCloud\SDK\Cdn\V2\Model\UrlAuth',
            'https' => '\HuaweiCloud\SDK\Cdn\V2\Model\HttpPutBody',
            'sources' => '\HuaweiCloud\SDK\Cdn\V2\Model\SourcesConfig[]',
            'originProtocol' => 'string',
            'originFollow302Status' => 'string',
            'cacheRules' => '\HuaweiCloud\SDK\Cdn\V2\Model\CacheRules[]',
            'ipFilter' => '\HuaweiCloud\SDK\Cdn\V2\Model\IpFilter',
            'referer' => '\HuaweiCloud\SDK\Cdn\V2\Model\RefererConfig',
            'forceRedirect' => '\HuaweiCloud\SDK\Cdn\V2\Model\ForceRedirectConfig',
            'compress' => '\HuaweiCloud\SDK\Cdn\V2\Model\Compress',
            'cacheUrlParameterFilter' => '\HuaweiCloud\SDK\Cdn\V2\Model\CacheUrlParameterFilter',
            'ipv6Accelerate' => 'int',
            'errorCodeCache' => '\HuaweiCloud\SDK\Cdn\V2\Model\ErrorCodeCache[]',
            'originRangeStatus' => 'string',
            'userAgentFilter' => '\HuaweiCloud\SDK\Cdn\V2\Model\UserAgentFilter',
            'originRequestUrlRewrite' => '\HuaweiCloud\SDK\Cdn\V2\Model\OriginRequestUrlRewrite[]',
            'flexibleOrigin' => '\HuaweiCloud\SDK\Cdn\V2\Model\FlexibleOrigins[]',
            'sliceEtagStatus' => 'string',
            'originReceiveTimeout' => 'int',
            'remoteAuth' => '\HuaweiCloud\SDK\Cdn\V2\Model\CommonRemoteAuth',
            'websocket' => '\HuaweiCloud\SDK\Cdn\V2\Model\WebSocketSeek',
            'videoSeek' => '\HuaweiCloud\SDK\Cdn\V2\Model\VideoSeek',
            'requestLimitRules' => '\HuaweiCloud\SDK\Cdn\V2\Model\RequestLimitRules[]',
            'ipFrequencyLimit' => '\HuaweiCloud\SDK\Cdn\V2\Model\IpFrequencyLimit',
            'hsts' => '\HuaweiCloud\SDK\Cdn\V2\Model\Hsts',
            'quic' => '\HuaweiCloud\SDK\Cdn\V2\Model\Quic',
            'errorCodeRedirectRules' => '\HuaweiCloud\SDK\Cdn\V2\Model\ErrorCodeRedirectRules[]',
            'sni' => '\HuaweiCloud\SDK\Cdn\V2\Model\Sni',
            'requestUrlRewrite' => '\HuaweiCloud\SDK\Cdn\V2\Model\RequestUrlRewrite[]',
            'browserCacheRules' => '\HuaweiCloud\SDK\Cdn\V2\Model\BrowserCacheRules[]',
            'accessAreaFilter' => '\HuaweiCloud\SDK\Cdn\V2\Model\AccessAreaFilter[]',
            'clientCert' => '\HuaweiCloud\SDK\Cdn\V2\Model\ClientCert',
            'httpsTlsVersion' => '\HuaweiCloud\SDK\Cdn\V2\Model\HttpsTlsVersion',
            'flowLimitStrategy' => '\HuaweiCloud\SDK\Cdn\V2\Model\FlowLimitStrategy[]',
            'bandwidthAlarmStrategy' => '\HuaweiCloud\SDK\Cdn\V2\Model\BandwidthAlarmStrategy'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * businessType  **参数解释：** 业务类型 **约束限制：** 暂不支持“全站加速”变更为其它业务类型 **取值范围：** - web: 网站加速 - download: 文件下载加速 - video: 点播加速  **默认取值：** 不涉及
    * serviceArea  **参数解释：** 加速域名的服务范围，客户端访问将会调度到服务范围内的CDN节点，可根据用户聚集区域选择合适的范围 **约束限制：** - 暂不支持“中国大陆”与“中国大陆境外”互相直接切换 - 服务范围修改为中国大陆或全球时，加速域名需要到工信部备案  **取值范围：** - mainland_china：中国大陆 - global：全球 - outside_mainland_china：中国大陆境外  **默认取值：** 不涉及
    * remark  **参数解释：** 域名备注信息 **约束限制：** 不涉及 **取值范围：** 0-10000个字符 **默认取值：** 不涉及
    * originRequestHeader  **参数解释：** 回源请求头，CDN节点回源时，根据回源请求头配置操作请求的HTTP头部信息 **约束限制：** - 修改时该功能将覆盖原有配置（清空之前的配置），在使用此接口时，请上传全量头部信息 - 如果域名在后台配置了特殊请求头，需要将对应的请求头一并传入
    * httpResponseHeader  **参数解释：** HTTP响应头，CDN节点响应客户端时，根据HTTP响应头配置操作响应的HTTP头部信息 **约束限制：** - 修改时该功能将覆盖原有配置（清空之前的配置），在使用此接口时，请上传全量头部信息 - 如果域名在后台配置了特殊响应头，需要将对应的响应头一并传入
    * urlAuth  urlAuth
    * https  https
    * sources  **参数解释：** 配置加速域名的源站，CDN通过加速域名将源站上需要加速的内容缓存到CDN节点，达到加速访问资源的效果 **约束限制：** 不涉及
    * originProtocol  **参数解释：** 指定CDN回源时的请求协议 **约束限制：** 不涉及 **取值范围：** - follow: 协议跟随 - http: http协议 - https: https协议  **默认取值：** http: http协议
    * originFollow302Status  **参数解释：** 开启回源跟随，当源站地址因业务需求做了301/302 重定向，CDN节点会先跳转到301/302对应地址获取资源，缓存后再返回给用户 **约束限制：** 不涉及 **取值范围：** - on: 开启 - off: 关闭  **默认取值：** 不涉及
    * cacheRules  **参数解释：** 通过不同参数控制源站资源在CDN节点的缓存时长 **约束限制：** 必须存在一条所有文件类型的规则
    * ipFilter  ipFilter
    * referer  referer
    * forceRedirect  forceRedirect
    * compress  compress
    * cacheUrlParameterFilter  cacheUrlParameterFilter
    * ipv6Accelerate  **参数解释：** 配置客户端用IPv6协议访问CDN节点 **约束限制：** 不涉及 **取值范围：** - 1: 开启 - 0: 关闭  **默认取值：** 不涉及
    * errorCodeCache  **参数解释：** 将源站返回的错误状态码缓存到CDN节点，用户再次请求时由CDN直接响应给用户错误码 **约束限制：** 不涉及
    * originRangeStatus  **参数解释：** Range回源，开启后，源站在收到CDN节点回源请求时，根据HTTP请求头中的Range信息返回指定范围的数据给CDN节点 **约束限制：** 开启Range回源的前提是您的源站支持Range请求，即HTTP请求头中包含Range字段，否则可能导致回源失败 **取值范围：** - on: 开启 - off: 关闭  **默认取值：** 不涉及
    * userAgentFilter  userAgentFilter
    * originRequestUrlRewrite  **参数解释：** 回源URL改写，解决回源请求URL与源站URL不匹配的问题 **约束限制：** 最多配置20条
    * flexibleOrigin  **参数解释：** 高级回源，实现根据不同的资源类型或路径回源到不同源站 **约束限制：** 最多配置20条
    * sliceEtagStatus  **参数解释：** 回源是否校验ETag，开启此项配置后，当用户再次请求节点已缓存资源时，会将ETag的值加入到判断资源是否过期的逻辑 **约束限制：** 不涉及 **取值范围：** - on: 开启 - off: 关闭  **默认取值：** 不涉及
    * originReceiveTimeout  **参数解释：** 自定义设置CDN节点回源时的超时时间，请求超时即表示此次回源失败 **约束限制：** 不涉及 **取值范围：** 5-300，单位：秒 **默认取值：** 不涉及
    * remoteAuth  remoteAuth
    * websocket  websocket
    * videoSeek  videoSeek
    * requestLimitRules  **参数解释：** 请求限速，将用户请求速度限制在指定范围内，一定程度上减少突发高带宽风险，节省成本 **约束限制：** 不涉及
    * ipFrequencyLimit  ipFrequencyLimit
    * hsts  hsts
    * quic  quic
    * errorCodeRedirectRules  **参数解释：** 自定义错误页面，当访问页面出错时，会给客户端返回指定的页面，优化用户体验 **约束限制：** 不涉及
    * sni  sni
    * requestUrlRewrite  **参数解释：** 访问URL重写，当用户请求URL与CDN节点缓存资源的URL不一致时，可以通过访问URL重写功能重定向到目标URL **约束限制：** 不涉及
    * browserCacheRules  **参数解释：** 浏览器缓存过期时间，当终端用户请求资源时，如果浏览器有缓存，直接返回给用户 **约束限制：** 不涉及
    * accessAreaFilter  accessAreaFilter
    * clientCert  clientCert
    * httpsTlsVersion  httpsTlsVersion
    * flowLimitStrategy  **参数解释：** 设置用量封顶阈值，当实际用量大于阈值时停用域名，有效预防流量盗刷或恶意攻击带来的高额账单。  > 由于监控数据存在时延，域名将在用量达到阈值后的10分钟左右被停用  **约束限制：** 不涉及
    * bandwidthAlarmStrategy  bandwidthAlarmStrategy
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'businessType' => null,
        'serviceArea' => null,
        'remark' => null,
        'originRequestHeader' => null,
        'httpResponseHeader' => null,
        'urlAuth' => null,
        'https' => null,
        'sources' => null,
        'originProtocol' => null,
        'originFollow302Status' => null,
        'cacheRules' => null,
        'ipFilter' => null,
        'referer' => null,
        'forceRedirect' => null,
        'compress' => null,
        'cacheUrlParameterFilter' => null,
        'ipv6Accelerate' => 'int32',
        'errorCodeCache' => null,
        'originRangeStatus' => null,
        'userAgentFilter' => null,
        'originRequestUrlRewrite' => null,
        'flexibleOrigin' => null,
        'sliceEtagStatus' => null,
        'originReceiveTimeout' => 'int32',
        'remoteAuth' => null,
        'websocket' => null,
        'videoSeek' => null,
        'requestLimitRules' => null,
        'ipFrequencyLimit' => null,
        'hsts' => null,
        'quic' => null,
        'errorCodeRedirectRules' => null,
        'sni' => null,
        'requestUrlRewrite' => null,
        'browserCacheRules' => null,
        'accessAreaFilter' => null,
        'clientCert' => null,
        'httpsTlsVersion' => null,
        'flowLimitStrategy' => null,
        'bandwidthAlarmStrategy' => null
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
    * businessType  **参数解释：** 业务类型 **约束限制：** 暂不支持“全站加速”变更为其它业务类型 **取值范围：** - web: 网站加速 - download: 文件下载加速 - video: 点播加速  **默认取值：** 不涉及
    * serviceArea  **参数解释：** 加速域名的服务范围，客户端访问将会调度到服务范围内的CDN节点，可根据用户聚集区域选择合适的范围 **约束限制：** - 暂不支持“中国大陆”与“中国大陆境外”互相直接切换 - 服务范围修改为中国大陆或全球时，加速域名需要到工信部备案  **取值范围：** - mainland_china：中国大陆 - global：全球 - outside_mainland_china：中国大陆境外  **默认取值：** 不涉及
    * remark  **参数解释：** 域名备注信息 **约束限制：** 不涉及 **取值范围：** 0-10000个字符 **默认取值：** 不涉及
    * originRequestHeader  **参数解释：** 回源请求头，CDN节点回源时，根据回源请求头配置操作请求的HTTP头部信息 **约束限制：** - 修改时该功能将覆盖原有配置（清空之前的配置），在使用此接口时，请上传全量头部信息 - 如果域名在后台配置了特殊请求头，需要将对应的请求头一并传入
    * httpResponseHeader  **参数解释：** HTTP响应头，CDN节点响应客户端时，根据HTTP响应头配置操作响应的HTTP头部信息 **约束限制：** - 修改时该功能将覆盖原有配置（清空之前的配置），在使用此接口时，请上传全量头部信息 - 如果域名在后台配置了特殊响应头，需要将对应的响应头一并传入
    * urlAuth  urlAuth
    * https  https
    * sources  **参数解释：** 配置加速域名的源站，CDN通过加速域名将源站上需要加速的内容缓存到CDN节点，达到加速访问资源的效果 **约束限制：** 不涉及
    * originProtocol  **参数解释：** 指定CDN回源时的请求协议 **约束限制：** 不涉及 **取值范围：** - follow: 协议跟随 - http: http协议 - https: https协议  **默认取值：** http: http协议
    * originFollow302Status  **参数解释：** 开启回源跟随，当源站地址因业务需求做了301/302 重定向，CDN节点会先跳转到301/302对应地址获取资源，缓存后再返回给用户 **约束限制：** 不涉及 **取值范围：** - on: 开启 - off: 关闭  **默认取值：** 不涉及
    * cacheRules  **参数解释：** 通过不同参数控制源站资源在CDN节点的缓存时长 **约束限制：** 必须存在一条所有文件类型的规则
    * ipFilter  ipFilter
    * referer  referer
    * forceRedirect  forceRedirect
    * compress  compress
    * cacheUrlParameterFilter  cacheUrlParameterFilter
    * ipv6Accelerate  **参数解释：** 配置客户端用IPv6协议访问CDN节点 **约束限制：** 不涉及 **取值范围：** - 1: 开启 - 0: 关闭  **默认取值：** 不涉及
    * errorCodeCache  **参数解释：** 将源站返回的错误状态码缓存到CDN节点，用户再次请求时由CDN直接响应给用户错误码 **约束限制：** 不涉及
    * originRangeStatus  **参数解释：** Range回源，开启后，源站在收到CDN节点回源请求时，根据HTTP请求头中的Range信息返回指定范围的数据给CDN节点 **约束限制：** 开启Range回源的前提是您的源站支持Range请求，即HTTP请求头中包含Range字段，否则可能导致回源失败 **取值范围：** - on: 开启 - off: 关闭  **默认取值：** 不涉及
    * userAgentFilter  userAgentFilter
    * originRequestUrlRewrite  **参数解释：** 回源URL改写，解决回源请求URL与源站URL不匹配的问题 **约束限制：** 最多配置20条
    * flexibleOrigin  **参数解释：** 高级回源，实现根据不同的资源类型或路径回源到不同源站 **约束限制：** 最多配置20条
    * sliceEtagStatus  **参数解释：** 回源是否校验ETag，开启此项配置后，当用户再次请求节点已缓存资源时，会将ETag的值加入到判断资源是否过期的逻辑 **约束限制：** 不涉及 **取值范围：** - on: 开启 - off: 关闭  **默认取值：** 不涉及
    * originReceiveTimeout  **参数解释：** 自定义设置CDN节点回源时的超时时间，请求超时即表示此次回源失败 **约束限制：** 不涉及 **取值范围：** 5-300，单位：秒 **默认取值：** 不涉及
    * remoteAuth  remoteAuth
    * websocket  websocket
    * videoSeek  videoSeek
    * requestLimitRules  **参数解释：** 请求限速，将用户请求速度限制在指定范围内，一定程度上减少突发高带宽风险，节省成本 **约束限制：** 不涉及
    * ipFrequencyLimit  ipFrequencyLimit
    * hsts  hsts
    * quic  quic
    * errorCodeRedirectRules  **参数解释：** 自定义错误页面，当访问页面出错时，会给客户端返回指定的页面，优化用户体验 **约束限制：** 不涉及
    * sni  sni
    * requestUrlRewrite  **参数解释：** 访问URL重写，当用户请求URL与CDN节点缓存资源的URL不一致时，可以通过访问URL重写功能重定向到目标URL **约束限制：** 不涉及
    * browserCacheRules  **参数解释：** 浏览器缓存过期时间，当终端用户请求资源时，如果浏览器有缓存，直接返回给用户 **约束限制：** 不涉及
    * accessAreaFilter  accessAreaFilter
    * clientCert  clientCert
    * httpsTlsVersion  httpsTlsVersion
    * flowLimitStrategy  **参数解释：** 设置用量封顶阈值，当实际用量大于阈值时停用域名，有效预防流量盗刷或恶意攻击带来的高额账单。  > 由于监控数据存在时延，域名将在用量达到阈值后的10分钟左右被停用  **约束限制：** 不涉及
    * bandwidthAlarmStrategy  bandwidthAlarmStrategy
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'businessType' => 'business_type',
            'serviceArea' => 'service_area',
            'remark' => 'remark',
            'originRequestHeader' => 'origin_request_header',
            'httpResponseHeader' => 'http_response_header',
            'urlAuth' => 'url_auth',
            'https' => 'https',
            'sources' => 'sources',
            'originProtocol' => 'origin_protocol',
            'originFollow302Status' => 'origin_follow302_status',
            'cacheRules' => 'cache_rules',
            'ipFilter' => 'ip_filter',
            'referer' => 'referer',
            'forceRedirect' => 'force_redirect',
            'compress' => 'compress',
            'cacheUrlParameterFilter' => 'cache_url_parameter_filter',
            'ipv6Accelerate' => 'ipv6_accelerate',
            'errorCodeCache' => 'error_code_cache',
            'originRangeStatus' => 'origin_range_status',
            'userAgentFilter' => 'user_agent_filter',
            'originRequestUrlRewrite' => 'origin_request_url_rewrite',
            'flexibleOrigin' => 'flexible_origin',
            'sliceEtagStatus' => 'slice_etag_status',
            'originReceiveTimeout' => 'origin_receive_timeout',
            'remoteAuth' => 'remote_auth',
            'websocket' => 'websocket',
            'videoSeek' => 'video_seek',
            'requestLimitRules' => 'request_limit_rules',
            'ipFrequencyLimit' => 'ip_frequency_limit',
            'hsts' => 'hsts',
            'quic' => 'quic',
            'errorCodeRedirectRules' => 'error_code_redirect_rules',
            'sni' => 'sni',
            'requestUrlRewrite' => 'request_url_rewrite',
            'browserCacheRules' => 'browser_cache_rules',
            'accessAreaFilter' => 'access_area_filter',
            'clientCert' => 'client_cert',
            'httpsTlsVersion' => 'https_tls_version',
            'flowLimitStrategy' => 'flow_limit_strategy',
            'bandwidthAlarmStrategy' => 'bandwidth_alarm_strategy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * businessType  **参数解释：** 业务类型 **约束限制：** 暂不支持“全站加速”变更为其它业务类型 **取值范围：** - web: 网站加速 - download: 文件下载加速 - video: 点播加速  **默认取值：** 不涉及
    * serviceArea  **参数解释：** 加速域名的服务范围，客户端访问将会调度到服务范围内的CDN节点，可根据用户聚集区域选择合适的范围 **约束限制：** - 暂不支持“中国大陆”与“中国大陆境外”互相直接切换 - 服务范围修改为中国大陆或全球时，加速域名需要到工信部备案  **取值范围：** - mainland_china：中国大陆 - global：全球 - outside_mainland_china：中国大陆境外  **默认取值：** 不涉及
    * remark  **参数解释：** 域名备注信息 **约束限制：** 不涉及 **取值范围：** 0-10000个字符 **默认取值：** 不涉及
    * originRequestHeader  **参数解释：** 回源请求头，CDN节点回源时，根据回源请求头配置操作请求的HTTP头部信息 **约束限制：** - 修改时该功能将覆盖原有配置（清空之前的配置），在使用此接口时，请上传全量头部信息 - 如果域名在后台配置了特殊请求头，需要将对应的请求头一并传入
    * httpResponseHeader  **参数解释：** HTTP响应头，CDN节点响应客户端时，根据HTTP响应头配置操作响应的HTTP头部信息 **约束限制：** - 修改时该功能将覆盖原有配置（清空之前的配置），在使用此接口时，请上传全量头部信息 - 如果域名在后台配置了特殊响应头，需要将对应的响应头一并传入
    * urlAuth  urlAuth
    * https  https
    * sources  **参数解释：** 配置加速域名的源站，CDN通过加速域名将源站上需要加速的内容缓存到CDN节点，达到加速访问资源的效果 **约束限制：** 不涉及
    * originProtocol  **参数解释：** 指定CDN回源时的请求协议 **约束限制：** 不涉及 **取值范围：** - follow: 协议跟随 - http: http协议 - https: https协议  **默认取值：** http: http协议
    * originFollow302Status  **参数解释：** 开启回源跟随，当源站地址因业务需求做了301/302 重定向，CDN节点会先跳转到301/302对应地址获取资源，缓存后再返回给用户 **约束限制：** 不涉及 **取值范围：** - on: 开启 - off: 关闭  **默认取值：** 不涉及
    * cacheRules  **参数解释：** 通过不同参数控制源站资源在CDN节点的缓存时长 **约束限制：** 必须存在一条所有文件类型的规则
    * ipFilter  ipFilter
    * referer  referer
    * forceRedirect  forceRedirect
    * compress  compress
    * cacheUrlParameterFilter  cacheUrlParameterFilter
    * ipv6Accelerate  **参数解释：** 配置客户端用IPv6协议访问CDN节点 **约束限制：** 不涉及 **取值范围：** - 1: 开启 - 0: 关闭  **默认取值：** 不涉及
    * errorCodeCache  **参数解释：** 将源站返回的错误状态码缓存到CDN节点，用户再次请求时由CDN直接响应给用户错误码 **约束限制：** 不涉及
    * originRangeStatus  **参数解释：** Range回源，开启后，源站在收到CDN节点回源请求时，根据HTTP请求头中的Range信息返回指定范围的数据给CDN节点 **约束限制：** 开启Range回源的前提是您的源站支持Range请求，即HTTP请求头中包含Range字段，否则可能导致回源失败 **取值范围：** - on: 开启 - off: 关闭  **默认取值：** 不涉及
    * userAgentFilter  userAgentFilter
    * originRequestUrlRewrite  **参数解释：** 回源URL改写，解决回源请求URL与源站URL不匹配的问题 **约束限制：** 最多配置20条
    * flexibleOrigin  **参数解释：** 高级回源，实现根据不同的资源类型或路径回源到不同源站 **约束限制：** 最多配置20条
    * sliceEtagStatus  **参数解释：** 回源是否校验ETag，开启此项配置后，当用户再次请求节点已缓存资源时，会将ETag的值加入到判断资源是否过期的逻辑 **约束限制：** 不涉及 **取值范围：** - on: 开启 - off: 关闭  **默认取值：** 不涉及
    * originReceiveTimeout  **参数解释：** 自定义设置CDN节点回源时的超时时间，请求超时即表示此次回源失败 **约束限制：** 不涉及 **取值范围：** 5-300，单位：秒 **默认取值：** 不涉及
    * remoteAuth  remoteAuth
    * websocket  websocket
    * videoSeek  videoSeek
    * requestLimitRules  **参数解释：** 请求限速，将用户请求速度限制在指定范围内，一定程度上减少突发高带宽风险，节省成本 **约束限制：** 不涉及
    * ipFrequencyLimit  ipFrequencyLimit
    * hsts  hsts
    * quic  quic
    * errorCodeRedirectRules  **参数解释：** 自定义错误页面，当访问页面出错时，会给客户端返回指定的页面，优化用户体验 **约束限制：** 不涉及
    * sni  sni
    * requestUrlRewrite  **参数解释：** 访问URL重写，当用户请求URL与CDN节点缓存资源的URL不一致时，可以通过访问URL重写功能重定向到目标URL **约束限制：** 不涉及
    * browserCacheRules  **参数解释：** 浏览器缓存过期时间，当终端用户请求资源时，如果浏览器有缓存，直接返回给用户 **约束限制：** 不涉及
    * accessAreaFilter  accessAreaFilter
    * clientCert  clientCert
    * httpsTlsVersion  httpsTlsVersion
    * flowLimitStrategy  **参数解释：** 设置用量封顶阈值，当实际用量大于阈值时停用域名，有效预防流量盗刷或恶意攻击带来的高额账单。  > 由于监控数据存在时延，域名将在用量达到阈值后的10分钟左右被停用  **约束限制：** 不涉及
    * bandwidthAlarmStrategy  bandwidthAlarmStrategy
    *
    * @var string[]
    */
    protected static $setters = [
            'businessType' => 'setBusinessType',
            'serviceArea' => 'setServiceArea',
            'remark' => 'setRemark',
            'originRequestHeader' => 'setOriginRequestHeader',
            'httpResponseHeader' => 'setHttpResponseHeader',
            'urlAuth' => 'setUrlAuth',
            'https' => 'setHttps',
            'sources' => 'setSources',
            'originProtocol' => 'setOriginProtocol',
            'originFollow302Status' => 'setOriginFollow302Status',
            'cacheRules' => 'setCacheRules',
            'ipFilter' => 'setIpFilter',
            'referer' => 'setReferer',
            'forceRedirect' => 'setForceRedirect',
            'compress' => 'setCompress',
            'cacheUrlParameterFilter' => 'setCacheUrlParameterFilter',
            'ipv6Accelerate' => 'setIpv6Accelerate',
            'errorCodeCache' => 'setErrorCodeCache',
            'originRangeStatus' => 'setOriginRangeStatus',
            'userAgentFilter' => 'setUserAgentFilter',
            'originRequestUrlRewrite' => 'setOriginRequestUrlRewrite',
            'flexibleOrigin' => 'setFlexibleOrigin',
            'sliceEtagStatus' => 'setSliceEtagStatus',
            'originReceiveTimeout' => 'setOriginReceiveTimeout',
            'remoteAuth' => 'setRemoteAuth',
            'websocket' => 'setWebsocket',
            'videoSeek' => 'setVideoSeek',
            'requestLimitRules' => 'setRequestLimitRules',
            'ipFrequencyLimit' => 'setIpFrequencyLimit',
            'hsts' => 'setHsts',
            'quic' => 'setQuic',
            'errorCodeRedirectRules' => 'setErrorCodeRedirectRules',
            'sni' => 'setSni',
            'requestUrlRewrite' => 'setRequestUrlRewrite',
            'browserCacheRules' => 'setBrowserCacheRules',
            'accessAreaFilter' => 'setAccessAreaFilter',
            'clientCert' => 'setClientCert',
            'httpsTlsVersion' => 'setHttpsTlsVersion',
            'flowLimitStrategy' => 'setFlowLimitStrategy',
            'bandwidthAlarmStrategy' => 'setBandwidthAlarmStrategy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * businessType  **参数解释：** 业务类型 **约束限制：** 暂不支持“全站加速”变更为其它业务类型 **取值范围：** - web: 网站加速 - download: 文件下载加速 - video: 点播加速  **默认取值：** 不涉及
    * serviceArea  **参数解释：** 加速域名的服务范围，客户端访问将会调度到服务范围内的CDN节点，可根据用户聚集区域选择合适的范围 **约束限制：** - 暂不支持“中国大陆”与“中国大陆境外”互相直接切换 - 服务范围修改为中国大陆或全球时，加速域名需要到工信部备案  **取值范围：** - mainland_china：中国大陆 - global：全球 - outside_mainland_china：中国大陆境外  **默认取值：** 不涉及
    * remark  **参数解释：** 域名备注信息 **约束限制：** 不涉及 **取值范围：** 0-10000个字符 **默认取值：** 不涉及
    * originRequestHeader  **参数解释：** 回源请求头，CDN节点回源时，根据回源请求头配置操作请求的HTTP头部信息 **约束限制：** - 修改时该功能将覆盖原有配置（清空之前的配置），在使用此接口时，请上传全量头部信息 - 如果域名在后台配置了特殊请求头，需要将对应的请求头一并传入
    * httpResponseHeader  **参数解释：** HTTP响应头，CDN节点响应客户端时，根据HTTP响应头配置操作响应的HTTP头部信息 **约束限制：** - 修改时该功能将覆盖原有配置（清空之前的配置），在使用此接口时，请上传全量头部信息 - 如果域名在后台配置了特殊响应头，需要将对应的响应头一并传入
    * urlAuth  urlAuth
    * https  https
    * sources  **参数解释：** 配置加速域名的源站，CDN通过加速域名将源站上需要加速的内容缓存到CDN节点，达到加速访问资源的效果 **约束限制：** 不涉及
    * originProtocol  **参数解释：** 指定CDN回源时的请求协议 **约束限制：** 不涉及 **取值范围：** - follow: 协议跟随 - http: http协议 - https: https协议  **默认取值：** http: http协议
    * originFollow302Status  **参数解释：** 开启回源跟随，当源站地址因业务需求做了301/302 重定向，CDN节点会先跳转到301/302对应地址获取资源，缓存后再返回给用户 **约束限制：** 不涉及 **取值范围：** - on: 开启 - off: 关闭  **默认取值：** 不涉及
    * cacheRules  **参数解释：** 通过不同参数控制源站资源在CDN节点的缓存时长 **约束限制：** 必须存在一条所有文件类型的规则
    * ipFilter  ipFilter
    * referer  referer
    * forceRedirect  forceRedirect
    * compress  compress
    * cacheUrlParameterFilter  cacheUrlParameterFilter
    * ipv6Accelerate  **参数解释：** 配置客户端用IPv6协议访问CDN节点 **约束限制：** 不涉及 **取值范围：** - 1: 开启 - 0: 关闭  **默认取值：** 不涉及
    * errorCodeCache  **参数解释：** 将源站返回的错误状态码缓存到CDN节点，用户再次请求时由CDN直接响应给用户错误码 **约束限制：** 不涉及
    * originRangeStatus  **参数解释：** Range回源，开启后，源站在收到CDN节点回源请求时，根据HTTP请求头中的Range信息返回指定范围的数据给CDN节点 **约束限制：** 开启Range回源的前提是您的源站支持Range请求，即HTTP请求头中包含Range字段，否则可能导致回源失败 **取值范围：** - on: 开启 - off: 关闭  **默认取值：** 不涉及
    * userAgentFilter  userAgentFilter
    * originRequestUrlRewrite  **参数解释：** 回源URL改写，解决回源请求URL与源站URL不匹配的问题 **约束限制：** 最多配置20条
    * flexibleOrigin  **参数解释：** 高级回源，实现根据不同的资源类型或路径回源到不同源站 **约束限制：** 最多配置20条
    * sliceEtagStatus  **参数解释：** 回源是否校验ETag，开启此项配置后，当用户再次请求节点已缓存资源时，会将ETag的值加入到判断资源是否过期的逻辑 **约束限制：** 不涉及 **取值范围：** - on: 开启 - off: 关闭  **默认取值：** 不涉及
    * originReceiveTimeout  **参数解释：** 自定义设置CDN节点回源时的超时时间，请求超时即表示此次回源失败 **约束限制：** 不涉及 **取值范围：** 5-300，单位：秒 **默认取值：** 不涉及
    * remoteAuth  remoteAuth
    * websocket  websocket
    * videoSeek  videoSeek
    * requestLimitRules  **参数解释：** 请求限速，将用户请求速度限制在指定范围内，一定程度上减少突发高带宽风险，节省成本 **约束限制：** 不涉及
    * ipFrequencyLimit  ipFrequencyLimit
    * hsts  hsts
    * quic  quic
    * errorCodeRedirectRules  **参数解释：** 自定义错误页面，当访问页面出错时，会给客户端返回指定的页面，优化用户体验 **约束限制：** 不涉及
    * sni  sni
    * requestUrlRewrite  **参数解释：** 访问URL重写，当用户请求URL与CDN节点缓存资源的URL不一致时，可以通过访问URL重写功能重定向到目标URL **约束限制：** 不涉及
    * browserCacheRules  **参数解释：** 浏览器缓存过期时间，当终端用户请求资源时，如果浏览器有缓存，直接返回给用户 **约束限制：** 不涉及
    * accessAreaFilter  accessAreaFilter
    * clientCert  clientCert
    * httpsTlsVersion  httpsTlsVersion
    * flowLimitStrategy  **参数解释：** 设置用量封顶阈值，当实际用量大于阈值时停用域名，有效预防流量盗刷或恶意攻击带来的高额账单。  > 由于监控数据存在时延，域名将在用量达到阈值后的10分钟左右被停用  **约束限制：** 不涉及
    * bandwidthAlarmStrategy  bandwidthAlarmStrategy
    *
    * @var string[]
    */
    protected static $getters = [
            'businessType' => 'getBusinessType',
            'serviceArea' => 'getServiceArea',
            'remark' => 'getRemark',
            'originRequestHeader' => 'getOriginRequestHeader',
            'httpResponseHeader' => 'getHttpResponseHeader',
            'urlAuth' => 'getUrlAuth',
            'https' => 'getHttps',
            'sources' => 'getSources',
            'originProtocol' => 'getOriginProtocol',
            'originFollow302Status' => 'getOriginFollow302Status',
            'cacheRules' => 'getCacheRules',
            'ipFilter' => 'getIpFilter',
            'referer' => 'getReferer',
            'forceRedirect' => 'getForceRedirect',
            'compress' => 'getCompress',
            'cacheUrlParameterFilter' => 'getCacheUrlParameterFilter',
            'ipv6Accelerate' => 'getIpv6Accelerate',
            'errorCodeCache' => 'getErrorCodeCache',
            'originRangeStatus' => 'getOriginRangeStatus',
            'userAgentFilter' => 'getUserAgentFilter',
            'originRequestUrlRewrite' => 'getOriginRequestUrlRewrite',
            'flexibleOrigin' => 'getFlexibleOrigin',
            'sliceEtagStatus' => 'getSliceEtagStatus',
            'originReceiveTimeout' => 'getOriginReceiveTimeout',
            'remoteAuth' => 'getRemoteAuth',
            'websocket' => 'getWebsocket',
            'videoSeek' => 'getVideoSeek',
            'requestLimitRules' => 'getRequestLimitRules',
            'ipFrequencyLimit' => 'getIpFrequencyLimit',
            'hsts' => 'getHsts',
            'quic' => 'getQuic',
            'errorCodeRedirectRules' => 'getErrorCodeRedirectRules',
            'sni' => 'getSni',
            'requestUrlRewrite' => 'getRequestUrlRewrite',
            'browserCacheRules' => 'getBrowserCacheRules',
            'accessAreaFilter' => 'getAccessAreaFilter',
            'clientCert' => 'getClientCert',
            'httpsTlsVersion' => 'getHttpsTlsVersion',
            'flowLimitStrategy' => 'getFlowLimitStrategy',
            'bandwidthAlarmStrategy' => 'getBandwidthAlarmStrategy'
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
        $this->container['businessType'] = isset($data['businessType']) ? $data['businessType'] : null;
        $this->container['serviceArea'] = isset($data['serviceArea']) ? $data['serviceArea'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['originRequestHeader'] = isset($data['originRequestHeader']) ? $data['originRequestHeader'] : null;
        $this->container['httpResponseHeader'] = isset($data['httpResponseHeader']) ? $data['httpResponseHeader'] : null;
        $this->container['urlAuth'] = isset($data['urlAuth']) ? $data['urlAuth'] : null;
        $this->container['https'] = isset($data['https']) ? $data['https'] : null;
        $this->container['sources'] = isset($data['sources']) ? $data['sources'] : null;
        $this->container['originProtocol'] = isset($data['originProtocol']) ? $data['originProtocol'] : null;
        $this->container['originFollow302Status'] = isset($data['originFollow302Status']) ? $data['originFollow302Status'] : null;
        $this->container['cacheRules'] = isset($data['cacheRules']) ? $data['cacheRules'] : null;
        $this->container['ipFilter'] = isset($data['ipFilter']) ? $data['ipFilter'] : null;
        $this->container['referer'] = isset($data['referer']) ? $data['referer'] : null;
        $this->container['forceRedirect'] = isset($data['forceRedirect']) ? $data['forceRedirect'] : null;
        $this->container['compress'] = isset($data['compress']) ? $data['compress'] : null;
        $this->container['cacheUrlParameterFilter'] = isset($data['cacheUrlParameterFilter']) ? $data['cacheUrlParameterFilter'] : null;
        $this->container['ipv6Accelerate'] = isset($data['ipv6Accelerate']) ? $data['ipv6Accelerate'] : null;
        $this->container['errorCodeCache'] = isset($data['errorCodeCache']) ? $data['errorCodeCache'] : null;
        $this->container['originRangeStatus'] = isset($data['originRangeStatus']) ? $data['originRangeStatus'] : null;
        $this->container['userAgentFilter'] = isset($data['userAgentFilter']) ? $data['userAgentFilter'] : null;
        $this->container['originRequestUrlRewrite'] = isset($data['originRequestUrlRewrite']) ? $data['originRequestUrlRewrite'] : null;
        $this->container['flexibleOrigin'] = isset($data['flexibleOrigin']) ? $data['flexibleOrigin'] : null;
        $this->container['sliceEtagStatus'] = isset($data['sliceEtagStatus']) ? $data['sliceEtagStatus'] : null;
        $this->container['originReceiveTimeout'] = isset($data['originReceiveTimeout']) ? $data['originReceiveTimeout'] : null;
        $this->container['remoteAuth'] = isset($data['remoteAuth']) ? $data['remoteAuth'] : null;
        $this->container['websocket'] = isset($data['websocket']) ? $data['websocket'] : null;
        $this->container['videoSeek'] = isset($data['videoSeek']) ? $data['videoSeek'] : null;
        $this->container['requestLimitRules'] = isset($data['requestLimitRules']) ? $data['requestLimitRules'] : null;
        $this->container['ipFrequencyLimit'] = isset($data['ipFrequencyLimit']) ? $data['ipFrequencyLimit'] : null;
        $this->container['hsts'] = isset($data['hsts']) ? $data['hsts'] : null;
        $this->container['quic'] = isset($data['quic']) ? $data['quic'] : null;
        $this->container['errorCodeRedirectRules'] = isset($data['errorCodeRedirectRules']) ? $data['errorCodeRedirectRules'] : null;
        $this->container['sni'] = isset($data['sni']) ? $data['sni'] : null;
        $this->container['requestUrlRewrite'] = isset($data['requestUrlRewrite']) ? $data['requestUrlRewrite'] : null;
        $this->container['browserCacheRules'] = isset($data['browserCacheRules']) ? $data['browserCacheRules'] : null;
        $this->container['accessAreaFilter'] = isset($data['accessAreaFilter']) ? $data['accessAreaFilter'] : null;
        $this->container['clientCert'] = isset($data['clientCert']) ? $data['clientCert'] : null;
        $this->container['httpsTlsVersion'] = isset($data['httpsTlsVersion']) ? $data['httpsTlsVersion'] : null;
        $this->container['flowLimitStrategy'] = isset($data['flowLimitStrategy']) ? $data['flowLimitStrategy'] : null;
        $this->container['bandwidthAlarmStrategy'] = isset($data['bandwidthAlarmStrategy']) ? $data['bandwidthAlarmStrategy'] : null;
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
    * Gets businessType
    *  **参数解释：** 业务类型 **约束限制：** 暂不支持“全站加速”变更为其它业务类型 **取值范围：** - web: 网站加速 - download: 文件下载加速 - video: 点播加速  **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getBusinessType()
    {
        return $this->container['businessType'];
    }

    /**
    * Sets businessType
    *
    * @param string|null $businessType **参数解释：** 业务类型 **约束限制：** 暂不支持“全站加速”变更为其它业务类型 **取值范围：** - web: 网站加速 - download: 文件下载加速 - video: 点播加速  **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setBusinessType($businessType)
    {
        $this->container['businessType'] = $businessType;
        return $this;
    }

    /**
    * Gets serviceArea
    *  **参数解释：** 加速域名的服务范围，客户端访问将会调度到服务范围内的CDN节点，可根据用户聚集区域选择合适的范围 **约束限制：** - 暂不支持“中国大陆”与“中国大陆境外”互相直接切换 - 服务范围修改为中国大陆或全球时，加速域名需要到工信部备案  **取值范围：** - mainland_china：中国大陆 - global：全球 - outside_mainland_china：中国大陆境外  **默认取值：** 不涉及
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
    * @param string|null $serviceArea **参数解释：** 加速域名的服务范围，客户端访问将会调度到服务范围内的CDN节点，可根据用户聚集区域选择合适的范围 **约束限制：** - 暂不支持“中国大陆”与“中国大陆境外”互相直接切换 - 服务范围修改为中国大陆或全球时，加速域名需要到工信部备案  **取值范围：** - mainland_china：中国大陆 - global：全球 - outside_mainland_china：中国大陆境外  **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setServiceArea($serviceArea)
    {
        $this->container['serviceArea'] = $serviceArea;
        return $this;
    }

    /**
    * Gets remark
    *  **参数解释：** 域名备注信息 **约束限制：** 不涉及 **取值范围：** 0-10000个字符 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
    * Sets remark
    *
    * @param string|null $remark **参数解释：** 域名备注信息 **约束限制：** 不涉及 **取值范围：** 0-10000个字符 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;
        return $this;
    }

    /**
    * Gets originRequestHeader
    *  **参数解释：** 回源请求头，CDN节点回源时，根据回源请求头配置操作请求的HTTP头部信息 **约束限制：** - 修改时该功能将覆盖原有配置（清空之前的配置），在使用此接口时，请上传全量头部信息 - 如果域名在后台配置了特殊请求头，需要将对应的请求头一并传入
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\OriginRequestHeader[]|null
    */
    public function getOriginRequestHeader()
    {
        return $this->container['originRequestHeader'];
    }

    /**
    * Sets originRequestHeader
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\OriginRequestHeader[]|null $originRequestHeader **参数解释：** 回源请求头，CDN节点回源时，根据回源请求头配置操作请求的HTTP头部信息 **约束限制：** - 修改时该功能将覆盖原有配置（清空之前的配置），在使用此接口时，请上传全量头部信息 - 如果域名在后台配置了特殊请求头，需要将对应的请求头一并传入
    *
    * @return $this
    */
    public function setOriginRequestHeader($originRequestHeader)
    {
        $this->container['originRequestHeader'] = $originRequestHeader;
        return $this;
    }

    /**
    * Gets httpResponseHeader
    *  **参数解释：** HTTP响应头，CDN节点响应客户端时，根据HTTP响应头配置操作响应的HTTP头部信息 **约束限制：** - 修改时该功能将覆盖原有配置（清空之前的配置），在使用此接口时，请上传全量头部信息 - 如果域名在后台配置了特殊响应头，需要将对应的响应头一并传入
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\HttpResponseHeader[]|null
    */
    public function getHttpResponseHeader()
    {
        return $this->container['httpResponseHeader'];
    }

    /**
    * Sets httpResponseHeader
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\HttpResponseHeader[]|null $httpResponseHeader **参数解释：** HTTP响应头，CDN节点响应客户端时，根据HTTP响应头配置操作响应的HTTP头部信息 **约束限制：** - 修改时该功能将覆盖原有配置（清空之前的配置），在使用此接口时，请上传全量头部信息 - 如果域名在后台配置了特殊响应头，需要将对应的响应头一并传入
    *
    * @return $this
    */
    public function setHttpResponseHeader($httpResponseHeader)
    {
        $this->container['httpResponseHeader'] = $httpResponseHeader;
        return $this;
    }

    /**
    * Gets urlAuth
    *  urlAuth
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\UrlAuth|null
    */
    public function getUrlAuth()
    {
        return $this->container['urlAuth'];
    }

    /**
    * Sets urlAuth
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\UrlAuth|null $urlAuth urlAuth
    *
    * @return $this
    */
    public function setUrlAuth($urlAuth)
    {
        $this->container['urlAuth'] = $urlAuth;
        return $this;
    }

    /**
    * Gets https
    *  https
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\HttpPutBody|null
    */
    public function getHttps()
    {
        return $this->container['https'];
    }

    /**
    * Sets https
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\HttpPutBody|null $https https
    *
    * @return $this
    */
    public function setHttps($https)
    {
        $this->container['https'] = $https;
        return $this;
    }

    /**
    * Gets sources
    *  **参数解释：** 配置加速域名的源站，CDN通过加速域名将源站上需要加速的内容缓存到CDN节点，达到加速访问资源的效果 **约束限制：** 不涉及
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\SourcesConfig[]|null
    */
    public function getSources()
    {
        return $this->container['sources'];
    }

    /**
    * Sets sources
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\SourcesConfig[]|null $sources **参数解释：** 配置加速域名的源站，CDN通过加速域名将源站上需要加速的内容缓存到CDN节点，达到加速访问资源的效果 **约束限制：** 不涉及
    *
    * @return $this
    */
    public function setSources($sources)
    {
        $this->container['sources'] = $sources;
        return $this;
    }

    /**
    * Gets originProtocol
    *  **参数解释：** 指定CDN回源时的请求协议 **约束限制：** 不涉及 **取值范围：** - follow: 协议跟随 - http: http协议 - https: https协议  **默认取值：** http: http协议
    *
    * @return string|null
    */
    public function getOriginProtocol()
    {
        return $this->container['originProtocol'];
    }

    /**
    * Sets originProtocol
    *
    * @param string|null $originProtocol **参数解释：** 指定CDN回源时的请求协议 **约束限制：** 不涉及 **取值范围：** - follow: 协议跟随 - http: http协议 - https: https协议  **默认取值：** http: http协议
    *
    * @return $this
    */
    public function setOriginProtocol($originProtocol)
    {
        $this->container['originProtocol'] = $originProtocol;
        return $this;
    }

    /**
    * Gets originFollow302Status
    *  **参数解释：** 开启回源跟随，当源站地址因业务需求做了301/302 重定向，CDN节点会先跳转到301/302对应地址获取资源，缓存后再返回给用户 **约束限制：** 不涉及 **取值范围：** - on: 开启 - off: 关闭  **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getOriginFollow302Status()
    {
        return $this->container['originFollow302Status'];
    }

    /**
    * Sets originFollow302Status
    *
    * @param string|null $originFollow302Status **参数解释：** 开启回源跟随，当源站地址因业务需求做了301/302 重定向，CDN节点会先跳转到301/302对应地址获取资源，缓存后再返回给用户 **约束限制：** 不涉及 **取值范围：** - on: 开启 - off: 关闭  **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setOriginFollow302Status($originFollow302Status)
    {
        $this->container['originFollow302Status'] = $originFollow302Status;
        return $this;
    }

    /**
    * Gets cacheRules
    *  **参数解释：** 通过不同参数控制源站资源在CDN节点的缓存时长 **约束限制：** 必须存在一条所有文件类型的规则
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\CacheRules[]|null
    */
    public function getCacheRules()
    {
        return $this->container['cacheRules'];
    }

    /**
    * Sets cacheRules
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\CacheRules[]|null $cacheRules **参数解释：** 通过不同参数控制源站资源在CDN节点的缓存时长 **约束限制：** 必须存在一条所有文件类型的规则
    *
    * @return $this
    */
    public function setCacheRules($cacheRules)
    {
        $this->container['cacheRules'] = $cacheRules;
        return $this;
    }

    /**
    * Gets ipFilter
    *  ipFilter
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\IpFilter|null
    */
    public function getIpFilter()
    {
        return $this->container['ipFilter'];
    }

    /**
    * Sets ipFilter
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\IpFilter|null $ipFilter ipFilter
    *
    * @return $this
    */
    public function setIpFilter($ipFilter)
    {
        $this->container['ipFilter'] = $ipFilter;
        return $this;
    }

    /**
    * Gets referer
    *  referer
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\RefererConfig|null
    */
    public function getReferer()
    {
        return $this->container['referer'];
    }

    /**
    * Sets referer
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\RefererConfig|null $referer referer
    *
    * @return $this
    */
    public function setReferer($referer)
    {
        $this->container['referer'] = $referer;
        return $this;
    }

    /**
    * Gets forceRedirect
    *  forceRedirect
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\ForceRedirectConfig|null
    */
    public function getForceRedirect()
    {
        return $this->container['forceRedirect'];
    }

    /**
    * Sets forceRedirect
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\ForceRedirectConfig|null $forceRedirect forceRedirect
    *
    * @return $this
    */
    public function setForceRedirect($forceRedirect)
    {
        $this->container['forceRedirect'] = $forceRedirect;
        return $this;
    }

    /**
    * Gets compress
    *  compress
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\Compress|null
    */
    public function getCompress()
    {
        return $this->container['compress'];
    }

    /**
    * Sets compress
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\Compress|null $compress compress
    *
    * @return $this
    */
    public function setCompress($compress)
    {
        $this->container['compress'] = $compress;
        return $this;
    }

    /**
    * Gets cacheUrlParameterFilter
    *  cacheUrlParameterFilter
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\CacheUrlParameterFilter|null
    */
    public function getCacheUrlParameterFilter()
    {
        return $this->container['cacheUrlParameterFilter'];
    }

    /**
    * Sets cacheUrlParameterFilter
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\CacheUrlParameterFilter|null $cacheUrlParameterFilter cacheUrlParameterFilter
    *
    * @return $this
    */
    public function setCacheUrlParameterFilter($cacheUrlParameterFilter)
    {
        $this->container['cacheUrlParameterFilter'] = $cacheUrlParameterFilter;
        return $this;
    }

    /**
    * Gets ipv6Accelerate
    *  **参数解释：** 配置客户端用IPv6协议访问CDN节点 **约束限制：** 不涉及 **取值范围：** - 1: 开启 - 0: 关闭  **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getIpv6Accelerate()
    {
        return $this->container['ipv6Accelerate'];
    }

    /**
    * Sets ipv6Accelerate
    *
    * @param int|null $ipv6Accelerate **参数解释：** 配置客户端用IPv6协议访问CDN节点 **约束限制：** 不涉及 **取值范围：** - 1: 开启 - 0: 关闭  **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setIpv6Accelerate($ipv6Accelerate)
    {
        $this->container['ipv6Accelerate'] = $ipv6Accelerate;
        return $this;
    }

    /**
    * Gets errorCodeCache
    *  **参数解释：** 将源站返回的错误状态码缓存到CDN节点，用户再次请求时由CDN直接响应给用户错误码 **约束限制：** 不涉及
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\ErrorCodeCache[]|null
    */
    public function getErrorCodeCache()
    {
        return $this->container['errorCodeCache'];
    }

    /**
    * Sets errorCodeCache
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\ErrorCodeCache[]|null $errorCodeCache **参数解释：** 将源站返回的错误状态码缓存到CDN节点，用户再次请求时由CDN直接响应给用户错误码 **约束限制：** 不涉及
    *
    * @return $this
    */
    public function setErrorCodeCache($errorCodeCache)
    {
        $this->container['errorCodeCache'] = $errorCodeCache;
        return $this;
    }

    /**
    * Gets originRangeStatus
    *  **参数解释：** Range回源，开启后，源站在收到CDN节点回源请求时，根据HTTP请求头中的Range信息返回指定范围的数据给CDN节点 **约束限制：** 开启Range回源的前提是您的源站支持Range请求，即HTTP请求头中包含Range字段，否则可能导致回源失败 **取值范围：** - on: 开启 - off: 关闭  **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getOriginRangeStatus()
    {
        return $this->container['originRangeStatus'];
    }

    /**
    * Sets originRangeStatus
    *
    * @param string|null $originRangeStatus **参数解释：** Range回源，开启后，源站在收到CDN节点回源请求时，根据HTTP请求头中的Range信息返回指定范围的数据给CDN节点 **约束限制：** 开启Range回源的前提是您的源站支持Range请求，即HTTP请求头中包含Range字段，否则可能导致回源失败 **取值范围：** - on: 开启 - off: 关闭  **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setOriginRangeStatus($originRangeStatus)
    {
        $this->container['originRangeStatus'] = $originRangeStatus;
        return $this;
    }

    /**
    * Gets userAgentFilter
    *  userAgentFilter
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\UserAgentFilter|null
    */
    public function getUserAgentFilter()
    {
        return $this->container['userAgentFilter'];
    }

    /**
    * Sets userAgentFilter
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\UserAgentFilter|null $userAgentFilter userAgentFilter
    *
    * @return $this
    */
    public function setUserAgentFilter($userAgentFilter)
    {
        $this->container['userAgentFilter'] = $userAgentFilter;
        return $this;
    }

    /**
    * Gets originRequestUrlRewrite
    *  **参数解释：** 回源URL改写，解决回源请求URL与源站URL不匹配的问题 **约束限制：** 最多配置20条
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\OriginRequestUrlRewrite[]|null
    */
    public function getOriginRequestUrlRewrite()
    {
        return $this->container['originRequestUrlRewrite'];
    }

    /**
    * Sets originRequestUrlRewrite
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\OriginRequestUrlRewrite[]|null $originRequestUrlRewrite **参数解释：** 回源URL改写，解决回源请求URL与源站URL不匹配的问题 **约束限制：** 最多配置20条
    *
    * @return $this
    */
    public function setOriginRequestUrlRewrite($originRequestUrlRewrite)
    {
        $this->container['originRequestUrlRewrite'] = $originRequestUrlRewrite;
        return $this;
    }

    /**
    * Gets flexibleOrigin
    *  **参数解释：** 高级回源，实现根据不同的资源类型或路径回源到不同源站 **约束限制：** 最多配置20条
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\FlexibleOrigins[]|null
    */
    public function getFlexibleOrigin()
    {
        return $this->container['flexibleOrigin'];
    }

    /**
    * Sets flexibleOrigin
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\FlexibleOrigins[]|null $flexibleOrigin **参数解释：** 高级回源，实现根据不同的资源类型或路径回源到不同源站 **约束限制：** 最多配置20条
    *
    * @return $this
    */
    public function setFlexibleOrigin($flexibleOrigin)
    {
        $this->container['flexibleOrigin'] = $flexibleOrigin;
        return $this;
    }

    /**
    * Gets sliceEtagStatus
    *  **参数解释：** 回源是否校验ETag，开启此项配置后，当用户再次请求节点已缓存资源时，会将ETag的值加入到判断资源是否过期的逻辑 **约束限制：** 不涉及 **取值范围：** - on: 开启 - off: 关闭  **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getSliceEtagStatus()
    {
        return $this->container['sliceEtagStatus'];
    }

    /**
    * Sets sliceEtagStatus
    *
    * @param string|null $sliceEtagStatus **参数解释：** 回源是否校验ETag，开启此项配置后，当用户再次请求节点已缓存资源时，会将ETag的值加入到判断资源是否过期的逻辑 **约束限制：** 不涉及 **取值范围：** - on: 开启 - off: 关闭  **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setSliceEtagStatus($sliceEtagStatus)
    {
        $this->container['sliceEtagStatus'] = $sliceEtagStatus;
        return $this;
    }

    /**
    * Gets originReceiveTimeout
    *  **参数解释：** 自定义设置CDN节点回源时的超时时间，请求超时即表示此次回源失败 **约束限制：** 不涉及 **取值范围：** 5-300，单位：秒 **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getOriginReceiveTimeout()
    {
        return $this->container['originReceiveTimeout'];
    }

    /**
    * Sets originReceiveTimeout
    *
    * @param int|null $originReceiveTimeout **参数解释：** 自定义设置CDN节点回源时的超时时间，请求超时即表示此次回源失败 **约束限制：** 不涉及 **取值范围：** 5-300，单位：秒 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setOriginReceiveTimeout($originReceiveTimeout)
    {
        $this->container['originReceiveTimeout'] = $originReceiveTimeout;
        return $this;
    }

    /**
    * Gets remoteAuth
    *  remoteAuth
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\CommonRemoteAuth|null
    */
    public function getRemoteAuth()
    {
        return $this->container['remoteAuth'];
    }

    /**
    * Sets remoteAuth
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\CommonRemoteAuth|null $remoteAuth remoteAuth
    *
    * @return $this
    */
    public function setRemoteAuth($remoteAuth)
    {
        $this->container['remoteAuth'] = $remoteAuth;
        return $this;
    }

    /**
    * Gets websocket
    *  websocket
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\WebSocketSeek|null
    */
    public function getWebsocket()
    {
        return $this->container['websocket'];
    }

    /**
    * Sets websocket
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\WebSocketSeek|null $websocket websocket
    *
    * @return $this
    */
    public function setWebsocket($websocket)
    {
        $this->container['websocket'] = $websocket;
        return $this;
    }

    /**
    * Gets videoSeek
    *  videoSeek
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\VideoSeek|null
    */
    public function getVideoSeek()
    {
        return $this->container['videoSeek'];
    }

    /**
    * Sets videoSeek
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\VideoSeek|null $videoSeek videoSeek
    *
    * @return $this
    */
    public function setVideoSeek($videoSeek)
    {
        $this->container['videoSeek'] = $videoSeek;
        return $this;
    }

    /**
    * Gets requestLimitRules
    *  **参数解释：** 请求限速，将用户请求速度限制在指定范围内，一定程度上减少突发高带宽风险，节省成本 **约束限制：** 不涉及
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\RequestLimitRules[]|null
    */
    public function getRequestLimitRules()
    {
        return $this->container['requestLimitRules'];
    }

    /**
    * Sets requestLimitRules
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\RequestLimitRules[]|null $requestLimitRules **参数解释：** 请求限速，将用户请求速度限制在指定范围内，一定程度上减少突发高带宽风险，节省成本 **约束限制：** 不涉及
    *
    * @return $this
    */
    public function setRequestLimitRules($requestLimitRules)
    {
        $this->container['requestLimitRules'] = $requestLimitRules;
        return $this;
    }

    /**
    * Gets ipFrequencyLimit
    *  ipFrequencyLimit
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\IpFrequencyLimit|null
    */
    public function getIpFrequencyLimit()
    {
        return $this->container['ipFrequencyLimit'];
    }

    /**
    * Sets ipFrequencyLimit
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\IpFrequencyLimit|null $ipFrequencyLimit ipFrequencyLimit
    *
    * @return $this
    */
    public function setIpFrequencyLimit($ipFrequencyLimit)
    {
        $this->container['ipFrequencyLimit'] = $ipFrequencyLimit;
        return $this;
    }

    /**
    * Gets hsts
    *  hsts
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\Hsts|null
    */
    public function getHsts()
    {
        return $this->container['hsts'];
    }

    /**
    * Sets hsts
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\Hsts|null $hsts hsts
    *
    * @return $this
    */
    public function setHsts($hsts)
    {
        $this->container['hsts'] = $hsts;
        return $this;
    }

    /**
    * Gets quic
    *  quic
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\Quic|null
    */
    public function getQuic()
    {
        return $this->container['quic'];
    }

    /**
    * Sets quic
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\Quic|null $quic quic
    *
    * @return $this
    */
    public function setQuic($quic)
    {
        $this->container['quic'] = $quic;
        return $this;
    }

    /**
    * Gets errorCodeRedirectRules
    *  **参数解释：** 自定义错误页面，当访问页面出错时，会给客户端返回指定的页面，优化用户体验 **约束限制：** 不涉及
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\ErrorCodeRedirectRules[]|null
    */
    public function getErrorCodeRedirectRules()
    {
        return $this->container['errorCodeRedirectRules'];
    }

    /**
    * Sets errorCodeRedirectRules
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\ErrorCodeRedirectRules[]|null $errorCodeRedirectRules **参数解释：** 自定义错误页面，当访问页面出错时，会给客户端返回指定的页面，优化用户体验 **约束限制：** 不涉及
    *
    * @return $this
    */
    public function setErrorCodeRedirectRules($errorCodeRedirectRules)
    {
        $this->container['errorCodeRedirectRules'] = $errorCodeRedirectRules;
        return $this;
    }

    /**
    * Gets sni
    *  sni
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\Sni|null
    */
    public function getSni()
    {
        return $this->container['sni'];
    }

    /**
    * Sets sni
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\Sni|null $sni sni
    *
    * @return $this
    */
    public function setSni($sni)
    {
        $this->container['sni'] = $sni;
        return $this;
    }

    /**
    * Gets requestUrlRewrite
    *  **参数解释：** 访问URL重写，当用户请求URL与CDN节点缓存资源的URL不一致时，可以通过访问URL重写功能重定向到目标URL **约束限制：** 不涉及
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\RequestUrlRewrite[]|null
    */
    public function getRequestUrlRewrite()
    {
        return $this->container['requestUrlRewrite'];
    }

    /**
    * Sets requestUrlRewrite
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\RequestUrlRewrite[]|null $requestUrlRewrite **参数解释：** 访问URL重写，当用户请求URL与CDN节点缓存资源的URL不一致时，可以通过访问URL重写功能重定向到目标URL **约束限制：** 不涉及
    *
    * @return $this
    */
    public function setRequestUrlRewrite($requestUrlRewrite)
    {
        $this->container['requestUrlRewrite'] = $requestUrlRewrite;
        return $this;
    }

    /**
    * Gets browserCacheRules
    *  **参数解释：** 浏览器缓存过期时间，当终端用户请求资源时，如果浏览器有缓存，直接返回给用户 **约束限制：** 不涉及
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\BrowserCacheRules[]|null
    */
    public function getBrowserCacheRules()
    {
        return $this->container['browserCacheRules'];
    }

    /**
    * Sets browserCacheRules
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\BrowserCacheRules[]|null $browserCacheRules **参数解释：** 浏览器缓存过期时间，当终端用户请求资源时，如果浏览器有缓存，直接返回给用户 **约束限制：** 不涉及
    *
    * @return $this
    */
    public function setBrowserCacheRules($browserCacheRules)
    {
        $this->container['browserCacheRules'] = $browserCacheRules;
        return $this;
    }

    /**
    * Gets accessAreaFilter
    *  accessAreaFilter
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\AccessAreaFilter[]|null
    */
    public function getAccessAreaFilter()
    {
        return $this->container['accessAreaFilter'];
    }

    /**
    * Sets accessAreaFilter
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\AccessAreaFilter[]|null $accessAreaFilter accessAreaFilter
    *
    * @return $this
    */
    public function setAccessAreaFilter($accessAreaFilter)
    {
        $this->container['accessAreaFilter'] = $accessAreaFilter;
        return $this;
    }

    /**
    * Gets clientCert
    *  clientCert
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\ClientCert|null
    */
    public function getClientCert()
    {
        return $this->container['clientCert'];
    }

    /**
    * Sets clientCert
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\ClientCert|null $clientCert clientCert
    *
    * @return $this
    */
    public function setClientCert($clientCert)
    {
        $this->container['clientCert'] = $clientCert;
        return $this;
    }

    /**
    * Gets httpsTlsVersion
    *  httpsTlsVersion
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\HttpsTlsVersion|null
    */
    public function getHttpsTlsVersion()
    {
        return $this->container['httpsTlsVersion'];
    }

    /**
    * Sets httpsTlsVersion
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\HttpsTlsVersion|null $httpsTlsVersion httpsTlsVersion
    *
    * @return $this
    */
    public function setHttpsTlsVersion($httpsTlsVersion)
    {
        $this->container['httpsTlsVersion'] = $httpsTlsVersion;
        return $this;
    }

    /**
    * Gets flowLimitStrategy
    *  **参数解释：** 设置用量封顶阈值，当实际用量大于阈值时停用域名，有效预防流量盗刷或恶意攻击带来的高额账单。  > 由于监控数据存在时延，域名将在用量达到阈值后的10分钟左右被停用  **约束限制：** 不涉及
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\FlowLimitStrategy[]|null
    */
    public function getFlowLimitStrategy()
    {
        return $this->container['flowLimitStrategy'];
    }

    /**
    * Sets flowLimitStrategy
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\FlowLimitStrategy[]|null $flowLimitStrategy **参数解释：** 设置用量封顶阈值，当实际用量大于阈值时停用域名，有效预防流量盗刷或恶意攻击带来的高额账单。  > 由于监控数据存在时延，域名将在用量达到阈值后的10分钟左右被停用  **约束限制：** 不涉及
    *
    * @return $this
    */
    public function setFlowLimitStrategy($flowLimitStrategy)
    {
        $this->container['flowLimitStrategy'] = $flowLimitStrategy;
        return $this;
    }

    /**
    * Gets bandwidthAlarmStrategy
    *  bandwidthAlarmStrategy
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\BandwidthAlarmStrategy|null
    */
    public function getBandwidthAlarmStrategy()
    {
        return $this->container['bandwidthAlarmStrategy'];
    }

    /**
    * Sets bandwidthAlarmStrategy
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\BandwidthAlarmStrategy|null $bandwidthAlarmStrategy bandwidthAlarmStrategy
    *
    * @return $this
    */
    public function setBandwidthAlarmStrategy($bandwidthAlarmStrategy)
    {
        $this->container['bandwidthAlarmStrategy'] = $bandwidthAlarmStrategy;
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

