<?php

namespace HuaweiCloud\SDK\IdentityCenter\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SSOConfigurationDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SSOConfigurationDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * mfaMode  MFA生效模式
    * noMfaSigninBehavior  未注册MFA情况下，可选择的登录行为
    * noPasswordSigninBehavior  没有密码情况下登录的行为
    * allowedMfaTypes  允许的MFA类型
    * sessionConfiguration  sessionConfiguration
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'mfaMode' => 'string',
            'noMfaSigninBehavior' => 'string',
            'noPasswordSigninBehavior' => 'string',
            'allowedMfaTypes' => 'string[]',
            'sessionConfiguration' => '\HuaweiCloud\SDK\IdentityCenter\V1\Model\SessionConfigurationDto'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * mfaMode  MFA生效模式
    * noMfaSigninBehavior  未注册MFA情况下，可选择的登录行为
    * noPasswordSigninBehavior  没有密码情况下登录的行为
    * allowedMfaTypes  允许的MFA类型
    * sessionConfiguration  sessionConfiguration
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'mfaMode' => null,
        'noMfaSigninBehavior' => null,
        'noPasswordSigninBehavior' => null,
        'allowedMfaTypes' => null,
        'sessionConfiguration' => null
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
    * mfaMode  MFA生效模式
    * noMfaSigninBehavior  未注册MFA情况下，可选择的登录行为
    * noPasswordSigninBehavior  没有密码情况下登录的行为
    * allowedMfaTypes  允许的MFA类型
    * sessionConfiguration  sessionConfiguration
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'mfaMode' => 'mfa_mode',
            'noMfaSigninBehavior' => 'no_mfa_signin_behavior',
            'noPasswordSigninBehavior' => 'no_password_signin_behavior',
            'allowedMfaTypes' => 'allowed_mfa_types',
            'sessionConfiguration' => 'session_configuration'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * mfaMode  MFA生效模式
    * noMfaSigninBehavior  未注册MFA情况下，可选择的登录行为
    * noPasswordSigninBehavior  没有密码情况下登录的行为
    * allowedMfaTypes  允许的MFA类型
    * sessionConfiguration  sessionConfiguration
    *
    * @var string[]
    */
    protected static $setters = [
            'mfaMode' => 'setMfaMode',
            'noMfaSigninBehavior' => 'setNoMfaSigninBehavior',
            'noPasswordSigninBehavior' => 'setNoPasswordSigninBehavior',
            'allowedMfaTypes' => 'setAllowedMfaTypes',
            'sessionConfiguration' => 'setSessionConfiguration'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * mfaMode  MFA生效模式
    * noMfaSigninBehavior  未注册MFA情况下，可选择的登录行为
    * noPasswordSigninBehavior  没有密码情况下登录的行为
    * allowedMfaTypes  允许的MFA类型
    * sessionConfiguration  sessionConfiguration
    *
    * @var string[]
    */
    protected static $getters = [
            'mfaMode' => 'getMfaMode',
            'noMfaSigninBehavior' => 'getNoMfaSigninBehavior',
            'noPasswordSigninBehavior' => 'getNoPasswordSigninBehavior',
            'allowedMfaTypes' => 'getAllowedMfaTypes',
            'sessionConfiguration' => 'getSessionConfiguration'
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
    const MFA_MODE_CONTEXT_AWARE = 'CONTEXT_AWARE';
    const MFA_MODE_DISABLED = 'DISABLED';
    const MFA_MODE_ALWAYS_ON = 'ALWAYS_ON';
    const NO_MFA_SIGNIN_BEHAVIOR_ALLOWED_WITH_ENROLLMENT = 'ALLOWED_WITH_ENROLLMENT';
    const NO_MFA_SIGNIN_BEHAVIOR_ALLOWED = 'ALLOWED';
    const NO_MFA_SIGNIN_BEHAVIOR_EMAIL_OTP = 'EMAIL_OTP';
    const NO_MFA_SIGNIN_BEHAVIOR_BLOCKED = 'BLOCKED';
    const NO_PASSWORD_SIGNIN_BEHAVIOR_BLOCKED = 'BLOCKED';
    const NO_PASSWORD_SIGNIN_BEHAVIOR_EMAIL_OTP = 'EMAIL_OTP';
    const ALLOWED_MFA_TYPES_TOTP = 'TOTP';
    const ALLOWED_MFA_TYPES_WEBAUTHN = 'WEBAUTHN';
    const ALLOWED_MFA_TYPES_WEBAUTHN_SECURITY_KEY = 'WEBAUTHN_SECURITY_KEY';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMfaModeAllowableValues()
    {
        return [
            self::MFA_MODE_CONTEXT_AWARE,
            self::MFA_MODE_DISABLED,
            self::MFA_MODE_ALWAYS_ON,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNoMfaSigninBehaviorAllowableValues()
    {
        return [
            self::NO_MFA_SIGNIN_BEHAVIOR_ALLOWED_WITH_ENROLLMENT,
            self::NO_MFA_SIGNIN_BEHAVIOR_ALLOWED,
            self::NO_MFA_SIGNIN_BEHAVIOR_EMAIL_OTP,
            self::NO_MFA_SIGNIN_BEHAVIOR_BLOCKED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNoPasswordSigninBehaviorAllowableValues()
    {
        return [
            self::NO_PASSWORD_SIGNIN_BEHAVIOR_BLOCKED,
            self::NO_PASSWORD_SIGNIN_BEHAVIOR_EMAIL_OTP,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAllowedMfaTypesAllowableValues()
    {
        return [
            self::ALLOWED_MFA_TYPES_TOTP,
            self::ALLOWED_MFA_TYPES_WEBAUTHN,
            self::ALLOWED_MFA_TYPES_WEBAUTHN_SECURITY_KEY,
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
        $this->container['mfaMode'] = isset($data['mfaMode']) ? $data['mfaMode'] : null;
        $this->container['noMfaSigninBehavior'] = isset($data['noMfaSigninBehavior']) ? $data['noMfaSigninBehavior'] : null;
        $this->container['noPasswordSigninBehavior'] = isset($data['noPasswordSigninBehavior']) ? $data['noPasswordSigninBehavior'] : null;
        $this->container['allowedMfaTypes'] = isset($data['allowedMfaTypes']) ? $data['allowedMfaTypes'] : null;
        $this->container['sessionConfiguration'] = isset($data['sessionConfiguration']) ? $data['sessionConfiguration'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getMfaModeAllowableValues();
                if (!is_null($this->container['mfaMode']) && !in_array($this->container['mfaMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'mfaMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getNoMfaSigninBehaviorAllowableValues();
                if (!is_null($this->container['noMfaSigninBehavior']) && !in_array($this->container['noMfaSigninBehavior'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'noMfaSigninBehavior', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getNoPasswordSigninBehaviorAllowableValues();
                if (!is_null($this->container['noPasswordSigninBehavior']) && !in_array($this->container['noPasswordSigninBehavior'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'noPasswordSigninBehavior', must be one of '%s'",
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
    * Gets mfaMode
    *  MFA生效模式
    *
    * @return string|null
    */
    public function getMfaMode()
    {
        return $this->container['mfaMode'];
    }

    /**
    * Sets mfaMode
    *
    * @param string|null $mfaMode MFA生效模式
    *
    * @return $this
    */
    public function setMfaMode($mfaMode)
    {
        $this->container['mfaMode'] = $mfaMode;
        return $this;
    }

    /**
    * Gets noMfaSigninBehavior
    *  未注册MFA情况下，可选择的登录行为
    *
    * @return string|null
    */
    public function getNoMfaSigninBehavior()
    {
        return $this->container['noMfaSigninBehavior'];
    }

    /**
    * Sets noMfaSigninBehavior
    *
    * @param string|null $noMfaSigninBehavior 未注册MFA情况下，可选择的登录行为
    *
    * @return $this
    */
    public function setNoMfaSigninBehavior($noMfaSigninBehavior)
    {
        $this->container['noMfaSigninBehavior'] = $noMfaSigninBehavior;
        return $this;
    }

    /**
    * Gets noPasswordSigninBehavior
    *  没有密码情况下登录的行为
    *
    * @return string|null
    */
    public function getNoPasswordSigninBehavior()
    {
        return $this->container['noPasswordSigninBehavior'];
    }

    /**
    * Sets noPasswordSigninBehavior
    *
    * @param string|null $noPasswordSigninBehavior 没有密码情况下登录的行为
    *
    * @return $this
    */
    public function setNoPasswordSigninBehavior($noPasswordSigninBehavior)
    {
        $this->container['noPasswordSigninBehavior'] = $noPasswordSigninBehavior;
        return $this;
    }

    /**
    * Gets allowedMfaTypes
    *  允许的MFA类型
    *
    * @return string[]|null
    */
    public function getAllowedMfaTypes()
    {
        return $this->container['allowedMfaTypes'];
    }

    /**
    * Sets allowedMfaTypes
    *
    * @param string[]|null $allowedMfaTypes 允许的MFA类型
    *
    * @return $this
    */
    public function setAllowedMfaTypes($allowedMfaTypes)
    {
        $this->container['allowedMfaTypes'] = $allowedMfaTypes;
        return $this;
    }

    /**
    * Gets sessionConfiguration
    *  sessionConfiguration
    *
    * @return \HuaweiCloud\SDK\IdentityCenter\V1\Model\SessionConfigurationDto|null
    */
    public function getSessionConfiguration()
    {
        return $this->container['sessionConfiguration'];
    }

    /**
    * Sets sessionConfiguration
    *
    * @param \HuaweiCloud\SDK\IdentityCenter\V1\Model\SessionConfigurationDto|null $sessionConfiguration sessionConfiguration
    *
    * @return $this
    */
    public function setSessionConfiguration($sessionConfiguration)
    {
        $this->container['sessionConfiguration'] = $sessionConfiguration;
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

