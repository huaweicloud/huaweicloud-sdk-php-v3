<?php

namespace HuaweiCloud\SDK\Kms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReEncryptResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReEncryptResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * keyId  重新加密时使用的密钥ID
    * sourceKeyId  加密原密文时使用的密钥ID
    * sourceEncryptionAlgorithm  原密文加密时使用的加密算法
    * destinationEncryptionAlgorithm  重新加密时使用的加密算法
    * cipherText  重新加密后的密文
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'keyId' => 'string',
            'sourceKeyId' => 'string',
            'sourceEncryptionAlgorithm' => 'string',
            'destinationEncryptionAlgorithm' => 'string',
            'cipherText' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * keyId  重新加密时使用的密钥ID
    * sourceKeyId  加密原密文时使用的密钥ID
    * sourceEncryptionAlgorithm  原密文加密时使用的加密算法
    * destinationEncryptionAlgorithm  重新加密时使用的加密算法
    * cipherText  重新加密后的密文
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'keyId' => null,
        'sourceKeyId' => null,
        'sourceEncryptionAlgorithm' => null,
        'destinationEncryptionAlgorithm' => null,
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
    * keyId  重新加密时使用的密钥ID
    * sourceKeyId  加密原密文时使用的密钥ID
    * sourceEncryptionAlgorithm  原密文加密时使用的加密算法
    * destinationEncryptionAlgorithm  重新加密时使用的加密算法
    * cipherText  重新加密后的密文
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'keyId' => 'key_id',
            'sourceKeyId' => 'source_key_id',
            'sourceEncryptionAlgorithm' => 'source_encryption_algorithm',
            'destinationEncryptionAlgorithm' => 'destination_encryption_algorithm',
            'cipherText' => 'cipher_text'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * keyId  重新加密时使用的密钥ID
    * sourceKeyId  加密原密文时使用的密钥ID
    * sourceEncryptionAlgorithm  原密文加密时使用的加密算法
    * destinationEncryptionAlgorithm  重新加密时使用的加密算法
    * cipherText  重新加密后的密文
    *
    * @var string[]
    */
    protected static $setters = [
            'keyId' => 'setKeyId',
            'sourceKeyId' => 'setSourceKeyId',
            'sourceEncryptionAlgorithm' => 'setSourceEncryptionAlgorithm',
            'destinationEncryptionAlgorithm' => 'setDestinationEncryptionAlgorithm',
            'cipherText' => 'setCipherText'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * keyId  重新加密时使用的密钥ID
    * sourceKeyId  加密原密文时使用的密钥ID
    * sourceEncryptionAlgorithm  原密文加密时使用的加密算法
    * destinationEncryptionAlgorithm  重新加密时使用的加密算法
    * cipherText  重新加密后的密文
    *
    * @var string[]
    */
    protected static $getters = [
            'keyId' => 'getKeyId',
            'sourceKeyId' => 'getSourceKeyId',
            'sourceEncryptionAlgorithm' => 'getSourceEncryptionAlgorithm',
            'destinationEncryptionAlgorithm' => 'getDestinationEncryptionAlgorithm',
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
        $this->container['keyId'] = isset($data['keyId']) ? $data['keyId'] : null;
        $this->container['sourceKeyId'] = isset($data['sourceKeyId']) ? $data['sourceKeyId'] : null;
        $this->container['sourceEncryptionAlgorithm'] = isset($data['sourceEncryptionAlgorithm']) ? $data['sourceEncryptionAlgorithm'] : null;
        $this->container['destinationEncryptionAlgorithm'] = isset($data['destinationEncryptionAlgorithm']) ? $data['destinationEncryptionAlgorithm'] : null;
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
    *  重新加密时使用的密钥ID
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
    * @param string|null $keyId 重新加密时使用的密钥ID
    *
    * @return $this
    */
    public function setKeyId($keyId)
    {
        $this->container['keyId'] = $keyId;
        return $this;
    }

    /**
    * Gets sourceKeyId
    *  加密原密文时使用的密钥ID
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
    * @param string|null $sourceKeyId 加密原密文时使用的密钥ID
    *
    * @return $this
    */
    public function setSourceKeyId($sourceKeyId)
    {
        $this->container['sourceKeyId'] = $sourceKeyId;
        return $this;
    }

    /**
    * Gets sourceEncryptionAlgorithm
    *  原密文加密时使用的加密算法
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
    * @param string|null $sourceEncryptionAlgorithm 原密文加密时使用的加密算法
    *
    * @return $this
    */
    public function setSourceEncryptionAlgorithm($sourceEncryptionAlgorithm)
    {
        $this->container['sourceEncryptionAlgorithm'] = $sourceEncryptionAlgorithm;
        return $this;
    }

    /**
    * Gets destinationEncryptionAlgorithm
    *  重新加密时使用的加密算法
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
    * @param string|null $destinationEncryptionAlgorithm 重新加密时使用的加密算法
    *
    * @return $this
    */
    public function setDestinationEncryptionAlgorithm($destinationEncryptionAlgorithm)
    {
        $this->container['destinationEncryptionAlgorithm'] = $destinationEncryptionAlgorithm;
        return $this;
    }

    /**
    * Gets cipherText
    *  重新加密后的密文
    *
    * @return string|null
    */
    public function getCipherText()
    {
        return $this->container['cipherText'];
    }

    /**
    * Sets cipherText
    *
    * @param string|null $cipherText 重新加密后的密文
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

