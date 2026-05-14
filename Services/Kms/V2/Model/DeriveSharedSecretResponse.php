<?php

namespace HuaweiCloud\SDK\Kms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeriveSharedSecretResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeriveSharedSecretResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * keyId  密钥ID
    * keyAgreementAlgorithm  密钥协商算法
    * sharedSecret  由KMS私钥和您的对端公钥协商出的密钥，Base64格式，如果响应体包含了ciphertext_recipient，则不会包含shared_secret
    * ciphertextRecipient  KMS私钥和您的对端公钥协商出的密钥经过擎天证明文档加密后的密文，密文仅能被机密环境中的私钥解密，指定擎天证明文档后，才会响应ciphertext_recipient，否则通过shared_secret响应明文的共享密钥
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'keyId' => 'string',
            'keyAgreementAlgorithm' => 'string',
            'sharedSecret' => 'string',
            'ciphertextRecipient' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * keyId  密钥ID
    * keyAgreementAlgorithm  密钥协商算法
    * sharedSecret  由KMS私钥和您的对端公钥协商出的密钥，Base64格式，如果响应体包含了ciphertext_recipient，则不会包含shared_secret
    * ciphertextRecipient  KMS私钥和您的对端公钥协商出的密钥经过擎天证明文档加密后的密文，密文仅能被机密环境中的私钥解密，指定擎天证明文档后，才会响应ciphertext_recipient，否则通过shared_secret响应明文的共享密钥
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'keyId' => null,
        'keyAgreementAlgorithm' => null,
        'sharedSecret' => null,
        'ciphertextRecipient' => null
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
    * keyId  密钥ID
    * keyAgreementAlgorithm  密钥协商算法
    * sharedSecret  由KMS私钥和您的对端公钥协商出的密钥，Base64格式，如果响应体包含了ciphertext_recipient，则不会包含shared_secret
    * ciphertextRecipient  KMS私钥和您的对端公钥协商出的密钥经过擎天证明文档加密后的密文，密文仅能被机密环境中的私钥解密，指定擎天证明文档后，才会响应ciphertext_recipient，否则通过shared_secret响应明文的共享密钥
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'keyId' => 'key_id',
            'keyAgreementAlgorithm' => 'key_agreement_algorithm',
            'sharedSecret' => 'shared_secret',
            'ciphertextRecipient' => 'ciphertext_recipient'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * keyId  密钥ID
    * keyAgreementAlgorithm  密钥协商算法
    * sharedSecret  由KMS私钥和您的对端公钥协商出的密钥，Base64格式，如果响应体包含了ciphertext_recipient，则不会包含shared_secret
    * ciphertextRecipient  KMS私钥和您的对端公钥协商出的密钥经过擎天证明文档加密后的密文，密文仅能被机密环境中的私钥解密，指定擎天证明文档后，才会响应ciphertext_recipient，否则通过shared_secret响应明文的共享密钥
    *
    * @var string[]
    */
    protected static $setters = [
            'keyId' => 'setKeyId',
            'keyAgreementAlgorithm' => 'setKeyAgreementAlgorithm',
            'sharedSecret' => 'setSharedSecret',
            'ciphertextRecipient' => 'setCiphertextRecipient'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * keyId  密钥ID
    * keyAgreementAlgorithm  密钥协商算法
    * sharedSecret  由KMS私钥和您的对端公钥协商出的密钥，Base64格式，如果响应体包含了ciphertext_recipient，则不会包含shared_secret
    * ciphertextRecipient  KMS私钥和您的对端公钥协商出的密钥经过擎天证明文档加密后的密文，密文仅能被机密环境中的私钥解密，指定擎天证明文档后，才会响应ciphertext_recipient，否则通过shared_secret响应明文的共享密钥
    *
    * @var string[]
    */
    protected static $getters = [
            'keyId' => 'getKeyId',
            'keyAgreementAlgorithm' => 'getKeyAgreementAlgorithm',
            'sharedSecret' => 'getSharedSecret',
            'ciphertextRecipient' => 'getCiphertextRecipient'
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
        $this->container['keyId'] = isset($data['keyId']) ? $data['keyId'] : null;
        $this->container['keyAgreementAlgorithm'] = isset($data['keyAgreementAlgorithm']) ? $data['keyAgreementAlgorithm'] : null;
        $this->container['sharedSecret'] = isset($data['sharedSecret']) ? $data['sharedSecret'] : null;
        $this->container['ciphertextRecipient'] = isset($data['ciphertextRecipient']) ? $data['ciphertextRecipient'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['keyId']) && (mb_strlen($this->container['keyId']) > 36)) {
                $invalidProperties[] = "invalid value for 'keyId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['keyId']) && (mb_strlen($this->container['keyId']) < 36)) {
                $invalidProperties[] = "invalid value for 'keyId', the character length must be bigger than or equal to 36.";
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
    * Gets keyId
    *  密钥ID
    *
    * @return string|null
    */
    public function getKeyId()
    {
        return $this->container['keyId'];
    }

    /**
    * Sets keyId
    *
    * @param string|null $keyId 密钥ID
    *
    * @return $this
    */
    public function setKeyId($keyId)
    {
        $this->container['keyId'] = $keyId;
        return $this;
    }

    /**
    * Gets keyAgreementAlgorithm
    *  密钥协商算法
    *
    * @return string|null
    */
    public function getKeyAgreementAlgorithm()
    {
        return $this->container['keyAgreementAlgorithm'];
    }

    /**
    * Sets keyAgreementAlgorithm
    *
    * @param string|null $keyAgreementAlgorithm 密钥协商算法
    *
    * @return $this
    */
    public function setKeyAgreementAlgorithm($keyAgreementAlgorithm)
    {
        $this->container['keyAgreementAlgorithm'] = $keyAgreementAlgorithm;
        return $this;
    }

    /**
    * Gets sharedSecret
    *  由KMS私钥和您的对端公钥协商出的密钥，Base64格式，如果响应体包含了ciphertext_recipient，则不会包含shared_secret
    *
    * @return string|null
    */
    public function getSharedSecret()
    {
        return $this->container['sharedSecret'];
    }

    /**
    * Sets sharedSecret
    *
    * @param string|null $sharedSecret 由KMS私钥和您的对端公钥协商出的密钥，Base64格式，如果响应体包含了ciphertext_recipient，则不会包含shared_secret
    *
    * @return $this
    */
    public function setSharedSecret($sharedSecret)
    {
        $this->container['sharedSecret'] = $sharedSecret;
        return $this;
    }

    /**
    * Gets ciphertextRecipient
    *  KMS私钥和您的对端公钥协商出的密钥经过擎天证明文档加密后的密文，密文仅能被机密环境中的私钥解密，指定擎天证明文档后，才会响应ciphertext_recipient，否则通过shared_secret响应明文的共享密钥
    *
    * @return string|null
    */
    public function getCiphertextRecipient()
    {
        return $this->container['ciphertextRecipient'];
    }

    /**
    * Sets ciphertextRecipient
    *
    * @param string|null $ciphertextRecipient KMS私钥和您的对端公钥协商出的密钥经过擎天证明文档加密后的密文，密文仅能被机密环境中的私钥解密，指定擎天证明文档后，才会响应ciphertext_recipient，否则通过shared_secret响应明文的共享密钥
    *
    * @return $this
    */
    public function setCiphertextRecipient($ciphertextRecipient)
    {
        $this->container['ciphertextRecipient'] = $ciphertextRecipient;
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

