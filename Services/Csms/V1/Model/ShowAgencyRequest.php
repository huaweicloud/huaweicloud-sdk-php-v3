<?php

namespace HuaweiCloud\SDK\Csms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAgencyRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAgencyRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * secretType  凭据类型。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'secretType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * secretType  凭据类型。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'secretType' => null
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
    * secretType  凭据类型。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'secretType' => 'secret_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * secretType  凭据类型。
    *
    * @var string[]
    */
    protected static $setters = [
            'secretType' => 'setSecretType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * secretType  凭据类型。
    *
    * @var string[]
    */
    protected static $getters = [
            'secretType' => 'getSecretType'
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
    const SECRET_TYPE_RDS_FG = 'RDS-FG';
    const SECRET_TYPE_GAUSS_DB_FG = 'GaussDB-FG';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSecretTypeAllowableValues()
    {
        return [
            self::SECRET_TYPE_RDS_FG,
            self::SECRET_TYPE_GAUSS_DB_FG,
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
        $this->container['secretType'] = isset($data['secretType']) ? $data['secretType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['secretType'] === null) {
            $invalidProperties[] = "'secretType' can't be null";
        }
            $allowedValues = $this->getSecretTypeAllowableValues();
                if (!is_null($this->container['secretType']) && !in_array($this->container['secretType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'secretType', must be one of '%s'",
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
    * Gets secretType
    *  凭据类型。
    *
    * @return string
    */
    public function getSecretType()
    {
        return $this->container['secretType'];
    }

    /**
    * Sets secretType
    *
    * @param string $secretType 凭据类型。
    *
    * @return $this
    */
    public function setSecretType($secretType)
    {
        $this->container['secretType'] = $secretType;
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

