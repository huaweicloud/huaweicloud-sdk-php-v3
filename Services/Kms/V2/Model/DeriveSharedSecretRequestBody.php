<?php

namespace HuaweiCloud\SDK\Kms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeriveSharedSecretRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeriveSharedSecretRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * keyId  密钥ID
    * keyAgreementAlgorithm  密钥协商算法，仅支持ECDH
    * publicKey  对端密钥对的的公钥，您需要保证是EC_P256，EC_384，SECP256K1或SM2(仅中国区域支持)密钥对的公钥。公钥的格式必须是DER-encoded X.509类型的Base64的字符串
    * recipient  recipient
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'keyId' => 'string',
            'keyAgreementAlgorithm' => 'string',
            'publicKey' => 'string',
            'recipient' => '\HuaweiCloud\SDK\Kms\V2\Model\Recipient'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * keyId  密钥ID
    * keyAgreementAlgorithm  密钥协商算法，仅支持ECDH
    * publicKey  对端密钥对的的公钥，您需要保证是EC_P256，EC_384，SECP256K1或SM2(仅中国区域支持)密钥对的公钥。公钥的格式必须是DER-encoded X.509类型的Base64的字符串
    * recipient  recipient
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'keyId' => null,
        'keyAgreementAlgorithm' => null,
        'publicKey' => null,
        'recipient' => null
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
    * keyAgreementAlgorithm  密钥协商算法，仅支持ECDH
    * publicKey  对端密钥对的的公钥，您需要保证是EC_P256，EC_384，SECP256K1或SM2(仅中国区域支持)密钥对的公钥。公钥的格式必须是DER-encoded X.509类型的Base64的字符串
    * recipient  recipient
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'keyId' => 'key_id',
            'keyAgreementAlgorithm' => 'key_agreement_algorithm',
            'publicKey' => 'public_key',
            'recipient' => 'recipient'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * keyId  密钥ID
    * keyAgreementAlgorithm  密钥协商算法，仅支持ECDH
    * publicKey  对端密钥对的的公钥，您需要保证是EC_P256，EC_384，SECP256K1或SM2(仅中国区域支持)密钥对的公钥。公钥的格式必须是DER-encoded X.509类型的Base64的字符串
    * recipient  recipient
    *
    * @var string[]
    */
    protected static $setters = [
            'keyId' => 'setKeyId',
            'keyAgreementAlgorithm' => 'setKeyAgreementAlgorithm',
            'publicKey' => 'setPublicKey',
            'recipient' => 'setRecipient'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * keyId  密钥ID
    * keyAgreementAlgorithm  密钥协商算法，仅支持ECDH
    * publicKey  对端密钥对的的公钥，您需要保证是EC_P256，EC_384，SECP256K1或SM2(仅中国区域支持)密钥对的公钥。公钥的格式必须是DER-encoded X.509类型的Base64的字符串
    * recipient  recipient
    *
    * @var string[]
    */
    protected static $getters = [
            'keyId' => 'getKeyId',
            'keyAgreementAlgorithm' => 'getKeyAgreementAlgorithm',
            'publicKey' => 'getPublicKey',
            'recipient' => 'getRecipient'
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
    const KEY_AGREEMENT_ALGORITHM_ECDH = 'ECDH';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getKeyAgreementAlgorithmAllowableValues()
    {
        return [
            self::KEY_AGREEMENT_ALGORITHM_ECDH,
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
        $this->container['keyAgreementAlgorithm'] = isset($data['keyAgreementAlgorithm']) ? $data['keyAgreementAlgorithm'] : null;
        $this->container['publicKey'] = isset($data['publicKey']) ? $data['publicKey'] : null;
        $this->container['recipient'] = isset($data['recipient']) ? $data['recipient'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['keyId'] === null) {
            $invalidProperties[] = "'keyId' can't be null";
        }
            if ((mb_strlen($this->container['keyId']) > 36)) {
                $invalidProperties[] = "invalid value for 'keyId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['keyId']) < 36)) {
                $invalidProperties[] = "invalid value for 'keyId', the character length must be bigger than or equal to 36.";
            }
        if ($this->container['keyAgreementAlgorithm'] === null) {
            $invalidProperties[] = "'keyAgreementAlgorithm' can't be null";
        }
            $allowedValues = $this->getKeyAgreementAlgorithmAllowableValues();
                if (!is_null($this->container['keyAgreementAlgorithm']) && !in_array($this->container['keyAgreementAlgorithm'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'keyAgreementAlgorithm', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['publicKey'] === null) {
            $invalidProperties[] = "'publicKey' can't be null";
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
    * @return string
    */
    public function getKeyId()
    {
        return $this->container['keyId'];
    }

    /**
    * Sets keyId
    *
    * @param string $keyId 密钥ID
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
    *  密钥协商算法，仅支持ECDH
    *
    * @return string
    */
    public function getKeyAgreementAlgorithm()
    {
        return $this->container['keyAgreementAlgorithm'];
    }

    /**
    * Sets keyAgreementAlgorithm
    *
    * @param string $keyAgreementAlgorithm 密钥协商算法，仅支持ECDH
    *
    * @return $this
    */
    public function setKeyAgreementAlgorithm($keyAgreementAlgorithm)
    {
        $this->container['keyAgreementAlgorithm'] = $keyAgreementAlgorithm;
        return $this;
    }

    /**
    * Gets publicKey
    *  对端密钥对的的公钥，您需要保证是EC_P256，EC_384，SECP256K1或SM2(仅中国区域支持)密钥对的公钥。公钥的格式必须是DER-encoded X.509类型的Base64的字符串
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
    * @param string $publicKey 对端密钥对的的公钥，您需要保证是EC_P256，EC_384，SECP256K1或SM2(仅中国区域支持)密钥对的公钥。公钥的格式必须是DER-encoded X.509类型的Base64的字符串
    *
    * @return $this
    */
    public function setPublicKey($publicKey)
    {
        $this->container['publicKey'] = $publicKey;
        return $this;
    }

    /**
    * Gets recipient
    *  recipient
    *
    * @return \HuaweiCloud\SDK\Kms\V2\Model\Recipient|null
    */
    public function getRecipient()
    {
        return $this->container['recipient'];
    }

    /**
    * Sets recipient
    *
    * @param \HuaweiCloud\SDK\Kms\V2\Model\Recipient|null $recipient recipient
    *
    * @return $this
    */
    public function setRecipient($recipient)
    {
        $this->container['recipient'] = $recipient;
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

