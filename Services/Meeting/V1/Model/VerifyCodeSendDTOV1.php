<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VerifyCodeSendDTOV1 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VerifyCodeSendDTOV1';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * user  用户身份信息（手机号码或邮箱帐号或用户真实帐号）。 > 必须和发送滑块验证码时带的用户身份信息相同。
    * sendMethod  验证码发送方式。 user类型是用户真实帐号时必选；如果没有选择的话，优先短信方式。 * sms：短信方式 * email：邮件方式
    * token  访问Token字符串。通过[[校验滑块验证码](https://support.huaweicloud.com/api-meeting/meeting_21_0101.html)](tag:hws)[[校验滑块验证码](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0101.html)](tag:hk) 接口获取。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'user' => 'string',
            'sendMethod' => 'string',
            'token' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * user  用户身份信息（手机号码或邮箱帐号或用户真实帐号）。 > 必须和发送滑块验证码时带的用户身份信息相同。
    * sendMethod  验证码发送方式。 user类型是用户真实帐号时必选；如果没有选择的话，优先短信方式。 * sms：短信方式 * email：邮件方式
    * token  访问Token字符串。通过[[校验滑块验证码](https://support.huaweicloud.com/api-meeting/meeting_21_0101.html)](tag:hws)[[校验滑块验证码](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0101.html)](tag:hk) 接口获取。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'user' => null,
        'sendMethod' => null,
        'token' => null
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
    * user  用户身份信息（手机号码或邮箱帐号或用户真实帐号）。 > 必须和发送滑块验证码时带的用户身份信息相同。
    * sendMethod  验证码发送方式。 user类型是用户真实帐号时必选；如果没有选择的话，优先短信方式。 * sms：短信方式 * email：邮件方式
    * token  访问Token字符串。通过[[校验滑块验证码](https://support.huaweicloud.com/api-meeting/meeting_21_0101.html)](tag:hws)[[校验滑块验证码](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0101.html)](tag:hk) 接口获取。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'user' => 'user',
            'sendMethod' => 'sendMethod',
            'token' => 'token'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * user  用户身份信息（手机号码或邮箱帐号或用户真实帐号）。 > 必须和发送滑块验证码时带的用户身份信息相同。
    * sendMethod  验证码发送方式。 user类型是用户真实帐号时必选；如果没有选择的话，优先短信方式。 * sms：短信方式 * email：邮件方式
    * token  访问Token字符串。通过[[校验滑块验证码](https://support.huaweicloud.com/api-meeting/meeting_21_0101.html)](tag:hws)[[校验滑块验证码](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0101.html)](tag:hk) 接口获取。
    *
    * @var string[]
    */
    protected static $setters = [
            'user' => 'setUser',
            'sendMethod' => 'setSendMethod',
            'token' => 'setToken'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * user  用户身份信息（手机号码或邮箱帐号或用户真实帐号）。 > 必须和发送滑块验证码时带的用户身份信息相同。
    * sendMethod  验证码发送方式。 user类型是用户真实帐号时必选；如果没有选择的话，优先短信方式。 * sms：短信方式 * email：邮件方式
    * token  访问Token字符串。通过[[校验滑块验证码](https://support.huaweicloud.com/api-meeting/meeting_21_0101.html)](tag:hws)[[校验滑块验证码](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0101.html)](tag:hk) 接口获取。
    *
    * @var string[]
    */
    protected static $getters = [
            'user' => 'getUser',
            'sendMethod' => 'getSendMethod',
            'token' => 'getToken'
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
        $this->container['sendMethod'] = isset($data['sendMethod']) ? $data['sendMethod'] : null;
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
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
            if (!is_null($this->container['sendMethod']) && (mb_strlen($this->container['sendMethod']) > 64)) {
                $invalidProperties[] = "invalid value for 'sendMethod', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['sendMethod']) && (mb_strlen($this->container['sendMethod']) < 0)) {
                $invalidProperties[] = "invalid value for 'sendMethod', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['token']) && (mb_strlen($this->container['token']) > 255)) {
                $invalidProperties[] = "invalid value for 'token', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['token']) && (mb_strlen($this->container['token']) < 0)) {
                $invalidProperties[] = "invalid value for 'token', the character length must be bigger than or equal to 0.";
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
    *  用户身份信息（手机号码或邮箱帐号或用户真实帐号）。 > 必须和发送滑块验证码时带的用户身份信息相同。
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
    * @param string $user 用户身份信息（手机号码或邮箱帐号或用户真实帐号）。 > 必须和发送滑块验证码时带的用户身份信息相同。
    *
    * @return $this
    */
    public function setUser($user)
    {
        $this->container['user'] = $user;
        return $this;
    }

    /**
    * Gets sendMethod
    *  验证码发送方式。 user类型是用户真实帐号时必选；如果没有选择的话，优先短信方式。 * sms：短信方式 * email：邮件方式
    *
    * @return string|null
    */
    public function getSendMethod()
    {
        return $this->container['sendMethod'];
    }

    /**
    * Sets sendMethod
    *
    * @param string|null $sendMethod 验证码发送方式。 user类型是用户真实帐号时必选；如果没有选择的话，优先短信方式。 * sms：短信方式 * email：邮件方式
    *
    * @return $this
    */
    public function setSendMethod($sendMethod)
    {
        $this->container['sendMethod'] = $sendMethod;
        return $this;
    }

    /**
    * Gets token
    *  访问Token字符串。通过[[校验滑块验证码](https://support.huaweicloud.com/api-meeting/meeting_21_0101.html)](tag:hws)[[校验滑块验证码](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0101.html)](tag:hk) 接口获取。
    *
    * @return string|null
    */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
    * Sets token
    *
    * @param string|null $token 访问Token字符串。通过[[校验滑块验证码](https://support.huaweicloud.com/api-meeting/meeting_21_0101.html)](tag:hws)[[校验滑块验证码](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0101.html)](tag:hk) 接口获取。
    *
    * @return $this
    */
    public function setToken($token)
    {
        $this->container['token'] = $token;
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

