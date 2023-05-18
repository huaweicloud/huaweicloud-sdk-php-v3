<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HttpPutBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HttpPutBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * httpsStatus  HTTPS证书是否启用。（on：开启，off：关闭）
    * certificateName  证书名字。（长度限制为3-64字符）。当证书开启时必传。
    * certificateValue  HTTPS协议使用的证书内容，当证书开启时必传。取值范围：PEM编码格式。
    * privateKey  HTTPS协议使用的私钥，当证书开启时必传。取值范围：PEM编码格式。
    * certificateSource  证书来源。1：代表华为云托管证书；0：表示自有证书。 默认值0。当证书开启时必传。
    * certificateType  证书类型。server：国际证书；server_sm：国密证书。
    * http2Status  是否使用HTTP2.0。（on：是，off：否。）,默认关闭，https_status=off时，该值不生效。
    * tlsVersion  传输层安全性协议。目前支持TLSv1.0/1.1/1.2/1.3四个版本的协议。默认全部开启，不可全部关闭，只可开启连续或单个版本号。多版本开启时，使用逗号拼接传输，例：TLSv1.1,TLSv1.2。
    * ocspStaplingStatus  是否开启ocsp stapling （on：是，off：否）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'httpsStatus' => 'string',
            'certificateName' => 'string',
            'certificateValue' => 'string',
            'privateKey' => 'string',
            'certificateSource' => 'int',
            'certificateType' => 'string',
            'http2Status' => 'string',
            'tlsVersion' => 'string',
            'ocspStaplingStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * httpsStatus  HTTPS证书是否启用。（on：开启，off：关闭）
    * certificateName  证书名字。（长度限制为3-64字符）。当证书开启时必传。
    * certificateValue  HTTPS协议使用的证书内容，当证书开启时必传。取值范围：PEM编码格式。
    * privateKey  HTTPS协议使用的私钥，当证书开启时必传。取值范围：PEM编码格式。
    * certificateSource  证书来源。1：代表华为云托管证书；0：表示自有证书。 默认值0。当证书开启时必传。
    * certificateType  证书类型。server：国际证书；server_sm：国密证书。
    * http2Status  是否使用HTTP2.0。（on：是，off：否。）,默认关闭，https_status=off时，该值不生效。
    * tlsVersion  传输层安全性协议。目前支持TLSv1.0/1.1/1.2/1.3四个版本的协议。默认全部开启，不可全部关闭，只可开启连续或单个版本号。多版本开启时，使用逗号拼接传输，例：TLSv1.1,TLSv1.2。
    * ocspStaplingStatus  是否开启ocsp stapling （on：是，off：否）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'httpsStatus' => null,
        'certificateName' => null,
        'certificateValue' => null,
        'privateKey' => null,
        'certificateSource' => 'int32',
        'certificateType' => null,
        'http2Status' => null,
        'tlsVersion' => null,
        'ocspStaplingStatus' => null
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
    * httpsStatus  HTTPS证书是否启用。（on：开启，off：关闭）
    * certificateName  证书名字。（长度限制为3-64字符）。当证书开启时必传。
    * certificateValue  HTTPS协议使用的证书内容，当证书开启时必传。取值范围：PEM编码格式。
    * privateKey  HTTPS协议使用的私钥，当证书开启时必传。取值范围：PEM编码格式。
    * certificateSource  证书来源。1：代表华为云托管证书；0：表示自有证书。 默认值0。当证书开启时必传。
    * certificateType  证书类型。server：国际证书；server_sm：国密证书。
    * http2Status  是否使用HTTP2.0。（on：是，off：否。）,默认关闭，https_status=off时，该值不生效。
    * tlsVersion  传输层安全性协议。目前支持TLSv1.0/1.1/1.2/1.3四个版本的协议。默认全部开启，不可全部关闭，只可开启连续或单个版本号。多版本开启时，使用逗号拼接传输，例：TLSv1.1,TLSv1.2。
    * ocspStaplingStatus  是否开启ocsp stapling （on：是，off：否）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'httpsStatus' => 'https_status',
            'certificateName' => 'certificate_name',
            'certificateValue' => 'certificate_value',
            'privateKey' => 'private_key',
            'certificateSource' => 'certificate_source',
            'certificateType' => 'certificate_type',
            'http2Status' => 'http2_status',
            'tlsVersion' => 'tls_version',
            'ocspStaplingStatus' => 'ocsp_stapling_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * httpsStatus  HTTPS证书是否启用。（on：开启，off：关闭）
    * certificateName  证书名字。（长度限制为3-64字符）。当证书开启时必传。
    * certificateValue  HTTPS协议使用的证书内容，当证书开启时必传。取值范围：PEM编码格式。
    * privateKey  HTTPS协议使用的私钥，当证书开启时必传。取值范围：PEM编码格式。
    * certificateSource  证书来源。1：代表华为云托管证书；0：表示自有证书。 默认值0。当证书开启时必传。
    * certificateType  证书类型。server：国际证书；server_sm：国密证书。
    * http2Status  是否使用HTTP2.0。（on：是，off：否。）,默认关闭，https_status=off时，该值不生效。
    * tlsVersion  传输层安全性协议。目前支持TLSv1.0/1.1/1.2/1.3四个版本的协议。默认全部开启，不可全部关闭，只可开启连续或单个版本号。多版本开启时，使用逗号拼接传输，例：TLSv1.1,TLSv1.2。
    * ocspStaplingStatus  是否开启ocsp stapling （on：是，off：否）。
    *
    * @var string[]
    */
    protected static $setters = [
            'httpsStatus' => 'setHttpsStatus',
            'certificateName' => 'setCertificateName',
            'certificateValue' => 'setCertificateValue',
            'privateKey' => 'setPrivateKey',
            'certificateSource' => 'setCertificateSource',
            'certificateType' => 'setCertificateType',
            'http2Status' => 'setHttp2Status',
            'tlsVersion' => 'setTlsVersion',
            'ocspStaplingStatus' => 'setOcspStaplingStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * httpsStatus  HTTPS证书是否启用。（on：开启，off：关闭）
    * certificateName  证书名字。（长度限制为3-64字符）。当证书开启时必传。
    * certificateValue  HTTPS协议使用的证书内容，当证书开启时必传。取值范围：PEM编码格式。
    * privateKey  HTTPS协议使用的私钥，当证书开启时必传。取值范围：PEM编码格式。
    * certificateSource  证书来源。1：代表华为云托管证书；0：表示自有证书。 默认值0。当证书开启时必传。
    * certificateType  证书类型。server：国际证书；server_sm：国密证书。
    * http2Status  是否使用HTTP2.0。（on：是，off：否。）,默认关闭，https_status=off时，该值不生效。
    * tlsVersion  传输层安全性协议。目前支持TLSv1.0/1.1/1.2/1.3四个版本的协议。默认全部开启，不可全部关闭，只可开启连续或单个版本号。多版本开启时，使用逗号拼接传输，例：TLSv1.1,TLSv1.2。
    * ocspStaplingStatus  是否开启ocsp stapling （on：是，off：否）。
    *
    * @var string[]
    */
    protected static $getters = [
            'httpsStatus' => 'getHttpsStatus',
            'certificateName' => 'getCertificateName',
            'certificateValue' => 'getCertificateValue',
            'privateKey' => 'getPrivateKey',
            'certificateSource' => 'getCertificateSource',
            'certificateType' => 'getCertificateType',
            'http2Status' => 'getHttp2Status',
            'tlsVersion' => 'getTlsVersion',
            'ocspStaplingStatus' => 'getOcspStaplingStatus'
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
        $this->container['httpsStatus'] = isset($data['httpsStatus']) ? $data['httpsStatus'] : null;
        $this->container['certificateName'] = isset($data['certificateName']) ? $data['certificateName'] : null;
        $this->container['certificateValue'] = isset($data['certificateValue']) ? $data['certificateValue'] : null;
        $this->container['privateKey'] = isset($data['privateKey']) ? $data['privateKey'] : null;
        $this->container['certificateSource'] = isset($data['certificateSource']) ? $data['certificateSource'] : null;
        $this->container['certificateType'] = isset($data['certificateType']) ? $data['certificateType'] : null;
        $this->container['http2Status'] = isset($data['http2Status']) ? $data['http2Status'] : null;
        $this->container['tlsVersion'] = isset($data['tlsVersion']) ? $data['tlsVersion'] : null;
        $this->container['ocspStaplingStatus'] = isset($data['ocspStaplingStatus']) ? $data['ocspStaplingStatus'] : null;
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
    * Gets httpsStatus
    *  HTTPS证书是否启用。（on：开启，off：关闭）
    *
    * @return string|null
    */
    public function getHttpsStatus()
    {
        return $this->container['httpsStatus'];
    }

    /**
    * Sets httpsStatus
    *
    * @param string|null $httpsStatus HTTPS证书是否启用。（on：开启，off：关闭）
    *
    * @return $this
    */
    public function setHttpsStatus($httpsStatus)
    {
        $this->container['httpsStatus'] = $httpsStatus;
        return $this;
    }

    /**
    * Gets certificateName
    *  证书名字。（长度限制为3-64字符）。当证书开启时必传。
    *
    * @return string|null
    */
    public function getCertificateName()
    {
        return $this->container['certificateName'];
    }

    /**
    * Sets certificateName
    *
    * @param string|null $certificateName 证书名字。（长度限制为3-64字符）。当证书开启时必传。
    *
    * @return $this
    */
    public function setCertificateName($certificateName)
    {
        $this->container['certificateName'] = $certificateName;
        return $this;
    }

    /**
    * Gets certificateValue
    *  HTTPS协议使用的证书内容，当证书开启时必传。取值范围：PEM编码格式。
    *
    * @return string|null
    */
    public function getCertificateValue()
    {
        return $this->container['certificateValue'];
    }

    /**
    * Sets certificateValue
    *
    * @param string|null $certificateValue HTTPS协议使用的证书内容，当证书开启时必传。取值范围：PEM编码格式。
    *
    * @return $this
    */
    public function setCertificateValue($certificateValue)
    {
        $this->container['certificateValue'] = $certificateValue;
        return $this;
    }

    /**
    * Gets privateKey
    *  HTTPS协议使用的私钥，当证书开启时必传。取值范围：PEM编码格式。
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
    * @param string|null $privateKey HTTPS协议使用的私钥，当证书开启时必传。取值范围：PEM编码格式。
    *
    * @return $this
    */
    public function setPrivateKey($privateKey)
    {
        $this->container['privateKey'] = $privateKey;
        return $this;
    }

    /**
    * Gets certificateSource
    *  证书来源。1：代表华为云托管证书；0：表示自有证书。 默认值0。当证书开启时必传。
    *
    * @return int|null
    */
    public function getCertificateSource()
    {
        return $this->container['certificateSource'];
    }

    /**
    * Sets certificateSource
    *
    * @param int|null $certificateSource 证书来源。1：代表华为云托管证书；0：表示自有证书。 默认值0。当证书开启时必传。
    *
    * @return $this
    */
    public function setCertificateSource($certificateSource)
    {
        $this->container['certificateSource'] = $certificateSource;
        return $this;
    }

    /**
    * Gets certificateType
    *  证书类型。server：国际证书；server_sm：国密证书。
    *
    * @return string|null
    */
    public function getCertificateType()
    {
        return $this->container['certificateType'];
    }

    /**
    * Sets certificateType
    *
    * @param string|null $certificateType 证书类型。server：国际证书；server_sm：国密证书。
    *
    * @return $this
    */
    public function setCertificateType($certificateType)
    {
        $this->container['certificateType'] = $certificateType;
        return $this;
    }

    /**
    * Gets http2Status
    *  是否使用HTTP2.0。（on：是，off：否。）,默认关闭，https_status=off时，该值不生效。
    *
    * @return string|null
    */
    public function getHttp2Status()
    {
        return $this->container['http2Status'];
    }

    /**
    * Sets http2Status
    *
    * @param string|null $http2Status 是否使用HTTP2.0。（on：是，off：否。）,默认关闭，https_status=off时，该值不生效。
    *
    * @return $this
    */
    public function setHttp2Status($http2Status)
    {
        $this->container['http2Status'] = $http2Status;
        return $this;
    }

    /**
    * Gets tlsVersion
    *  传输层安全性协议。目前支持TLSv1.0/1.1/1.2/1.3四个版本的协议。默认全部开启，不可全部关闭，只可开启连续或单个版本号。多版本开启时，使用逗号拼接传输，例：TLSv1.1,TLSv1.2。
    *
    * @return string|null
    */
    public function getTlsVersion()
    {
        return $this->container['tlsVersion'];
    }

    /**
    * Sets tlsVersion
    *
    * @param string|null $tlsVersion 传输层安全性协议。目前支持TLSv1.0/1.1/1.2/1.3四个版本的协议。默认全部开启，不可全部关闭，只可开启连续或单个版本号。多版本开启时，使用逗号拼接传输，例：TLSv1.1,TLSv1.2。
    *
    * @return $this
    */
    public function setTlsVersion($tlsVersion)
    {
        $this->container['tlsVersion'] = $tlsVersion;
        return $this;
    }

    /**
    * Gets ocspStaplingStatus
    *  是否开启ocsp stapling （on：是，off：否）。
    *
    * @return string|null
    */
    public function getOcspStaplingStatus()
    {
        return $this->container['ocspStaplingStatus'];
    }

    /**
    * Sets ocspStaplingStatus
    *
    * @param string|null $ocspStaplingStatus 是否开启ocsp stapling （on：是，off：否）。
    *
    * @return $this
    */
    public function setOcspStaplingStatus($ocspStaplingStatus)
    {
        $this->container['ocspStaplingStatus'] = $ocspStaplingStatus;
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

