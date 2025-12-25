<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EncryptCluster implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EncryptCluster';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * masterKeyId  **参数解释**： KMS密钥ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * masterKeyName  **参数解释**： KMS密钥名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * cryptAlgorithm  **参数解释**： 加密类型。国密、国际加密。 **约束限制**： 不涉及。 **取值范围**： - generalCipher：AES-CBC算法加密。 - SMcompatible：sm4算法加密。  **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'masterKeyId' => 'string',
            'masterKeyName' => 'string',
            'cryptAlgorithm' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * masterKeyId  **参数解释**： KMS密钥ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * masterKeyName  **参数解释**： KMS密钥名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * cryptAlgorithm  **参数解释**： 加密类型。国密、国际加密。 **约束限制**： 不涉及。 **取值范围**： - generalCipher：AES-CBC算法加密。 - SMcompatible：sm4算法加密。  **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'masterKeyId' => null,
        'masterKeyName' => null,
        'cryptAlgorithm' => null
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
    * masterKeyId  **参数解释**： KMS密钥ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * masterKeyName  **参数解释**： KMS密钥名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * cryptAlgorithm  **参数解释**： 加密类型。国密、国际加密。 **约束限制**： 不涉及。 **取值范围**： - generalCipher：AES-CBC算法加密。 - SMcompatible：sm4算法加密。  **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'masterKeyId' => 'master_key_id',
            'masterKeyName' => 'master_key_name',
            'cryptAlgorithm' => 'crypt_algorithm'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * masterKeyId  **参数解释**： KMS密钥ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * masterKeyName  **参数解释**： KMS密钥名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * cryptAlgorithm  **参数解释**： 加密类型。国密、国际加密。 **约束限制**： 不涉及。 **取值范围**： - generalCipher：AES-CBC算法加密。 - SMcompatible：sm4算法加密。  **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'masterKeyId' => 'setMasterKeyId',
            'masterKeyName' => 'setMasterKeyName',
            'cryptAlgorithm' => 'setCryptAlgorithm'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * masterKeyId  **参数解释**： KMS密钥ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * masterKeyName  **参数解释**： KMS密钥名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * cryptAlgorithm  **参数解释**： 加密类型。国密、国际加密。 **约束限制**： 不涉及。 **取值范围**： - generalCipher：AES-CBC算法加密。 - SMcompatible：sm4算法加密。  **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'masterKeyId' => 'getMasterKeyId',
            'masterKeyName' => 'getMasterKeyName',
            'cryptAlgorithm' => 'getCryptAlgorithm'
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
        $this->container['masterKeyId'] = isset($data['masterKeyId']) ? $data['masterKeyId'] : null;
        $this->container['masterKeyName'] = isset($data['masterKeyName']) ? $data['masterKeyName'] : null;
        $this->container['cryptAlgorithm'] = isset($data['cryptAlgorithm']) ? $data['cryptAlgorithm'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['masterKeyId'] === null) {
            $invalidProperties[] = "'masterKeyId' can't be null";
        }
        if ($this->container['cryptAlgorithm'] === null) {
            $invalidProperties[] = "'cryptAlgorithm' can't be null";
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
    * Gets masterKeyId
    *  **参数解释**： KMS密钥ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getMasterKeyId()
    {
        return $this->container['masterKeyId'];
    }

    /**
    * Sets masterKeyId
    *
    * @param string $masterKeyId **参数解释**： KMS密钥ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setMasterKeyId($masterKeyId)
    {
        $this->container['masterKeyId'] = $masterKeyId;
        return $this;
    }

    /**
    * Gets masterKeyName
    *  **参数解释**： KMS密钥名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getMasterKeyName()
    {
        return $this->container['masterKeyName'];
    }

    /**
    * Sets masterKeyName
    *
    * @param string|null $masterKeyName **参数解释**： KMS密钥名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setMasterKeyName($masterKeyName)
    {
        $this->container['masterKeyName'] = $masterKeyName;
        return $this;
    }

    /**
    * Gets cryptAlgorithm
    *  **参数解释**： 加密类型。国密、国际加密。 **约束限制**： 不涉及。 **取值范围**： - generalCipher：AES-CBC算法加密。 - SMcompatible：sm4算法加密。  **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getCryptAlgorithm()
    {
        return $this->container['cryptAlgorithm'];
    }

    /**
    * Sets cryptAlgorithm
    *
    * @param string $cryptAlgorithm **参数解释**： 加密类型。国密、国际加密。 **约束限制**： 不涉及。 **取值范围**： - generalCipher：AES-CBC算法加密。 - SMcompatible：sm4算法加密。  **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setCryptAlgorithm($cryptAlgorithm)
    {
        $this->container['cryptAlgorithm'] = $cryptAlgorithm;
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

