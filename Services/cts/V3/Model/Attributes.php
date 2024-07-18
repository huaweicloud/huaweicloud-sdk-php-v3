<?php

namespace HuaweiCloud\SDK\Cts\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Attributes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Attributes';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * createdAt  颁发临时安全凭证时的时间（timestamp，为标准UTC时间，毫秒级，13位数字）。
    * mfaAuthenticated  是否已经通过MFA身份认证。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'createdAt' => 'string',
            'mfaAuthenticated' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * createdAt  颁发临时安全凭证时的时间（timestamp，为标准UTC时间，毫秒级，13位数字）。
    * mfaAuthenticated  是否已经通过MFA身份认证。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'createdAt' => null,
        'mfaAuthenticated' => null
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
    * createdAt  颁发临时安全凭证时的时间（timestamp，为标准UTC时间，毫秒级，13位数字）。
    * mfaAuthenticated  是否已经通过MFA身份认证。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'createdAt' => 'created_at',
            'mfaAuthenticated' => 'mfa_authenticated'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * createdAt  颁发临时安全凭证时的时间（timestamp，为标准UTC时间，毫秒级，13位数字）。
    * mfaAuthenticated  是否已经通过MFA身份认证。
    *
    * @var string[]
    */
    protected static $setters = [
            'createdAt' => 'setCreatedAt',
            'mfaAuthenticated' => 'setMfaAuthenticated'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * createdAt  颁发临时安全凭证时的时间（timestamp，为标准UTC时间，毫秒级，13位数字）。
    * mfaAuthenticated  是否已经通过MFA身份认证。
    *
    * @var string[]
    */
    protected static $getters = [
            'createdAt' => 'getCreatedAt',
            'mfaAuthenticated' => 'getMfaAuthenticated'
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
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['mfaAuthenticated'] = isset($data['mfaAuthenticated']) ? $data['mfaAuthenticated'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['createdAt']) && (mb_strlen($this->container['createdAt']) > 13)) {
                $invalidProperties[] = "invalid value for 'createdAt', the character length must be smaller than or equal to 13.";
            }
            if (!is_null($this->container['createdAt']) && (mb_strlen($this->container['createdAt']) < 1)) {
                $invalidProperties[] = "invalid value for 'createdAt', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['mfaAuthenticated']) && (mb_strlen($this->container['mfaAuthenticated']) > 10)) {
                $invalidProperties[] = "invalid value for 'mfaAuthenticated', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['mfaAuthenticated']) && (mb_strlen($this->container['mfaAuthenticated']) < 1)) {
                $invalidProperties[] = "invalid value for 'mfaAuthenticated', the character length must be bigger than or equal to 1.";
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
    * Gets createdAt
    *  颁发临时安全凭证时的时间（timestamp，为标准UTC时间，毫秒级，13位数字）。
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt 颁发临时安全凭证时的时间（timestamp，为标准UTC时间，毫秒级，13位数字）。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets mfaAuthenticated
    *  是否已经通过MFA身份认证。
    *
    * @return string|null
    */
    public function getMfaAuthenticated()
    {
        return $this->container['mfaAuthenticated'];
    }

    /**
    * Sets mfaAuthenticated
    *
    * @param string|null $mfaAuthenticated 是否已经通过MFA身份认证。
    *
    * @return $this
    */
    public function setMfaAuthenticated($mfaAuthenticated)
    {
        $this->container['mfaAuthenticated'] = $mfaAuthenticated;
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

