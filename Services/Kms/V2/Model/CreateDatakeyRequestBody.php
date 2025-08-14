<?php

namespace HuaweiCloud\SDK\Kms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateDatakeyRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateDatakeyRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * keyId  密钥ID，36字节，满足正则匹配“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”。 例如：0d0466b0-e727-4d9c-b35d-f84bb474a37f。
    * keySpec  指定生成的密钥bit位长度。有效值：AES_256、AES_128、SM4、HMAC_256、HMAC_384、HMAC_512、HMAC_SM3。  - AES_256：表示256比特的对称密钥。  - AES_128：表示128比特的对称密钥。  - SM4：表示SM4密钥。  - HMAC_256：表示HMAC_256密钥。  - HMAC_384：表示HMAC_384密钥。  - HMAC_512：表示HMAC_512密钥。  - HMAC_SM3：表示HMAC_SM3密钥。     说明：  datakey_length和key_spec二选一。   - 若datakey_length和key_spec都为空，默认生成256bit的密钥。   - 若datakey_length和key_spec都指定了值，仅datakey_length生效。
    * datakeyLength  密钥bit位长度。取值为8的倍数，取值范围为8~8192。 说明：  datakey_length和key_spec二选一。   - 若datakey_length和key_spec都为空，默认生成256bit的密钥。   - 若datakey_length和key_spec都指定了值，仅datakey_length生效。
    * additionalAuthenticatedData  身份验证的非敏感额外数据。任意字符串，长度不超过128字节。
    * sequence  请求消息序列号，36字节序列号。 例如：919c82d4-8046-4722-9094-35c3c6524cff
    * pin  pin码，用于数据密钥的认证，仅四级密评场景生效
    * pinType  pin码的类型，默认为“CipherText”： - PlainText：表示明文pin - CipherText：表示密文pin
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'keyId' => 'string',
            'keySpec' => 'string',
            'datakeyLength' => 'string',
            'additionalAuthenticatedData' => 'string',
            'sequence' => 'string',
            'pin' => 'string',
            'pinType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * keyId  密钥ID，36字节，满足正则匹配“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”。 例如：0d0466b0-e727-4d9c-b35d-f84bb474a37f。
    * keySpec  指定生成的密钥bit位长度。有效值：AES_256、AES_128、SM4、HMAC_256、HMAC_384、HMAC_512、HMAC_SM3。  - AES_256：表示256比特的对称密钥。  - AES_128：表示128比特的对称密钥。  - SM4：表示SM4密钥。  - HMAC_256：表示HMAC_256密钥。  - HMAC_384：表示HMAC_384密钥。  - HMAC_512：表示HMAC_512密钥。  - HMAC_SM3：表示HMAC_SM3密钥。     说明：  datakey_length和key_spec二选一。   - 若datakey_length和key_spec都为空，默认生成256bit的密钥。   - 若datakey_length和key_spec都指定了值，仅datakey_length生效。
    * datakeyLength  密钥bit位长度。取值为8的倍数，取值范围为8~8192。 说明：  datakey_length和key_spec二选一。   - 若datakey_length和key_spec都为空，默认生成256bit的密钥。   - 若datakey_length和key_spec都指定了值，仅datakey_length生效。
    * additionalAuthenticatedData  身份验证的非敏感额外数据。任意字符串，长度不超过128字节。
    * sequence  请求消息序列号，36字节序列号。 例如：919c82d4-8046-4722-9094-35c3c6524cff
    * pin  pin码，用于数据密钥的认证，仅四级密评场景生效
    * pinType  pin码的类型，默认为“CipherText”： - PlainText：表示明文pin - CipherText：表示密文pin
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'keyId' => null,
        'keySpec' => null,
        'datakeyLength' => null,
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
    * keySpec  指定生成的密钥bit位长度。有效值：AES_256、AES_128、SM4、HMAC_256、HMAC_384、HMAC_512、HMAC_SM3。  - AES_256：表示256比特的对称密钥。  - AES_128：表示128比特的对称密钥。  - SM4：表示SM4密钥。  - HMAC_256：表示HMAC_256密钥。  - HMAC_384：表示HMAC_384密钥。  - HMAC_512：表示HMAC_512密钥。  - HMAC_SM3：表示HMAC_SM3密钥。     说明：  datakey_length和key_spec二选一。   - 若datakey_length和key_spec都为空，默认生成256bit的密钥。   - 若datakey_length和key_spec都指定了值，仅datakey_length生效。
    * datakeyLength  密钥bit位长度。取值为8的倍数，取值范围为8~8192。 说明：  datakey_length和key_spec二选一。   - 若datakey_length和key_spec都为空，默认生成256bit的密钥。   - 若datakey_length和key_spec都指定了值，仅datakey_length生效。
    * additionalAuthenticatedData  身份验证的非敏感额外数据。任意字符串，长度不超过128字节。
    * sequence  请求消息序列号，36字节序列号。 例如：919c82d4-8046-4722-9094-35c3c6524cff
    * pin  pin码，用于数据密钥的认证，仅四级密评场景生效
    * pinType  pin码的类型，默认为“CipherText”： - PlainText：表示明文pin - CipherText：表示密文pin
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'keyId' => 'key_id',
            'keySpec' => 'key_spec',
            'datakeyLength' => 'datakey_length',
            'additionalAuthenticatedData' => 'additional_authenticated_data',
            'sequence' => 'sequence',
            'pin' => 'pin',
            'pinType' => 'pin_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * keyId  密钥ID，36字节，满足正则匹配“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”。 例如：0d0466b0-e727-4d9c-b35d-f84bb474a37f。
    * keySpec  指定生成的密钥bit位长度。有效值：AES_256、AES_128、SM4、HMAC_256、HMAC_384、HMAC_512、HMAC_SM3。  - AES_256：表示256比特的对称密钥。  - AES_128：表示128比特的对称密钥。  - SM4：表示SM4密钥。  - HMAC_256：表示HMAC_256密钥。  - HMAC_384：表示HMAC_384密钥。  - HMAC_512：表示HMAC_512密钥。  - HMAC_SM3：表示HMAC_SM3密钥。     说明：  datakey_length和key_spec二选一。   - 若datakey_length和key_spec都为空，默认生成256bit的密钥。   - 若datakey_length和key_spec都指定了值，仅datakey_length生效。
    * datakeyLength  密钥bit位长度。取值为8的倍数，取值范围为8~8192。 说明：  datakey_length和key_spec二选一。   - 若datakey_length和key_spec都为空，默认生成256bit的密钥。   - 若datakey_length和key_spec都指定了值，仅datakey_length生效。
    * additionalAuthenticatedData  身份验证的非敏感额外数据。任意字符串，长度不超过128字节。
    * sequence  请求消息序列号，36字节序列号。 例如：919c82d4-8046-4722-9094-35c3c6524cff
    * pin  pin码，用于数据密钥的认证，仅四级密评场景生效
    * pinType  pin码的类型，默认为“CipherText”： - PlainText：表示明文pin - CipherText：表示密文pin
    *
    * @var string[]
    */
    protected static $setters = [
            'keyId' => 'setKeyId',
            'keySpec' => 'setKeySpec',
            'datakeyLength' => 'setDatakeyLength',
            'additionalAuthenticatedData' => 'setAdditionalAuthenticatedData',
            'sequence' => 'setSequence',
            'pin' => 'setPin',
            'pinType' => 'setPinType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * keyId  密钥ID，36字节，满足正则匹配“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”。 例如：0d0466b0-e727-4d9c-b35d-f84bb474a37f。
    * keySpec  指定生成的密钥bit位长度。有效值：AES_256、AES_128、SM4、HMAC_256、HMAC_384、HMAC_512、HMAC_SM3。  - AES_256：表示256比特的对称密钥。  - AES_128：表示128比特的对称密钥。  - SM4：表示SM4密钥。  - HMAC_256：表示HMAC_256密钥。  - HMAC_384：表示HMAC_384密钥。  - HMAC_512：表示HMAC_512密钥。  - HMAC_SM3：表示HMAC_SM3密钥。     说明：  datakey_length和key_spec二选一。   - 若datakey_length和key_spec都为空，默认生成256bit的密钥。   - 若datakey_length和key_spec都指定了值，仅datakey_length生效。
    * datakeyLength  密钥bit位长度。取值为8的倍数，取值范围为8~8192。 说明：  datakey_length和key_spec二选一。   - 若datakey_length和key_spec都为空，默认生成256bit的密钥。   - 若datakey_length和key_spec都指定了值，仅datakey_length生效。
    * additionalAuthenticatedData  身份验证的非敏感额外数据。任意字符串，长度不超过128字节。
    * sequence  请求消息序列号，36字节序列号。 例如：919c82d4-8046-4722-9094-35c3c6524cff
    * pin  pin码，用于数据密钥的认证，仅四级密评场景生效
    * pinType  pin码的类型，默认为“CipherText”： - PlainText：表示明文pin - CipherText：表示密文pin
    *
    * @var string[]
    */
    protected static $getters = [
            'keyId' => 'getKeyId',
            'keySpec' => 'getKeySpec',
            'datakeyLength' => 'getDatakeyLength',
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
    const KEY_SPEC_AES_256 = 'AES_256';
    const KEY_SPEC_AES_128 = 'AES_128';
    const KEY_SPEC_SM4 = 'SM4';
    const KEY_SPEC_HMAC_256 = 'HMAC_256';
    const KEY_SPEC_HMAC_384 = 'HMAC_384';
    const KEY_SPEC_HMAC_512 = 'HMAC_512';
    const KEY_SPEC_HMAC_SM3 = 'HMAC_SM3';
    const PIN_TYPE_CIPHER_TEXT = 'CipherText';
    const PIN_TYPE_PLAIN_TEXT = 'PlainText';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getKeySpecAllowableValues()
    {
        return [
            self::KEY_SPEC_AES_256,
            self::KEY_SPEC_AES_128,
            self::KEY_SPEC_SM4,
            self::KEY_SPEC_HMAC_256,
            self::KEY_SPEC_HMAC_384,
            self::KEY_SPEC_HMAC_512,
            self::KEY_SPEC_HMAC_SM3,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPinTypeAllowableValues()
    {
        return [
            self::PIN_TYPE_CIPHER_TEXT,
            self::PIN_TYPE_PLAIN_TEXT,
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
        $this->container['datakeyLength'] = isset($data['datakeyLength']) ? $data['datakeyLength'] : null;
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
            $allowedValues = $this->getKeySpecAllowableValues();
                if (!is_null($this->container['keySpec']) && !in_array($this->container['keySpec'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'keySpec', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['datakeyLength']) && (mb_strlen($this->container['datakeyLength']) > 4)) {
                $invalidProperties[] = "invalid value for 'datakeyLength', the character length must be smaller than or equal to 4.";
            }
            if (!is_null($this->container['datakeyLength']) && (mb_strlen($this->container['datakeyLength']) < 1)) {
                $invalidProperties[] = "invalid value for 'datakeyLength', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['additionalAuthenticatedData']) && (mb_strlen($this->container['additionalAuthenticatedData']) > 128)) {
                $invalidProperties[] = "invalid value for 'additionalAuthenticatedData', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['additionalAuthenticatedData']) && (mb_strlen($this->container['additionalAuthenticatedData']) < 1)) {
                $invalidProperties[] = "invalid value for 'additionalAuthenticatedData', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sequence']) && (mb_strlen($this->container['sequence']) > 36)) {
                $invalidProperties[] = "invalid value for 'sequence', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['sequence']) && (mb_strlen($this->container['sequence']) < 0)) {
                $invalidProperties[] = "invalid value for 'sequence', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getPinTypeAllowableValues();
                if (!is_null($this->container['pinType']) && !in_array($this->container['pinType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'pinType', must be one of '%s'",
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
    *  指定生成的密钥bit位长度。有效值：AES_256、AES_128、SM4、HMAC_256、HMAC_384、HMAC_512、HMAC_SM3。  - AES_256：表示256比特的对称密钥。  - AES_128：表示128比特的对称密钥。  - SM4：表示SM4密钥。  - HMAC_256：表示HMAC_256密钥。  - HMAC_384：表示HMAC_384密钥。  - HMAC_512：表示HMAC_512密钥。  - HMAC_SM3：表示HMAC_SM3密钥。     说明：  datakey_length和key_spec二选一。   - 若datakey_length和key_spec都为空，默认生成256bit的密钥。   - 若datakey_length和key_spec都指定了值，仅datakey_length生效。
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
    * @param string|null $keySpec 指定生成的密钥bit位长度。有效值：AES_256、AES_128、SM4、HMAC_256、HMAC_384、HMAC_512、HMAC_SM3。  - AES_256：表示256比特的对称密钥。  - AES_128：表示128比特的对称密钥。  - SM4：表示SM4密钥。  - HMAC_256：表示HMAC_256密钥。  - HMAC_384：表示HMAC_384密钥。  - HMAC_512：表示HMAC_512密钥。  - HMAC_SM3：表示HMAC_SM3密钥。     说明：  datakey_length和key_spec二选一。   - 若datakey_length和key_spec都为空，默认生成256bit的密钥。   - 若datakey_length和key_spec都指定了值，仅datakey_length生效。
    *
    * @return $this
    */
    public function setKeySpec($keySpec)
    {
        $this->container['keySpec'] = $keySpec;
        return $this;
    }

    /**
    * Gets datakeyLength
    *  密钥bit位长度。取值为8的倍数，取值范围为8~8192。 说明：  datakey_length和key_spec二选一。   - 若datakey_length和key_spec都为空，默认生成256bit的密钥。   - 若datakey_length和key_spec都指定了值，仅datakey_length生效。
    *
    * @return string|null
    */
    public function getDatakeyLength()
    {
        return $this->container['datakeyLength'];
    }

    /**
    * Sets datakeyLength
    *
    * @param string|null $datakeyLength 密钥bit位长度。取值为8的倍数，取值范围为8~8192。 说明：  datakey_length和key_spec二选一。   - 若datakey_length和key_spec都为空，默认生成256bit的密钥。   - 若datakey_length和key_spec都指定了值，仅datakey_length生效。
    *
    * @return $this
    */
    public function setDatakeyLength($datakeyLength)
    {
        $this->container['datakeyLength'] = $datakeyLength;
        return $this;
    }

    /**
    * Gets additionalAuthenticatedData
    *  身份验证的非敏感额外数据。任意字符串，长度不超过128字节。
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
    * @param string|null $additionalAuthenticatedData 身份验证的非敏感额外数据。任意字符串，长度不超过128字节。
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
    *  pin码，用于数据密钥的认证，仅四级密评场景生效
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
    * @param string|null $pin pin码，用于数据密钥的认证，仅四级密评场景生效
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
    *  pin码的类型，默认为“CipherText”： - PlainText：表示明文pin - CipherText：表示密文pin
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
    * @param string|null $pinType pin码的类型，默认为“CipherText”： - PlainText：表示明文pin - CipherText：表示密文pin
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

