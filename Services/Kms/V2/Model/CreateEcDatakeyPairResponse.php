<?php

namespace HuaweiCloud\SDK\Kms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateEcDatakeyPairResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateEcDatakeyPairResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * keyId  密钥ID。
    * keySpec  需要包含算法、长度、曲线信息。可选值有RSA_2048 | RSA_3072 | RSA_4096 | ECC_NIST_P256 | ECC_NIST_P384 | ECC_NIST_P521 | ECC_SECG_P256K1 | SM2
    * publicKey  明文公钥信息
    * privateKeyCipherText  密文私钥
    * privateKeyPlainText  明文私钥。private_key_plain_text、wrapped_private_key和ciphertext_recipient只能有一个有值
    * wrappedPrivateKey  由自定义私钥加密的密文私钥。private_key_plain_text、wrapped_private_key和ciphertext_recipient只能有一个有值
    * ciphertextRecipient  由擎天公钥信息加密的密文私钥。private_key_plain_text、wrapped_private_key和ciphertext_recipient只能有一个有值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'keyId' => 'string',
            'keySpec' => 'string',
            'publicKey' => 'string',
            'privateKeyCipherText' => 'string',
            'privateKeyPlainText' => 'string',
            'wrappedPrivateKey' => 'string',
            'ciphertextRecipient' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * keyId  密钥ID。
    * keySpec  需要包含算法、长度、曲线信息。可选值有RSA_2048 | RSA_3072 | RSA_4096 | ECC_NIST_P256 | ECC_NIST_P384 | ECC_NIST_P521 | ECC_SECG_P256K1 | SM2
    * publicKey  明文公钥信息
    * privateKeyCipherText  密文私钥
    * privateKeyPlainText  明文私钥。private_key_plain_text、wrapped_private_key和ciphertext_recipient只能有一个有值
    * wrappedPrivateKey  由自定义私钥加密的密文私钥。private_key_plain_text、wrapped_private_key和ciphertext_recipient只能有一个有值
    * ciphertextRecipient  由擎天公钥信息加密的密文私钥。private_key_plain_text、wrapped_private_key和ciphertext_recipient只能有一个有值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'keyId' => null,
        'keySpec' => null,
        'publicKey' => null,
        'privateKeyCipherText' => null,
        'privateKeyPlainText' => null,
        'wrappedPrivateKey' => null,
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
    * keyId  密钥ID。
    * keySpec  需要包含算法、长度、曲线信息。可选值有RSA_2048 | RSA_3072 | RSA_4096 | ECC_NIST_P256 | ECC_NIST_P384 | ECC_NIST_P521 | ECC_SECG_P256K1 | SM2
    * publicKey  明文公钥信息
    * privateKeyCipherText  密文私钥
    * privateKeyPlainText  明文私钥。private_key_plain_text、wrapped_private_key和ciphertext_recipient只能有一个有值
    * wrappedPrivateKey  由自定义私钥加密的密文私钥。private_key_plain_text、wrapped_private_key和ciphertext_recipient只能有一个有值
    * ciphertextRecipient  由擎天公钥信息加密的密文私钥。private_key_plain_text、wrapped_private_key和ciphertext_recipient只能有一个有值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'keyId' => 'key_id',
            'keySpec' => 'key_spec',
            'publicKey' => 'public_key',
            'privateKeyCipherText' => 'private_key_cipher_text',
            'privateKeyPlainText' => 'private_key_plain_text',
            'wrappedPrivateKey' => 'wrapped_private_key',
            'ciphertextRecipient' => 'ciphertext_recipient'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * keyId  密钥ID。
    * keySpec  需要包含算法、长度、曲线信息。可选值有RSA_2048 | RSA_3072 | RSA_4096 | ECC_NIST_P256 | ECC_NIST_P384 | ECC_NIST_P521 | ECC_SECG_P256K1 | SM2
    * publicKey  明文公钥信息
    * privateKeyCipherText  密文私钥
    * privateKeyPlainText  明文私钥。private_key_plain_text、wrapped_private_key和ciphertext_recipient只能有一个有值
    * wrappedPrivateKey  由自定义私钥加密的密文私钥。private_key_plain_text、wrapped_private_key和ciphertext_recipient只能有一个有值
    * ciphertextRecipient  由擎天公钥信息加密的密文私钥。private_key_plain_text、wrapped_private_key和ciphertext_recipient只能有一个有值
    *
    * @var string[]
    */
    protected static $setters = [
            'keyId' => 'setKeyId',
            'keySpec' => 'setKeySpec',
            'publicKey' => 'setPublicKey',
            'privateKeyCipherText' => 'setPrivateKeyCipherText',
            'privateKeyPlainText' => 'setPrivateKeyPlainText',
            'wrappedPrivateKey' => 'setWrappedPrivateKey',
            'ciphertextRecipient' => 'setCiphertextRecipient'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * keyId  密钥ID。
    * keySpec  需要包含算法、长度、曲线信息。可选值有RSA_2048 | RSA_3072 | RSA_4096 | ECC_NIST_P256 | ECC_NIST_P384 | ECC_NIST_P521 | ECC_SECG_P256K1 | SM2
    * publicKey  明文公钥信息
    * privateKeyCipherText  密文私钥
    * privateKeyPlainText  明文私钥。private_key_plain_text、wrapped_private_key和ciphertext_recipient只能有一个有值
    * wrappedPrivateKey  由自定义私钥加密的密文私钥。private_key_plain_text、wrapped_private_key和ciphertext_recipient只能有一个有值
    * ciphertextRecipient  由擎天公钥信息加密的密文私钥。private_key_plain_text、wrapped_private_key和ciphertext_recipient只能有一个有值
    *
    * @var string[]
    */
    protected static $getters = [
            'keyId' => 'getKeyId',
            'keySpec' => 'getKeySpec',
            'publicKey' => 'getPublicKey',
            'privateKeyCipherText' => 'getPrivateKeyCipherText',
            'privateKeyPlainText' => 'getPrivateKeyPlainText',
            'wrappedPrivateKey' => 'getWrappedPrivateKey',
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
    const KEY_SPEC_RSA_2048 = 'RSA_2048';
    const KEY_SPEC_RSA_3072 = 'RSA_3072';
    const KEY_SPEC_RSA_4096 = 'RSA_4096';
    const KEY_SPEC_ECC_NIST_P256 = 'ECC_NIST_P256';
    const KEY_SPEC_ECC_NIST_P384 = 'ECC_NIST_P384';
    const KEY_SPEC_ECC_NIST_P521 = 'ECC_NIST_P521';
    const KEY_SPEC_ECC_SECG_P256_K1 = 'ECC_SECG_P256K1';
    const KEY_SPEC_SM2 = 'SM2';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getKeySpecAllowableValues()
    {
        return [
            self::KEY_SPEC_RSA_2048,
            self::KEY_SPEC_RSA_3072,
            self::KEY_SPEC_RSA_4096,
            self::KEY_SPEC_ECC_NIST_P256,
            self::KEY_SPEC_ECC_NIST_P384,
            self::KEY_SPEC_ECC_NIST_P521,
            self::KEY_SPEC_ECC_SECG_P256_K1,
            self::KEY_SPEC_SM2,
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
        $this->container['keyId'] = isset($data['keyId']) ? $data['keyId'] : null;
        $this->container['keySpec'] = isset($data['keySpec']) ? $data['keySpec'] : null;
        $this->container['publicKey'] = isset($data['publicKey']) ? $data['publicKey'] : null;
        $this->container['privateKeyCipherText'] = isset($data['privateKeyCipherText']) ? $data['privateKeyCipherText'] : null;
        $this->container['privateKeyPlainText'] = isset($data['privateKeyPlainText']) ? $data['privateKeyPlainText'] : null;
        $this->container['wrappedPrivateKey'] = isset($data['wrappedPrivateKey']) ? $data['wrappedPrivateKey'] : null;
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
            $allowedValues = $this->getKeySpecAllowableValues();
                if (!is_null($this->container['keySpec']) && !in_array($this->container['keySpec'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'keySpec', must be one of '%s'",
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
    * Gets keyId
    *  密钥ID。
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
    * @param string|null $keyId 密钥ID。
    *
    * @return $this
    */
    public function setKeyId($keyId)
    {
        $this->container['keyId'] = $keyId;
        return $this;
    }

    /**
    * Gets keySpec
    *  需要包含算法、长度、曲线信息。可选值有RSA_2048 | RSA_3072 | RSA_4096 | ECC_NIST_P256 | ECC_NIST_P384 | ECC_NIST_P521 | ECC_SECG_P256K1 | SM2
    *
    * @return string|null
    */
    public function getKeySpec()
    {
        return $this->container['keySpec'];
    }

    /**
    * Sets keySpec
    *
    * @param string|null $keySpec 需要包含算法、长度、曲线信息。可选值有RSA_2048 | RSA_3072 | RSA_4096 | ECC_NIST_P256 | ECC_NIST_P384 | ECC_NIST_P521 | ECC_SECG_P256K1 | SM2
    *
    * @return $this
    */
    public function setKeySpec($keySpec)
    {
        $this->container['keySpec'] = $keySpec;
        return $this;
    }

    /**
    * Gets publicKey
    *  明文公钥信息
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
    * @param string|null $publicKey 明文公钥信息
    *
    * @return $this
    */
    public function setPublicKey($publicKey)
    {
        $this->container['publicKey'] = $publicKey;
        return $this;
    }

    /**
    * Gets privateKeyCipherText
    *  密文私钥
    *
    * @return string|null
    */
    public function getPrivateKeyCipherText()
    {
        return $this->container['privateKeyCipherText'];
    }

    /**
    * Sets privateKeyCipherText
    *
    * @param string|null $privateKeyCipherText 密文私钥
    *
    * @return $this
    */
    public function setPrivateKeyCipherText($privateKeyCipherText)
    {
        $this->container['privateKeyCipherText'] = $privateKeyCipherText;
        return $this;
    }

    /**
    * Gets privateKeyPlainText
    *  明文私钥。private_key_plain_text、wrapped_private_key和ciphertext_recipient只能有一个有值
    *
    * @return string|null
    */
    public function getPrivateKeyPlainText()
    {
        return $this->container['privateKeyPlainText'];
    }

    /**
    * Sets privateKeyPlainText
    *
    * @param string|null $privateKeyPlainText 明文私钥。private_key_plain_text、wrapped_private_key和ciphertext_recipient只能有一个有值
    *
    * @return $this
    */
    public function setPrivateKeyPlainText($privateKeyPlainText)
    {
        $this->container['privateKeyPlainText'] = $privateKeyPlainText;
        return $this;
    }

    /**
    * Gets wrappedPrivateKey
    *  由自定义私钥加密的密文私钥。private_key_plain_text、wrapped_private_key和ciphertext_recipient只能有一个有值
    *
    * @return string|null
    */
    public function getWrappedPrivateKey()
    {
        return $this->container['wrappedPrivateKey'];
    }

    /**
    * Sets wrappedPrivateKey
    *
    * @param string|null $wrappedPrivateKey 由自定义私钥加密的密文私钥。private_key_plain_text、wrapped_private_key和ciphertext_recipient只能有一个有值
    *
    * @return $this
    */
    public function setWrappedPrivateKey($wrappedPrivateKey)
    {
        $this->container['wrappedPrivateKey'] = $wrappedPrivateKey;
        return $this;
    }

    /**
    * Gets ciphertextRecipient
    *  由擎天公钥信息加密的密文私钥。private_key_plain_text、wrapped_private_key和ciphertext_recipient只能有一个有值
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
    * @param string|null $ciphertextRecipient 由擎天公钥信息加密的密文私钥。private_key_plain_text、wrapped_private_key和ciphertext_recipient只能有一个有值
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

