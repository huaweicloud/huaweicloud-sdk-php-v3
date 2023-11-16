<?php

namespace HuaweiCloud\SDK\Cdn\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HttpGetBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HttpGetBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * httpsStatus  HTTPS证书是否启用，on：开启，off：关闭。
    * certificateName  证书名字。
    * certificateValue  HTTPS协议使用的证书内容，PEM编码格式。
    * expireTime  证书过期时间。  > UTC时间。
    * certificateSource  证书来源,1：华为云托管证书,0：自有证书。
    * certificateType  证书类型。server：国际证书；server_sm：国密证书。
    * http2Status  是否使用HTTP2.0，on：是，off：否。
    * tlsVersion  传输层安全性协议。
    * ocspStaplingStatus  是否开启ocsp stapling,on：是，off：否。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'httpsStatus' => 'string',
            'certificateName' => 'string',
            'certificateValue' => 'string',
            'expireTime' => 'int',
            'certificateSource' => 'int',
            'certificateType' => 'string',
            'http2Status' => 'string',
            'tlsVersion' => 'string',
            'ocspStaplingStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * httpsStatus  HTTPS证书是否启用，on：开启，off：关闭。
    * certificateName  证书名字。
    * certificateValue  HTTPS协议使用的证书内容，PEM编码格式。
    * expireTime  证书过期时间。  > UTC时间。
    * certificateSource  证书来源,1：华为云托管证书,0：自有证书。
    * certificateType  证书类型。server：国际证书；server_sm：国密证书。
    * http2Status  是否使用HTTP2.0，on：是，off：否。
    * tlsVersion  传输层安全性协议。
    * ocspStaplingStatus  是否开启ocsp stapling,on：是，off：否。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'httpsStatus' => null,
        'certificateName' => null,
        'certificateValue' => null,
        'expireTime' => 'int64',
        'certificateSource' => null,
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
    * httpsStatus  HTTPS证书是否启用，on：开启，off：关闭。
    * certificateName  证书名字。
    * certificateValue  HTTPS协议使用的证书内容，PEM编码格式。
    * expireTime  证书过期时间。  > UTC时间。
    * certificateSource  证书来源,1：华为云托管证书,0：自有证书。
    * certificateType  证书类型。server：国际证书；server_sm：国密证书。
    * http2Status  是否使用HTTP2.0，on：是，off：否。
    * tlsVersion  传输层安全性协议。
    * ocspStaplingStatus  是否开启ocsp stapling,on：是，off：否。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'httpsStatus' => 'https_status',
            'certificateName' => 'certificate_name',
            'certificateValue' => 'certificate_value',
            'expireTime' => 'expire_time',
            'certificateSource' => 'certificate_source',
            'certificateType' => 'certificate_type',
            'http2Status' => 'http2_status',
            'tlsVersion' => 'tls_version',
            'ocspStaplingStatus' => 'ocsp_stapling_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * httpsStatus  HTTPS证书是否启用，on：开启，off：关闭。
    * certificateName  证书名字。
    * certificateValue  HTTPS协议使用的证书内容，PEM编码格式。
    * expireTime  证书过期时间。  > UTC时间。
    * certificateSource  证书来源,1：华为云托管证书,0：自有证书。
    * certificateType  证书类型。server：国际证书；server_sm：国密证书。
    * http2Status  是否使用HTTP2.0，on：是，off：否。
    * tlsVersion  传输层安全性协议。
    * ocspStaplingStatus  是否开启ocsp stapling,on：是，off：否。
    *
    * @var string[]
    */
    protected static $setters = [
            'httpsStatus' => 'setHttpsStatus',
            'certificateName' => 'setCertificateName',
            'certificateValue' => 'setCertificateValue',
            'expireTime' => 'setExpireTime',
            'certificateSource' => 'setCertificateSource',
            'certificateType' => 'setCertificateType',
            'http2Status' => 'setHttp2Status',
            'tlsVersion' => 'setTlsVersion',
            'ocspStaplingStatus' => 'setOcspStaplingStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * httpsStatus  HTTPS证书是否启用，on：开启，off：关闭。
    * certificateName  证书名字。
    * certificateValue  HTTPS协议使用的证书内容，PEM编码格式。
    * expireTime  证书过期时间。  > UTC时间。
    * certificateSource  证书来源,1：华为云托管证书,0：自有证书。
    * certificateType  证书类型。server：国际证书；server_sm：国密证书。
    * http2Status  是否使用HTTP2.0，on：是，off：否。
    * tlsVersion  传输层安全性协议。
    * ocspStaplingStatus  是否开启ocsp stapling,on：是，off：否。
    *
    * @var string[]
    */
    protected static $getters = [
            'httpsStatus' => 'getHttpsStatus',
            'certificateName' => 'getCertificateName',
            'certificateValue' => 'getCertificateValue',
            'expireTime' => 'getExpireTime',
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
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
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
    *  HTTPS证书是否启用，on：开启，off：关闭。
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
    * @param string|null $httpsStatus HTTPS证书是否启用，on：开启，off：关闭。
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
    *  证书名字。
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
    * @param string|null $certificateName 证书名字。
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
    *  HTTPS协议使用的证书内容，PEM编码格式。
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
    * @param string|null $certificateValue HTTPS协议使用的证书内容，PEM编码格式。
    *
    * @return $this
    */
    public function setCertificateValue($certificateValue)
    {
        $this->container['certificateValue'] = $certificateValue;
        return $this;
    }

    /**
    * Gets expireTime
    *  证书过期时间。  > UTC时间。
    *
    * @return int|null
    */
    public function getExpireTime()
    {
        return $this->container['expireTime'];
    }

    /**
    * Sets expireTime
    *
    * @param int|null $expireTime 证书过期时间。  > UTC时间。
    *
    * @return $this
    */
    public function setExpireTime($expireTime)
    {
        $this->container['expireTime'] = $expireTime;
        return $this;
    }

    /**
    * Gets certificateSource
    *  证书来源,1：华为云托管证书,0：自有证书。
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
    * @param int|null $certificateSource 证书来源,1：华为云托管证书,0：自有证书。
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
    *  是否使用HTTP2.0，on：是，off：否。
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
    * @param string|null $http2Status 是否使用HTTP2.0，on：是，off：否。
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
    *  传输层安全性协议。
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
    * @param string|null $tlsVersion 传输层安全性协议。
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
    *  是否开启ocsp stapling,on：是，off：否。
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
    * @param string|null $ocspStaplingStatus 是否开启ocsp stapling,on：是，off：否。
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

