<?php

namespace HuaweiCloud\SDK\Kps\v3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Encryption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Encryption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  取值范围：“kms”或“default”。 - “default”为默认加密方式，适用于没有kms服务的局点。 - “kms”为采用kms服务加密方式。 若局点没有kms服务，请填“default”。
    * kmsKeyName  kms密钥的名称。  - 若“type”为“kms”，则必须填入kms服务密钥名称。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'kmsKeyName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  取值范围：“kms”或“default”。 - “default”为默认加密方式，适用于没有kms服务的局点。 - “kms”为采用kms服务加密方式。 若局点没有kms服务，请填“default”。
    * kmsKeyName  kms密钥的名称。  - 若“type”为“kms”，则必须填入kms服务密钥名称。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'kmsKeyName' => null
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
    * type  取值范围：“kms”或“default”。 - “default”为默认加密方式，适用于没有kms服务的局点。 - “kms”为采用kms服务加密方式。 若局点没有kms服务，请填“default”。
    * kmsKeyName  kms密钥的名称。  - 若“type”为“kms”，则必须填入kms服务密钥名称。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'kmsKeyName' => 'kms_key_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  取值范围：“kms”或“default”。 - “default”为默认加密方式，适用于没有kms服务的局点。 - “kms”为采用kms服务加密方式。 若局点没有kms服务，请填“default”。
    * kmsKeyName  kms密钥的名称。  - 若“type”为“kms”，则必须填入kms服务密钥名称。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'kmsKeyName' => 'setKmsKeyName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  取值范围：“kms”或“default”。 - “default”为默认加密方式，适用于没有kms服务的局点。 - “kms”为采用kms服务加密方式。 若局点没有kms服务，请填“default”。
    * kmsKeyName  kms密钥的名称。  - 若“type”为“kms”，则必须填入kms服务密钥名称。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'kmsKeyName' => 'getKmsKeyName'
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
    const TYPE__DEFAULT = 'default';
    const TYPE_KMS = 'kms';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE__DEFAULT,
            self::TYPE_KMS,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['kmsKeyName'] = isset($data['kmsKeyName']) ? $data['kmsKeyName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['kmsKeyName'] === null) {
            $invalidProperties[] = "'kmsKeyName' can't be null";
        }
            if ((mb_strlen($this->container['kmsKeyName']) > 255)) {
                $invalidProperties[] = "invalid value for 'kmsKeyName', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['kmsKeyName']) < 0)) {
                $invalidProperties[] = "invalid value for 'kmsKeyName', the character length must be bigger than or equal to 0.";
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
    * Gets type
    *  取值范围：“kms”或“default”。 - “default”为默认加密方式，适用于没有kms服务的局点。 - “kms”为采用kms服务加密方式。 若局点没有kms服务，请填“default”。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 取值范围：“kms”或“default”。 - “default”为默认加密方式，适用于没有kms服务的局点。 - “kms”为采用kms服务加密方式。 若局点没有kms服务，请填“default”。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets kmsKeyName
    *  kms密钥的名称。  - 若“type”为“kms”，则必须填入kms服务密钥名称。
    *
    * @return string
    */
    public function getKmsKeyName()
    {
        return $this->container['kmsKeyName'];
    }

    /**
    * Sets kmsKeyName
    *
    * @param string $kmsKeyName kms密钥的名称。  - 若“type”为“kms”，则必须填入kms服务密钥名称。
    *
    * @return $this
    */
    public function setKmsKeyName($kmsKeyName)
    {
        $this->container['kmsKeyName'] = $kmsKeyName;
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

