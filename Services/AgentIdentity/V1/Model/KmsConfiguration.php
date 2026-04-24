<?php

namespace HuaweiCloud\SDK\AgentIdentity\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class KmsConfiguration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'KmsConfiguration';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * keyType  keyType
    * kmsKeyId  The identifier of the KMS key used for the token vault.
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'keyType' => '\HuaweiCloud\SDK\AgentIdentity\V1\Model\KmsKeyType',
            'kmsKeyId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * keyType  keyType
    * kmsKeyId  The identifier of the KMS key used for the token vault.
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'keyType' => null,
        'kmsKeyId' => null
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
    * keyType  keyType
    * kmsKeyId  The identifier of the KMS key used for the token vault.
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'keyType' => 'key_type',
            'kmsKeyId' => 'kms_key_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * keyType  keyType
    * kmsKeyId  The identifier of the KMS key used for the token vault.
    *
    * @var string[]
    */
    protected static $setters = [
            'keyType' => 'setKeyType',
            'kmsKeyId' => 'setKmsKeyId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * keyType  keyType
    * kmsKeyId  The identifier of the KMS key used for the token vault.
    *
    * @var string[]
    */
    protected static $getters = [
            'keyType' => 'getKeyType',
            'kmsKeyId' => 'getKmsKeyId'
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
        $this->container['keyType'] = isset($data['keyType']) ? $data['keyType'] : null;
        $this->container['kmsKeyId'] = isset($data['kmsKeyId']) ? $data['kmsKeyId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['keyType'] === null) {
            $invalidProperties[] = "'keyType' can't be null";
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
    * Gets keyType
    *  keyType
    *
    * @return \HuaweiCloud\SDK\AgentIdentity\V1\Model\KmsKeyType
    */
    public function getKeyType()
    {
        return $this->container['keyType'];
    }

    /**
    * Sets keyType
    *
    * @param \HuaweiCloud\SDK\AgentIdentity\V1\Model\KmsKeyType $keyType keyType
    *
    * @return $this
    */
    public function setKeyType($keyType)
    {
        $this->container['keyType'] = $keyType;
        return $this;
    }

    /**
    * Gets kmsKeyId
    *  The identifier of the KMS key used for the token vault.
    *
    * @return string|null
    */
    public function getKmsKeyId()
    {
        return $this->container['kmsKeyId'];
    }

    /**
    * Sets kmsKeyId
    *
    * @param string|null $kmsKeyId The identifier of the KMS key used for the token vault.
    *
    * @return $this
    */
    public function setKmsKeyId($kmsKeyId)
    {
        $this->container['kmsKeyId'] = $kmsKeyId;
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

