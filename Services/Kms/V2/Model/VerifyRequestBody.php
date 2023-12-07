<?php

namespace HuaweiCloud\SDK\Kms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VerifyRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VerifyRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * keyId  密钥ID，36字节，满足正则匹配“^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$”。 例如：0d0466b0-e727-4d9c-b35d-f84bb474a37f。
    * message  待签名的消息摘要或者消息，消息长度要求小于4096字节，使用Base64编码。
    * signature  待验证的签名值，使用Base64编码。
    * signingAlgorithm  签名算法，枚举如下：  - RSASSA_PSS_SHA_256  - RSASSA_PSS_SHA_384  - RSASSA_PSS_SHA_512  - RSASSA_PKCS1_V1_5_SHA_256  - RSASSA_PKCS1_V1_5_SHA_384  - RSASSA_PKCS1_V1_5_SHA_512  - ECDSA_SHA_256  - ECDSA_SHA_384  - ECDSA_SHA_512  - SM2DSA_SM3
    * messageType  消息类型，默认为“DIGEST”，枚举如下：  - DIGEST 表示消息摘要  - RAW 表示消息原文
    * sequence  请求消息序列号，36字节序列号。 例如：919c82d4-8046-4722-9094-35c3c6524cff。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'keyId' => 'string',
            'message' => 'string',
            'signature' => 'string',
            'signingAlgorithm' => 'string',
            'messageType' => 'string',
            'sequence' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * keyId  密钥ID，36字节，满足正则匹配“^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$”。 例如：0d0466b0-e727-4d9c-b35d-f84bb474a37f。
    * message  待签名的消息摘要或者消息，消息长度要求小于4096字节，使用Base64编码。
    * signature  待验证的签名值，使用Base64编码。
    * signingAlgorithm  签名算法，枚举如下：  - RSASSA_PSS_SHA_256  - RSASSA_PSS_SHA_384  - RSASSA_PSS_SHA_512  - RSASSA_PKCS1_V1_5_SHA_256  - RSASSA_PKCS1_V1_5_SHA_384  - RSASSA_PKCS1_V1_5_SHA_512  - ECDSA_SHA_256  - ECDSA_SHA_384  - ECDSA_SHA_512  - SM2DSA_SM3
    * messageType  消息类型，默认为“DIGEST”，枚举如下：  - DIGEST 表示消息摘要  - RAW 表示消息原文
    * sequence  请求消息序列号，36字节序列号。 例如：919c82d4-8046-4722-9094-35c3c6524cff。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'keyId' => null,
        'message' => null,
        'signature' => null,
        'signingAlgorithm' => null,
        'messageType' => null,
        'sequence' => null
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
    * keyId  密钥ID，36字节，满足正则匹配“^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$”。 例如：0d0466b0-e727-4d9c-b35d-f84bb474a37f。
    * message  待签名的消息摘要或者消息，消息长度要求小于4096字节，使用Base64编码。
    * signature  待验证的签名值，使用Base64编码。
    * signingAlgorithm  签名算法，枚举如下：  - RSASSA_PSS_SHA_256  - RSASSA_PSS_SHA_384  - RSASSA_PSS_SHA_512  - RSASSA_PKCS1_V1_5_SHA_256  - RSASSA_PKCS1_V1_5_SHA_384  - RSASSA_PKCS1_V1_5_SHA_512  - ECDSA_SHA_256  - ECDSA_SHA_384  - ECDSA_SHA_512  - SM2DSA_SM3
    * messageType  消息类型，默认为“DIGEST”，枚举如下：  - DIGEST 表示消息摘要  - RAW 表示消息原文
    * sequence  请求消息序列号，36字节序列号。 例如：919c82d4-8046-4722-9094-35c3c6524cff。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'keyId' => 'key_id',
            'message' => 'message',
            'signature' => 'signature',
            'signingAlgorithm' => 'signing_algorithm',
            'messageType' => 'message_type',
            'sequence' => 'sequence'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * keyId  密钥ID，36字节，满足正则匹配“^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$”。 例如：0d0466b0-e727-4d9c-b35d-f84bb474a37f。
    * message  待签名的消息摘要或者消息，消息长度要求小于4096字节，使用Base64编码。
    * signature  待验证的签名值，使用Base64编码。
    * signingAlgorithm  签名算法，枚举如下：  - RSASSA_PSS_SHA_256  - RSASSA_PSS_SHA_384  - RSASSA_PSS_SHA_512  - RSASSA_PKCS1_V1_5_SHA_256  - RSASSA_PKCS1_V1_5_SHA_384  - RSASSA_PKCS1_V1_5_SHA_512  - ECDSA_SHA_256  - ECDSA_SHA_384  - ECDSA_SHA_512  - SM2DSA_SM3
    * messageType  消息类型，默认为“DIGEST”，枚举如下：  - DIGEST 表示消息摘要  - RAW 表示消息原文
    * sequence  请求消息序列号，36字节序列号。 例如：919c82d4-8046-4722-9094-35c3c6524cff。
    *
    * @var string[]
    */
    protected static $setters = [
            'keyId' => 'setKeyId',
            'message' => 'setMessage',
            'signature' => 'setSignature',
            'signingAlgorithm' => 'setSigningAlgorithm',
            'messageType' => 'setMessageType',
            'sequence' => 'setSequence'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * keyId  密钥ID，36字节，满足正则匹配“^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$”。 例如：0d0466b0-e727-4d9c-b35d-f84bb474a37f。
    * message  待签名的消息摘要或者消息，消息长度要求小于4096字节，使用Base64编码。
    * signature  待验证的签名值，使用Base64编码。
    * signingAlgorithm  签名算法，枚举如下：  - RSASSA_PSS_SHA_256  - RSASSA_PSS_SHA_384  - RSASSA_PSS_SHA_512  - RSASSA_PKCS1_V1_5_SHA_256  - RSASSA_PKCS1_V1_5_SHA_384  - RSASSA_PKCS1_V1_5_SHA_512  - ECDSA_SHA_256  - ECDSA_SHA_384  - ECDSA_SHA_512  - SM2DSA_SM3
    * messageType  消息类型，默认为“DIGEST”，枚举如下：  - DIGEST 表示消息摘要  - RAW 表示消息原文
    * sequence  请求消息序列号，36字节序列号。 例如：919c82d4-8046-4722-9094-35c3c6524cff。
    *
    * @var string[]
    */
    protected static $getters = [
            'keyId' => 'getKeyId',
            'message' => 'getMessage',
            'signature' => 'getSignature',
            'signingAlgorithm' => 'getSigningAlgorithm',
            'messageType' => 'getMessageType',
            'sequence' => 'getSequence'
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
    const SIGNING_ALGORITHM_RSASSA_PSS_SHA_256 = 'RSASSA_PSS_SHA_256';
    const SIGNING_ALGORITHM_RSASSA_PSS_SHA_384 = 'RSASSA_PSS_SHA_384';
    const SIGNING_ALGORITHM_RSASSA_PSS_SHA_512 = 'RSASSA_PSS_SHA_512';
    const SIGNING_ALGORITHM_RSASSA_PKCS1_V1_5_SHA_256 = 'RSASSA_PKCS1_V1_5_SHA_256';
    const SIGNING_ALGORITHM_RSASSA_PKCS1_V1_5_SHA_384 = 'RSASSA_PKCS1_V1_5_SHA_384';
    const SIGNING_ALGORITHM_RSASSA_PKCS1_V1_5_SHA_512 = 'RSASSA_PKCS1_V1_5_SHA_512';
    const SIGNING_ALGORITHM_ECDSA_SHA_256 = 'ECDSA_SHA_256';
    const SIGNING_ALGORITHM_ECDSA_SHA_384 = 'ECDSA_SHA_384';
    const SIGNING_ALGORITHM_ECDSA_SHA_512 = 'ECDSA_SHA_512';
    const SIGNING_ALGORITHM_SM2_DSA_SM3 = 'SM2DSA_SM3';
    const MESSAGE_TYPE_DIGEST = 'DIGEST';
    const MESSAGE_TYPE_RAW = 'RAW';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSigningAlgorithmAllowableValues()
    {
        return [
            self::SIGNING_ALGORITHM_RSASSA_PSS_SHA_256,
            self::SIGNING_ALGORITHM_RSASSA_PSS_SHA_384,
            self::SIGNING_ALGORITHM_RSASSA_PSS_SHA_512,
            self::SIGNING_ALGORITHM_RSASSA_PKCS1_V1_5_SHA_256,
            self::SIGNING_ALGORITHM_RSASSA_PKCS1_V1_5_SHA_384,
            self::SIGNING_ALGORITHM_RSASSA_PKCS1_V1_5_SHA_512,
            self::SIGNING_ALGORITHM_ECDSA_SHA_256,
            self::SIGNING_ALGORITHM_ECDSA_SHA_384,
            self::SIGNING_ALGORITHM_ECDSA_SHA_512,
            self::SIGNING_ALGORITHM_SM2_DSA_SM3,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMessageTypeAllowableValues()
    {
        return [
            self::MESSAGE_TYPE_DIGEST,
            self::MESSAGE_TYPE_RAW,
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
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['signature'] = isset($data['signature']) ? $data['signature'] : null;
        $this->container['signingAlgorithm'] = isset($data['signingAlgorithm']) ? $data['signingAlgorithm'] : null;
        $this->container['messageType'] = isset($data['messageType']) ? $data['messageType'] : null;
        $this->container['sequence'] = isset($data['sequence']) ? $data['sequence'] : null;
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
            if (!preg_match("/^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/", $this->container['keyId'])) {
                $invalidProperties[] = "invalid value for 'keyId', must be conform to the pattern /^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/.";
            }
        if ($this->container['message'] === null) {
            $invalidProperties[] = "'message' can't be null";
        }
            if ((mb_strlen($this->container['message']) > 4096)) {
                $invalidProperties[] = "invalid value for 'message', the character length must be smaller than or equal to 4096.";
            }
            if ((mb_strlen($this->container['message']) < 0)) {
                $invalidProperties[] = "invalid value for 'message', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['signature'] === null) {
            $invalidProperties[] = "'signature' can't be null";
        }
            if ((mb_strlen($this->container['signature']) > 684)) {
                $invalidProperties[] = "invalid value for 'signature', the character length must be smaller than or equal to 684.";
            }
            if ((mb_strlen($this->container['signature']) < 96)) {
                $invalidProperties[] = "invalid value for 'signature', the character length must be bigger than or equal to 96.";
            }
        if ($this->container['signingAlgorithm'] === null) {
            $invalidProperties[] = "'signingAlgorithm' can't be null";
        }
            $allowedValues = $this->getSigningAlgorithmAllowableValues();
                if (!is_null($this->container['signingAlgorithm']) && !in_array($this->container['signingAlgorithm'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'signingAlgorithm', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getMessageTypeAllowableValues();
                if (!is_null($this->container['messageType']) && !in_array($this->container['messageType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'messageType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['messageType']) && (mb_strlen($this->container['messageType']) > 4096)) {
                $invalidProperties[] = "invalid value for 'messageType', the character length must be smaller than or equal to 4096.";
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
    *  密钥ID，36字节，满足正则匹配“^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$”。 例如：0d0466b0-e727-4d9c-b35d-f84bb474a37f。
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
    * @param string $keyId 密钥ID，36字节，满足正则匹配“^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$”。 例如：0d0466b0-e727-4d9c-b35d-f84bb474a37f。
    *
    * @return $this
    */
    public function setKeyId($keyId)
    {
        $this->container['keyId'] = $keyId;
        return $this;
    }

    /**
    * Gets message
    *  待签名的消息摘要或者消息，消息长度要求小于4096字节，使用Base64编码。
    *
    * @return string
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string $message 待签名的消息摘要或者消息，消息长度要求小于4096字节，使用Base64编码。
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets signature
    *  待验证的签名值，使用Base64编码。
    *
    * @return string
    */
    public function getSignature()
    {
        return $this->container['signature'];
    }

    /**
    * Sets signature
    *
    * @param string $signature 待验证的签名值，使用Base64编码。
    *
    * @return $this
    */
    public function setSignature($signature)
    {
        $this->container['signature'] = $signature;
        return $this;
    }

    /**
    * Gets signingAlgorithm
    *  签名算法，枚举如下：  - RSASSA_PSS_SHA_256  - RSASSA_PSS_SHA_384  - RSASSA_PSS_SHA_512  - RSASSA_PKCS1_V1_5_SHA_256  - RSASSA_PKCS1_V1_5_SHA_384  - RSASSA_PKCS1_V1_5_SHA_512  - ECDSA_SHA_256  - ECDSA_SHA_384  - ECDSA_SHA_512  - SM2DSA_SM3
    *
    * @return string
    */
    public function getSigningAlgorithm()
    {
        return $this->container['signingAlgorithm'];
    }

    /**
    * Sets signingAlgorithm
    *
    * @param string $signingAlgorithm 签名算法，枚举如下：  - RSASSA_PSS_SHA_256  - RSASSA_PSS_SHA_384  - RSASSA_PSS_SHA_512  - RSASSA_PKCS1_V1_5_SHA_256  - RSASSA_PKCS1_V1_5_SHA_384  - RSASSA_PKCS1_V1_5_SHA_512  - ECDSA_SHA_256  - ECDSA_SHA_384  - ECDSA_SHA_512  - SM2DSA_SM3
    *
    * @return $this
    */
    public function setSigningAlgorithm($signingAlgorithm)
    {
        $this->container['signingAlgorithm'] = $signingAlgorithm;
        return $this;
    }

    /**
    * Gets messageType
    *  消息类型，默认为“DIGEST”，枚举如下：  - DIGEST 表示消息摘要  - RAW 表示消息原文
    *
    * @return string|null
    */
    public function getMessageType()
    {
        return $this->container['messageType'];
    }

    /**
    * Sets messageType
    *
    * @param string|null $messageType 消息类型，默认为“DIGEST”，枚举如下：  - DIGEST 表示消息摘要  - RAW 表示消息原文
    *
    * @return $this
    */
    public function setMessageType($messageType)
    {
        $this->container['messageType'] = $messageType;
        return $this;
    }

    /**
    * Gets sequence
    *  请求消息序列号，36字节序列号。 例如：919c82d4-8046-4722-9094-35c3c6524cff。
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
    * @param string|null $sequence 请求消息序列号，36字节序列号。 例如：919c82d4-8046-4722-9094-35c3c6524cff。
    *
    * @return $this
    */
    public function setSequence($sequence)
    {
        $this->container['sequence'] = $sequence;
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

