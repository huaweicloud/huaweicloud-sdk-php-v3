<?php

namespace HuaweiCloud\SDK\Kms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Recipient implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Recipient';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * attestationDocument  擎天机密计算证明文档
    * keyEncryptionAlgorithm  指定加密算法，仅支持RSAES_OAEP_SHA_256
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'attestationDocument' => 'string',
            'keyEncryptionAlgorithm' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * attestationDocument  擎天机密计算证明文档
    * keyEncryptionAlgorithm  指定加密算法，仅支持RSAES_OAEP_SHA_256
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'attestationDocument' => null,
        'keyEncryptionAlgorithm' => null
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
    * attestationDocument  擎天机密计算证明文档
    * keyEncryptionAlgorithm  指定加密算法，仅支持RSAES_OAEP_SHA_256
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'attestationDocument' => 'attestation_document',
            'keyEncryptionAlgorithm' => 'key_encryption_algorithm'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * attestationDocument  擎天机密计算证明文档
    * keyEncryptionAlgorithm  指定加密算法，仅支持RSAES_OAEP_SHA_256
    *
    * @var string[]
    */
    protected static $setters = [
            'attestationDocument' => 'setAttestationDocument',
            'keyEncryptionAlgorithm' => 'setKeyEncryptionAlgorithm'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * attestationDocument  擎天机密计算证明文档
    * keyEncryptionAlgorithm  指定加密算法，仅支持RSAES_OAEP_SHA_256
    *
    * @var string[]
    */
    protected static $getters = [
            'attestationDocument' => 'getAttestationDocument',
            'keyEncryptionAlgorithm' => 'getKeyEncryptionAlgorithm'
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
        $this->container['attestationDocument'] = isset($data['attestationDocument']) ? $data['attestationDocument'] : null;
        $this->container['keyEncryptionAlgorithm'] = isset($data['keyEncryptionAlgorithm']) ? $data['keyEncryptionAlgorithm'] : null;
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
    * Gets attestationDocument
    *  擎天机密计算证明文档
    *
    * @return string|null
    */
    public function getAttestationDocument()
    {
        return $this->container['attestationDocument'];
    }

    /**
    * Sets attestationDocument
    *
    * @param string|null $attestationDocument 擎天机密计算证明文档
    *
    * @return $this
    */
    public function setAttestationDocument($attestationDocument)
    {
        $this->container['attestationDocument'] = $attestationDocument;
        return $this;
    }

    /**
    * Gets keyEncryptionAlgorithm
    *  指定加密算法，仅支持RSAES_OAEP_SHA_256
    *
    * @return string|null
    */
    public function getKeyEncryptionAlgorithm()
    {
        return $this->container['keyEncryptionAlgorithm'];
    }

    /**
    * Sets keyEncryptionAlgorithm
    *
    * @param string|null $keyEncryptionAlgorithm 指定加密算法，仅支持RSAES_OAEP_SHA_256
    *
    * @return $this
    */
    public function setKeyEncryptionAlgorithm($keyEncryptionAlgorithm)
    {
        $this->container['keyEncryptionAlgorithm'] = $keyEncryptionAlgorithm;
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

