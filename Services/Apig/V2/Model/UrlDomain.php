<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UrlDomain implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UrlDomain';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  域名编号
    * domain  访问域名
    * cnameStatus  域名cname状态： - 1：未解析 - 2：解析中 - 3：解析成功 - 4：解析失败
    * sslId  SSL证书编号
    * sslName  SSL证书名称
    * minSslVersion  最小ssl协议版本号。支持TLSv1.1或TLSv1.2
    * verifiedClientCertificateEnabled  是否开启客户端证书校验。只有绑定证书时，该参数才生效。当绑定证书存在trusted_root_ca时，默认开启；当绑定证书不存在trusted_root_ca时，默认关闭。
    * isHasTrustedRootCa  是否存在信任的根证书CA。当绑定证书存在trusted_root_ca时为true。
    * ingressHttpPort  访问该域名绑定的http协议入方向端口，-1表示无端口且协议不支持，可使用80默认端口，其他有效端口允许的取值范围为1024~49151，需为实例已开放的HTTP协议的自定义入方向端口。  当创建域名时，该参数未填表示用默认80端口；若填写该参数，则必须同时填写https_port；若要http_port和https_port同时使用默认端口，则两个参数都不填。  当修改域名时，该参数未填表示不修改该端口。
    * ingressHttpsPort  访问该域名绑定的http协议入方向端口，-1表示无端口且协议不支持，可使用443默认端口，其他有效端口允许的取值范围为1024~49151，需为实例已开放的HTTPS协议的自定义入方向端口。  当创建域名时，该参数未填表示用默认443端口；若填写该参数，则必须同时填写http_port；若要http_port和https_port同时使用默认端口，则两个参数都不填。  当修改域名时，该参数未填表示不修改该端口。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'domain' => 'string',
            'cnameStatus' => 'int',
            'sslId' => 'string',
            'sslName' => 'string',
            'minSslVersion' => 'string',
            'verifiedClientCertificateEnabled' => 'bool',
            'isHasTrustedRootCa' => 'bool',
            'ingressHttpPort' => 'int',
            'ingressHttpsPort' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  域名编号
    * domain  访问域名
    * cnameStatus  域名cname状态： - 1：未解析 - 2：解析中 - 3：解析成功 - 4：解析失败
    * sslId  SSL证书编号
    * sslName  SSL证书名称
    * minSslVersion  最小ssl协议版本号。支持TLSv1.1或TLSv1.2
    * verifiedClientCertificateEnabled  是否开启客户端证书校验。只有绑定证书时，该参数才生效。当绑定证书存在trusted_root_ca时，默认开启；当绑定证书不存在trusted_root_ca时，默认关闭。
    * isHasTrustedRootCa  是否存在信任的根证书CA。当绑定证书存在trusted_root_ca时为true。
    * ingressHttpPort  访问该域名绑定的http协议入方向端口，-1表示无端口且协议不支持，可使用80默认端口，其他有效端口允许的取值范围为1024~49151，需为实例已开放的HTTP协议的自定义入方向端口。  当创建域名时，该参数未填表示用默认80端口；若填写该参数，则必须同时填写https_port；若要http_port和https_port同时使用默认端口，则两个参数都不填。  当修改域名时，该参数未填表示不修改该端口。
    * ingressHttpsPort  访问该域名绑定的http协议入方向端口，-1表示无端口且协议不支持，可使用443默认端口，其他有效端口允许的取值范围为1024~49151，需为实例已开放的HTTPS协议的自定义入方向端口。  当创建域名时，该参数未填表示用默认443端口；若填写该参数，则必须同时填写http_port；若要http_port和https_port同时使用默认端口，则两个参数都不填。  当修改域名时，该参数未填表示不修改该端口。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'domain' => null,
        'cnameStatus' => 'int32',
        'sslId' => null,
        'sslName' => null,
        'minSslVersion' => null,
        'verifiedClientCertificateEnabled' => null,
        'isHasTrustedRootCa' => null,
        'ingressHttpPort' => null,
        'ingressHttpsPort' => null
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
    * id  域名编号
    * domain  访问域名
    * cnameStatus  域名cname状态： - 1：未解析 - 2：解析中 - 3：解析成功 - 4：解析失败
    * sslId  SSL证书编号
    * sslName  SSL证书名称
    * minSslVersion  最小ssl协议版本号。支持TLSv1.1或TLSv1.2
    * verifiedClientCertificateEnabled  是否开启客户端证书校验。只有绑定证书时，该参数才生效。当绑定证书存在trusted_root_ca时，默认开启；当绑定证书不存在trusted_root_ca时，默认关闭。
    * isHasTrustedRootCa  是否存在信任的根证书CA。当绑定证书存在trusted_root_ca时为true。
    * ingressHttpPort  访问该域名绑定的http协议入方向端口，-1表示无端口且协议不支持，可使用80默认端口，其他有效端口允许的取值范围为1024~49151，需为实例已开放的HTTP协议的自定义入方向端口。  当创建域名时，该参数未填表示用默认80端口；若填写该参数，则必须同时填写https_port；若要http_port和https_port同时使用默认端口，则两个参数都不填。  当修改域名时，该参数未填表示不修改该端口。
    * ingressHttpsPort  访问该域名绑定的http协议入方向端口，-1表示无端口且协议不支持，可使用443默认端口，其他有效端口允许的取值范围为1024~49151，需为实例已开放的HTTPS协议的自定义入方向端口。  当创建域名时，该参数未填表示用默认443端口；若填写该参数，则必须同时填写http_port；若要http_port和https_port同时使用默认端口，则两个参数都不填。  当修改域名时，该参数未填表示不修改该端口。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'domain' => 'domain',
            'cnameStatus' => 'cname_status',
            'sslId' => 'ssl_id',
            'sslName' => 'ssl_name',
            'minSslVersion' => 'min_ssl_version',
            'verifiedClientCertificateEnabled' => 'verified_client_certificate_enabled',
            'isHasTrustedRootCa' => 'is_has_trusted_root_ca',
            'ingressHttpPort' => 'ingress_http_port',
            'ingressHttpsPort' => 'ingress_https_port'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  域名编号
    * domain  访问域名
    * cnameStatus  域名cname状态： - 1：未解析 - 2：解析中 - 3：解析成功 - 4：解析失败
    * sslId  SSL证书编号
    * sslName  SSL证书名称
    * minSslVersion  最小ssl协议版本号。支持TLSv1.1或TLSv1.2
    * verifiedClientCertificateEnabled  是否开启客户端证书校验。只有绑定证书时，该参数才生效。当绑定证书存在trusted_root_ca时，默认开启；当绑定证书不存在trusted_root_ca时，默认关闭。
    * isHasTrustedRootCa  是否存在信任的根证书CA。当绑定证书存在trusted_root_ca时为true。
    * ingressHttpPort  访问该域名绑定的http协议入方向端口，-1表示无端口且协议不支持，可使用80默认端口，其他有效端口允许的取值范围为1024~49151，需为实例已开放的HTTP协议的自定义入方向端口。  当创建域名时，该参数未填表示用默认80端口；若填写该参数，则必须同时填写https_port；若要http_port和https_port同时使用默认端口，则两个参数都不填。  当修改域名时，该参数未填表示不修改该端口。
    * ingressHttpsPort  访问该域名绑定的http协议入方向端口，-1表示无端口且协议不支持，可使用443默认端口，其他有效端口允许的取值范围为1024~49151，需为实例已开放的HTTPS协议的自定义入方向端口。  当创建域名时，该参数未填表示用默认443端口；若填写该参数，则必须同时填写http_port；若要http_port和https_port同时使用默认端口，则两个参数都不填。  当修改域名时，该参数未填表示不修改该端口。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'domain' => 'setDomain',
            'cnameStatus' => 'setCnameStatus',
            'sslId' => 'setSslId',
            'sslName' => 'setSslName',
            'minSslVersion' => 'setMinSslVersion',
            'verifiedClientCertificateEnabled' => 'setVerifiedClientCertificateEnabled',
            'isHasTrustedRootCa' => 'setIsHasTrustedRootCa',
            'ingressHttpPort' => 'setIngressHttpPort',
            'ingressHttpsPort' => 'setIngressHttpsPort'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  域名编号
    * domain  访问域名
    * cnameStatus  域名cname状态： - 1：未解析 - 2：解析中 - 3：解析成功 - 4：解析失败
    * sslId  SSL证书编号
    * sslName  SSL证书名称
    * minSslVersion  最小ssl协议版本号。支持TLSv1.1或TLSv1.2
    * verifiedClientCertificateEnabled  是否开启客户端证书校验。只有绑定证书时，该参数才生效。当绑定证书存在trusted_root_ca时，默认开启；当绑定证书不存在trusted_root_ca时，默认关闭。
    * isHasTrustedRootCa  是否存在信任的根证书CA。当绑定证书存在trusted_root_ca时为true。
    * ingressHttpPort  访问该域名绑定的http协议入方向端口，-1表示无端口且协议不支持，可使用80默认端口，其他有效端口允许的取值范围为1024~49151，需为实例已开放的HTTP协议的自定义入方向端口。  当创建域名时，该参数未填表示用默认80端口；若填写该参数，则必须同时填写https_port；若要http_port和https_port同时使用默认端口，则两个参数都不填。  当修改域名时，该参数未填表示不修改该端口。
    * ingressHttpsPort  访问该域名绑定的http协议入方向端口，-1表示无端口且协议不支持，可使用443默认端口，其他有效端口允许的取值范围为1024~49151，需为实例已开放的HTTPS协议的自定义入方向端口。  当创建域名时，该参数未填表示用默认443端口；若填写该参数，则必须同时填写http_port；若要http_port和https_port同时使用默认端口，则两个参数都不填。  当修改域名时，该参数未填表示不修改该端口。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'domain' => 'getDomain',
            'cnameStatus' => 'getCnameStatus',
            'sslId' => 'getSslId',
            'sslName' => 'getSslName',
            'minSslVersion' => 'getMinSslVersion',
            'verifiedClientCertificateEnabled' => 'getVerifiedClientCertificateEnabled',
            'isHasTrustedRootCa' => 'getIsHasTrustedRootCa',
            'ingressHttpPort' => 'getIngressHttpPort',
            'ingressHttpsPort' => 'getIngressHttpsPort'
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
    const MIN_SSL_VERSION_TL_SV1_1 = 'TLSv1.1';
    const MIN_SSL_VERSION_TL_SV1_2 = 'TLSv1.2';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMinSslVersionAllowableValues()
    {
        return [
            self::MIN_SSL_VERSION_TL_SV1_1,
            self::MIN_SSL_VERSION_TL_SV1_2,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['cnameStatus'] = isset($data['cnameStatus']) ? $data['cnameStatus'] : null;
        $this->container['sslId'] = isset($data['sslId']) ? $data['sslId'] : null;
        $this->container['sslName'] = isset($data['sslName']) ? $data['sslName'] : null;
        $this->container['minSslVersion'] = isset($data['minSslVersion']) ? $data['minSslVersion'] : null;
        $this->container['verifiedClientCertificateEnabled'] = isset($data['verifiedClientCertificateEnabled']) ? $data['verifiedClientCertificateEnabled'] : null;
        $this->container['isHasTrustedRootCa'] = isset($data['isHasTrustedRootCa']) ? $data['isHasTrustedRootCa'] : null;
        $this->container['ingressHttpPort'] = isset($data['ingressHttpPort']) ? $data['ingressHttpPort'] : null;
        $this->container['ingressHttpsPort'] = isset($data['ingressHttpsPort']) ? $data['ingressHttpsPort'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getMinSslVersionAllowableValues();
                if (!is_null($this->container['minSslVersion']) && !in_array($this->container['minSslVersion'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'minSslVersion', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['ingressHttpPort']) && ($this->container['ingressHttpPort'] > 49151)) {
                $invalidProperties[] = "invalid value for 'ingressHttpPort', must be smaller than or equal to 49151.";
            }
            if (!is_null($this->container['ingressHttpPort']) && ($this->container['ingressHttpPort'] < -1)) {
                $invalidProperties[] = "invalid value for 'ingressHttpPort', must be bigger than or equal to -1.";
            }
            if (!is_null($this->container['ingressHttpsPort']) && ($this->container['ingressHttpsPort'] > 49151)) {
                $invalidProperties[] = "invalid value for 'ingressHttpsPort', must be smaller than or equal to 49151.";
            }
            if (!is_null($this->container['ingressHttpsPort']) && ($this->container['ingressHttpsPort'] < -1)) {
                $invalidProperties[] = "invalid value for 'ingressHttpsPort', must be bigger than or equal to -1.";
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
    * Gets id
    *  域名编号
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 域名编号
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets domain
    *  访问域名
    *
    * @return string|null
    */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
    * Sets domain
    *
    * @param string|null $domain 访问域名
    *
    * @return $this
    */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;
        return $this;
    }

    /**
    * Gets cnameStatus
    *  域名cname状态： - 1：未解析 - 2：解析中 - 3：解析成功 - 4：解析失败
    *
    * @return int|null
    */
    public function getCnameStatus()
    {
        return $this->container['cnameStatus'];
    }

    /**
    * Sets cnameStatus
    *
    * @param int|null $cnameStatus 域名cname状态： - 1：未解析 - 2：解析中 - 3：解析成功 - 4：解析失败
    *
    * @return $this
    */
    public function setCnameStatus($cnameStatus)
    {
        $this->container['cnameStatus'] = $cnameStatus;
        return $this;
    }

    /**
    * Gets sslId
    *  SSL证书编号
    *
    * @return string|null
    */
    public function getSslId()
    {
        return $this->container['sslId'];
    }

    /**
    * Sets sslId
    *
    * @param string|null $sslId SSL证书编号
    *
    * @return $this
    */
    public function setSslId($sslId)
    {
        $this->container['sslId'] = $sslId;
        return $this;
    }

    /**
    * Gets sslName
    *  SSL证书名称
    *
    * @return string|null
    */
    public function getSslName()
    {
        return $this->container['sslName'];
    }

    /**
    * Sets sslName
    *
    * @param string|null $sslName SSL证书名称
    *
    * @return $this
    */
    public function setSslName($sslName)
    {
        $this->container['sslName'] = $sslName;
        return $this;
    }

    /**
    * Gets minSslVersion
    *  最小ssl协议版本号。支持TLSv1.1或TLSv1.2
    *
    * @return string|null
    */
    public function getMinSslVersion()
    {
        return $this->container['minSslVersion'];
    }

    /**
    * Sets minSslVersion
    *
    * @param string|null $minSslVersion 最小ssl协议版本号。支持TLSv1.1或TLSv1.2
    *
    * @return $this
    */
    public function setMinSslVersion($minSslVersion)
    {
        $this->container['minSslVersion'] = $minSslVersion;
        return $this;
    }

    /**
    * Gets verifiedClientCertificateEnabled
    *  是否开启客户端证书校验。只有绑定证书时，该参数才生效。当绑定证书存在trusted_root_ca时，默认开启；当绑定证书不存在trusted_root_ca时，默认关闭。
    *
    * @return bool|null
    */
    public function getVerifiedClientCertificateEnabled()
    {
        return $this->container['verifiedClientCertificateEnabled'];
    }

    /**
    * Sets verifiedClientCertificateEnabled
    *
    * @param bool|null $verifiedClientCertificateEnabled 是否开启客户端证书校验。只有绑定证书时，该参数才生效。当绑定证书存在trusted_root_ca时，默认开启；当绑定证书不存在trusted_root_ca时，默认关闭。
    *
    * @return $this
    */
    public function setVerifiedClientCertificateEnabled($verifiedClientCertificateEnabled)
    {
        $this->container['verifiedClientCertificateEnabled'] = $verifiedClientCertificateEnabled;
        return $this;
    }

    /**
    * Gets isHasTrustedRootCa
    *  是否存在信任的根证书CA。当绑定证书存在trusted_root_ca时为true。
    *
    * @return bool|null
    */
    public function getIsHasTrustedRootCa()
    {
        return $this->container['isHasTrustedRootCa'];
    }

    /**
    * Sets isHasTrustedRootCa
    *
    * @param bool|null $isHasTrustedRootCa 是否存在信任的根证书CA。当绑定证书存在trusted_root_ca时为true。
    *
    * @return $this
    */
    public function setIsHasTrustedRootCa($isHasTrustedRootCa)
    {
        $this->container['isHasTrustedRootCa'] = $isHasTrustedRootCa;
        return $this;
    }

    /**
    * Gets ingressHttpPort
    *  访问该域名绑定的http协议入方向端口，-1表示无端口且协议不支持，可使用80默认端口，其他有效端口允许的取值范围为1024~49151，需为实例已开放的HTTP协议的自定义入方向端口。  当创建域名时，该参数未填表示用默认80端口；若填写该参数，则必须同时填写https_port；若要http_port和https_port同时使用默认端口，则两个参数都不填。  当修改域名时，该参数未填表示不修改该端口。
    *
    * @return int|null
    */
    public function getIngressHttpPort()
    {
        return $this->container['ingressHttpPort'];
    }

    /**
    * Sets ingressHttpPort
    *
    * @param int|null $ingressHttpPort 访问该域名绑定的http协议入方向端口，-1表示无端口且协议不支持，可使用80默认端口，其他有效端口允许的取值范围为1024~49151，需为实例已开放的HTTP协议的自定义入方向端口。  当创建域名时，该参数未填表示用默认80端口；若填写该参数，则必须同时填写https_port；若要http_port和https_port同时使用默认端口，则两个参数都不填。  当修改域名时，该参数未填表示不修改该端口。
    *
    * @return $this
    */
    public function setIngressHttpPort($ingressHttpPort)
    {
        $this->container['ingressHttpPort'] = $ingressHttpPort;
        return $this;
    }

    /**
    * Gets ingressHttpsPort
    *  访问该域名绑定的http协议入方向端口，-1表示无端口且协议不支持，可使用443默认端口，其他有效端口允许的取值范围为1024~49151，需为实例已开放的HTTPS协议的自定义入方向端口。  当创建域名时，该参数未填表示用默认443端口；若填写该参数，则必须同时填写http_port；若要http_port和https_port同时使用默认端口，则两个参数都不填。  当修改域名时，该参数未填表示不修改该端口。
    *
    * @return int|null
    */
    public function getIngressHttpsPort()
    {
        return $this->container['ingressHttpsPort'];
    }

    /**
    * Sets ingressHttpsPort
    *
    * @param int|null $ingressHttpsPort 访问该域名绑定的http协议入方向端口，-1表示无端口且协议不支持，可使用443默认端口，其他有效端口允许的取值范围为1024~49151，需为实例已开放的HTTPS协议的自定义入方向端口。  当创建域名时，该参数未填表示用默认443端口；若填写该参数，则必须同时填写http_port；若要http_port和https_port同时使用默认端口，则两个参数都不填。  当修改域名时，该参数未填表示不修改该端口。
    *
    * @return $this
    */
    public function setIngressHttpsPort($ingressHttpsPort)
    {
        $this->container['ingressHttpsPort'] = $ingressHttpsPort;
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

