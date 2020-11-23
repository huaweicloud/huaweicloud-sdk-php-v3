<?php

namespace HuaweiCloud\SDK\Iam\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PasswordPolicyResult implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PasswordPolicyResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'maximumConsecutiveIdenticalChars' => 'int',
            'maximumPasswordLength' => 'int',
            'minimumPasswordAge' => 'int',
            'minimumPasswordLength' => 'int',
            'numberOfRecentPasswordsDisallowed' => 'int',
            'passwordNotUsernameOrInvert' => 'bool',
            'passwordRequirements' => 'string',
            'passwordValidityPeriod' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'maximumConsecutiveIdenticalChars' => 'int32',
        'maximumPasswordLength' => 'int32',
        'minimumPasswordAge' => 'int32',
        'minimumPasswordLength' => 'int32',
        'numberOfRecentPasswordsDisallowed' => 'int32',
        'passwordNotUsernameOrInvert' => null,
        'passwordRequirements' => null,
        'passwordValidityPeriod' => 'int32'
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
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'maximumConsecutiveIdenticalChars' => 'maximum_consecutive_identical_chars',
            'maximumPasswordLength' => 'maximum_password_length',
            'minimumPasswordAge' => 'minimum_password_age',
            'minimumPasswordLength' => 'minimum_password_length',
            'numberOfRecentPasswordsDisallowed' => 'number_of_recent_passwords_disallowed',
            'passwordNotUsernameOrInvert' => 'password_not_username_or_invert',
            'passwordRequirements' => 'password_requirements',
            'passwordValidityPeriod' => 'password_validity_period'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @var string[]
    */
    protected static $setters = [
            'maximumConsecutiveIdenticalChars' => 'setMaximumConsecutiveIdenticalChars',
            'maximumPasswordLength' => 'setMaximumPasswordLength',
            'minimumPasswordAge' => 'setMinimumPasswordAge',
            'minimumPasswordLength' => 'setMinimumPasswordLength',
            'numberOfRecentPasswordsDisallowed' => 'setNumberOfRecentPasswordsDisallowed',
            'passwordNotUsernameOrInvert' => 'setPasswordNotUsernameOrInvert',
            'passwordRequirements' => 'setPasswordRequirements',
            'passwordValidityPeriod' => 'setPasswordValidityPeriod'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @var string[]
    */
    protected static $getters = [
            'maximumConsecutiveIdenticalChars' => 'getMaximumConsecutiveIdenticalChars',
            'maximumPasswordLength' => 'getMaximumPasswordLength',
            'minimumPasswordAge' => 'getMinimumPasswordAge',
            'minimumPasswordLength' => 'getMinimumPasswordLength',
            'numberOfRecentPasswordsDisallowed' => 'getNumberOfRecentPasswordsDisallowed',
            'passwordNotUsernameOrInvert' => 'getPasswordNotUsernameOrInvert',
            'passwordRequirements' => 'getPasswordRequirements',
            'passwordValidityPeriod' => 'getPasswordValidityPeriod'
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
        $this->container['maximumConsecutiveIdenticalChars'] = isset($data['maximumConsecutiveIdenticalChars']) ? $data['maximumConsecutiveIdenticalChars'] : null;
        $this->container['maximumPasswordLength'] = isset($data['maximumPasswordLength']) ? $data['maximumPasswordLength'] : null;
        $this->container['minimumPasswordAge'] = isset($data['minimumPasswordAge']) ? $data['minimumPasswordAge'] : null;
        $this->container['minimumPasswordLength'] = isset($data['minimumPasswordLength']) ? $data['minimumPasswordLength'] : null;
        $this->container['numberOfRecentPasswordsDisallowed'] = isset($data['numberOfRecentPasswordsDisallowed']) ? $data['numberOfRecentPasswordsDisallowed'] : null;
        $this->container['passwordNotUsernameOrInvert'] = isset($data['passwordNotUsernameOrInvert']) ? $data['passwordNotUsernameOrInvert'] : null;
        $this->container['passwordRequirements'] = isset($data['passwordRequirements']) ? $data['passwordRequirements'] : null;
        $this->container['passwordValidityPeriod'] = isset($data['passwordValidityPeriod']) ? $data['passwordValidityPeriod'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['maximumConsecutiveIdenticalChars'] === null) {
            $invalidProperties[] = "'maximumConsecutiveIdenticalChars' can't be null";
        }
        if ($this->container['maximumPasswordLength'] === null) {
            $invalidProperties[] = "'maximumPasswordLength' can't be null";
        }
        if ($this->container['minimumPasswordAge'] === null) {
            $invalidProperties[] = "'minimumPasswordAge' can't be null";
        }
        if ($this->container['minimumPasswordLength'] === null) {
            $invalidProperties[] = "'minimumPasswordLength' can't be null";
        }
        if ($this->container['numberOfRecentPasswordsDisallowed'] === null) {
            $invalidProperties[] = "'numberOfRecentPasswordsDisallowed' can't be null";
        }
        if ($this->container['passwordNotUsernameOrInvert'] === null) {
            $invalidProperties[] = "'passwordNotUsernameOrInvert' can't be null";
        }
        if ($this->container['passwordRequirements'] === null) {
            $invalidProperties[] = "'passwordRequirements' can't be null";
        }
        if ($this->container['passwordValidityPeriod'] === null) {
            $invalidProperties[] = "'passwordValidityPeriod' can't be null";
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
    * Gets maximumConsecutiveIdenticalChars
    *
    * @return int
    */
    public function getMaximumConsecutiveIdenticalChars()
    {
        return $this->container['maximumConsecutiveIdenticalChars'];
    }

    /**
    * Sets maximumConsecutiveIdenticalChars
    *
    * @param int $maximumConsecutiveIdenticalChars 同一字符连续出现的最大次数。
    *
    * @return $this
    */
    public function setMaximumConsecutiveIdenticalChars($maximumConsecutiveIdenticalChars)
    {
        $this->container['maximumConsecutiveIdenticalChars'] = $maximumConsecutiveIdenticalChars;
        return $this;
    }

    /**
    * Gets maximumPasswordLength
    *
    * @return int
    */
    public function getMaximumPasswordLength()
    {
        return $this->container['maximumPasswordLength'];
    }

    /**
    * Sets maximumPasswordLength
    *
    * @param int $maximumPasswordLength 密码最大字符数。
    *
    * @return $this
    */
    public function setMaximumPasswordLength($maximumPasswordLength)
    {
        $this->container['maximumPasswordLength'] = $maximumPasswordLength;
        return $this;
    }

    /**
    * Gets minimumPasswordAge
    *
    * @return int
    */
    public function getMinimumPasswordAge()
    {
        return $this->container['minimumPasswordAge'];
    }

    /**
    * Sets minimumPasswordAge
    *
    * @param int $minimumPasswordAge 密码最短使用时间（分钟）。
    *
    * @return $this
    */
    public function setMinimumPasswordAge($minimumPasswordAge)
    {
        $this->container['minimumPasswordAge'] = $minimumPasswordAge;
        return $this;
    }

    /**
    * Gets minimumPasswordLength
    *
    * @return int
    */
    public function getMinimumPasswordLength()
    {
        return $this->container['minimumPasswordLength'];
    }

    /**
    * Sets minimumPasswordLength
    *
    * @param int $minimumPasswordLength 密码最小字符数。
    *
    * @return $this
    */
    public function setMinimumPasswordLength($minimumPasswordLength)
    {
        $this->container['minimumPasswordLength'] = $minimumPasswordLength;
        return $this;
    }

    /**
    * Gets numberOfRecentPasswordsDisallowed
    *
    * @return int
    */
    public function getNumberOfRecentPasswordsDisallowed()
    {
        return $this->container['numberOfRecentPasswordsDisallowed'];
    }

    /**
    * Sets numberOfRecentPasswordsDisallowed
    *
    * @param int $numberOfRecentPasswordsDisallowed 密码不能与历史密码重复次数。
    *
    * @return $this
    */
    public function setNumberOfRecentPasswordsDisallowed($numberOfRecentPasswordsDisallowed)
    {
        $this->container['numberOfRecentPasswordsDisallowed'] = $numberOfRecentPasswordsDisallowed;
        return $this;
    }

    /**
    * Gets passwordNotUsernameOrInvert
    *
    * @return bool
    */
    public function getPasswordNotUsernameOrInvert()
    {
        return $this->container['passwordNotUsernameOrInvert'];
    }

    /**
    * Sets passwordNotUsernameOrInvert
    *
    * @param bool $passwordNotUsernameOrInvert 密码是否可以是用户名或用户名的反序。
    *
    * @return $this
    */
    public function setPasswordNotUsernameOrInvert($passwordNotUsernameOrInvert)
    {
        $this->container['passwordNotUsernameOrInvert'] = $passwordNotUsernameOrInvert;
        return $this;
    }

    /**
    * Gets passwordRequirements
    *
    * @return string
    */
    public function getPasswordRequirements()
    {
        return $this->container['passwordRequirements'];
    }

    /**
    * Sets passwordRequirements
    *
    * @param string $passwordRequirements 设置密码必须包含的字符要求。
    *
    * @return $this
    */
    public function setPasswordRequirements($passwordRequirements)
    {
        $this->container['passwordRequirements'] = $passwordRequirements;
        return $this;
    }

    /**
    * Gets passwordValidityPeriod
    *
    * @return int
    */
    public function getPasswordValidityPeriod()
    {
        return $this->container['passwordValidityPeriod'];
    }

    /**
    * Sets passwordValidityPeriod
    *
    * @param int $passwordValidityPeriod 密码有效期（天）。
    *
    * @return $this
    */
    public function setPasswordValidityPeriod($passwordValidityPeriod)
    {
        $this->container['passwordValidityPeriod'] = $passwordValidityPeriod;
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

