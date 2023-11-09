<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UrlDomainModify implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UrlDomainModify';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * minSslVersion  最小ssl协议版本号。支持TLSv1.1或TLSv1.2
    * isHttpRedirectToHttps  是否开启http到https的重定向，false为关闭，true为开启，默认为false
    * verifiedClientCertificateEnabled  是否开启客户端证书校验。只有绑定证书时，该参数才生效。当绑定证书存在trusted_root_ca时，默认开启；当绑定证书不存在trusted_root_ca时，默认关闭。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'minSslVersion' => 'string',
            'isHttpRedirectToHttps' => 'bool',
            'verifiedClientCertificateEnabled' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * minSslVersion  最小ssl协议版本号。支持TLSv1.1或TLSv1.2
    * isHttpRedirectToHttps  是否开启http到https的重定向，false为关闭，true为开启，默认为false
    * verifiedClientCertificateEnabled  是否开启客户端证书校验。只有绑定证书时，该参数才生效。当绑定证书存在trusted_root_ca时，默认开启；当绑定证书不存在trusted_root_ca时，默认关闭。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'minSslVersion' => null,
        'isHttpRedirectToHttps' => null,
        'verifiedClientCertificateEnabled' => null
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
    * minSslVersion  最小ssl协议版本号。支持TLSv1.1或TLSv1.2
    * isHttpRedirectToHttps  是否开启http到https的重定向，false为关闭，true为开启，默认为false
    * verifiedClientCertificateEnabled  是否开启客户端证书校验。只有绑定证书时，该参数才生效。当绑定证书存在trusted_root_ca时，默认开启；当绑定证书不存在trusted_root_ca时，默认关闭。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'minSslVersion' => 'min_ssl_version',
            'isHttpRedirectToHttps' => 'is_http_redirect_to_https',
            'verifiedClientCertificateEnabled' => 'verified_client_certificate_enabled'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * minSslVersion  最小ssl协议版本号。支持TLSv1.1或TLSv1.2
    * isHttpRedirectToHttps  是否开启http到https的重定向，false为关闭，true为开启，默认为false
    * verifiedClientCertificateEnabled  是否开启客户端证书校验。只有绑定证书时，该参数才生效。当绑定证书存在trusted_root_ca时，默认开启；当绑定证书不存在trusted_root_ca时，默认关闭。
    *
    * @var string[]
    */
    protected static $setters = [
            'minSslVersion' => 'setMinSslVersion',
            'isHttpRedirectToHttps' => 'setIsHttpRedirectToHttps',
            'verifiedClientCertificateEnabled' => 'setVerifiedClientCertificateEnabled'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * minSslVersion  最小ssl协议版本号。支持TLSv1.1或TLSv1.2
    * isHttpRedirectToHttps  是否开启http到https的重定向，false为关闭，true为开启，默认为false
    * verifiedClientCertificateEnabled  是否开启客户端证书校验。只有绑定证书时，该参数才生效。当绑定证书存在trusted_root_ca时，默认开启；当绑定证书不存在trusted_root_ca时，默认关闭。
    *
    * @var string[]
    */
    protected static $getters = [
            'minSslVersion' => 'getMinSslVersion',
            'isHttpRedirectToHttps' => 'getIsHttpRedirectToHttps',
            'verifiedClientCertificateEnabled' => 'getVerifiedClientCertificateEnabled'
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
        $this->container['minSslVersion'] = isset($data['minSslVersion']) ? $data['minSslVersion'] : null;
        $this->container['isHttpRedirectToHttps'] = isset($data['isHttpRedirectToHttps']) ? $data['isHttpRedirectToHttps'] : null;
        $this->container['verifiedClientCertificateEnabled'] = isset($data['verifiedClientCertificateEnabled']) ? $data['verifiedClientCertificateEnabled'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['minSslVersion'] === null) {
            $invalidProperties[] = "'minSslVersion' can't be null";
        }
            $allowedValues = $this->getMinSslVersionAllowableValues();
                if (!is_null($this->container['minSslVersion']) && !in_array($this->container['minSslVersion'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'minSslVersion', must be one of '%s'",
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
    * Gets minSslVersion
    *  最小ssl协议版本号。支持TLSv1.1或TLSv1.2
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
    * @param string $minSslVersion 最小ssl协议版本号。支持TLSv1.1或TLSv1.2
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

