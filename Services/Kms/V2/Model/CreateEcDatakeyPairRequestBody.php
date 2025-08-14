<?php

namespace HuaweiCloud\SDK\Kms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateEcDatakeyPairRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateEcDatakeyPairRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * keyId  密钥ID，36字节，满足正则匹配“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”。 例如：0d0466b0-e727-4d9c-b35d-f84bb474a37f。
    * keySpec  需要包含算法、长度、曲线信息。可选值有ECC_NIST_P256 | ECC_NIST_P384 | ECC_NIST_P521 | ECC_SECG_P256K1 | SM2
    * withPlainText  是否返回明文私钥，默认为true
    * additionalAuthenticatedData  认证加密的额外信息，请不要填写敏感信息
    * sequence  请求消息序列号，36字节序列号。 例如：919c82d4-8046-4722-9094-35c3c6524cff
    * pin  指定PIN码保护。仅四级密评场景支持该参数。
    * pinType  pin码的类型，默认为“CipherText”，可选“PlainText”。仅四级密评场景支持该参数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'keyId' => 'string',
            'keySpec' => 'string',
            'withPlainText' => 'bool',
            'additionalAuthenticatedData' => 'string',
            'sequence' => 'string',
            'pin' => 'string',
            'pinType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * keyId  密钥ID，36字节，满足正则匹配“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”。 例如：0d0466b0-e727-4d9c-b35d-f84bb474a37f。
    * keySpec  需要包含算法、长度、曲线信息。可选值有ECC_NIST_P256 | ECC_NIST_P384 | ECC_NIST_P521 | ECC_SECG_P256K1 | SM2
    * withPlainText  是否返回明文私钥，默认为true
    * additionalAuthenticatedData  认证加密的额外信息，请不要填写敏感信息
    * sequence  请求消息序列号，36字节序列号。 例如：919c82d4-8046-4722-9094-35c3c6524cff
    * pin  指定PIN码保护。仅四级密评场景支持该参数。
    * pinType  pin码的类型，默认为“CipherText”，可选“PlainText”。仅四级密评场景支持该参数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'keyId' => null,
        'keySpec' => null,
        'withPlainText' => null,
        'additionalAuthenticatedData' => null,
        'sequence' => null,
        'pin' => null,
        'pinType' => null
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
    * keyId  密钥ID，36字节，满足正则匹配“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”。 例如：0d0466b0-e727-4d9c-b35d-f84bb474a37f。
    * keySpec  需要包含算法、长度、曲线信息。可选值有ECC_NIST_P256 | ECC_NIST_P384 | ECC_NIST_P521 | ECC_SECG_P256K1 | SM2
    * withPlainText  是否返回明文私钥，默认为true
    * additionalAuthenticatedData  认证加密的额外信息，请不要填写敏感信息
    * sequence  请求消息序列号，36字节序列号。 例如：919c82d4-8046-4722-9094-35c3c6524cff
    * pin  指定PIN码保护。仅四级密评场景支持该参数。
    * pinType  pin码的类型，默认为“CipherText”，可选“PlainText”。仅四级密评场景支持该参数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'keyId' => 'key_id',
            'keySpec' => 'key_spec',
            'withPlainText' => 'with_plain_text',
            'additionalAuthenticatedData' => 'additional_authenticated_data',
            'sequence' => 'sequence',
            'pin' => 'pin',
            'pinType' => 'pin_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * keyId  密钥ID，36字节，满足正则匹配“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”。 例如：0d0466b0-e727-4d9c-b35d-f84bb474a37f。
    * keySpec  需要包含算法、长度、曲线信息。可选值有ECC_NIST_P256 | ECC_NIST_P384 | ECC_NIST_P521 | ECC_SECG_P256K1 | SM2
    * withPlainText  是否返回明文私钥，默认为true
    * additionalAuthenticatedData  认证加密的额外信息，请不要填写敏感信息
    * sequence  请求消息序列号，36字节序列号。 例如：919c82d4-8046-4722-9094-35c3c6524cff
    * pin  指定PIN码保护。仅四级密评场景支持该参数。
    * pinType  pin码的类型，默认为“CipherText”，可选“PlainText”。仅四级密评场景支持该参数。
    *
    * @var string[]
    */
    protected static $setters = [
            'keyId' => 'setKeyId',
            'keySpec' => 'setKeySpec',
            'withPlainText' => 'setWithPlainText',
            'additionalAuthenticatedData' => 'setAdditionalAuthenticatedData',
            'sequence' => 'setSequence',
            'pin' => 'setPin',
            'pinType' => 'setPinType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * keyId  密钥ID，36字节，满足正则匹配“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”。 例如：0d0466b0-e727-4d9c-b35d-f84bb474a37f。
    * keySpec  需要包含算法、长度、曲线信息。可选值有ECC_NIST_P256 | ECC_NIST_P384 | ECC_NIST_P521 | ECC_SECG_P256K1 | SM2
    * withPlainText  是否返回明文私钥，默认为true
    * additionalAuthenticatedData  认证加密的额外信息，请不要填写敏感信息
    * sequence  请求消息序列号，36字节序列号。 例如：919c82d4-8046-4722-9094-35c3c6524cff
    * pin  指定PIN码保护。仅四级密评场景支持该参数。
    * pinType  pin码的类型，默认为“CipherText”，可选“PlainText”。仅四级密评场景支持该参数。
    *
    * @var string[]
    */
    protected static $getters = [
            'keyId' => 'getKeyId',
            'keySpec' => 'getKeySpec',
            'withPlainText' => 'getWithPlainText',
            'additionalAuthenticatedData' => 'getAdditionalAuthenticatedData',
            'sequence' => 'getSequence',
            'pin' => 'getPin',
            'pinType' => 'getPinType'
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
        $this->container['withPlainText'] = isset($data['withPlainText']) ? $data['withPlainText'] : null;
        $this->container['additionalAuthenticatedData'] = isset($data['additionalAuthenticatedData']) ? $data['additionalAuthenticatedData'] : null;
        $this->container['sequence'] = isset($data['sequence']) ? $data['sequence'] : null;
        $this->container['pin'] = isset($data['pin']) ? $data['pin'] : null;
        $this->container['pinType'] = isset($data['pinType']) ? $data['pinType'] : null;
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
        if ($this->container['keySpec'] === null) {
            $invalidProperties[] = "'keySpec' can't be null";
        }
            $allowedValues = $this->getKeySpecAllowableValues();
                if (!is_null($this->container['keySpec']) && !in_array($this->container['keySpec'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'keySpec', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['additionalAuthenticatedData']) && (mb_strlen($this->container['additionalAuthenticatedData']) > 127)) {
                $invalidProperties[] = "invalid value for 'additionalAuthenticatedData', the character length must be smaller than or equal to 127.";
            }
            if (!is_null($this->container['additionalAuthenticatedData']) && (mb_strlen($this->container['additionalAuthenticatedData']) < 0)) {
                $invalidProperties[] = "invalid value for 'additionalAuthenticatedData', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sequence']) && (mb_strlen($this->container['sequence']) > 36)) {
                $invalidProperties[] = "invalid value for 'sequence', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['sequence']) && (mb_strlen($this->container['sequence']) < 0)) {
                $invalidProperties[] = "invalid value for 'sequence', the character length must be bigger than or equal to 0.";
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
    *  密钥ID，36字节，满足正则匹配“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”。 例如：0d0466b0-e727-4d9c-b35d-f84bb474a37f。
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
    * @param string $keyId 密钥ID，36字节，满足正则匹配“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”。 例如：0d0466b0-e727-4d9c-b35d-f84bb474a37f。
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
    *  需要包含算法、长度、曲线信息。可选值有ECC_NIST_P256 | ECC_NIST_P384 | ECC_NIST_P521 | ECC_SECG_P256K1 | SM2
    *
    * @return string
    */
    public function getKeySpec()
    {
        return $this->container['keySpec'];
    }

    /**
    * Sets keySpec
    *
    * @param string $keySpec 需要包含算法、长度、曲线信息。可选值有ECC_NIST_P256 | ECC_NIST_P384 | ECC_NIST_P521 | ECC_SECG_P256K1 | SM2
    *
    * @return $this
    */
    public function setKeySpec($keySpec)
    {
        $this->container['keySpec'] = $keySpec;
        return $this;
    }

    /**
    * Gets withPlainText
    *  是否返回明文私钥，默认为true
    *
    * @return bool|null
    */
    public function getWithPlainText()
    {
        return $this->container['withPlainText'];
    }

    /**
    * Sets withPlainText
    *
    * @param bool|null $withPlainText 是否返回明文私钥，默认为true
    *
    * @return $this
    */
    public function setWithPlainText($withPlainText)
    {
        $this->container['withPlainText'] = $withPlainText;
        return $this;
    }

    /**
    * Gets additionalAuthenticatedData
    *  认证加密的额外信息，请不要填写敏感信息
    *
    * @return string|null
    */
    public function getAdditionalAuthenticatedData()
    {
        return $this->container['additionalAuthenticatedData'];
    }

    /**
    * Sets additionalAuthenticatedData
    *
    * @param string|null $additionalAuthenticatedData 认证加密的额外信息，请不要填写敏感信息
    *
    * @return $this
    */
    public function setAdditionalAuthenticatedData($additionalAuthenticatedData)
    {
        $this->container['additionalAuthenticatedData'] = $additionalAuthenticatedData;
        return $this;
    }

    /**
    * Gets sequence
    *  请求消息序列号，36字节序列号。 例如：919c82d4-8046-4722-9094-35c3c6524cff
    *
    * @return string|null
    */
    public function getSequence()
    {
        return $this->container['sequence'];
    }

    /**
    * Sets sequence
    *
    * @param string|null $sequence 请求消息序列号，36字节序列号。 例如：919c82d4-8046-4722-9094-35c3c6524cff
    *
    * @return $this
    */
    public function setSequence($sequence)
    {
        $this->container['sequence'] = $sequence;
        return $this;
    }

    /**
    * Gets pin
    *  指定PIN码保护。仅四级密评场景支持该参数。
    *
    * @return string|null
    */
    public function getPin()
    {
        return $this->container['pin'];
    }

    /**
    * Sets pin
    *
    * @param string|null $pin 指定PIN码保护。仅四级密评场景支持该参数。
    *
    * @return $this
    */
    public function setPin($pin)
    {
        $this->container['pin'] = $pin;
        return $this;
    }

    /**
    * Gets pinType
    *  pin码的类型，默认为“CipherText”，可选“PlainText”。仅四级密评场景支持该参数。
    *
    * @return string|null
    */
    public function getPinType()
    {
        return $this->container['pinType'];
    }

    /**
    * Sets pinType
    *
    * @param string|null $pinType pin码的类型，默认为“CipherText”，可选“PlainText”。仅四级密评场景支持该参数。
    *
    * @return $this
    */
    public function setPinType($pinType)
    {
        $this->container['pinType'] = $pinType;
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

