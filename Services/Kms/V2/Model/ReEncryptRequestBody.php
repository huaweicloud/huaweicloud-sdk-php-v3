<?php

namespace HuaweiCloud\SDK\Kms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReEncryptRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReEncryptRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sourceKeyId  原密钥ID，用于解密密文。对于非对称密钥加密的密文source_key_id必填。对于对称密钥加密的密文，推荐填写source_key_id。kms会优先使用您填写的source_key_id进行解密。不填时会尝试从密文中解析出加密时使用的密钥ID进行解密。
    * sourceAdditionalAuthenticatedData  加密原密文时使用的aad信息。如果加密时，没指定aad，则不能填写，否则会造成解密失败
    * sourceEncryptionAlgorithm  加密原密文时使用的加密算法。默认值为“SYMMETRIC_DEFAULT”，合法枚举值如下： SYMMETRIC_DEFAULT RSAES_OAEP_SHA_1 RSAES_OAEP_SHA_256 SM2_ENCRYPT 注意：RSAES_OAEP_SHA_1已不再安全，请谨慎使用
    * destinationKeyId  目的密钥ID,用于加密解密后的明文
    * destinationAdditionalAuthenticatedData  如果指定了值，会在重加密时，作为aad参与计算
    * destinationEncryptionAlgorithm  重加密新密文时使用的加密算法。默认值为“SYMMETRIC_DEFAULT”，合法枚举值如下： SYMMETRIC_DEFAULT RSAES_OAEP_SHA_1 RSAES_OAEP_SHA_256 SM2_ENCRYPT 注意：RSAES_OAEP_SHA_1已不再安全，请谨慎使用
    * datakeyCipherLength  当密文是CBC 模式加密的 数据密钥时，需要指定datakey_cipher_length。表示明文密钥材料的字节数
    * cipherText  需要进行重加密的密文。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sourceKeyId' => 'string',
            'sourceAdditionalAuthenticatedData' => 'string',
            'sourceEncryptionAlgorithm' => 'string',
            'destinationKeyId' => 'string',
            'destinationAdditionalAuthenticatedData' => 'string',
            'destinationEncryptionAlgorithm' => 'string',
            'datakeyCipherLength' => 'string',
            'cipherText' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sourceKeyId  原密钥ID，用于解密密文。对于非对称密钥加密的密文source_key_id必填。对于对称密钥加密的密文，推荐填写source_key_id。kms会优先使用您填写的source_key_id进行解密。不填时会尝试从密文中解析出加密时使用的密钥ID进行解密。
    * sourceAdditionalAuthenticatedData  加密原密文时使用的aad信息。如果加密时，没指定aad，则不能填写，否则会造成解密失败
    * sourceEncryptionAlgorithm  加密原密文时使用的加密算法。默认值为“SYMMETRIC_DEFAULT”，合法枚举值如下： SYMMETRIC_DEFAULT RSAES_OAEP_SHA_1 RSAES_OAEP_SHA_256 SM2_ENCRYPT 注意：RSAES_OAEP_SHA_1已不再安全，请谨慎使用
    * destinationKeyId  目的密钥ID,用于加密解密后的明文
    * destinationAdditionalAuthenticatedData  如果指定了值，会在重加密时，作为aad参与计算
    * destinationEncryptionAlgorithm  重加密新密文时使用的加密算法。默认值为“SYMMETRIC_DEFAULT”，合法枚举值如下： SYMMETRIC_DEFAULT RSAES_OAEP_SHA_1 RSAES_OAEP_SHA_256 SM2_ENCRYPT 注意：RSAES_OAEP_SHA_1已不再安全，请谨慎使用
    * datakeyCipherLength  当密文是CBC 模式加密的 数据密钥时，需要指定datakey_cipher_length。表示明文密钥材料的字节数
    * cipherText  需要进行重加密的密文。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sourceKeyId' => null,
        'sourceAdditionalAuthenticatedData' => null,
        'sourceEncryptionAlgorithm' => null,
        'destinationKeyId' => null,
        'destinationAdditionalAuthenticatedData' => null,
        'destinationEncryptionAlgorithm' => null,
        'datakeyCipherLength' => null,
        'cipherText' => null
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
    * sourceKeyId  原密钥ID，用于解密密文。对于非对称密钥加密的密文source_key_id必填。对于对称密钥加密的密文，推荐填写source_key_id。kms会优先使用您填写的source_key_id进行解密。不填时会尝试从密文中解析出加密时使用的密钥ID进行解密。
    * sourceAdditionalAuthenticatedData  加密原密文时使用的aad信息。如果加密时，没指定aad，则不能填写，否则会造成解密失败
    * sourceEncryptionAlgorithm  加密原密文时使用的加密算法。默认值为“SYMMETRIC_DEFAULT”，合法枚举值如下： SYMMETRIC_DEFAULT RSAES_OAEP_SHA_1 RSAES_OAEP_SHA_256 SM2_ENCRYPT 注意：RSAES_OAEP_SHA_1已不再安全，请谨慎使用
    * destinationKeyId  目的密钥ID,用于加密解密后的明文
    * destinationAdditionalAuthenticatedData  如果指定了值，会在重加密时，作为aad参与计算
    * destinationEncryptionAlgorithm  重加密新密文时使用的加密算法。默认值为“SYMMETRIC_DEFAULT”，合法枚举值如下： SYMMETRIC_DEFAULT RSAES_OAEP_SHA_1 RSAES_OAEP_SHA_256 SM2_ENCRYPT 注意：RSAES_OAEP_SHA_1已不再安全，请谨慎使用
    * datakeyCipherLength  当密文是CBC 模式加密的 数据密钥时，需要指定datakey_cipher_length。表示明文密钥材料的字节数
    * cipherText  需要进行重加密的密文。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sourceKeyId' => 'source_key_id',
            'sourceAdditionalAuthenticatedData' => 'source_additional_authenticated_data',
            'sourceEncryptionAlgorithm' => 'source_encryption_algorithm',
            'destinationKeyId' => 'destination_key_id',
            'destinationAdditionalAuthenticatedData' => 'destination_additional_authenticated_data',
            'destinationEncryptionAlgorithm' => 'destination_encryption_algorithm',
            'datakeyCipherLength' => 'datakey_cipher_length',
            'cipherText' => 'cipher_text'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sourceKeyId  原密钥ID，用于解密密文。对于非对称密钥加密的密文source_key_id必填。对于对称密钥加密的密文，推荐填写source_key_id。kms会优先使用您填写的source_key_id进行解密。不填时会尝试从密文中解析出加密时使用的密钥ID进行解密。
    * sourceAdditionalAuthenticatedData  加密原密文时使用的aad信息。如果加密时，没指定aad，则不能填写，否则会造成解密失败
    * sourceEncryptionAlgorithm  加密原密文时使用的加密算法。默认值为“SYMMETRIC_DEFAULT”，合法枚举值如下： SYMMETRIC_DEFAULT RSAES_OAEP_SHA_1 RSAES_OAEP_SHA_256 SM2_ENCRYPT 注意：RSAES_OAEP_SHA_1已不再安全，请谨慎使用
    * destinationKeyId  目的密钥ID,用于加密解密后的明文
    * destinationAdditionalAuthenticatedData  如果指定了值，会在重加密时，作为aad参与计算
    * destinationEncryptionAlgorithm  重加密新密文时使用的加密算法。默认值为“SYMMETRIC_DEFAULT”，合法枚举值如下： SYMMETRIC_DEFAULT RSAES_OAEP_SHA_1 RSAES_OAEP_SHA_256 SM2_ENCRYPT 注意：RSAES_OAEP_SHA_1已不再安全，请谨慎使用
    * datakeyCipherLength  当密文是CBC 模式加密的 数据密钥时，需要指定datakey_cipher_length。表示明文密钥材料的字节数
    * cipherText  需要进行重加密的密文。
    *
    * @var string[]
    */
    protected static $setters = [
            'sourceKeyId' => 'setSourceKeyId',
            'sourceAdditionalAuthenticatedData' => 'setSourceAdditionalAuthenticatedData',
            'sourceEncryptionAlgorithm' => 'setSourceEncryptionAlgorithm',
            'destinationKeyId' => 'setDestinationKeyId',
            'destinationAdditionalAuthenticatedData' => 'setDestinationAdditionalAuthenticatedData',
            'destinationEncryptionAlgorithm' => 'setDestinationEncryptionAlgorithm',
            'datakeyCipherLength' => 'setDatakeyCipherLength',
            'cipherText' => 'setCipherText'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sourceKeyId  原密钥ID，用于解密密文。对于非对称密钥加密的密文source_key_id必填。对于对称密钥加密的密文，推荐填写source_key_id。kms会优先使用您填写的source_key_id进行解密。不填时会尝试从密文中解析出加密时使用的密钥ID进行解密。
    * sourceAdditionalAuthenticatedData  加密原密文时使用的aad信息。如果加密时，没指定aad，则不能填写，否则会造成解密失败
    * sourceEncryptionAlgorithm  加密原密文时使用的加密算法。默认值为“SYMMETRIC_DEFAULT”，合法枚举值如下： SYMMETRIC_DEFAULT RSAES_OAEP_SHA_1 RSAES_OAEP_SHA_256 SM2_ENCRYPT 注意：RSAES_OAEP_SHA_1已不再安全，请谨慎使用
    * destinationKeyId  目的密钥ID,用于加密解密后的明文
    * destinationAdditionalAuthenticatedData  如果指定了值，会在重加密时，作为aad参与计算
    * destinationEncryptionAlgorithm  重加密新密文时使用的加密算法。默认值为“SYMMETRIC_DEFAULT”，合法枚举值如下： SYMMETRIC_DEFAULT RSAES_OAEP_SHA_1 RSAES_OAEP_SHA_256 SM2_ENCRYPT 注意：RSAES_OAEP_SHA_1已不再安全，请谨慎使用
    * datakeyCipherLength  当密文是CBC 模式加密的 数据密钥时，需要指定datakey_cipher_length。表示明文密钥材料的字节数
    * cipherText  需要进行重加密的密文。
    *
    * @var string[]
    */
    protected static $getters = [
            'sourceKeyId' => 'getSourceKeyId',
            'sourceAdditionalAuthenticatedData' => 'getSourceAdditionalAuthenticatedData',
            'sourceEncryptionAlgorithm' => 'getSourceEncryptionAlgorithm',
            'destinationKeyId' => 'getDestinationKeyId',
            'destinationAdditionalAuthenticatedData' => 'getDestinationAdditionalAuthenticatedData',
            'destinationEncryptionAlgorithm' => 'getDestinationEncryptionAlgorithm',
            'datakeyCipherLength' => 'getDatakeyCipherLength',
            'cipherText' => 'getCipherText'
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
        $this->container['sourceKeyId'] = isset($data['sourceKeyId']) ? $data['sourceKeyId'] : null;
        $this->container['sourceAdditionalAuthenticatedData'] = isset($data['sourceAdditionalAuthenticatedData']) ? $data['sourceAdditionalAuthenticatedData'] : null;
        $this->container['sourceEncryptionAlgorithm'] = isset($data['sourceEncryptionAlgorithm']) ? $data['sourceEncryptionAlgorithm'] : null;
        $this->container['destinationKeyId'] = isset($data['destinationKeyId']) ? $data['destinationKeyId'] : null;
        $this->container['destinationAdditionalAuthenticatedData'] = isset($data['destinationAdditionalAuthenticatedData']) ? $data['destinationAdditionalAuthenticatedData'] : null;
        $this->container['destinationEncryptionAlgorithm'] = isset($data['destinationEncryptionAlgorithm']) ? $data['destinationEncryptionAlgorithm'] : null;
        $this->container['datakeyCipherLength'] = isset($data['datakeyCipherLength']) ? $data['datakeyCipherLength'] : null;
        $this->container['cipherText'] = isset($data['cipherText']) ? $data['cipherText'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['destinationKeyId'] === null) {
            $invalidProperties[] = "'destinationKeyId' can't be null";
        }
        if ($this->container['cipherText'] === null) {
            $invalidProperties[] = "'cipherText' can't be null";
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
    * Gets sourceKeyId
    *  原密钥ID，用于解密密文。对于非对称密钥加密的密文source_key_id必填。对于对称密钥加密的密文，推荐填写source_key_id。kms会优先使用您填写的source_key_id进行解密。不填时会尝试从密文中解析出加密时使用的密钥ID进行解密。
    *
    * @return string|null
    */
    public function getSourceKeyId()
    {
        return $this->container['sourceKeyId'];
    }

    /**
    * Sets sourceKeyId
    *
    * @param string|null $sourceKeyId 原密钥ID，用于解密密文。对于非对称密钥加密的密文source_key_id必填。对于对称密钥加密的密文，推荐填写source_key_id。kms会优先使用您填写的source_key_id进行解密。不填时会尝试从密文中解析出加密时使用的密钥ID进行解密。
    *
    * @return $this
    */
    public function setSourceKeyId($sourceKeyId)
    {
        $this->container['sourceKeyId'] = $sourceKeyId;
        return $this;
    }

    /**
    * Gets sourceAdditionalAuthenticatedData
    *  加密原密文时使用的aad信息。如果加密时，没指定aad，则不能填写，否则会造成解密失败
    *
    * @return string|null
    */
    public function getSourceAdditionalAuthenticatedData()
    {
        return $this->container['sourceAdditionalAuthenticatedData'];
    }

    /**
    * Sets sourceAdditionalAuthenticatedData
    *
    * @param string|null $sourceAdditionalAuthenticatedData 加密原密文时使用的aad信息。如果加密时，没指定aad，则不能填写，否则会造成解密失败
    *
    * @return $this
    */
    public function setSourceAdditionalAuthenticatedData($sourceAdditionalAuthenticatedData)
    {
        $this->container['sourceAdditionalAuthenticatedData'] = $sourceAdditionalAuthenticatedData;
        return $this;
    }

    /**
    * Gets sourceEncryptionAlgorithm
    *  加密原密文时使用的加密算法。默认值为“SYMMETRIC_DEFAULT”，合法枚举值如下： SYMMETRIC_DEFAULT RSAES_OAEP_SHA_1 RSAES_OAEP_SHA_256 SM2_ENCRYPT 注意：RSAES_OAEP_SHA_1已不再安全，请谨慎使用
    *
    * @return string|null
    */
    public function getSourceEncryptionAlgorithm()
    {
        return $this->container['sourceEncryptionAlgorithm'];
    }

    /**
    * Sets sourceEncryptionAlgorithm
    *
    * @param string|null $sourceEncryptionAlgorithm 加密原密文时使用的加密算法。默认值为“SYMMETRIC_DEFAULT”，合法枚举值如下： SYMMETRIC_DEFAULT RSAES_OAEP_SHA_1 RSAES_OAEP_SHA_256 SM2_ENCRYPT 注意：RSAES_OAEP_SHA_1已不再安全，请谨慎使用
    *
    * @return $this
    */
    public function setSourceEncryptionAlgorithm($sourceEncryptionAlgorithm)
    {
        $this->container['sourceEncryptionAlgorithm'] = $sourceEncryptionAlgorithm;
        return $this;
    }

    /**
    * Gets destinationKeyId
    *  目的密钥ID,用于加密解密后的明文
    *
    * @return string
    */
    public function getDestinationKeyId()
    {
        return $this->container['destinationKeyId'];
    }

    /**
    * Sets destinationKeyId
    *
    * @param string $destinationKeyId 目的密钥ID,用于加密解密后的明文
    *
    * @return $this
    */
    public function setDestinationKeyId($destinationKeyId)
    {
        $this->container['destinationKeyId'] = $destinationKeyId;
        return $this;
    }

    /**
    * Gets destinationAdditionalAuthenticatedData
    *  如果指定了值，会在重加密时，作为aad参与计算
    *
    * @return string|null
    */
    public function getDestinationAdditionalAuthenticatedData()
    {
        return $this->container['destinationAdditionalAuthenticatedData'];
    }

    /**
    * Sets destinationAdditionalAuthenticatedData
    *
    * @param string|null $destinationAdditionalAuthenticatedData 如果指定了值，会在重加密时，作为aad参与计算
    *
    * @return $this
    */
    public function setDestinationAdditionalAuthenticatedData($destinationAdditionalAuthenticatedData)
    {
        $this->container['destinationAdditionalAuthenticatedData'] = $destinationAdditionalAuthenticatedData;
        return $this;
    }

    /**
    * Gets destinationEncryptionAlgorithm
    *  重加密新密文时使用的加密算法。默认值为“SYMMETRIC_DEFAULT”，合法枚举值如下： SYMMETRIC_DEFAULT RSAES_OAEP_SHA_1 RSAES_OAEP_SHA_256 SM2_ENCRYPT 注意：RSAES_OAEP_SHA_1已不再安全，请谨慎使用
    *
    * @return string|null
    */
    public function getDestinationEncryptionAlgorithm()
    {
        return $this->container['destinationEncryptionAlgorithm'];
    }

    /**
    * Sets destinationEncryptionAlgorithm
    *
    * @param string|null $destinationEncryptionAlgorithm 重加密新密文时使用的加密算法。默认值为“SYMMETRIC_DEFAULT”，合法枚举值如下： SYMMETRIC_DEFAULT RSAES_OAEP_SHA_1 RSAES_OAEP_SHA_256 SM2_ENCRYPT 注意：RSAES_OAEP_SHA_1已不再安全，请谨慎使用
    *
    * @return $this
    */
    public function setDestinationEncryptionAlgorithm($destinationEncryptionAlgorithm)
    {
        $this->container['destinationEncryptionAlgorithm'] = $destinationEncryptionAlgorithm;
        return $this;
    }

    /**
    * Gets datakeyCipherLength
    *  当密文是CBC 模式加密的 数据密钥时，需要指定datakey_cipher_length。表示明文密钥材料的字节数
    *
    * @return string|null
    */
    public function getDatakeyCipherLength()
    {
        return $this->container['datakeyCipherLength'];
    }

    /**
    * Sets datakeyCipherLength
    *
    * @param string|null $datakeyCipherLength 当密文是CBC 模式加密的 数据密钥时，需要指定datakey_cipher_length。表示明文密钥材料的字节数
    *
    * @return $this
    */
    public function setDatakeyCipherLength($datakeyCipherLength)
    {
        $this->container['datakeyCipherLength'] = $datakeyCipherLength;
        return $this;
    }

    /**
    * Gets cipherText
    *  需要进行重加密的密文。
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
    * @param string $cipherText 需要进行重加密的密文。
    *
    * @return $this
    */
    public function setCipherText($cipherText)
    {
        $this->container['cipherText'] = $cipherText;
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

