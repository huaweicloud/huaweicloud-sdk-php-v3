<?php

namespace HuaweiCloud\SDK\IdentityCenterOIDC\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StartDeviceAuthorizationResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StartDeviceAuthorizationResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * deviceCode  设备在轮询会话令牌时使用的设备码
    * expiresIn  设备码失效时间（以秒为单位）
    * interval  指示轮询会话时，客户端在两次尝试之间必须等待的秒数
    * userCode  一次性用户验证码。授权正在使用的设备时需要此操作
    * verificationUri  使用一次性用户验证码授权设备的验证页面的URI
    * verificationUriComplete  客户端可用于自动启动浏览器的备用URL。此过程跳过用户访问验证页面并输入代码的手动步骤
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'deviceCode' => 'string',
            'expiresIn' => 'int',
            'interval' => 'int',
            'userCode' => 'string',
            'verificationUri' => 'string',
            'verificationUriComplete' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * deviceCode  设备在轮询会话令牌时使用的设备码
    * expiresIn  设备码失效时间（以秒为单位）
    * interval  指示轮询会话时，客户端在两次尝试之间必须等待的秒数
    * userCode  一次性用户验证码。授权正在使用的设备时需要此操作
    * verificationUri  使用一次性用户验证码授权设备的验证页面的URI
    * verificationUriComplete  客户端可用于自动启动浏览器的备用URL。此过程跳过用户访问验证页面并输入代码的手动步骤
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'deviceCode' => null,
        'expiresIn' => 'int32',
        'interval' => 'int32',
        'userCode' => null,
        'verificationUri' => null,
        'verificationUriComplete' => null
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
    * deviceCode  设备在轮询会话令牌时使用的设备码
    * expiresIn  设备码失效时间（以秒为单位）
    * interval  指示轮询会话时，客户端在两次尝试之间必须等待的秒数
    * userCode  一次性用户验证码。授权正在使用的设备时需要此操作
    * verificationUri  使用一次性用户验证码授权设备的验证页面的URI
    * verificationUriComplete  客户端可用于自动启动浏览器的备用URL。此过程跳过用户访问验证页面并输入代码的手动步骤
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'deviceCode' => 'device_code',
            'expiresIn' => 'expires_in',
            'interval' => 'interval',
            'userCode' => 'user_code',
            'verificationUri' => 'verification_uri',
            'verificationUriComplete' => 'verification_uri_complete'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * deviceCode  设备在轮询会话令牌时使用的设备码
    * expiresIn  设备码失效时间（以秒为单位）
    * interval  指示轮询会话时，客户端在两次尝试之间必须等待的秒数
    * userCode  一次性用户验证码。授权正在使用的设备时需要此操作
    * verificationUri  使用一次性用户验证码授权设备的验证页面的URI
    * verificationUriComplete  客户端可用于自动启动浏览器的备用URL。此过程跳过用户访问验证页面并输入代码的手动步骤
    *
    * @var string[]
    */
    protected static $setters = [
            'deviceCode' => 'setDeviceCode',
            'expiresIn' => 'setExpiresIn',
            'interval' => 'setInterval',
            'userCode' => 'setUserCode',
            'verificationUri' => 'setVerificationUri',
            'verificationUriComplete' => 'setVerificationUriComplete'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * deviceCode  设备在轮询会话令牌时使用的设备码
    * expiresIn  设备码失效时间（以秒为单位）
    * interval  指示轮询会话时，客户端在两次尝试之间必须等待的秒数
    * userCode  一次性用户验证码。授权正在使用的设备时需要此操作
    * verificationUri  使用一次性用户验证码授权设备的验证页面的URI
    * verificationUriComplete  客户端可用于自动启动浏览器的备用URL。此过程跳过用户访问验证页面并输入代码的手动步骤
    *
    * @var string[]
    */
    protected static $getters = [
            'deviceCode' => 'getDeviceCode',
            'expiresIn' => 'getExpiresIn',
            'interval' => 'getInterval',
            'userCode' => 'getUserCode',
            'verificationUri' => 'getVerificationUri',
            'verificationUriComplete' => 'getVerificationUriComplete'
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
        $this->container['deviceCode'] = isset($data['deviceCode']) ? $data['deviceCode'] : null;
        $this->container['expiresIn'] = isset($data['expiresIn']) ? $data['expiresIn'] : null;
        $this->container['interval'] = isset($data['interval']) ? $data['interval'] : null;
        $this->container['userCode'] = isset($data['userCode']) ? $data['userCode'] : null;
        $this->container['verificationUri'] = isset($data['verificationUri']) ? $data['verificationUri'] : null;
        $this->container['verificationUriComplete'] = isset($data['verificationUriComplete']) ? $data['verificationUriComplete'] : null;
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
    * Gets deviceCode
    *  设备在轮询会话令牌时使用的设备码
    *
    * @return string|null
    */
    public function getDeviceCode()
    {
        return $this->container['deviceCode'];
    }

    /**
    * Sets deviceCode
    *
    * @param string|null $deviceCode 设备在轮询会话令牌时使用的设备码
    *
    * @return $this
    */
    public function setDeviceCode($deviceCode)
    {
        $this->container['deviceCode'] = $deviceCode;
        return $this;
    }

    /**
    * Gets expiresIn
    *  设备码失效时间（以秒为单位）
    *
    * @return int|null
    */
    public function getExpiresIn()
    {
        return $this->container['expiresIn'];
    }

    /**
    * Sets expiresIn
    *
    * @param int|null $expiresIn 设备码失效时间（以秒为单位）
    *
    * @return $this
    */
    public function setExpiresIn($expiresIn)
    {
        $this->container['expiresIn'] = $expiresIn;
        return $this;
    }

    /**
    * Gets interval
    *  指示轮询会话时，客户端在两次尝试之间必须等待的秒数
    *
    * @return int|null
    */
    public function getInterval()
    {
        return $this->container['interval'];
    }

    /**
    * Sets interval
    *
    * @param int|null $interval 指示轮询会话时，客户端在两次尝试之间必须等待的秒数
    *
    * @return $this
    */
    public function setInterval($interval)
    {
        $this->container['interval'] = $interval;
        return $this;
    }

    /**
    * Gets userCode
    *  一次性用户验证码。授权正在使用的设备时需要此操作
    *
    * @return string|null
    */
    public function getUserCode()
    {
        return $this->container['userCode'];
    }

    /**
    * Sets userCode
    *
    * @param string|null $userCode 一次性用户验证码。授权正在使用的设备时需要此操作
    *
    * @return $this
    */
    public function setUserCode($userCode)
    {
        $this->container['userCode'] = $userCode;
        return $this;
    }

    /**
    * Gets verificationUri
    *  使用一次性用户验证码授权设备的验证页面的URI
    *
    * @return string|null
    */
    public function getVerificationUri()
    {
        return $this->container['verificationUri'];
    }

    /**
    * Sets verificationUri
    *
    * @param string|null $verificationUri 使用一次性用户验证码授权设备的验证页面的URI
    *
    * @return $this
    */
    public function setVerificationUri($verificationUri)
    {
        $this->container['verificationUri'] = $verificationUri;
        return $this;
    }

    /**
    * Gets verificationUriComplete
    *  客户端可用于自动启动浏览器的备用URL。此过程跳过用户访问验证页面并输入代码的手动步骤
    *
    * @return string|null
    */
    public function getVerificationUriComplete()
    {
        return $this->container['verificationUriComplete'];
    }

    /**
    * Sets verificationUriComplete
    *
    * @param string|null $verificationUriComplete 客户端可用于自动启动浏览器的备用URL。此过程跳过用户访问验证页面并输入代码的手动步骤
    *
    * @return $this
    */
    public function setVerificationUriComplete($verificationUriComplete)
    {
        $this->container['verificationUriComplete'] = $verificationUriComplete;
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

