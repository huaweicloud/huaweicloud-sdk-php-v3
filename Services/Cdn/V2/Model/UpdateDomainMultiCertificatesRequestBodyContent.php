<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateDomainMultiCertificatesRequestBodyContent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateDomainMultiCertificatesRequestBodyContent';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domainName  **参数解释：** 需要配置HTTPS证书的域名 **约束限制：** - 域名间以“,”分隔 - 最多配置50个域名  **取值范围：** 不涉及 **默认取值：** 不涉及
    * httpsSwitch  **参数解释：** 证书配置开关 **约束限制：** https_switch为1时，证书参数不能为空 **取值范围：** - 0: 关闭 - 1: 开启  **默认取值：** 不涉及
    * accessOriginWay  **参数解释：** 回源协议 **约束限制：** 不涉及 **取值范围：** - 1: 协议跟随 - 2: http协议 - 3: https协议  **默认取值：** 2: http协议
    * forceRedirectHttps  **参数解释：** 是否开启HTTPS强制跳转，强制客户端使用HTTPS协议访问CDN节点 > 此参数即将下线，建议使用force_redirect_config修改配置  **约束限制：** 不涉及 **取值范围：** - 0: 关闭 - 1: 开启  **默认取值：** 0: 关闭
    * forceRedirectConfig  forceRedirectConfig
    * http2  **参数解释：** HTTP/2开关，支持客户端采用HTTP/2协议访问CDN节点 **约束限制：** 不涉及 **取值范围：** - 0: 关闭 - 1: 开启  **默认取值：** 0: 关闭
    * certName  **参数解释：** 证书名称 **约束限制：** https_switch为1时，该参数必填 **取值范围：** 3-64个字符，由英文字母、数字及“-”、“_”、空格组成 **默认取值：** 不涉及
    * certificate  **参数解释：** SSL证书内容 **约束限制：** - 仅支持PEM编码格式 - 不启用证书则无需输入 - 初次配置证书时必传 - 需要传入完整证书链  **取值范围：** 证书链长度不超过20KB **默认取值：** 不涉及
    * privateKey  **参数解释：** SSL证书私钥内容 **约束限制：** - 仅支持PEM编码格式 - 不启用证书则无需输入 - 初次配置证书时必传  **取值范围：** 不涉及 **默认取值：** 不涉及
    * certificateType  **参数解释：** 证书类型 **约束限制：** 不涉及 **取值范围：** - 0: 自有证书 - 2: SCM证书  **默认取值：** 0: 自有证书
    * scmCertificateId  **参数解释：** SCM证书ID，可使用云证书与管理服务（CCM）的查询证书列表接口获取 **约束限制：** 配置SCM证书时必传 **取值范围：** 不涉及 **默认取值：** 不涉及
    * certificates  **参数解释：** 配置国际证书和国密证书双证书场景下的证书列表 **约束限制：** - 配置双证书时最多传2个证书，只能包含1个国际证书和1个国密证书 - 使用双证书配置时，cert_name/certificate/private_key等单证书参数不可再使用  **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domainName' => 'string',
            'httpsSwitch' => 'int',
            'accessOriginWay' => 'int',
            'forceRedirectHttps' => 'int',
            'forceRedirectConfig' => '\HuaweiCloud\SDK\Cdn\V2\Model\ForceRedirect',
            'http2' => 'int',
            'certName' => 'string',
            'certificate' => 'string',
            'privateKey' => 'string',
            'certificateType' => 'int',
            'scmCertificateId' => 'string',
            'certificates' => '\HuaweiCloud\SDK\Cdn\V2\Model\MultiCertificateBatchVo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domainName  **参数解释：** 需要配置HTTPS证书的域名 **约束限制：** - 域名间以“,”分隔 - 最多配置50个域名  **取值范围：** 不涉及 **默认取值：** 不涉及
    * httpsSwitch  **参数解释：** 证书配置开关 **约束限制：** https_switch为1时，证书参数不能为空 **取值范围：** - 0: 关闭 - 1: 开启  **默认取值：** 不涉及
    * accessOriginWay  **参数解释：** 回源协议 **约束限制：** 不涉及 **取值范围：** - 1: 协议跟随 - 2: http协议 - 3: https协议  **默认取值：** 2: http协议
    * forceRedirectHttps  **参数解释：** 是否开启HTTPS强制跳转，强制客户端使用HTTPS协议访问CDN节点 > 此参数即将下线，建议使用force_redirect_config修改配置  **约束限制：** 不涉及 **取值范围：** - 0: 关闭 - 1: 开启  **默认取值：** 0: 关闭
    * forceRedirectConfig  forceRedirectConfig
    * http2  **参数解释：** HTTP/2开关，支持客户端采用HTTP/2协议访问CDN节点 **约束限制：** 不涉及 **取值范围：** - 0: 关闭 - 1: 开启  **默认取值：** 0: 关闭
    * certName  **参数解释：** 证书名称 **约束限制：** https_switch为1时，该参数必填 **取值范围：** 3-64个字符，由英文字母、数字及“-”、“_”、空格组成 **默认取值：** 不涉及
    * certificate  **参数解释：** SSL证书内容 **约束限制：** - 仅支持PEM编码格式 - 不启用证书则无需输入 - 初次配置证书时必传 - 需要传入完整证书链  **取值范围：** 证书链长度不超过20KB **默认取值：** 不涉及
    * privateKey  **参数解释：** SSL证书私钥内容 **约束限制：** - 仅支持PEM编码格式 - 不启用证书则无需输入 - 初次配置证书时必传  **取值范围：** 不涉及 **默认取值：** 不涉及
    * certificateType  **参数解释：** 证书类型 **约束限制：** 不涉及 **取值范围：** - 0: 自有证书 - 2: SCM证书  **默认取值：** 0: 自有证书
    * scmCertificateId  **参数解释：** SCM证书ID，可使用云证书与管理服务（CCM）的查询证书列表接口获取 **约束限制：** 配置SCM证书时必传 **取值范围：** 不涉及 **默认取值：** 不涉及
    * certificates  **参数解释：** 配置国际证书和国密证书双证书场景下的证书列表 **约束限制：** - 配置双证书时最多传2个证书，只能包含1个国际证书和1个国密证书 - 使用双证书配置时，cert_name/certificate/private_key等单证书参数不可再使用  **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domainName' => null,
        'httpsSwitch' => 'int32',
        'accessOriginWay' => 'int32',
        'forceRedirectHttps' => 'int32',
        'forceRedirectConfig' => null,
        'http2' => 'int32',
        'certName' => null,
        'certificate' => null,
        'privateKey' => null,
        'certificateType' => 'int32',
        'scmCertificateId' => null,
        'certificates' => null
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
    * domainName  **参数解释：** 需要配置HTTPS证书的域名 **约束限制：** - 域名间以“,”分隔 - 最多配置50个域名  **取值范围：** 不涉及 **默认取值：** 不涉及
    * httpsSwitch  **参数解释：** 证书配置开关 **约束限制：** https_switch为1时，证书参数不能为空 **取值范围：** - 0: 关闭 - 1: 开启  **默认取值：** 不涉及
    * accessOriginWay  **参数解释：** 回源协议 **约束限制：** 不涉及 **取值范围：** - 1: 协议跟随 - 2: http协议 - 3: https协议  **默认取值：** 2: http协议
    * forceRedirectHttps  **参数解释：** 是否开启HTTPS强制跳转，强制客户端使用HTTPS协议访问CDN节点 > 此参数即将下线，建议使用force_redirect_config修改配置  **约束限制：** 不涉及 **取值范围：** - 0: 关闭 - 1: 开启  **默认取值：** 0: 关闭
    * forceRedirectConfig  forceRedirectConfig
    * http2  **参数解释：** HTTP/2开关，支持客户端采用HTTP/2协议访问CDN节点 **约束限制：** 不涉及 **取值范围：** - 0: 关闭 - 1: 开启  **默认取值：** 0: 关闭
    * certName  **参数解释：** 证书名称 **约束限制：** https_switch为1时，该参数必填 **取值范围：** 3-64个字符，由英文字母、数字及“-”、“_”、空格组成 **默认取值：** 不涉及
    * certificate  **参数解释：** SSL证书内容 **约束限制：** - 仅支持PEM编码格式 - 不启用证书则无需输入 - 初次配置证书时必传 - 需要传入完整证书链  **取值范围：** 证书链长度不超过20KB **默认取值：** 不涉及
    * privateKey  **参数解释：** SSL证书私钥内容 **约束限制：** - 仅支持PEM编码格式 - 不启用证书则无需输入 - 初次配置证书时必传  **取值范围：** 不涉及 **默认取值：** 不涉及
    * certificateType  **参数解释：** 证书类型 **约束限制：** 不涉及 **取值范围：** - 0: 自有证书 - 2: SCM证书  **默认取值：** 0: 自有证书
    * scmCertificateId  **参数解释：** SCM证书ID，可使用云证书与管理服务（CCM）的查询证书列表接口获取 **约束限制：** 配置SCM证书时必传 **取值范围：** 不涉及 **默认取值：** 不涉及
    * certificates  **参数解释：** 配置国际证书和国密证书双证书场景下的证书列表 **约束限制：** - 配置双证书时最多传2个证书，只能包含1个国际证书和1个国密证书 - 使用双证书配置时，cert_name/certificate/private_key等单证书参数不可再使用  **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domainName' => 'domain_name',
            'httpsSwitch' => 'https_switch',
            'accessOriginWay' => 'access_origin_way',
            'forceRedirectHttps' => 'force_redirect_https',
            'forceRedirectConfig' => 'force_redirect_config',
            'http2' => 'http2',
            'certName' => 'cert_name',
            'certificate' => 'certificate',
            'privateKey' => 'private_key',
            'certificateType' => 'certificate_type',
            'scmCertificateId' => 'scm_certificate_id',
            'certificates' => 'certificates'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domainName  **参数解释：** 需要配置HTTPS证书的域名 **约束限制：** - 域名间以“,”分隔 - 最多配置50个域名  **取值范围：** 不涉及 **默认取值：** 不涉及
    * httpsSwitch  **参数解释：** 证书配置开关 **约束限制：** https_switch为1时，证书参数不能为空 **取值范围：** - 0: 关闭 - 1: 开启  **默认取值：** 不涉及
    * accessOriginWay  **参数解释：** 回源协议 **约束限制：** 不涉及 **取值范围：** - 1: 协议跟随 - 2: http协议 - 3: https协议  **默认取值：** 2: http协议
    * forceRedirectHttps  **参数解释：** 是否开启HTTPS强制跳转，强制客户端使用HTTPS协议访问CDN节点 > 此参数即将下线，建议使用force_redirect_config修改配置  **约束限制：** 不涉及 **取值范围：** - 0: 关闭 - 1: 开启  **默认取值：** 0: 关闭
    * forceRedirectConfig  forceRedirectConfig
    * http2  **参数解释：** HTTP/2开关，支持客户端采用HTTP/2协议访问CDN节点 **约束限制：** 不涉及 **取值范围：** - 0: 关闭 - 1: 开启  **默认取值：** 0: 关闭
    * certName  **参数解释：** 证书名称 **约束限制：** https_switch为1时，该参数必填 **取值范围：** 3-64个字符，由英文字母、数字及“-”、“_”、空格组成 **默认取值：** 不涉及
    * certificate  **参数解释：** SSL证书内容 **约束限制：** - 仅支持PEM编码格式 - 不启用证书则无需输入 - 初次配置证书时必传 - 需要传入完整证书链  **取值范围：** 证书链长度不超过20KB **默认取值：** 不涉及
    * privateKey  **参数解释：** SSL证书私钥内容 **约束限制：** - 仅支持PEM编码格式 - 不启用证书则无需输入 - 初次配置证书时必传  **取值范围：** 不涉及 **默认取值：** 不涉及
    * certificateType  **参数解释：** 证书类型 **约束限制：** 不涉及 **取值范围：** - 0: 自有证书 - 2: SCM证书  **默认取值：** 0: 自有证书
    * scmCertificateId  **参数解释：** SCM证书ID，可使用云证书与管理服务（CCM）的查询证书列表接口获取 **约束限制：** 配置SCM证书时必传 **取值范围：** 不涉及 **默认取值：** 不涉及
    * certificates  **参数解释：** 配置国际证书和国密证书双证书场景下的证书列表 **约束限制：** - 配置双证书时最多传2个证书，只能包含1个国际证书和1个国密证书 - 使用双证书配置时，cert_name/certificate/private_key等单证书参数不可再使用  **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'domainName' => 'setDomainName',
            'httpsSwitch' => 'setHttpsSwitch',
            'accessOriginWay' => 'setAccessOriginWay',
            'forceRedirectHttps' => 'setForceRedirectHttps',
            'forceRedirectConfig' => 'setForceRedirectConfig',
            'http2' => 'setHttp2',
            'certName' => 'setCertName',
            'certificate' => 'setCertificate',
            'privateKey' => 'setPrivateKey',
            'certificateType' => 'setCertificateType',
            'scmCertificateId' => 'setScmCertificateId',
            'certificates' => 'setCertificates'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domainName  **参数解释：** 需要配置HTTPS证书的域名 **约束限制：** - 域名间以“,”分隔 - 最多配置50个域名  **取值范围：** 不涉及 **默认取值：** 不涉及
    * httpsSwitch  **参数解释：** 证书配置开关 **约束限制：** https_switch为1时，证书参数不能为空 **取值范围：** - 0: 关闭 - 1: 开启  **默认取值：** 不涉及
    * accessOriginWay  **参数解释：** 回源协议 **约束限制：** 不涉及 **取值范围：** - 1: 协议跟随 - 2: http协议 - 3: https协议  **默认取值：** 2: http协议
    * forceRedirectHttps  **参数解释：** 是否开启HTTPS强制跳转，强制客户端使用HTTPS协议访问CDN节点 > 此参数即将下线，建议使用force_redirect_config修改配置  **约束限制：** 不涉及 **取值范围：** - 0: 关闭 - 1: 开启  **默认取值：** 0: 关闭
    * forceRedirectConfig  forceRedirectConfig
    * http2  **参数解释：** HTTP/2开关，支持客户端采用HTTP/2协议访问CDN节点 **约束限制：** 不涉及 **取值范围：** - 0: 关闭 - 1: 开启  **默认取值：** 0: 关闭
    * certName  **参数解释：** 证书名称 **约束限制：** https_switch为1时，该参数必填 **取值范围：** 3-64个字符，由英文字母、数字及“-”、“_”、空格组成 **默认取值：** 不涉及
    * certificate  **参数解释：** SSL证书内容 **约束限制：** - 仅支持PEM编码格式 - 不启用证书则无需输入 - 初次配置证书时必传 - 需要传入完整证书链  **取值范围：** 证书链长度不超过20KB **默认取值：** 不涉及
    * privateKey  **参数解释：** SSL证书私钥内容 **约束限制：** - 仅支持PEM编码格式 - 不启用证书则无需输入 - 初次配置证书时必传  **取值范围：** 不涉及 **默认取值：** 不涉及
    * certificateType  **参数解释：** 证书类型 **约束限制：** 不涉及 **取值范围：** - 0: 自有证书 - 2: SCM证书  **默认取值：** 0: 自有证书
    * scmCertificateId  **参数解释：** SCM证书ID，可使用云证书与管理服务（CCM）的查询证书列表接口获取 **约束限制：** 配置SCM证书时必传 **取值范围：** 不涉及 **默认取值：** 不涉及
    * certificates  **参数解释：** 配置国际证书和国密证书双证书场景下的证书列表 **约束限制：** - 配置双证书时最多传2个证书，只能包含1个国际证书和1个国密证书 - 使用双证书配置时，cert_name/certificate/private_key等单证书参数不可再使用  **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'domainName' => 'getDomainName',
            'httpsSwitch' => 'getHttpsSwitch',
            'accessOriginWay' => 'getAccessOriginWay',
            'forceRedirectHttps' => 'getForceRedirectHttps',
            'forceRedirectConfig' => 'getForceRedirectConfig',
            'http2' => 'getHttp2',
            'certName' => 'getCertName',
            'certificate' => 'getCertificate',
            'privateKey' => 'getPrivateKey',
            'certificateType' => 'getCertificateType',
            'scmCertificateId' => 'getScmCertificateId',
            'certificates' => 'getCertificates'
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
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['httpsSwitch'] = isset($data['httpsSwitch']) ? $data['httpsSwitch'] : null;
        $this->container['accessOriginWay'] = isset($data['accessOriginWay']) ? $data['accessOriginWay'] : null;
        $this->container['forceRedirectHttps'] = isset($data['forceRedirectHttps']) ? $data['forceRedirectHttps'] : null;
        $this->container['forceRedirectConfig'] = isset($data['forceRedirectConfig']) ? $data['forceRedirectConfig'] : null;
        $this->container['http2'] = isset($data['http2']) ? $data['http2'] : null;
        $this->container['certName'] = isset($data['certName']) ? $data['certName'] : null;
        $this->container['certificate'] = isset($data['certificate']) ? $data['certificate'] : null;
        $this->container['privateKey'] = isset($data['privateKey']) ? $data['privateKey'] : null;
        $this->container['certificateType'] = isset($data['certificateType']) ? $data['certificateType'] : null;
        $this->container['scmCertificateId'] = isset($data['scmCertificateId']) ? $data['scmCertificateId'] : null;
        $this->container['certificates'] = isset($data['certificates']) ? $data['certificates'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['domainName'] === null) {
            $invalidProperties[] = "'domainName' can't be null";
        }
        if ($this->container['httpsSwitch'] === null) {
            $invalidProperties[] = "'httpsSwitch' can't be null";
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
    * Gets domainName
    *  **参数解释：** 需要配置HTTPS证书的域名 **约束限制：** - 域名间以“,”分隔 - 最多配置50个域名  **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @param string $domainName **参数解释：** 需要配置HTTPS证书的域名 **约束限制：** - 域名间以“,”分隔 - 最多配置50个域名  **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets httpsSwitch
    *  **参数解释：** 证书配置开关 **约束限制：** https_switch为1时，证书参数不能为空 **取值范围：** - 0: 关闭 - 1: 开启  **默认取值：** 不涉及
    *
    * @return int
    */
    public function getHttpsSwitch()
    {
        return $this->container['httpsSwitch'];
    }

    /**
    * Sets httpsSwitch
    *
    * @param int $httpsSwitch **参数解释：** 证书配置开关 **约束限制：** https_switch为1时，证书参数不能为空 **取值范围：** - 0: 关闭 - 1: 开启  **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setHttpsSwitch($httpsSwitch)
    {
        $this->container['httpsSwitch'] = $httpsSwitch;
        return $this;
    }

    /**
    * Gets accessOriginWay
    *  **参数解释：** 回源协议 **约束限制：** 不涉及 **取值范围：** - 1: 协议跟随 - 2: http协议 - 3: https协议  **默认取值：** 2: http协议
    *
    * @return int|null
    */
    public function getAccessOriginWay()
    {
        return $this->container['accessOriginWay'];
    }

    /**
    * Sets accessOriginWay
    *
    * @param int|null $accessOriginWay **参数解释：** 回源协议 **约束限制：** 不涉及 **取值范围：** - 1: 协议跟随 - 2: http协议 - 3: https协议  **默认取值：** 2: http协议
    *
    * @return $this
    */
    public function setAccessOriginWay($accessOriginWay)
    {
        $this->container['accessOriginWay'] = $accessOriginWay;
        return $this;
    }

    /**
    * Gets forceRedirectHttps
    *  **参数解释：** 是否开启HTTPS强制跳转，强制客户端使用HTTPS协议访问CDN节点 > 此参数即将下线，建议使用force_redirect_config修改配置  **约束限制：** 不涉及 **取值范围：** - 0: 关闭 - 1: 开启  **默认取值：** 0: 关闭
    *
    * @return int|null
    */
    public function getForceRedirectHttps()
    {
        return $this->container['forceRedirectHttps'];
    }

    /**
    * Sets forceRedirectHttps
    *
    * @param int|null $forceRedirectHttps **参数解释：** 是否开启HTTPS强制跳转，强制客户端使用HTTPS协议访问CDN节点 > 此参数即将下线，建议使用force_redirect_config修改配置  **约束限制：** 不涉及 **取值范围：** - 0: 关闭 - 1: 开启  **默认取值：** 0: 关闭
    *
    * @return $this
    */
    public function setForceRedirectHttps($forceRedirectHttps)
    {
        $this->container['forceRedirectHttps'] = $forceRedirectHttps;
        return $this;
    }

    /**
    * Gets forceRedirectConfig
    *  forceRedirectConfig
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\ForceRedirect|null
    */
    public function getForceRedirectConfig()
    {
        return $this->container['forceRedirectConfig'];
    }

    /**
    * Sets forceRedirectConfig
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\ForceRedirect|null $forceRedirectConfig forceRedirectConfig
    *
    * @return $this
    */
    public function setForceRedirectConfig($forceRedirectConfig)
    {
        $this->container['forceRedirectConfig'] = $forceRedirectConfig;
        return $this;
    }

    /**
    * Gets http2
    *  **参数解释：** HTTP/2开关，支持客户端采用HTTP/2协议访问CDN节点 **约束限制：** 不涉及 **取值范围：** - 0: 关闭 - 1: 开启  **默认取值：** 0: 关闭
    *
    * @return int|null
    */
    public function getHttp2()
    {
        return $this->container['http2'];
    }

    /**
    * Sets http2
    *
    * @param int|null $http2 **参数解释：** HTTP/2开关，支持客户端采用HTTP/2协议访问CDN节点 **约束限制：** 不涉及 **取值范围：** - 0: 关闭 - 1: 开启  **默认取值：** 0: 关闭
    *
    * @return $this
    */
    public function setHttp2($http2)
    {
        $this->container['http2'] = $http2;
        return $this;
    }

    /**
    * Gets certName
    *  **参数解释：** 证书名称 **约束限制：** https_switch为1时，该参数必填 **取值范围：** 3-64个字符，由英文字母、数字及“-”、“_”、空格组成 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getCertName()
    {
        return $this->container['certName'];
    }

    /**
    * Sets certName
    *
    * @param string|null $certName **参数解释：** 证书名称 **约束限制：** https_switch为1时，该参数必填 **取值范围：** 3-64个字符，由英文字母、数字及“-”、“_”、空格组成 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setCertName($certName)
    {
        $this->container['certName'] = $certName;
        return $this;
    }

    /**
    * Gets certificate
    *  **参数解释：** SSL证书内容 **约束限制：** - 仅支持PEM编码格式 - 不启用证书则无需输入 - 初次配置证书时必传 - 需要传入完整证书链  **取值范围：** 证书链长度不超过20KB **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getCertificate()
    {
        return $this->container['certificate'];
    }

    /**
    * Sets certificate
    *
    * @param string|null $certificate **参数解释：** SSL证书内容 **约束限制：** - 仅支持PEM编码格式 - 不启用证书则无需输入 - 初次配置证书时必传 - 需要传入完整证书链  **取值范围：** 证书链长度不超过20KB **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setCertificate($certificate)
    {
        $this->container['certificate'] = $certificate;
        return $this;
    }

    /**
    * Gets privateKey
    *  **参数解释：** SSL证书私钥内容 **约束限制：** - 仅支持PEM编码格式 - 不启用证书则无需输入 - 初次配置证书时必传  **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getPrivateKey()
    {
        return $this->container['privateKey'];
    }

    /**
    * Sets privateKey
    *
    * @param string|null $privateKey **参数解释：** SSL证书私钥内容 **约束限制：** - 仅支持PEM编码格式 - 不启用证书则无需输入 - 初次配置证书时必传  **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setPrivateKey($privateKey)
    {
        $this->container['privateKey'] = $privateKey;
        return $this;
    }

    /**
    * Gets certificateType
    *  **参数解释：** 证书类型 **约束限制：** 不涉及 **取值范围：** - 0: 自有证书 - 2: SCM证书  **默认取值：** 0: 自有证书
    *
    * @return int|null
    */
    public function getCertificateType()
    {
        return $this->container['certificateType'];
    }

    /**
    * Sets certificateType
    *
    * @param int|null $certificateType **参数解释：** 证书类型 **约束限制：** 不涉及 **取值范围：** - 0: 自有证书 - 2: SCM证书  **默认取值：** 0: 自有证书
    *
    * @return $this
    */
    public function setCertificateType($certificateType)
    {
        $this->container['certificateType'] = $certificateType;
        return $this;
    }

    /**
    * Gets scmCertificateId
    *  **参数解释：** SCM证书ID，可使用云证书与管理服务（CCM）的查询证书列表接口获取 **约束限制：** 配置SCM证书时必传 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getScmCertificateId()
    {
        return $this->container['scmCertificateId'];
    }

    /**
    * Sets scmCertificateId
    *
    * @param string|null $scmCertificateId **参数解释：** SCM证书ID，可使用云证书与管理服务（CCM）的查询证书列表接口获取 **约束限制：** 配置SCM证书时必传 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setScmCertificateId($scmCertificateId)
    {
        $this->container['scmCertificateId'] = $scmCertificateId;
        return $this;
    }

    /**
    * Gets certificates
    *  **参数解释：** 配置国际证书和国密证书双证书场景下的证书列表 **约束限制：** - 配置双证书时最多传2个证书，只能包含1个国际证书和1个国密证书 - 使用双证书配置时，cert_name/certificate/private_key等单证书参数不可再使用  **取值范围：** 不涉及
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\MultiCertificateBatchVo[]|null
    */
    public function getCertificates()
    {
        return $this->container['certificates'];
    }

    /**
    * Sets certificates
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\MultiCertificateBatchVo[]|null $certificates **参数解释：** 配置国际证书和国密证书双证书场景下的证书列表 **约束限制：** - 配置双证书时最多传2个证书，只能包含1个国际证书和1个国密证书 - 使用双证书配置时，cert_name/certificate/private_key等单证书参数不可再使用  **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setCertificates($certificates)
    {
        $this->container['certificates'] = $certificates;
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

