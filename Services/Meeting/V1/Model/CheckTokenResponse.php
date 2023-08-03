<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CheckTokenResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CheckTokenResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accessToken  Access Token字符串。
    * tokenIp  用户IP。
    * validPeriod  Access Token有效时长，单位：秒。
    * expireTime  Access Token的失效时间戳，单位：秒。
    * createTime  Access Token的创建时间戳，单位：毫秒。
    * user  user
    * clientType  登录帐号类型。 * 72：API调用类型
    * forceLoginInd  抢占登录标识。 * 0： 非抢占 * 1： 抢占
    * firstLogin  是否首次登录。 > 首次登录表示尚未修改过密码。首次登录时，系统会提醒用户需要修改密码。 默认值：false。
    * pwdExpired  密码是否过期，默认值：false。
    * daysPwdAvailable  密码有效天数。
    * proxyToken  proxyToken
    * delayDelete  是否延时删除状态。
    * tokenType  Token类型。 * 0：用户Access Token * 1：会控TOKEN * 2：一次性TOKEN
    * refreshToken  Refresh Token字符串。
    * refreshValidPeriod  Refresh Token有效时长，单位：秒。
    * refreshExpireTime  Refresh Token的失效时间戳，单位：秒。
    * refreshCreateTime  Refresh Token的创建时间戳，单位：毫秒。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accessToken' => 'string',
            'tokenIp' => 'string',
            'validPeriod' => 'int',
            'expireTime' => 'int',
            'createTime' => 'int',
            'user' => '\HuaweiCloud\SDK\Meeting\V1\Model\UserInfo',
            'clientType' => 'int',
            'forceLoginInd' => 'int',
            'firstLogin' => 'bool',
            'pwdExpired' => 'bool',
            'daysPwdAvailable' => 'int',
            'proxyToken' => '\HuaweiCloud\SDK\Meeting\V1\Model\ProxyTokenDTO',
            'delayDelete' => 'bool',
            'tokenType' => 'int',
            'refreshToken' => 'string',
            'refreshValidPeriod' => 'int',
            'refreshExpireTime' => 'int',
            'refreshCreateTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accessToken  Access Token字符串。
    * tokenIp  用户IP。
    * validPeriod  Access Token有效时长，单位：秒。
    * expireTime  Access Token的失效时间戳，单位：秒。
    * createTime  Access Token的创建时间戳，单位：毫秒。
    * user  user
    * clientType  登录帐号类型。 * 72：API调用类型
    * forceLoginInd  抢占登录标识。 * 0： 非抢占 * 1： 抢占
    * firstLogin  是否首次登录。 > 首次登录表示尚未修改过密码。首次登录时，系统会提醒用户需要修改密码。 默认值：false。
    * pwdExpired  密码是否过期，默认值：false。
    * daysPwdAvailable  密码有效天数。
    * proxyToken  proxyToken
    * delayDelete  是否延时删除状态。
    * tokenType  Token类型。 * 0：用户Access Token * 1：会控TOKEN * 2：一次性TOKEN
    * refreshToken  Refresh Token字符串。
    * refreshValidPeriod  Refresh Token有效时长，单位：秒。
    * refreshExpireTime  Refresh Token的失效时间戳，单位：秒。
    * refreshCreateTime  Refresh Token的创建时间戳，单位：毫秒。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accessToken' => null,
        'tokenIp' => null,
        'validPeriod' => 'int64',
        'expireTime' => 'int64',
        'createTime' => 'int64',
        'user' => null,
        'clientType' => null,
        'forceLoginInd' => null,
        'firstLogin' => null,
        'pwdExpired' => null,
        'daysPwdAvailable' => null,
        'proxyToken' => null,
        'delayDelete' => null,
        'tokenType' => null,
        'refreshToken' => null,
        'refreshValidPeriod' => 'int64',
        'refreshExpireTime' => 'int64',
        'refreshCreateTime' => 'int64'
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
    * accessToken  Access Token字符串。
    * tokenIp  用户IP。
    * validPeriod  Access Token有效时长，单位：秒。
    * expireTime  Access Token的失效时间戳，单位：秒。
    * createTime  Access Token的创建时间戳，单位：毫秒。
    * user  user
    * clientType  登录帐号类型。 * 72：API调用类型
    * forceLoginInd  抢占登录标识。 * 0： 非抢占 * 1： 抢占
    * firstLogin  是否首次登录。 > 首次登录表示尚未修改过密码。首次登录时，系统会提醒用户需要修改密码。 默认值：false。
    * pwdExpired  密码是否过期，默认值：false。
    * daysPwdAvailable  密码有效天数。
    * proxyToken  proxyToken
    * delayDelete  是否延时删除状态。
    * tokenType  Token类型。 * 0：用户Access Token * 1：会控TOKEN * 2：一次性TOKEN
    * refreshToken  Refresh Token字符串。
    * refreshValidPeriod  Refresh Token有效时长，单位：秒。
    * refreshExpireTime  Refresh Token的失效时间戳，单位：秒。
    * refreshCreateTime  Refresh Token的创建时间戳，单位：毫秒。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accessToken' => 'accessToken',
            'tokenIp' => 'tokenIp',
            'validPeriod' => 'validPeriod',
            'expireTime' => 'expireTime',
            'createTime' => 'createTime',
            'user' => 'user',
            'clientType' => 'clientType',
            'forceLoginInd' => 'forceLoginInd',
            'firstLogin' => 'firstLogin',
            'pwdExpired' => 'pwdExpired',
            'daysPwdAvailable' => 'daysPwdAvailable',
            'proxyToken' => 'proxyToken',
            'delayDelete' => 'delayDelete',
            'tokenType' => 'tokenType',
            'refreshToken' => 'refreshToken',
            'refreshValidPeriod' => 'refreshValidPeriod',
            'refreshExpireTime' => 'refreshExpireTime',
            'refreshCreateTime' => 'refreshCreateTime'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accessToken  Access Token字符串。
    * tokenIp  用户IP。
    * validPeriod  Access Token有效时长，单位：秒。
    * expireTime  Access Token的失效时间戳，单位：秒。
    * createTime  Access Token的创建时间戳，单位：毫秒。
    * user  user
    * clientType  登录帐号类型。 * 72：API调用类型
    * forceLoginInd  抢占登录标识。 * 0： 非抢占 * 1： 抢占
    * firstLogin  是否首次登录。 > 首次登录表示尚未修改过密码。首次登录时，系统会提醒用户需要修改密码。 默认值：false。
    * pwdExpired  密码是否过期，默认值：false。
    * daysPwdAvailable  密码有效天数。
    * proxyToken  proxyToken
    * delayDelete  是否延时删除状态。
    * tokenType  Token类型。 * 0：用户Access Token * 1：会控TOKEN * 2：一次性TOKEN
    * refreshToken  Refresh Token字符串。
    * refreshValidPeriod  Refresh Token有效时长，单位：秒。
    * refreshExpireTime  Refresh Token的失效时间戳，单位：秒。
    * refreshCreateTime  Refresh Token的创建时间戳，单位：毫秒。
    *
    * @var string[]
    */
    protected static $setters = [
            'accessToken' => 'setAccessToken',
            'tokenIp' => 'setTokenIp',
            'validPeriod' => 'setValidPeriod',
            'expireTime' => 'setExpireTime',
            'createTime' => 'setCreateTime',
            'user' => 'setUser',
            'clientType' => 'setClientType',
            'forceLoginInd' => 'setForceLoginInd',
            'firstLogin' => 'setFirstLogin',
            'pwdExpired' => 'setPwdExpired',
            'daysPwdAvailable' => 'setDaysPwdAvailable',
            'proxyToken' => 'setProxyToken',
            'delayDelete' => 'setDelayDelete',
            'tokenType' => 'setTokenType',
            'refreshToken' => 'setRefreshToken',
            'refreshValidPeriod' => 'setRefreshValidPeriod',
            'refreshExpireTime' => 'setRefreshExpireTime',
            'refreshCreateTime' => 'setRefreshCreateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accessToken  Access Token字符串。
    * tokenIp  用户IP。
    * validPeriod  Access Token有效时长，单位：秒。
    * expireTime  Access Token的失效时间戳，单位：秒。
    * createTime  Access Token的创建时间戳，单位：毫秒。
    * user  user
    * clientType  登录帐号类型。 * 72：API调用类型
    * forceLoginInd  抢占登录标识。 * 0： 非抢占 * 1： 抢占
    * firstLogin  是否首次登录。 > 首次登录表示尚未修改过密码。首次登录时，系统会提醒用户需要修改密码。 默认值：false。
    * pwdExpired  密码是否过期，默认值：false。
    * daysPwdAvailable  密码有效天数。
    * proxyToken  proxyToken
    * delayDelete  是否延时删除状态。
    * tokenType  Token类型。 * 0：用户Access Token * 1：会控TOKEN * 2：一次性TOKEN
    * refreshToken  Refresh Token字符串。
    * refreshValidPeriod  Refresh Token有效时长，单位：秒。
    * refreshExpireTime  Refresh Token的失效时间戳，单位：秒。
    * refreshCreateTime  Refresh Token的创建时间戳，单位：毫秒。
    *
    * @var string[]
    */
    protected static $getters = [
            'accessToken' => 'getAccessToken',
            'tokenIp' => 'getTokenIp',
            'validPeriod' => 'getValidPeriod',
            'expireTime' => 'getExpireTime',
            'createTime' => 'getCreateTime',
            'user' => 'getUser',
            'clientType' => 'getClientType',
            'forceLoginInd' => 'getForceLoginInd',
            'firstLogin' => 'getFirstLogin',
            'pwdExpired' => 'getPwdExpired',
            'daysPwdAvailable' => 'getDaysPwdAvailable',
            'proxyToken' => 'getProxyToken',
            'delayDelete' => 'getDelayDelete',
            'tokenType' => 'getTokenType',
            'refreshToken' => 'getRefreshToken',
            'refreshValidPeriod' => 'getRefreshValidPeriod',
            'refreshExpireTime' => 'getRefreshExpireTime',
            'refreshCreateTime' => 'getRefreshCreateTime'
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
        $this->container['accessToken'] = isset($data['accessToken']) ? $data['accessToken'] : null;
        $this->container['tokenIp'] = isset($data['tokenIp']) ? $data['tokenIp'] : null;
        $this->container['validPeriod'] = isset($data['validPeriod']) ? $data['validPeriod'] : null;
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['clientType'] = isset($data['clientType']) ? $data['clientType'] : null;
        $this->container['forceLoginInd'] = isset($data['forceLoginInd']) ? $data['forceLoginInd'] : null;
        $this->container['firstLogin'] = isset($data['firstLogin']) ? $data['firstLogin'] : null;
        $this->container['pwdExpired'] = isset($data['pwdExpired']) ? $data['pwdExpired'] : null;
        $this->container['daysPwdAvailable'] = isset($data['daysPwdAvailable']) ? $data['daysPwdAvailable'] : null;
        $this->container['proxyToken'] = isset($data['proxyToken']) ? $data['proxyToken'] : null;
        $this->container['delayDelete'] = isset($data['delayDelete']) ? $data['delayDelete'] : null;
        $this->container['tokenType'] = isset($data['tokenType']) ? $data['tokenType'] : null;
        $this->container['refreshToken'] = isset($data['refreshToken']) ? $data['refreshToken'] : null;
        $this->container['refreshValidPeriod'] = isset($data['refreshValidPeriod']) ? $data['refreshValidPeriod'] : null;
        $this->container['refreshExpireTime'] = isset($data['refreshExpireTime']) ? $data['refreshExpireTime'] : null;
        $this->container['refreshCreateTime'] = isset($data['refreshCreateTime']) ? $data['refreshCreateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets accessToken
    *  Access Token字符串。
    *
    * @return string|null
    */
    public function getAccessToken()
    {
        return $this->container['accessToken'];
    }

    /**
    * Sets accessToken
    *
    * @param string|null $accessToken Access Token字符串。
    *
    * @return $this
    */
    public function setAccessToken($accessToken)
    {
        $this->container['accessToken'] = $accessToken;
        return $this;
    }

    /**
    * Gets tokenIp
    *  用户IP。
    *
    * @return string|null
    */
    public function getTokenIp()
    {
        return $this->container['tokenIp'];
    }

    /**
    * Sets tokenIp
    *
    * @param string|null $tokenIp 用户IP。
    *
    * @return $this
    */
    public function setTokenIp($tokenIp)
    {
        $this->container['tokenIp'] = $tokenIp;
        return $this;
    }

    /**
    * Gets validPeriod
    *  Access Token有效时长，单位：秒。
    *
    * @return int|null
    */
    public function getValidPeriod()
    {
        return $this->container['validPeriod'];
    }

    /**
    * Sets validPeriod
    *
    * @param int|null $validPeriod Access Token有效时长，单位：秒。
    *
    * @return $this
    */
    public function setValidPeriod($validPeriod)
    {
        $this->container['validPeriod'] = $validPeriod;
        return $this;
    }

    /**
    * Gets expireTime
    *  Access Token的失效时间戳，单位：秒。
    *
    * @return int|null
    */
    public function getExpireTime()
    {
        return $this->container['expireTime'];
    }

    /**
    * Sets expireTime
    *
    * @param int|null $expireTime Access Token的失效时间戳，单位：秒。
    *
    * @return $this
    */
    public function setExpireTime($expireTime)
    {
        $this->container['expireTime'] = $expireTime;
        return $this;
    }

    /**
    * Gets createTime
    *  Access Token的创建时间戳，单位：毫秒。
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime Access Token的创建时间戳，单位：毫秒。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets user
    *  user
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\UserInfo|null
    */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
    * Sets user
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\UserInfo|null $user user
    *
    * @return $this
    */
    public function setUser($user)
    {
        $this->container['user'] = $user;
        return $this;
    }

    /**
    * Gets clientType
    *  登录帐号类型。 * 72：API调用类型
    *
    * @return int|null
    */
    public function getClientType()
    {
        return $this->container['clientType'];
    }

    /**
    * Sets clientType
    *
    * @param int|null $clientType 登录帐号类型。 * 72：API调用类型
    *
    * @return $this
    */
    public function setClientType($clientType)
    {
        $this->container['clientType'] = $clientType;
        return $this;
    }

    /**
    * Gets forceLoginInd
    *  抢占登录标识。 * 0： 非抢占 * 1： 抢占
    *
    * @return int|null
    */
    public function getForceLoginInd()
    {
        return $this->container['forceLoginInd'];
    }

    /**
    * Sets forceLoginInd
    *
    * @param int|null $forceLoginInd 抢占登录标识。 * 0： 非抢占 * 1： 抢占
    *
    * @return $this
    */
    public function setForceLoginInd($forceLoginInd)
    {
        $this->container['forceLoginInd'] = $forceLoginInd;
        return $this;
    }

    /**
    * Gets firstLogin
    *  是否首次登录。 > 首次登录表示尚未修改过密码。首次登录时，系统会提醒用户需要修改密码。 默认值：false。
    *
    * @return bool|null
    */
    public function getFirstLogin()
    {
        return $this->container['firstLogin'];
    }

    /**
    * Sets firstLogin
    *
    * @param bool|null $firstLogin 是否首次登录。 > 首次登录表示尚未修改过密码。首次登录时，系统会提醒用户需要修改密码。 默认值：false。
    *
    * @return $this
    */
    public function setFirstLogin($firstLogin)
    {
        $this->container['firstLogin'] = $firstLogin;
        return $this;
    }

    /**
    * Gets pwdExpired
    *  密码是否过期，默认值：false。
    *
    * @return bool|null
    */
    public function getPwdExpired()
    {
        return $this->container['pwdExpired'];
    }

    /**
    * Sets pwdExpired
    *
    * @param bool|null $pwdExpired 密码是否过期，默认值：false。
    *
    * @return $this
    */
    public function setPwdExpired($pwdExpired)
    {
        $this->container['pwdExpired'] = $pwdExpired;
        return $this;
    }

    /**
    * Gets daysPwdAvailable
    *  密码有效天数。
    *
    * @return int|null
    */
    public function getDaysPwdAvailable()
    {
        return $this->container['daysPwdAvailable'];
    }

    /**
    * Sets daysPwdAvailable
    *
    * @param int|null $daysPwdAvailable 密码有效天数。
    *
    * @return $this
    */
    public function setDaysPwdAvailable($daysPwdAvailable)
    {
        $this->container['daysPwdAvailable'] = $daysPwdAvailable;
        return $this;
    }

    /**
    * Gets proxyToken
    *  proxyToken
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\ProxyTokenDTO|null
    */
    public function getProxyToken()
    {
        return $this->container['proxyToken'];
    }

    /**
    * Sets proxyToken
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\ProxyTokenDTO|null $proxyToken proxyToken
    *
    * @return $this
    */
    public function setProxyToken($proxyToken)
    {
        $this->container['proxyToken'] = $proxyToken;
        return $this;
    }

    /**
    * Gets delayDelete
    *  是否延时删除状态。
    *
    * @return bool|null
    */
    public function getDelayDelete()
    {
        return $this->container['delayDelete'];
    }

    /**
    * Sets delayDelete
    *
    * @param bool|null $delayDelete 是否延时删除状态。
    *
    * @return $this
    */
    public function setDelayDelete($delayDelete)
    {
        $this->container['delayDelete'] = $delayDelete;
        return $this;
    }

    /**
    * Gets tokenType
    *  Token类型。 * 0：用户Access Token * 1：会控TOKEN * 2：一次性TOKEN
    *
    * @return int|null
    */
    public function getTokenType()
    {
        return $this->container['tokenType'];
    }

    /**
    * Sets tokenType
    *
    * @param int|null $tokenType Token类型。 * 0：用户Access Token * 1：会控TOKEN * 2：一次性TOKEN
    *
    * @return $this
    */
    public function setTokenType($tokenType)
    {
        $this->container['tokenType'] = $tokenType;
        return $this;
    }

    /**
    * Gets refreshToken
    *  Refresh Token字符串。
    *
    * @return string|null
    */
    public function getRefreshToken()
    {
        return $this->container['refreshToken'];
    }

    /**
    * Sets refreshToken
    *
    * @param string|null $refreshToken Refresh Token字符串。
    *
    * @return $this
    */
    public function setRefreshToken($refreshToken)
    {
        $this->container['refreshToken'] = $refreshToken;
        return $this;
    }

    /**
    * Gets refreshValidPeriod
    *  Refresh Token有效时长，单位：秒。
    *
    * @return int|null
    */
    public function getRefreshValidPeriod()
    {
        return $this->container['refreshValidPeriod'];
    }

    /**
    * Sets refreshValidPeriod
    *
    * @param int|null $refreshValidPeriod Refresh Token有效时长，单位：秒。
    *
    * @return $this
    */
    public function setRefreshValidPeriod($refreshValidPeriod)
    {
        $this->container['refreshValidPeriod'] = $refreshValidPeriod;
        return $this;
    }

    /**
    * Gets refreshExpireTime
    *  Refresh Token的失效时间戳，单位：秒。
    *
    * @return int|null
    */
    public function getRefreshExpireTime()
    {
        return $this->container['refreshExpireTime'];
    }

    /**
    * Sets refreshExpireTime
    *
    * @param int|null $refreshExpireTime Refresh Token的失效时间戳，单位：秒。
    *
    * @return $this
    */
    public function setRefreshExpireTime($refreshExpireTime)
    {
        $this->container['refreshExpireTime'] = $refreshExpireTime;
        return $this;
    }

    /**
    * Gets refreshCreateTime
    *  Refresh Token的创建时间戳，单位：毫秒。
    *
    * @return int|null
    */
    public function getRefreshCreateTime()
    {
        return $this->container['refreshCreateTime'];
    }

    /**
    * Sets refreshCreateTime
    *
    * @param int|null $refreshCreateTime Refresh Token的创建时间戳，单位：毫秒。
    *
    * @return $this
    */
    public function setRefreshCreateTime($refreshCreateTime)
    {
        $this->container['refreshCreateTime'] = $refreshCreateTime;
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

