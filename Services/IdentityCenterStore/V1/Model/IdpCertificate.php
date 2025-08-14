<?php

namespace HuaweiCloud\SDK\IdentityCenterStore\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IdpCertificate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IdpCertificate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * certificateId  证书全局唯一标识符（ID）
    * issuerName  身份提供商签发者
    * notAfter  证书有效期
    * notBefore  证书有效期
    * publicKey  证书公钥
    * serialNumber  证书序列号
    * serialNumberString  证书序列号文本
    * signatureAlgorithmName  签名算法
    * subjectName  Subject
    * version  版本
    * x509CertificateInPem  x509格式证书
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'certificateId' => 'string',
            'issuerName' => 'string',
            'notAfter' => 'float',
            'notBefore' => 'float',
            'publicKey' => 'string',
            'serialNumber' => 'float',
            'serialNumberString' => 'string',
            'signatureAlgorithmName' => 'string',
            'subjectName' => 'string',
            'version' => 'float',
            'x509CertificateInPem' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * certificateId  证书全局唯一标识符（ID）
    * issuerName  身份提供商签发者
    * notAfter  证书有效期
    * notBefore  证书有效期
    * publicKey  证书公钥
    * serialNumber  证书序列号
    * serialNumberString  证书序列号文本
    * signatureAlgorithmName  签名算法
    * subjectName  Subject
    * version  版本
    * x509CertificateInPem  x509格式证书
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'certificateId' => null,
        'issuerName' => null,
        'notAfter' => null,
        'notBefore' => null,
        'publicKey' => null,
        'serialNumber' => null,
        'serialNumberString' => null,
        'signatureAlgorithmName' => null,
        'subjectName' => null,
        'version' => null,
        'x509CertificateInPem' => null
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
    * certificateId  证书全局唯一标识符（ID）
    * issuerName  身份提供商签发者
    * notAfter  证书有效期
    * notBefore  证书有效期
    * publicKey  证书公钥
    * serialNumber  证书序列号
    * serialNumberString  证书序列号文本
    * signatureAlgorithmName  签名算法
    * subjectName  Subject
    * version  版本
    * x509CertificateInPem  x509格式证书
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'certificateId' => 'certificate_id',
            'issuerName' => 'issuer_name',
            'notAfter' => 'not_after',
            'notBefore' => 'not_before',
            'publicKey' => 'public_key',
            'serialNumber' => 'serial_number',
            'serialNumberString' => 'serial_number_string',
            'signatureAlgorithmName' => 'signature_algorithm_name',
            'subjectName' => 'subject_name',
            'version' => 'version',
            'x509CertificateInPem' => 'x509_Certificate_in_pem'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * certificateId  证书全局唯一标识符（ID）
    * issuerName  身份提供商签发者
    * notAfter  证书有效期
    * notBefore  证书有效期
    * publicKey  证书公钥
    * serialNumber  证书序列号
    * serialNumberString  证书序列号文本
    * signatureAlgorithmName  签名算法
    * subjectName  Subject
    * version  版本
    * x509CertificateInPem  x509格式证书
    *
    * @var string[]
    */
    protected static $setters = [
            'certificateId' => 'setCertificateId',
            'issuerName' => 'setIssuerName',
            'notAfter' => 'setNotAfter',
            'notBefore' => 'setNotBefore',
            'publicKey' => 'setPublicKey',
            'serialNumber' => 'setSerialNumber',
            'serialNumberString' => 'setSerialNumberString',
            'signatureAlgorithmName' => 'setSignatureAlgorithmName',
            'subjectName' => 'setSubjectName',
            'version' => 'setVersion',
            'x509CertificateInPem' => 'setX509CertificateInPem'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * certificateId  证书全局唯一标识符（ID）
    * issuerName  身份提供商签发者
    * notAfter  证书有效期
    * notBefore  证书有效期
    * publicKey  证书公钥
    * serialNumber  证书序列号
    * serialNumberString  证书序列号文本
    * signatureAlgorithmName  签名算法
    * subjectName  Subject
    * version  版本
    * x509CertificateInPem  x509格式证书
    *
    * @var string[]
    */
    protected static $getters = [
            'certificateId' => 'getCertificateId',
            'issuerName' => 'getIssuerName',
            'notAfter' => 'getNotAfter',
            'notBefore' => 'getNotBefore',
            'publicKey' => 'getPublicKey',
            'serialNumber' => 'getSerialNumber',
            'serialNumberString' => 'getSerialNumberString',
            'signatureAlgorithmName' => 'getSignatureAlgorithmName',
            'subjectName' => 'getSubjectName',
            'version' => 'getVersion',
            'x509CertificateInPem' => 'getX509CertificateInPem'
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
        $this->container['certificateId'] = isset($data['certificateId']) ? $data['certificateId'] : null;
        $this->container['issuerName'] = isset($data['issuerName']) ? $data['issuerName'] : null;
        $this->container['notAfter'] = isset($data['notAfter']) ? $data['notAfter'] : null;
        $this->container['notBefore'] = isset($data['notBefore']) ? $data['notBefore'] : null;
        $this->container['publicKey'] = isset($data['publicKey']) ? $data['publicKey'] : null;
        $this->container['serialNumber'] = isset($data['serialNumber']) ? $data['serialNumber'] : null;
        $this->container['serialNumberString'] = isset($data['serialNumberString']) ? $data['serialNumberString'] : null;
        $this->container['signatureAlgorithmName'] = isset($data['signatureAlgorithmName']) ? $data['signatureAlgorithmName'] : null;
        $this->container['subjectName'] = isset($data['subjectName']) ? $data['subjectName'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['x509CertificateInPem'] = isset($data['x509CertificateInPem']) ? $data['x509CertificateInPem'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['certificateId'] === null) {
            $invalidProperties[] = "'certificateId' can't be null";
        }
        if ($this->container['issuerName'] === null) {
            $invalidProperties[] = "'issuerName' can't be null";
        }
        if ($this->container['notAfter'] === null) {
            $invalidProperties[] = "'notAfter' can't be null";
        }
        if ($this->container['notBefore'] === null) {
            $invalidProperties[] = "'notBefore' can't be null";
        }
        if ($this->container['publicKey'] === null) {
            $invalidProperties[] = "'publicKey' can't be null";
        }
        if ($this->container['serialNumber'] === null) {
            $invalidProperties[] = "'serialNumber' can't be null";
        }
        if ($this->container['serialNumberString'] === null) {
            $invalidProperties[] = "'serialNumberString' can't be null";
        }
        if ($this->container['signatureAlgorithmName'] === null) {
            $invalidProperties[] = "'signatureAlgorithmName' can't be null";
        }
        if ($this->container['subjectName'] === null) {
            $invalidProperties[] = "'subjectName' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if ($this->container['x509CertificateInPem'] === null) {
            $invalidProperties[] = "'x509CertificateInPem' can't be null";
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
    * Gets certificateId
    *  证书全局唯一标识符（ID）
    *
    * @return string
    */
    public function getCertificateId()
    {
        return $this->container['certificateId'];
    }

    /**
    * Sets certificateId
    *
    * @param string $certificateId 证书全局唯一标识符（ID）
    *
    * @return $this
    */
    public function setCertificateId($certificateId)
    {
        $this->container['certificateId'] = $certificateId;
        return $this;
    }

    /**
    * Gets issuerName
    *  身份提供商签发者
    *
    * @return string
    */
    public function getIssuerName()
    {
        return $this->container['issuerName'];
    }

    /**
    * Sets issuerName
    *
    * @param string $issuerName 身份提供商签发者
    *
    * @return $this
    */
    public function setIssuerName($issuerName)
    {
        $this->container['issuerName'] = $issuerName;
        return $this;
    }

    /**
    * Gets notAfter
    *  证书有效期
    *
    * @return float
    */
    public function getNotAfter()
    {
        return $this->container['notAfter'];
    }

    /**
    * Sets notAfter
    *
    * @param float $notAfter 证书有效期
    *
    * @return $this
    */
    public function setNotAfter($notAfter)
    {
        $this->container['notAfter'] = $notAfter;
        return $this;
    }

    /**
    * Gets notBefore
    *  证书有效期
    *
    * @return float
    */
    public function getNotBefore()
    {
        return $this->container['notBefore'];
    }

    /**
    * Sets notBefore
    *
    * @param float $notBefore 证书有效期
    *
    * @return $this
    */
    public function setNotBefore($notBefore)
    {
        $this->container['notBefore'] = $notBefore;
        return $this;
    }

    /**
    * Gets publicKey
    *  证书公钥
    *
    * @return string
    */
    public function getPublicKey()
    {
        return $this->container['publicKey'];
    }

    /**
    * Sets publicKey
    *
    * @param string $publicKey 证书公钥
    *
    * @return $this
    */
    public function setPublicKey($publicKey)
    {
        $this->container['publicKey'] = $publicKey;
        return $this;
    }

    /**
    * Gets serialNumber
    *  证书序列号
    *
    * @return float
    */
    public function getSerialNumber()
    {
        return $this->container['serialNumber'];
    }

    /**
    * Sets serialNumber
    *
    * @param float $serialNumber 证书序列号
    *
    * @return $this
    */
    public function setSerialNumber($serialNumber)
    {
        $this->container['serialNumber'] = $serialNumber;
        return $this;
    }

    /**
    * Gets serialNumberString
    *  证书序列号文本
    *
    * @return string
    */
    public function getSerialNumberString()
    {
        return $this->container['serialNumberString'];
    }

    /**
    * Sets serialNumberString
    *
    * @param string $serialNumberString 证书序列号文本
    *
    * @return $this
    */
    public function setSerialNumberString($serialNumberString)
    {
        $this->container['serialNumberString'] = $serialNumberString;
        return $this;
    }

    /**
    * Gets signatureAlgorithmName
    *  签名算法
    *
    * @return string
    */
    public function getSignatureAlgorithmName()
    {
        return $this->container['signatureAlgorithmName'];
    }

    /**
    * Sets signatureAlgorithmName
    *
    * @param string $signatureAlgorithmName 签名算法
    *
    * @return $this
    */
    public function setSignatureAlgorithmName($signatureAlgorithmName)
    {
        $this->container['signatureAlgorithmName'] = $signatureAlgorithmName;
        return $this;
    }

    /**
    * Gets subjectName
    *  Subject
    *
    * @return string
    */
    public function getSubjectName()
    {
        return $this->container['subjectName'];
    }

    /**
    * Sets subjectName
    *
    * @param string $subjectName Subject
    *
    * @return $this
    */
    public function setSubjectName($subjectName)
    {
        $this->container['subjectName'] = $subjectName;
        return $this;
    }

    /**
    * Gets version
    *  版本
    *
    * @return float
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param float $version 版本
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets x509CertificateInPem
    *  x509格式证书
    *
    * @return string
    */
    public function getX509CertificateInPem()
    {
        return $this->container['x509CertificateInPem'];
    }

    /**
    * Sets x509CertificateInPem
    *
    * @param string $x509CertificateInPem x509格式证书
    *
    * @return $this
    */
    public function setX509CertificateInPem($x509CertificateInPem)
    {
        $this->container['x509CertificateInPem'] = $x509CertificateInPem;
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

