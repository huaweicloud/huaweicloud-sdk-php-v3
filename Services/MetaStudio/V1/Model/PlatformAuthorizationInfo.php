<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PlatformAuthorizationInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PlatformAuthorizationInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * authorizeState  授权状态。 * AUTHORIZED: 已授权 * UNAUTHORIZED: 未授权
    * authorizedTime  授权时间
    * expireTime  过期时间
    * account  授权账号信息。 美团平台对应：opBizCode
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'authorizeState' => 'string',
            'authorizedTime' => 'string',
            'expireTime' => 'string',
            'account' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * authorizeState  授权状态。 * AUTHORIZED: 已授权 * UNAUTHORIZED: 未授权
    * authorizedTime  授权时间
    * expireTime  过期时间
    * account  授权账号信息。 美团平台对应：opBizCode
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'authorizeState' => null,
        'authorizedTime' => null,
        'expireTime' => null,
        'account' => null
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
    * authorizeState  授权状态。 * AUTHORIZED: 已授权 * UNAUTHORIZED: 未授权
    * authorizedTime  授权时间
    * expireTime  过期时间
    * account  授权账号信息。 美团平台对应：opBizCode
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'authorizeState' => 'authorize_state',
            'authorizedTime' => 'authorized_time',
            'expireTime' => 'expire_time',
            'account' => 'account'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * authorizeState  授权状态。 * AUTHORIZED: 已授权 * UNAUTHORIZED: 未授权
    * authorizedTime  授权时间
    * expireTime  过期时间
    * account  授权账号信息。 美团平台对应：opBizCode
    *
    * @var string[]
    */
    protected static $setters = [
            'authorizeState' => 'setAuthorizeState',
            'authorizedTime' => 'setAuthorizedTime',
            'expireTime' => 'setExpireTime',
            'account' => 'setAccount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * authorizeState  授权状态。 * AUTHORIZED: 已授权 * UNAUTHORIZED: 未授权
    * authorizedTime  授权时间
    * expireTime  过期时间
    * account  授权账号信息。 美团平台对应：opBizCode
    *
    * @var string[]
    */
    protected static $getters = [
            'authorizeState' => 'getAuthorizeState',
            'authorizedTime' => 'getAuthorizedTime',
            'expireTime' => 'getExpireTime',
            'account' => 'getAccount'
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
    const AUTHORIZE_STATE_AUTHORIZED = 'AUTHORIZED';
    const AUTHORIZE_STATE_UNAUTHORIZED = 'UNAUTHORIZED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAuthorizeStateAllowableValues()
    {
        return [
            self::AUTHORIZE_STATE_AUTHORIZED,
            self::AUTHORIZE_STATE_UNAUTHORIZED,
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
        $this->container['authorizeState'] = isset($data['authorizeState']) ? $data['authorizeState'] : null;
        $this->container['authorizedTime'] = isset($data['authorizedTime']) ? $data['authorizedTime'] : null;
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
        $this->container['account'] = isset($data['account']) ? $data['account'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getAuthorizeStateAllowableValues();
                if (!is_null($this->container['authorizeState']) && !in_array($this->container['authorizeState'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'authorizeState', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['authorizeState']) && (mb_strlen($this->container['authorizeState']) > 32)) {
                $invalidProperties[] = "invalid value for 'authorizeState', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['authorizeState']) && (mb_strlen($this->container['authorizeState']) < 1)) {
                $invalidProperties[] = "invalid value for 'authorizeState', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['authorizedTime']) && (mb_strlen($this->container['authorizedTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'authorizedTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['authorizedTime']) && (mb_strlen($this->container['authorizedTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'authorizedTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['expireTime']) && (mb_strlen($this->container['expireTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'expireTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['expireTime']) && (mb_strlen($this->container['expireTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'expireTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['account']) && (mb_strlen($this->container['account']) > 20)) {
                $invalidProperties[] = "invalid value for 'account', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['account']) && (mb_strlen($this->container['account']) < 0)) {
                $invalidProperties[] = "invalid value for 'account', the character length must be bigger than or equal to 0.";
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
    * Gets authorizeState
    *  授权状态。 * AUTHORIZED: 已授权 * UNAUTHORIZED: 未授权
    *
    * @return string|null
    */
    public function getAuthorizeState()
    {
        return $this->container['authorizeState'];
    }

    /**
    * Sets authorizeState
    *
    * @param string|null $authorizeState 授权状态。 * AUTHORIZED: 已授权 * UNAUTHORIZED: 未授权
    *
    * @return $this
    */
    public function setAuthorizeState($authorizeState)
    {
        $this->container['authorizeState'] = $authorizeState;
        return $this;
    }

    /**
    * Gets authorizedTime
    *  授权时间
    *
    * @return string|null
    */
    public function getAuthorizedTime()
    {
        return $this->container['authorizedTime'];
    }

    /**
    * Sets authorizedTime
    *
    * @param string|null $authorizedTime 授权时间
    *
    * @return $this
    */
    public function setAuthorizedTime($authorizedTime)
    {
        $this->container['authorizedTime'] = $authorizedTime;
        return $this;
    }

    /**
    * Gets expireTime
    *  过期时间
    *
    * @return string|null
    */
    public function getExpireTime()
    {
        return $this->container['expireTime'];
    }

    /**
    * Sets expireTime
    *
    * @param string|null $expireTime 过期时间
    *
    * @return $this
    */
    public function setExpireTime($expireTime)
    {
        $this->container['expireTime'] = $expireTime;
        return $this;
    }

    /**
    * Gets account
    *  授权账号信息。 美团平台对应：opBizCode
    *
    * @return string|null
    */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
    * Sets account
    *
    * @param string|null $account 授权账号信息。 美团平台对应：opBizCode
    *
    * @return $this
    */
    public function setAccount($account)
    {
        $this->container['account'] = $account;
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

