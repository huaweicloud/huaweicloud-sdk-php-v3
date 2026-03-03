<?php

namespace HuaweiCloud\SDK\Ccm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ParseCertificateSigningRequestResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ParseCertificateSigningRequestResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * keyAlgorithm  密钥算法。
    * keyAlgorithmLength  密钥算法长度，单位为bit。
    * signatureAlgorithm  签名算法，带具体的签名与哈希算法，如\"SHA256withRSA\"。
    * publicKey  公钥内容。 > 其中，换行符已被“\\r\\n”替代；
    * distinguishedName  distinguishedName
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'keyAlgorithm' => 'string',
            'keyAlgorithmLength' => 'int',
            'signatureAlgorithm' => 'string',
            'publicKey' => 'string',
            'distinguishedName' => '\HuaweiCloud\SDK\Ccm\V1\Model\DistinguishedName'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * keyAlgorithm  密钥算法。
    * keyAlgorithmLength  密钥算法长度，单位为bit。
    * signatureAlgorithm  签名算法，带具体的签名与哈希算法，如\"SHA256withRSA\"。
    * publicKey  公钥内容。 > 其中，换行符已被“\\r\\n”替代；
    * distinguishedName  distinguishedName
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'keyAlgorithm' => null,
        'keyAlgorithmLength' => 'int32',
        'signatureAlgorithm' => null,
        'publicKey' => null,
        'distinguishedName' => null
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
    * keyAlgorithm  密钥算法。
    * keyAlgorithmLength  密钥算法长度，单位为bit。
    * signatureAlgorithm  签名算法，带具体的签名与哈希算法，如\"SHA256withRSA\"。
    * publicKey  公钥内容。 > 其中，换行符已被“\\r\\n”替代；
    * distinguishedName  distinguishedName
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'keyAlgorithm' => 'key_algorithm',
            'keyAlgorithmLength' => 'key_algorithm_length',
            'signatureAlgorithm' => 'signature_algorithm',
            'publicKey' => 'public_key',
            'distinguishedName' => 'distinguished_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * keyAlgorithm  密钥算法。
    * keyAlgorithmLength  密钥算法长度，单位为bit。
    * signatureAlgorithm  签名算法，带具体的签名与哈希算法，如\"SHA256withRSA\"。
    * publicKey  公钥内容。 > 其中，换行符已被“\\r\\n”替代；
    * distinguishedName  distinguishedName
    *
    * @var string[]
    */
    protected static $setters = [
            'keyAlgorithm' => 'setKeyAlgorithm',
            'keyAlgorithmLength' => 'setKeyAlgorithmLength',
            'signatureAlgorithm' => 'setSignatureAlgorithm',
            'publicKey' => 'setPublicKey',
            'distinguishedName' => 'setDistinguishedName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * keyAlgorithm  密钥算法。
    * keyAlgorithmLength  密钥算法长度，单位为bit。
    * signatureAlgorithm  签名算法，带具体的签名与哈希算法，如\"SHA256withRSA\"。
    * publicKey  公钥内容。 > 其中，换行符已被“\\r\\n”替代；
    * distinguishedName  distinguishedName
    *
    * @var string[]
    */
    protected static $getters = [
            'keyAlgorithm' => 'getKeyAlgorithm',
            'keyAlgorithmLength' => 'getKeyAlgorithmLength',
            'signatureAlgorithm' => 'getSignatureAlgorithm',
            'publicKey' => 'getPublicKey',
            'distinguishedName' => 'getDistinguishedName'
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
        $this->container['keyAlgorithm'] = isset($data['keyAlgorithm']) ? $data['keyAlgorithm'] : null;
        $this->container['keyAlgorithmLength'] = isset($data['keyAlgorithmLength']) ? $data['keyAlgorithmLength'] : null;
        $this->container['signatureAlgorithm'] = isset($data['signatureAlgorithm']) ? $data['signatureAlgorithm'] : null;
        $this->container['publicKey'] = isset($data['publicKey']) ? $data['publicKey'] : null;
        $this->container['distinguishedName'] = isset($data['distinguishedName']) ? $data['distinguishedName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['publicKey']) && (mb_strlen($this->container['publicKey']) > 4096)) {
                $invalidProperties[] = "invalid value for 'publicKey', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['publicKey']) && (mb_strlen($this->container['publicKey']) < 0)) {
                $invalidProperties[] = "invalid value for 'publicKey', the character length must be bigger than or equal to 0.";
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
    * Gets keyAlgorithm
    *  密钥算法。
    *
    * @return string|null
    */
    public function getKeyAlgorithm()
    {
        return $this->container['keyAlgorithm'];
    }

    /**
    * Sets keyAlgorithm
    *
    * @param string|null $keyAlgorithm 密钥算法。
    *
    * @return $this
    */
    public function setKeyAlgorithm($keyAlgorithm)
    {
        $this->container['keyAlgorithm'] = $keyAlgorithm;
        return $this;
    }

    /**
    * Gets keyAlgorithmLength
    *  密钥算法长度，单位为bit。
    *
    * @return int|null
    */
    public function getKeyAlgorithmLength()
    {
        return $this->container['keyAlgorithmLength'];
    }

    /**
    * Sets keyAlgorithmLength
    *
    * @param int|null $keyAlgorithmLength 密钥算法长度，单位为bit。
    *
    * @return $this
    */
    public function setKeyAlgorithmLength($keyAlgorithmLength)
    {
        $this->container['keyAlgorithmLength'] = $keyAlgorithmLength;
        return $this;
    }

    /**
    * Gets signatureAlgorithm
    *  签名算法，带具体的签名与哈希算法，如\"SHA256withRSA\"。
    *
    * @return string|null
    */
    public function getSignatureAlgorithm()
    {
        return $this->container['signatureAlgorithm'];
    }

    /**
    * Sets signatureAlgorithm
    *
    * @param string|null $signatureAlgorithm 签名算法，带具体的签名与哈希算法，如\"SHA256withRSA\"。
    *
    * @return $this
    */
    public function setSignatureAlgorithm($signatureAlgorithm)
    {
        $this->container['signatureAlgorithm'] = $signatureAlgorithm;
        return $this;
    }

    /**
    * Gets publicKey
    *  公钥内容。 > 其中，换行符已被“\\r\\n”替代；
    *
    * @return string|null
    */
    public function getPublicKey()
    {
        return $this->container['publicKey'];
    }

    /**
    * Sets publicKey
    *
    * @param string|null $publicKey 公钥内容。 > 其中，换行符已被“\\r\\n”替代；
    *
    * @return $this
    */
    public function setPublicKey($publicKey)
    {
        $this->container['publicKey'] = $publicKey;
        return $this;
    }

    /**
    * Gets distinguishedName
    *  distinguishedName
    *
    * @return \HuaweiCloud\SDK\Ccm\V1\Model\DistinguishedName|null
    */
    public function getDistinguishedName()
    {
        return $this->container['distinguishedName'];
    }

    /**
    * Sets distinguishedName
    *
    * @param \HuaweiCloud\SDK\Ccm\V1\Model\DistinguishedName|null $distinguishedName distinguishedName
    *
    * @return $this
    */
    public function setDistinguishedName($distinguishedName)
    {
        $this->container['distinguishedName'] = $distinguishedName;
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

