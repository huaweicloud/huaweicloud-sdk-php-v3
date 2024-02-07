<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateDomainMultiCertificatesResponseBodyContent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateDomainMultiCertificatesResponseBodyContent';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domainName  域名列表。
    * httpsSwitch  https开关(0：\"关闭\"；1：\"设置证书\")。
    * accessOriginWay  回源方式:1：\"回源跟随\"；2：\"HTTP\"(默认)，3：https（自建）。
    * forceRedirectHttps  强制跳转HTTPS（0：不强制；1：强制） 。
    * forceRedirectConfig  forceRedirectConfig
    * http2  http2.0（0：关闭；1：开启）
    * certName  证书名称。
    * certificate  证书内容。
    * certificateType  证书类型（0为自有证书 ， 1为托管证书）。
    * expirationTime  证书过期时间。
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
            'certificateType' => 'int',
            'expirationTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domainName  域名列表。
    * httpsSwitch  https开关(0：\"关闭\"；1：\"设置证书\")。
    * accessOriginWay  回源方式:1：\"回源跟随\"；2：\"HTTP\"(默认)，3：https（自建）。
    * forceRedirectHttps  强制跳转HTTPS（0：不强制；1：强制） 。
    * forceRedirectConfig  forceRedirectConfig
    * http2  http2.0（0：关闭；1：开启）
    * certName  证书名称。
    * certificate  证书内容。
    * certificateType  证书类型（0为自有证书 ， 1为托管证书）。
    * expirationTime  证书过期时间。
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
        'certificateType' => 'int32',
        'expirationTime' => 'int64'
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
    * domainName  域名列表。
    * httpsSwitch  https开关(0：\"关闭\"；1：\"设置证书\")。
    * accessOriginWay  回源方式:1：\"回源跟随\"；2：\"HTTP\"(默认)，3：https（自建）。
    * forceRedirectHttps  强制跳转HTTPS（0：不强制；1：强制） 。
    * forceRedirectConfig  forceRedirectConfig
    * http2  http2.0（0：关闭；1：开启）
    * certName  证书名称。
    * certificate  证书内容。
    * certificateType  证书类型（0为自有证书 ， 1为托管证书）。
    * expirationTime  证书过期时间。
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
            'certificateType' => 'certificate_type',
            'expirationTime' => 'expiration_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domainName  域名列表。
    * httpsSwitch  https开关(0：\"关闭\"；1：\"设置证书\")。
    * accessOriginWay  回源方式:1：\"回源跟随\"；2：\"HTTP\"(默认)，3：https（自建）。
    * forceRedirectHttps  强制跳转HTTPS（0：不强制；1：强制） 。
    * forceRedirectConfig  forceRedirectConfig
    * http2  http2.0（0：关闭；1：开启）
    * certName  证书名称。
    * certificate  证书内容。
    * certificateType  证书类型（0为自有证书 ， 1为托管证书）。
    * expirationTime  证书过期时间。
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
            'certificateType' => 'setCertificateType',
            'expirationTime' => 'setExpirationTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domainName  域名列表。
    * httpsSwitch  https开关(0：\"关闭\"；1：\"设置证书\")。
    * accessOriginWay  回源方式:1：\"回源跟随\"；2：\"HTTP\"(默认)，3：https（自建）。
    * forceRedirectHttps  强制跳转HTTPS（0：不强制；1：强制） 。
    * forceRedirectConfig  forceRedirectConfig
    * http2  http2.0（0：关闭；1：开启）
    * certName  证书名称。
    * certificate  证书内容。
    * certificateType  证书类型（0为自有证书 ， 1为托管证书）。
    * expirationTime  证书过期时间。
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
            'certificateType' => 'getCertificateType',
            'expirationTime' => 'getExpirationTime'
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
        $this->container['certificateType'] = isset($data['certificateType']) ? $data['certificateType'] : null;
        $this->container['expirationTime'] = isset($data['expirationTime']) ? $data['expirationTime'] : null;
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
    *  域名列表。
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
    * @param string $domainName 域名列表。
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
    *  https开关(0：\"关闭\"；1：\"设置证书\")。
    *
    * @return int|null
    */
    public function getHttpsSwitch()
    {
        return $this->container['httpsSwitch'];
    }

    /**
    * Sets httpsSwitch
    *
    * @param int|null $httpsSwitch https开关(0：\"关闭\"；1：\"设置证书\")。
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
    *  回源方式:1：\"回源跟随\"；2：\"HTTP\"(默认)，3：https（自建）。
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
    * @param int|null $accessOriginWay 回源方式:1：\"回源跟随\"；2：\"HTTP\"(默认)，3：https（自建）。
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
    *  强制跳转HTTPS（0：不强制；1：强制） 。
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
    * @param int|null $forceRedirectHttps 强制跳转HTTPS（0：不强制；1：强制） 。
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
    *  http2.0（0：关闭；1：开启）
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
    * @param int|null $http2 http2.0（0：关闭；1：开启）
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
    *  证书名称。
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
    * @param string|null $certName 证书名称。
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
    * Gets certificateType
    *  证书类型（0为自有证书 ， 1为托管证书）。
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
    * @param int|null $certificateType 证书类型（0为自有证书 ， 1为托管证书）。
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

