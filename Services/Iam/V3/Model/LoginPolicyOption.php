<?php

namespace HuaweiCloud\SDK\Iam\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LoginPolicyOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LoginPolicyOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accountValidityPeriod  登录提示信息，取值范围[0,240]。
    * customInfoForLogin  登录提示信息。
    * lockoutDuration  帐号锁定时长（分钟），取值范围[15,30]。
    * loginFailedTimes  限定时间内登录失败次数，取值范围[3,10]。
    * periodWithLoginFailures  限定时间长度（分钟），取值范围[15,60]。
    * sessionTimeout  登录会话失效时间，取值范围[15,1440]。
    * showRecentLoginInfo  显示最近一次的登录信息。取值范围true或false。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accountValidityPeriod' => 'int',
            'customInfoForLogin' => 'string',
            'lockoutDuration' => 'int',
            'loginFailedTimes' => 'int',
            'periodWithLoginFailures' => 'int',
            'sessionTimeout' => 'int',
            'showRecentLoginInfo' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accountValidityPeriod  登录提示信息，取值范围[0,240]。
    * customInfoForLogin  登录提示信息。
    * lockoutDuration  帐号锁定时长（分钟），取值范围[15,30]。
    * loginFailedTimes  限定时间内登录失败次数，取值范围[3,10]。
    * periodWithLoginFailures  限定时间长度（分钟），取值范围[15,60]。
    * sessionTimeout  登录会话失效时间，取值范围[15,1440]。
    * showRecentLoginInfo  显示最近一次的登录信息。取值范围true或false。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accountValidityPeriod' => null,
        'customInfoForLogin' => null,
        'lockoutDuration' => null,
        'loginFailedTimes' => null,
        'periodWithLoginFailures' => 'int32',
        'sessionTimeout' => null,
        'showRecentLoginInfo' => null
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
    * accountValidityPeriod  登录提示信息，取值范围[0,240]。
    * customInfoForLogin  登录提示信息。
    * lockoutDuration  帐号锁定时长（分钟），取值范围[15,30]。
    * loginFailedTimes  限定时间内登录失败次数，取值范围[3,10]。
    * periodWithLoginFailures  限定时间长度（分钟），取值范围[15,60]。
    * sessionTimeout  登录会话失效时间，取值范围[15,1440]。
    * showRecentLoginInfo  显示最近一次的登录信息。取值范围true或false。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accountValidityPeriod' => 'account_validity_period',
            'customInfoForLogin' => 'custom_info_for_login',
            'lockoutDuration' => 'lockout_duration',
            'loginFailedTimes' => 'login_failed_times',
            'periodWithLoginFailures' => 'period_with_login_failures',
            'sessionTimeout' => 'session_timeout',
            'showRecentLoginInfo' => 'show_recent_login_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accountValidityPeriod  登录提示信息，取值范围[0,240]。
    * customInfoForLogin  登录提示信息。
    * lockoutDuration  帐号锁定时长（分钟），取值范围[15,30]。
    * loginFailedTimes  限定时间内登录失败次数，取值范围[3,10]。
    * periodWithLoginFailures  限定时间长度（分钟），取值范围[15,60]。
    * sessionTimeout  登录会话失效时间，取值范围[15,1440]。
    * showRecentLoginInfo  显示最近一次的登录信息。取值范围true或false。
    *
    * @var string[]
    */
    protected static $setters = [
            'accountValidityPeriod' => 'setAccountValidityPeriod',
            'customInfoForLogin' => 'setCustomInfoForLogin',
            'lockoutDuration' => 'setLockoutDuration',
            'loginFailedTimes' => 'setLoginFailedTimes',
            'periodWithLoginFailures' => 'setPeriodWithLoginFailures',
            'sessionTimeout' => 'setSessionTimeout',
            'showRecentLoginInfo' => 'setShowRecentLoginInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accountValidityPeriod  登录提示信息，取值范围[0,240]。
    * customInfoForLogin  登录提示信息。
    * lockoutDuration  帐号锁定时长（分钟），取值范围[15,30]。
    * loginFailedTimes  限定时间内登录失败次数，取值范围[3,10]。
    * periodWithLoginFailures  限定时间长度（分钟），取值范围[15,60]。
    * sessionTimeout  登录会话失效时间，取值范围[15,1440]。
    * showRecentLoginInfo  显示最近一次的登录信息。取值范围true或false。
    *
    * @var string[]
    */
    protected static $getters = [
            'accountValidityPeriod' => 'getAccountValidityPeriod',
            'customInfoForLogin' => 'getCustomInfoForLogin',
            'lockoutDuration' => 'getLockoutDuration',
            'loginFailedTimes' => 'getLoginFailedTimes',
            'periodWithLoginFailures' => 'getPeriodWithLoginFailures',
            'sessionTimeout' => 'getSessionTimeout',
            'showRecentLoginInfo' => 'getShowRecentLoginInfo'
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
        $this->container['accountValidityPeriod'] = isset($data['accountValidityPeriod']) ? $data['accountValidityPeriod'] : null;
        $this->container['customInfoForLogin'] = isset($data['customInfoForLogin']) ? $data['customInfoForLogin'] : null;
        $this->container['lockoutDuration'] = isset($data['lockoutDuration']) ? $data['lockoutDuration'] : null;
        $this->container['loginFailedTimes'] = isset($data['loginFailedTimes']) ? $data['loginFailedTimes'] : null;
        $this->container['periodWithLoginFailures'] = isset($data['periodWithLoginFailures']) ? $data['periodWithLoginFailures'] : null;
        $this->container['sessionTimeout'] = isset($data['sessionTimeout']) ? $data['sessionTimeout'] : null;
        $this->container['showRecentLoginInfo'] = isset($data['showRecentLoginInfo']) ? $data['showRecentLoginInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['accountValidityPeriod'] === null) {
            $invalidProperties[] = "'accountValidityPeriod' can't be null";
        }
        if ($this->container['customInfoForLogin'] === null) {
            $invalidProperties[] = "'customInfoForLogin' can't be null";
        }
        if ($this->container['lockoutDuration'] === null) {
            $invalidProperties[] = "'lockoutDuration' can't be null";
        }
        if ($this->container['loginFailedTimes'] === null) {
            $invalidProperties[] = "'loginFailedTimes' can't be null";
        }
        if ($this->container['periodWithLoginFailures'] === null) {
            $invalidProperties[] = "'periodWithLoginFailures' can't be null";
        }
        if ($this->container['sessionTimeout'] === null) {
            $invalidProperties[] = "'sessionTimeout' can't be null";
        }
        if ($this->container['showRecentLoginInfo'] === null) {
            $invalidProperties[] = "'showRecentLoginInfo' can't be null";
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
    * Gets accountValidityPeriod
    *  登录提示信息，取值范围[0,240]。
    *
    * @return int
    */
    public function getAccountValidityPeriod()
    {
        return $this->container['accountValidityPeriod'];
    }

    /**
    * Sets accountValidityPeriod
    *
    * @param int $accountValidityPeriod 登录提示信息，取值范围[0,240]。
    *
    * @return $this
    */
    public function setAccountValidityPeriod($accountValidityPeriod)
    {
        $this->container['accountValidityPeriod'] = $accountValidityPeriod;
        return $this;
    }

    /**
    * Gets customInfoForLogin
    *  登录提示信息。
    *
    * @return string
    */
    public function getCustomInfoForLogin()
    {
        return $this->container['customInfoForLogin'];
    }

    /**
    * Sets customInfoForLogin
    *
    * @param string $customInfoForLogin 登录提示信息。
    *
    * @return $this
    */
    public function setCustomInfoForLogin($customInfoForLogin)
    {
        $this->container['customInfoForLogin'] = $customInfoForLogin;
        return $this;
    }

    /**
    * Gets lockoutDuration
    *  帐号锁定时长（分钟），取值范围[15,30]。
    *
    * @return int
    */
    public function getLockoutDuration()
    {
        return $this->container['lockoutDuration'];
    }

    /**
    * Sets lockoutDuration
    *
    * @param int $lockoutDuration 帐号锁定时长（分钟），取值范围[15,30]。
    *
    * @return $this
    */
    public function setLockoutDuration($lockoutDuration)
    {
        $this->container['lockoutDuration'] = $lockoutDuration;
        return $this;
    }

    /**
    * Gets loginFailedTimes
    *  限定时间内登录失败次数，取值范围[3,10]。
    *
    * @return int
    */
    public function getLoginFailedTimes()
    {
        return $this->container['loginFailedTimes'];
    }

    /**
    * Sets loginFailedTimes
    *
    * @param int $loginFailedTimes 限定时间内登录失败次数，取值范围[3,10]。
    *
    * @return $this
    */
    public function setLoginFailedTimes($loginFailedTimes)
    {
        $this->container['loginFailedTimes'] = $loginFailedTimes;
        return $this;
    }

    /**
    * Gets periodWithLoginFailures
    *  限定时间长度（分钟），取值范围[15,60]。
    *
    * @return int
    */
    public function getPeriodWithLoginFailures()
    {
        return $this->container['periodWithLoginFailures'];
    }

    /**
    * Sets periodWithLoginFailures
    *
    * @param int $periodWithLoginFailures 限定时间长度（分钟），取值范围[15,60]。
    *
    * @return $this
    */
    public function setPeriodWithLoginFailures($periodWithLoginFailures)
    {
        $this->container['periodWithLoginFailures'] = $periodWithLoginFailures;
        return $this;
    }

    /**
    * Gets sessionTimeout
    *  登录会话失效时间，取值范围[15,1440]。
    *
    * @return int
    */
    public function getSessionTimeout()
    {
        return $this->container['sessionTimeout'];
    }

    /**
    * Sets sessionTimeout
    *
    * @param int $sessionTimeout 登录会话失效时间，取值范围[15,1440]。
    *
    * @return $this
    */
    public function setSessionTimeout($sessionTimeout)
    {
        $this->container['sessionTimeout'] = $sessionTimeout;
        return $this;
    }

    /**
    * Gets showRecentLoginInfo
    *  显示最近一次的登录信息。取值范围true或false。
    *
    * @return bool
    */
    public function getShowRecentLoginInfo()
    {
        return $this->container['showRecentLoginInfo'];
    }

    /**
    * Sets showRecentLoginInfo
    *
    * @param bool $showRecentLoginInfo 显示最近一次的登录信息。取值范围true或false。
    *
    * @return $this
    */
    public function setShowRecentLoginInfo($showRecentLoginInfo)
    {
        $this->container['showRecentLoginInfo'] = $showRecentLoginInfo;
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

