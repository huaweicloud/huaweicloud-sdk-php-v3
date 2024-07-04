<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UrlDomainBaseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UrlDomainBaseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * urlDomain  自定义域名
    * id  自定义域名的编号
    * status  CNAME解析状态 - 1: 未解析 - 2: 解析中 - 3: 解析成功 - 4: 解析失败
    * minSslVersion  支持的最小SSL版本
    * isHttpRedirectToHttps  是否开启http到https的重定向，false为关闭，true为开启，默认为false
    * verifiedClientCertificateEnabled  是否开启客户端证书校验。只有绑定证书时，该参数才生效。当绑定证书存在trusted_root_ca时，默认开启；当绑定证书不存在trusted_root_ca时，默认关闭。
    * ingressHttpPort  访问该域名绑定的http协议入方向端口，-1表示无端口且协议不支持，可使用80默认端口，其他有效端口允许的取值范围为1024~49151，需为实例已开放的HTTP协议的自定义入方向端口。  当创建域名时，该参数未填表示用默认80端口；若填写该参数，则必须同时填写https_port；若要http_port和https_port同时使用默认端口，则两个参数都不填。  当修改域名时，该参数未填表示不修改该端口。
    * ingressHttpsPort  访问该域名绑定的http协议入方向端口，-1表示无端口且协议不支持，可使用443默认端口，其他有效端口允许的取值范围为1024~49151，需为实例已开放的HTTPS协议的自定义入方向端口。  当创建域名时，该参数未填表示用默认443端口；若填写该参数，则必须同时填写http_port；若要http_port和https_port同时使用默认端口，则两个参数都不填。  当修改域名时，该参数未填表示不修改该端口。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'urlDomain' => 'string',
            'id' => 'string',
            'status' => 'int',
            'minSslVersion' => 'string',
            'isHttpRedirectToHttps' => 'bool',
            'verifiedClientCertificateEnabled' => 'bool',
            'ingressHttpPort' => 'int',
            'ingressHttpsPort' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * urlDomain  自定义域名
    * id  自定义域名的编号
    * status  CNAME解析状态 - 1: 未解析 - 2: 解析中 - 3: 解析成功 - 4: 解析失败
    * minSslVersion  支持的最小SSL版本
    * isHttpRedirectToHttps  是否开启http到https的重定向，false为关闭，true为开启，默认为false
    * verifiedClientCertificateEnabled  是否开启客户端证书校验。只有绑定证书时，该参数才生效。当绑定证书存在trusted_root_ca时，默认开启；当绑定证书不存在trusted_root_ca时，默认关闭。
    * ingressHttpPort  访问该域名绑定的http协议入方向端口，-1表示无端口且协议不支持，可使用80默认端口，其他有效端口允许的取值范围为1024~49151，需为实例已开放的HTTP协议的自定义入方向端口。  当创建域名时，该参数未填表示用默认80端口；若填写该参数，则必须同时填写https_port；若要http_port和https_port同时使用默认端口，则两个参数都不填。  当修改域名时，该参数未填表示不修改该端口。
    * ingressHttpsPort  访问该域名绑定的http协议入方向端口，-1表示无端口且协议不支持，可使用443默认端口，其他有效端口允许的取值范围为1024~49151，需为实例已开放的HTTPS协议的自定义入方向端口。  当创建域名时，该参数未填表示用默认443端口；若填写该参数，则必须同时填写http_port；若要http_port和https_port同时使用默认端口，则两个参数都不填。  当修改域名时，该参数未填表示不修改该端口。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'urlDomain' => null,
        'id' => null,
        'status' => 'int32',
        'minSslVersion' => null,
        'isHttpRedirectToHttps' => null,
        'verifiedClientCertificateEnabled' => null,
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
    * urlDomain  自定义域名
    * id  自定义域名的编号
    * status  CNAME解析状态 - 1: 未解析 - 2: 解析中 - 3: 解析成功 - 4: 解析失败
    * minSslVersion  支持的最小SSL版本
    * isHttpRedirectToHttps  是否开启http到https的重定向，false为关闭，true为开启，默认为false
    * verifiedClientCertificateEnabled  是否开启客户端证书校验。只有绑定证书时，该参数才生效。当绑定证书存在trusted_root_ca时，默认开启；当绑定证书不存在trusted_root_ca时，默认关闭。
    * ingressHttpPort  访问该域名绑定的http协议入方向端口，-1表示无端口且协议不支持，可使用80默认端口，其他有效端口允许的取值范围为1024~49151，需为实例已开放的HTTP协议的自定义入方向端口。  当创建域名时，该参数未填表示用默认80端口；若填写该参数，则必须同时填写https_port；若要http_port和https_port同时使用默认端口，则两个参数都不填。  当修改域名时，该参数未填表示不修改该端口。
    * ingressHttpsPort  访问该域名绑定的http协议入方向端口，-1表示无端口且协议不支持，可使用443默认端口，其他有效端口允许的取值范围为1024~49151，需为实例已开放的HTTPS协议的自定义入方向端口。  当创建域名时，该参数未填表示用默认443端口；若填写该参数，则必须同时填写http_port；若要http_port和https_port同时使用默认端口，则两个参数都不填。  当修改域名时，该参数未填表示不修改该端口。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'urlDomain' => 'url_domain',
            'id' => 'id',
            'status' => 'status',
            'minSslVersion' => 'min_ssl_version',
            'isHttpRedirectToHttps' => 'is_http_redirect_to_https',
            'verifiedClientCertificateEnabled' => 'verified_client_certificate_enabled',
            'ingressHttpPort' => 'ingress_http_port',
            'ingressHttpsPort' => 'ingress_https_port'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * urlDomain  自定义域名
    * id  自定义域名的编号
    * status  CNAME解析状态 - 1: 未解析 - 2: 解析中 - 3: 解析成功 - 4: 解析失败
    * minSslVersion  支持的最小SSL版本
    * isHttpRedirectToHttps  是否开启http到https的重定向，false为关闭，true为开启，默认为false
    * verifiedClientCertificateEnabled  是否开启客户端证书校验。只有绑定证书时，该参数才生效。当绑定证书存在trusted_root_ca时，默认开启；当绑定证书不存在trusted_root_ca时，默认关闭。
    * ingressHttpPort  访问该域名绑定的http协议入方向端口，-1表示无端口且协议不支持，可使用80默认端口，其他有效端口允许的取值范围为1024~49151，需为实例已开放的HTTP协议的自定义入方向端口。  当创建域名时，该参数未填表示用默认80端口；若填写该参数，则必须同时填写https_port；若要http_port和https_port同时使用默认端口，则两个参数都不填。  当修改域名时，该参数未填表示不修改该端口。
    * ingressHttpsPort  访问该域名绑定的http协议入方向端口，-1表示无端口且协议不支持，可使用443默认端口，其他有效端口允许的取值范围为1024~49151，需为实例已开放的HTTPS协议的自定义入方向端口。  当创建域名时，该参数未填表示用默认443端口；若填写该参数，则必须同时填写http_port；若要http_port和https_port同时使用默认端口，则两个参数都不填。  当修改域名时，该参数未填表示不修改该端口。
    *
    * @var string[]
    */
    protected static $setters = [
            'urlDomain' => 'setUrlDomain',
            'id' => 'setId',
            'status' => 'setStatus',
            'minSslVersion' => 'setMinSslVersion',
            'isHttpRedirectToHttps' => 'setIsHttpRedirectToHttps',
            'verifiedClientCertificateEnabled' => 'setVerifiedClientCertificateEnabled',
            'ingressHttpPort' => 'setIngressHttpPort',
            'ingressHttpsPort' => 'setIngressHttpsPort'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * urlDomain  自定义域名
    * id  自定义域名的编号
    * status  CNAME解析状态 - 1: 未解析 - 2: 解析中 - 3: 解析成功 - 4: 解析失败
    * minSslVersion  支持的最小SSL版本
    * isHttpRedirectToHttps  是否开启http到https的重定向，false为关闭，true为开启，默认为false
    * verifiedClientCertificateEnabled  是否开启客户端证书校验。只有绑定证书时，该参数才生效。当绑定证书存在trusted_root_ca时，默认开启；当绑定证书不存在trusted_root_ca时，默认关闭。
    * ingressHttpPort  访问该域名绑定的http协议入方向端口，-1表示无端口且协议不支持，可使用80默认端口，其他有效端口允许的取值范围为1024~49151，需为实例已开放的HTTP协议的自定义入方向端口。  当创建域名时，该参数未填表示用默认80端口；若填写该参数，则必须同时填写https_port；若要http_port和https_port同时使用默认端口，则两个参数都不填。  当修改域名时，该参数未填表示不修改该端口。
    * ingressHttpsPort  访问该域名绑定的http协议入方向端口，-1表示无端口且协议不支持，可使用443默认端口，其他有效端口允许的取值范围为1024~49151，需为实例已开放的HTTPS协议的自定义入方向端口。  当创建域名时，该参数未填表示用默认443端口；若填写该参数，则必须同时填写http_port；若要http_port和https_port同时使用默认端口，则两个参数都不填。  当修改域名时，该参数未填表示不修改该端口。
    *
    * @var string[]
    */
    protected static $getters = [
            'urlDomain' => 'getUrlDomain',
            'id' => 'getId',
            'status' => 'getStatus',
            'minSslVersion' => 'getMinSslVersion',
            'isHttpRedirectToHttps' => 'getIsHttpRedirectToHttps',
            'verifiedClientCertificateEnabled' => 'getVerifiedClientCertificateEnabled',
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
    const STATUS_1 = 1;
    const STATUS_2 = 2;
    const STATUS_3 = 3;
    const STATUS_4 = 4;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_1,
            self::STATUS_2,
            self::STATUS_3,
            self::STATUS_4,
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
        $this->container['urlDomain'] = isset($data['urlDomain']) ? $data['urlDomain'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['minSslVersion'] = isset($data['minSslVersion']) ? $data['minSslVersion'] : null;
        $this->container['isHttpRedirectToHttps'] = isset($data['isHttpRedirectToHttps']) ? $data['isHttpRedirectToHttps'] : null;
        $this->container['verifiedClientCertificateEnabled'] = isset($data['verifiedClientCertificateEnabled']) ? $data['verifiedClientCertificateEnabled'] : null;
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
        if ($this->container['urlDomain'] === null) {
            $invalidProperties[] = "'urlDomain' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['minSslVersion'] === null) {
            $invalidProperties[] = "'minSslVersion' can't be null";
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
    * Gets urlDomain
    *  自定义域名
    *
    * @return string
    */
    public function getUrlDomain()
    {
        return $this->container['urlDomain'];
    }

    /**
    * Sets urlDomain
    *
    * @param string $urlDomain 自定义域名
    *
    * @return $this
    */
    public function setUrlDomain($urlDomain)
    {
        $this->container['urlDomain'] = $urlDomain;
        return $this;
    }

    /**
    * Gets id
    *  自定义域名的编号
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 自定义域名的编号
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets status
    *  CNAME解析状态 - 1: 未解析 - 2: 解析中 - 3: 解析成功 - 4: 解析失败
    *
    * @return int
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int $status CNAME解析状态 - 1: 未解析 - 2: 解析中 - 3: 解析成功 - 4: 解析失败
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets minSslVersion
    *  支持的最小SSL版本
    *
    * @return string
    */
    public function getMinSslVersion()
    {
        return $this->container['minSslVersion'];
    }

    /**
    * Sets minSslVersion
    *
    * @param string $minSslVersion 支持的最小SSL版本
    *
    * @return $this
    */
    public function setMinSslVersion($minSslVersion)
    {
        $this->container['minSslVersion'] = $minSslVersion;
        return $this;
    }

    /**
    * Gets isHttpRedirectToHttps
    *  是否开启http到https的重定向，false为关闭，true为开启，默认为false
    *
    * @return bool|null
    */
    public function getIsHttpRedirectToHttps()
    {
        return $this->container['isHttpRedirectToHttps'];
    }

    /**
    * Sets isHttpRedirectToHttps
    *
    * @param bool|null $isHttpRedirectToHttps 是否开启http到https的重定向，false为关闭，true为开启，默认为false
    *
    * @return $this
    */
    public function setIsHttpRedirectToHttps($isHttpRedirectToHttps)
    {
        $this->container['isHttpRedirectToHttps'] = $isHttpRedirectToHttps;
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

