<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SlideVerifyCodeSendDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SlideVerifyCodeSendDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * user  用户身份信息（手机号码或邮箱帐号或用户真实帐号）。
    * clientType  登录客户端类型。 * 0：Web客户端类型 * 5：cloudlink pc * 6：cloudlink mobile
    * checkType  校验类型。默认值：0。 * 0：登录 * 1：忘记密码
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'user' => 'string',
            'clientType' => 'int',
            'checkType' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * user  用户身份信息（手机号码或邮箱帐号或用户真实帐号）。
    * clientType  登录客户端类型。 * 0：Web客户端类型 * 5：cloudlink pc * 6：cloudlink mobile
    * checkType  校验类型。默认值：0。 * 0：登录 * 1：忘记密码
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'user' => null,
        'clientType' => null,
        'checkType' => null
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
    * user  用户身份信息（手机号码或邮箱帐号或用户真实帐号）。
    * clientType  登录客户端类型。 * 0：Web客户端类型 * 5：cloudlink pc * 6：cloudlink mobile
    * checkType  校验类型。默认值：0。 * 0：登录 * 1：忘记密码
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'user' => 'user',
            'clientType' => 'clientType',
            'checkType' => 'checkType'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * user  用户身份信息（手机号码或邮箱帐号或用户真实帐号）。
    * clientType  登录客户端类型。 * 0：Web客户端类型 * 5：cloudlink pc * 6：cloudlink mobile
    * checkType  校验类型。默认值：0。 * 0：登录 * 1：忘记密码
    *
    * @var string[]
    */
    protected static $setters = [
            'user' => 'setUser',
            'clientType' => 'setClientType',
            'checkType' => 'setCheckType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * user  用户身份信息（手机号码或邮箱帐号或用户真实帐号）。
    * clientType  登录客户端类型。 * 0：Web客户端类型 * 5：cloudlink pc * 6：cloudlink mobile
    * checkType  校验类型。默认值：0。 * 0：登录 * 1：忘记密码
    *
    * @var string[]
    */
    protected static $getters = [
            'user' => 'getUser',
            'clientType' => 'getClientType',
            'checkType' => 'getCheckType'
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
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['clientType'] = isset($data['clientType']) ? $data['clientType'] : null;
        $this->container['checkType'] = isset($data['checkType']) ? $data['checkType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['user'] === null) {
            $invalidProperties[] = "'user' can't be null";
        }
            if ((mb_strlen($this->container['user']) > 255)) {
                $invalidProperties[] = "invalid value for 'user', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['user']) < 1)) {
                $invalidProperties[] = "invalid value for 'user', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['clientType'] === null) {
            $invalidProperties[] = "'clientType' can't be null";
        }
            if (($this->container['clientType'] > 255)) {
                $invalidProperties[] = "invalid value for 'clientType', must be smaller than or equal to 255.";
            }
            if (($this->container['clientType'] < 0)) {
                $invalidProperties[] = "invalid value for 'clientType', must be bigger than or equal to 0.";
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
    * Gets user
    *  用户身份信息（手机号码或邮箱帐号或用户真实帐号）。
    *
    * @return string
    */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
    * Sets user
    *
    * @param string $user 用户身份信息（手机号码或邮箱帐号或用户真实帐号）。
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
    *  登录客户端类型。 * 0：Web客户端类型 * 5：cloudlink pc * 6：cloudlink mobile
    *
    * @return int
    */
    public function getClientType()
    {
        return $this->container['clientType'];
    }

    /**
    * Sets clientType
    *
    * @param int $clientType 登录客户端类型。 * 0：Web客户端类型 * 5：cloudlink pc * 6：cloudlink mobile
    *
    * @return $this
    */
    public function setClientType($clientType)
    {
        $this->container['clientType'] = $clientType;
        return $this;
    }

    /**
    * Gets checkType
    *  校验类型。默认值：0。 * 0：登录 * 1：忘记密码
    *
    * @return int|null
    */
    public function getCheckType()
    {
        return $this->container['checkType'];
    }

    /**
    * Sets checkType
    *
    * @param int|null $checkType 校验类型。默认值：0。 * 0：登录 * 1：忘记密码
    *
    * @return $this
    */
    public function setCheckType($checkType)
    {
        $this->container['checkType'] = $checkType;
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

