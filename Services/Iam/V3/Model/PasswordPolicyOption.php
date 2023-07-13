<?php

namespace HuaweiCloud\SDK\Iam\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PasswordPolicyOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PasswordPolicyOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * maximumConsecutiveIdenticalChars  同一字符连续出现的最大次数，取值范围[0,32]。
    * minimumPasswordAge  密码最短使用时间(分钟)，取值范围[0,1440]。
    * minimumPasswordLength  密码最小字符数，取值范围[6,32]。
    * numberOfRecentPasswordsDisallowed  密码不能与历史密码重复次数，取值范围[0,10]。
    * passwordNotUsernameOrInvert  密码是否可以是用户名或用户名的反序。
    * passwordValidityPeriod  密码有效期（天），取值范围[0,180]，设置0表示关闭该策略。
    * passwordCharCombination  至少包含字符种类的个数，取值区间[2,4]。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'maximumConsecutiveIdenticalChars' => 'int',
            'minimumPasswordAge' => 'int',
            'minimumPasswordLength' => 'int',
            'numberOfRecentPasswordsDisallowed' => 'int',
            'passwordNotUsernameOrInvert' => 'bool',
            'passwordValidityPeriod' => 'int',
            'passwordCharCombination' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * maximumConsecutiveIdenticalChars  同一字符连续出现的最大次数，取值范围[0,32]。
    * minimumPasswordAge  密码最短使用时间(分钟)，取值范围[0,1440]。
    * minimumPasswordLength  密码最小字符数，取值范围[6,32]。
    * numberOfRecentPasswordsDisallowed  密码不能与历史密码重复次数，取值范围[0,10]。
    * passwordNotUsernameOrInvert  密码是否可以是用户名或用户名的反序。
    * passwordValidityPeriod  密码有效期（天），取值范围[0,180]，设置0表示关闭该策略。
    * passwordCharCombination  至少包含字符种类的个数，取值区间[2,4]。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'maximumConsecutiveIdenticalChars' => 'int32',
        'minimumPasswordAge' => 'int32',
        'minimumPasswordLength' => 'int32',
        'numberOfRecentPasswordsDisallowed' => 'int32',
        'passwordNotUsernameOrInvert' => null,
        'passwordValidityPeriod' => 'int32',
        'passwordCharCombination' => 'int32'
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
    * maximumConsecutiveIdenticalChars  同一字符连续出现的最大次数，取值范围[0,32]。
    * minimumPasswordAge  密码最短使用时间(分钟)，取值范围[0,1440]。
    * minimumPasswordLength  密码最小字符数，取值范围[6,32]。
    * numberOfRecentPasswordsDisallowed  密码不能与历史密码重复次数，取值范围[0,10]。
    * passwordNotUsernameOrInvert  密码是否可以是用户名或用户名的反序。
    * passwordValidityPeriod  密码有效期（天），取值范围[0,180]，设置0表示关闭该策略。
    * passwordCharCombination  至少包含字符种类的个数，取值区间[2,4]。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'maximumConsecutiveIdenticalChars' => 'maximum_consecutive_identical_chars',
            'minimumPasswordAge' => 'minimum_password_age',
            'minimumPasswordLength' => 'minimum_password_length',
            'numberOfRecentPasswordsDisallowed' => 'number_of_recent_passwords_disallowed',
            'passwordNotUsernameOrInvert' => 'password_not_username_or_invert',
            'passwordValidityPeriod' => 'password_validity_period',
            'passwordCharCombination' => 'password_char_combination'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * maximumConsecutiveIdenticalChars  同一字符连续出现的最大次数，取值范围[0,32]。
    * minimumPasswordAge  密码最短使用时间(分钟)，取值范围[0,1440]。
    * minimumPasswordLength  密码最小字符数，取值范围[6,32]。
    * numberOfRecentPasswordsDisallowed  密码不能与历史密码重复次数，取值范围[0,10]。
    * passwordNotUsernameOrInvert  密码是否可以是用户名或用户名的反序。
    * passwordValidityPeriod  密码有效期（天），取值范围[0,180]，设置0表示关闭该策略。
    * passwordCharCombination  至少包含字符种类的个数，取值区间[2,4]。
    *
    * @var string[]
    */
    protected static $setters = [
            'maximumConsecutiveIdenticalChars' => 'setMaximumConsecutiveIdenticalChars',
            'minimumPasswordAge' => 'setMinimumPasswordAge',
            'minimumPasswordLength' => 'setMinimumPasswordLength',
            'numberOfRecentPasswordsDisallowed' => 'setNumberOfRecentPasswordsDisallowed',
            'passwordNotUsernameOrInvert' => 'setPasswordNotUsernameOrInvert',
            'passwordValidityPeriod' => 'setPasswordValidityPeriod',
            'passwordCharCombination' => 'setPasswordCharCombination'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * maximumConsecutiveIdenticalChars  同一字符连续出现的最大次数，取值范围[0,32]。
    * minimumPasswordAge  密码最短使用时间(分钟)，取值范围[0,1440]。
    * minimumPasswordLength  密码最小字符数，取值范围[6,32]。
    * numberOfRecentPasswordsDisallowed  密码不能与历史密码重复次数，取值范围[0,10]。
    * passwordNotUsernameOrInvert  密码是否可以是用户名或用户名的反序。
    * passwordValidityPeriod  密码有效期（天），取值范围[0,180]，设置0表示关闭该策略。
    * passwordCharCombination  至少包含字符种类的个数，取值区间[2,4]。
    *
    * @var string[]
    */
    protected static $getters = [
            'maximumConsecutiveIdenticalChars' => 'getMaximumConsecutiveIdenticalChars',
            'minimumPasswordAge' => 'getMinimumPasswordAge',
            'minimumPasswordLength' => 'getMinimumPasswordLength',
            'numberOfRecentPasswordsDisallowed' => 'getNumberOfRecentPasswordsDisallowed',
            'passwordNotUsernameOrInvert' => 'getPasswordNotUsernameOrInvert',
            'passwordValidityPeriod' => 'getPasswordValidityPeriod',
            'passwordCharCombination' => 'getPasswordCharCombination'
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
        $this->container['minimumPasswordAge'] = isset($data['minimumPasswordAge']) ? $data['minimumPasswordAge'] : null;
        $this->container['minimumPasswordLength'] = isset($data['minimumPasswordLength']) ? $data['minimumPasswordLength'] : null;
        $this->container['numberOfRecentPasswordsDisallowed'] = isset($data['numberOfRecentPasswordsDisallowed']) ? $data['numberOfRecentPasswordsDisallowed'] : null;
        $this->container['passwordNotUsernameOrInvert'] = isset($data['passwordNotUsernameOrInvert']) ? $data['passwordNotUsernameOrInvert'] : null;
        $this->container['passwordValidityPeriod'] = isset($data['passwordValidityPeriod']) ? $data['passwordValidityPeriod'] : null;
        $this->container['passwordCharCombination'] = isset($data['passwordCharCombination']) ? $data['passwordCharCombination'] : 2;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['passwordCharCombination']) && ($this->container['passwordCharCombination'] > 4)) {
                $invalidProperties[] = "invalid value for 'passwordCharCombination', must be smaller than or equal to 4.";
            }
            if (!is_null($this->container['passwordCharCombination']) && ($this->container['passwordCharCombination'] < 2)) {
                $invalidProperties[] = "invalid value for 'passwordCharCombination', must be bigger than or equal to 2.";
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
    *  同一字符连续出现的最大次数，取值范围[0,32]。
    *
    * @return int|null
    */
    public function getMaximumConsecutiveIdenticalChars()
    {
        return $this->container['maximumConsecutiveIdenticalChars'];
    }

    /**
    * Sets maximumConsecutiveIdenticalChars
    *
    * @param int|null $maximumConsecutiveIdenticalChars 同一字符连续出现的最大次数，取值范围[0,32]。
    *
    * @return $this
    */
    public function setMaximumConsecutiveIdenticalChars($maximumConsecutiveIdenticalChars)
    {
        $this->container['maximumConsecutiveIdenticalChars'] = $maximumConsecutiveIdenticalChars;
        return $this;
    }

    /**
    * Gets minimumPasswordAge
    *  密码最短使用时间(分钟)，取值范围[0,1440]。
    *
    * @return int|null
    */
    public function getMinimumPasswordAge()
    {
        return $this->container['minimumPasswordAge'];
    }

    /**
    * Sets minimumPasswordAge
    *
    * @param int|null $minimumPasswordAge 密码最短使用时间(分钟)，取值范围[0,1440]。
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
    *  密码最小字符数，取值范围[6,32]。
    *
    * @return int|null
    */
    public function getMinimumPasswordLength()
    {
        return $this->container['minimumPasswordLength'];
    }

    /**
    * Sets minimumPasswordLength
    *
    * @param int|null $minimumPasswordLength 密码最小字符数，取值范围[6,32]。
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
    *  密码不能与历史密码重复次数，取值范围[0,10]。
    *
    * @return int|null
    */
    public function getNumberOfRecentPasswordsDisallowed()
    {
        return $this->container['numberOfRecentPasswordsDisallowed'];
    }

    /**
    * Sets numberOfRecentPasswordsDisallowed
    *
    * @param int|null $numberOfRecentPasswordsDisallowed 密码不能与历史密码重复次数，取值范围[0,10]。
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
    *  密码是否可以是用户名或用户名的反序。
    *
    * @return bool|null
    */
    public function getPasswordNotUsernameOrInvert()
    {
        return $this->container['passwordNotUsernameOrInvert'];
    }

    /**
    * Sets passwordNotUsernameOrInvert
    *
    * @param bool|null $passwordNotUsernameOrInvert 密码是否可以是用户名或用户名的反序。
    *
    * @return $this
    */
    public function setPasswordNotUsernameOrInvert($passwordNotUsernameOrInvert)
    {
        $this->container['passwordNotUsernameOrInvert'] = $passwordNotUsernameOrInvert;
        return $this;
    }

    /**
    * Gets passwordValidityPeriod
    *  密码有效期（天），取值范围[0,180]，设置0表示关闭该策略。
    *
    * @return int|null
    */
    public function getPasswordValidityPeriod()
    {
        return $this->container['passwordValidityPeriod'];
    }

    /**
    * Sets passwordValidityPeriod
    *
    * @param int|null $passwordValidityPeriod 密码有效期（天），取值范围[0,180]，设置0表示关闭该策略。
    *
    * @return $this
    */
    public function setPasswordValidityPeriod($passwordValidityPeriod)
    {
        $this->container['passwordValidityPeriod'] = $passwordValidityPeriod;
        return $this;
    }

    /**
    * Gets passwordCharCombination
    *  至少包含字符种类的个数，取值区间[2,4]。
    *
    * @return int|null
    */
    public function getPasswordCharCombination()
    {
        return $this->container['passwordCharCombination'];
    }

    /**
    * Sets passwordCharCombination
    *
    * @param int|null $passwordCharCombination 至少包含字符种类的个数，取值区间[2,4]。
    *
    * @return $this
    */
    public function setPasswordCharCombination($passwordCharCombination)
    {
        $this->container['passwordCharCombination'] = $passwordCharCombination;
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

