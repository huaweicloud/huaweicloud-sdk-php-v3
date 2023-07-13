<?php

namespace HuaweiCloud\SDK\Cdn\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HttpInfoRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HttpInfoRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * certName  证书名字。（长度限制为3-64字符）。
    * httpsStatus  HTTPS证书是否启用。0：不启用，此时无需填写证书及私钥参数；1：启用HTTPS加速并协议跟随回源；2：启用HTTPS加速并HTTP回源；3：启用HTTPS加速并HTTPS回源，首次配置证书需要传递证书及私钥，如已有证书可不用传证书及私钥。
    * certificate  HTTPS协议使用的SSL证书内容，仅支持PEM编码格式。不启用证书则无需输入。初次配置证书时必传。
    * privateKey  HTTPS协议使用的SSL证书私钥内容，仅支持PEM编码格式。不启用证书则无需输入。初次配置证书时必传。
    * http2  是否使用HTTP2.0。（1：是，0：否。）
    * certificateType  证书类型。1：代表华为云托管证书；0：表示自有证书。 默认值0。
    * forceRedirectHttps  强制跳转HTTPS（0：不强制；1：强制） 为空值时默认设置为关闭。（此参数即将下线,建议使用force_redirect_config修改配置）
    * forceRedirectConfig  forceRedirectConfig
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'certName' => 'string',
            'httpsStatus' => 'int',
            'certificate' => 'string',
            'privateKey' => 'string',
            'http2' => 'int',
            'certificateType' => 'int',
            'forceRedirectHttps' => 'int',
            'forceRedirectConfig' => '\HuaweiCloud\SDK\Cdn\V1\Model\ForceRedirect'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * certName  证书名字。（长度限制为3-64字符）。
    * httpsStatus  HTTPS证书是否启用。0：不启用，此时无需填写证书及私钥参数；1：启用HTTPS加速并协议跟随回源；2：启用HTTPS加速并HTTP回源；3：启用HTTPS加速并HTTPS回源，首次配置证书需要传递证书及私钥，如已有证书可不用传证书及私钥。
    * certificate  HTTPS协议使用的SSL证书内容，仅支持PEM编码格式。不启用证书则无需输入。初次配置证书时必传。
    * privateKey  HTTPS协议使用的SSL证书私钥内容，仅支持PEM编码格式。不启用证书则无需输入。初次配置证书时必传。
    * http2  是否使用HTTP2.0。（1：是，0：否。）
    * certificateType  证书类型。1：代表华为云托管证书；0：表示自有证书。 默认值0。
    * forceRedirectHttps  强制跳转HTTPS（0：不强制；1：强制） 为空值时默认设置为关闭。（此参数即将下线,建议使用force_redirect_config修改配置）
    * forceRedirectConfig  forceRedirectConfig
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'certName' => null,
        'httpsStatus' => 'int32',
        'certificate' => null,
        'privateKey' => null,
        'http2' => 'int32',
        'certificateType' => 'int32',
        'forceRedirectHttps' => 'int32',
        'forceRedirectConfig' => null
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
    * certName  证书名字。（长度限制为3-64字符）。
    * httpsStatus  HTTPS证书是否启用。0：不启用，此时无需填写证书及私钥参数；1：启用HTTPS加速并协议跟随回源；2：启用HTTPS加速并HTTP回源；3：启用HTTPS加速并HTTPS回源，首次配置证书需要传递证书及私钥，如已有证书可不用传证书及私钥。
    * certificate  HTTPS协议使用的SSL证书内容，仅支持PEM编码格式。不启用证书则无需输入。初次配置证书时必传。
    * privateKey  HTTPS协议使用的SSL证书私钥内容，仅支持PEM编码格式。不启用证书则无需输入。初次配置证书时必传。
    * http2  是否使用HTTP2.0。（1：是，0：否。）
    * certificateType  证书类型。1：代表华为云托管证书；0：表示自有证书。 默认值0。
    * forceRedirectHttps  强制跳转HTTPS（0：不强制；1：强制） 为空值时默认设置为关闭。（此参数即将下线,建议使用force_redirect_config修改配置）
    * forceRedirectConfig  forceRedirectConfig
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'certName' => 'cert_name',
            'httpsStatus' => 'https_status',
            'certificate' => 'certificate',
            'privateKey' => 'private_key',
            'http2' => 'http2',
            'certificateType' => 'certificate_type',
            'forceRedirectHttps' => 'force_redirect_https',
            'forceRedirectConfig' => 'force_redirect_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * certName  证书名字。（长度限制为3-64字符）。
    * httpsStatus  HTTPS证书是否启用。0：不启用，此时无需填写证书及私钥参数；1：启用HTTPS加速并协议跟随回源；2：启用HTTPS加速并HTTP回源；3：启用HTTPS加速并HTTPS回源，首次配置证书需要传递证书及私钥，如已有证书可不用传证书及私钥。
    * certificate  HTTPS协议使用的SSL证书内容，仅支持PEM编码格式。不启用证书则无需输入。初次配置证书时必传。
    * privateKey  HTTPS协议使用的SSL证书私钥内容，仅支持PEM编码格式。不启用证书则无需输入。初次配置证书时必传。
    * http2  是否使用HTTP2.0。（1：是，0：否。）
    * certificateType  证书类型。1：代表华为云托管证书；0：表示自有证书。 默认值0。
    * forceRedirectHttps  强制跳转HTTPS（0：不强制；1：强制） 为空值时默认设置为关闭。（此参数即将下线,建议使用force_redirect_config修改配置）
    * forceRedirectConfig  forceRedirectConfig
    *
    * @var string[]
    */
    protected static $setters = [
            'certName' => 'setCertName',
            'httpsStatus' => 'setHttpsStatus',
            'certificate' => 'setCertificate',
            'privateKey' => 'setPrivateKey',
            'http2' => 'setHttp2',
            'certificateType' => 'setCertificateType',
            'forceRedirectHttps' => 'setForceRedirectHttps',
            'forceRedirectConfig' => 'setForceRedirectConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * certName  证书名字。（长度限制为3-64字符）。
    * httpsStatus  HTTPS证书是否启用。0：不启用，此时无需填写证书及私钥参数；1：启用HTTPS加速并协议跟随回源；2：启用HTTPS加速并HTTP回源；3：启用HTTPS加速并HTTPS回源，首次配置证书需要传递证书及私钥，如已有证书可不用传证书及私钥。
    * certificate  HTTPS协议使用的SSL证书内容，仅支持PEM编码格式。不启用证书则无需输入。初次配置证书时必传。
    * privateKey  HTTPS协议使用的SSL证书私钥内容，仅支持PEM编码格式。不启用证书则无需输入。初次配置证书时必传。
    * http2  是否使用HTTP2.0。（1：是，0：否。）
    * certificateType  证书类型。1：代表华为云托管证书；0：表示自有证书。 默认值0。
    * forceRedirectHttps  强制跳转HTTPS（0：不强制；1：强制） 为空值时默认设置为关闭。（此参数即将下线,建议使用force_redirect_config修改配置）
    * forceRedirectConfig  forceRedirectConfig
    *
    * @var string[]
    */
    protected static $getters = [
            'certName' => 'getCertName',
            'httpsStatus' => 'getHttpsStatus',
            'certificate' => 'getCertificate',
            'privateKey' => 'getPrivateKey',
            'http2' => 'getHttp2',
            'certificateType' => 'getCertificateType',
            'forceRedirectHttps' => 'getForceRedirectHttps',
            'forceRedirectConfig' => 'getForceRedirectConfig'
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
        $this->container['certName'] = isset($data['certName']) ? $data['certName'] : null;
        $this->container['httpsStatus'] = isset($data['httpsStatus']) ? $data['httpsStatus'] : null;
        $this->container['certificate'] = isset($data['certificate']) ? $data['certificate'] : null;
        $this->container['privateKey'] = isset($data['privateKey']) ? $data['privateKey'] : null;
        $this->container['http2'] = isset($data['http2']) ? $data['http2'] : null;
        $this->container['certificateType'] = isset($data['certificateType']) ? $data['certificateType'] : null;
        $this->container['forceRedirectHttps'] = isset($data['forceRedirectHttps']) ? $data['forceRedirectHttps'] : null;
        $this->container['forceRedirectConfig'] = isset($data['forceRedirectConfig']) ? $data['forceRedirectConfig'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['certName'] === null) {
            $invalidProperties[] = "'certName' can't be null";
        }
        if ($this->container['httpsStatus'] === null) {
            $invalidProperties[] = "'httpsStatus' can't be null";
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
    * Gets certName
    *  证书名字。（长度限制为3-64字符）。
    *
    * @return string
    */
    public function getCertName()
    {
        return $this->container['certName'];
    }

    /**
    * Sets certName
    *
    * @param string $certName 证书名字。（长度限制为3-64字符）。
    *
    * @return $this
    */
    public function setCertName($certName)
    {
        $this->container['certName'] = $certName;
        return $this;
    }

    /**
    * Gets httpsStatus
    *  HTTPS证书是否启用。0：不启用，此时无需填写证书及私钥参数；1：启用HTTPS加速并协议跟随回源；2：启用HTTPS加速并HTTP回源；3：启用HTTPS加速并HTTPS回源，首次配置证书需要传递证书及私钥，如已有证书可不用传证书及私钥。
    *
    * @return int
    */
    public function getHttpsStatus()
    {
        return $this->container['httpsStatus'];
    }

    /**
    * Sets httpsStatus
    *
    * @param int $httpsStatus HTTPS证书是否启用。0：不启用，此时无需填写证书及私钥参数；1：启用HTTPS加速并协议跟随回源；2：启用HTTPS加速并HTTP回源；3：启用HTTPS加速并HTTPS回源，首次配置证书需要传递证书及私钥，如已有证书可不用传证书及私钥。
    *
    * @return $this
    */
    public function setHttpsStatus($httpsStatus)
    {
        $this->container['httpsStatus'] = $httpsStatus;
        return $this;
    }

    /**
    * Gets certificate
    *  HTTPS协议使用的SSL证书内容，仅支持PEM编码格式。不启用证书则无需输入。初次配置证书时必传。
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
    * @param string|null $certificate HTTPS协议使用的SSL证书内容，仅支持PEM编码格式。不启用证书则无需输入。初次配置证书时必传。
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
    *  HTTPS协议使用的SSL证书私钥内容，仅支持PEM编码格式。不启用证书则无需输入。初次配置证书时必传。
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
    * @param string|null $privateKey HTTPS协议使用的SSL证书私钥内容，仅支持PEM编码格式。不启用证书则无需输入。初次配置证书时必传。
    *
    * @return $this
    */
    public function setPrivateKey($privateKey)
    {
        $this->container['privateKey'] = $privateKey;
        return $this;
    }

    /**
    * Gets http2
    *  是否使用HTTP2.0。（1：是，0：否。）
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
    * @param int|null $http2 是否使用HTTP2.0。（1：是，0：否。）
    *
    * @return $this
    */
    public function setHttp2($http2)
    {
        $this->container['http2'] = $http2;
        return $this;
    }

    /**
    * Gets certificateType
    *  证书类型。1：代表华为云托管证书；0：表示自有证书。 默认值0。
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
    * @param int|null $certificateType 证书类型。1：代表华为云托管证书；0：表示自有证书。 默认值0。
    *
    * @return $this
    */
    public function setCertificateType($certificateType)
    {
        $this->container['certificateType'] = $certificateType;
        return $this;
    }

    /**
    * Gets forceRedirectHttps
    *  强制跳转HTTPS（0：不强制；1：强制） 为空值时默认设置为关闭。（此参数即将下线,建议使用force_redirect_config修改配置）
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
    * @param int|null $forceRedirectHttps 强制跳转HTTPS（0：不强制；1：强制） 为空值时默认设置为关闭。（此参数即将下线,建议使用force_redirect_config修改配置）
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

