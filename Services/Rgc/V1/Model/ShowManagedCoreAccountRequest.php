<?php

namespace HuaweiCloud\SDK\Rgc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowManagedCoreAccountRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowManagedCoreAccountRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accountType  纳管账号类型。类型包括LOGGING，SECURITY和PRIMARY。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accountType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accountType  纳管账号类型。类型包括LOGGING，SECURITY和PRIMARY。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accountType' => null
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
    * accountType  纳管账号类型。类型包括LOGGING，SECURITY和PRIMARY。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accountType' => 'account_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accountType  纳管账号类型。类型包括LOGGING，SECURITY和PRIMARY。
    *
    * @var string[]
    */
    protected static $setters = [
            'accountType' => 'setAccountType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accountType  纳管账号类型。类型包括LOGGING，SECURITY和PRIMARY。
    *
    * @var string[]
    */
    protected static $getters = [
            'accountType' => 'getAccountType'
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
    const ACCOUNT_TYPE_LOGGING = 'LOGGING';
    const ACCOUNT_TYPE_SECURITY = 'SECURITY';
    const ACCOUNT_TYPE_PRIMARY = 'PRIMARY';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAccountTypeAllowableValues()
    {
        return [
            self::ACCOUNT_TYPE_LOGGING,
            self::ACCOUNT_TYPE_SECURITY,
            self::ACCOUNT_TYPE_PRIMARY,
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
        $this->container['accountType'] = isset($data['accountType']) ? $data['accountType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['accountType'] === null) {
            $invalidProperties[] = "'accountType' can't be null";
        }
            $allowedValues = $this->getAccountTypeAllowableValues();
                if (!is_null($this->container['accountType']) && !in_array($this->container['accountType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'accountType', must be one of '%s'",
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
    * Gets accountType
    *  纳管账号类型。类型包括LOGGING，SECURITY和PRIMARY。
    *
    * @return string
    */
    public function getAccountType()
    {
        return $this->container['accountType'];
    }

    /**
    * Sets accountType
    *
    * @param string $accountType 纳管账号类型。类型包括LOGGING，SECURITY和PRIMARY。
    *
    * @return $this
    */
    public function setAccountType($accountType)
    {
        $this->container['accountType'] = $accountType;
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

