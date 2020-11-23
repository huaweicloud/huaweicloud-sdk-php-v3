<?php

namespace HuaweiCloud\SDK\Iam\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LoginPolicyResult implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LoginPolicyResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
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
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accountValidityPeriod' => 'int32',
        'customInfoForLogin' => null,
        'lockoutDuration' => 'int32',
        'loginFailedTimes' => 'int32',
        'periodWithLoginFailures' => 'int32',
        'sessionTimeout' => 'int32',
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
    * @param int $accountValidityPeriod 账号在该值设置的有效期内未使用，则被停用。
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
    * @param int $lockoutDuration 帐号锁定时长（分钟）。
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
    * @param int $loginFailedTimes 限定时间内登录失败次数。
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
    * @param int $periodWithLoginFailures 限定时间长度（分钟）。
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
    * @param int $sessionTimeout 登录会话失效时间。
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
    * @param bool $showRecentLoginInfo 是否显示最近一次的登录信息。
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

