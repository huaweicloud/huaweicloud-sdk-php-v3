<?php

namespace HuaweiCloud\SDK\IdentityCenterStore\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PasswordPolicyDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PasswordPolicyDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * minimumPasswordLength  最小密码长度
    * requireLowercaseCharacters  是否要求小写字母
    * requireNumbers  是否要求数字
    * requireSymbols  是否要求特殊字符
    * requireUppercaseCharacters  是否要求大写字母
    * maxPasswordAge  密码有效期
    * passwordReusePrevention  密码重复使用次数，默认只支持1
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'minimumPasswordLength' => 'int',
            'requireLowercaseCharacters' => 'bool',
            'requireNumbers' => 'bool',
            'requireSymbols' => 'bool',
            'requireUppercaseCharacters' => 'bool',
            'maxPasswordAge' => 'int',
            'passwordReusePrevention' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * minimumPasswordLength  最小密码长度
    * requireLowercaseCharacters  是否要求小写字母
    * requireNumbers  是否要求数字
    * requireSymbols  是否要求特殊字符
    * requireUppercaseCharacters  是否要求大写字母
    * maxPasswordAge  密码有效期
    * passwordReusePrevention  密码重复使用次数，默认只支持1
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'minimumPasswordLength' => 'int32',
        'requireLowercaseCharacters' => null,
        'requireNumbers' => null,
        'requireSymbols' => null,
        'requireUppercaseCharacters' => null,
        'maxPasswordAge' => 'int32',
        'passwordReusePrevention' => 'int32'
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
    * minimumPasswordLength  最小密码长度
    * requireLowercaseCharacters  是否要求小写字母
    * requireNumbers  是否要求数字
    * requireSymbols  是否要求特殊字符
    * requireUppercaseCharacters  是否要求大写字母
    * maxPasswordAge  密码有效期
    * passwordReusePrevention  密码重复使用次数，默认只支持1
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'minimumPasswordLength' => 'minimum_password_length',
            'requireLowercaseCharacters' => 'require_lowercase_characters',
            'requireNumbers' => 'require_numbers',
            'requireSymbols' => 'require_symbols',
            'requireUppercaseCharacters' => 'require_uppercase_characters',
            'maxPasswordAge' => 'max_password_age',
            'passwordReusePrevention' => 'password_reuse_prevention'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * minimumPasswordLength  最小密码长度
    * requireLowercaseCharacters  是否要求小写字母
    * requireNumbers  是否要求数字
    * requireSymbols  是否要求特殊字符
    * requireUppercaseCharacters  是否要求大写字母
    * maxPasswordAge  密码有效期
    * passwordReusePrevention  密码重复使用次数，默认只支持1
    *
    * @var string[]
    */
    protected static $setters = [
            'minimumPasswordLength' => 'setMinimumPasswordLength',
            'requireLowercaseCharacters' => 'setRequireLowercaseCharacters',
            'requireNumbers' => 'setRequireNumbers',
            'requireSymbols' => 'setRequireSymbols',
            'requireUppercaseCharacters' => 'setRequireUppercaseCharacters',
            'maxPasswordAge' => 'setMaxPasswordAge',
            'passwordReusePrevention' => 'setPasswordReusePrevention'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * minimumPasswordLength  最小密码长度
    * requireLowercaseCharacters  是否要求小写字母
    * requireNumbers  是否要求数字
    * requireSymbols  是否要求特殊字符
    * requireUppercaseCharacters  是否要求大写字母
    * maxPasswordAge  密码有效期
    * passwordReusePrevention  密码重复使用次数，默认只支持1
    *
    * @var string[]
    */
    protected static $getters = [
            'minimumPasswordLength' => 'getMinimumPasswordLength',
            'requireLowercaseCharacters' => 'getRequireLowercaseCharacters',
            'requireNumbers' => 'getRequireNumbers',
            'requireSymbols' => 'getRequireSymbols',
            'requireUppercaseCharacters' => 'getRequireUppercaseCharacters',
            'maxPasswordAge' => 'getMaxPasswordAge',
            'passwordReusePrevention' => 'getPasswordReusePrevention'
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
        $this->container['minimumPasswordLength'] = isset($data['minimumPasswordLength']) ? $data['minimumPasswordLength'] : null;
        $this->container['requireLowercaseCharacters'] = isset($data['requireLowercaseCharacters']) ? $data['requireLowercaseCharacters'] : null;
        $this->container['requireNumbers'] = isset($data['requireNumbers']) ? $data['requireNumbers'] : null;
        $this->container['requireSymbols'] = isset($data['requireSymbols']) ? $data['requireSymbols'] : null;
        $this->container['requireUppercaseCharacters'] = isset($data['requireUppercaseCharacters']) ? $data['requireUppercaseCharacters'] : null;
        $this->container['maxPasswordAge'] = isset($data['maxPasswordAge']) ? $data['maxPasswordAge'] : null;
        $this->container['passwordReusePrevention'] = isset($data['passwordReusePrevention']) ? $data['passwordReusePrevention'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['minimumPasswordLength']) && ($this->container['minimumPasswordLength'] > 128)) {
                $invalidProperties[] = "invalid value for 'minimumPasswordLength', must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['minimumPasswordLength']) && ($this->container['minimumPasswordLength'] < 8)) {
                $invalidProperties[] = "invalid value for 'minimumPasswordLength', must be bigger than or equal to 8.";
            }
            if (!is_null($this->container['maxPasswordAge']) && ($this->container['maxPasswordAge'] > 1095)) {
                $invalidProperties[] = "invalid value for 'maxPasswordAge', must be smaller than or equal to 1095.";
            }
            if (!is_null($this->container['maxPasswordAge']) && ($this->container['maxPasswordAge'] < 1)) {
                $invalidProperties[] = "invalid value for 'maxPasswordAge', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['passwordReusePrevention']) && ($this->container['passwordReusePrevention'] > 1)) {
                $invalidProperties[] = "invalid value for 'passwordReusePrevention', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['passwordReusePrevention']) && ($this->container['passwordReusePrevention'] < 1)) {
                $invalidProperties[] = "invalid value for 'passwordReusePrevention', must be bigger than or equal to 1.";
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
    * Gets minimumPasswordLength
    *  最小密码长度
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
    * @param int|null $minimumPasswordLength 最小密码长度
    *
    * @return $this
    */
    public function setMinimumPasswordLength($minimumPasswordLength)
    {
        $this->container['minimumPasswordLength'] = $minimumPasswordLength;
        return $this;
    }

    /**
    * Gets requireLowercaseCharacters
    *  是否要求小写字母
    *
    * @return bool|null
    */
    public function getRequireLowercaseCharacters()
    {
        return $this->container['requireLowercaseCharacters'];
    }

    /**
    * Sets requireLowercaseCharacters
    *
    * @param bool|null $requireLowercaseCharacters 是否要求小写字母
    *
    * @return $this
    */
    public function setRequireLowercaseCharacters($requireLowercaseCharacters)
    {
        $this->container['requireLowercaseCharacters'] = $requireLowercaseCharacters;
        return $this;
    }

    /**
    * Gets requireNumbers
    *  是否要求数字
    *
    * @return bool|null
    */
    public function getRequireNumbers()
    {
        return $this->container['requireNumbers'];
    }

    /**
    * Sets requireNumbers
    *
    * @param bool|null $requireNumbers 是否要求数字
    *
    * @return $this
    */
    public function setRequireNumbers($requireNumbers)
    {
        $this->container['requireNumbers'] = $requireNumbers;
        return $this;
    }

    /**
    * Gets requireSymbols
    *  是否要求特殊字符
    *
    * @return bool|null
    */
    public function getRequireSymbols()
    {
        return $this->container['requireSymbols'];
    }

    /**
    * Sets requireSymbols
    *
    * @param bool|null $requireSymbols 是否要求特殊字符
    *
    * @return $this
    */
    public function setRequireSymbols($requireSymbols)
    {
        $this->container['requireSymbols'] = $requireSymbols;
        return $this;
    }

    /**
    * Gets requireUppercaseCharacters
    *  是否要求大写字母
    *
    * @return bool|null
    */
    public function getRequireUppercaseCharacters()
    {
        return $this->container['requireUppercaseCharacters'];
    }

    /**
    * Sets requireUppercaseCharacters
    *
    * @param bool|null $requireUppercaseCharacters 是否要求大写字母
    *
    * @return $this
    */
    public function setRequireUppercaseCharacters($requireUppercaseCharacters)
    {
        $this->container['requireUppercaseCharacters'] = $requireUppercaseCharacters;
        return $this;
    }

    /**
    * Gets maxPasswordAge
    *  密码有效期
    *
    * @return int|null
    */
    public function getMaxPasswordAge()
    {
        return $this->container['maxPasswordAge'];
    }

    /**
    * Sets maxPasswordAge
    *
    * @param int|null $maxPasswordAge 密码有效期
    *
    * @return $this
    */
    public function setMaxPasswordAge($maxPasswordAge)
    {
        $this->container['maxPasswordAge'] = $maxPasswordAge;
        return $this;
    }

    /**
    * Gets passwordReusePrevention
    *  密码重复使用次数，默认只支持1
    *
    * @return int|null
    */
    public function getPasswordReusePrevention()
    {
        return $this->container['passwordReusePrevention'];
    }

    /**
    * Sets passwordReusePrevention
    *
    * @param int|null $passwordReusePrevention 密码重复使用次数，默认只支持1
    *
    * @return $this
    */
    public function setPasswordReusePrevention($passwordReusePrevention)
    {
        $this->container['passwordReusePrevention'] = $passwordReusePrevention;
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

