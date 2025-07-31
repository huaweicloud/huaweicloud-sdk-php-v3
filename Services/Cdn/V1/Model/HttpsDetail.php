<?php

namespace HuaweiCloud\SDK\Cdn\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HttpsDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HttpsDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domainId  域名id。
    * domainName  绑定该证书的域名。
    * certName  证书名字。
    * certificate  证书内容。
    * privateKey  私钥内容。
    * certificateType  证书类型，0：自有证书，1：云托管证书，2：SCM证书。
    * expirationTime  证书过期时间。
    * httpsStatus  HTTPS证书是否启用，取值0：不启用；1：启用HTTPS加速并协议跟随回源；2：启用HTTPS加速并HTTP回源。
    * forceRedirectHttps  客户端请求是否强制重定向。1是，0否。（如果为2，表示强制跳转HTTP）
    * forceRedirectConfig  forceRedirectConfig
    * http2  是否使用HTTP2.0。（1是，0否。）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domainId' => 'string',
            'domainName' => 'string',
            'certName' => 'string',
            'certificate' => 'string',
            'privateKey' => 'string',
            'certificateType' => 'int',
            'expirationTime' => 'int',
            'httpsStatus' => 'int',
            'forceRedirectHttps' => 'int',
            'forceRedirectConfig' => '\HuaweiCloud\SDK\Cdn\V1\Model\ForceRedirect',
            'http2' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domainId  域名id。
    * domainName  绑定该证书的域名。
    * certName  证书名字。
    * certificate  证书内容。
    * privateKey  私钥内容。
    * certificateType  证书类型，0：自有证书，1：云托管证书，2：SCM证书。
    * expirationTime  证书过期时间。
    * httpsStatus  HTTPS证书是否启用，取值0：不启用；1：启用HTTPS加速并协议跟随回源；2：启用HTTPS加速并HTTP回源。
    * forceRedirectHttps  客户端请求是否强制重定向。1是，0否。（如果为2，表示强制跳转HTTP）
    * forceRedirectConfig  forceRedirectConfig
    * http2  是否使用HTTP2.0。（1是，0否。）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domainId' => null,
        'domainName' => null,
        'certName' => null,
        'certificate' => null,
        'privateKey' => null,
        'certificateType' => 'int32',
        'expirationTime' => 'int64',
        'httpsStatus' => 'int32',
        'forceRedirectHttps' => 'int32',
        'forceRedirectConfig' => null,
        'http2' => 'int32'
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
    * domainId  域名id。
    * domainName  绑定该证书的域名。
    * certName  证书名字。
    * certificate  证书内容。
    * privateKey  私钥内容。
    * certificateType  证书类型，0：自有证书，1：云托管证书，2：SCM证书。
    * expirationTime  证书过期时间。
    * httpsStatus  HTTPS证书是否启用，取值0：不启用；1：启用HTTPS加速并协议跟随回源；2：启用HTTPS加速并HTTP回源。
    * forceRedirectHttps  客户端请求是否强制重定向。1是，0否。（如果为2，表示强制跳转HTTP）
    * forceRedirectConfig  forceRedirectConfig
    * http2  是否使用HTTP2.0。（1是，0否。）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domainId' => 'domain_id',
            'domainName' => 'domain_name',
            'certName' => 'cert_name',
            'certificate' => 'certificate',
            'privateKey' => 'private_key',
            'certificateType' => 'certificate_type',
            'expirationTime' => 'expiration_time',
            'httpsStatus' => 'https_status',
            'forceRedirectHttps' => 'force_redirect_https',
            'forceRedirectConfig' => 'force_redirect_config',
            'http2' => 'http2'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domainId  域名id。
    * domainName  绑定该证书的域名。
    * certName  证书名字。
    * certificate  证书内容。
    * privateKey  私钥内容。
    * certificateType  证书类型，0：自有证书，1：云托管证书，2：SCM证书。
    * expirationTime  证书过期时间。
    * httpsStatus  HTTPS证书是否启用，取值0：不启用；1：启用HTTPS加速并协议跟随回源；2：启用HTTPS加速并HTTP回源。
    * forceRedirectHttps  客户端请求是否强制重定向。1是，0否。（如果为2，表示强制跳转HTTP）
    * forceRedirectConfig  forceRedirectConfig
    * http2  是否使用HTTP2.0。（1是，0否。）
    *
    * @var string[]
    */
    protected static $setters = [
            'domainId' => 'setDomainId',
            'domainName' => 'setDomainName',
            'certName' => 'setCertName',
            'certificate' => 'setCertificate',
            'privateKey' => 'setPrivateKey',
            'certificateType' => 'setCertificateType',
            'expirationTime' => 'setExpirationTime',
            'httpsStatus' => 'setHttpsStatus',
            'forceRedirectHttps' => 'setForceRedirectHttps',
            'forceRedirectConfig' => 'setForceRedirectConfig',
            'http2' => 'setHttp2'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domainId  域名id。
    * domainName  绑定该证书的域名。
    * certName  证书名字。
    * certificate  证书内容。
    * privateKey  私钥内容。
    * certificateType  证书类型，0：自有证书，1：云托管证书，2：SCM证书。
    * expirationTime  证书过期时间。
    * httpsStatus  HTTPS证书是否启用，取值0：不启用；1：启用HTTPS加速并协议跟随回源；2：启用HTTPS加速并HTTP回源。
    * forceRedirectHttps  客户端请求是否强制重定向。1是，0否。（如果为2，表示强制跳转HTTP）
    * forceRedirectConfig  forceRedirectConfig
    * http2  是否使用HTTP2.0。（1是，0否。）
    *
    * @var string[]
    */
    protected static $getters = [
            'domainId' => 'getDomainId',
            'domainName' => 'getDomainName',
            'certName' => 'getCertName',
            'certificate' => 'getCertificate',
            'privateKey' => 'getPrivateKey',
            'certificateType' => 'getCertificateType',
            'expirationTime' => 'getExpirationTime',
            'httpsStatus' => 'getHttpsStatus',
            'forceRedirectHttps' => 'getForceRedirectHttps',
            'forceRedirectConfig' => 'getForceRedirectConfig',
            'http2' => 'getHttp2'
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
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['certName'] = isset($data['certName']) ? $data['certName'] : null;
        $this->container['certificate'] = isset($data['certificate']) ? $data['certificate'] : null;
        $this->container['privateKey'] = isset($data['privateKey']) ? $data['privateKey'] : null;
        $this->container['certificateType'] = isset($data['certificateType']) ? $data['certificateType'] : null;
        $this->container['expirationTime'] = isset($data['expirationTime']) ? $data['expirationTime'] : null;
        $this->container['httpsStatus'] = isset($data['httpsStatus']) ? $data['httpsStatus'] : null;
        $this->container['forceRedirectHttps'] = isset($data['forceRedirectHttps']) ? $data['forceRedirectHttps'] : null;
        $this->container['forceRedirectConfig'] = isset($data['forceRedirectConfig']) ? $data['forceRedirectConfig'] : null;
        $this->container['http2'] = isset($data['http2']) ? $data['http2'] : null;
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
    * Gets domainId
    *  域名id。
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId 域名id。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets domainName
    *  绑定该证书的域名。
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
    * @param string|null $domainName 绑定该证书的域名。
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets certName
    *  证书名字。
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
    * @param string|null $certName 证书名字。
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
    *  证书内容。
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
    * @param string|null $certificate 证书内容。
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
    *  私钥内容。
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
    * @param string|null $privateKey 私钥内容。
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
    *  证书类型，0：自有证书，1：云托管证书，2：SCM证书。
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
    * @param int|null $certificateType 证书类型，0：自有证书，1：云托管证书，2：SCM证书。
    *
    * @return $this
    */
    public function setCertificateType($certificateType)
    {
        $this->container['certificateType'] = $certificateType;
        return $this;
    }

    /**
    * Gets expirationTime
    *  证书过期时间。
    *
    * @return int|null
    */
    public function getExpirationTime()
    {
        return $this->container['expirationTime'];
    }

    /**
    * Sets expirationTime
    *
    * @param int|null $expirationTime 证书过期时间。
    *
    * @return $this
    */
    public function setExpirationTime($expirationTime)
    {
        $this->container['expirationTime'] = $expirationTime;
        return $this;
    }

    /**
    * Gets httpsStatus
    *  HTTPS证书是否启用，取值0：不启用；1：启用HTTPS加速并协议跟随回源；2：启用HTTPS加速并HTTP回源。
    *
    * @return int|null
    */
    public function getHttpsStatus()
    {
        return $this->container['httpsStatus'];
    }

    /**
    * Sets httpsStatus
    *
    * @param int|null $httpsStatus HTTPS证书是否启用，取值0：不启用；1：启用HTTPS加速并协议跟随回源；2：启用HTTPS加速并HTTP回源。
    *
    * @return $this
    */
    public function setHttpsStatus($httpsStatus)
    {
        $this->container['httpsStatus'] = $httpsStatus;
        return $this;
    }

    /**
    * Gets forceRedirectHttps
    *  客户端请求是否强制重定向。1是，0否。（如果为2，表示强制跳转HTTP）
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
    * @param int|null $forceRedirectHttps 客户端请求是否强制重定向。1是，0否。（如果为2，表示强制跳转HTTP）
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
    * @return \HuaweiCloud\SDK\Cdn\V1\Model\ForceRedirect|null
    */
    public function getForceRedirectConfig()
    {
        return $this->container['forceRedirectConfig'];
    }

    /**
    * Sets forceRedirectConfig
    *
    * @param \HuaweiCloud\SDK\Cdn\V1\Model\ForceRedirect|null $forceRedirectConfig forceRedirectConfig
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
    *  是否使用HTTP2.0。（1是，0否。）
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
    * @param int|null $http2 是否使用HTTP2.0。（1是，0否。）
    *
    * @return $this
    */
    public function setHttp2($http2)
    {
        $this->container['http2'] = $http2;
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

