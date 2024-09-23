<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CertificatesPutBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CertificatesPutBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * certificateSource  证书来源，0：自有证书。2：SCM证书。
    * scmCertificateId  SCM证书id
    * certificateType  证书类型，server：国际证书；server_sm：国密证书。
    * certificateName  证书名字，长度限制为3-64字符。
    * certificateValue  HTTPS协议使用的证书内容。  > PEM编码格式。
    * privateKey  HTTPS协议使用的私钥。  > PEM编码格式。
    * encCertificateValue  加密证书内容，证书类型为国密证书时必传。  > PEM编码格式。
    * encPrivateKey  加密私钥内容，证书类型为国密证书时必传。  > PEM编码格式。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'certificateSource' => 'int',
            'scmCertificateId' => 'string',
            'certificateType' => 'string',
            'certificateName' => 'string',
            'certificateValue' => 'string',
            'privateKey' => 'string',
            'encCertificateValue' => 'string',
            'encPrivateKey' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * certificateSource  证书来源，0：自有证书。2：SCM证书。
    * scmCertificateId  SCM证书id
    * certificateType  证书类型，server：国际证书；server_sm：国密证书。
    * certificateName  证书名字，长度限制为3-64字符。
    * certificateValue  HTTPS协议使用的证书内容。  > PEM编码格式。
    * privateKey  HTTPS协议使用的私钥。  > PEM编码格式。
    * encCertificateValue  加密证书内容，证书类型为国密证书时必传。  > PEM编码格式。
    * encPrivateKey  加密私钥内容，证书类型为国密证书时必传。  > PEM编码格式。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'certificateSource' => 'int32',
        'scmCertificateId' => null,
        'certificateType' => null,
        'certificateName' => null,
        'certificateValue' => null,
        'privateKey' => null,
        'encCertificateValue' => null,
        'encPrivateKey' => null
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
    * certificateSource  证书来源，0：自有证书。2：SCM证书。
    * scmCertificateId  SCM证书id
    * certificateType  证书类型，server：国际证书；server_sm：国密证书。
    * certificateName  证书名字，长度限制为3-64字符。
    * certificateValue  HTTPS协议使用的证书内容。  > PEM编码格式。
    * privateKey  HTTPS协议使用的私钥。  > PEM编码格式。
    * encCertificateValue  加密证书内容，证书类型为国密证书时必传。  > PEM编码格式。
    * encPrivateKey  加密私钥内容，证书类型为国密证书时必传。  > PEM编码格式。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'certificateSource' => 'certificate_source',
            'scmCertificateId' => 'scm_certificate_id',
            'certificateType' => 'certificate_type',
            'certificateName' => 'certificate_name',
            'certificateValue' => 'certificate_value',
            'privateKey' => 'private_key',
            'encCertificateValue' => 'enc_certificate_value',
            'encPrivateKey' => 'enc_private_key'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * certificateSource  证书来源，0：自有证书。2：SCM证书。
    * scmCertificateId  SCM证书id
    * certificateType  证书类型，server：国际证书；server_sm：国密证书。
    * certificateName  证书名字，长度限制为3-64字符。
    * certificateValue  HTTPS协议使用的证书内容。  > PEM编码格式。
    * privateKey  HTTPS协议使用的私钥。  > PEM编码格式。
    * encCertificateValue  加密证书内容，证书类型为国密证书时必传。  > PEM编码格式。
    * encPrivateKey  加密私钥内容，证书类型为国密证书时必传。  > PEM编码格式。
    *
    * @var string[]
    */
    protected static $setters = [
            'certificateSource' => 'setCertificateSource',
            'scmCertificateId' => 'setScmCertificateId',
            'certificateType' => 'setCertificateType',
            'certificateName' => 'setCertificateName',
            'certificateValue' => 'setCertificateValue',
            'privateKey' => 'setPrivateKey',
            'encCertificateValue' => 'setEncCertificateValue',
            'encPrivateKey' => 'setEncPrivateKey'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * certificateSource  证书来源，0：自有证书。2：SCM证书。
    * scmCertificateId  SCM证书id
    * certificateType  证书类型，server：国际证书；server_sm：国密证书。
    * certificateName  证书名字，长度限制为3-64字符。
    * certificateValue  HTTPS协议使用的证书内容。  > PEM编码格式。
    * privateKey  HTTPS协议使用的私钥。  > PEM编码格式。
    * encCertificateValue  加密证书内容，证书类型为国密证书时必传。  > PEM编码格式。
    * encPrivateKey  加密私钥内容，证书类型为国密证书时必传。  > PEM编码格式。
    *
    * @var string[]
    */
    protected static $getters = [
            'certificateSource' => 'getCertificateSource',
            'scmCertificateId' => 'getScmCertificateId',
            'certificateType' => 'getCertificateType',
            'certificateName' => 'getCertificateName',
            'certificateValue' => 'getCertificateValue',
            'privateKey' => 'getPrivateKey',
            'encCertificateValue' => 'getEncCertificateValue',
            'encPrivateKey' => 'getEncPrivateKey'
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
        $this->container['certificateSource'] = isset($data['certificateSource']) ? $data['certificateSource'] : null;
        $this->container['scmCertificateId'] = isset($data['scmCertificateId']) ? $data['scmCertificateId'] : null;
        $this->container['certificateType'] = isset($data['certificateType']) ? $data['certificateType'] : null;
        $this->container['certificateName'] = isset($data['certificateName']) ? $data['certificateName'] : null;
        $this->container['certificateValue'] = isset($data['certificateValue']) ? $data['certificateValue'] : null;
        $this->container['privateKey'] = isset($data['privateKey']) ? $data['privateKey'] : null;
        $this->container['encCertificateValue'] = isset($data['encCertificateValue']) ? $data['encCertificateValue'] : null;
        $this->container['encPrivateKey'] = isset($data['encPrivateKey']) ? $data['encPrivateKey'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['certificateType'] === null) {
            $invalidProperties[] = "'certificateType' can't be null";
        }
        if ($this->container['certificateName'] === null) {
            $invalidProperties[] = "'certificateName' can't be null";
        }
        if ($this->container['certificateValue'] === null) {
            $invalidProperties[] = "'certificateValue' can't be null";
        }
        if ($this->container['privateKey'] === null) {
            $invalidProperties[] = "'privateKey' can't be null";
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
    * Gets certificateSource
    *  证书来源，0：自有证书。2：SCM证书。
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
    * @param int|null $certificateSource 证书来源，0：自有证书。2：SCM证书。
    *
    * @return $this
    */
    public function setCertificateSource($certificateSource)
    {
        $this->container['certificateSource'] = $certificateSource;
        return $this;
    }

    /**
    * Gets scmCertificateId
    *  SCM证书id
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
    * @param string|null $scmCertificateId SCM证书id
    *
    * @return $this
    */
    public function setScmCertificateId($scmCertificateId)
    {
        $this->container['scmCertificateId'] = $scmCertificateId;
        return $this;
    }

    /**
    * Gets certificateType
    *  证书类型，server：国际证书；server_sm：国密证书。
    *
    * @return string
    */
    public function getCertificateType()
    {
        return $this->container['certificateType'];
    }

    /**
    * Sets certificateType
    *
    * @param string $certificateType 证书类型，server：国际证书；server_sm：国密证书。
    *
    * @return $this
    */
    public function setCertificateType($certificateType)
    {
        $this->container['certificateType'] = $certificateType;
        return $this;
    }

    /**
    * Gets certificateName
    *  证书名字，长度限制为3-64字符。
    *
    * @return string
    */
    public function getCertificateName()
    {
        return $this->container['certificateName'];
    }

    /**
    * Sets certificateName
    *
    * @param string $certificateName 证书名字，长度限制为3-64字符。
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
    *  HTTPS协议使用的证书内容。  > PEM编码格式。
    *
    * @return string
    */
    public function getCertificateValue()
    {
        return $this->container['certificateValue'];
    }

    /**
    * Sets certificateValue
    *
    * @param string $certificateValue HTTPS协议使用的证书内容。  > PEM编码格式。
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
    *  HTTPS协议使用的私钥。  > PEM编码格式。
    *
    * @return string
    */
    public function getPrivateKey()
    {
        return $this->container['privateKey'];
    }

    /**
    * Sets privateKey
    *
    * @param string $privateKey HTTPS协议使用的私钥。  > PEM编码格式。
    *
    * @return $this
    */
    public function setPrivateKey($privateKey)
    {
        $this->container['privateKey'] = $privateKey;
        return $this;
    }

    /**
    * Gets encCertificateValue
    *  加密证书内容，证书类型为国密证书时必传。  > PEM编码格式。
    *
    * @return string|null
    */
    public function getEncCertificateValue()
    {
        return $this->container['encCertificateValue'];
    }

    /**
    * Sets encCertificateValue
    *
    * @param string|null $encCertificateValue 加密证书内容，证书类型为国密证书时必传。  > PEM编码格式。
    *
    * @return $this
    */
    public function setEncCertificateValue($encCertificateValue)
    {
        $this->container['encCertificateValue'] = $encCertificateValue;
        return $this;
    }

    /**
    * Gets encPrivateKey
    *  加密私钥内容，证书类型为国密证书时必传。  > PEM编码格式。
    *
    * @return string|null
    */
    public function getEncPrivateKey()
    {
        return $this->container['encPrivateKey'];
    }

    /**
    * Sets encPrivateKey
    *
    * @param string|null $encPrivateKey 加密私钥内容，证书类型为国密证书时必传。  > PEM编码格式。
    *
    * @return $this
    */
    public function setEncPrivateKey($encPrivateKey)
    {
        $this->container['encPrivateKey'] = $encPrivateKey;
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

