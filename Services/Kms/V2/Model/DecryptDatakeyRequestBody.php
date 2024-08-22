<?php

namespace HuaweiCloud\SDK\Kms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DecryptDatakeyRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DecryptDatakeyRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * keyId  密钥ID，36字节，满足正则匹配“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”。 例如：0d0466b0-e727-4d9c-b35d-f84bb474a37f。
    * cipherText  DEK密文及元数据的16进制字符串。取值为加密数据密钥结果中的cipher_text的值。
    * datakeyCipherLength  密钥字节长度，取值范围为1~1024。 密钥字节长度，取值为“64”。
    * additionalAuthenticatedData  身份验证的非敏感额外数据。任意字符串，长度不超过128字节。
    * sequence  请求消息序列号，36字节序列号。 例如：919c82d4-8046-4722-9094-35c3c6524cff
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'keyId' => 'string',
            'cipherText' => 'string',
            'datakeyCipherLength' => 'string',
            'additionalAuthenticatedData' => 'string',
            'sequence' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * keyId  密钥ID，36字节，满足正则匹配“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”。 例如：0d0466b0-e727-4d9c-b35d-f84bb474a37f。
    * cipherText  DEK密文及元数据的16进制字符串。取值为加密数据密钥结果中的cipher_text的值。
    * datakeyCipherLength  密钥字节长度，取值范围为1~1024。 密钥字节长度，取值为“64”。
    * additionalAuthenticatedData  身份验证的非敏感额外数据。任意字符串，长度不超过128字节。
    * sequence  请求消息序列号，36字节序列号。 例如：919c82d4-8046-4722-9094-35c3c6524cff
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'keyId' => null,
        'cipherText' => null,
        'datakeyCipherLength' => null,
        'additionalAuthenticatedData' => null,
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
    * keyId  密钥ID，36字节，满足正则匹配“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”。 例如：0d0466b0-e727-4d9c-b35d-f84bb474a37f。
    * cipherText  DEK密文及元数据的16进制字符串。取值为加密数据密钥结果中的cipher_text的值。
    * datakeyCipherLength  密钥字节长度，取值范围为1~1024。 密钥字节长度，取值为“64”。
    * additionalAuthenticatedData  身份验证的非敏感额外数据。任意字符串，长度不超过128字节。
    * sequence  请求消息序列号，36字节序列号。 例如：919c82d4-8046-4722-9094-35c3c6524cff
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'keyId' => 'key_id',
            'cipherText' => 'cipher_text',
            'datakeyCipherLength' => 'datakey_cipher_length',
            'additionalAuthenticatedData' => 'additional_authenticated_data',
            'sequence' => 'sequence'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * keyId  密钥ID，36字节，满足正则匹配“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”。 例如：0d0466b0-e727-4d9c-b35d-f84bb474a37f。
    * cipherText  DEK密文及元数据的16进制字符串。取值为加密数据密钥结果中的cipher_text的值。
    * datakeyCipherLength  密钥字节长度，取值范围为1~1024。 密钥字节长度，取值为“64”。
    * additionalAuthenticatedData  身份验证的非敏感额外数据。任意字符串，长度不超过128字节。
    * sequence  请求消息序列号，36字节序列号。 例如：919c82d4-8046-4722-9094-35c3c6524cff
    *
    * @var string[]
    */
    protected static $setters = [
            'keyId' => 'setKeyId',
            'cipherText' => 'setCipherText',
            'datakeyCipherLength' => 'setDatakeyCipherLength',
            'additionalAuthenticatedData' => 'setAdditionalAuthenticatedData',
            'sequence' => 'setSequence'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * keyId  密钥ID，36字节，满足正则匹配“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”。 例如：0d0466b0-e727-4d9c-b35d-f84bb474a37f。
    * cipherText  DEK密文及元数据的16进制字符串。取值为加密数据密钥结果中的cipher_text的值。
    * datakeyCipherLength  密钥字节长度，取值范围为1~1024。 密钥字节长度，取值为“64”。
    * additionalAuthenticatedData  身份验证的非敏感额外数据。任意字符串，长度不超过128字节。
    * sequence  请求消息序列号，36字节序列号。 例如：919c82d4-8046-4722-9094-35c3c6524cff
    *
    * @var string[]
    */
    protected static $getters = [
            'keyId' => 'getKeyId',
            'cipherText' => 'getCipherText',
            'datakeyCipherLength' => 'getDatakeyCipherLength',
            'additionalAuthenticatedData' => 'getAdditionalAuthenticatedData',
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
        $this->container['cipherText'] = isset($data['cipherText']) ? $data['cipherText'] : null;
        $this->container['datakeyCipherLength'] = isset($data['datakeyCipherLength']) ? $data['datakeyCipherLength'] : null;
        $this->container['additionalAuthenticatedData'] = isset($data['additionalAuthenticatedData']) ? $data['additionalAuthenticatedData'] : null;
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
            if ((mb_strlen($this->container['keyId']) > 36)) {
                $invalidProperties[] = "invalid value for 'keyId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['keyId']) < 36)) {
                $invalidProperties[] = "invalid value for 'keyId', the character length must be bigger than or equal to 36.";
            }
        if ($this->container['cipherText'] === null) {
            $invalidProperties[] = "'cipherText' can't be null";
        }
            if ((mb_strlen($this->container['cipherText']) > 8192)) {
                $invalidProperties[] = "invalid value for 'cipherText', the character length must be smaller than or equal to 8192.";
            }
            if ((mb_strlen($this->container['cipherText']) < 8)) {
                $invalidProperties[] = "invalid value for 'cipherText', the character length must be bigger than or equal to 8.";
            }
        if ($this->container['datakeyCipherLength'] === null) {
            $invalidProperties[] = "'datakeyCipherLength' can't be null";
        }
            if ((mb_strlen($this->container['datakeyCipherLength']) > 10)) {
                $invalidProperties[] = "invalid value for 'datakeyCipherLength', the character length must be smaller than or equal to 10.";
            }
            if ((mb_strlen($this->container['datakeyCipherLength']) < 0)) {
                $invalidProperties[] = "invalid value for 'datakeyCipherLength', the character length must be bigger than or equal to 0.";
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
    * Gets cipherText
    *  DEK密文及元数据的16进制字符串。取值为加密数据密钥结果中的cipher_text的值。
    *
    * @return string
    */
    public function getCipherText()
    {
        return $this->container['cipherText'];
    }

    /**
    * Sets cipherText
    *
    * @param string $cipherText DEK密文及元数据的16进制字符串。取值为加密数据密钥结果中的cipher_text的值。
    *
    * @return $this
    */
    public function setCipherText($cipherText)
    {
        $this->container['cipherText'] = $cipherText;
        return $this;
    }

    /**
    * Gets datakeyCipherLength
    *  密钥字节长度，取值范围为1~1024。 密钥字节长度，取值为“64”。
    *
    * @return string
    */
    public function getDatakeyCipherLength()
    {
        return $this->container['datakeyCipherLength'];
    }

    /**
    * Sets datakeyCipherLength
    *
    * @param string $datakeyCipherLength 密钥字节长度，取值范围为1~1024。 密钥字节长度，取值为“64”。
    *
    * @return $this
    */
    public function setDatakeyCipherLength($datakeyCipherLength)
    {
        $this->container['datakeyCipherLength'] = $datakeyCipherLength;
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

